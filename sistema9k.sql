-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2023 a las 19:43:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema9k`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendahorario`
--

CREATE TABLE `agendahorario` (
  `id` int(30) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `agendahorario`
--

INSERT INTO `agendahorario` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Mtro Rigoberto', 'Examen unidad 1', '2023-09-14 17:08:00', '2023-09-14 18:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_admin`
--

CREATE TABLE `registro_admin` (
  `ID` int(30) NOT NULL,
  `matri` varchar(30) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_alum`
--

CREATE TABLE `registro_alum` (
  `id_registro` int(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `semestre` int(5) NOT NULL,
  `grupo` varchar(11) NOT NULL,
  `fecha_regis` date NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL,
  `actividad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `registro_alum`
--

INSERT INTO `registro_alum` (`id_registro`, `matricula`, `full_name`, `semestre`, `grupo`, `fecha_regis`, `hora_entrada`, `hora_salida`, `actividad`) VALUES
(1, 'A190444', 'Oscar Eduardo Merida Garcia', 9, 'K', '2023-09-14', '18:34:27', '19:00:00', 'Proyecto final - Mtro '),
(2, 'A190443', 'Luis Armando Guillen Ramos', 9, 'K', '2023-09-14', '18:54:15', '19:10:00', 'Clase'),
(4, 'A190454', 'Alexis Arturto', 9, 'K', '2023-09-17', '10:00:00', '12:00:00', 'Clases'),
(5, 'A190000', 'Rigoberto', 8, 'K', '2023-09-19', '12:00:00', '13:00:00', 'Examen unidad 2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendahorario`
--
ALTER TABLE `agendahorario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_admin`
--
ALTER TABLE `registro_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro_alum`
--
ALTER TABLE `registro_alum`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendahorario`
--
ALTER TABLE `agendahorario`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro_admin`
--
ALTER TABLE `registro_admin`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_alum`
--
ALTER TABLE `registro_alum`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
