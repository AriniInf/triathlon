<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Register</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Sign Up</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/post-register" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Nama Panjang</label>
                        <input type="text" name="nama_panjang" class="form-control" id="InputForName" value="<?= set_value('nama_panjang') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForBirtday" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="InputForBirtday">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">No KTP</label>
                        <input type="text" name="no_ktp" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Nama BIB</label>
                        <input type="text" name="nama_bib" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Negara</label>
                        <input type="text" name="negara" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Provinsi</label>
                        <input type="text" name="provinsi" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Kota</label>
                        <input type="text" name="kota" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Kode Pos</label>
                        <input type="text" name="kode_pos" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Jeni Kelamin</label>
                        <input type="text" name="sex" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Golongan Darah</label>
                        <input type="text" name="gol_darah" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Nama Komunitas</label>
                        <input type="text" name="nama_komunitas" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Swin Time 750</label>
                        <input type="text" name="swim_time_750" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Emergency Contact Nama</label>
                        <input type="text" name="ec_nama" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Emergency Contact Email</label>
                        <input type="text" name="ec_email" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Emergency Contact HP</label>
                        <input type="text" name="ec_hp" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNasionality" class="form-label">Ukuran Jersey</label>
                        <input type="text" name="ukuran_jersey" class="form-control" id="InputForNasionality">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>