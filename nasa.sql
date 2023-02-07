-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2023 a las 17:54:12
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nasa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id_c` int(11) NOT NULL,
  `id_relacional_c` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `tipo_nave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id_c`, `id_relacional_c`, `tipo`, `tipo_nave`) VALUES
(48, 8686, '12600', 'nave1'),
(49, 4851, '34000', 'nave1'),
(50, 1870, '23000', 'nave1'),
(51, 7276, '456kg', 'nave2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lanzadera`
--

CREATE TABLE `lanzadera` (
  `id_la` int(11) NOT NULL,
  `nombre_la` text NOT NULL,
  `combustible_la` text NOT NULL,
  `empuje_la` text NOT NULL,
  `peso_la` text NOT NULL,
  `img_la` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lanzadera`
--

INSERT INTO `lanzadera` (`id_la`, `nombre_la`, `combustible_la`, `empuje_la`, `peso_la`, `img_la`) VALUES
(5, 'Saturno V', 'combustible químico sólido', '3500', '2900', 'imagenes/lanzadera.png'),
(6, 'El energia', 'petróleo refinado y oxígeno líquido', '3060', '2400', 'imagenes/lanzadera.png'),
(7, 'el Protón ruso', ' dimetilhidracina y el óxido de nitrógeno', '1500000', '657800', 'imagenes/lanzadera.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naves`
--

CREATE TABLE `naves` (
  `id_n` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `empuje` text NOT NULL,
  `destino` text NOT NULL,
  `combustible` text NOT NULL,
  `pais` text NOT NULL,
  `id_relacional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `naves`
--

INSERT INTO `naves` (`id_n`, `nombre`, `empuje`, `destino`, `combustible`, `pais`, `id_relacional`) VALUES
(54, 'atomo', '3400', 'mercurio', 'combustion liquida', 'francia', 8686),
(55, 'apolo', '230000', 'saturno', 'quimico liquido', 'rusia', 4851),
(56, 'nectuno', '33000', 'marte', 'gasoli liquida', 'rusia', 1870),
(57, 'hola', '34000', 'luna', 'oxigeno', 'estados unidos', 7276);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notripulada`
--

CREATE TABLE `notripulada` (
  `id_ntri` int(11) NOT NULL,
  `nombre_ntri` text NOT NULL,
  `destino_ntri` text NOT NULL,
  `empuje_ntri` text NOT NULL,
  `peso_ntri` text NOT NULL,
  `img_ntri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notripulada`
--

INSERT INTO `notripulada` (`id_ntri`, `nombre_ntri`, `destino_ntri`, `empuje_ntri`, `peso_ntri`, `img_ntri`) VALUES
(1, 'pionero Xl', 'jupiter', '26 kg', '258 kg', 'imagenes/notripulada.png'),
(2, 'Mariner IV', 'marte', '22,44 kg', '230 kg', 'imagenes/notripulada.png'),
(3, 'Mariner X', 'mercurio', '65,79 kg', '1093 kg', 'imagenes/notripulada.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tripulada`
--

CREATE TABLE `tripulada` (
  `id_tri` int(11) NOT NULL,
  `nombre_tri` text NOT NULL,
  `pais_tri` text NOT NULL,
  `orbita_tri` text NOT NULL,
  `peso_tri` text NOT NULL,
  `img_tri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tripulada`
--

INSERT INTO `tripulada` (`id_tri`, `nombre_tri`, `pais_tri`, `orbita_tri`, `peso_tri`, `img_tri`) VALUES
(1, 'Skylab', 'EE.UU', '435 km', '77 toneladas', 'imagenes/tripulada.png'),
(3, 'Salyut', 'union sovietica', '248,9 km', '19,8 toneladas', 'imagenes/tripulada.png'),
(4, 'Estacion espacial internacional', 'EE.UU,Rusia,Japon,Canada e Uropa', '386 km', '420 toneladas', 'imagenes/tripulada.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `lanzadera`
--
ALTER TABLE `lanzadera`
  ADD PRIMARY KEY (`id_la`);

--
-- Indices de la tabla `naves`
--
ALTER TABLE `naves`
  ADD PRIMARY KEY (`id_n`);

--
-- Indices de la tabla `notripulada`
--
ALTER TABLE `notripulada`
  ADD PRIMARY KEY (`id_ntri`);

--
-- Indices de la tabla `tripulada`
--
ALTER TABLE `tripulada`
  ADD PRIMARY KEY (`id_tri`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `lanzadera`
--
ALTER TABLE `lanzadera`
  MODIFY `id_la` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `naves`
--
ALTER TABLE `naves`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `notripulada`
--
ALTER TABLE `notripulada`
  MODIFY `id_ntri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tripulada`
--
ALTER TABLE `tripulada`
  MODIFY `id_tri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
