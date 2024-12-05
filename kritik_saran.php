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
                    <h2>Kritik dan Saran</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h3>Kritik dan Saran Untuk Masjid Al-Muttaqien</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p style="text-align: justify;">Kami senang mendengar dari Anda, silahkan sampaikan komentar, opini, masukan/saran, pengaduan, pertanyaan atau apa saja kepada Kami dengan mengisi form di bawah ini</p>
                        <form action="api/user.php" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <input style="border-radius: 0;" type="text" name="nama" class="form-control mt-2">
                                <input type="hidden" value="kritik_saran" name="aksi" class="form-control mt-2">
                            </div> 
                            <div class="form-group mt-3">
                                <label>Kritik dan Saran</label>
                                <textarea name="kritik_saran" cols="30" rows="10" class="form-control mt-2"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <button style="color: #ffffff; background-color: #02A43F; outline: none;" type="submit" class="btn btn-inverse">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>