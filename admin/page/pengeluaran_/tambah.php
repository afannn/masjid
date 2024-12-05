<?php include '../partials/head.php'; ?>
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
                                <form action="../../api/admin.php" method="POST">
                                    <div class="form-group">
                                        <label>Input</label>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                    <div class="form-group">
                                        <label>Input</label>
                                        <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Input</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark">Kembali</button>
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