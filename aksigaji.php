<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
 
 
// update data ke database
mysqli_query($conn,"update gaji set jumlah='$jumlah' where id_gaji='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../gaji.php");
 
?>