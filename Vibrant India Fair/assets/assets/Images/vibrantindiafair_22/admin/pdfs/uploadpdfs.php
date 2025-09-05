<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Vibrant Indai Fair Admin</title>
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
              <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#gallery">
                      <i class="fas fa-images"></i>
                      <p>Gallery</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="gallery">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="../gallery/showimg.php">
                                  <span class="sub-item">ShowImgGallery</span>
                              </a>
                          </li>
                          <li>
                              <a href="../gallery/upload.php">
                                  <span class="sub-item">GalleryImgUpload</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
               <li class="nav-item active submenu">
                  <a data-bs-toggle="collapse" href="#pdfs">
                      <i class="far fa-file-pdf"></i>
                      <p>Pdfs</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse show" id="pdfs">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="showpdfs.php">
                                  <span class="sub-item">Show Pdfs</span>
                              </a>
                          </li>
                          <li class="active">
                              <a href="uploadpdfs.php">
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
              <h3 class="fw-bold mb-3">UploadPdfs</h3>
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
                  <a href="#">Pdfs</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="./showpdfs.php">ShowPdfs</a>
                </li>
              </ul>
            </div>
          <div class="row">
                          <?php
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);

                            include '../includes/db.php'; // Ensure correct path

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['pdf_file'])) {
                                $file_name = $_FILES['pdf_file']['name'];
                                $file_tmp = $_FILES['pdf_file']['tmp_name'];
                                $file_size = $_FILES['pdf_file']['size'];
                                $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                                // ✅ Allow only PDF files
                                if ($file_type !== "pdf") {
                                    die("❌ Only PDF files are allowed.");
                                }

                              // ✅ Check file size (Max: 20MB)
                            if ($file_size > 20 * 1024 * 1024) {
                                die("❌ File size exceeds 20MB.");
                            }

                                // ✅ Get category from form input
                                $category = $_POST['category'] ?? 'uncategorized';

                                // ✅ Define category folders
                                $categories = [
                                    'megazine' => "megazine_pdfs/",
                                    'report' => "report_pdfs/",
                                    'indian_advertise' => "indian_advertise_pdfs/",
                                    'overseas_advertise' => "overseas_advertise_pdfs/",
                                    'pressrelease' => "pressrelease_pdfs/",
                                    'newsletter' => "newsletter_pdfs/"
                                ];
                                // ✅ Check if the selected category is valid
                                if (!array_key_exists($category, $categories)) {
                                    die(" Invalid category selected.");
                                }

                                // ✅ Set correct folder based on category
                                $upload_dir = "../../assets/pdf/" . $categories[$category];

                                // ✅ Create folder if it doesn't exist
                                if (!is_dir($upload_dir)) {
                                    mkdir($upload_dir, 0777, true);
                                }

                                // ✅ Generate unique filename to avoid duplicates
                                $unique_name = time() . "_" . rand(1000, 9999) . "_" . basename($file_name);
                                $file_path = realpath($upload_dir) . DIRECTORY_SEPARATOR . $unique_name;

                                // ✅ Move uploaded file to correct category folder
                                if (move_uploaded_file($file_tmp, $file_path)) {
                                    // ✅ Store correct path in database (relative path)
                                    $relative_path = "assets/pdf/" . $categories[$category] . $unique_name;

                                    $stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_path, category) VALUES (?, ?, ?)");
                                    $stmt->bind_param("sss", $unique_name, $relative_path, $category);
                                    
                                    if ($stmt->execute()) {
                                        echo "✅ File uploaded successfully into " . ucfirst($category) . " category!";
                                    } else {
                                        echo "❌ Database error: " . $stmt->error;
                                    }

                                    $stmt->close();
                                } else {
                                    echo "❌ Failed to upload file.";
                                }
                            }
                          ?>
                        <div class="col-md-12">
                          <div class="card shadow-sm">
                              <div class="card-header bg-light">
                                  <h5 class="card-title mb-0">UploadPdfs</h5>
                              </div>
                              <div class="card-body">
                                  <form method="post" enctype="multipart/form-data">
                                      <!-- File Input -->
                                      <div class="mb-3">
                                          <label class="form-label fw-semibold">Choose Pdfs</label>
                                          <input type="file" class="form-control" name="pdf_file" required>
                                      </div>
                                      <!-- Category Selection -->
                                      <div class="mb-3">
                                          <label class="form-label fw-semibold">Select Category</label>
                                          <select class="form-select" name="category" required>
                                              <option value="megazine">Megazine</option>
                                              <option value="report">Report</option>
                                              <option value="indian_advertise">Indian Advertise</option>
                                              <option value="overseas_advertise">Overseas Advertise</option>
                                              <option value="pressrelease">Press Release</option>
                                              <option value="newsletter">Newsletter</option>
                                          </select>
                                      </div>
                                      <!-- Submit Button -->
                                      <button type="submit" name="upload" class="btn btn-primary">
                                          Upload
                                      </button>
                                  </form>
                              </div>
                          </div>
                        </div>
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
