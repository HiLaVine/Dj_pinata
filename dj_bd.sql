-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2023 a las 03:59:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dj_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosclientes`
--

CREATE TABLE `datosclientes` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `aPaterno` varchar(30) NOT NULL,
  `aMaterno` varchar(30) NOT NULL,
  `fechaN` date NOT NULL,
  `CURP` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `alcaldia` varchar(30) NOT NULL,
  `evento` varchar(30) NOT NULL,
  `npersonas` int(11) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `folio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datosclientes`
--

INSERT INTO `datosclientes` (`idCliente`, `nombre`, `aPaterno`, `aMaterno`, `fechaN`, `CURP`, `gmail`, `telefono`, `estado`, `alcaldia`, `evento`, `npersonas`, `horario`, `folio`) VALUES
(1, 'Alfredo', 'Bautista', 'Ríos', '2002-08-18', 'SRDELANOCHE4545a77', 'abautistar@gmail.com', '5510810077', 'Aguascalientes', 'Alvaro Obregon', 'evento', 0, 'Viernes de 12:00pm - 2:00am', 'undifined'),
(2, '', '', '', '0000-00-00', '', '', '', '', '', 'evento', 0, '', 'undifined'),
(3, 'el señor', 'de la', 'noche', '2005-05-28', 'SRDELANOCHE4755a77', 'correo@gmail.com', '5521914537', 'Aguascalientes', 'Alvaro Obregon', 'evento', 0, 'Domingos de 9:00am - 2:pm', 'undifined'),
(4, 'el señor', 'de laa', 'noche', '2005-05-28', 'SRDELANOCHE4755a77', 'correo@gmail.com', '5521914537', 'Aguascalientes', 'Alvaro Obregon', 'evento', 0, 'Domingos de 9:00am - 2:pm', 'undifined'),
(5, '', '', '', '0000-00-00', '', '', '', '', '', 'evento', 0, '', 'undifined'),
(6, 'Daniel', 'Montesco', 'Perez', '2003-05-20', 'HOLA020818A7', 'correo@gmail.com', '5521911477', 'Jalisco', 'Tlahuac', 'XV Años', 200, 'Viernes de 12:00pm - 2:00am', '20030520HOLA020818A7'),
(7, 'Daniel', 'Montesco', 'Perez', '2003-05-20', 'HOLA020818A7', 'correo@gmail.com', '5521911477', 'Jalisco', 'Tlahuac', 'XV Años', 200, 'Viernes de 12:00pm - 2:00am', '20030520HOLA020818A7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosclientes`
--
ALTER TABLE `datosclientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosclientes`
--
ALTER TABLE `datosclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
