<?php include '../partials/head.php'; ?>
<?php
$jabatan = mysqli_query($conn, "SELECT * FROM jabatan_detail");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Struktur Organisasi</h1>
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
                                        <label>Nama Pengurus</label>
                                        <input type="text" class="form-control" name="nama">
                                        <input type="hidden" class="form-control" name="aksi" value="tambah_pengurus">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <select class="form-control select2" name="jabatan" style="width: 100%;">
                                            <?php foreach ($jabatan as $key => $value) { ?>
                                                <option value="<?php echo $value['id_jabatan_detail']; ?>"><?php echo $value['nama_jabatan']; ?></option>
                                            <?php } ?>
                                        </select>
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