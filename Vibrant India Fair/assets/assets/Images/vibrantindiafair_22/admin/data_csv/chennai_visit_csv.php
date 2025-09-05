<?php
include '../includes/db.php'; // Include the database connection

// Set headers for CSV download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=chennai_visitor_data.csv');

// Create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// Fetch data from the database
$sql = "SELECT * FROM chennai_visit_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the column headings
    fputcsv($output, array('Id', 'Name', 'Company', 'Designation', 'Phone', 'Email', 'City'));

    // Output each row of the data
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
} else {
    // If no data found, output a message
    fputcsv($output, array('No data found'));
}

// Close the file pointer
fclose($output);

// Exit the script
exit();
?>