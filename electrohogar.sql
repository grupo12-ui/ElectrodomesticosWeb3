-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2024 a las 11:13:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `electrohogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `idsucursal` int(11) DEFAULT NULL,
  `estado` enum('activo','inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `paterno`, `materno`, `email`, `telefono`, `idsucursal`, `estado`) VALUES
(1, 'Jose', 'Lopez', 'Mendez', 'jose.lopez@example.com', '5551112', 1, 'activo'),
(2, 'Elena', 'Martinez', 'Gomez', 'elena.martinez@example.com', '5552222', 2, 'activo'),
(3, 'Raul', 'Sanchez', 'Perez', 'raul.sanchez@example.com', '5553333', 3, 'activo'),
(4, 'Paola', 'Diaz', 'Lopez', 'paola.diaz@example.com', '5554444', 4, 'activo'),
(5, 'Carlos', 'Perez', 'Castillo', 'carlos.perez@example.com', '5555555', 5, 'activo'),
(6, 'Angela', 'Garcia', 'Martinez', 'angela.garcia@example.com', '5556666', 6, 'activo'),
(7, 'Marcos', 'Ortiz', 'Rodriguez', 'marcos.ortiz@example.com', '5557777', 7, 'activo'),
(8, 'Fernanda', 'Suarez', 'Romero', 'fernanda.suarez@example.com', '5558888', 8, 'activo'),
(9, 'Lucia', 'Vargas', 'Gonzalez', 'lucia.vargas@example.com', '5559999', 9, 'activo'),
(10, 'Diego', 'Morales', 'Nunez', 'diego.morales@example.com', '5550000', 10, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `nombre`, `marca`, `categoria`, `precio`, `stock`, `estado`) VALUES
(1, 'Refrigerador Samsung 450L', 'Samsung', 'LB', 1500.99, 11, 'activo'),
(2, 'Lavadora LG Turbo 9kg', 'LG', 'LB', 950.50, 10, 'activo'),
(3, 'Microondas Panasonic 35L', 'Panasonic', 'PAE', 130.75, 18, 'activo'),
(4, 'Aspiradora Electrolux X2500', 'Electrolux', 'PAE', 210.99, 14, 'activo'),
(5, 'Smart TV Sony 60\"', 'Sony', 'LM', 800.89, 6, 'activo'),
(6, 'Congelador Mabe 250L', 'Mabe', 'LB', 650.25, 8, 'activo'),
(7, 'Horno Eléctrico Oster 50L', 'Oster', 'PAE', 150.30, 25, 'activo'),
(8, 'Batidora KitchenAid Artisan', 'KitchenAid', 'PAE', 320.99, 12, 'activo'),
(9, 'Computadora HP EliteBook', 'HP', 'LG', 1050.99, 4, 'activo'),
(10, 'Impresora Epson EcoTank Pro', 'Epson', 'LG', 180.45, 12, 'activo'),
(11, 'Aire Acondicionado Daikin 15000BTU', 'Daikin', 'LB', 900.75, 5, 'activo'),
(12, 'Televisor Samsung 70\" QLED', 'Samsung', 'LM', 1300.00, 7, 'activo'),
(13, 'Barra de Sonido Bose 700', 'Bose', 'LM', 500.25, 10, 'activo'),
(14, 'Estufa Whirlpool 5 Quemadores', 'Whirlpool', 'LB', 750.89, 6, 'activo'),
(15, 'Cafetera Philips Serie 5000', 'Philips', 'PAE', 190.50, 20, 'activo'),
(16, 'Secadora LG 10kg', 'LG', 'LB', 1150.00, 5, 'activo'),
(17, 'Plancha Rowenta ProMaster', 'Rowenta', 'PAE', 100.99, 30, 'activo'),
(18, 'Sistema de Audio Sony 2000W', 'Sony', 'LM', 550.25, 12, 'activo'),
(19, 'Monitor Dell UltraSharp 32\"', 'Dell', 'LG', 500.00, 9, 'activo'),
(20, 'Smartwatch Apple Ultra', 'Apple', 'LG', 450.99, 18, 'activo'),
(21, 'Licuadora Ninja Pro 1200W', 'Ninja', 'PAE', 150.50, 15, 'activo'),
(22, 'Deshumidificador Midea 30L', 'Midea', 'LB', 230.89, 10, 'activo'),
(23, 'Tablet Samsung Galaxy Tab S9', 'Samsung', 'LG', 850.00, 8, 'activo'),
(24, 'Teatro en Casa Yamaha 7.1', 'Yamaha', 'LM', 700.00, 6, 'activo'),
(25, 'Purificador de Aire Dyson Pure Cool', 'Dyson', 'PAE', 320.50, 12, 'activo'),
(26, 'Ventilador de Torre', 'Honeywell', 'Ventiladores', 80.00, 15, 'inactivo'),
(27, 'Ventilador de Pared', 'Imaco', 'Ventiladores', 50.00, 18, 'inactivo'),
(28, 'Calefactor Eléctrico', 'Black+Decker', 'Calefactores', 100.00, 10, 'inactivo'),
(29, 'Calefactor Cerámico', 'Delonghi', 'Calefactores', 120.00, 8, 'inactivo'),
(30, 'Calefactor de Aceite', 'Midea', 'Calefactores', 150.00, 5, 'inactivo'),
(31, '105', 'Samsungg', 'LB', 123.20, 12, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idsucursal` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idvendedor` int(11) DEFAULT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `horarios` varchar(50) DEFAULT NULL,
  `iframe` varchar(1000) NOT NULL,
  `estado` enum('activo','desactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idsucursal`, `nombre`, `idvendedor`, `direccion`, `telefono`, `horarios`, `iframe`, `estado`) VALUES
(1, 'Monoblock A', 1, 'Avenida Villazón, Plaza del Bicentenario, La Paz, Bolivia.', '22412345', 'Lun-Vie 08:00-18:00, Sáb 11:00-17:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2274.607399161532!2d-68.1313191462247!3d-16.504960860184664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2064df652367%3A0xddb4c11ab8c8d666!2sMonoblock%20UMSA!5e0!3m2!1sen!2sbo!4v1731902222115!5m2!1sen!2sbo', 'activo'),
(2, 'Monoblock B', 2, 'Avenida Villazón, Plaza del Bicentenario, La Paz, Bolivia.', '72567890', 'Lun-Vie 10:00-19:00, Sáb 10:00-14:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2274.607399161532!2d-68.1313191462247!3d-16.504960860184664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2064df652367%3A0xddb4c11ab8c8d666!2sMonoblock%20UMSA!5e0!3m2!1sen!2sbo!4v1731902222115!5m2!1sen!2sbo', 'activo'),
(3, 'Facultad Medicina', 3, 'Calle 27 de Cota Cota, Zona Sur, La Paz, Bolivia.', '22423456', 'Lun-Vie 08:30-17:30, Sáb 08:30-12:30', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21637.945663586135!2d-68.1465754423701!3d-16.521829762283346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206520793ddd%3A0x53f6df346cc69976!2sHigher%20University%20of%20San%20Andr%C3%A9s%20(UMSA)!5e0!3m2!1sen!2sbo!4v1728260147226!5m2!1sen!2sbo', 'activo'),
(4, 'Teleferico Blanco - Triangular', 4, 'Avenida del Poeta, La Paz, Bolivia.', '72534567', 'Lun-Vie 09:00-18:00, Sáb 09:00-13:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61206.956886777756!2d-68.19296817832033!3d-16.5041324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20603f4cac81%3A0xb578b24edd4a4a88!2sTelef%C3%A9rico%20L%C3%ADnea%20Blanca%20-%20Estaci%C3%B3n%20San%20Jorge!5e0!3m2!1sen!2sbo!4v1731902600061!5m2!1sen!2sbo', 'activo'),
(5, 'Plaza de la Loba', 5, 'Av. Hector Ormachea, La Paz, Bolivia.', '22445678', 'Lun-Vie 10:00-19:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.965676820966!2d-68.10755569652432!3d-16.527830355617702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20e60d69c9e7%3A0x6ddb964fd3f11a53!2sPlaza%20de%20la%20Loba%2C%20Av.%20Hector%20Ormachea%2C%20La%20Paz!5e0!3m2!1sen!2sbo!4v1731902723620!5m2!1sen!2sbo', 'activo'),
(6, 'Buenos Aires', 6, ' Av. Buenos Aires 625, La Paz, Bolivia.', '72556789', 'Lun-Sáb 08:00-17:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912.8027423305848!2d-68.14508767260844!3d-16.495502354700207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edfbce775e937%3A0x222737fcf139a2c5!2sSTARPHONE%20Centro%20de%20Garant%C3%ADa%20La%20Paz!5e0!3m2!1sen!2sbo!4v1731902966564!5m2!1sen!2sbo', 'activo'),
(7, 'Metropolitana 14 de Septiembre', 7, 'Plaza 14 de Septiembre, Cochabamba, Bolivia.', '22467890', 'Lun-Vie 09:00-18:00, Sáb 09:00-12:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2330.2146164263877!2d-66.15825216165125!3d-17.393844815435735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373f71d56cae7%3A0x1044c8613655e441!2sSeptember%2014%20Square!5e0!3m2!1sen!2sbo!4v1731903073364!5m2!1sen!2sbo', 'activo'),
(8, 'Metropolitana 24 de Septiembre', 8, 'Plaza 24 de Septiembre, Santa Cruz, Bolivia.', '72578901', 'Lun-Vie 10:00-20:00, Sáb 10:00-15:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7820.997254327817!2d-63.180686019708354!3d-17.78350131954762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e988a71e527d%3A0x44de583314bf5b6e!2sSeptember%2024%20Square!5e0!3m2!1sen!2sbo!4v1731903175606!5m2!1sen!2sbo', 'activo'),
(9, 'Chaqueño', 9, 'Av. Circunvalación y Plaza del Chaqueño, Tarija, Bolivia.', '22489012', 'Lun-Vie 08:00-17:00, Sáb 08:00-12:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1312.289233349784!2d-64.72929479976447!3d-21.51890145572013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x940649d19de80481%3A0xb1528852657e46fd!2sFogon%20del%20Pago!5e0!3m2!1sen!2sbo!4v1731903369027!5m2!1sen!2sbo', 'activo'),
(10, 'Santos Dumont', 10, 'Entre Av. Santos Dumont y Wenceslao Hurtado, Santa Cruz, Bolivia.', '72590123', 'Lun-Sáb 09:00-18:00', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1597.0426276097212!2d-63.184323310558646!3d-17.818517420222378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e954577bdf91%3A0xba63bd4c8c0bf4df!2sParqueo%204%20Radio%20Movil%20Comarapa!5e0!3m2!1sen!2sbo!4v1731903540191!5m2!1sen!2sbo', 'activo'),
(11, '1', 1, '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `rol` enum('administrador','usuario') NOT NULL,
  `fecha_reacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `clave`, `rol`, `fecha_reacion`) VALUES
(1, 'joel', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '', '2024-11-18 06:13:32'),
(2, 'alejandro', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'administrador', '2024-11-18 09:56:07'),
(3, 'carla', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'administrador', '2024-11-18 09:56:43'),
(4, 'ludwinka', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'administrador', '2024-11-18 09:57:02'),
(5, 'marcelo', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 'usuario', '2024-11-18 09:57:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idvendedor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`idvendedor`, `nombre`, `paterno`, `materno`, `telefono`, `estado`) VALUES
(1, 'Carlos', 'Perez', 'Lopez', '5551234', 'activo'),
(2, 'Ana', 'Gonzalez', 'Torres', '5555678', 'activo'),
(3, 'Luis', 'Martinez', 'Sanchez', '5558765', 'inactivo'),
(4, 'Maria', 'Rodriguez', 'Castro', '5553456', 'activo'),
(5, 'Juan', 'Fernandez', 'Diaz', '5556543', 'activo'),
(6, 'Laura', 'Suarez', 'Ortiz', '5557890', 'inactivo'),
(7, 'Pedro', 'Ramirez', 'Perez', '5554321', 'activo'),
(8, 'Marta', 'Hernandez', 'Lopez', '5552109', 'activo'),
(9, 'Sofia', 'Castillo', 'Garcia', '5550987', 'inactivo'),
(10, 'Miguel', 'Romero', 'Nunez', '5558760', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `idvendedor` int(11) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `idsucursal` int(11) DEFAULT NULL,
  `estado` enum('activo','desactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `total`, `idvendedor`, `idcliente`, `idproducto`, `idsucursal`, `estado`) VALUES
(16, 500.00, 1, 1, 1, 6, 'activo'),
(17, 900.00, 2, 2, 5, 3, 'activo'),
(18, 600.00, 3, 3, 3, 2, 'activo'),
(19, 200.00, 4, 4, 8, 2, 'activo'),
(20, 100.00, 5, 5, 13, 1, 'activo'),
(21, 80.00, 6, 6, 26, 6, 'activo'),
(22, 400.00, 7, 7, 11, 7, 'activo'),
(23, 100.00, 8, 8, 28, 10, 'activo'),
(24, 60.00, 9, 9, 19, 10, 'activo'),
(25, 150.00, 10, 10, 30, 9, 'activo'),
(26, 250.00, 1, 2, 9, 1, 'activo'),
(27, 50.00, 2, 3, 16, 8, 'activo'),
(28, 110.00, 3, 4, 21, 7, 'activo'),
(29, 120.00, 4, 5, 29, 4, 'activo'),
(30, 40.00, 5, 6, 25, 2, 'activo'),
(31, 12.07, 7, 7, 7, 7, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idsucursal` (`idsucursal`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idsucursal`),
  ADD KEY `idvendedor` (`idvendedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idvendedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `idvendedor` (`idvendedor`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idsucursal` (`idsucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idsucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idvendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `sucursal_ibfk_1` FOREIGN KEY (`idvendedor`) REFERENCES `vendedor` (`idvendedor`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idvendedor`) REFERENCES `vendedor` (`idvendedor`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`),
  ADD CONSTRAINT `venta_ibfk_4` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
