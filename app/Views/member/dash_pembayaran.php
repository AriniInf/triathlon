<?= $this->extend('member/headerfooter_mem') ?>

<?= $this->section('title') ?>
  Dashboard Member
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- konten view di sini -->
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
      <!--                                                       <tr>
                                                                <td>Jersey</td>
                                                                <td class="text-xs-right">Rp.0</td>
                                                            </tr>
 -->
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


        <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>

<?= $this->endSection() ?>