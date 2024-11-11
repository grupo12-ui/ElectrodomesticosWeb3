-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 03:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrohogar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `idsucursal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `paterno`, `materno`, `email`, `telefono`, `idsucursal`) VALUES
(1, 'Jose', 'Lopez', 'Mendez', 'jose.lopez@example.com', '5551111', 1),
(2, 'Elena', 'Martinez', 'Gomez', 'elena.martinez@example.com', '5552222', 2),
(3, 'Raul', 'Sanchez', 'Perez', 'raul.sanchez@example.com', '5553333', 3),
(4, 'Paola', 'Diaz', 'Lopez', 'paola.diaz@example.com', '5554444', 4),
(5, 'Carlos', 'Perez', 'Castillo', 'carlos.perez@example.com', '5555555', 5),
(6, 'Angela', 'Garcia', 'Martinez', 'angela.garcia@example.com', '5556666', 6),
(7, 'Marcos', 'Ortiz', 'Rodriguez', 'marcos.ortiz@example.com', '5557777', 7),
(8, 'Fernanda', 'Suarez', 'Romero', 'fernanda.suarez@example.com', '5558888', 8),
(9, 'Lucia', 'Vargas', 'Gonzalez', 'lucia.vargas@example.com', '5559999', 9),
(10, 'Diego', 'Morales', 'Nunez', 'diego.morales@example.com', '5550000', 10);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre`, `marca`, `categoria`, `precio`, `stock`) VALUES
(1, 'Lavadora 8kg', 'Samsung', 'Lavadoras', 500.00, 10),
(2, 'Lavadora 9kg', 'LG', 'Lavadoras', 550.00, 8),
(3, 'Lavadora Carga Frontal', 'Bosch', 'Lavadoras', 600.00, 5),
(4, 'Refrigerador 300L', 'Whirlpool', 'Refrigeradores', 800.00, 4),
(5, 'Refrigerador 400L', 'LG', 'Refrigeradores', 900.00, 6),
(6, 'Refrigerador No Frost', 'Samsung', 'Refrigeradores', 950.00, 3),
(7, 'Horno Microondas 20L', 'Panasonic', 'Microondas', 150.00, 12),
(8, 'Horno Microondas Grill', 'LG', 'Microondas', 200.00, 9),
(9, 'Horno Microondas Inverter', 'Samsung', 'Microondas', 250.00, 6),
(10, 'Cocina 4 Hornallas', 'Mabe', 'Cocinas', 350.00, 8),
(11, 'Cocina 5 Hornallas', 'Electrolux', 'Cocinas', 400.00, 5),
(12, 'Cocina Vitrocerámica', 'Samsung', 'Cocinas', 450.00, 7),
(13, 'Aspiradora 1200W', 'Philips', 'Aspiradoras', 100.00, 10),
(14, 'Aspiradora 1500W', 'Bosch', 'Aspiradoras', 120.00, 6),
(15, 'Aspiradora Sin Bolsa', 'LG', 'Aspiradoras', 140.00, 4),
(16, 'Plancha a Vapor', 'Philips', 'Planchas', 50.00, 15),
(17, 'Plancha Cerámica', 'Rowenta', 'Planchas', 70.00, 10),
(18, 'Plancha Vertical', 'Tefal', 'Planchas', 90.00, 7),
(19, 'Licuadora 1.5L', 'Oster', 'Licuadoras', 60.00, 20),
(20, 'Licuadora 2L', 'Black+Decker', 'Licuadoras', 75.00, 15),
(21, 'Licuadora de Alta Potencia', 'Nutribullet', 'Licuadoras', 100.00, 10),
(22, 'Extractor de Jugos', 'Oster', 'Extractores', 110.00, 12),
(23, 'Extractor Prensado en Frío', 'Hurom', 'Extractores', 200.00, 8),
(24, 'Extractor de Cítricos', 'Philips', 'Extractores', 30.00, 20),
(25, 'Ventilador de Pie', 'Imaco', 'Ventiladores', 40.00, 25),
(26, 'Ventilador de Torre', 'Honeywell', 'Ventiladores', 80.00, 15),
(27, 'Ventilador de Pared', 'Imaco', 'Ventiladores', 50.00, 18),
(28, 'Calefactor Eléctrico', 'Black+Decker', 'Calefactores', 100.00, 10),
(29, 'Calefactor Cerámico', 'Delonghi', 'Calefactores', 120.00, 8),
(30, 'Calefactor de Aceite', 'Midea', 'Calefactores', 150.00, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sucursal`
--

CREATE TABLE `sucursal` (
  `idsucursal` int(11) NOT NULL,
  `idvendedor` int(11) DEFAULT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sucursal`
--

INSERT INTO `sucursal` (`idsucursal`, `idvendedor`, `direccion`, `telefono`) VALUES
(1, 1, 'Calle Principal 123', '5550011'),
(2, 2, 'Avenida Central 456', '5550022'),
(3, 3, 'Boulevard Industrial 789', '5550033'),
(4, 4, 'Calle 7 de Agosto 321', '5550044'),
(5, 5, 'Avenida Libertador 654', '5550055'),
(6, 6, 'Calle del Comercio 987', '5550066'),
(7, 7, 'Zona Norte 654', '5550077'),
(8, 8, 'Avenida Sur 321', '5550088'),
(9, 9, 'Calle del Este 987', '5550099'),
(10, 10, 'Boulevard Oeste 123', '5550100');

-- --------------------------------------------------------

--
-- Table structure for table `vendedores`
--

CREATE TABLE `vendedores` (
  `idvendedor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendedores`
--

INSERT INTO `vendedores` (`idvendedor`, `nombre`, `paterno`, `materno`, `telefono`, `estado`) VALUES
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
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `idvendedor` int(11) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `idsucursal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`idventa`, `total`, `imagen`, `idvendedor`, `idcliente`, `idproducto`, `idsucursal`) VALUES
(1, 500.00, NULL, 1, 1, 1, NULL),
(2, 900.00, NULL, 2, 2, 5, NULL),
(3, 600.00, NULL, 3, 3, 3, NULL),
(4, 200.00, NULL, 4, 4, 8, NULL),
(5, 100.00, NULL, 5, 5, 13, NULL),
(6, 80.00, NULL, 6, 6, 26, NULL),
(7, 400.00, NULL, 7, 7, 11, NULL),
(8, 100.00, NULL, 8, 8, 28, NULL),
(9, 60.00, NULL, 9, 9, 19, NULL),
(10, 150.00, NULL, 10, 10, 30, NULL),
(11, 250.00, NULL, 1, 2, 9, NULL),
(12, 50.00, NULL, 2, 3, 16, NULL),
(13, 110.00, NULL, 3, 4, 21, NULL),
(14, 120.00, NULL, 4, 5, 29, NULL),
(15, 40.00, NULL, 5, 6, 25, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idsucursal` (`idsucursal`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indexes for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idsucursal`),
  ADD KEY `idvendedor` (`idvendedor`);

--
-- Indexes for table `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`idvendedor`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `idvendedor` (`idvendedor`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idsucursal` (`idsucursal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idsucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `idvendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);

--
-- Constraints for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `sucursal_ibfk_1` FOREIGN KEY (`idvendedor`) REFERENCES `vendedores` (`idvendedor`);

--
-- Constraints for table `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idvendedor`) REFERENCES `vendedores` (`idvendedor`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`),
  ADD CONSTRAINT `venta_ibfk_4` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
