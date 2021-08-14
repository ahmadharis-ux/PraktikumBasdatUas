<?php
    require_once 'config.php';
    include_once 'header.php';
?>

<div class="section">
    <div class="col-md">
    <div class="card mt-4" >
    <div class="card-body">
            <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Gaji</th>
                </tr>
            </thead>
               <?php
               include 'config.php'; 
                $no = 1;
                $data = mysqli_query($conn,"SELECT * FROM pegawai INNER JOIN jabatan ON pegawai.jabatan_id = jabatan.id_jabatan INNER JOIN gaji ON pegawai.gaji_id = gaji.id_gaji");
                while ($d = mysqli_fetch_array($data)){
               ?>
            <tbody>
               <tr>
                   <td><?= $no++; ?></td>
                   <td><?= $d['nama']?></td>
                   <td><?= $d['jabatan']?></td>
                   <td><?= $d['jumlah']?></td>
               </tr>
            </tbody>
            <?php } ?>
        </table>   
        <a href="pegawai.php" class="btn btn-primary text-center">Detail</a>
    </div>
    </div>
    </div>
</div>

<?php 
    include_once 'footer.php'
?>