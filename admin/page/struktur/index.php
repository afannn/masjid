<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Struktur</h1>
          </div>
          <div class="col-sm-6 text-right">
            <a href="tambah.php" class="btn btn-primary">+ Tambah Data</a>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12">
            <table id="myTable" class="display">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($sql as $key => $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['nama_pengurus']; ?></td>
                    <td><?php echo $value['nama_jabatan']; ?></td>
                    <td>
                      <a href="ubah.php?id=<?php echo $value['id_pengurus']; ?>" class="btn btn-sm btn-warning">Ubah</a> |
                      <a href="hapus.php?id=<?php echo $value['id_pengurus']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                      
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php include '../partials/foot.php'; ?>