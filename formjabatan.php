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
                $data = mysqli_query($conn, "select * from jabatan where id_jabatan='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <form action="aksijabatan.php" method="POST">
            <div class="card-body">
                <div class="form-floating mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id_jabatan']?>">
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $d['jabatan']?>">
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