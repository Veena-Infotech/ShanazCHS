<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
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

    <title>Shanaz CHS | Gallery</title>

    <style>
     
        .grid__layout {
  max-width: 80rem;
  margin: 0 auto;
  padding: 1rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: 1fr 1fr;
  justify-content: center;
  grid-gap: 1rem;
  background-color: white;
}

img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.img__1 {
  grid-row: 1/3;
  grid-column: 1/2;
}

.img__3 {
  grid-row: 1/3;
  grid-column: 3/4;
}

.img__5 {
  grid-row: 2/4;
  grid-column: 2/3;
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
  .video-container video {
    width: 100%;
    max-width: 100%; /* Adjust this value to control video size */
    max-height: 100%; /* Adjust height as needed */
    cursor: pointer;
}

.modal video {
    width: 50%; /* Adjust this value for modal size */
    max-width: 700px;
    height: auto;
    border-radius: 10px;
}

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 50%;
        height: 50%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal video {
        width: 80%;
        height: auto;
        border-radius: 10px;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 40px;
        font-size: 40px;
        color: white;
        cursor: pointer;
    }

    </style>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!---Phospur icons-->
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">


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
                  <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="committee.php">Managing Committee</a></li>
                  <li class="nav-item"><a class="nav-link " href="documents.php">Documents</a></li>
                  <li class="nav-item"><a class="nav-link custom-btn active" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="pmc.php">PMC</a></li>

                  <li class="nav-item"><a class="nav-link " href="contact.php">Contact Us</a></li>
                  <li class="nav-item btn btn-danger" style="background-color:rgba(255, 77, 77, 0.9); margin-left: 10px; border-radius: 10px;"><a class="nav-link " href="logout.php">Log Out</a></li>
              </ul>
          </div>
      </div>
  </nav>
    <!-- ***** Header Area End ***** -->

    <!-- About us details -->
    <!-- CSS for this content is in assets/css/aboutus file -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Our Gallery</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Features Details -->
    <div class="container mt-4">
        <section class="grid__layout">
            <div class="img__1">
              <img src="./assets/images/about-us (2).jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div>
              <img src="./assets/images/about-us (5).jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div class="img__3">
              <img src="./assets/images/about-us (29).jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div>
              <img src="./assets/images/about-us (12).jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div class="img__5">
              <img src="./assets/images/about-us (14).jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div>
              <img src="./assets/images/about-us (29).jpeg" alt="galleryImg" loading="lazy">
            </div>
          </section>
    </div>
    <div class="container mt-4">
        <section class="grid__layout">
            <div class="img__1">
              <img src="./assets/images/gallery1.jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div>
              <img src="./assets/images/gallery2.jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div class="img__3">
              <img src="./assets/images/gallery4.jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div>
              <img src="./assets/images/gallery3.jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div class="img__5">
              <img src="./assets/images/gallery5.jpeg" alt="galleryImg" loading="lazy">
            </div>
          
            <div>
              <img src="./assets/images/about-us (24).jpeg" alt="galleryImg" loading="lazy">
            </div>
            <div class="video-container" onclick="openVideoModal('./assets/images/trim1.mp4')">
            <video src="./assets/images/trim1.mp4" muted></video>
        </div>

        <div class="video-container" onclick="openVideoModal('./assets/images/trim2.mp4')">
            <video src="./assets/images/trim2.mp4" muted></video>
        </div>
          </section>
    </div>

    <!-- Modal for video zoom -->
<div id="videoModal" class="modal">
    <span class="close" onclick="closeVideoModal()">&times;</span>
    <video id="modalVideo" controls autoplay></video>
</div>

  

    

    <footer class="bg-dark text-white py-4">
      <div class="container text-center">
        <p class="mb-2">
          Copyright © 2025 Shanaz CHS. All rights reserved. Designed and
          Developed by
          <a href="https://theveenagroup.com/" class="fw-bold">VeenaInfotech</a>
        </p>
      </div>
    </footer>

    <script>
    function openVideoModal(videoSrc) {
        const modal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');

        modal.style.display = 'flex';
        modalVideo.src = videoSrc;
        modalVideo.play();
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');

        modal.style.display = 'none';
        modalVideo.pause();
        modalVideo.src = "";
    }
</script>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
