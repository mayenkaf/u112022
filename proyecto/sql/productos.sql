-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2022 at 05:26 AM
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
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `tipo`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Tshirts', 'Polo Mercedez Benz', 'De la temporada 2020, se uso en el gran premio de Mónaco', 'tshirt1.jpg'),
(2, 'Tshirts', 'Polo Convencional', 'Acompaño a Lewis Hamilton toda la temporada 2019, estrenada en el gran premio de Barcelona', 'tshirt2.jpg'),
(3, 'Tshirts', 'Polo Hamilton', 'Tributo singular y elegante al campeón F1 del año 2021, estrenada en Susuka.', 'tshirt3.jpg'),
(4, 'Tshirts', 'Polo 44', 'Diseño exclusivo del campeón de F1, con colores Mercedes Benz en escala de grises, es uno de los coleccionables.', 'tshirt4.jpg'),
(5, 'Monos', 'Basico', 'Mono Mercedez Benz 2012, clasico cuando el campeon lideró el año de la F1', 'buzo1.jpg'),
(6, 'Monos', 'Black', 'El estilo negro recuerda la lucha por la diversidad y la inclusión.', 'buzo2.jpg'),
(7, 'Monos', 'Clasico', 'El mono clásico de mercedes en la durisima temporada 2018, en el que ganamos el cuarto campeonato.', 'buzo3.jpg'),
(8, 'Monos', 'mclaren', 'Los primeros pasos del campeon por McLaren, el mono que recoge los colores del equipo ingles campeon.', 'buzo4.jpg'),
(9, 'Helmets', 'Still we rise', 'Still we rise y los colores morado, son las marcas indiscutibles de nuestro campeon.', 'helmet1.jpg'),
(10, 'Helmets', 'Novo', 'Amarillo es el color de los primeros años del campeon que se vuelven a utilizar en la temporada 2022', 'helmet2.jpg'),
(11, 'Helmets', 'especial', 'Con los diseños en granate para el gran Premio de Austria, el Hemlet que acompaño al campeon en la temporada 2019', 'helmet3.jpg'),
(12, 'Helmets', 'coleccion', 'El museo de la F1 en Silverstone mantiene el hemlet original de la temporada 2020 en el que se conquisto el sexto premio consecutivo.', 'helmet4.jpg'),
(13, 'Sunglasses', 'azules', 'Police entrega el estilo y confianza del campeon en estos lentes azules con marcos platados.', 'sunglasses1.jpg'),
(14, 'Sunglasses', 'green', 'La coleccion colores de la naturaleza, entrega los coleccionables lentes verdes con tintes de aviador.', 'sunglasses2.jpg'),
(15, 'Sunglasses', 'top', 'Los top sunglasses coleccionables 2019 entregan esta edición especial de estilo recto con lunetas plomas', 'sunglasses3.jpg'),
(16, 'Sunglasses', 'festejo', 'Los sunglasses festejo se caracteriza por el animal print especial en los marcos para retribuir al gram campeón de la formula 1.', 'sunglasses4.jpg'),
(17, 'Toys', 'Pixar', 'El estilo de Mercedez impregnado en el auto de la serie Cars de Pixar en colores black de la temporada 2020.', 'toy1.jpg'),
(18, 'Toys', 'personaje', 'El muñeco LH de la colección 2021 aludiendo a los colores de inclusión que promueve el hepta campeón de la F1.', 'toy2.jpg'),
(19, 'Toys', 'amigos', 'La colección del team Valteri - Lewis que acompañó a Mercedez Benz hasta el 2021.', 'toy3.jpg'),
(20, 'Toys', 'silver', 'La flecha plateada en versión Lego, colección 2018 del W8 que logró el campeonato de la formula 1 en constructores.', 'toy4.jpg'),
(22, 'Tshirts', 'Football', 'Version futbolera del T shirt del team LH44 en morado y plomo', 'tshirt5.jpg'),
(23, 'Hemlets', 'Recuerdos', 'El hemlet más hermoso de la temporada 2021, un gran recuerdo por llevar', 'hemlet5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
