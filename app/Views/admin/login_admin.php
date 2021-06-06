<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Triathlon</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/img/icbund.png') ?>" rel="icon">
	<link href="<?= base_url('assets/img/iccom.png') ?>" rel="apple-touch-icon">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/montserrat-font.css') ?>" >
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') ?>" >
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="form-v10">
	<div style="text-align: center;margin-top: 30px">
		<img class="img-responsive" src="<?= base_url('assets/img/iccom.png') ?>" alt="logo1" style="max-height: 80px;">
		<h2>Unesa Triathlon 2021</h2>
	</div>

	<div class="page-content">
		
		<div class="form-v10-content">
			
			<form class="form-detail" action="#" method="post" id="myform">

				<div class="form-right" class="center">

						<div class="row">
						    <div class="col col-sm-1">
						     <a href="<?= base_url('') ?>"><img src="<?= base_url('assets/img/prev2.png') ?>" class="text-center" alt="back" style="width:40px;height:40px;margin-top: 25px;margin-left: 50px"></a>
						    </div>
						    <div class="col col-sm-11" style="padding-left: 0px;">
						     <h2>Login Administrator</h2>
	
						     <div class="form-row">
						     		<input type="email" name="email" class="email" id="email" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" >
						     </div>
						     <div class="form-row">
						     		<input style="font-size: 22px" type="password" name="password" class="password" id="password" placeholder="Password" required>
						     </div>
						     <?php if(session()->getFlashdata('msg')):?>
						     <div class="form-row">
								    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>							     	
						     </div>
						     <?php endif;?>	

						     <div class="form-akhir">
						     		<input type="submit" name="register" class="register" value="Login" style="margin-bottom: 10px">
						     </div>

						    </div>
					  	</div>
				</div>
			</form>
		</div>

<!-- 		<div class="form">
			<h1>P</h1>
		</div> -->


	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>