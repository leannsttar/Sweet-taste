-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-05-2023 a las 06:36:37
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sweet_taste`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_producto` int NOT NULL,
  `cantidad` int NOT NULL,
  `id_carrito` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `fecha`) VALUES
(1, '2023-05-07'),
(2, '2023-05-07'),
(3, '2023-05-07'),
(4, '2023-05-07'),
(5, '2023-05-07'),
(6, '2023-05-07'),
(7, '2023-05-07'),
(8, '2023-05-07'),
(9, '2023-05-07'),
(10, '2023-05-07'),
(11, '2023-05-07'),
(12, '2023-05-07'),
(13, '2023-05-07'),
(14, '2023-05-07'),
(15, '2023-05-07'),
(16, '2023-05-07'),
(17, '2023-05-07'),
(18, '2023-05-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_producto`
--

CREATE TABLE `historial_producto` (
  `id` int NOT NULL,
  `id_historial` int NOT NULL,
  `id_producto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `Id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`Id`, `nombre`, `descripcion`, `precio`) VALUES
(2, 'Galletas zoológicas', 'galletas con temáticas de animales.', '1.25$'),
(3, 'Galletas cremosas', 'Galletas con una textura suave y cremosa en el interior ', '1.00$'),
(4, 'Torti trigo', 'Son crujientes y deliciosos snacks elaborados con harina de alta calidad. ', '0.35$'),
(5, 'Galletas vita', 'Estas galletas están elaboradas con ingredientes de alta calidad.', '0.75$'),
(6, 'Pan dulce Alemania', 'Este pan es dulce y especiado, con una textura densa y húmeda, similar a la de un pastel. Está elaborado con ingredientes como frutas secas, nueces, especias como canela.', '1.25$'),
(7, 'Galletas suspiros', 'Las galletas suspiros son un dulce delicado y ligero ', '0.75$'),
(8, 'Galletas margarita\r\n\r\n', 'Estas galletas que se asemejan a los pétalos de una margarita.', '1.25$'),
(9, 'Galletas saladas\r\n', 'Estas galletas tienen un sabor salado y crujiente.', '1.00$'),
(10, 'Pan dulce sandino', 'Es un delicioso pan suave y esponjoso.', '1.75$'),
(11, 'Pan dulce relámpago\r\n\r\n', 'por su forma alargada y ondulada, similar a un relámpago. ', '1.25$'),
(12, 'Pan dulce María Luisa', 'Se distingue por su forma redondeada y su textura suave.', '1.25$'),
(13, 'Pan dulce dona rellena', 'El pan dulce dona rellena es un pan esponjoso.', '2.25$'),
(14, 'Pan dulce buñuelo', 'El pan dulce buñuelo es típico de la cocina española.', '1.00$'),
(15, 'Pan torreja\r\n\r\n', 'La pan torreja, también conocida como \"French toast\" en inglés.', '2.50$'),
(16, 'Pan dulce semita de piña\r\n\r\n', 'Es postre típico de la cocina salvadoreña.  ', '1.25$'),
(17, 'Galletas Madeleine\r\n\r\n', 'Es un postre francés tradicional.', '3.00$');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `correo`, `password`, `role`) VALUES
(14, 'rodri', 'rodri@gmail.com', 'yolo1234', 'usuario'),
(15, 'rodri', 'sis2@gmail.com', 'yolo1234', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id` (`id_producto`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `historial_producto`
--
ALTER TABLE `historial_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historial` (`id_producto`),
  ADD KEY `historial2` (`id_historial`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `historial_producto`
--
ALTER TABLE `historial_producto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `id` FOREIGN KEY (`id_producto`) REFERENCES `products` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial_producto`
--
ALTER TABLE `historial_producto`
  ADD CONSTRAINT `historial` FOREIGN KEY (`id_producto`) REFERENCES `products` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial2` FOREIGN KEY (`id_historial`) REFERENCES `historial` (`id_historial`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
