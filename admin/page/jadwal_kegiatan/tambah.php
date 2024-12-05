<?php include '../partials/head.php'; ?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Jadwal Kegiatan</h1>
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
                                        <input type="hidden" class="form-control" name="aksi" value="tambah_jadwal_kegiatan">
                                        <input type="text" class="form-control" name="narasumber">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" name="tgl">
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <input type="time" class="form-control" name="waktu">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat</label>
                                        <input type="text" class="form-control" name="tempat">
                                    </div>
                                    <div class="form-group">
                                        <label>Penanggung Jawab</label>
                                        <input type="text" class="form-control" name="penanggung_jawab">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" cols="30" rows="10" class="form-control"></textarea>
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