-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2021 a las 07:01:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlasistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `Codigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Grupo` int(11) NOT NULL,
  `PrimerDia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `HoraInicio1` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `Aula1` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Identificacion` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerNombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`Codigo`, `Grupo`, `PrimerDia`, `HoraInicio1`, `Aula1`, `Identificacion`, `PrimerNombre`, `PrimerApellido`, `FechaRegistro`) VALUES
('MD-345/naturales', 1, 'Martes', '9:00', 'L 101', '6666099977', 'lucas', 'Gomez', '2021-04-08 13:14:05'),
('MD-345/naturales', 1, 'Lunes', '18:00', 'L 101', '8080089889', 'lucas', 'Gomez', '2021-04-08 13:33:28'),
('MD-345/naturales', 1, 'Martes', '18:00', 'P 101', '8080089889', 'Amilkar ', 'daza', '2021-04-08 13:42:58'),
('MD-345/naturales', 1, 'Miercoles', '17:00', 'I 101', '8080089889', 'Amilkar ', 'Gomez', '2021-04-08 13:44:19'),
('MD-345/naturales', 1, 'Miercoles', '18:00', 'I 101', '8080089889', 'lucas', 'Gomez', '2021-04-08 13:45:13'),
('MD-345/naturales', 1, 'Lunes', '18:00', 'I 101', '98348020', 'lucas', 'Gomez', '2021-04-08 13:46:16'),
('MD-345/naturales', 1, 'Lunes', '11:00', 'L 101', '6666099977', 'lucas', 'cantilllo', '2021-04-18 02:13:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciadocente`
--

CREATE TABLE `asistenciadocente` (
  `CodigoMateria` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Grupo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Hora` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Aula` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IdentificacionDocente` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `NombreDocente` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ApellidoDocente` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Asistio` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'No asistió',
  `NombreMateria` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `asistenciadocente`
--

INSERT INTO `asistenciadocente` (`CodigoMateria`, `Grupo`, `Fecha`, `Hora`, `Aula`, `IdentificacionDocente`, `NombreDocente`, `ApellidoDocente`, `Asistio`, `NombreMateria`) VALUES
('SS-603', '01', '2021-06-02', '8:00:00', 'L-101', '26847641', 'Dayana Sofia', 'Ruiz Soto', 'Asistió', 'Ingeniería de software I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciaestudiante`
--

CREATE TABLE `asistenciaestudiante` (
  `CodigoMateria` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Grupo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Hora` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Aula` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IdentificacionEstudiante` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `NombreEstudiante` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ApellidoEstudiante` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Asistio` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'No asistió',
  `NombreMateria` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `asistenciaestudiante`
--

INSERT INTO `asistenciaestudiante` (`CodigoMateria`, `Grupo`, `Fecha`, `Hora`, `Aula`, `IdentificacionEstudiante`, `NombreEstudiante`, `ApellidoEstudiante`, `Asistio`, `NombreMateria`) VALUES
('SS-603', '01', '2021-06-02', '8:00:00', 'L-101', '1065853708', 'Gissel ', 'Martinez Rios', 'Si pero', 'Ingeniería de software I'),
('SS-603', '01', '2021-06-02', '8:00:00', 'L-101', '1065853700', 'Jose', 'Zapata Garzon', 'Si asistió', 'Ingeniería de software I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `CodigoAula` int(11) NOT NULL,
  `NombreAula` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `NumeroPiso` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`CodigoAula`, `NombreAula`, `NumeroPiso`, `FechaRegistro`) VALUES
(3, 'L', 101, '2020-11-29 20:45:04'),
(4, 'I', 101, '2020-11-30 13:33:27'),
(5, 'P', 101, '2020-11-30 13:33:37'),
(6, 'E', 101, '2020-11-30 13:33:47'),
(7, 'J', 204, '2020-12-07 06:29:33'),
(8, 'H', 205, '2020-12-09 15:31:57'),
(9, 'Ñ', 102, '2020-12-09 15:32:18'),
(0, 'jubiva', 101, '2021-06-19 16:54:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargaacademica`
--

CREATE TABLE `cargaacademica` (
  `Codigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Programa` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Periodo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Grupo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerDia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `HoraInicio1` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `HoraFin1` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Aula1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoDia` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `HoraInicio2` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `HoraFin2` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Aula2` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargaacademica`
--

INSERT INTO `cargaacademica` (`Codigo`, `Programa`, `Periodo`, `Grupo`, `PrimerDia`, `HoraInicio1`, `HoraFin1`, `Aula1`, `SegundoDia`, `HoraInicio2`, `HoraFin2`, `Aula2`, `FechaRegistro`) VALUES
('MD-345/naturales', 'Medicina', '2020-2', '01', 'Martes', '14', '19:59', 'I 101', 'Viernes', '13', '19:59', 'I 101', '2020-12-12 12:47:08'),
('MD-345/naturales', 'Derecho', '2020-2', '01', 'Lunes', '6:59', '7:59', 'P 101', 'Martes', '6', '11:59', 'L 101', '2020-12-12 20:44:34'),
('MD-345/naturales', 'electro', '2020-2', '01', 'Martes', '9', '19:59', 'P 101', 'Sabado', '11', '20:59', 'H 205', '2020-12-12 20:45:53'),
('MD-345/naturales', 'enfermeria', '2020-2', '01', 'Lunes', '12:59', '10:59', 'L 101', 'Sabado', '13', '18:59', 'E 101', '2020-12-12 20:47:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `CodigoCiudad` int(11) NOT NULL,
  `NombreCiudad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NombreDepartamento` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`CodigoCiudad`, `NombreCiudad`, `NombreDepartamento`) VALUES
(1, 'Valledupar', 'Cesar'),
(3, 'Bosconia', 'Cesar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `CodigoDepartamento` int(11) NOT NULL,
  `NombreDepartamento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NombrePais` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`CodigoDepartamento`, `NombreDepartamento`, `NombrePais`) VALUES
(1, 'Cesar', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `Identificacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`Identificacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Sexo`, `Celular`, `Correo`, `Direccion`, `Ciudad`, `Departamento`, `Pais`) VALUES
('8080', 'Amilkar ', 'kevin', 'cantilllo', 'Lopez', '2222-02-22', 'M', '3048720309', 'juan@gmail.com', 'barrio nando marin', 'valledupar', 'cesar', 'Colombia'),
('838323', 'Lucas', 'Kevin', 'Mendoza', 'gomez cantillo', '2021-06-02', 'M', '3044345354', 'servidorkgc@gmail.com', 'urbanizacion nando marin', 'valledupar', 'cesar', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `TipoDocumento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Identificacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `PrimerNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoCivil` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Icfes` int(11) NOT NULL,
  `Sisben` int(11) NOT NULL,
  `NombrePrograma` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`TipoDocumento`, `Identificacion`, `FechaExpedicion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Sexo`, `Celular`, `Correo`, `EstadoCivil`, `Icfes`, `Sisben`, `NombrePrograma`, `Direccion`, `Ciudad`, `Departamento`, `Pais`, `FechaRegistro`) VALUES
('Cedula de ciudadania', '6666099977', '2017-11-02', 'Amilkar', 'Jose', 'Contreras', 'daza', '1980-03-12', 'M', '3015522083', 'kevin@gmail.com', 'Divorciado/a', 413, 23, 'Ingenieria de sistemas', 'barrio nando marin', 'valledupar', 'cesar', 'Colombia', '2020-12-07 20:59:51'),
('Cedula de ciudadania', '8080089889', '2018-07-10', 'Heidy', 'daniela', 'Gutierrez', 'daza', '1900-01-10', 'F', '3025454649', 'heidy@gmail.com', 'Soltero/a', 500, 50, 'Ingenieria de sistemas', 'barrio la nevada', 'valledupar', 'cesar', 'Colombia', '2020-12-07 21:07:27'),
('Tarjeta de Identidad', '98348020', '2019-12-03', 'Ramona', 'dalinda', 'Duarte', 'galindo', '1987-09-10', 'F', '3045910495', 'ramona@gmail.com', 'Divorciado/a', 140, 19, 'enfermeria', 'calle 15 barrio el dangon', 'valledupar', 'cesar', 'Colombia', '2020-12-07 21:09:08'),
('Cedula de ciudadania', '84848411', '2020-12-02', 'Heidy', 'ana', 'Contreras', 'Mora', '2020-12-11', 'F', '3015522083', 'heidy@gmail.com', 'Casado/a', 65, 54, 'electro', 'barrio nando marin', 'valledupar', 'cesar', 'Colombia', '2020-12-07 21:27:31'),
('Cedula de ciudadania', '808008988999', '2020-12-10', 'Stefany', 'ana', 'Gutierrez', 'Mora', '2020-12-01', 'M', '3025454649', 'heidy@gmail.com', 'Casado/a', 455, 34, 'Derecho', 'barrio nando marin', 'valledupar', 'cesar', 'Colombia', '2020-12-07 21:41:32'),
('Tarjeta de Identidad', '3434345233', '2020-12-05', 'Juan', 'dalinda', 'Contreras', 'Mora', '2020-12-10', 'F', '3045910495', 'heidy@gmail.com', 'Casado/a', 345, 34, 'electro', 'barrio nando marin', 'valledupar', 'cesar', 'Colombia', '2020-12-07 21:42:23'),
('Cedula de ciudadania', '898098989', '2020-12-03', 'Amilkar', 'dalinda', 'Contreras', 'Mora', '2020-12-20', 'M', '3025454649', 'heidy@gmail.com', 'Casado/a', 56, 76, 'electro', 'barrio nando marin', 'valledupar', 'cesar', 'Colombia', '2020-12-07 21:45:03'),
('Cedula de ciudadania', '77775555112', '2021-06-04', 'Lucas', 'Kevin', 'Mendoza', 'gomez cantillo', '2021-06-01', 'M', '3044345354', 'servidorkgc@gmail.com', 'Casado/a', 385, 32, 'Licenciatura en sociales', 'urbanizacion nando marin', 'valledupar', 'Cesar', 'Colombia', '2021-06-19 16:51:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `CodigoFacultad` int(11) NOT NULL,
  `NombreFacultad` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `CantidadProgramas` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Sede` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`CodigoFacultad`, `NombreFacultad`, `CantidadProgramas`, `FechaRegistro`, `Sede`) VALUES
(5, 'Ingenierias y tecnologicas', 9, '2020-12-13 08:16:26', 'Sede Sabanas'),
(6, 'Sociales y economicas', 8, '2020-12-20 09:55:36', 'SedeSabanas'),
(7, 'Face y admon', 5, '2021-06-19 17:02:17', 'SedeSabanas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefedepartamento`
--

CREATE TABLE `jefedepartamento` (
  `Identificacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `DepartamentoCargo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jefedepartamento`
--

INSERT INTO `jefedepartamento` (`Identificacion`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `DepartamentoCargo`, `FechaNacimiento`, `Sexo`, `Celular`, `Correo`, `Direccion`, `Ciudad`, `Departamento`, `Pais`) VALUES
('56578854545', 'Lucas', 'Kevin', 'Mendoza', 'gomez cantillo', 'Licenciatura en sociales', '2021-06-10', 'M', '3044345354', 'servidorkgc@gmail.com', 'urbanizacion nando marin', 'valledupar', 'Cesar', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `CodigoMateria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `NombreMateria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `NumeroCredito` int(11) NOT NULL,
  `Programa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`CodigoMateria`, `NombreMateria`, `NumeroCredito`, `Programa`, `FechaRegistro`) VALUES
('MD-345', 'naturales', 5, 'Medicina', '2020-12-09 18:18:56'),
('ML-304', 'Quimica', 4, 'Medicina', '2020-12-09 18:24:31'),
('fg-lj09', 'Ingenieria de software II', 3, 'Licenciatura en sociales', '2021-06-19 17:01:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `CodigoPais` int(11) NOT NULL,
  `NombrePais` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`CodigoPais`, `NombrePais`) VALUES
(1, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planasignatura`
--

CREATE TABLE `planasignatura` (
  `CodigoPlan` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Programa` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Materia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Hdd` int(11) NOT NULL,
  `Htp` int(11) NOT NULL,
  `Hti` int(11) NOT NULL,
  `TipoAsignatura` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `NaturalezaAsignatura` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DescripcionAsignatura` text COLLATE utf8_spanish_ci NOT NULL,
  `ObjetivoGeneral` text COLLATE utf8_spanish_ci NOT NULL,
  `ObjetivosEspecificos` text COLLATE utf8_spanish_ci NOT NULL,
  `EstrategiasPedagogicas` text COLLATE utf8_spanish_ci NOT NULL,
  `CompetenciasGenericas` text COLLATE utf8_spanish_ci NOT NULL,
  `ReferenciasBibliograficas` text COLLATE utf8_spanish_ci NOT NULL,
  `PrimerParcial` int(11) NOT NULL DEFAULT 30,
  `SegundoParcial` int(11) NOT NULL DEFAULT 30,
  `TercerParcial` int(11) NOT NULL DEFAULT 40,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planasignatura`
--

INSERT INTO `planasignatura` (`CodigoPlan`, `Programa`, `Materia`, `Hdd`, `Htp`, `Hti`, `TipoAsignatura`, `NaturalezaAsignatura`, `DescripcionAsignatura`, `ObjetivoGeneral`, `ObjetivosEspecificos`, `EstrategiasPedagogicas`, `CompetenciasGenericas`, `ReferenciasBibliograficas`, `PrimerParcial`, `SegundoParcial`, `TercerParcial`, `FechaRegistro`) VALUES
('pli01', 'Ingenieria de sistemas', 'calculo', 45, 50, 80, 'Teorica', 'Habilitable', 'El desarrollo de software con calidad requiere la aplicación de técnicas, metodologías,\r\nactividades, tecnologías eficientes, trabajo en equipo y la consolidación de ideas que permitan\r\nobtener un producto final verificado y validado correctamente conforme a las especificaciones\r\ndadas por el usuario. En concordancia con lo anterior el estudiante debe apropiarse de los\r\nconocimientos detallados en aras de fortalecer su rol como ingeniero de software.', 'Comprender los conceptos fundamentales, proceso de software y metodologías propuestas por\r\nla ingeniería de software, su aplicabilidad e importancia en el desarrollo de productos de\r\nsoftware con calidad.', 'Entender los conceptos básicos e introductorios de ingeniería de software para su\r\nposterior aplicación.\r\n\r\nConocer los conceptos fundamentales sobre sistemas de información y su importancia\r\nen la toma de decisiones en una organización.\r\n\r\nAplicar las metodologías, métodos y actividades utilizados durante el proceso de\r\ndesarrollo de software', 'trabajo presencial o acompañamiento directo: consiste en el tiempo dedicado a la\r\nactividad académica en la que hay interacción entre el docente y el estudiante, a través de\r\nclases magistrales, seminarios, talleres, y laboratorios; donde se da explicación a los temas\r\nprogramados en el curso, se realiza en las instalaciones de la institución en horarios definidos\r\npreviamente y en espacios destinados para ello tales como: salones de clases, salas de\r\nsistemas e informática, laboratorios, visitas técnicas y demás lugares que permitan y cumplan\r\ncon las normas exigidas para impartir clases.', 'Comprende un texto y sus partes para reflexionar, profundizar y aplicar\r\nsu conocimiento en ámbitos cotidianos, académicos y profesionales.', 'CAMPOS Víctor, “Ingeniería del Software”, Ed. Pearson educación, 5ta edición, España 2011.\r\n FERNANDEZ Rubén, *Utilización de UML en ingeniería del software con objetos y\r\ncomponentes”, Ed. Pearson Educación, 5ta edición, España 2007.\r\n GUERRERO Ekaterina, “Ingeniería del Software clásica y orientada a objetos”, Ed. Pearson\r\neducación, 6ta edición, España 2011.', 30, 30, 40, '2020-12-11 21:27:44'),
('pli017', 'Ingenieria de sistemas', 'naturales', 45, 50, 80, 'Practica', 'Habilitable', 'descripcion', 'objetivo general', 'obbjetivo especifico', 'estrategias metodologicas', 'competencias genericas', 'bibliografia', 30, 30, 40, '2020-12-11 16:42:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandesarrollo`
--

CREATE TABLE `plandesarrollo` (
  `CodigoPlanAsignatura` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Programa` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Docente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `CodigoMateria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Facultad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TipoAsignatura` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `NaturalezaAsignatura` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `PeriodoAcademico` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `TotalHoras` int(11) NOT NULL,
  `FechaFinalizacion` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plandesarrollo`
--

INSERT INTO `plandesarrollo` (`CodigoPlanAsignatura`, `Programa`, `Docente`, `CodigoMateria`, `Facultad`, `TipoAsignatura`, `NaturalezaAsignatura`, `PeriodoAcademico`, `FechaInicio`, `TotalHoras`, `FechaFinalizacion`) VALUES
('pli017', 'Licenciatura en sociales', 'Anya Zapata', 'MD-345/naturales', 'Sociales y economicas', 'Teorica', 'No-Habilitable', '2021-1', '0000-00-00', 25, '2022-10-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `CodigoPrograma` int(11) NOT NULL,
  `NombrePrograma` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `CantidadCreditos` int(11) NOT NULL,
  `NombreFacultad` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`CodigoPrograma`, `NombrePrograma`, `CantidadCreditos`, `NombreFacultad`) VALUES
(1, 'Licenciatura en sociales', 135, '0'),
(2, 'Ingeniería de sistemas', 150, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciondocente`
--

CREATE TABLE `relaciondocente` (
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Grupo` int(2) NOT NULL,
  `Docente` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `relaciondocente`
--

INSERT INTO `relaciondocente` (`Codigo`, `Grupo`, `Docente`, `FechaRegistro`) VALUES
('MD-345/naturales', 1, 'Amilkar  cantilllo', '2021-04-18 01:45:08'),
('MD-345/naturales', 2, 'Amilkar  cantilllo', '2021-04-18 01:45:52'),
('ML-304/Quimica', 1, 'Amilkar  cantilllo', '2021-04-18 01:45:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Identificacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `TipoUsuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Identificacion`, `Contraseña`, `TipoUsuario`, `FechaRegistro`, `Usuario`) VALUES
('0989023232', 'oñate', 'JefeDepartamento', '2021-04-18 02:06:16', 'oñate'),
('90902', 'admin', 'Administrador', '2021-06-19 17:08:23', 'Administrador'),
('8080', 'admin', 'Docente', '2021-04-08 14:47:03', 'Amilkar'),
('1065853708', 'kevin', 'Estudiante', '2021-06-19 20:14:42', 'kevin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`CodigoCiudad`,`NombreCiudad`),
  ADD KEY `NombreDepartamento` (`NombreDepartamento`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`CodigoDepartamento`,`NombreDepartamento`),
  ADD UNIQUE KEY `NombreDepartamento` (`NombreDepartamento`),
  ADD KEY `NombrePais` (`NombrePais`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`Identificacion`),
  ADD UNIQUE KEY `IDENTIFICACIONUNIQUE` (`Identificacion`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`CodigoFacultad`),
  ADD UNIQUE KEY `UKFACULTAD` (`NombreFacultad`);

--
-- Indices de la tabla `jefedepartamento`
--
ALTER TABLE `jefedepartamento`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`CodigoPais`,`NombrePais`),
  ADD UNIQUE KEY `NombrePais` (`NombrePais`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`CodigoPrograma`),
  ADD UNIQUE KEY `NombrePrograma` (`NombrePrograma`);

--
-- Indices de la tabla `relaciondocente`
--
ALTER TABLE `relaciondocente`
  ADD PRIMARY KEY (`Codigo`,`Grupo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Identificacion`),
  ADD UNIQUE KEY `Usuario` (`Usuario`),
  ADD UNIQUE KEY `IDENTIFICACION` (`Identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `CodigoCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `CodigoDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `CodigoFacultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `CodigoPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `CodigoPrograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
