<?php include 'partials/head.php'; ?>
<?php 
$sql = mysqli_query($conn, "SELECT * FROM pemasukan
JOIN jenis_keuangan ON pemasukan.id_jenis_keuangan = jenis_keuangan.id_jenis_keuangan")
?>
<body>
    <?php include 'partials/nav.php'; ?>
    <main id="main">

        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pemasukan</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="content three_quarter first">
                    <h1>Data Pemasukan Masjid Al-Muttaqien</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($sql as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['jenis_keuangan']; ?></td>
                                        <td><?php echo $value['tanggal']; ?></td>
                                        <td><?php echo $value['jumlah']; ?></td>
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