<?php require_once('api/conn.php'); ?>
<?php require_once('lib/hijri.php'); ?>
<?php require_once('lib/tgl.php'); ?>
<?php require_once('lib/wednesday.php'); ?>
<?php
error_reporting(0);
// get
$getProfile = mysqli_query($conn, "SELECT * FROM profil");
$berita = mysqli_query($conn, "SELECT * FROM berita
JOIN kategori_berita ON berita.id_kategori_berita = kategori_berita.id_kategori_berita");
$beritaTerbaru = mysqli_query($conn, "SELECT * FROM berita
JOIN kategori_berita ON berita.id_kategori_berita = kategori_berita.id_kategori_berita
LIMIT 3");

$gPemasukan = mysqli_query($conn,"SELECT SUM(jumlah) as total FROM pemasukan
WHERE MONTH(tanggal) = MONTH(now())");
$gPengeluaran = mysqli_query($conn,"SELECT SUM(jumlah) as total FROM pengeluaran
WHERE MONTH(tanggal) = MONTH(now())");
$gKas = mysqli_query($conn,"SELECT tanggal, saldo as total FROM kas
WHERE MONTH(tanggal) = MONTH(now())
ORDER BY tanggal DESC
LIMIT 1");
$jabatan = mysqli_query($conn, "SELECT * FROM jabatan_detail ORDER BY id_jabatan_detail ASC");
// row
$rowProfile = mysqli_fetch_array($getProfile);
$rPemasukan = mysqli_fetch_array($gPemasukan);
$rPengeluaran = mysqli_fetch_array($gPengeluaran);
$rKas = mysqli_fetch_array($gKas);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $rowProfile['nama_masjid']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="assets/vendor/carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendor/carousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

  <style>
    
  </style>
</head>