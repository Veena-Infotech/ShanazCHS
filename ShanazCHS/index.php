<?php
session_start();


//Checking if the user is logged in or not if not then redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("Location: login.html");
  exit();
}

if (isset($_SESSION['error'])) {
  echo "<div id='toast' style='position: fixed; top: 20px; right: 20px; background-color: #f66; color: #fff; padding: 10px 20px; border-radius: 5px;'>" . $_SESSION['error'] . "</div>";
  unset($_SESSION['error']);
  echo "<script>
        setTimeout(() => document.getElementById('toast').style.display = 'none', 5000);
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <title>Shanaz CHS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!---Phospur icons-->
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

  <!-- Additional CSS Files -->
  <style>
    .latest-documents .item .thumb img {
      cursor: pointer;
      transition: transform 0.3s ease-in-out;
    }

    .latest-documents .item .thumb img:hover {
      transform: scale(0.9);
    }



    .gallery-item {
      flex: 0 0 auto;
      width: 300px;
      height: 200px;
      border-radius: 10px;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @keyframes scrollGallery {
      from {
        transform: translateX(0);
      }

      to {
        transform: translateX(-100%);
      }
    }

    .view-gallery-btn {
      text-align: center;
      margin-top: 20px;
    }

    .contact-btn {
      background-color: #0d6efd;
      /* Red background */
      color: white;
      /* White text */
      font-weight: bold;
      font-size: 16px;
      border: none;
      padding: 12px 30px;
      border-radius: 30px;
      /* Rounded edges */
      cursor: pointer;
      text-transform: uppercase;
      display: inline-block;
      text-align: center;
      transition: background 0.3s ease;
      margin-top: 20px;
    }

    .contact-btn:hover {
      background-color: #ff4d4d;
      /* Darker red on hover */
    }

    .small-image {
      max-width: 300px;
      /* Adjust size as needed */
      height: auto;
      /* Maintain aspect ratio */
    }

    .custom-btn {
      background-color: #d3d3d3;
      border-radius: 25px;
      padding: 10px 15px;
    }

    .custom-btn.active {
      background-color: #d3d3d3;
      color: white;
    }

    .br {
      border-bottom-right-radius: 45px;
      border-bottom-left-radius: 45px;
    }

    .background-image {
      height: 100vh;
      /* Full viewport height */
      background-image: url(./assets//images//about-us\ \(3\).jpeg);
      background-size: cover;
      /* Ensures the image covers the entire container */
      background-position: center;
      /* Centers the image */
      background-repeat: no-repeat;
      /* Prevents image repetition */
      padding: 0;
      /* Remove excessive padding */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .txt-white {
      color: white;
    }

    .bg-white-custom {
      background-color: rgba(247, 247, 247, 0.8);

      padding: 30px 40px;
      border-radius: 10px;
    }
  </style>
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
          <li class="nav-item"><a class="nav-link custom-btn active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="committee.php">Managing Committee</a></li>
          <li class="nav-item"><a class="nav-link " href="documents.php">Documents</a></li>
          <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="pmc.php">PMC</a></li>

          <li class="nav-item"><a class="nav-link " href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ***** Header Area End ***** -->

  <div class="background-image ">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="bg-white-custom">
            <h6>(REGD. No. : BOM/HSG/540 of 1963)</h6>
            <h2>SHANAZ CHS</h2>
            <p class="mt-2">Shanaz Apartment is strategically located in the prestigious
              Malabar Hill area, offering seamless connectivity to major landmarks in Mumbai, including
              the iconic Gateway of India. The locality is well-connected via major roads such as the
              Eastern Express Highway, providing easy access to South Mumbai’s business hubs.
              Public transport options, including buses and taxis, are readily available, making daily
              commuting effortless</p>
            <div class="d-flex gap-2 main-button mt-5">
              <a href="about.html" class="btn btn-primary">About Us</a>
              <a href="contact.html" class="btn btn-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">

        </div>
      </div>
    </div>
  </div>

  <div class="features py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="item d-flex flex-column align-items-center text-center">
            <div
              class="image d-flex justify-content-center align-items-center mb-2">
              <i
                class="ph ph-swimming-pool"
                style="font-size: 44px; color: #ffffff"></i>
            </div>
            <h4>Swimming Pool</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item d-flex flex-column align-items-center text-center">
            <div
              class="image d-flex justify-content-center align-items-center mb-2">
              <i
                class="ph ph-car"
                style="font-size: 44px; color: #ffffff"></i>
            </div>
            <h4>Parking Space</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item d-flex flex-column align-items-center text-center">
            <div
              class="image d-flex justify-content-center align-items-center mb-2">
              <i
                class="ph ph-shield-check"
                style="font-size: 44px; color: #ffffff"></i>
            </div>
            <h4>24/7 Security</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item d-flex flex-column align-items-center text-center">
            <div
              class="image d-flex justify-content-center align-items-center mb-2">
              <i
                class="ph ph-tree"
                style="font-size: 44px; color: #ffffff"></i>
            </div>
            <h4>Garden Area</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us " data-aos="fade-down">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>Luxury Living at Nepean Sea, Malabar Hills</h2>
          </div>
          <p>
            Shanaz Building, located in the prestigious Nepean Sea area of
            Malabar Hills, offers a blend of modern luxury and serene living.
            With breathtaking sea views, top-tier amenities, and a secure
            environment, it provides an unparalleled lifestyle in one of
            Mumbai's most sought-after neighborhoods. Experience elegant
            architecture, spacious residences, and world-class facilities
            tailored for comfort and sophistication.
          </p>
          <div class="d-flex">
            <a href="about.html">
              <button class="contact-btn">Read More</button>
            </a>
          </div>
        </div>

        <!-- Right Side: Image -->
        <div class="col-lg-6 text-center">
          <img src="./assets//images/about-us (31).jpeg" alt="Luxury Living" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>


  <div class="section committee tabs-content" data-aos="fade-down">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Managing Committee</h6>
            <h2>Meet Our Committee Members</h2>
          </div>
        </div>
        The managing committee of a society plays a crucial role in ensuring the smooth functioning and well-being of the community. They act as the backbone of the society, overseeing financial matters, maintenance, security, and overall governance. Their dedication and leadership foster harmony, transparency, and growth, making the residential environment more comfortable and organized for all members.

        A well-managed committee promotes cooperation, listens to the concerns of residents, and makes fair decisions in the best interest of the community. Their commitment to service, problem-solving abilities, and teamwork contribute to creating a peaceful and thriving living space for everyone.
        <div class="d-flex justify-content-center">
          <a href="committee.html">
            <button class="contact-btn">View all committee members</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section latest-documents" data-aos="fade-right">
    <div class="container">
      <!-- Section Heading Centered -->
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Documents</h6>
            <h2>Latest Documents</h2>
          </div>
        </div>
      </div>

      <div class="row align-items-center justify-content-center">
        <!-- Left Side: Single Document -->
        <div class="col-lg-6 text-center">
          <div class="item">
            <div class="thumb">
              <img src="./assets//Documents//10jan.png" alt="Document" class="small-image">
            </div>
            <h5>Financial Report 2024</h5>

            <!-- Below Image: Description & Button -->
            <p>You can view all the society documents from the button given below.</p>
            <div class="d-flex justify-content-center">
              <a href="./documents.php">
                <button class="contact-btn">View All Documents</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="section gallery" data-aos="fade-down">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Gallery</h6>
            <h2>Our Gallery</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./assets/images/gallery1.jpeg" class="d-block w-100" alt="Gallery Image 1">
              </div>
              <div class="carousel-item">
                <img src="./assets/images/gallery2.jpeg" class="d-block w-100" alt="Gallery Image 2">
              </div>
              <div class="carousel-item">
                <img src="./assets/images/gallery3.jpeg" class="d-block w-100" alt="Gallery Image 3">
              </div>
              <div class="carousel-item">
                <img src="./assets/images/gallery4.jpeg" class="d-block w-100" alt="Gallery Image 4">
              </div>
              <div class="carousel-item">
                <img src="./assets/images/gallery5.jpeg" class="d-block w-100" alt="Gallery Image 5">
              </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <a href="gallery.html">
            <button class="contact-btn">View Full Gallery</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap CSS & JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <div class="more-info mt-5" data-aos="zoom-in">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="nav-wrapper">
              <div class="mb-2">
                <h2>Get In Touch</h2>
              </div>
            </div>
            <p class="mb-2">
              Have any questions? We're here to help. Reach out to us for any
              inquiries, support, or just to say hello!
            </p>
            <div class="d-flex justify-content-center">
              <a href="contact.html">
                <button class="contact-btn">Contact Us</button>
              </a>
            </div>
          </div>
        </div>
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