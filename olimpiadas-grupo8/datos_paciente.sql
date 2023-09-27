-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 21:32:31
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
-- Base de datos: `datos_paciente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `area`) VALUES
(1, 'quirofano 1'),
(2, 'quirofano 2'),
(3, 'quirofano 3'),
(4, 'quirofano 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE `llamadas` (
  `id_llamada` int(11) NOT NULL,
  `telefono` int(15) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `duracion` int(11) NOT NULL,
  `tipo` enum('emergencia','normal') NOT NULL,
  `atendido` enum('si','no') NOT NULL,
  `area` int(11) NOT NULL,
  `origen` enum('cama','baño') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `llamadas`
--

INSERT INTO `llamadas` (`id_llamada`, `telefono`, `fecha_hora`, `duracion`, `tipo`, `atendido`, `area`, `origen`) VALUES
(1, 15456789, '2023-09-25 19:36:02', 3, 'normal', 'si', 4, 'cama'),
(2, 15456789, '2023-09-25 19:36:12', 3, 'normal', 'si', 2, 'cama'),
(3, 15456789, '2023-09-25 19:36:20', 3, 'normal', 'si', 3, 'cama'),
(4, 12344, '2023-09-25 19:36:28', 2, 'normal', 'si', 5, 'cama'),
(5, 12344, '2023-09-19 18:29:01', 4, 'normal', 'si', 1, 'cama'),
(6, 12344, '2023-09-25 19:36:37', 4, 'normal', 'si', 1, 'cama'),
(7, 15346543, '2023-09-19 19:12:12', 7, 'emergencia', 'si', 2, 'baño'),
(8, 15346543, '2023-09-19 19:12:30', 7, 'emergencia', 'si', 2, 'baño'),
(9, 15346543, '2023-09-19 19:12:34', 7, 'emergencia', 'si', 2, 'baño'),
(10, 15467555, '2023-09-20 19:22:22', 5, 'normal', 'no', 2, 'cama'),
(11, 15345345, '2023-09-20 19:34:44', 5, 'emergencia', 'si', 3, 'baño'),
(12, 15444333, '2023-09-26 17:37:18', 4, 'emergencia', 'si', 1, 'cama'),
(13, 1544666, '2023-09-26 17:40:23', 6, 'normal', 'si', 3, 'baño'),
(14, 14333323, '2023-09-26 17:43:04', 18, 'normal', 'si', 4, 'cama'),
(15, 14333323, '2023-09-26 17:43:52', 18, 'normal', 'si', 4, 'cama'),
(16, 14333323, '2023-09-26 17:43:57', 18, 'normal', 'si', 4, 'cama'),
(17, 14333323, '2023-09-26 17:44:11', 18, 'normal', 'si', 4, 'cama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` int(100) NOT NULL,
  `area` text NOT NULL,
  `dni` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `nombre`, `apellido`, `telefono`, `area`, `dni`) VALUES
(2, 'andres', 'gomez', 152455678, 'medico clinico', 34555666),
(4, 'eduardo', 'ramirez', 1546678, 'quirofano 2', 34567890);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `dni` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `localidad` varchar(40) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `obraSocial` enum('Si','No') NOT NULL,
  `obraSocialTexto` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `medicoAsignado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nombre`, `apellido`, `dni`, `edad`, `telefono`, `sexo`, `direccion`, `localidad`, `provincia`, `obraSocial`, `obraSocialTexto`, `fecha_nacimiento`, `medicoAsignado`) VALUES
(8, 'yohana', 'vaca', 46038323, 18, 156847538, 'femenino', 'mariano moreno 435', 'monte cristo', 'cordoba', 'Si', '', '2004-11-03', '2'),
(10, 'milena', 'colmenares', 46225359, 18, 153865088, 'femenino', 'mariano moreno 419', 'monte cristo', 'cordoba', 'No', '', '2005-03-01', '2'),
(11, 'Santiago', 'Miras', 45703995, 18, 158753931, 'masculino', 'juan sanchez 915', 'malvinas arg', 'cordoba', 'No', '', '2004-09-27', '4'),
(12, 'valentin', 'almada', 45932631, 18, 153882412, 'femenino', 'intendente rico 371', 'monte cristo', 'cordoba', 'Si', 'erygae', '2222-02-12', '2'),
(14, 'valentin', 'almada', 46555777, 18, 154443333, 'femenino', 'hipolito yrigoyen', 'monte cristo', 'cordoba', 'Si', 'ospm', '2023-09-17', '4'),
(15, 'valentin', 'almada', 46555777, 18, 154443333, 'femenino', 'hipolito yrigoyen', 'monte cristo', 'cordoba', 'Si', 'ospm', '2023-09-17', '4'),
(16, 'valentin', 'almada', 123, 18, 152344, 'masculino', 'juan sanchez 915', 'monte cristo', 'cordoba', 'No', '', '2023-09-24', '2'),
(17, 'valentin', 'almada', 46555777, 18, 154443333, 'femenino', 'hipolito yrigoyen', 'monte cristo', 'cordoba', 'Si', 'ospm', '2023-09-17', '4'),
(18, 'valentin', 'almada', 46555777, 18, 154443333, 'femenino', 'hipolito yrigoyen', 'monte cristo', 'cordoba', 'Si', 'ospm', '2023-09-17', '4'),
(19, 'valentin', 'almada', 46555777, 18, 154443333, 'femenino', 'hipolito yrigoyen', 'monte cristo', 'cordoba', 'Si', 'ospm', '2023-09-17', '4'),
(20, 'AAAAAA', 'aaaaaaaaaaaaa', 123, 12, 153882412, 'masculino', 'aaaaaaa 1223', 'aaaaaa', 'aaaaaaa', 'Si', 'aaaa', '2012-12-12', '4'),
(21, 'AAAAAA', 'aaaaaaaaaaaaa', 112123, 12, 153882412, 'femenino', 'aaaaaaa 1223', 'aaaaaa', 'aaaaaaa', 'Si', 'aaaa', '2012-12-12', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(11) NOT NULL,
  `medicoAsignado` varchar(20) NOT NULL,
  `diagnostico` varchar(100) NOT NULL,
  `tratamiento` varchar(100) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id_reporte`, `medicoAsignado`, `diagnostico`, `tratamiento`, `observaciones`, `dni`) VALUES
(1, 'dfr', 'ebhf', 'fjg', 'fb', 46555777),
(2, 'wg', 'ewgwrg', '<weg', 'fwef', 46990),
(3, 'dfr', 'ebhf', 'fjg', 'fb', 46555777),
(5, '2', 'mal', 'bañarse e ibuprofeno cada 8 minutos', 'palida', 8),
(6, '2', 'mal', 'bañarse e ibuprofeno cada 8 minutos', 'palida', 8),
(7, '2', 'mal', 'bañarse e ibuprofeno cada 8 minutos', 'palida', 8),
(8, '2', 'mal', 'bañarse e ibuprofeno cada 8 minutos', 'palida', 8),
(9, '2', 'hiperactividad', 'comida para perro y agarrar la pala cada 8 hs', 'parece un golden jaja', 45932631);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  ADD PRIMARY KEY (`id_llamada`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id_llamada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `fk_id_area` FOREIGN KEY (`id_area`) REFERENCES `llamadas` (`id_llamada`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
