<?php
session_start();
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
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">
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

    .gallery-container {
      overflow: hidden;
      position: relative;
      width: 100%;
    }

    .gallery-wrapper {
      display: flex;
      white-space: nowrap;
      gap: 15px;
      animation: scrollGallery 20s linear infinite;
    }

    .gallery-wrapper:hover {
      animation-play-state: paused;
    }

    .gallery-item {
      flex: 0 0 auto;
      width: 300px;
      height: 200px;
      border-radius: 10px;
      overflow: hidden;
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
      background-color: #f66;
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
    max-width: 300px; /* Adjust size as needed */
    height: auto; /* Maintain aspect ratio */
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
  .background-image {
    height: 100vh; /* Full viewport height */
    background-image: url(./assets//images//about-us\ \(3\).jpeg);
    background-size: cover; /* Ensures the image covers the entire container */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents image repetition */
    padding: 0; /* Remove excessive padding */
    display: flex;
    justify-content: center;
    align-items: center;
}
.txt-white{
  color: white;
}
.bg-white-custom{
  background-color: #f7f7f7;
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
          <a class="custom-logo navbar-brand d-flex align-items-center" href="index.html">
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
                  <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="committee.html">Managing Committee</a></li>
                  <li class="nav-item"><a class="nav-link " href="documents.php">Documents</a></li>
                  <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                  <li class="nav-item"><a class="nav-link " href="contact.html">Contact Us</a></li>
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
            <h6 >Welcome to</h6>
            <h2 >SHANAZ CHS</h2>
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

  <div class="section about-us">
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


  <div class="section committee tabs-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Managing Committee</h6>
            <h2>Meet Our Committee Members</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Sr. No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Rajesh Sharma</td>
                  <td>Chairman</td>
                  <td>9876543210</td>
                  <td>rajesh@example.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Anita Mehta</td>
                  <td>Secretary</td>
                  <td>9876543211</td>
                  <td>anita@example.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Vikram Khanna</td>
                  <td>Treasurer</td>
                  <td>9876543212</td>
                  <td>vikram@example.com</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Pooja Desai</td>
                  <td>Member</td>
                  <td>9876543213</td>
                  <td>pooja@example.com</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Rahul Verma</td>
                  <td>Member</td>
                  <td>9876543214</td>
                  <td>rahul@example.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="committee.html">
            <button class="contact-btn">View all committee members</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section latest-documents">
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
            <img src="./assets/Documents/dummy-docs-pic.png" alt="Document" class="small-image">
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



  <div class="section gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Gallery</h6>
            <h2>Our Gallery</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="gallery-container">
            <div class="gallery-wrapper">
              <div class="gallery-item">
                <img
                  src="./assets/images/gallery1.jpeg"
                  alt="Gallery Image 1" />
              </div>
              <div class="gallery-item">
                <img
                  src="./assets/images/gallery2.jpeg"
                  alt="Gallery Image 2" />
              </div>
              <div class="gallery-item">
                <img
                  src="./assets/images/gallery3.jpeg"
                  alt="Gallery Image 3" />
              </div>
              <div class="gallery-item">
                <img
                  src="./assets/images/gallery4.jpeg"
                  alt="Gallery Image 4" />
              </div>
              <div class="gallery-item">
                <img
                  src="./assets/images/gallery5.jpeg"
                  alt="Gallery Image 5" />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="gallery.html">
            <button class="contact-btn">View Gallery</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info mt-5">
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
        <a href="https://theveenagroup.com/" class="fw-bold">Veenainfotech</a>
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
</body>

</html>