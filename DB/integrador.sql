-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 19:11:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_choferes`
--

CREATE TABLE `asignacion_choferes` (
  `id` int(11) NOT NULL,
  `id_chofer` int(11) NOT NULL,
  `id_recorrido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_vehiculos`
--

CREATE TABLE `asignacion_vehiculos` (
  `id` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_recorrido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_chofer`
--

CREATE TABLE `cal_chofer` (
  `id` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_chofer` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(1064) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_recorrido`
--

CREATE TABLE `cal_recorrido` (
  `id` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_recorrido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(1064) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_vehiculo`
--

CREATE TABLE `cal_vehiculo` (
  `id` int(11) NOT NULL,
  `calificacion` int(10) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(1064) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choferes`
--

CREATE TABLE `choferes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `foto` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `choferes`
--

INSERT INTO `choferes` (`id`, `nombre`, `dni`, `foto`) VALUES
(1, 'Jorge Lito', '23452189', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorridos`
--

CREATE TABLE `recorridos` (
  `id` int(11) NOT NULL,
  `localidad_inicio` varchar(100) NOT NULL,
  `localidad_fin` varchar(100) NOT NULL,
  `cooperativa` tinyint(1) NOT NULL,
  `foto` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `recorridos`
--

INSERT INTO `recorridos` (`id`, `localidad_inicio`, `localidad_fin`, `cooperativa`, `foto`) VALUES
(1, 'Las Toninas', 'Costa del Este', 2, NULL),
(2, 'Costa del este', 'Las toninas', 2, NULL),
(3, 'San Clemente', 'Mar de ajo', 1, NULL),
(4, 'Mar de Ajo', 'San Bernardo', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombreApellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombreApellido`, `email`, `admin`) VALUES
(1, 'pablo', 'pablo', '', 'pablo', 0),
(2, 'pepe', 'pepe1231', '', 'pepe@gmail.com', 0),
(3, 'hola', '1231', '', 'hola@gmail.com', 0),
(4, 'asdla', 'asljdasl', '', 'asdkjas@gmail.com', 0),
(5, 'ajskdsajd', '.asmfsa1231', '', 'kjsad@gmail.com', 0),
(6, 'asjkdk', 'lakjfslas', '', 'aksjfka@gmail.com', 0),
(7, 'aasjsa', 'aslsalkdas', '', 'lasjdlak', 0),
(8, 'asjdn', 'dslak', '', 'lsakjdl', 0),
(9, 'alksdjka', 'lsakjdla', '', 'asldjsal', 0),
(10, 'asfaskl', 'saldsakd', '', 'aslkdjaksl', 0),
(11, 'asfaskl', 'saldsakd', '', 'aslkdjaksl', 0),
(12, 'aslkdj', 'aslkdjad', '', 'adslkdjl', 0),
(13, 'ldassk', 'laksjda', '', 'ladskjd', 0),
(14, 'ajdsk', 'dlasjd', '', 'daslkdj', 0),
(15, 'ajdsk', 'dlasjd', '', 'daslkdj', 0),
(16, 'alkjsdl', 'aksldjsa', '', 'dlaksdk', 0),
(17, 'asdl', 'lkd', '', 'dlsakjdl', 0),
(18, 'laksdjl', 'dl', '', 'daslkjd', 0),
(19, 'slkaj', 'laksdas', '', 'lsakdkl', 0),
(20, 'lADJS', 'alsdsa', '', 'SALDJLldf', 0),
(21, 'asjfla', 'ldasda', '', 'aslkdjla', 0),
(22, 'alskfj', 'lskald', '', 'adslksla', 0),
(23, 'ajdkskas', 'dlsad', '', 'lasdjas', 0),
(24, 'ajkda', 'lkdasda', '', 'alksdjdk', 0),
(25, 'alkdjasl', 'lladsd', '', 'saldksa', 0),
(26, 'hola', 'lksajas', '', 'asñdl@gmail.com', 0),
(27, 'alsd', 'asldka', '', 'alskdkl', 0),
(28, 'askdj', 'lskadlda', '', 'asdaslk', 0),
(29, 'askfj', 'aldkas', '', 'ldaskjdl', 0),
(30, 'akdlq', 'lsakdkl', '', 'adlksd', 0),
(31, 'askjfas', 'lasjlda', '', 'salkdj', 0),
(32, 'KDJAKS', 'asdas', '', 'sadaskd', 0),
(33, 'ajsdjl', 'dlsakdla', '', 'asldl', 0),
(34, 'lasdjlk', 'asdkasl', '', 'asldsa', 0),
(35, 'pepe', '122131', '', 'pepe@gmail.com', 0),
(36, 'pepe', '1231231', '', 'pepe@gmail.com', 0),
(37, 'pepe', '213213', '', 'pepe', 0),
(38, 'pepe', 'asñdas', '', 'pepe@gmail.com', 0),
(39, 'pepe', 'asljdsa', '', 'pepe@gmail.com', 0),
(40, 'pepe', 'aklsdja', '', 'pepe@gmail.com', 0),
(41, 'pepe', 'klasjdlak', '', 'pepe@gmail.com', 0),
(42, 'pepe', 'klasjdlak', '', 'pepe@gmail.com', 0),
(43, 'pepe', 'asdsakj', '', 'pepe@gmail.com', 0),
(44, 'pepe', 'asdsakj', '', 'pepe@gmail.com', 0),
(45, 'pepe', 'asdsakj', '', 'pepe@gmail.com', 0),
(46, 'pepe', 'asdsakj', '', 'pepe@gmail.com', 0),
(47, 'pepe', 'sjkadhka', '', 'pepe@gmail.com', 0),
(48, 'pepe', 'sjkadhka', '', 'pepe@gmail.com', 0),
(49, 'pepe', 'sjkadhka', '', 'pepe@gmail.com', 0),
(50, 'pepe', 'sjkadhka', '', 'pepe@gmail.com', 0),
(51, 'pepe', 'sjkadhka', '', 'pepe@gmail.com', 0),
(52, 'pepe', 'sjkadhka', '', 'pepe@gmail.com', 0),
(53, 'pepe', 'asdjakjd', '', 'pepe@gmail.com', 0),
(54, 'pepe', 'asdjakjd', '', 'pepe@gmail.com', 0),
(55, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(56, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(57, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(58, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(59, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(60, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(61, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(62, 'pepe', 'kajshdajs', '', 'pepe@gmail.com', 0),
(63, 'pepe', 'kjasdhsja', '', 'pepe@gmail.com', 0),
(64, 'pepe', 'aslkda', '', 'pepe@gmail.com', 0),
(65, 'dlksadj12w21', 'lakds', '', 'aslkdj123', 0),
(66, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(67, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(68, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(69, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(70, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(71, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(72, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(73, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(74, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(75, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(76, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(77, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(78, 'pepe', 'zsdklada', '', 'pepe@gmail.com', 0),
(79, 'laksjdksa1', 'aslkjd', '', 'lajd892', 0),
(80, 'aslkdjl12', 'salkdj2', '', 'lsadjld12321', 0),
(81, 'ajsldsajldlk', 'asdkasl', '', 'ñ1klsadmlakd', 0),
(82, 'aaa', 'aaa', '', 'aaa@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `capacidad_pasajeros` int(11) NOT NULL,
  `foto` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `modelo`, `capacidad_pasajeros`, `foto`) VALUES
(1, '6AM-5TF', 'Modelo 2000', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_choferes`
--
ALTER TABLE `asignacion_choferes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asignacion_vehiculos`
--
ALTER TABLE `asignacion_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cal_chofer`
--
ALTER TABLE `cal_chofer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cal_recorrido`
--
ALTER TABLE `cal_recorrido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cal_vehiculo`
--
ALTER TABLE `cal_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion_choferes`
--
ALTER TABLE `asignacion_choferes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignacion_vehiculos`
--
ALTER TABLE `asignacion_vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cal_chofer`
--
ALTER TABLE `cal_chofer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cal_recorrido`
--
ALTER TABLE `cal_recorrido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cal_vehiculo`
--
ALTER TABLE `cal_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `choferes`
--
ALTER TABLE `choferes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
