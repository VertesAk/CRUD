-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2021 a las 00:26:13
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `IdPersona` int(30) NOT NULL,
  `ApellidoPersona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `NombrePersona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FechaPersona` date NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `MovilPersona` int(30) NOT NULL,
  `DniPersona` int(30) NOT NULL,
  `GithubPersona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `LinkedinPersona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `PaisPersona` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`IdPersona`, `ApellidoPersona`, `NombrePersona`, `FechaPersona`, `email`, `MovilPersona`, `DniPersona`, `GithubPersona`, `LinkedinPersona`, `PaisPersona`) VALUES
(788, 'Ronaldo', 'Cristiano', '1985-02-05', 'Bicho@gmail.com', 2147483647, 112392820, 'https://github.com/Bicho', 'https://www.linkedin.com/Bicho', 'Portugal'),
(932, 'Messi', 'Lionel', '1987-06-24', 'Messi@gmail.com', 223145554, 11239280, 'https://github.com/Messi', 'https://www.linkedin.com/Messi', 'Argentina'),
(4321, 'Mars', 'Bruno', '1985-10-08', 'Mars@gmail.com', 2147483647, 11239284, 'https://github.com/Brunito', 'https://www.linkedin.com/Bruno', 'USA'),
(19781, 'García', 'Carlos', '2021-10-23', 'Saynomore@gmail.com', 22356889, 112312, 'https://github.com/Charly', 'https://www.linkedin.com/Charl', 'Argentina'),
(20189, 'Wang', 'Mohamed', '1990-10-25', 'Xina@gmail.com', 1047483647, 11111, 'https://github.com/zedong', 'https://www.linkedin.com/ping', 'Taiwan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`IdPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
