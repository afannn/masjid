<?php include '../partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT id_jadwal_khatib, tgl, k.nama_pengisi as khatib, m.nama_pengisi as muadzin, i.nama_pengisi as imam,
k.id_pengisi_khatib as id_khatib, m.id_pengisi_khatib as id_muadzin, i.id_pengisi_khatib as id_imam
FROM jadwal_khatib
JOIN pengisi_khatib as k ON jadwal_khatib.khatib = k.id_pengisi_khatib
JOIN pengisi_khatib as m ON jadwal_khatib.muadzin = m.id_pengisi_khatib
JOIN pengisi_khatib as i ON jadwal_khatib.imam = i.id_pengisi_khatib
WHERE id_jadwal_khatib = '$id'
");
$row = mysqli_fetch_array($sql);
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
                        <h1 class="m-0">Ubah Data Jadwal Khatib</h1>
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
                                        <input type="hidden" class="form-control" name="aksi"
                                            value="ubah_jadwal_khatib">
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?php echo $id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tgl"
                                            value="<?php echo $row['tgl']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Khatib</label>
                                        <select class="form-control select2" style="width: 100%;" name="khatib">
                                            <option value="<?php echo $row['id_khatib']; ?>"><?php echo $row['khatib']; ?></option>
                                            <?php foreach ($pengisi as $key => $value) { ?>
                                                <option value="<?php echo $value['id_pengisi_khatib']; ?>"><?php echo $value['nama_pengisi']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Muadzin</label>
                                        <select class="form-control select2" style="width: 100%;" name="muadzin">
                                            <option value="<?php echo $row['id_muadzin']; ?>"><?php echo $row['muadzin']; ?></option>
                                            <?php foreach ($pengisi as $key => $value) { ?>
                                                <option value="<?php echo $value['id_pengisi_khatib']; ?>"><?php echo $value['nama_pengisi']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Imam</label>
                                        <select class="form-control select2" style="width: 100%;" name="imam">
                                            <option value="<?php echo $row['id_muadzin']; ?>"><?php echo $row['muadzin']; ?></option>
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