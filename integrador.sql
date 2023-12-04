-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 03:08:06
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
-- Base de datos: `integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_vehiculo`
--

CREATE TABLE `cal_vehiculo` (
  `id` int(11) NOT NULL,
  `calificacion` int(10) NOT NULL,
  `id_recorrido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorridos`
--

CREATE TABLE `recorridos` (
  `id` int(11) NOT NULL,
  `localidad-inicio` varchar(100) NOT NULL,
  `localidad-fin` varchar(100) NOT NULL,
  `cooperativa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `recorridos`
--

INSERT INTO `recorridos` (`id`, `localidad-inicio`, `localidad-fin`, `cooperativa`) VALUES
(1, 'Las Toninas', 'Costa del Este', 2),
(2, 'Costa del este', 'Las toninas', 2),
(3, 'San Clemente', 'Mar de ajo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombreApellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombreApellido`, `email`) VALUES
(1, 'pablo', 'pablo', '', 'pablo'),
(2, 'pepe', 'pepe1231', '', 'pepe@gmail.com'),
(3, 'hola', '1231', '', 'hola@gmail.com'),
(4, 'asdla', 'asljdasl', '', 'asdkjas@gmail.com'),
(5, 'ajskdsajd', '.asmfsa1231', '', 'kjsad@gmail.com'),
(6, 'asjkdk', 'lakjfslas', '', 'aksjfka@gmail.com'),
(7, 'aasjsa', 'aslsalkdas', '', 'lasjdlak'),
(8, 'asjdn', 'dslak', '', 'lsakjdl'),
(9, 'alksdjka', 'lsakjdla', '', 'asldjsal'),
(10, 'asfaskl', 'saldsakd', '', 'aslkdjaksl'),
(11, 'asfaskl', 'saldsakd', '', 'aslkdjaksl'),
(12, 'aslkdj', 'aslkdjad', '', 'adslkdjl'),
(13, 'ldassk', 'laksjda', '', 'ladskjd'),
(14, 'ajdsk', 'dlasjd', '', 'daslkdj'),
(15, 'ajdsk', 'dlasjd', '', 'daslkdj'),
(16, 'alkjsdl', 'aksldjsa', '', 'dlaksdk'),
(17, 'asdl', 'lkd', '', 'dlsakjdl'),
(18, 'laksdjl', 'dl', '', 'daslkjd'),
(19, 'slkaj', 'laksdas', '', 'lsakdkl'),
(20, 'lADJS', 'alsdsa', '', 'SALDJLldf'),
(21, 'asjfla', 'ldasda', '', 'aslkdjla'),
(22, 'alskfj', 'lskald', '', 'adslksla'),
(23, 'ajdkskas', 'dlsad', '', 'lasdjas'),
(24, 'ajkda', 'lkdasda', '', 'alksdjdk'),
(25, 'alkdjasl', 'lladsd', '', 'saldksa'),
(26, 'hola', 'lksajas', '', 'asñdl@gmail.com'),
(27, 'alsd', 'asldka', '', 'alskdkl'),
(28, 'askdj', 'lskadlda', '', 'asdaslk'),
(29, 'askfj', 'aldkas', '', 'ldaskjdl'),
(30, 'akdlq', 'lsakdkl', '', 'adlksd'),
(31, 'askjfas', 'lasjlda', '', 'salkdj'),
(32, 'KDJAKS', 'asdas', '', 'sadaskd'),
(33, 'ajsdjl', 'dlsakdla', '', 'asldl'),
(34, 'lasdjlk', 'asdkasl', '', 'asldsa'),
(35, 'pepe', '122131', '', 'pepe@gmail.com'),
(36, 'pepe', '1231231', '', 'pepe@gmail.com'),
(37, 'pepe', '213213', '', 'pepe'),
(38, 'pepe', 'asñdas', '', 'pepe@gmail.com'),
(39, 'pepe', 'asljdsa', '', 'pepe@gmail.com'),
(40, 'pepe', 'aklsdja', '', 'pepe@gmail.com'),
(41, 'pepe', 'klasjdlak', '', 'pepe@gmail.com'),
(42, 'pepe', 'klasjdlak', '', 'pepe@gmail.com'),
(43, 'pepe', 'asdsakj', '', 'pepe@gmail.com'),
(44, 'pepe', 'asdsakj', '', 'pepe@gmail.com'),
(45, 'pepe', 'asdsakj', '', 'pepe@gmail.com'),
(46, 'pepe', 'asdsakj', '', 'pepe@gmail.com'),
(47, 'pepe', 'sjkadhka', '', 'pepe@gmail.com'),
(48, 'pepe', 'sjkadhka', '', 'pepe@gmail.com'),
(49, 'pepe', 'sjkadhka', '', 'pepe@gmail.com'),
(50, 'pepe', 'sjkadhka', '', 'pepe@gmail.com'),
(51, 'pepe', 'sjkadhka', '', 'pepe@gmail.com'),
(52, 'pepe', 'sjkadhka', '', 'pepe@gmail.com'),
(53, 'pepe', 'asdjakjd', '', 'pepe@gmail.com'),
(54, 'pepe', 'asdjakjd', '', 'pepe@gmail.com'),
(55, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(56, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(57, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(58, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(59, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(60, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(61, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(62, 'pepe', 'kajshdajs', '', 'pepe@gmail.com'),
(63, 'pepe', 'kjasdhsja', '', 'pepe@gmail.com'),
(64, 'pepe', 'aslkda', '', 'pepe@gmail.com'),
(65, 'dlksadj12w21', 'lakds', '', 'aslkdj123'),
(66, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(67, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(68, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(69, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(70, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(71, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(72, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(73, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(74, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(75, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(76, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(77, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(78, 'pepe', 'zsdklada', '', 'pepe@gmail.com'),
(79, 'laksjdksa1', 'aslkjd', '', 'lajd892'),
(80, 'aslkdjl12', 'salkdj2', '', 'lsadjld12321'),
(81, 'ajsldsajldlk', 'asdkasl', '', 'ñ1klsadmlakd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cal_vehiculo`
--
ALTER TABLE `cal_vehiculo`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cal_vehiculo`
--
ALTER TABLE `cal_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
