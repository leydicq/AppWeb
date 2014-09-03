-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2014 a las 17:57:53
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_investigacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_doc`
--

CREATE TABLE IF NOT EXISTS `guia_doc` (
  `CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `NOM_INST` varchar(50) NOT NULL,
  `NOM_DIRECTIVO` varchar(50) NOT NULL,
  `CARGO` varchar(50) DEFAULT NULL,
  `DIRECCION` varchar(50) DEFAULT NULL,
  `TEL` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PREG_1` text,
  `PREG_2` text,
  `PREG_3` text,
  `PREG_4` text,
  `PREG_5` text,
  `PREG_6` text,
  `PREG_7` text,
  `utc` int(11) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `MUNICIPIO` varchar(50) NOT NULL,
  `ESTADO` varchar(20) DEFAULT 'A',
  PRIMARY KEY (`CODIGO`),
  UNIQUE KEY `CODIGO` (`CODIGO`),
  KEY `FORANEA1_ENTRE_GUIA_DOCYUSUARIOS_FK` (`ID_USUARIO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `guia_doc`
--

INSERT INTO `guia_doc` (`CODIGO`, `ID_USUARIO`, `NOM_INST`, `NOM_DIRECTIVO`, `CARGO`, `DIRECCION`, `TEL`, `EMAIL`, `PREG_1`, `PREG_2`, `PREG_3`, `PREG_4`, `PREG_5`, `PREG_6`, `PREG_7`, `utc`, `FECHA`, `MUNICIPIO`, `ESTADO`) VALUES
(5, 1, 'PRUEBA DE UPDATE', 'EDSRGGSQER', 'PRUEBA CARGO', 'QQSDASDASD', '123456789', 'QQ@QQ.COMVBVHCVNCVNV', 'MÃS  MÃS MÃS p ruebasfasdasdas SDFASASDASDASDASD', 'Prueba 2 otras veces a', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 1372733418, '2014-04-10 18:23:58', 'VILLAVICENCIO', 'S'),
(6, 1, 'CLINICA 4', 'SDASDASD', 'D', 'D', 'd', 'D@D.COM', 'd', 'd', 'd', 'dd', 'd', 'd', 'd', 1372733525, '2014-04-10 18:52:35', 'VILLAVICENCIO', 'N'),
(8, 2, 'HOSPITALGNRL', 'HOS', 'HOS', 'HOS', '123', 'HOS@HOS.COM', 'INFO', 'INFO', 'INFO', 'INFO', 'INFO', 'INFO', 'INFO', 1372808602, '2013-07-02 00:00:00', 'Villavicencio', 'S'),
(9, 2, 'doc1', 'doc1', 'doc1', 'doc1', 'doc1', 'doc1@doc1.com', 'doc1', 'doc1', 'doc1', 'v', 'doc1', 'doc1', 'v', 1372809953, '2013-07-02 00:00:00', 'Acacias', 'N'),
(10, 2, 'doc2', 'doc2', 'doc2', 'doc2', 'doc2', 'meta@meta.com', 'doc2', 'doc2', 'doc2', 'doc2', 'doc2', 'doc2', 'doc2', 1372809988, '2013-07-02 00:00:00', 'Cumaral', 'S'),
(11, 2, 'PRUEBA TÃ­LDES', 'DOC3', 'DOC3', 'DOC3', 'doc3', 'CE@CE.COM', 'mÃ¡s mÃ¡s Ã±oÃ±o!!!', 'doc3', 'doc3', 'doc3', 'sdalsdjalsdjasdjk', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 1372810019, '2014-07-10 10:51:23', 'VILLAVICENCIO', 'S'),
(12, 1, 'SDFGF', 'ASF', '', 'SDFGF', '123654', 'SDFGF@SDFGF.COM', 'sdfgf@sdfgf.com', 'sdfgf@sdfgf.com', 'sdfgf@sdfgf.com', 'sdfgf@sdfgf.com', 'sdfgf@sdfgf.comc', 'sdfgf@sdfgf.com', 'sdfgf@sdfgf.com', 1397164718, '2014-04-10 16:18:38', 'VILLAVICENCIO', 'N'),
(13, 1, 'ASDOAKJSDKASJD', 'SDLLASDKAL', 'DKLADJAK', 'SDJKKLASDJ', '123654', 'DE@GLGKDLG.COM', 'de@glgkdlg.com', 'de@glgkdlg.com', 'de@glgkdlg.com', 'de@glgkdlg.com', 'de@glgkdlg.com', 'de@glgkdlg.comq', 'de@glgkdlg.com', 1397164847, '2014-04-10 16:20:47', 'VILLAVICENCIO', 'N'),
(14, 1, 'PRUEBA 17', 'FGHFGH', 'FGHFGH', 'FGHFH', 'fghgfh', 'FGHFGHDF@ASKLFJDALKDF.COM', 'cosas cosas cosas', 'fghf', 'fghfgh', 'fghgfh', 'fghgfh', 'fghfgh', 'fghfgh', 1405351956, '2014-07-14 11:42:14', 'VILLAVICENCIO', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_est`
--

CREATE TABLE IF NOT EXISTS `guia_est` (
  `CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `NOM_INST` varchar(50) NOT NULL,
  `CARACTER` varchar(50) DEFAULT NULL,
  `DIRECCION` varchar(50) DEFAULT NULL,
  `TEL` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `REP_LEGAL` varchar(50) DEFAULT NULL,
  `PREG_1` text,
  `PREG_2` text,
  `PREG_3` text,
  `PREG_4` text,
  `PREG_5` text,
  `PREG_6` text,
  `PREG_7` text,
  `PREG_8` text,
  `PREG_9` text,
  `PREG_10` text,
  `PREG_11` varchar(1200) DEFAULT NULL,
  `PREG_12` text,
  `utc` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `MUNICIPIO` varchar(50) NOT NULL,
  `ESTADO` varchar(1) DEFAULT 'A',
  PRIMARY KEY (`CODIGO`),
  UNIQUE KEY `CODIGO` (`CODIGO`),
  KEY `FORANEA1_ENTRE_GUIA_ESTYUSUARIOS_FK` (`ID_USUARIO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `guia_est`
--

INSERT INTO `guia_est` (`CODIGO`, `ID_USUARIO`, `NOM_INST`, `CARACTER`, `DIRECCION`, `TEL`, `EMAIL`, `REP_LEGAL`, `PREG_1`, `PREG_2`, `PREG_3`, `PREG_4`, `PREG_5`, `PREG_6`, `PREG_7`, `PREG_8`, `PREG_9`, `PREG_10`, `PREG_11`, `PREG_12`, `utc`, `FECHA`, `MUNICIPIO`, `ESTADO`) VALUES
(9, 2, 'clinica meta', 'PRIVADO', 'barzal', '5555555', 'cm@cm.com', 'el jefe', 'ser los mejores', 'ser los mejores', 'ser los mejores', 'v', 'ser los mejores', 'ser los mejores', 'ser los mejores', 'ser los mejores', 'ser los mejores', 'ser los mejores', 'ser los mejores', 'ser los mejores', 1372445980, '2013-06-28', '', 'S'),
(10, 2, 'CLINICA 5', 'PÃºblico', 'H', 'h', 'H@H.COM', 'H', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 1372733452, '2014-04-10', 'VILLAVICENCIO', 'S'),
(19, 1, 'META', 'PÃºblico', 'META', '12345', 'META@META.COM', 'DON META', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquÃ­, contenido aquÃ­". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'ALGO', 'ALGO\r\n', 1372808169, '2014-04-10', 'CUMARAL', 'S'),
(21, 2, 'CLINICA 2', 'PÃºblico', '1', '1', '1@1.COM', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1372809835, '2014-07-09', 'ACACIAS', 'S'),
(22, 2, 'CLINICA 1', 'PÃºblico', '2', '2', '2@2.COM', '2', '2', '2', 'asdasda', '2', '2', '2', '2', '2', '2', '22', '2', '2', 1372809872, '2014-04-10', 'VILLAVICENCIO', 'S'),
(23, 2, 'CLINICA 3', 'PÃºblico', '3', '3', '3@3.COM', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 1372809901, '2014-04-10', 'VILLAVICENCIO', 'S'),
(24, 1, 'DDDDDDDDD', 'PÃºblico', 'PRIYUEBASKNASDNAUIDHAUDHNAJKD', 'DDDDDD', 'RRRRRRRRRR@UUU.COM', 'DDDDDDDD', 'TWERTE', 'ERTETE', 'ERTERTE', 'ERTERTER', 'ERTERT', 'ERTERT', 'ERTERT', 'ETRERTERT', 'ERTERT', 'ERTERT', 'ERTETR', 'RETERTE', 1405355726, '2014-07-14', 'VILLAVICENCIO', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `PERFIL` int(11) NOT NULL AUTO_INCREMENT,
  `DES_PERFIL` varchar(50) NOT NULL,
  PRIMARY KEY (`PERFIL`),
  UNIQUE KEY `PERFIL` (`PERFIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`PERFIL`, `DES_PERFIL`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CONSULTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO` varchar(50) NOT NULL,
  `USUARIO` varchar(50) NOT NULL,
  `CONTRASENA` varchar(50) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `ESTADO` varchar(1) NOT NULL DEFAULT 'S',
  `USU_PERFIL` int(11) NOT NULL,
  `VALIDA_CONTRASENA` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `FORANEA1_ENTRE_PERFILESYUSUARIOS_FK` (`USU_PERFIL`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `USUARIO`, `CONTRASENA`, `EMAIL`, `ESTADO`, `USU_PERFIL`, `VALIDA_CONTRASENA`) VALUES
(1, 'LEYDI', 'CAMARGO', 'DESARROLLADOR1', '123', NULL, 'S', 1, '123'),
(2, 'PEPO', 'PEREZ', 'DESARROLLADOR2', '123', NULL, 'S', 2, '123'),
(40, 'LEYDI', 'CAMARGO', 'DESA', '202cb962ac59075b964b07152d234b70', 'LEYDI.CAMARGO@GMAIL.COM', 'S', 1, '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
