<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <?php include "include/header.php"; ?>
    
</head>
<body>
 
    <section class="section-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>Latest Blog Posts</h2>
                </div>
            </div>
            
            <div class="row g-3">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                    <div class="blog-left-part-body">
                        <div class="row g-3">
                            <?php
                            // Initialize where clause
                             include "admin/includes/db.php";
                            $where = '';
                            $params = [];
                            $types = '';
                            
                            // Check if category filter is applied
                            if (!empty($_GET['category'])) {
                                $category_id = intval($_GET['category']);
                                $where = "WHERE blogs.category_blog_id = ?";
                                $params[] = $category_id;
                                $types .= 'i';
                            }
                            
                            // Prepare SQL with parameterized query
                            $sql = "SELECT blogs.*, blog_categories.name AS cat_name FROM blogs
                                    JOIN blog_categories ON blogs.category_blog_id = blog_categories.id
                                    $where
                                    ORDER BY blogs.created_at DESC";
                            
                            // Prepare and execute statement
                            $stmt = $conn->prepare($sql);
                            if (!empty($params)) {
                                $stmt->bind_param($types, ...$params);
                            }
                            $stmt->execute();
                            $result = $stmt->get_result();
                            
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $short_content = substr(strip_tags($row['content']), 0, 150);
                                    $remaining_content = substr(strip_tags($row['content']), 150);
                                    $date = date("F d Y", strtotime($row['created_at']));
                                    $image_path = "assets/images/blog/" . htmlspecialchars($row['image']);
                            ?>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="blog-card-box">
                                    <a class="blog-card-link" href="blog_detail.php?id=<?= $row['id'] ?>"></a>
                                    <div class="blog-card-img-box">
                                        <img class="blog-card-img" src="<?= $image_path ?>" alt="<?= htmlspecialchars($row['title']) ?>" loading="lazy">
                                    </div>
                                    <div class="blog-card-date mt-2"><?= $date ?></div>
                                    <div class="secondary-title"><?= htmlspecialchars($row['cat_name']) ?></div>
                                    <div class="section-text-content">
                                        <?= htmlspecialchars($short_content) ?>
                                        <?php if(!empty($remaining_content)): ?>
                                        <span class="blog-remainingPart blog-hidden-reed-more"><?= htmlspecialchars($remaining_content) ?></span>
                                        <button class="read-more-btn" onclick="toggleText(this)">Read More...</button>
                                        <?php endif; ?>
                                    </div>
                                    <div class="blog-btn-box mt-2">
                                        <a class="blog-btn-link" href="blog_detail.php?id=<?= $row['id'] ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            } else {
                                echo '<div class="col-12"><div class="alert alert-info">No blog posts found in this category.</div></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="blog-right-part-body">
                        <div class="blog-right-part-box mt-3">
                            <div class="secondary-title">Blogs Category:</div>
                            <div class="blog-tags-btn-box mt-3 d-flex flex-wrap gap-2">
                                <!-- All Blogs Button -->
                                <div class="p-1">
                                    <a class="blog-tags-btn-link <?= !isset($_GET['category']) || $_GET['category'] == '' ? 'active' : '' ?>" href="blog">
                                        All Blogs
                                    </a>
                                </div>

                                <!-- Dynamic Category Buttons -->
                                <?php
                                $tags = $conn->query("SELECT * FROM blog_categories");
                                while ($tag = $tags->fetch_assoc()) {
                                    $activeClass = (isset($_GET['category']) && $_GET['category'] == $tag['id']) ? 'active' : '';
                                    echo '<div class="p-1">
                                            <a class="blog-tags-btn-link ' . $activeClass . '" href="?category=' . $tag['id'] . '">' . htmlspecialchars($tag['name']) . '</a>
                                        </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="blog-right-part-box">
                            <div class="secondary-title">Recent Posts:</div>
                            <div class="row g-3 mt-1">
                                <?php
                                $recent_posts = $conn->query("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 3");
                                while ($recent = $recent_posts->fetch_assoc()) {
                                    $recent_date = date("d-m-Y", strtotime($recent['created_at']));
                                    $recent_image_path = "assets/images/blog/" . htmlspecialchars($recent['image']);
                                ?>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-5">
                                    <div class="blog-post-main-box">
                                        <div class="blog-post-box">
                                            <div class="blog-post-img-box">
                                                <img class="blog-post-img" src="<?= $recent_image_path ?>" alt="<?= htmlspecialchars($recent['title']) ?>" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-7">
                                    <div class="blog-card-date"><?= $recent_date ?></div>
                                    <a href="blog_detail.php?id=<?= $recent['id'] ?>" class="blog-card-recent-post-link"><?= htmlspecialchars($recent['title']) ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleText(button) {
            const contentDiv = button.parentElement;
            const hiddenSpan = contentDiv.querySelector('.blog-remainingPart');
            
            if (hiddenSpan.style.display === 'none' || !hiddenSpan.style.display) {
                hiddenSpan.style.display = 'inline';
                button.textContent = 'Read Less';
            } else {
                hiddenSpan.style.display = 'none';
                button.textContent = 'Read More...';
            }
        }
    </script>

<?php include "include/footer.php"; ?>
</body>
</html>