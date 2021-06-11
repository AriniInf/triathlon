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
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="text-xs-center">
                                              <i class="fa fa-search-plus float-xs-left icon"></i>
                                            <div class="row">
                                              <div class="col-md-8">
                                                <h2>Registration-ID #<?= $invoice['id_invoice'] ?></h2>
                                              </div>
                                              <div class="col-md-4">
                                                <p class="proile-rating text-right" style="font-size: 20px;color: #313030">Status :  <span class="badge badge-success" style="color: white">Aktif</span>
                                                </p>
                                              </div>
                                            </div>

                                          </div>
                                          <hr>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="card ">

                                              <div class="card-header bg-oren">
                                                  <h4 class="text-xs-center" style="color: white"><strong>Personal Information</strong></h4>
                                              </div>

                                              <div class="container">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Full Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p style="color: black"><?= $users['nama_panjang'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p style="color: black"><?= $users['email'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Phone</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p style="color: black"><?= $users['no_hp'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Address</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p style="color: black"><?= $users['alamat'] ?></p>
                                                    </div>
                                                </div>
                                              </div>
  
                                          </div>
                                          <br>
                                      </div>
                                  </div>
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
                                  </div>
                              </div>

                            	<!-- isi konten selese -->


<?= $this->endSection() ?>