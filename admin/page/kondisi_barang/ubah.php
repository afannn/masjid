<?php include '../partials/head.php'; ?>
<?php 
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM kondisi_barang WHERE id_kondisi_barang = '$id'");
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
                        <h1 class="m-0">Ubah Data Kondisi Barang</h1>
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
                                        <label>Jenis Barang</label>
                                        <input type="text" class="form-control" name="kondisi_barang" value="<?php echo $row['kondisi_barang']; ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_kondisi_barang">
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