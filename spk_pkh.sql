-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `criteias`
--

CREATE TABLE `criteias` (
  `criteria_id` char(10) NOT NULL,
  `user_id` char(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `dibuat` timestamp NULL DEFAULT NULL,
  `diupdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteias`
--

INSERT INTO `criteias` (`criteria_id`, `user_id`, `name`, `type`, `dibuat`, `diupdate`) VALUES
('C1', 'A1', 'Penghasilan', 'Benefit', '2022-04-26 14:22:31', NULL),
('C10', 'A1', 'Jumlah Tanggungan Anak', 'Benefit', '2022-04-26 14:32:34', NULL),
('C2', 'A1', 'Luas Rumah', 'Benefit', '2022-04-26 14:32:34', NULL),
('C3', 'A1', 'Status Kepemilikan Rumah', 'Benefit', '2022-04-26 14:32:34', NULL),
('C4', 'A1', 'Sumber Air', 'Benefit', '2022-04-26 14:32:34', NULL),
('C5', 'A1', 'Ibu Hamil / Menyusui', 'Cost', '2022-04-26 14:32:34', NULL),
('C6', 'A1', 'Lansia', 'Cost', '2022-04-26 14:32:34', NULL),
('C7', 'A1', 'Jenis Dinding', 'Benefit', '2022-04-26 14:32:34', NULL),
('C8', 'A1', 'Jenis Lantai', 'Benefit', '2022-04-26 14:32:34', NULL),
('C9', 'A1', 'Jenis Atap', 'Benefit', '2022-04-26 14:32:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criterias_option`
--

CREATE TABLE `criterias_option` (
  `criteria_option_id` char(10) NOT NULL,
  `criteria_id` char(10) NOT NULL,
  `Kriteria` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `value` float NOT NULL,
  `dibuat` timestamp NULL DEFAULT current_timestamp(),
  `diupdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criterias_option`
--

INSERT INTO `criterias_option` (`criteria_option_id`, `criteria_id`, `Kriteria`, `classification`, `value`, `dibuat`, `diupdate`) VALUES
('CO1', 'C1', '>2.000.000', 'Banyak', 2.5, '2022-04-26 15:26:33', NULL),
('CO10', 'C3', 'Milik Sendiri', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO11', 'C3', 'Sewa', 'Sedang', 5, '2022-04-26 15:58:00', NULL),
('CO12', 'C3', 'Menumpang', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO13', 'C4', 'PDAM', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO14', 'C4', 'Pompa Air', 'Sedang', 5, '2022-04-26 15:58:00', NULL),
('CO15', 'C4', 'Sumur', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO16', 'C5', 'Tidak Ada', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO17', 'C5', 'Ada', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO18', 'C6', 'Tidak Ada', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO19', 'C6', 'Ada', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO2', 'C1', '1.500.000 - 2.000.000', 'Cukup', 5, '2022-04-26 15:31:07', NULL),
('CO20', 'C7', 'Tembok / Bata', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO21', 'C7', 'Papan / Kayu', 'Sedang', 5, '2022-04-26 15:58:00', NULL),
('CO22', 'C7', 'Papan / Bambu', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO23', 'C8', 'Keramik', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO24', 'C8', 'Semen', 'Sedang', 5, '2022-04-26 15:58:00', NULL),
('CO25', 'C8', 'Tanah', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO26', 'C9', 'Genteng', 'Rendah', 1, '2022-04-26 15:58:00', NULL),
('CO27', 'C9', 'Asbes / Seng', 'Sedang', 2, '2022-04-26 15:58:00', NULL),
('CO28', 'C9', 'Nipah', 'Tinggi', 3, '2022-04-26 15:58:00', NULL),
('CO29', 'C10', '>5', 'Banyak', 7.5, '2022-04-26 15:58:00', '2022-06-02 03:07:38'),
('CO3', 'C1', '0 - 1.500.000', 'Sedikit', 7.5, '2022-04-26 15:32:21', NULL),
('CO30', 'C10', '2 - 5', 'Sedang', 5, '2022-04-26 15:58:00', NULL),
('CO31', 'C10', '1', 'Sedikit', 2.5, '2022-04-26 15:58:00', NULL),
('CO32', 'C10', '0', 'Sangat Sedikit', 1, '2022-04-26 15:58:00', NULL),
('CO4', 'C2', '> 500 m2', 'Sangat Rendah', 1, '2022-04-26 15:58:00', NULL),
('CO5', 'C2', '201 - 500 m2', 'Rendah', 2.5, '2022-04-26 15:58:00', NULL),
('CO6', 'C2', '101 - 200 m2', 'Sedang', 5, '2022-04-26 15:58:00', NULL),
('CO7', 'C2', '51 - 100 m2', 'Tinggi', 7.5, '2022-04-26 15:58:00', NULL),
('CO8', 'C2', 'Sangat Tinggi', '10', 10, '2022-04-26 15:58:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_latih_c45`
--

CREATE TABLE `data_latih_c45` (
  `ID` varchar(10) NOT NULL,
  `Penghasilan` varchar(30) NOT NULL,
  `Luas_Rumah` varchar(30) NOT NULL,
  `Sts_Rumah` varchar(30) NOT NULL,
  `Sumber_air` varchar(30) NOT NULL,
  `Ibu_Hamil` varchar(10) NOT NULL,
  `Lansia` varchar(12) NOT NULL,
  `Jml_Tanggungan_Anak` varchar(50) NOT NULL,
  `Jenis_Dinding` varchar(30) NOT NULL,
  `Jenis_Lantai` varchar(30) NOT NULL,
  `Jenis_Atap` varchar(30) NOT NULL,
  `kelas_Keputusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_latih_c45`
--

INSERT INTO `data_latih_c45` (`ID`, `Penghasilan`, `Luas_Rumah`, `Sts_Rumah`, `Sumber_air`, `Ibu_Hamil`, `Lansia`, `Jml_Tanggungan_Anak`, `Jenis_Dinding`, `Jenis_Lantai`, `Jenis_Atap`, `kelas_Keputusan`) VALUES
('D1', 'Sedikit', 'Sangat Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Sangat Sedikit', 'Sedang', 'Rendah', 'Rendah', 'Layak (chair)'),
('D2', 'Sedikit', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedikit', 'Rendah', 'Sedang', 'Rendah', 'Layak (chair)'),
('D3', 'Sedikit', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedikit', 'Rendah', 'Sedang', 'Rendah', 'Layak (chair)'),
('D4', 'Sedikit', 'Tinggi', 'Tinggi', 'Sedang', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Layak (chair)'),
('D5', 'Sedikit', 'Sangat Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Layak (chair)'),
('D6', 'Sedikit', 'Sangat Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedikit', 'Rendah', 'Rendah', 'Rendah', 'Layak (tidak chair)'),
('D7', 'Sedikit', 'Sangat Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Sangat Sedikit', 'Sedang', 'Tinggi', 'Rendah', 'Layak (chair)'),
('D8', 'Sedikit', 'Sangat Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Sedang', 'Rendah', 'Layak (chair)'),
('D9', 'Cukup ', 'Sangat Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedikit', 'Rendah', 'Rendah', 'Rendah', 'Layak (chair)');

-- --------------------------------------------------------

--
-- Table structure for table `data_latih_kmeans`
--

CREATE TABLE `data_latih_kmeans` (
  `ID` varchar(10) NOT NULL,
  `Penghasilan` decimal(4,1) DEFAULT NULL,
  `Luas_Rumah` double DEFAULT NULL,
  `Sts_Rumah` double NOT NULL,
  `Sumber_air` double DEFAULT NULL,
  `Ibu_Hamil` double NOT NULL,
  `Lansia` double NOT NULL,
  `Jml_Tanggungan_Anak` double NOT NULL,
  `Jenis_Dinding` double NOT NULL,
  `Jenis_Lantai` double NOT NULL,
  `Jenis_Atap` double NOT NULL,
  `kelas_Keputusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_latih_kmeans`
--

INSERT INTO `data_latih_kmeans` (`ID`, `Penghasilan`, `Luas_Rumah`, `Sts_Rumah`, `Sumber_air`, `Ibu_Hamil`, `Lansia`, `Jml_Tanggungan_Anak`, `Jenis_Dinding`, `Jenis_Lantai`, `Jenis_Atap`, `kelas_Keputusan`) VALUES
('D1', '7.5', 10, 2.5, 2.5, 2.5, 7.5, 1, 5, 2.5, 1, '0'),
('D10', '7.5', 10, 2.5, 2.5, 2.5, 7.5, 1, 2.5, 5, 1, '0'),
('D7', '7.5', 10, 2.5, 2.5, 2.5, 7.5, 1, 5, 7.5, 1, '0'),
('D8', '7.5', 10, 2.5, 2.5, 2.5, 2.5, 5, 2.5, 5, 1, '0'),
('D9', '5.0', 10, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 1, '0'),
('D11', '7.5', 10, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 1, '1'),
('D2', '7.5', 7.5, 7.5, 2.5, 2.5, 2.5, 2.5, 2.5, 5, 1, '0'),
('D13', '7.5', 7.5, 7.5, 2.5, 2.5, 2.5, 5, 2.5, 2.5, 1, '0'),
('D12', '7.5', 7.5, 7.5, 2.5, 2.5, 2.5, 5, 2.5, 2.5, 1, '0'),
('D6', '7.5', 10, 7.5, 2.5, 2.5, 2.5, 2.5, 2.5, 2.5, 1, '1'),
('D3', '7.5', 7.5, 7.5, 2.5, 2.5, 2.5, 2.5, 2.5, 5, 1, '0'),
('D4', '7.5', 7.5, 7.5, 5, 2.5, 2.5, 5, 2.5, 2.5, 1, '0'),
('D5', '7.0', 10, 7.5, 2.5, 2.5, 2.5, 5, 2.5, 2.5, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk_value`
--

CREATE TABLE `data_penduduk_value` (
  `Data_Pendudukid` char(10) NOT NULL,
  `Alternatif_id` char(10) NOT NULL,
  `Penghasilan` int(50) NOT NULL,
  `Luas_Rumah` int(50) NOT NULL,
  `Sts_Rumah` varchar(50) NOT NULL,
  `Sumber_air` varchar(50) NOT NULL,
  `Ibu_Hamil_/_Menyusui` varchar(50) NOT NULL,
  `Lansia` varchar(50) NOT NULL,
  `Jml_Tanggungan_Anak` int(50) NOT NULL,
  `Jenis_Dinding` varchar(50) NOT NULL,
  `Jenis_Lantai` varchar(50) NOT NULL,
  `Jenis_Atap` varchar(50) NOT NULL,
  `Kelas_Keputusan` enum('Layak (chair)','Layak (tidak chairr)') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penduduk_value`
--

INSERT INTO `data_penduduk_value` (`Data_Pendudukid`, `Alternatif_id`, `Penghasilan`, `Luas_Rumah`, `Sts_Rumah`, `Sumber_air`, `Ibu_Hamil_/_Menyusui`, `Lansia`, `Jml_Tanggungan_Anak`, `Jenis_Dinding`, `Jenis_Lantai`, `Jenis_Atap`, `Kelas_Keputusan`) VALUES
('D1', 'AL1', 0, 12, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Ada', 0, 'Papan / Kayu', 'Keramik', 'Genteng', 'Layak (chair)'),
('D10', 'AL10', 0, 35, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Ada', 0, 'Tembok / Bata', 'Semen', 'Genteng', 'Layak (chair)'),
('D11', 'AL11', 1500000, 30, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Tidak Ada', 1, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (tidak chairr)'),
('D12', 'AL12', 1500000, 63, 'Menumpang', 'PDAM', 'Tidak Ada', 'Tidak Ada', 2, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (chair)'),
('D13', 'AL13', 0, 82, 'Menumpang', 'PDAM', 'Tidak Ada', 'Tidak Ada', 2, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (chair)'),
('D2', 'AL2', 1500000, 55, 'Menumpang', 'PDAM', 'Tidak Ada', 'Tidak Ada', 1, 'Tembok / Bata', 'Semen', 'Genteng', 'Layak (chair)'),
('D3', 'AL3', 1500000, 55, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Tidak Ada', 1, 'Tembok / Bata', 'Semen', 'Genteng', 'Layak (chair)'),
('D4', 'AL4', 1500000, 54, 'Menumpang', 'Pompa Air', 'Tidak Ada', 'Tidak Ada', 2, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (chair)'),
('D5', 'AL5', 1500000, 48, 'Menumpang', 'PDAM', 'Tidak Ada', 'Tidak Ada', 2, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (chair)'),
('D6', 'AL6', 0, 48, 'Menumpang', 'PDAM', 'Tidak Ada', 'Tidak Ada', 1, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (tidak chairr)'),
('D7', 'AL7', 0, 24, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Ada', 0, 'Papan / Kayu', 'Tanah', 'Genteng', 'Layak (chair)'),
('D8', 'AL8', 1500000, 48, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Tidak Ada', 2, 'Tembok / Bata', 'Semen', 'Genteng', 'Layak (chair)'),
('D9', 'AL9', 2000000, 15, 'Milik Sendiri', 'PDAM', 'Tidak Ada', 'Tidak Ada', 1, 'Tembok / Bata', 'Keramik', 'Genteng', 'Layak (chair)');

-- --------------------------------------------------------

--
-- Table structure for table `data_uji_c45`
--

CREATE TABLE `data_uji_c45` (
  `ID` varchar(10) NOT NULL,
  `Penghasilan` varchar(30) NOT NULL,
  `Luas_Rumah` varchar(30) NOT NULL,
  `Sts_Rumah` varchar(30) NOT NULL,
  `Sumber_air` varchar(30) NOT NULL,
  `Ibu_Hamil` varchar(30) NOT NULL,
  `Lansia` varchar(12) NOT NULL,
  `Jml_Tanggungan_Anak` varchar(50) NOT NULL,
  `Jenis_Dinding` varchar(30) NOT NULL,
  `Jenis_Lantai` varchar(30) NOT NULL,
  `Jenis_Atap` varchar(30) NOT NULL,
  `Kelas_Keputusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_uji_c45`
--

INSERT INTO `data_uji_c45` (`ID`, `Penghasilan`, `Luas_Rumah`, `Sts_Rumah`, `Sumber_air`, `Ibu_Hamil`, `Lansia`, `Jml_Tanggungan_Anak`, `Jenis_Dinding`, `Jenis_Lantai`, `Jenis_Atap`, `Kelas_Keputusan`) VALUES
('D10', 'Sedikit', 'Sangat Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Tinggi', 'Sangat Sedikit', 'Rendah', 'Sedang', 'Rendah', 'Layak (chair)'),
('D11', 'Sedikit', 'Sangat Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Rendah', 'Sedikit', 'Rendah', 'Rendah', 'Rendah', 'Layak (tidak chair)'),
('D12', 'Sedikit', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Layak (chair)'),
('D13', 'Sedikit', 'Tinggi', 'Tinggi', 'Rendah', 'Rendah', 'Rendah', 'Sedang', 'Rendah', 'Rendah', 'Rendah', 'Layak (chair)');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `Alternatif_id` char(10) NOT NULL,
  `user_id` char(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `diupdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`Alternatif_id`, `user_id`, `name`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`, `dibuat`, `diupdate`) VALUES
('AL1', 'A1', 'SUMIJAH', '1978-07-01', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.02 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', NULL),
('AL10', 'A1', 'RAKIJAH', '1949-07-01', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL11', 'A1', 'WATI', '1985-08-20', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL12', 'A1', 'HADI', '1982-02-13', 'Laki-Laki', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL13', 'A1', 'PRIHATI', '1986-12-01', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL2', 'A1', 'TARMIATI', '1980-05-06', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.02 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL3', 'A1', 'SAMPURIYATUN', '1978-07-20', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.02 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL4', 'A1', 'LILISWATI', '1982-09-19', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.03 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL5', 'A1', 'INDAH SETYAWATI', '1991-01-22', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.02 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL6', 'A1', 'RINI PURWATI', '1994-01-02', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.03 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL7', 'A1', 'SARPUK', '1949-10-01', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL8', 'A1', 'WIDYANINGSIH', '1985-02-07', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41'),
('AL9', 'A1', 'TUTIK', '1968-11-09', 'Perempuan', 'Ds. Semanding, Dsn. Semading Timur RT.01 / RW.05 Kec. Semanding Kab. Tuban ', '2022-04-27 14:14:31', '2022-06-11 02:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `user/admin`
--

CREATE TABLE `user/admin` (
  `user_id` char(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  `Priveleges` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user/admin`
--

INSERT INTO `user/admin` (`user_id`, `name`, `username`, `password`, `Priveleges`) VALUES
('A1', 'Admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criteias`
--
ALTER TABLE `criteias`
  ADD PRIMARY KEY (`criteria_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `criterias_option`
--
ALTER TABLE `criterias_option`
  ADD PRIMARY KEY (`criteria_option_id`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `data_latih_c45`
--
ALTER TABLE `data_latih_c45`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `data_latih_kmeans`
--
ALTER TABLE `data_latih_kmeans`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `data_penduduk_value`
--
ALTER TABLE `data_penduduk_value`
  ADD PRIMARY KEY (`Data_Pendudukid`),
  ADD KEY `Alternatif id` (`Alternatif_id`);

--
-- Indexes for table `data_uji_c45`
--
ALTER TABLE `data_uji_c45`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`Alternatif_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user/admin`
--
ALTER TABLE `user/admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `criteias`
--
ALTER TABLE `criteias`
  ADD CONSTRAINT `criteias_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user/admin` (`user_id`);

--
-- Constraints for table `criterias_option`
--
ALTER TABLE `criterias_option`
  ADD CONSTRAINT `criterias_option_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteias` (`criteria_id`);

--
-- Constraints for table `data_penduduk_value`
--
ALTER TABLE `data_penduduk_value`
  ADD CONSTRAINT `data_penduduk_value_ibfk_2` FOREIGN KEY (`Alternatif_id`) REFERENCES `penduduk` (`Alternatif_id`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user/admin` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
