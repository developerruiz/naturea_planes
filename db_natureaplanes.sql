-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2022 a las 19:26:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_natureaplanes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padecimiento`
--

CREATE TABLE `padecimiento` (
  `padecimiento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_mensual`
--

CREATE TABLE `plan_mensual` (
  `id_plan` int(3) NOT NULL,
  `mes` int(1) DEFAULT NULL,
  `no_producto` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(3) NOT NULL,
  `SKU` int(8) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `beneficio` varchar(100) DEFAULT NULL,
  `pdf_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `SKU`, `producto`, `beneficio`, `pdf_link`) VALUES
(1, 60210348, 'Adaptiv (A.T.P)', 'Ayuda a elevar el estado de ánimo', 'https://media.doterra.com/us/es/pips/aceite-de-adaptiv.pdf'),
(2, 35040608, 'Aromatouch (T.P)', 'Efectos reconfortantes y relajantes', 'Efectos reconfortantes y relajantes'),
(3, 31010508, 'Balance (A.T.P)', 'Crea una sensación corporal de relajación', 'https://media.doterra.com/us/es/pips/aceite-de-balance.pdf'),
(4, 34360608, 'Capsulas deep blue complex', 'Apoyo al bienestar y funcionamiento de músculos y articulaciones', 'https://media.doterra.com/us/es/pips/deep-blue-polyphenol-complex-sp.pdf'),
(5, 31020508, 'Citrus bliss (A.T.P)', 'Ayuda a reducir el estrés y levanta el estado de ánimo', 'https://media.doterra.com/us/es/pips/aceite-de-citrus-bliss.pdf'),
(6, 60201350, 'Clary calm solace USA', 'Calmante y tranquilizante durante el ciclo menstrual de la mujer', 'https://media.doterra.com/us/es/pips/aceite-de-clarycalm.pdf'),
(7, 60206477, 'Copaiba (A.T.I.S)', 'Ayuda a aliviar, calmar y apoyar el sistema nervioso', 'https://media.doterra.com/us/es/pips/copaiba-oil-pip-sp.pdf'),
(8, 30780608, 'Coriander (semilla de cilantro) (A.T.I.P)', 'Ayudar a la digestión', 'https://media.doterra.com/us/es/pips/aceite-de-semilla-de-cilantro-coriander-oil.pdf'),
(9, 60206480, 'DDR prime (T.I.S)', 'Apoya la integridad celular saludable', 'https://media.doterra.com/us/es/pips/ddr-prime.pdf'),
(10, 31050508, 'Deep blue (T.S)', 'Formulada para relajar y enfriar', 'https://media.doterra.com/us/es/pips/aceite-de-deep-blue.pdf'),
(11, 38900508, 'Deep blue rub (pomada)', ' Frescura y alivio a las áreas afectadas', 'https://media.doterra.com/mx/es/pips/deep-blue-rub.pdf'),
(12, 60215131, 'Digestzen (A.T.I.P)', 'Reduce los gases y la indigestión ocasional', 'https://media.doterra.com/us/es/pips/aceite-de-digestzen.pdf'),
(13, 31040508, 'Elevation (A.T.I.P)', 'Promueve un estado de ánimo positivo', 'https://media.doterra.com/us/es/pips/aceite-de-elevation.pdf'),
(14, 0, 'Fibra USA', 'Puede apoyar los objetivos de control de peso', 'https://media.doterra.com/us/es/pips/doterra-fiber-fibra.pdf'),
(15, 30090608, 'Geranio (A.T.I.S)', 'Ayuda a reducir ciertas molestias periódicas de la mujer.', 'https://media.doterra.com/us/es/pips/aceite-de-geranio-geranium-oil.pdf'),
(16, 0, 'Greens USA', 'Proporciona el equivalente a 1-2 porciones de frutas y verduras', 'https://media.doterra.com/us/es/pips/doterra-greens-frutas-y-verduras.pdf'),
(17, 35040608, 'Gx assist', 'Fomenta un ambiente digestivo saludable', 'https://media.doterra.com/us/es/pips/gx-assist.pdf'),
(18, 60201234, 'Hd clear limpiador', 'Ayuda a mantener la piel limpia, clara e hidratada', 'https://media.doterra.com/us/es/pips/limpiador-facial-hd-clear-foaming-face-wash.pdf'),
(19, 60201468, 'Immortelle', 'Promueve una piel más tersa, radiante y de apariencia juvenil', 'https://media.doterra.com/us/es/pips/aceite-de-immortelle.pdf'),
(20, 30070608, 'Incienso (A.T.I.P)', 'Crea una atmósfera reconfortante y edificante', 'https://media.doterra.com/us/es/pips/aceite-de-incienso-frankincense-oil.pdf'),
(21, 30110608, 'Lavanda (A.T.I.P)', 'Reduce el sentimiento de ansiedad y promueve el sueño tranquilo', 'https://media.doterra.com/us/es/pips/aceite-de-lavanda-lavender-oil.pdf'),
(22, 30130608, 'Lemongrass (A.T.I.S)', 'Actúa como un tónico general para los sistemas del cuerpo.', 'https://media.doterra.com/es/es/pips/lemongrass-oil.pdf'),
(23, 30120608, 'Limón (A.T.I.S)', 'Apoya la función respiratoria saludable', 'https://media.doterra.com/us/es/pips/aceite-de-limon-lemon-oil.pdf'),
(24, 0, 'Malteada proteina USA', 'Proporciona al cuerpo los nutrientes necesarios que necesita para producir ATP', 'https://media.doterra.com/us/es/pips/doterra-protein-proteina.pdf'),
(25, 30800608, 'Manzanilla romana (A.T.I.P)', 'Alivia los sistemas del cuerpo', 'https://media.doterra.com/us/es/pips/aceite-de-manzanilla-romana-roman-chamomile-oil.pdf'),
(26, 30140608, 'Mejorana (A.T.I.P)', 'Puede promover un sistema cardiovascular saludable', 'https://media.doterra.com/us/es/pips/aceite-de-mejorana-marjoram-oil.pdf'),
(27, 30150608, 'Melaleuca o arbol de te (A.T.P)', 'Reconocido por su efecto limpiador y rejuvenecedor en la piel', 'https://media.doterra.com/us/es/pips/aceite-de-melaleuca.pdf'),
(28, 30190608, 'Menta (A.T.I.S)', 'Promueve la función respiratoria saludable ', 'https://media.doterra.com/us/es/pips/peppermint-essential-oil.pdf'),
(29, 30170608, 'Naranja (A.T.I.P)', 'Edificante para la mente y el cuerpo', 'https://media.doterra.com/us/es/pips/aceite-de-naranja-silvestre-wild-orange-oil.pdf'),
(30, 31100608, 'On guard (A.T.I.S)', 'Apoya las funciones inmunológica y respiratoria', 'https://media.doterra.com/us/es/pips/aceite-de-doterra-on-guard.pdf'),
(31, 60214928, 'Paquete vitalidad LLV suplementos a tu medida', 'Nutre tu Cuerpo paquete de vitalidad Kit', 'https://media.doterra.com/eu/es/pips/lifelong-vitality-pack.pdf'),
(32, 35160608, 'Pb assist', 'Mantiene un equilibrio saludable de microflora intestinal', 'https://media.doterra.com/mx/es/pips/pb-assist-plus.pdf'),
(33, 0, 'Phytoestrogen USA', 'Ayudan a equilibrar y apoyar los niveles hormonales normales', 'https://media.doterra.com/us/es/pips/mujeres-doterra-phytoestrogen-lifetime-complex.pdf'),
(34, 60200951, 'Serenity (A.T.P)', 'Disminuye la sensación de tensión y calma las emociones', 'https://media.doterra.com/us/es/pips/aceite-de-doterra-serenity.pdf'),
(35, 0, 'Serenity capsulas USA', 'Ayuda a conciliar el sueño más rápidamente', 'https://media.doterra.com/us/es/pips/doterra-serenity-capsulas-blandas.pdf'),
(36, 0, 'Skin care USA', 'Ayudando a tu piel a sentirse y verse juvenil', 'https://media.doterra.com/us/es/brochures/skin-care-booklet.pdf'),
(37, 31370608, 'Slim & sassy (A.T.I.S)', 'Promueve el metabolismo saludable', 'https://media.doterra.com/us/es/pips/aceite-de-slim-and-sassy.pdf'),
(38, 35110608, 'Terrazyme', 'Apoya la salud de la digestión y el metabolismo de alimentos procesados', 'https://media.doterra.com/mx/es/pips/terrazyme.pdf'),
(39, 60209019, 'Triease', 'Ayuda con las amenazas estacionales', 'https://media.doterra.com/us/es/pips/triease-soft-gels.pdf'),
(40, 60207980, 'Yarrow pom (A.T.I.P)', 'combatir el envejecimiento y aumentar la vitalidad', 'https://media.doterra.com/us/es/pips/yarrow-pip.pdf'),
(41, 30240608, 'Ylang ylang (A.T.I.P)', 'Proporciona apoyo antioxidante', 'https://media.doterra.com/us/es/pips/aceite-de-ylang-ylang.pdf'),
(42, 31460608, 'Zendocrine', 'Apoya las funciones normales de autodesintoxicación de los órganos limpiadores', 'https://media.doterra.com/us/es/pips/aceite-de-zendocrine.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `id_relacion` int(10) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_padecimiento` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`id_relacion`, `id_usuario`, `id_padecimiento`) VALUES
(1, 0, 0),
(4, 0, 0),
(8, 0, 0),
(13, 0, 0),
(16, 15, 3),
(17, 15, 4),
(18, 16, 1),
(19, 16, 2),
(20, 16, 3),
(21, 16, 10),
(22, 16, 13),
(23, 16, 22),
(24, 16, 28),
(25, 16, 31),
(26, 0, 1),
(27, 0, 5),
(28, 0, 11),
(29, 0, 21),
(30, 0, 22),
(31, 0, 29),
(32, 0, 1),
(33, 0, 5),
(34, 0, 11),
(35, 0, 21),
(36, 0, 22),
(37, 0, 29),
(38, 18, 1),
(39, 18, 3),
(40, 18, 4),
(41, 18, 10),
(42, 18, 11),
(43, 19, 1),
(44, 19, 2),
(45, 19, 3),
(46, 19, 9),
(47, 19, 12),
(48, 19, 20),
(49, 19, 26),
(50, 20, 1),
(51, 21, 2),
(52, 22, 2),
(53, 22, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE `tb_estado` (
  `id_estado` int(2) NOT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_estado`
--

INSERT INTO `tb_estado` (`id_estado`, `estado`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Chiapas'),
(6, 'Chihuahua'),
(7, 'Coahuila'),
(8, 'Colima'),
(9, 'Distrito Federal'),
(10, 'Durango'),
(11, 'Estado de México'),
(12, 'Guanajuato'),
(13, 'Guerrero'),
(14, 'Hidalgo'),
(15, 'Jalisco'),
(16, 'Michoacán'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_padecimiento`
--

CREATE TABLE `tb_padecimiento` (
  `id_padecimiento` int(3) NOT NULL,
  `padecimiento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_padecimiento`
--

INSERT INTO `tb_padecimiento` (`id_padecimiento`, `padecimiento`) VALUES
(1, 'Cansancio crónico'),
(2, 'Estrés'),
(3, 'Depresión'),
(4, 'Estreñimiento'),
(5, 'Insomnio'),
(6, 'Sobre peso'),
(7, 'Ser muy enfermizo'),
(8, 'Acné'),
(9, 'Colitis'),
(10, 'Ansiedad'),
(11, 'Indigestión'),
(12, 'Gastritis'),
(13, 'Varices'),
(14, 'Alergias'),
(15, 'Presión alta'),
(16, 'Colesterol alto'),
(17, 'Ácido úrico alto'),
(18, 'Infecciones de orina recurrentes'),
(19, 'Adicciones'),
(20, 'Problemas mestruales'),
(21, 'Dolor de espalda'),
(22, 'Dolor de cuello'),
(23, 'Perdida de memoria'),
(24, 'Piedras en los riñones'),
(25, 'Dolor de las articulaciones'),
(26, 'Obesidad'),
(27, 'Manchas en la cara'),
(28, 'Problemas en la piel'),
(29, 'Enfermedades crónicas'),
(30, 'Hemorroides'),
(31, 'Problemas hormonales'),
(32, 'Intolerancia a la lactosa'),
(33, 'Problemas con el azúcar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_relacion_producto_padecimiento`
--

CREATE TABLE `tb_relacion_producto_padecimiento` (
  `id` int(3) NOT NULL,
  `id_producto` int(3) DEFAULT NULL,
  `id_padecimiento` int(3) DEFAULT NULL,
  `id_mes` int(3) DEFAULT NULL,
  `uso` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_relacion_producto_padecimiento`
--

INSERT INTO `tb_relacion_producto_padecimiento` (`id`, `id_producto`, `id_padecimiento`, `id_mes`, `uso`) VALUES
(1, 31, 1, 2, 1),
(2, 31, 1, 3, 1),
(3, 30, 1, 1, 3),
(4, 28, 1, 1, 3),
(5, 31, 2, 2, 1),
(6, 31, 2, 3, 1),
(7, 21, 2, 1, 3),
(8, 20, 2, 1, 3),
(9, 31, 3, 2, 1),
(10, 31, 3, 3, 1),
(11, 5, 3, 1, 2),
(12, 13, 3, 1, 2),
(13, 1, 3, 1, 2),
(14, 20, 3, 1, 3),
(15, 10, 3, 1, 3),
(16, 17, 4, 1, 1),
(17, 32, 4, 1, 1),
(18, 42, 4, 1, 1),
(19, 38, 4, 1, 1),
(20, 17, 4, 2, 1),
(21, 32, 4, 2, 1),
(22, 38, 4, 2, 1),
(23, 17, 4, 3, 1),
(24, 32, 4, 3, 1),
(25, 38, 4, 3, 1),
(26, 12, 4, 1, 3),
(27, 28, 4, 1, 3),
(28, 20, 4, 1, 3),
(29, 31, 5, 2, 1),
(30, 31, 5, 3, 1),
(31, 34, 5, 1, 2),
(32, 35, 5, 1, 2),
(33, 21, 5, 1, 3),
(34, 29, 5, 1, 3),
(35, 20, 5, 1, 3),
(36, 17, 6, 1, 1),
(37, 32, 6, 1, 1),
(38, 42, 6, 1, 1),
(39, 38, 6, 1, 1),
(40, 37, 6, 1, 1),
(41, 31, 6, 2, 1),
(42, 37, 6, 2, 1),
(43, 31, 6, 3, 1),
(44, 37, 6, 3, 1),
(45, 24, 6, 1, 2),
(46, 14, 6, 1, 2),
(47, 16, 6, 1, 2),
(48, 23, 6, 1, 3),
(49, 28, 6, 1, 3),
(50, 17, 7, 1, 1),
(51, 32, 7, 1, 1),
(52, 38, 7, 1, 1),
(53, 42, 7, 1, 1),
(54, 31, 7, 2, 1),
(55, 31, 7, 3, 1),
(56, 16, 7, 1, 2),
(57, 30, 7, 1, 3),
(58, 17, 8, 1, 1),
(59, 32, 8, 1, 1),
(60, 36, 8, 1, 2),
(61, 18, 8, 1, 2),
(62, 19, 8, 1, 2),
(63, 20, 8, 1, 3),
(64, 21, 8, 1, 3),
(65, 27, 8, 1, 3),
(66, 17, 9, 1, 1),
(67, 32, 9, 1, 1),
(68, 12, 9, 1, 2),
(69, 28, 9, 1, 3),
(70, 21, 9, 1, 3),
(71, 31, 10, 2, 1),
(72, 31, 10, 3, 1),
(73, 34, 10, 1, 2),
(74, 1, 10, 1, 2),
(75, 21, 10, 1, 3),
(76, 20, 10, 1, 3),
(77, 17, 11, 1, 1),
(78, 32, 11, 1, 1),
(79, 12, 11, 1, 2),
(80, 29, 11, 1, 2),
(81, 28, 11, 1, 3),
(82, 17, 12, 1, 1),
(83, 32, 12, 1, 1),
(84, 38, 12, 1, 1),
(85, 42, 12, 1, 1),
(86, 12, 12, 1, 2),
(87, 28, 12, 1, 3),
(88, 17, 13, 1, 1),
(89, 31, 13, 2, 1),
(90, 2, 13, 1, 2),
(91, 37, 13, 1, 2),
(92, 28, 13, 1, 3),
(93, 17, 14, 1, 1),
(94, 32, 14, 1, 1),
(95, 42, 14, 1, 1),
(96, 38, 14, 1, 1),
(97, 31, 14, 2, 1),
(98, 31, 14, 3, 1),
(99, 39, 14, 1, 2),
(100, 21, 14, 1, 3),
(101, 23, 14, 1, 3),
(102, 28, 14, 1, 3),
(103, 30, 14, 1, 3),
(104, 17, 15, 1, 1),
(105, 32, 15, 1, 1),
(106, 38, 15, 1, 1),
(107, 42, 15, 1, 1),
(108, 31, 15, 2, 1),
(109, 31, 15, 3, 1),
(110, 26, 15, 1, 2),
(111, 41, 15, 1, 2),
(112, 23, 15, 1, 3),
(113, 17, 16, 1, 1),
(114, 32, 16, 1, 1),
(115, 38, 16, 1, 1),
(116, 42, 16, 1, 1),
(117, 31, 16, 2, 1),
(118, 31, 16, 3, 1),
(119, 22, 16, 1, 2),
(120, 30, 16, 1, 3),
(121, 17, 17, 1, 1),
(122, 32, 17, 1, 1),
(123, 38, 17, 1, 1),
(124, 42, 17, 1, 1),
(125, 31, 17, 2, 1),
(126, 31, 17, 3, 1),
(127, 29, 17, 1, 2),
(128, 23, 17, 1, 3),
(129, 17, 18, 1, 1),
(130, 32, 18, 1, 1),
(131, 38, 18, 1, 1),
(132, 42, 18, 1, 1),
(133, 15, 18, 1, 2),
(134, 22, 18, 1, 2),
(135, 30, 18, 1, 3),
(136, 17, 19, 1, 1),
(137, 32, 19, 1, 1),
(138, 38, 19, 1, 1),
(139, 42, 19, 1, 1),
(140, 31, 19, 2, 1),
(141, 7, 19, 2, 1),
(142, 25, 19, 2, 1),
(143, 31, 19, 3, 1),
(144, 7, 19, 3, 1),
(145, 25, 19, 3, 1),
(146, 1, 19, 1, 2),
(147, 20, 19, 1, 3),
(148, 33, 20, 1, 1),
(149, 6, 20, 1, 2),
(150, 20, 20, 1, 3),
(151, 31, 21, 2, 1),
(152, 31, 21, 3, 1),
(153, 7, 21, 1, 2),
(154, 11, 21, 1, 2),
(155, 10, 21, 1, 3),
(156, 31, 22, 2, 1),
(157, 31, 22, 3, 1),
(158, 7, 22, 1, 2),
(159, 11, 22, 1, 2),
(160, 2, 22, 1, 2),
(161, 10, 22, 1, 3),
(162, 17, 23, 1, 1),
(163, 32, 23, 1, 1),
(164, 38, 23, 1, 1),
(165, 42, 23, 1, 1),
(166, 31, 23, 2, 1),
(167, 31, 23, 3, 1),
(168, 7, 23, 1, 2),
(169, 20, 23, 1, 3),
(170, 28, 23, 1, 3),
(171, 17, 24, 1, 1),
(172, 32, 24, 1, 1),
(173, 38, 24, 1, 1),
(174, 42, 24, 1, 1),
(175, 29, 24, 1, 2),
(176, 23, 24, 1, 3),
(177, 31, 25, 2, 1),
(178, 31, 25, 3, 1),
(179, 7, 25, 1, 2),
(180, 11, 25, 1, 2),
(181, 2, 25, 1, 2),
(182, 4, 25, 1, 2),
(183, 10, 25, 1, 3),
(184, 17, 26, 1, 1),
(185, 32, 26, 1, 1),
(186, 42, 26, 1, 1),
(187, 38, 26, 1, 1),
(188, 37, 26, 1, 1),
(189, 31, 26, 2, 1),
(190, 37, 26, 2, 1),
(191, 31, 26, 3, 1),
(192, 37, 26, 3, 1),
(193, 24, 26, 1, 2),
(194, 14, 26, 1, 2),
(195, 16, 26, 1, 2),
(196, 23, 26, 1, 3),
(197, 28, 26, 1, 3),
(198, 17, 27, 1, 1),
(199, 32, 27, 1, 1),
(200, 36, 27, 1, 2),
(201, 19, 27, 1, 2),
(202, 40, 27, 1, 2),
(203, 20, 27, 1, 3),
(204, 21, 27, 1, 3),
(205, 27, 27, 1, 3),
(206, 17, 28, 1, 1),
(207, 32, 28, 1, 1),
(208, 26, 28, 1, 2),
(209, 19, 28, 1, 2),
(210, 40, 28, 1, 2),
(211, 20, 28, 1, 3),
(212, 21, 28, 1, 3),
(213, 27, 28, 1, 3),
(214, 17, 29, 1, 1),
(215, 32, 29, 1, 1),
(216, 38, 29, 1, 1),
(217, 42, 29, 1, 1),
(218, 31, 29, 2, 1),
(219, 31, 29, 3, 1),
(220, 9, 29, 1, 2),
(221, 7, 29, 1, 2),
(222, 20, 29, 1, 3),
(223, 17, 30, 1, 1),
(224, 32, 30, 1, 1),
(225, 38, 30, 1, 1),
(226, 42, 30, 1, 1),
(227, 12, 30, 1, 2),
(228, 7, 30, 1, 2),
(229, 28, 30, 1, 3),
(230, 20, 30, 1, 3),
(231, 17, 31, 1, 1),
(232, 32, 31, 1, 1),
(233, 38, 31, 1, 1),
(234, 42, 31, 1, 1),
(235, 12, 31, 1, 2),
(236, 28, 31, 1, 3),
(237, 17, 32, 1, 1),
(238, 32, 32, 1, 1),
(239, 38, 32, 1, 1),
(240, 42, 32, 1, 1),
(241, 22, 32, 1, 2),
(242, 28, 32, 1, 3),
(243, 12, 32, 1, 3),
(244, 17, 33, 1, 1),
(245, 32, 33, 1, 1),
(246, 38, 33, 1, 1),
(247, 42, 33, 1, 1),
(248, 31, 33, 2, 1),
(249, 31, 33, 3, 1),
(250, 8, 33, 1, 2),
(251, 30, 33, 1, 3),
(252, 3, 2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `sexo` varchar(25) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `estatura` float(6,2) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_doterra` varchar(50) DEFAULT NULL,
  `contacto` char(10) DEFAULT NULL,
  `ciudad` varchar(25) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `nombre_lider` varchar(50) DEFAULT NULL,
  `padecimientos` varchar(255) DEFAULT NULL,
  `dispuesto_descripcion` varchar(255) DEFAULT NULL,
  `nombre_familiar` varchar(50) DEFAULT NULL,
  `dispuesto_pregunta` varchar(10) NOT NULL,
  `peso` float(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nombre`, `telefono`, `sexo`, `edad`, `estatura`, `email`, `id_doterra`, `contacto`, `ciudad`, `estado`, `nombre_lider`, `padecimientos`, `dispuesto_descripcion`, `nombre_familiar`, `dispuesto_pregunta`, `peso`) VALUES
(1, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'dev@mail.com', '0001doterra', 'si', 'Naucalpan', 'Estado de México', 'Jorge jaime', 'Cansancio, Estreñimineto, Sobre peso, Ansiedad, enfermedades-cronicas', 'estaria disúes por ...', 'Jorge', 'Tal vez', NULL),
(2, 'Abril', '2147483647', 'Mujer', 25, 1.58, 'diazabril96@gmail.com', '989898', 'No', 'Cuautitlán Izcalli', 'Estado de México', 'Diosito', 'Ansiedad', 'cifro mi honor en ser digno de confianza', 'no', 'No', NULL),
(3, '', '0', 'hombre', 0, 0.00, '', '', 'si', '', 'Aguascalientes', '', '', '', '', 'Si', NULL),
(4, '', '0', 'hombre', 0, 0.00, '', '', 'si', '', 'Aguascalientes', '', '', '', '', 'Si', NULL),
(5, '', '0', 'hombre', 0, 0.00, '', '', 'si', '', 'Aguascalientes', '', '', '', '', 'Si', NULL),
(6, 'Ruben R R', '2147483647', 'hombre', 31, 1.70, 'prueba@mail.com', 'do123', 'No', 'México', 'Estado de México', 'Jorge jaime', '', 'estaria disúes por ...', 'Jorge', 'Tal vez', NULL),
(7, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'dev@mail.com', '0001doterra', 'No', 'mexico', 'Estado de México', 'Jorge jaime', 'Tal vez', 'estaria disúes por ...', 'Jorge', '', NULL),
(8, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'dev@mail.com', 'do123', 'No', 'mexico', 'Estado de México', 'Jorge jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', NULL),
(9, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'prueba@mail.com', 'do123', 'No', 'mexico', 'Estado de México', 'Jorge Jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', NULL),
(10, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'prueba@mail.com', 'do123', 'No', 'mexico', 'Estado de México', 'Jorge Jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', NULL),
(11, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'dev@mail.com', '0001doterra', 'No', 'mexico', 'Estado de México', 'Jorge jaime', NULL, '', 'Jorge', 'No', NULL),
(12, 'Ivan Ruiz', '2147483647', 'hombre', 27, 1.65, 'dev@mail.com', '0001doterra', 'No', 'mexico', 'Estado de México', 'Jorge jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', NULL),
(13, 'Ivan Ruiz rodriguez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(14, 'Ivan Ruiz Rodriguez Ro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(15, 'Ivan Ruiz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(16, 'Ivan Ruiz Rodriguez Nieto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(17, 'RUBEN RUIZ ', '2147483647', 'hombre', 31, 1.65, 'dev@mail.com', '0001doterra', 'No', 'mexico', 'Aguascalientes', 'Jorge jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', 75.00),
(18, 'Abril Diaz', '5517265425', 'Mujer', 25, 1.58, 'diazabril96@gmail.com', '0001doterra', 'No', 'mexico', 'Estado de México', 'Jorge jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', 53.00),
(19, 'Karla', '5555555555', 'Mujer', 24, 168.00, 'mail@dev.com', 'Doterra_654', 'si', 'Naucalpan', 'Estado de México', 'Jaime', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', 50.00),
(20, 'Ivan Ruiz Rodriguez Ro', '5517265425', 'hombre', 27, 1.66, 'ivan@mail.com', '123456', 'si', 'Mexico', 'Estado de México', 'Jorge jaime', NULL, 'estaria disúes por ...', 'no', 'Tal vez', 75.00),
(21, 'Ruben Alfredo', '5517265425', 'hombre', 31, 1.75, 'ruben@mail.com', '123456', 'No', 'Nose', 'Aguascalientes', 'Jorge jaime', NULL, 'estaria disúes por ...', 'no', 'No', 78.00),
(22, 'Rodrigo Aguirre', '5517265425', 'hombre', 25, 1.76, 'rodrigo@mail.com', '123456', 'No', 'mexico', 'Estado de México', 'Diosito', NULL, 'estaria disúes por ...', 'Jorge', 'Tal vez', 75.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_basico`
--

CREATE TABLE `uso_basico` (
  `id` int(9) NOT NULL,
  `id_producto` int(3) DEFAULT NULL,
  `id_padecimiento` int(3) DEFAULT NULL,
  `id_mes` int(3) NOT NULL,
  `uso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uso_basico`
--

INSERT INTO `uso_basico` (`id`, `id_producto`, `id_padecimiento`, `id_mes`, `uso`) VALUES
(1, 31, 1, 2, 1),
(2, 31, 1, 3, 1),
(3, 31, 2, 2, 1),
(4, 31, 2, 3, 1),
(5, 31, 3, 2, 1),
(6, 31, 3, 3, 1),
(7, 17, 4, 1, 1),
(8, 32, 4, 1, 1),
(9, 42, 4, 1, 1),
(10, 38, 4, 1, 1),
(11, 17, 4, 2, 1),
(12, 32, 4, 2, 1),
(13, 38, 4, 2, 1),
(14, 17, 4, 3, 1),
(15, 32, 4, 3, 1),
(16, 38, 4, 3, 1),
(17, 31, 5, 2, 1),
(18, 31, 5, 3, 1),
(19, 17, 6, 1, 1),
(20, 32, 6, 1, 1),
(21, 42, 6, 1, 1),
(22, 38, 6, 1, 1),
(23, 37, 6, 1, 1),
(24, 31, 6, 2, 1),
(25, 37, 6, 2, 1),
(26, 31, 6, 3, 1),
(27, 37, 6, 3, 1),
(28, 17, 7, 1, 1),
(29, 32, 7, 1, 1),
(30, 38, 7, 1, 1),
(31, 42, 7, 1, 1),
(32, 31, 7, 2, 1),
(33, 31, 7, 3, 1),
(34, 17, 8, 1, 1),
(35, 32, 8, 1, 1),
(36, 17, 9, 1, 1),
(37, 32, 9, 1, 1),
(38, 31, 10, 2, 1),
(39, 31, 10, 3, 1),
(40, 17, 11, 1, 1),
(41, 32, 11, 1, 1),
(42, 17, 12, 1, 1),
(43, 32, 12, 1, 1),
(44, 38, 12, 1, 1),
(45, 42, 12, 1, 1),
(46, 17, 13, 1, 1),
(47, 31, 13, 2, 1),
(48, 17, 14, 1, 1),
(49, 32, 14, 1, 1),
(50, 42, 14, 1, 1),
(51, 38, 14, 1, 1),
(52, 31, 14, 2, 1),
(53, 31, 14, 3, 1),
(54, 17, 15, 1, 1),
(55, 32, 15, 1, 1),
(56, 38, 15, 1, 1),
(57, 42, 15, 1, 1),
(58, 31, 15, 2, 1),
(59, 31, 15, 3, 1),
(60, 17, 16, 1, 1),
(61, 32, 16, 1, 1),
(62, 38, 16, 1, 1),
(63, 42, 16, 1, 1),
(64, 31, 16, 2, 1),
(65, 31, 16, 3, 1),
(66, 17, 17, 1, 1),
(67, 32, 17, 1, 1),
(68, 38, 17, 1, 1),
(69, 42, 17, 1, 1),
(70, 31, 17, 2, 1),
(71, 31, 17, 3, 1),
(72, 17, 18, 1, 1),
(73, 32, 18, 1, 1),
(74, 38, 18, 1, 1),
(75, 42, 18, 1, 1),
(76, 17, 19, 1, 1),
(77, 32, 19, 1, 1),
(78, 38, 19, 1, 1),
(79, 42, 19, 1, 1),
(80, 31, 19, 2, 1),
(81, 7, 19, 2, 1),
(82, 25, 19, 2, 1),
(83, 31, 19, 3, 1),
(84, 7, 19, 3, 1),
(85, 25, 19, 3, 1),
(86, 33, 20, 1, 1),
(87, 31, 21, 2, 1),
(88, 31, 21, 3, 1),
(89, 31, 22, 2, 1),
(90, 31, 22, 3, 1),
(91, 17, 23, 1, 1),
(92, 32, 23, 1, 1),
(93, 38, 23, 1, 1),
(94, 42, 23, 1, 1),
(95, 31, 23, 2, 1),
(96, 31, 23, 3, 1),
(97, 17, 24, 1, 1),
(98, 32, 24, 1, 1),
(99, 38, 24, 1, 1),
(100, 42, 24, 1, 1),
(101, 31, 25, 2, 1),
(102, 31, 25, 3, 1),
(103, 17, 26, 1, 1),
(104, 32, 26, 1, 1),
(105, 42, 26, 1, 1),
(106, 38, 26, 1, 1),
(107, 37, 26, 1, 1),
(108, 31, 26, 2, 1),
(109, 37, 26, 2, 1),
(110, 31, 26, 3, 1),
(111, 37, 26, 3, 1),
(112, 17, 27, 1, 1),
(113, 32, 27, 1, 1),
(114, 17, 28, 1, 1),
(115, 32, 28, 1, 1),
(116, 17, 29, 1, 1),
(117, 32, 29, 1, 1),
(118, 38, 29, 1, 1),
(119, 42, 29, 1, 1),
(120, 31, 29, 2, 1),
(121, 31, 29, 3, 1),
(122, 17, 30, 1, 1),
(123, 32, 30, 1, 1),
(124, 38, 30, 1, 1),
(125, 42, 30, 1, 1),
(126, 17, 31, 1, 1),
(127, 32, 31, 1, 1),
(128, 38, 31, 1, 1),
(129, 42, 31, 1, 1),
(130, 17, 32, 1, 1),
(131, 32, 32, 1, 1),
(132, 38, 32, 1, 1),
(133, 42, 32, 1, 1),
(134, 17, 33, 1, 1),
(135, 32, 33, 1, 1),
(136, 38, 33, 1, 1),
(137, 42, 33, 1, 1),
(138, 31, 33, 2, 1),
(139, 31, 33, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_complementario`
--

CREATE TABLE `uso_complementario` (
  `id` int(3) NOT NULL,
  `id_producto` int(39) DEFAULT NULL,
  `id_padecimiento` int(3) DEFAULT NULL,
  `id_mes` int(3) NOT NULL,
  `uso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uso_complementario`
--

INSERT INTO `uso_complementario` (`id`, `id_producto`, `id_padecimiento`, `id_mes`, `uso`) VALUES
(1, 5, 3, 1, 2),
(2, 13, 3, 1, 2),
(3, 1, 3, 1, 2),
(4, 34, 5, 1, 2),
(5, 35, 5, 1, 2),
(6, 24, 6, 1, 2),
(7, 14, 6, 1, 2),
(8, 16, 6, 1, 2),
(9, 16, 7, 1, 2),
(10, 36, 8, 1, 2),
(11, 18, 8, 1, 2),
(12, 19, 8, 1, 2),
(13, 12, 9, 1, 2),
(14, 34, 10, 1, 2),
(15, 1, 10, 1, 2),
(16, 12, 11, 1, 2),
(17, 29, 11, 1, 2),
(18, 12, 12, 1, 2),
(19, 2, 13, 1, 2),
(20, 37, 13, 1, 2),
(21, 39, 14, 1, 2),
(22, 26, 15, 1, 2),
(23, 41, 15, 1, 2),
(24, 22, 16, 1, 2),
(25, 29, 17, 1, 2),
(26, 15, 18, 1, 2),
(27, 22, 18, 1, 2),
(28, 1, 19, 1, 2),
(29, 6, 20, 1, 2),
(30, 7, 21, 1, 2),
(31, 11, 21, 1, 2),
(32, 7, 22, 1, 2),
(33, 11, 22, 1, 2),
(34, 2, 22, 1, 2),
(35, 7, 23, 1, 2),
(36, 29, 24, 1, 2),
(37, 7, 25, 1, 2),
(38, 11, 25, 1, 2),
(39, 2, 25, 1, 2),
(40, 4, 25, 1, 2),
(41, 24, 26, 1, 2),
(42, 14, 26, 1, 2),
(43, 16, 26, 1, 2),
(44, 36, 27, 1, 2),
(45, 19, 27, 1, 2),
(46, 40, 27, 1, 2),
(47, 26, 28, 1, 2),
(48, 19, 28, 1, 2),
(49, 40, 28, 1, 2),
(50, 9, 29, 1, 2),
(51, 7, 29, 1, 2),
(52, 12, 30, 1, 2),
(53, 7, 30, 1, 2),
(54, 12, 31, 1, 2),
(55, 22, 32, 1, 2),
(56, 8, 33, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_diario`
--

CREATE TABLE `uso_diario` (
  `id` int(3) NOT NULL,
  `id_producto` int(3) DEFAULT NULL,
  `id_padecimiento` int(3) DEFAULT NULL,
  `id_mes` int(3) NOT NULL,
  `uso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uso_diario`
--

INSERT INTO `uso_diario` (`id`, `id_producto`, `id_padecimiento`, `id_mes`, `uso`) VALUES
(1, 30, 1, 1, 3),
(2, 28, 1, 1, 3),
(3, 21, 2, 1, 3),
(4, 20, 2, 1, 3),
(5, 20, 3, 1, 3),
(6, 10, 3, 1, 3),
(7, 12, 4, 1, 3),
(8, 28, 4, 1, 3),
(9, 20, 4, 1, 3),
(10, 21, 5, 1, 3),
(11, 29, 5, 1, 3),
(12, 20, 5, 1, 3),
(13, 23, 6, 1, 3),
(14, 28, 6, 1, 3),
(15, 30, 7, 1, 3),
(16, 20, 8, 1, 3),
(17, 21, 8, 1, 3),
(18, 27, 8, 1, 3),
(19, 28, 9, 1, 3),
(20, 21, 9, 1, 3),
(21, 21, 10, 1, 3),
(22, 20, 10, 1, 3),
(23, 28, 11, 1, 3),
(24, 28, 12, 1, 3),
(25, 28, 13, 1, 3),
(26, 21, 14, 1, 3),
(27, 23, 14, 1, 3),
(28, 28, 14, 1, 3),
(29, 30, 14, 1, 3),
(30, 23, 15, 1, 3),
(31, 30, 16, 1, 3),
(32, 23, 17, 1, 3),
(33, 30, 18, 1, 3),
(34, 20, 19, 1, 3),
(35, 20, 20, 1, 3),
(36, 10, 21, 1, 3),
(37, 10, 22, 1, 3),
(38, 20, 23, 1, 3),
(39, 28, 23, 1, 3),
(40, 23, 24, 1, 3),
(41, 10, 25, 1, 3),
(42, 23, 26, 1, 3),
(43, 28, 26, 1, 3),
(44, 20, 27, 1, 3),
(45, 21, 27, 1, 3),
(46, 27, 27, 1, 3),
(47, 20, 28, 1, 3),
(48, 21, 28, 1, 3),
(49, 27, 28, 1, 3),
(50, 20, 29, 1, 3),
(51, 28, 30, 1, 3),
(52, 20, 30, 1, 3),
(53, 28, 31, 1, 3),
(54, 28, 32, 1, 3),
(55, 12, 32, 1, 3),
(56, 30, 33, 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `plan_mensual`
--
ALTER TABLE `plan_mensual`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`id_relacion`);

--
-- Indices de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tb_padecimiento`
--
ALTER TABLE `tb_padecimiento`
  ADD PRIMARY KEY (`id_padecimiento`);

--
-- Indices de la tabla `tb_relacion_producto_padecimiento`
--
ALTER TABLE `tb_relacion_producto_padecimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `uso_basico`
--
ALTER TABLE `uso_basico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `uso_complementario`
--
ALTER TABLE `uso_complementario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `uso_diario`
--
ALTER TABLE `uso_diario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `relacion`
--
ALTER TABLE `relacion`
  MODIFY `id_relacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `id_estado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tb_padecimiento`
--
ALTER TABLE `tb_padecimiento`
  MODIFY `id_padecimiento` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tb_relacion_producto_padecimiento`
--
ALTER TABLE `tb_relacion_producto_padecimiento`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `uso_basico`
--
ALTER TABLE `uso_basico`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT de la tabla `uso_complementario`
--
ALTER TABLE `uso_complementario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `uso_diario`
--
ALTER TABLE `uso_diario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
