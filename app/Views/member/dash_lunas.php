<?= $this->extend('member/headerfooter_mem') ?>

<?= $this->section('title') ?>
  Dashboard Member
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- konten view di sini -->

  <style>
  .height {
      min-height: 200px;
  }

  .icon {
      font-size: 47px;
      color: #5CB85C;
  }

  .iconbig {
      font-size: 77px;
      color: #5CB85C;
  }

  .table > tbody > tr > .emptyrow {
      border-top: none;
  }

  .table > thead > tr > .emptyrow {
      border-bottom: none;
  }

  .table > tbody > tr > .highrow {
      border-top: 3px solid;
  }

  .bg-oren{
    background-color: #e60000;
  }
  </style>

                            	<!-- isi content -->

    <div class="container">
    <div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped table-hover text-center">

          <!--Table head-->
          <thead style="background-color: #f2dede">
            <tr>
             <th>No</th>
             <th>ID Registrasi</th>
             <th>Full Name</th>
             <th>Nick Name</th>
             <th>Bib Name</th>

             <th>Date of Birth</th>
             <th>Country Of Citizenship</th>
             <th>KTP</th>
             <th>Phone</th>
             <th>Adress</th>

             <th>Sex</th>
             <th>Blood Type</th>


             <th>Community Name</th>
             <th>Swim Time 750</th>
             <th>Jersey Size</th>

             <!-- <th>Emergency Contact Name</th>
             <th>Emergency Contact Phone</th>
             <th>Emergency Contact Email</th> -->

            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
          <?php $no = 1; foreach($peserta as $row){ ?>
            <tr>
                <td><?= $no++ ?></td>
                <td id="1"><?= $row['id_regis'] ?></td>
                <td id="1"><?= $row['nama_panjang'] ?></td>
                <td id="2"><?= $row['nama_panggilan'] ?></td>
                <td id="3"><?= $row['nama_bib'] ?></td>
                <td id="4"><?= $row['tanggal_lahir'] ?></td>
                <td id="5"><?= $row['kewarganegaraan'] ?></td>
                <td id="6"><?= $row['no_ktp'] ?></td>
                <td id="7"><?= $row['no_hp'] ?></td>
                <td id="8"><?= $row['alamat'] ?></td>
                <td id="9"><?= $row['sex'] ?></td>
                <td id="10"><?= $row['gol_darah'] ?></td>
                <td id="11"><?= $row['nama_komunitas'] ?></td>
                <td id="12"><?= $row['swim_time_750'] ?></td>
                <td id="13"><?= $row['ukuran_jersey'] ?></td>
                <!-- <td id="14"></td>
                <td id="15"></td>
                <td id="16"></td> -->
            </tr>
            <?php } ?>

          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
      <br>
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
                                                                  <td><?= $subpaket['nama_sub'] ?></td>
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
                                  </div>
                              </div>

                            	<!-- isi konten selese -->


<?= $this->endSection() ?>