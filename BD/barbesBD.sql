-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2022 a las 00:28:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barbers`
--
CREATE DATABASE IF NOT EXISTS `barbers` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `barbers`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `SpCrearAgenda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCrearAgenda` (IN `_FECHA` DATE)   BEGIN

INSERT INTO agendas (FECHA) VALUES (_FECHA);

END$$

DROP PROCEDURE IF EXISTS `SpCrearBarbero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCrearBarbero` (IN `_DIRECCION` VARCHAR(30), IN `_FORMACION` VARCHAR(30), IN `_F_NACIMIENTO` DATE, IN `_NOMBRE` VARCHAR(30), IN `_NUM_CELULAR` INT(10))   BEGIN
INSERT INTO barberos (DIRECCION, FORMACION, F_NACIMIENTO, NOMBRE, NUM_CELULAR) VALUES (_DIRECCION, _FORMACION, _F_NACIMIENTO, _NOMBRE, _NUM_CELULAR);
END$$

DROP PROCEDURE IF EXISTS `SpCrearCita`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCrearCita` (IN `_FECHA` DATE, IN `_HORA` INT(10), IN `_NOMBRE` VARCHAR(30))   BEGIN

INSERT INTO citas (FECHA, HORA, NOMBRE) VALUES (_FECHA, _HORA, _NOMBRE);

END$$

DROP PROCEDURE IF EXISTS `SpEditarAgenda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEditarAgenda` (IN `_FECHA` DATE, IN `_ID_AGENDA` INT(10))   BEGIN

UPDATE agendas SET FECHA = _FECHA WHERE ID_AGENDA = _ID_AGENDA;

END$$

DROP PROCEDURE IF EXISTS `SpEditarBarbero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEditarBarbero` (IN `_DIRECCION` VARCHAR(30), IN `_FORMACION` VARCHAR(30), IN `_F_NACIMIENTO` DATE, IN `_NOMBRE` VARCHAR(30), IN `_NUM_CELULAR` INT(10), IN `_ID_BARBERO` INT(10))   BEGIN

UPDATE barberos SET DIRECCION = _DIRECCION, FORMACION = _FORMACION, F_NACIMIENTO = _F_NACIMIENTO, NOMBRE = _NOMBRE, NUM_CELULAR = _NUM_CELULAR WHERE ID_BARBERO = _ID_BARBERO;

END$$

DROP PROCEDURE IF EXISTS `SpEditarCita`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEditarCita` (IN `_FECHA` DATE, IN `_HORA` INT(10), IN `_NOMBRE` VARCHAR(30), IN `_ID_CITA` INT(10))   BEGIN

UPDATE citas SET FECHA = _FECHA, HORA = _HORA, NOMBRE = _NOMBRE WHERE ID_CITA = _ID_CITA;

END$$

DROP PROCEDURE IF EXISTS `SpEditarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEditarUsuario` (IN `_DIRECCION` VARCHAR(30), IN `_F_NACIMIENTO` DATE, IN `_NOMBRE` VARCHAR(30), IN `_NUM_CELULAR` INT(10), IN `_ID_USUARIO` INT(10))   BEGIN

UPDATE USUARIOS SET DIRECCION = _DIRECCION, F_NACIMIENTO = _F_NACIMIENTO, NOMBRE = _NOMBRE, NUM_CELULAR = _NUM_CELULAR  WHERE ID_USUARIO = _ID_USUARIO;

END$$

DROP PROCEDURE IF EXISTS `SpEliminarAgenda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEliminarAgenda` (IN `_FECHA` DATE, IN `_ID_AGENDA` INT(10))   BEGIN

DELETE FROM agendas WHERE ID_AGENDA = _ID_AGENDA;

END$$

DROP PROCEDURE IF EXISTS `SpEliminarBarbero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEliminarBarbero` (IN `_DIRECCION` VARCHAR(30), IN `_FORMACION` VARCHAR(30), IN `_F_NACIMIENTO` DATE, IN `_NOMBRE` VARCHAR(30), IN `_NUM_CELULAR` INT(10), IN `_ID_BARBERO` INT(10))   BEGIN

DELETE FROM barberos WHERE ID_BARBERO = _ID_BARBERO;

END$$

DROP PROCEDURE IF EXISTS `SpEliminarCita`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEliminarCita` (IN `_FECHA` DATE, IN `_HORA` INT(10), IN `_NOMBRE` VARCHAR(30), IN `_ID_CITA` INT(10))   BEGIN

DELETE FROM citas WHERE ID_CITA = _ID_CITA;

END$$

DROP PROCEDURE IF EXISTS `SpEliminarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpEliminarUsuario` (IN `_DIRECCION` INT(30), IN `_F_NACIMIENTO` INT(10), IN `_NOMBRE` INT(30), IN `_NUM_CELULAR` INT(10), IN `_ID_USUARIO` INT(10))   BEGIN

DELETE FROM usuarios WHERE ID_USUARIO = _ID_USUARIO;


END$$

DROP PROCEDURE IF EXISTS `SpInsertarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpInsertarUsuario` (IN `_CEDULA` INT(15), IN `_NOMBRE` INT(30), IN `_APELLIDO` VARCHAR(30), IN `_NUM_CELULAR` INT(15), IN `_F_NACIMIENTO` DATE, IN `_EMAIL` VARCHAR(30), IN `_CONTRASENA` VARCHAR(30))   BEGIN
INSERT INTO usuarios (CEDULA, NOMBRE, APELLIDO, NUM_CELULAR, F_NACIMIENTO, EMAIL, CONTRASENA ) VALUES (_CEDULA, _NOMBRE, _APELLIDO,  _NUM_CELULAR, _F_NACIMIENTO, _EMAIL, _CONTRASENA );


END$$

DROP PROCEDURE IF EXISTS `spMostrarServicios`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spMostrarServicios` ()   BEGIN

SELECT ID_SERVICIO, DESCRIPCION FROM servicios;

END$$

DROP PROCEDURE IF EXISTS `SpVerAgenda`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpVerAgenda` (IN `_FECHA` DATE, IN `_ID_AGENDA` INT(10))   BEGIN

SELECT * FROM agendas WHERE ID_AGENDA = _ID_AGENDA;

END$$

DROP PROCEDURE IF EXISTS `SpVerBarbero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpVerBarbero` (IN `_DIRECCION` VARCHAR(30), IN `_FORMACION` VARCHAR(30), IN `_F_NACIMIENTO` DATE, IN `_NOMBRE` VARCHAR(30), IN `_NUM_CELULAR` INT(10), IN `_ID_BARBERO` INT(10))   BEGIN

SELECT * FROM barberos WHERE ID_BARBERO = _ID_BARBERO;

END$$

DROP PROCEDURE IF EXISTS `SpVerCita`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpVerCita` (IN `_FECHA` DATE, IN `_HORA` INT(10), IN `_NOMBRE` VARCHAR(30), IN `_ID_CITA` INT(10))   BEGIN
SELECT * FROM citas WHERE ID_CITA = _ID_CITA;
END$$

DROP PROCEDURE IF EXISTS `SpVerUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpVerUsuario` ()   BEGIN

SELECT * FROM usuarios WHERE CEDULA = _CEDULA;


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendas`
--

DROP TABLE IF EXISTS `agendas`;
CREATE TABLE IF NOT EXISTS `agendas` (
  `ID_AGENDA` int(10) NOT NULL AUTO_INCREMENT,
  `FECHA` date DEFAULT NULL,
  `ID_BARBERO` int(10) DEFAULT NULL,
  PRIMARY KEY (`ID_AGENDA`),
  KEY `ID_BARBERO` (`ID_BARBERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberias`
--

DROP TABLE IF EXISTS `barberias`;
CREATE TABLE IF NOT EXISTS `barberias` (
  `ID_BARBERIA` int(10) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_BARBERIA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barberias`
--

INSERT INTO `barberias` (`ID_BARBERIA`, `NOMBRE`, `DIRECCION`) VALUES
(1, 'BarberShop', 'Calle 100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberias_servicios`
--

DROP TABLE IF EXISTS `barberias_servicios`;
CREATE TABLE IF NOT EXISTS `barberias_servicios` (
  `ID_BARB_SERVICIO` int(10) NOT NULL AUTO_INCREMENT,
  `ID_BARBERIA` int(10) DEFAULT NULL,
  `ID_SERVICIO` int(10) DEFAULT NULL,
  `PRECIO_SERVICIO` int(10) DEFAULT NULL,
  PRIMARY KEY (`ID_BARB_SERVICIO`),
  KEY `ID_BARBERIA` (`ID_BARBERIA`),
  KEY `ID_SERVICIO` (`ID_SERVICIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberos`
--

DROP TABLE IF EXISTS `barberos`;
CREATE TABLE IF NOT EXISTS `barberos` (
  `ID_BARBERO` int(10) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `NUM_CELULAR` int(10) DEFAULT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  `FORMACION` varchar(30) DEFAULT NULL,
  `F_NACIMIENTO` date DEFAULT NULL,
  `ID_BARBERIA` int(10) DEFAULT NULL,
  PRIMARY KEY (`ID_BARBERO`),
  KEY `ID_BARBERIA` (`ID_BARBERIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barberos`
--

INSERT INTO `barberos` (`ID_BARBERO`, `NOMBRE`, `NUM_CELULAR`, `DIRECCION`, `FORMACION`, `F_NACIMIENTO`, `ID_BARBERIA`) VALUES
(4578965, 'Billy', 2147483647, 'Av San juan', 'Tecnico', '1992-07-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `ID_CITA` int(10) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(30) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA` time(6) DEFAULT NULL,
  `ID_BARBERO` int(10) DEFAULT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL,
  `ID_SERVICIO` int(10) DEFAULT NULL,
  `ID_BARBERIA` int(10) DEFAULT NULL,
  PRIMARY KEY (`ID_CITA`),
  KEY `ID_BARBERO` (`ID_BARBERO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SERVICIO` (`ID_SERVICIO`),
  KEY `ID_BARBERIA` (`ID_BARBERIA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`ID_CITA`, `NOMBRE`, `FECHA`, `HORA`, `ID_BARBERO`, `ID_USUARIO`, `ID_SERVICIO`, `ID_BARBERIA`) VALUES
(3, 'victor jimenez', '2022-07-28', '00:00:10.000000', NULL, NULL, NULL, NULL),
(4, 'victor jimenez', '2022-07-28', '00:00:10.000000', NULL, NULL, NULL, NULL),
(5, '1993', '0000-00-00', '00:00:00.000000', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `ID_SERVICIO` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_SERVICIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID_SERVICIO`, `DESCRIPCION`) VALUES
(1, 'Barba'),
(2, 'Cejas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `CEDULA` int(15) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `APELLIDO` int(30) NOT NULL,
  `NUM_CELULAR` int(15) DEFAULT NULL,
  `F_NACIMIENTO` date DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `CONTRASENA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`CEDULA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CEDULA`, `NOMBRE`, `APELLIDO`, `NUM_CELULAR`, `F_NACIMIENTO`, `EMAIL`, `CONTRASENA`) VALUES
(1, 'RICHARD LOPEZ', 0, 2147483647, '0000-00-00', 'BARBERS@GMAIL.COM', '123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_ibfk_1` FOREIGN KEY (`ID_BARBERO`) REFERENCES `barberos` (`ID_BARBERO`);

--
-- Filtros para la tabla `barberias_servicios`
--
ALTER TABLE `barberias_servicios`
  ADD CONSTRAINT `barberias_servicios_ibfk_1` FOREIGN KEY (`ID_BARBERIA`) REFERENCES `barberias` (`ID_BARBERIA`),
  ADD CONSTRAINT `barberias_servicios_ibfk_2` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicios` (`ID_SERVICIO`);

--
-- Filtros para la tabla `barberos`
--
ALTER TABLE `barberos`
  ADD CONSTRAINT `barberos_ibfk_1` FOREIGN KEY (`ID_BARBERIA`) REFERENCES `barberias` (`ID_BARBERIA`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`ID_BARBERO`) REFERENCES `barberos` (`ID_BARBERO`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`CEDULA`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicios` (`ID_SERVICIO`),
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`ID_BARBERIA`) REFERENCES `barberias` (`ID_BARBERIA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
