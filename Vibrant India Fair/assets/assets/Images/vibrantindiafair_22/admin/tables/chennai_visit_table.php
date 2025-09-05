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
      href="../assets/img/VIFabicon.png"
      type="image/x-icon"
    />
   <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- jQuery & DataTables JS -->


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
    <!-- Bootstrap Notify -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
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
              <li class="nav-item active submenu">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Tables</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../tables/chennai_exhibit_table.php">
                        <span class="sub-item">Chennai Exhibit Data</span>
                      </a>
                    </li>
                    <li class="active">
                      <a href="../tables/chennai_visit_table.php">
                        <span class="sub-item">Chennai Visit Data</span>
                      </a>
                    </li>
                    <li>
                      <a href="../tables/delhi_exhibit_table.php">
                        <span class="sub-item">Delhi Exhibit Data</span>
                      </a>
                    </li>
                    <li>
                      <a href="../tables/delhi_visit_table.php">
                        <span class="sub-item">Delhi Visit Data</span>
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
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
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
              <h3 class="fw-bold mb-3">chennai_visit_data</h3>
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
                  <a href="#">Tables</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="delhi_visit_table.php">delhi_visit_data</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">chennai_visit_data</h4>
                      <a
                        class="btn btn-primary btn-round ms-auto"
                        href="../data_csv/chennai_visit_csv.php"  onclick="event.preventDefault();
                        $.notify({
                            message: 'Exporting CSV...'
                        },{
                            type: 'success',
                            placement: {
                                from: 'top',
                                align: 'center'
                            },
                            delay: 2000
                        });
                        setTimeout(() => {
                        window.location.href = this.href; }, 1000);" 
                        ><i class="fa fa-download me-2"></i> 
                         Export to CSV
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="visitorTable" class="display table table-striped table-hover">
                        <thead>
                            <tr> 
                                <th>Id</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr> 
                                <th>Id</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                          <?php  
                            include '../includes/db.php';
                            $sql = "SELECT * FROM chennai_visit_data";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {  
                                    echo '<tr>
                                        <td>' . $row['id'] . '</td>
                                        <td>' . $row['name'] . '</td>
                                        <td>' . $row['company'] . '</td>
                                        <td>' . $row['designation'] . '</td>
                                        <td>' . $row['phone'] . '</td>
                                        <td>' . $row['email'] . '</td>
                                        <td>' . $row['city'] . '</td>
                                        <td>
                                            <div class="form-button-action">
                                              <a href="../visitor/chennai_visit_data.php?       delete_id=' . $row['id'] . '" class="btn btn btn-danger btn-sm  " onclick="return confirm(\'Are you sure you want to delete this record?\');">
                                                  <i class="far fa-trash-alt"></i>
                                              </a>
                                            </div>
                                        </td>
                                    </tr>';
                                }
                            } else {
                                echo '<tr><td colspan="8">No data found</td></tr>';
                            }
                          ?>
                        </tbody>
                      </table>
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
    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    <!-- Notify js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
  
  <script>
      $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });

        // Add Row
        $("#add-row").DataTable({
          pageLength: 5,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
          $("#add-row")
            .dataTable()
            .fnAddData([
              $("#addName").val(),
              $("#addPosition").val(),
              $("#addOffice").val(),
              action,
            ]);
          $("#addRowModal").modal("hide");
        });
      });

    $(document).ready(function () {
        $('#visitorTable').DataTable({
            "paging": true,       // Enable pagination
            "searching": true,    // Enable search box
            "ordering": true,     // Enable sorting
            "info": true,         // Show table info
            "lengthMenu": [5, 10, 25, 50, 100], // Rows per page options
            "language": {
                "search": "Search records:", // Custom search box text
                "lengthMenu": "Show _MENU_ records per page",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
            }
        });
    });
    
  </script>
  </body>
</html>
