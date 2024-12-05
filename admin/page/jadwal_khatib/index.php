<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT id_jadwal_khatib, tgl, k.nama_pengisi as khatib, m.nama_pengisi as muadzin, i.nama_pengisi as imam FROM jadwal_khatib
JOIN pengisi_khatib as k ON jadwal_khatib.khatib = k.id_pengisi_khatib
JOIN pengisi_khatib as m ON jadwal_khatib.muadzin = m.id_pengisi_khatib
JOIN pengisi_khatib as i ON jadwal_khatib.imam = i.id_pengisi_khatib");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jadwal Khatib</h1>
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
                  <th>Tanggal</th>
                  <th>Khatib</th>
                  <th>Muadzin</th>
                  <th>Imam</th>
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
                      <?php echo $value['tgl']; ?>
                    </td>
                    <td>
                      <?php echo $value['khatib']; ?>
                    </td>
                    <td>
                      <?php echo $value['muadzin']; ?>
                    </td>
                    <td>
                      <?php echo $value['imam']; ?>
                    </td>
                    <td>
                        <a href="ubah.php?id=<?php echo $value['id_jadwal_khatib']; ?>" class="btn btn-sm btn-warning">Ubah</a> |
                        <a href="hapus.php?id=<?php echo $value['id_jadwal_khatib']; ?>" class="btn btn-sm btn-danger">Hapus</a> 
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