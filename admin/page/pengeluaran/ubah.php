<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM pengeluaran 
JOIN jenis_keuangan ON pengeluaran.id_jenis_keuangan = jenis_keuangan.id_jenis_keuangan
WHERE id_pengeluaran = '$id'");

$jenis_pengeluaran = mysqli_query($conn, "SELECT * FROM jenis_keuangan");
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
                        <h1 class="m-0">Ubah Data Pengeluaran</h1>
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
                                        <input type="date" class="form-control" name="tgl"
                                            value="<?php echo $row['tanggal']; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_pengeluaran">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah"
                                            value="<?php echo $row['jumlah']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis pengeluaran</label>
                                        <select class="form-control select2" style="width: 100%;" name="jenis">
                                            <option value="<?php echo $row['id_jenis_keuangan']; ?>"><?php echo $row['jenis_keuangan']; ?></option>
                                            <?php foreach ($jenis_pengeluaran as $key => $value) { ?>
                                                <option value="<?php echo $value['id_jenis_keuangan']; ?>"><?php echo $value['jenis_keuangan']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" class="form-control" cols="30"
                                            rows="10"><?php echo $row['keterangan']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Bukti</label>
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-success">*gambar sebelumnya</label> <br>
                                        <img width="100" src="../../../files/pengeluaran/<?php echo $row['img']; ?>" />
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