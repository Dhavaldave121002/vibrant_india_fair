<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Stay and Hotel </title>
        <?php
        include "include/header.php";
        ?>
    </head>
  <body>
    <!-- --- Banner Section --- -->
    <section>
        <div class="showcase-banner-main-box">
            <div class="showcase-banner-thumbnail">
                <div class="showcase-banner-img-box">
                    <picture>
                    <img class="showcase-banner-img" src="assets/images/hotel-banner.png" alt="">
                </picture>
                </div>
                <div class="banner-header-title">STAY & HOTEL</div>
            </div>
        </div>
    </section>
    <!-- --- End Banner Section --- -->
    
    <!-- <div class="container-fluid"> -->
    <section class="section-margin">
      <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 side-tab">
          <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active section-title"
                id="hotels-tab"
                data-bs-toggle="tab"
                data-bs-target="#hotels"
                role="tab"
                >Yashobhoomi Dwarka, New Delhi</a
              >
            </li>
            <li class="nav-item section-title mt-2">
              <a
                class="nav-link"
                id="settings-tab"
                data-bs-toggle="tab"
                data-bs-target="#settings"
                role="tab"
                >Chennai Trade Center, Chennai, Tamil Nadu</a
              >
            </li>
          </ul>
        </nav>

        <!-- Content -->
        <main class="col-md-9 col-lg-10 tab-content p-4">
          <div class="tab-pane fade show active" id="hotels" role="tabpanel">
            <div class="card">
              <div class="card-body">
                <h2 class="secondary-title">Yashobhoomi Dwarka, New Delhi</h2>
                <ul class="list-group list-group-numbered">
                  <li class="list-group-item section-text-title">Hotel Silver Crown</li>
                  <li class="list-group-item section-text-title">Welcome Hotel By ITC</li>
                  <li class="list-group-item section-text-title">South West Inn</li>
                  <li class="list-group-item section-text-title">FabHotel Lime Tree</li>
                  <li class="list-group-item section-text-title">Vivanta</li>
                  <li class="list-group-item section-text-title">Hotel Green Lotus</li>
                  <li class="list-group-item section-text-title">Hotel Dwarka Inn</li>
                  <li class="list-group-item section-text-title">Satvik By Chhabra Farm</li>
                  <li class="list-group-item section-text-title">Hotel Janvi Palace</li>
                  <li class="list-group-item section-text-title">Hotel Rose Residency</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="settings" role="tabpanel">
            <div class="card">
              <div class="card-body">
                <h2 class="secondary-title">Chennai Trade Center, Chennai, Tamil Nadu</h2>
                <ul class="list-group list-group-numbered">
                  <li class="list-group-item section-text-title">
                    Friendlystay - A Home Stay And Elite
                  </li>
                  <li class="list-group-item section-text-title">
                    Private Luxury Beach Side Villa
                  </li>
                  <li class="list-group-item section-text-title">
                    Super Collection O Mahabalipuram
                  </li>
                  <li class="list-group-item section-text-title">
                    Super Hotel O ECR Stays Near Nemmeli Beach (formerly GVS
                    Homes)
                  </li>
                  <li class="list-group-item section-text-title">
                    Super Hotel O Sriperumbudur (formerly Radha Residency)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    </section>
     <?php
    include "include/footer.php";
    ?>
  </body>
</html>
