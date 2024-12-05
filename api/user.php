<?php 
include 'conn.php';
include '../lib/tgl.php';
include '../lib/rupiah.php';
require('../lib/fpdf/fpdf.php');
require('../lib/phpexcel/php-excel-reader/excel_reader2.php');

$aksi = $_POST['aksi'];

switch ($aksi) {
    case 'kritik_saran':
        kritik_saran();
        break;
    case 'donasi':
        donasi();
        break;
        
    }

function kritik_saran() {
    global $conn;

    $nama = $_POST['nama'];
    $kritik_saran = $_POST['kritik_saran'];

    $sql = mysqli_query($conn, "INSERT INTO kritik_saran(nama, tgl, kritik_saran)
    VALUES ('$nama',DATE(NOW()),'$kritik_saran');
    ");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../kritik_saran.php');
        </script>;
        ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script>;
        ";
    }
}

function donasi() {
    global $conn;

    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    $target_dir = "../files/donasi/";
    $tmpName = $_FILES["bukti"]["tmp_name"];
    $fileName = $_FILES["bukti"]["name"];
    $type = $_FILES["bukti"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    $getSaldo = mysqli_query($conn, "SELECT SUM(saldo) as saldo FROM kas");
    $saldo = mysqli_fetch_array($getSaldo);

    if (move_uploaded_file($tmpName, $target_dir . $newName)) {
    $sql = mysqli_query($conn, "INSERT INTO donasi(nama_pengirim, tgl, jumlah, bukti, keterangan)
    VALUES ('$nama',DATE(NOW()),'$jumlah','$newName','$keterangan');
    ");
    $insertPemasukan = mysqli_query($conn, "INSERT INTO pemasukan(id_jenis_keuangan, tanggal, jumlah, keterangan)
            VALUES ('3',DATE(NOW()),'$jumlah','$keterangan');
        ");
    $insertKas = mysqli_query($conn, "INSERT INTO kas(tanggal,uraian,debet,kredit,saldo) VALUES(DATE(NOW()),'$keterangan','$jumlah','0','$jumlah')");
    if ($sql && $insertPemasukan) {
        echo "<script>
            alert('Berhasil');
            location.replace('../donasi.php');
        </script>;
        ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script>;
        ";
    }
}
}
?>