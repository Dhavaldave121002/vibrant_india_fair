<?php
ini_set('session.gc_maxlifetime', 3600);  // Session will expire after 1 hour
session_set_cookie_params(3600);           // Cookie will last for 1 hour
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "You must be logged in to access this page";
    header("Location: auth/admin_login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Vibrant India Fair Admin</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/VIFabicon.png"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
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
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="admin_dashboard.php" class="logo">
              <img
                src="assets/img/VIFair.png"
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
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
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
                      <a href="tables/chennai_exhibit_table.php">
                        <span class="sub-item">Chennai Exhibit Data</span>
                      </a>
                    </li><li>
                      <a href="tables/chennai_visit_table.php">
                        <span class="sub-item">Chennai visit Data</span>
                      </a>
                    </li><li>
                      <a href="tables/delhi_exhibit_table.php">
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
                              <a href="gallery/showimg.php">
                                  <span class="sub-item">ShowImgGallery</span>
                              </a>
                          </li>
                          <li>
                              <a href="gallery/upload.php">
                                  <span class="sub-item">GalleryImgUpload</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#pdfs">
                      <i class="far fa-file-pdf"></i>
                      <p>Pdfs</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse" id="pdfs">
                      <ul class="nav nav-collapse">
                          <li>
                              <a href="pdfs/showpdfs.php">
                                  <span class="sub-item">Show Pdfs</span>
                              </a>
                          </li>
                          <li>
                              <a href="pdfs/uploadpdfs.php">
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
                      <a href="contactData/contact_table.php">
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
                      <a href="vendorData/vendor_table.php">
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
                      <a href="blog/showblog.php">
                        <span class="sub-item">BlogShow</span>
                      </a>
                    </li>
                    <li>
                      <a href="blog/uploadblog.php">
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
              <a href="admin_dashboard.php" class="logo">
                <img
                  src="assets/img/VIFair.png"
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
                        src="assets/img/VIFabicon.png"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Vibarnt India Fair</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="assets/img/VIFabicon.png"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Vibrant India Fair</h4>
                            <p class="text-muted">info@vibrantindiafair.com</p>
                           <a class="btn btn-xs btn-secondary btn-sm" href="auth/admin_logout.php">Logout</a>
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
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <!-- <div>
                <h3 class="fw-bold mb-3">Vibrant India Fair-Dashboard</h3>
              </div> -->
            </div>
            <div class="row">
              <?php
                require 'includes/db.php'; // Database connection

                // Fetch total visitor count
                $query = "SELECT COUNT(*) AS total_visitors FROM delhi_visit_data";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_visitors = $row['total_visitors'];
              ?>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Visitors Delhi</p>
                          <h4 class="card-title"><?php echo number_format($total_visitors); ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <?php         // Fetch total visitor count
                  $query = "SELECT COUNT(*) AS total_visitors FROM chennai_visit_data";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $total_visitors = $row['total_visitors'];
                ?>
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Visitors Chennai</p>
                          <h4 class="card-title"><?php echo number_format($total_visitors); ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <?php
                // Fetch total visitor count
                  $query = "SELECT COUNT(*) AS total_visitors FROM delhi_exhibit_data";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $total_visitors = $row['total_visitors'];
                ?>
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Exhibit Delhi</p>
                          <h4 class="card-title"><?php echo number_format($total_visitors); ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <?php
                  // Fetch total visitor count
                  $query = "SELECT COUNT(*) AS total_visitors FROM chennai_exhibit_data";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $total_visitors = $row['total_visitors'];
                ?>
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Exhibit Chennai</p>
                          <h4 class="card-title"><?php echo number_format($total_visitors); ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-6 col-md-3 mb-4">
                <button id="clearCacheBtn" class="btn btn-danger ">
                    <i class="fas fa-trash"></i> Clear Cache
                </button>
              </div> -->
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Visitor BarChart</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas id="barChart"></canvas>
                    </div>
                    <?php
                      require 'includes/db.php';

                      // Fetch Chennai visitor count
                      $query_chennai = "SELECT COUNT(*) AS total_visitors FROM chennai_visit_data";
                      $result_chennai = mysqli_query($conn, $query_chennai);
                      $total_visitors_chennai = ($result_chennai) ? mysqli_fetch_assoc($result_chennai)['total_visitors'] : 0;

                      // Fetch Delhi visitor count
                      $query_delhi = "SELECT COUNT(*) AS total_visitors FROM delhi_visit_data";
                      $result_delhi = mysqli_query($conn, $query_delhi);
                      $total_visitors_delhi = ($result_delhi) ? mysqli_fetch_assoc($result_delhi)['total_visitors'] : 0;

                      mysqli_close($conn);
                    ?>
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
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>


    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <!-- <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById("barChart").getContext("2d");
        var barChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Chennai", "Delhi"],
                datasets: [{
                    label: "Visitor Count",
                    data: [<?php echo $total_visitors_chennai; ?>, <?php echo $total_visitors_delhi; ?>],
                    backgroundColor: ["#3498db", "#e74c3c"], // Bar colors
                    borderColor: ["#2980b9", "#c0392b"],      // Border colors
                    borderWidth: 2,            // Thicker borders
                    borderRadius: 5,           // Rounded bar edges
                    hoverBackgroundColor: ["#2980b9", "#c0392c"] // Hover effect
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,    // Allow chart to resize freely
                plugins: {
                    title: {                   // Add a chart title
                        display: true,
                        text: "Visitor Statistics",
                        fontSize: 16,
                        padding: 20
                    },
                    legend: {                 // Customize legend
                        position: "top",      // Position at top
                        labels: {
                            fontColor: "#333", // Legend text color
                            fontSize: 12
                        }
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: "#666",  // Y-axis text color
                            callback: function(value) {
                                return value.toLocaleString(); // Add commas (e.g., 1,000)
                            }
                        },
                        gridLines: {
                            color: "#eee",     // Y-axis grid lines
                            drawBorder: false  // Hide Y-axis border
                        },
                        scaleLabel: {          // Y-axis label
                            display: true,
                            labelString: "Number of Visitors",
                            fontColor: "#666"
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontColor: "#666"  // X-axis text color
                        },
                        gridLines: {
                            display: false     // Hide X-axis grid lines
                        },
                        barThickness: 40,      // Fixed bar width
                        categoryPercentage: 0.5 // Control spacing between bars
                    }]
                },
                tooltips: {                   // Customize tooltips
                    backgroundColor: "#333",
                    titleFontSize: 14,
                    bodyFontSize: 12,
                    bodyFontColor: "#fff",
                    borderColor: "#666",
                    borderWidth: 1,
                    caretSize: 8,
                    displayColors: false      // Hide color box in tooltip
                },
                animation: {                  // Add animations
                    duration: 1500,           // Animation duration
                    easing: "easeInOutQuart"   // Smooth easing effect
                }
            }
        });
    });

    
</script>
<!-- clear chach buuton js -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("clearCacheBtn").addEventListener("click", function () {
        Swal.fire({
            title: "Are you sure?",
            text: "This will clear all cached data. This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, clear cache!"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch("clear_cache.php", {
                    method: "POST",
                    headers: {
                        "Accept": "application/json"
                    }
                })
                .then(response => response.json()) // Ensure JSON response is properly handled
                .then(data => {
                    Swal.fire({
                        title: data.status === "success" ? "Success!" : "Error!",
                        text: data.message,
                        icon: data.status === "success" ? "success" : "error"
                    });
                })
                .catch(error => {
                    console.error("Fetch Error:", error);
                    Swal.fire({
                        title: "Error!",
                        text: "An error occurred while clearing the cache.",
                        icon: "error"
                    });
                });
            }
        });
    });
});
</script>

  </body>
</html>
