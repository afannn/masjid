<?php include '../partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM visi_misi");
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
                        <h1 class="m-0">Ubah Data Visi & Misi</h1>
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
                                        <label>Visi</label>
                                        <input type="hidden" name="aksi" value="ubah_visi_misi">
                                        <textarea name="visi" class="form-control" cols="30" rows="10"><?php echo $row['visi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Misi</label>
                                        <textarea name="misi" class="form-control" cols="30" rows="10"><?php echo $row['visi']; ?></textarea>
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