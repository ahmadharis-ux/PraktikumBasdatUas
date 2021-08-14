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
                       <h3>Data Pegawai</h3>
                   </div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">NO TELEPON</th>
                        <th scope="col">ALAMAT LENGKAP</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">JUMLAH GAJI</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <?php 
                        include 'config.php';
                        $no = 1;
                        $gaji = mysqli_query($conn, "SELECT * FROM gaji");
                        $jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                        $data = mysqli_query($conn, "SELECT * FROM pegawai INNER JOIN jabatan ON pegawai.jabatan_id = jabatan.id_jabatan INNER JOIN gaji ON pegawai.gaji_id = gaji.id_gaji");
                        while ($d = mysqli_fetch_assoc($data)){
                    ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $d['nip']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['jk']; ?></td>
                        <td><?= $d['tlp']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['jabatan']; ?></td>
                        <td><?= $d['jumlah']; ?></td>
                        <td>
                            <a href="delpegawai.php?id=<?= $d['id_pegawai']?>" type="button" class="btn btn-danger">Hapus</a>
                            <a href="edit/formpegawai.php?id=<?= $d['id_pegawai']?>" type="button" class="btn btn-light">Edit</a>
                        </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
                    <button type="button" class="btn btn-primary text-center tombolTambahData" data-toggle="modal" data-target="#formModal">
                            Tambah Data
                    </button>
                    <a href="index.php">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Pegawai Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inpegawai.php" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="tlp" name="tlp" placeholder="No Telepon">
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
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

