-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 08:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spsmsk`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `kode` varchar(10) NOT NULL,
  `nomor_surat` text NOT NULL,
  `tanggal_surat` text NOT NULL,
  `tujuan_surat` text NOT NULL,
  `perihal` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `seksi` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `petugas_seksi` varchar(50) NOT NULL,
  `petugas_tu` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `file_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`kode`, `nomor_surat`, `tanggal_surat`, `tujuan_surat`, `perihal`, `keterangan`, `status`, `seksi`, `tanggal`, `waktu`, `tahun`, `petugas_seksi`, `petugas_tu`, `catatan`, `file_surat`) VALUES
('96LS9M5AOL', 'B-871/Kk.06.05.01/TL.00/07/2019', 'Palembang, 29 Juli 2019', 'Universitas Sriwijaya', 'Izin Kerja Praktik', '', 'Telah Selesai', 'TU Umum', '2019-08-01', '', '', 'Erma Fitriyani, S.I.P.', 'Riki Unika Dongoran, S.SI', 'Disetujui', ''),
('9I4GBA6VJM', '1788/Kk.06.05.01/HM.01/07/2019', 'Palembang, 29 Juli 2019', 'Kasubag TU, Kasi, Penyelenggara Syariah, Pengawas dan Kapokjawas, Ka. KUA, Penghulu, Penyuluh dan Staf, Ka. MAN, MTsN, dan MIN, Karyawan/ti', 'Undangan Upacara Bulanan', 'Arsip', 'Belum Selesai', 'Kasubag TU', '2019-07-30', '', '2019', 'Rini', 'Erma Fitriyani, S.I.', 'Pakaian Kopri Lengkap', 'USECASE_SURAT_MASUK1.pdf'),
('CACT2RLF9U', 'B-916/Kk.06.05.01/TL.00/07/2019', 'Palembang, 17 Juli 2019', 'Ketua Umum LPPD Prov Sumatera Selatan', 'Permohonan Mengikuti Rakernas', 'Arsip, Kepala', 'Telah Selesai', 'Kepala', '2019-07-17', '', '2019', 'Deni Priansyah', 'Erma Fitriyani, S.I.', '', ''),
('S4Z2SEFCAQ', '1617/Kk.06.05.01/HM.01/07/2019', 'Palembang, 08 Juli 2019', 'Seluruh KUA Kecamatan Se - Kota Palembang', 'Intsruksi Menghadiri Pelantikan', 'Arsip ', 'Telah Selesai', 'Kepala', '2019-07-08', '', '2019', 'Rini', 'Erma Fitriyani, S.I.', '', ''),
('ST7DTVKKD3', '', 'rrr', 'rrr', 'rr', '', 'Dalam Proses', 'TU Kepegawaian', '2019-08-03', '', '', '', 'Erma Fitriyani, S.I.P.', 'rr', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `kode` varchar(10) NOT NULL,
  `nomor_surat` text NOT NULL,
  `tanggal_surat` text NOT NULL,
  `asal_surat` text NOT NULL,
  `perihal` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `diteruskan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `petugas_ptsp` varchar(50) NOT NULL,
  `petugas_tu` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  `file_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`kode`, `nomor_surat`, `tanggal_surat`, `asal_surat`, `perihal`, `keterangan`, `status`, `diteruskan`, `tanggal`, `waktu`, `tahun`, `penerima`, `petugas_ptsp`, `petugas_tu`, `catatan`, `file_surat`) VALUES
('16ZWXPNHBH', '', 'xx', 'xx', 'xxxx', '', 'Belum Selesai', '', '2019-08-05', '', '2019', '', 'Yosi Samiarce, S.I.Kom.', '', '', ''),
('4EJWLGRA5L', '1787/Kk.06.05.01/HM.01/07/2019', 'Palembang, 20 Juli 2019', 'Protokol ', 'Instruksi DWP Tentang Senam Sehat', 'Arsip,Kepala', 'Telah Selesai', 'Pengawas', '2019-07-29', '05:52', '', 'Erma Fitriyani', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', 'Silahkan Disebarkan', 'USECASE_SURAT_MASUK.pdf'),
('4JRWMOANVC', 'B-870/Kk.06.05.01/TL.00/07/2019', 'Palembang, 05 Juli 2019', 'Universitas Sriwijaya', 'Izin Kerja Praktik', '', 'Telah Selesai', 'TU Umum', '2019-07-09', '05:36', '', 'Erma Fitriyani', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', 'Disetujui', ''),
('B939YAAUPJ', '1788/kk.06.05.01/HM.01/07/2019', 'Palembang, 29 Juli 2019', 'Kankemenag Kota Palembang', 'undangan upacara bulanan', 'tu', 'Telah Selesai', 'TU Umum', '2019-07-30', '06:05', '', 'Erma Fitriyani', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', 'diinformasikan ke semua seksi', ''),
('DTD2T1FAWQ', 'B-1599/KW.06.1/5/KS.01.1/07/2019', '31 Juli 2019', 'Kanwil Kemenag Provinsi Sumatera Selatan', 'Panggilan Peserta Workshop Tata Kelola BMN Tahun 2019', '', 'Telah Selesai', 'Kepala', '2019-08-01', '11:03', '', 'Erma', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', '', ''),
('FKYHT94XAZ', '', 'Palembang, 05 Juli 2019', 'x', 'x', '', 'Telah Selesai', 'Pengawas', '2019-08-05', '02:45', '', 'ssssss', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', 'ddd', ''),
('P9FKL4YNQO', '1', '1', '1', '1', '', 'Dalam Proses', 'PAIS', '2019-09-06', '', '', '', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', '', '4658-12866-1-SM.pdf'),
('RAIC3E6VJW', 'gg', 'g', 'gg', 'g', '', 'Dalam Proses', 'Kasubag TU', '2019-09-01', '', '', '', 'Yosi Samiarce, S.I.Kom.', 'Erma Fitriyani, S.I.P.', '', ''),
('XEL9G17H45', '1579/Kw.06.4.2/4/PP.00/07/2019', 'Palembang, 31 Juli 2019', 'Kanwil Kemenag Provinsi Sumatera Selatan', 'Panggilan Peserta KSM Tingkat Provinsi', '', 'Dalam Proses', '-', '2019-08-01', '', '', '', 'Yosi Samiarce, S.I.Kom.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `username`, `password`, `nama`, `pic`) VALUES
(7, 'kemenagplg1', '123', 'Riki Unika Dongoran, S.SI', 'Administrator Utama'),
(8, 'ptsp1', '123', 'Yosi Samiarce, S.I.Kom.', 'Administrator PTSP'),
(9, 'tu1', '123', 'Erma Fitriyani, S.I.P.', 'Administrator TU'),
(10, 'kemenagplg2', '123', 'Tara Zadlyka', 'Administrator Utama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
