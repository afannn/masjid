<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="far fa-calendar rgtspace-5"></i> <?php echo tgl_indo(date('Y-m-d')) ?> (<?php echo toHijriah(date('Y-m-d')); ?>)</li>
      </ul>
    </div>
    <br>
    <hr>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
      <h1><a href="index.html"><?php echo $rowProfile['nama_masjid']; ?></a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li>
          <a href="index.php">Beranda</a>
        </li>
        <li>
          <a class="drop" href="#">Profil</a>
          <ul>
            <li><a href="struktur.php">Struktur Organisasi</a></li>
            <li><a href="visi_misi.php">Visi & Misi</a></li>
            <li><a href="informasi.php">Informasi Masjid</a></li>
            <li><a href="pages/gallery.html">Layanan</a></li>
          </ul>
        </li>
        <li>
          <a class="drop" href="#">Jadwal</a>
          <ul>
            <li><a href="jadwal_sholat.php">Sholat</a></li>
            <li><a href="jadwal_khatib.php">Khatib</a></li>
            <li><a href="jadwal_kegiatan.php">Kegiatan</a></li>
          </ul>
        </li>
        <li>
          <a class="drop" href="#">Keuangan</a>
          <ul>
            <li><a href="pemasukan.php">Pemasukan</a></li>
            <li><a href="pengeluaran.php">Pengeluaran</a></li>
            <li><a href="kas.php">Kas</a></li>
          </ul>
        </li>
        <li><a href="inventaris.php">Inventaris</a></li>
        <li><a href="berita.php">Berita</a></li>
      </ul>
    </nav>
  </header>
</div>