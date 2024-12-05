<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM visi_misi");

?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Visi & Misi</h1>
          </div>
          <div class="col-sm-6 text-right">
            <a href="ubah.php" class="btn btn-primary">Ubah</a>
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
                  <th>Visi</th>
                  <th>Misi</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                  <tr>
                    <td>
                      <?php echo $row['visi']; ?>
                    </td>
                    <td>
                      <?php echo $row['misi']; ?>
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