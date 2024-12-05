<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM jadwal_sholat ORDER BY tanggal ASC");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jadwal Shalat</h1>
          </div>
          <div class="col-sm-6 text-right">
            <a href="tambah.php" class="btn btn-primary">+ Import Data</a>
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
                  <th>Tgl</th>
                  <th>Imsakiyah</th>
                  <th>Subuh</th>
                  <th>Terbit</th>
                  <th>Dzuhur</th>
                  <th>Ashar</th>
                  <th>Maghrib</th>
                  <th>Isya</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($sql as $key => $value) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['tanggal']; ?></td>
                    <td><?php echo $value['imsakiyah']; ?></td>
                    <td><?php echo $value['subuh']; ?></td>
                    <td><?php echo $value['terbit']; ?></td>
                    <td><?php echo $value['dzuhur']; ?></td>
                    <td><?php echo $value['ashar']; ?></td>
                    <td><?php echo $value['maghrib']; ?></td>
                    <td><?php echo $value['isya']; ?></td>
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