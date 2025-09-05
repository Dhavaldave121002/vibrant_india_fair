<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Show Highlights</title>
    <?php
      include 'include/header.php';
    ?>
  </head>

  <body>

    <main class="exhibit-main">
      
      <!--   visitor-product is start  Show Highlight -->
      <section class="section-margin">
          <div class="primary-heading">
            Show Highlight
          </div>
           <div>
            <h1 class="visitor-product-heding-2">16 SEGMENTS</h1>
        </div>
        <div class="visitore-product-box">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div id="product-container"></div>
            </div>
        </div>
      </section>
      <!--   visitor-product is end Show Highlight -->
         
      <!-- Exhibition Calendar start -->
      <section class="section-margin">
        <div class="container">
          <div class="primary-heading">Exhibition Calendar</div>
          <div class="row">
            <div class="col-md-6">
              <div class="calendar-card">
                <div class="event-img">
                  <img src="assets/images/Exhibition calendar/delhi.jpg" alt="" class="img-fluid" />
                </div>
                <div class="calendar-event">
                  <span>05</span>
                  <span>06</span>
                  <span>07</span>
                  <span>July</span>
                  <span>2025</span>
                </div>
                <div class="calendar-txt">
                  <div class="section-title">Yashobhoomi, Dwarka</div>
                  <div class="event-location"><span><i
                        class="fa-solid fa-location-dot event-icon"></i></span>New Delhi</div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="calendar-card">
                <div class="event-img">
                  <img src="assets/images/Exhibition calendar/chennai.jpg" alt="" class="img-fluid" />
                </div>
                <div class="calendar-event">
                  <span>01</span>
                  <span>02</span>
                  <span>03</span>
                  <span>August</span>
                  <span>2025</span>
                </div>
                <div class="calendar-txt">
                  <div class="section-title">Chennai Trade Center, Chennai</div>
                  <div class="event-location"><span><i
                        class="fa-solid fa-location-dot event-icon"></i></span>Tamil Nadu</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Exhibition Calendar end -->
    <?php
    include "include/footer.php";
    ?>

  </body>
</html>