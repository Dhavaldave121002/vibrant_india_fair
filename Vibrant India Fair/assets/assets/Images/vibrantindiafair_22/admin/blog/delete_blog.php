<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Delete image file if needed (optional)
    $imgQuery = "SELECT image FROM blogs WHERE id = $id";
    $imgResult = $conn->query($imgQuery);
    if ($imgRow = $imgResult->fetch_assoc()) {
        $imgPath = "../../assets/images/blog/" . $imgRow['image'];
        if (file_exists($imgPath)) {
            unlink($imgPath);
        }
    }

    // Delete blog
    $sql = "DELETE FROM blogs WHERE id = $id";
    if ($conn->query($sql)) {
        header("Location: showblog.php?msg=deleted");
        exit();
    } else {
        echo "Error deleting blog.";
    }
} else {
    echo "Invalid ID.";
}
?>
