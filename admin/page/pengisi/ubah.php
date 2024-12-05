<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM pengisi_khatib
WHERE id_pengisi_khatib = '$id'");

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
                        <h1 class="m-0">Ubah Data Pengisi Khatib, Muadzin dan Imam</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="../../../api/admin.php" method="POST">
                                    <div class="form-group">
                                        <label>Nama Pengisi</label>
                                        <input type="text" class="form-control" name="nama_pengisi" value="<?php echo $row['nama_pengisi']; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_pengisi_khatib">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_pengisi_khatib']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <a href="index.php" class="btn btn-dark">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include '../partials/foot.php'; ?>