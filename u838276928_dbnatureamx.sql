-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-02-2022 a las 18:31:46
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u838276928_dbnatureamx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE `tb_estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(25) NOT NULL
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
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medios`
--

CREATE TABLE `tb_medios` (
  `id_medios` int(11) NOT NULL,
  `medio` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_medios`
--

INSERT INTO `tb_medios` (`id_medios`, `medio`) VALUES
(1, 'Facebook'),
(2, 'Instagram'),
(3, 'Recomendacion'),
(4, 'Anuncio'),
(5, 'Pasaba por ahí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro`
--

CREATE TABLE `tb_registro` (
  `Id` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `municipio` varchar(25) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `solicitud` varchar(25) NOT NULL,
  `medio` varchar(25) NOT NULL,
  `otro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_registro`
--

INSERT INTO `tb_registro` (`Id`, `nombre`, `email`, `fecha_nacimiento`, `ciudad`, `estado`, `municipio`, `codigo_postal`, `telefono`, `solicitud`, `medio`, `otro`) VALUES
(8, 'mayra lopez ', 'mayra @gmail.com', '1995-11-01', 'juarez', 'Chihuahua', 'juarez ', 32456, '6563254589', '', '', ''),
(9, 'silvia domiuez ', 'silcia@gmail.com', '2005-11-01', ' juarez', 'Chihuahua', 'juarez ', 32567, '6561234578', '', '', ''),
(10, 'pedro fuentes ', '', '2021-11-01', '', 'Chihuahua', 'juarez ', 32456, '65621398', '', '', ''),
(18, '', '', '0000-00-00', '', 'Aguascalientes', '', 0, '', 'Masaje', 'facebook', ''),
(19, '', '', '0000-00-00', '', 'Aguascalientes', '', 0, '', 'Aceites', 'facebook', ''),
(20, 'Luis Diego Zamudio Ordoñez ', 'xdiegoneytor@gmail.com', '2001-06-30', 'Mexico', 'Estado de México', 'Naucalpan', 53330, '5539850669', 'Capacitacón', 'recomendación', ''),
(21, 'Sandra Marin', 'sandra.marin.sierra@gmil.com', '1999-07-17', 'Mexico', 'Estado de México', 'Naucalpan ', 53730, '5618215454', 'Accesorios', 'facebook', ''),
(22, 'David Tello', 'david7ello@gmail.com', '1998-02-11', 'Mexico', 'Estado de México', 'Naucalpan de Juárez', 53218, '5545145153', 'Masaje', 'facebook', ''),
(23, 'Vladimir', 'zzvladiszz@gmail.com', '1998-01-08', 'Mexico', 'Estado de México', 'Atizapan', 52928, '5558123144', 'Aceites', 'pasaba por ahi', ''),
(24, 'karla saenz', 'karla.saenz@gmail.com', '1982-03-09', 'juarez', 'Chihuahua', 'juarez ', 32543, '6561675448', 'Aceites', 'facebook', ''),
(25, 'perla saenz', 'perla.s.wong@gmail.com', '1984-11-26', 'juarez', 'Chihuahua', 'juarez', 32415, '6561445323', 'Aceites', 'facebook', ''),
(26, 'Gerardo Hernández ', 'hernandezbenitezgerardo@gmail.com', '1991-09-20', 'Mexico ', 'Coahuila', 'Tlalnepantla ', 54090, '5526384950', 'Accesorios', 'facebook', ''),
(27, 'García Rodrigo', 'roycallejas34@gmail.com', '2001-08-10', 'Mexico', 'Estado de México', 'Naucalpan', 53320, '5584536739', 'Capacitacón', 'facebook', ''),
(28, 'Haydee Bueno Nevarez', 'aydbueno@gmail.com', '1985-06-10', '', 'Chihuahua', 'juarez', 32565, '6566600700', 'Aceites', 'recomendación', ''),
(29, 'alejandra maldonado', 'alejandramg94@hotmail.com', '1994-07-17', 'juarez', 'Chihuahua', 'juarez', 32650, '6566015235', 'Aceites', 'facebook', ''),
(30, 'Cynthia Haidi Quiñones Montes', 'cynthia.quinones@ugseguros.com', '1973-10-10', 'Cd.juarez', 'Chihuahua', 'Cd.Juarez', 32417, '6563235776', 'Masaje', 'recomendación', ''),
(31, 'Leticia Villalobos Fabela', 'letyvif@gmail.com', '1965-01-06', 'juarez', 'Chihuahua', 'juarez ', 0, '6566389798', 'Masaje', 'facebook', ''),
(32, 'teresa grasso', 'grasso1999@icloud.com', '0000-00-00', 'juarez', 'Chihuahua', '', 32550, '6565546137', 'Masaje', 'facebook', ''),
(33, 'teresa Grasso', 'hola@naturea.com.mx', '2021-12-12', 'Juárez', 'Chihuahua', 'chihuahua', 32550, '6565546137', 'Masaje', 'instagram', ''),
(34, 'Diana Laura Celeste Hernandez Santiago', 'cele0523@hotmail.com', '1983-05-24', 'juarez', 'Chihuahua', 'juarez', 32422, '7831435261', 'Aceites', 'facebook', ''),
(35, 'Adriana Gizeh Beltran del Rio Vara', 'tchgizeh04@gmail.com', '1984-09-23', 'juarez', 'Chihuahua', 'Juarez', 32618, '6561496121', 'Tour', 'recomendación', ''),
(36, 'Ivan Nuñez', 'raru15igu@gmail.com', '2003-06-19', 'juarez', 'Chihuahua', '', 0, '6565972302', 'Masaje', 'facebook', ''),
(37, 'claudia Martinez Alonzo', 'cma3083@gmail.com', '1983-04-30', 'Juarez', 'Chihuahua', '', 32380, '6561292085', 'Masaje', 'facebook', ''),
(38, 'Jaime Rábago ', 'rabagoquirozjaimea@gmail.com', '1975-05-21', 'Monterrey ', 'Nuevo León', 'Garcia', 66036, '8117895845', 'Masaje', 'recomendación', ''),
(39, 'José Luis linares ', 'doterralinares@gmail.com', '1979-01-03', 'Phelan', 'Baja California', 'Usa ', 92371, '7608106443', 'Accesorios', 'otro', ''),
(40, 'Linares', 'doterralinares@gmail.com', '1979-01-02', 'Phelan', 'Baja California', 'Usa ', 92371, '7608106443', 'Accesorios', 'otro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_solicitud`
--

CREATE TABLE `tb_solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `solicitud` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_solicitud`
--

INSERT INTO `tb_solicitud` (`id_solicitud`, `solicitud`) VALUES
(1, 'Masaje'),
(2, 'Capacitacón'),
(3, 'Aceites'),
(4, 'Accesorios'),
(5, 'Tour');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(7) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `ciudad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombre`, `email`, `fecha`, `ciudad`, `estado`, `municipio`, `calle`, `cp`) VALUES
(1, 'Ivan Ruiz', 'ivan@maidevelopers.com', '1990-04-02', 'Ciudad de Mexico CDMX', 'Estado de México', 'Naucalpan', 'G 42 cerveceria modelo', 53660),
(2, 'Ivan Ruiz', 'ivan@maidevelopers.com', '1996-04-04', 'Ciudad de Mexico CDMX', 'Estado de México', 'Naucalpan', 'G 42 cerveceria modelo', 53660),
(3, 'Ivan Ruiz', 'ivan@maidevelopers.com', '1995-02-03', 'Ciudad de Mexico CDMX', 'Estado de México', 'Naucalpan', 'G 42 cerveceria modelo', 53660),
(4, 'Ivan Ruiz', 'ivan@maidevelopers.com', '1990-02-01', 'Ciudad de Mexico CDMX', 'Estado de México', 'Naucalpan', 'G 42 cerveceria modelo', 53660),
(5, 'leonardo prueba', 'leo@mail.com', '1995-05-05', 'mexico', 'Estado de México', 'Naucalpan', 'g 42 cerveceria modelo', 53100),
(6, 'nombre prueba', 'ivanw@mail.com', '1995-10-02', 'mexico', 'Estado de México', 'Naucalpan', 'g 42', 53330),
(7, 'prueba', 'prueba@mail.com', '1990-03-05', 'mexico', 'Estado de México', 'Naucalpan', 'g 42 cerveceria modelo', 53330);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tb_solicitud`
--
ALTER TABLE `tb_solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `tb_solicitud`
--
ALTER TABLE `tb_solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
