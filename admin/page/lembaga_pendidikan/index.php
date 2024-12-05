<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM lembaga_pendidikan
JOIN jenjang_pendidikan ON lembaga_pendidikan.id_jenjang_pendidikan = jenjang_pendidikan.id_jenjang_pendidikan");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lembaga Pendidikan</h1>
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
                  <th>Nama Lembaga</th>
                  <th>Jenjang Pendidikan</th>
                  <th>Alamat</th>
                  <th>Img</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($sql as $key => $value) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['nama_lembaga']; ?></td>
                    <td><?php echo $value['jenjang_pendidikan']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td>
                      <img style="width: 100px; height: 100px;" src="../../../files/lembaga/<?php echo $value['img']; ?>"/>
                    </td>
                    <td>
                    <a href="ubah.php?id=<?php echo $value['id_lembaga_pendidikan']; ?>" class="text-light btn btn-warning">Ubah</a> |    
                    <a href="hapus.php?id=<?php echo $value['id_lembaga_pendidikan']; ?>" class="btn btn-danger">Hapus</a>    
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