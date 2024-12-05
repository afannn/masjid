<?php include 'partials/head.php'; ?>

<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Informasi </h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Informasi Masjid Al-Muttaqien</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p><?php echo $rowProfile['tentang']; ?></p>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>