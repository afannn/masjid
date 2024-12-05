<?php include '../partials/head.php'; ?>
<?php 
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM lembaga_pendidikan
JOIN jenjang_pendidikan ON lembaga_pendidikan.id_jenjang_pendidikan = jenjang_pendidikan.id_jenjang_pendidikan
WHERE id_lembaga_pendidikan = '$id'");
$row = mysqli_fetch_array($sql);
$jenjang = mysqli_query($conn, "SELECT * FROM jenjang_pendidikan");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Lembaga Pendidikan</h1>
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
                                        <label>Nama Lembaga</label>
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_lembaga_pendidikan">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <input type="text" class="form-control" name="nama_lembaga" value="<?php echo $row['nama_lembaga']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" cols="30" rows="10"><?php echo $row['alamat']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenjang Pendidikan</label>
                                        <select name="jenjang" class="form-control">
                                            <option value="<?php echo $row['id_jenjang_pendidikan']; ?>"><?php echo $row['jenjang_pendidikan']; ?></option>
                                            <?php foreach ($jenjang as $key => $value) { ?>
                                                <option value="<?php echo $value['id_jenjang_pendidikan']; ?>"><?php echo $value['jenjang_pendidikan']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" class="form-control" name="img">
                                    </div>
                                    <div class="form-group">
                                        <label>*Gambar sebelumnya</label><br>
                                        <img style="width: 300px; height: 300px;" src="../../../files/lembaga/<?php echo $row['img']; ?>">
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