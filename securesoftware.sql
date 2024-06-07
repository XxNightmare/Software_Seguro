-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2024 a las 04:11:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `securesoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', ''),
(2, 'Docentes', ''),
(3, 'Alumnos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `name_` varchar(100) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `hash` varchar(150) NOT NULL,
  `alterMail` varchar(250) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `lastName_F` varchar(150) NOT NULL,
  `lastName_M` varchar(150) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `name_`, `pass`, `hash`, `alterMail`, `first_name`, `lastName_F`, `lastName_M`, `birth_date`, `age`, `id_perfil`) VALUES
(8, 'a21110143@ceti.mx', 'hol9/mdj', '$2y$10$eLlpfS6NCVH4Bhp0RTYONuYThPNmKqAsOgVdWvj586uIVoL4oSa3u', 'a21110143@ceti.mx', 'Rafael', 'Otero', '', '0000-00-00', 23, 3),
(12, 'jona88738@gmail.com', 'Jona-_13', '$2y$10$WDWOXQtSNGoh.Pyu7mjdlemiTEGIsH7/2BjZYvDoGnguk7HOYIFX2', 'aux@gmail.com', 'Jonathan', 'Arellano', 'Perez', '0000-00-00', 23, 2),
(13, 'alex@gmail.com', 'Alex_132', '$2y$10$II0SUyGTSsm74aLbmsGn7OHjWcphsO1PoVMS8UAlarfvoucPMTgQm', 'aux@gmail.com', 'Alex', 'sdasd', 'Tobar', '0000-00-00', 23, 1),
(14, 'alexx@gmail.com', 'AA', '$2y$10$2cl.BwYiykGaiGlaBhPlJeHBzP5FJGlRXJQU/BKRU2eJ8rLx9oCyu', 'asd', 'sd', 'a', 'a', '0000-00-00', 12, 1),
(15, 'au@gmail.com', 'Joklaid_', '$2y$10$hQyoe2MMMbfdip5YnZYI5uVfJBBzZ9sQdvYE0PihaTYuXrxC9foZa', 'aux@gmail.com', 'aux', 'aux', 'aux', '0000-00-00', 23, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
