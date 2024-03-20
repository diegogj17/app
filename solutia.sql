-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 12:28:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solutia`
--
CREATE DATABASE IF NOT EXISTS `solutia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `solutia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solutia`
--

DROP TABLE IF EXISTS `solutia`;
CREATE TABLE IF NOT EXISTS `solutia` (
  `Id` varchar(6) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Asunto` tinytext NOT NULL,
  `Mensaje` varchar(750) NOT NULL,
  `Respuesta` varchar(750) NOT NULL DEFAULT 'Todavía no hay respuesta',
  PRIMARY KEY (`Id`,`Fecha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solutia`
--

INSERT INTO `solutia` (`Id`, `Fecha`, `Asunto`, `Mensaje`, `Respuesta`) VALUES
('996494', '2024-03-19 12:49:47', 'edu', 'edu perro', 'Todavía no hay respuesta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
