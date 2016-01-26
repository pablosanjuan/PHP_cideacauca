-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2016 a las 19:51:41
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cideacauca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`idContacto` int(11) NOT NULL,
  `item` varchar(11) NOT NULL,
  `descripcion` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idContacto`, `item`, `descripcion`) VALUES
(1, 'Fijo', '+57 (2) 8367218'),
(2, 'Celular', '321 646 8106'),
(3, 'Correo', 'cidea@gmail.com'),
(4, 'Direccion', 'calle 30 n # 4-50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
`idDocumento` int(200) NOT NULL,
  `titulo` varchar(33) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `tipo` int(2) NOT NULL,
  `ruta` varchar(55) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`idDocumento`, `titulo`, `descripcion`, `tipo`, `ruta`) VALUES
(1, 'sg', '0', 0, '0'),
(2, 'doc1', '0', 1, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucional`
--

CREATE TABLE IF NOT EXISTS `institucional` (
`idInstitucional` int(11) NOT NULL,
  `item` varchar(22) NOT NULL,
  `contenido` varchar(2000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `institucional`
--

INSERT INTO `institucional` (`idInstitucional`, `item`, `contenido`) VALUES
(1, 'QuienesSomos', 'ESTA INFORMACION ESTA EN LA DB- Conformado desde el aÃ±o 2004 y oficializado mediante ordenanza No 102 del 31 de Juilio de 2014 por la Asamblea Departamental del Cauca , el cominte tÃ©cnico interinstitucional de educaciÃ³n ambiental del Cauca se conforma como la maxima instancia de articulaciÃ³n y direcciÃ³n de la EducaciÃ³n ambiental del Departamento, cuyo objeto es el direccionamiento de Politicas, Planes, Programas y proyectos de educaciÃ³n ambiental, asi como orientar a instituciones pÃºblicas y privadas sobre el cumplimiento, alcance y aplicaciÃ³n de las disposiciones legales vigentes que en materia de EducaciÃ³n Ambiental expida tanto el Ministerio de EducaciÃ³n Nacional como el Ministerio de Ambeinte y Desarrollo sostenible, o los que hagan sus veces.'),
(2, 'Mision', 'ESTA INFORMACION ESTA EN LA DB- Asesorar, orientar y acompaÃ±ar la institucionalizaciÃ³n de la EducaciÃ³n Ambiental en los sectores gubernamentales, civiles y/o comunitarios a nivel formaL Y no formal.'),
(3, 'Vision', 'ESTA INFORMACION ESTA EN LA DB- Posicionar el comitÃ© tÃ©cnico interinstitucional de educaciÃ³n ambiental del Cauca, como espacio intersectorial y de participaciÃ³n comunitaria que dinamiza la educaciÃ³n ambiental como estrategia para la transformaciÃ³n de la cultura ambiental.'),
(4, 'Funciones', '1. Aunar esfuerzos conceptuales, metodolÃ³gicos, tÃ©cnicos, financieros y de proyecciÃ³n, entre las diferentes instituciones con competencia y responsabilidad en el Ã¡rea de la EducaciÃ³n Ambiental, con el fin de propiciar estrategias, acciones y espacios para la formaciÃ³n de seres crÃ­ticos, reflexivos y comprometidos con el desarrollo ambiental sostenible de la regiÃ³n.\r\n\r\n2. Asesorar, acompaÃ±ar y apoyar la construcciÃ³n del Plan de EducaciÃ³n Ambiental con enfoque diferencial para el Departamento, asÃ­ como direccionar y hacer seguimiento a su implementaciÃ³n.\r\n\r\n3. Promover e incentivar los procesos investigativos en el campo educativo ambiental, y la sistematizaciÃ³n de experiencias en el tema, para reconocer caracterÃ­sticas particulares, avances, dificultades y proyecciones en el tema\r\n\r\n4. Apoyar el diseÃ±o e implementaciÃ³n de planes programas y actividades de comunicaciÃ³n y divulgaciÃ³n que promuevan procesos de educaciÃ³n ambiental.\r\n\r\n5. Asesorar la definiciÃ³n de polÃ­ticas, planes y programas para la IncorporaciÃ³n de la educaciÃ³n ambienta en los instrumentos de planificaciÃ³n del orden Departamental y Municipal.\r\n\r\n6. Fortalecer la coordinaciÃ³n interdisciplinaria e interinstitucional para la gestiÃ³n educativa ambiental en el Departamento.\r\n\r\n7. Fortalecer la descentralizaciÃ³n de la educaciÃ³n ambiental en el Departamento a travÃ©s del acompaÃ±amiento a la gestiÃ³n de los ComitÃ©s Municipales de EducaciÃ³n Ambiental (CIDEAM).\r\n\r\n8. Impulsar, asesorar, y apoyar los proyectos ambientales escolares â€“ PRAES, los proyectos ciudadanos de educaciÃ³n ambiental â€“ PROCEDAS y los proyectos Universitarios Ambientales-PRAU en sus propuestas de formaciÃ³n, investigaciÃ³n, trabajos interdisciplinarios, de proyecciÃ³n comunitaria y comunicaciÃ³n e informaciÃ³n.'),
(5, 'Integrantes', 'obernador del Departamento o su delegado\r\nCorporaciÃ³n AutÃ³noma Regional del Cauca CRC\r\nSecretaria de EducaciÃ³n y Cultura del Departamento\r\nSecretarÃ­a de Desarrollo Agropecuario y fomento econÃ³mico\r\nSecretaria de EducaciÃ³n Municipal de PopayÃ¡n\r\nREDEPRAES del Cauca\r\nAsociaciÃ³n de Ingenieros Ambientales del Cauca\r\nLas Universidades PÃºbicas\r\nGrupos de investigaciÃ³n del Cauca adscritos a Colciencias\r\nOrganizaciones No Gubernamentales Ambientales (ONG)\r\nConsejo Departamental para la GestiÃ³n de Riesgo\r\nConsejo Regional indÃ­gena del Cauca\r\nComunidades afrocolombianas asentadas en el Departamento\r\nServicio Nacional de Aprendizaje SENA\r\nUniversidades privadas del Departamento\r\nEmpresa Caucana de Servicios PÃºblicos\r\nPolicÃ­a Nacional, a travÃ©s de la policÃ­a Ambiental\r\nFederaciÃ³n Departamental de Juntas acciÃ³n comunal del Cauca FEDECOMUNAL\r\nAsociaciÃ³n de Juntas de AcciÃ³n Comunal de PopayÃ¡n Asocomunal\r\nRepresentante de Parque Nacionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`idNoticia` int(99) NOT NULL,
  `titulo` varchar(55) NOT NULL,
  `enlace` varchar(99) NOT NULL,
  `ruta` varchar(99) NOT NULL,
  `descripcion` varchar(2000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `titulo`, `enlace`, `ruta`, `descripcion`) VALUES
(1, 'cuida el agua', 'http://crc.gov.co/', '91cd3bd4-34b8-4dd0-9d0b-8487baf8ac0e.jpg', 'Te invitamos a cuidar nuestros recursos'),
(2, 'Visitamos Silvia', 'http://www.silvia-cauca.gov.co/index.shtml', 'rururu', 'Salimos a compartir con la comunidad'),
(3, 'Cumpleaños de Popayan', 'http://popayan.gov.co', 'tura', 'Poayan se viste de gala en su cumpleaños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`idUser` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
`idVideo` int(11) NOT NULL,
  `video` varchar(11) NOT NULL,
  `url` varchar(111) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`idVideo`, `video`, `url`) VALUES
(1, 'inicio', 'https://www.youtube.com/embed/2Swe_PMX3lc?wmode=opaque&autohide=1&autoplay=0&enablejsapi=1'),
(2, 'nosotros', 'https://www.youtube.com/embed/M19FMHOD8yY?wmode=opaque&autohide=1&autoplay=0&enablejsapi=1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
 ADD PRIMARY KEY (`idDocumento`);

--
-- Indices de la tabla `institucional`
--
ALTER TABLE `institucional`
 ADD PRIMARY KEY (`idInstitucional`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`idNoticia`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`idUser`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
 ADD PRIMARY KEY (`idVideo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
MODIFY `idDocumento` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `institucional`
--
ALTER TABLE `institucional`
MODIFY `idInstitucional` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
MODIFY `idNoticia` int(99) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
