<?php
include 'conn.php';
include '../lib/tgl.php';
include '../lib/rupiah.php';
require('../lib/fpdf/fpdf.php');
require('../lib/phpexcel/php-excel-reader/excel_reader2.php');

$aksi = $_POST['aksi'];

switch ($aksi) {
    case 'login':
        login();
        break;
    case 'logout':
        logout();
        break;
    case 'tambah_kategori':
        tambah_kategori();
        break;
    case 'ubah_kategori':
        ubah_kategori();
        break;
    case 'hapus_kategori':
        hapus_kategori();
        break;
    case 'tambah_berita':
        tambah_berita();
        break;
    case 'ubah_berita':
        ubah_berita();
        break;
    case 'hapus_berita':
        hapus_berita();
        break;
    case 'tambah_jenis_barang':
        tambah_jenis_barang();
        break;
    case 'ubah_jenis_barang':
        ubah_jenis_barang();
        break;
    case 'hapus_jenis_barang':
        hapus_jenis_barang();
        break;
    case 'tambah_kondisi_barang':
        tambah_kondisi_barang();
        break;
    case 'ubah_kondisi_barang':
        ubah_kondisi_barang();
        break;
    case 'hapus_kondisi_barang':
        hapus_kondisi_barang();
        break;
    case 'tambah_inventaris':
        tambah_inventaris();
        break;
    case 'ubah_inventaris':
        ubah_inventaris();
        break;
    case 'hapus_inventaris':
        hapus_inventaris();
        break;
    case 'ubah_profil':
        ubah_profil();
        break;
    case 'tambah_jabatan':
        tambah_jabatan();
        break;
    case 'ubah_jabatan':
        ubah_jabatan();
        break;
    case 'hapus_jabatan':
        hapus_jabatan();
        break;
    case 'tambah_pengurus':
        tambah_pengurus();
        break;
    case 'ubah_pengurus':
        ubah_pengurus();
        break;
    case 'hapus_pengurus':
        hapus_pengurus();
        break;
    case 'ubah_visi_misi':
        ubah_visi_misi();
        break;
    case 'tambah_pengisi_khatib':
        tambah_pengisi_khatib();
        break;
    case 'ubah_pengisi_khatib':
        ubah_pengisi_khatib();
        break;
    case 'hapus_pengisi_khatib':
        hapus_pengisi_khatib();
        break;
    case 'tambah_jadwal_khatib':
        tambah_jadwal_khatib();
        break;
    case 'ubah_jadwal_khatib':
        ubah_jadwal_khatib();
        break;
    case 'hapus_jadwal_khatib':
        hapus_jadwal_khatib();
        break;
    case 'tambah_jadwal_kegiatan':
        tambah_jadwal_kegiatan();
        break;
    case 'ubah_jadwal_kegiatan':
        ubah_jadwal_kegiatan();
        break;
    case 'hapus_jadwal_kegiatan':
        hapus_jadwal_kegiatan();
        break;
    case 'tambah_jenis_keuangan':
        tambah_jenis_keuangan();
        break;
    case 'ubah_jenis_keuangan':
        ubah_jenis_keuangan();
        break;
    case 'hapus_jenis_keuangan':
        hapus_jenis_keuangan();
        break;
    case 'tambah_pemasukan':
        tambah_pemasukan();
        break;
    case 'ubah_pemasukan':
        ubah_pemasukan();
        break;
    case 'hapus_pemasukan':
        hapus_pemasukan();
        break;
    case 'tambah_pengeluaran':
        tambah_pengeluaran();
        break;
    case 'ubah_pengeluaran':
        ubah_pengeluaran();
        break;
    case 'hapus_pengeluaran':
        hapus_pengeluaran();
        break;
    case 'tambah_kas':
        tambah_kas();
        break;
    case 'ubah_kas':
        ubah_kas();
        break;
    case 'hapus_kas':
        hapus_kas();
        break;
    case 'export_kas':
        export_kas();
        break;
    case 'import_jadwal_shalat':
        import_jadwal_shalat();
        break;
    case 'tambah_jenjang_pendidikan':
        tambah_jenjang_pendidikan();
        break;
    case 'ubah_jenjang_pendidikan':
        ubah_jenjang_pendidikan();
        break;
    case 'hapus_jenjang_pendidikan':
        hapus_jenjang_pendidikan();
        break;
    case 'tambah_lembaga_pendidikan':
        tambah_lembaga_pendidikan();
        break;
    case 'ubah_lembaga_pendidikan':
        ubah_lembaga_pendidikan();
        break;
    case 'hapus_lembaga_pendidikan':
        hapus_lembaga_pendidikan();
        break;
}

function login()
{
    global $conn;

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_array($sql);

    if ($row > 0) {
        header('location: ../admin/page/beranda/');
    } else {
        echo "<script>
            alert('Username atau Password salah');
            window.history.back();
        </script>;
        ";
    }
}
function logout()
{

}
function tambah_kategori()
{
    global $conn;

    $kategori = $_POST['kategori'];

    $sql = mysqli_query($conn, "INSERT INTO kategori_berita(kategori_berita) VALUES('$kategori')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/kategori_berita/');
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
function ubah_kategori()
{
    global $conn;

    $id = $_POST['id'];
    $kategori = $_POST['kategori'];

    $sql = mysqli_query($conn, "UPDATE kategori_berita SET kategori_berita = '$kategori' WHERE id_kategori_berita = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/kategori_berita/');
        </script>
        ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script>
        ";
    }
}
function hapus_kategori()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM kategori_berita WHERE id_kategori_berita = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/kategori_berita/');
        </script>
        ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}

function tambah_berita()
{
    global $conn;

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $target_dir = "../files/article/";
    $tmpName = $_FILES["file"]["tmp_name"];
    $fileName = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    if (move_uploaded_file($tmpName, $target_dir . $newName)) {
        $sql = mysqli_query($conn, "INSERT INTO berita(id_kategori_berita, tanggal_upload, judul, isi, img)
        VALUES('$kategori', DATE(NOW()), '$judul', '$isi', '$newName');
        ");
        if ($sql) {
            echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/berita/');
            </script>
            ";
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_berita()
{
    global $conn;


    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $target_dir = "../files/article/";
    $tmpName = $_FILES["file"]["tmp_name"];
    $fileName = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    // jika file kosong
    if (empty($fileName)) {
        $sql = mysqli_query($conn, "UPDATE berita
                SET id_kategori_berita = '$kategori', tanggal_upload = DATE(NOW()), judul = '$judul', isi = '$isi'
                WHERE id_berita = '$id'
                ");
        if ($sql) {
            echo "<script>
                        alert('Berhasil');
                        location.replace('../admin/page/berita/');
                    </script>
                    ";
        } else {
            echo "<script>
                        alert('Gagal');
                        window.history.back();
                    </script> 
                    ";
        }
    } else {
        if (move_uploaded_file($tmpName, $target_dir . $newName)) {
            $sql = mysqli_query($conn, "UPDATE berita SET
                id_kategori_berita = '$kategori', tanggal_upload = DATE(NOW()), judul = '$judul', isi = '$isi', img = '$newName'
                WHERE id_berita = '$id'
            ");
            if ($sql) {
                echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/berita/');
                </script>
                ";
            } else {
                echo "<script>
                    alert('Gagal');
                    window.history.back();
                </script> 
                ";
            }
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
    }
}

function hapus_berita()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM berita WHERE id_berita = '$id'");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/berita/');
                </script>
                ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_jenis_barang()
{
    global $conn;

    $jenis_barang = $_POST['jenis_barang'];

    $sql = mysqli_query($conn, "INSERT INTO jenis_barang(jenis_barang) VALUES('$jenis_barang')");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/jenis_barang/');
                </script>
                ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_jenis_barang()
{
    global $conn;

    $id = $_POST['id'];
    $jenis_barang = $_POST['jenis_barang'];

    $sql = mysqli_query($conn, "UPDATE jenis_barang SET jenis_barang = '$jenis_barang' WHERE id_jenis_barang = '$id'");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/jenis_barang/');
                </script>
                ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_jenis_barang()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM jenis_barang WHERE id_jenis_barang = '$id'");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/jenis_barang/');
                    </script>
                    ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_kondisi_barang()
{
    global $conn;

    $kondisi_barang = $_POST['kondisi_barang'];

    $sql = mysqli_query($conn, "INSERT INTO kondisi_barang(kondisi_barang) VALUES('$kondisi_barang')");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/kondisi_barang/');
                </script>
                ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_kondisi_barang()
{
    global $conn;

    $id = $_POST['id'];
    $kondisi_barang = $_POST['kondisi_barang'];

    $sql = mysqli_query($conn, "UPDATE kondisi_barang SET kondisi_barang = '$kondisi_barang' WHERE id_kondisi_barang = '$id'");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/kondisi_barang/');
                </script>
                ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_kondisi_barang()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM kondisi_barang WHERE id_kondisi_barang = '$id'");

    if ($sql) {
        echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/kondisi_barang/');
                    </script>
                    ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}


function tambah_inventaris()
{
    global $conn;

    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $kondisi_barang = $_POST['kondisi_barang'];
    $jumlah = $_POST['jumlah'];

    $target_dir = "../files/inventaris/";
    $tmpName = $_FILES["file"]["tmp_name"];
    $fileName = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    if (move_uploaded_file($tmpName, $target_dir . $newName)) {
        $sql = mysqli_query($conn, "INSERT INTO inventaris(id_jenis_barang, id_kondisi_barang, nama_barang, jumlah, img)
        VALUES('$jenis_barang', '$kondisi_barang', '$nama_barang', '$jumlah', '$newName');
        ");
        if ($sql) {
            echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/inventaris/');
            </script>
            ";
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}

function ubah_inventaris()
{
    global $conn;

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $kondisi_barang = $_POST['kondisi_barang'];
    $jumlah = $_POST['jumlah'];

    $target_dir = "../files/inventaris/";
    $tmpName = $_FILES["file"]["tmp_name"];
    $fileName = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    // jika file kosong
    if (empty($fileName)) {
        $sql = mysqli_query($conn, "UPDATE inventaris
                SET nama_barang= '$nama_barang',
                id_jenis_barang= '$jenis_barang',
                id_kondisi_barang= '$kondisi_barang',
                jumlah= '$jumlah'
                WHERE id_inventaris = '$id'
                ");
        if ($sql) {
            echo "<script>
                        alert('Berhasil');
                        location.replace('../admin/page/inventaris/');
                    </script>
                    ";
        } else {
            echo "<script>
                        alert('Gagal');
                        window.history.back();
                    </script> 
                    ";
        }
    } else {
        if (move_uploaded_file($tmpName, $target_dir . $newName)) {
            $sql = mysqli_query($conn, "UPDATE inventaris
            SET nama_barang = '$nama_barang',
            id_jenis_barang = '$jenis_barang',
            id_kondisi_barang = '$kondisi_barang',
            jumlah = '$jumlah',
            img = '$newName'
            WHERE id_inventaris = '$id'
            ");
            if ($sql) {
                echo "<script>
                    alert('Berhasil');
                    location.replace('../admin/page/inventaris/');
                </script>
                ";
            } else {
                echo "<script>
                    alert('Gagal');
                    window.history.back();
                </script> 
                ";
            }
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
    }
}

function hapus_inventaris()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM inventaris WHERE id_inventaris = '$id'");

    if ($sql) {
        echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/inventaris/');
                </script>
                ";
    } else {
        echo "<script>
        alert('Gagal');
        window.history.back();
    </script> 
    ";
    }
}

function ubah_profil()
{
    global $conn;

    $nama_masjid = $_POST['nama_masjid'];
    $tentang = $_POST['tentang'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $no_rekening = $_POST['no_rekening'];
    $nama_rekening = $_POST['nama_rekening'];
    $bank_rekening = $_POST['bank_rekening'];

    $sql = mysqli_query($conn, "UPDATE profil SET
            nama_masjid = '$nama_masjid',
            tentang = '$tentang',
            alamat = '$alamat',
            telepon = '$telepon',
            email = '$email',
            no_rekening = '$no_rekening',
            nama_rekening = '$nama_rekening',
            bank_rekening = '$bank_rekening'
    ");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/profil_masjid/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            // window.history.back();
        </script> 
        ";
    }
}

function tambah_jabatan()
{
    global $conn;

    $jabatan = $_POST['jabatan'];

    $sql = mysqli_query($conn, "INSERT INTO jabatan_detail(nama_jabatan) VALUES('$jabatan')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jabatan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_jabatan()
{
    global $conn;


    $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];

    $sql = mysqli_query($conn, "UPDATE jabatan_detail SET nama_jabatan =  '$jabatan' WHERE id_jabatan_detail = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jabatan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_jabatan()
{
    global $conn;


    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM jabatan_detail WHERE id_jabatan_detail = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jabatan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_pengurus()
{
    global $conn;

    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $sql = mysqli_query($conn, "INSERT INTO pengurus(nama_pengurus, id_jabatan_detail) VALUES('$nama','$jabatan')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/struktur/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_pengurus()
{
    global $conn;


    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $sql = mysqli_query($conn, "UPDATE pengurus SET nama_pengurus =  '$nama', id_jabatan_detail = '$jabatan' 
    WHERE id_pengurus = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/struktur/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_pengurus()
{
    global $conn;


    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM pengurus 
    WHERE id_pengurus = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/struktur/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}

function ubah_visi_misi()
{
    global $conn;

    $visi = $_POST['visi'];
    $misi = $_POST['misi'];

    $sql = mysqli_query($conn, "UPDATE visi_misi SET visi =  '$visi', misi = '$misi'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/visi_misi/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_pengisi_khatib()
{
    global $conn;

    $nama_pengisi = $_POST['nama_pengisi'];

    $sql = mysqli_query($conn, "INSERT INTO pengisi_khatib(nama_pengisi) VALUES('$nama_pengisi')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pengisi/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_pengisi_khatib()
{
    global $conn;

    $id = $_POST['id'];
    $nama_pengisi = $_POST['nama_pengisi'];

    $sql = mysqli_query($conn, "UPDATE pengisi_khatib SET nama_pengisi='$nama_pengisi'
    WHERE id_pengisi_khatib = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pengisi/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_pengisi_khatib()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM pengisi_khatib WHERE id_pengisi_khatib = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pengisi/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_jadwal_khatib()
{
    global $conn;

    $tgl = $_POST['tgl'];
    $khatib = $_POST['khatib'];
    $muadzin = $_POST['muadzin'];
    $imam = $_POST['imam'];

    $sql = mysqli_query($conn, "INSERT INTO jadwal_khatib(tgl, khatib, muadzin, imam) VALUES('$tgl','$khatib','$muadzin','$imam')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jadwal_khatib/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_jadwal_khatib()
{
    global $conn;

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $khatib = $_POST['khatib'];
    $muadzin = $_POST['muadzin'];
    $imam = $_POST['imam'];

    $sql = mysqli_query($conn, "UPDATE jadwal_khatib SET
    tgl = '$tgl', 
    khatib = '$khatib', 
    muadzin = '$muadzin', 
    imam = '$imam'
    WHERE id_jadwal_khatib = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jadwal_khatib/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_jadwal_khatib()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM jadwal_khatib WHERE id_jadwal_khatib = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jadwal_khatib/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_jadwal_kegiatan()
{
    global $conn;

    $narasumber = $_POST['narasumber'];
    $tgl = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
    $penanggung_jawab = $_POST['penanggung_jawab'];
    $keterangan = $_POST['keterangan'];

    $sql = mysqli_query($conn, "INSERT INTO jadwal_kegiatan(narasumber, tanggal, waktu, tempat, penanggung_jawab, keterangan) 
    VALUES('$narasumber','$tgl','$waktu','$tempat','$penanggung_jawab','$keterangan')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jadwal_kegiatan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_jadwal_kegiatan()
{
    global $conn;

    $id = $_POST['id'];
    $narasumber = $_POST['narasumber'];
    $tgl = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
    $penanggung_jawab = $_POST['penanggung_jawab'];
    $keterangan = $_POST['keterangan'];

    $sql = mysqli_query($conn, "UPDATE jadwal_kegiatan SET
    narasumber = '$narasumber', tanggal = '$tgl', waktu = '$waktu', tempat = '$tempat', penanggung_jawab = '$penanggung_jawab', keterangan = '$keterangan'
    WHERE id_jadwal_kegiatan = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jadwal_kegiatan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function hapus_jadwal_kegiatan()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM jadwal_kegiatan WHERE id_jadwal_kegiatan = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jadwal_kegiatan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_jenis_keuangan()
{
    global $conn;

    $jenis_keuangan = $_POST['jenis_keuangan'];

    $sql = mysqli_query($conn, "INSERT INTO jenis_keuangan(jenis_keuangan) VALUES('$jenis_keuangan')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jenis_keuangan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_jenis_keuangan()
{
    global $conn;

    $id = $_POST['id'];
    $jenis_keuangan = $_POST['jenis_keuangan'];

    $sql = mysqli_query($conn, "UPDATE jenis_keuangan SET jenis_keuangan = '$jenis_keuangan' WHERE id_jenis_keuangan = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jenis_keuangan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}

function hapus_jenis_keuangan()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM jenis_keuangan WHERE id_jenis_keuangan = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/jenis_keuangan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_pemasukan()
{
    global $conn;

    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $jenis = $_POST['jenis'];
    $keterangan = $_POST['keterangan'];

    $getSaldo = mysqli_query($conn, "SELECT SUM(saldo) as saldo FROM kas");
    $saldo = mysqli_fetch_array($getSaldo);

    // if (empty($saldo['saldo'])) {
    //     $insertKas = mysqli_query($conn, "INSERT INTO kas(tanggal,uraian,debet,kredit,saldo) VALUES('$tgl','$keterangan','$jumlah','0','$jumlah')");
    $sql = mysqli_query($conn, "INSERT INTO pemasukan(tanggal, jumlah, id_jenis_keuangan, keterangan) 
        VALUES('$tgl','$jumlah','$jenis','$keterangan')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pemasukan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
        //     }
        // } else {
        //     $tambahSaldo = $saldo['saldo'] + $jumlah;

        //     $insertKas = mysqli_query($conn, "INSERT INTO kas(tanggal,uraian,debet,kredit,saldo) VALUES('$tgl','$keterangan','$jumlah','0','$tambahSaldo')");
        //     $sql = mysqli_query($conn, "INSERT INTO pemasukan(tanggal, jumlah, id_jenis_keuangan, keterangan) 
        //     VALUES('$tgl','$jumlah','$jenis','$keterangan')");

        //     if ($sql && $insertKas) {
        //         echo "<script>
        //         alert('Berhasil');
        //         location.replace('../admin/page/pemasukan/');
        //         </script>
        //         ";
        //     } else {
        //         echo "<script>
        //         alert('Gagal');
        //         window.history.back();
        //     </script> 
        //     ";
        //     }

    }
    // $sql = mysqli_query($conn, "INSERT INTO pemasukan(tanggal, jumlah, id_jenis_keuangan, keterangan) 
    // VALUES('$tgl','$jumlah','$jenis','$keterangan')");

    // if ($sql) {
    //     echo "<script>
    //         alert('Berhasil');
    //         location.replace('../admin/page/pemasukan/');
    //         </script>
    //         ";
    // } else {
    //     echo "<script>
    //         alert('Gagal');
    //         window.history.back();
    //     </script> 
    //     ";
    // }
}
function ubah_pemasukan()
{
    global $conn;

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $jenis = $_POST['jenis'];
    $keterangan = $_POST['keterangan'];

    $sql = mysqli_query($conn, "UPDATE pemasukan SET tanggal = '$tgl', jumlah = '$jumlah', id_jenis_keuangan = '$jenis', keterangan = '$keterangan'
    WHERE id_pemasukan = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pemasukan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}


function hapus_pemasukan()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM pemasukan WHERE id_pemasukan = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pemasukan/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_pengeluaran()
{
    global $conn;

    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $jenis = $_POST['jenis'];
    $keterangan = $_POST['keterangan'];
    $target_dir = "../files/pengeluaran/";
    $tmpName = $_FILES["file"]["tmp_name"];
    $fileName = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    $getSaldo = mysqli_query($conn, "SELECT SUM(saldo) as saldo FROM kas");
    $saldo = mysqli_fetch_array($getSaldo);

    $kurangSaldo = $saldo['saldo'] - $jumlah;

    if (move_uploaded_file($tmpName, $target_dir . $newName)) {

        $insertKas = mysqli_query($conn, "INSERT INTO kas(tanggal,uraian,debet,kredit,saldo) VALUES('$tgl','$keterangan','0','$jumlah','$kurangSaldo')");

        $sql = mysqli_query($conn, "INSERT INTO pengeluaran(tanggal, jumlah, id_jenis_keuangan, keterangan, img) 
    VALUES('$tgl','$jumlah','$jenis','$keterangan', '$newName')");

        if ($sql && $insertKas) {
            echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pengeluaran/');
            </script>
            ";
        } else {
            echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
        }
    } else {
        echo "<script>
        alert('Gagal');
        window.history.back();
    </script> 
    ";
    }
}
function ubah_pengeluaran()
{
    global $conn;

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $jumlah = $_POST['jumlah'];
    $jenis = $_POST['jenis'];
    $keterangan = $_POST['keterangan'];
    $target_dir = "../files/pengeluaran/";
    $tmpName = $_FILES["file"]["tmp_name"];
    $fileName = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    if (empty($fileName)) {
        $sql = mysqli_query($conn, "UPDATE pengeluaran SET tanggal = '$tgl', jumlah = '$jumlah', id_jenis_keuangan = '$jenis', keterangan = '$keterangan'
    WHERE id_pengeluaran = '$id'");

        if ($sql) {
            echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pengeluaran/');
            </script>
            ";
        } else {
            echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
        }
    } else {
        if (move_uploaded_file($tmpName, $target_dir . $newName)) {
            $sql = mysqli_query($conn, "UPDATE pengeluaran SET tanggal = '$tgl', jumlah = '$jumlah', id_jenis_keuangan = '$jenis', keterangan = '$keterangan', img = '$newName'
    WHERE id_pengeluaran = '$id'");

            if ($sql) {
                echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/pengeluaran/');
                </script>
                ";
            } else {
                echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
            }
        } else {
            echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
        }
    }

}
function hapus_pengeluaran()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM pengeluaran WHERE id_pengeluaran = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/pengeluaran/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function tambah_kas()
{
    global $conn;

    $tgl = $_POST['tgl'];
    $uraian = $_POST['uraian'];
    $debet = $_POST['debet'];
    $kredit = $_POST['kredit'];
    $saldo = $_POST['saldo'];

    $sql = mysqli_query($conn, "INSERT INTO kas(tanggal,uraian,debet,kredit,saldo) VALUES('$tgl','$uraian','$debet','$kredit','$saldo')");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/kas/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}
function ubah_kas()
{
    global $conn;

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $uraian = $_POST['uraian'];
    $debet = $_POST['debet'];
    $kredit = $_POST['kredit'];
    $saldo = $_POST['saldo'];

    $sql = mysqli_query($conn, "UPDATE kas SET tanggal = '$tgl',uraian = '$uraian',debet = '$debet',kredit = '$kredit',saldo = '$saldo'
    WHERE id_kas = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/kas/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}

function hapus_kas()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM kas WHERE id_kas = '$id'");

    if ($sql) {
        echo "<script>
            alert('Berhasil');
            location.replace('../admin/page/kas/');
            </script>
            ";
    } else {
        echo "<script>
            alert('Gagal');
            window.history.back();
        </script> 
        ";
    }
}

function export_kas()
{
    global $conn;

    global $pdf;
    
    $pdf=new FPDF('P','mm','A4');

    $bulan = $_POST['bulan'];

    $gbBndahara = mysqli_query($conn, "SELECT * FROM pengurus
    JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
    WHERE nama_jabatan = 'bendahara'");
    $gKetua = mysqli_query($conn, "SELECT * FROM pengurus
    JOIN jabatan_detail ON pengurus.id_jabatan_detail = jabatan_detail.id_jabatan_detail
    WHERE nama_jabatan = 'ketua'");

    $bendahara = mysqli_fetch_array($gbBndahara);
    $ketua = mysqli_fetch_array($gKetua);
    if ($bulan == 1) {
        $strMonth = 'JANUARI';
    } else if ($bulan == 2) {
        $strMonth = 'FEBRUARI';
    } else if ($bulan == 3) {
        $strMonth = 'MARET';
    } else if ($bulan == 4) {
        $strMonth = 'APRIL';
    } else if ($bulan == 5) {
        $strMonth = 'MEI';
    } else if ($bulan == 6) {
        $strMonth = 'JUNI';
    } else if ($bulan == 7) {
        $strMonth = 'JULI';
    } else if ($bulan == 8) {
        $strMonth = 'AGUSTUS';
    } else if ($bulan == 9) {
        $strMonth = 'SEPTEMBER';
    } else if ($bulan == 10) {
        $strMonth = 'Oktober';
    } else if ($bulan == 11) {
        $strMonth = 'NOVEMBER';
    } else {
        $strMonth = 'DESEMBER';
    }

    $sql = mysqli_query($conn, "SELECT * FROM kas WHERE MONTH(tanggal) = '$bulan'");

    $pdf->AddPage();
 
    $pdf->SetFont('Times','B',13);

    $pdf->Cell(190, 4, "BUKU KAS ", 0, 1, 'C');
    $pdf->Ln();
    $pdf->Cell(190, 4, "MASJID AL MUTTAQIEN PEGIRINGAN ", 0, 1, 'C');
    $pdf->Ln();
    $pdf->Cell(190, 4, "BULAN " . $strMonth . ' ' . date('Y'), 0, 1, 'C');
    $pdf->Ln();
    $pdf->Cell(10, 7, 'NO', 1, 0, 'C');
    $pdf->Cell(25, 7, 'TANGGAL', 1, 0, 'C');
    $pdf->Cell(50, 7, 'URAIAN', 1, 0, 'C');
    $pdf->Cell(35, 7, 'DEBET', 1, 0, 'C');
    $pdf->Cell(35, 7, 'KREDIT', 1, 0, 'C');
    $pdf->Cell(35, 7, 'SALDO', 1, 0, 'C');
    $pdf->Cell(10, 7, '', 0, 1);
    $no = 1;

    foreach ($sql as $key => $value) {
        $pdf->Cell(10, 6, $no++, 1, 0, 'C');
        $pdf->Cell(25, 6, $value['tanggal'], 1, 0, 'C');
        $pdf->Cell(50, 6, $value['uraian'], 1, 0, 'C');
        $pdf->Cell(35, 6, rupiah($value['debet']), 1, 0, 'C');
        $pdf->Cell(35, 6, rupiah($value['kredit']), 1, 0, 'C');
        $pdf->Cell(35, 6, rupiah($value['saldo']), 1, 1, 'C');
    }

    $pdf->Ln();
    $pdf->Ln();

    $pdf->Cell(90, 3, "", 0, 0, 'C');
    $pdf->Cell(90, 3, "Pegiringan, " . tgl_indo(date('Y-m-d')), 0, 1, 'C');

    $pdf->Cell(90, 10, "Bendahara", 0, 0, 'C');
    $pdf->Cell(90, 10, "Ketua BKM", 0, 1, 'C');
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(90, 5, $bendahara['nama_pengurus'], 0, 0, 'C');
    $pdf->Cell(90, 5, $ketua['nama_pengurus'], 0, 1, 'C');


    $pdf->Output();
}

function import_jadwal_shalat()
{
    global $conn;

    $get = mysqli_query($conn, "SELECT * FROM jadwal_sholat");
    foreach ($get as $key => $val) {
        $del = mysqli_query($conn, "DELETE FROM jadwal_sholat WHERE id_jadwal_sholat = '" . $val['id_jadwal_sholat'] . "'");
    }

    $type = explode(".", $_FILES['file']['name']);

    if (strtolower(end($type)) != 'xls') {
        ?>
        <script language="JavaScript">
            alert('Format File Salah!');
            window.history.back();
        </script>
        <?php
    } else {
        $target = basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);

        $data = new Spreadsheet_Excel_Reader($_FILES['file']['name'], false);

        $baris = $data->rowcount($sheet_index = 0);

        for ($i = 11; $i <= $baris; $i++) {
            $tgl = $data->val($i, 2);
            $imsakiyah = $data->val($i, 4);
            $subuh = $data->val($i, 5);
            $terbit = $data->val($i, 6);
            $duha = $data->val($i, 7);
            $zuhur = $data->val($i, 8);
            $ashar = $data->val($i, 9);
            $maghrib = $data->val($i, 10);
            $isya = $data->val($i, 11);

            $newDate = ltrim(strstr($tgl, ','), ',');
            $replace = str_replace('/', '-', $newDate);
            $convert = date('Y-m-d', strtotime($replace));

            $sql = mysqli_query($conn, "INSERT INTO jadwal_sholat (tanggal, imsakiyah, subuh, terbit, dzuhur, ashar, maghrib, isya) 
            VALUES ('$convert ', '$imsakiyah', '$subuh','$terbit','$zuhur', '$ashar','$maghrib','$isya')");
        }

        if ($sql) {
            echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/jadwal_shalat/');
                </script>
                ";
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
        // unlink($_FILES['file']['name']);
    }
}


function tambah_jenjang_pendidikan()
{
    global $conn;

    $jenjang = $_POST['jenjang'];

    $sql = mysqli_query($conn, "INSERT INTO jenjang_pendidikan(jenjang_pendidikan)
    VALUES('$jenjang')
    ");

    if ($sql) {
        echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/jenjang_pendidikan/');
                </script>
                ";
    } else {
        echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
    }
}
function ubah_jenjang_pendidikan()
{
    global $conn;

    $id = $_POST['id'];
    $jenjang = $_POST['jenjang'];

    $sql = mysqli_query($conn, "UPDATE jenjang_pendidikan SET jenjang_pendidikan = '$jenjang' WHERE id_jenjang_pendidikan = '$id'");

    if ($sql) {
        echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/jenjang_pendidikan/');
                </script>
                ";
    } else {
        echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
    }
}
function hapus_jenjang_pendidikan()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM jenjang_pendidikan WHERE id_jenjang_pendidikan = '$id'");

    if ($sql) {
        echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/jenjang_pendidikan/');
                </script>
                ";
    } else {
        echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
    }
}

function tambah_lembaga_pendidikan()
{
    global $conn;

    $nama_lembaga = $_POST['nama_lembaga'];
    $alamat = $_POST['alamat'];
    $jenjang = $_POST['jenjang'];

    $target_dir = "../files/lembaga/";
    $tmpName = $_FILES["img"]["tmp_name"];
    $fileName = $_FILES["img"]["name"];
    $type = $_FILES["img"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    if (move_uploaded_file($tmpName, $target_dir . $newName)) {

        $sql = mysqli_query($conn, "INSERT INTO lembaga_pendidikan(id_jenjang_pendidikan, nama_lembaga, alamat, img)
        VALUES ('$jenjang','$nama_lembaga','$alamat','$newName')
        ");

        if ($sql) {
            echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/lembaga_pendidikan/');
                </script>
                ";
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
    } else {
        echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
    }
}

function ubah_lembaga_pendidikan()
{
    global $conn;

    $id = $_POST['id'];
    $nama_lembaga = $_POST['nama_lembaga'];
    $alamat = $_POST['alamat'];
    $jenjang = $_POST['jenjang'];

    $target_dir = "../files/lembaga/";
    $tmpName = $_FILES["img"]["tmp_name"];
    $fileName = $_FILES["img"]["name"];
    $type = $_FILES["img"]["type"];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newName = md5($fileName) . "." . $extension;

    if (move_uploaded_file($tmpName, $target_dir . $newName)) {

        $sql = mysqli_query($conn, "UPDATE lembaga_pendidikan SET
        id_jenjang_pendidikan = '$jenjang',
        nama_lembaga = '$nama_lembaga',
        alamat = '$alamat',
        img = '$newName'
        WHERE id_lembaga_pendidikan = '$id'");

        if ($sql) {
            echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/lembaga_pendidikan/');
                </script>
                ";
        } else {
            echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
        }
    } else {
        echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
    }
}

function hapus_lembaga_pendidikan()
{
    global $conn;

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "DELETE FROM lembaga_pendidikan WHERE id_lembaga_pendidikan = '$id'");

    if ($sql) {
        echo "<script>
                alert('Berhasil');
                location.replace('../admin/page/lembaga_pendidikan/');
                </script>
                ";
    } else {
        echo "<script>
                alert('Gagal');
                window.history.back();
            </script> 
            ";
    }
}
?>