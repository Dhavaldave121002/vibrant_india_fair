<?php
use Mpdf\Mpdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Load dependencies
require 'phpqrcode/qrlib.php'; // QR Code generator
require '../includes/db.php'; // Database connection

if (!isset($_GET['visitor_id'])) {
  echo json_encode(["status" => "error", "message" => "Missing visitor ID"]);
  exit;
}

$visitor_id = intval($_GET['visitor_id']);
$sql = "SELECT * FROM delhi_visit_data WHERE id = $visitor_id";
$result = mysqli_query($conn, $sql);
$visitor = mysqli_fetch_assoc($result);
// print_r($visitor);die();
if (!$visitor) {
  echo json_encode(["status" => "error", "message" => "Visitor not found"]);
  exit;
}

$name = $visitor['name'];
$email = $visitor['email'];
$phone = $visitor['phone'];

// ✅ Generate QR Code (in-memory)
ob_start();
QRcode::png("Visitor ID: $visitor_id\nName: $name\nEmail: $email\nPhone: $phone", null, QR_ECLEVEL_L, 4, 2);
$qrImage = ob_get_clean();
$base64QR = 'data:image/png;base64,' . base64_encode($qrImage);

// ✅ Generate HTML for PDF
$htmlContent = <<<HTML
<html>
  <body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; text-align: center;">
    <div style="background: white; padding: 20px;">
      <div style="width: 600px; margin: 10px auto; overflow: hidden;">  
        <div style="float: left; width: 300px;">
          <img src="../assets/img/logo2.png" alt="Logo 2" style="max-width: 100%; max-height: 80px; height: auto;" />
        </div>
        <div style="float: right; width: 200px;">
          <img src="../assets/img/logo1.png" alt="Logo 1" style="max-width: 100%; max-height: 80px; height: auto;" />
        </div>
      </div>

      <div style="font-size: 20px; font-weight: bold; color: #000; margin: 20px;">$name</div>
      <div style="font-size: 18px; font-weight: 500; color: #000; margin: 10px;">VISITOR</div>
      
      <img src="$base64QR" alt="QR Code" style="margin-top: 10px; width: 250px; height: 250px;" />

      <table>
        <tr>
          <td style="font-size: 16px; color: #000; padding: 20px 40px; text-align: left;">
            <p><strong>Event Date:</strong> 4th-6th July & 1st-3rd August, 2025</p>
            <p><strong>Event Time:</strong> 10:00 AM to 7:00 PM</p>
            <p><strong>Event Venue:</strong> Yashobhoomi Dwarka, New Delhi & Chennai Trade Center</p>
          </td>
        </tr>
      </table>
      
      <div style="width: 100%; padding: 20px 0px; background-color: #ed930e; font-size: 30px; font-weight: 600; text-align: center;">
        VISITOR
      </div>

      <div style="font-size: 14px; color: #000; font-weight: bold; text-align: left; margin-top: 20px;">
        <p>PLEASE NOTE:</p>
        <ol>
          <li style="font-weight: 200; font-size: 15px; line-height: 20px;">
            Kindly bring a copy of this mail / E-Badge to the Registration Counter on event day.
          </li>
          <li style="font-weight: 200; font-size: 15px; line-height: 20px;">
            Single entry is allowed only for the person who is allotted the E-badge.
          </li>
        </ol>
        <p>See you soon at <strong>VIBRANT INDIA FAIR 2025</strong>!</p>
      </div>
    </div>
  </body>
</html>
HTML;

// ✅ Convert HTML to PDF
$mpdf = new Mpdf();
$mpdf->WriteHTML($htmlContent);
$pdfAttachment = $mpdf->Output('', 'S'); // Generate PDF as a string

// ✅ Send Email with PHPMailer
$mail = new PHPMailer(true);
try {
  // $mail->isSMTP();
  // $mail->Host = 'smtp.gmail.com';
  // $mail->SMTPAuth = true;
  // $mail->Username = 'dhruv.patel02012003@gmail.com';
  // $mail->Password = 'bzbr wsed fdte chfc'; // Use App Password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  // $mail->Port = 587;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com'; // or your domain mail server
  $mail->SMTPAuth = true;
  $mail->Username = 'dhd44637@gmail.com';
  $mail->Password = 'vhsu umpr bxtn qoug'; // App Password or Email Password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  $mail->setFrom('dhd44637@gmail.com', 'Vibrant India Fair');
  $mail->addAddress($email, $name);
  $mail->Subject = "Visitor Registration Confirmation";
  $mail->isHTML(true);
  $mail->Body = "
    <html>
      <body style='font-family: Arial, sans-serif; padding: 20px;'>
        <h2 style='color: #333;'>Vibrant India Fair - Visitor Confirmation</h2>
        <p>Dear <strong>$name</strong>,</p>
        <p>Thank you for registering as a visitor for the <strong>Vibrant India Fair 2025</strong>.</p>

        <h3>Your Registration Details:</h3>
        <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
          <tr>
            <th style='background: #f2f2f2;'>Visitor ID</th>
            <td>$visitor_id</td>
          </tr>
          <tr>
            <th style='background: #f2f2f2;'>Name</th>
            <td>$name</td>
          </tr>
          <tr>
            <th style='background: #f2f2f2;'>Email</th>
            <td>$email</td>
          </tr>
          <tr>
            <th style='background: #f2f2f2;'>Phone</th>
            <td>$phone</td>
          </tr>
        </table>

        <p>Please find your attached <strong>Visitor E-Badge</strong> (PDF with QR Code).</p>
        <p>Looking forward to seeing you at the event!</p>

        <p>Best Regards,<br><strong>Vibrant India Fair Team</strong></p>
      </body>
    </html>";

  $mail->addStringAttachment($pdfAttachment, "Visitor_Badge_$visitor_id.pdf", "base64", "application/pdf");
  $mail->send();

  $mail->clearAddresses(); // Clear previous recipient
  $mail->clearAttachments();

  $mail->addAddress('dhd44637@gmail.com', 'Owner');
  // $mail->addAddress('info@vibrantindiafair.com', 'Owner');
  // $mail->addAddress('harshilpatel4010@gmail.com', 'Owner');
  $mail->Subject = 'New Chennai Exhibition Visitor Registration Confirmation';
  $mail->isHTML(true);
  $mail->Body = "<h3>Your Registration Details:</h3>
        <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
          <tr>
            <th style='background: #f2f2f2;'>Visitor ID</th>
            <td>$visitor_id</td>
          </tr>
          <tr>
            <th style='background: #f2f2f2;'>Name</th>
            <td>$name</td>
          </tr>
          <tr>
            <th style='background: #f2f2f2;'>Email</th>
            <td>$email</td>
          </tr>
          <tr>
            <th style='background: #f2f2f2;'>Phone</th>
            <td>$phone</td>
          </tr>
        </table>";
  $mail->send();
  echo json_encode(["status" => "success"]);
} catch (Exception $e) {
  echo json_encode(["status" => "error", "message" => $mail->ErrorInfo]);
}
?>