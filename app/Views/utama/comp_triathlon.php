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

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
<style type="text/css">
  .btn-oren{
    background-color: #FF5821;
  }
</style>

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
          <li class="drop-down"><a href="#">Competition</a>
            <ul>
              <li class="drop-down"><a href="#">Unesa Triathlon 2021</a>
                <ul>
                  <li><a href="<?= base_url('triathlon_unesa') ?>">Triathlon</a></li>
                  <li><a href="<?= base_url('duathlon_unesa') ?>">Duathlon</a></li>
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
          <li><a href="#team">Ranking</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#pricing">Contact Us</a></li>
          <li><a class="btn btn-oren" href="<?= base_url('home/login') ?>" role="button" style="color: white">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">TRIATHLON</h2>
          <p data-aos="fade-up">Ini pengantar sekilas diisi apa ya hehe. Ok mari kita besok tanya mba dita atau tabita. Eh atau mari bertanya kharisma dan febby. Sekarang gini dulu deh yey biar ada isinya pokonya triathlon oke</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="50">
            <div class="box featured">
              <h3>ELITE</h3>
              <h4><sup>Rp</sup>50.000</h4>
              <h6>Sprint Distance :</h6>
              <ul>
                <li>Swim	: 750 m</li>
                <li>Bike 	: 20 km</li>
                <li>Run 	: 10km</li>
                <li>Age		: >18</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buyy" data-toggle="modal" data-target="#elitemodal">Register</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="box tambahan">
              <h3>AGE GROUP</h3>
              <h4><sup>Rp</sup>67.000</h4>
              <h6>Sprint Distance :</h6>
              <ul>
              	<li>Swim	: 750 m</li>
              	<li>Bike 	: 20 km</li>
              	<li>Run 	: 10km</li>
                <li>Age Category :</li>
                <li>
                	<ol style="font-size: 13px;">
                		<li><16 - 29</li>
                		<li>30 - 44</li>
                		<li>>44</li>
                	</ol>
                </li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#agemodal">Register</a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>KIDS</h3>
              <h4><sup>Rp</sup>20.500</h4>
              <h6></h6>
              <ul>
                <li>Swim	: 350 m</li>
                <li>Bike 	: 10 km</li>
                <li>Run 	: 5km</li>
                <li>Age		: 13 - 15</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buyy" data-toggle="modal" data-target="#kidsmodal">Register</a>
              </div>
            </div>
          </div>

        </div>

      </div>

<!--       ellite modal -->
<div class="container">
	<div class="modal fade" id="elitemodal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h5 class="modal-title"><strong>Register this competition?</strong></h5>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      
	      <!-- Modal body -->
	      <div class="modal-body">
	      	Elite Category <br>
	      </div>
	      
	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-oren" id="submit" style="color: white">Yes</button>
	      </div>
	      
	    </div>
	  </div>
	</div>

</div>

      <!-- agemodal -->
      <div class="container">
      	<div class="modal fade" id="agemodal">
      	  <div class="modal-dialog">
      	    <div class="modal-content">
      	    
      	      <!-- Modal Header -->
      	      <div class="modal-header">
      	        <h5 class="modal-title"><strong>Register this competition?</strong></h5>
      	        <button type="button" class="close" data-dismiss="modal">&times;</button>
      	      </div>
      	      
      	      <!-- Modal body -->
      	      <div class="modal-body">
      	      	Age group Category <br><br> choose your age category : <br>
      	      	<form>
      	      		<div class="form-check">
      	      		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
      	      		  <label class="form-check-label" for="exampleRadios1">
      	      		    16 - 29
      	      		  </label>
      	      		</div>
      	      		<div class="form-check">
      	      		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      	      		  <label class="form-check-label" for="exampleRadios2">
      	      		    30 - 44
      	      		  </label>
      	      		</div>
      	      		<div class="form-check">
      	      		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
      	      		  <label class="form-check-label" for="exampleRadios2">
      	      		    >44
      	      		  </label>
      	      		</div>
      	      	</form>

      	      </div>
      	      
      	      <!-- Modal footer -->
      	      <div class="modal-footer">
      	        <button type="button" class="btn btn-oren" id="submit" style="color: white">Yes</button>
      	      </div>
      	      
      	    </div>
      	  </div>
      	</div>

      </div>

      <!-- kids modal -->
      <!--       ellite modal -->
      <div class="container">
      	<div class="modal fade" id="kidsmodal">
      	  <div class="modal-dialog">
      	    <div class="modal-content">
      	    
      	      <!-- Modal Header -->
      	      <div class="modal-header">
      	        <h5 class="modal-title"><strong>Register this competition?</strong></h5>
      	        <button type="button" class="close" data-dismiss="modal">&times;</button>
      	      </div>
      	      
      	      <!-- Modal body -->
      	      <div class="modal-body">
      	      	Kids Category <br>
      	      </div>
      	      
      	      <!-- Modal footer -->
      	      <div class="modal-footer">
      	        <button type="button" class="btn btn-oren" id="submit" style="color: white">Yes</button>
      	      </div>
      	      
      	    </div>
      	  </div>
      	</div>

      </div>

    </section><!-- End Pricing Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">AGE GROUP POINT SYSTEM</h2>
          <p data-aos="fade-up">Read terms of point system for age group triathlon participants here</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Age 16 - 29 (Age Group Participant) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Age 30 - 44 (Age Group Participant)  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Age > 44 (Age Group Participant)  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>


          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->


  </main><!-- End #main -->

 
 <!-- ======= Footer ======= -->
 <footer id="footer">

   <div class="footer-top">
     <div class="container">
       <div class="row">
       </div>
     </div>
   </div>

   <div class="container d-lg-flex py-4">

     <div class="mr-lg-auto text-center text-lg-left">
       <div class="copyright">
         &copy; Copyright <strong><span>Triathlon</span></strong>. All Rights Reserved
       </div>
       <div class="credits">
         Designed by <a href="#">Jaya Salvage Indonesia</a>
       </div>
     </div>
     <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
       <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
       <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
       <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
       <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
       <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
     </div>
   </div>
 </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery-sticky/jquery.sticky.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>