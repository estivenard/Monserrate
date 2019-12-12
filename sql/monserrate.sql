-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2019 a las 22:29:12
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `monserrate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Id` int(5) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Cedula` varchar(15) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `Contraseña` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`Id`, `Nombre`, `Cedula`, `Correo`, `Contraseña`) VALUES
(1, 'Marlon Ardila', '1234567', 'marlon@gmail.com', 'marlon'),
(3, 'Nixon Cruz', '9874561', 'Nixon@gmail.com', 'nixon'),
(5, 'Omar Villarraga', '1233902293', 'villarraga_omar@hotmail.com', 'omar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planamor1`
--

CREATE TABLE `planamor1` (
  `Id_amor1` int(11) NOT NULL,
  `Nombre_amor1` text NOT NULL,
  `Apellido_amor1` text NOT NULL,
  `Fecha_amor1` date NOT NULL,
  `Email_amor1` varchar(30) NOT NULL,
  `Plan_amor1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planamor1`
--

INSERT INTO `planamor1` (`Id_amor1`, `Nombre_amor1`, `Apellido_amor1`, `Fecha_amor1`, `Email_amor1`, `Plan_amor1`) VALUES
(1, 'jenniffer brigitte', 'cervantes boada', '2020-09-14', 'jeniffercervantes@gmail.com', 'planamoryamistad1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planamor2`
--

CREATE TABLE `planamor2` (
  `Id_amor2` int(11) NOT NULL,
  `Nombre_amor2` text NOT NULL,
  `Apellido_amor2` text NOT NULL,
  `Fecha_amor2` date NOT NULL,
  `Email_amor2` varchar(30) NOT NULL,
  `Plan_amor2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planamor2`
--

INSERT INTO `planamor2` (`Id_amor2`, `Nombre_amor2`, `Apellido_amor2`, `Fecha_amor2`, `Email_amor2`, `Plan_amor2`) VALUES
(1, 'Nixon', 'Cruz', '2020-09-15', 'ncruz@gmail.com', 'planamoryamistad2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planfamilar1`
--

CREATE TABLE `planfamilar1` (
  `Id_fam1` int(11) NOT NULL,
  `Nombre_fam1` text NOT NULL,
  `Apellido_fam1` text NOT NULL,
  `Cantidad_fam1` int(2) NOT NULL,
  `Fecha_fam1` date NOT NULL,
  `Email_fam1` varchar(30) NOT NULL,
  `Plan_fam1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planfamilar1`
--

INSERT INTO `planfamilar1` (`Id_fam1`, `Nombre_fam1`, `Apellido_fam1`, `Cantidad_fam1`, `Fecha_fam1`, `Email_fam1`, `Plan_fam1`) VALUES
(2, 'jorge armando ', 'vargas neira', 5, '2019-12-25', 'jorge@gmail.com', 'planfamiliar1'),
(3, 'edwin', 'lopez', 3, '2019-12-28', 'alopezholguin@gmail.com', 'planfamiliar1'),
(4, 'alambrito', 'gutierrez', 5, '2019-12-28', 'jorge@gmail.com', 'planfamiliar1'),
(5, 'nixon', 'cruz', 3, '2019-12-19', 'sdsd@fgf', 'planfamiliar1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planfamilar2`
--

CREATE TABLE `planfamilar2` (
  `Id_fam2` int(11) NOT NULL,
  `Nombre_fam2` text NOT NULL,
  `Apellido_fam2` text NOT NULL,
  `Cantidad_fam2` int(2) NOT NULL,
  `Fecha_fam2` date NOT NULL,
  `Email_fam2` varchar(30) NOT NULL,
  `Plan_fam2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planfamilar2`
--

INSERT INTO `planfamilar2` (`Id_fam2`, `Nombre_fam2`, `Apellido_fam2`, `Cantidad_fam2`, `Fecha_fam2`, `Email_fam2`, `Plan_fam2`) VALUES
(1, 'jorge armando', 'vargas neira', 15, '2020-01-01', 'jorge@gmail.com', 'planfamiliar2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plannav1`
--

CREATE TABLE `plannav1` (
  `Id_nav1` int(11) NOT NULL,
  `Nombre_nav1` text NOT NULL,
  `Apellido_nav1` text NOT NULL,
  `Cantidad_nav1` int(10) NOT NULL,
  `Fecha_nav1` date NOT NULL,
  `Email_nav1` varchar(20) NOT NULL,
  `Plan_nav1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plannav1`
--

INSERT INTO `plannav1` (`Id_nav1`, `Nombre_nav1`, `Apellido_nav1`, `Cantidad_nav1`, `Fecha_nav1`, `Email_nav1`, `Plan_nav1`) VALUES
(5, 'Susan', 'Cardenas', 4, '2019-12-13', 'alopezholguin@gmail.', 'plannavideño1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plannav2`
--

CREATE TABLE `plannav2` (
  `Id_nav2` int(11) NOT NULL,
  `Nombre_nav2` text NOT NULL,
  `Apellido_nav2` text NOT NULL,
  `Cantidad_nav2` int(2) NOT NULL,
  `Fecha_nav2` date NOT NULL,
  `Email_nav2` varchar(30) NOT NULL,
  `Plan_nav2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plannav2`
--

INSERT INTO `plannav2` (`Id_nav2`, `Nombre_nav2`, `Apellido_nav2`, `Cantidad_nav2`, `Fecha_nav2`, `Email_nav2`, `Plan_nav2`) VALUES
(1, 'Carmen', 'Castañeda', 30, '2019-12-20', 'carmen@gmail.com', 'plannavideño2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `planamor1`
--
ALTER TABLE `planamor1`
  ADD PRIMARY KEY (`Id_amor1`);

--
-- Indices de la tabla `planamor2`
--
ALTER TABLE `planamor2`
  ADD PRIMARY KEY (`Id_amor2`);

--
-- Indices de la tabla `planfamilar1`
--
ALTER TABLE `planfamilar1`
  ADD PRIMARY KEY (`Id_fam1`);

--
-- Indices de la tabla `planfamilar2`
--
ALTER TABLE `planfamilar2`
  ADD PRIMARY KEY (`Id_fam2`);

--
-- Indices de la tabla `plannav1`
--
ALTER TABLE `plannav1`
  ADD PRIMARY KEY (`Id_nav1`);

--
-- Indices de la tabla `plannav2`
--
ALTER TABLE `plannav2`
  ADD PRIMARY KEY (`Id_nav2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `planamor1`
--
ALTER TABLE `planamor1`
  MODIFY `Id_amor1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `planamor2`
--
ALTER TABLE `planamor2`
  MODIFY `Id_amor2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `planfamilar1`
--
ALTER TABLE `planfamilar1`
  MODIFY `Id_fam1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `planfamilar2`
--
ALTER TABLE `planfamilar2`
  MODIFY `Id_fam2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plannav1`
--
ALTER TABLE `plannav1`
  MODIFY `Id_nav1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `plannav2`
--
ALTER TABLE `plannav2`
  MODIFY `Id_nav2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
