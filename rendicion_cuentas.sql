-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2023 a las 02:53:15
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rendicion_cuentas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `annio`
--

CREATE TABLE `annio` (
  `id` int(11) NOT NULL,
  `annio` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `annio`
--

INSERT INTO `annio` (`id`, `annio`) VALUES
(1, '2015'),
(2, '2016'),
(3, '2017'),
(4, '2018'),
(5, '2019'),
(6, '2020'),
(7, '2021'),
(8, '2023'),
(9, '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `annio` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subcategoria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documento` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `usr_ext` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `fecha`, `annio`, `trimestre`, `categoria`, `subcategoria`, `documento`, `usr_ext`) VALUES
(1, '2022-12-01 16:16:40', 2021, 2, '1', 'Información programática', '_2021_2_1_Información programática.css', NULL),
(2, '2022-12-01 16:18:35', 2023, 1, '1', 'Información programática', '2023_1_1_Información programática.php', NULL),
(3, '2022-12-01 16:18:50', 2023, 1, '1', 'Información programática', '2023_1_1_Información programática.php', NULL),
(4, '2022-12-01 16:19:04', 2023, 1, '1', 'Información programática', '2023_1_1_Información programática.php', NULL),
(5, '2022-12-01 16:19:32', 2023, 1, '1', 'Información programática', '2023_1_1_Información programática.php', NULL),
(6, '2022-12-01 16:19:34', 2023, 1, '1', 'Información programática', '2023_1_1_Información programática.php', NULL),
(7, '2022-12-01 16:19:38', 2023, 1, '1', 'Información programática', '2023_1_1_Información programática.php', NULL),
(8, '2022-12-01 16:20:11', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(9, '2022-12-01 16:21:04', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(10, '2022-12-01 16:21:08', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(11, '2022-12-01 16:21:46', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(12, '2022-12-01 16:22:53', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(13, '2022-12-01 16:22:56', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(14, '2022-12-01 16:23:17', 2024, 1, '1', 'Información presupuetaria', '2024_1_1_Información presupuetaria.css', NULL),
(15, '2022-12-01 16:23:28', 2018, 2, '1', 'Información contable', '2018_2_1_Información contable.css', NULL),
(16, '2022-12-01 16:25:39', 2018, 2, '1', 'Información contable', '2018_2_1_Información contable.css', NULL),
(17, '2022-12-01 16:25:52', 2018, 2, '1', 'Información contable', '2018_2_1_Información contable.css', NULL),
(18, '2022-12-01 16:29:36', 2018, 2, '1', 'Información contable', '2018_2_1_Información contable.css', NULL),
(19, '2022-12-01 16:29:59', 2018, 2, '1', 'Información contable', '2018_2_1_Información contable.css', NULL),
(20, '2022-12-01 16:30:23', 2018, 2, '1', 'Información contable', '2018_2_1_Información contable.css', NULL),
(21, '2023-11-24 12:23:08', 2024, 2, '1', 'Categoría...', '2024_2_1_Categoría....pdf', NULL),
(22, '2023-11-24 14:31:33', 2015, 2, '1', 'Información programática', '2015_2_1_Información programática.pdf', NULL),
(23, '2023-11-24 14:31:51', 2015, 2, '1', 'Información programática', '2015_2_1_Información programática.pdf', NULL),
(24, '2023-11-24 14:32:50', 2015, 2, '1', 'Notas a los estados financieros', '2015_2_1_Notas a los estados financieros.pdf', NULL),
(25, '2023-11-24 14:35:18', 2016, 1, '1', 'Notas a los estados financieros', '2016_1_1_Notas a los estados financieros.pdf', 1),
(26, '2023-11-24 14:37:41', 2016, 1, '1', 'Notas a los estados financieros', '2016_1_1_Notas a los estados financieros.pdf', 1),
(27, '2023-11-24 14:42:39', 2016, 1, '1', 'Notas a los estados financieros', '2016_1_1_Notas a los estados financieros.pdf', 1),
(28, '2023-11-24 14:42:42', 2016, 1, '1', 'Notas a los estados financieros', '2016_1_1_Notas a los estados financieros.pdf', 1),
(29, '2023-11-24 15:35:51', 2016, 2, '1', 'Información programática', '2016_2_1_Información programática.pdf', 1),
(30, '2023-11-24 15:38:57', 2024, 4, '1', 'Información contable', '2024_4_1_Información contable.pdf', 1),
(31, '2023-11-24 15:39:11', 2024, 4, '1', 'Información contable', '2024_4_1_Información contable.pdf', 1),
(32, '2023-11-24 15:42:58', 2024, 4, '1', 'Información contable', '2024_4_1_Información contable.pdf', 1),
(33, '2023-11-24 15:59:44', 2016, 3, '1', 'Información programática', '2016_3_1_Información programática.', 1),
(34, '2023-11-24 16:02:33', 2024, 4, '1', 'Indicadores de postura financiera', '2024_4_1_Indicadores de postura financiera.', 1),
(35, '2023-11-24 16:08:45', 2024, 1, '1', 'Indicadores_de_postura_financiera', '2024_1_1_Indicadores_de_postura_financiera.', 1),
(36, '2023-11-24 16:13:06', 2024, 3, '1', '5', '2024_3_1_5.', 1),
(37, '2023-11-24 16:14:28', 2015, 1, '1', '1', '2015_1_1_1.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `topico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`, `topico`) VALUES
(1, 'Notas a los estados financieros', 1),
(2, 'Información programática', 1),
(3, 'Información presupuetaria', 1),
(4, 'Información contable', 1),
(5, 'Anexos', 1),
(6, 'Indicadores de postura financiera', 1),
(7, 'Avance de gestión', 2),
(8, 'Notas a los estados financieros', 3),
(9, 'Información programática', 3),
(10, 'Información presupuestaria', 3),
(11, 'Información contable', 3),
(12, 'Anexos', 3),
(13, 'Formatos de disciplina financiera', 3),
(14, 'Ayudas y subsidios', 4),
(15, 'Manual de contabilidad', 5),
(16, 'Recursos ejercidos', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `subcategoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usr`, `pwd`, `perfil`) VALUES
(1, 'usr1', '123456789', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `annio`
--
ALTER TABLE `annio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `annio`
--
ALTER TABLE `annio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
