<!DOCTYPE html>
<html>
<head>
	<title>koneksi database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
	<?php
	$conn=mysqli_connect("localhost","root","","mydb");
	if (mysqli_connect_errno()){
		echo "Gagal connect ke MySQL : " . mysqli_connect_error();
	} else {
		echo "Berhasil connect ke MySQL<br>"; }
	?>
</body>
</html>