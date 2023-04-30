<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Pegawai</title>
</head>
<body>
	<h2>Ubah Data Pegawai</h2>

	<?php
	//koneksi ke database
	include 'koneksi.php';

	//menangkap id yang dikirim dari halaman index.php
	$id = $_GET['id'];

	//query untuk mengambil data pegawai berdasarkan id
	$data = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id='$id'");
	$row = mysqli_fetch_assoc($data);
	?>

	<form method="POST" action="simpan.php">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		<label>Nama:</label>
		<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
		<label>Alamat:</label>
		<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>
		<label>Telepon:</label>
		<input type="text" name="telepon" value="<?php echo $row['telepon']; ?>"><br>
		<label>Email:</label>
		<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
		<button type="submit">Simpan</button>
	</form>
</body>
</html>