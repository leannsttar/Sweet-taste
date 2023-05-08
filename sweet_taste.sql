-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-05-2023 a las 07:57:31
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'Nacely Orellana ', 'admin123@lido.com', 'iloveU');

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
(18, '2023-05-07'),
(19, '2023-05-08'),
(20, '2023-05-08'),
(21, '2023-05-08'),
(22, '2023-05-08'),
(23, '2023-05-08'),
(24, '2023-05-08'),
(25, '2023-05-08'),
(26, '2023-05-08'),
(27, '2023-05-08'),
(28, '2023-05-08');

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
(2, 'Galletas zoológicas', 'Una deliciosa opción de galletas temáticas para los amantes de los animales. Cada galleta tiene una forma diferente de animal, desde leones y jirafas hasta elefantes y monos, lo que las hace divertidas y entretenidas para comer.', '0.50'),
(3, 'Galletas cremosas', 'Estas galletas tienen una textura suave y cremosa en el interior, que se contrasta con una textura crujiente en el exterior, lo que las convierte en una experiencia única en cada bocado.', '1.00$'),
(4, 'Torti trigo', 'Son crujientes y deliciosos snacks elaborados con harina de trigo de alta calidad. Estos snacks tienen una textura ligera y aireada que los hace perfectos para disfrutar en cualquier momento del día', '0.35$'),
(5, 'Galletas vita', 'Estas galletas están elaboradas con ingredientes de alta calidad, como cereales integrales y semillas, que las convierten en una fuente de fibra y otros nutrientes esenciales.', '0.75$'),
(6, 'Pan dulce Alemania', 'Este pan es dulce y especiado, con una textura densa y húmeda, similar a la de un pastel. Está elaborado con ingredientes como frutas secas, nueces, especias como canela.', '1.25$'),
(7, 'Galletas suspiros', 'Las galletas suspiros son un dulce delicado y ligero, típico de la repostería francesa. Estas galletas se caracterizan por su textura crujiente en el exterior y suave y esponjosa en el interior, que se derrite en la boca como un suspiro. ', '0.75$'),
(8, 'Galletas margarita\r\n\r\n', 'Estas galletas tienen una forma distintiva de flor con pétalos curvos, que se asemejan a los pétalos de una margarita. Están elaboradas con ingredientes simples, como harina, mantequilla, azúcar y huevos, y se pueden aromatizar con extracto de vainilla, limón o almendra para agregar sabor. ', '1.25$'),
(9, 'Galletas saladas\r\n', 'Estas galletas tienen un sabor salado y crujiente, y son ideales para disfrutar como un snack salado entre comidas, para acompañar con queso o paté, o incluso como una base para canapés y bocadillos', '1.00$'),
(10, 'Pan dulce sandino', 'Es un delicioso pan suave y esponjoso que se originó en América Latina. Esta masa dulce y aromática a menudo se elabora con ingredientes como harina, azúcar, leche, huevos, mantequilla y una variedad de especias, como canela y nuez moscada.', '1.75$'),
(11, 'Pan dulce relámpago\r\n\r\n', 'El pan dulce relámpago es un pan dulce que se distingue por su forma alargada y ondulada, similar a un relámpago. Esta deliciosa masa dulce se elabora a menudo con ingredientes como harina, azúcar, leche, huevos, mantequilla y vainilla, que le dan un sabor dulce y suave.', '1.25$'),
(12, 'Pan dulce María Luisa', 'El pan dulce María Luisa es un pan dulce de origen latinoamericano que se distingue por su forma redondeada y su textura suave y esponjosa. Esta deliciosa masa dulce a menudo se elabora con ingredientes como harina, azúcar, leche, huevos y mantequilla, que le dan un sabor dulce y cremoso.', '1.25$'),
(13, 'Pan dulce dona rellena', 'El pan dulce dona rellena es un pan suave y esponjoso que se distingue por su forma redonda con un agujero en el centro, similar a una dona. Sin embargo, a diferencia de las donas tradicionales, el pan dulce dona rellena se rellena con una variedad de sabores, como crema pastelera, mermelada o dulce de leche.', '2.25$'),
(14, 'Pan dulce buñuelo', 'El pan dulce buñuelo es un pan dulce típico de la cocina española y latinoamericana que se distingue por su textura crujiente y su forma esférica y achatada. Este pan dulce a menudo se elabora con ingredientes como harina, huevos, azúcar, mantequilla, levadura y anís, que le dan un sabor dulce y aromático.', '1.00$'),
(15, 'Pan torreja\r\n\r\n', 'La pan torreja, también conocida como \"French toast\" en inglés, es un delicioso platillo de la cocina internacional que consiste en rebanadas de pan remojadas en una mezcla de huevos batidos, leche y azúcar, y luego se fríen en mantequilla hasta que estén doradas y crujientes por fuera.', '2.50$'),
(16, 'Pan dulce semita de piña\r\n\r\n', 'La pan dulce semita de piña es un postre típico de la cocina salvadoreña y centroamericana. Esta deliciosa torta de pan dulce se elabora con una masa de pan suave, cubierta con piña caramelizada y azúcar. La masa de pan suele estar hecha de harina, levadura, huevos, leche y azúcar, mientras que la cubierta de piña se prepara con piña fresca, azúcar morena y canela. ', '1.25$'),
(17, 'Galletas Madeleine\r\n\r\n', 'Las galletas Madeleine son un postre francés tradicional que consiste en pequeños pasteles en forma de concha, con una textura esponjosa y un sabor delicado. Estas galletas se elaboran con harina, azúcar, huevos y mantequilla, y su sabor se puede mejorar con ingredientes como vainilla, ralladura de limón o almendras. ', '3.00$');

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
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `historial_producto`
--
ALTER TABLE `historial_producto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
