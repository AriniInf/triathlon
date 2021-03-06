<!DOCTYPE html>
<html>
<head>
<!-- 	Competition nya
Triathlon
1. Elite

2. Age Group

3. Kids


Duathlon -->
	<meta charset="utf-8">
	<title>Register Triathlon</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/icbund.png" rel="icon">
	<link href="assets/img/iccom.png" rel="apple-touch-icon">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="asset/css/montserrat-font.css" >
	<link rel="stylesheet" type="text/css" href="asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" >
	<!-- Main Style Css -->
    <link rel="stylesheet" href="asset/css/style.css" />
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="/post-register" method="post" id="myform">
				<a href="<?= base_url('') ?>"><img src="assets/img/prev1.png" alt="back" style="width:40px;height:40px;padding: 50px 0px 0px 50px"></a>
				<div class="form-left">

								<h2>Register Account</h2>

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
				</div>


				<div class="form-right">
					<h2>General Information</h2>

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

					<h2>Account</h2>

					<div class="form-row">
						<input type="email" name="email" class="email" id="email" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" >
					</div>
					<div class="form-row">
						<input style="font-size: 22px" type="password" name="password" class="password" id="password" placeholder="Password" required>
					</div>

					<?php if(isset($validation)):?>
						<div class="form-row">
					    	<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
					    </div>
					<?php endif;?>


					<div class="form-akhir">
						<input type="submit" name="register" class="register" value="Register" style="margin-bottom: 10px">
						<p style="color: white;margin-top: 10px;font-size: 15px">Already a member? <a href="<?= base_url('login') ?>" class="text">Login</a></p>
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>