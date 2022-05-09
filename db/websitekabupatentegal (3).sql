-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 09:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitekabupatentegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `covidsembuh`
--

CREATE TABLE `covidsembuh` (
  `idkec` char(20) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `kodeprop` int(7) NOT NULL,
  `kodekab` int(7) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidsembuh`
--

INSERT INTO `covidsembuh` (`idkec`, `kecamatan`, `kodeprop`, `kodekab`, `jml`) VALUES
('3328010', 'Margasari', 33, 3328, 1200),
('3328020', 'Bumi Jawa', 33, 3328, 369),
('3328030', 'Bojong', 33, 3328, 382),
('3328040', 'Balapulang', 33, 3328, 726),
('3328050', 'Pagerbarang', 33, 3328, 454),
('3328060', 'Lebaksiu', 33, 3328, 872),
('3328070', 'Jatinegara', 33, 3328, 293),
('3328080', 'Kedung Banteng', 33, 3328, 381),
('3328090', 'Pangkah', 33, 3328, 1060),
('3328100', 'Slawi', 33, 3328, 1532),
('3328110', 'Dukuhwaru', 33, 3328, 807),
('3328120', 'Adiwerna', 33, 3328, 992),
('3328130', 'Dukuh Turi', 33, 3328, 640),
('3328140', 'Talang', 33, 3328, 557),
('3328150', 'Tarub', 33, 3328, 644),
('3328160', 'Kramat', 33, 3328, 1103),
('3328170', 'Suradadi', 33, 3328, 579),
('3328180', 'Warureja', 33, 3328, 375);

-- --------------------------------------------------------

--
-- Table structure for table `objekpuskesmas`
--

CREATE TABLE `objekpuskesmas` (
  `id` int(11) NOT NULL,
  `nama` char(100) NOT NULL,
  `alamat` char(200) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objekpuskesmas`
--

INSERT INTO `objekpuskesmas` (`id`, `nama`, `alamat`, `lat`, `lng`) VALUES
(1, 'Puskesmas Balapulang', 'Jl. Veteran No.1, Balapulang, Balapulang Kulon, Kec. Balapulang, Tegal, Jawa Tengah 52464\r\n', -7.05676, 109.095),
(2, 'Puskesmas Bangun Galih', 'Babakan-Bogor No.32, Babad Watgalih, Bangun Galih, Kec. Kramat, Tegal, Jawa Tengah 52181\r\n', -6.89701, 109.182),
(3, 'Puskesmas Bumijawa', 'Jl. Raya Bumijawa No.197, Pandansari, Bumijawa, Tegal, Jawa Tengah 52466\r\n', -7.1678, 109.127),
(4, 'Puskesmas Danasari', 'Jl. Raya Danasari, Diwung, Danasari, Kec. Bojong, Tegal, Jawa Tengah 52465\r\n', -7.1206, 109.178),
(5, 'Puskesmas Jatibogor', '36XR+67F, Jatibogor, Kec. Suradadi, Tegal, Jawa Tengah 52182\r\n', -6.90193, 109.238),
(6, 'Puskesmas Jatinegara', 'W6QP+9WC, Lebakwangi, Jatinegara, Tegal, Jawa Tengah 52473\r\n', -7.06155, 109.235),
(7, 'Puskesmas Kalibakung', 'JL. Raya Selatan Kalibakung, Balapulang, Balapulang Wetan, Kec. Balapulang, Tegal, Jawa Tengah 52464\r\n', -7.09681, 109.127),
(8, 'Puskesmas Kambangan', 'Jl. Raya Kambangan, Ponjdar, Kambangan, Kec. Lebaksiu, Tegal, Jawa Tengah 52461\r\n', -7.01765, 109.11),
(9, 'Puskesmas Kedungbanteng', 'Jl. Tonggara No.02, Karangmangu Kidul, Tonggara, Kedung Banteng, Tegal, Jawa Tengah 52472\r\n', -6.97755, 109.191),
(10, 'Puskesmas Warureja', 'Jl. Amd, Pengasinan, Sukareja, Kec. Warureja, Tegal, Jawa Tengah 52183\r\n', -6.92016, 109.313),
(11, 'Puskesmas Suradadi', 'Jl. Raya Suradadi No.54, Surodadi Lor, Suradadi, Kec. Suradadi, Tegal, Jawa Tengah 52182\r\n', -6.87861, 109.276),
(12, 'Puskesmas Tarub', '35FP+JPV, Tangkil, Mindaka, Kec. Tarub, Tegal, Jawa Tengah 52184\r\n', -6.92587, 109.185),
(13, 'Puskesmas Talang', 'Jl. Projosumarto II, Badiran, Pesayangan, Kec. Talang, Tegal, Jawa Tengah 52193\r\n', -6.91966, 109.138),
(14, 'Puskesmas Dukuhturi', 'jl. raya No.48, Sukarinen, Pepedan, Kec. Dukuhturi, Tegal, Jawa Tengah 52192\r\n', -6.90436, 109.129),
(15, 'Puskesmas Adiwerna', 'Jl. Raya Sel. Banjaran No.36, Kemayaran, Tembok Luwung, Kec. Adiwerna, Tegal, Jawa Tengah 52194\r\n', -6.95263, 109.136),
(16, 'Puskesmas Slawi', 'Jl. KH. Agus Salim, Procot, Kec. Slawi, Tegal, Jawa Tengah 52412\r\n', -6.97135, 109.136),
(17, 'Puskesmas Lebaksiu', 'Jl. Bukit Sitanjung No.44, Karang Muncul, Lebaksiu Lor, Kec. Lebaksiu, Tegal, Jawa Tengah 52461\r\n', -7.04668, 109.146),
(18, 'Puskesmas Pagerbarang', 'Jl. Raya Randusari No.1, Randusari, Pagerbarang, Tegal, Jawa Tengah 52462\r\n', -7.00732, 109.065),
(19, 'Puskesmas Bojong', 'V47X+PQR, Sarwan, Bojong, Kec. Bojong, Tegal, Jawa Tengah 52465\r\n', -7.13563, 109.147),
(20, 'Puskesmas Margasari', 'JL. Lapangan Barat, Margasari, Kec. Margasari, Tegal, Jawa Tengah 52463\r\n', -7.09412, 109.018);

-- --------------------------------------------------------

--
-- Table structure for table `persebaran`
--

CREATE TABLE `persebaran` (
  `id` int(11) NOT NULL,
  `nama` char(100) NOT NULL,
  `alamat` char(250) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persebaran`
--

INSERT INTO `persebaran` (`id`, `nama`, `alamat`, `lat`, `lng`) VALUES
(1, 'Puskesmas Balapulang', 'Jl. Veteran No.1, Balapulang, Balapulang Kulon, Kec. Balapulang, Tegal, Jawa Tengah 52464\r\n', -7.05676, 109.095),
(2, 'Puskesmas Bangun Galih', 'Babakan-Bogor No.32, Babad Watgalih, Bangun Galih, Kec. Kramat, Tegal, Jawa Tengah 52181\r\n', -6.89701, 109.182),
(3, 'Puskesmas Bumijawa', 'Jl. Raya Bumijawa No.197, Pandansari, Bumijawa, Tegal, Jawa Tengah 52466\r\n', -7.1678, 109.127);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` int(11) NOT NULL,
  `nama` char(100) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `nama`, `lat`, `lng`) VALUES
(1, 'Puskesmas Balapulang', -7.05676, 109.095),
(2, 'Puskesmas Bangun Galih', -6.89701, 109.182),
(3, 'Puskesmas Bumijawa', -7.1678, 109.127),
(4, 'Puskesmas Danasari', -7.1206, 109.178),
(5, 'Puskesmas Jatibogor', -6.90193, 109.238),
(6, 'Puskesmas Jatinegara', -7.06155, 109.235),
(7, 'Puskesmas Kalibakung', -7.09681, 109.127),
(8, 'Puskesmas Kambangan', -7.01765, 109.11),
(9, 'Puskesmas Kedungbanteng', -6.97755, 109.191),
(10, 'Puskesmas Warureja', -6.92016, 109.313),
(11, 'Puskesmas Suradadi', -6.87861, 109.276),
(12, 'Puskesmas Tarub', -6.92587, 109.185),
(13, 'Puskesmas Talang', -6.91966, 109.138),
(14, 'Puskesmas Dukuhturi', -6.90436, 109.129),
(15, 'Puskesmas Adiwerna', -6.95263, 109.136),
(16, 'Puskesmas Slawi', -6.97135, 109.136),
(17, 'Puskesmas Lebaksiu', -7.04668, 109.146),
(18, 'Puskesmas Pagerbarang', -7.00732, 109.065),
(19, 'Puskesmas Bojong', -7.13563, 109.147),
(20, 'Puskesmas Margasari', -7.09412, 109.018),
(21, 'Puskesmas 1', -6.9003, 109.145);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covidsembuh`
--
ALTER TABLE `covidsembuh`
  ADD PRIMARY KEY (`idkec`);

--
-- Indexes for table `objekpuskesmas`
--
ALTER TABLE `objekpuskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persebaran`
--
ALTER TABLE `persebaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
