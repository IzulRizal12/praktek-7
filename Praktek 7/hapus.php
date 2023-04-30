<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana dengan PHP dan MySQL</title>
</head>
<body>
	<h2>Hapus Data Pegawai</h2>
<?php
//koneksi ke database
include 'koneksi.php';

//mendapatkan id dari URL
$data = mysqli_query($koneksi, "SELECT * FROM pegawai");
$id = $_GET['id'];

//query hapus data
$query = mysqli_query($koneksi, "DELETE FROM pegawai WHERE id='$id'");

//cek apakah query berhasil dijalankan atau tidak
if($query) {
	echo "Data berhasil dihapus.";
} else {
	echo "Data gagal dihapus.";
}

?>

<br>
<a href="index.php">Kembali ke Data Pegawai</a>
</body>
</html>



Was this response better or worse?
Better
Worse
Same



