<?= $this->extend('utama/headerfooter_utama') ?>

<?= $this->section('title') ?>
  Register Elite Triathlon
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style type="text/css">
    body{
        background-color: #fff9f7;
    }
</style>
<form class="form-detail form-horizontal" id="myform" action="/daftar" method="post">

<div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#athlete" class="nav-link active" data-toggle="tab">Athlete</a>
                </li>
                <li class="nav-item">
                    <a href="#official" class="nav-link" data-toggle="tab">Official</a>
                </li>
            </ul>
            <!-- <form action="/daftar" method="post"> -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="athlete">
                        <div class="page-content">
                            <div class="form-v10-content">
                            <div class="form-detail" id="myform" action="/daftar" method="post">
                                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                    <div class="form-left">

                                                    <h2>Personal Information</h2>

                                        <div class="form-row">
                                            <input type="text" name="nama_panjang[]" id="full_name" class="input-text" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="nama_panggilan[]" id="first_name" class="input-text" placeholder="Nick Name" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="nama_bib[]" class="bib" id="bib" placeholder="BIB Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                                            <input type="date" name="tanggal_lahir[]" class="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required style="color: #ccc">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="kewarganegaraan[]" class="nationality" id="nationality" placeholder="Country Of Citizenship" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="no_ktp[]" class="ktp" id="ktp" placeholder="KTP Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="no_hp[]" class="hp" id="hp" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="alamat[]" class="jalan" id="jalan" placeholder="Adress (Street)" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="kecamatan[]" id="kecamatan" class="kecamatan" placeholder="District" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kota[]" id="kota" class="kota" placeholder="City" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="provinsi[]" id="provinsi" class="provinsi" placeholder="Province" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kode_pos[]" id="kodepos" class="kodepos" placeholder="Zip Code" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="negara[]" class="negara" id="negara" placeholder="Country" required>
                                        </div>
                                    </div>


                                    <div class="form-right">
                                        <h2>General Information</h2>

                                        <div class="form-row">
                                            <select name="sex[]">
                                                <option value="sex">Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <select name="gol_darah[]">
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
                                            <input type="text" name="nama_komunitas[]" class="komunitas" id="komunitas" placeholder="Community Name" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="swim_time_750[]" class="swim_time" id="swim_time" placeholder="Swim Time 750 m" required>
                                        </div>
                                        <div class="form-row">
                                            <select name="ukuran_jersey[]">
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
                                            <input type="text" name="ec_nama[]" id="nama_em" class="nama_em" placeholder="Name" required>

                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="ec_hp[]" id="hp_em" class="hp_em" placeholder="Phone Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="email" name="ec_email[]" id="email_em" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                        </div>

                                    
                                    </div>
                                <!-- </form> -->
                                </div>
                            <!-- </form> -->
                            </div>
                        </div>


                </div>

        <!--         (TAB BUAT OFFICIALL) -->
                <div class="tab-pane fade" id="official">
                    <div class="form-v10-content" >
                        <div class="form-detail" id="myform">
                            <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                            <div class="form-left">

                                <h2>Personal Information</h2>
                                <input type="hidden" name="no_ktp[]" class="ktp" id="ktp" form="myform">
                                <input type="hidden" name="nama_bib[]" class="nama_bib" id="nama_bib"  form="myform">
                                <input type="hidden" name="kewarganegaraan[]" class="kewarganegaraan" id="kewarganegaraan"  form="myform">
                                <input type="hidden" name="tanggal_lahir[]" class="tanggal_lahir" id="tanggal_lahir"  form="myform" >
                                <input type="hidden" name="no_hp[]" class="no_hp" id="no_hp" form="myform">
                                <input type="hidden" name="negara[]" class="negara" id="negara"  form="myform">
                                <input type="hidden" name="provinsi[]" class="provinsi" id="provinsi"  form="myform">
                                <input type="hidden" name="kota[]" class="kota" id="kota"  form="myform">
                                <input type="hidden" name="kecamatan[]" class="kecamatan" id="kecamatan"  form="myform">
                                <input type="hidden" name="kode_pos[]" class="kode_pos" id="kode_pos" form="myform" >
                                <input type="hidden" name="alamat[]" class="alamat" id="alamat" form="myform" >
                                <input type="hidden" name="sex[]" class="sex" id="sex" form="myform" >
                                <input type="hidden" name="gol_darah[]" class="gol_darah" id="gol_darah"  form="myform">
                                <input type="hidden" name="nama_komunitas[]" class="nama_komunitas" id="nama_komunitas" form="myform" >
                                <input type="hidden" name="swim_time_750[]" class="swim_time_750" id="swim_time_750" form="myform" >
                                <input type="hidden" name="ec_nama[]" class="ec_nama" id="ec_nama" form="myform" >
                                <input type="hidden" name="ec_email[]" class="ec_email" id="ec_email"form="myform" >
                                <input type="hidden" name="ec_hp[]" class="ec_hp" id="ec_hp" form="myform">
                                <input type="hidden" name="ukuran_jersey[]" class="ukuran_jersey" id="ukuran_jersey" form="myform">

                                <div class="form-row">
                                    <input type="text" name="nama_panjang[]" class="fullname_ofc" id="fullname_ofc" placeholder="Full Name"form="myform" required>
                                </div>

                                <div class="form-row">
                                    <input type="text" name="nama_panggilan[]" class="nickname_ofc" id="nickname_ofc" placeholder="Nick Name" form="myform" required>
                                </div>

                            </div>


                            <div class="form-right">
                                <h2><br></h2>
                                <div class="form-row">
                                    <input type="text" name=no_hp[]" class="ofc_hp" id="ofc_hp" placeholder="Phone Number" form="myform" required>
                                </div>

                                <div class="form-row">
                                    <input type="email" name="email[]" id="ofc_email" class="ofc_email" form="myform" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                </div>

                                <!-- <input type="submit" name="register" class="register" value="Register" style="margin-bottom: 10px"> -->
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
           <!--  tutup tab content -->
           <!-- </form> -->
</div> 


        <!-- tutup bs-example    --> 

<div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#athlete2" class="nav-link active" data-toggle="tab">Athlete</a>
                </li>
                <li class="nav-item">
                    <a href="#official2" class="nav-link" data-toggle="tab">Official</a>
                </li>
            </ul>
            <!-- <form action="/daftar" method="post"> -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="athlete2">
                        <div class="page-content">
                            <div class="form-v10-content">
                            <div class="form-detail" id="myform" action="/daftar" method="post">
                                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                                    <div class="form-left">

                                                    <h2>Personal Information</h2>

                                        <div class="form-row">
                                            <input type="text" name="nama_panjang[]" id="full_name" class="input-text" placeholder="Full Name" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="nama_panggilan[]" id="first_name" class="input-text" placeholder="Nick Name" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="nama_bib[]" class="bib" id="bib" placeholder="BIB Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                                            <input type="date" name="tanggal_lahir[]" class="tgllahir" id="tgllahir" placeholder="Tanggal Lahir" required style="color: #ccc">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="kewarganegaraan[]" class="nationality" id="nationality" placeholder="Country Of Citizenship" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="no_ktp[]" class="ktp" id="ktp" placeholder="KTP Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="no_hp[]" class="hp" id="hp" placeholder="Phone Number" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="alamat[]" class="jalan" id="jalan" placeholder="Adress (Street)" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="kecamatan[]" id="kecamatan" class="kecamatan" placeholder="District" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kota[]" id="kota" class="kota" placeholder="City" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row form-row-1">
                                                <input type="text" name="provinsi[]" id="provinsi" class="provinsi" placeholder="Province" required>
                                            </div>
                                            <div class="form-row form-row-2">
                                                <input type="text" name="kode_pos[]" id="kodepos" class="kodepos" placeholder="Zip Code" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="negara[]" class="negara" id="negara" placeholder="Country" required>
                                        </div>
                                    </div>


                                    <div class="form-right">
                                        <h2>General Information</h2>

                                        <div class="form-row">
                                            <select name="sex[]">
                                                <option value="sex">Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-row">
                                            <select name="gol_darah[]">
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
                                            <input type="text" name="nama_komunitas[]" class="komunitas" id="komunitas" placeholder="Community Name" required>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="swim_time_750[]" class="swim_time" id="swim_time" placeholder="Swim Time 750 m" required>
                                        </div>
                                        <div class="form-row">
                                            <select name="ukuran_jersey[]">
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
                                            <input type="text" name="ec_nama[]" id="nama_em" class="nama_em" placeholder="Name" required>

                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="ec_hp[]" id="hp_em" class="hp_em" placeholder="Phone Number" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="email" name="ec_email[]" id="email_em" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                        </div>

                                    
                                    </div>
                                <!-- </form> -->
                                </div>
                            </div>
                        </div>


                </div>

        <!--         (TAB BUAT OFFICIALL) -->
                <div class="tab-pane fade" id="official2">
                    <div class="form-v10-content" >
                        <div class="form-detail" id="myform">
                            <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                            <div class="form-left">

                                <h2>Personal Information</h2>
                                        <input type="hidden" name="no_ktp[]" class="ktp" id="ktp" form="myform">
                                        <input type="hidden" name="nama_bib[]" class="nama_bib" id="nama_bib"  form="myform">
                                        <input type="hidden" name="kewarganegaraan[]" class="kewarganegaraan" id="kewarganegaraan"  form="myform">
                                        <input type="hidden" name="tanggal_lahir[]" class="tanggal_lahir" id="tanggal_lahir"  form="myform" >
                                        <input type="hidden" name="no_hp[]" class="no_hp" id="no_hp" form="myform">
                                        <input type="hidden" name="negara[]" class="negara" id="negara"  form="myform">
                                        <input type="hidden" name="provinsi[]" class="provinsi" id="provinsi"  form="myform">
                                        <input type="hidden" name="kota[]" class="kota" id="kota"  form="myform">
                                        <input type="hidden" name="kecamatan[]" class="kecamatan" id="kecamatan"  form="myform">
                                        <input type="hidden" name="kode_pos[]" class="kode_pos" id="kode_pos" form="myform" >
                                        <input type="hidden" name="alamat[]" class="alamat" id="alamat" form="myform" >
                                        <input type="hidden" name="sex[]" class="sex" id="sex" form="myform" >
                                        <input type="hidden" name="gol_darah[]" class="gol_darah" id="gol_darah"  form="myform">
                                        <input type="hidden" name="nama_komunitas[]" class="nama_komunitas" id="nama_komunitas" form="myform" >
                                        <input type="hidden" name="swim_time_750[]" class="swim_time_750" id="swim_time_750" form="myform" >
                                        <input type="hidden" name="ec_nama[]" class="ec_nama" id="ec_nama" form="myform" >
                                        <input type="hidden" name="ec_email[]" class="ec_email" id="ec_email"form="myform" >
                                        <input type="hidden" name="ec_hp[]" class="ec_hp" id="ec_hp" form="myform">
                                        <input type="hidden" name="ukuran_jersey[]" class="ukuran_jersey" id="ukuran_jersey" form="myform">

                                        <div class="form-row">
                                            <input type="text" name="nama_panjang[]" class="fullname_ofc" id="fullname_ofc" placeholder="Full Name"form="myform" required>
                                        </div>

                                        <div class="form-row">
                                            <input type="text" name="nama_panggilan[]" class="nickname_ofc" id="nickname_ofc" placeholder="Nick Name" form="myform" required>
                                        </div>

                            </div>


                            <div class="form-right">
                                <h2><br></h2>
                                <div class="form-row">
                                    <input type="text" name=no_hp[]" class="ofc_hp" id="ofc_hp" form="myform" placeholder="Phone Number" required>
                                </div>

                                <div class="form-row">
                                    <input type="email" name="email[]" id="ofc_email" class="ofc_email" form="myform" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                </div>
                                <input type="hidden" name="harga" value="50">
                                <input type="hidden" name="id_sub" value="6">
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
           <!--  tutup tab content -->
           <!-- </form> -->

</div> 
<button type="submit" name="register" class="register" value="Register" style="margin-bottom: 10px">Register</button>
</form>



<?= $this->endSection() ?>