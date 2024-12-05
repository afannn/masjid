<?php include 'partials/head.php'; ?>
<?php 
$pelindung = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Pelindung'");
$penasehat = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Penasehat' OR nama_jabatan = 'Penasihat'");
$pengurusHarian = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Pengurus Harian'");
$bidangPendidikan = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Bidang Pendidikan'");
$sarpras = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Bidang Sarana & Prasarana' OR nama_jabatan = 'Bidang Sarana & Prasarana'");
$humas = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'humas'");
$keamanan = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Bidang Keamanan'");
$inventaris = mysqli_query($conn, "SELECT * FROM pengurus
JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
WHERE nama_jabatan = 'Bidang Inventarisasi'");
?>


<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Kepengurusan</h2>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Struktur Organisasi Masjid Al-Muttaqien</h1>

                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <table>
                                <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Pelindung</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($pelindung as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Penasehat</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($penasehat as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Pengurus Harian</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($pengurusHarian as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Bidang Pendidikan</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($bidangPendidikan as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Bidang Sarana & Prasarana</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($sarpras as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Humas</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($humas as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Bidang Keamanan</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($keamanan as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                    <td class="fw-bold" style="border:1px solid black; padding: 10px;">Bidang Inventarisasi</td>
                                    <td style="border:1px solid black; padding: 10px; width: 60%;">
                                        <?php foreach ($inventaris as $key => $value) {?>
                                            <p><?php echo $value['nama_pengurus']; ?></p> 
                                            <div style="display: block; margin-bottom: 1em;"></div>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <!-- <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" rowspan="4" style="border:1px solid black; padding: 10px;">II.
                                    Penasehat</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">II. Penasehat</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">II. Penasehat</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">II. Penasehat</td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" colspan="2" style="border:1px solid black; padding: 10px;">III.
                                    Pengurus Harian</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Ketua</td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Nama Ketua</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Sekretaris</td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Nama Sekretaris</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bendahara</td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Nama Bendahara</td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" rowspan="4" style="border:1px solid black; padding: 10px;">IV.
                                    Bidang Pendidikan</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bidang Pendidikan</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bidang Pendidikan</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bidang Pendidikan</td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" rowspan="4" style="border:1px solid black; padding: 10px;">V. Bidang
                                    Sarana dan Prasarana</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bidang Sarana dan Prasarana</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bidang Sarana dan Prasarana</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Bidang Sarana dan Prasarana</td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" rowspan="4" style="border:1px solid black; padding: 10px;">VI. Humas
                                </td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Humas</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Humas</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Humas</td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" rowspan="4" style="border:1px solid black; padding: 10px;">VII.
                                    Keamanan</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Keamanan</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Keamanan</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Keamanan</td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                                <td style="border:1px solid black; padding: 10px; width: 60%;">
                                    <p></p>
                                </td>
                            </tr>

                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td class="fw-bold" rowspan="4" style="border:1px solid black; padding: 10px;">VII.
                                    Inventarisasi</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Inventarisasi</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Inventarisasi</td>
                            </tr>
                            <tr style="border:1px solid black; padding: 10px; background-color:white;">
                                <td style="border:1px solid black; padding: 10px; width: 60%;">Inventarisasi</td>
                            </tr> -->
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>