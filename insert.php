<?php
include 'koneksi.php';

$sql = "INSERT INTO buku_tamu (ID_DB, NAMA, EMAIL, ISI) VALUES ('0001', 'Hellen', 'Hellen@gmail.com', 'Sebagai tamu undangan'), ('0002', 'Alifia', 'Alifia@gmail.com', 'Sebagai tamu undangan'), ('0003', 'Tina', 'Tina@gmail.com', 'Sebagai panitia'), ('0004', 'Kamila', 'Kamila@gmail.com', 'Sebagai tamu undangan'), ('0005', 'Galih', 'Galih@gmail.com', 'Sebagai panitia')";
if (mysqli_query($conn, $sql)){
	echo "New record created successfuly";
} else {
	echo "Eror: " . sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>