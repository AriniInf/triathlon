<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $this->renderSection('title') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icbund.png" rel="icon">
    <link href="assets/img/iccom.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

      <!-- Font-->
  <link rel="stylesheet" type="text/css" href="asset/css/montserrat-font.css" >
  <link rel="stylesheet" type="text/css" href="asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" >
  <!-- Main Style Css -->
    <link rel="stylesheet" href="asset/css/style.css" />

    <!-- Vendor CSS Files -->

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!--     <link rel="stylesheet" href="assets/plugins/fullcalendar-bootstrap/main.min.css"> -->
</head>
<body>
    <header id="header">
      <div class="container d-flex">

        <div class="row logo mr-auto">
          <div class="col-md-4"><img class="img-responsive" src="assets/img/iccom.png" alt="logo1"></div>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="drop-down"><a href="#">Competition</a>
              <ul>
                <li class="drop-down"><a href="#">Unesa Triathlon 2021</a>
                  <ul>
                    <li><a href="<?= base_url('triathlon') ?>">Triathlon</a></li>
                    <li><a href="<?= base_url('duathlon') ?>">Duathlon</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="https://www.triathlon.org/">World Triathlon</a></li>
            <li class="drop-down"><a href="#">Gallery</a>
              <ul>
                <li><a href="<?= base_url('gallery') ?>">Unesa Triathlon 2021</a></li>
                <!-- <li><a href="<?php echo site_url('gallery') ?>">Unesa Triathlon 2021</a></li> -->
              </ul>
            </li>
            <li><a href="#services">Ranking</a></li>
            <li><a href="#about">About</a></li>

            <li><a href="#contact">Contact Us</a></li>
            <li><a class="btn btn-oren" href="<?= base_url('login') ?>" role="button" style="color: white">Login</a></li>

          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content') ?>

    <footer id="footer">

<!--       <div class="footer-top">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div> -->

      <div class="container d-lg-flex py-4">

        <div class="mr-lg-auto text-center text-lg-left">
          <br>
          <div class="copyright">
            Copyright &copy; 2021 <a href="<?= base_url('') ?>"><strong><span>Jaya Sport Industry</span></strong></a>. All Rights Reserved
          </div>
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
          <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <!--     <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
