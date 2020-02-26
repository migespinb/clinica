-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2020 a las 19:05:22
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado`
--

CREATE TABLE `asociado` (
  `id_pieza` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_clinica_asociado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atiende`
--

CREATE TABLE `atiende` (
  `id_paciente` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_pieza` int(11) DEFAULT NULL,
  `id_convenio` int(11) DEFAULT NULL,
  `id_medio` int(11) NOT NULL,
  `id_clinica_atiende` int(11) DEFAULT NULL,
  `fecha_atiende` datetime NOT NULL,
  `descripcion_atiende` varchar(300) DEFAULT NULL,
  `receta_atiende` varchar(300) DEFAULT NULL,
  `proxcita_atiende` datetime DEFAULT NULL,
  `dcto_atiende` int(11) DEFAULT NULL,
  `valordcto_atiende` int(11) DEFAULT NULL,
  `total_atiende` int(11) NOT NULL,
  `estado_atiende` varchar(50) DEFAULT NULL,
  `usuario_atiende` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_clinica_cita` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fsolicitud_cita` datetime NOT NULL,
  `motivo_cita` varchar(200) NOT NULL,
  `ftentativa_cita` datetime NOT NULL,
  `especialista_cita` varchar(200) DEFAULT NULL,
  `confirma_cita` varchar(25) DEFAULT NULL,
  `asiste_cita` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `id_clinica` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `nombre_clinica` varchar(300) DEFAULT NULL,
  `telefono_clinica` varchar(12) DEFAULT NULL,
  `telefono2_clinica` varchar(12) DEFAULT NULL,
  `direccion_clinica` varchar(200) DEFAULT NULL,
  `logo_clinica` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clinica`
--

INSERT INTO `clinica` (`id_clinica`, `id_region`, `id_comuna`, `nombre_clinica`, `telefono_clinica`, `telefono2_clinica`, `direccion_clinica`, `logo_clinica`) VALUES
(1, 7, 164, 'Clinica de Prueba', '987654321', '987654321', 'casita', '0.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `id_comuna` int(11) NOT NULL,
  `nom_comuna` varchar(150) DEFAULT NULL,
  `id_region` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`id_comuna`, `nom_comuna`, `id_region`) VALUES
(1, 'ARICA', 15),
(2, 'IQUIQUE', 1),
(3, 'HUARA', 1),
(4, 'PICA', 1),
(5, 'POZO ALMONTE', 1),
(6, 'TOCOPILLA', 2),
(7, 'ANTOFAGASTA', 2),
(8, 'MEJILLONES', 2),
(9, 'TALTAL', 2),
(10, 'CALAMA', 2),
(11, 'CHAÑARAL', 3),
(12, 'DIEGO DE ALMAGRO', 3),
(13, 'COPIAPO', 3),
(14, 'CALDERA', 3),
(15, 'TIERRA AMARILLA', 3),
(16, 'VALLENAR', 3),
(17, 'FREIRINA', 3),
(18, 'HUASCO', 3),
(19, 'LA SERENA', 4),
(20, 'LA HIGUERA', 4),
(21, 'COQUIMBO', 4),
(22, 'ANDACOLLO', 4),
(23, 'VICUÑA', 4),
(24, 'PAIHUANO', 4),
(25, 'OVALLE', 4),
(26, 'MONTE PATRIA', 4),
(27, 'PUNITAQUI', 4),
(28, 'RIO HURTADO', 4),
(29, 'COMBARBALA', 4),
(30, 'ILLAPEL', 4),
(31, 'CANELA', 4),
(32, 'SALAMANCA', 4),
(33, 'LOS VILOS', 4),
(34, 'VALPARAISO', 5),
(35, 'QUINTERO', 5),
(36, 'PUCHUNCAVI', 5),
(37, 'VIÑA DEL MAR', 5),
(38, 'QUILPUE', 5),
(39, 'VILLA ALEMANA', 5),
(40, 'CASABLANCA', 5),
(41, 'ISLA DE PASCUA', 5),
(42, 'SAN ANTONIO', 5),
(43, 'SANTO DOMINGO', 5),
(44, 'ALGARROBO', 5),
(45, 'EL QUISCO', 5),
(46, 'CARTAGENA', 5),
(47, 'EL TABO', 5),
(48, 'QUILLOTA', 5),
(49, 'LA CRUZ', 5),
(50, 'LA CALERA', 5),
(51, 'HIJUELAS', 5),
(52, 'NOGALES', 5),
(53, 'LIMACHE', 5),
(54, 'OLMUE', 5),
(55, 'PETORCA', 5),
(56, 'CABILDO', 5),
(57, 'PAPUDO', 5),
(58, 'ZAPALLAR', 5),
(59, 'LA LIGUA', 5),
(60, 'SAN FELIPE', 5),
(61, 'PUTAENDO', 5),
(62, 'PANQUEHUE', 5),
(63, 'CATEMU', 5),
(64, 'SANTA MARIA', 5),
(65, 'LLAY LLAY', 5),
(66, 'LOS ANDES', 5),
(67, 'CALLE LARGA', 5),
(68, 'RINCONADA', 5),
(69, 'SAN ESTEBAN', 5),
(70, 'SANTIAGO CENTRO', 13),
(71, 'LAS CONDES', 13),
(72, 'PROVIDENCIA', 13),
(73, 'SANTIAGO OESTE', 13),
(75, 'CONCHALI', 13),
(76, 'COLINA', 13),
(77, 'RENCA', 13),
(78, 'LAMPA', 13),
(79, 'QUILICURA', 13),
(80, 'TIL-TIL', 13),
(81, 'QUINTA NORMAL', 13),
(82, 'PUDAHUEL', 13),
(83, 'CURACAVI', 13),
(84, 'SANTIAGO SUR', 13),
(85, 'PEÑAFLOR', 13),
(86, 'TALAGANTE', 13),
(87, 'ISLA DE MAIPO', 13),
(88, 'MELIPILLA', 13),
(89, 'EL MONTE', 13),
(90, 'MARIA PINTO', 13),
(91, 'ÑUÑOA', 13),
(92, 'LA REINA', 13),
(93, 'LA FLORIDA', 13),
(94, 'MAIPU', 13),
(95, 'SAN MIGUEL', 13),
(96, 'LA CISTERNA', 13),
(97, 'LA GRANJA', 13),
(98, 'SAN BERNARDO', 13),
(99, 'CALERA DE TANGO', 13),
(100, 'PUENTE ALTO', 13),
(101, 'PIRQUE', 13),
(102, 'SAN JOSE DE MAIPO', 13),
(103, 'BUIN', 13),
(104, 'PAINE', 13),
(105, 'RANCAGUA', 6),
(106, 'MACHALI', 6),
(107, 'GRANEROS', 6),
(108, 'SAN PEDRO', 13),
(109, 'ALHUE', 13),
(110, 'CODEGUA', 6),
(111, 'SAN FRANCISCO DE MOSTAZAL', 6),
(112, 'DOÑIHUE', 6),
(113, 'COLTAUCO', 6),
(114, 'COINCO', 6),
(115, 'PEUMO', 6),
(116, 'LAS CABRAS', 6),
(117, 'SAN VICENTE', 6),
(118, 'PICHIDEGUA', 6),
(119, 'REQUINOA', 6),
(120, 'OLIVAR', 6),
(121, 'RENGO', 6),
(122, 'MALLOA', 6),
(123, 'QUINTA DE TILCOCO', 6),
(124, 'SAN FERNANDO', 6),
(125, 'CHIMBARONGO', 6),
(126, 'NANCAGUA', 6),
(127, 'PLACILLA', 6),
(128, 'SANTA CRUZ', 6),
(129, 'LOLOL', 6),
(130, 'PALMILLA', 6),
(131, 'PERALILLO', 6),
(132, 'CHEPICA', 6),
(133, 'PAREDONES', 6),
(134, 'MARCHIGUE', 6),
(135, 'PUMANQUE', 6),
(136, 'LITUECHE', 6),
(137, 'PICHILEMU', 6),
(139, 'LA ESTRELLA', 6),
(140, 'CURICO', 7),
(141, 'ROMERAL', 7),
(142, 'TENO', 7),
(143, 'RAUCO', 7),
(144, 'HUALAÑE', 7),
(145, 'LICANTEN', 7),
(146, 'VICHUQUEN', 7),
(147, 'MOLINA', 7),
(148, 'SAGRADA FAMILIA', 7),
(149, 'RIO CLARO', 7),
(150, 'TALCA', 7),
(151, 'SAN CLEMENTE', 7),
(152, 'PELARCO', 7),
(153, 'PENCAHUE', 7),
(154, 'MAULE', 7),
(155, 'CUREPTO', 7),
(156, 'SAN JAVIER', 7),
(157, 'CONSTITUCION', 7),
(158, 'EMPEDRADO', 7),
(159, 'LINARES', 7),
(160, 'YERBAS BUENAS', 7),
(161, 'COLBUN', 7),
(162, 'LONGAVI', 7),
(163, 'VILLA ALEGRE', 7),
(164, 'PARRAL', 7),
(165, 'RETIRO', 7),
(166, 'CAUQUENES', 7),
(167, 'CHANCO', 7),
(168, 'CHILLAN', 8),
(169, 'PINTO', 8),
(170, 'COIHUECO', 8),
(171, 'PORTEZUELO', 8),
(172, 'QUIRIHUE', 8),
(173, 'TREHUACO', 8),
(174, 'NINHUE', 8),
(175, 'COBQUECURA', 8),
(176, 'SAN CARLOS', 8),
(177, 'SAN GREGORIO DE ÑIQUEN', 8),
(178, 'SAN FABIAN', 8),
(179, 'SAN NICOLAS', 8),
(180, 'BULNES', 8),
(181, 'SAN IGNACIO', 8),
(182, 'QUILLON', 8),
(183, 'YUNGAY', 8),
(184, 'PEMUCO', 8),
(185, 'EL CARMEN', 8),
(186, 'COELEMU', 8),
(187, 'RANQUIL', 8),
(188, 'CONCEPCION', 8),
(189, 'TALCAHUANO', 8),
(190, 'TOME', 8),
(191, 'PENCO', 8),
(192, 'HUALQUI', 8),
(193, 'FLORIDA', 8),
(194, 'CORONEL', 8),
(195, 'LOTA', 8),
(196, 'SANTA JUANA', 8),
(197, 'CURANILAHUE', 8),
(198, 'ARAUCO', 8),
(199, 'LEBU', 8),
(200, 'LOS ALAMOS', 8),
(201, 'CAÑETE', 8),
(202, 'CONTULMO', 8),
(203, 'TIRUA', 8),
(204, 'LOS ANGELES', 8),
(205, 'SANTA BARBARA', 8),
(206, 'QUILLECO', 8),
(207, 'YUMBEL', 8),
(208, 'CABRERO', 8),
(209, 'TUCAPEL', 8),
(210, 'LAJA', 8),
(211, 'SAN ROSENDO', 8),
(212, 'NACIMIENTO', 8),
(213, 'NEGRETE', 8),
(214, 'MULCHEN', 8),
(215, 'QUILACO', 8),
(216, 'ANGOL', 9),
(217, 'PUREN', 9),
(218, 'LOS SAUCES', 9),
(219, 'RENAICO', 9),
(220, 'COLLIPULLI', 9),
(221, 'ERCILLA', 9),
(222, 'TRAIGUEN', 9),
(223, 'LUMACO', 9),
(224, 'VICTORIA', 9),
(225, 'CURACAUTIN', 9),
(226, 'LONQUIMAY', 9),
(227, 'TEMUCO', 9),
(228, 'VILCUN', 9),
(229, 'FREIRE', 9),
(230, 'CUNCO', 9),
(231, 'LAUTARO', 9),
(232, 'GALVARINO', 9),
(233, 'PERQUENCO', 9),
(234, 'NUEVA IMPERIAL', 9),
(235, 'CARAHUE', 9),
(236, 'PUERTO SAAVEDRA', 9),
(237, 'PITRUFQUEN', 9),
(238, 'GORBEA', 9),
(239, 'TOLTEN', 9),
(240, 'LONCOCHE', 9),
(241, 'VILLARRICA', 9),
(242, 'PUCON', 9),
(243, 'VALDIVIA', 14),
(244, 'CORRAL', 14),
(245, 'MARIQUINA', 14),
(246, 'MAFIL', 14),
(247, 'LOS LAGOS', 14),
(248, 'FUTRONO', 14),
(249, 'LANCO', 14),
(250, 'PANGUIPULLI', 14),
(251, 'LA UNION', 14),
(252, 'PAILLACO', 14),
(253, 'RIO BUENO', 14),
(254, 'LAGO RANCO', 14),
(255, 'OSORNO', 10),
(256, 'PUYEHUE', 10),
(257, 'SAN PABLO', 10),
(258, 'PUERTO OCTAY', 10),
(259, 'RIO NEGRO', 10),
(260, 'PURRANQUE', 10),
(261, 'PUERTO MONTT', 10),
(262, 'COCHAMO', 10),
(263, 'MAULLIN', 10),
(264, 'LOS MUERMOS', 10),
(265, 'CALBUCO', 10),
(266, 'PUERTO VARAS', 10),
(267, 'LLANQUIHUE', 10),
(268, 'FRESIA', 10),
(269, 'FRUTILLAR', 10),
(270, 'CASTRO', 10),
(271, 'CHONCHI', 10),
(272, 'QUEILEN', 10),
(273, 'QUELLON', 10),
(274, 'PUQUELDON', 10),
(275, 'QUINCHAO', 10),
(276, 'CURACO DE VELEZ', 10),
(277, 'ANCUD', 10),
(278, 'QUEMCHI', 10),
(279, 'DALCAHUE', 10),
(280, 'CHAITEN', 10),
(281, 'FUTALEUFU', 10),
(282, 'PALENA', 10),
(284, 'COYHAIQUE', 11),
(285, 'AYSEN', 11),
(286, 'CISNES', 11),
(287, 'CHILE CHICO', 11),
(288, 'RIO IBAÑEZ', 11),
(289, 'COCHRANE', 11),
(290, 'PUNTA ARENAS', 12),
(291, 'PUERTO NATALES', 12),
(292, 'PORVENIR', 12),
(293, 'GENERAL LAGOS', 15),
(294, 'PUTRE', 15),
(295, 'CAMARONES', 15),
(296, 'CAMINA', 1),
(297, 'COLCHANE', 1),
(298, 'MARIA ELENA', 2),
(299, 'SIERRA GORDA', 2),
(300, 'OLLAGÜE', 2),
(301, 'SAN PEDRO DE ATACAMA', 2),
(302, 'ALTO DEL CARMEN', 3),
(303, 'ANTUCO', 8),
(304, 'MELIPEUCO', 9),
(305, 'CURARREHUE', 9),
(306, 'TEODORO SCHMIDT', 9),
(307, 'SAN JUAN DE LA COSTA', 10),
(308, 'HUALAIHUE', 10),
(309, 'GUAITECAS', 11),
(310, 'O´HIGGINS', 11),
(311, 'TORTEL', 11),
(312, 'LAGO VERDE', 11),
(313, 'TORRES DEL PAINE', 12),
(314, 'RIO VERDE', 12),
(315, 'SAN GREGORIO', 12),
(316, 'LAGUNA BLANCA', 12),
(317, 'PRIMAVERA', 12),
(318, 'TIMAUKEL', 12),
(319, 'NAVARINO', 12),
(320, 'PELLUHUE', 7),
(321, 'JUAN FERNANDEZ', 5),
(322, 'PEÑALOLEN', 13),
(323, 'MACUL', 13),
(324, 'CERRO NAVIA', 13),
(325, 'LO PRADO', 13),
(326, 'SAN RAMON', 13),
(327, 'LA PINTANA', 13),
(328, 'ESTACION CENTRAL', 13),
(329, 'RECOLETA', 13),
(330, 'INDEPENDENCIA', 13),
(331, 'VITACURA', 13),
(332, 'LO BARNECHEA', 13),
(333, 'CERRILLOS', 13),
(334, 'HUECHURABA', 13),
(335, 'SAN JOAQUIN', 13),
(336, 'PEDRO AGUIRRE CERDA', 13),
(337, 'LO ESPEJO', 13),
(338, 'EL BOSQUE', 13),
(339, 'PADRE HURTADO', 13),
(340, 'CONCON', 5),
(341, 'SAN RAFAEL', 7),
(342, 'CHILLAN VIEJO', 8),
(343, 'SAN PEDRO DE LA PAZ', 8),
(344, 'CHIGUAYANTE', 8),
(345, 'PADRE LAS CASAS', 9),
(346, 'ALTO HOSPICIO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE `convenio` (
  `id_clinica_convenio` int(11) NOT NULL,
  `id_convenio` int(11) NOT NULL,
  `institucion_convenio` varchar(120) NOT NULL,
  `dcto_convenio` int(11) NOT NULL,
  `validodesde_convenio` date DEFAULT NULL,
  `validohasta_convenio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `convenio`
--

INSERT INTO `convenio` (`id_clinica_convenio`, `id_convenio`, `institucion_convenio`, `dcto_convenio`, `validodesde_convenio`, `validohasta_convenio`) VALUES
(1, 1, 'Personal clínica', 10, '2020-01-01', NULL),
(1, 2, 'Ilustre Municipalidad de Parral', 30, '2020-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_clinica_documento` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_documento` datetime DEFAULT NULL,
  `nombre_documento` varchar(200) DEFAULT NULL,
  `ubicacion_documento` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id_clinica_mail` int(11) NOT NULL,
  `id_mail` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `tipo_mail` varchar(50) NOT NULL,
  `fecha_mail` datetime NOT NULL,
  `motivo_mail` varchar(100) DEFAULT NULL,
  `mensaje_mail` varchar(1024) DEFAULT NULL,
  `estado_mail` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_pago`
--

CREATE TABLE `medio_pago` (
  `id_clinica_medio` int(11) NOT NULL,
  `id_medio` int(11) NOT NULL,
  `nombre_medio` varchar(200) DEFAULT NULL,
  `validodesde_medio` date DEFAULT NULL,
  `validohasta_medio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medio_pago`
--

INSERT INTO `medio_pago` (`id_clinica_medio`, `id_medio`, `nombre_medio`, `validodesde_medio`, `validohasta_medio`) VALUES
(1, 1, 'Efectivo', '2020-01-01', NULL),
(1, 2, 'Tarjeta de crédito', '2020-01-01', NULL),
(1, 3, 'Tarjeta de débito', '2020-01-01', NULL),
(1, 4, 'Cheque', '2020-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_clinica_paciente` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `rut_paciente` varchar(10) DEFAULT NULL,
  `nombre_paciente` varchar(120) NOT NULL,
  `fnacimiento_paciente` date DEFAULT NULL,
  `sexo_paciente` varchar(15) DEFAULT NULL,
  `alergias_paciente` varchar(300) DEFAULT NULL,
  `telefono_paciente` varchar(12) DEFAULT NULL,
  `telefono2_paciente` varchar(12) DEFAULT NULL,
  `email_paciente` varchar(100) DEFAULT NULL,
  `direccion_paciente` varchar(120) DEFAULT NULL,
  `comentario_paciente` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_clinica_paciente`, `id_paciente`, `id_comuna`, `id_region`, `rut_paciente`, `nombre_paciente`, `fnacimiento_paciente`, `sexo_paciente`, `alergias_paciente`, `telefono_paciente`, `telefono2_paciente`, `email_paciente`, `direccion_paciente`, `comentario_paciente`) VALUES
(1, 1, 164, 7, '18560147-1', 'Miguel Aurelio Espinoza Barriga', '1960-07-22', 'Masculino', 'Ninguna', '987654321', '', 'miemail@gmail.com', 'calle 1 pasaje 1', ''),
(1, 2, 189, 8, '18068361-k', 'Rene Carrasco Lagos', '1992-04-16', 'Femenino', 'agua', '987654321', '', 'rene.carrasco@gmail.com', 'Jotabeche 6969', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE `pieza` (
  `id_clinica_pieza` int(11) NOT NULL,
  `id_pieza` int(11) NOT NULL,
  `nombre_pieza` varchar(120) NOT NULL,
  `descripcion_pieza` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `nom_region` varchar(150) DEFAULT NULL,
  `orden` smallint(2) DEFAULT NULL,
  `nom_corto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `nom_region`, `orden`, `nom_corto`) VALUES
(1, 'REGIÓN DE TARAPACÁ', 3, 'I REGIÓN'),
(2, 'REGIÓN DE ANTOFAGASTA', 4, 'II REGIÓN'),
(3, 'REGIÓN DE ATACAMA', 5, 'III REGIÓN'),
(4, 'REGIÓN DE COQUIMBO', 6, 'IV REGIÓN'),
(5, 'REGIÓN DE VALPARAISO', 7, 'V REGIÓN'),
(6, 'REGIÓN DEL LIBERTADOR GENERAL BERNARDO O HIGG', 8, 'VI REGIÓN'),
(7, 'REGIÓN DEL MAULE', 9, 'VII REGIÓN'),
(8, 'REGIÓN DEL BÍO-BÍO', 10, 'VIII REGIÓN'),
(9, 'REGIÓN DE LA ARAUCANÍA', 11, 'IX REGIÓN'),
(10, 'REGIÓN DE LOS LAGOS', 13, 'X REGIÓN'),
(11, 'REGIÓN DE AYSÉN DEL GENERAL CARLOS IBÁÑEZ DEL', 14, 'XI REGIÓN'),
(12, 'REGIÓN DE MAGALLANES Y LA ANTÁRTICA CHILENA', 15, 'XII REGIÓN'),
(13, 'REGIÓN METROPOLITANA', 1, 'RM'),
(14, 'REGIÓN DE LOS RÍOS', 12, 'XIV REGIÓN'),
(15, 'REGIÓN DE ARICA Y PARINACOTA', 2, 'XV REGIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_clinica_servicio` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(120) NOT NULL,
  `valor_servicio` int(11) NOT NULL,
  `ofertadcto_servicio` int(11) DEFAULT NULL,
  `validodesde_servicio` date DEFAULT NULL,
  `validohasta_servicio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_clinica_servicio`, `id_servicio`, `nombre_servicio`, `valor_servicio`, `ofertadcto_servicio`, `validodesde_servicio`, `validohasta_servicio`) VALUES
(1, 1, 'Limpieza dental', 30000, NULL, '2020-01-01', NULL),
(1, 2, 'Renovación de restauracion en recina', 35000, NULL, '2020-01-01', NULL),
(1, 3, 'Diseño de sonrisas con carillas ceramicas', 40000, NULL, '2020-01-01', NULL),
(1, 4, 'Diseño de sonrisas con resinas directas', 45000, NULL, '2020-01-01', NULL),
(1, 5, 'Implante dental', 100000, NULL, '2020-01-01', NULL),
(1, 6, 'Protesis removible', 30000, NULL, '2020-01-01', NULL),
(1, 7, 'Protesis fija', 40000, NULL, '2020-01-01', NULL),
(1, 8, 'Endodoncia', 35000, NULL, '2020-01-01', NULL),
(1, 9, 'Ortodoncia fija', 40000, NULL, '2020-01-01', NULL),
(1, 10, 'Ortodoncia removible', 50000, NULL, '2020-01-01', NULL),
(1, 11, 'Extraccion de muelas del juicio', 50000, NULL, '2020-01-01', NULL),
(1, 12, 'Extracciones simples', 40000, NULL, '2020-01-01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `doctor` varchar(250) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `authKey` varchar(250) DEFAULT NULL,
  `accessToken` varchar(250) DEFAULT NULL,
  `activate` varchar(10) DEFAULT NULL,
  `verification_code` varchar(250) DEFAULT NULL,
  `role` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_clinica`, `username`, `nombre`, `doctor`, `email`, `password`, `authKey`, `accessToken`, `activate`, `verification_code`, `role`) VALUES
(1, 1, 'admin', 'Miguel Espinoza B', 'Dr. Miguel', 'admin@gmail.com', 'hsR2quXrtsLts', 'e17b1d201fe44ef21c59d522f861ad138c718f496e36f49c7c629f8b4d37d66d9c93655e3e6ce949fa4164b85da5f2fb3cf891121e0e050ec0c96d7c6b0ee40552cbc60922f63de96d6931f0fc083d2d4f3b84f5444205425fecc726784ac71e64bc3d07', '1e50ca0759f517155f7fd3e77ab9ccabeec1fbae267b58a1a3fd073ce6798c836e95eda75fbc99e0f8426cfba4f060d536e267d7baf325a6ae6317d48cb0d6a5a126fccd9276a8a1705aa4611f1c6ad8177a3c3bf772917b32f1dfbcbb1b55a645407949', 'si', 'e4bdb81f', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD PRIMARY KEY (`id_pieza`,`id_servicio`),
  ADD KEY `FK_asociado2` (`id_servicio`);

--
-- Indices de la tabla `atiende`
--
ALTER TABLE `atiende`
  ADD PRIMARY KEY (`id_paciente`,`id_servicio`,`id_medio`,`fecha_atiende`),
  ADD KEY `FK_atiende2` (`id_servicio`),
  ADD KEY `FK_atiende3` (`id_pieza`),
  ADD KEY `FK_atiende4` (`id_convenio`),
  ADD KEY `FK_atiende5` (`id_medio`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `FK_agenda` (`id_paciente`);

--
-- Indices de la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`id_clinica`),
  ADD KEY `FK_encuentra1` (`id_region`),
  ADD KEY `FK_encuentra2` (`id_comuna`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`id_comuna`),
  ADD KEY `fk_comuna_region1` (`id_region`);

--
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`id_convenio`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `FK_lleva` (`id_paciente`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`),
  ADD KEY `FK_ligado` (`id_cita`),
  ADD KEY `FK_relacionado` (`id_paciente`);

--
-- Indices de la tabla `medio_pago`
--
ALTER TABLE `medio_pago`
  ADD PRIMARY KEY (`id_medio`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `FK_vive1` (`id_region`),
  ADD KEY `FK_vive2` (`id_comuna`);

--
-- Indices de la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD PRIMARY KEY (`id_pieza`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tiene` (`id_clinica`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clinica`
--
ALTER TABLE `clinica`
  MODIFY `id_clinica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `id_comuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT de la tabla `convenio`
--
ALTER TABLE `convenio`
  MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medio_pago`
--
ALTER TABLE `medio_pago`
  MODIFY `id_medio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pieza`
--
ALTER TABLE `pieza`
  MODIFY `id_pieza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD CONSTRAINT `FK_asociado` FOREIGN KEY (`id_pieza`) REFERENCES `pieza` (`id_pieza`),
  ADD CONSTRAINT `FK_asociado2` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`);

--
-- Filtros para la tabla `atiende`
--
ALTER TABLE `atiende`
  ADD CONSTRAINT `FK_atiende` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `FK_atiende2` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`),
  ADD CONSTRAINT `FK_atiende3` FOREIGN KEY (`id_pieza`) REFERENCES `pieza` (`id_pieza`),
  ADD CONSTRAINT `FK_atiende4` FOREIGN KEY (`id_convenio`) REFERENCES `convenio` (`id_convenio`),
  ADD CONSTRAINT `FK_atiende5` FOREIGN KEY (`id_medio`) REFERENCES `medio_pago` (`id_medio`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_agenda` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Filtros para la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD CONSTRAINT `FK_encuentra1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`),
  ADD CONSTRAINT `FK_encuentra2` FOREIGN KEY (`id_comuna`) REFERENCES `comuna` (`id_comuna`);

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `fk_comuna_region1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `FK_lleva` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Filtros para la tabla `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `FK_ligado` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id_cita`),
  ADD CONSTRAINT `FK_relacionado` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `FK_vive1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`),
  ADD CONSTRAINT `FK_vive2` FOREIGN KEY (`id_comuna`) REFERENCES `comuna` (`id_comuna`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_tiene` FOREIGN KEY (`id_clinica`) REFERENCES `clinica` (`id_clinica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
