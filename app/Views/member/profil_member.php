<?= $this->extend('member/headerfooter_mem') ?>

<?= $this->section('title') ?>
  Profil Member
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- konten view di sini -->
                                <div class="container" style="text-align: right">
                                    <button type="button" class="btn btn-md" data-toggle="modal" data-target="#edit-modal" style="color: white;background-color: #e60000">
                                      Edit Profile
                                    </button>
                                </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?= $row['nama_panjang'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nick Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?= $row['nama_panggilan'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?= $row['email'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Country Of Citizenship</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Indonesia</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>KTP</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>0818263179</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>BIB Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Jl. Rajawali VI Blok G/7, Rewwin, Waru, Sidoarjo, 61256</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>SEX</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Female</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Blood Type</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>B</p>
                                            </div>
                                        </div>
                                        <hr style=" border: 0.3px solid red;width: 90%;margin-left: 0px">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Community Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>Real Comm</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Swim Time 750 m</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>6 menit</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Jersey Size</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>M</p>
                                            </div>
                                        </div>

        <?php }?> 
        <div class="container">
         <!-- The Modal -->

         <div class="modal fade bd-example-modal-lg" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Profile</strong></h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <form>
                   <div class="form-group">
                     <label for="fullname" class="col-form-label">Full Name:</label>
                     <input type="text" class="form-control" id="nama_lengkap">
                   </div>
                   <div class="form-group">
                     <label for="nama_panggilan" class="col-form-label">Nick Name:</label>
                     <input type="text" class="form-control" id="nama_panggilan">
                   </div>
                   <div class="form-group">
                     <label for="kewarganegaraan" class="col-form-label">Country Of Citizenship:</label>
                     <input type="text" class="form-control" id="kewarganegaraan">
                   </div>
                   <div class="form-group">
                     <label for="no_ktp" class="col-form-label">KTP:</label>
                     <input type="text" class="form-control" id="no_ktp">
                   </div>
                   <div class="form-group">
                     <label for="bibname" class="col-form-label">Bib Name:</label>
                     <input type="text" class="form-control" id="nama_bib">
                   </div>
                   <div class="form-group">
                     <label for="telp" class="col-form-label">Phone:</label>
                     <input type="text" class="form-control" id="telp">
                   </div>
                     <hr style=" border: 0.3px solid red;margin-left: 0px">
                   <div class="form-group">
                     <label for="komunitas" class="col-form-label">Community Name:</label>
                     <input type="text" class="form-control" id="komunitas">
                   </div>
                   <div class="form-group">
                     <label for="swim_time" class="col-form-label">Swim Time 750 m:</label>
                     <input type="text" class="form-control" id="swim_time" value="">
                   </div>
                 </form>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-md" style="color: white;background-color: #e60000">Save</button>
               </div>
             </div>
           </div>
         </div>

        </div>
<!-- 


        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

        <?= $this->endSection() ?>