<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM pengurus 
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE id_pengurus = '$id'");
$row = mysqli_fetch_array($sql);    
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
                        <h1 class="m-0">Ubah Data Struktur Organisasi</h1>
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
                                        <input type="text" class="form-control" name="nama"
                                            value="<?php echo $row['nama_pengurus']; ?>">
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?php echo $row['id_pengurus']; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_pengurus">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <select class="form-control select2" name="jabatan" style="width: 100%;">
                                            <option value="<?php echo $row['id_jabatan_detail']; ?>"><?php echo $row['nama_jabatan']; ?></option>
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