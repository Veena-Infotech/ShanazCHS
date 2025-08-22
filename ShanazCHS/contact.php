

<!DOCTYPE html>
<html lang="en">
  <?php require 'PhpFiles/session_protect.php'; ?>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Shanaz CHS | Contact Us</title>

    <!-- Bootstrap core CSS -->
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
    <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png" />
    <!-- AOS CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <style>
      .contact-header {
        background: url("./assets/images/contact-us.jpg") no-repeat center
          center;
        background-size: cover;
        padding: 100px 0; /* Adjust height */
        text-align: center;
        color: white; /* Ensure visibility */
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .contact-header h3 {
        font-size: 2.5rem;
        font-weight: bold;
      }

      .breadcrumb {
        font-size: 1.2rem;
        color: white;
      }

      .breadcrumb a {
        color: #f8f9fa;
        text-decoration: none;
      }

      .breadcrumb a:hover {
        text-decoration: underline;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .contact-header {
          padding: 60px 0;
        }

        .contact-header h3 {
          font-size: 2rem;
        }

        .breadcrumb {
          font-size: 1rem;
        }
      }

      @media (max-width: 480px) {
        .contact-header {
          padding: 40px 0;
        }

        .contact-header h3 {
          font-size: 1.8rem;
        }

        .breadcrumb {
          font-size: 0.9rem;
        }
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
  .br{
    border-bottom-right-radius: 45px;
    border-bottom-left-radius: 45px;
  }
  .hero-banner {
  background-image: url('./assets/images/contact-us.jpg'); /* Replace with your image URL */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding:200px 0; /* Adjust for spacing */
  text-align: center;
  color: black; /* Ensures text is readable */
}
.black{
  color: black;
}
.link{
  color: black;
}

    </style>

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
                  <li class="nav-item"><a class="nav-link " href="documents.php">Documents</a></li>
                  <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="pmc.php">PMC</a></li>

                  <li class="nav-item"><a class="nav-link custom-btn active" href="contact.php">Contact Us</a></li>
                  <li class="nav-item btn btn-danger" style="background-color:rgba(255, 77, 77, 0.9); margin-left: 10px; border-radius: 10px;"><a class="nav-link " href="logout.php">Log Out</a></li>
              </ul>
          </div>
      </div>
  </nav>
    <!-- ***** Header Area End ***** -->

    <div class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Contact Us</h3>
          </div>
        </div>
      </div>
    </div>
    
    <div class="contact-page section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-text" data-aos="fade-down">
              <div class="section-heading">
                <h6>Contact Us</h6>
                <h2>Say Hello!</h2>
              </div>
              <p>
                Shanaz Apartment is strategically located in the prestigious
                Malabar Hill area, offering seamless connectivity to major
                landmarks in Mumbai, including the iconic Gateway of India. The
                locality is well-connected via major roads such as the Eastern
                Express Highway, providing easy access to South Mumbai’s
                business hubs. Public transport options, including buses and
                taxis, are readily available, making daily commuting effortless
              </p>
              <ul>
                <li>
                  <span>Address</span> Nepean Sea Co-operative Housing Society LTD. "Shanaz" 90, Nepean Sea Road, Mumbai - 4000 006
                </li>
                <li><span>Phone</span> 022-3573 2346</li>
                <li><span>Email</span> shanazchs@gmail.com</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-content">
              <div class="row">
                <div class="col-lg-12">
                  <div id="map">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4731.658822399428!2d72.79618794999999!3d18.9519762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cde4c4a91cad%3A0x1c76ab025f5ae415!2sShanaz%20Building%2C%20Navshanti%20Nagar%2C%20Malabar%20Hill%2C%20Mumbai%2C%20Maharashtra%20400006!5e1!3m2!1sen!2sin!4v1741933932630!5m2!1sen!2sin"
                      width="600"
                      height="450"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </div>
              
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
