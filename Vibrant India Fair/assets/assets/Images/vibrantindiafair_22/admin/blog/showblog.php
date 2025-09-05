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
  <link rel="stylesheet" href="editor/summernote-bs5.css">
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
                      <a href="../tables/delhi_visit_table.php">
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
                          <li>
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
                    <li class="active">
                      <a href="showblog.php">
                        <span class="sub-item">BlogShow</span>
                      </a>
                    </li>
                    <li>
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
              <h3 class="fw-bold mb-3">BlogsShow </h3>
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
                  <a href="uploadblog.php">BlogUpload</a>
                </li>
              </ul>
            </div>
           <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h4 class="card-title">GalleryImgShow</h4>
      </div>

      <?php
      include '../includes/db.php';

      // Corrected SQL join
      $sql = "SELECT blogs.*, blog_categories.name AS category_name 
              FROM blogs 
              LEFT JOIN blog_categories ON blogs.category_blog_id = blog_categories.id 
              ORDER BY blogs.created_at DESC";

      $result = $conn->query($sql);
      ?>

      <div class="card-body">
        <div class="table-responsive">
          <table id="add-row" class="display table table-striped table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php if ($result && $result->num_rows > 0): ?>
                <?php $i = 1; while ($row = $result->fetch_assoc()): ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td>
                      <?php if (!empty($row['image'])): ?>
                        <img src="../../assets/images/blog/<?= htmlspecialchars($row['image']) ?>" width="80" height="60" style="object-fit:cover;" alt="<?= htmlspecialchars($row['title']) ?>">
                      <?php else: ?>
                        <span class="text-muted">No image</span>
                      <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= htmlspecialchars($row['category_name'] ?? 'Uncategorized') ?></td>
                    <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                    <td>
                      <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">Edit</button>
                      <a href="delete_blog.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</a>
                    </td>
                  </tr>

                  <!-- Edit Modal -->
                  <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $row['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form action="edit_blogs" method="POST" enctype="multipart/form-data">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel<?= $row['id'] ?>">Edit Blog: <?= htmlspecialchars($row['title']) ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                          <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">

                            <!-- Title -->
                            <div class="mb-3">
                              <label class="form-label">Title *</label>
                              <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($row['title']) ?>" required>
                            </div>

                            <!-- Category Section -->
                            <div class="row mb-3">
                              <div class="col-md-6">
                                <label class="form-label">Select Existing Category</label>
                                <select name="category_id" class="form-select">
                                  <option value="">-- Select Category --</option>
                                  <?php
                                  $catQuery = $conn->query("SELECT * FROM blog_categories");
                                  while ($cat = $catQuery->fetch_assoc()):
                                  ?>
                                    <option value="<?= $cat['id'] ?>" <?= ($row['category_blog_id'] == $cat['id']) ? 'selected' : '' ?>>
                                      <?= htmlspecialchars($cat['name']) ?>
                                    </option>
                                  <?php endwhile; ?>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label class="form-label">Or Add New Category</label>
                                <input type="text" name="new_category" class="form-control" placeholder="Enter new category">
                              </div>
                            </div>

                            <!-- Image -->
                            <div class="mb-3">
                              <label class="form-label">Featured Image</label>
                              <input type="file" name="image" class="form-control">
                              <small class="text-muted">Recommended size: 1200x630. Max size: 2MB. JPG, PNG, GIF.</small>
                              <?php if (!empty($row['image'])): ?>
                                <div class="mt-2">
                                  <img src="../../assets/images/blog/<?= htmlspecialchars($row['image']) ?>" width="100" height="70" style="object-fit:cover;" alt="<?= htmlspecialchars($row['title']) ?>">
                                </div>
                              <?php endif; ?>
                            </div>

                            <!-- Content -->
                            <div class="mb-3">
                              <label class="form-label">Content *</label>
                              <textarea name="content" class="form-control" id="summernote"  rows="6"><?= htmlspecialchars($row['content']) ?></textarea>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Update Blog</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="6" class="text-center">No blog posts found</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

                            </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

         <!-- <footer class="footer">
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
        </footer> -->
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
    </script>
   <script>
$(document).ready(function() {
    $(".delete-btn").click(function(event) {
        event.preventDefault(); // Prevent page refresh

        var id = $(this).data("id");  // Get the image ID
        var row = $("#row-" + id);  // Get the row to remove

        if (confirm("Are you sure you want to delete this image?")) {
            $.ajax({
                url: "showimg.php", // PHP file handling the deletion
                type: "POST",
                data: { delete_id: id },
                dataType: "json",
                success: function(response) {
                    if (response.status === "success") {
                        row.fadeOut(500, function() { $(this).remove(); }); // Instantly remove row
                        showNotification(response.message, "success");
                    } else {
                        showNotification(response.message, "error");
                    }
                },
                error: function() {
                    showNotification("Error processing request.", "error");
                }
            });
        }
    });

    function showNotification(message, type) {
        var bgColor = type === "success" ? "green" : "red";
        var notification = $('<div style="position: fixed; top: 20px; right: 20px; background-color: ' + bgColor + '; color: white; padding: 10px 20px; border-radius: 5px; z-index: 1000;">' + message + '</div>');

        $("body").append(notification);
        setTimeout(function() {
            notification.fadeOut(500, function() {
                $(this).remove();
            });
        }, 3000);
    }
});
   </script>
   <script src="editor/summernote-bs5.js"></script>
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
