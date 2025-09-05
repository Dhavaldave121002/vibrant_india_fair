<!DOCTYPE html>
<html lang="en">
<head>

    <title> Registered Vendor </title>

     <?php
    include "include/header.php";
    ?>
</head>
<body>

<div class="container mt-4">
    <h3 class="primary-heading">REGISTERED VENDOR</h3>
    <div class="accordion" id="vendorAccordion">
        
        <!-- Registered Fabricators -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="fabricatorsHeading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fabricatorsCollapse">
                    Registered Fabricators
                </button>
            </h2>
            <div id="fabricatorsCollapse" class="accordion-collapse collapse show" data-bs-parent="#vendorAccordion">
                <div class="accordion-body">
                    <?php include 'fetch_vendors.php'; ?>  
                    <script>
                        fetch('fetch_vendors.php?subclass=Fabrications')
                            .then(response => response.text())
                            .then(data => document.querySelector('#fabricatorsCollapse .accordion-body').innerHTML = data);
                    </script>
                </div>
            </div>
        </div>

        <!-- Registered Logistic Service -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="logisticsHeading">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#logisticsCollapse">
                    Registered Logistic Service
                </button>
            </h2>
            <div id="logisticsCollapse" class="accordion-collapse collapse" data-bs-parent="#vendorAccordion">
                <div class="accordion-body">
                    <?php include 'fetch_vendors.php'; ?>
                    <script>
                        fetch('fetch_vendors.php?subclass=Logistics')
                            .then(response => response.text())
                            .then(data => document.querySelector('#logisticsCollapse .accordion-body').innerHTML = data);
                    </script>
                </div>
            </div>
        </div>

    </div>
</div>
 <?php
    include "include/footer.php";
    ?>
</body>
</html>
