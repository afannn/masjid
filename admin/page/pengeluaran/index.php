<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM pengeluaran 
JOIN jenis_keuangan ON pengeluaran.id_jenis_keuangan = jenis_keuangan.id_jenis_keuangan
ORDER BY tanggal ASC");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengeluaran</h1>
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
                  <th>Tanggal</th>
                  <th>Jenis Pengeluaran</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
                  <th>Bukti</th>
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
                      <?php echo $value['tanggal']; ?>
                    </td>
                    <td>
                      <?php echo $value['jenis_keuangan']; ?>
                    </td>
                    <td>
                      <?php echo $value['jumlah']; ?>
                    </td>
                    <td>
                      <?php echo $value['keterangan']; ?>
                    </td>
                    <td>
                      <img src="../../../files/pengeluaran/<?php echo $value['img']; ?>" style="width: 120px;"/>
                    </td>
                    <td>
                      <a href="ubah.php?id=<?php echo $value['id_pengeluaran']; ?>"
                        class="btn btn-sm btn-warning">Ubah</a> |
                      <a href="hapus.php?id=<?php echo $value['id_pengeluaran']; ?>"
                        class="btn btn-sm btn-danger">Hapus</a> |

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