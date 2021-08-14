<?php 
    include 'config.php';

    $jg = $_POST['jumlah'];

    mysqli_query($conn, "INSERT INTO gaji VALUES('','$jg')");

    header("location:gaji.php");
?>