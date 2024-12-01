-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_immobiliere`
--

-- --------------------------------------------------------

--
-- Table structure for table `immobilier`
--

CREATE TABLE `immobilier` (
  `reference` int(11) NOT NULL,
  `proprietaire` varchar(256) NOT NULL,
  `localite` varchar(256) NOT NULL,
  `surface` float NOT NULL,
  `nbpieces` int(11) NOT NULL,
  `domaineusage` int(11) NOT NULL,
  `nature` enum('Appartement','Villa') DEFAULT NULL,
  `sec` float DEFAULT NULL,
  `nbetages` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `immobilier`
--

INSERT INTO `immobilier` (`reference`, `proprietaire`, `localite`, `surface`, `nbpieces`, `domaineusage`, `nature`, `sec`, `nbetages`) VALUES
(1, 'bessem', 'morneg', 500, 600, 600, 'Appartement', 750, NULL),
(2, 'bessem', 'morneg', 500, 600, 600, 'Appartement', 750, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `immobilier`
--
ALTER TABLE `immobilier`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `immobilier`
--
ALTER TABLE `immobilier`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
