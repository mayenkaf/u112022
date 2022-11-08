-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2022 at 05:15 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarea7`
--

-- --------------------------------------------------------

--
-- Table structure for table `edadnda`
--

CREATE TABLE `edadnda` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `edadnda`
--

INSERT INTO `edadnda` (`nombre`, `apellido`, `direccion`, `edad`, `telefono`) VALUES
('Mario', 'Saavedra', 'Jr. Los Proceres 134', 34, '5050505050'),
('Rosa', 'Gutierrez', 'Av. Panamericana 1024', 45, '5151515151'),
('Jonas', 'Terroba', 'Av. Las Palmas 123', 19, '5252525252'),
('Michel', 'Noriega', 'Jr. Veracruz 230', 24, '5353535353');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
