// *** Home- Index Page ***
// *** --- Header --- ***
// --- Header Toggle Button ---
function toggleMenu() {
  var nav = document.getElementById("navLinks");
  var toggleButton = document.getElementById("menuToggle");

  if (nav && toggleButton) {
    nav.classList.toggle("show");

    // Change button icon based on menu state
    toggleButton.innerHTML = nav.classList.contains("show") ? "✖" : "☰";
  }
}
//  Active Page Js
document.addEventListener("DOMContentLoaded", () => {
  let currentPage = window.location.pathname.split("/").pop();
  document.querySelectorAll(".submenu-list-menu a").forEach((item) => {
    if (item.getAttribute("href") === currentPage) {
      item.parentElement.classList.add("header-active");
    }
  });
});
//  End Active Page Js
// --- End Header Toggle Button ---
// --- Header Screen Scroll Sticki ---
document.addEventListener("DOMContentLoaded", () => {
  const headerHeight = document.querySelector("header").offsetHeight + 10;

  document.querySelectorAll(".link-menubar").forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute("href"));
      if (target) {
        window.scrollTo({
          top: target.offsetTop - headerHeight,
          behavior: "smooth",
        });
      }
    });
  });
});

// --- End Header Screen Scroll Sticki ---
// *** --- End Header --- ***

// --- OWL Carousel ---
$(document).ready(function () {
  var owl1 = $("#carousel1");

  owl1.owlCarousel({
    stagePadding: 90,
    loop: true,
    margin: 10,
    nav: false, // Disable default nav buttons
    autoplay: true,
    autoplayTimeout: 6000, // Sets autoplay interval (in ms)
    autoplayHoverPause: true, // Pauses autoplay on hover
    smartSpeed: 3000,
    responsive: {
      0: {
        items: 1,
        stagePadding: false,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });

  $("#prev1").click(function () {
    owl1.trigger("prev.owl.carousel");
  });
  $("#next1").click(function () {
    owl1.trigger("next.owl.carousel");
  });
});
// --- End OWL Carousel ---

// --- OWL Carousel Event Gallery Section ---
$(document).ready(function () {
  var owl2 = $("#event-gallery");

  owl2.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000, // Sets autoplay interval (in ms)
    autoplayHoverPause: true, // Pauses autoplay on hover
    smartSpeed: 3000,
    responsive: {
      0: { items: 1 },
      600: { items: 4 },
      1000: { items: 4 },
    },
  });

  $(".popup-link").magnificPopup({
    type: "image",
    gallery: { enabled: true },
  });
});
// --- End OWL Carousel Event Gallery Section ---

// --- Supported Comapy Section ---
function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll(".right-part-show").forEach((section) => {
    section.style.display = "none";
  });

  // Show the selected section
  document.getElementById(sectionId).style.display = "block";
}

$(document).ready(function () {
  var owl3 = $(".supported-owl");

  owl3.owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000, // Sets autoplay interval (in ms)
    autoplayHoverPause: true, // Pauses autoplay on hover
    smartSpeed: 3000,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });
});
// --- End OWL Carousel ---

// --- Primary Btn ---
let buttons = document.querySelectorAll(".primary-btn");

buttons.forEach((button) => {
  let pink = button.querySelector(".primary-btn-color");

  button.addEventListener("mouseenter", () => {
    pink.style.width = "100%";
    pink.style.height = "100%";
    pink.style.left = "0";
    pink.style.borderRadius = "25px";
  });

  button.addEventListener("mouseleave", () => {
    pink.style.width = "33px";
    pink.style.height = "33px";
    pink.style.left = "0";
    pink.style.borderRadius = "20px";
  });
});
// --- End Primary Btn ---

// --- Data Fetch image Map Function  ---
function initializeCarousel(data) {
  console.log("Initializing carousel with data:", data);

  // --- OWL Carousel Event Gallery Section ---
  // event-gallery-owl   @@@@@ Section 1 @@@@@
  $(".event-gallery-owl").each(function () {
    let carouselId = $(this).data("carousel");
    let images = data.carousels[carouselId];

    if (images) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel1 = $(this);
      $carousel1.empty(); // Clear previous images to prevent duplication

      images.forEach((image) => {
        $carousel1.append(` 
                  <div class="item event-gallery-box">
                    <a href="${image.src}" class="popup-link">
                      <img class="event-gallery-img" src="${image.src}" alt="${image.alt}">
                      <div class="event-gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus event-gallery-search"></i>
                      </div>
                    </a>
                </div>`);
      });

      // Initialize Owl Carousel for this specific container
      $carousel1.owlCarousel({
        // stagePadding: 40,
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 3000,
        responsive: {
          0: { items: 1, stagePadding: false },
          600: { items: 4 },
          1000: { items: 4 },
        },
      });
      // Initialize Magnific Popup for image popups
      $carousel1.find(".popup-link").magnificPopup({
        type: "image",
        gallery: { enabled: true },
      });
    }
  });
  // --- End OWL Carousel Event Gallery Section ---

  // --- Remarks of Exhibitors --- @@@@@ Section 2 @@@@@
  $(".remarks-exhibitors").each(function () {
    let carouselId = $(this).data("carousel");
    let remarksimgs = data.carousels[carouselId];

    if (remarksimgs) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel2 = $(this);
      $carousel2.empty();

      remarksimgs.forEach((remarksimage) => {
        $carousel2.append(`
                  <div class="item remarks-main-box">
                   <div class="testimonial-details-box">
                      <div class="testimonial-background-color"></div>
                      <div class="testimonial-img-box">
                        <img class="testimonial-img" src="${remarksimage.src}" alt="${remarksimage.alt1}">
                      </div>
                      <div class="remarks-work-box">
                        <div class="section-text-title">${remarksimage.alt1}</div>
                        <div class="section-text-content">${remarksimage.alt2}</div>
                      </div>
                    </div> 
                    <div class="section-text-content">${remarksimage.alt3}</div>
                  </div>`);
      });

      // Different settings for the second carousel
      $carousel2.owlCarousel({
        // stagePadding: 10,
        loop: true,
        margin: 10,
        nav: true, // Enable navigation buttons for the second carousel
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
          0: { items: 1 },
          600: { items: 1 },
          1000: { items: 1 },
        },
      });
      $("#remarks-prev2").click(function () {
        $carousel2.trigger("prev.owl.carousel");
      });

      $("#remarks-next2").click(function () {
        $carousel2.trigger("next.owl.carousel");
      });
    }
  });
  // --- End Remarks of Exhibitors ---

  // --- Supported Company Logo --- @@@@@ Section 2 @@@@@
  $(".supported-company").each(function () {
    let carouselId = $(this).data("carousel");
    let supportedimgs = data.carousels[carouselId];

    if (supportedimgs) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel3 = $(this);
      $carousel3.empty();

      for (let i = 0; i < supportedimgs.length; i += 2) {
        let supportedimage1 = supportedimgs[i];
        let supportedimage2 = supportedimgs[i + 1];

        // supportedimgs.forEach(supportedimage => {
        $carousel3.append(`
                <div class="item">
                  <div class="supported-img-box">
                    <img class="supported-company-logo" src="${
                      supportedimage1.src
                    }" alt="${supportedimage1.alt}">
                  </div>
                  ${
                    supportedimage2
                      ? `
                  <div class="supported-img-box">
                    <img class="supported-company-logo" src="${supportedimage2.src}" alt="${supportedimage2.alt}">
                  </div> `
                      : ""
                  }
                </div>`);
      }

      // Different settings for the second carousel
      $carousel3.owlCarousel({
        // stagePadding: 10,
        loop: true,
        margin: 10,
        nav: true, // Enable navigation buttons for the second carousel
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 2000,
        smartSpeed: 3000,
        autoplaySpeed: 3000,
        slideTransition: "linear",
        responsive: {
          0: { items: 3 },
          600: { items: 4 },
          1000: { items: 4 },
        },
      });
    }
  });
  // --- End Supported Company Logo ---

  // --- Why Exhibit Page ---
  // --- Exhibition Stall Design Section ---
  $(".exhibition-stall-design").each(function () {
    let carouselId = $(this).data("carousel");
    let exhibitionStalls = data.carousels[carouselId];

    if (exhibitionStalls) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel4 = $(this);
      $carousel4.empty();

      exhibitionStalls.forEach((exhibitionStall) => {
        $carousel4.append(`
                  <div class="item">
                    <div class="exhibition-carousel-stall-img-box">
                      <img class="exhibition-carousel-stall-img" src="${exhibitionStall.src}" alt="${exhibitionStall.alt}">
                    </div>
                  </div>`);
      });

      // Different settings for the second carousel
      $carousel4.owlCarousel({
        // stagePadding: 10,
        loop: true,
        margin: 10,
        nav: true, // Enable navigation buttons for the second carousel
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
          0: { items: 1 },
          600: { items: 2 },
          1000: { items: 2 },
        },
      });
      $("#exhi-stall-prev").click(function () {
        $carousel4.trigger("prev.owl.carousel");
      });

      $("#exhi-stall-next").click(function () {
        $carousel4.trigger("next.owl.carousel");
      });
    }
  });
  // --- End Exhibition Stall Design Section ---
  // --- End Why Exhibit Page ---

  // --- Why Visit Page OWL Section ---
  $(".why-visit-main-owl").each(function () {
    let carouselId = $(this).data("carousel");
    let whyVisits = data.carousels[carouselId];

    if (whyVisits) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel5 = $(this);
      $carousel5.empty();

      whyVisits.forEach((whyVisit) => {
        $carousel5.append(`
                  <div class="item">
                    <div class="why-visit-owl-img-box">
                      <img class="why-visit-owl-img" src="${whyVisit.src}" alt="${whyVisit.alt}">
                    </div>
                  </div>`);
      });

      // Different settings for the second carousel
      $carousel5.owlCarousel({
        // stagePadding: 10,
        loop: true,
        margin: 10,
        nav: true, // Enable navigation buttons for the second carousel
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
          0: { items: 1 },
          600: { items: 1 },
          1000: { items: 2 },
        },
      });
      $("#why-visit-prev").click(function () {
        $carousel5.trigger("prev.owl.carousel");
      });

      $("#why-visit-next").click(function () {
        $carousel5.trigger("next.owl.carousel");
      });
    }
  });
  // --- End Why Visit Page OWL Section ---
}
$(document).ready(function () {
  initializeCarousel(carouselData1);
});
// --- End Data Fetch Image Map Function ---
// *** End Home- Index Page ***

// *** Exhibitor Profile ***
// --- FAQ Section ---
document.addEventListener("DOMContentLoaded", () => {
  const faqContainer = document.querySelector(".faq-accordion");

  // Check if .faq-accordion element exists
  if (!faqContainer) {
    console.error("Error: .faq-accordion element not found.");
    return;
  }

  // Check if faqData exists and is an array
  if (
    typeof faqData === "undefined" ||
    !Array.isArray(faqData) ||
    faqData.length === 0
  ) {
    console.error("Error: faqData is not defined or is empty.");
    return;
  }

  // Populate FAQ dynamically
  faqContainer.innerHTML = faqData
    .map(
      (faq, index) => `
      <div class="faq-accordion-item">
        <div class="faq-accordion-item-header" data-index="${index}">${faq.question}</div>
        <div class="faq-accordion-item-body" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
          <div class="faq-accordion-item-body-content">
            <div class="faq-main-content-box">
              <img class="faq-img" src="${faq.image}" alt="FAQ Image">
              <div class="faq-content">${faq.answer}</div>
            </div>
          </div>
        </div>
      </div>`
    )
    .join("");

  //Attach event listeners safely
  document.querySelectorAll(".faq-accordion-item-header").forEach((header) => {
    header.addEventListener("click", function () {
      const body = this.nextElementSibling;

      // Close all other FAQs
      document.querySelectorAll(".faq-accordion-item-body").forEach((item) => {
        if (item !== body) {
          item.style.maxHeight = "0";
          item.previousElementSibling.classList.remove("active");
        }
      });

      // Toggle current FAQ
      if (body.style.maxHeight === "0px" || !body.style.maxHeight) {
        body.style.maxHeight = body.scrollHeight + "px";
        this.classList.add("active");
      } else {
        body.style.maxHeight = "0";
        this.classList.remove("active");
      }
    });
  });
});

// --- End FAQ Section ---
// *** End Exhibitor Page ***

// --- Footer Back to Top Button ---
document.addEventListener("DOMContentLoaded", function () {
  const backToTopBtn = document.getElementById("backToTop");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 400) {
      // Show after scrolling 200px
      backToTopBtn.classList.add("show");
    } else {
      backToTopBtn.classList.remove("show");
    }
  });

  backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
// --- End Footer Back to Top Button ---

// --- Sponsorship Price Section ---
// --- Sponsoship FAQ Price Section ---
const faqItems = document.querySelectorAll(".sponsorship-faq-item");

faqItems.forEach((item) => {
  item.addEventListener("click", () => {
    item.classList.toggle("sponsorship-active");
  });
});
// --- End Sponsoship FAQ Price Section ---
// --- End Sponsorship Price Section ---

// Ensure the DOM is fully loaded before executing scripts
document.addEventListener("DOMContentLoaded", function () {
  // Button Click After Show Section ---
  // --- Participation Charges Section ---
  const shellSchemeBtn = document.getElementById("shell-scheme-btn");
  const rawSpaceBtn = document.getElementById("raw-space-btn");
  const shellSchemeSection = document.getElementById("shell-scheme-section");
  const rawSpaceSection = document.getElementById("raw-space-section");

  if (shellSchemeBtn && rawSpaceBtn && shellSchemeSection && rawSpaceSection) {
    shellSchemeBtn.addEventListener("click", function () {
      showSectionAndHighlight("shell-scheme-section", "shell-scheme-btn");
    });

    rawSpaceBtn.addEventListener("click", function () {
      showSectionAndHighlight("raw-space-section", "raw-space-btn");
    });

    function showSectionAndHighlight(sectionId, buttonId) {
      // Hide both sections
      shellSchemeSection.style.display = "none";
      rawSpaceSection.style.display = "none";

      // Remove active class from both buttons
      shellSchemeBtn.classList.remove("participation-charges-active");
      rawSpaceBtn.classList.remove("participation-charges-active");

      // Show selected section
      document.getElementById(sectionId).style.display = "block";

      // Add active class to clicked button
      document
        .getElementById(buttonId)
        .classList.add("participation-charges-active");
    }

    // Default to Shell Scheme on page load
    showSectionAndHighlight("shell-scheme-section", "shell-scheme-btn");
  }

  // --- End Participation Charges Section ---

  // --- Visiting Hours Section ---
  const visitingDelhiBtn = document.getElementById("visiting-delhi-btn");
  const visitingChennaiBtn = document.getElementById("visiting-channai-btn");
  const visitingDelhiSection = document.getElementById(
    "visiting-delhi-section"
  );
  const visitingChennaiSection = document.getElementById(
    "visiting-channai-section"
  );

  if (
    visitingDelhiBtn &&
    visitingChennaiBtn &&
    visitingDelhiSection &&
    visitingChennaiSection
  ) {
    visitingDelhiBtn.addEventListener("click", function () {
      showVisitingSection("visiting-delhi-section", "visiting-delhi-btn");
    });

    visitingChennaiBtn.addEventListener("click", function () {
      showVisitingSection("visiting-channai-section", "visiting-channai-btn");
    });

    function showVisitingSection(sectionId, buttonId) {
      // Hide both sections
      visitingDelhiSection.style.display = "none";
      visitingChennaiSection.style.display = "none";

      // Remove active class from both buttons
      visitingDelhiBtn.classList.remove("visiting-timing-active");
      visitingChennaiBtn.classList.remove("visiting-timing-active");

      // Show selected section
      document.getElementById(sectionId).style.display = "block";

      // Add active class to clicked button
      document.getElementById(buttonId).classList.add("visiting-timing-active");
    }

    // Default to Delhi section on page load
    showVisitingSection("visiting-delhi-section", "visiting-delhi-btn");
  }
});

// --- End Visiting Hours Section ---
// End Button Click After Show Section ---

// about segment js  ends
document.addEventListener("DOMContentLoaded", function () {
  function generateSegments(data, containerId) {
    const container = document.getElementById(containerId);
    if (!container || !Array.isArray(data) || data.length === 0) return;

    // Append instead of overwriting to prevent data loss
    data.forEach((item) => {
      const segment = document.createElement("div");
      segment.classList.add("visitor-segmentation-segment");
      segment.setAttribute("data-aos", "zoom-in");
      segment.setAttribute("data-aos-duration", "1000");

      segment.innerHTML = `
        <h3 class="visitor-segmentation-count" data-count="${item.count}">0%</h3>
        <p class="visitor-segmentation-text">${item.name}</p>
      `;

      container.appendChild(segment);
    });
  }

  // Ensure `businessProfileData` and `jobProfileData` exist before calling
  if (
    typeof businessProfileData !== "undefined" &&
    document.getElementById("businessProfile")
  ) {
    generateSegments(businessProfileData, "businessProfile");
  }
  if (
    typeof jobProfileData !== "undefined" &&
    document.getElementById("jobProfile")
  ) {
    generateSegments(jobProfileData, "jobProfile");
  }

  // Animate Counting Numbers
  let counters = document.querySelectorAll(".visitor-segmentation-count");
  let observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          let target = entry.target;
          let count = parseInt(target.getAttribute("data-count"));
          animateCount(target, count);
          target.parentElement.classList.add("visible");
        }
      });
    },
    { threshold: 0.4 }
  );

  counters.forEach((counter) => observer.observe(counter));

  function animateCount(element, targetValue) {
    let start = 0;
    let duration = 1500;
    let stepTime = Math.max(10, Math.floor(duration / targetValue));

    let timer = setInterval(() => {
      start += 1;
      element.textContent = start + "%";
      if (start >= targetValue) clearInterval(timer);
    }, stepTime);
  }
});
// Visitor Business proflie js and job proflie end js

// 16 segments js data fech start js
document.addEventListener("DOMContentLoaded", function () {
  const productContainer = document.getElementById("product-container");
  if (!productContainer || typeof products === "undefined") return;

  let rowHtml = "";
  for (let i = 0; i < products.length; i += 4) {
    rowHtml += `<div class="row justify-content-center">`;
    rowHtml += products
      .slice(i, i + 4)
      .map(
        (product) => `
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center">
          <div class="product-box" data-aos="zoom-in" data-aos-duration="1000">
            <div class="product-img-box">
              <img class="product-img"
                src="${product.src}"
                alt="${product.title}"
                class="img-fluid"
              />
            </div>
            <div class="hightlight-product-text">${product.title}</div>
          </div>
        </div>
        `
      )
      .join("");
    rowHtml += `</div>`;
  }

  productContainer.innerHTML = rowHtml;
});
// 16 segments js data fech end js

// Off-canvas Gallery Section tab start js
function openSection(event, sectionId) {
  document
    .querySelectorAll(".section_tab")
    .forEach((s) => (s.style.display = "none"));
  document
    .querySelectorAll(".tab-link")
    .forEach((t) => t.classList.remove("active"));

  document.getElementById(sectionId)?.classList.add("active");
  document.getElementById(sectionId).style.display = "block";
  event.currentTarget.classList.add("active");
}

// Show only the first section on page load
document.addEventListener("DOMContentLoaded", () => {
  document
    .querySelectorAll(".section_tab")
    .forEach((s, i) => (s.style.display = i ? "none" : "block"));
  document.querySelector(".tab-link")?.classList.add("active");
});
// Off-canvas Gallery Section tab end js

// video js start
document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.getElementById("video-carousel");

  // Generate video thumbnails dynamically
  for (let i = 0; i < videos.length; i++) {
    const videoItem = document.createElement("div");
    videoItem.classList.add("item");

    // Get the first and second video (if available)
    const video1 = videos[i];
    const video2 = videos2[i];

    videoItem.innerHTML = `
      <div class="video-pair">
        <!-- First Video -->
        <div class="video-item" data-video-id="${video1.id}">
          <div class="video-card">
            <div class="video-thumbnail-container video-thumbnail-hover">
              <img src="assets/images/video-thumbnil.webp" class="video-thumbnail" alt="${
                video1.title
              }" />
              <div class="video-play-btn">
                <img src="assets/images/play-button.png" alt="Play" width="60"/>
              </div>
            </div>
          </div>
        </div>

        <!-- Second Video (if available) -->
        ${
          video2
            ? `
        <div class="video-item mt-3" data-video-id="${video2.id}">
          <div class="video-card">
            <div class="video-thumbnail-container video-thumbnail-hover">
              <img src="assets/images/video-thumbnil.webp" class="video-thumbnail" alt="${video2.title}" />
              <div class="video-play-btn">
                <img src="assets/images/play-button.png" alt="Play" width="60"/>
              </div>
            </div>
          </div>
        </div>
        `
            : ""
        }
      </div>
    `;

    // Attach event listeners for opening the modal
    const videoElements = videoItem.querySelectorAll(".video-item");

    videoElements.forEach((videoElement) => {
      const videoId = videoElement.getAttribute("data-video-id");

      videoElement.addEventListener("click", () => openVideoModal(videoId));

      // Also make sure clicking on the play button triggers the modal
      const playButton = videoElement.querySelector(".video-play-btn");
      playButton.addEventListener("click", (e) => {
        e.stopPropagation(); // Prevent click bubbling
        openVideoModal(videoId);
      });
    });

    carousel.appendChild(videoItem);
  }

  // Initialize Owl Carousel
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 2 },
      992: { items: 3 },
    },
  });

  // Custom navigation handlers
  $("#video-carousel-prev").click(function () {
    $(".owl-carousel").trigger("prev.owl.carousel");
  });

  $("#video-carousel-next").click(function () {
    $(".owl-carousel").trigger("next.owl.carousel");
  });

  // Open modal function
  window.openVideoModal = function (videoId) {
    const modal = document.getElementById("videoModal");
    const player = document.getElementById("videoPlayer");
    if (modal && player) {
      player.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&enablejsapi=1`;
      modal.style.display = "flex";
      document.body.style.overflow = "hidden";
    } else {
      console.error("Error: Modal or video player not found.");
    }
  };

  // Close modal function
  window.closeVideoModal = function () {
    const modal = document.getElementById("videoModal");
    const player = document.getElementById("videoPlayer");
    if (modal && player) {
      player.src = "";
      modal.style.display = "none";
      document.body.style.overflow = "auto";
    }
  };

  // Close modal when clicking outside
  window.onclick = function (event) {
    if (event.target === document.getElementById("videoModal")) {
      closeVideoModal();
    }
  };

  // Close modal with ESC key
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeVideoModal();
    }
  });
});

//video js end
//Initialize AOS
AOS.init();

// exhibition venue
function showCustomEvent(day) {
  // Remove active class from all buttons
  document
    .querySelectorAll(".venue-event-buttons .event-btn")
    .forEach((button) => button.classList.remove("active"));

  // Add active class to clicked button
  document
    .querySelector(`.venue-event-buttons .event-btn:nth-child(${day})`)
    .classList.add("active");

  // Hide all event content
  document
    .querySelectorAll(".venue-event-content, .venue-event-content-2")
    .forEach((content) => {
      content.style.opacity = "0";
      setTimeout(() => {
        content.classList.remove("active");
      }, 300); // Delay to match transition
    });

  // Show selected event content with animation
  setTimeout(() => {
    document.getElementById(`venue-event-${day}-map`).classList.add("active");
    document
      .getElementById(`venue-event-${day}-details`)
      .classList.add("active");

    // Ensure opacity change happens after display change
    setTimeout(() => {
      document.getElementById(`venue-event-${day}-map`).style.opacity = "1";
      document.getElementById(`venue-event-${day}-details`).style.opacity = "1";
    }, 50);
  }, 300);
}

// Define the countries array globally
const countries = [
  "Afghanistan",
  "Albania",
  "Algeria",
  "Andorra",
  "Angola",
  "Argentina",
  "Australia",
  "Austria",
  "Bangladesh",
  "Belgium",
  "Brazil",
  "Canada",
  "China",
  "Denmark",
  "Egypt",
  "France",
  "Germany",
  "India",
  "Indonesia",
  "Italy",
  "Japan",
  "Malaysia",
  "Mexico",
  "Nepal",
  "Netherlands",
  "Pakistan",
  "Philippines",
  "Russia",
  "Saudi Arabia",
  "South Africa",
  "Spain",
  "Sri Lanka",
  "Sweden",
  "Thailand",
  "United Arab Emirates",
  "United Kingdom",
  "United States",
  "Vietnam",
  "Zimbabwe",
];

// Function to populate the dropdown
function loadCountries() {
  let countrySelect = document.getElementById("countryDropdown");

  // Ensure the element exists before proceeding
  if (!countrySelect) {
    console.error("Dropdown element not found!");
    return;
  }

  // Add default option
  let defaultOption = document.createElement("option");
  defaultOption.value = "";
  defaultOption.textContent = "-Select-";
  countrySelect.appendChild(defaultOption);

  // Add countries dynamically
  countries.forEach((country) => {
    let option = document.createElement("option");
    option.value = country;
    option.textContent = country;
    countrySelect.appendChild(option);
  });
}

// Run function when the DOM is fully loaded
document.addEventListener("DOMContentLoaded", loadCountries);
