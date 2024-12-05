<?php include '../partials/head.php'; ?>
<?php 
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM kritik_saran WHERE id_kritik_saran = '$id'");
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
                        <h1 class="m-0">Ubah Data Kategori Berita</h1>
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
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input disabled type="text" class="form-control" value="<?php echo $row['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input disabled type="date" class="form-control" value="<?php echo $row['tanggal']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Kritik dan Saran</label>
                                        <textarea disabled class="form-control" cols="30" rows="10"><?php echo $row['kritik_saran']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="index.php" class="btn btn-dark">Kembali</a>
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