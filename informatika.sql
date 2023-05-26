-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 06:44 PM
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
-- Database: `informatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `handphone` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`, `program_studi`, `jenis_kelamin`, `email`, `handphone`, `tempat_lahir`, `tanggal_lahir`, `agama`) VALUES
(2011031064, 'Fakhri Adli Naufal', 'Akuntansi', 'Akuntansi', 'Laki-Laki', 'mfakhri123@gmail.com', '082372256144', 'Metro', '2002-11-02', ''),
(2012011265, 'Farhan Az Dzaky', 'Ilmu Hukum', 'Ilmu Hukum', 'Laki-Laki', 'mfarhanaz@gmai.com', '081918861255', 'Kotabumi', '2001-11-16', ''),
(2014051013, 'Tiara Oktabriyana', 'Teknologi Hasil Pertanian', 'Teknologi Hasil Pertanian', 'Perempuan', 'tiara.oktabriyana@gmail.com', '082175564610', 'Gedong Tataan', '2003-10-15', ''),
(2014151016, 'Lutfi Nur Latifah', 'Kehutanan', 'Kehutanan', 'Perempuan', 'pilup1234@gmail.com', '085212869900', 'Tatakarya', '2002-05-27', ''),
(2015011043, 'Meta Puspitasari', 'Teknik Sipil', 'Teknik Sipil', 'Perempuan', 'meta.puspita123@gmail.com', '082282111919', 'Way Kanan', '2002-05-18', ''),
(2015031097, 'Nugroho Yanwar Prayogi', 'Teknik Elektro', 'Teknik Elektro', 'Laki-Laki', 'yogi.nugroho@gmail.com', '082340247375', 'Pahayu Jaya', '2002-10-11', ''),
(2015061022, 'Dwindy Monica', 'Teknik Elektro', 'Teknik Informatika', 'Perempuan', 'dwindymonicaa@gmail.com', '081959277288', 'Semuli Raya', '2002-02-03', ''),
(2015061034, 'Zaki Taufiqurrachman', 'Teknik Elektro', 'Teknik Informatika', 'Laki-Laki', 'zakitfq@gmail.com', '089508885030', 'Bandarlampung', '2001-11-13', ''),
(2052011092, 'Syauqie Nisa Luthfia', 'Ilmu Hukum', 'Ilmu Hukum', 'Perempuan', 'syauqienis@gmail.com', '085840315869', 'Bandarlampung', '2001-04-04', ''),
(2055061050, 'Naufal Rizqullah', 'Teknik Elektro', 'Teknik Informatika', 'Laki-Laki', 'mnaufalrizq@gmail.com', '082299002595', 'Tulang Bawang', '2002-08-26', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
