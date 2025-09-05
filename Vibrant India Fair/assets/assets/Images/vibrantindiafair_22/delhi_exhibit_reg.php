<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$old_input = $_SESSION['old_input'] ?? [];
unset($_SESSION['errors'], $_SESSION['old_input']);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibrant India Fair</title>
    <?php include "include/header.php"; ?>
    <style>
        .error { color: red; font-size: 0.8rem; margin-top: 0.25rem; }
        .is-invalid { border-color: red; }
        .remove-btn { padding: 0.25rem 0.5rem; font-size: 0.8rem; }
        .more-btn { padding: 0.25rem 0.5rem; font-size: 0.8rem; }
    </style>
</head>
<body class="exibitor-body">
    <section class="form-section">
        <div class="form-container">
           <form id="registrationForm" action="admin/exhibit/delhi_exhibit_data" method="POST" novalidate>
                <h1 class="primary-heading">Delhi Registration</h1>
                <span class="secondary-title exhibit-heading">
                    We are interested in participating in the Vibrant India 2024
                    exhibition, which will be held in New Delhi from July 19-20-21,
                    2024. Below is information about our organisation.
                </span>
                
                <!-- Participation Type (Required) -->
                <div class="d-flex gap-3 mt-3">
                    <div class="exhibition-form-check">
                        <input class="exhibition-form-check-input inputForm-border" type="radio"
                            name="participation_type" value="domestic" required 
                            <?= isset($old_input['participation_type']) && $old_input['participation_type'] === 'domestic' ? 'checked' : '' ?> />
                        <label class="exhibition-form-check-label radio-title">Domestic</label>
                    </div>
                    <div class="exhibition-form-check">
                        <input class="exhibition-form-check-input inputForm-border" type="radio"
                            name="participation_type" value="international" required
                            <?= isset($old_input['participation_type']) && $old_input['participation_type'] === 'international' ? 'checked' : '' ?> />
                        <label class="exhibition-form-check-label radio-title">International</label>
                    </div>  
                </div>
                <?php if(isset($errors['participation_type'])): ?>
                    <div class="error"><?= htmlspecialchars($errors['participation_type']) ?></div>
                <?php endif; ?>

                <!-- Company Name (Required) -->
                <label for="Companyname" class="form-label form-title primary-title">Company Name :</label>
                <input type="text" class="form-control inputForm-border mb-3 <?= isset($errors['Companyname']) ? 'is-invalid' : '' ?>" 
                    name="Companyname" id="Companyname" placeholder="Enter Company Name" required
                    value="<?= htmlspecialchars($old_input['Companyname'] ?? '') ?>" />
                <?php if(isset($errors['Companyname'])): ?>
                    <div class="error"><?= htmlspecialchars($errors['Companyname']) ?></div>
                <?php endif; ?>

                <!-- Booth Area (Required) -->
                <label for="booth_area" class="form-label form-title primary-title">Approximate booth area required :</label>
               <input type="text" class="form-control inputForm-border mb-3 <?= isset($errors['areaname']) ? 'is-invalid' : '' ?>" 
    name="booth_area" id="booth_area" placeholder="sq.mtrs." required
    value="<?= $old_input['booth_area'] ?? '' ?>" />
<?php if(isset($errors['areaname'])): ?>
    <div class="error"><?= $errors['areaname'] ?></div>
<?php endif; ?>

                <!-- Booth Type and Opening Type -->
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12"> 
                        <h1 class="form-label form-title primary-title">Please Tick : Type of booth required :</h1>
                        <div class="form-check">
                            <input class="form-check-input inputForm-border" type="radio" name="booth_type"
                                value="Built-up Booth" required
                                <?= isset($old_input['booth_type']) && $old_input['booth_type'] === 'Built-up Booth' ? 'checked' : '' ?> />
                            <label class="form-check-label radio-title">
                                Built-up Booth (Min. 9 sq. mtrs.) (Ready Booth)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input inputForm-border" type="radio" name="booth_type" 
                                value="Raw Space" required
                                <?= isset($old_input['booth_type']) && $old_input['booth_type'] === 'Raw Space' ? 'checked' : '' ?> />
                            <label class="form-check-label radio-title">
                                Raw Space (Min. 18 sq. mtrs.)
                            </label>
                        </div>
                        <?php if(isset($errors['booth_type'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['booth_type']) ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <h1 class="form-label form-title primary-title">Opening :</h1>
                        <div class="form-check">
                            <input class="form-check-input inputForm-border" type="radio" name="opening_type"
                                value="Single Slide Open" required
                                <?= isset($old_input['opening_type']) && $old_input['opening_type'] === 'Single Slide Open' ? 'checked' : '' ?> />
                            <label class="form-check-label radio-title">Single Slide Open</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input inputForm-border" type="radio" name="opening_type"
                                value="Two Side Open" required
                                <?= isset($old_input['opening_type']) && $old_input['opening_type'] === 'Two Side Open' ? 'checked' : '' ?> />
                            <label class="form-check-label radio-title">Two Side Open (Min. 36 sq. mtrs)</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input inputForm-border" type="radio" name="opening_type"
                                value="Three Side Open" required
                                <?= isset($old_input['opening_type']) && $old_input['opening_type'] === 'Three Side Open' ? 'checked' : '' ?> />
                            <label class="form-check-label radio-title">Three Side Open (Min. 54 sq. mtrs)</label>
                        </div>
                        <?php if(isset($errors['opening_type'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['opening_type']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Brand Details (At least one required) -->
                <h3 class="form-label form-title primary-title">Brand Details :</h3>
                <div id="inputContainer">
                    <?php 
                    $brand_count = max(1, count($old_input['brandname'] ?? []));
                    for($i = 0; $i < $brand_count; $i++): 
                    ?>
                    <div class="row d-flex justify-content-center input-group">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="brandname_<?= $i ?>" class="form-label form-title-sub primary-title">Brand Name</label>
                            <input type="text" class="form-control inputForm-border <?= isset($errors['brandname'][$i]) ? 'is-invalid' : '' ?>" 
                                name="brandname[]" id="brandname_<?= $i ?>" placeholder="Brand Name" required
                                value="<?= htmlspecialchars($old_input['brandname'][$i] ?? '') ?>" />
                            <?php if(isset($errors['brandname'][$i])): ?>
                                <div class="error"><?= htmlspecialchars($errors['brandname'][$i]) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="Productdetail_<?= $i ?>" class="form-label form-title-sub primary-title">Product Detail</label>
                            <input type="text" class="form-control inputForm-border <?= isset($errors['Productdetail'][$i]) ? 'is-invalid' : '' ?>" 
                                name="Productdetail[]" id="Productdetail_<?= $i ?>" placeholder="Product Detail" required
                                value="<?= htmlspecialchars($old_input['Productdetail'][$i] ?? '') ?>" />
                            <?php if(isset($errors['Productdetail'][$i])): ?>
                                <div class="error"><?= htmlspecialchars($errors['Productdetail'][$i]) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                            <?php if($i === 0): ?>
                                <button type="button" id="addMore" class="more-btn">+</button>
                            <?php else: ?>
                                <button type="button" class="less-btn" onclick="removeField(this)">-</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
               
                <!-- Personal Details -->
                <h2 class="form-label form-title primary-title mb-3">Detail :</h2>
                <div class="detail-gender mb-3 row justify-content-center">
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2 ">
                        <label for="title" class="form-title-sub primary-title">Gender</label>
                        <select class="form-select form-select-lg mb-3 inputForm-border <?= isset($errors['title']) ? 'is-invalid' : '' ?>" 
                            name="title" id="title" required>
                            <option value="">-Select-</option>
                            <option value="Mr." <?= isset($old_input['title']) && $old_input['title'] === 'Mr.' ? 'selected' : '' ?>>Mr.</option>
                            <option value="Ms." <?= isset($old_input['title']) && $old_input['title'] === 'Ms.' ? 'selected' : '' ?>>Ms.</option>
                            <option value="Mrs." <?= isset($old_input['title']) && $old_input['title'] === 'Mrs.' ? 'selected' : '' ?>>Mrs.</option>
                            <option value="Dr." <?= isset($old_input['title']) && $old_input['title'] === 'Dr.' ? 'selected' : '' ?>>Dr.</option>
                        </select>
                        <?php if(isset($errors['title'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['title']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2">
                        <label for="firstname" class="form-title-sub primary-title">First</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['firstname']) ? 'is-invalid' : '' ?>" 
                            name="firstname" id="firstname" placeholder="First Name" required
                            value="<?= htmlspecialchars($old_input['firstname'] ?? '') ?>" />
                        <?php if(isset($errors['firstname'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['firstname']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2"> 
                        <label for="lastname" class="form-title-sub primary-title">Last</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['lastname']) ? 'is-invalid' : '' ?>" 
                            name="lastname" id="lastname" placeholder="Last Name" required
                            value="<?= htmlspecialchars($old_input['lastname'] ?? '') ?>" />
                        <?php if(isset($errors['lastname'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['lastname']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="exhibitionnumber" class="form-title-sub primary-title">Mobile No.</label>
                        <input type="tel" class="form-control inputForm-border <?= isset($errors['exhibitionnumber']) ? 'is-invalid' : '' ?>" 
                            name="exhibitionnumber" id="exhibitionnumber" placeholder="Mobile No" required
                            pattern="[0-9]{10}" value="<?= htmlspecialchars($old_input['exhibitionnumber'] ?? '') ?>" />
                        <?php if(isset($errors['exhibitionnumber'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['exhibitionnumber']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="email" class="form-title-sub primary-title">Email</label>
                        <input type="email" class="form-control inputForm-border <?= isset($errors['email']) ? 'is-invalid' : '' ?>" 
                            name="email" id="email" placeholder="Email Id" required
                            value="<?= htmlspecialchars($old_input['email'] ?? '') ?>" />
                        <?php if(isset($errors['email'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['email']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Designation and Address -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="Designation" class="form-title-sub primary-title">Designation</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['Designation']) ? 'is-invalid' : '' ?>" 
                            name="Designation" id="Designation" placeholder="Designation" required
                            value="<?= htmlspecialchars($old_input['Designation'] ?? '') ?>" />
                        <?php if(isset($errors['Designation'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['Designation']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="Addresstype" class="form-title-sub primary-title">Address</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['Addresstype']) ? 'is-invalid' : '' ?>" 
                            name="Addresstype" id="Addresstype" placeholder="Address" required
                            value="<?= htmlspecialchars($old_input['Addresstype'] ?? '') ?>" />
                        <?php if(isset($errors['Addresstype'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['Addresstype']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- City and Region -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="city" class="form-title-sub primary-title">City</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['city']) ? 'is-invalid' : '' ?>" 
                            name="city" id="city" placeholder="City" required
                            value="<?= htmlspecialchars($old_input['city'] ?? '') ?>" />
                        <?php if(isset($errors['city'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['city']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="Region" class="form-title-sub primary-title">State/Region</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['Region']) ? 'is-invalid' : '' ?>" 
                            name="Region" id="Region" placeholder="Region" required
                            value="<?= htmlspecialchars($old_input['Region'] ?? '') ?>" />
                        <?php if(isset($errors['Region'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['Region']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Postal Code and Country -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="postalcode" class="form-title-sub primary-title">PostalCode</label>
                        <input type="text" class="form-control inputForm-border <?= isset($errors['postalcode']) ? 'is-invalid' : '' ?>" 
                            name="postalcode" id="postalcode" placeholder="PostalCode" required
                            value="<?= htmlspecialchars($old_input['postalcode'] ?? '') ?>" />
                        <?php if(isset($errors['postalcode'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['postalcode']) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="country" class="form-title-sub primary-title">Country</label>
                        <select id="countryDropdown" class="form-select form-select-sm inputForm-border <?= isset($errors['country']) ? 'is-invalid' : '' ?>" 
                            name="country" required>
                            <option value="">Select Country</option>
                            <!-- Countries will be populated by JavaScript -->
                        </select>
                        <?php if(isset($errors['country'])): ?>
                            <div class="error"><?= htmlspecialchars($errors['country']) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- How did you hear about us? (Required) -->
                <h1 class="form-label form-title primary-title">How did you hear about us?</h1>
                <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="source" value="Whatsapp" id="Whatsapp" required
                        <?= isset($old_input['source']) && $old_input['source'] === 'Whatsapp' ? 'checked' : '' ?> />
                    <label class="form-check-label radio-title" for="Whatsapp">Whatsapp</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="source" value="SocialMedia" id="SocialMedia"
                        <?= isset($old_input['source']) && $old_input['source'] === 'SocialMedia' ? 'checked' : '' ?> />
                    <label class="form-check-label radio-title" for="SocialMedia">Social Media</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="source" value="Emailers" id="Emailers"
                        <?= isset($old_input['source']) && $old_input['source'] === 'Emailers' ? 'checked' : '' ?> />
                    <label class="form-check-label radio-title" for="Emailers">Emailers</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="source" value="Newspapers" id="Newspapers"
                        <?= isset($old_input['source']) && $old_input['source'] === 'Newspapers' ? 'checked' : '' ?> />
                    <label class="form-check-label radio-title" for="Newspapers">Newspapers</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="source" value="FriendsAndFamily" id="FriendsAndFamily"
                        <?= isset($old_input['source']) && $old_input['source'] === 'FriendsAndFamily' ? 'checked' : '' ?> />
                    <label class="form-check-label radio-title" for="FriendsAndFamily">Friends & Family</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input inputForm-border" type="radio" name="source" value="Other" id="Other"
                        <?= isset($old_input['source']) && $old_input['source'] === 'Other' ? 'checked' : '' ?> />
                    <label class="form-check-label radio-title" for="Other">Other</label>
                </div>
                <?php if(isset($errors['source'])): ?>
                    <div class="error"><?= htmlspecialchars($errors['source']) ?></div>
                <?php endif; ?>

                <!-- Important Notes -->
                <h5 class="form-label form-title primary-title">Please accept our request and allocate space accordingly</h5>
                <h4 class="secondary-title">Important Note:</h4>
                <span class="section-text-title impo mt-3">
                    These fields are compulsory to fill.
                </span>
                <p class="section-text-title impo">Please note that this is only an Exhibitor Request Form and not Exhibitor Contract Form. Our team will contact you immediately with further details once you fill in this request form. You become an Exhibitor only after your Exhibitor Contract Form, along with payment is accepted by us.</p>
                <p class="section-text-title impo">If you find any difficulty in filling Exhibitor Request Form, for assistance or queries, please contact:</p>
                
                <!-- Contact Information -->
                <div class="row">
                    <div class="col-md-6 contact-box">
                        <h5 class="secondary-title">Ahmedabad</h5>
                        <span class="section-text-title impo"><strong>Ms. Jyoti Bharadwaj</strong></span><br>
                        <span class="section-text-title impo"><strong>Mob. No:</strong> <a href="tel:+918511684938">+91 85116 84938</a></span><br>
                        <span class="section-text-title impo"><strong>Email:</strong> <a href="mailto:info@vibrantindiafair.com" class="email-link">info@vibrantindiafair.com</a></span>
                    </div>
                    <div class="col-md-6 mt-2 contact-box">
                        <h5 class="secondary-title">Ahmedabad</h5>
                        <span class="section-text-title impo"><strong>Mr. Naveen Chaturvedi</strong></span><br>
                        <span class="section-text-title impo"><strong>Mob. No:</strong> <a href="tel:+917433930669">+91 74339 30669</a></span><br>
                        <span class="section-text-title impo"><strong>Email:</strong> <a href="mailto:info@vibrantindiafair.com" class="email-link">info@vibrantindiafair.com</a></span>
                    </div>
                </div>    

                <!-- Submit Button -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="exhibit-btn" name="submit">Registration</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        // Add dynamic fields
        let maxFields = 10;
        let fieldCount = <?= $brand_count ?>;

        document.getElementById('addMore').addEventListener('click', function () {
            if (fieldCount < maxFields) {
                let container = document.getElementById('inputContainer');
                let newInputGroup = document.createElement('div');
                newInputGroup.classList.add('row', 'd-flex', 'justify-content-center', 'input-group', 'mt-3');
                newInputGroup.innerHTML = `
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label class="form-label form-title-sub primary-title">Brand Name</label>
                        <input type="text" class="form-control inputForm-border" name="brandname[]" placeholder="Brand Name" required />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label class="form-label form-title-sub primary-title">Product Detail</label>
                        <input type="text" class="form-control inputForm-border" name="Productdetail[]" placeholder="Product Detail" required />
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                        <button type="button" class="less-btn" onclick="removeField(this)">-</button>
                    </div>
                `;
                container.appendChild(newInputGroup);
                fieldCount++;
            } else {
                alert('You can only add up to 10 entries.');
            }
        });

        function removeField(button) {
            if (fieldCount > 1) {
                button.parentElement.parentElement.remove();
                fieldCount--;
            } else {
                alert('You must have at least one brand entry.');
            }
        }

        // Country dropdown population
        document.addEventListener('DOMContentLoaded', function() {
            const countries = [
                "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", 
                "Antigua and Barbuda", "Argentina", "Armenia", "Australia", 
                "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", 
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", 
                "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", 
                "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Côte d'Ivoire", 
                "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", 
                "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", 
                "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", 
                "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", 
                "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", 
                "Eritrea", "Estonia", "Eswatini (fmr. Swaziland)", "Ethiopia", "Fiji", 
                "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", 
                "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", 
                "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", 
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", 
                "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", 
                "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", 
                "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", 
                "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", 
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", 
                "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)", 
                "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", 
                "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", 
                "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", 
                "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", 
                "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", 
                "Saint Vincent and the Grenadines", "Samoa", "San Marino", 
                "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", 
                "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", 
                "Solomon Islands", "Somalia", "South Africa", "South Korea", 
                "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", 
                "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", 
                "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", 
                "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", 
                "United Arab Emirates", "United Kingdom", "United States of America", 
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", 
                "Yemen", "Zambia", "Zimbabwe"
            ];

            const countryDropdown = document.getElementById('countryDropdown');
            const selectedCountry = "<?= htmlspecialchars($old_input['country'] ?? '') ?>";
            
            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country;
                option.textContent = country;
                if (country === selectedCountry) {
                    option.selected = true;
                }
                countryDropdown.appendChild(option);
            });
        });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        
 <?php if (isset($_SESSION['form_success']) && $_SESSION['form_success']): ?>
        <script>
            Swal.fire({
                title: 'Thank You!',
                text: 'Your Delhi Exhibition  form has been submitted successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
        <?php unset($_SESSION['form_success']); ?>
    <?php endif; ?>

    <?php include "include/footer.php"; ?>
</body>
</html>