-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< Updated upstream
-- Generation Time: May 23, 2021 at 07:38 PM
=======
-- Generation Time: May 24, 2021 at 06:46 PM
>>>>>>> Stashed changes
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(3, 'admin', 'admin', '$2y$10$mzRmqugMtUDadnVnZsKtp.cCb9CQlZ73yWp4QzFLghkSe.IWo.UtG'),
(4, 'admin', 'admin', '$2y$10$mzRmqugMtUDadnVnZsKtp.cCb9CQlZ73yWp4QzFLghkSe.IWo.UtG');

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
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `namaGuru`, `noHp`, `alamat`, `username`, `password`) VALUES
(1, 'Hadian Syafiar', '081273625123', 'Komplek Taman Melati 2 nomor 5', 'hadian1', '123456'),
(2, 'Kusuma Ningrat', '081263532782', 'Jalan Merdeka nomor 3', 'kusuma1', '123456'),
(3, 'Andi Bertoli', '081245672123', 'Jalan Kasuari nomor 5', 'andi1', '123456'),
(4, 'Jimbon Mahardika', '081234234213', 'Jalan Kusuma Jaya nomor 6', 'jimbon1', '123456'),
<<<<<<< Updated upstream
(27, 'asdasdas', 'asdasd', 'asdasd', 'asdasdasd', 'asdasdasdad');
=======
(29, 'asda', 'asdasd', 'asdsad', 'asdasd', '');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` int(11) NOT NULL,
  `hariJadwal` date NOT NULL,
  `jamJadwal` time NOT NULL,
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

INSERT INTO `jadwal` (`idJadwal`, `hariJadwal`, `jamJadwal`, `idMatpel`, `idGuru`, `idSiswa`, `namaMatpel`, `namaGuru`, `namaSiswa`) VALUES
(1, '2021-05-17', '15:00:00', 1, 1, 15, 'Biologi', 'Hadian Syafiar', 'siswa1'),
(2, '2021-05-18', '17:00:00', 2, 2, 16, 'Matematika', 'Kusuma Ningrat', 'siswa2');

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
(2, 'Matematika', 2, 'Kusuma Ningrat'),
(3, 'Kimia', 3, 'Andi Bertoli'),
(10, 'asdasda', 27, 'asdasdas');

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
(15, 'siswa1', '0791283123', 'alamat1', 'siswa1@gmail.com', 'siswa1', '$2y$10$DJEMRwJgDELmA0jz.huD4e7.dK/6K7SO4C6nEpb4KcIiBNkdR6MA2'),
(16, 'siswa2', '082813123131', 'alamat2', 'siswa2@gmail.com', 'siswa2', '$2y$10$yqNv6rBwbcSYF0T1c/L5Wu4I/54MijHzutXin9fw.aqbwmbvQtsS6');

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
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
<<<<<<< Updated upstream
  MODIFY `idGuru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
=======
  MODIFY `idGuru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
>>>>>>> Stashed changes

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
<<<<<<< Updated upstream
  MODIFY `idMatpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
  MODIFY `idMatpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
>>>>>>> Stashed changes

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
