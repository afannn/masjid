<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM jabatan_detail
WHERE id_jabatan_detail = '$id'");

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
                        <h1 class="m-0">Ubah Data Jabatan</h1>
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
                                        <label>Nama Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" value="<?php echo $row['nama_jabatan']; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_jabatan">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_jabatan_detail']; ?>">
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