<?php
session_start();
header("Content-Type: application/json"); // Ensure JSON response

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "Unauthorized access."]);
    exit;
}

// Define the cache directory
$cacheDir = __DIR__ . '/cache/';

// Check if the cache directory exists
if (!is_dir($cacheDir)) {
    echo json_encode(["status" => "error", "message" => "Cache directory not found."]);
    exit;
}

// Delete all files in the cache directory
$files = glob($cacheDir . '*'); // Get all files in the cache directory
foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file); // Delete the file
    }
}

// Return success message
echo json_encode(["status" => "success", "message" => "Cache cleared successfully."]);
exit;
?>
