<?= $this->extend('member/headerfooter_mem') ?>

<?= $this->section('title') ?>
  Dashboard Member
<?= $this->endSection() ?>

<?= $this->section('content') ?>

                                <div class="container">
                                  <p class="proile-rating  text-right" style="font-size: 20px;color: #313030">Status :  <span class="badge badge-danger" style="color: white">Upload Ditolak</span>
                                  </p>
                                </div>

                              <div class="container">
                                <div class="card bg-oren">
                                  <div class="card-body"><center><h6 style="color: white;font-size: 15px">Bukti yang dikirimkan ditolak<br>Silahkan mengirim bukti transfer kembali dengan jelas</h6></center></div>
                                </div>
                                <br>
                                
                                <form method="post" action="<?= base_url('upload-bukti') ?>" enctype="multipart/form-data">
                                    <div class="custom-file mb-3">
                                      <input type="text" value="<?= $invoice['id_invoice'] ?>" name="id_invoice"> 
                                      <input type="file" class="custom-file-input" id="customFile" name="berkas">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    
                                    <div class="mt-3">
                                      <button type="submit" class="btn btn-oren float-right">Submit</button>
                                    </div>
                                  </form>
                              </div>

<?= $this->endSection() ?>