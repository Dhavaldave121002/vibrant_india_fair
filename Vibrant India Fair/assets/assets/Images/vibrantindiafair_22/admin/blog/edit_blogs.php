<?php
include '../includes/db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Validate POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request method");
}

if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("No ID specified");
}

$id = intval($_POST['id']);
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$category_id = $_POST['category_id'] ?? null;
$new_category = trim($_POST['new_category'] ?? '');
$image = $_FILES['image'];

// ✅ If new category is entered, insert and get new category ID
if (!empty($new_category)) {
    $stmt = $conn->prepare("INSERT INTO blog_categories (name) VALUES (?)");
    $stmt->bind_param("s", $new_category);
    $stmt->execute();
    $category_id = $stmt->insert_id;
}

// ✅ Image Handling (optional)
$image_name = '';
if (isset($image['size']) && $image['size'] > 0) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif','image/webp'];
    if (in_array($image['type'], $allowedTypes)) {
        $target_dir = "../../assets/images/blog/";
        $image_name = time() . '_' . basename($image["name"]);
        $target_file = $target_dir . $image_name;

        move_uploaded_file($image["tmp_name"], $target_file);

        // Update with image
        $stmt = $conn->prepare("UPDATE blogs SET title=?, content=?, image=?, category_blog_id=? WHERE id=?");
        $stmt->bind_param("sssii", $title, $content, $image_name, $category_id, $id);
    } else {
        // die("Invalid image type");
        header("Location: edit_blogs.php");
        exit;
    }
} else {
    // Update without image
    $stmt = $conn->prepare("UPDATE blogs SET title=?, content=?, category_blog_id=? WHERE id=?");
    $stmt->bind_param("ssii", $title, $content, $category_id, $id);
}

$stmt->execute();

// ✅ Redirect back
header("Location: showblog.php?updated=1");
exit;
?>
