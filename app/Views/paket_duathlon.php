<?= $this->extend('utama/headerfooter_utama1') ?>

<?= $this->section('title') ?>
  Unesa Triathlon Package
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- konten view di sini -->

  <!-- ======= Header ======= -->
<style type="text/css">
  .btn-oren{
    background-color: #e60000;
  }
  .bg-merah{
    background-color: #f8f8f8;
  }
</style>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">DUATHLON</h2>
          <p data-aos="fade-up">Duathlon is a competition consisting of series of sports, that is bicycle racing, and running which carried out continuously in one unit of time. Choose your duathlon registration category here:</p>
        </div>

        <?php foreach($paket as $row){?>
          <div data-aos="fade-up" data-aos-delay="150">
            <div class="box tambahan">
              <h3><?= $row['nama_paket'] ?></h3>
              <h4><sup></sup></h4>
              <h6>Sprint Distance :</h6>
              <ul style="margin-left: 36%">
              	<li>Run    : 2.5 km</li>
              	<li>Bike   : 20 km</li>
              	<li>Run    : 5 km</li>
              </ul>
              <div class="container">
                <div class="card bg-merah">
                  <div class="card-body">
                    <h6><center><b>Choose Room Package :</b></center></h6>


                <!--     <form action="<?= base_url('daftar') ?>" method="post" onSubmit="return confirm('Register this competition?');"> -->
                      <input type="hidden" name="harga" value="<?= $row['harga']?>">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="exampleRadios1" value="1" name="elitedua">
                          <label class="form-check-label">
                            Room 1 person (Rp.1.310.000)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="elitedua" id="exampleRadios2" value="2">
                          <label class="form-check-label">
                            Room 2 person (Rp.2.220.000)
                          </label>
                        </div>
                        <div class="form-check" >
                          <input class="form-check-input" type="radio" name="elitedua" id="exampleRadios3" value="3">
                          <label class="form-check-label">
                            Room 3 person (Rp.3.130.000)
                          </label>
                        </div>
                        <div class="form-check" >
                          <input class="form-check-input" type="radio" name="elitedua" id="exampleRadios4" value="4">
                          <label class="form-check-label">
                            Room 4 person (Rp.4.040.000)
                          </label>
                        </div>

                  </div>
                </div>
              </div>
              
                <div class="btn-wrap">
                    <button class="btn-buyy" type="submit" value="<?=$row['id_paket'];?>">Register</button>
                </div>
              <!--   </form> -->
            </div>
          </div>
        <?php }?> 

      </div>
    </section><!-- End Pricing Section -->

 

  </main><!-- End #main -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
      $(document).ready(function(){
          $("button[type='submit']").click(function(){
            var radioValue1 = $("input[id='exampleRadios1']:checked").val();
            var radioValue2 = $("input[id='exampleRadios2']:checked").val();
            var radioValue3 = $("input[id='exampleRadios3']:checked").val();
            var radioValue4 = $("input[id='exampleRadios4']:checked").val();
            // var url = "<?= base_url('elite2-tri') ?>" + encodeURIComponent(radioValue1);

            if(radioValue1){
                  // alert("Valuenya " + radioValue1);
                  location.replace("<?= base_url('elite1-dua') ?>");
            }

            if(radioValue2){
                  // alert("Valuenya " + radioValue2);
                  location.replace("<?= base_url('elite2-dua') ?>" );
                  // window.location.href = url;
            }

            if(radioValue3){
                  // alert("Valuenya " + radioValue3);
                  location.replace("<?= base_url('elite3-dua') ?>");
            }

            if(radioValue4){
                  // alert("Valuenya " + radioValue4);
                  location.replace("<?= base_url('elite4-dua') ?>");
            }

          });

      });
  </script>



<?= $this->endSection() ?>