-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-09-2013 a las 02:38:55
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hoja_vida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acreencias`
--

CREATE TABLE IF NOT EXISTS `acreencias` (
  `PK_ACREENCIAS` int(11) NOT NULL AUTO_INCREMENT,
  `NATURALEZA` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ENTIDAD` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_ACREENCIAS`),
  KEY `IDX_2AFECA1135F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `acreencias`
--

INSERT INTO `acreencias` (`PK_ACREENCIAS`, `NATURALEZA`, `ENTIDAD`, `VALOR`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', '', 0, '44765494', '2013-09-22 22:06:37', '127.0.0.1', 1, 1),
(2, '', '', 0, '44765494', '2013-09-22 22:22:24', '127.0.0.1', 1, 2),
(3, '', '', 0, '44765494', '2013-09-22 22:26:45', '127.0.0.1', 1, 3),
(4, '', '', 0, '44765494', '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(5, '', '', 0, '44765494', '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(6, '', '', 0, '44765494', '2013-09-22 23:55:36', '127.0.0.1', 1, 6),
(7, '', '', 0, '44765494', '2013-09-23 14:54:59', '127.0.0.1', 1, 7),
(8, '', '', 0, '44765494', '2013-09-23 19:00:25', '127.0.0.1', 1, 8),
(9, '', '', 0, '44765494', '2013-09-23 19:58:34', '127.0.0.1', 1, 9),
(10, '', '', 0, '44765494', '2013-09-23 20:43:00', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--

CREATE TABLE IF NOT EXISTS `antecedentes` (
  `PK_ANTECEDENTES` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_ANTECEDENTES`),
  KEY `IDX_3F0C348C35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`PK_ANTECEDENTES`, `TIPO`, `DESCRIPCION`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 0, '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(2, 1, '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(3, 2, '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(4, 0, '', '44765494', '2013-09-22 22:22:15', '127.0.0.1', 1, 2),
(5, 1, '', '44765494', '2013-09-22 22:22:15', '127.0.0.1', 1, 2),
(6, 2, '', '44765494', '2013-09-22 22:22:15', '127.0.0.1', 1, 2),
(7, 0, '', '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(8, 1, '', '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(9, 2, '', '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(10, 0, '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(11, 1, '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(12, 2, '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(13, 0, '', '44765494', '2013-09-22 22:49:53', '127.0.0.1', 1, 5),
(14, 1, '', '44765494', '2013-09-22 22:49:53', '127.0.0.1', 1, 5),
(15, 2, '', '44765494', '2013-09-22 22:49:53', '127.0.0.1', 1, 5),
(16, 0, '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(17, 1, '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(18, 2, '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(19, 0, '', '44765494', '2013-09-23 14:54:48', '127.0.0.1', 1, 7),
(20, 1, '', '44765494', '2013-09-23 14:54:48', '127.0.0.1', 1, 7),
(21, 2, '', '44765494', '2013-09-23 14:54:48', '127.0.0.1', 1, 7),
(22, 0, '', '44765494', '2013-09-23 19:00:14', '127.0.0.1', 1, 8),
(23, 1, '', '44765494', '2013-09-23 19:00:14', '127.0.0.1', 1, 8),
(24, 2, '', '44765494', '2013-09-23 19:00:14', '127.0.0.1', 1, 8),
(25, 0, '', '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(26, 1, '', '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(27, 2, '', '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(28, 0, '', '44765494', '2013-09-23 20:42:53', '127.0.0.1', 1, 10),
(29, 1, '', '44765494', '2013-09-23 20:42:53', '127.0.0.1', 1, 10),
(30, 2, '', '44765494', '2013-09-23 20:42:53', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_jud_fis`
--

CREATE TABLE IF NOT EXISTS `cal_jud_fis` (
  `PK_EXP_JUD_FIS` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_EXP` int(11) DEFAULT NULL,
  `TIP_RESOLUCION` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_RES` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DDAGRAVIADO` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DDAGRESOR` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATERIA` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESPECIALIDAD` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOTA` double DEFAULT NULL,
  `PK_EXP_PROFESIONAL` int(11) DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_EXP_JUD_FIS`),
  KEY `IDX_1059BB1B35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cal_jud_fis`
--

INSERT INTO `cal_jud_fis` (`PK_EXP_JUD_FIS`, `NUM_EXP`, `TIP_RESOLUCION`, `FECHA_RES`, `DDAGRAVIADO`, `DDAGRESOR`, `MATERIA`, `ESPECIALIDAD`, `NOTA`, `PK_EXP_PROFESIONAL`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(2, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-22 22:22:04', '127.0.0.1', 1, 2),
(3, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-22 22:26:38', '127.0.0.1', 1, 3),
(4, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-22 22:29:39', '127.0.0.1', 1, 4),
(5, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(6, 124455, 'sdasdf', '21/01/1970', 'safasf', 'safasf', 'afasfa', '3', 15, NULL, '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(7, 12121, 'sfasf', '19/01/1970', 'safsaf', 'asfas', 'sfasf', '4', 20, NULL, '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(8, 21111, 'sasfasf', '30/01/1970', 'safasf', 'fsafs', 'asfsaf', '2', 21, NULL, '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(9, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-23 14:54:52', '127.0.0.1', 1, 7),
(10, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-23 19:00:19', '127.0.0.1', 1, 8),
(11, 0, 'dsasa', '14/01/1970', 'asdas', 'sassa', 'dsss sd', '1', 9, NULL, '44765494', '2013-09-23 19:58:19', '127.0.0.1', 1, 9),
(12, 0, 'dasd', '27/01/1970', 'dasdas', 'aaa', 'sas', '2', 18, NULL, '44765494', '2013-09-23 19:58:19', '127.0.0.1', 1, 9),
(13, 0, 'asdas', '26/01/1970', 'dsadsad', 'ssd', 'dadasdsad', '3', 13, NULL, '44765494', '2013-09-23 19:58:19', '127.0.0.1', 1, 9),
(14, 0, '', '', '', '', '', '0', 0, NULL, '44765494', '2013-09-23 20:42:49', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_profesionales`
--

CREATE TABLE IF NOT EXISTS `colegios_profesionales` (
  `id_colegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_colegio` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_colegio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `colegios_profesionales`
--

INSERT INTO `colegios_profesionales` (`id_colegio`, `nombre_colegio`) VALUES
(1, 'CCPL - Colegio de Contadores Públicos de Lima'),
(2, 'Colegio de Economistas de Lima'),
(3, 'Ilustre Colegio de Abogados de Lima'),
(4, 'Colegio Odontológico del Perú'),
(5, 'Colegio de Notarios de Lima'),
(6, 'Colegio de Ingenieros del Perú - Consejo Nacional'),
(7, 'Colegio de Ingenieros del Perú - Consejo Departamental de Lima'),
(8, 'Colegio de Ingenieros de Lambayeque'),
(9, 'Colegio Odontológico del Callao'),
(10, 'Colegio de Contadores Públicos del Cusco'),
(11, 'Sociedad de Urbanistas del Perú - SURP'),
(12, 'Colegio de Sociólogos del Perú'),
(13, 'Colegio Profesional de Licenciados en Cooperativismo del Perú - COLICOOP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias_anteriores`
--

CREATE TABLE IF NOT EXISTS `convocatorias_anteriores` (
  `PK_CONV_ANTERIORES` int(11) NOT NULL AUTO_INCREMENT,
  `CONVOCATORIA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PLAZA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ETAPA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_CONV_ANTERIORES`),
  KEY `IDX_BD6E0CB935F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `convocatorias_anteriores`
--

INSERT INTO `convocatorias_anteriores` (`PK_CONV_ANTERIORES`, `CONVOCATORIA`, `PLAZA`, `ETAPA`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', '', '', '44765494', '2013-09-22 22:06:24', '127.0.0.1', 1, 1),
(2, '', '', '', '44765494', '2013-09-22 22:21:59', '127.0.0.1', 1, 2),
(3, '', '', '', '44765494', '2013-09-22 22:26:32', '127.0.0.1', 1, 3),
(4, 'dfsdf', 'sdf', 'sfsd', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 1, 4),
(5, 'dsfd', 'fdsfds', 'fdsfdsf', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 1, 4),
(6, 'dd', 'ddd', 'dddd', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 1, 4),
(7, '', '', '', '44765494', '2013-09-22 22:49:50', '127.0.0.1', 1, 5),
(8, '', '', '', '44765494', '2013-09-22 23:55:24', '127.0.0.1', 1, 6),
(9, '', '', '', '44765494', '2013-09-23 14:54:39', '127.0.0.1', 1, 7),
(10, 'sss', 'sdds', 'sdsd', '44765494', '2013-09-23 19:00:08', '127.0.0.1', 1, 8),
(11, '22333', '2322', '12122', '44765494', '2013-09-23 19:00:08', '127.0.0.1', 1, 8),
(12, '', '', '', '44765494', '2013-09-23 19:58:08', '127.0.0.1', 1, 9),
(13, '', '', '', '44765494', '2013-09-23 20:42:46', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_academicos`
--

CREATE TABLE IF NOT EXISTS `datos_academicos` (
  `PK_DAT_ACADEMICOS` int(11) NOT NULL AUTO_INCREMENT,
  `UNIV_PROCEDENCIA` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `COLEGIO_PROFESIONAL` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_INCORPORACION` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TITULO_OTROS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TESIS_TITULAR` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_DAT_ACADEMICOS`),
  KEY `IDX_BEE2F07A35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `datos_academicos`
--

INSERT INTO `datos_academicos` (`PK_DAT_ACADEMICOS`, `UNIV_PROCEDENCIA`, `COLEGIO_PROFESIONAL`, `FECHA_INCORPORACION`, `TITULO_OTROS`, `TESIS_TITULAR`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '0', '0', '', '', '', '44765494', '2013-09-22 22:06:34', '127.0.0.1', 1, 1),
(2, '0', '0', '', '', '', '44765494', '2013-09-22 22:22:20', '127.0.0.1', 1, 2),
(3, '0', '0', '', '', '', '44765494', '2013-09-22 22:26:36', '127.0.0.1', 1, 3),
(4, '0', '0', '29/01/1970', 'sadsadsasad', 'asdasd', '44765494', '2013-09-22 22:29:44', '127.0.0.1', 1, 4),
(5, '0', '0', '', '', '', '44765494', '2013-09-22 22:49:55', '127.0.0.1', 1, 5),
(6, '0', '0', '', '', '', '44765494', '2013-09-22 23:55:29', '127.0.0.1', 1, 6),
(7, '0', '0', '', '', '', '44765494', '2013-09-23 14:54:46', '127.0.0.1', 1, 7),
(8, '7', '5', '01/01/1970', 'safsafsaf', 'safasfasf', '44765494', '2013-09-23 19:00:12', '127.0.0.1', 1, 8),
(9, '0', '0', '', '', '', '44765494', '2013-09-23 19:58:13', '127.0.0.1', 1, 9),
(10, '0', '0', '', '', '', '44765494', '2013-09-23 20:42:56', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
  `ID_DAT_PERSONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRES` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `APELLIDOS` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LUGAR_NAC` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_NAC` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EDAD` int(11) DEFAULT NULL,
  `DNI` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DISCAPACIDAD` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CERT_DISCAPACIDAD` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FOTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_DAT_PERSONAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`ID_DAT_PERSONAL`, `NOMBRES`, `APELLIDOS`, `LUGAR_NAC`, `FECHA_NAC`, `EDAD`, `DNI`, `DISCAPACIDAD`, `CERT_DISCAPACIDAD`, `FOTO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`) VALUES
(1, 'VICTOR', 'GUZMAN AFAN', '', '', 0, '00491764', 'NO', NULL, NULL, '44765494', '2013-09-22 22:29:46', '127.0.0.1', 2),
(2, 'VICTOR', 'GUZMAN AFAN', 'limpa peru', '22/01/1970', 43, '00491764', 'NO', NULL, NULL, '44765494', '2013-09-22 22:29:46', '127.0.0.1', 2),
(3, 'VICTOR', 'GUZMAN AFAN', 'cusco', '14/06/1990', 23, '00491764', 'NO', NULL, NULL, '44765494', '2013-09-22 22:29:46', '127.0.0.1', 2),
(4, 'VICTOR', 'GUZMAN AFAN', 'limpa peru', '29/01/1970', 43, '00491764', 'NO', NULL, NULL, '44765494', '2013-09-22 22:29:46', '127.0.0.1', 1),
(5, 'AMALIA ALBINA', 'VEGA MAMANI', '', '', 0, '00428137', 'NO', NULL, NULL, '44765494', '2013-09-22 22:50:00', '127.0.0.1', 1),
(6, 'FELIX WILFREDO', 'RIVERA CONDORI', '', '', 0, '01223835', 'NO', NULL, NULL, '44765494', '2013-09-22 23:55:29', '127.0.0.1', 1),
(7, 'NIZA LIDIA', 'VEGA FLORES', '', '', 0, '04430870', 'NO', NULL, NULL, '44765494', '2013-09-23 14:54:55', '127.0.0.1', 1),
(8, 'JUAN ANTONIO', 'GARCIA LAURA', 'lima peru', '21/01/1970', 43, '00520036', 'NO', NULL, NULL, '44765494', '2013-09-23 19:00:21', '127.0.0.1', 1),
(9, 'FREDY ALEX', 'AROCUTIPA CENTELLAS', 'lima peru', '28/01/1970', 43, '04429922', 'NO', NULL, NULL, '44765494', '2013-09-23 19:58:17', '127.0.0.1', 1),
(10, 'FANNY ELIZABETH', 'SUAREZ COAGUILA', '', '', 0, '40023438', 'NO', NULL, NULL, '44765494', '2013-09-23 20:42:57', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_postulante`
--

CREATE TABLE IF NOT EXISTS `datos_postulante` (
  `PK_DAT_POSTULANTE` int(11) NOT NULL AUTO_INCREMENT,
  `PK_SUSUARIO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CARGO_A_POSTULAR` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONDICION` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIPO_CURSO` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOTA` double DEFAULT NULL,
  `PRE_PROMEDIO` double DEFAULT NULL,
  `ORDEN_MERITO` int(11) DEFAULT NULL,
  `PLAZAS_VACANTES` int(11) DEFAULT NULL,
  `EXAMEN_CONOCIMIENTOS` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `AFILIACION_CURRICULAR` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `datos_postulante`
--

INSERT INTO `datos_postulante` (`PK_DAT_POSTULANTE`, `PK_SUSUARIO`, `CARGO_A_POSTULAR`, `CONDICION`, `TIPO_CURSO`, `NOTA`, `PRE_PROMEDIO`, `ORDEN_MERITO`, `PLAZAS_VACANTES`, `EXAMEN_CONOCIMIENTOS`, `AFILIACION_CURRICULAR`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`) VALUES
(1, '00491764', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 2),
(2, '00491764', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 2),
(3, '00491764', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 2),
(4, '00491764', 'gerente general', 'chambeador', '2', 12, 12, 12, 12, '12', '12', '44765494', '2013-09-22 22:29:34', '127.0.0.1', 1),
(5, '00428137', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-22 22:49:49', '127.0.0.1', 1),
(6, '01223835', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-22 23:55:23', '127.0.0.1', 1),
(7, '04430870', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-23 14:54:38', '127.0.0.1', 1),
(8, '00520036', 'presidencia', '123243245', '1', 12, 12, 12, 12, '12', '12', '44765494', '2013-09-23 19:00:07', '127.0.0.1', 1),
(9, '04429922', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-23 19:58:07', '127.0.0.1', 1),
(10, '40023438', '', '', '0', 0, 0, 0, 0, '', '', '44765494', '2013-09-23 20:42:46', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_situacion_laboral`
--

CREATE TABLE IF NOT EXISTS `det_situacion_laboral` (
  `PK_SIT_LABORAL` int(11) NOT NULL AUTO_INCREMENT,
  `CENTRO_TRABAJO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CARGO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERIODO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SITUACION_LABORAL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_SIT_LABORAL`),
  KEY `IDX_9B0DA1435F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `det_situacion_laboral`
--

INSERT INTO `det_situacion_laboral` (`PK_SIT_LABORAL`, `CENTRO_TRABAJO`, `CARGO`, `PERIODO`, `SITUACION_LABORAL`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', '', '', '', '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(2, '', '', '', '', '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(3, '', '', '', '', '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(4, '', '', '', '', '44765494', '2013-09-22 22:22:04', '127.0.0.1', 1, 2),
(5, '', '', '', '', '44765494', '2013-09-22 22:22:04', '127.0.0.1', 1, 2),
(6, '', '', '', '', '44765494', '2013-09-22 22:22:04', '127.0.0.1', 1, 2),
(7, '', '', '', '', '44765494', '2013-09-22 22:26:38', '127.0.0.1', 1, 3),
(8, '', '', '', '', '44765494', '2013-09-22 22:26:38', '127.0.0.1', 1, 3),
(9, '', '', '', '', '44765494', '2013-09-22 22:26:38', '127.0.0.1', 1, 3),
(10, '', '', '', '', '44765494', '2013-09-22 22:29:40', '127.0.0.1', 1, 4),
(11, '', '', '', '', '44765494', '2013-09-22 22:29:40', '127.0.0.1', 1, 4),
(12, '', '', '', '', '44765494', '2013-09-22 22:29:40', '127.0.0.1', 1, 4),
(13, '', '', '', '', '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(14, '', '', '', '', '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(15, '', '', '', '', '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(16, '', '', '', '', '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(17, '', '', '', '', '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(18, '', '', '', '', '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(19, '', '', '', '', '44765494', '2013-09-23 14:54:52', '127.0.0.1', 1, 7),
(20, '', '', '', '', '44765494', '2013-09-23 14:54:52', '127.0.0.1', 1, 7),
(21, '', '', '', '', '44765494', '2013-09-23 14:54:52', '127.0.0.1', 1, 7),
(22, '', '', '', '', '44765494', '2013-09-23 19:00:19', '127.0.0.1', 1, 8),
(23, '', '', '', '', '44765494', '2013-09-23 19:00:19', '127.0.0.1', 1, 8),
(24, '', '', '', '', '44765494', '2013-09-23 19:00:19', '127.0.0.1', 1, 8),
(25, 'sadasf assf', ' sf saf', 'asf asf asf', 'sad sadsa fsffssf', '44765494', '2013-09-23 19:58:20', '127.0.0.1', 1, 9),
(26, 'sf asfassaf', 'sfas fas saf ', 'safasfsafsf', 'sad sadsa fsffssf', '44765494', '2013-09-23 19:58:20', '127.0.0.1', 1, 9),
(27, 'sasss', 'sdf', 'sdasdasdsad', 'sad sadsa fsffssf', '44765494', '2013-09-23 19:58:20', '127.0.0.1', 1, 9),
(28, '', '', '', '', '44765494', '2013-09-23 20:42:49', '127.0.0.1', 1, 10),
(29, '', '', '', '', '44765494', '2013-09-23 20:42:49', '127.0.0.1', 1, 10),
(30, '', '', '', '', '44765494', '2013-09-23 20:42:49', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docencia_universitaria`
--

CREATE TABLE IF NOT EXISTS `docencia_universitaria` (
  `PK_DOC_UNIVERSITARIA` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FACULTAD` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONDICION` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CATEGORIA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CURSOS` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERIODO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_DOC_UNIVERSITARIA`),
  KEY `IDX_168C6A6E35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `docencia_universitaria`
--

INSERT INTO `docencia_universitaria` (`PK_DOC_UNIVERSITARIA`, `UNIVERSIDAD`, `FACULTAD`, `CONDICION`, `CATEGORIA`, `CURSOS`, `PERIODO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '0', '', '0', '0', '', '', '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(2, '0', '', '0', '0', '', '', '44765494', '2013-09-22 22:22:05', '127.0.0.1', 1, 2),
(3, '0', '', '0', '0', '', '', '44765494', '2013-09-22 22:26:39', '127.0.0.1', 1, 3),
(4, '0', '', '0', '0', '', '', '44765494', '2013-09-22 22:29:40', '127.0.0.1', 1, 4),
(5, '0', '', '0', '0', '', '', '44765494', '2013-09-22 22:49:59', '127.0.0.1', 1, 5),
(6, '0', '', '0', '0', '', '', '44765494', '2013-09-22 23:55:28', '127.0.0.1', 1, 6),
(7, '0', '', '0', '0', '', '', '44765494', '2013-09-23 14:54:53', '127.0.0.1', 1, 7),
(8, '0', '', '0', '0', '', '', '44765494', '2013-09-23 19:00:20', '127.0.0.1', 1, 8),
(9, '18', 'sadsad', '0', '0', 'dasdsad', 'sdssss', '44765494', '2013-09-23 19:58:20', '127.0.0.1', 1, 9),
(10, '0', '', '0', '0', '', '', '44765494', '2013-09-23 20:42:50', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_derecho`
--

CREATE TABLE IF NOT EXISTS `doc_derecho` (
  `PK_DOC_DERECHO` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NIVEL` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MENSION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANIO` varchar(2013) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_DOC_DERECHO`),
  KEY `IDX_D01CFD3EECD83F41` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `doc_derecho`
--

INSERT INTO `doc_derecho` (`PK_DOC_DERECHO`, `UNIVERSIDAD`, `NIVEL`, `MENSION`, `ANIO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_ACADEMICOS`) VALUES
(1, '0', '0', '', '0', '44765494', '2013-09-22 22:06:34', '127.0.0.1', 1, 1),
(2, '0', '0', '', '0', '44765494', '2013-09-22 22:22:20', '127.0.0.1', 1, 2),
(3, '0', '0', '', '0', '44765494', '2013-09-22 22:26:36', '127.0.0.1', 1, 3),
(4, '0', '0', 'dgfdsg', '0', '44765494', '2013-09-22 22:29:44', '127.0.0.1', 1, 4),
(5, '0', '0', 'assddd', '0', '44765494', '2013-09-22 22:29:44', '127.0.0.1', 1, 4),
(6, '0', '0', '', '0', '44765494', '2013-09-22 22:49:55', '127.0.0.1', 1, 5),
(7, '0', '0', '', '0', '44765494', '2013-09-22 23:55:29', '127.0.0.1', 1, 6),
(8, '0', '0', '', '0', '44765494', '2013-09-23 14:54:46', '127.0.0.1', 1, 7),
(9, '7', '1', 'eds fsfsf', '2009', '44765494', '2013-09-23 19:00:13', '127.0.0.1', 1, 8),
(10, '12', '1', 'sdfsafas s sfsffsfs', '2013', '44765494', '2013-09-23 19:00:13', '127.0.0.1', 1, 8),
(11, '0', '0', '', '0', '44765494', '2013-09-23 19:58:14', '127.0.0.1', 1, 9),
(12, '0', '0', '', '0', '44765494', '2013-09-23 20:42:56', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_des_profesional`
--

CREATE TABLE IF NOT EXISTS `doc_des_profesional` (
  `PK_EXP_PROFESIONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_EXP` int(11) DEFAULT NULL,
  `DDAS` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DDAE` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATERIA` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESPECIALIDAD` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CALIFICACION1` double DEFAULT NULL,
  `CALIFICACION2` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_EXP_PROFESIONAL`),
  KEY `IDX_E64D1A4A35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `doc_des_profesional`
--

INSERT INTO `doc_des_profesional` (`PK_EXP_PROFESIONAL`, `NUM_EXP`, `DDAS`, `DDAE`, `MATERIA`, `ESPECIALIDAD`, `CALIFICACION1`, `CALIFICACION2`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-22 22:06:29', '127.0.0.1', 1, 1),
(2, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-22 22:22:03', '127.0.0.1', 1, 2),
(3, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-22 22:26:38', '127.0.0.1', 1, 3),
(4, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-22 22:29:38', '127.0.0.1', 1, 4),
(5, 0, 'ssddd', 'sdsaaa', 'aasas', '1', 7, 10, '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(6, 0, 'sdsds', 'ssaas', 'asa', '2', 10, 17, '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(7, 0, 'ssddss', 'aassaa', 'saa', '3', 10, 9, '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(8, 1213, 'fsdfsdf', 'sdfs', 'dsss', '0', 0, 0, '44765494', '2013-09-22 23:55:26', '127.0.0.1', 1, 6),
(9, 13131, 'dsfsdf', 'dfsdf', 'sdfsd', '0', 0, 0, '44765494', '2013-09-22 23:55:26', '127.0.0.1', 1, 6),
(10, 31313, 'sdfsdf', 'sdfsdf', 'fddd', '0', 0, 0, '44765494', '2013-09-22 23:55:26', '127.0.0.1', 1, 6),
(11, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-23 14:54:51', '127.0.0.1', 1, 7),
(12, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-23 19:00:17', '127.0.0.1', 1, 8),
(13, 111, 'dsad', 'fsaf asfsa ff as', 'dasdas', '0', 0, 0, '44765494', '2013-09-23 19:58:18', '127.0.0.1', 1, 9),
(14, 11, 'sd safsf sss', 'fasfas sfs fsa', 'dasdasd', '0', 0, 0, '44765494', '2013-09-23 19:58:18', '127.0.0.1', 1, 9),
(15, 111, 'sfs sfsfas', 'dsadsad', 'sadas', '0', 0, 0, '44765494', '2013-09-23 19:58:18', '127.0.0.1', 1, 9),
(16, 0, '', '', '', '0', 0, 0, '44765494', '2013-09-23 20:42:49', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_cama_info`
--

CREATE TABLE IF NOT EXISTS `informacion_cama_info` (
  `PK_INFORMACION_CAMA_INFO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_INFORMACION_CAMA_INFO`),
  KEY `IDX_5B12DD4F35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `informacion_cama_info`
--

INSERT INTO `informacion_cama_info` (`PK_INFORMACION_CAMA_INFO`, `DESCRIPCION`, `TIPO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', 1, '44765494', '2013-09-22 22:06:37', '127.0.0.1', 1, 1),
(2, '', 2, '44765494', '2013-09-22 22:06:37', '127.0.0.1', 1, 1),
(3, '', 3, '44765494', '2013-09-22 22:06:37', '127.0.0.1', 1, 1),
(4, '', 1, '44765494', '2013-09-22 22:22:24', '127.0.0.1', 1, 2),
(5, '', 2, '44765494', '2013-09-22 22:22:24', '127.0.0.1', 1, 2),
(6, '', 3, '44765494', '2013-09-22 22:22:24', '127.0.0.1', 1, 2),
(7, '', 1, '44765494', '2013-09-22 22:26:46', '127.0.0.1', 1, 3),
(8, '', 2, '44765494', '2013-09-22 22:26:46', '127.0.0.1', 1, 3),
(9, '', 3, '44765494', '2013-09-22 22:26:46', '127.0.0.1', 1, 3),
(10, '', 1, '44765494', '2013-09-22 22:29:50', '127.0.0.1', 1, 4),
(11, '', 2, '44765494', '2013-09-22 22:29:50', '127.0.0.1', 1, 4),
(12, '', 3, '44765494', '2013-09-22 22:29:50', '127.0.0.1', 1, 4),
(13, '', 1, '44765494', '2013-09-22 22:50:03', '127.0.0.1', 1, 5),
(14, '', 2, '44765494', '2013-09-22 22:50:03', '127.0.0.1', 1, 5),
(15, '', 3, '44765494', '2013-09-22 22:50:03', '127.0.0.1', 1, 5),
(16, '', 1, '44765494', '2013-09-22 23:55:36', '127.0.0.1', 1, 6),
(17, '', 2, '44765494', '2013-09-22 23:55:36', '127.0.0.1', 1, 6),
(18, '', 3, '44765494', '2013-09-22 23:55:36', '127.0.0.1', 1, 6),
(19, '', 1, '44765494', '2013-09-23 14:55:00', '127.0.0.1', 1, 7),
(20, '', 2, '44765494', '2013-09-23 14:55:00', '127.0.0.1', 1, 7),
(21, '', 3, '44765494', '2013-09-23 14:55:00', '127.0.0.1', 1, 7),
(22, '', 1, '44765494', '2013-09-23 19:00:26', '127.0.0.1', 1, 8),
(23, '', 2, '44765494', '2013-09-23 19:00:26', '127.0.0.1', 1, 8),
(24, '', 3, '44765494', '2013-09-23 19:00:26', '127.0.0.1', 1, 8),
(25, '', 1, '44765494', '2013-09-23 19:58:36', '127.0.0.1', 1, 9),
(26, '', 2, '44765494', '2013-09-23 19:58:36', '127.0.0.1', 1, 9),
(27, '', 3, '44765494', '2013-09-23 19:58:36', '127.0.0.1', 1, 9),
(28, '', 1, '44765494', '2013-09-23 20:43:01', '127.0.0.1', 1, 10),
(29, '', 2, '44765494', '2013-09-23 20:43:01', '127.0.0.1', 1, 10),
(30, '', 3, '44765494', '2013-09-23 20:43:01', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_oficinas`
--

CREATE TABLE IF NOT EXISTS `informacion_oficinas` (
  `PK_PROCESOS_INFORMACION_OFICINAS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_OFICINA` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_INFORMACION_OFICINAS`),
  KEY `IDX_8A0A519D35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `informacion_oficinas`
--

INSERT INTO `informacion_oficinas` (`PK_PROCESOS_INFORMACION_OFICINAS`, `ID_OFICINA`, `DESCRIPCION`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 1, '', '44765494', '2013-09-22 22:06:27', '127.0.0.1', 1, 1),
(2, 2, '', '44765494', '2013-09-22 22:06:35', '127.0.0.1', 1, 1),
(3, 3, '', '44765494', '2013-09-22 22:06:35', '127.0.0.1', 1, 1),
(4, 1, '', '44765494', '2013-09-22 22:22:19', '127.0.0.1', 1, 2),
(5, 2, '', '44765494', '2013-09-22 22:22:21', '127.0.0.1', 1, 2),
(6, 3, '', '44765494', '2013-09-22 22:22:22', '127.0.0.1', 1, 2),
(7, 1, '', '44765494', '2013-09-22 22:26:35', '127.0.0.1', 1, 3),
(8, 2, '', '44765494', '2013-09-22 22:26:40', '127.0.0.1', 1, 3),
(9, 3, '', '44765494', '2013-09-22 22:26:44', '127.0.0.1', 1, 3),
(10, 1, '', '44765494', '2013-09-22 22:29:46', '127.0.0.1', 1, 4),
(11, 2, '', '44765494', '2013-09-22 22:29:48', '127.0.0.1', 1, 4),
(12, 3, '', '44765494', '2013-09-22 22:29:48', '127.0.0.1', 1, 4),
(13, 1, '', '44765494', '2013-09-22 22:49:56', '127.0.0.1', 1, 5),
(14, 2, '', '44765494', '2013-09-22 22:50:00', '127.0.0.1', 1, 5),
(15, 3, '', '44765494', '2013-09-22 22:50:01', '127.0.0.1', 1, 5),
(16, 1, '', '44765494', '2013-09-22 23:55:31', '127.0.0.1', 1, 6),
(17, 2, '', '44765494', '2013-09-22 23:55:34', '127.0.0.1', 1, 6),
(18, 3, '', '44765494', '2013-09-22 23:55:35', '127.0.0.1', 1, 6),
(19, 1, '', '44765494', '2013-09-23 14:54:44', '127.0.0.1', 1, 7),
(20, 2, '', '44765494', '2013-09-23 14:54:56', '127.0.0.1', 1, 7),
(21, 3, '', '44765494', '2013-09-23 14:54:57', '127.0.0.1', 1, 7),
(22, 1, '', '44765494', '2013-09-23 19:00:11', '127.0.0.1', 1, 8),
(23, 2, '', '44765494', '2013-09-23 19:00:23', '127.0.0.1', 1, 8),
(24, 3, '', '44765494', '2013-09-23 19:00:23', '127.0.0.1', 1, 8),
(25, 1, '', '44765494', '2013-09-23 19:58:23', '127.0.0.1', 1, 9),
(26, 2, '', '44765494', '2013-09-23 19:58:28', '127.0.0.1', 1, 9),
(27, 3, '', '44765494', '2013-09-23 19:58:29', '127.0.0.1', 1, 9),
(28, 1, '', '44765494', '2013-09-23 20:42:51', '127.0.0.1', 1, 10),
(29, 2, '', '44765494', '2013-09-23 20:42:58', '127.0.0.1', 1, 10),
(30, 3, '', '44765494', '2013-09-23 20:42:59', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_patrimonial_conyuge`
--

CREATE TABLE IF NOT EXISTS `informacion_patrimonial_conyuge` (
  `PK_INFORMACION_PAT_CON` int(11) NOT NULL AUTO_INCREMENT,
  `ANO_EJE` int(11) DEFAULT NULL,
  `INGRESO_ANUAL_PUBLICO` double DEFAULT NULL,
  `INGRESO_ANUAL_PRIVADO` double DEFAULT NULL,
  `TOTAL_INGRESO_ANUAL_PROMEDIO` double DEFAULT NULL,
  `AHORROS_SISTEMA` double DEFAULT NULL,
  `AHORROS_SIN_CUSTODIA` double DEFAULT NULL,
  `NRO_PERSONAS` double DEFAULT NULL,
  `ACREENCIAS` double DEFAULT NULL,
  `INGRESO_ANUAL_CONYUGE` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_INFORMACION_PAT_CON`),
  KEY `IDX_851E5F1435F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_registro_de`
--

CREATE TABLE IF NOT EXISTS `informacion_registro_de` (
  `PK_INFORMACION_REG_DEU` int(11) NOT NULL AUTO_INCREMENT,
  `DEUDORES_ALIMENTARIOS` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `COMPLEMENTARIA` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_INFORMACION_REG_DEU`),
  KEY `IDX_996D375435F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `informacion_registro_de`
--

INSERT INTO `informacion_registro_de` (`PK_INFORMACION_REG_DEU`, `DEUDORES_ALIMENTARIOS`, `COMPLEMENTARIA`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', '', '44765494', '2013-09-22 22:06:38', '127.0.0.1', 1, 1),
(2, '', '', '44765494', '2013-09-22 22:22:25', '127.0.0.1', 1, 2),
(3, '', '', '44765494', '2013-09-22 22:26:46', '127.0.0.1', 1, 3),
(4, '', '', '44765494', '2013-09-22 22:29:51', '127.0.0.1', 1, 4),
(5, '', '', '44765494', '2013-09-22 22:50:04', '127.0.0.1', 1, 5),
(6, '', '', '44765494', '2013-09-22 23:55:37', '127.0.0.1', 1, 6),
(7, '', '', '44765494', '2013-09-23 14:55:01', '127.0.0.1', 1, 7),
(8, '', '', '44765494', '2013-09-23 19:00:27', '127.0.0.1', 1, 8),
(9, '', '', '44765494', '2013-09-23 19:58:37', '127.0.0.1', 1, 9),
(10, '', '', '44765494', '2013-09-23 20:43:02', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_ingresos_conyuge`
--

CREATE TABLE IF NOT EXISTS `info_ingresos_conyuge` (
  `PK_PAT_CONYUGE` int(11) NOT NULL AUTO_INCREMENT,
  `ANO_EJE` int(11) DEFAULT NULL,
  `NOMBRE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `INGRESO_MENSUAL_PROMEDIO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DEPENDENCIA` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CARGO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PAT_CONYUGE`),
  KEY `IDX_3925FD3E35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_pat_conyuge_personal`
--

CREATE TABLE IF NOT EXISTS `info_pat_conyuge_personal` (
  `PK_PAT_CON_PERSONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OCUPACION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REGIMEN` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NRO_DEPENDIENTES` double DEFAULT NULL,
  `OBSERVACION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PAT_CON_PERSONAL`),
  KEY `IDX_DCA2F43635F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `PK_INGRESOS` int(11) NOT NULL AUTO_INCREMENT,
  `ANO_EJE` double DEFAULT NULL,
  `REMUNERACION` double DEFAULT NULL,
  `DIETAS` double DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_INGRESOS`),
  KEY `IDX_96CA59DA35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`PK_INGRESOS`, `ANO_EJE`, `REMUNERACION`, `DIETAS`, `DESCRIPCION`, `VALOR`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 0, NULL, NULL, '', 0, '44765494', '2013-09-22 22:06:36', '127.0.0.1', 1, 1),
(2, 0, NULL, NULL, '', 0, '44765494', '2013-09-22 22:22:23', '127.0.0.1', 1, 2),
(3, 0, NULL, NULL, '', 0, '44765494', '2013-09-22 22:26:44', '127.0.0.1', 1, 3),
(4, 0, NULL, NULL, '', 0, '44765494', '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(5, 0, NULL, NULL, '', 0, '44765494', '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(6, 0, NULL, NULL, '', 0, '44765494', '2013-09-22 23:55:35', '127.0.0.1', 1, 6),
(7, 0, NULL, NULL, '', 0, '44765494', '2013-09-23 14:54:57', '127.0.0.1', 1, 7),
(8, 0, NULL, NULL, '', 0, '44765494', '2013-09-23 19:00:24', '127.0.0.1', 1, 8),
(9, 0, NULL, NULL, '', 0, '44765494', '2013-09-23 19:58:32', '127.0.0.1', 1, 9),
(10, 0, NULL, NULL, '', 0, '44765494', '2013-09-23 20:43:00', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias_otorgadas`
--

CREATE TABLE IF NOT EXISTS `licencias_otorgadas` (
  `PK_LICENCIAS_OTOR` int(11) NOT NULL AUTO_INCREMENT,
  `ANIO` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTIVO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIAS` int(11) DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_LICENCIAS_OTOR`),
  KEY `IDX_A535426E35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `licencias_otorgadas`
--

INSERT INTO `licencias_otorgadas` (`PK_LICENCIAS_OTOR`, `ANIO`, `MOTIVO`, `DIAS`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '0', '', 0, 1, 1),
(2, '0', '', 0, 1, 2),
(3, '0', '', 0, 1, 3),
(4, '0', '', 0, 1, 4),
(5, '0', '', 0, 1, 5),
(6, '0', '', 0, 1, 6),
(7, '0', '', 0, 1, 7),
(8, '0', '', 0, 1, 8),
(9, '0', '', 0, 1, 9),
(10, '0', '', 0, 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_derecho`
--

CREATE TABLE IF NOT EXISTS `mae_derecho` (
  `PK_MAE_DERECHO` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NIVEL` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MENSION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANIO` varchar(2013) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_MAE_DERECHO`),
  KEY `IDX_C6828A82ECD83F41` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `mae_derecho`
--

INSERT INTO `mae_derecho` (`PK_MAE_DERECHO`, `UNIVERSIDAD`, `NIVEL`, `MENSION`, `ANIO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_ACADEMICOS`) VALUES
(1, '0', '0', '', '0', '44765494', '2013-09-22 22:06:34', '127.0.0.1', 1, 1),
(2, '0', '0', '', '0', '44765494', '2013-09-22 22:22:20', '127.0.0.1', 1, 2),
(3, '0', '0', '', '0', '44765494', '2013-09-22 22:26:37', '127.0.0.1', 1, 3),
(4, '0', '0', 'ddd', '0', '44765494', '2013-09-22 22:29:44', '127.0.0.1', 1, 4),
(5, '0', '0', '', '0', '44765494', '2013-09-22 22:49:56', '127.0.0.1', 1, 5),
(6, '0', '0', '', '0', '44765494', '2013-09-22 23:55:29', '127.0.0.1', 1, 6),
(7, '0', '0', '', '0', '44765494', '2013-09-23 14:54:46', '127.0.0.1', 1, 7),
(8, '3', '1', 'sd safsf saf ', '2013', '44765494', '2013-09-23 19:00:13', '127.0.0.1', 1, 8),
(9, '17', '1', 'asfsaf sf', '1996', '44765494', '2013-09-23 19:00:13', '127.0.0.1', 1, 8),
(10, '0', '0', '', '0', '44765494', '2013-09-23 19:58:15', '127.0.0.1', 1, 9),
(11, '0', '0', '', '0', '44765494', '2013-09-23 20:42:56', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `magistrado_ratificado`
--

CREATE TABLE IF NOT EXISTS `magistrado_ratificado` (
  `PK_EXP_MAG_RAT` int(11) NOT NULL AUTO_INCREMENT,
  `RESPUESTA1` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RESPUESTA2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RESOLUCION` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_RES` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RESPUESTA3` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_EXP_MAG_RAT`),
  KEY `IDX_7B5BA8CD35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `magistrado_ratificado`
--

INSERT INTO `magistrado_ratificado` (`PK_EXP_MAG_RAT`, `RESPUESTA1`, `RESPUESTA2`, `RESOLUCION`, `FECHA_RES`, `RESPUESTA3`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '0', NULL, '', '', '', '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(2, '0', NULL, '', '', '', '44765494', '2013-09-22 22:22:04', '127.0.0.1', 1, 2),
(3, '0', NULL, '', '', '', '44765494', '2013-09-22 22:26:38', '127.0.0.1', 1, 3),
(4, '0', NULL, '', '', '', '44765494', '2013-09-22 22:29:39', '127.0.0.1', 1, 4),
(5, '0', NULL, '', '', '', '44765494', '2013-09-22 22:49:58', '127.0.0.1', 1, 5),
(6, '0', NULL, '', '', '', '44765494', '2013-09-22 23:55:27', '127.0.0.1', 1, 6),
(7, '0', NULL, '', '', '', '44765494', '2013-09-23 14:54:52', '127.0.0.1', 1, 7),
(8, '0', NULL, '', '', '', '44765494', '2013-09-23 19:00:19', '127.0.0.1', 1, 8),
(9, '0', NULL, '', '', '', '44765494', '2013-09-23 19:58:19', '127.0.0.1', 1, 9),
(10, '0', NULL, '', '', '', '44765494', '2013-09-23 20:42:49', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meritos_univ`
--

CREATE TABLE IF NOT EXISTS `meritos_univ` (
  `PK_MERITOS_UNIV_DET` int(11) NOT NULL AUTO_INCREMENT,
  `PUESTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANIO` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_MERITOS_UNIV_DET`),
  KEY `IDX_9F37C5D9ECD83F41` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `meritos_univ`
--

INSERT INTO `meritos_univ` (`PK_MERITOS_UNIV_DET`, `PUESTO`, `UNIVERSIDAD`, `ANIO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_ACADEMICOS`) VALUES
(1, '0', '0', '0', '44765494', '2013-09-22 22:06:34', '127.0.0.1', 1, 1),
(2, '0', '0', '0', '44765494', '2013-09-22 22:22:21', '127.0.0.1', 1, 2),
(3, '0', '0', '0', '44765494', '2013-09-22 22:26:37', '127.0.0.1', 1, 3),
(4, '2', '0', '1996', '44765494', '2013-09-22 22:29:45', '127.0.0.1', 1, 4),
(5, '0', '0', '0', '44765494', '2013-09-22 22:49:56', '127.0.0.1', 1, 5),
(6, '0', '0', '0', '44765494', '2013-09-22 23:55:29', '127.0.0.1', 1, 6),
(7, '0', '0', '0', '44765494', '2013-09-23 14:54:47', '127.0.0.1', 1, 7),
(8, '1', '0', '0', '44765494', '2013-09-23 19:00:13', '127.0.0.1', 1, 8),
(9, '0', '0', '0', '44765494', '2013-09-23 19:58:15', '127.0.0.1', 1, 9),
(10, '0', '0', '0', '44765494', '2013-09-23 20:42:57', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_migratorio`
--

CREATE TABLE IF NOT EXISTS `movimiento_migratorio` (
  `PK_MOVIMIENTO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `FECHA` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DESTINO_PROCEDENCIA` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_MOVIMIENTO`),
  KEY `IDX_BC16FE7B35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `movimiento_migratorio`
--

INSERT INTO `movimiento_migratorio` (`PK_MOVIMIENTO`, `TIPO`, `FECHA`, `DESTINO_PROCEDENCIA`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 0, '', '', '44765494', '2013-09-22 22:06:28', '127.0.0.1', 1, 1),
(2, 0, '', '', '44765494', '2013-09-22 22:22:02', '127.0.0.1', 1, 2),
(3, 0, '', '', '44765494', '2013-09-22 22:26:39', '127.0.0.1', 1, 3),
(4, 0, '', '', '44765494', '2013-09-22 22:29:37', '127.0.0.1', 1, 4),
(5, 0, '', '', '44765494', '2013-09-22 22:49:57', '127.0.0.1', 1, 5),
(6, 0, '', '', '44765494', '2013-09-22 23:55:30', '127.0.0.1', 1, 6),
(7, 0, '', '', '44765494', '2013-09-23 14:54:42', '127.0.0.1', 1, 7),
(8, 0, '', '', '44765494', '2013-09-23 19:00:22', '127.0.0.1', 1, 8),
(9, 0, '', '', '44765494', '2013-09-23 19:58:22', '127.0.0.1', 1, 9),
(10, 0, '', '', '44765494', '2013-09-23 20:42:52', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otras_disciplinas`
--

CREATE TABLE IF NOT EXISTS `otras_disciplinas` (
  `PK_OTRAS_DISC` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NIVEL` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MENSION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANIO` varchar(2013) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_OTRAS_DISC`),
  KEY `IDX_23F0929DECD83F41` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `otras_disciplinas`
--

INSERT INTO `otras_disciplinas` (`PK_OTRAS_DISC`, `UNIVERSIDAD`, `NIVEL`, `MENSION`, `ANIO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_ACADEMICOS`) VALUES
(1, '0', '0', '', '0', '44765494', '2013-09-22 22:06:34', '127.0.0.1', 1, 1),
(2, '0', '0', '', '0', '44765494', '2013-09-22 22:22:21', '127.0.0.1', 1, 2),
(3, '0', '0', '', '0', '44765494', '2013-09-22 22:26:37', '127.0.0.1', 1, 3),
(4, '0', '0', 'asdsad', '0', '44765494', '2013-09-22 22:29:45', '127.0.0.1', 1, 4),
(5, '0', '0', 'asdsasss', '0', '44765494', '2013-09-22 22:29:45', '127.0.0.1', 1, 4),
(6, '0', '0', '', '0', '44765494', '2013-09-22 22:49:56', '127.0.0.1', 1, 5),
(7, '0', '0', '', '0', '44765494', '2013-09-22 23:55:29', '127.0.0.1', 1, 6),
(8, '0', '0', '', '0', '44765494', '2013-09-23 14:54:47', '127.0.0.1', 1, 7),
(9, '4', '1', 'asfsaf saf', '0', '44765494', '2013-09-23 19:00:13', '127.0.0.1', 1, 8),
(10, '0', '0', '', '0', '44765494', '2013-09-23 19:58:15', '127.0.0.1', 1, 9),
(11, '0', '0', '', '0', '44765494', '2013-09-23 20:42:57', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_ingresos`
--

CREATE TABLE IF NOT EXISTS `otros_ingresos` (
  `PK_INGRESOS_OTROS` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_INGRESOS_OTROS`),
  KEY `IDX_399F1F1035F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `otros_ingresos`
--

INSERT INTO `otros_ingresos` (`PK_INGRESOS_OTROS`, `DESCRIPCION`, `MONTO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', 0, '44765494', '2013-09-22 22:06:36', '127.0.0.1', 1, 1),
(2, '', 0, '44765494', '2013-09-22 22:22:23', '127.0.0.1', 1, 2),
(3, '', 0, '44765494', '2013-09-22 22:26:45', '127.0.0.1', 1, 3),
(4, '', 0, '44765494', '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(5, '', 0, '44765494', '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(6, '', 0, '44765494', '2013-09-22 23:55:35', '127.0.0.1', 1, 6),
(7, '', 0, '44765494', '2013-09-23 14:54:58', '127.0.0.1', 1, 7),
(8, '', 0, '44765494', '2013-09-23 19:00:24', '127.0.0.1', 1, 8),
(9, '', 0, '44765494', '2013-09-23 19:58:33', '127.0.0.1', 1, 9),
(10, '', 0, '44765494', '2013-09-23 20:43:00', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrimonio`
--

CREATE TABLE IF NOT EXISTS `patrimonio` (
  `PK_PATRIMONIO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_PATRIMONIO` int(11) DEFAULT NULL,
  `TIPO_BIEN` int(11) DEFAULT NULL,
  `UBICACION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PATRIMONIO`),
  KEY `IDX_B51665735F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `patrimonio`
--

INSERT INTO `patrimonio` (`PK_PATRIMONIO`, `TIPO_PATRIMONIO`, `TIPO_BIEN`, `UBICACION`, `FECHA`, `MONTO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 1, 0, '', '', 0, NULL, '2013-09-22 22:06:36', '127.0.0.1', 1, 1),
(2, 2, 0, '', '', 0, NULL, '2013-09-22 22:06:36', '127.0.0.1', 1, 1),
(3, 1, 0, '', '', 0, NULL, '2013-09-22 22:22:23', '127.0.0.1', 1, 2),
(4, 2, 0, '', '', 0, NULL, '2013-09-22 22:22:23', '127.0.0.1', 1, 2),
(5, 1, 0, '', '', 0, NULL, '2013-09-22 22:26:45', '127.0.0.1', 1, 3),
(6, 2, 0, '', '', 0, NULL, '2013-09-22 22:26:45', '127.0.0.1', 1, 3),
(7, 1, 0, '', '', 0, NULL, '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(8, 2, 0, '', '', 0, NULL, '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(9, 1, 0, '', '', 0, NULL, '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(10, 2, 0, '', '', 0, NULL, '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(11, 1, 0, '', '', 0, NULL, '2013-09-22 23:55:35', '127.0.0.1', 1, 6),
(12, 2, 0, '', '', 0, NULL, '2013-09-22 23:55:35', '127.0.0.1', 1, 6),
(13, 1, 0, '', '', 0, NULL, '2013-09-23 14:54:58', '127.0.0.1', 1, 7),
(14, 2, 0, '', '', 0, NULL, '2013-09-23 14:54:58', '127.0.0.1', 1, 7),
(15, 1, 0, '', '', 0, NULL, '2013-09-23 19:00:25', '127.0.0.1', 1, 8),
(16, 2, 0, '', '', 0, NULL, '2013-09-23 19:00:25', '127.0.0.1', 1, 8),
(17, 1, 0, '', '', 0, NULL, '2013-09-23 19:58:33', '127.0.0.1', 1, 9),
(18, 2, 0, '', '', 0, NULL, '2013-09-23 19:58:33', '127.0.0.1', 1, 9),
(19, 1, 0, '', '', 0, NULL, '2013-09-23 20:43:00', '127.0.0.1', 1, 10),
(20, 2, 0, '', '', 0, NULL, '2013-09-23 20:43:00', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrimonio_bienes_conyuge`
--

CREATE TABLE IF NOT EXISTS `patrimonio_bienes_conyuge` (
  `PK_PAT_BIENES_CONYUGE` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_MODO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ULT_VALOR` double DEFAULT NULL,
  `DATOS_REG_PUBLICOS` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_MODO_TRANSFERENCIA` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PAT_BIENES_CONYUGE`),
  KEY `IDX_DB3CA29E35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrimonio_otros`
--

CREATE TABLE IF NOT EXISTS `patrimonio_otros` (
  `PK_PATRIMONIO_OTROS` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PATRIMONIO_OTROS`),
  KEY `IDX_B7241A8235F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `patrimonio_otros`
--

INSERT INTO `patrimonio_otros` (`PK_PATRIMONIO_OTROS`, `DESCRIPCION`, `VALOR`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', 0, '44765494', '2013-09-22 22:06:37', '127.0.0.1', 1, 1),
(2, '', 0, '44765494', '2013-09-22 22:22:23', '127.0.0.1', 1, 2),
(3, '', 0, '44765494', '2013-09-22 22:26:45', '127.0.0.1', 1, 3),
(4, '', 0, '44765494', '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(5, '', 0, '44765494', '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(6, '', 0, '44765494', '2013-09-22 23:55:36', '127.0.0.1', 1, 6),
(7, '', 0, '44765494', '2013-09-23 14:54:58', '127.0.0.1', 1, 7),
(8, '', 0, '44765494', '2013-09-23 19:00:25', '127.0.0.1', 1, 8),
(9, '', 0, '44765494', '2013-09-23 19:58:33', '127.0.0.1', 1, 9),
(10, '', 0, '44765494', '2013-09-23 20:43:00', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_administrativos`
--

CREATE TABLE IF NOT EXISTS `procesos_administrativos` (
  `PK_PROCESOS_ADM` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `ID_INSTITUCION` int(11) DEFAULT NULL,
  `RESOLUCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SANCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_ADM`),
  KEY `IDX_3EAC35435F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `procesos_administrativos`
--

INSERT INTO `procesos_administrativos` (`PK_PROCESOS_ADM`, `TIPO`, `ID_INSTITUCION`, `RESOLUCION`, `SANCION`, `ESTADO`, `EXPEDIENTE`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 1, 0, '', '', '', NULL, '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(2, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(3, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(4, 1, 0, '', '', '', NULL, '44765494', '2013-09-22 22:22:17', '127.0.0.1', 1, 2),
(5, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:22:17', '127.0.0.1', 1, 2),
(6, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:22:17', '127.0.0.1', 1, 2),
(7, 1, 0, '', '', '', NULL, '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(8, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(9, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(10, 1, 0, '', '', '', NULL, '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(11, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(12, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(13, 1, 0, '', '', '', NULL, '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(14, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(15, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(16, 1, 0, '', '', '', NULL, '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(17, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(18, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(19, 1, 0, '', '', '', NULL, '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(20, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(21, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(22, 1, 0, '', '', '', NULL, '44765494', '2013-09-23 19:00:15', '127.0.0.1', 1, 8),
(23, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-23 19:00:15', '127.0.0.1', 1, 8),
(24, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-23 19:00:15', '127.0.0.1', 1, 8),
(25, 1, 0, '', '', '', NULL, '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(26, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(27, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(28, 1, 0, '', '', '', NULL, '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(29, 2, 0, '', '', NULL, NULL, '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(30, 3, 0, '', '', NULL, NULL, '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_en_min_pub`
--

CREATE TABLE IF NOT EXISTS `procesos_en_min_pub` (
  `PK_PROCESOS_PODER_JUD` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `ID_INSTITUCION` int(11) DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `QUEJAS` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTIVO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_PROC` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_PODER_JUD`),
  KEY `IDX_47A8E6D735F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `procesos_en_min_pub`
--

INSERT INTO `procesos_en_min_pub` (`PK_PROCESOS_PODER_JUD`, `ESTADO`, `TIPO`, `ID_INSTITUCION`, `EXPEDIENTE`, `QUEJAS`, `MOTIVO`, `ESTADO_PROC`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:06:33', '127.0.0.1', 1, 1),
(2, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:06:33', '127.0.0.1', 1, 1),
(3, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:06:33', '127.0.0.1', 1, 1),
(4, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:06:33', '127.0.0.1', 1, 1),
(5, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:06:33', '127.0.0.1', 1, 1),
(6, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(7, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(8, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(9, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(10, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(11, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(12, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(13, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(14, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(15, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(16, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(17, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(18, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(19, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(20, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(21, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(22, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(23, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(24, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(25, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(26, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 23:55:33', '127.0.0.1', 1, 6),
(27, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 23:55:33', '127.0.0.1', 1, 6),
(28, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 23:55:33', '127.0.0.1', 1, 6),
(29, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 23:55:33', '127.0.0.1', 1, 6),
(30, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 23:55:33', '127.0.0.1', 1, 6),
(31, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 14:54:50', '127.0.0.1', 1, 7),
(32, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 14:54:50', '127.0.0.1', 1, 7),
(33, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 14:54:50', '127.0.0.1', 1, 7),
(34, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 14:54:50', '127.0.0.1', 1, 7),
(35, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 14:54:50', '127.0.0.1', 1, 7),
(36, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(37, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(38, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(39, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(40, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(41, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:58:27', '127.0.0.1', 1, 9),
(42, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:58:27', '127.0.0.1', 1, 9),
(43, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 19:58:27', '127.0.0.1', 1, 9),
(44, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:58:27', '127.0.0.1', 1, 9),
(45, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:58:27', '127.0.0.1', 1, 9),
(46, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 20:42:55', '127.0.0.1', 1, 10),
(47, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 20:42:55', '127.0.0.1', 1, 10),
(48, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 20:42:55', '127.0.0.1', 1, 10),
(49, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 20:42:55', '127.0.0.1', 1, 10),
(50, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 20:42:55', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_en_poder_jud`
--

CREATE TABLE IF NOT EXISTS `procesos_en_poder_jud` (
  `PK_PROCESOS_PODER_JUD` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `ID_INSTITUCION` int(11) DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `QUEJAS` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTIVO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_PROC` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_PODER_JUD`),
  KEY `IDX_FF73F39635F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `procesos_en_poder_jud`
--

INSERT INTO `procesos_en_poder_jud` (`PK_PROCESOS_PODER_JUD`, `ESTADO`, `TIPO`, `ID_INSTITUCION`, `EXPEDIENTE`, `QUEJAS`, `MOTIVO`, `ESTADO_PROC`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(2, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(3, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(4, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(5, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(6, 2, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(7, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(8, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(9, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(10, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(11, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(12, 2, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:22:18', '127.0.0.1', 1, 2),
(13, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(14, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(15, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(16, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(17, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(18, 2, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:26:42', '127.0.0.1', 1, 3),
(19, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(20, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(21, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(22, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(23, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(24, 2, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:29:42', '127.0.0.1', 1, 4),
(25, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(26, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(27, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(28, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(29, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(30, 2, 3, 0, '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(31, 1, 1, 1, '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(32, 1, 2, 0, '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(33, 1, 3, 0, '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(34, 2, 1, 1, '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(35, 2, 2, 0, '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(36, 2, 3, 0, '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(37, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(38, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(39, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(40, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(41, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(42, 2, 3, 0, '', '', '', '', '44765494', '2013-09-23 14:54:49', '127.0.0.1', 1, 7),
(43, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(44, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(45, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(46, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(47, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(48, 2, 3, 0, '', '', '', '', '44765494', '2013-09-23 19:00:16', '127.0.0.1', 1, 8),
(49, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:58:26', '127.0.0.1', 1, 9),
(50, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:58:26', '127.0.0.1', 1, 9),
(51, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 19:58:26', '127.0.0.1', 1, 9),
(52, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 19:58:26', '127.0.0.1', 1, 9),
(53, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 19:58:26', '127.0.0.1', 1, 9),
(54, 2, 3, 0, '', '', '', '', '44765494', '2013-09-23 19:58:26', '127.0.0.1', 1, 9),
(55, 1, 1, 1, '', '', '', '', '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(56, 1, 2, 0, '', '', '', '', '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(57, 1, 3, 0, '', '', '', '', '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(58, 2, 1, 1, '', '', '', '', '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(59, 2, 2, 0, '', '', '', '', '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10),
(60, 2, 3, 0, '', '', '', '', '44765494', '2013-09-23 20:42:54', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_judiciales`
--

CREATE TABLE IF NOT EXISTS `procesos_judiciales` (
  `PK_PROCESOS_JUD` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ORGANO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DEMANDADO_AGRESOR` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATERIA` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_JUD`),
  KEY `IDX_82DF129D35F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `procesos_judiciales`
--

INSERT INTO `procesos_judiciales` (`PK_PROCESOS_JUD`, `TIPO`, `EXPEDIENTE`, `ORGANO`, `DEMANDADO_AGRESOR`, `MATERIA`, `ESTADO`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, 1, '', '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(2, 2, '', '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(3, 3, '', '', '', '', '', '44765494', '2013-09-22 22:06:32', '127.0.0.1', 1, 1),
(4, 1, '', '', '', '', '', '44765494', '2013-09-22 22:22:16', '127.0.0.1', 1, 2),
(5, 2, '', '', '', '', '', '44765494', '2013-09-22 22:22:16', '127.0.0.1', 1, 2),
(6, 3, '', '', '', '', '', '44765494', '2013-09-22 22:22:16', '127.0.0.1', 1, 2),
(7, 1, '', '', '', '', '', '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(8, 2, '', '', '', '', '', '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(9, 3, '', '', '', '', '', '44765494', '2013-09-22 22:26:41', '127.0.0.1', 1, 3),
(10, 1, '', '', '', '', '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(11, 2, '', '', '', '', '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(12, 3, '', '', '', '', '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(13, 1, '', '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(14, 2, '', '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(15, 3, '', '', '', '', '', '44765494', '2013-09-22 22:49:54', '127.0.0.1', 1, 5),
(16, 1, '', '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(17, 2, '', '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(18, 3, '', '', '', '', '', '44765494', '2013-09-22 23:55:32', '127.0.0.1', 1, 6),
(19, 1, '', '', '', '', '', '44765494', '2013-09-23 14:54:48', '127.0.0.1', 1, 7),
(20, 2, '', '', '', '', '', '44765494', '2013-09-23 14:54:48', '127.0.0.1', 1, 7),
(21, 3, '', '', '', '', '', '44765494', '2013-09-23 14:54:48', '127.0.0.1', 1, 7),
(22, 1, '', '', '', '', '', '44765494', '2013-09-23 19:00:15', '127.0.0.1', 1, 8),
(23, 2, '', '', '', '', '', '44765494', '2013-09-23 19:00:15', '127.0.0.1', 1, 8),
(24, 3, '', '', '', '', '', '44765494', '2013-09-23 19:00:15', '127.0.0.1', 1, 8),
(25, 1, '', '', '', '', '', '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(26, 2, '', '', '', '', '', '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(27, 3, '', '', '', '', '', '44765494', '2013-09-23 19:58:25', '127.0.0.1', 1, 9),
(28, 1, '', '', '', '', '', '44765494', '2013-09-23 20:42:53', '127.0.0.1', 1, 10),
(29, 2, '', '', '', '', '', '44765494', '2013-09-23 20:42:53', '127.0.0.1', 1, 10),
(30, 3, '', '', '', '', '', '44765494', '2013-09-23 20:42:53', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_jur_fiscal`
--

CREATE TABLE IF NOT EXISTS `prod_jur_fiscal` (
  `PK_PROD_JUR_FISCAL` int(11) NOT NULL AUTO_INCREMENT,
  `RESPUESTA` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DET_RESPUESTA` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `PK_EXP_PROFESIONAL` int(11) DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROD_JUR_FISCAL`),
  KEY `IDX_3570362835F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `prod_jur_fiscal`
--

INSERT INTO `prod_jur_fiscal` (`PK_PROD_JUR_FISCAL`, `RESPUESTA`, `DET_RESPUESTA`, `PK_EXP_PROFESIONAL`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '0', '', NULL, '44765494', '2013-09-22 22:06:31', '127.0.0.1', 1, 1),
(2, '0', '', NULL, '44765494', '2013-09-22 22:22:08', '127.0.0.1', 1, 2),
(3, '0', '', NULL, '44765494', '2013-09-22 22:26:39', '127.0.0.1', 1, 3),
(4, '0', '', NULL, '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(5, '0', '', NULL, '44765494', '2013-09-22 22:49:59', '127.0.0.1', 1, 5),
(6, '0', '', NULL, '44765494', '2013-09-22 23:55:28', '127.0.0.1', 1, 6),
(7, '0', '', NULL, '44765494', '2013-09-23 14:54:54', '127.0.0.1', 1, 7),
(8, '0', '', NULL, '44765494', '2013-09-23 19:00:20', '127.0.0.1', 1, 8),
(9, '0', '', NULL, '44765494', '2013-09-23 19:58:21', '127.0.0.1', 1, 9),
(10, '0', '', NULL, '44765494', '2013-09-23 20:42:50', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `PK_PUBLICACIONES` int(11) NOT NULL AUTO_INCREMENT,
  `LIBROS_TEXTOS_UNIV` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `INV_JURIDICAS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ENSAYOS_JURIDICO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ARTICULOS_JURIDICOS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ARTICULOS_NO_JURIDICOS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PUBLICACIONES`),
  KEY `IDX_A3A706C035F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`PK_PUBLICACIONES`, `LIBROS_TEXTOS_UNIV`, `INV_JURIDICAS`, `ENSAYOS_JURIDICO`, `ARTICULOS_JURIDICOS`, `ARTICULOS_NO_JURIDICOS`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', '', '', '', '', '44765494', '2013-09-22 22:06:30', '127.0.0.1', 1, 1),
(2, '', '', '', '', '', '44765494', '2013-09-22 22:22:08', '127.0.0.1', 1, 2),
(3, '', '', '', '', '', '44765494', '2013-09-22 22:26:39', '127.0.0.1', 1, 3),
(4, '', '', '', '', '', '44765494', '2013-09-22 22:29:41', '127.0.0.1', 1, 4),
(5, '', '', '', '', '', '44765494', '2013-09-22 22:49:59', '127.0.0.1', 1, 5),
(6, '', '', '', '', '', '44765494', '2013-09-22 23:55:28', '127.0.0.1', 1, 6),
(7, '', '', '', '', '', '44765494', '2013-09-23 14:54:53', '127.0.0.1', 1, 7),
(8, '', '', '', '', '', '44765494', '2013-09-23 19:00:20', '127.0.0.1', 1, 8),
(9, '', '', '', '', '', '44765494', '2013-09-23 19:58:20', '127.0.0.1', 1, 9),
(10, '', '', '', '', '', '44765494', '2013-09-23 20:42:50', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_financiero`
--

CREATE TABLE IF NOT EXISTS `sistema_financiero` (
  `PK_SISTEMA_FINANCIERO` int(11) NOT NULL AUTO_INCREMENT,
  `CLASE` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ENTIDAD` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  `USUARIO_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_AUDT` datetime DEFAULT NULL,
  `IP_AUDT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO_AUDT` int(11) DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_SISTEMA_FINANCIERO`),
  KEY `IDX_D5FBBC2935F86247` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `sistema_financiero`
--

INSERT INTO `sistema_financiero` (`PK_SISTEMA_FINANCIERO`, `CLASE`, `ENTIDAD`, `VALOR`, `USUARIO_AUDT`, `FECHA_AUDT`, `IP_AUDT`, `ESTADO_AUDT`, `PK_DAT_POSTULANTE`) VALUES
(1, '', '', 0, NULL, '2013-09-22 22:06:37', '127.0.0.1', 1, 1),
(2, '', '', 0, NULL, '2013-09-22 22:22:23', '127.0.0.1', 1, 2),
(3, '', '', 0, NULL, '2013-09-22 22:26:45', '127.0.0.1', 1, 3),
(4, '', '', 0, NULL, '2013-09-22 22:29:49', '127.0.0.1', 1, 4),
(5, '', '', 0, NULL, '2013-09-22 22:50:02', '127.0.0.1', 1, 5),
(6, '', '', 0, NULL, '2013-09-22 23:55:36', '127.0.0.1', 1, 6),
(7, '', '', 0, NULL, '2013-09-23 14:54:59', '127.0.0.1', 1, 7),
(8, '', '', 0, NULL, '2013-09-23 19:00:25', '127.0.0.1', 1, 8),
(9, '', '', 0, NULL, '2013-09-23 19:58:34', '127.0.0.1', 1, 9),
(10, '', '', 0, NULL, '2013-09-23 20:43:00', '127.0.0.1', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE IF NOT EXISTS `universidades` (
  `id_univ` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_univ` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_univ`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Volcado de datos para la tabla `universidades`
--

INSERT INTO `universidades` (`id_univ`, `nombre_univ`) VALUES
(1, 'Universidad Nacional del Callao (UNAC) (Bellavista)'),
(2, 'Universidad Nacional Mayor de San Marcos (UNMSM) (El Cercado)'),
(3, 'Universidad José Faustino Sánchez Carrión (UNJFSC) (Huacho)'),
(4, 'Universidad Nacional Agraria La Molina (La Molina)'),
(5, 'Universidad Nacional de Educación E. Guzmán y Valle (UNE) (Lima)'),
(6, 'Universidad Nacional de Ingeniería (UNI) (Rimac)'),
(7, 'Universidad Nacional Federico Villarreal (UNFV) (San Miguel)'),
(8, 'Universidad Privada San Juan Bautista (UPSJB) (Chorrillos)'),
(9, 'Universidad Inca Garcilaso de la Vega (UIGV) (El Cercado)'),
(10, 'Universidad Peruana de Las Américas (El Cercado)'),
(11, 'Universidad Tecnológica del Perú (UTP) (El Cercado)'),
(12, 'Universidad San Pedro (Huacho - Barranca)'),
(13, 'Universidad del Pacifico (UP) (Jesús María)'),
(14, 'Universidad Peruana de Ciencias e Informática (UPCI) (Jesús María)'),
(15, 'Universidad Femenina del Sagrado Corazón (UNIFE) (La Molina)'),
(16, 'Universidad San Ignacio de Loyola (USIL) (La Molina)'),
(17, 'Centro Internacional de la Papa (CIPOTATO) (La Molina)'),
(18, 'Universidad Alas Peruanas (UAP) (Lima)'),
(19, 'Universidad Norbert Wiener (UWIENER) (Lima)'),
(20, 'Universidad Cesar Vallejo (UCV) (Lima)'),
(21, 'Universidad Católica Sedes Sapientiae (UCSS) (Los Olivos)'),
(22, 'Universidad Privada del Norte (UPNORTE) (Los Olivos)'),
(23, 'Universidad Científica del Sur (UCSUR) (Miraflores)'),
(24, 'Universidad Peruana Unión (UPEU) (Ñaña)'),
(25, 'Universidad Antonio Ruiz de Montoya (UARM) (Pueblo Libre)'),
(26, 'Universidad de Piura (PAD) (San Isidro)'),
(27, 'Universidad Peruana Cayetano Heredia (UPCH) (San Martín de Porres)'),
(28, 'Pontificia Universidad Católica del Perú (PUCP) (San Miguel)'),
(29, 'Universidad de San Martín de Porres (USMP) (Santa Anita)'),
(30, 'Escuela de Administración de Negocios (ESAN) (Santiago de Surco)'),
(31, 'Universidad de Lima (ULIMA) (Santiago de Surco)'),
(32, 'Universidad Marcelino Champagnat (UMCH) (Santiago de Surco)'),
(33, 'Universidad Ricardo Palma (URP) (Santiago de Surco)'),
(34, 'Universidad Peruana de Ciencias Aplicadas (UPC) (Santiago de Surco)'),
(35, 'Universidad Nacional del Santa (UNS) (Chimbote)'),
(36, 'Universidad Nacional Sgo. Antúnez de Mayolo (UNASAM) (Huaraz)'),
(37, 'Universidad San Pedro (Chimbote - Huaraz - Caraz)'),
(38, 'Universidad Los Ángeles de Chimbote (ULADECH) (Chimbote)'),
(39, 'Universidad Particular Los Ángeles (ULA) (Chimbote)'),
(40, 'Universidad Cesar Vallejo (UCV) (Chimbote)'),
(41, 'Universidad Tecnológica de Los Andes (UTEA) (Abancay)'),
(42, 'Univ. Nacional de San Cristóbal de Huamanga (UNSCH) (Huamanga)'),
(43, 'Universidad Nacional de S. A. de Arequipa (UNSA) (Arequipa)'),
(44, 'Universidad Católica de Santa María (UCSM) (Arequipa)'),
(45, 'Universidad Católica San Pablo (USP) (Arequipa)'),
(46, 'Escuela de Administración de Negocios (ESAN) (Arequipa)'),
(47, 'Universidad Nacional de Cajamarca (UNC) (Cajamarca)'),
(48, 'Universidad Privada Antonio Guillermo Urrelo (UPAGU) (Cajamarca)'),
(49, 'Universidad San Pedro (Cajamarca)'),
(50, 'Universidad Privada del Norte (UPNORTE) (Cajamarca)'),
(51, 'Universidad Nacional San Antonio Abad (UNSAAC) (Cusco)'),
(52, 'Universidad Andina del Cusco (UANDINA) (Cusco)'),
(53, 'Universidad Nacional de Huancavelica (UNH) (Huancavelica)'),
(54, 'Universidad Nacional Agraria de la Selva (UNAS) (Tingo María)'),
(55, 'Univ. Nacional Hermilio Valdizan Huanuco (UNHEVAL) (Huánuco)'),
(56, 'Universidad Nacional del Centro del Perú (UNCP) (Huancayo)'),
(57, 'Universidad Continental de Ciencias e Ingeniería (UCCI) (Huancayo)'),
(58, 'Universidad Peruana Los Andes (UPLA) (Huancayo)'),
(59, 'Universidad Nacional San Luís Gonzaga (UNICA) (Ica)'),
(60, 'Universidad Privada Abraham Valdelomar (UPAV) (Ica)'),
(61, 'Universidad Nacional de la Amazonía Peruana (UNAP) (Iquitos)'),
(62, 'Universidad Nacional de Trujillo (UNITRU) (Trujillo)'),
(63, 'Universidad Cesar Vallejo (UCV) (Trujillo)'),
(64, 'Universidad Privada Antenor Orrego (UPAO) (Trujillo)'),
(65, 'Universidad Privada del Norte (UPNORTE) (Trujillo)'),
(66, 'Universidad San Pedro (Trujillo)'),
(67, 'Universidad Nacional Pedro Ruiz Gallo (UNPRG) (Lambayeque)'),
(68, 'Universidad Católica Sto. Toribio de Mogrovejo (USAT) (Chiclayo)'),
(69, 'Universidad Cesar Vallejo (UCV) (Chiclayo)'),
(70, 'Universidad de Chiclayo (UDCH) (Chiclayo)'),
(71, 'Universidad Señor de Sipan (USS) (Chiclayo)'),
(72, 'Universidad de San Martín de Porres (USMP) (Chiclayo)'),
(73, 'Universidad José Carlos Mariátegui (UJCM) (Ilo - Moquegua)'),
(74, 'Universidad Privada de Moquegua (Moquegua)'),
(75, 'Universidad Nacional Daniel Alcides Carrión (UNDAC) (Cerro de Pasco)'),
(76, 'Universidad Nacional de Piura (UNP) (Castilla)'),
(77, 'Universidad Cesar Vallejo (UCV) (Piura)'),
(78, 'Universidad de Piura (UDEP) (Piura)'),
(79, 'Universidad San Pedro (Piura - Sullana)'),
(80, 'Universidad Nacional del Altiplano (UNAP) (Puno)'),
(81, 'Universidad Andina N. Cáceres Velásquez (UANCV) (Puno - Juliaca)'),
(82, 'Universidad Nacional de San Martín (UNSM) (Tarapoto)'),
(83, 'Universidad Cesar Vallejo (UCV) (Tarapoto)'),
(84, 'Universidad Nacional J. Basadre Grohmann (UNJBG) (Tacna)'),
(85, 'Universidad Privada de Tacna (UPT) (Tacna)'),
(86, 'Universidad Nacional de Tumbes (UNTUMBES) (Tumbes)'),
(87, 'Universidad Nacional de Ucayali (UNU) (Pucallpa)');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acreencias`
--
ALTER TABLE `acreencias`
  ADD CONSTRAINT `FK_2AFECA1135F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `FK_3F0C348C35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `cal_jud_fis`
--
ALTER TABLE `cal_jud_fis`
  ADD CONSTRAINT `FK_1059BB1B35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `convocatorias_anteriores`
--
ALTER TABLE `convocatorias_anteriores`
  ADD CONSTRAINT `FK_BD6E0CB935F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `datos_academicos`
--
ALTER TABLE `datos_academicos`
  ADD CONSTRAINT `FK_BEE2F07A35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `det_situacion_laboral`
--
ALTER TABLE `det_situacion_laboral`
  ADD CONSTRAINT `FK_9B0DA1435F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `docencia_universitaria`
--
ALTER TABLE `docencia_universitaria`
  ADD CONSTRAINT `FK_168C6A6E35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `doc_derecho`
--
ALTER TABLE `doc_derecho`
  ADD CONSTRAINT `FK_D01CFD3EECD83F41` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `doc_des_profesional`
--
ALTER TABLE `doc_des_profesional`
  ADD CONSTRAINT `FK_E64D1A4A35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_cama_info`
--
ALTER TABLE `informacion_cama_info`
  ADD CONSTRAINT `FK_5B12DD4F35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_oficinas`
--
ALTER TABLE `informacion_oficinas`
  ADD CONSTRAINT `FK_8A0A519D35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_patrimonial_conyuge`
--
ALTER TABLE `informacion_patrimonial_conyuge`
  ADD CONSTRAINT `FK_851E5F1435F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_registro_de`
--
ALTER TABLE `informacion_registro_de`
  ADD CONSTRAINT `FK_996D375435F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `info_ingresos_conyuge`
--
ALTER TABLE `info_ingresos_conyuge`
  ADD CONSTRAINT `FK_3925FD3E35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `info_pat_conyuge_personal`
--
ALTER TABLE `info_pat_conyuge_personal`
  ADD CONSTRAINT `FK_DCA2F43635F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `FK_96CA59DA35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `licencias_otorgadas`
--
ALTER TABLE `licencias_otorgadas`
  ADD CONSTRAINT `FK_A535426E35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `mae_derecho`
--
ALTER TABLE `mae_derecho`
  ADD CONSTRAINT `FK_C6828A82ECD83F41` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `magistrado_ratificado`
--
ALTER TABLE `magistrado_ratificado`
  ADD CONSTRAINT `FK_7B5BA8CD35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `meritos_univ`
--
ALTER TABLE `meritos_univ`
  ADD CONSTRAINT `FK_9F37C5D9ECD83F41` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `movimiento_migratorio`
--
ALTER TABLE `movimiento_migratorio`
  ADD CONSTRAINT `FK_BC16FE7B35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `otras_disciplinas`
--
ALTER TABLE `otras_disciplinas`
  ADD CONSTRAINT `FK_23F0929DECD83F41` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `otros_ingresos`
--
ALTER TABLE `otros_ingresos`
  ADD CONSTRAINT `FK_399F1F1035F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD CONSTRAINT `FK_B51665735F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `patrimonio_bienes_conyuge`
--
ALTER TABLE `patrimonio_bienes_conyuge`
  ADD CONSTRAINT `FK_DB3CA29E35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `patrimonio_otros`
--
ALTER TABLE `patrimonio_otros`
  ADD CONSTRAINT `FK_B7241A8235F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_administrativos`
--
ALTER TABLE `procesos_administrativos`
  ADD CONSTRAINT `FK_3EAC35435F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_en_min_pub`
--
ALTER TABLE `procesos_en_min_pub`
  ADD CONSTRAINT `FK_47A8E6D735F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_en_poder_jud`
--
ALTER TABLE `procesos_en_poder_jud`
  ADD CONSTRAINT `FK_FF73F39635F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_judiciales`
--
ALTER TABLE `procesos_judiciales`
  ADD CONSTRAINT `FK_82DF129D35F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `prod_jur_fiscal`
--
ALTER TABLE `prod_jur_fiscal`
  ADD CONSTRAINT `FK_3570362835F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `FK_A3A706C035F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `sistema_financiero`
--
ALTER TABLE `sistema_financiero`
  ADD CONSTRAINT `FK_D5FBBC2935F86247` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
