    <?php
    // Database connection
    include("admin/includes/db.php");

    // Fetch images from the database
    $sql = "SELECT g.img, c.name AS category_name, s.name AS subcategory_name 
            FROM gallery g
            JOIN categories c ON g.category_id = c.id
            JOIN subcategories s ON g.subcategory_id = s.id
            WHERE c.name IN ('delhi23', 'mumbai23','delhi22','delhi19','delhi18')";

    $result = $conn->query($sql);

    if (!$result) {
        die("Database query failed: " . $conn->error); // Handle query errors
    }

    $images = [];
    while ($row = $result->fetch_assoc()) {
        // Ensure the image path is correct
        $row['img'] = './assets/images/gallery/' . basename($row['img']); // Adjust as needed
        $images[] = $row;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Photo Gallery </title>
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
                        <img class="showcase-banner-img" src="assets/images/gallery2.jpg" alt="">
                    </picture>
                </div>
                <div class="banner-header-title">PHOTO GALLERY</div>
            </div>
        </div>
    </section>
    <!-- --- End Banner Section --- -->
    
        <section>
            <!-- show gallery btn start -->
            <button
                class="gallery-show-btn"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasTabs"
                aria-controls="offcanvasTabs">
                <span>Show Gallery</span>
                <span><img src="./assets/images/tap.png" class="gallery-show-icon" alt="gg"></span>
            </button>
            <!-- show gallery btn end -->

            <!--  Sidebar  gallery start-->
            <div
                class="offcanvas offcanvas-start"
                tabindex="-1"
                id="offcanvasTabs"
                aria-labelledby="offcanvasTabsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasTabsLabel">ShowMore Gallery </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <button
                        class="gallery-canva-btn tab-link"
                        onclick="openSection(event, 'section1')"
                        data-bs-dismiss="offcanvas">
                        July New Delhi-2023
                    </button>
                    <button
                        class="gallery-canva-btn tab-link"
                        onclick="openSection(event, 'section2')"
                        data-bs-dismiss="offcanvas">
                        January Mumbai-2023
                    </button>
                    <button
                        class="gallery-canva-btn tab-link"
                        onclick="openSection(event, 'section3')"
                        data-bs-dismiss="offcanvas">
                        July New Delhi-2022
                    </button>
                    <button
                        class="gallery-canva-btn tab-link"
                        onclick="openSection(event, 'section4')"
                        data-bs-dismiss="offcanvas">
                        June New Delhi-2019
                    </button>
                    <button
                        class="gallery-canva-btn tab-link"
                        onclick="openSection(event, 'section5')"
                        data-bs-dismiss="offcanvas">
                        June New Delhi-2018
                    </button>
                </div>
            </div>
            <!--  Sidebar  gallery start-->

            <!--show gallery img start -->
            <div id="section1" class="section_tab active gallery-tab-content">
                <div class="container">
                    <h2 class=" primary-heading">July New Delhi-2023</h2>
                    <div class="btn-group gallery-dropdown">
                        <button
                            class="gallery-dropdown-show-btn dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Image Category
                        </button>
                        <ul class="dropdown-menu gallery-dropdown-list">
                            <li data-filter="all" class="gallery-dropdown-btn">ALL</li>
                            <li data-filter=".registration" class="gallery-dropdown-btn">
                                REGISTRATION
                            </li>
                            <li data-filter=".networking" class="gallery-dropdown-btn">
                                NETWORKING
                            </li>
                            <li data-filter=".public" class="gallery-dropdown-btn">
                                PUBLIC VISIT
                            </li>
                            <li data-filter=".inauguration" class="gallery-dropdown-btn">
                                INAUGURATION
                            </li>
                            <li data-filter=".product" class="gallery-dropdown-btn">
                                PRODUCTS
                            </li>
                            <li data-filter=".stall" class="gallery-dropdown-btn">STALL</li>
                            <li data-filter=".award" class="gallery-dropdown-btn">
                                AWARD NIGHT
                            </li>
                        </ul>
                    </div>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLIC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi23"></div>
                </div>
            </div>
            <div id="section2" class="section_tab gallery-tab-content">
                <div class="container">
                    <h2 class="primary-heading">January Mumbai-2023</h2>
                    <div class="btn-group gallery-dropdown">
                        <button
                            class="gallery-dropdown-show-btn dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Image Category
                        </button>
                        <ul class="dropdown-menu gallery-dropdown-list">
                            <li data-filter="all" class="gallery-dropdown-btn">ALL</li>
                            <li data-filter=".registration" class="gallery-dropdown-btn">
                                REGISTRATION
                            </li>
                            <li data-filter=".networking" class="gallery-dropdown-btn">
                                NETWORKING
                            </li>
                            <li data-filter=".public" class="gallery-dropdown-btn">
                                PUBLIC VISIT
                            </li>
                            <li data-filter=".inauguration" class="gallery-dropdown-btn">
                                INAUGURATION
                            </li>
                            <li data-filter=".product" class="gallery-dropdown-btn">
                                PRODUCTS
                            </li>
                            <li data-filter=".stall" class="gallery-dropdown-btn">STALL</li>
                            <li data-filter=".award" class="gallery-dropdown-btn">
                                AWARD NIGHT
                            </li>
                        </ul>
                    </div>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-mumbai23"></div>
                </div>
            </div>
            <div id="section3" class="section_tab gallery-tab-content">
                <div class="container">
                    <h2 class="primary-heading">July New Delhi-2022</h2>
                    <div class="btn-group gallery-dropdown">
                        <button
                            class="gallery-dropdown-show-btn dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Image Category
                        </button>
                        <ul class="dropdown-menu gallery-dropdown-list">
                            <li data-filter="all" class="gallery-dropdown-btn">ALL</li>
                            <li data-filter=".registration" class="gallery-dropdown-btn">
                                REGISTRATION
                            </li>
                            <li data-filter=".networking" class="gallery-dropdown-btn">
                                NETWORKING
                            </li>
                            <li data-filter=".public" class="gallery-dropdown-btn">
                                PUBLIC VISIT
                            </li>
                            <li data-filter=".inauguration" class="gallery-dropdown-btn">
                                INAUGURATION
                            </li>
                            <li data-filter=".product" class="gallery-dropdown-btn">
                                PRODUCTS
                            </li>
                            <li data-filter=".stall" class="gallery-dropdown-btn">STALL</li>
                            <li data-filter=".award" class="gallery-dropdown-btn">
                                AWARD NIGHT
                            </li>
                        </ul>
                    </div>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi22"></div>
                </div>
            </div>
            <div id="section4" class="section_tab gallery-tab-content">
                <div class="container">
                    <h2 class="primary-heading">June New Delhi-2019</h2>
                    <div class="btn-group gallery-dropdown">
                        <button
                            class="gallery-dropdown-show-btn dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Image Category
                        </button>
                        <ul class="dropdown-menu gallery-dropdown-list">
                            <li data-filter="all" class="gallery-dropdown-btn">ALL</li>
                            <li data-filter=".registration" class="gallery-dropdown-btn">
                                REGISTRATION
                            </li>
                            <li data-filter=".networking" class="gallery-dropdown-btn">
                                NETWORKING
                            </li>
                            <li data-filter=".public" class="gallery-dropdown-btn">
                                PUBLIC VISIT
                            </li>
                            <li data-filter=".inauguration" class="gallery-dropdown-btn">
                                INAUGURATION
                            </li>
                            <li data-filter=".product" class="gallery-dropdown-btn">
                                PRODUCTS
                            </li>
                            <li data-filter=".stall" class="gallery-dropdown-btn">STALL</li>
                            <li data-filter=".award" class="gallery-dropdown-btn">
                                AWARD NIGHT
                            </li>
                            <li data-filter=".certificate" class="gallery-dropdown-btn">
                                CERTIFICATE</li>
                        </ul>
                    </div>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".certificate">
                                CERTIFICATE
                            </button>

                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi19"></div>
                </div>
            </div>
            <div id="section5" class="section_tab gallery-tab-content">
                <div class="container">
                    <h2 class="primary-heading">June New Delhi-2018</h2>
                    <div class="btn-group gallery-dropdown">
                        <button
                            class="gallery-dropdown-show-btn dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Image Category
                        </button>
                        <ul class="dropdown-menu gallery-dropdown-list">
                            <li data-filter="all" class="gallery-dropdown-btn">ALL</li>
                            <li data-filter=".registration" class="gallery-dropdown-btn">
                                REGISTRATION
                            </li>
                            <li data-filter=".networking" class="gallery-dropdown-btn">
                                NETWORKING
                            </li>
                            <li data-filter=".public" class="gallery-dropdown-btn">
                                PUBLIC VISIT
                            </li>
                            <li data-filter=".inauguration" class="gallery-dropdown-btn">
                                INAUGURATION
                            </li>
                            <li data-filter=".product" class="gallery-dropdown-btn">
                                PRODUCTS
                            </li>
                            <li data-filter=".stall" class="gallery-dropdown-btn">STALL</li>
                            <li data-filter=".award" class="gallery-dropdown-btn">
                                AWARD NIGHT
                            </li>
                            <li data-filter=".certificate" class="gallery-dropdown-btn">
                                CERTIFICATE</li>
                        </ul>
                    </div>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".certificate">
                                CERTIFICATE
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi18"></div>
                </div>
            </div>
            <!--show gallery img end -->
        </section>
        <?php
        include "include/footer.php";
        ?>

    <!-- <script>
        // ✅ Populate Gallery Function
    function populateGallery(data, galleryId) {
        const galleryList = document.getElementById(galleryId);
        if (!galleryList || !data) return;

        galleryList.innerHTML = data
            .map(
                (item) => `
                <div class="mix ${item.subcategory} col-xl-3 col-md-4 col-6 col-sm-6 pd">
                    <img src="${item.img}" class="img-thumbnail-gallery"/>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <a data-fancybox="gallery" href="${item.img}">
                                <div class="gallery-magnify-icon">
                                    <span><i class="fa-solid fa-magnifying-glass-plus magnify-icon"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>`
            )
            .join("");

        // Initialize Fancybox
        Fancybox.bind("[data-fancybox]", {
            loop: true,
        });
    }
        document.addEventListener("DOMContentLoaded", function () {
            const galleryData = <?php echo json_encode($images); ?>;
            populateGallery(galleryData, "galleryList-delhi23");
            
            // Initialize MixItUp
            mixitup("#galleryList-delhi23");

            // Filter Buttons
            document.querySelectorAll(".gallery-tab-control").forEach(button => {
                button.addEventListener("click", function () {
                    mixitup("#galleryList-delhi23").filter(this.getAttribute("data-filter"));
                });
            });

            // Dropdown Filter
            document.querySelectorAll(".gallery-dropdown-btn").forEach(item => {
                item.addEventListener("click", function () {
                    document.querySelector(".gallery-dropdown-show-btn").textContent = this.textContent;
                    mixitup("#galleryList-delhi23").filter(this.getAttribute("data-filter"));
                });
            });
        });

        // ✅ Section Toggle
        function openSection(evt, sectionId) {
            document.querySelectorAll(".gallery-tab-content").forEach(section => section.style.display = "none");
            document.getElementById(sectionId).style.display = "block";
        }
    </script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const galleryData = <?php echo json_encode($images, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
            
            // ✅ Populate Gallery for Delhi 2023
            populateGallery(galleryData.filter(item => item.category_name === "delhi23"), "galleryList-delhi23");
            // ✅ Populate Gallery for Mumbai 2023
            populateGallery(galleryData.filter(item => item.category_name === "mumbai23"), "galleryList-mumbai23");
            // ✅ Populate Gallery for Delhi 2022
            populateGallery(galleryData.filter(item => item.category_name === "delhi22"), "galleryList-delhi22");
            // ✅ Populate Gallery for Delhi 2019
            populateGallery(galleryData.filter(item => item.category_name === "delhi19"), "galleryList-delhi19");
            // ✅ Populate Gallery for Delhi 2018
            populateGallery(galleryData.filter(item => item.category_name === "delhi18"), "galleryList-delhi18");

            // ✅ Initialize MixItUp
            let mixerDelhi23 = mixitup("#galleryList-delhi23");
            let mixerMumbai23 = mixitup("#galleryList-mumbai23");
            let mixerDelhi22 = mixitup("#galleryList-delhi22");
            let mixerDelhi19 = mixitup("#galleryList-delhi19");
            let mixerDelhi18 = mixitup("#galleryList-delhi18");

            // ✅ Filter Buttons - Handle Filtering
            document.querySelectorAll(".gallery-tab-control").forEach(button => {
                button.addEventListener("click", function () {
                    let filter = this.getAttribute("data-filter");
                    mixerDelhi23.filter(filter);
                    mixerMumbai23.filter(filter);
                    mixerDelhi22.filter(filter);
                    mixerDelhi19.filter(filter);
                    mixerDelhi18.filter(filter);
                });
            });

            // ✅ Dropdown Filter - Handle Filtering
            document.querySelectorAll(".gallery-dropdown-btn").forEach(item => {
                item.addEventListener("click", function () {
                    document.querySelector(".gallery-dropdown-show-btn").textContent = this.textContent;
                    let filter = this.getAttribute("data-filter");
                    mixerDelhi23.filter(filter);
                    mixerMumbai23.filter(filter);
                    mixerDelhi22.filter(filter);
                    mixerDelhi19.filter(filter);
                    mixerDelhi18.filter(filter);
                });
            });
        });

        // ✅ Function to Populate Gallery
        function populateGallery(data, galleryId) {
            const galleryList = document.getElementById(galleryId);
            if (!galleryList || !data) return;

            galleryList.innerHTML = data
                .map(
                    (item) => `
                    <div class="mix ${item.subcategory_name.replace(/\s+/g, '-').toLowerCase()} col-xl-3 col-md-4 col-6 col-sm-6 pd">
                        <img src="${item.img}" class="img-thumbnail-gallery" onerror="this.src='./assets/images/default.jpg'" />
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-content">
                                <a data-fancybox="gallery" href="${item.img}">
                                    <div class="gallery-magnify-icon">
                                        <span><i class="fa-solid fa-eye magnify-icon"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>`
                )
                .join("");

            // ✅ Initialize Fancybox
            Fancybox.bind("[data-fancybox]", {
                loop: true,
            });
        }

        // ✅ Function to Switch Sections
        function openSection(evt, sectionId) {
            document.querySelectorAll(".gallery-tab-content").forEach(section => section.style.display = "none");
            document.getElementById(sectionId).style.display = "block";
        }
    </script>

    </body>

    </html>