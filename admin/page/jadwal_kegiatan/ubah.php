<?php include '../partials/head.php'; ?>
<?php 
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM jadwal_kegiatan WHERE id_jadwal_kegiatan = '$id'");
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
                        <h1 class="m-0">Ubah Data Jadwal Kegiatan</h1>
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
                                        <label>Narasumber</label>
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_jadwal_kegiatan">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <input type="text" class="form-control" name="narasumber" value="<?php echo $row['narasumber']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tgl" value="<?php echo $row['tanggal']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <input type="time" class="form-control" name="waktu" value="<?php echo $row['waktu']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat</label>
                                        <input type="text" class="form-control" name="tempat" value="<?php echo $row['tempat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Penanggung Jawab</label>
                                        <input type="text" class="form-control" name="penanggung_jawab" value="<?php echo $row['penanggung_jawab']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" cols="30" rows="10" class="form-control"><?php echo $row['keterangan']; ?></textarea>
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