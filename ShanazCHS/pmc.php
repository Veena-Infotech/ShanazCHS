<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">
    <!-- AOS CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">



    <title>Sahnaz Chs | PMC
    </title>

    <!-- Bootstrap core CSS -->
     <style>
      .contact-btn {
        background-color: #0d6efd;
        /* Red background */
        color: white; /* White text */
        font-weight: bold;
        font-size: 16px;
        border: none;
        padding: 12px 30px;
        border-radius: 30px; /* Rounded edges */
        cursor: pointer;
        text-transform: uppercase;
        display: inline-block;
        text-align: center;
        transition: background 0.3s ease;
        margin-top: 20px;
      }

      .contact-btn:hover {
        background-color: #ff4d4d; /* Darker red on hover */
      }
      .modal-body {
      max-height: 70vh;
      /* 80% of the viewport height, you can adjust this */
      overflow-y: auto;
      /* Enable vertical scrolling */
      padding: 10px;
    }
    .custom-btn{
    background-color: #d3d3d3;
    border-radius: 25px;
    padding: 10px 15px;
  }
  .br{
    border-bottom-right-radius: 45px;
    border-bottom-left-radius: 45px;
  }
  .pmc-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            margin-top: 50px;
        }
        .pmc-content {
            max-width: 600px;
        }
        .pmc-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .pmc-btn:hover {
            background-color: #0056b3;
        }
        .pmc-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
     </style>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    

    <!-- ***** Header Area Start ***** -->
    <nav class="custom-navbar navbar navbar-expand-lg br navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="custom-logo navbar-brand d-flex align-items-center" href="index.php">
            <img src="./assets/images/SHANAZlogo.jpg" alt="Logo" style="width: 180px; border-radius: 20px;">
        </a>
        
        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#customNavbar" 
                aria-controls="customNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="customNavbar">
            <ul class="custom-nav navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="committee.php">Managing Committee</a></li>
                <li class="nav-item"><a class="nav-link " href="documents.php">Documents</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link custom-btn  active" href="pmc.php">PMC</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item btn btn-danger" style="background-color:rgba(255, 77, 77, 0.9); margin-left: 10px; border-radius: 10px;"><a class="nav-link " href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>

    <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>PMC</h3>
        </div>
      </div>
    </div>
  </div>

  <section class="pmc-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side - Text Content -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="pmc-content">
                    <h2>About Headway PMC</h2>
                    <p>Headway PMC is a leading project management consultancy specializing in providing high-quality solutions for infrastructure, real estate, and industrial projects. Our expert team ensures project success through efficient planning, execution, and monitoring.</p>
                    <p>With years of experience, we offer tailored solutions to meet the unique needs of our clients, ensuring cost-effective and timely project completion.</p>
                    
                    <!-- Open Document Button -->
                    <figcaption class="m-0">
                        <a data-bs-toggle="modal" data-bs-target="#headway" class="contact-btn">Open Document</a>
                    </figcaption>
                </div>
            </div>
            

            <!-- Right Side - Image -->
            <div class="col-md-6 text-center" data-aos="fade-left">
                <img src="./assets/Documents/headway.png" alt="Headway PMC" class="pmc-image">
            </div>
        </div>
    </div>
</section>
  

<section>
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="headway" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Container for the PDF rendered by pdf.js -->
            <div id="pdf-canvas-container-headway"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>




  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p class="mb-2">
        Copyright © 2025 Shanaz CHS. All rights reserved. Designed and
        Developed by
        <a href="https://theveenagroup.com/"  class="fw-bold"
          >VeenaInfotech</a
        >
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>

<script>
  // Function to render PDF using pdf.js
  function renderPDF(pdfUrl, containerId) {
    const canvasContainer = document.getElementById(containerId);

    // Ensure the container exists before proceeding
    if (!canvasContainer) {
      console.error(`Container with ID ${containerId} not found.`);
      return;
    }

    // Load the PDF document using pdf.js
    const loadingTask = pdfjsLib.getDocument(pdfUrl);

    loadingTask.promise.then(function (pdf) {
      const totalPages = pdf.numPages;  // Get total number of pages
      console.log("Total Pages in PDF: ", totalPages);

      // Clear previous canvases (if any)
      canvasContainer.innerHTML = '';

      // Function to render each page in sequence
      function renderPage(pageNum) {
        if (pageNum > totalPages) return;

        console.log("Rendering page: ", pageNum);

        pdf.getPage(pageNum).then(function (page) {
          const scale = 1.6; // Zoom level
          const viewport = page.getViewport({ scale: scale });

          // Create a canvas for the page and append it to the container
          const canvas = document.createElement('canvas');
          const context = canvas.getContext('2d');

          // Set canvas dimensions
          canvas.height = viewport.height;
          canvas.width = viewport.width;

          // Render the page
          page.render({
            canvasContext: context,
            viewport: viewport
          }).promise.then(function () {
            canvasContainer.appendChild(canvas); // Append the canvas
            renderPage(pageNum + 1); // Move to the next page
          });
        });
      }

      // Start rendering from the first page
      renderPage(1);
    }).catch(function (error) {
      console.error('Error loading PDF: ', error);
    });
  }

  // Event listener to initialize the PDF when the modal is shown
  document.getElementById('headway').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Headway Profile.pdf', 'pdf-canvas-container-headway');
  });

  
</script>
<!-- AOS JavaScript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Animation duration in milliseconds
    once: true, // Animation occurs only once
    easing: 'ease-in-out',
  });
</script>

</body>

</html>