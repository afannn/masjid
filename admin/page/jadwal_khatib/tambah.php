<?php include '../partials/head.php'; ?>
<?php
$pengisi = mysqli_query($conn, "SELECT * FROM pengisi_khatib ORDER BY nama_pengisi ASC");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Jadwal Khatib</h1>
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
                                        <input type="hidden" class="form-control" name="aksi" value="tambah_jadwal_khatib">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tgl">
                                    </div>
                                    <div class="form-group">
                                        <label>Khatib</label>
                                        <select class="form-control select2" style="width: 100%;" name="khatib">
                                            <?php foreach ($pengisi as $key => $value) { ?>
                                                <option value="<?php echo $value['id_pengisi_khatib']; ?>"><?php echo $value['nama_pengisi']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Muadzin</label>
                                        <select class="form-control select2" style="width: 100%;" name="muadzin">
                                            <?php foreach ($pengisi as $key => $value) { ?>
                                                <option value="<?php echo $value['id_pengisi_khatib']; ?>"><?php echo $value['nama_pengisi']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Imam</label>
                                        <select class="form-control select2" style="width: 100%;" name="imam">
                                            <?php foreach ($pengisi as $key => $value) { ?>
                                                <option value="<?php echo $value['id_pengisi_khatib']; ?>"><?php echo $value['nama_pengisi']; ?></option>
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