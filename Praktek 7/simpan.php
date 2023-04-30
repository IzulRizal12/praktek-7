<?php
//koneksi ke database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

//query untuk menambahkan data ke tabel pegawai
mysqli_query($koneksi, "INSERT INTO pegawai VALUES(NULL, '$nama', '$alamat', '$telepon', '$email')");

//redirect ke halaman utama
header("location:index.php");
?>