<!DOCTYPE html>
<html lang="en">
<head>
 <title> Vibrant India Fair </title>
    <?php
    include "include/header.php";
    ?>
</head>
<body>
  <section class="mt-2">
    <div class="container-fluid">
      <div class="vendor-reg-main-body">
        <div class="row g-2 d-flex justify-content-center align-items-center">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 order-2 order-sm-2 order-md-1">
            <div class="vendor-reg-left-main-body">
              <div class="vendor-reg-img-box">
                <img class="vendor-reg-img" src="assets/images/formbuilder-account.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 order-1 order-sm-1 oder-md-2">
            <div class="vendor-reg-form-right-part-body">  
              <div class="vendor-reg-main-box">
                <div class="vendor-reg-primary-heading">Vendor Registration</div>
                  <form action="admin/vendorData/vendor_data" method="POST">
                    <!-- Name Field -->
                    <label class="section-text-title">Name</label>
                    <div class="row">
                      <div class="col">
                        <input
                          type="text"
                          class="vendor-form-control"
                          name="first_name"
                          placeholder="First"
                          required
                        />
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="vendor-form-control"
                          name="last_name"
                          placeholder="Last"
                          required
                        />
                      </div>
                    </div>

                    <!-- Company Name -->
                    <div class="vendor-form-group">
                      <label class="section-text-title">Company Name</label>
                      <input
                        type="text"
                        class="vendor-form-control"
                        name="company_name"
                        placeholder="Enter Company Name"
                      />
                    </div>

                    <!-- Email Field -->
                    <div class="vendor-form-group">
                      <label class="section-text-title">Email</label>
                      <input
                        type="email"
                        class="vendor-form-control"
                        name="email"
                        placeholder="Enter Email"
                        required
                      />
                    </div>

                    <!-- Phone Field -->
                    <div class="vendor-form-group">
                      <label class="section-text-title">Phone</label>
                        <input
                        type="text"
                        class="vendor-form-control"
                        name="phone"
                        placeholder="Enter Phone Number"
                      />
                    </div>

                    <!-- Comment or Message -->
                    <div class="vendor-form-group">
                      <label class="section-text-title">Message</label>
                      <textarea
                        class="vendor-form-control"
                        name="message"
                        placeholder="Type a message"
                        rows="2">
                      </textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="vendor-btn-submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <?php
    include "include/footer.php";
    ?>
</body>
</html>