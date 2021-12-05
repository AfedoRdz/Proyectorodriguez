-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 06:29:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbanco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CURP` varchar(18) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombres` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidopaterno` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidomaterno` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numerodecuenta` int(8) NOT NULL,
  `numerodetelefono` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`CURP`, `nombres`, `apellidopaterno`, `apellidomaterno`, `correo`, `numerodecuenta`, `numerodetelefono`) VALUES
('ROME040519HCHDRDA3', 'Alfredo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128', 1, '6561327700'),
('ROME040519HCHDRDA3', 'Alfredo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128', 1, '6561327700'),
('ROME040519HCHDRDA3', 'Afedo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128', 1, '1'),
('ROME040519HCHDRDA3', 'Afedo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128', 1, '1'),
('ROME040519HCHDRDA3', 'Afedo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombres` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidopaterno` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidomaterno` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numerodetelefono` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `comentarios` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombres`, `apellidopaterno`, `apellidomaterno`, `correo`, `numerodetelefono`, `fecha`, `comentarios`) VALUES
('Alfredo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128@gmail.com', '6561327700', '2021/19/01', 'lalalala'),
('Alfredo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128@gmail.com', '6561327700', '2021/19/01', 'lalalala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `CURP` varchar(18) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombredeusuario` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numeroderegistro` int(8) NOT NULL,
  `numerodecuenta` int(8) NOT NULL,
  `numerodesucursal` int(10) NOT NULL,
  `numerodetelefono` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`CURP`, `nombredeusuario`, `correo`, `numeroderegistro`, `numerodecuenta`, `numerodesucursal`, `numerodetelefono`) VALUES
('ROME040519HCHDRDA3', 'afedo', 'edgaralfredorodriguezm19.cb128@dgeti.sems.gob', 1, 1, 1, '6561327700'),
('ROME040519HCHDRDA3', 'afedo', 'edgaralfredorodriguezm19.cb128@dgeti.sems.gob', 1, 1, 1, '6561327700');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `CURP` varchar(18) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombres` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidopaterno` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidomaterno` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numeroderegistro` int(8) NOT NULL,
  `numerodesucursal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`CURP`, `nombres`, `apellidopaterno`, `apellidomaterno`, `correo`, `numeroderegistro`, `numerodesucursal`) VALUES
('ROME040519HCHDRDA3', 'Afedo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128@dgeti.sems.gob', 1, 1),
('ROME040519HCHDRDA3', 'Afedo', 'Rodriguez', 'Morales', 'edgaralfredorodriguezm19.cb128@dgeti.sems.gob', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
