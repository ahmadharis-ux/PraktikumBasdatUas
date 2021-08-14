<?php 
    require_once('config.php');
    include_once('header.php');
?>

    <div class="section">
        <div class="col-md">
            <div class="card text-center mt-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $config['baseurl'];?>/pegawai.php">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $config['baseurl'];?>/jabatan.php">Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $config['baseurl'];?>/gaji.php">Gaji</a>
                    </li>
                    </ul>
                </div>
                <div class="card-body">
                <div class="col-md">
                       <h3>Data Gaji</h3>
                   </div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                        <th scope="col">JUMLAH GAJI</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <?php 
                        include 'config.php';
                        $data = mysqli_query($conn, "SELECT * FROM gaji");
                        while($d=mysqli_fetch_array($data)){
                    ?>
                    <tbody>
                        <tr>
                        <td><?= $d['jumlah']; ?></td>
                        <td>
                            <a type="button" class="btn btn-light" href="edit/formgaji.php?id=<?= $d['id_gaji']?>">Edit</a>
                            <a type="button" class="btn btn-danger" href="delgaji.php?id=<?= $d['id_gaji']; ?>">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                        <?php } ?>
                </table>
                <div class="col-md mb-4">
                  <button type="button" class="btn btn-primary text-center tombolTambahData" data-toggle="modal" data-target="#formModal">
                        Tambah Data 
                  </button>
                  <a href="index.php">Dashboard</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Gaji Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ingaji.php" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Gaji">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-dark">Tambah Data</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php 
    include_once('footer.php');
?>

