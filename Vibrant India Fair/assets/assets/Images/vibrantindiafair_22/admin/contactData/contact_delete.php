<?php
include('../includes/db.php');

if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);

    $sql = "DELETE FROM contacts WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("SQL error: " . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: contact_table.php?deleted=success");
        exit();
    } else {
        echo "Error deleting record.";
    }
}
?>