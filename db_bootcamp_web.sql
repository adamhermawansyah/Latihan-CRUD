/*
 Navicat Premium Data Transfer

 Source Server         : ADAM
 Source Server Type    : MySQL
 Source Server Version : 50621
 Source Host           : localhost:3306
 Source Schema         : db_bootcamp_web

 Target Server Type    : MySQL
 Target Server Version : 50621
 File Encoding         : 65001

 Date: 20/09/2019 14:09:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_todo
-- ----------------------------
DROP TABLE IF EXISTS `t_todo`;
CREATE TABLE `t_todo`  (
  `Todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `Todo_nametask` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Todo_tanggalduedate` date NOT NULL,
  `Todo_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Todo_statustask` enum('new','progress','done','archive') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Todo_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_todo
-- ----------------------------
INSERT INTO `t_todo` VALUES (1, 'Send invoice', '2019-09-19', 'latihan', 'archive');
INSERT INTO `t_todo` VALUES (2, 'Kirim lagu', '2019-09-19', 'kirim lagu dengan email', 'progress');
INSERT INTO `t_todo` VALUES (3, 'Main Futsal', '2019-09-19', 'Main Futsal di lapangan GOR UNY', 'progress');
INSERT INTO `t_todo` VALUES (4, 'Main Sepak Bola', '2019-09-23', 'Main Sepak Bola di lapangan Camp Nou Barcelona', 'new');
INSERT INTO `t_todo` VALUES (5, 'Main Seluncur', '2019-09-20', 'Main Seluncur di gunung bersalju', 'new');
INSERT INTO `t_todo` VALUES (6, 'Bersepeda Hari Minggu', '2019-09-21', 'Bersepeda di lingkungan universitas islam indonesia yogyakarta', 'done');
INSERT INTO `t_todo` VALUES (7, 'Berenang Hari Minggu ', '2019-09-21', 'Berenang di kolam renang UNY Yogyakarta', 'done');
INSERT INTO `t_todo` VALUES (8, 'Belajar Koding', '2019-09-20', 'Belajar Koding di Erporate Solusi Global Yogyakarta', 'new');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_namalengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `User_username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `User_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `User_password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `User_nohp` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `User_captcha` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`User_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES (1, 'Adam Hermawansyah', 'adam', 'adamhermawansyah27@gmail.com', 'kuegfikjhbfdk', '081673524371265', 'bznU9yW6');
INSERT INTO `t_user` VALUES (2, 'Adam Hermawansyah', 'adamhermawansyah', 'adamhermawansyah27@gmail.com', '87d5eac6ec6bb3611b5194377c907d668b687e49', '081673524371265', '5f36EDfy');

-- ----------------------------
-- Table structure for tabel_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `tabel_karyawan`;
CREATE TABLE `tabel_karyawan`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jenis_kelamin` enum('Pria','Wanita') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jabatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `No_HP` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_karyawan
-- ----------------------------
INSERT INTO `tabel_karyawan` VALUES (1, 'Ahmad', 'Pria', 'Programmer', '085xxx', 'Jalan 1');
INSERT INTO `tabel_karyawan` VALUES (2, 'Lutfi', 'Pria', 'Analisis', '0878xxx', 'Jalan 2');
INSERT INTO `tabel_karyawan` VALUES (3, 'Sidiq', 'Pria', 'Android Dev', '0823xxx', 'Jalan 3');
INSERT INTO `tabel_karyawan` VALUES (4, 'Nadia', 'Wanita', 'Bisnis Develop', '0857xxx', 'Jalan 4');

-- ----------------------------
-- Table structure for tabel_kehadiran
-- ----------------------------
DROP TABLE IF EXISTS `tabel_kehadiran`;
CREATE TABLE `tabel_kehadiran`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_karyawan` int(11) NOT NULL,
  `Hari` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tanggal` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Jam_datang` time(0) NOT NULL,
  `Jam_pulang` time(0) NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  INDEX `tabel_kehadiran_ibfk_1`(`Id_karyawan`) USING BTREE,
  CONSTRAINT `tabel_kehadiran_ibfk_1` FOREIGN KEY (`Id_karyawan`) REFERENCES `tabel_karyawan` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_kehadiran
-- ----------------------------
INSERT INTO `tabel_kehadiran` VALUES (1, 1, 'Senin', '19 Februari 2018', '07:30:00', '16:00:00');
INSERT INTO `tabel_kehadiran` VALUES (2, 1, 'Selasa', '20 Februari 2018', '08:00:00', '16:30:00');
INSERT INTO `tabel_kehadiran` VALUES (3, 4, 'Senin', '19 Februari 2018', '07:50:00', '17:00:00');
INSERT INTO `tabel_kehadiran` VALUES (4, 2, 'Senin', '19 Februari 2018', '08:10:00', '17:30:00');

-- ----------------------------
-- View structure for v_kehadiran
-- ----------------------------
DROP VIEW IF EXISTS `v_kehadiran`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `v_kehadiran` AS SELECT
tabel_kehadiran.Id,
tabel_karyawan.Nama,
tabel_kehadiran.Hari,
tabel_kehadiran.Tanggal,
tabel_kehadiran.Jam_datang,
tabel_kehadiran.Jam_pulang,
TIMEDIFF(Jam_pulang,Jam_datang) AS Jam_Kerja
FROM
tabel_kehadiran
INNER JOIN tabel_karyawan ON tabel_kehadiran.Id_karyawan = tabel_karyawan.Id
WHERE
tabel_kehadiran.Id_karyawan = tabel_karyawan.Id
ORDER BY
tabel_kehadiran.Id ASC ; ;

SET FOREIGN_KEY_CHECKS = 1;
