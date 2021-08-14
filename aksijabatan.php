<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$jabatan = $_POST['jabatan'];
 
 
// update data ke database
mysqli_query($conn,"update jabatan set jabatan='$jabatan' where id_jabatan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../jabatan.php");
 
?>