<?php 
// koneksi database
include 'koneksi1.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$semester = $_POST['semester'];
$jumlah_sks = $_POST['jumlah_sks'];
 
// update data ke database
mysqli_query($koneksi, "update matkul set kode_mk='$kode_mk', nama_mk='$nama_mk', semester='$semester', jumlah_sks='$jumlah_sks' where id='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:matkul.php");
 
?>