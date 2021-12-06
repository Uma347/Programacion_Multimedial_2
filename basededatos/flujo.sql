-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2021 a las 09:53:32
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flujo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `idcentro` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sigla` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `1ejecutivo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `2ejecutivo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `3ejecutivo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `1hcf` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `2hcf` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `1caf` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `1hcc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `2hcc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `3hcc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `1cac` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `notramite` int(20) NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujocondicionante`
--

CREATE TABLE `flujocondicionante` (
  `proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `si` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujocondicionante`
--

INSERT INTO `flujocondicionante` (`proceso`, `si`, `no`, `ID`) VALUES
('P2', 'P4', 'P3', 1),
('P6', 'P4', NULL, 2),
('P4', 'P7', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rol` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `procesosiguiente` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `formulario` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`flujo`, `proceso`, `tipo`, `rol`, `procesosiguiente`, `formulario`, `id`) VALUES
('F1', 'P1', 'I', 'Estudiante', 'P2', 'P1', 1),
('F1', 'P2', 'C', 'CEI', NULL, 'P2', 2),
('F1', 'P3', 'P', 'CEI', 'P5', 'P3', 3),
('F1', 'P4', 'C', 'Kardex', NULL, 'P4', 4),
('F1', 'P5', 'P', 'Estudiante', 'P6', 'P5', 5),
('F1', 'P6', 'C', 'CEI', NULL, 'P6', 8),
('F1', 'P7', 'P', 'CEI', NULL, 'P7', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE `observacion` (
  `idobservacion` int(11) NOT NULL,
  `notramite` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `observacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `i` int(11) NOT NULL,
  `paterno` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `materno` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ci` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`i`, `paterno`, `materno`, `nombre`, `ci`) VALUES
(1, 'SILVA', 'PEREZ', 'MOISES', '1'),
(2, 'PEREZ', 'LOPEZ', 'JUAN', '2'),
(3, 'MAMANI', 'FLORES', 'MIGUEL', '3'),
(4, 'FLORES ', 'AVENDAÑO', 'PEDRO', '4'),
(5, 'SALAS', 'GUTIERREZ', 'ALDO', '5'),
(6, 'HUANCA', 'RODRIGUEZ', 'MARIA ROSA', '6'),
(7, 'SALAS', 'GUTIERREZ', 'ALDO', '7'),
(8, 'ROJAS', 'LINO', 'LILI', '8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `notramite` int(11) DEFAULT NULL,
  `usuario` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechainicio` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechafin` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE `tramite` (
  `notramite` int(10) NOT NULL,
  `ci` int(20) NOT NULL,
  `fecha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ci` int(11) NOT NULL,
  `contrasenia` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rol` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ci`, `contrasenia`, `rol`) VALUES
(1, '123456', 'Estudiante'),
(2, '123456', 'Estudiante'),
(3, '123456', 'Kardex'),
(4, '123456', 'CEI'),
(5, '123456', 'Estudiante'),
(6, '123456', 'Estudiante'),
(7, '123456', 'CEI'),
(8, '123456', 'Kardex');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`idcentro`);

--
-- Indices de la tabla `flujocondicionante`
--
ALTER TABLE `flujocondicionante`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `flujoproceso`
--
ALTER TABLE `flujoproceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`idobservacion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`i`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tramite`
--
ALTER TABLE `tramite`
  ADD PRIMARY KEY (`notramite`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `idcentro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `flujocondicionante`
--
ALTER TABLE `flujocondicionante`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `flujoproceso`
--
ALTER TABLE `flujoproceso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `idobservacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tramite`
--
ALTER TABLE `tramite`
  MODIFY `notramite` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
