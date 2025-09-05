<?php
$host = "localhost";
$user = "root";  // Change this if you have a different MySQL username
$password = "";  // Change this if your MySQL has a password
$database = "vifair";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// $host = "localhost";
// $user = "u258440368_vibrantindia";  // Removed extra quote
// $password = "Vibrantindiafair@2025";
// $database = "u258440368_vifair";

// $conn = new mysqli($host, $user, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>