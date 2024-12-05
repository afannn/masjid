<?php include 'partials/head.php'; ?>
<?php
$sholat = mysqli_query($conn, "SELECT * FROM jadwal_sholat WHERE tanggal = date(now())");
$rowSholat = mysqli_fetch_array($sholat);
?>

<body>
  <?php include 'partials/header.php'; ?>
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-12 col-lg-12">
          <h1>
            <?php echo $rowProfile['nama_masjid']; ?><span></span>
          </h1>
          <p style="color: white;">
            <?php echo $rowProfile['alamat']; ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Jadwal</h2>
          <p>Shalat Hari Ini</p>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <p>
              <strong>
                <?php echo tgl_indo(date('Y-m-d')); ?>
              </strong> /
              <?php echo toHijriah(date('Y-m-d')); ?>
            </p>
          </div>
        </div>
        <div class="row">
          <?php if (!empty($rowSholat)) { ?>
          <div class="col-lg-2 col-md-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Subuh
                </a>
              </h4>
              <p> Pukul
                <?php echo $rowSholat['subuh']; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Terbit
                </a>
              </h4>
              <p>Pukul
                <?php echo $rowSholat['terbit']; ?>
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Dzuhur
                </a>
              </h4>
              <p>Pukul
                <?php echo $rowSholat['dzuhur']; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Ashar
                </a>
              </h4>
              <p>Pukul
                <?php echo $rowSholat['ashar']; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Maghrib
                </a>
              </h4>
              <p>Pukul
                <?php echo $rowSholat['maghrib']; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Isya
                </a>
              </h4>
              <p>Pukul
                <?php echo $rowSholat['isya']; ?>
              </p>
            </div>
          </div>
          <?php } else {?>
            <div class="col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>
                <a href="">
                  Data belum diperbarui
                </a>
              </h4>
            </div>
          </div>
          <?php }?>
        </div>
    </section><!-- End About Section -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Grafik</h2>
          <p>Keuangan Bulan Ini</p>
        </div>
        <?php if ($rPemasukan['total'] != null || $rPengeluaran['total'] != null || $rKas['total'] != null) {?>
        <div>
          <div>
            <div style="height: 10px; width:100%;">
            </div>
            <canvas id="chart"></canvas>
          </div>
        </div>
         <?php } else if ($rPemasukan['total'] == null && $rPengeluaran['total'] == null && $rKas['total'] == null) { ?>
              <h4>Belum ada data keuangan bulan ini</h4>
          <?php } ?>
      </div>
    </section>

    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="d-flex justify-content-space-between">
          <div class="section-title text-start">
            <h2>Berita</h2>
            <p>Terbaru</p>
          </div>
          <div class="text-end" style="width: 20%;">
            <a href="berita.php">Lihat Semua</a>
          </div>
        </div>

        <div class="row">
          <?php foreach ($beritaTerbaru as $key => $value) { ?>
            <div class="col-sm-4 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="files/article/<?php echo $value['img']; ?>" class="img-fluid" alt="">

                </div>
                <div class="member-info">
                  <a href="">
                    <h4>
                      <?php echo $value['judul']; ?>
                    </h4>
                  </a>
                  <small class="mt-4 text-danger">
                    <?php echo $value['kategori_berita'] ?>
                  </small>
                  <p style="white-space: nowrap; overflow: hidden;">
                    <?php echo $value['isi'] ?>......
                  </p>
                  <div class="d-flex justify-content-space-between align-items-center">
                  </div>

                  <div class="row">
                    <div class="col-sm-6 text-start">
                      <small class="mt-2">
                        <?php echo tgl_indo($value['tanggal_upload']); ?>
                      </small>

                    </div>
                    <div class="col-sm-6 text-end">
                      <small>
                        <a href="view_berita.php?id=<?php echo $value['id_berita']; ?>">Selengkapnya </a>
                      </small>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>


    <section id="c!ta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Galeri</h3>
          <div class="owl-carousel">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
              <div>
                <img src="assets/img/galeri/<?php echo $i . '.jpg'; ?>">
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <section id="cta" class="cta mt-3">
      <div class="container" data-aos="zoom-in">
          <div class="section-title text-start">
            <p style="color: black;">Layanan</p>
          </div>  
          <div class="text-center"> 
              <div class="wrapper">
                <div class="row text-start">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-5 mb-3">
                        <div class="card" style="height: 280px; width: 100%; background-image: url(images/kritik.png);">
                          <div class="card-header">
                            <h4 class="mt-3 pt-3" style="color: white;">Kritik dan Saran</h4>
                          </div>
                          <div class="card-body">
                            <p>Silahkan kirimkan kami masukan, opini, kritik dan saran agar kami dapat meningkatkan kualitas layanan dan informasi.</p>
                          </div>
                          <div class="mb-3 card-footer">
                              <a href="kritik_saran.php">Buka halaman</a>
                            </div>  
                          </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card" style="height: 280px; width: 100%; background-image: url(images/donasi.png);">
                          <div class="card-header">
                            <h4 class="mt-3 pt-3" style="color: white;">Donasi</h4>
                          </div>
                          <div class="card-body">
                            <p>Donasi Anda sangat bermanfaat untuk sesama.</p>
                          </div>
                            <div class="mb-3 card-footer">
                              <a href="donasi.php">Buka halaman</a>
                            </div>  
                          </div>
                    </div>
                    <div class="col-sm-1">
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" >
        <div class="section-title">
          <h2>Lokasi</h2>
          <p>Dalam Peta</p>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.47013548845212!2d109.38060847485019!3d-7.065290218585371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fe62a4f6efee3%3A0x265f548e86a7c914!2sMasjid%20Al-Muttaqien!5e0!3m2!1sid!2sid!4v1686250588697!5m2!1sid!2sid"
                            style="width: 100%;" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
      </div>
    </section>
  </main>
  <?php include 'partials/footer.php'; ?>