<?= $this->extend('utama/headerfooter_utama') ?>

<?= $this->section('title') ?>
  Register Elite Triathlon
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<style type="text/css">
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background-color:#E60000;
    }
    .btn-item{
        color: white;
        background-color: black
    }
    .btn-item:hover{
        color: white;
    }
</style>

<div class="container" style="background-color: #fff9f7">
  <br>
  <div class="form-detail" action="/post-register" method="post" id="myform">
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#form1">Participant 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form2">Participant 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#form3">Participant 3</a>
    </li>
    <li class="nav-item">
        <h6 class="nav-link">After fill the form, <br>click register here</h6>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-item" href="#" role="button">Register Here</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="form1" class="container tab-pane active"><br>
        <div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#athlete" class="nav-link active" data-toggle="tab">Athlete</a>
                </li>
                <li class="nav-item">
                    <a href="#official" class="nav-link" data-toggle="tab">Official</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="athlete">
                        <div class="page-content">
                            <div class="form-v10-content">
                                <div class="form-detail" id="myform">
                                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                    <div class="form-left">

                                                    <h2>Personal Information</h2>

                                        <div class="form-row">
                                            <input type="text" name="nama_panjang" id="full_name" class="input-text" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="nama_panggilan" id="first_name" class="input-text" placeholder="Nick Name" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="nama_bib" class="bib" id="bib" placeholder="BIB Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                                            <input type="date" name="tanggal_lahir" class="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required style="color: #ccc">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="kewarganegaraan" class="nationality" id="nationality" placeholder="Country Of Citizenship" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="no_ktp" class="ktp" id="ktp" placeholder="KTP Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="no_hp" class="hp" id="hp" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="alamat" class="jalan" id="jalan" placeholder="Adress (Street)" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="kecamatan" id="kecamatan" class="kecamatan" placeholder="District" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kota" id="kota" class="kota" placeholder="City" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="provinsi" id="provinsi" class="provinsi" placeholder="Province" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kode_pos" id="kodepos" class="kodepos" placeholder="Zip Code" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="negara" class="negara" id="negara" placeholder="Country" required>
                                        </div>
                                    </div>


                                    <div class="form-right">
                                        <h2>General Information</h2>

                                        <div class="form-row">
                                            <select name="sex">
                                                <option value="sex">Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <select name="gol_darah">
                                                <option value="gol_darah">Blood Type</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="nama_komunitas" class="komunitas" id="komunitas" placeholder="Community Name" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="swim_time_750" class="swim_time" id="swim_time" placeholder="Swim Time 750 m" required>
                                        </div>
                                        <div class="form-row">
                                            <select name="ukuran_jersey">
                                                <option value="ukuran_jersey">Jersey Size</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <h2>Emergency Contact</h2>

                                        <div class="form-row">
                                            <input type="text" name="ec_nama" id="nama_em" class="nama_em" placeholder="Name" required>

                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="ec_hp" id="hp_em" class="hp_em" placeholder="Phone Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="email" name="ec_email" id="email_em" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                </div>

        <!--         (TAB BUAT OFFICIALL) -->
                <div class="tab-pane fade" id="official">
                        <div class="form-v10-content">
                            <div class="form-detail" id="myform">
                                <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                <div class="form-left">

                                    <h2>Personal Information</h2>

                                    <div class="form-row">
                                        <input type="text" name="fullname_ofc" class="fullname_ofc" id="fullname_ofc" placeholder="Full Name" required>
                                    </div>

                                    <div class="form-row">
                                        <input type="text" name="nickname_ofc" class="nickname_ofc" id="nickname_ofc" placeholder="Nick Name" required>
                                    </div>

                                </div>


                                <div class="form-right">
                                    <h2><br></h2>
                                    <div class="form-row">
                                        <input type="text" name="ofc_hp" class="ofc_hp" id="ofc_hp" placeholder="Phone Number" required>
                                    </div>

                                    <div class="form-row">
                                        <input type="email" name="ofc_email" id="ofc_email" class="ofc_email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>

            </div>
           <!--  tutup tab content -->

        </div> 
        <!-- tutup bs-example    -->                    

    </div>
    <!-- form1 kelarr -->


    <div id="form2" class="container tab-pane fade"><br>
        <div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#athlete2" class="nav-link active" data-toggle="tab">Athlete</a>
                </li>
                <li class="nav-item">
                    <a href="#official2" class="nav-link" data-toggle="tab">Official</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="athlete2">
                        <div class="page-content">
                            <div class="form-v10-content">
                                <div class="form-detail" id="myform">
                                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                    <div class="form-left">

                                                    <h2>Personal Information</h2>

                                        <div class="form-row">
                                            <input type="text" name="nama_panjang" id="full_name" class="input-text" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="nama_panggilan" id="first_name" class="input-text" placeholder="Nick Name" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="nama_bib" class="bib" id="bib" placeholder="BIB Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                                            <input type="date" name="tanggal_lahir" class="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required style="color: #ccc">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="kewarganegaraan" class="nationality" id="nationality" placeholder="Country Of Citizenship" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="no_ktp" class="ktp" id="ktp" placeholder="KTP Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="no_hp" class="hp" id="hp" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="alamat" class="jalan" id="jalan" placeholder="Adress (Street)" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="kecamatan" id="kecamatan" class="kecamatan" placeholder="District" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kota" id="kota" class="kota" placeholder="City" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="provinsi" id="provinsi" class="provinsi" placeholder="Province" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kode_pos" id="kodepos" class="kodepos" placeholder="Zip Code" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="negara" class="negara" id="negara" placeholder="Country" required>
                                        </div>
                                    </div>


                                    <div class="form-right">
                                        <h2>General Information</h2>

                                        <div class="form-row">
                                            <select name="sex">
                                                <option value="sex">Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <select name="gol_darah">
                                                <option value="gol_darah">Blood Type</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="nama_komunitas" class="komunitas" id="komunitas" placeholder="Community Name" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="swim_time_750" class="swim_time" id="swim_time" placeholder="Swim Time 750 m" required>
                                        </div>
                                        <div class="form-row">
                                            <select name="ukuran_jersey">
                                                <option value="ukuran_jersey">Jersey Size</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <h2>Emergency Contact</h2>

                                        <div class="form-row">
                                            <input type="text" name="ec_nama" id="nama_em" class="nama_em" placeholder="Name" required>

                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="ec_hp" id="hp_em" class="hp_em" placeholder="Phone Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="email" name="ec_email" id="email_em" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                </div>

        <!--         (TAB BUAT OFFICIALL) -->
                <div class="tab-pane fade" id="official2">
                        <div class="form-v10-content">
                            <div class="form-detail" id="myform">
                                <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                <div class="form-left">

                                    <h2>Personal Information</h2>

                                    <div class="form-row">
                                        <input type="text" name="fullname_ofc" class="fullname_ofc" id="fullname_ofc" placeholder="Full Name" required>
                                    </div>

                                    <div class="form-row">
                                        <input type="text" name="nickname_ofc" class="nickname_ofc" id="nickname_ofc" placeholder="Nick Name" required>
                                    </div>

                                </div>


                                <div class="form-right">
                                    <h2><br></h2>
                                    <div class="form-row">
                                        <input type="text" name="ofc_hp" class="ofc_hp" id="ofc_hp" placeholder="Phone Number" required>
                                    </div>

                                    <div class="form-row">
                                        <input type="email" name="ofc_email" id="ofc_email" class="ofc_email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                    </div>



                                </div>
                            </div>
                        </div>
                </div>

            </div>
           <!--  tutup tab content -->

        </div> 
        <!-- tutup bs-example    -->                    

    </div>
    <!-- form2 kelarr -->

    <div id="form3" class="container tab-pane fade"><br>
        <div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#athlete3" class="nav-link active" data-toggle="tab">Athlete</a>
                </li>
                <li class="nav-item">
                    <a href="#official3" class="nav-link" data-toggle="tab">Official</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="athlete3">
                        <div class="page-content">
                            <div class="form-v10-content">
                                <div class="form-detail" id="myform">
                                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                    <div class="form-left">

                                                    <h2>Personal Information</h2>

                                        <div class="form-row">
                                            <input type="text" name="nama_panjang" id="full_name" class="input-text" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="nama_panggilan" id="first_name" class="input-text" placeholder="Nick Name" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="nama_bib" class="bib" id="bib" placeholder="BIB Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                                            <input type="date" name="tanggal_lahir" class="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required style="color: #ccc">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="kewarganegaraan" class="nationality" id="nationality" placeholder="Country Of Citizenship" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="no_ktp" class="ktp" id="ktp" placeholder="KTP Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="no_hp" class="hp" id="hp" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="alamat" class="jalan" id="jalan" placeholder="Adress (Street)" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="kecamatan" id="kecamatan" class="kecamatan" placeholder="District" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kota" id="kota" class="kota" placeholder="City" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="provinsi" id="provinsi" class="provinsi" placeholder="Province" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kode_pos" id="kodepos" class="kodepos" placeholder="Zip Code" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="negara" class="negara" id="negara" placeholder="Country" required>
                                        </div>
                                    </div>


                                    <div class="form-right">
                                        <h2>General Information</h2>

                                        <div class="form-row">
                                            <select name="sex">
                                                <option value="sex">Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <select name="gol_darah">
                                                <option value="gol_darah">Blood Type</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="nama_komunitas" class="komunitas" id="komunitas" placeholder="Community Name" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="swim_time_750" class="swim_time" id="swim_time" placeholder="Swim Time 750 m" required>
                                        </div>
                                        <div class="form-row">
                                            <select name="ukuran_jersey">
                                                <option value="ukuran_jersey">Jersey Size</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <h2>Emergency Contact</h2>

                                        <div class="form-row">
                                            <input type="text" name="ec_nama" id="nama_em" class="nama_em" placeholder="Name" required>

                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="ec_hp" id="hp_em" class="hp_em" placeholder="Phone Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="email" name="ec_email" id="email_em" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                </div>

        <!--         (TAB BUAT OFFICIALL) -->
                <div class="tab-pane fade" id="official3">
                        <div class="form-v10-content">
                            <div class="form-detail" id="myform">
                                <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                <div class="form-left">

                                    <h2>Personal Information</h2>

                                    <div class="form-row">
                                        <input type="text" name="fullname_ofc" class="fullname_ofc" id="fullname_ofc" placeholder="Full Name" required>
                                    </div>

                                    <div class="form-row">
                                        <input type="text" name="nickname_ofc" class="nickname_ofc" id="nickname_ofc" placeholder="Nick Name" required>
                                    </div>

                                </div>


                                <div class="form-right">
                                    <h2><br></h2>
                                    <div class="form-row">
                                        <input type="text" name="ofc_hp" class="ofc_hp" id="ofc_hp" placeholder="Phone Number" required>
                                    </div>

                                    <div class="form-row">
                                        <input type="email" name="ofc_email" id="ofc_email" class="ofc_email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>

            </div>
           <!--  tutup tab content -->

        </div> 
        <!-- tutup bs-example    -->                    

    </div>
    <!-- form3 kelarr -->

  </div>
<!--   tutup tab content -->
</form>
</div>
<!-- tutup container
 -->
<?= $this->endSection() ?>