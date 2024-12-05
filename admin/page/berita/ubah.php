<?php include '../partials/head.php'; ?>
<?php 
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM berita 
JOIN kategori_berita ON berita.id_kategori_berita = kategori_berita.id_kategori_berita
WHERE id_berita = '$id'");
$row = mysqli_fetch_array($sql);
$kategori = mysqli_query($conn, "SELECT * FROM kategori_berita ORDER BY kategori_berita ASC");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ubah Data Berita</h1>
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
                                        <label>Kategori Berita</label>
                                        <input type="text" class="form-control" name="judul" value="<?php echo $row['judul']; ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_berita">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Isi</label>
                                        <textarea name="isi" cols="30" rows="50" class="form-control"><?php echo $row['isi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori Berita</label>
                                        <select name="kategori" class="form-control">
                                        <option selected value="<?php echo $row['id_kategori_berita']; ?>"><?php echo $row['kategori_berita']; ?></option>    
                                        
                                        <?php foreach ($kategori as $Key => $value) { ?>
                                            <option value="<?php echo $value['id_kategori_berita']; ?>"><?php echo $value['kategori_berita']; ?></option>    
                                        <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-success">*gambar sebelumnya</label> <br>
                                        <img width="100" src="../../../files/article/<?php echo $row['img']; ?>" />
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