<?php 
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "delete from gaji where id_gaji='$id'");

header("location:gaji.php");
?>