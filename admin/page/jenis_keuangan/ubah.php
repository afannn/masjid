<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM jenis_keuangan
WHERE id_jenis_keuangan = '$id'");

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
                        <h1 class="m-0">Ubah Data Jenis Keuangan</h1>
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
                                        <label>Jenis Keuangan</label>
                                        <input type="text" class="form-control" name="jenis_keuangan" value="<?php echo $row['jenis_keuangan']; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_jenis_keuangan">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_jenis_keuangan']; ?>">
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