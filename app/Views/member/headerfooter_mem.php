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


  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="asset/css/style_dashmember.css" >

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
      <header id="header">
        <div class="container d-flex">

          <div class="row logo mr-auto">
            <!-- <div class="col-md-4"><img class="img-responsive" src="assets/img/iccom.png" alt="logo1"></div> -->
            <div class=""></div>
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
                </ul>
              </li>
              <li><a href="<?= base_url('') ?>">Ranking</a></li>
              <li><a href="<?= base_url('') ?>">About</a></li>
              <li><a href="<?= base_url('') ?>">Contact Us</a></li>
              <li><a href="<?= base_url('dashboard-user') ?>">Akun Member</a></li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->
      <div class="container emp-profile">
              <!--     <form method="post"> -->

                      <div class="row">
                          <div class="col-md-4">
                              <div class="profile-img">
                                  <h3>Welcome,</h3>
                                  <h3 style="color: #e60000"><?= $users['nama_panjang']?></h3>
                               <!--    <p class="proile-rating">STATUS : <span style="background-color: #d6cac9">Tidak aktif</span></p>     -->
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="profile-head">
                              </div>
                          </div>
                          <div class="col-md-2">
                             
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-4">
                              <div class="profile-work">
                                  <p>ACCOUNT MENU</p>
                                  <a href="<?= base_url('dashboard-user') ?>">Dashboard</a><br/><hr>
                                 <!--  <a href="<?= base_url('comp_member') ?>">Competition Member</a><br/><hr> -->
                                  <a href="<?= base_url('logout') ?>">Logout</a><br/><hr>
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="tab-content profile-tab" id="myTabContent">
                                  <div class="tab-pane fade show active" role="tabpanel">
                                    <!-- isi content -->
                                    <?= $this->renderSection('content') ?>  
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- tutup row -->

              <!--     </form>   -->         
              </div>                                   

        <!-- ======= Footer ======= -->
        <footer id="footer">

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
              <a href="https://www.instagram.com/unesatriathlon/" class="instagram"><i class="bx bxl-instagram"></i></a>
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

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>