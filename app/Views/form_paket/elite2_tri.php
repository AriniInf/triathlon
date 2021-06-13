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
    <a class="btn btn-sm btn-danger at" onclick="show_atlet()"> Athlete</a>
    <a class="btn btn-sm btn-danger ofc" onclick="show_official()">Official</a>

    <form id="myform" action="/daftar" method="post">
        <div class="atlet1">
            <b>First Name:</b> <input type="text" name="firstName">
        </div>
        <div class="official1">
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

    <!-- FORM AWAL KELARR -->

    <h3 style="color: #e60000;margin-left: 7%">Data Participant 2</h3>
    <a class="btn btn-sm btn-danger at2" onclick="show_atlet()"> Athlete</a>
    <a class="btn btn-sm btn-danger ofc2" onclick="show_official()">Official</a>

        <div class="atlet2">
            <b>First Name:</b> <input type="text" name="firstName">
        </div>
        <div class="official2">
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
         <button type="submit" id="submit">Submit</button>
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
  });
  $(".ofc").click(function(){
    $(".atlet1").hide();
    $(".official1").show();
  });
});

$(document).ready(function(){ 
    $('.official2').hide();
  $(".at2").click(function(){
    $(".atlet2").show();
    $(".official2").hide();
  });
  $(".ofc2").click(function(){
    $(".atlet2").hide();
    $(".official2").show();
  });
});



    
 </script>
<?= $this->endSection() ?>