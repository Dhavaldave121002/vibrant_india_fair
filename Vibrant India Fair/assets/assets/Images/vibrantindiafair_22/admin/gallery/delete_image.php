<?php
session_start();
include '../includes/db.php'; // make sure you include your DB connection

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    $stmt = $conn->prepare("DELETE FROM gallery WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['delete_success'] = "Image deleted successfully!";
    } else {
        $_SESSION['delete_error'] = "Failed to delete image.";
    }

    $stmt->close();
    header("Location: showimg.php"); // change this to your actual file name
    exit();
}
?>
