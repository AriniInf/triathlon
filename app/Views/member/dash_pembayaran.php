<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jaya Sport Industri</title>
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
              <li><a href="<?= base_url('dashboard_pembayaran') ?>">Akun Member</a></li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->

<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
        <!--     <form method="post"> -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <h3>Welcome,</h3>                   
                              <h3 style="color: #ff5821"><?= $users['nama_panjang'] ?></h3>
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
                            <a href="<?= base_url('dashboard_pembayaran') ?>">Dashboard</a><br/><hr>
                            <a href="<?= base_url('dashboard') ?>">Profile</a><br/><hr>
                            <a href="<?= base_url('logout') ?>">Logout</a><br/><hr>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel">
                              <!-- isi content -->

                                <div class="container">
                                <?php if($invoice['status']==0){ ?>
                                  <p class="proile-rating  text-right" style="font-size: 20px;color: #313030">Status :  <span class="badge badge-dark" style="color: white">Belum Bayar</span>
                                  </p>
                                <?php } 
                                else if($invoice['status']==1){ ?>
                                  <p class="proile-rating  text-right" style="font-size: 20px;color: #313030">Status :  <span class="badge badge-primary" style="color: white">Menunggu Konfirmasi</span>
                                  </p>
                                <?php } ?>
                                <!--   <p class="proile-rating  text-right" style="font-size: 20px;color: #313030">Status :  <span class="badge badge-primary" style="color: white">Menunggu Konfirmasi</span>
                                  </p> -->
                                </div>

                              <div class="container">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card ">
                                          <div class="card-header bg-oren">
                                              <h4 class="text-xs-center" style="color: white"><strong>Order Summary</strong></h4>
                                          </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <td><strong>Package Competition</strong></td>
                                                                <td class="text-xs-right"><strong>Price</strong></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?= $competition['nama_competition'] ?></td>
                                                                <td class="text-xs-right">Rp.<?= $invoice['harga'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jersey</td>
                                                                <td class="text-xs-right">Rp.0</td>
                                                            </tr>

                                                            <tr>
                                                                <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                                                <td class="emptyrow text-xs-right">Rp.<?= $invoice['harga'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                
                                <?php if($invoice['status']==0){ ?>
                                  <div class="card bg-oren">
                                    <div class="card-body" style="color: white;font-size: 15px">
                                      <h6>Silahkan membayar ke rekening berikut :</h6><br>
                                      <center><h6>BNI : 10387178368176<br>BRI : 861371567135<br></h6></center><br>
                                      <h6>Setelah membayar, silahkan upload bukti bayar dan tunggu notifikasi dari email pembayaran berhasil</h6>
                                    </div>
                                  </div>
                                  <br>
                                  <?= $invoice['id_invoice'] ?>

                                  <form method="post" action="/upload-bukti" enctype="multipart/form-data">
                                    <div class="custom-file mb-3">
                                      <input type="text" value="<?= $invoice['id_invoice'] ?>" name="id_invoice"> 
                                      <input type="file" class="custom-file-input" id="customFile" name="berkas">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    
                                    <div class="mt-3">
                                      <button type="submit" class="btn btn-oren float-right">Submit</button>
                                    </div>
                                  </form>
                                  	
                                <?php }  
                                else if($invoice['status']==1){ ?>
                                <?php } ?>
                                <?php if(session()->getFlashdata('msg')):?>
                                    <div class="form-row">
                                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>							     	
                                    </div>
                                  <?php endif;?>

                              </div>

                  
                            </div>

                        </div>
                    </div>
                </div>
                <!-- tutup row -->

        <!--     </form>   -->         
        </div>


        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>
</body>

</html>