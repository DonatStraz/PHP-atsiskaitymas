-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2021 m. Kov 07 d. 12:56
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parduotuve`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `cart_userid`
--

CREATE TABLE `cart_userid` (
  `ID` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `kategorija` varchar(255) NOT NULL,
  `kiekis` int(100) NOT NULL,
  `vartotojas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `prekes`
--

CREATE TABLE `prekes` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `quantity` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `prekes`
--

INSERT INTO `prekes` (`ID`, `name`, `category`, `storage`, `quantity`) VALUES
(1, 'dviratis', 'laisvalaikis', 'sandėlis', 10),
(2, 'paspirtukas', 'lasivalaikis', 'sandėlis', 20),
(3, 'pienas', 'maistas', 'šviežia', 50),
(4, 'duona', 'maistas', 'šviežia', 50),
(5, 'čeburėkai', 'maistas', 'šaldyta', 50),
(6, 'žuvis', 'maistas', 'šaldyta', 50),
(7, 'gruntas', 'statyba', 'sandėlis', 40),
(8, 'dažai', 'statyba', 'sandėlis', 40);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojai`
--

CREATE TABLE `vartotojai` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vartotojai`
--

INSERT INTO `vartotojai` (`ID`, `name`, `lastname`, `password`) VALUES
(1, 'Jonas', 'Jonaitis', '123'),
(2, 'Petras', 'Petraitis', '456');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vertinimas`
--

CREATE TABLE `vertinimas` (
  `user_ID` int(11) NOT NULL,
  `vidurkis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_userid`
--
ALTER TABLE `cart_userid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vertinimas`
--
ALTER TABLE `vertinimas`
  ADD PRIMARY KEY (`vidurkis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_userid`
--
ALTER TABLE `cart_userid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vertinimas`
--
ALTER TABLE `vertinimas`
  MODIFY `vidurkis` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
