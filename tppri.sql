-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 05.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tppri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `group_kamar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `kapasitas`, `group_kamar`) VALUES
(1, 'ICU 1', 1, 'ICU'),
(2, 'ICU 2', 1, 'ICU'),
(3, 'ICU 3', 1, 'ICU'),
(4, 'ICU 4', 1, 'ICU'),
(5, 'ICU 5', 1, 'ICU'),
(6, 'ICU 6', 1, 'ICU'),
(7, 'CENDANA 101', 1, 'PAVILIUN1'),
(8, 'JATI EMAS 102', 1, 'PAVILIUN1'),
(9, 'JATI EMAS 103', 1, 'PAVILIUN1'),
(10, 'JATI EMAS 104', 1, 'PAVILIUN1'),
(21, 'FLAMBOYAN 115', 1, 'PAVILIUN1'),
(27, 'CENDRAWASIH 201', 1, 'PAVILIUN2'),
(28, 'MURAI 202', 1, 'PAVILIUN2'),
(29, 'MURAI 203', 1, 'PAVILIUN2'),
(30, 'MURAI 204', 1, 'PAVILIUN2'),
(31, 'MURAI 205', 1, 'PAVILIUN2'),
(32, 'MURAI 206', 1, 'PAVILIUN2'),
(33, 'MURAI 207', 1, 'PAVILIUN2'),
(35, 'PARKIT 209-1', 1, 'PAVILIUN2'),
(36, 'PARKIT 209-2', 1, 'PAVILIUN2'),
(37, 'PARKIT 210-1', 1, 'PAVILIUN2'),
(38, 'PARKIT 210-2', 1, 'PAVILIUN2'),
(39, 'PARKIT 211-1', 1, 'PAVILIUN2'),
(40, 'PARKIT 211-2', 1, 'PAVILIUN2'),
(41, 'PARKIT 212-1', 1, 'PAVILIUN2'),
(42, 'PARKIT 212-2', 1, 'PAVILIUN2'),
(43, 'PARKIT 213-1', 1, 'PAVILIUN2'),
(44, 'PARKIT 213-2', 1, 'PAVILIUN2'),
(45, 'KENARI 214', 1, 'PAVILIUN2'),
(46, 'KENARI 215', 1, 'PAVILIUN2'),
(47, 'KENARI 216', 1, 'PAVILIUN2'),
(52, 'GAHARU 301', 1, 'PAVILIUN3'),
(53, 'MAHONI 302', 1, 'PAVILIUN3'),
(54, 'MAHONI 303', 1, 'PAVILIUN3'),
(55, 'ALBASIA 305', 1, 'PAVILIUN3'),
(56, 'ALBASIA 306', 1, 'PAVILIUN3'),
(57, 'ALBASIA 308', 1, 'PAVILIUN3'),
(58, 'ALBASIA 309', 1, 'PAVILIUN3'),
(59, 'PINUS 304-1', 1, 'PAVILIUN3'),
(60, 'PINUS 304-2', 1, 'PAVILIUN3'),
(61, 'AKASIA 307-1', 1, 'PAVILIUN3'),
(62, 'AKASIA 307-2', 1, 'PAVILIUN3'),
(63, 'KEMUNING 101', 1, 'LANTAI1PDP'),
(65, 'ALAMANDA 103', 1, 'LANTAI1PDP'),
(67, 'AZALEA 104-1', 1, 'LANTAI1PDP'),
(68, 'AZALEA 104-2', 1, 'LANTAI1PDP'),
(69, 'AZALEA 107-1', 1, 'LANTAI1PDP'),
(70, 'AZALEA 107-2', 1, 'LANTAI1PDP'),
(71, 'AZALEA 106-1', 1, 'LANTAI1PDP'),
(72, 'AZALEA 106-2', 1, 'LANTAI1PDP'),
(73, 'AZALEA 109-1', 1, 'LANTAI1PDP'),
(74, 'AZALEA 109-2', 1, 'LANTAI1PDP'),
(77, 'SERUNI 111-1', 1, 'LANTAI1PDP'),
(78, 'SERUNI 111-2', 1, 'LANTAI1PDP'),
(79, 'TANJUNG 110-1', 1, 'LANTAI1PDP'),
(80, 'TANJUNG 110-2', 1, 'LANTAI1PDP'),
(81, 'SERUNI 111-3', 1, 'LANTAI1PDP'),
(82, 'SERUNI 111-4', 1, 'LANTAI1PDP'),
(83, 'TANJUNG 110-3', 1, 'LANTAI1PDP'),
(84, 'TANJUNG 110-4', 1, 'LANTAI1PDP'),
(85, 'AZALEA 205-1', 1, 'LANTAI2RBA1'),
(86, 'ALAMANDA 203', 1, 'LANTAI2RBA1'),
(87, 'ALAMANDA 204', 1, 'LANTAI2RBA1'),
(88, 'AZALEA 202-1', 1, 'LANTAI2RBA1'),
(90, 'AZALEA 205-2', 1, 'LANTAI2RBA1'),
(91, 'AZALEA 202-2', 1, 'LANTAI2RBA1'),
(93, 'AZALEA 207-1', 1, 'LANTAI2RBA1'),
(94, 'AZALEA 207-2', 1, 'LANTAI2RBA1'),
(95, 'AZALEA 206-1', 1, 'LANTAI2RBA1'),
(96, 'AZALEA 206-2', 1, 'LANTAI2RBA1'),
(97, 'AZALEA 209-1', 1, 'LANTAI2RBA1'),
(98, 'AZALEA 209-2', 1, 'LANTAI2RBA1'),
(99, 'TANJUNG 208-1', 1, 'LANTAI2RBA1'),
(100, 'TANJUNG 208-2', 1, 'LANTAI2RBA1'),
(101, 'SERUNI 211-1', 1, 'LANTAI2RBA1'),
(102, 'SERUNI 211-2', 1, 'LANTAI2RBA1'),
(103, 'SERUNI 210-1', 1, 'LANTAI2RBA1'),
(104, 'SERUNI 210-2', 1, 'LANTAI2RBA1'),
(105, 'SERUNI 211-3', 1, 'LANTAI2RBA1'),
(106, 'SERUNI 211-4', 1, 'LANTAI2RBA1'),
(107, 'SERUNI 210-3', 1, 'LANTAI2RBA1'),
(108, 'SERUNI 210-4', 1, 'LANTAI2RBA1'),
(109, 'SERUNI 210-5', 1, 'LANTAI2RBA1'),
(110, 'SERUNI 213-1', 1, 'LANTAI2RBA2'),
(112, 'TANJUNG 212-1', 1, 'LANTAI2RBA2'),
(113, 'TANJUNG 212-2', 1, 'LANTAI2RBA2'),
(114, 'SERUNI 213-2', 1, 'LANTAI2RBA2'),
(115, 'SERUNI 213-3', 1, 'LANTAI2RBA2'),
(116, 'TANJUNG 212-3', 1, 'LANTAI2RBA2'),
(117, 'TANJUNG 212-4', 1, 'LANTAI2RBA2'),
(118, 'SERUNI 213-4', 1, 'LANTAI2RBA2'),
(119, 'SERUNI 213-5', 1, 'LANTAI2RBA2'),
(120, 'TANJUNG 212-5', 1, 'LANTAI2RBA2'),
(121, 'TANJUNG 212-6', 1, 'LANTAI2RBA2'),
(123, 'TERATAI 302', 1, 'LANTAI3OBG'),
(130, 'SERUNI 310-1', 1, 'LANTAI3OBG'),
(131, 'SERUNI 310-2', 1, 'LANTAI3OBG'),
(132, 'SERUNI 310-3', 1, 'LANTAI3OBG'),
(133, 'SERUNI 310-4', 1, 'LANTAI3OBG'),
(134, 'SERUNI 310-5', 1, 'LANTAI3OBG'),
(135, 'SERUNI 310-6', 1, 'LANTAI3OBG'),
(145, 'AZALEA 1', 1, 'LANTAI3NEO'),
(146, 'AZALEA 2', 1, 'LANTAI3NEO'),
(151, 'SERUNI 1', 1, 'LANTAI3NEO'),
(152, 'SERUNI 2', 1, 'LANTAI3NEO'),
(153, 'SERUNI 3', 1, 'LANTAI3NEO'),
(154, 'KEMUNING 401', 1, 'LANTAI4PDW'),
(159, 'AZALEA 407-1', 1, 'LANTAI4PDW'),
(160, 'AZALEA 407-2', 1, 'LANTAI4PDW'),
(161, 'AZALEA 406-1', 1, 'LANTAI4PDW'),
(162, 'AZALEA 406-2', 1, 'LANTAI4PDW'),
(163, 'AZALEA 409-1', 1, 'LANTAI4PDW'),
(164, 'AZALEA 409-2', 1, 'LANTAI4PDW'),
(165, 'AZALEA 408-1', 1, 'LANTAI4PDW'),
(166, 'AZALEA 408-2', 1, 'LANTAI4PDW'),
(167, 'SERUNI 411-1', 1, 'LANTAI4PDW'),
(168, 'SERUNI 411-2', 1, 'LANTAI4PDW'),
(169, 'TANJUNG 410-1', 1, 'LANTAI4PDW'),
(170, 'TANJUNG 410-2', 1, 'LANTAI4PDW'),
(171, 'SERUNI 411-3', 1, 'LANTAI4PDW'),
(172, 'SERUNI 411-4', 1, 'LANTAI4PDW'),
(173, 'TANJUNG 410-3', 1, 'LANTAI4PDW'),
(174, 'TANJUNG 410-4', 1, 'LANTAI4PDW'),
(175, 'SERUNI 4', 1, 'LANTAI3NEO'),
(176, 'SERUNI 5', 1, 'LANTAI3NEO'),
(177, 'SERUNI 6', 1, 'LANTAI3NEO'),
(178, 'PARKIT 208-1', 1, 'PAVILIUN2'),
(179, 'PARKIT 208-2', 1, 'PAVILIUN2'),
(180, 'PARKIT 217-1', 1, 'PAVILIUN2'),
(181, 'PARKIT 217-2', 1, 'PAVILIUN2'),
(182, 'PARKIT 218-1', 1, 'PAVILIUN2'),
(183, 'PARKIT 218-2', 1, 'PAVILIUN2'),
(184, 'PARKIT 219-1', 1, 'PAVILIUN2'),
(185, 'PARKIT 219-2', 1, 'PAVILIUN2'),
(186, 'PARKIT 220-1', 1, 'PAVILIUN2'),
(187, 'PARKIT 220-2', 1, 'PAVILIUN2'),
(188, 'MERPATI 221-1', 1, 'PAVILIUN2'),
(189, 'MERPATI 221-2', 1, 'PAVILIUN2'),
(190, 'MERPATI 221-3', 1, 'PAVILIUN2'),
(191, 'MERPATI 221-4', 1, 'PAVILIUN2'),
(192, 'MERPATI 222-1', 1, 'PAVILIUN2'),
(193, 'MERPATI 222-2', 1, 'PAVILIUN2'),
(194, 'MERPATI 222-3', 1, 'PAVILIUN2'),
(195, 'FLAMBOYAN 116-1', 1, 'PAVILIUN1'),
(196, 'FLAMBOYAN 116-2', 1, 'PAVILIUN1'),
(197, 'FLAMBOYAN 117-1', 1, 'PAVILIUN1'),
(198, 'FLAMBOYAN 117-2', 1, 'PAVILIUN1'),
(199, 'FLAMBOYAN 118-1', 1, 'PAVILIUN1'),
(200, 'FLAMBOYAN 118-2', 1, 'PAVILIUN1'),
(201, 'FLAMBOYAN 119-1', 1, 'PAVILIUN1'),
(202, 'FLAMBOYAN 119-2', 1, 'PAVILIUN1'),
(203, 'FLAMBOYAN 120-1', 1, 'PAVILIUN1'),
(204, 'FLAMBOYAN 120-2', 1, 'PAVILIUN1'),
(205, 'ICU ISOLASI 109-1', 1, 'PAVILIUN1'),
(206, 'ICU ISOLASI 110-1', 1, 'PAVILIUN1'),
(207, 'ICU ISOLASI 111-1', 1, 'PAVILIUN1'),
(208, 'ISOLASI 105-1', 1, 'PAVILIUN1'),
(209, 'ISOLASI 105-2', 1, 'PAVILIUN1'),
(210, 'ISOLASI 107-1', 1, 'PAVILIUN1'),
(211, 'ISOLASI 107-2', 1, 'PAVILIUN1'),
(212, 'ISOLASI 108-1', 1, 'PAVILIUN1'),
(213, 'ISOLASI 108-2', 1, 'PAVILIUN1'),
(214, 'ISOLASI 112-1', 1, 'PAVILIUN1'),
(215, 'ISOLASI 112-2', 1, 'PAVILIUN1'),
(217, 'ICU 7', 1, 'ICU'),
(218, 'ICU 8', 1, 'ICU'),
(219, 'ALAMANDA 108', 1, 'LANTAI1PDP'),
(220, 'AZALEA 102-1', 1, 'LANTAI1PDP'),
(221, 'AZALEA 102-2', 1, 'LANTAI1PDP'),
(222, 'AZALEA 105-1', 1, 'LANTAI1PDP'),
(223, 'AZALEA 105-2', 1, 'LANTAI1PDP'),
(224, 'KEMUNING 201', 1, 'LANTAI2RBA1'),
(225, 'KEMUNING 304', 1, 'LANTAI3OBG'),
(226, 'ALAMANDA 306', 1, 'LANTAI3OBG'),
(227, 'AZALEA 308-1', 1, 'LANTAI3OBG'),
(228, 'AZALEA 308-2', 1, 'LANTAI3OBG'),
(229, 'TANJUNG 309-1', 1, 'LANTAI3OBG'),
(230, 'TANJUNG 309-2', 1, 'LANTAI3OBG'),
(231, 'NICU 1', 1, 'LANTAI3NEO'),
(232, 'NICU 2', 1, 'LANTAI3NEO'),
(233, 'NICU 3', 1, 'LANTAI3NEO'),
(234, 'NICU 4', 1, 'LANTAI3NEO'),
(235, 'NICU 5', 1, 'LANTAI3NEO'),
(236, 'NICU 6', 1, 'LANTAI3NEO'),
(237, 'TANJUNG 1', 1, 'LANTAI3NEO'),
(238, 'TANJUNG 2', 1, 'LANTAI3NEO'),
(239, 'TANJUNG 3', 1, 'LANTAI3NEO'),
(240, 'SERUNI 7', 1, 'LANTAI3NEO'),
(241, 'SERUNI 8', 1, 'LANTAI3NEO'),
(242, '1 (ISOLASI TEKNANAN AKTIF)', 1, 'LANTAI3NEO'),
(243, '2  (ISOLASI TEKNANAN AKTIF)', 1, 'LANTAI3NEO'),
(244, '3  (ISOLASI TEKNANAN AKTIF)', 1, 'LANTAI3NEO'),
(245, 'ALAMANDA 403', 1, 'LANTAI4PDW'),
(246, 'ALAMANDA 405', 1, 'LANTAI4PDW'),
(247, 'AZALEA 402-1', 1, 'LANTAI4PDW'),
(248, 'AZALEA 402-2', 1, 'LANTAI4PDW'),
(249, 'AZALEA 404-1', 1, 'LANTAI4PDW'),
(250, 'AZALEA 404-2', 1, 'LANTAI4PDW'),
(251, 'SERUNI 411-5', 1, 'LANTAI4PDW'),
(252, 'SERUNI 411-6', 1, 'LANTAI4PDW'),
(253, 'ICU ISOLASI 109-2', 1, 'PAVILIUN1'),
(254, 'ICU ISOLASI 110-2', 1, 'PAVILIUN1'),
(255, 'ICU ISOLASI 111-2', 1, 'PAVILIUN1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `penanggungjawab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `penanggungjawab` varchar(100) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_keluar` datetime DEFAULT NULL,
  `tgl_booking` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` varchar(100) NOT NULL,
  `utama` tinyint(1) NOT NULL,
  `status_booking` varchar(100) NOT NULL,
  `status_kamar` varchar(50) DEFAULT NULL,
  `no_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama_pasien`, `penanggungjawab`, `id_kamar`, `tgl_masuk`, `tgl_keluar`, `tgl_booking`, `keterangan`, `utama`, `status_booking`, `status_kamar`, `no_kamar`) VALUES
(14, 'Aan', 'AXA', 1, '2020-10-16 00:00:00', '2020-10-22 00:00:00', '2020-10-15 06:07:21', '', 0, 'Booking', NULL, '1'),
(15, 'Rizal', 'BPJS', 1, '2020-10-23 00:00:00', '2020-10-30 00:00:00', '2020-10-15 06:37:50', '', 0, 'Booking', NULL, '1'),
(16, 'Feri', 'AIA', 2, '2020-10-21 00:00:00', '2020-10-24 00:00:00', '2020-10-15 06:38:39', '', 0, 'Booking', NULL, '1'),
(17, 'Fajar', 'AIA', 2, '2020-10-28 00:00:00', '2020-10-30 00:00:00', '2020-10-15 06:54:40', '', 0, 'Booking', NULL, '1'),
(28, 'Ari', 'JKN', 4, '2020-10-22 05:01:58', NULL, '2020-10-22 05:01:58', 'Terisi', 0, 'MRS', 'masuk', '1'),
(35, 'Arya', 'AXA', 7, '2020-10-22 05:43:18', '2020-10-22 05:43:41', '2020-10-22 10:43:41', 'Sembuh', 0, 'MRS', 'keluar', '2'),
(36, 'Siska', 'AXA', 7, '2020-10-23 00:00:00', '2020-10-30 00:00:00', '2020-10-22 10:44:29', '', 0, 'Booking', NULL, '1'),
(37, 'Fanta', 'Mandiri', 7, '2020-10-24 00:00:00', '2020-10-29 00:00:00', '2020-10-22 10:54:13', '', 0, 'Booking', NULL, '2'),
(38, 'Rizal', 'BPJS', 34, '2020-10-23 10:45:21', NULL, '2020-10-23 03:45:21', 'Terisi', 0, 'MRS', 'masuk', '1'),
(39, 'Febi', 'AIA', 15, '2020-10-23 11:02:15', NULL, '2020-10-23 04:02:15', 'Terisi', 0, 'MRS', 'masuk', '1'),
(41, 'BROKU', 'AIA', 60, '2020-10-23 11:25:14', '2020-10-23 11:25:39', '2020-10-23 04:25:39', 'Pindah', 0, 'MRS', 'keluar', '1'),
(42, 'Siska', 'AXA', 56, '2020-10-23 11:26:33', NULL, '2020-10-23 04:26:33', 'Terisi', 0, 'MRS', 'masuk', '1'),
(43, 'Sera', 'ASA', 156, '2020-10-24 01:12:46', NULL, '2020-10-23 18:12:46', 'Terisi', 0, 'MRS', 'masuk', '2'),
(44, 'Anton', 'ADA', 168, '2020-10-24 01:13:31', NULL, '2020-10-23 18:13:31', 'Terisi', 0, 'MRS', 'masuk', '1'),
(45, 'dea gita', 'HARIS', 5, '2022-01-22 00:00:00', '2022-01-22 14:29:20', '2022-01-22 07:29:20', 'KRS / Keluar Rawat Inap', 0, 'MRS', 'keluar', '1'),
(46, 'diki', 'axa', 6, '2022-01-21 08:15:31', NULL, '2022-01-21 01:15:31', 'Terisi', 0, 'MRS', 'masuk', '1'),
(47, 'dita', 'prudential', 217, '2022-01-21 08:20:42', NULL, '2022-01-21 04:40:23', 'Terisi', 0, 'MRS', 'masuk', '1'),
(48, 'cena', 'prudential', 7, '2022-01-22 00:00:00', '2022-01-23 00:00:00', '2022-01-22 07:25:49', 'Terisi', 0, 'MRS', 'masuk', '1'),
(50, 'Tera', 'Umum', 21, '2022-01-22 14:26:50', NULL, '2022-01-22 07:26:50', 'Terisi', 1, 'MRS', 'masuk', '1'),
(51, 'Wera', 'Umum', 5, '2022-01-22 14:29:42', NULL, '2022-01-22 07:29:42', 'Terisi', 1, 'MRS', 'masuk', '1'),
(52, 'Suhali', 'Umum', 253, '2022-01-23 10:52:22', NULL, '2022-01-23 03:52:22', 'Terisi', 1, 'MRS', 'masuk', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`user_id`, `name`, `email`, `username`, `password`, `avatar`, `level`, `status`) VALUES
(1, 'Admin', 'admin@ranita.id', 'admin', '$2y$10$G7FFfvsRwANKpXjFXUkKi.C3HP9uu8vw8PqIJfoqeY.iq71tEKVy6', '', 1, 'ac'),
(2, 'Tika', 'tika@gmail.com1', 'tika12', '$2y$10$t0YyUwRoG.AYMbMsofXiFOu7oRbRQmwoeGZ21Ka573.JpCfFFE5ta', NULL, 2, 'ac');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
