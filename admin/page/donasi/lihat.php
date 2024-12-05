<?php include '../partials/head.php'; ?>
<?php 
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM donasi WHERE id_donasi = '$id'");
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
                        <h1 class="m-0">Lihat Bukti Donasi</h1>
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
                                <form>
                                    <div class="form-group">
                                        <label>Bukti Donasi</label>
                                        <img style="width: 100%;" src="../../../files/donasi/<?php echo $row['bukti']; ?>" alt="">
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