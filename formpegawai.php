<?php 
    require_once '../config.php';
    include_once '../header.php';
?>

<div class="section">
    <div class="col-md-6">
        <div class="card mt-5">
            <div class="card-header">
                Form Edit
            </div>
            <?php 
                include '../config.php';

                $id = $_GET['id'];
                $gaji = mysqli_query($conn, "SELECT * FROM gaji");
                $jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                $data = mysqli_query($conn, "select * from pegawai where id_pegawai='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <form action="aksipegawai.php" method="POST">
            <div class="card-body">
                <div class="form-floating mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id_pegawai']?>">
                <input type="text" class="form-control" id="nip" name="nip" value="<?= $d['nip']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="jk" name="jk" value="<?= $d['jk']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $d['tlp']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $d['alamat']?>">
                </div>

                <div class="form-group">
                <select name="jabatan" id="" class="form-control">
                    <?php foreach($jabatan as $j){ ?>
                    <option value="<?= $j['id_jabatan']?>"><?= $j['jabatan']?></option>
                    <?php } ?>
                </select>
                </div>

                <div class="form-group">
                <select name="gaji" id="" class="form-control">
                    <?php foreach($gaji as $g){ ?>
                    <option value="<?= $g['id_gaji']?>"><?= $g['jumlah']?></option>
                    <?php } ?>
                </select>
                </div>

                <input type="submit" class="btn btn-primary" name="" id="" value="Edit">
            </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php
    include_once '../footer.php';
?>