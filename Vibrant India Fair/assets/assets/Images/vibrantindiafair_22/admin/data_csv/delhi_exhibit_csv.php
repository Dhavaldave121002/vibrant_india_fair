<?php
include '../includes/db.php'; // Include the database connection

// Set headers for CSV download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=delhi_exhibit_data.csv');

// Create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// Fetch data from the database
$sql = "SELECT * FROM delhi_exhibit_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the column headings
    fputcsv($output, array(
        'Id', 'Participation', 'Company Name', 'Booth Area', 'Booth Type', 'Opening', 
        'Brand Name', 'Product Detail', 'Title', 'First Name', 'Last Name', 'Designation', 
        'Mobile', 'Address', 'City', 'State', 'Postal Code', 'Country', 'Resource', 'Email'
    ));

    // Output each row of the data
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, array(
            $row['id'], $row['participation_type'], $row['company_name'], $row['booth_area'], 
            $row['booth_type'], $row['opening_type'], $row['brand_name'], $row['product_detail'], 
            $row['title'], $row['first_name'], $row['last_name'], $row['designation'], 
            $row['mobile'], $row['address_line1'], $row['city'], $row['region'], 
            $row['postal_code'], $row['country'], $row['source'], $row['email']
        ));
    }
} else {
    // If no data found, output a message
    fputcsv($output, array('No data found'));
}

fclose($output); // Close the file pointer
exit; // Stop further execution
?>