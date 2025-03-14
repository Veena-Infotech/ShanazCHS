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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">


    <title>Sahnaz Chs | Documents
    </title>

    <!-- Bootstrap core CSS -->
     <style>
      .contact-btn {
        background-color: #f66; /* Red background */
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
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
              <img
                src="./assets//images//SHANAZlogo.jpg"
                alt=""
                style="width: 180px; border-radius: 20px" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="index.php" >Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="committee.html">Managing Committee</a></li>
                <li><a href="documents.html" class="active">Documents</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Documents</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Documents</a></span>
        </div>
      </div>
    </div>
  </div>

  
  <div class="container overflow-hidden mt-5">
    <div class="row gy-4 gy-lg-0 gx-xxl-5">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/Documents/dummy-docs-pic.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Dummy Doc 1</h4>
                <a data-bs-toggle="modal" data-bs-target="#appointment-paras" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/Documents/dummy-docs-pic.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Dummy Doc 2</h4>
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
              <img class="img-fluid" loading="lazy" src="./assets/Documents/dummy-docs-pic.png" alt="">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Dummy Doc 3</h4>
                <a data-bs-toggle="modal" data-bs-target="#crossConcent" class="contact-btn">Open Document</a>

              </figcaption>
            </figure>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  </div>

  <section>
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="appointment-paras" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <object width="100%" height="700"
              data="./assets/Documents/dummy-docs.pdf"
              type="application/pdf"> </object>
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
            <object width="100%" height="700"
              data="./assets/Documents/dummy-docs.pdf"
              type="application/pdf"> </object>
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
            <object width="100%" height="700"
              data="./assets/Documents/dummy-docs.pdf"
              type="application/pdf"> </object>
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
          >Veenainfotech</a
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
</body>

</html>