<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
session_start();
require '../vendor/autoload.php';
include '../includes/db.php';


// Ensure form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    // Sanitize and validate input
    function clean_input($data)
    {
        return htmlspecialchars(trim($data));
    }

    // Collect form data
    $participation_type = $_POST['participation_type'] ?? '';
    $company_name = $_POST['Companyname'] ?? '';
    $booth_area = $_POST['booth_area'] ?? '';
    $booth_type = $_POST['booth_type'] ?? '';
    $opening_type = $_POST['opening_type'] ?? '';
    $brandNames = $_POST['brandname'] ?? [];
    $productDetails = $_POST['Productdetail'] ?? [];
    $title = $_POST['title'] ?? '';
    $first_name = $_POST['firstname'] ?? '';
    $last_name = $_POST['lastname'] ?? '';
    $designation = $_POST['Designation'] ?? '';
    $mobile = $_POST['exhibitionnumber'] ?? '';
    $address_line1 = $_POST['Addresstype'] ?? '';
    $city = $_POST['city'] ?? '';
    $region = $_POST['Region'] ?? '';
    $postal_code = $_POST['postalcode'] ?? '';
    $country = $_POST['country'] ?? '';
    $source = $_POST['source'] ?? '';
    $email = $_POST['email'] ?? '';

    $errors = [];
    $old_input = $_POST;

    // Validate participation type
    if (empty($participation_type)) {
        $errors['participation_type'] = "Please select participation type";
    } elseif (!in_array($participation_type, ['domestic', 'international'])) {
        $errors['participation_type'] = "Invalid participation type";
    }

    // Validate company name
    if (empty($company_name)) {
        $errors['Companyname'] = "Company name is required";
    } elseif (strlen($company_name) < 2) {
        $errors['Companyname'] = "Company name must be at least 2 characters";
    }

    // Validate booth area
    // if (empty($booth_area)) {
    //     $errors['areaname'] = "Booth area is required";
    // } elseif (!is_numeric($booth_area)) {
    //     $errors['areaname'] = "Booth area must be a number";
    // }
    if (empty($booth_area)) {
        $errors['areaname'] = "Booth area is required";
    }

    // Validate booth type
    if (empty($booth_type)) {
        $errors['booth_type'] = "Booth type is required";
    } elseif (!in_array($booth_type, ['Built-up Booth', 'Raw Space'])) {
        $errors['booth_type'] = "Invalid booth type";
    }

    // Validate opening type
    if (empty($opening_type)) {
        $errors['opening_type'] = "Opening type is required";
    } elseif (!in_array($opening_type, ['Single Slide Open', 'Two Side Open', 'Three Side Open'])) {
        $errors['opening_type'] = "Invalid opening type";
    }

    // Validate brand details
    if (empty($brandNames[0])) {
        $errors['brandname'] = "At least one brand name is required";
    } else {
        foreach ($brandNames as $index => $brand) {
            if (empty($brand)) {
                $errors['brandname_' . $index] = "Brand name is required";
            }
        }
    }

    // Validate product details
    if (empty($productDetails[0])) {
        $errors['Productdetail'] = "At least one product detail is required";
    } else {
        foreach ($productDetails as $index => $product) {
            if (empty($product)) {
                $errors['Productdetail_' . $index] = "Product detail is required";
            }
        }
    }

    // Validate title
    if (empty($title)) {
        $errors['title'] = "Title is required";
    } elseif (!in_array($title, ['Mr.', 'Ms.', 'Mrs.', 'Dr.'])) {
        $errors['title'] = "Invalid title";
    }

    // Validate first name
    if (empty($first_name)) {
        $errors['firstname'] = "First name is required";
    } elseif (strlen($first_name) < 2) {
        $errors['firstname'] = "First name must be at least 2 characters";
    }

    // Validate last name
    if (empty($last_name)) {
        $errors['lastname'] = "Last name is required";
    } elseif (strlen($last_name) < 2) {
        $errors['lastname'] = "Last name must be at least 2 characters";
    }

    // Validate designation
    if (empty($designation)) {
        $errors['Designation'] = "Designation is required";
    } elseif (strlen($designation) < 2) {
        $errors['Designation'] = "Designation must be at least 2 characters";
    }

    // Validate mobile number
    if (empty($mobile)) {
        $errors['exhibitionnumber'] = "Mobile number is required";
    } elseif (!preg_match('/^[0-9]{10,15}$/', $mobile)) {
        $errors['exhibitionnumber'] = "Please enter a valid mobile number (10-15 digits)";
    }

    // Validate address
    if (empty($address_line1)) {
        $errors['Addresstype'] = "Address is required";
    } elseif (strlen($address_line1) < 5) {
        $errors['Addresstype'] = "Address must be at least 5 characters";
    }

    // Validate city
    if (empty($city)) {
        $errors['city'] = "City is required";
    } elseif (strlen($city) < 2) {
        $errors['city'] = "City must be at least 2 characters";
    }

    // Validate region
    if (empty($region)) {
        $errors['Region'] = "State/Region is required";
    } elseif (strlen($region) < 2) {
        $errors['Region'] = "State/Region must be at least 2 characters";
    }

    // Validate postal code
    if (empty($postal_code)) {
        $errors['postalcode'] = "Postal code is required";
    } elseif (!preg_match('/^[0-9]{4,10}$/', $postal_code)) {
        $errors['postalcode'] = "Please enter a valid postal code";
    }

    // Validate country
    if (empty($country)) {
        $errors['country'] = "Country is required";
    }

    // Validate source
    if (empty($source)) {
        $errors['source'] = "Please select how you heard about us";
    } elseif (!in_array($source, ['Whatsapp', 'SocialMedia', 'Emailers', 'Newspapers', 'FriendsAndFamily', 'Other'])) {
        $errors['source'] = "Invalid source selection";
    }

    // Validate email
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address";
    }

    // If there are errors, redirect back to form
    if (!empty($errors)) {
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['old_input'] = $old_input;
        header("Location: ../../delhi_exhibit_reg.php");
        exit();
    }


    // Convert brand names and product details into comma-separated strings
    $brand_name_str = implode(", ", array_map('clean_input', $brandNames));
    $product_detail_str = implode(", ", array_map('clean_input', $productDetails));

    // Check database connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement (Insert Only One Row)
    $stmt = $conn->prepare("INSERT INTO  delhi_exhibit_data
        (participation_type, company_name, booth_area, booth_type, opening_type, brand_name, product_detail, title, first_name, last_name, designation, mobile, address_line1, city, region, postal_code, country, source, email) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters and execute
    $stmt->bind_param(
        "sssssssssssssssssss",
        $participation_type,
        $company_name,
        $booth_area,
        $booth_type,
        $opening_type,
        $brand_name_str,
        $product_detail_str,
        $title,
        $first_name,
        $last_name,
        $designation,
        $mobile,
        $address_line1,
        $city,
        $region,
        $postal_code,
        $country,
        $source,
        $email
    );

    if ($stmt->execute()) {
        // Send Confirmation Email
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            // $mail->Host = 'smtp.gmail.com'; 
            // $mail->SMTPAuth = true;
            // $mail->Username = 'harshilpatel4010@gmail.com'; 
            // $mail->Password = 'vrwf xkjw afdt aopn'; // Use App Password for security
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $mail->Port = 587;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // or your domain mail server
            $mail->SMTPAuth = true;
            $mail->Username = 'dhd44637@gmail.com';
            $mail->Password = 'vhsu umpr bxtn qoug'; // App Password or Email Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // 📩 1. Send Confirmation Email to User
            $mail->setFrom('dhd44637@gmail.com', 'Vibrant India Fair');
            $mail->addAddress($email, "$first_name $last_name");
            //  $mail->addAddress('vibrant@vibrantindiafair.com', 'Vibrant India Fair');
            $mail->Subject = "Delhi Exhibition Registration Confirmation";
            $mail->isHTML(true);
            $mail->Body = "
                <h3>Dear $first_name $last_name,</h3>
                <p>Thank you for registering for Delhi Exhibition.</p>
                <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
                    <tr><th>Field</th><th>Value</th></tr>
                    <tr><td><strong>Company Name</strong></td><td>$company_name</td></tr>
                    <tr><td><strong>Booth Area</strong></td><td>$booth_area</td></tr>
                    <tr><td><strong>Booth Type</strong></td><td>$booth_type</td></tr>
                    <tr><td><strong>Brand Names</strong></td><td>$brand_name_str</td></tr>
                    <tr><td><strong>Product Details</strong></td><td>$product_detail_str</td></tr>
                    <tr><td><strong>Email</strong></td><td>$email</td></tr>
                    <tr><td><strong>Phone</strong></td><td>$mobile</td></tr>
                </table>
                <p>We look forward to your participation.</p>
                <p>Best Regards,</p>
                <p>Vibrant India Fair - 2025</p>
            ";
            $mail->send();

            // 📩 2. Send Notification Email to Owner
            $mail->clearAddresses();
            $mail->addAddress('dhd44637@gmail.com', 'Owner');
            // $mail->addAddress('vibrant@vibrantindiafair.com', 'Owner');
            // $mail->addAddress('harshilpatel4010@gmail.com', 'Owner');
            $mail->Subject = "New Delhi Exhibition Registration - $first_name $last_name";
            $mail->isHTML(true);

            $mail->Body = "
               <h3>New Registration Details</h3>
                <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
                    <tr><th>Field</th><th>Value</th></tr>
                    <tr><td><strong>Participation Type</strong></td><td>$participation_type</td></tr>
                    <tr><td><strong>Company Name</strong></td><td>$company_name</td></tr>
                    <tr><td><strong>Booth Area</strong></td><td>$booth_area</td></tr>
                    <tr><td><strong>Booth Type</strong></td><td>$booth_type</td></tr>
                    <tr><td><strong>Opening Type</strong></td><td>$opening_type</td></tr>
                    <tr><td><strong>Brand Names</strong></td><td>$brand_name_str</td></tr>
                    <tr><td><strong>Product Details</strong></td><td>$product_detail_str</td></tr>
                    <tr><td><strong>Title</strong></td><td>$title</td></tr>
                    <tr><td><strong>First Name</strong></td><td>$first_name</td></tr>
                    <tr><td><strong>Last Name</strong></td><td>$last_name</td></tr>
                    <tr><td><strong>Designation</strong></td><td>$designation</td></tr>
                    <tr><td><strong>Mobile</strong></td><td>$mobile</td></tr>
                    <tr><td><strong>Address</strong></td><td>$address_line1</td></tr>
                    <tr><td><strong>City</strong></td><td>$city</td></tr>
                    <tr><td><strong>Region</strong></td><td>$region</td></tr>
                    <tr><td><strong>Postal Code</strong></td><td>$postal_code</td></tr>
                    <tr><td><strong>Country</strong></td><td>$country</td></tr>
                    <tr><td><strong>Source</strong></td><td>$source</td></tr>
                    <tr><td><strong>Email</strong></td><td>$email</td></tr>
                </table>
                <p><strong>Submitted on:</strong> " . date('Y-m-d H:i:s') . "</p>
            ";

            $mail->send();
            $_SESSION['form_success'] = true;
            header("Location: ../../delhi_exhibit_reg.php");
            exit();
        } catch (Exception $e) {
            die("Email sending failed: " . $mail->ErrorInfo);
        }
    } else {
        die("Database insertion failed: " . $stmt->error);
    }

} else {
    header("Location: ../../delhi_exhibit_reg.php");
}


?>