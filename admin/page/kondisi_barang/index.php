<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM kondisi_barang");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kondisi Barang</h1>
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
                  <th>No.</th>
                  <th>Kondisi Barang</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($sql as $key => $value) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['kondisi_barang']; ?></td>
                    <td>
                    <a href="ubah.php?id=<?php echo $value['id_kondisi_barang']; ?>" class="text-light btn btn-warning">Ubah</a> |    
                    <a href="hapus.php?id=<?php echo $value['id_kondisi_barang']; ?>" class="btn btn-danger">Hapus</a>    
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