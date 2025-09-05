<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Vibrant Indai Fair</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../assets/img/VIFabicon.png"
      type="image/x-icon"
    />


    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
        <link rel="stylesheet" href="editor/summernote-bs5.css">
     <style>
        .toast {
            position: fixed;
            top: 20%;
            left: 40%;
            z-index: 9999;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="../admin_dashboard.php" class="logo">
              <img
                src="../assets/img/VIFair.png"
                alt="navbar brand"
                class="navbar-brand"
                height="50"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
               <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../admin_dashboard.php">
                        <span class="sub-item">Vibrant India Fair</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Tables</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../tables/chennai_exhibit_table.php">
                        <span class="sub-item">Chennai Exhibit Data</span>
                      </a>
                    </li><li>
                      <a href="../tables/chennai_visit_table.php">
                        <span class="sub-item">Chennai visit Data</span>
                      </a>
                    </li><li>
                      <a href="../tables/delhi_exhibit_table.php">
                        <span class="sub-item">Delhi Exhibit Data</span>
                      </a>
                    </li>
                     <li>
                      <a href="tables/delhi_visit_table.php">
                        <span class="sub-item">Delhi visit Data</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#gallery">
                      <i class="fas fa-images"></i>
                      <p>Gallery</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="gallery">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="showImg.php">
                                  <span class="sub-item">ShowImgGallery</span>
                              </a>
                          </li>
                          <li class="active">
                              <a href="upload.php">
                                  <span class="sub-item">GalleryImgUpload</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
               <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#Pdfs">
                      <i class="far fa-file-pdf"></i>
                      <p>Pdfs</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="Pdfs">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="../pdfs/showpdfs.php">
                                  <span class="sub-item">Show Pdfs</span>
                              </a>
                          </li>
                          <li>
                              <a href="../pdfs/uploadpdfs.php">
                                  <span class="sub-item">Pdfs Upload</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#contact">
                  <i class="fas fa-address-book"></i>
                  <p>contact</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="contact">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../contactData/contact_table.php">
                        <span class="sub-item">Contact Data</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#vendor">
                  <i class="fas fa-briefcase"></i>
                  <p>vendor</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="vendor">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../vendorData/vendor_table.php">
                        <span class="sub-item">Vendor Data</span>
                        </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item active submenu">
                <a data-bs-toggle="collapse" href="#blogs">
                  <i class="fab fa-blogger"></i>
                  <p>Blogs</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="blogs">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="showblog.php">
                        <span class="sub-item">BlogShow</span>
                      </a>
                    </li>
                    <li class="active">
                      <a href="uploadblog.php">
                        <span class="sub-item">BlogUpload</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="../admin_dashboard.php" class="logo">
                <img
                  src="../assets/img/VIFair.png"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="50"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="../assets/img/VIFabicon.png"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Vibrant India Fair</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="../assets/img/VIFabicon.png"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Vibrant India Fair</h4>
                            <p class="text-muted">info@vibrantindiafair.com</p>
                           <a class="btn btn-xs btn-secondary btn-sm" href="../auth/admin_logout.php">Logout</a>
                          </div>
                        </div>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">BlogsUpload</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="../admin_dashboard.php">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Blogs</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="showblog.php">BlogShow</a>
                </li>
              </ul>
            </div>
            <div class="row">
<?php
include '../includes/db.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    // Validate inputs
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category_blog_id = isset($_POST['categoryblog_id']) ? intval($_POST['categoryblog_id']) : null;
    $new_category = trim($_POST['new_category'] ?? '');

    // Handle category selection/creation
    if (!empty($new_category)) {
        $stmt = $conn->prepare("INSERT INTO blog_categories (name) VALUES (?)");
        $stmt->bind_param("s", $new_category);
        if (!$stmt->execute()) {
            die("Error creating new category: " . $conn->error);
        }
        $category_blog_id = $conn->insert_id;
    } elseif (empty($category_blog_id)) {
        die("Please select a category or create a new one");
    }

    // Check for uploaded file
    if (!isset($_FILES['image'])) {
        die("No file was uploaded");
    }

    $file = $_FILES['image'];

    // Handle file upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $error_messages = [
            UPLOAD_ERR_INI_SIZE   => "File is too large (INI size)",
            UPLOAD_ERR_FORM_SIZE  => "File is too large (Form size)",
            UPLOAD_ERR_PARTIAL    => "File was only partially uploaded",
            UPLOAD_ERR_NO_FILE    => "No file was uploaded",
            UPLOAD_ERR_NO_TMP_DIR => "Missing temporary folder",
            UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
            UPLOAD_ERR_EXTENSION  => "File upload stopped by extension"
        ];
        die($error_messages[$file['error']] ?? "Unknown upload error");
    }

    // Validate MIME type
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $file_info = finfo_open(FILEINFO_MIME_TYPE);
    $file_type = finfo_file($file_info, $file['tmp_name']);
    finfo_close($file_info);

    if (!in_array($file_type, $allowed_types)) {
        die("Only JPG, PNG, WebP, and GIF images are allowed. Uploaded file type: " . $file_type);
    }

    // Generate unique filename
    $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $image_name = uniqid('blog_', true) . '.' . $file_ext;
    $target_dir = "../../assets/images/blog/";
    $target_path = $target_dir . $image_name;

    // Ensure target dir exists and is writable
    if (!is_dir($target_dir)) {
        die("Target directory does not exist");
    }
    if (!is_writable($target_dir)) {
        die("Target directory is not writable");
    }

    // Move uploaded file
    if (!move_uploaded_file($file['tmp_name'], $target_path)) {
        die("Error moving uploaded file. Check permissions for directory: " . $target_dir);
    }

    // Insert blog post into database
    $stmt = $conn->prepare("INSERT INTO blogs (title, content, category_blog_id, image, created_at) 
                            VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssis", $title, $content, $category_blog_id, $image_name);

    if ($stmt->execute()) {
      echo 'upload blog'; 
        exit();
    } else {
        // Clean up uploaded file on DB error
        if (file_exists($target_path)) {
            unlink($target_path);
        }
        die("Error saving blog post: " . $conn->error);
    }
}
?>

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">GalleryImgUpload</div>
                  </div>
                  <div class="card-body">
                   <form method="POST"  enctype="multipart/form-data" id="blogForm">
  
            <!-- Title Field -->
            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" name="title" id="title" class="form-control" required 
                       placeholder="Enter blog post title" maxlength="255">
            </div>

            <!-- Category Selection -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category">Select Existing Category</label>
                        <select name="categoryblog_id" id="category" class="form-control">
                            <option value="">-- Select Category --</option>
                            <?php
                            $res = $conn->query("SELECT * FROM blog_categories ORDER BY name ASC");
                            while ($row = $res->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['name']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="new_category">Or Add New Category</label>
                        <input type="text" name="new_category" id="new_category" class="form-control" 
                               placeholder="Enter new category name" maxlength="100">
                    </div>
                </div>
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Featured Image *</label>
                <input type="file" name="image" id="image" class="form-control" required
                       accept="image/jpeg, image/png, image/gif, image/webp">
                <div class="file-upload-info">
                    Recommended size: 1200x630 pixels. Max file size: 2MB. Formats: JPG, PNG, GIF.
                </div>
            </div>

            <!-- Content Editor -->
            <div class="form-group">
                <label for="content">Content *</label>
                <textarea name="content" id="summernote" class="form-control" required></textarea>
            </div>

            <!-- Form Actions -->
            <div class="form-group text-end">
                <button type="submit" name="submit" class="btn btn-success btn-publish">
                    <i class="bi bi-send-fill"></i> Publish Blog
                </button>
            </div>
        </form>
    <div class="toast align-items-center text-white  bg-<?php echo $notificationType ?? 'primary'; ?> " role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
    <div class="d-flex">
        <div class="toast-body">
            <?php echo $notificationMessage ?? ''; ?>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>

         <footer class="footer">
          <div class="container-fluid d-flex justify-content-around">
            <div class="copyright">
              ©2025 All rights reserved <i class="fa fa-heart heart text-danger"></i> by
              <a href="#">VIBRANT INDIA FAIR </a>
            </div>
            <div>
               Designed & Developed by
              <a target="_blank" href="#">Vibrant India Tech</a>.
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
   <script src="editor/summernote-bs5.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
    <script>
      $("#displayNotif").on("click", function () {
        var placementFrom = $("#notify_placement_from option:selected").val();
        var placementAlign = $("#notify_placement_align option:selected").val();
        var state = $("#notify_state option:selected").val();
        var style = $("#notify_style option:selected").val();
        var content = {};

        content.message =
          'Turning standard Bootstrap alerts into "notify" like notifications';
        content.title = "Bootstrap notify";
        if (style == "withicon") {
          content.icon = "fa fa-bell";
        } else {
          content.icon = "none";
        }
        content.url = "index.html";
        content.target = "_blank";

        $.notify(content, {
          type: state,
          placement: {
            from: placementFrom,
            align: placementAlign,
          },
          time: 1000,
        });
      });
        // Show toast notification if there's a message
    document.addEventListener("DOMContentLoaded", function () {
        const toastEl = document.querySelector('.toast');
        if (toastEl && toastEl.textContent.trim() !== "") {
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        // Initialize Summernote editor
        $('#summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        // Form validation
        $('#blogForm').on('submit', function(e) {
            // Check if either existing category or new category is provided
            const categorySelected = $('#category').val();
            const newCategory = $('#new_category').val().trim();
            
            if (!categorySelected && !newCategory) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Category Required',
                    text: 'Please select an existing category or enter a new one',
                });
                return false;
            }
            
            // Validate image file
            const fileInput = $('#image')[0];
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
                const maxSize = 2 * 1024 * 1024; // 2MB
                
                if (!validTypes.includes(file.type)) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid File Type',
                        text: 'Please upload only JPG, PNG or GIF images',
                    });
                    return false;
                }
                
                if (file.size > maxSize) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'File Too Large',
                        text: 'Maximum file size is 2MB',
                    });
                    return false;
                }
            }
            
            return true;
        });
    });
    </script>
  </body>
</html>
