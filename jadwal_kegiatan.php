<?php include 'partials/head.php'; ?>
<?php 
$sql = mysqli_query($conn, "SELECT * FROM jadwal_kegiatan
WHERE MONTH(tanggal) = MONTH(now())");
?>

<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Jadwal Kegiatan</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Jadwal Kegiatan Masjid Al-Muttaqien</h1>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Narasumber</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($sql as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['nama_kegiatan']; ?></td>
                                        <td><?php echo $value['narasumber']; ?></td>
                                        <td><?php echo $value['tanggal']; ?></td>
                                        <td><?php echo $value['waktu']; ?></td>
                                        <td><?php echo $value['tempat']; ?></td>
                                        <td><?php echo $value['penanggung_jawab']; ?></td>
                                        <td><?php echo $value['keterangan']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/foot.php'; ?>