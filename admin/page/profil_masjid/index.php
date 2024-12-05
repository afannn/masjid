<?php include '../partials/head.php'; ?>
<?php 
$sql = mysqli_query($conn, "SELECT * FROM profil");
$row = mysqli_fetch_array($sql);
?>
  <div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Profil Masjid</h1>
            </div>
            <div class="col-sm-6 text-right">
            <a href="ubah.php" class="btn btn-primary">Ubah Data</a>
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
                  <th>Nama Masjid</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>No. Rekening</th>
                  <th>Nama Rekening</th>
                  <th>Nama Bank</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $row['nama_masjid']; ?></td>
                  <td><p style="text-overflow: ellipsis; overflow: hidden; width: 160px;  height: 1.2em; white-space: nowrap;">
                      <?php echo $row['alamat'] ?>
                    </p></td>
                  <td><?php echo $row['telepon']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['no_rekening']; ?></td>
                  <td><?php echo $row['nama_rekening']; ?></td>
                  <td><?php echo $row['bank_rekening']; ?></td>
                  <td><a href="ubah.php" class="btn btn-primary">Lihat</a></td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php include '../partials/foot.php'; ?>