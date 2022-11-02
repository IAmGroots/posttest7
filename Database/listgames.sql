-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 06:31 AM
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
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `listgames`
--

CREATE TABLE `listgames` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listgames`
--

INSERT INTO `listgames` (`id`, `nama`, `genre`, `deskripsi`, `gambar`, `waktu`) VALUES
(1, 'Uncharted 3 Drakes Deception', 'Action', 'Game ini menceritakan petualangan Drake dalam mencari harta karun. Di sekuel ketiganya ini, ia akan berada di sebuah padang pasir yang gersang untuk menemukan artefak dari abad ke-16.', 'Uncharted 3 Drakes Deception.png', '2022-10-27 23:51:54'),
(2, 'Far Cry 3', 'Survival', 'Far Cry 3 mengusung mode first person shooter (FPS) dan memadukannya dengan konsep game survival. Jalan cerita game yang satu ini berfokus kepada karakter yang bernama Jason.', 'Far Cry 3.png', '2022-10-27 23:51:37'),
(3, 'Watch Dogs', 'Adventure', 'Watch Dogs bercerita tentang kisah Aiden Pearce. Seorang kriminal yang melancarkan aksinya dengan memanfaatkan infrastruktur kota yang disebut ctOS. Dengan melakukan hack pada ctOS, Aiden dapat mencuri berbagai hal mulai dari uang, informasi, sampai akses ke berbagai hal terlarang.', 'Watch Dogs.png', '2022-10-27 23:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listgames`
--
ALTER TABLE `listgames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listgames`
--
ALTER TABLE `listgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
