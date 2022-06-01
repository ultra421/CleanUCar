-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 01-06-2022 a les 22:09:50
-- Versió del servidor: 10.4.24-MariaDB
-- Versió de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `transversal_v2`
--
CREATE DATABASE IF NOT EXISTS `transversal_v2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `transversal_v2`;

-- --------------------------------------------------------

--
-- Estructura de la taula `imagenes`
--

CREATE TABLE `imagenes` (
  `imagen_id` int(11) NOT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `review_id` int(11) NOT NULL,
  `direccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de la taula `imagenes_lavado`
--

CREATE TABLE `imagenes_lavado` (
  `imagen_id` int(11) NOT NULL,
  `lavado_id` int(11) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `imagenes_lavado`
--

INSERT INTO `imagenes_lavado` (`imagen_id`, `lavado_id`, `direccion`, `descripcion`) VALUES
(8, 21, '557f291b46f4c21bcb73cf3e3c3ceecc.png', 'no desc'),
(9, 22, 'f448a423ae87a653261162691c99f9bb.jpg', 'no desc'),
(11, 24, '1646a95a9da6ecbb24092d645b4ced4f.jpg', 'no desc');

-- --------------------------------------------------------

--
-- Estructura de la taula `lavado`
--

CREATE TABLE `lavado` (
  `lavado_id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `precio` float DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `vehiculos` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `lavado`
--

INSERT INTO `lavado` (`lavado_id`, `nombre`, `ubicacion`, `precio`, `usuario_id`, `vehiculos`, `tipo`) VALUES
(21, 'pepe', 'atopee', 11, 24, 1118, 177),
(22, 'atope pepe', 'nunca pares', 23, 9, 1118, 177),
(24, 'ole pepe otra vez', '(nunca para pepe)', 1, 22, 1118, 145);

-- --------------------------------------------------------

--
-- Estructura de la taula `pagos_lavado`
--

CREATE TABLE `pagos_lavado` (
  `pago_id` int(11) NOT NULL,
  `valido` tinyint(1) NOT NULL,
  `fecha` date DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `lavado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `pagos_lavado`
--

INSERT INTO `pagos_lavado` (`pago_id`, `valido`, `fecha`, `usuario_id`, `lavado_id`) VALUES
(1, 1, '2022-05-30', 22, 22),
(2, 1, '2022-05-30', 22, 21),
(4, 1, '2022-06-01', 22, 22);

-- --------------------------------------------------------

--
-- Estructura de la taula `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `lavado_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `contenido` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de la taula `tipo`
--

CREATE TABLE `tipo` (
  `tipo_id` int(11) NOT NULL,
  `tunel` tinyint(1) DEFAULT NULL,
  `presion` tinyint(1) DEFAULT NULL,
  `mano` tinyint(1) DEFAULT NULL,
  `ecologico` tinyint(1) DEFAULT NULL,
  `aspirado` tinyint(1) DEFAULT NULL,
  `cera` tinyint(1) DEFAULT NULL,
  `pulido` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `tipo`
--

INSERT INTO `tipo` (`tipo_id`, `tunel`, `presion`, `mano`, `ecologico`, `aspirado`, `cera`, `pulido`) VALUES
(129, 0, 0, 0, 0, 0, 0, 0),
(130, 0, 0, 0, 0, 0, 0, 1),
(131, 0, 0, 0, 0, 0, 1, 0),
(132, 0, 0, 0, 0, 0, 1, 1),
(133, 0, 0, 0, 0, 1, 0, 0),
(134, 0, 0, 0, 0, 1, 0, 1),
(135, 0, 0, 0, 0, 1, 1, 0),
(136, 0, 0, 0, 0, 1, 1, 1),
(137, 0, 0, 0, 1, 0, 0, 0),
(138, 0, 0, 0, 1, 0, 0, 1),
(139, 0, 0, 0, 1, 0, 1, 0),
(140, 0, 0, 0, 1, 0, 1, 1),
(141, 0, 0, 0, 1, 1, 0, 0),
(142, 0, 0, 0, 1, 1, 0, 1),
(143, 0, 0, 0, 1, 1, 1, 0),
(144, 0, 0, 0, 1, 1, 1, 1),
(145, 0, 0, 1, 0, 0, 0, 0),
(146, 0, 0, 1, 0, 0, 0, 1),
(147, 0, 0, 1, 0, 0, 1, 0),
(148, 0, 0, 1, 0, 0, 1, 1),
(149, 0, 0, 1, 0, 1, 0, 0),
(150, 0, 0, 1, 0, 1, 0, 1),
(151, 0, 0, 1, 0, 1, 1, 0),
(152, 0, 0, 1, 0, 1, 1, 1),
(153, 0, 0, 1, 1, 0, 0, 0),
(154, 0, 0, 1, 1, 0, 0, 1),
(155, 0, 0, 1, 1, 0, 1, 0),
(156, 0, 0, 1, 1, 0, 1, 1),
(157, 0, 0, 1, 1, 1, 0, 0),
(158, 0, 0, 1, 1, 1, 0, 1),
(159, 0, 0, 1, 1, 1, 1, 0),
(160, 0, 0, 1, 1, 1, 1, 1),
(161, 0, 1, 0, 0, 0, 0, 0),
(162, 0, 1, 0, 0, 0, 0, 1),
(163, 0, 1, 0, 0, 0, 1, 0),
(164, 0, 1, 0, 0, 0, 1, 1),
(165, 0, 1, 0, 0, 1, 0, 0),
(166, 0, 1, 0, 0, 1, 0, 1),
(167, 0, 1, 0, 0, 1, 1, 0),
(168, 0, 1, 0, 0, 1, 1, 1),
(169, 0, 1, 0, 1, 0, 0, 0),
(170, 0, 1, 0, 1, 0, 0, 1),
(171, 0, 1, 0, 1, 0, 1, 0),
(172, 0, 1, 0, 1, 0, 1, 1),
(173, 0, 1, 0, 1, 1, 0, 0),
(174, 0, 1, 0, 1, 1, 0, 1),
(175, 0, 1, 0, 1, 1, 1, 0),
(176, 0, 1, 0, 1, 1, 1, 1),
(177, 0, 1, 1, 0, 0, 0, 0),
(178, 0, 1, 1, 0, 0, 0, 1),
(179, 0, 1, 1, 0, 0, 1, 0),
(180, 0, 1, 1, 0, 0, 1, 1),
(181, 0, 1, 1, 0, 1, 0, 0),
(182, 0, 1, 1, 0, 1, 0, 1),
(183, 0, 1, 1, 0, 1, 1, 0),
(184, 0, 1, 1, 0, 1, 1, 1),
(185, 0, 1, 1, 1, 0, 0, 0),
(186, 0, 1, 1, 1, 0, 0, 1),
(187, 0, 1, 1, 1, 0, 1, 0),
(188, 0, 1, 1, 1, 0, 1, 1),
(189, 0, 1, 1, 1, 1, 0, 0),
(190, 0, 1, 1, 1, 1, 0, 1),
(191, 0, 1, 1, 1, 1, 1, 0),
(192, 0, 1, 1, 1, 1, 1, 1),
(193, 1, 0, 0, 0, 0, 0, 0),
(194, 1, 0, 0, 0, 0, 0, 1),
(195, 1, 0, 0, 0, 0, 1, 0),
(196, 1, 0, 0, 0, 0, 1, 1),
(197, 1, 0, 0, 0, 1, 0, 0),
(198, 1, 0, 0, 0, 1, 0, 1),
(199, 1, 0, 0, 0, 1, 1, 0),
(200, 1, 0, 0, 0, 1, 1, 1),
(201, 1, 0, 0, 1, 0, 0, 0),
(202, 1, 0, 0, 1, 0, 0, 1),
(203, 1, 0, 0, 1, 0, 1, 0),
(204, 1, 0, 0, 1, 0, 1, 1),
(205, 1, 0, 0, 1, 1, 0, 0),
(206, 1, 0, 0, 1, 1, 0, 1),
(207, 1, 0, 0, 1, 1, 1, 0),
(208, 1, 0, 0, 1, 1, 1, 1),
(209, 1, 0, 1, 0, 0, 0, 0),
(210, 1, 0, 1, 0, 0, 0, 1),
(211, 1, 0, 1, 0, 0, 1, 0),
(212, 1, 0, 1, 0, 0, 1, 1),
(213, 1, 0, 1, 0, 1, 0, 0),
(214, 1, 0, 1, 0, 1, 0, 1),
(215, 1, 0, 1, 0, 1, 1, 0),
(216, 1, 0, 1, 0, 1, 1, 1),
(217, 1, 0, 1, 1, 0, 0, 0),
(218, 1, 0, 1, 1, 0, 0, 1),
(219, 1, 0, 1, 1, 0, 1, 0),
(220, 1, 0, 1, 1, 0, 1, 1),
(221, 1, 0, 1, 1, 1, 0, 0),
(222, 1, 0, 1, 1, 1, 0, 1),
(223, 1, 0, 1, 1, 1, 1, 0),
(224, 1, 0, 1, 1, 1, 1, 1),
(225, 1, 1, 0, 0, 0, 0, 0),
(226, 1, 1, 0, 0, 0, 0, 1),
(227, 1, 1, 0, 0, 0, 1, 0),
(228, 1, 1, 0, 0, 0, 1, 1),
(229, 1, 1, 0, 0, 1, 0, 0),
(230, 1, 1, 0, 0, 1, 0, 1),
(231, 1, 1, 0, 0, 1, 1, 0),
(232, 1, 1, 0, 0, 1, 1, 1),
(233, 1, 1, 0, 1, 0, 0, 0),
(234, 1, 1, 0, 1, 0, 0, 1),
(235, 1, 1, 0, 1, 0, 1, 0),
(236, 1, 1, 0, 1, 0, 1, 1),
(237, 1, 1, 0, 1, 1, 0, 0),
(238, 1, 1, 0, 1, 1, 0, 1),
(239, 1, 1, 0, 1, 1, 1, 0),
(240, 1, 1, 0, 1, 1, 1, 1),
(241, 1, 1, 1, 0, 0, 0, 0),
(242, 1, 1, 1, 0, 0, 0, 1),
(243, 1, 1, 1, 0, 0, 1, 0),
(244, 1, 1, 1, 0, 0, 1, 1),
(245, 1, 1, 1, 0, 1, 0, 0),
(246, 1, 1, 1, 0, 1, 0, 1),
(247, 1, 1, 1, 0, 1, 1, 0),
(248, 1, 1, 1, 0, 1, 1, 1),
(249, 1, 1, 1, 1, 0, 0, 0),
(250, 1, 1, 1, 1, 0, 0, 1),
(251, 1, 1, 1, 1, 0, 1, 0),
(252, 1, 1, 1, 1, 0, 1, 1),
(253, 1, 1, 1, 1, 1, 0, 0),
(254, 1, 1, 1, 1, 1, 0, 1),
(255, 1, 1, 1, 1, 1, 1, 0),
(256, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joinDate` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `propietario` tinyint(1) DEFAULT NULL,
  `baneado` tinyint(1) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nombre`, `pass`, `email`, `joinDate`, `telefono`, `genero`, `propietario`, `baneado`, `tipo`) VALUES
(9, 'PepeMontaña', 'pepe', 'ole@pepe.com', '2022-05-23', 2, 'Hombre', 0, 0, '0'),
(22, 'Pepe', 'pepe', 'pepe@pepe.com', '2022-05-23', 323232, 'Hombre', 0, 0, '0'),
(23, 'pepers', 'pepe', 'pepers@aaa', '2022-05-26', 333, 'Hombre', 0, 0, '0'),
(24, 'admin', 'admin', 'admin@admin.com', '2022-05-28', 22222, 'Hombre', 0, 0, '0'),
(25, 'ANON', 'Pene2022', 'elliasPuto@gmail.com', '2022-05-29', 1, 'Otros', 0, 0, '0');

-- --------------------------------------------------------

--
-- Estructura de la taula `vehiculos`
--

CREATE TABLE `vehiculos` (
  `vehiculos_id` int(11) NOT NULL,
  `coches` tinyint(1) DEFAULT NULL,
  `motos` tinyint(1) DEFAULT NULL,
  `furgonetas` tinyint(1) DEFAULT NULL,
  `camiones` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `vehiculos`
--

INSERT INTO `vehiculos` (`vehiculos_id`, `coches`, `motos`, `furgonetas`, `camiones`) VALUES
(1112, 0, 0, 0, 0),
(1113, 0, 0, 0, 1),
(1114, 0, 0, 1, 0),
(1115, 0, 0, 1, 1),
(1116, 0, 1, 0, 0),
(1117, 0, 1, 0, 1),
(1118, 0, 1, 1, 0),
(1119, 0, 1, 1, 1),
(1120, 1, 0, 0, 0),
(1121, 1, 0, 0, 1),
(1122, 1, 0, 1, 0),
(1123, 1, 0, 1, 1),
(1124, 1, 1, 0, 0),
(1125, 1, 1, 0, 1),
(1126, 1, 1, 1, 0),
(1127, 1, 1, 1, 1);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`imagen_id`),
  ADD KEY `imagenes_review` (`review_id`);

--
-- Índexs per a la taula `imagenes_lavado`
--
ALTER TABLE `imagenes_lavado`
  ADD PRIMARY KEY (`imagen_id`),
  ADD KEY `imagen_lavado` (`lavado_id`);

--
-- Índexs per a la taula `lavado`
--
ALTER TABLE `lavado`
  ADD PRIMARY KEY (`lavado_id`),
  ADD KEY `lavado_usuario` (`usuario_id`),
  ADD KEY `lavado_vehiculos` (`vehiculos`),
  ADD KEY `lavado_tipo` (`tipo`);

--
-- Índexs per a la taula `pagos_lavado`
--
ALTER TABLE `pagos_lavado`
  ADD PRIMARY KEY (`pago_id`),
  ADD KEY `pagos_usuario` (`usuario_id`),
  ADD KEY `pagos_lavado` (`lavado_id`);

--
-- Índexs per a la taula `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `review_lavado` (`lavado_id`),
  ADD KEY `review_usuario` (`usuario_id`);

--
-- Índexs per a la taula `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Índexs per a la taula `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índexs per a la taula `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`vehiculos_id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `imagen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `imagenes_lavado`
--
ALTER TABLE `imagenes_lavado`
  MODIFY `imagen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la taula `lavado`
--
ALTER TABLE `lavado`
  MODIFY `lavado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la taula `pagos_lavado`
--
ALTER TABLE `pagos_lavado`
  MODIFY `pago_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la taula `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `tipo`
--
ALTER TABLE `tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT per la taula `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT per la taula `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `vehiculos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_review` FOREIGN KEY (`review_id`) REFERENCES `review` (`review_id`);

--
-- Restriccions per a la taula `imagenes_lavado`
--
ALTER TABLE `imagenes_lavado`
  ADD CONSTRAINT `imagen_lavado` FOREIGN KEY (`lavado_id`) REFERENCES `lavado` (`lavado_id`);

--
-- Restriccions per a la taula `lavado`
--
ALTER TABLE `lavado`
  ADD CONSTRAINT `lavado_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`tipo_id`),
  ADD CONSTRAINT `lavado_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`),
  ADD CONSTRAINT `lavado_vehiculos` FOREIGN KEY (`vehiculos`) REFERENCES `vehiculos` (`vehiculos_id`);

--
-- Restriccions per a la taula `pagos_lavado`
--
ALTER TABLE `pagos_lavado`
  ADD CONSTRAINT `pagos_lavado` FOREIGN KEY (`lavado_id`) REFERENCES `lavado` (`lavado_id`),
  ADD CONSTRAINT `pagos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);

--
-- Restriccions per a la taula `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_lavado` FOREIGN KEY (`lavado_id`) REFERENCES `lavado` (`lavado_id`),
  ADD CONSTRAINT `review_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
