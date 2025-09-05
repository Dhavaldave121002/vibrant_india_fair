<?php
session_start();
require '../includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $designation = trim($_POST['designation'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $city = trim($_POST['city'] ?? '');

    $errors = [];
    $old_input = $_POST; // Store old input

    //  Validate required fields
    if (empty($_POST['name'])) {
        $errors['name'] = "*Name is required.";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }

    if (empty($_POST['company'])) {
        $errors['company'] = "*Company name is required.";
    } else {
        $company = htmlspecialchars($_POST['company']);
    }

    if (empty($_POST['designation'])) {
        $errors['designation'] = "*Designation is required.";
    } else {
        $designation = htmlspecialchars($_POST['designation']);
    }

    if (empty($_POST['city'])) {
        $errors['city'] = "*City is required.";
    } else {
        $city = htmlspecialchars($_POST['city']);
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "*Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "*Invalid email address.";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    if (empty($_POST['phone'])) {
        $errors['phone'] = "*Phone number is required.";
    } elseif (!preg_match('/^[6-9]\d{9}$/', $_POST['phone'])) {
        $errors['phone'] = "*Invalid phone number. It must be 10 digits and start with 6-9.";
    } else {
        $phone = htmlspecialchars($_POST['phone']);
    }



    //  Redirect back if validation fails
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_input'] = $old_input; // Store input values
        header("Location: ../../chennai_visit_reg.php");
        exit;
    }

    //  Insert into database using prepared statements



    $stmt = $conn->prepare("INSERT INTO chennai_visit_data (name, company, designation, phone, email, city) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssss", $name, $company, $designation, $phone, $email, $city);

        if ($stmt->execute()) {
            $visitor_id = $conn->insert_id;
            $stmt->close();

            $_SESSION['form_success'] = true;
            header("Location: ../../chennai_visit_reg.php?visitor_id=" . $visitor_id);
            exit;
        } else {
            $stmt->close();
            $_SESSION['error'] = "❌ Database execution error. Please try again.";
        }
    } else {
        $_SESSION['error'] = "❌ Failed to prepare the SQL statement.";
    }

    header("Location: ../../chennai_visit_reg.php");
    exit;


}

//  Delete Functionality
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']); // Ensure the ID is an integer

    if ($delete_id > 0) { // Validate the ID
        $stmt = $conn->prepare("DELETE FROM chennai_visit_data WHERE id = ?");
        $stmt->bind_param("i", $delete_id);

        if ($stmt->execute()) {
            $stmt->close();
            $_SESSION['success'] = "Record deleted successfully.";
            header("Location: ../tables/chennai_visit_table.php");
            exit();
        } else {
            $_SESSION['error'] = "Error deleting record.";
            header("Location: ../tables/chennai_visit_table.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid record ID.";
        header("Location: ../tables/chennai_visit_table.php");
        exit();
    }

}
?>