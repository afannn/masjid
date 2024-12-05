<?php include '../partials/head.php'; ?>
<?php
$getKategori = mysqli_query($conn, "SELECT * FROM kategori_berita ORDER BY kategori_berita ASC");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Berita</h1>
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
                                        <label>Judul Berita</label>
                                        <input type="text" class="form-control" name="judul">
                                        <input type="hidden" class="form-control" name="aksi" value="tambah_berita">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Berita</label>
                                        <textarea name="isi" cols="30" rows="50" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Berita</label>
                                        <select class="form-control select2" style="width: 100%;" name="kategori">
                                            <?php foreach ($getKategori as $key => $value) { ?>
                                                <option value="<?php echo $value['id_kategori_berita']; ?>"><?php echo $value['kategori_berita']; ?></option>
                                                <?php } ?>
                                            </select>
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