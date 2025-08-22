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



    <title>Shanaz Chs | Documents
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
        <a class="custom-logo navbar-brand d-flex align-items-center" href="home.php">
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
                <li class="nav-item"><a class="nav-link custom-btn active" href="documents.php">Documents</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="pmc.php">PMC</a></li>

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
          <h3>Important Documents</h3>
        </div>
      </div>
    </div>
  </div>

  
  <div class="container overflow-hidden mt-5" data-aos="fade-right">
    <div class="row gy-4 gy-lg-0 gx-xxl-5">


    <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents///MINUTES OF SPL. GEN. BODY MEETING DT. 5.8.2025.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">MINUTES OF SPL. GEN. BODY MEETING DT. 5.8.2025</h4>
                <a data-bs-toggle="modal" data-bs-target="#minutesofsgbm5.8.2025" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents///feas-report.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Feasibility Report Headway Development Management LLP</h4>
                <a data-bs-toggle="modal" data-bs-target="#feasibility-report" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents//feas-rep-nepean.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Feasibility Report Mangurdekar & Asso.</h4>
                <a data-bs-toggle="modal" data-bs-target="#appointment-developer" class="contact-btn">Open Document</a>
              </figcaption>

            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents//notice and mins.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Notice & Minutes 19.6.2024</h4>
                <a data-bs-toggle="modal" data-bs-target="#crossConcent" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents//notice-20th.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Notice & Minutes of SGBM Dtd. 6.12.2024</h4>
                <a data-bs-toggle="modal" data-bs-target="#notice-24" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents//10jan.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Notice & Minutes of SGBM Dtd. 24.1.2025</h4>
                <a data-bs-toggle="modal" data-bs-target="#10jan" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents//3march.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Notice for SGBM Dated 03.03.2025</h4>
                <a data-bs-toggle="modal" data-bs-target="#3march" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets//Documents//minutes-19thMarch2025.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Minutes for SGBM Dated 19th Mar,2025</h4>
                <a data-bs-toggle="modal" data-bs-target="#minutes-19march" class="contact-btn">Open Document</a>
                
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  </div>


  <section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="minutesofsgbm5.8.2025" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-minutesofsgbm5.8.2025"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="feasibility-report" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-feasibility-report"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Minutes General Body-->
<section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="appointment-developer" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-appointment-developer"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

  <!--Agenda General Body-->
<section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="crossConcent" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-crossConcent"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

 <!--notice 24th-->
 <section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="notice-24" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-notice-24"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!--notice 10th-->
<section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="10jan" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-10jan"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!--notice 3march-->
<section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="3march" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-3march"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!--minutes 19th March -->
<section>
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="minutes-19march" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Container for the PDF rendered by pdf.js -->
          <div id="pdf-canvas-container-19march"></div>
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
        <a href="https://theveenagroup.com/"  class="fw-bold">VeenaInfotech</a>
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

    // Get the modal ID from the container
    const modal = canvasContainer.closest('.modal');
    if (!modal) {
        console.error(`No modal found for container ID: ${containerId}`);
        return;
    }

    const modalId = modal.id;
    const modalHeader = modal.querySelector('.modal-header');

    if (!modalHeader) {
        console.error(`Modal header not found for modal ID: ${modalId}`);
        return;
    }

    // Remove existing download button if any
    /*const existingBtn = document.getElementById(`download-btn-${modalId}`);
    if (existingBtn) existingBtn.remove();

    // Create a new download button
    const downloadBtn = document.createElement('button');
    downloadBtn.id = `download-btn-${modalId}`;
    downloadBtn.innerText = 'Download PDF';
    downloadBtn.style.padding = '8px 16px';
    downloadBtn.style.marginLeft = 'auto';
    downloadBtn.style.backgroundColor = '#28a745';
    downloadBtn.style.color = '#fff';
    downloadBtn.style.border = 'none';
    downloadBtn.style.borderRadius = '5px';
    downloadBtn.style.cursor = 'pointer';

    // Add hover effect
    downloadBtn.onmouseover = () => downloadBtn.style.backgroundColor = '#218838';
    downloadBtn.onmouseout = () => downloadBtn.style.backgroundColor = '#28a745';

    // Add click event to download the PDF
    downloadBtn.addEventListener('click', function () {
        const link = document.createElement('a');
        link.href = pdfUrl;
        link.download = pdfUrl.split('/').pop(); // Extracts filename from URL
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    // Append the button to the modal header
    modalHeader.appendChild(downloadBtn);*/

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

// Calling function in modal event listener

document.getElementById('minutesofsgbm5.8.2025').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/MINUTES OF SPL. GEN. BODY MEETING DT. 5.8.2025.pdf', 'pdf-canvas-container-minutesofsgbm5.8.2025');
});

document.getElementById('feasibility-report').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Feasibility Report Headway Development Management LLP.pdf', 'pdf-canvas-container-feasibility-report');
});

  document.getElementById('appointment-developer').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Feasibility Report Mangurdekar & Asso..pdf', 'pdf-canvas-container-appointment-developer');
  });

  document.getElementById('crossConcent').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Notice & Minutes 19.6.2024.pdf', 'pdf-canvas-container-crossConcent');
  });

  document.getElementById('notice-24').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Notice & Minutes of SGBM Dtd. 6.12.2024.pdf', 'pdf-canvas-container-notice-24');
  });
  document.getElementById('10jan').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Notice & Minutes of SGBM Dtd. 24.1.2025.pdf', 'pdf-canvas-container-10jan');
  });
  document.getElementById('3march').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Notice for SGBM dtd. 19.3.2025.pdf', 'pdf-canvas-container-3march');
  });
  document.getElementById('minutes-19march').addEventListener('show.bs.modal', function () {
    renderPDF('./assets/Documents/Minutes of SGBM dtd 19.3.2025.pdf', 'pdf-canvas-container-19march');
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