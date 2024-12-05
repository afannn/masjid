<?php include '../partials/head.php'; ?>
<?php 
$sql = mysqli_query($conn, "SELECT * FROM profil");
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
                        <h1 class="m-0">Ubah Data Profil Masjid</h1>
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
                                        <label>Nama Masjid</label>
                                        <input type="text" class="form-control" name="nama_masjid" value="<?php echo $row['nama_masjid']; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_profil">
                                    </div>
                                    <div class="form-group">
                                        <label>Tentang</label>
                                        <textarea name="tentang" cols="30" rows="10" class="form-control"><?php echo $row['tentang']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="text" name="telepon" class="form-control" value="<?php echo $row['telepon']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Rekening</label>
                                        <input type="text" name="no_rekening" class="form-control" value="<?php echo $row['no_rekening']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pemilik Rekening</label>
                                        <input type="text" name="nama_rekening" class="form-control" value="<?php echo $row['nama_rekening']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Bank Rekening</label>
                                        <input type="text" name="bank_rekening" class="form-control" value="<?php echo $row['bank_rekening']; ?>">
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