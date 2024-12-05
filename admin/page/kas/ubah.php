<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM kas 
WHERE id_kas = '$id'");

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
                        <h1 class="m-0">Ubah Data Kas</h1>
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
                                <form action="../../../api/admin.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_kas">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <input type="date" class="form-control" name="tgl" value="<?php echo $row['tanggal']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Uraian</label>
                                        <textarea name="uraian" class="form-control" cols="30" rows="10"><?php echo $row['uraian']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Debet</label>
                                        <input type="text" class="form-control" name="debet" value="<?php echo $row['debet']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Kredit</label>
                                        <input type="text" class="form-control" name="kredit" value="<?php echo $row['kredit']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Saldo</label>
                                        <input type="text" class="form-control" name="saldo" value="<?php echo $row['saldo']; ?>">
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