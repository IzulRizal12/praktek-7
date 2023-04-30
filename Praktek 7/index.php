<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sederhana dengan PHP dan MySQL</title>
</head>
<body>
	<h2>Data Pegawai</h2>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//koneksi ke database
			include 'koneksi.php';

			//query untuk mengambil data dari tabel pegawai
			$data = mysqli_query($koneksi, "SELECT * FROM pegawai");

			//menampilkan data ke dalam tabel
			$no = 1;
			while($row = mysqli_fetch_assoc($data)) {
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['telepon']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td>
				<a href="ubah.php?id=<?php echo $row['id']; ?>">Ubah</a> 
    <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br>
	<a href="tambah.php">Tambah Data</a>
</body>
</html>



