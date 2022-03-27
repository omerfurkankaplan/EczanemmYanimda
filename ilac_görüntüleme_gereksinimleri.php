<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!--Include the above in your HEAD tag -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body style="margin:5%;padding:0; background-image:url('medicine.jpg'); background-repeat:no-repeat;background-size: cover"  >
<!-- background-color:#edb6aa;"  -->
<!-- /*#99e5e8; #efd7ed"*/ -->
<center>
<h1 style="font-size: 35px"><b> REÇETEMİ ECZANEYE YOLLA </b></h1><br><br>
	
	<!-- <h3>Your medicine requests</h3> -->


	<table border="2" style="background-color:white ; font-size: 20px">
	<form action="/" method="get"  >
<table border="0">
	<br>
<tr style="font-size: 25px; width: 15%">
<td> E-Reçete No:</td>
<td><input type="text" name="ad" id="ad" required placeholder="Lütfen E-reçete No"></td>
</tr>
<br> 	
<tr style="font-size: 25px; width: 15%">
	<br>
<td>TC Kimlik No :</td>
<td><input type="number"name="soyad"id="soyad" required placeholder="Lütfen Tc Kimlik No Giriniz"></td>
</tr>
<tr>
		
	</table>
	<br>
</center>

<div   align="center" class="fileUpload">
				<p style="color:#000000;"; ">veya</p>
        <h3>Dosyayı sürükle ve buraya bırak</h3>
       
        <input type="file" id="file" class="upload" accept="image/*" multiple/>
       <span class="jFiler-input-choose-btn">Dosyalara Göz At</span>
</div>
 <div id="UrunResimDIV" class="row column"></div>
<div class="container-login100-form-btn">
<button  style="font-size: 15px; width: 15%" class="login100-form-btn" onclick = "location.href='üye_home.php'" type="button" name="Back">Eczanelere Yolla </button>
<br>
<button  style="font-size: 15px; width: 15%" class="login100-form-btn" onclick = "location.href='üye_home.php'" type="button" name="Back">Anasayfaya Dön</button>
</div>	
</body>
</html>

<!-- style="font-size: 15px ; margin-left: 45%"" -->