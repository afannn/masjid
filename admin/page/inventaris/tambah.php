<?php include '../partials/head.php'; ?>
<?php
$jenisBarang = mysqli_query($conn, "SELECT * FROM jenis_barang");
$kondisiBarang = mysqli_query($conn, "SELECT * FROM kondisi_barang");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Inventaris</h1>
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
                                        <label>Nama Barang</label>
                                        <input type="hidden" class="form-control" name="aksi" value="tambah_inventaris">
                                        <input type="text" class="form-control" name="nama_barang">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Barang</label>
                                        <select class="form-control select2" style="width: 100%;" name="jenis_barang">
                                        <?php foreach ($jenisBarang as $key => $value) { ?>
                                            <option value="<?php echo $value['id_jenis_barang']; ?>"><?php echo $value['jenis_barang']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kondisi Barang</label>
                                        <select class="form-control select2" style="width: 100%;" name="kondisi_barang">
                                            <?php foreach ($kondisiBarang as $key => $value) { ?>
                                                <option value="<?php echo $value['id_kondisi_barang']; ?>"><?php echo $value['kondisi_barang']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" class="form-control" name="file">
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