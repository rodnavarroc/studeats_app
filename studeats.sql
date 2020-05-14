-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-05-2020 a las 03:47:12
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id13169270_studeats`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentario` int(11) NOT NULL,
  `lugar` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usuario` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `calificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idcomentario`, `lugar`, `nombre_usuario`, `calificacion`, `comentario`) VALUES
(1, 'cafeteria_fime', 'Rodolfo', '5', 'Muy bueno'),
(3, 'cafeteria_fime', 'Pedro', '3', 'Esta regular'),
(4, 'cafeteria_facdyc', 'Rodolfo', '5', 'Excelente servicio'),
(5, 'cafeteria_facpya', 'Rodolfo', '3', 'Regular'),
(7, 'cafeteria_ftsydh', 'Alejandro', '4', 'Me agrada pero esta pequeÃ±o'),
(9, 'donatota', 'Roberto', '5', 'Delicioso todo'),
(10, 'donatota', 'Ernesto', '4', 'Me gusta el lugar'),
(11, 'BollosRodolfo', 'Juan Perez', '5', 'Los mejores bollos de la FIME'),
(12, 'BollosRodolfo', 'Arturo', '4', 'Le falta variedad pero saben ricos'),
(15, 'cafeteria_fime', 'Maria', '5', 'Muy rico'),
(16, 'cafeteria_facpya', 'Maria ', '5', 'Excelente '),
(17, 'cafeteria_fcfm', 'Maria', '4', 'Muy bien'),
(18, 'cafeteria_fcq', 'Maria', '5', 'Rico!'),
(19, 'cafeteria_ffyl', 'Maria', '5', 'Muy bien!'),
(20, 'cafeteria_fic', 'Maria', '2', 'Bien pero la última vez me salió un metal en el taco, falta higiene '),
(21, 'subway', 'Maria', '5', 'Muy rico!'),
(22, 'ilikepizza', 'Maria ', '5', 'Deli, deli!'),
(23, 'lasalitas', 'Maria', '5', 'Riquísimo!'),
(24, 'cafeteria_ffyl', 'Yazmin', '5', 'Comida muy bien hecha, y en buen estado.'),
(25, 'papajohns', 'Maria', '5', 'Rico'),
(26, 'cafeteria_fime', 'David', '4', 'Buena'),
(27, 'cafeteria_fime', 'Jorge prado', '5', 'Excelente ambiente para estar con amigos'),
(32, 'cafeteria_fime', 'Andres Gerardo', '4', 'Buena opción de comida , precios algo elevados a comparación de otras universidades pero muy buena calidad '),
(34, 'cafeteria_fic', 'Fabiola', '5', 'Excelente comida a excelente precio'),
(35, 'cafeteria_fime', 'Israel', '4', 'Esta bien caro, nomas como con vale ahí'),
(36, 'subway', 'Luis Fernando', '5', 'Bueno, rico y precio nazonable'),
(37, 'lasalitas', 'Luis Fernando', '5', 'Bueno y bonito'),
(38, 'donatota', 'Luis Fernando', '4', 'Bueno'),
(40, 'cafeteria_fcb', 'Karla Seis', '3', ''),
(41, 'cafeteria_fcq', 'Mildred Castillo', '2', 'insectos en la comida, mesas de 3 personas, lugar tétrico'),
(42, 'cafeteria_fime', 'Dany García', '4', 'Muy buenos los burritos y tacos'),
(43, 'cafeteria_facpya', 'Dany García', '5', 'Muy ricos los hotdogs'),
(44, 'cafeteria_fcq', 'Dany García', '5', 'Las hamburguesas y los piratas están buenisimos'),
(45, 'cafeteria_fic', 'Dany García', '4', 'Bueno, rico y barato en general'),
(46, 'cafeteria_ftsydh', 'Dany García', '5', 'Los hotdogs buenisimos, muy recomendables'),
(47, 'subway', 'Dany García', '4', 'El aún de costilla muy recomendable'),
(48, 'ilikepizza', 'Dany García', '2', 'Muy grasosa y aceitosa la pizza'),
(49, 'lasalitas', 'Dany García', '5', 'Muy buenas las hamburguesas y los boneless de BBQ mis favoritos los recomiendo'),
(50, 'papajohns', 'Dany García', '5', 'La pizza de carne y vegetales son las mejores '),
(51, 'elsabordeargentina', 'Dany García', '5', ''),
(52, 'churchschicken', 'Dany García', '4', ''),
(53, 'donatota', 'Dany García', '3', 'Buenas gorditas '),
(54, 'latostada', 'Dany García', '4', 'Barato y rico '),
(55, 'cafeteria_fcfm', 'Juan ', '5', 'Los taquitos de enfrente a FCFM están muy buenos'),
(56, 'cafeteria_farq', 'Jorge Florido', '4', 'Buena variedad de comida'),
(57, 'cafeteria_ffyl', 'Karina', '4', 'Está muy rica la comida pero a veces como solo lo gritan no sabes ni para quien es:( '),
(58, 'donatota', 'Jorge Florido', '5', ''),
(59, 'cafeteria_fcb', 'Jessica Seis', '4', ''),
(60, 'cafeteria_ftsydh', 'Jessica Seis', '5', ''),
(61, 'elsabordeargentina', 'Juan Flores ', '5', 'Buen sazón '),
(62, 'cafeteria_facpya', 'José Minila', '5', 'Todo bien '),
(63, 'latostada', 'RMG', '3', 'Le falta sal al consome'),
(75, 'cafeteria_fime', 'Brenda Nallely', '4', 'Buena, '),
(77, 'licslightfood', 'Ana', '4', ''),
(78, 'licslightfood', 'Ana', '4', ''),
(79, 'cafeteria_fime', 'David', '5', ''),
(81, 'cafeteria_fime', 'Tony', '5', 'Ta cara la comida pero rica jeje'),
(83, 'cafeteria_fime', 'Joana Lisett Navarro Castillo ', '5', 'Muy buenos alimentos '),
(84, 'cafeteria_facpya', 'Joana Lisett Navarro Castillo ', '5', 'El mejor desayuno son los hot cakes'),
(85, 'CupcakesBrenda', 'Carmen ', '5', 'Ricos'),
(86, 'subway', 'Victor García', '3', 'Pasable'),
(87, 'lasalitas', 'Victor García', '4', 'Muy buena opción'),
(88, 'papajohns', 'Victor García', '3', 'Para cuando andes con prisa'),
(89, 'churchschicken', 'Victor García', '2', ''),
(90, 'elsabordeargentina', 'Victor García', '3', 'Están ricas y buena opción'),
(91, 'donatota', 'Victor García', '5', 'Están bien ricas y con mucha variedad'),
(92, 'latostada', 'Victor García', '4', 'Muy buena opción...sobre todo las flautas'),
(93, 'cafeteria_fic', 'Gabriel', '5', 'Chidori, bueno bonito y barato'),
(94, 'cafeteria_fime', 'Julio Verástegui', '4', 'Muy limpia y grande, aunque muy desorganizada, precios un poco altos '),
(95, 'cafeteria_fime', 'Víctor Ruiz', '4', 'El almuerzo es bueno, pero en mi opinión el precio de la comida (tarde) es muy alto para lo que ofrecen.'),
(97, 'cafeteria_farq', 'Selene Prado ', '5', 'Tienen una gran variedad de opciones para comer. La ensalada verde de pollo es de las mejores ensaladas dentro de Ciudad Universitaria.'),
(98, 'cafeteria_fcq', 'Cecy ', '5', 'Increíble todo, me encanto soy la más feliz del mundo '),
(99, 'churchschicken', 'Dana', '4', ''),
(100, 'cafeteria_fime', 'Jalil Romero', '4', 'La comida está rica, mi favorita es el chicharrón en salsa verde o las tortas de pierna, lo único es el tiempo de espera en la larga fila'),
(101, 'cafeteria_fic', 'Jalil Romero', '5', 'La comida del día, siempre son platillos diferentes, gran variedad de guisos y es de las más baratas de toda la universidad '),
(102, 'cafeteria_fod', 'Jalil Romero', '5', 'La comida de FOD es la mejor, ya que sirven tacos de carne asada, papás asadas(mis favs) o hamburguesas cualquiera por menos de 70 amlocoins'),
(103, 'cafeteria_facdyc', 'Jalil Romero', '3', 'He probado los sandwiches de aquí y no están nada mal '),
(104, 'cafeteria_fime', 'Evelyn', '5', 'Es la mejor cafetería de todas '),
(105, 'cafeteria_fime', 'Fany', '3', 'Precios muy altos'),
(106, 'cafeteria_ffyl', 'Fany', '4', 'Buena calidad de la comida'),
(107, 'cafeteria_ffyl', 'Ricardo Torremolinos', '4', 'Sin mucho que comentar por el momento'),
(108, 'CupcakesBrenda', 'Alberto Limón', '5', 'Me gusta la envoltura'),
(109, 'huixin', 'Ana Maribel', '4', 'Excelentes precios '),
(112, 'cafeteria_farq', 'Alma Berenice Balderas carreon ', '5', 'Muy buena comida '),
(113, 'cafeteria_fime', 'Alma Berenice ', '5', 'Muy limpio lugar, excelente comida y muy buen ambiente '),
(115, 'subway', 'Alma Berenice ', '5', 'Me gusta mucho los sandwich que venden es este lugar '),
(116, 'lasalitas', 'Alma Berenice ', '5', 'Muy buen servicio y excelente comida '),
(117, 'BollosBrenda', 'Dany García', '5', 'Los mejores y más ricos bollos de toda Ciudad Universitaria, con mucha variedad y muy accesibles, además la vendedora es muy hermosa <3 '),
(119, 'cafeteria_fime', 'Liz', '3', 'Caro '),
(120, 'cafeteria_facpya', 'Liz', '4', ''),
(121, 'cafeteria_fcb', 'Liz', '5', 'Rico'),
(122, 'cafeteria_fcfm', 'Liz', '2', 'Muy pobre en variedad '),
(123, 'cafeteria_fcq', 'Liz', '3', 'Buena opción de desayunos '),
(124, 'cafeteria_ffyl', 'Liz', '5', 'Recomendada totalmente las tortas y los burritos si no tienes mucho dinero son una buena opción '),
(125, 'cafeteria_fic', 'LiZ', '5', 'Bastante rico '),
(126, 'cafeteria_ftsydh', 'Liz', '4', ''),
(127, 'cafeteria_facdyc', 'Liz', '3', 'Pasable '),
(128, 'cafeteria_farq', 'Liz', '3', 'Pasable'),
(129, 'cafeteria_fod', 'Liz', '3', ''),
(133, 'cafeteria_fime', 'Pedro Candia', '4', 'Buen servicio al momento de pedir, lugar muy limpio, fresco y buena comida'),
(134, 'cafeteria_fime', 'Nacim Athie', '3', 'Esta caro para lo que ofrece'),
(135, 'cafeteria_fic', 'Nacim Athie', '4', 'No esta muy muy bueno, pero cumple su función, esta cómoda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE `negocios` (
  `idnegocio` int(11) NOT NULL,
  `propietario` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_negocio` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alias_negocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `rango_precios` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ubicacion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horarios` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `negocios`
--

INSERT INTO `negocios` (`idnegocio`, `propietario`, `correo`, `nombre_negocio`, `alias_negocio`, `rango_precios`, `ubicacion`, `horarios`, `telefono`, `comentarios`) VALUES
(28, 'Brenda Flores', 'brenda@mail.com', 'Bollos Brenda', 'BollosBrenda', '$$ - $$$', 'FIME UANL', '7 AM - 6 PM', '8125812912', NULL),
(30, 'Daniel Garcia', 'daniel@mail.com', 'Galletas Daniel', 'GalletasDaniel', '$ - $$', 'FIME UANL', '7:00 AM - 6:00 PM', '8132359757', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_negocios`
--

CREATE TABLE `productos_negocios` (
  `idproducto` int(200) NOT NULL,
  `nombre_negocio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos_negocios`
--

INSERT INTO `productos_negocios` (`idproducto`, `nombre_negocio`, `producto`) VALUES
(59, 'BollosBrenda', 'Bollo de Cafe - $20'),
(60, 'BollosBrenda', 'Bollo de Oreo - $15'),
(61, 'BollosBrenda', 'Bollo de Mazapan - $13'),
(62, 'BollosBrenda', 'Bollo de Gansito - $15'),
(63, 'BollosBrenda', 'Bollo de Chocorol - $15'),
(64, 'GalletasDaniel', 'Galletas de Avena - $12'),
(65, 'GalletasDaniel', 'Galletas de Chocolate - $13'),
(66, 'GalletasDaniel', 'Galletas de Chispas - $10'),
(67, 'GalletasDaniel', 'Galletas de Nuez - $13'),
(68, 'GalletasDaniel', 'Galletas de Pasas - $15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indices de la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD PRIMARY KEY (`idnegocio`);

--
-- Indices de la tabla `productos_negocios`
--
ALTER TABLE `productos_negocios`
  ADD PRIMARY KEY (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `negocios`
--
ALTER TABLE `negocios`
  MODIFY `idnegocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productos_negocios`
--
ALTER TABLE `productos_negocios`
  MODIFY `idproducto` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
