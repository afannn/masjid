<?php include 'partials/head.php'; ?>
<?php
$sql=mysqli_query($conn,"SELECT * FROM visi_misi");
$row = mysqli_fetch_array($sql);
?>

<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Visi dan Misi </h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Visi dan Misi Masjid Al-Muttaqien</h1>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Visi</h4>
                        <p><?php echo $row['visi']; ?></p>
                        <h4>Misi</h4>
                        <p><?php echo $row['misi']; ?></p>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>