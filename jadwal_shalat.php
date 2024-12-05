<?php include 'partials/head.php'; ?>
<?php
$all = mysqli_query($conn, "SELECT *FROM jadwal_sholat ORDER BY tanggal ASC");
$today = mysqli_query($conn, "SELECT *FROM jadwal_sholat WHERE tanggal = DATE(now())");
$tomorrow = mysqli_query($conn, "SELECT *FROM jadwal_sholat WHERE tanggal = DATE(now()) + INTERVAL 1 DAY");

$rToday = mysqli_fetch_array($today);
$rTomorrow = mysqli_fetch_array($tomorrow);
?>

<body>
  <?php include 'partials/nav.php'; ?>
  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Jadwal Shalat</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="content three_quarter first">
          <h1>Jadwal Sholat Lengkap Masjid Al-Muttaqien</h1>

          <div class="row mt-4 mb-4">
            <div class="col-sm-6">
              <h4>Hari ini</h4>
              <table id="myTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      <span class="text-dark">
                        Sholat
                      </span>
                    </th>
                    <th>
                      <span class="text-dark">
                        Pukul
                      </span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Subuh
                    </td>
                    <td>
                      <?php echo $rToday['subuh']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      terbit
                    </td>
                    <td>
                      <?php echo $rToday['terbit']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      dzuhur
                    </td>
                    <td>
                      <?php echo $rToday['dzuhur']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      ashar
                    </td>
                    <td>
                      <?php echo $rToday['ashar']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      maghrib
                    </td>
                    <td>
                      <?php echo $rToday['maghrib']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      isya
                    </td>
                    <td>
                      <?php echo $rToday['isya']; ?> AM
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-6">
              <h4>Besok</h4>
              <table id="myTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      <span class="text-dark">
                        Sholat
                      </span>
                    </th>
                    <th>
                      <span class="text-dark">
                        Mulai
                      </span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Subuh
                    </td>
                    <td>
                      <?php echo $rTomorrow['subuh']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      terbit
                    </td>
                    <td>
                      <?php echo $rTomorrow['terbit']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      dzuhur
                    </td>
                    <td>
                      <?php echo $rTomorrow['dzuhur']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      ashar
                    </td>
                    <td>
                      <?php echo $rTomorrow['ashar']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      maghrib
                    </td>
                    <td>
                      <?php echo $rTomorrow['maghrib']; ?> AM
                    </td>
                  </tr>
                  <tr>
                    <td>
                      isya
                    </td>
                    <td>
                      <?php echo $rTomorrow['isya']; ?> AM
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table id="table" class="table table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tgl Hijriyah</th>
                    <th>Tgl Masehi</th>
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
                  $no=1;
                  foreach ($all as $key => $value) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td>
                        <?php echo toHijriah($value['tanggal']); ?>
                      </td>
                      <td><?php echo tgl_indo($value['tanggal']); ?></td>
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
      </div>
    </section>

  </main>
  <?php include 'partials/footer.php'; ?>

  <?php include 'partials/foot.php'; ?>