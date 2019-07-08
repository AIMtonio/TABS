-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2019 a las 18:50:35
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `url_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `descripcion`, `url_img`) VALUES
('cat1', 'Norte ', 'En esta categoria podras encontrar paquetes que visitan parte del continente Americano en la región Norte', 'https://i.ibb.co/QYH451m/Norte-America.jpg'),
('cat2', 'Sudamérica', 'En esta categoria podras encontrar paquetes que visitan parte del continente Americano en la región Sur', 'https://i.ibb.co/rsHwWHH/Sudamerica.jpg'),
('cat3', 'Europa', 'En esta categoria podras encontrar paquetes que visitan parte del continente Europeo', 'https://i.ibb.co/1QcF2XX/Europeo.png'),
('cat4', 'Africa', 'En esta categoria podras encontrar paquetes que visitan parte del continente Africano', 'https://i.ibb.co/4MCrxzk/Africa.jpg'),
('cat5', 'Asia', 'En esta categoria podras encontrar paquetes que visitan parte del continente Asiático', 'https://i.ibb.co/FBHcWjm/Asia.png'),
('cat6', 'Oseanía', 'En esta categoria podras encontrar paquetes que visitan parte del continente de Oseanía', 'https://i.ibb.co/VMr5bTX/Oceania.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_paquete`
--

CREATE TABLE `detalle_paquete` (
  `id_deta_paq` varchar(20) NOT NULL,
  `salidas` varchar(200) DEFAULT NULL,
  `destinos` varchar(200) NOT NULL,
  `paq_incluye` varchar(2000) NOT NULL,
  `paq_no_incluye` varchar(2000) NOT NULL,
  `id_paquete` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id_paquete` varchar(20) NOT NULL,
  `nombre_paquete` varchar(200) NOT NULL,
  `no_dias` int(3) DEFAULT NULL,
  `destino` varchar(200) NOT NULL,
  `costo` double(9,2) DEFAULT NULL,
  `url_img` varchar(200) DEFAULT NULL,
  `id_categoria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalle_paquete`
--
ALTER TABLE `detalle_paquete`
  ADD PRIMARY KEY (`id_deta_paq`),
  ADD KEY `id_paquete` (`id_paquete`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id_paquete`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_paquete`
--
ALTER TABLE `detalle_paquete`
  ADD CONSTRAINT `detalle_paquete_ibfk_1` FOREIGN KEY (`id_paquete`) REFERENCES `paquetes` (`id_paquete`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `paquetes_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
