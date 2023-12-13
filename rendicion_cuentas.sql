-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2023 a las 19:29:28
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
-- Base de datos: `rendicion_cuentas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `annio`
--

CREATE TABLE `annio` (
  `id` int(11) NOT NULL,
  `annio` varchar(10) NOT NULL
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
  `categoria` varchar(50) NOT NULL,
  `subcategoria` varchar(50) DEFAULT NULL,
  `documento` varchar(150) NOT NULL,
  `usr_ext` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `fecha`, `annio`, `trimestre`, `categoria`, `subcategoria`, `documento`, `usr_ext`) VALUES
(1, '2023-12-04 22:55:58', 2024, 1, '1', '1', 'usr1_2024_1_1_1.pdf', 'usr1'),
(2, '2023-12-04 22:58:38', 2024, 1, '1', '2', 'usr1_2024_1_1_2.pdf', 'usr1'),
(3, '2023-12-04 22:59:35', 2024, 1, '1', '3', 'usr1_2024_1_1_3.pdf', 'usr1'),
(4, '2023-12-04 23:01:19', 2024, 1, '1', '4', 'usr1_2024_1_1_4.pdf', 'usr1'),
(5, '2023-12-04 23:03:34', 2024, 1, '1', '5', 'usr1_2024_1_1_5.pdf', 'usr1'),
(6, '2023-12-04 23:04:00', 2024, 1, '1', '6', 'usr1_2024_1_1_6.pdf', 'usr1'),
(7, '2023-12-04 23:05:14', 2024, 2, '1', '6', 'usr1_2024_2_1_6.pdf', 'usr1'),
(8, '2023-12-04 23:09:25', 2024, 1, '1', '7', 'usr1_2024_1_1_7.pdf', 'usr1'),
(9, '2023-12-04 23:36:14', 2024, 0, '3', '8', '2024_0_3_8.pdf', 'usr1'),
(10, '2023-12-04 23:36:38', 2024, 0, '3', '9', '2024_0_3_9.pdf', 'usr1'),
(11, '2023-12-04 23:37:08', 2023, 0, '3', '9', '2023_0_3_9.pdf', 'usr1'),
(12, '2023-12-04 23:55:37', 2024, 1, '4', '15', 'usr1_2024_1_4_15.pdf', 'usr1'),
(13, '2023-12-04 23:59:25', 2024, 1, '4', '14', 'usr1_2024_1_4_14.pdf', 'usr1'),
(14, '2023-12-05 00:05:18', 2024, 1, '4', '14', 'usr1_2024_1_4_14.pdf', 'usr1'),
(15, '2023-12-05 00:15:49', 2024, 0, '3', '10', '2024_0_3_10.pdf', 'usr1'),
(16, '2023-12-05 00:18:29', 2024, 0, '3', '8', 'usr1_2024_0_3_8.pdf', 'usr1'),
(17, '2023-12-05 00:21:16', 2024, 0, '3', '10', 'usr1_2024_0_3_10.pdf', 'usr1'),
(18, '2023-12-05 00:21:51', 2024, 1, '4', '14', 'usr1_2024_1_4_14.pdf', 'usr1'),
(19, '2023-12-05 00:27:05', 2024, 4, '1', '6', 'usr1_2024_4_1_6.pdf', 'usr1'),
(20, '2023-12-05 23:30:29', 2024, 0, '5', '15', '1_2024_5_15.pdf', '1'),
(21, '2023-12-05 23:41:58', 2024, 0, '5', '15', 'usr1_2024_5_15.pdf', 'usr1'),
(22, '2023-12-12 15:33:20', 2024, 4, '1', '1', '1_2024_4_1_1.pdf', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
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
-- Estructura de tabla para la tabla `topicos`
--

CREATE TABLE `topicos` (
  `id` int(11) NOT NULL,
  `topico` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `topicos`
--

INSERT INTO `topicos` (`id`, `topico`, `img`) VALUES
(1, 'Estados financieros', '<svg class=\"bi\" width=\"1em\" height=\"1em\"><use xlink:href=\"#money\"/></svg>'),
(2, 'Avance de gestión', '<svg class=\"bi\" width=\"1em\" height=\"1em\"><use xlink:href=\"#slider\"/></svg>'),
(3, 'Cuenta pública', '<svg class=\"bi\" width=\"1em\" height=\"1em\"><use xlink:href=\"#clipboard\"/></svg>'),
(4, 'Ayudas y subsidios', '<svg class=\"bi\" width=\"1em\" height=\"1em\"><use xlink:href=\"#pig\"/></svg>'),
(5, 'Manual de contabilidad', '<svg class=\"bi\" width=\"1em\" height=\"1em\"><use xlink:href=\"#book\"/></svg>'),
(6, 'Recursos ejercidos', '<svg class=\"bi\" width=\"1em\" height=\"1em\"><use xlink:href=\"#money2\"/></svg>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
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
-- Indices de la tabla `topicos`
--
ALTER TABLE `topicos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `topicos`
--
ALTER TABLE `topicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
