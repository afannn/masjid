<?php include 'partials/head.php' ?>
<?php include 'partials/top.php' ?>
<div class="bgded overlay" style="background-image:url('images/masjid.jpg');">
    <div id="breadcrumb" class="hoc clear">
        <h6 class="heading">Jadwal Shalat</h6>
    </div>
</div>

<div class="wrapper row3">
    <main class="hoc container clear">

        <!-- main body -->
        <div class="content three_quarter first">
            <h1>Jadwal Sholat Lengkap Masjid Al-Muttaqien</h1>

            <div class="row mt-4 mb-4">
                <div class="col-sm-6">
                    <h4>Hari ini</h4>
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <span class="text-dark">
                                        Sholat
                                    </span>
                                </th>
                                <th>
                                    <span class="text-dark">
                                        Mulai
                                    </span>
                                </th>
                                <th>
                                    <span class="text-dark">
                                        Iqomah
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <tr>
                                    <td>
                                        <?php if ($i == 1) {
                                            echo "Subuh";
                                        } else if ($i == 2) {
                                            echo "Dzuhur";
                                        } else if ($i == 3) {
                                            echo "Ashar";
                                        } else if ($i == 4) {
                                            echo "Maghrib";
                                        } else {
                                            echo "Isya";
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $i; ?> AM
                                    </td>
                                    <td>
                                        <?php echo $i; ?> AM
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6">
                    <h4>Besok</h4>
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <span class="text-dark">
                                        Sholat
                                    </span>
                                </th>
                                <th>
                                    <span class="text-dark">
                                        Mulai
                                    </span>
                                </th>
                                <th>
                                    <span class="text-dark">
                                        Iqomah
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <tr>
                                    <td>
                                        <?php if ($i == 1) {
                                            echo "Subuh";
                                        } else if ($i == 2) {
                                            echo "Dzuhur";
                                        } else if ($i == 3) {
                                            echo "Ashar";
                                        } else if ($i == 4) {
                                            echo "Maghrib";
                                        } else {
                                            echo "Isya";
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $i; ?> AM
                                    </td>
                                    <td>
                                        <?php echo $i; ?> AM
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tgl Hijriyah</th>
                                <th>Tgl Masehi</th>
                                <th>Imsakiyah</th>
                                <th>Subuh</th>
                                <th>Terbit</th>
                                <th>Duha</th>
                                <th>Dzuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include 'partials/right.php' ?>

    </main>
</div>

<?php include 'partials/footer.php' ?>
<?php include 'partials/foot.php' ?>