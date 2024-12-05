<footer id="footer">
  <div class="footer-top">
    <hr>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>
              <?php echo $rowProfile['nama_masjid']; ?>
            </h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Alamat</h4>
          <p>
            <?php echo $rowProfile['alamat']; ?>
          </p>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Tautan Cepat</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="jadwal_shalat.php">Jadwal Shalat</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="jadwal_khatib.php">Jadwal Khatib </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="jadwal_kegiatan.php">Jadwal Kegiatan</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="donasi.php">Donasi</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="kritik.php">Kritik & Saran</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Kontak</h4>
          <p>
            <strong>Telepon :</strong> +
            <?php echo $rowProfile['telepon']; ?><br>
            <strong>Email :</strong>
            <?php echo $rowProfile['email']; ?><br>
          </p>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="copyright">
      Copyright &copy;
      <?php echo date('Y'); ?> <strong><span>
          <?php echo $rowProfile['nama_masjid']; ?>
        </span></strong>. All Rights Reserved
    </div>
  </div>
  </div>
</footer>
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>
<?php include 'partials/foot.php'; ?>