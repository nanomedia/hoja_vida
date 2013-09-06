-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-09-2013 a las 13:56:45
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
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_ACREENCIAS` int(11) NOT NULL AUTO_INCREMENT,
  `NATURALEZA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ENTIDAD` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  PRIMARY KEY (`PK_ACREENCIAS`),
  KEY `ACREENCIAS` (`PK_ACREENCIAS`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--

CREATE TABLE IF NOT EXISTS `antecedentes` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_ANTECEDENTES` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_ANTECEDENTES`),
  KEY `ANTECEDENTES` (`PK_ANTECEDENTES`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`PK_DAT_POSTULANTE`, `PK_ANTECEDENTES`, `TIPO`, `DESCRIPCION`) VALUES
(41, 1, 0, 'fgdfg'),
(41, 2, 1, 'dfgdf'),
(41, 3, 2, 'gdfgdfgdfhryry'),
(42, 4, 0, 'hola mundo'),
(42, 5, 1, 'dsllsdjs '),
(42, 6, 2, 'sdjslñjd sdljsdln'),
(43, 7, 0, 'fddf dfdfdf'),
(43, 8, 1, 'sdfdsf'),
(43, 9, 2, 'ddfd'),
(44, 10, 0, 'defd sdf'),
(44, 11, 1, 'ds ds'),
(44, 12, 2, 'd dsf '),
(45, 13, 0, 'dfdf'),
(45, 14, 1, 'dfd'),
(45, 15, 2, 'ddf'),
(46, 16, 0, 'ersdf'),
(46, 17, 1, 'fsdsf'),
(46, 18, 2, 'sdfsdfds'),
(47, 19, 0, ''),
(47, 20, 1, ''),
(47, 21, 2, ''),
(49, 22, 0, ''),
(49, 23, 1, ''),
(49, 24, 2, ''),
(49, 25, 0, ''),
(49, 26, 1, ''),
(49, 27, 2, ''),
(49, 28, 0, ''),
(49, 29, 1, ''),
(49, 30, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cal_jud_fis`
--

CREATE TABLE IF NOT EXISTS `cal_jud_fis` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_EXP_JUD_FIS` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_EXP` int(11) DEFAULT NULL,
  `TIP_RESOLUCION` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_RES` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DDAGRAVIADO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DDAGRESOR` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MATERIA` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESPECIALIDAD` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOTA` double DEFAULT NULL,
  `PK_EXP_PROFESIONAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_EXP_JUD_FIS`),
  KEY `CAL_JUD_FIS` (`PK_EXP_JUD_FIS`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `cal_jud_fis`
--

INSERT INTO `cal_jud_fis` (`PK_DAT_POSTULANTE`, `PK_EXP_JUD_FIS`, `NUM_EXP`, `TIP_RESOLUCION`, `FECHA_RES`, `DDAGRAVIADO`, `DDAGRESOR`, `MATERIA`, `ESPECIALIDAD`, `NOTA`, `PK_EXP_PROFESIONAL`) VALUES
(NULL, 1, 0, '', 'fgf', '', 'fg', '', 'dfdfd', 11, NULL),
(NULL, 2, 0, 'fg', '', 'gf', '', 'f', '', 11, NULL),
(NULL, 3, 0, '', '', '', '', '', '', 0, NULL),
(NULL, 4, 0, '', '', '', '', '', '', 0, NULL),
(NULL, 5, 0, '', '', '', '', '', '', 0, NULL),
(NULL, 6, 0, '', '', '', '', '', '', 0, NULL),
(NULL, 7, 0, '', '', '', '', '', '', 0, NULL),
(NULL, 8, 0, '', '', '', '', '', '', 0, NULL),
(NULL, 9, 0, '', '', '', '', '', '', 0, NULL),
(38, 10, 0, 'vhvv', 'hvh', 'hv', 'vh', '', '', 0, NULL),
(38, 11, 0, '', 'vh', 'vhv', 'vh', '', '', 0, NULL),
(39, 12, 0, '', '', '', '', '', '', 0, NULL),
(40, 13, 0, '', '', '', '', '', '', 0, NULL),
(41, 14, 0, '', '', '', '', '', '', 0, NULL),
(42, 15, 0, '', '', '', '', '', '', 0, NULL),
(43, 16, 0, '', '', '', '', '', '', 0, NULL),
(44, 17, 0, '', '', '', '', '', '', 0, NULL),
(45, 18, 0, '', '', '', '', '', '', 0, NULL),
(46, 19, 0, '', '', '', '', '', '', 0, NULL),
(47, 20, 0, '', '', '', '', '', '', 0, NULL),
(48, 21, 0, '', '', '', '', '', '', 0, NULL),
(49, 22, 0, '', '', '', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias_anteriores`
--

CREATE TABLE IF NOT EXISTS `convocatorias_anteriores` (
  `PK_CONV_ANTERIORES` int(11) NOT NULL AUTO_INCREMENT,
  `CONVOCATORIA` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PLAZA` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ETAPA` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_CONV_ANTERIORES`),
  KEY `POSTULANTECONVOCATORIAS` (`PK_CONV_ANTERIORES`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `convocatorias_anteriores`
--

INSERT INTO `convocatorias_anteriores` (`PK_CONV_ANTERIORES`, `CONVOCATORIA`, `PLAZA`, `ETAPA`, `PK_DAT_POSTULANTE`) VALUES
(1, 'dsf', 'dsf', 'dsf', 3),
(2, 'dsf', 'dsf', 'dsf', 3),
(3, 'dsfdsf', 'dsfdsf', 'dsf', 3),
(4, 'hggh', 'ghg', 'ghg', 4),
(5, 'ghgh', 'hgh', 'ghgh', 4),
(6, 'fdgfd', 'fdgf', 'fd', 5),
(7, 'fdgfdg', 'fdgfd', 'fdg', 5),
(8, 'fdgfd', 'fdg', 'fdg', 6),
(9, 'gfg', 'fgfg', 'fdgfdg', 6),
(10, 'fdg df g', ' dfg', ' dfg', 7),
(11, 'fd fd', ' fd', 'f fdg', 7),
(12, 'g fd g', ' fdg fd', ' fdfd g', 7),
(13, 'dfdf', 'dfdf', 's sdf', 8),
(14, 'fsdf', 'sfds', '', 8),
(15, 'dsfds', 'dfsdf', 'sdf', 9),
(16, 'dsfds', 'dsf', 'dsf', 9),
(17, 'fdsf', 'dsf', 'dsf', 9),
(18, ' dsg', ' dsgdsg', '', 10),
(19, 'ds gds', ' sd  dsgdsgdsgds', '', 10),
(20, 'ds f', ' dsfdsds', 'dsfdsf', 11),
(21, '', '', '', 12),
(22, '', '', '', 13),
(23, '', '', '', 14),
(24, '', '', '', 15),
(25, '', '', '', 16),
(26, '', '', '', 17),
(27, '', '', '', 18),
(28, '', '', '', 19),
(29, '', '', '', 20),
(30, '', '', '', 21),
(31, '', '', '', 22),
(32, '', '', '', 23),
(33, '', '', '', 24),
(34, '', '', '', 25),
(35, '', '', '', 26),
(36, '', '', '', 27),
(37, '', '', '', 28),
(38, 'sdfd', 'dfsd', 'dsfsd', 29),
(39, 'dsfdsf', 'fsdfdsf', 'fsd', 29),
(40, '', '', '', 30),
(41, '', '', '', 31),
(42, '', '', '', 32),
(43, '', '', '', 33),
(44, '', '', '', 34),
(45, '', '', '', 35),
(46, '', '', '', 36),
(47, 'fd', 'rgd', 'fd', 37),
(48, 'df', 'ddgdd', 'fd', 37),
(49, 'dfdf', 'dfd', 'dfd', 37),
(50, '', '', '', 38),
(51, '', '', '', 39),
(52, '', '', '', 40),
(53, '', '', '', 41),
(54, '', '', '', 42),
(55, '', '', '', 43),
(56, '', '', '', 44),
(57, '', '', '', 45),
(58, '', '', '', 46),
(59, '', '', '', 47),
(60, '', '', '', 48),
(61, '', '', '', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_academicos`
--

CREATE TABLE IF NOT EXISTS `datos_academicos` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_DAT_ACADEMICOS` int(11) NOT NULL AUTO_INCREMENT,
  `UNIV_PROCEDENCIA` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `COLEGIO_PROFESIONAL` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INCORPORACION` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TITULO_OTROS` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TESIS_TITULAR` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_DAT_ACADEMICOS`),
  KEY `PERSONALESACADEMICOS` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `datos_academicos`
--

INSERT INTO `datos_academicos` (`PK_DAT_POSTULANTE`, `PK_DAT_ACADEMICOS`, `UNIV_PROCEDENCIA`, `COLEGIO_PROFESIONAL`, `FECHA_INCORPORACION`, `TITULO_OTROS`, `TESIS_TITULAR`) VALUES
(NULL, 1, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '10/01/1970', 'f dfg fdg ', ' fgfd fd g'),
(NULL, 2, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '10/01/1970', '', ''),
(NULL, 3, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '04/01/1970', '', ''),
(NULL, 4, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '03/01/1970', 'ds fdsf ds', ' dsfdsf '),
(NULL, 5, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 6, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 7, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 8, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 9, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 10, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 11, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 12, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 13, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 14, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 15, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 16, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 17, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 18, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 19, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 20, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 21, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 22, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 23, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', 'fg', 'fhfhdfhd'),
(NULL, 24, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(NULL, 25, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(36, 26, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(37, 27, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '31/01/1970', 'dada sdadsa', 'dsa adasdsa '),
(38, 28, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(39, 29, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(40, 30, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(41, 31, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(42, 32, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(43, 33, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(44, 34, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(45, 35, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(46, 36, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(47, 37, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(48, 38, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', ''),
(49, 39, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'CCPL - Colegio de Contadores Públicos de Lima', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
  `ID_DAT_PERSONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRES` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDOS` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `LUGAR_NAC` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_NAC` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EDAD` int(11) DEFAULT NULL,
  `DISCAPACIDAD` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CERT_DISCAPACIDAD` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_DAT_PERSONAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`ID_DAT_PERSONAL`, `NOMBRES`, `APELLIDOS`, `LUGAR_NAC`, `FECHA_NAC`, `EDAD`, `DISCAPACIDAD`, `CERT_DISCAPACIDAD`) VALUES
(1, 'luis antonio', 'santos chavez', 's ss dsd sd sd s', '14/01/1970', 43, 'SI', 'qqqq'),
(2, 'ff fff', ' fff fff', 'd ds fs s fd', '28/01/1970', 43, 'SI', 'ssd ss sd dsf'),
(3, 'wwww', 'wwww', 'wwww', '28/01/1970', 43, 'NO', ''),
(4, 'fgf gd df gdf', 'd dfg4r fd df', 'fdg dfgewrg f ', '15/01/1970', 43, 'NO', ''),
(5, 'luis lkfdshds b', 'jslfds s ', 'asd ad sas dasd', '29/01/1970', 43, 'NO', ''),
(6, 'dfdf', ' dfdfs ds', 'ds dsf dsf', '29/01/1970', 43, 'NO', ''),
(7, 'gtyhghfgh', 'gfhgfh', 'gfhgf', '02/01/1970', 43, 'NO', ''),
(8, 'rgfg', 'fgf', 'gfg', '08/01/1970', 43, 'NO', ''),
(9, 'gfhfh', ' fh ', 'f  fh fh f', '09/01/1970', 43, 'NO', ''),
(10, 'tgfdg dsfg fdg', 'fgfd fdg fdg ', 'fdg fd ', '09/01/1970', 43, 'NO', ''),
(11, 'dfd', 'f d', 'df d', '25/01/1970', 43, 'NO', ''),
(12, 'frdf ds', 'f df', 'sd fdsf', '21/01/1970', 43, 'NO', ''),
(13, 'fdgfd ', 'dg dg', ' dg', '18/01/1970', 43, 'NO', ''),
(14, 'ds ds ds ', 'ds fdsf', 'sd dsf', '17/01/1970', 43, 'NO', ''),
(15, 'gfg', 'fgfg', 'fgf', '17/01/1970', 43, 'NO', ''),
(16, 'dfs fs', ' dsfds', 'f sd', '22/01/1970', 43, 'NO', ''),
(17, '', '', '', '', 18, 'NO', ''),
(18, '', '', '', '', 18, 'NO', ''),
(19, 'dsfdsf', 'dsfdsf', 'sdf', '', 18, 'NO', ''),
(20, '', '', '', '', 18, 'NO', ''),
(21, '', '', '', '', 18, 'NO', ''),
(22, 'dgfdg ', 'dg d', 'g d g', '18/01/1970', 43, 'NO', ''),
(23, '', '', '', '', 18, 'NO', ''),
(24, '', '', '', '', 18, 'NO', ''),
(25, '', '', '', '', 18, 'NO', ''),
(26, '', '', '', '', 18, 'NO', ''),
(27, '', '', '', '', 18, 'NO', ''),
(28, '', '', '', '', 18, 'NO', ''),
(29, '', '', '', '', 18, 'NO', ''),
(30, 'gfg', 'fgfg', 'fgfg', '02/01/1970', 43, 'NO', ''),
(31, '', '', '', '', 18, 'NO', ''),
(32, '', '', '', '', 18, 'NO', ''),
(33, 'fdf', 'dfd', 'dafs', '29/01/1970', 43, 'NO', ''),
(34, '', '', '', '', 18, 'NO', ''),
(35, '', '', '', '', 18, 'NO', ''),
(36, '', '', '', '', 18, 'NO', ''),
(37, '', '', '', '', 18, 'NO', ''),
(38, '', '', '', '', 18, 'NO', ''),
(39, '', '', '', '', 18, 'NO', ''),
(40, '', '', '', '', 18, 'NO', ''),
(41, '', '', '', '', 18, 'NO', ''),
(42, '', '', '', '', 18, 'NO', ''),
(43, '', '', '', '', 18, 'NO', ''),
(44, '', '', '', '', 18, 'NO', ''),
(45, '', '', '', '', 18, 'NO', ''),
(46, '', '', '', '', 18, 'NO', ''),
(47, '', '', '', '', 18, 'NO', ''),
(48, '', '', '', '', 18, 'NO', ''),
(49, '', '', '', '', 18, 'NO', ''),
(50, '', '', '', '', 18, 'NO', ''),
(51, '', '', '', '', 18, 'NO', ''),
(52, '', '', '', '', 18, 'NO', ''),
(53, '', '', '', '', 18, 'NO', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_postulante`
--

CREATE TABLE IF NOT EXISTS `datos_postulante` (
  `ID_DAT_PERSONAL` int(11) NOT NULL,
  `PK_DAT_POSTULANTE` int(11) NOT NULL AUTO_INCREMENT,
  `CARGO_A_POSTULAR` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONDICION` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO_CURSO` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOTA` double DEFAULT NULL,
  `PRE_PROMEDIO` double DEFAULT NULL,
  `ORDEN_MERITO` int(11) DEFAULT NULL,
  `PLAZAS_VACANTES` int(11) DEFAULT NULL,
  `EXAMEN_CONOCIMIENTOS` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `AFILIACION_CURRICULAR` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_DAT_POSTULANTE`),
  KEY `PERSONALESPOSTULANTE` (`ID_DAT_PERSONAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `datos_postulante`
--

INSERT INTO `datos_postulante` (`ID_DAT_PERSONAL`, `PK_DAT_POSTULANTE`, `CARGO_A_POSTULAR`, `CONDICION`, `TIPO_CURSO`, `NOTA`, `PRE_PROMEDIO`, `ORDEN_MERITO`, `PLAZAS_VACANTES`, `EXAMEN_CONOCIMIENTOS`, `AFILIACION_CURRICULAR`) VALUES
(4, 1, 'df dfg dfg d', 'df dfg sgs f gfdg ', 'PROFA', 0, 0, 0, 0, 'dfgs fdgse ', 'ds ge dsfdsf'),
(5, 2, 'df a afssa', 'f saf asf a', 'Ascenso', 0, 0, 0, 0, 'sa fasf asf saf', 'sf fs saf '),
(6, 3, 'dsf dsf ds', 'f dsfdsfdsf', 'Ascenso', 0, 0, 0, 0, 'dsfdsf', 'dfsdf'),
(7, 4, '6ytut rth', 'hhgfhgfh', 'PROFA', 0, 0, 0, 0, 'fhgfgh ', 'fg gfh fg'),
(8, 5, 'fgdxgfg ', 'fgdfgdfg', 'PROFA', 0, 0, 0, 0, 'fdgfdg', ' fdgfdg'),
(9, 6, 'gfg fg d', 'fg fdg fg', 'PROFA', 0, 0, 0, 0, 'fg fd', 'g fg '),
(10, 7, 'fdg dfgfd g', 'fd fdg fdg ', 'PROFA', 0, 0, 0, 0, 'fdg fd g', 'fd fdg fdg '),
(11, 8, 'df d', 'd df', 'PROFA', 0, 0, 0, 0, 'dfd', 'fdf'),
(12, 9, 'ds fdsf', 'ds dsf ', 'PROFA', 0, 0, 0, 0, ' dsdsf', 'ds fdsf '),
(13, 10, 'dgds sdg', ' sdg ds', 'PROFA', 0, 0, 0, 0, 'd sgsdg', ' sddsg '),
(14, 11, 'ds dsf', 'ds dsf ds', 'PROFA', 0, 0, 0, 0, 'd sds', ' dsds f'),
(15, 12, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(16, 13, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(17, 14, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(18, 15, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(19, 16, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(20, 17, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(21, 18, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(22, 19, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(23, 20, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(24, 21, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(25, 22, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(26, 23, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(27, 24, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(29, 25, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(30, 26, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(31, 27, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(32, 28, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(33, 29, 'sdfgsg', 'dssddsgsd', 'PROFA', 0, 0, 0, 0, 'dsgsdg', 'dsgdg'),
(34, 30, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(35, 31, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(36, 32, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(37, 33, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(38, 34, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(39, 35, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(40, 36, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(41, 37, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(42, 38, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(43, 39, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(44, 40, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(45, 41, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(46, 42, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(47, 43, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(48, 44, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(49, 45, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(50, 46, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(51, 47, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(52, 48, '', '', 'PROFA', 0, 0, 0, 0, '', ''),
(53, 49, '', '', 'PROFA', 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_situacion_laboral`
--

CREATE TABLE IF NOT EXISTS `det_situacion_laboral` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_SIT_LABORAL` int(11) NOT NULL AUTO_INCREMENT,
  `CENTRO_TRABAJO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CARGO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PERIODO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SITUACION_LABORAL` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_SIT_LABORAL`),
  KEY `SITUACIONSITLAB` (`PK_SIT_LABORAL`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `det_situacion_laboral`
--

INSERT INTO `det_situacion_laboral` (`PK_DAT_POSTULANTE`, `PK_SIT_LABORAL`, `CENTRO_TRABAJO`, `CARGO`, `PERIODO`, `SITUACION_LABORAL`) VALUES
(NULL, 1, 'aa', 'sadsa', 'dsad', 'sadsa d'),
(NULL, 2, 'sadsa', 'aaa', 'sdsafff', 'sadsa d'),
(NULL, 3, 'sdfsd', 'fssdf', 'sfsf', ' sdfsdf sd ds '),
(NULL, 4, 'fsdf', 'fsd', 'sdf', ' sdfsdf sd ds '),
(NULL, 5, ' dfsf ', ' dsfsdf dfsd', 'ssd ds d', ' sdfsdf sd ds '),
(NULL, 6, '', '', '', ''),
(NULL, 7, '', '', '', ''),
(NULL, 8, '', '', '', ''),
(NULL, 9, '', '', '', ''),
(NULL, 10, '', '', '', ''),
(NULL, 11, '', '', '', ''),
(NULL, 12, '', '', '', ''),
(NULL, 13, '', '', '', ''),
(NULL, 14, '', '', '', ''),
(NULL, 15, '', '', '', ''),
(NULL, 16, '', '', '', ''),
(NULL, 17, '', '', '', ''),
(38, 18, 'cxvc ', 'cv xc', 'cx c', 'df sfs d xcv'),
(38, 19, 'xvxc ', 'c cx', ' vxc', 'df sfs d xcv'),
(38, 20, 'df cvc', 'xvcv x', 'ccx cxv', 'df sfs d xcv'),
(39, 21, '', '', '', ''),
(39, 22, '', '', '', ''),
(39, 23, '', '', '', ''),
(40, 24, '', '', '', ''),
(40, 25, '', '', '', ''),
(40, 26, '', '', '', ''),
(41, 27, '', '', '', ''),
(41, 28, '', '', '', ''),
(41, 29, '', '', '', ''),
(42, 30, '', '', '', ''),
(42, 31, '', '', '', ''),
(42, 32, '', '', '', ''),
(43, 33, '', '', '', ''),
(43, 34, '', '', '', ''),
(43, 35, '', '', '', ''),
(44, 36, '', '', '', ''),
(44, 37, '', '', '', ''),
(44, 38, '', '', '', ''),
(45, 39, '', '', '', ''),
(45, 40, '', '', '', ''),
(45, 41, '', '', '', ''),
(46, 42, '', '', '', ''),
(46, 43, '', '', '', ''),
(46, 44, '', '', '', ''),
(47, 45, '', '', '', ''),
(47, 46, '', '', '', ''),
(47, 47, '', '', '', ''),
(48, 48, '', '', '', ''),
(48, 49, '', '', '', ''),
(48, 50, '', '', '', ''),
(49, 51, '', '', '', ''),
(49, 52, '', '', '', ''),
(49, 53, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docencia_universitaria`
--

CREATE TABLE IF NOT EXISTS `docencia_universitaria` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_DOC_UNIVERSITARIA` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FACULTAD` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONDICION` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CATEGORIA` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CURSOS` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PERIODO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_DOC_UNIVERSITARIA`),
  KEY `EXPERIENCIADOCUNI` (`PK_DOC_UNIVERSITARIA`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `docencia_universitaria`
--

INSERT INTO `docencia_universitaria` (`PK_DAT_POSTULANTE`, `PK_DOC_UNIVERSITARIA`, `UNIVERSIDAD`, `FACULTAD`, `CONDICION`, `CATEGORIA`, `CURSOS`, `PERIODO`) VALUES
(NULL, 1, 'Universidad Nacional del Callao (UNAC) (Bellavista', 'ytyt', 'Nombrado', 'Principal', 'tytyt', 'tyty'),
(NULL, 2, 'Universidad Nacional del Callao (UNAC) (Bellavista', 'tyty', 'Nombrado', 'Principal', 'tyty', 'tyty'),
(NULL, 3, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(NULL, 4, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(38, 5, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(39, 6, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(40, 7, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(41, 8, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(42, 9, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(43, 10, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(44, 11, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(45, 12, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(46, 13, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(47, 14, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(48, 15, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', ''),
(49, 16, 'Universidad Nacional del Callao (UNAC) (Bellavista', '', 'Nombrado', 'Principal', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_derecho`
--

CREATE TABLE IF NOT EXISTS `doc_derecho` (
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  `PK_DOC_DERECHO` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NIVEL` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MENSION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ANIO` varchar(2013) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_DOC_DERECHO`),
  KEY `ACADEMICOSDOC_DERECHO` (`PK_DOC_DERECHO`),
  KEY `PK_DAT_ACADEMICOS` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `doc_derecho`
--

INSERT INTO `doc_derecho` (`PK_DAT_ACADEMICOS`, `PK_DOC_DERECHO`, `UNIVERSIDAD`, `NIVEL`, `MENSION`, `ANIO`) VALUES
(3, 1, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'dsgdsg', '2013'),
(3, 2, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 's gsdg dgssdg', '2013'),
(3, 3, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sdgsdg sds g', '2013'),
(4, 4, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'ds fdsf ds', '2013'),
(5, 5, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(6, 6, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(7, 7, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(8, 8, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(9, 9, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(10, 10, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(11, 11, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(12, 12, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(13, 13, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(14, 14, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(15, 15, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(16, 16, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(17, 17, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(18, 18, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(19, 19, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(20, 20, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(21, 21, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(22, 22, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(23, 23, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(23, 24, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(24, 25, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(25, 26, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(26, 27, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(27, 28, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'dfsfsf', '2013'),
(27, 29, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sfsf', '2013'),
(28, 30, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(29, 31, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(30, 32, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(31, 33, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(32, 34, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(33, 35, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(34, 36, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(35, 37, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(36, 38, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(37, 39, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(38, 40, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(39, 41, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_des_profesional`
--

CREATE TABLE IF NOT EXISTS `doc_des_profesional` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_EXP_PROFESIONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NUM_EXP` int(11) DEFAULT NULL,
  `DDAS` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DDAE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MATERIA` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESPECIALIDAD` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CALIFICACION1` double DEFAULT NULL,
  `CALIFICACION2` double DEFAULT NULL,
  PRIMARY KEY (`PK_EXP_PROFESIONAL`),
  KEY `DOC_DES_PROFESIONAL` (`PK_EXP_PROFESIONAL`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `doc_des_profesional`
--

INSERT INTO `doc_des_profesional` (`PK_DAT_POSTULANTE`, `PK_EXP_PROFESIONAL`, `NUM_EXP`, `DDAS`, `DDAE`, `MATERIA`, `ESPECIALIDAD`, `CALIFICACION1`, `CALIFICACION2`) VALUES
(NULL, 1, 0, 'f', 'fgf', 'fg', 'fgf', 12, 12),
(NULL, 2, 0, 'ds', 'sd', 'dsd', 'sd', 23, 12),
(NULL, 3, 12, 'dsf', 'fdsdf', 'dsfdsfds', 'sdfsf', 11, 11),
(NULL, 4, 12, 'fdsdsf', 'fdsf', 'fdsfds', 'sdfds', 11, 11),
(NULL, 5, 0, 'fgg', 'fg', 'fgfh', 'fhhf', 11, 11),
(NULL, 6, 0, 'ss', 'sfs', 'fsf', 's', 11, 11),
(NULL, 7, 0, 'fg', 'fg', 'gff', 'gfg', 0, 0),
(NULL, 8, 0, 'dgd', ' gdg', 'dg', 'dgd', 11, 11),
(NULL, 9, 0, '', '', '', '', 0, 0),
(NULL, 10, 0, 'dsf', 'dsfds', 'fds', '', 0, 0),
(NULL, 11, 0, 'dsfdsf', 'dsf', 'fdsf', '', 0, 0),
(NULL, 12, 0, '', '', '', '', 0, 0),
(NULL, 13, 0, 'fgfg', 'gfg', 'fg', 'fg', 12, 12),
(NULL, 14, 0, '', '', '', '', 0, 0),
(NULL, 15, 0, '', '', '', '', 0, 0),
(NULL, 16, 0, '', '', '', '', 0, 0),
(NULL, 17, 0, '', '', '', '', 0, 0),
(NULL, 18, 0, '', '', '', '', 0, 0),
(NULL, 19, 0, '', '', '', '', 0, 0),
(38, 20, 0, 'dfd', 'dfd', 'fdf', 'fd', 0, 0),
(38, 21, 0, 'fdf', 'fdfd', 'dfd', 'fdf', 0, 0),
(39, 22, 0, '', '', '', '', 0, 0),
(40, 23, 0, '', '', '', '', 0, 0),
(41, 24, 0, '', '', '', '', 0, 0),
(42, 25, 0, '', '', '', '', 0, 0),
(43, 26, 0, '', '', '', '', 0, 0),
(44, 27, 0, '', '', '', '', 0, 0),
(45, 28, 0, '', '', '', '', 0, 0),
(46, 29, 0, '', '', '', '', 0, 0),
(47, 30, 0, '', '', '', '', 0, 0),
(48, 31, 0, '', '', '', '', 0, 0),
(49, 32, 0, '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_cama_info`
--

CREATE TABLE IF NOT EXISTS `informacion_cama_info` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_INFORMACION_CAMA_INFO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_INFORMACION_CAMA_INFO`),
  KEY `INFORMACION_CAMA_INFO` (`PK_INFORMACION_CAMA_INFO`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_oficinas`
--

CREATE TABLE IF NOT EXISTS `informacion_oficinas` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PROCESOS_INFORMACION_OFICINAS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_OFICINA` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_INFORMACION_OFICINAS`),
  KEY `INFORMACION_OFICINAS` (`PK_PROCESOS_INFORMACION_OFICINAS`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_patrimonial_conyuge`
--

CREATE TABLE IF NOT EXISTS `informacion_patrimonial_conyuge` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
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
  PRIMARY KEY (`PK_INFORMACION_PAT_CON`),
  KEY `INFORMACION_PATRIMONIAL_CONYUGE` (`PK_INFORMACION_PAT_CON`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_registro_de`
--

CREATE TABLE IF NOT EXISTS `informacion_registro_de` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_INFORMACION_REG_DEU` int(11) NOT NULL AUTO_INCREMENT,
  `DEUDORES_ALIMENTARIOS` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `COMPLEMENTARIA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_INFORMACION_REG_DEU`),
  KEY `INFORMACION_REGISTRO_DE` (`PK_INFORMACION_REG_DEU`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_ingresos_conyuge`
--

CREATE TABLE IF NOT EXISTS `info_ingresos_conyuge` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PAT_CONYUGE` int(11) NOT NULL AUTO_INCREMENT,
  `ANO_EJE` int(11) DEFAULT NULL,
  `NOMBRE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `INGRESO_MENSUAL_PROMEDIO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DEPENDENCIA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CARGO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PAT_CONYUGE`),
  KEY `INFO_INGRESOS_CONYUGE` (`PK_PAT_CONYUGE`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_pat_conyuge_personal`
--

CREATE TABLE IF NOT EXISTS `info_pat_conyuge_personal` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PAT_CON_PERSONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `OCUPACION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `REGIMEN` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NRO_DEPENDIENTES` double DEFAULT NULL,
  `OBSERVACION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PAT_CON_PERSONAL`),
  KEY `INFO_PAT_CONYUGE_PERSONAL` (`PK_PAT_CON_PERSONAL`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_INGRESOS` int(11) NOT NULL AUTO_INCREMENT,
  `ANO_EJE` double DEFAULT NULL,
  `REMUNERACION` double DEFAULT NULL,
  `DIETAS` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  PRIMARY KEY (`PK_INGRESOS`),
  KEY `INGRESOS` (`PK_INGRESOS`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias_otorgadas`
--

CREATE TABLE IF NOT EXISTS `licencias_otorgadas` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_LICENCIAS_OTOR` int(11) NOT NULL AUTO_INCREMENT,
  `ANIO` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ENFERMEDAD` int(11) DEFAULT NULL,
  `VACACIONES` int(11) DEFAULT NULL,
  `CAPACITACION` int(11) DEFAULT NULL,
  `ONOMASTICO` int(11) DEFAULT NULL,
  `LICENCIA_GOCE` int(11) DEFAULT NULL,
  `MOTIVOS_PERSONALES` int(11) DEFAULT NULL,
  `TOTAL_LICENCIAS` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_LICENCIAS_OTOR`),
  KEY `EXPERIENCIALICOTORGADAS` (`PK_LICENCIAS_OTOR`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `licencias_otorgadas`
--

INSERT INTO `licencias_otorgadas` (`PK_DAT_POSTULANTE`, `PK_LICENCIAS_OTOR`, `ANIO`, `ENFERMEDAD`, `VACACIONES`, `CAPACITACION`, `ONOMASTICO`, `LICENCIA_GOCE`, `MOTIVOS_PERSONALES`, `TOTAL_LICENCIAS`) VALUES
(40, 1, '2008', 0, 0, 0, 0, 0, 0, 123),
(40, 2, '2009', 0, 0, 0, 0, 0, 0, 123),
(40, 3, '2010', 0, 0, 0, 0, 0, 0, 123),
(40, 4, '2011', 0, 0, 0, 0, 0, 0, 123),
(40, 5, '2012', 0, 0, 0, 0, 0, 0, 123),
(41, 6, '2008', 0, 0, 0, 0, 0, 0, 0),
(41, 7, '2009', 0, 0, 0, 0, 0, 0, 0),
(41, 8, '2010', 0, 0, 0, 0, 0, 0, 0),
(41, 9, '2011', 0, 0, 0, 0, 0, 0, 0),
(41, 10, '2012', 0, 0, 0, 0, 0, 0, 0),
(42, 11, '2008', 0, 0, 0, 0, 0, 0, 0),
(42, 12, '2009', 0, 0, 0, 0, 0, 0, 0),
(42, 13, '2010', 0, 0, 0, 0, 0, 0, 0),
(42, 14, '2011', 0, 0, 0, 0, 0, 0, 0),
(42, 15, '2012', 0, 0, 0, 0, 0, 0, 0),
(43, 16, '2008', 0, 0, 0, 0, 0, 0, 0),
(43, 17, '2009', 0, 0, 0, 0, 0, 0, 0),
(43, 18, '2010', 0, 0, 0, 0, 0, 0, 0),
(43, 19, '2011', 0, 0, 0, 0, 0, 0, 0),
(43, 20, '2012', 0, 0, 0, 0, 0, 0, 0),
(44, 21, '2008', 0, 0, 0, 0, 0, 0, 0),
(44, 22, '2009', 0, 0, 0, 0, 0, 0, 0),
(44, 23, '2010', 0, 0, 0, 0, 0, 0, 0),
(44, 24, '2011', 0, 0, 0, 0, 0, 0, 0),
(44, 25, '2012', 0, 0, 0, 0, 0, 0, 0),
(45, 26, '2008', 0, 0, 0, 0, 0, 0, 0),
(45, 27, '2009', 0, 0, 0, 0, 0, 0, 0),
(45, 28, '2010', 0, 0, 0, 0, 0, 0, 0),
(45, 29, '2011', 0, 0, 0, 0, 0, 0, 0),
(45, 30, '2012', 0, 0, 0, 0, 0, 0, 0),
(46, 31, '2008', 0, 0, 0, 0, 0, 0, 0),
(46, 32, '2009', 0, 0, 0, 0, 0, 0, 0),
(46, 33, '2010', 0, 0, 0, 0, 0, 0, 0),
(46, 34, '2011', 0, 0, 0, 0, 0, 0, 0),
(46, 35, '2012', 0, 0, 0, 0, 0, 0, 0),
(47, 36, '2008', 0, 0, 0, 0, 0, 0, 0),
(47, 37, '2009', 0, 0, 0, 0, 0, 0, 0),
(47, 38, '2010', 0, 0, 0, 0, 0, 0, 0),
(47, 39, '2011', 0, 0, 0, 0, 0, 0, 0),
(47, 40, '2012', 0, 0, 0, 0, 0, 0, 0),
(48, 41, '2008', 0, 0, 0, 0, 0, 0, 0),
(48, 42, '2009', 0, 0, 0, 0, 0, 0, 0),
(48, 43, '2010', 0, 0, 0, 0, 0, 0, 0),
(48, 44, '2011', 0, 0, 0, 0, 0, 0, 0),
(48, 45, '2012', 0, 0, 0, 0, 0, 0, 0),
(49, 46, '2008', 0, 0, 0, 0, 0, 0, 0),
(49, 47, '2009', 0, 0, 0, 0, 0, 0, 0),
(49, 48, '2010', 0, 0, 0, 0, 0, 0, 0),
(49, 49, '2011', 0, 0, 0, 0, 0, 0, 0),
(49, 50, '2012', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_derecho`
--

CREATE TABLE IF NOT EXISTS `mae_derecho` (
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  `PK_MAE_DERECHO` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NIVEL` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MENSION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ANIO` varchar(2013) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_MAE_DERECHO`),
  KEY `ACADEMICOSDOCDERECHO` (`PK_MAE_DERECHO`),
  KEY `PK_DAT_ACADEMICOS` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `mae_derecho`
--

INSERT INTO `mae_derecho` (`PK_DAT_ACADEMICOS`, `PK_MAE_DERECHO`, `UNIVERSIDAD`, `NIVEL`, `MENSION`, `ANIO`) VALUES
(4, 1, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'dfdsf', '2013'),
(4, 2, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'dsfdsf', '2013'),
(4, 3, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sdfdsf', '2013'),
(5, 4, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(6, 5, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(7, 6, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(8, 7, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(9, 8, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(10, 9, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(11, 10, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(12, 11, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(13, 12, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(14, 13, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(15, 14, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(16, 15, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(17, 16, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(18, 17, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(19, 18, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(20, 19, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(21, 20, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(22, 21, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(23, 22, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(23, 23, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(24, 24, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(25, 25, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(26, 26, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(27, 27, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sdsd', '2013'),
(27, 28, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sdsds', '2013'),
(28, 29, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(29, 30, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(30, 31, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(31, 32, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(32, 33, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(33, 34, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(34, 35, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(35, 36, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(36, 37, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(37, 38, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(38, 39, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(39, 40, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `magistrado_ratificado`
--

CREATE TABLE IF NOT EXISTS `magistrado_ratificado` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_EXP_MAG_RAT` int(11) NOT NULL AUTO_INCREMENT,
  `RESPUESTA1` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESPUESTA2` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESOLUCION` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_RES` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RESPUESTA3` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_EXP_MAG_RAT`),
  KEY `EXPERIENCIAMAGRAT` (`PK_EXP_MAG_RAT`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `magistrado_ratificado`
--

INSERT INTO `magistrado_ratificado` (`PK_DAT_POSTULANTE`, `PK_EXP_MAG_RAT`, `RESPUESTA1`, `RESPUESTA2`, `RESOLUCION`, `FECHA_RES`, `RESPUESTA3`) VALUES
(NULL, 1, '0', 'Por Unanimidad', '', '29/01/1970', 'Aún no ha sido objeto de Proce'),
(NULL, 2, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 3, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 4, '0', NULL, '12', '16/01/1970', 'Aún no ha sido objeto de Proce'),
(NULL, 5, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 6, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 7, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 8, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 9, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(NULL, 10, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(38, 11, '0', NULL, '12', '28/01/1970', 'Aún no ha sido objeto de Proce'),
(39, 12, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(40, 13, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(41, 14, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(42, 15, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(43, 16, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(44, 17, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(45, 18, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(46, 19, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(47, 20, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(48, 21, '0', NULL, '', '', 'Aún no ha sido objeto de Proce'),
(49, 22, '0', NULL, '', '', 'Aún no ha sido objeto de Proce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meritos_univ`
--

CREATE TABLE IF NOT EXISTS `meritos_univ` (
  `PK_MERITOS_UNIV_DET` int(11) NOT NULL AUTO_INCREMENT,
  `PUESTO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ANIO` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_MERITOS_UNIV_DET`),
  KEY `ACADEMICOSMERITOS` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `meritos_univ`
--

INSERT INTO `meritos_univ` (`PK_MERITOS_UNIV_DET`, `PUESTO`, `UNIVERSIDAD`, `ANIO`, `PK_DAT_ACADEMICOS`) VALUES
(1, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 4),
(2, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 5),
(3, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 6),
(4, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 7),
(5, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 8),
(6, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 9),
(7, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 10),
(8, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 11),
(9, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 12),
(10, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 13),
(11, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 14),
(12, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 15),
(13, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 16),
(14, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 17),
(15, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 18),
(16, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 19),
(17, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 20),
(18, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 21),
(19, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 22),
(20, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 23),
(21, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 24),
(22, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 25),
(23, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 26),
(24, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 27),
(25, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 28),
(26, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 29),
(27, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 30),
(28, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 31),
(29, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 32),
(30, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 33),
(31, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 34),
(32, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 35),
(33, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 36),
(34, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 37),
(35, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 38),
(36, 'PRIMER PUESTO', 'Universidad Nacional del Callao (UNAC) (Bellavista)', '2013', 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_migratorio`
--

CREATE TABLE IF NOT EXISTS `movimiento_migratorio` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_MOVIMIENTO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `FECHA` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESTINO_PROCEDENCIA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_MOVIMIENTO`),
  KEY `MOVIMIENTO_MIGRATORIO` (`PK_MOVIMIENTO`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otras_disciplinas`
--

CREATE TABLE IF NOT EXISTS `otras_disciplinas` (
  `PK_DAT_ACADEMICOS` int(11) DEFAULT NULL,
  `PK_OTRAS_DISC` int(11) NOT NULL AUTO_INCREMENT,
  `UNIVERSIDAD` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NIVEL` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MENSION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ANIO` varchar(2013) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_OTRAS_DISC`),
  KEY `ACADEMICOSDISCIPLINAS` (`PK_OTRAS_DISC`),
  KEY `PK_DAT_ACADEMICOS` (`PK_DAT_ACADEMICOS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `otras_disciplinas`
--

INSERT INTO `otras_disciplinas` (`PK_DAT_ACADEMICOS`, `PK_OTRAS_DISC`, `UNIVERSIDAD`, `NIVEL`, `MENSION`, `ANIO`) VALUES
(4, 1, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sd ds fds', '2013'),
(5, 2, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(6, 3, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(7, 4, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(8, 5, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(9, 6, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(10, 7, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(11, 8, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(12, 9, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(13, 10, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(14, 11, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(15, 12, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(16, 13, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(17, 14, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(18, 15, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(19, 16, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(20, 17, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(21, 18, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(22, 19, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(23, 20, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(24, 21, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(25, 22, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(26, 23, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(27, 24, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', 'sdsds', '2013'),
(28, 25, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(29, 26, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(30, 27, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(31, 28, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(32, 29, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(33, 30, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(34, 31, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(35, 32, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(36, 33, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(37, 34, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(38, 35, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013'),
(39, 36, 'Universidad Nacional del Callao (UNAC) (Bellavista)', 'TITULADO', '', '2013');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_ingresos`
--

CREATE TABLE IF NOT EXISTS `otros_ingresos` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_INGRESOS_OTROS` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  PRIMARY KEY (`PK_INGRESOS_OTROS`),
  KEY `INGRESOS` (`PK_INGRESOS_OTROS`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrimonio`
--

CREATE TABLE IF NOT EXISTS `patrimonio` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PATRIMONIO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_PATRIMONIO` int(11) DEFAULT NULL,
  `TIPO_BIEN` int(11) DEFAULT NULL,
  `UBICACION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  PRIMARY KEY (`PK_PATRIMONIO`),
  KEY `PATRIMONIO` (`PK_PATRIMONIO`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrimonio_bienes_conyuge`
--

CREATE TABLE IF NOT EXISTS `patrimonio_bienes_conyuge` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PAT_BIENES_CONYUGE` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_MODO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ULT_VALOR` double DEFAULT NULL,
  `DATOS_REG_PUBLICOS` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_MODO_TRANSFERENCIA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PAT_BIENES_CONYUGE`),
  KEY `PATRMONIO_BIENES_CONYUGE` (`PK_PAT_BIENES_CONYUGE`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrimonio_otros`
--

CREATE TABLE IF NOT EXISTS `patrimonio_otros` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PATRIMONIO_OTROS` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  PRIMARY KEY (`PK_PATRIMONIO_OTROS`),
  KEY `PATRIMONIO_OTROS` (`PK_PATRIMONIO_OTROS`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_administrativos`
--

CREATE TABLE IF NOT EXISTS `procesos_administrativos` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PROCESOS_ADM` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `ID_INSTITUCION` int(11) DEFAULT NULL,
  `RESOLUCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SANCION` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESTADO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_ADM`),
  KEY `PROCESOS_JUDICIALES` (`PK_PROCESOS_ADM`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_en_min_pub`
--

CREATE TABLE IF NOT EXISTS `procesos_en_min_pub` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PROCESOS_PODER_JUD` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `ID_INSTITUCION` int(11) DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `QUEJAS` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MOTIVO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_PODER_JUD`),
  KEY `PROCESOS_EN_MIN_PUB` (`PK_PROCESOS_PODER_JUD`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_en_poder_jud`
--

CREATE TABLE IF NOT EXISTS `procesos_en_poder_jud` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PROCESOS_PODER_JUD` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `ID_INSTITUCION` int(11) DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `QUEJAS` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MOTIVO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_PODER_JUD`),
  KEY `PROCESOS_EN_PODER_JUD` (`PK_PROCESOS_PODER_JUD`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_judiciales`
--

CREATE TABLE IF NOT EXISTS `procesos_judiciales` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PROCESOS_JUD` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` int(11) DEFAULT NULL,
  `EXPEDIENTE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ORGANO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DEMANDADO_AGRESOR` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MATERIA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESTADO` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PROCESOS_JUD`),
  KEY `PROCESOS_JUDICIALES` (`PK_PROCESOS_JUD`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `procesos_judiciales`
--

INSERT INTO `procesos_judiciales` (`PK_DAT_POSTULANTE`, `PK_PROCESOS_JUD`, `TIPO`, `EXPEDIENTE`, `ORGANO`, `DEMANDADO_AGRESOR`, `MATERIA`, `ESTADO`) VALUES
(43, 1, 0, '123', 'dsfdsf', 'dsfdsf', 'df', 'dsfd'),
(43, 2, 1, '123', 'fsdf', 'dsfsd', 'dsf', 'df'),
(43, 3, 2, '123', 'sadas', 'dasd', 'sads', 'asd'),
(44, 4, 0, 'dsfds', 'ds ', 'd', 'dsfsd ', 'df'),
(44, 5, 0, 'sdf', 'sd ', 'f sdd ', 'sdfds', 'dsfsd'),
(44, 6, 1, 'dsf', 'dfsd', 'sdf', 'fsd', 'dsfsd'),
(45, 7, 0, 'dfsd', 'sdfds', 'dfd', 'dfsd', 'sdf'),
(45, 8, 0, 'dfsdfd', 'dfsd', 'fds', 'df', 'sdf'),
(45, 9, 1, 'sdfsd', 'sdfsdf', 'sd', 'sdf', 'sdfsdf'),
(49, 10, 0, '', '', '', '', ''),
(49, 11, 0, '', '', '', '', ''),
(49, 12, 1, '', '', '', '', ''),
(49, 13, 1, '', '', '', '', ''),
(49, 14, 2, '', '', '', '', ''),
(49, 15, 2, '', '', '', '', ''),
(49, 16, 0, '', '', '', '', ''),
(49, 17, 0, '', '', '', '', ''),
(49, 18, 1, '', '', '', '', ''),
(49, 19, 1, '', '', '', '', ''),
(49, 20, 2, '', '', '', '', ''),
(49, 21, 2, '', '', '', '', ''),
(49, 22, 0, '', '', '', '', ''),
(49, 23, 0, '', '', '', '', ''),
(49, 24, 1, '', '', '', '', ''),
(49, 25, 1, '', '', '', '', ''),
(49, 26, 2, '', '', '', '', ''),
(49, 27, 2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_jur_fiscal`
--

CREATE TABLE IF NOT EXISTS `prod_jur_fiscal` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PROD_JUR_FISCAL` int(11) NOT NULL AUTO_INCREMENT,
  `RESPUESTA` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DET_RESPUESTA` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `PK_EXP_PROFESIONAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`PK_PROD_JUR_FISCAL`),
  KEY `EXPERIENCIAPRODJUR` (`PK_PROD_JUR_FISCAL`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `prod_jur_fiscal`
--

INSERT INTO `prod_jur_fiscal` (`PK_DAT_POSTULANTE`, `PK_PROD_JUR_FISCAL`, `RESPUESTA`, `DET_RESPUESTA`, `PK_EXP_PROFESIONAL`) VALUES
(39, 1, 'PODER JUDICIAL', 'ffs sdsd dsgsdg dshds', NULL),
(40, 2, 'PODER JUDICIAL', '', NULL),
(41, 3, 'PODER JUDICIAL', '', NULL),
(42, 4, 'PODER JUDICIAL', '', NULL),
(43, 5, 'PODER JUDICIAL', '', NULL),
(44, 6, 'PODER JUDICIAL', '', NULL),
(45, 7, 'PODER JUDICIAL', '', NULL),
(46, 8, 'PODER JUDICIAL', '', NULL),
(47, 9, 'PODER JUDICIAL', '', NULL),
(48, 10, 'PODER JUDICIAL', '', NULL),
(49, 11, 'PODER JUDICIAL', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_PUBLICACIONES` int(11) NOT NULL AUTO_INCREMENT,
  `LIBROS_TEXTOS_UNIV` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `INV_JURIDICAS` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ENSAYOS_JURIDICO` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ARTICULOS_JURIDICOS` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ARTICULOS_NO_JURIDICOS` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PK_PUBLICACIONES`),
  KEY `EXPERIENCIAPUBLI` (`PK_PUBLICACIONES`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`PK_DAT_POSTULANTE`, `PK_PUBLICACIONES`, `LIBROS_TEXTOS_UNIV`, `INV_JURIDICAS`, `ENSAYOS_JURIDICO`, `ARTICULOS_JURIDICOS`, `ARTICULOS_NO_JURIDICOS`) VALUES
(NULL, 1, 'sfsdf', 'dsfdsf', 'dsfdsf', 'dsfdsf', 'dsfdsf dsf ds'),
(38, 2, '', '', '', '', ''),
(39, 3, '', '', '', '', ''),
(40, 4, '', '', '', '', ''),
(41, 5, '', '', '', '', ''),
(42, 6, '', '', '', '', ''),
(43, 7, '', '', '', '', ''),
(44, 8, '', '', '', '', ''),
(45, 9, '', '', '', '', ''),
(46, 10, '', '', '', '', ''),
(47, 11, '', '', '', '', ''),
(48, 12, '', '', '', '', ''),
(49, 13, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_financiero`
--

CREATE TABLE IF NOT EXISTS `sistema_financiero` (
  `PK_DAT_POSTULANTE` int(11) DEFAULT NULL,
  `PK_SISTEMA_FINANCIERO` int(11) NOT NULL AUTO_INCREMENT,
  `CLASE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ENTIDAD` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  PRIMARY KEY (`PK_SISTEMA_FINANCIERO`),
  KEY `SISTEMA_FINANCIERO` (`PK_SISTEMA_FINANCIERO`),
  KEY `PK_DAT_POSTULANTE` (`PK_DAT_POSTULANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acreencias`
--
ALTER TABLE `acreencias`
  ADD CONSTRAINT `acreencias_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `antecedentes_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `cal_jud_fis`
--
ALTER TABLE `cal_jud_fis`
  ADD CONSTRAINT `cal_jud_fis_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `convocatorias_anteriores`
--
ALTER TABLE `convocatorias_anteriores`
  ADD CONSTRAINT `convocatorias_anteriores_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `datos_academicos`
--
ALTER TABLE `datos_academicos`
  ADD CONSTRAINT `datos_academicos_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `datos_postulante`
--
ALTER TABLE `datos_postulante`
  ADD CONSTRAINT `datos_postulante_ibfk_1` FOREIGN KEY (`ID_DAT_PERSONAL`) REFERENCES `datos_personales` (`ID_DAT_PERSONAL`);

--
-- Filtros para la tabla `det_situacion_laboral`
--
ALTER TABLE `det_situacion_laboral`
  ADD CONSTRAINT `det_situacion_laboral_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `docencia_universitaria`
--
ALTER TABLE `docencia_universitaria`
  ADD CONSTRAINT `docencia_universitaria_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `doc_derecho`
--
ALTER TABLE `doc_derecho`
  ADD CONSTRAINT `doc_derecho_ibfk_1` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `doc_des_profesional`
--
ALTER TABLE `doc_des_profesional`
  ADD CONSTRAINT `doc_des_profesional_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_cama_info`
--
ALTER TABLE `informacion_cama_info`
  ADD CONSTRAINT `informacion_cama_info_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_oficinas`
--
ALTER TABLE `informacion_oficinas`
  ADD CONSTRAINT `informacion_oficinas_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_patrimonial_conyuge`
--
ALTER TABLE `informacion_patrimonial_conyuge`
  ADD CONSTRAINT `informacion_patrimonial_conyuge_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `informacion_registro_de`
--
ALTER TABLE `informacion_registro_de`
  ADD CONSTRAINT `informacion_registro_de_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `info_ingresos_conyuge`
--
ALTER TABLE `info_ingresos_conyuge`
  ADD CONSTRAINT `info_ingresos_conyuge_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `info_pat_conyuge_personal`
--
ALTER TABLE `info_pat_conyuge_personal`
  ADD CONSTRAINT `info_pat_conyuge_personal_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `licencias_otorgadas`
--
ALTER TABLE `licencias_otorgadas`
  ADD CONSTRAINT `licencias_otorgadas_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `mae_derecho`
--
ALTER TABLE `mae_derecho`
  ADD CONSTRAINT `mae_derecho_ibfk_1` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `magistrado_ratificado`
--
ALTER TABLE `magistrado_ratificado`
  ADD CONSTRAINT `magistrado_ratificado_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `meritos_univ`
--
ALTER TABLE `meritos_univ`
  ADD CONSTRAINT `meritos_univ_ibfk_1` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `movimiento_migratorio`
--
ALTER TABLE `movimiento_migratorio`
  ADD CONSTRAINT `movimiento_migratorio_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `otras_disciplinas`
--
ALTER TABLE `otras_disciplinas`
  ADD CONSTRAINT `otras_disciplinas_ibfk_1` FOREIGN KEY (`PK_DAT_ACADEMICOS`) REFERENCES `datos_academicos` (`PK_DAT_ACADEMICOS`);

--
-- Filtros para la tabla `otros_ingresos`
--
ALTER TABLE `otros_ingresos`
  ADD CONSTRAINT `otros_ingresos_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD CONSTRAINT `patrimonio_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `patrimonio_bienes_conyuge`
--
ALTER TABLE `patrimonio_bienes_conyuge`
  ADD CONSTRAINT `patrimonio_bienes_conyuge_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `patrimonio_otros`
--
ALTER TABLE `patrimonio_otros`
  ADD CONSTRAINT `patrimonio_otros_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_administrativos`
--
ALTER TABLE `procesos_administrativos`
  ADD CONSTRAINT `procesos_administrativos_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_en_min_pub`
--
ALTER TABLE `procesos_en_min_pub`
  ADD CONSTRAINT `procesos_en_min_pub_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_en_poder_jud`
--
ALTER TABLE `procesos_en_poder_jud`
  ADD CONSTRAINT `procesos_en_poder_jud_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `procesos_judiciales`
--
ALTER TABLE `procesos_judiciales`
  ADD CONSTRAINT `procesos_judiciales_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `prod_jur_fiscal`
--
ALTER TABLE `prod_jur_fiscal`
  ADD CONSTRAINT `prod_jur_fiscal_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

--
-- Filtros para la tabla `sistema_financiero`
--
ALTER TABLE `sistema_financiero`
  ADD CONSTRAINT `sistema_financiero_ibfk_1` FOREIGN KEY (`PK_DAT_POSTULANTE`) REFERENCES `datos_postulante` (`PK_DAT_POSTULANTE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
