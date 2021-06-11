<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Login Triathlon</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="form-v10">

	<div class="page-content" style="">
<!-- 		<div>
			<h3>Login Jaya Sport Industry</h3>
		</div> -->
		
		<div class="form-v10-content">
			
			<form class="form-detail" action="/post-register" method="post" id="myform">

				<div class="form-right" class="center">

						<div class="row">
						    <div class="col col-sm-1">
						     <a href="<?= base_url('') ?>"><img src="assets/img/prev2.png" class="text-center" alt="back" style="width:40px;height:40px;margin-top: 25px;margin-left: 50px"></a>
						    </div>
						    <div class="col col-sm-11" style="padding-left: 0px;">
						     <h2>Register</h2>
	
						     <div class="form-row">
						     		<input type="email" name="email" class="email" id="email" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" >
						     </div>
						     <div class="form-row">
						     		<input style="font-size: 22px" type="password" name="password" class="password" id="password" placeholder="Password" required>
						     </div>

						     <div class="form-row">
						     		<input style="font-size: 22px" type="password" name="retypepassword" class="password" id="password" placeholder="Retype Password" required>
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