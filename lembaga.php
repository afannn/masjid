<?php include 'partials/head.php'; ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM lembaga_pendidikan
JOIN jenjang_pendidikan ON lembaga_pendidikan.id_jenjang_pendidikan = jenjang_pendidikan.id_jenjang_pendidikan")
?>

<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Lembaga</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Lembaga Pendidikan Masjid Al-Muttaqien</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="row">
                            <?php foreach ($sql as $key => $value) { ?>
                                <div class="col-sm-4">
                                    <div class="card" style="border-radius: 1px;">
                                        <div class="card-header" style="background-color: transparent; border:0;">
                                        <strong>
                                            <h4><?php echo $value['nama_lembaga']; ?></h4>
                                        </strong>    
                                        </div>
                                        <div class="card-body">
                                            <img class="mb-3" style="width: 100%;" src="files/lembaga/<?php echo $value['img']; ?>" alt="" srcset="">
                                            <p><?php echo $value['jenjang_pendidikan']; ?></p>
                                            <p><?php echo $value['alamat']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>