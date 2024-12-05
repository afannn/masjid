<?php include '../partials/head.php'; ?>
<div class="wrapper">
    <?php include '../partials/top.php'; ?>
    <?php include '../partials/side.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Import Data Jadwal Shalat</h1>
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
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label>Template Data Excel</label>
                                                <br>
                                                <a href="../../../files/template/template_jadwal_shalat.xls" class="btn btn-sm btn-block btn-primary">Download</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Contoh Data Excel</label>
                                                <br>
                                                <a href="../../../files/template/contoh_jadwal_shalat.xls" class="btn btn-sm btn-block btn-success">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="hidden" class="form-control" name="aksi" value="import_jadwal_shalat">
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