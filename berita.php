<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Berita</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Berita Terbaru</h1>
                </div>
                <div class="row">
                    <?php foreach ($berita as $key => $value) { ?>
                        <div class="col-sm-4 mb-3 p-2 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="files/article/<?php echo $value['img']; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="member-info" style="">
                                    <br>
                                    <a href="">
                                        <h4>
                                            <?php echo $value['judul']; ?>
                                        </h4>
                                    </a>
                                    <small class="mt-4 text-danger"><?php echo $value['kategori_berita']; ?></small>
                                    <div style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4; line-height: 3; max-height: 50px">
                                        <p style="text-align: justify;"><?php echo $value['isi']; ?></p>
                                    </div>

                                    <div class="d-flex justify-content-space-between align-items-center">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 text-start">
                                            <small class="mt-2"><?php echo tgl_indo($value['tanggal_upload']); ?></small>

                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <small>
                                                <a href="view_berita.php?id=<?php echo $value['id_berita']; ?>">Selengkapnya </a>
                                            </small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>