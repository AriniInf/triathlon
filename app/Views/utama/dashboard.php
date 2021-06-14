<?= $this->extend('utama/headerfooter_utama') ?>

<?= $this->section('title') ?>
  Jaya Sport Industry
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- konten view di sini -->
      <!-- ======= Header ======= -->
    <style type="text/css">
      .btn-oren{
        background-color: #e60000;
      }
    </style>

      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container" data-aos="fade-in">
          <h1>Jaya Sport Industry</h1>
          <div class="d-flex align-items-center">
            <i class="bx bxs-right-arrow-alt get-started-icon"></i>
            <a href="<?= base_url('register') ?>" class="btn-get-started scrollto">Register</a>
          </div>
        </div>
      </section><!-- End Hero -->

      <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="container">
              <br><br>
          </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container">
            <br><br><br>
            <div class="section-title" data-aos="fade-up">
              <h2>Ranking</h2>
              <p>You can look triathlon tankings listed here by category</p>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <a href="#">
                <div class="icon-box">
                  <div class="icon"><i class="icofont-settings"></i></div>
                  <h4 class="title">Men</h4>
                  <p class="description" style="color: #313030;font-family: Open Sans, sans-serif"><b>Men's ranking on triathlon</b></p>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <a href="#">
                <div class="icon-box">
                  <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                  <h4 class="title">Women</h4>
                  <p class="description" style="color: #313030;font-family: Open Sans, sans-serif"><b>Women's ranking on triathlon</b></p>
                </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <a href="#">
                <div class="icon-box">
                  <div class="icon"><i class="icofont-tasks-alt"></i></div>
                  <h4 class="title">Rank Criteria</h4>
                  <p class="description" style="color: #313030;font-family: Open Sans, sans-serif"><b>Read the criteria ranking</b></p>
                </div>
                </a>
              </div>

            </div>

          </div>
        </section><!-- End Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
          <div class="container">

            <div class="row">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                <a href="https://youtu.be/YSnbFqclYtw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
              </div>

              <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <h4 data-aos="fade-up">About us</h4>
                <h3 data-aos="fade-up">BACKGROUND</h3> <br>
                <p data-aos="fade-up" style="padding-bottom: 100px;font-size: 23px">Jaya Sport Industry aims to develop Triathlon<br><br>  sports in terms of research, development, and <br><br> service practitioners in accordance with UNESA <br><br> Higher Education Tri Dharma Philosophy that <br><br> Triathlon sports can be better known from the local<br><br> , national, and international levels.</p>


              </div>
            </div>

          </div>
        </section><!-- End About Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">

            <div class="section-title">
              <h2 data-aos="fade-up">Contact Us</h2>
              <p data-aos="fade-up">If you have any question or details, Get in touch with us</p>
            </div>

            <div class="row justify-content-center">

              <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>The Gayungsari Regency Blok D-51, Surabaya</p>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                    <p>triathlonunesa@<br>gmail.com</p><br>
                    <!-- <p>blabla@jayasalvage.com</p> -->
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>0821-4040-8769<br>0822-8299-8849</p><br>
                </div>
              </div>
            </div>


          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->
<?= $this->endSection() ?>