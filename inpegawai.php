<?php 
    include 'config.php';

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $jabatan_id = $_POST['jabatan'];
    $gaji_id = $_POST['gaji'];

    mysqli_query($conn, "INSERT INTO pegawai VALUES ('','$nip','$nama','$jk','$tlp','$alamat','$jabatan_id','$gaji_id')");

    header("location:pegawai.php");
?>