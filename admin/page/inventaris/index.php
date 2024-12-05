<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM inventaris
JOIN jenis_barang ON inventaris.id_jenis_barang = jenis_barang.id_jenis_barang
JOIN kondisi_barang ON inventaris.id_kondisi_barang = kondisi_barang.id_kondisi_barang
ORDER BY nama_barang ASC");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inventaris</h1>
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
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Kondisi Barang</th>
                  <th>Jumlah</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($sql as $key => $value) { ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $value['nama_barang']; ?>
                    </td>
                    <td>
                      <?php echo $value['jenis_barang']; ?>
                    </td>
                    <td>
                      <?php echo $value['kondisi_barang']; ?>
                    </td>
                    <td>
                      <?php echo $value['jumlah']; ?>
                    </td>
                    <td>
                      <img style="width=:100px; height: 90px;" src="../../../files/inventaris/<?php echo $value['img']; ?>" alt="">
                    </td>
                    <td>
                      <a href="ubah.php?id=<?php echo $value['id_inventaris']; ?>" class="btn btn-warning">Ubah</a> |
                      <a href="hapus.php?id=<?php echo $value['id_inventaris']; ?>" class="btn btn-danger">Hapus</a>
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