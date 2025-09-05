<?php
require "admin/includes/db.php"; // Make sure DB is available for query

// Validate ID parameter
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: blog.php");
    exit();
}

$id = intval($_GET['id']);

// Fetch main blog post
$sql = "SELECT blogs.*, blog_categories.name AS cat_name FROM blogs
        JOIN blog_categories ON blogs.category_blog_id = blog_categories.id
        WHERE blogs.id = $id";
$res = $conn->query($sql);

if ($res->num_rows === 0) {
    header("Location: blog.php");
    exit();
}

$row = $res->fetch_assoc();
$date = date("F d, Y", strtotime($row['created_at']));

// Fetch all data needed before HTML starts
$tags = [];
$tags_result = $conn->query("SELECT * FROM blog_categories");
while ($tag = $tags_result->fetch_assoc()) {
    $tags[] = $tag;
}

$recent_posts = [];
$recent_result = $conn->query("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 5");
while ($post = $recent_result->fetch_assoc()) {
    $recent_posts[] = $post;
}

// Now we can safely include header and output HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($row['title']) ?> - Blog</title>
    <?php include "include/header.php";?>
</head>
<body>
    <section class="section-margin">
    <div class="container-fluid">
        <div class="row g-3">
            <!-- Left Part -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 order-2 order-md-1">
                <div class="blog-dtls-left-part-body">
                    <!-- Tags Section -->
                    <div class="blog-dtls-left-part-box">
                        <div class="secondary-title">Category :</div>
                        <div class="blog-dtls-tag-link-box mt-3">
                            <?php foreach ($tags as $tag): ?>
                                <div class="p-1"><a class="blog-dtls-tag-link" href="?category=<?= $tag['id'] ?>"><?= htmlspecialchars($tag['name']) ?></a></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Recent Posts Section -->
                    <div class="blog-dtls-left-part-box mt-3">
                        <div class="secondary-title">Recent Posts :</div>
                        <div class="row g-3 mt-1">
                            <?php foreach ($recent_posts as $post): ?>
                                <?php $post_date = date("F d, Y", strtotime($post['created_at'])); ?>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-5">
                                    <div class="blog-dtls-post-main-box">
                                        <div class="blog-dtls-post-img-box">
                                            <img class="blog-dtls-post-img" src="assets/images/blog/<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-5">
                                    <div class="blog-dtls-post-date"><?= $post_date ?></div>
                                    <a class="blog-dtls-post-link" href="blog_detail.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Part -->
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 order-1 order-md-2">
                <div class="blog-dtls-right-part-body">
                    <!-- Blog Image Section -->
                    <div class="blog-dtls-img-box">
                        <img class="blog-dtls-img" src="assets/images/blog/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                    </div>
                    <!-- Category and Date Section -->
                    <div class="blog-dtls-back-color-box">
                        <div class="blog-dtls-back-color-content-box">
                            <div class="back-color-text-box">
                                <div class="back-color-section-text-title">Category</div>
                                <a href="?category=<?= $row['category_blog_id'] ?>" class="back-color-section-text-content"><?= htmlspecialchars($row['cat_name']) ?></a>
                            </div>
                            <div class="back-color-text-box">
                                <div class="back-color-section-text-title">Date Posted</div>
                                <div class="back-color-section-text-content"><?= date("F d, Y", strtotime($row['created_at'])) ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Content Section -->
                    <div class="secondary-title mt-2">Posts</div>
                    <div class="section-text-content"><?= $row['content'] ?></div>
                    <!-- Quote Section -->
                    <!--<div class="blog-dtls-back-color-box mt-3">-->
                    <!--    <div class="back-color-section-text-title p-3"><?= $row['content'] ?></div>-->
                    <!--</div>-->
                    <!-- Share Section -->
                    <div class="blog-dtls-share-body mt-3">
                        <div class="blog-dtls-share-tag-box">
                            <div class="share-tag-secondary-title">Category :</div>
                            <div class="blog-dtls-tag-link-box">
                                <?php foreach ($tags as $tag): ?>
                                    <div class="p-1"><a class="blog-dtls-tag-link" href="?category=<?= $tag['id'] ?>"><?= htmlspecialchars($tag['name']) ?></a></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="blog-dtls-share-tag-box">
                            <div class="share-tag-secondary-title">Share it :</div>
                            <a class="blog-dtls-share-tag-link" href="#">
                                <img class="blog-dtls-share-tag-link-img" src="assets/images/icon/instagram.jpg" alt="Instagram">
                            </a>
                            <a class="blog-dtls-share-tag-link" href="#">
                                <img class="blog-dtls-share-tag-link-img" src="assets/images/icon/facebook.jpg" alt="Facebook">
                            </a>
                            <a class="blog-dtls-share-tag-link" href="#">
                                <img class="blog-dtls-share-tag-link-img" src="assets/images/icon/video.jpg" alt="Video">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>