<?php include 'partials/head.php'; ?>
<?php 
$get= mysqli_query($conn, "SELECT id_jadwal_khatib, tgl, k.nama_pengisi as khatib, m.nama_pengisi as muadzin, i.nama_pengisi as imam FROM jadwal_khatib
JOIN pengisi_khatib as k ON jadwal_khatib.khatib = k.id_pengisi_khatib
JOIN pengisi_khatib as m ON jadwal_khatib.muadzin = m.id_pengisi_khatib
JOIN pengisi_khatib as i ON jadwal_khatib.imam = i.id_pengisi_khatib
WHERE MONTH(tgl) = MONTH(now())");
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
                    <h1>Jadwal Khatib Bulan Ini Masjid Al-Muttaqien</h1>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Khatib</th>
                                    <th>Muadzin</th>
                                    <th>Imam Shalat</th>
                                    <th>Tanggal</th>
                                    <th>Tanggal Hijriyah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no =1;
                                foreach ($get as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['khatib']; ?></td>
                                        <td><?php echo $value['muadzin']; ?></td>
                                        <td><?php echo $value['imam']; ?></td>
                                        <td><?php echo tgl_indo($value['tgl']); ?></td>
                                        <td><?php echo toHijriah($value['tgl']); ?></td>
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