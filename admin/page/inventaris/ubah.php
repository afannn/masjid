<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM inventaris
JOIN jenis_barang ON inventaris.id_jenis_barang = jenis_barang.id_jenis_barang
JOIN kondisi_barang ON inventaris.id_kondisi_barang = kondisi_barang.id_kondisi_barang
WHERE id_inventaris = '$id'");
$row = mysqli_fetch_array($sql);
$jenis = mysqli_query($conn, "SELECT * FROM jenis_barang ORDER BY jenis_barang ASC");
$kondisi = mysqli_query($conn, "SELECT * FROM kondisi_barang ORDER BY kondisi_barang ASC");
?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ubah Data Inventaris</h1>
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
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" name="nama_barang"
                                            value="<?php echo $row['nama_barang']; ?>">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <input type="hidden" class="form-control" name="aksi" value="ubah_inventaris">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Barang</label>
                                        <select name="jenis_barang" class="form-control">
                                            <option selected value="<?php echo $row['id_jenis_barang']; ?>"><?php echo $row['jenis_barang']; ?></option>
                                            <?php foreach ($jenis as $Key => $value) { ?>
                                                <option value="<?php echo $value['id_jenis_barang']; ?>"><?php echo $value['jenis_barang']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kondisi Barang</label>
                                        <select name="kondisi_barang" class="form-control">
                                            <option selected value="<?php echo $row['id_kondisi_barang']; ?>"><?php echo $row['kondisi_barang']; ?></option>
                                            <?php foreach ($kondisi as $Key => $value) { ?>
                                                <option value="<?php echo $value['id_kondisi_barang']; ?>"><?php echo $value['kondisi_barang']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>" class="form-control">
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