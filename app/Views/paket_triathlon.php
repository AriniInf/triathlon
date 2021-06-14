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
      <main>
          <section id="pricing" class="pricing">
            <div class="container">

              <div class="section-title">
                <h2 data-aos="fade-up">TRIATHLON</h2>
                <p data-aos="fade-up">Triathlon is a competition consisting of series of sports, that is swimming, bicycle racing, and running which carried out continuously in one unit of time. Choose your triathlon registration category here:</p>
              </div>
          

              <div class="row">
                <?php foreach($paket as $row){?>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="50">
                  <div class="box featured">
                    <h3><?= $row['nama_paket'] ?></h3>
                    <h4><sup>Rp</sup><?= $row['harga']?></h4>
                    <h6>Sprint Distance :</h6>
                     <?php if($row['id_paket'] == 2){?>
                    <ul>
                      <li>Swim  : 750 m</li>
                      <li>Bike  : 20 km</li>
                      <li>Run   : 10km</li>
                      <li>Age   : >16</li>
                    </ul>
                    <div class="container">
                      <div class="card bg-merah">
                        <div class="card-body">
                          <h6><center><b>Choose Room Package :</b></center></h6>


                      <!--     <form action="/daftar" method="post" onSubmit="return confirm('Register this competition?');"> -->
                            <input type="hidden" name="harga" value="<?= $row['harga']?>">
                              <div class="form-check" style="margin-left: 9px ">
                                <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios1" value="5">
                                <label class="form-check-label">
                                  Kamar Single (Rp.1.610.000)
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios2" value="6">
                                <label class="form-check-label">
                                  Kamar Twin (Rp.2.620.000)
                                </label>
                              </div>
                              <div class="form-check" style="margin-left: 7px">
                                <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios3" value="7">
                                <label class="form-check-label">
                                  Kamar 3 Org (Rp.3.630.000)
                                </label>
                              </div>
                              <div class="form-check" style="margin-left: 7px">
                                <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios4" value="8">
                                <label class="form-check-label">
                                  Kamar 4 Org (Rp.4.640.000)
                                </label>
                              </div>

                        </div>
                      </div>
                    </div>
                    
                      <div class="btn-wrap">
        <!--                   <button class="btn-buyy" name="id_paket" type="submit" >Register</button> -->
                         <button type="submit" class="btn-buyy" value="<?=$row['id_paket'];?>">Register</button>
                      </div>
                  <!--     </form> -->
                      <?php } 
                        elseif($row['id_paket'] == 3){?>
                    <ul>
                      <li>Swim  : 750 m</li>
                      <li>Bike  : 20 km</li>
                      <li>Run   : 10km</li>
                      <li>Include :
                        <ol>
                          <li>Swab Antigen 1x</li>
                        </ol>

                      </li>
                    </ul>

                    <div class="container">
                      <div class="card bg-merah">
                        <div class="card-body">
                          <h6><center><b>Choose Age Category :</b></center></h6>


                       <!--    <form action="/daftar" method="post" > -->
                            <input type="hidden" name="harga" value="<?= $row['harga']?>">
                              <div class="form-check" style="margin-left: 18px">
                                <input class="form-check-input" type="radio" id="exampleRadios5" value="1" name="age_group">
                                <label class="form-check-label">
                                  16 - 29
                                </label>
                              </div>
                              <div class="form-check" style="margin-left: 18px">
                                <input class="form-check-input" type="radio" name="age_group" id="exampleRadios6" value="2">
                                <label class="form-check-label">
                                  30 - 44
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="age_group" id="exampleRadios7" value="3">
                                <label class="form-check-label">
                                  > 44
                                </label>
                              </div>

                        </div>
                      </div>
                    </div>
                    
                          <div class="btn-wrap">
                            <button class="btn-buyy" name="id_paket" type="submit" value="<?=$row['id_paket'];?>">Register</button>
                          </div>
                  <!--       </form> -->
                    <?php } 
                       elseif($row['id_paket'] == 4){?>
                        <ul>
                          <li>Swim  : 350 m</li>
                          <li>Bike  : 10 km</li>
                          <li>Run   : 5km</li>
                          <li>Age   : 13 - 15</li>
                          <li>Include :
                            <ol>
                              <li>Swab Antigen 1x</li>
                            </ol>
                          </li>
                        </ul>  
                         <!--  <form action="/daftar" method="post" onSubmit="return confirm('Register this competition?');"> -->
                            <input type="hidden" name="harga" value="<?= $row['harga']?>"> 
                            <br><br><br>            
                            <div class="btn-wrap">
                              <button class="btn-buyy" onclick="window.location='<?= base_url('kids-tri') ?>';" value="<?=$row['id_paket'];?>">Register</button>
                            </div>
                        <!--   </form> -->
                      
                    <?php } ?>

                  </div>
                </div>
             <?php }?> 

            </div>
          </div>
        </section>
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
                location.replace("<?= base_url('elite1-tri') ?>");
          }

          if(radioValue2){
                // alert("Valuenya " + radioValue2);
                location.replace("<?= base_url('elite2-tri') ?>" );
                // window.location.href = url;
          }

          if(radioValue3){
                // alert("Valuenya " + radioValue3);
                location.replace("<?= base_url('elite3-tri') ?>");
          }

          if(radioValue4){
                // alert("Valuenya " + radioValue4);
                location.replace("<?= base_url('elite4-tri') ?>");
          }

        });

        $("button[type='submit']").click(function(){
          var radioValue5 = $("input[name='age_group']:checked").val();

          if(radioValue5){
                // alert("Valuenya " + radioValue5);
                sessionStorage.setItem("radioValue5", radioValue5);
                location.replace("<?= base_url('ag-tri') ?>");
          }

        });

        // $.post(
        // "user_submit.php", 
        // {vote: $("[input[id='exampleRadios1']:checked").val()}, 
        // function(data){
        // });
    });
</script>


<?= $this->endSection() ?>