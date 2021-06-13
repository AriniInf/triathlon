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

<div class="container awal" style="background-color: #fff9f7">
    <h3 style="color: #e60000;margin-left: 7%">Data Participant 1</h3>
    <a class="btn btn-sm btn-danger at"  onclick="show_atlet()"> Athlete</a>
    <a class="btn btn-sm btn-danger ofc" id="ofc1" onclick="show_official()">Official</a>

    <form id="myform" action="/daftar" method="post">
        <input type="hidden" name="penanda[1]" id="penanda1" value="athlete">
        <input type="hidden" name="penanda[2]" id="penanda2" value="athlete">
        <input type="hidden" name="harga" value="50">
        <input type="hidden" name="id_sub" value="6">

        <div class="atlet1">
        <!--     <b>First Name:</b> <input type="text" name="nama_panjang[]" id="nama_panjang1"> -->
            <div class="form-v10-content">
                <div class="form-detail" id="myform">
                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                    <div class="form-left">

                                    <h2>Personal Information</h2>

                        <div class="form-row">
                            <input type="text" name="nama_panjang[]" id="nama_panjang1" class="input-text" placeholder="Full Name" >
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="nama_panggilan[]" id="nama_panggilan1" class="input-text" placeholder="Nick Name" >
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="nama_bib[]" class="bib" id="nama_bib1" placeholder="BIB Name" >
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                            <input type="date" name="tanggal_lahir[]" class="tgllahir" id="tanggal_lahir1" placeholder="Tanggal Lahir" style="color: #ccc">
                        </div>
                        <div class="form-row">
                            <input type="text" name="kewarganegaraan[]" class="nationality" id="kewarganegaraan1" placeholder="Country Of Citizenship">
                        </div>
                        <div class="form-row">
                            <input type="text" name="no_ktp[]" class="ktp" id="no_ktp1" placeholder="KTP Number">
                        </div>

                        <div class="form-row">
                            <input type="text" name="no_hp[]" class="hp" id="no_hp1" placeholder="Phone Number">
                        </div>
                        <div class="form-row">
                            <input type="text" name="alamat[]" class="jalan" id="alamat1" placeholder="Adress (Street)">
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="kecamatan[]" id="kecamatan1" class="kecamatan" placeholder="District">
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="kota[]" id="kota1" class="kota" placeholder="City">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="provinsi[]" id="provinsi1" class="provinsi" placeholder="Province">
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="kode_pos[]" id="kodepos1" class="kodepos" placeholder="Zip Code">
                            </div>
                        </div>

                        <div class="form-row">
                            <input type="text" name="negara[]" class="negara" id="negara1" placeholder="Country">
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
                            <input type="text" name="nama_komunitas[]" class="komunitas" id="komunitas1" placeholder="Community Name">
                        </div>
                        <div class="form-row">
                            <input type="text" name="swim_time_750[]" class="swim_time" id="swim_time1" placeholder="Swim Time 750 m">
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
                            <input type="text" name="ec_nama[]" id="nama_em1" class="nama_em" placeholder="Name">

                        </div>

                        <div class="form-row">
                            <input type="text" name="ec_hp[]" id="hp_em1" class="hp_em" placeholder="Phone Number">
                        </div>

                        <div class="form-row">
                            <input type="email" name="ec_email[]" id="email_em1" class="input-text" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="official1">
            <div class="form-v10-content" >
                <div class="form-detail" id="myform">
                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                    <div class="form-left">

                        <h2>Personal Information</h2>
                                <input type="hidden" name="email[]" id="email_ofc1" class="ofc_email" form="myform" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                <input type="hidden" name="no_ktp[]" class="ktp" id="ktp" form="myform">
                                <input type="hidden" name="nama_bib[]" class="nama_bib" id="nama_bib"  form="myform">
                                <input type="hidden" name="kewarganegaraan[]" class="kewarganegaraan" id="kewarganegaraan"  form="myform">
                                <input type="hidden" name="tanggal_lahir[]" class="tanggal_lahir" id="tanggal_lahir"  form="myform" >
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
                                    <input type="text" name="nama_panjang_ofc[]" class="fullname_ofc" id="fullname_ofc1" placeholder="Full Name"form="myform">
                                </div>

                                <div class="form-row">
                                    <input type="text" name="nama_panggilan[]" class="nickname_ofc" id="nickname_ofc1" placeholder="Nick Name" form="myform">
                                </div>

                    </div>


                    <div class="form-right">
                        <h2><br></h2>

                        <div class="form-row">
                            <input type="text" name="no_ktp[]" class="ktp" id="ktp_ofc1" form="myform" placeholder="KTP Number">
                        </div>
                        <div class="form-row">
                            <input type="text" name="no_hp[]" class="ofc_hp" id="no_hp_ofc1" form="myform" placeholder="Phone Number">
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

    <!-- FORM AWAL KELARR -->

    <h3 style="color: #e60000;margin-left: 7%">Data Participant 2</h3>
    <a class="btn btn-sm btn-danger at2" onclick="show_atlet()"> Athlete</a>
    <a class="btn btn-sm btn-danger ofc2" onclick="show_official()">Official</a>

        <div class="atlet2">
            <div class="form-v10-content">
                <div class="form-detail" id="myform">
                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                    <div class="form-left">

                                    <h2>Personal Information</h2>

                        <div class="form-row">
                            <input type="text" name="nama_panjang[]" id="nama_panjang2" class="input-text" placeholder="Full Name" >
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="nama_panggilan[]" id="nama_panggilan2" class="input-text" placeholder="Nick Name" >
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="nama_bib[]" class="bib" id="nama_bib2" placeholder="BIB Name" >
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="date" style="color: #666;padding: 11.5px 15px 15px 15px">Date Of Birth</label>
                            <input type="date" name="tanggal_lahir[]" class="tgllahir" id="tanggal_lahir2" placeholder="Tanggal Lahir" style="color: #ccc">
                        </div>
                        <div class="form-row">
                            <input type="text" name="kewarganegaraan[]" class="nationality" id="kewarganegaraan2" placeholder="Country Of Citizenship">
                        </div>
                        <div class="form-row">
                            <input type="text" name="no_ktp[]" class="ktp" id="no_ktp2" placeholder="KTP Number">
                        </div>

                        <div class="form-row">
                            <input type="text" name="no_hp[]" class="hp" id="no_hp2" placeholder="Phone Number">
                        </div>
                        <div class="form-row">
                            <input type="text" name="alamat[]" class="jalan" id="alamat2" placeholder="Adress (Street)">
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="kecamatan[]" id="kecamatan2" class="kecamatan" placeholder="District">
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="kota[]" id="kota2" class="kota" placeholder="City">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="provinsi[]" id="provinsi2" class="provinsi" placeholder="Province">
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="kode_pos[]" id="kodepos2" class="kodepos" placeholder="Zip Code">
                            </div>
                        </div>

                        <div class="form-row">
                            <input type="text" name="negara[]" class="negara" id="negara2" placeholder="Country">
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
                            <input type="text" name="nama_komunitas[]" class="komunitas" id="komunitas2" placeholder="Community Name">
                        </div>
                        <div class="form-row">
                            <input type="text" name="swim_time_750[]" class="swim_time" id="swim_time2" placeholder="Swim Time 750 m">
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
                            <input type="text" name="ec_nama[]" id="nama_em2" class="nama_em" placeholder="Name">

                        </div>

                        <div class="form-row">
                            <input type="text" name="ec_hp[]" id="hp_em2" class="hp_em" placeholder="Phone Number">
                        </div>

                        <div class="form-row">
                            <input type="email" name="ec_email[]" id="email_em2" class="input-text" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="official2">
    <div class="form-v10-content" >
                <div class="form-detail" id="myform">
                    <a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
                    <div class="form-left">

                        <h2>Personal Information</h2>
                                <input type="hidden" name="email[]" id="email_ofc2" class="email_ofc2" form="myform" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                                <input type="hidden" name="nama_bib[]" class="nama_bib" id="nama_bib"  form="myform">
                                <input type="hidden" name="kewarganegaraan[]" class="kewarganegaraan" id="kewarganegaraan"  form="myform">
                                <input type="hidden" name="tanggal_lahir[]" class="tanggal_lahir" id="tanggal_lahir"  form="myform" >
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
                                    <input type="text" name="nama_panjang_ofc[]" class="fullname_ofc" id="fullname_ofc2" placeholder="Full Name"form="myform">
                                </div>

                                <div class="form-row">
                                    <input type="text" name="nama_panggilan[]" class="nickname_ofc" id="nickname_ofc2" placeholder="Nick Name" form="myform">
                                </div>

                    </div>


                    <div class="form-right">
                        <h2><br></h2>
                        <div class="form-row">
                            <input type="text" name="no_ktp[]" class="ktp" id="ktp_ofc2" form="myform" placeholder="KTP Number">
                        </div>
                        <div class="form-row">
                            <input type="text" name="no_hp[]" class="ofc_hp" id="no_hp_ofc2" form="myform" placeholder="Phone Number" >
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
         <button type="submit" id="submit" class="btn btn-item btn-lg">REGISTER HERE</button>
    </form>
</div>
<!-- tutup container
 -->
 <script>
$(document).ready(function(){
    alert('SILAHKAN MENGISI DATA PARTICIPANT');  // alert to confirm the page is loaded    
    $('.official1').hide();

  $(".at").click(function(){
    $(".atlet1").show();
    $(".official1").hide();
    $("#penanda1").val("athlete");
     if ($("#fullname_ofc1").val()!="" || $("#nickname_ofc1").val()!="" || $("#ktp_ofc1").val()!="" || $("#no_hp_ofc1").val()!="" ) {
        $(".atlet1 :input").prop("disabled", true);
    }
    else{
        $(".atlet1 :input").prop("disabled", false);
    }
  });

  $(".ofc").click(function(){
    $(".atlet1").hide();
    $(".official1").show();
    $("#penanda1").val("official");
    // console.log($("#nama_panjang1").val());
    if ($("#nama_panjang1").val()!="") {
        $(".official1 :input").prop("disabled", true);
    }
    else{
        $(".official1 :input").prop("disabled", false);
    }
  });
});


$(document).ready(function(){ 
    $('.official2').hide();
  $(".at2").click(function(){
    $(".atlet2").show();
    $(".official2").hide();
    $("#penanda2").val("athlete");
    // console.log($("#fullname_ofc2").val());
    // console.log( $("#nickname_ofc2").val());
    // console.log( $("#email_ofc2").val());
    // console.log($("#no_hp_ofc2").val());
     if ($("#fullname_ofc2").val()!="" || $("#nickname_ofc2").val()!="" || $("#ktp_ofc2").val()!="" || $("#no_hp_ofc2").val()!="" ) {
        $(".atlet2 :input").prop("disabled", true);
    }
    else{
        $(".atlet2 :input").prop("disabled", false);
    }
  });
  $(".ofc2").click(function(){
    $(".atlet2").hide();
    $(".official2").show();
    $("#penanda2").val("official");
    if ($("#nama_panjang2").val()!="") {
        $(".official2 :input").prop("disabled", true);
    }
    else{
        $(".official2 :input").prop("disabled", false);
    }
  });
  // $("#nama_panjang2").on("change",function(){$("#at1").prop("disabled", true)});
});



    
 </script>
<?= $this->endSection() ?>