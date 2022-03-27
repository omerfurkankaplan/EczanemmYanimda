<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>İlaç Talebi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util_form.css">
	<link rel="stylesheet" type="text/css" href="css/main_form.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
	<center>
		<div class="container-contact100">
			<div class="wrap-login100">
				<form class="contact100-form validate-form" action="ilac_gereksinim_backend.php" method="POST">
					<span class="contact100-form-title">
						ilaç talebi
					</span>


					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Name is required">
						<span class="label-input100">İlaç Adı</span>
						<input class="input100" type="text" name="medicine_name" placeholder="ilaç adı giriniz" required="true">
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							onayla
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					</div>
			</form>
			<div class="container-contact100-form-btn">
	<button style="width: 20%; font-size: 15px ;" class="contact100-form-btn" onclick = "location.href='üye_home.php'" type="button" name="Back">ana sayfaya geri dön</button>
	</div>
		</div>
	</div>
	</center>
	
</body>
</html>