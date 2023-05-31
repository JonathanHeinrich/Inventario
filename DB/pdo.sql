-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-05-2023 a las 17:09:10
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20727973_inventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(7) NOT NULL,
  `categoria_nombre` varchar(50) NOT NULL,
  `categoria_ubicacion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int(10) NOT NULL,
  `cliente_nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cliente_servicio` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cliente_contacto` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cliente_direccion` varchar(80) NOT NULL,
  `cliente_dp` varchar(40) NOT NULL,
  `cliente_pago` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `cliente_nombre`, `cliente_servicio`, `cliente_contacto`, `cliente_direccion`, `cliente_dp`, `cliente_pago`) VALUES
(37, 'Francisco Ledezma', 'Internet', '8992342448', '', '', '2023-05-30'),
(38, 'Angeles', 'Internet', '8993411503', '', '', '2023-05-30'),
(39, 'Esteban Alvarez', 'Internet', '8941436517', '', '', '2023-05-30'),
(40, 'Antonio Martinez', 'Internet', '8231004188', '', '', '2023-05-30'),
(41, 'Diobenny Martinez', 'Internet', '8998717274', '', '', '2023-05-30'),
(42, 'Azucena', 'Internet', '8991463647', '', '', '2023-05-30'),
(43, 'Kevin', 'Internet', '8991165130', '', '', '2023-05-30'),
(44, 'Adriana Soberon', 'Internet', '8991569535', 'Prueba', 'Prueba', '2023-05-30'),
(45, 'Martha Olivos', 'Internet', '8991052101', '', '', '2023-05-30'),
(46, 'Isai Tienda Olivos', 'Internet', '8998735694', '', '', '2023-05-30'),
(47, 'Zayda Olivos', 'Internet', '8995243218', '', '', '2023-05-30'),
(48, 'Liliana Lirios', 'Internet', '8991173102', '', '', '2023-05-30'),
(49, 'Roman Olivos', 'Internet', '8993528564', '', '', '2023-05-30'),
(50, 'Blanca Lirios', 'Internet', '8992494434', '', '', '2023-05-30'),
(51, 'Alex Blade', 'Internet', '8991555089', '', '', '2023-05-30'),
(52, 'Salome Lirios', 'Internet', '8992587199', '', '', '2023-05-30'),
(53, 'Brian Lirios', 'Internet', '0000000000', '', '', '2023-05-30'),
(54, 'Lorena', 'Internet', '8992176952', '', '', '2023-05-30'),
(55, 'Lady Olivos', 'Internet', '8991050095', '', '', '2023-05-30'),
(56, 'Erika y Edwin', 'Internet', '8123988823', '', '', '2023-05-30'),
(57, 'Pedro Olivos', 'Internet', '7681112875', '', '', '2023-05-30'),
(58, 'Marco Lirios', 'Internet', '8332850663', '', '', '2023-05-30'),
(59, 'Diego Olivos', 'Internet', '8994343679', '', '', '2023-05-30'),
(60, 'Don Jesus Lirios', 'Internet', '7821478234', '', '', '2023-05-30'),
(61, 'Hander Lirios', 'Internet', '8991541573', '', '', '2023-05-30'),
(62, 'vecina moto wero', 'Internet', '0000000000', '', '', '2023-05-30'),
(67, 'Eduardo Burruel', 'IPTV', '6622273144', 'NA', 'Dia 1', '2023-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int(20) NOT NULL,
  `producto_codigo` varchar(70) NOT NULL,
  `producto_nombre` varchar(70) NOT NULL,
  `producto_precio` decimal(30,2) NOT NULL,
  `producto_stock` int(25) NOT NULL,
  `producto_foto` varchar(500) NOT NULL,
  `categoria_id` int(7) NOT NULL,
  `usuario_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(10) NOT NULL,
  `usuario_nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_apellido` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_clave` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_email` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_pago` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_usuario`, `usuario_clave`, `usuario_email`, `fecha_pago`) VALUES
(1, 'Administrador', 'Principal', 'Administrador', '$2y$10$EPY9LSLOFLDDBriuJICmFOqmZdnDXxLJG8YFbog5LcExp77DBQvgC', '', '2023-05-16'),
(2, 'Jonathan', 'Martinez', 'Jonathan', '$2y$10$qaQ39NGpKgPHEC2VE/vPreLU7NSzoMCLR6rdIWZ0s6O1SGS7yjMD6', 'Heinrich@outlook.com', '2023-05-16'),
(7, 'JonathanHeinrich', 'Heinrich Martinez', 'Jonathan500', '$2y$10$CnD0W0VxWJqyBrkisPSbBe5C/mkyE4q0ffgH5jAKs5orWLlqd7gi.', 'Heinrrich@outlook.com', '2023-05-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `producto_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
