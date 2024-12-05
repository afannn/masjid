<?php include '../partials/head.php'; ?>
<?php
$jenis_pengeluaran = mysqli_query($conn, "SELECT * FROM jenis_keuangan");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Pengeluaran</h1>
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
                                        <label>Tgl Pengeluaran</label>
                                        <input type="date" class="form-control" name="tgl">
                                        <input type="hidden" class="form-control" name="aksi"
                                            value="tambah_pengeluaran">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis pengeluaran</label>
                                        <select class="form-control select2" style="width: 100%;" name="jenis">
                                            <?php foreach ($jenis_pengeluaran as $key => $value) { ?>
                                                <option value="<?php echo $value['id_jenis_keuangan']; ?>"><?php echo $value['jenis_keuangan']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Bukti</label>
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