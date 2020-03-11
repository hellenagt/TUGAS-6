<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'koneksi.php';

$sql = "SELECT ID_DB, NAMA, EMAIL, ISI FROM buku_tamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "ID DB : " . $row["ID_DB"]. " - NAMA :" . $row["NAMA"]. " - EMAIL : " . $row["EMAIL"]. " - ISI:" . $row["ISI"]. "<br>";
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
?>
</body>
</html>