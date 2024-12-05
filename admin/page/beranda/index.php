<?php include '../partials/head.php'; ?>
<?php 
$sql = mysqli_query($conn, "SELECT table_name FROM information_schema.tables
WHERE table_schema = 'masjid' AND table_name != 'admin';
");
?>
  <div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Beranda</h1>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <?php foreach($sql as $key => $value) { ?>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <?php $get = mysqli_query($conn, 'SELECT COUNT(*) as total FROM '. $value['table_name'] .''); 
                  $row = mysqli_fetch_array($get);
?>
                  <h3><?php echo $row['total'] ?></h3>
                  <p style="text-transform: uppercase;">
                    <?php 
                      $table = str_replace('_',' ',$value['table_name']); 
                      echo str_replace('detail','',$table);
                    ?>
                  </p>
                </div>
                
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php include '../partials/foot.php'; ?>