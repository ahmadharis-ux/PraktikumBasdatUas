<?php 
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "delete from jabatan where id_jabatan='$id'");

header("location:jabatan.php");
?>