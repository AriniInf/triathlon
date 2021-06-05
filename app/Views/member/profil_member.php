<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unesa Triathlon 2021</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/icbund.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/iccom.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/style_dashmember.css') ?>" >

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>
      <header id="header">
        <div class="container d-flex">

          <div class="row logo mr-auto">
            <div class="col-md-4"><img class="img-responsive" src="<?= base_url('assets/img/iccom.png') ?>" alt="logo1"></div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="<?= base_url('') ?>">Home</a></li>
              <li class="drop-down"><a href="">Competition</a>
                <ul>
                  <li class="drop-down"><a href="#">Unesa Triathlon 2021</a>
                    <ul>
                      <li><a href="#about">Triathlon</a></li>
                      <li><a href="#">Duathlon</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#services">World Triathlon</a></li>
              <li><a href="#portfolio">Gallery</a></li>
              <li><a href="#team">Ranking</a></li>
              <li><a href="#pricing">About</a></li>
              <li><a href="#pricing">Contact Us</a></li>
              <li><a href="<?= base_url('dashboard_pembayaran') ?>">Akun Member</li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->

<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <h3>Welcome,</h3>
                            <h3 style="color: #ff5821">Chaniyah Zulfa M</h3>
                            <p class="proile-rating">STATUS : <span style="background-color: #d6cac9">Tidak aktif</span></p>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn btn btn-md" name="btnAddMore" style="color: white;background-color: #ff5821" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>ACCOUNT MENU</p>
                            <a href="<?= base_url('dashboard_pembayaran') ?>">Dashboard</a><br/><hr>
                            <a href="<?= base_url('dashboard') ?>">Profile</a><br/><hr>
                            <a href="<?= base_url('logout') ?>">Logout</a><br/><hr>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Chaniyah Zulfa M</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nick Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Chan</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Country Of Citizenship</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Indonesia</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>KTP</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>0818263179</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>BIB Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Jl. Rajawali VI Blok G/7, Rewwin, Waru, Sidoarjo, 61256</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>SEX</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Female</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Blood Type</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>B</p>
                                            </div>
                                        </div>
                                        <hr style=" border: 0.3px solid red;width: 90%;margin-left: 0px">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Community Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Real Comm</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Swim Time 750 m</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>6 menit</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Jersey Size</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>M</p>
                                            </div>
                                        </div>
                            </div>



                        </div>
                    </div>
                </div>
            </form>           
        </div>


        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>