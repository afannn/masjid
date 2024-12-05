<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM berita
JOIN kategori_berita ON berita.id_kategori_berita = kategori_berita.id_kategori_berita
ORDER BY tanggal_upload DESC");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Berita</h1>
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
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Tgl Berita</th>
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
                    <td><?php echo $value['judul']; ?></td>
                    <td><?php echo $value['kategori_berita']; ?></td>
                    <td><?php echo $value['tanggal_upload']; ?></td>
                    <td><?php echo $value['img']; ?></td>
                    <td>
                      <a target="_blank"  class="btn btn-sm btn-primary" href="../../../view_berita.php?id=<?php echo $value['id_berita']; ?>"> 
                        Lihat 
                      </a>  |
                      <a  class="btn btn-sm btn-warning" href="ubah.php?id=<?php echo $value['id_berita']; ?>"> 
                        Ubah 
                      </a>  |
                      <a  class="btn btn-sm btn-danger" href="hapus.php?id=<?php echo $value['id_berita']; ?>"> 
                        Hapus 
                      </a>  |
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