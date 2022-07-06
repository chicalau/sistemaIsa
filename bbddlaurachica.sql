-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 20:57:39
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddlaurachica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isa_cliente`
--

CREATE TABLE `isa_cliente` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nombreCliente` varchar(50) DEFAULT NULL,
  `tipoCliente` char(10) NOT NULL,
  `genero` enum('m','f','nd') DEFAULT NULL,
  `fechaNacimiento` datetime DEFAULT NULL,
  `telefono` int(20) UNSIGNED NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `isa_cliente`
--

INSERT INTO `isa_cliente` (`id_cliente`, `nombreCliente`, `tipoCliente`, `genero`, `fechaNacimiento`, `telefono`, `direccion`, `email`) VALUES
(9023, 'luz s marin', 'persona', 'f', '1956-06-03 00:00:00', 9021, 'calle 23', 'cl@gmail.com'),
(7011285, 'julian restrepo', 'persona', 'm', '1956-04-12 00:00:00', 288845, 'cra 55 #48', 'jres@gmail.com'),
(1037622127, 'laura chica', 'persona', 'f', '1992-10-23 13:24:02', 3052652549, 'calle 37 b sur', 'laurachica.m@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isa_pedido`
--

CREATE TABLE `isa_pedido` (
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `fechaPedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `ocasion` varchar(10) NOT NULL,
  `especificaciones` text NOT NULL,
  `fechadeEntrega` date NOT NULL,
  `domicilio` tinyint(4) NOT NULL,
  `lugarEntrega` varchar(100) NOT NULL,
  `id_sucursal` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `isa_pedido`
--

INSERT INTO `isa_pedido` (`id_pedido`, `fechaPedido`, `ocasion`, `especificaciones`, `fechadeEntrega`, `domicilio`, `lugarEntrega`, `id_sucursal`, `id_cliente`) VALUES
(1, '2021-12-11 12:30:55', '0000-00-00', 'empaque con cinta roja y verde', '2021-12-11', 1, 'sucursal envigado cityplaza', 3, 1037622127),
(3, '2021-12-11 12:33:42', '0000-00-00', 'torta con decoracion dibujo de unicornio rosado y morado claro', '2021-12-11', 1, 'city plaza', 3, 1037622127),
(5, '2021-02-04 05:00:00', '0000-00-00', 'decoracion bodas de plata', '2021-02-20', 0, 'sucursal principal', 5, 7011285),
(6, '2021-06-05 05:00:00', '0000-00-00', 'decoracion con camiseta de sel colombia y balones alrededor', '2021-06-10', 0, 'sucursal principal', 5, 7011285),
(10, '0000-00-00 00:00:00', '0000-00-00', 'decoracion con flores de muchosa colores y numero 56', '2021-10-20', 0, 'sucu principal envigado', 7, 9023),
(16, '2021-10-23 05:00:00', '', 'empaque de regalo', '2021-10-31', 0, 'cityplaza', 1, 1037622127),
(19, '0000-00-00 00:00:00', '', '', '2021-10-25', 1, 'cityplaza', 6, 1037622127),
(20, '0000-00-00 00:00:00', '', '', '2021-10-25', 1, 'cityplaza', 6, 1037622127),
(21, '0000-00-00 00:00:00', '', '', '2021-10-23', 0, 'sucursal principal', 1, 1037622127),
(22, '0000-00-00 00:00:00', '', '', '2021-10-23', 0, 'noce', 4, 1037622127);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isa_producto`
--

CREATE TABLE `isa_producto` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `precioProducto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `isa_producto`
--

INSERT INTO `isa_producto` (`id_producto`, `nombreProducto`, `precioProducto`) VALUES
(1, 'T. negra sin dec -4porciones', 11200),
(2, 'T.negra sin dec -10porciones', 28000),
(3, 'T.negra sin dec -25porciones', 70000),
(4, 'T.negra sin dec -40porciones', 112000),
(5, 'T.negra sin dec -75porciones', 210000),
(6, 'T.negra sin dec -90porciones', 252000),
(7, 'T.negra sin dec -120porciones', 336000),
(8, 'T.negra decorada -4 porciones', 12800),
(9, 'T.negra decorada -10porciones', 32000),
(10, 'T.negra decorada -25porciones', 80000),
(11, 'T.negra decorada -40porciones', 128000),
(12, 'T.negra decorada -75porciones', 240000),
(13, 'T.negra decorada -90porciones', 288000),
(14, 'T.negra decorada -120porciones', 384000),
(15, 'T.naranja sin dec -4porciones', 10000),
(16, 'T.naranja sin dec -10porciones', 25000),
(17, 'T.naranja sin dec -25porciones', 62500),
(18, 'T.naranja sin dec -40porciones', 100000),
(19, 'T.naranja sin dec -75porciones', 187000),
(20, 'T.naranja sin dec -90porciones', 225000),
(21, 'T.naranja sin dec -120porciones', 300000),
(22, 'T.naranja decorada -4porciones', 11600),
(23, 'T.naranja decorada -10porciones', 29000),
(24, 'T.naranja decorada -25porciones', 72500),
(25, 'T.naranja decorada -40porciones', 116000),
(26, 'T.naranja decorada -75porciones', 217500),
(27, 'T.naranja decorada -90porciones', 261000),
(28, 'T.naranja decorada -120porciones', 348000),
(29, 'Bizcocho sin dec -4porciones', 12800),
(30, 'Bizcocho sin dec -10porciones', 32000),
(31, 'Bizcocho sin dec -25porciones', 80000),
(32, 'Bizcocho sin dec -40porciones', 128000),
(33, 'Bizcocho sin dec -75porciones', 240000),
(34, 'Bizcocho sin dec -90porciones', 288000),
(35, 'Bizcocho sin dec -120porciones', 384000),
(36, 'Bizcocho decorado -4porciones', 14400),
(37, 'Bizcocho decorado -10porciones', 36000),
(38, 'Bizcocho decorado -25porciones', 90000),
(39, 'Bizcocho decorado -40porciones', 144000),
(40, 'Bizcocho decorado -75porciones', 270000),
(41, 'Bizcocho decorado -90porciones', 324000),
(42, 'Bizcocho decorado -120porciones', 432000),
(43, 'T.chocolate decorada -4porciones', 12200),
(44, 'T.chocolate decorada -10porciones', 30500),
(45, 'T.chocolate decorada -25porciones', 76000),
(46, 'T.chocolate decorada -36porciones', 109000),
(47, 'T.chocolate decorada -50porciones', 152000),
(48, 'T.chocolate decorada -75porciones', 228700),
(49, 'T.chocolate decorada -90porciones', 274500),
(50, 'T.chocolate decorada -120porciones', 366000),
(51, 'T.maria luisa sin dec -10porciones', 26500),
(52, 'T.maria luisa sin dec -22porciones', 58300),
(53, 'T.maria luisa sin dec -36porciones', 95400),
(54, 'T.maria luisa sin dec -60porciones', 159000),
(55, 'T.maria luisa sin dec -80porciones', 212000),
(56, 'T.maria luisa sin dec -90porciones', 238500),
(57, 'T.maria luisa sin dec -120porciones', 318000),
(58, 'T.refrigerada fresa/piña -10porciones', 27000),
(59, 'T.refrigerada fresa/piña -20porciones', 54000),
(60, 'T.refrigerada fresa/piña -30porciones', 81000),
(61, 'T.refrigerada fresa/piña -40porciones', 108000),
(62, 'T.refrigerada melocoton -10porciones', 29000),
(63, 'T.refrigerada melocoton -20porciones', 58000),
(64, 'T.refrigerada melocoton -30porciones', 87000),
(65, 'T.refrigerada melocoton -40porciones', 116000),
(66, 'T.especial 7 sabores -10porciones', 32000),
(67, 'T.especial 7 sabores -20porciones', 64000),
(68, 'T.especial 7 sabores -30porciones', 96000),
(69, 'T.especial 7 sabores -40porciones', 128000),
(70, 'T.especial 7 sabores -50porciones', 160000),
(80, 'Especial navideño', 55000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isa_productospedido`
--

CREATE TABLE `isa_productospedido` (
  `id_productospedido` int(10) UNSIGNED NOT NULL,
  `cantidadProducto` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `id_pedido` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `isa_productospedido`
--

INSERT INTO `isa_productospedido` (`id_productospedido`, `cantidadProducto`, `id_producto`, `id_pedido`) VALUES
(1, 1, 47, 1),
(3, 1, 25, 3),
(5, 1, 70, 10),
(7, 1, 40, 6),
(8, 1, 48, 5),
(9, 1, 19, 3),
(10, 1, 54, 5),
(11, 1, 5, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isa_sucursal`
--

CREATE TABLE `isa_sucursal` (
  `id_sucursal` int(10) UNSIGNED NOT NULL,
  `nombreSucursal` varchar(50) NOT NULL,
  `direccionSucursal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `isa_sucursal`
--

INSERT INTO `isa_sucursal` (`id_sucursal`, `nombreSucursal`, `direccionSucursal`) VALUES
(1, 'Principal', 'calle 1000 #27-1, Envigado'),
(2, 'Envigado Euro', 'cra 43b sur #23-8 local 5122, Envigado'),
(3, 'Envigado Cityplaza', 'cll 37b sur #25e-53 local 121, Envigado'),
(4, 'Itagui parque', 'cll 55 #5e-2, Itagui'),
(5, 'Itagui guayabal', 'cra 6 #2-11, Itagui'),
(6, 'Medellin centro', 'diag 25 #3-5, Medellin'),
(7, 'Poblado lleras', 'calle 10 #5-6, Medellin'),
(8, 'Estadio', 'cra 24e #16-1, Medellin'),
(11, 'Bello parque principal', 'cra 45 #29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `isa_cliente`
--
ALTER TABLE `isa_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `isa_pedido`
--
ALTER TABLE `isa_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `isa_producto`
--
ALTER TABLE `isa_producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `isa_productospedido`
--
ALTER TABLE `isa_productospedido`
  ADD PRIMARY KEY (`id_productospedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `isa_sucursal`
--
ALTER TABLE `isa_sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `isa_pedido`
--
ALTER TABLE `isa_pedido`
  MODIFY `id_pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `isa_producto`
--
ALTER TABLE `isa_producto`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `isa_productospedido`
--
ALTER TABLE `isa_productospedido`
  MODIFY `id_productospedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `isa_sucursal`
--
ALTER TABLE `isa_sucursal`
  MODIFY `id_sucursal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `isa_pedido`
--
ALTER TABLE `isa_pedido`
  ADD CONSTRAINT `isa_pedido_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `isa_sucursal` (`id_sucursal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `isa_pedido_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `isa_cliente` (`id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `isa_productospedido`
--
ALTER TABLE `isa_productospedido`
  ADD CONSTRAINT `isa_productospedido_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `isa_producto` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `isa_productospedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `isa_pedido` (`id_pedido`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
