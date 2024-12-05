<?php include 'partials/head.php'; ?>
<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Inventaris</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Lihat Gambar Inventaris Masjid Al-Muttaqien</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                       <img src="files/inventaris/<?php echo $_GET['img']; ?>" alt="">
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>