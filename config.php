<?php 
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'db_ahmadharis';

    //konek ke mysql
    $conn = mysqli_connect($host, $username, $pass) or die ("Koneksi tidak tersambung");
    // konek ke database
    $query = mysqli_select_db($conn, $db)or die("Not Found");


    $config = ['baseurl' => 'http://localhost/uasbasdat'];
?>