<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM pengisi_khatib");
?>
<div class="wrapper">
  <?php include '../partials/top.php'; ?>
  <?php include '../partials/side.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengisi Khatib, Muadzin dan Imam</h1>
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
                  <th>Nama Pengisi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($sql as $key => $value) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['nama_pengisi']; ?></td>
                    <td>
                    <a href="ubah.php?id=<?php echo $value['id_pengisi_khatib']; ?>" class="text-light btn btn-warning">Ubah</a> |    
                    <a href="hapus.php?id=<?php echo $value['id_pengisi_khatib']; ?>" class="btn btn-danger">Hapus</a>    
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

<?php foreach ($sql as $key => $value) { ?>
<div class="modal fade" id="<?php echo $value['id_kategori_berita']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>