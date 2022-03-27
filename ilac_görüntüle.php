<?php
	require_once 'dbconnect.php';
	$query = "SELECT medicine.medicine_id as id, medicine.name as name,	medicine.cost as cost, sum(inventory.quantity) as quantity
				FROM medicine, inventory
				WHERE medicine.medicine_id = inventory.medicine_id and expiry_date > curdate()
				GROUP BY medicine.medicine_id, medicine.name, medicine.cost";
	$query_result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<head> 
	<title> İlaçları GÖrüntüle</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util_table.css">
	<link rel="stylesheet" type="text/css" href="css/main_table.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
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
		<h1 style="font-size: 40px"><b> İlaç </b></h1><br><br>
						<table border="2" style="background-color: white ;text-align: center; font-size: 20px">
								<thead>
									<tr>
										<th style="text-align: center; font-size:20px"> ID </th>
										<th style="text-align: center; font-size:20px" > isim </th>
										<th style="text-align: center; font-size:20px"> ücret </th>
										<th style="text-align: center; font-size:20px" > mevcut miktar</th>
										<th style="text-align: center; font-size:20px"> sepete ekle </th>
										<th style="text-align: center;font-size:20px" > miktar seçin </th>
									</tr>
								</thead>
						<!-- </table> -->
					</div>
					<!-- <div class="table100-body js-pscroll"> -->
						<!-- <table border="2" style="background-color: white ; font-size: 20px"> -->
							<tbody>
								<form action="confirm_booking.php" method="POST" id='view_medicine'>
							<?php
								while ($row = mysqli_fetch_array($query_result)){
									// echo "<tr class='row100 body'>";
									echo "<td>".$row['id']."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['cost']."</td>";
									echo "<td>".$row['quantity']."</td>";
									$row_quant = $row['quantity'];
									echo "<td class='cell100 column2'><input type='checkbox' name='addtocart[]' value='$row[id]' style='margin-left: 50% '></td>";
									echo "<td style='text-align: center;' class='cell100 column2'><input style='border: 2px solid #cdcdcd; border-color: rgba(0, 0, 0, .14); background-color:#aeefb2; font-size: 14px; font-weight: bold; text-align:center; width:100%' type='number' min='1' name='orderquantity".$row['id']."' max='$row_quant'></td>";
									echo "</tr>";
								}
							?>
								</form>
							</tbody>
						</table>
						<p>
							<br>
			<div  >	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6229.383093868213!2d39.216416176488394!3d38.678956368419776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c063aa8e0d5f%3A0xea66857188a5d110!2zxLB6emV0IFBhxZ9hLCAyMzIwMCBFbMOiesSxxJ8gTWVya2V6L0VsYXrEscSf!5e0!3m2!1str!2str!4v1648339039881!5m2!1str!2str" width="600" height="450" style="border:0; float:left;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>				<div class="container-contact100-form-btn">

					<div class="wpb_wrapper"><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
<div class="vc_btn3-container vc_btn3-center">
	<button class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-block vc_btn3-icon-left vc_btn3-color-juicy-pink"><i class="vc_btn3-icon fa fa-user-md"></i> YAKIN ECZANELER</button></div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><strong>SİBEL ECZANESİ<br>
</strong>Doğukent Mh. Ahmet Yesevi Cd.<br>
Şehir Hastanesi Karşısı<br>
<strong>Tel:</strong> 0424 218 19 20</p>

		</div>
	</div>
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_juicy_pink vc_custom_1570045758192  vc_custom_1570045758192"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
</div>
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><strong>İLKERCÖMERT ECZANESİ<br>
</strong>Gazi Cd. Büyük Çarşı Altı<br>
<strong>Tel:</strong> 0424 212 48 93</p>

		</div>
	</div>
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_juicy_pink vc_custom_1570045758192  vc_custom_1570045758192"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
</div>
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><strong>TUBA ECZANESİ<br>
</strong>Ünv. Mah. Yahya Kemal Cd.<br>
Fırat Üniversitesi Hast. Karşısı<br>
<strong>Tel:</strong> 0424 236 28 28</p>

		</div>
	</div>
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_juicy_pink vc_custom_1570045758192  vc_custom_1570045758192"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
</div>
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p><strong>REYYAN ECZANESİ<br>
</strong>Sürsürü Mh. Malatya Cd. No:1/2<br>
Çaydaçıra Kavşağı<br>
Universal Göz Merkezi Yanı<br>
<strong>Tel:</strong> 0424 237 63 64</p>

		</div>
	</div>
			</div>
					<!-- <button style="padding: 5px 16px; border: 2px solid black; border-radius: 10px; color: black; font-size: 15px; font-style: bold" type='submit' form='view_medicine' name='Place Order' value = 'Place Order' align='bottom'> Place Order </button> -->
					<br>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" form="view_medicine">
						<span>
						Sipariş Ver							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<!-- </div> -->
				<br>
				<div>
					<!-- <button style="padding: 5px 16px; border: 2px solid black; border-radius: 10px; color: black; font-size: 15px; font-style: bold" class = "login100-form-btn" onclick="location.href='ilac_gereksinim.php'" type="button" name="Request New Medicine">Request New Medicine </button> -->
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="location.href='ilac_gereksinim.php'">
						<span>
							yeni ilaç talebi
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<div class="container-contact100-form-btn">
				<button style=" font-size: 15px ;
				     margin-top: 1%;  margin-right: 1%;
				     position:relative;" class="contact100-form-btn" onclick = "location.href='üye_home.php'" type="button" name="Back">Anasayfaya Dön <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></button>
				</div>
				</div>
			</div>
		</div>
	</center>
</body>
</html>