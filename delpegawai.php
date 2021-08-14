<?php 
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "delete from pegawai where id_pegawai='$id'");

header("location:pegawai.php");
?>