<?php 
    include 'config.php';

    $id = $_POST['id_jabatan'];
    $jabatan = $_POST['jabatan'];

    mysqli_query($conn, "INSERT INTO jabatan VALUES('$id','$jabatan')");

    header("location:jabatan.php");
?>