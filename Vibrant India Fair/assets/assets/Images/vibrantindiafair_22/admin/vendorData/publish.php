<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vendor_id = $_POST['vendor_id'];
    $subclass = $_POST['subclass'];

    if (!empty($subclass)) {
        $stmt = $conn->prepare("UPDATE vendors SET subclass = ? WHERE id = ?");
        $stmt->bind_param("si", $subclass, $vendor_id);

        if ($stmt->execute()) {
            header("Location: vendor_table.php");
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
