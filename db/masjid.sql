/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : skripsi_1803040004

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 11/06/2023 23:25:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_berita` int(11) NULL DEFAULT NULL,
  `tanggal_upload` date NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_berita`) USING BTREE,
  INDEX `kategori_berita`(`id_kategori_berita`) USING BTREE,
  CONSTRAINT `kategori_berita` FOREIGN KEY (`id_kategori_berita`) REFERENCES `kategori_berita` (`id_kategori_berita`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for inventaris
-- ----------------------------
DROP TABLE IF EXISTS `inventaris`;
CREATE TABLE `inventaris`  (
  `id_inventaris` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_barang` int(11) NULL DEFAULT NULL,
  `id_kondisi_barang` int(11) NULL DEFAULT NULL,
  `nama_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_inventaris`) USING BTREE,
  INDEX `jenis_barang`(`id_jenis_barang`) USING BTREE,
  INDEX `kondisi_barang`(`id_kondisi_barang`) USING BTREE,
  CONSTRAINT `jenis_barang` FOREIGN KEY (`id_jenis_barang`) REFERENCES `jenis_barang` (`id_jenis_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kondisi_barang` FOREIGN KEY (`id_kondisi_barang`) REFERENCES `kondisi_barang` (`id_kondisi_barang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inventaris
-- ----------------------------
INSERT INTO `inventaris` VALUES (1, 3, 2, 'Barang 1', '12', '09dd8c2662b96ce14928333f055c5580.png');

-- ----------------------------
-- Table structure for jabatan_detail
-- ----------------------------
DROP TABLE IF EXISTS `jabatan_detail`;
CREATE TABLE `jabatan_detail`  (
  `id_jabatan_detail` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jabatan_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for jadwal_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_kegiatan`;
CREATE TABLE `jadwal_kegiatan`  (
  `id_jadwal_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `narasumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `waktu` time(0) NULL DEFAULT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penanggung jawab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_kegiatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for jadwal_khatib
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_khatib`;
CREATE TABLE `jadwal_khatib`  (
  `id_jadwal_khatib` int(11) NOT NULL AUTO_INCREMENT,
  `id_tugas` int(11) NULL DEFAULT NULL,
  `khatib` int(11) NULL DEFAULT NULL,
  `muadzin` int(11) NULL DEFAULT NULL,
  `imam` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_khatib`) USING BTREE,
  INDEX `tugas`(`id_tugas`) USING BTREE,
  INDEX `khatib`(`khatib`) USING BTREE,
  INDEX `muadzin`(`muadzin`) USING BTREE,
  INDEX `imam`(`imam`) USING BTREE,
  CONSTRAINT `imam` FOREIGN KEY (`imam`) REFERENCES `pengisi_khatib` (`id_pengisi_khatib`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `khatib` FOREIGN KEY (`khatib`) REFERENCES `pengisi_khatib` (`id_pengisi_khatib`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `muadzin` FOREIGN KEY (`muadzin`) REFERENCES `pengisi_khatib` (`id_pengisi_khatib`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tugas` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for jadwal_sholat
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_sholat`;
CREATE TABLE `jadwal_sholat`  (
  `id_jadwal_sholat` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `imsakiyah` time(0) NULL DEFAULT NULL,
  `subuh` time(0) NULL DEFAULT NULL,
  `terbit` time(0) NULL DEFAULT NULL,
  `dzuhur` time(0) NULL DEFAULT NULL,
  `ashar` time(0) NULL DEFAULT NULL,
  `maghrib` time(0) NULL DEFAULT NULL,
  `isya` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_sholat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for jenis_barang
-- ----------------------------
DROP TABLE IF EXISTS `jenis_barang`;
CREATE TABLE `jenis_barang`  (
  `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_barang
-- ----------------------------
INSERT INTO `jenis_barang` VALUES (3, 'Jenis Barang 1');

-- ----------------------------
-- Table structure for jenis_keuangan
-- ----------------------------
DROP TABLE IF EXISTS `jenis_keuangan`;
CREATE TABLE `jenis_keuangan`  (
  `id_jenis_keuangan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_keuangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_keuangan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for kas
-- ----------------------------
DROP TABLE IF EXISTS `kas`;
CREATE TABLE `kas`  (
  `id_kas` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `uraian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `debet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kredit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saldo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for kategori_berita
-- ----------------------------
DROP TABLE IF EXISTS `kategori_berita`;
CREATE TABLE `kategori_berita`  (
  `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_berita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori_berita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori_berita
-- ----------------------------
INSERT INTO `kategori_berita` VALUES (4, 'COntoh Kategori');
INSERT INTO `kategori_berita` VALUES (5, 'Kategori 2');

-- ----------------------------
-- Table structure for kondisi_barang
-- ----------------------------
DROP TABLE IF EXISTS `kondisi_barang`;
CREATE TABLE `kondisi_barang`  (
  `id_kondisi_barang` int(11) NOT NULL AUTO_INCREMENT,
  `kondisi_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kondisi_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kondisi_barang
-- ----------------------------
INSERT INTO `kondisi_barang` VALUES (2, 'Kondisi Barang 1');

-- ----------------------------
-- Table structure for pemasukan
-- ----------------------------
DROP TABLE IF EXISTS `pemasukan`;
CREATE TABLE `pemasukan`  (
  `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_keuangan` int(11) NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemasukan`) USING BTREE,
  INDEX `jenis_keuangan`(`id_jenis_keuangan`) USING BTREE,
  CONSTRAINT `jenis_keuangan` FOREIGN KEY (`id_jenis_keuangan`) REFERENCES `jenis_keuangan` (`id_jenis_keuangan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `pengeluaran`;
CREATE TABLE `pengeluaran`  (
  `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_keuangan` int(11) NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengeluaran`) USING BTREE,
  INDEX `pengeluaran_jenis_keuangan`(`id_jenis_keuangan`) USING BTREE,
  CONSTRAINT `pengeluaran_jenis_keuangan` FOREIGN KEY (`id_jenis_keuangan`) REFERENCES `jenis_keuangan` (`id_jenis_keuangan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pengisi_khatib
-- ----------------------------
DROP TABLE IF EXISTS `pengisi_khatib`;
CREATE TABLE `pengisi_khatib`  (
  `id_pengisi_khatib` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengisi_khatib`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pengurus
-- ----------------------------
DROP TABLE IF EXISTS `pengurus`;
CREATE TABLE `pengurus`  (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan_detail` int(11) NULL DEFAULT NULL,
  `nama_pengurus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengurus`) USING BTREE,
  INDEX `jabatan`(`id_jabatan_detail`) USING BTREE,
  CONSTRAINT `jabatan` FOREIGN KEY (`id_jabatan_detail`) REFERENCES `jabatan_detail` (`id_jabatan_detail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for petugas_jumat
-- ----------------------------
DROP TABLE IF EXISTS `petugas_jumat`;
CREATE TABLE `petugas_jumat`  (
  `id_petugas_jumat` int(11) NOT NULL,
  `id_petugas_jumat_detail` int(11) NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_petugas_jumat`) USING BTREE,
  INDEX `petugas_jumat`(`id_petugas_jumat_detail`) USING BTREE,
  CONSTRAINT `petugas_jumat` FOREIGN KEY (`id_petugas_jumat_detail`) REFERENCES `petugas_jumat_detail` (`id_petugas_jumat_detail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for petugas_jumat_detail
-- ----------------------------
DROP TABLE IF EXISTS `petugas_jumat_detail`;
CREATE TABLE `petugas_jumat_detail`  (
  `id_petugas_jumat_detail` int(11) NOT NULL,
  `nama_petugas_jumat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_petugas_jumat_detail`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for profil
-- ----------------------------
DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil`  (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_masjid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tentang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_profil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profil
-- ----------------------------
INSERT INTO `profil` VALUES (1, 'Al-Muttaqien', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula nec sapien at rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla nec turpis nisi. Fusce a congue lectus, sed interdum mauris. Phasel', 'Jl. Raya Pemalang-Purbalingga, Dusun V, Desa Pegiringan, Bantarbolang, Pemalang, Jawa Tengah', '628123123123', 'almuttaqie@gmail.com', '1', '1');

-- ----------------------------
-- Table structure for tugas
-- ----------------------------
DROP TABLE IF EXISTS `tugas`;
CREATE TABLE `tugas`  (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tugas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for visi_misi
-- ----------------------------
DROP TABLE IF EXISTS `visi_misi`;
CREATE TABLE `visi_misi`  (
  `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT,
  `visi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_visi_misi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
