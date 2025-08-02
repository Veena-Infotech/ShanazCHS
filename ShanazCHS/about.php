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

    <title>Shanaz Chs | About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!---Phospur icons-->
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">

<style>
  .body{
        font-family: "Montserrat", sans-serif;
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
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- AOS CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
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
                  <li class="nav-item"><a class="nav-link custom-btn active" href="about.php">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="committee.php">Managing Committee</a></li>
                  <li class="nav-item"><a class="nav-link " href="documents.php">Documents</a></li>
                  <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
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
            <h3>About Us</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Features Details -->
    <div class="container mt-4 tabs-content">
      <div class=" ">
        <div class="row g-0 align-items-center">
          <!-- Left Content -->
          <div class="col-lg-6 p-4" data-aos="fade-down">
            <div class="">
              <h2 class="text-primary">Welcome to Shanaz CHS</h2>
              <p class="card-text">
                Shanaz CHS is a prestigious residential society nestled in the
                serene and upscale neighborhood of Malabar Hill, Mumbai. Known
                for its breathtaking sea views and lush green surroundings, this
                exclusive society offers a blend of modern amenities and a
                peaceful living experience.
              </p>

              <p class="card-text">
                With its prime location and well-planned infrastructure, Shanaz
                CHS is the perfect place for those seeking luxury and
                tranquility in the heart of Mumbai.
              </p>
            </div>
          </div>
          <!-- Right Image -->
          <div class="col-lg-6">
            <img
              src="./assets/images/about-us (16).jpeg"
              class="img-fluid rounded-end"
              alt="Shanaz CHS Malabar Hill"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4 tabs-content" data-aos="fade-down">
      <div class=" ">
        <div class="row g-0 align-items-center">
          <!-- Left Content -->
          <div class="col-lg-6">
            <img
              src="./assets/images/about-us (3).jpeg"
              class="img-fluid rounded-end"
              alt="Shanaz CHS Malabar Hill"
            />
          </div>
          <div class="col-lg-6 p-4">
            <div class="">
        
              <p class="card-text">
                Shanaz Apartment offers an excellent selection of recreational
                and wellness amenities designed for a comfortable and enriching
                lifestyle. Residents can unwind in beautifully landscaped
                gardens, providing a serene environment for relaxation. The
                children’s play area ensures a safe and engaging space for kids
                to enjoy outdoor activities. The property is also well-connected
                to nearby gyms and fitness centers, allowing health-conscious
                individuals easy access to workout facilities. Additionally,
                thoughtfully designed community spaces encourage social
                interactions, making it a perfect blend of luxury and well-being
              </p>
            </div>
          </div>
          <!-- Right Image -->
          
        </div>
      </div>
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

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
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
