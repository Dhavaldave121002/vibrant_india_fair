<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
   <?php
    include "include/header.php";
    ?>
</head>
 <body>

  <main class="contact-us-main">
    <!-- --- Banner Section --- -->
    <section>
        <div class="showcase-banner-main-box">
          <div class="showcase-banner-thumbnail">
            <div class="showcase-banner-img-box">
              <picture>
                <img class="showcase-banner-img" src="assets/images/contact-banner.jpg" alt="">
              </picture>
              <div class="banner-header-title">CONTACT US</div>
            </div>
          </div>
        </div>
    </section>
    <!-- --- End Banner Section --- -->

   <section class="section-margin">
      <div class="container">
        <!-- <div class="primary-heading">Contact Us</div> -->
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="primary-title">VIBRANT INDIA</div>
            <div class="secondary-title mt-3">
              <i class="fa-solid fa-map-pin"></i> Our Location
            </div>
            <p class="section-text-content">
              H-409, Shreedhar Flora Complex, S. P. Ring Road, Nr. Nikol Police
              Station, Nikol, Ahmedabad- 382350 Gujarat (INDIA)
            </p>
            <div class="secondary-title mt-3">
              <i class="fa-solid fa-phone"></i> Phone
            </div>
            <span class="section-text-content">
              <a href="tel:+919924488938" class="contact-us-inner-text"
                >+91 992 448 8938</a
              > </span
            ><br />
            <span class="section-text-content">
              <a href="tel:+919998885475" class="contact-us-inner-text"
                >+91 999 888 5475</a
              >
            </span>
            <div class="secondary-title mt-3">
              <i class="fa-solid fa-envelope"></i> Email
            </div>
            <span class="section-text-content">
              <a
                href="mailto:vibrantindia1@gmail.com"
                class="contact-us-inner-text"
                >vibrantindia1@g mail.com</a
              >
            </span>
            <br />
            <span class="section-text-content">
              <a
                href="mailto:info@vibrantindiafair.com"
                class="contact-us-inner-text"
                >info@vibrantindiafair.com</a
              >
            </span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 contact-us-card">
            <div class="primary-title mt-2">CHINA</div>
            <div class="secondary-title mt-3">
              <i class="fa-solid fa-map-pin"></i> Our Location
            </div>
            <div class="section-text-content">
              Ningbo Sea-Ever International Exhibition Co. Ltd.
            </div>
            <p class="section-text-content">
              Mr. Sunny (CEO) 1003-15,Bona Building,Taikang Road Ningbo City,
              Zhejiang Province, China
            </p>
            <div class="secondary-title mt-3">
              <i class="fa-solid fa-phone"></i> Phone
            </div>
            <span class="section-text-content">
              <a href="tel:+8657488353717" class="contact-us-inner-text"
                >+86 574 88353717</a
              >
            </span>
            <br />
            <span class="section-text-content">
              <a href="tel:+8615168587137" class="contact-us-inner-text"
                >+86 15168587137
              </a>
            </span>
            <h3 class="secondary-title mt-3">
              <i class="fa-solid fa-envelope"></i> Email
            </h3>
            <span class="section-text-content">
              <a href="mailto:2264795080@qq.com" class="contact-us-inner-text"
                >2264795080@qq.com</a
              >
            </span>
          </div>
        </div>
      </div>
    </section>
    </main>
     <main>
      <section class="contact-us section-margin" id="contact">
        <div class="container mt-5 py-4 contact-us-box">
          <div class="row mt-3">
            <div class="col-lg-6 col-md-5 col-sm-6 col-12">
              <div class="contact-us-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.27742881122!2d72.676278!3d23.039579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e874618d3f65d%3A0x26d115751a846ede!2sVibrant%20India%20Event%20Solution!5e0!3m2!1sen!2sus!4v1740389867477!5m2!1sen!2sus"
                  height="350px"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-6 col-12">
              <div class="secondary-title text-center">Tell Me Your Message</div>
             <form action="admin/contactData/contact_data" method="POST" class="mt-4">
    <div class="row">
        <div class="mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required />
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required />
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required />
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="contact-us-submit">SEND MESSAGE</button>
        </div>
    </div>
</form>


            </div>
          </div>
        </div>
      </section>
    </main>
  <?php
   include "include/footer.php";
  ?>
</body>
</html>