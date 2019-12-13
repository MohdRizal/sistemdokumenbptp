-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2019 at 07:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusdok`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_history`
--

CREATE TABLE `access_history` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `halaman` varchar(40) NOT NULL,
  `kegiatan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_history`
--

INSERT INTO `access_history` (`id`, `username`, `halaman`, `kegiatan`, `waktu`) VALUES
(1, 17, 'beranda', 'mengunjungi halaman beranda', '2019-09-21 17:07:02'),
(2, 17, 'logout', 'logout dari sistem', '2019-09-21 17:07:10'),
(3, 17, 'beranda', 'mengunjungi halaman beranda', '2019-09-21 17:08:00'),
(4, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-09-21 17:08:03'),
(5, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-09-21 17:08:05'),
(6, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-09-21 17:08:06'),
(7, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-21 17:08:09'),
(8, 17, 'personal-document', 'membuka kotak masuk', '2019-09-21 17:08:12'),
(9, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-21 17:08:13'),
(10, 17, 'personal-document', 'melihat seluruh user', '2019-09-21 17:08:17'),
(11, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-21 17:08:27'),
(12, 17, 'beranda', 'mengunjungi halaman beranda', '2019-09-21 17:08:34'),
(13, 17, 'logout', 'logout dari sistem', '2019-09-21 17:11:33'),
(14, 17, 'beranda', 'mengunjungi halaman beranda', '2019-09-26 02:40:47'),
(15, 17, 'personal-document', 'membuka kotak masuk', '2019-09-26 02:40:56'),
(16, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-26 02:41:07'),
(17, 17, 'personal-document', 'melihat seluruh user', '2019-09-26 02:41:12'),
(18, 17, 'logout', 'logout dari sistem', '2019-09-26 02:51:13'),
(19, 17, 'beranda', 'mengunjungi halaman beranda', '2019-09-26 03:04:55'),
(20, 17, 'user', 'mengunjungi halaman user', '2019-09-26 03:04:58'),
(21, 17, 'user', 'mengunjungi halaman tambah user', '2019-09-26 03:05:00'),
(22, 17, 'user', 'mengunjungi halaman user', '2019-09-26 03:06:20'),
(23, 17, 'user', 'mengunjungi halaman update user abduljalil@pertanian.go.id', '2019-09-26 03:06:22'),
(24, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-26 03:07:00'),
(25, 17, 'bambanghm@pertanian.go.id', 'personal-document', '2019-09-26 03:07:03'),
(26, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-26 03:08:41'),
(27, 17, 'bambanghm@pertanian.go.id', 'personal-document', '2019-09-26 03:08:50'),
(28, 17, 'personal-document', 'menambah dokumen pribadi : Dokumen Pribadi Rizal hehe', '2019-09-26 03:09:06'),
(29, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-26 03:09:07'),
(30, 17, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-09-26 03:09:12'),
(31, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-26 03:10:21'),
(32, 17, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-09-26 03:10:35'),
(33, 17, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-09-26 03:10:43'),
(34, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-26 03:10:46'),
(35, 17, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-09-26 03:10:49'),
(36, 17, 'beranda', 'mengunjungi halaman beranda', '2019-09-27 02:34:56'),
(37, 17, 'personal-document', 'membuka kotak masuk', '2019-09-27 02:35:00'),
(38, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-09-27 02:35:03'),
(39, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-01 20:10:56'),
(40, 17, 'logout', 'logout dari sistem', '2019-10-01 20:20:57'),
(41, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-01 22:26:07'),
(42, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-01 22:26:12'),
(43, 17, 'logout', 'logout dari sistem', '2019-10-01 22:36:13'),
(44, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-02 00:56:29'),
(45, 17, 'personal-document', 'membuka kotak masuk', '2019-10-02 00:56:41'),
(46, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-02 00:56:44'),
(47, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-02 01:05:07'),
(48, 17, 'logout', 'logout dari sistem', '2019-10-02 01:15:07'),
(49, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-02 13:29:01'),
(50, 17, 'user', 'mengunjungi halaman user', '2019-10-02 13:29:07'),
(51, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-02 13:29:10'),
(52, 17, 'user', 'mengunjungi halaman user', '2019-10-02 13:30:50'),
(53, 17, 'user', 'mengunjungi halaman update user abduljalil@pertanian.go.id', '2019-10-02 13:30:53'),
(54, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-02 13:31:20'),
(55, 17, 'jenis dokumen', 'mengunjungi halaman tambah jenis dokumen', '2019-10-02 13:31:23'),
(56, 17, 'jenis dokumen', 'menambah jenis dokumen Proposal < 1999', '2019-10-02 13:32:03'),
(57, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-02 13:32:04'),
(58, 17, 'jenis dokumen', 'mengunjungi halaman update jenis dokumen Proposal < 1999', '2019-10-02 13:32:09'),
(59, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-02 13:32:24'),
(60, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-02 13:32:26'),
(61, 17, 'dokumen', 'mengunjungi halaman tambah dokumen Proposal < 1999', '2019-10-02 13:32:29'),
(62, 17, 'dokumen', 'menambah dokumen Proposal kerjasama BPTP dengan pemerintah Hindia Belanda', '2019-10-02 13:34:13'),
(63, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-02 13:34:13'),
(64, 17, 'dokumen', 'mengunjungi halaman update dokumen', '2019-10-02 13:34:19'),
(65, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-02 13:34:35'),
(66, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-02 13:34:37'),
(67, 17, 'foto kegiatan', 'mengunjungi halaman tambah jenis foto kegiatan', '2019-10-02 13:34:40'),
(68, 17, 'foto kegiatan', 'menambah jenis foto kegiatan', '2019-10-02 13:35:38'),
(69, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-02 13:35:38'),
(70, 17, 'foto kegiatan', 'mengunjungi halaman update jenis foto kegiatan', '2019-10-02 13:35:44'),
(71, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-02 13:36:04'),
(72, 17, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-10-02 13:36:06'),
(73, 17, 'bambanghm@pertanian.go.id', 'foto kegiatan', '2019-10-02 13:36:14'),
(74, 17, 'foto kegiatan', 'menambah foto Peresmian gedung perpustakaan BPTP Riau', '2019-10-02 13:36:48'),
(75, 17, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-10-02 13:36:48'),
(76, 17, 'foto kegiatan', 'mengunjungi halaman update foto Peresmian gedung perpustakaan BPTP Riau', '2019-10-02 13:36:55'),
(77, 17, 'personal-document', 'melihat seluruh user', '2019-10-02 13:37:22'),
(78, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-02 13:37:51'),
(79, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-02 13:38:16'),
(80, 17, 'bambanghm@pertanian.go.id', 'personal-document', '2019-10-02 13:38:21'),
(81, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-02 13:38:41'),
(82, 17, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-10-02 13:38:44'),
(83, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-02 13:39:02'),
(84, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-05 01:15:28'),
(85, 17, 'user', 'mengunjungi halaman user', '2019-10-05 01:15:35'),
(86, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 01:21:27'),
(87, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-05 01:21:32'),
(88, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-05 17:51:56'),
(89, 17, 'user', 'mengunjungi halaman user', '2019-10-05 17:52:06'),
(90, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-05 17:52:16'),
(91, 17, 'user', 'menambah user testakun@pertanian.go.id', '2019-10-05 17:52:45'),
(92, 17, 'user', 'mengunjungi halaman user', '2019-10-05 17:52:45'),
(93, 17, 'user', 'mengunjungi halaman user', '2019-10-05 17:53:12'),
(94, 17, 'user', 'mengunjungi halaman user', '2019-10-05 17:53:23'),
(95, 17, 'user', 'mengunjungi halaman update user testakun@pertanian.go.id', '2019-10-05 17:53:43'),
(96, 17, 'user', 'mengupdate user testakun_afteredit@pertanian.go.id', '2019-10-05 17:54:00'),
(97, 17, 'user', 'mengunjungi halaman user', '2019-10-05 17:54:01'),
(98, 17, 'user', 'mengunjungi halaman update user testakun_afteredit@pertanian.go.', '2019-10-05 17:54:19'),
(99, 17, 'user', 'mengunjungi halaman user', '2019-10-05 18:03:07'),
(100, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-05 18:03:09'),
(101, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-05 18:03:19'),
(102, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-05 18:03:33'),
(103, 17, 'user', 'mengunjungi halaman user', '2019-10-05 18:06:07'),
(104, 17, 'user', 'mengunjungi halaman update user abduljalil@pertanian.go.id', '2019-10-05 18:06:10'),
(105, 17, 'user', 'mengunjungi halaman user', '2019-10-05 18:06:12'),
(106, 17, 'user', 'mengunjungi halaman update user testakun_afteredit@pertanian.go.', '2019-10-05 18:06:17'),
(107, 17, 'user', 'mengunjungi halaman update user testakun_afteredit@pertanian.go.', '2019-10-05 18:06:27'),
(108, 17, 'user', 'mengunjungi halaman update user testakun_afteredit@pertanian.go.', '2019-10-05 18:07:15'),
(109, 17, 'user', 'mengupdate user testakun_afteredit@pertanian.go.id', '2019-10-05 18:07:22'),
(110, 17, 'user', 'mengunjungi halaman user', '2019-10-05 18:07:23'),
(111, 17, 'user', 'mengunjungi halaman update user testakun_afteredit@pertanian.go.id', '2019-10-05 18:07:30'),
(112, 17, 'user', 'mengupdate user testakun@pertanian.go.id', '2019-10-05 18:07:38'),
(113, 17, 'user', 'mengunjungi halaman user', '2019-10-05 18:07:38'),
(114, 17, 'logout', 'logout dari sistem', '2019-10-05 18:17:39'),
(115, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-05 18:37:15'),
(116, 17, 'user', 'mengunjungi halaman user', '2019-10-05 18:37:23'),
(117, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:38:24'),
(118, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-05 18:38:27'),
(119, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:38:31'),
(120, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-05 18:38:35'),
(121, 17, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-10-05 18:38:38'),
(122, 17, 'personal-document', 'melihat seluruh user', '2019-10-05 18:39:40'),
(123, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-05 18:39:45'),
(124, 17, 'personal-document', 'membuka kotak masuk', '2019-10-05 18:39:48'),
(125, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-05 18:39:50'),
(126, 17, 'personal-document', 'membagikan dokumen kepada 17', '2019-10-05 18:40:04'),
(127, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-05 18:40:04'),
(128, 17, 'personal-document', 'membuka kotak masuk', '2019-10-05 18:40:07'),
(129, 17, 'personal-document', 'membuka kotak masuk', '2019-10-05 18:40:11'),
(130, 17, 'personal-document', 'membuka kotak masuk', '2019-10-05 18:40:15'),
(131, 17, 'personal-document', 'membuka kotak masuk', '2019-10-05 18:40:23'),
(132, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:40:36'),
(133, 17, 'jenis dokumen', 'mengunjungi halaman tambah jenis dokumen', '2019-10-05 18:40:38'),
(134, 17, 'jenis dokumen', 'menambah jenis dokumen Jenis Dokumen Baru', '2019-10-05 18:49:13'),
(135, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:49:13'),
(136, 17, 'dokumen', 'mengunjungi halaman dokumen Jenis Dokumen Baru', '2019-10-05 18:49:16'),
(137, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:49:18'),
(138, 17, 'jenis dokumen', 'mengunjungi halaman update jenis dokumen Jenis Dokumen Baru', '2019-10-05 18:49:20'),
(139, 17, 'jenis dokumen', 'mengupdate jenis dokumen Jenis Dokumen Baru Update', '2019-10-05 18:49:23'),
(140, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:49:24'),
(141, 17, 'jenis dokumen', 'menghapus jenis dokumen Jenis Dokumen Baru Update', '2019-10-05 18:49:34'),
(142, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 18:49:34'),
(143, 17, 'logout', 'logout dari sistem', '2019-10-05 18:59:35'),
(144, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-05 23:13:25'),
(145, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-05 23:13:28'),
(146, 17, 'foto kegiatan', 'mengunjungi halaman tambah jenis foto kegiatan', '2019-10-05 23:13:46'),
(147, 17, 'logout', 'logout dari sistem', '2019-10-05 23:23:47'),
(148, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-05 23:27:04'),
(149, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-05 23:27:25'),
(150, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-05 23:27:39'),
(151, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-06 01:14:17'),
(152, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-06 01:14:21'),
(153, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:14:29'),
(154, 17, 'personal-document', 'melihat seluruh user', '2019-10-06 01:14:35'),
(155, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:14:41'),
(156, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:23:22'),
(157, 17, 'personal-document', 'membuka kotak masuk', '2019-10-06 01:25:32'),
(158, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:25:35'),
(159, 17, 'bambanghm@pertanian.go.id', 'personal-document', '2019-10-06 01:26:38'),
(160, 17, 'logout', 'logout dari sistem', '2019-10-06 01:36:40'),
(161, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-06 01:38:05'),
(162, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:38:12'),
(163, 17, 'bambanghm@pertanian.go.id', 'personal-document', '2019-10-06 01:38:14'),
(164, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:40:04'),
(165, 17, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-10-06 01:40:07'),
(166, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 01:42:59'),
(167, 17, 'logout', 'logout dari sistem', '2019-10-06 01:52:59'),
(168, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-06 14:47:58'),
(169, 17, 'logout', 'logout dari sistem', '2019-10-06 14:57:59'),
(170, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-06 14:58:10'),
(171, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-06 14:58:12'),
(172, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-06 14:58:15'),
(173, 17, 'dokumen', 'menghapus dokumen Proposal kerjasama BPTP dengan pemerintah Hindia Belanda', '2019-10-06 14:58:20'),
(174, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999', '2019-10-06 14:58:20'),
(175, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 14:58:24'),
(176, 17, 'personal-document', 'menghapus dokumen pribadi Dokumen Pribadi Rizal hehe', '2019-10-06 14:58:28'),
(177, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 14:58:28'),
(178, 17, 'personal-document', 'membuka kotak masuk', '2019-10-06 14:58:30'),
(179, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-06 14:58:35'),
(180, 17, 'personal-document', 'membuka kotak masuk', '2019-10-06 14:58:36'),
(181, 17, 'user', 'mengunjungi halaman user', '2019-10-06 15:05:41'),
(182, 17, 'logout', 'logout dari sistem', '2019-10-06 15:15:43'),
(183, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-10 22:37:54'),
(184, 17, 'user', 'mengunjungi halaman user', '2019-10-10 22:37:58'),
(185, 17, 'user', 'menghapus user testakun@pertanian.go.id', '2019-10-10 22:38:07'),
(186, 17, 'user', 'mengunjungi halaman user', '2019-10-10 22:38:07'),
(187, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-10 22:38:15'),
(188, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-10 22:41:28'),
(189, 17, 'user', 'menambah user dummy@pertanian.go.id', '2019-10-10 22:41:50'),
(190, 17, 'user', 'mengunjungi halaman user', '2019-10-10 22:41:50'),
(191, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-10 22:49:29'),
(192, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-10 22:49:41'),
(193, 17, 'user', 'mengunjungi halaman tambah user', '2019-10-10 22:50:23'),
(194, 17, 'pengaturan akun', 'membuka halaman pengaturan akun', '2019-10-10 22:58:30'),
(195, 17, 'logout', 'logout dari sistem', '2019-10-10 23:01:50'),
(214, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-10 23:22:44'),
(215, 17, 'user', 'mengunjungi halaman user', '2019-10-10 23:22:46'),
(216, 17, 'user', 'mengunjungi halaman update user dummy@pertanian.go.id', '2019-10-10 23:22:50'),
(217, 17, 'user', 'mengupdate user dummy@pertanian.go.id', '2019-10-10 23:22:55'),
(218, 17, 'user', 'mengunjungi halaman user', '2019-10-10 23:22:55'),
(219, 17, 'user', 'mengunjungi halaman user', '2019-10-10 23:23:24'),
(220, 17, 'logout', 'logout dari sistem', '2019-10-10 23:23:36'),
(279, 73, 'beranda', 'mengunjungi halaman beranda', '2019-10-10 23:39:02'),
(280, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-10 23:39:04'),
(281, 73, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-10 23:39:07'),
(282, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-10 23:39:12'),
(283, 73, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau test ganti', '2019-10-10 23:39:14'),
(284, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:39:21'),
(285, 73, 'mhd.zamil@pertanian.go.id', 'personal-document', '2019-10-10 23:39:24'),
(286, 73, 'personal-document', 'menambah dokumen pribadi : Dokumen proposal saya', '2019-10-10 23:39:52'),
(287, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:39:52'),
(288, 73, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-10-10 23:40:08'),
(289, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:40:27'),
(290, 73, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-10-10 23:40:29'),
(291, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:40:32'),
(292, 73, 'personal-document', 'mengunjungi halaman update dokumen pribadi', '2019-10-10 23:40:39'),
(293, 73, 'personal-document', 'mengupdate dokumen pribadi dengan id 1', '2019-10-10 23:40:45'),
(294, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:40:46'),
(295, 73, 'dokumen', 'mengunduh dokumen Dokumen proposal saya test ganti', '2019-10-10 23:40:53'),
(296, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:40:58'),
(297, 73, 'personal-document', 'membagikan dokumen kepada 72', '2019-10-10 23:41:20'),
(298, 73, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-10 23:41:20'),
(299, 73, 'personal-document', 'membuka kotak masuk', '2019-10-10 23:41:23'),
(300, 73, 'logout', 'logout dari sistem', '2019-10-10 23:41:29'),
(305, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-10 23:52:46'),
(306, 17, 'pengaturan akun', 'membuka halaman pengaturan akun', '2019-10-10 23:52:59'),
(307, 17, 'pengaturan akun', 'mengganti foto profil', '2019-10-10 23:54:14'),
(308, 17, 'pengaturan akun', 'membuka halaman pengaturan akun', '2019-10-10 23:54:14'),
(309, 17, 'pengaturan akun', 'membuka halaman pengaturan akun', '2019-10-10 23:54:34'),
(310, 17, 'pengaturan akun', 'mengganti password', '2019-10-10 23:54:48'),
(311, 17, 'pengaturan akun', 'membuka halaman pengaturan akun', '2019-10-10 23:54:48'),
(312, 17, 'logout', 'logout dari sistem', '2019-10-10 23:54:53'),
(313, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 06:22:24'),
(314, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 06:22:29'),
(315, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-22 06:22:32'),
(316, 17, 'dokumen', 'mengunduh dokumen Dokumen Contoh', '2019-10-22 06:22:37'),
(317, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-22 06:22:43'),
(318, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-10-22 06:22:48'),
(319, 17, 'personal-document', 'membuka kotak masuk', '2019-10-22 06:22:51'),
(320, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 06:22:54'),
(321, 17, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau test ganti', '2019-10-22 06:22:56'),
(322, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 06:23:03'),
(323, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 06:23:23'),
(324, 17, 'logout', 'logout dari sistem', '2019-10-22 06:33:24'),
(325, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 16:30:50'),
(326, 17, 'user', 'mengunjungi halaman user', '2019-10-22 16:31:46'),
(327, 17, 'logout', 'logout dari sistem', '2019-10-22 16:41:47'),
(328, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 17:41:29'),
(329, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:41:49'),
(330, 17, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 17:41:51'),
(331, 17, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau test ganti', '2019-10-22 17:43:45'),
(332, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:43:47'),
(333, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:44:34'),
(334, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:46:23'),
(335, 17, 'user', 'menghapus user dummy@pertanian.go.id', '2019-10-22 17:51:06'),
(336, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:51:07'),
(337, 17, 'user', 'mengunjungi halaman update user mhd.zamil@pertanian.go.id', '2019-10-22 17:52:47'),
(338, 17, 'user', 'mengunjungi halaman update user mhd.zamil@pertanian.go.id', '2019-10-22 17:53:48'),
(339, 17, 'user', 'mengunjungi halaman update user mhd.zamil@pertanian.go.id', '2019-10-22 17:53:52'),
(340, 17, 'user', 'mengunjungi halaman update user mhd.zamil@pertanian.go.id', '2019-10-22 17:54:27'),
(341, 17, 'user', 'mengupdate user mhd.zamil@pertanian.go.id', '2019-10-22 17:54:32'),
(342, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:54:32'),
(343, 17, 'logout', 'logout dari sistem', '2019-10-22 17:54:37'),
(344, 73, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 17:54:42'),
(345, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:54:47'),
(346, 73, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-22 17:54:50'),
(347, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:55:06'),
(348, 73, 'logout', 'logout dari sistem', '2019-10-22 17:55:08'),
(349, 73, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 17:55:14'),
(350, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:55:16'),
(351, 73, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-22 17:55:18'),
(352, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 17:55:21'),
(353, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:55:24'),
(354, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 17:55:25'),
(355, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 17:58:05'),
(356, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:58:10'),
(357, 73, 'logout', 'logout dari sistem', '2019-10-22 17:58:14'),
(358, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 17:58:21'),
(359, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:58:28'),
(360, 17, 'user', 'mengunjungi halaman update user mhd.zamil@pertanian.go.id', '2019-10-22 17:58:33'),
(361, 17, 'user', 'mengupdate user mhd.zamil@pertanian.go.id', '2019-10-22 17:58:38'),
(362, 17, 'user', 'mengunjungi halaman user', '2019-10-22 17:58:38'),
(363, 17, 'logout', 'logout dari sistem', '2019-10-22 17:58:44'),
(364, 73, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 17:58:51'),
(365, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 17:58:54'),
(366, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 17:58:55'),
(367, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 17:59:16'),
(368, 73, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau test ganti', '2019-10-22 17:59:21'),
(369, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:01:23'),
(370, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:07:50'),
(371, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:07:52'),
(372, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:07:53'),
(373, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:08:16'),
(374, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:08:39'),
(375, 73, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-22 18:08:42'),
(376, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:08:47'),
(377, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:08:50'),
(378, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:09:14'),
(379, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:09:16'),
(380, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:10:21'),
(381, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:10:24'),
(382, 73, 'logout', 'logout dari sistem', '2019-10-22 18:10:28'),
(383, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 18:10:36'),
(384, 17, 'user', 'mengunjungi halaman user', '2019-10-22 18:10:40'),
(385, 17, 'user', 'mengunjungi halaman update user mhd.zamil@pertanian.go.id', '2019-10-22 18:10:45'),
(386, 17, 'user', 'mengupdate user mhd.zamil@pertanian.go.id', '2019-10-22 18:10:49'),
(387, 17, 'user', 'mengunjungi halaman user', '2019-10-22 18:10:49'),
(388, 17, 'logout', 'logout dari sistem', '2019-10-22 18:10:53'),
(389, 73, 'beranda', 'mengunjungi halaman beranda', '2019-10-22 18:10:59'),
(390, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:11:01'),
(391, 73, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-10-22 18:11:02'),
(392, 73, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-10-22 18:11:04'),
(393, 73, 'foto kegiatan', 'mengunjungi halaman jenis foto kegiatan', '2019-10-22 18:11:06'),
(394, 73, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau test ganti', '2019-10-22 18:11:08'),
(395, 17, 'beranda', 'mengunjungi halaman beranda', '2019-10-31 18:39:42'),
(396, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:40:12'),
(397, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:40:35'),
(398, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:41:25'),
(399, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:42:01'),
(400, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:42:43'),
(401, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:43:19'),
(402, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:43:39'),
(403, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:44:10'),
(404, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:44:22'),
(405, 17, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau test ganti', '2019-10-31 18:44:26'),
(406, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:44:36'),
(407, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:44:56'),
(408, 17, 'foto kegiatan', 'mengunjungi halaman tambah daftar kegiatan', '2019-10-31 18:44:58'),
(409, 17, 'foto kegiatan', 'mengunjungi halaman tambah daftar kegiatan', '2019-10-31 18:45:13'),
(410, 17, 'foto kegiatan', 'mengunjungi halaman tambah daftar kegiatan', '2019-10-31 18:45:28'),
(411, 17, 'foto kegiatan', 'menambah daftar kegiatan', '2019-10-31 18:46:11'),
(412, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:46:11'),
(413, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:46:16'),
(414, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:46:51'),
(415, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:47:04'),
(416, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:47:13'),
(417, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:47:24'),
(418, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:47:30'),
(419, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:47:51'),
(420, 17, 'foto kegiatan', 'mengunjungi halaman tambah foto Daasdajkdksdn', '2019-10-31 18:47:54'),
(421, 17, 'foto kegiatan', 'mengunjungi halaman tambah foto Daasdajkdksdn', '2019-10-31 18:48:05'),
(422, 17, 'foto kegiatan', 'mengunjungi halaman tambah foto Daasdajkdksdn', '2019-10-31 18:48:11'),
(423, 17, 'foto kegiatan', 'mengunjungi halaman tambah foto Daasdajkdksdn', '2019-10-31 18:48:28'),
(424, 17, 'foto kegiatan', 'menambah foto Daasdajkdksdn', '2019-10-31 18:48:53'),
(425, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:48:53'),
(426, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:50:04'),
(427, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:50:20'),
(428, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:50:21'),
(429, 17, 'foto kegiatan', 'mengunjungi halaman update foto ', '2019-10-31 18:50:23'),
(430, 17, 'foto kegiatan', 'mengunjungi halaman update foto ', '2019-10-31 18:50:42'),
(431, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:51:06'),
(432, 17, 'foto kegiatan', 'mengunjungi halaman update foto ', '2019-10-31 18:51:51'),
(433, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:51:58'),
(434, 17, 'foto kegiatan', 'mengunjungi halaman update foto Daasdajkdksdn', '2019-10-31 18:52:57'),
(435, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:53:06'),
(436, 17, 'foto kegiatan', 'mengunjungi halaman update foto Daasdajkdksdn', '2019-10-31 18:53:12'),
(437, 17, 'foto kegiatan', 'mengupdate foto ', '2019-10-31 18:53:22'),
(438, 17, 'foto kegiatan', 'mengunjungi halaman foto Daasdajkdksdn', '2019-10-31 18:53:22'),
(439, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:53:29'),
(440, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:53:33'),
(441, 17, 'foto kegiatan', 'mengupdate daftar kegiatan Peresmian gedung perpustakaan BPTP Riau', '2019-10-31 18:54:03'),
(442, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:54:03'),
(443, 17, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-10-31 18:54:07'),
(444, 17, 'foto kegiatan', 'mengupdate daftar kegiatan Diancok', '2019-10-31 18:54:15'),
(445, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-10-31 18:54:15'),
(446, 17, 'foto kegiatan', 'mengunjungi halaman foto Diancok', '2019-10-31 18:54:21'),
(447, 17, 'logout', 'logout dari sistem', '2019-10-31 19:04:22'),
(448, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 12:35:46'),
(449, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 12:35:53'),
(450, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-11-01 12:36:14'),
(451, 17, 'user', 'mengunjungi halaman user', '2019-11-01 12:36:17'),
(452, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 12:36:21'),
(453, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 12:39:48'),
(454, 17, 'foto kegiatan', 'mengunjungi halaman tambah daftar kegiatan', '2019-11-01 12:40:02'),
(455, 17, 'logout', 'logout dari sistem', '2019-11-01 12:50:02'),
(456, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 13:17:45'),
(457, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 13:17:49'),
(458, 17, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-11-01 13:17:52'),
(459, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-11-01 13:17:55'),
(460, 17, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-11-01 13:24:42'),
(461, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:24:45'),
(462, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 13:29:31'),
(463, 17, 'logout', 'logout dari sistem', '2019-11-01 13:39:31'),
(464, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 13:40:40'),
(465, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:40:49'),
(466, 17, 'user', 'mengunjungi halaman tambah user', '2019-11-01 13:44:34'),
(467, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:45:29'),
(468, 17, 'user', 'mengunjungi halaman update user abduljalil@pertanian.go.id', '2019-11-01 13:45:32'),
(469, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:46:08'),
(470, 17, 'user', 'mengunjungi halaman update user abduljalil@pertanian.go.id', '2019-11-01 13:46:14'),
(471, 17, 'user', 'mengupdate user abduljalil@pertanian.go.id', '2019-11-01 13:46:28'),
(472, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:46:29'),
(473, 17, 'user', 'mengunjungi halaman update user achmadsaiful@pertanian.go.id', '2019-11-01 13:46:31'),
(474, 17, 'user', 'mengupdate user achmadsaiful@pertanian.go.id', '2019-11-01 13:46:44'),
(475, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:46:45'),
(476, 17, 'logout', 'logout dari sistem', '2019-11-01 13:46:57'),
(477, 6, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 13:47:02'),
(478, 6, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-11-01 13:47:07'),
(479, 6, 'jenis dokumen', 'mengunjungi halaman tambah jenis dokumen', '2019-11-01 13:47:45'),
(480, 6, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-11-01 13:49:31'),
(481, 6, 'jenis dokumen', 'mengunjungi halaman update jenis dokumen Proposal < 1999 asdf', '2019-11-01 13:49:34'),
(482, 6, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-11-01 13:50:14'),
(483, 6, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-11-01 13:50:16'),
(484, 6, 'dokumen', 'mengunjungi halaman tambah dokumen Proposal < 1999 asdf', '2019-11-01 13:51:00'),
(485, 6, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-11-01 13:52:10'),
(486, 6, 'dokumen', 'mengunjungi halaman update dokumen', '2019-11-01 13:52:13'),
(487, 6, 'dokumen', 'mengunjungi halaman dokumen Proposal < 1999 asdf', '2019-11-01 13:54:00'),
(488, 6, 'logout', 'logout dari sistem', '2019-11-01 13:54:03'),
(489, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 13:54:10'),
(490, 17, 'user', 'mengunjungi halaman user', '2019-11-01 13:54:12'),
(491, 17, 'logout', 'logout dari sistem', '2019-11-01 13:54:25'),
(492, 5, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 13:54:30'),
(493, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 13:54:34'),
(494, 5, 'jenis dokumen', 'mengunjungi halaman jenis dokumen', '2019-11-01 13:54:35'),
(495, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 13:54:37'),
(496, 5, 'foto kegiatan', 'mengunjungi halaman foto Diancok', '2019-11-01 13:54:45'),
(497, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 13:55:00'),
(498, 5, 'foto kegiatan', 'menghapus jenis foto kegiatan ', '2019-11-01 13:55:35'),
(499, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 13:55:35'),
(500, 5, 'foto kegiatan', 'mengunjungi halaman tambah daftar kegiatan', '2019-11-01 13:58:17'),
(501, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 13:59:24'),
(502, 5, 'foto kegiatan', 'mengunjungi halaman update daftar kegiatan', '2019-11-01 13:59:27'),
(503, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-01 14:00:06'),
(504, 5, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-01 14:00:09'),
(505, 5, 'foto kegiatan', 'mengunjungi halaman tambah foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-01 14:00:46'),
(506, 5, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-01 14:01:22'),
(507, 5, 'foto kegiatan', 'mengunjungi halaman update foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-01 14:01:26'),
(508, 5, 'logout', 'logout dari sistem', '2019-11-01 14:02:05'),
(509, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 14:02:11'),
(510, 17, 'personal-document', 'melihat seluruh user', '2019-11-01 14:02:18'),
(511, 17, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-11-01 14:03:17'),
(512, 17, 'user', 'mengunjungi halaman user', '2019-11-01 14:04:05'),
(513, 17, 'logout', 'logout dari sistem', '2019-11-01 14:04:17'),
(514, 7, 'beranda', 'mengunjungi halaman beranda', '2019-11-01 14:04:24'),
(515, 7, 'personal-document', 'mengakses halaman dokumen pribadi', '2019-11-01 14:04:27'),
(516, 7, 'logout', 'logout dari sistem', '2019-11-01 14:05:38'),
(517, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-05 14:14:16'),
(518, 17, 'logout', 'logout dari sistem', '2019-11-05 14:24:18'),
(519, 17, 'beranda', 'mengunjungi halaman beranda', '2019-11-05 15:23:43'),
(520, 17, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-05 15:23:46'),
(521, 17, 'user', 'mengunjungi halaman user', '2019-11-05 15:23:50'),
(522, 17, 'logout', 'logout dari sistem', '2019-11-05 15:24:04'),
(523, 5, 'beranda', 'mengunjungi halaman beranda', '2019-11-05 15:24:12'),
(524, 5, 'foto kegiatan', 'mengunjungi halaman daftar kegiatan', '2019-11-05 15:24:15'),
(525, 5, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-05 15:24:19'),
(526, 5, 'foto kegiatan', 'mengunjungi halaman tambah foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-05 15:26:11'),
(527, 5, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-05 15:26:49'),
(528, 5, 'foto kegiatan', 'mengunjungi halaman foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-05 15:26:49'),
(529, 5, 'foto kegiatan', 'mengunjungi halaman update foto Peresmian gedung perpustakaan BPTP Riau', '2019-11-05 15:26:54'),
(530, 5, 'logout', 'logout dari sistem', '2019-11-05 15:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `bagikan_dokumen`
--

CREATE TABLE `bagikan_dokumen` (
  `id` int(11) NOT NULL,
  `user_asal` int(11) NOT NULL,
  `user_tujuan` int(11) NOT NULL,
  `dokumen_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `pesan` text,
  `is_read` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kegiatan`
--

CREATE TABLE `daftar_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_kegiatan`
--

INSERT INTO `daftar_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal_kegiatan`, `keterangan`) VALUES
(1, 'Peresmian gedung perpustakaan BPTP Riau', '2019-10-01', 'Acara berlangsung khidmat');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `lokasi` text NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `tahun_dokumen` year(4) DEFAULT NULL,
  `id_jenis_dokumen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `judul`, `ringkasan`, `lokasi`, `tanggal_upload`, `tahun_dokumen`, `id_jenis_dokumen`) VALUES
(1, 'Dokumen Contoh', 'Dokumen perencanaan contoh 2012', '876bff7394c18deab89f5a9a112671d6.pdf', '2019-10-10 23:31:26', 2012, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_user`
--

CREATE TABLE `dokumen_user` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_user`
--

INSERT INTO `dokumen_user` (`id`, `judul`, `lokasi`, `tanggal_upload`, `id_user`) VALUES
(1, 'Dokumen proposal saya test ganti', '9a97907bc52bedb84da698ddae2d421a.pdf', '2019-10-10 23:39:52', 73);

-- --------------------------------------------------------

--
-- Table structure for table `foto_kegiatan`
--

CREATE TABLE `foto_kegiatan` (
  `id_foto_kegiatan` int(11) NOT NULL,
  `waktu_upload` datetime NOT NULL,
  `lokasi` text NOT NULL,
  `caption` text NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_kegiatan`
--

INSERT INTO `foto_kegiatan` (`id_foto_kegiatan`, `waktu_upload`, `lokasi`, `caption`, `id_kegiatan`) VALUES
(1, '2019-10-02 13:36:47', '82ad696f10dfc07fb3d5e79d9f34dc87.jpg', 'asdasdasdas pananakdaskdnaskdnad', 1),
(2, '2019-10-02 13:36:47', '8e24672e914fac5bf13b224d39617694.jpg', 'mak mil', 1),
(3, '2019-10-02 13:36:48', 'b3a0567c9c6ff4f56bf6f512489175e4.jpg', 'ini lho fotonya', 1),
(4, '2019-10-02 13:36:48', 'c4c5380c9193570eb5178a8d86e19d20.png', 'ini lho fotonya', 1),
(5, '2019-10-02 13:36:48', '32991c6be1287b998354260da7ba7968.jpg', 'ini lho fotonya', 1),
(6, '2019-10-02 13:36:48', '8ba049162ea7decd5dfef56a69bd2b28.jpg', 'ini lho fotonya', 1),
(7, '2019-10-02 13:36:48', 'bb7c9cfd1154ee8e5ef14cc97a770b66.jpg', 'ini lho fotonya', 1),
(8, '2019-10-10 23:33:20', 'c471d3d17c800b6fa1909178a3aa6ea9.jpg', 'asdasdasdas', 1),
(9, '2019-10-10 23:33:20', '4972068de086c6f8ae833cf48af84786.jpg', 'asdasdasdas', 1),
(11, '2019-10-10 23:33:20', '4b8ab74884b209d65cd0a15f098c14fd.jpg', 'asdasdasdas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id_jenis_dokumen` int(11) NOT NULL,
  `jenis_dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_dokumen`
--

INSERT INTO `jenis_dokumen` (`id_jenis_dokumen`, `jenis_dokumen`) VALUES
(1, 'Proposal < 1999 asdf');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `waktu_login` datetime NOT NULL,
  `ip_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `username`, `waktu_login`, `ip_address`) VALUES
(1, 17, '2019-09-21 17:07:01', '::1'),
(2, 17, '2019-09-21 17:08:00', '::1'),
(3, 17, '2019-09-26 02:40:46', '::1'),
(4, 17, '2019-09-26 03:04:55', '::1'),
(5, 17, '2019-09-27 02:34:56', '::1'),
(6, 17, '2019-10-01 20:10:55', '::1'),
(7, 17, '2019-10-01 22:26:07', '::1'),
(8, 17, '2019-10-02 00:56:29', '::1'),
(9, 17, '2019-10-02 13:29:01', '::1'),
(10, 17, '2019-10-05 01:15:28', '::1'),
(11, 17, '2019-10-05 17:51:56', '::1'),
(12, 17, '2019-10-05 18:37:15', '::1'),
(13, 17, '2019-10-05 23:13:25', '::1'),
(14, 17, '2019-10-05 23:27:04', '::1'),
(15, 17, '2019-10-06 01:38:05', '::1'),
(16, 17, '2019-10-06 14:47:58', '::1'),
(17, 17, '2019-10-06 14:58:09', '::1'),
(18, 17, '2019-10-10 22:37:54', '::1'),
(22, 17, '2019-10-10 23:22:44', '::1'),
(24, 73, '2019-10-10 23:39:02', '::1'),
(26, 17, '2019-10-10 23:52:46', '::1'),
(27, 17, '2019-10-22 06:22:23', '::1'),
(28, 17, '2019-10-22 16:30:49', '::1'),
(29, 17, '2019-10-22 17:41:29', '::1'),
(30, 73, '2019-10-22 17:54:42', '::1'),
(31, 73, '2019-10-22 17:55:14', '::1'),
(32, 17, '2019-10-22 17:58:21', '::1'),
(33, 73, '2019-10-22 17:58:51', '::1'),
(34, 17, '2019-10-22 18:10:35', '::1'),
(35, 73, '2019-10-22 18:10:58', '::1'),
(36, 17, '2019-10-31 18:39:42', '::1'),
(37, 17, '2019-11-01 12:35:46', '::1'),
(38, 17, '2019-11-01 12:35:46', '::1'),
(39, 17, '2019-11-01 13:17:45', '::1'),
(40, 17, '2019-11-01 13:40:40', '::1'),
(41, 6, '2019-11-01 13:47:02', '::1'),
(42, 17, '2019-11-01 13:54:09', '::1'),
(43, 5, '2019-11-01 13:54:29', '::1'),
(44, 17, '2019-11-01 14:02:11', '::1'),
(45, 7, '2019-11-01 14:04:23', '::1'),
(46, 17, '2019-11-05 14:14:16', '::1'),
(47, 17, '2019-11-05 15:23:43', '::1'),
(48, 5, '2019-11-05 15:24:12', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `role` enum('0','1','2','3') NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `password`, `last_login`, `role`, `foto`) VALUES
(5, 'abduljalil@pertanian.go.id', 'Abdul Jalil', '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', '2019-11-05 15:24:12', '2', NULL),
(6, 'achmadsaiful@pertanian.go.id', 'Achmad Saiful', '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', '2019-11-01 13:47:02', '1', NULL),
(7, 'adeyulfida@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', '2019-11-01 14:04:23', '3', NULL),
(8, 'agussalim70@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(9, 'agustin@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(10, 'ahmadali@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(11, 'ahmadkudri@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(12, 'ahmadnirwan@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(13, 'anisfahri@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(14, 'anitasofia@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(15, 'asril65@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(16, 'bahari@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(17, 'bambanghm@pertanian.go.id', NULL, '$2y$10$QiE0KNlCR.o3fDmvrOxR9ODWLzMk4sE6ZpuRWe9XCHYthUy6bIaMq', '2019-11-05 15:23:43', '0', 'a0d25d138086fc4936a3a06c868caf0e.jpg'),
(18, 'bidawati@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(19, 'citraindra@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(20, 'dianpratama@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(21, 'dwisisriyenni@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(22, 'dwisuprihatin@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(23, 'efendisiregar@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(24, 'ekanofriandeni@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(25, 'eldaeka@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(26, 'elfiani@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(27, 'eliartati@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(28, 'emisari@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(29, 'empersi@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(30, 'evadesmalia@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(31, 'fahroji@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(32, 'ginosimilly@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(33, 'Haryanto74@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(34, 'herywidyanto82@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(35, 'idanur@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(36, 'indrayati68@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(37, 'irfan@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(38, 'jakoni@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(39, 'jokosuranto@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(40, 'mardawilis@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(41, 'maripul@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(42, 'marsid@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(43, 'mipalinda@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(44, 'mochfadilah@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(45, 'muhammad61@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(46, 'nasrijoni@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(47, 'nurhayati74@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(48, 'oniekalinda@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(49, 'parlinhalomoan@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(50, 'rachmawati71@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(51, 'rahmadianis@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(52, 'ramsiam@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(53, 'rathi@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(54, 'reniastarina@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(55, 'renigemala@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(56, 'rizqisari@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(57, 'rustam69@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(58, 'saipulhamdan@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(59, 'Srswastika@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(60, 'suhendrisaputra@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(61, 'syafril@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(62, 'Syafrizal75@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(63, 'syuryati@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(64, 'taufikhidayat69@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(65, 'umar@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(66, 'usman@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(67, 'vionazulfia@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(68, 'windasyafitri@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(69, 'yogosumitro@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(70, 'yunizar@pertanian.go.id', NULL, '$2y$12$yXJ5X8yDrTeB1Igb2hkxK.CkM1Qgt.soREHLhQOEe83xGB0baw1.C', NULL, '3', NULL),
(73, 'mhd.zamil@pertanian.go.id', 'Muhammad Zamil', '$2y$10$A87Phd52CQTqDKpFsPm4Mu5wueEwbxMiXx99OJG4c4t5HqYkBpZm2', '2019-10-22 18:10:58', '2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_history`
--
ALTER TABLE `access_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usr1` (`username`);

--
-- Indexes for table `bagikan_dokumen`
--
ALTER TABLE `bagikan_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_asal` (`user_asal`),
  ADD KEY `fk_tujuan` (`user_tujuan`),
  ADD KEY `fk_dokumen` (`dokumen_id`);

--
-- Indexes for table `daftar_kegiatan`
--
ALTER TABLE `daftar_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_jenis_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `fk_jenis_dok` (`id_jenis_dokumen`);

--
-- Indexes for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  ADD PRIMARY KEY (`id_foto_kegiatan`),
  ADD KEY `fk_kegiatan` (`id_kegiatan`) USING BTREE;

--
-- Indexes for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id_jenis_dokumen`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usr` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `uname` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_history`
--
ALTER TABLE `access_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT for table `bagikan_dokumen`
--
ALTER TABLE `bagikan_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_kegiatan`
--
ALTER TABLE `daftar_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  MODIFY `id_foto_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_jenis_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_history`
--
ALTER TABLE `access_history`
  ADD CONSTRAINT `fk_usr1` FOREIGN KEY (`username`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bagikan_dokumen`
--
ALTER TABLE `bagikan_dokumen`
  ADD CONSTRAINT `fk_asal` FOREIGN KEY (`user_asal`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dokumen` FOREIGN KEY (`dokumen_id`) REFERENCES `dokumen_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tujuan` FOREIGN KEY (`user_tujuan`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_jenis_dok` FOREIGN KEY (`id_jenis_dokumen`) REFERENCES `jenis_dokumen` (`id_jenis_dokumen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen_user`
--
ALTER TABLE `dokumen_user`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  ADD CONSTRAINT `fk_jenis_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `daftar_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `fk_usr` FOREIGN KEY (`username`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
