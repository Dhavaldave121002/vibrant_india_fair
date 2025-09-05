<?php
    include "include/head_link.php";
    ?>
<?php  
include 'admin/includes/db.php';


// Check if subclass is passed via GET parameter
$subclass = isset($_GET['subclass']) ? $_GET['subclass'] : '';

// Use prepared statement to prevent SQL injection
if (!empty($subclass)) {
    $stmt = $conn->prepare("SELECT * FROM vendors WHERE subclass = ?");
    $stmt->bind_param("s", $subclass);
} else {
    $stmt = $conn->prepare("SELECT * FROM vendors");
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '<div class="row">'; // Bootstrap grid row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4 mb-4"> 
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="secondary-title">' . htmlspecialchars($row['company_name']) . '</h5>
                        <h6 class="card-subtitle section-text-title mb-2 text-muted">' . htmlspecialchars($row['first_name']) . ' ' . htmlspecialchars($row['last_name']) . '</h6>
                        <p class="section-text-title">
                            <strong><i class="fa-solid fa-square-envelope"></i></strong> ' . htmlspecialchars($row['email']) . '<br>
                            <strong><i class="fa-solid fa-phone-volume"></i></strong> ' . htmlspecialchars($row['phone']) . '<br>
                            <strong><i class="fa-solid fa-message"></i></strong> ' . htmlspecialchars($row['message']) . '
                        </p>
                    </div>
                </div>
            </div>';
    }
    echo '</div>'; // Close Bootstrap grid row
} else {
    echo '<p>No vendors found for this category.</p>';
}

$stmt->close();
$conn->close();
?>
