-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 12:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gmcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaAdmin`, `username`, `password`) VALUES
(3, 'admin', 'admin', '$2y$10$mzRmqugMtUDadnVnZsKtp.cCb9CQlZ73yWp4QzFLghkSe.IWo.UtG');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idGuru` int(11) NOT NULL,
  `namaGuru` varchar(100) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `namaGuru`, `noHp`, `alamat`, `username`, `password`) VALUES
(1, 'Hadian Syafiar', '081273625123', 'Komplek Taman Melati 2 nomor 5', 'hadian1', '123456'),
(2, 'Kusuma Ningrat', '081263532782', 'Jalan Merdeka nomor 3', 'kusuma1', '123456'),
(3, 'Baringin', '081245672123', 'Jalan Kasuari nomor 5', 'andi1', 'asdasd'),
(30, 'guru', '08123123', 'disini', 'guru', '$2y$10$mBzlJn9B2r9WgkzpTESe6.1PJhKZjaauAxdjBXvC0hWQrehW6ocT6');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` int(11) NOT NULL,
  `tanggalJadwal` varchar(20) NOT NULL,
  `jamJadwal` varchar(10) NOT NULL,
  `idMatpel` int(11) NOT NULL,
  `idGuru` int(11) NOT NULL,
  `idSiswa` int(11) NOT NULL,
  `namaMatpel` varchar(100) NOT NULL,
  `namaGuru` varchar(100) NOT NULL,
  `namaSiswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`idJadwal`, `tanggalJadwal`, `jamJadwal`, `idMatpel`, `idGuru`, `idSiswa`, `namaMatpel`, `namaGuru`, `namaSiswa`) VALUES
(11, '05/06/2021', '09:00', 2, 2, 1, 'Biologi', 'Kusuma Ningrat', 'siswa1baru'),
(12, '09/06/2021', '13:35', 3, 3, 15, 'Kimia', 'Baringin', 'kamusiswa'),
(13, '09/06/2021', '19:01', 3, 3, 15, 'Matematika', 'Baringin', 'kamusiswa');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `idMatpel` int(11) NOT NULL,
  `namaMatpel` varchar(100) NOT NULL,
  `idGuru` int(11) NOT NULL,
  `namaGuru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`idMatpel`, `namaMatpel`, `idGuru`, `namaGuru`) VALUES
(1, 'Biologi', 1, 'Hadian Syafiar'),
(2, 'Biologi', 2, 'Kusuma Ningrat'),
(3, 'Matematika', 3, 'Baringin'),
(12, 'Fisika', 3, 'Baringin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` int(11) NOT NULL,
  `namaSiswa` varchar(100) NOT NULL,
  `noHp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `namaSiswa`, `noHp`, `alamat`, `email`, `username`, `password`) VALUES
(1, 'siswa1baru', '08126372192999', 'alamat1baru', 'siswa1baru@gmail.com', 'siswa1baru', '123456'),
(15, 'kamusiswa', '081023123', 'dimana aja', 'siswa123@asd.com', 'siswa123', '$2y$10$JTJ14xgwYkKkbfK3irFrx.eow.YBKfEj5vcOEPznReazmGFcR1cpe'),
(16, 'ilham', '08123123', 'pkp', 'henry@', 'asdd', '$2y$10$AfKDdbnYDhlzab1IQDb.1eqcZoZyrTQOUm1kpjlDZbk/OyXo0bseO'),
(17, 'siswa', '08123123', 'pkp', 'siswa@gmail.com', 'siswa', '$2y$10$ynY9NiA7rqZn2O.XsJP9ienYdGpBLOfdXWMatZzrJO9uwdHAjYx6K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idJadwal`),
  ADD KEY `idMatpel` (`idMatpel`),
  ADD KEY `idGuru` (`idGuru`),
  ADD KEY `idSiswa` (`idSiswa`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`idMatpel`),
  ADD KEY `idGuru` (`idGuru`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `idGuru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
  MODIFY `idMatpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`idMatpel`) REFERENCES `matpel` (`idMatpel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`idGuru`) REFERENCES `guru` (`idGuru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`idSiswa`) REFERENCES `siswa` (`idSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matpel`
--
ALTER TABLE `matpel`
  ADD CONSTRAINT `matpel_ibfk_1` FOREIGN KEY (`idGuru`) REFERENCES `guru` (`idGuru`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
