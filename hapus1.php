<?php 
// koneksi database
include 'koneksi1.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from matkul where id='$id'");

// mengalihkan halaman kembali ke matkul.php
header("location:matkul.php");
 
?>