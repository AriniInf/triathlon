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
        <h3 style="color: #e60000;margin-left: 7%">Data Participant Single Room Elite Triathlon</h3>
        <div class="page-content">
            <div class="form-v10-content" style="margin-top: 0px;">
                <form class="form-detail" action="<?= base_url('daftar') ?>" method="post" id="myform">
                    <input type="hidden" name="penanda[1]" id="penanda1" value="athlete">
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


                        <div class="form-akhir">
                            <input type="submit" name="register" class="register" value="Register Here" style="margin-bottom: 10px">
                        </div>

                        <input type="hidden" name="harga" value="1310000">
                        <input type="hidden" name="id_sub" value="5">

                    </div>
                </form>
            </div>
        </div>


<?= $this->endSection() ?>