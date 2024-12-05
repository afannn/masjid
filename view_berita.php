<?php include 'partials/head.php'; ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM berita 
JOIN kategori_berita ON berita.id_kategori_berita = kategori_berita.id_kategori_berita
WHERE id_berita = '$id'");
$row = mysqli_fetch_array($sql);

$beritaLimit = mysqli_query($conn, "SELECT * FROM berita JOIN kategori_berita ON berita.id_kategori_berita = kategori_berita.id_kategori_berita
LIMIT 3");
?>

<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Lihat Berita</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="files/article/<?php echo $row['img']; ?>" alt=""><br><br>
                        <strong>
                            <h3 style="font-weight:bold;">
                                <?php echo $row['judul']; ?>
                            </h3>
                        </strong>
                        <small>Diposting
                            <?php echo tgl_indo($row['tanggal_upload']); ?>
                        </small>

                        <div class="mt-3" style="text-align: justify;">
                            <p>
                                <?php echo $row['isi']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="d-flex justify-content-space-between">
                    <div class="section-title text-start">
                        <h2>Berita</h2>
                        <p>Lainnya</p>
                    </div>
                    <div class="text-end" style="width: 20%;">
                        <a href="berita.php">Lihat Semua</a>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($beritaLimit as $key => $value) { ?>
                        <div class="col-sm-4 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="files/article/<?php echo $value['img']; ?>" class="img-fluid" alt="">

                                </div>
                                <div class="member-info">
                                    <a href="">
                                        <h4>
                                            <?php echo $value['judul']; ?>
                                        </h4>
                                    </a>
                                    <small class="mt-4 text-danger">
                                        <?php echo $value['kategori_berita'] ?>
                                    </small>
                                    <p style="white-space: nowrap; overflow: hidden;">
                                        <?php echo $value['isi'] ?>......
                                    </p>
                                    <div class="d-flex justify-content-space-between align-items-center">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 text-start">
                                            <small class="mt-2">
                                                <?php echo tgl_indo($value['tanggal_upload']); ?>
                                            </small>

                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <small>
                                                <a href="view_berita.php?id=<?php echo $value['id_berita']; ?>">Selengkapnya</a>
                                            </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>