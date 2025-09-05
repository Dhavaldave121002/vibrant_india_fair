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
              <li class="nav-item active submenu">
                  <a data-bs-toggle="collapse" href="#gallery">
                      <i class="fas fa-images"></i>
                      <p>Gallery</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse show" id="gallery">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="showimg.php">
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
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#blogs">
                  <i class="fab fa-blogger"></i>
                  <p>Blogs</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="blogs">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../blog/showblog.php">
                        <span class="sub-item">BlogShow</span>
                      </a>
                    </li>
                    <li>
                      <a href="../blog/uploadblog.php">
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
              <h3 class="fw-bold mb-3">GalleryImgUpload</h3>
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
                  <a href="#">Gallery</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="showimg.php">GalleryImgShow</a>
                </li>
              </ul>
            </div>
            <div class="row">
             <?php
include("../includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $imageExt = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

    if (!in_array($imageExt, $allowedExtensions)) {
        echo "<div class='alert alert-danger'>Unsupported image format. Allowed: JPG, PNG, WEBP</div>";
        exit;
    }

    $imageName = uniqid("img_", true) . '.' . $imageExt;
    $targetDir = "../../assets/images/gallery/";
    $targetFile = $targetDir . $imageName;

    $category_id = $conn->real_escape_string($_POST["category"]);
    $subcategory_id = $conn->real_escape_string($_POST["subcategory"]);

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $tmpPath = $_FILES["image"]["tmp_name"];
    $maxSize = 80 * 1024; // 80KB
    $mimeType = mime_content_type($tmpPath);
    $compressed = false;

    // Resize and compress image to fit within maxSize limit
    function compressImage($sourcePath, $mimeType, $targetFile, $maxSize) {
        list($width, $height) = getimagesize($sourcePath);
        $newWidth = $width > 800 ? 800 : $width;
        $newHeight = ($newWidth / $width) * $height;

        switch ($mimeType) {
            case 'image/jpeg':
            case 'image/jpg':
                $image = imagecreatefromjpeg($sourcePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($sourcePath);
                break;
            case 'image/webp':
                $image = imagecreatefromwebp($sourcePath);
                break;
            default:
                return false;
        }

        $resizedImage = imagecreatetruecolor($newWidth, $newHeight);

        if ($mimeType === 'image/png' || $mimeType === 'image/webp') {
            imagealphablending($resizedImage, false);
            imagesavealpha($resizedImage, true);
        }

        imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        $quality = 85;
        do {
            ob_start();
            switch ($mimeType) {
                case 'image/jpeg':
                case 'image/jpg':
                    imagejpeg($resizedImage, null, $quality);
                    break;
                case 'image/png':
                    imagepng($resizedImage, null, round(9 - ($quality / 10)));
                    break;
                case 'image/webp':
                    imagewebp($resizedImage, null, $quality);
                    break;
            }
            $data = ob_get_clean();
            $size = strlen($data);
            $quality -= 5;
        } while ($size > $maxSize && $quality > 10);

        return file_put_contents($targetFile, $data);
    }

    if (in_array($mimeType, ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'])) {
        $compressed = compressImage($tmpPath, $mimeType, $targetFile, $maxSize);
    }

    if ($compressed) {
        $imgNameForDb = $conn->real_escape_string($imageName);
        $sql = "INSERT INTO gallery (img, category_id, subcategory_id) VALUES ('$imgNameForDb', '$category_id', '$subcategory_id')";

        if ($conn->query($sql)) {
            $notificationMessage = "Image Uploaded Successfully!";
            $notificationType = "success";
        } else {
            $notificationMessage = "Error: " . $conn->error;
            $notificationType = "danger";
        }
    } else {
        $notificationMessage = "Error uploading file.";
        $notificationType = "danger";
    }

}
?>

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">GalleryImgUpload</div>
                  </div>
                  <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Choose Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Select Category</label>
            <select name="category" class="form-select" required>
                <?php
                $catResult = $conn->query("SELECT * FROM categories");
                while ($cat = $catResult->fetch_assoc()) {
                    echo "<option value='" . $cat['id'] . "'>" . $cat['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Select Subcategory</label>
            <select name="subcategory" class="form-select" required>
                <?php
                $subcatResult = $conn->query("SELECT * FROM subcategories");
                while ($subcat = $subcatResult->fetch_assoc()) {
                    echo "<option value='" . $subcat['id'] . "'>" . $subcat['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Upload</button>
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
  </body>
</html>
