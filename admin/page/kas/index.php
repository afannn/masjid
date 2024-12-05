<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM kas 
ORDER BY tanggal DESC");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kas</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <form action="../../../api/admin.php" method="POST">
              <div class="form-group">
                <h4>Cetak Data</h4>
                <label for="">Pilih Bulan</label>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="hidden" name="aksi" value="export_kas">
                    <select name="bulan" class="form-control">
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Maret</option>
                      <option value="4">April</option>
                      <option value="5">Mei</option>
                      <option value="6">Juni</option>
                      <option value="7">Juli</option>
                      <option value="8">Agustus</option>
                      <option value="9">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-success">Export PDF</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-4 text-right">
            <a href="tambah.php" class="btn btn-primary" style="bottom:0;">Tambah Data</a>
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
                  <th>Uraian</th>
                  <th>Debet</th>
                  <th>Kredit</th>
                  <th>Saldo</th>
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
                      <?php echo $value['uraian']; ?>
                    </td>
                    <td>
                      <?php echo $value['debet']; ?>
                    </td>
                    <td>
                      <?php echo $value['kredit']; ?>
                    </td>
                    <td>
                      <?php echo $value['saldo']; ?>
                    </td>
                    <td>
                      <a href="ubah.php?id=<?php echo $value['id_kas']; ?>"
                        class="text-light btn btn-warning">Ubah</a> |
                      <a href="hapus.php?id=<?php echo $value['id_kas']; ?>" class="btn btn-danger">Hapus</a>
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