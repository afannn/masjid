<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM jadwal_kegiatan");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jadwal Kegiatan</h1>
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
                  <th>No. </th>
                  <th>Narasumber</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Tempat</th>
                  <th>Penanggung Jawab</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($sql as $key => $value) {
                  ?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $value['narasumber']; ?>
                    </td>
                    <td>
                      <?php echo $value['tanggal']; ?>
                    </td>
                    <td>
                      <?php echo $value['waktu']; ?>
                    </td>
                    <td>
                      <?php echo $value['tempat']; ?>
                    </td>
                    <td>
                      <?php echo $value['penanggung_jawab']; ?>
                    </td>
                    <td>
                      <?php echo $value['keterangan']; ?>
                    </td>
                    <td>
                      <a href="ubah.php?id=<?php echo $value['id_jadwal_kegiatan']; ?>" class="btn btn-sm btn-warning">Ubah</a>
                      <a href="hapus.php?id=<?php echo $value['id_jadwal_kegiatan']; ?>" class="btn btn-sm btn-danger">Hapus</a> |                      
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