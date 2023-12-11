<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saral Tri Asfiyantin</title>
	<link rel="stylesheet" type="text/css" href="css/saral_style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

<!-- header -->
	<div class="medsos">
		<div class="container">
		    <ul>
 				<li><a href="https://www.facebook.com/saraltri.asfiyantin.3?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://instagram.com/astinsaral?igshid=NGVhN2U2NjQ0Yg=="><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://youtube.com/@astinsaral9305?si=rZari7nZfuXp0fe5"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
		<h1><a href="saral_home.html">ASTIN SHOP</a></h1>
		<ul>
			<li class="active"><a href="saral_home.html">HOME</a></li>
			<li><a href="saral_about.html">PRODUCT</a></li>
			<li><a href="saral_contact.html">CONTACT</a></li>
		</ul>
		</div>
	</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<h1>Thank You!</h1>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
$koneksi=mysqli_connect("localhost","root","","olshopastin");
if(isset($_POST['submit'])){
    $nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggallahir=mysqli_real_escape_string($koneksi, $_POST['tanggallahir']);
    $jeniskelamin=mysqli_real_escape_string($koneksi, $_POST['jeniskelamin']);
    $asal=mysqli_real_escape_string($koneksi, $_POST['asal']);
    $email=mysqli_real_escape_string($koneksi, $_POST['email']);
    $submit=mysqli_query($koneksi, "INSERT INTO pengunjung VALUE('$nama','$tanggallahir','$jeniskelamin','$asal','$email')");

if($submit){
    echo "<script>window.alert('data pengunjung berhasil disimpan')window.location='index,php'</script>";
    }else{
    echo "<script>window.alert('data pengunjung gagal disimpan')window.location='index,php'</script>";
    }
}
?>



<footer>
		<div class="container">
			<small> Copyright &copy; 2023 - Saral Tri Asfiyantin, All Rights Reserved.</small>
		</div>
	</footer>
</body>
</html>