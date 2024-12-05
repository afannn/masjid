<?php include 'partials/head.php' ?>
<?php include 'partials/top.php' ?>
<div class="bgded overlay" style="background-image:url('images/masjid.jpg');">
    <div id="breadcrumb" class="hoc clear">
        <h6 class="heading">Lokasi</h6>
    </div>
</div>

<div class="wrapper row3">
    <main class="hoc container clear">

        <!-- main body -->
        <div class="content three_quarter first">
            <h1>Lokasi
                <?php echo $rowProfile['nama_masjid']; ?>
            </h1>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.47013548845212!2d109.38060847485019!3d-7.065290218585371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fe62a4f6efee3%3A0x265f548e86a7c914!2sMasjid%20Al-Muttaqien!5e0!3m2!1sid!2sid!4v1686250588697!5m2!1sid!2sid"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <?php include 'partials/right.php' ?>
    </main>
</div>

<?php include 'partials/footer.php' ?>
<?php include 'partials/foot.php' ?>