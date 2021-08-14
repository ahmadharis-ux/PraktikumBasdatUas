<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tlp = $_POST['tlp'];
$alamat = $_POST['alamat'];
$jabatan_id = $_POST['jabatan'];
$gaji = $_POST['gaji'];
 
 
// update data ke database
mysqli_query($conn,"update pegawai set nip='$nip',nama='$nama', jk='$jk', tlp='$tlp', alamat='$alamat', jabatan_id='$jabatan_id', gaji_id='$gaji' where id_pegawai='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../pegawai.php");
 
?>