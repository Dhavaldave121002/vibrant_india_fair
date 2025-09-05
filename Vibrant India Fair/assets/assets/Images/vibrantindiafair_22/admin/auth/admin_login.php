<?php
session_start();
include '../includes/db.php'; 

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and Password are required.";
        header("Location: admin_login.php");
        exit();
    }

    // Validate Email Format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: admin_login.php");
        exit();
    }

    // Fetch User
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $email, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Login successful!";
            
            // Redirect to Dashboard
            header("Location: ../admin_dashboard.php"); // Use correct relative path
            exit();
        } else {
            $_SESSION['error'] = "Invalid password.";
        }
    } else {
        $_SESSION['error'] = "User not found.";
    }

    $stmt->close();
    header("Location: admin_login.php");
    exit();
}


// Adding 2 users only if they don’t already exist
$users = [
  ["dhruv@gmail.com", "123456"],
  ["harshil@gmail.com", "12345"],
  ["harshil1@gmail.com", "12345"],
  ["info@vibrantindiafair.com","vibrantindia@$25"],
  ["vibrant@vibrantindiafair.com","vibrantindia@$25"],
];

foreach ($users as $user) {
  list($email, $password) = $user;
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);

  // heck if email already exists
  $check_stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
  $check_stmt->bind_param("s", $email);
  $check_stmt->execute();
  $check_stmt->store_result();
  

  if ($check_stmt->num_rows == 0) {
      // insert user if not found
      $insert_stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
      $insert_stmt->bind_param("ss", $email, $hashed_password);
      $insert_stmt->execute();
      $insert_stmt->close();
  }

  $check_stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="../assets/img/VIFabicon.png"
      type="image/x-icon"
    />
    <title>Admin</title>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      :root {
    --primary-color: #277474;
    --secondary-color: #cce9e9;
    --dark-color: #000;
    --light-color: #fff;
}
      html,
      body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
          background: linear-gradient(
    to right,
    #1f5c5c,   /* darker than primary */
    #277474,   /* your primary color */
    #4c9e9e,   /* lighter blend */
    #cce9e9    /* your secondary color */
  );
      }
      ::selection {
        background: #1a75ff;
        color: #fff;
      }
      .wrapper {
        overflow: hidden;
       max-width: 600px;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
      }
      .wrapper .title-text {
        display: flex;
        width: 200%;
      }
      .wrapper .title {
        width: 50%;
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      }
      
      .wrapper .form-container {
        width: 100%;
        overflow: hidden;
      }
      .form-container .form-inner {
        display: flex;
        width: 200%;
      }
      .form-container .form-inner form {
        width: 50%;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      }
      .form-inner form .field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
      }
      .form-inner form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 15px;
        border-radius: 15px;
        border: 1px solid lightgrey;
        border-bottom-width: 2px;
        font-size: 17px;
        transition: all 0.3s ease;
      }
      .form-inner form .field input:focus {
        border-color: var(--secondary-color);
        
      }
      .form-inner form .field input::placeholder {
        color: var(--primary-color);
        transition: all 0.3s ease;
      }
      form .field input:focus::placeholder {
        color: var(--secondary-color);
      }
      .form-inner form .pass-link {
        margin-top: 5px;
      }
      .form-inner form .signup-link {
        text-align: center;
        margin-top: 30px;
      }
      .form-inner form .pass-link a,
      .form-inner form .signup-link a {
        color:var(--secondary-color);
        text-decoration: none;
      }
      .form-inner form .pass-link a:hover,
      .form-inner form .signup-link a:hover {
        text-decoration: underline;
      }
      form .btn {
        height: 50px;
        width: 100%;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
      }
      form .btn .btn-layer {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
          background: linear-gradient(
    to right,
    #1f5c5c,   /* darker than primary */
    #277474,   /* your primary color */
    #4c9e9e,   /* lighter blend */
    #cce9e9    /* your secondary color */
  );
        border-radius: 15px;
        transition: all 0.4s ease;
      }
      form .btn:hover .btn-layer {
        left: 0;
      }
      form .btn input[type="submit"] {
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        background: none;
        border: none;
        color: #fff;
        padding-left: 0;
        border-radius: 15px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Welcome Admin!</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form  method="POST" class="login">
            <div class="field">
              <input
                type="text"
                name="email"
                placeholder="Email Address"
                required
              />
            </div>
            <div class="field">
              <input
                type="password"
                name="password"
                placeholder="Password"
                required
              />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" />
    </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html> 