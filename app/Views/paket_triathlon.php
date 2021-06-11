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
          <p data-aos="fade-up">Ini pengantar sekilas diisi apa ya hehe. Ok mari kita besok tanya mba dita atau tabita. Eh atau mari bertanya kharisma dan febby. Sekarang gini dulu deh yey biar ada isinya pokonya triathlon oke</p>
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


                    <form action="/daftar" method="post" onSubmit="return confirm('Register this competition?');">
                      <input type="hidden" name="harga" value="<?= $row['harga']?>">
                        <div class="form-check" style="margin-left: 9px ">
                          <input class="form-check-input" type="radio" id="exampleRadios1" value="1" name="elitetri">
                          <label class="form-check-label">
                            Kamar Single (Rp.1.610.000)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios2" value="2">
                          <label class="form-check-label">
                            Kamar Twin (Rp.2.620.000)
                          </label>
                        </div>
                        <div class="form-check" style="margin-left: 7px">
                          <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios2" value="3">
                          <label class="form-check-label">
                            Kamar 3 Org (Rp.3.630.000)
                          </label>
                        </div>
                        <div class="form-check" style="margin-left: 7px">
                          <input class="form-check-input" type="radio" name="elitetri" id="exampleRadios2" value="4">
                          <label class="form-check-label">
                            Kamar 4 Org (Rp.4.640.000)
                          </label>
                        </div>

                  </div>
                </div>
              </div>
              
                <div class="btn-wrap">
                    <button class="btn-buyy" name="id_paket" type="submit" value="<?=$row['id_paket'];?>">Register</button>
                </div>
                </form>
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


                    <form action="/daftar" method="post" onSubmit="return confirm('Register this competition?');">
                      <input type="hidden" name="harga" value="<?= $row['harga']?>">
                        <div class="form-check" style="margin-left: 18px">
                          <input class="form-check-input" type="radio" id="exampleRadios1" value="1" name="age_group">
                          <label class="form-check-label">
                            16 - 29
                          </label>
                        </div>
                        <div class="form-check" style="margin-left: 18px">
                          <input class="form-check-input" type="radio" name="age_group" id="exampleRadios2" value="2">
                          <label class="form-check-label">
                            30 - 44
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="age_group" id="exampleRadios2" value="3">
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
                  </form>
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
                    <form action="/daftar" method="post" onSubmit="return confirm('Register this competition?');">
                      <input type="hidden" name="harga" value="<?= $row['harga']?>"> 
                      <br><br><br>            
                      <div class="btn-wrap">
                        <button class="btn-buyy" name="id_paket" type="submit" value="<?=$row['id_paket'];?>"">Register</button>
                      </div>
                    </form>
                
              <?php } ?>

            </div>
          </div>
       <?php }?> 

      </div>
    </div>
  </section>
</main><!-- End #main -->

<?= $this->endSection() ?>