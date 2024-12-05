<?php include 'partials/head.php'; ?>
<?php 
$sql = mysqli_query($conn, "SELECT * FROM inventaris
JOIN jenis_barang ON inventaris.id_jenis_barang = jenis_barang.id_jenis_barang
JOIN kondisi_barang ON inventaris.id_kondisi_barang = kondisi_barang.id_kondisi_barang");
?>

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
                    <h1>Data Inventaris Masjid Al-Muttaqien</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Kondisi Barang</th>
                                    <th>Jumlah</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($sql as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value['nama_barang']; ?></td>
                                        <td><?php echo $value['jenis_barang']; ?></td>
                                        <td><?php echo $value['kondisi_barang']; ?></td>
                                        <td><?php echo $value['jumlah']; ?></td>
                                        <td>
                                            <a href="lihat_gambar.php?img=<?php echo $value['img']; ?>">Lihat Gambar</a></td>
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