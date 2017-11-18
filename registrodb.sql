-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 03:39:03
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE `asistente` (
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Nacionalidad` varchar(20) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Talleres` varchar(100) NOT NULL,
  `Curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistente`
--

INSERT INTO `asistente` (`Nombre`, `Apellido`, `Correo`, `Direccion`, `Nacionalidad`, `Cedula`, `Talleres`, `Curso`) VALUES
('asdasd', 'asdasd', 'zxczxc', 'asdasd', 'asdasd', 'asdasd', 'Agricultura', 'Primeros A.'),
('Maria', 'Zambrano', 'asd@mimail.com', 'zxczxcvsdfgdgg', 'Ecuatoriana', '012345678-9', 'Orfebreria', 'Criptografia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
