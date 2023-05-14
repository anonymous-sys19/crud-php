SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pesos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesosdbs`
--

CREATE TABLE `pesosdbs` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `finca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` int(11) NOT NULL,
  `block` int(11) NOT NULL,
  `ciclo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rangoM1` int(11) NOT NULL,
  `rango0` int(11) NOT NULL,
  `rango1` int(11) NOT NULL,
  `rango2` int(11) NOT NULL,
  `rango3` int(11) NOT NULL,
  `rango4` int(11) NOT NULL,
  `rango5` int(11) NOT NULL,
  `rango6` int(11) NOT NULL,
  `rango7` int(11) NOT NULL,
  `Tsuma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pesosdbs`
--

INSERT INTO `pesosdbs` (`id`, `nombre`, `date`, `finca`, `lote`, `block`, `ciclo`, `rangoM1`, `rango0`, `rango1`, `rango2`, `rango3`, `rango4`, `rango5`, `rango6`, `rango7`, `Tsuma`) VALUES
(5, 'Grevin', '2022-06-02', 'PFR', 787, 7, 'PC', 7, 7, 7, 7, 7, 7, 7, 7, 78, 0),
(6, 'Grevin', '2022-07-06', 'PTR', 987, 7897, 'PC', 789, 798, 789978, 798, 978, 789, 798, 978, 987, 0),
(7, 'Grevin', '2022-06-06', 'PCR', 6789, 78978, 'PC', 987, 9877, 987897, 979878979, 789789, 78979879, 7977, 7897, 78998, 0),
(8, 'Grevin', '2022-06-06', 'PTR', 67, 87, 'PC', 7878, 978, 89, 789, 897, 789, 7, 789, 897, 0),
(9, 'Grevin', '2022-07-06', 'PTR', 90, 90, 'PC', 78, 78, 787, 78787, 878, 78787, 7887, 787, 778, 0),
(10, 'Eduard', '2022-08-06', 'PCA', 325, 686, 'PC', 68, 66, 6, 69, 9, 6, 6, 6, 6, 0),
(11, 'Grevin', '2022-07-08', 'PTR', 65, 6, 'TR', 6, 6, 6, 6, 6, 6, 6, 6, 6, 0),
(12, 'Grevin', '2022-08-07', 'PTR', 2, 2, 'PC', 2, 5, 5, 8, 8, 5, 5, 8, 8, 0),
(14, 'Grevin', '2022-06-02', 'PTR', 5, 5, 'PC', 5, 5, 5, 5, 5, 5, 5, 5, 5, 0),
(15, 'Grevin', '2022-07-07', 'PFR', 2, 2, 'RC', 2, 2, 2, 2, 2, 2, 2, 2, 10, 0),
(16, 'Grevin', '2022-07-29', 'PTR', 8, 8, 'PC', 8, 8, 8, 8, 8, 8, 8, 8, 8, 0),
(17, 'Grevin', '2022-07-07', 'PTR', 2, 2, 'PC', 3, 3, 3, 3, 2, 2, 2, 2, 2, 0),
(18, 'Grevin', '2022-07-07', 'PTR', 6, 6, 'PC', 6, 6, 7, 8, 9, 9, 0, 0, 0, 0),
(19, 'Greivin', '2022-07-07', 'PTR', 0, 0, 'PC', 0, 0, 0, 0, 0, 0, 0, 0, 7, 0),
(20, 'Grevin', '2022-01-07', 'PTR', 5, 5, 'PC', 5, 5, 5, 5, 5, 5, 5, 5, 5, 0),
(21, 'Greivin', '2022-07-09', 'PCA', 10, 12, 'PC', 9, 9, 9, 9, 9, 9, 9, 9, 9, 0),
(22, 'Greivin', '2022-07-09', 'PTR', 10, 15, 'PC', 9, 9, 9, 9, 9, 9, 9, 9, 9, 0),
(23, 'Greivin', '2022-07-09', 'PTR', 5, 5, 'PC', 5, 5, 5, 5, 5, 5, 5, 5, 5, 0),
(24, 'Grevin', '2022-07-09', 'PTR', 7, 7, 'PC', 7, 7, 7, 7, 7, 7, 7, 7, 7, 0),
(25, 'Greivin', '2022-07-09', 'PTR', 4, 4, 'PC', 4, 4, 4, 4, 4, 4, 4, 4, 4, 0),
(26, 'Greivin', '2022-07-09', 'PTR', 20, 20, 'PC', 20, 20, 20, 20, 20, 20, 20, 20, 20, 0),
(27, 'Greivin', '2022-07-10', 'PTR', 4, 4, 'PC', 4, 4, 4, 4, 4, 4, 4, 4, 4, 0),
(28, 'Eduard', '2022-07-10', 'PTR', 1, 23, 'TR', 10, 10, 10, 10, 10, 10, 10, 10, 10, 0),
(29, 'Eduard', '2022-07-10', 'PFR', 1, 1, 'PC', 1, 10, 20, 30, 25, 35, 40, 50, 45, 0),
(30, 'Greivin', '2022-07-10', 'PCA', 10, 10, 'RC', 10, 9, 9, 9, 9, 9, 9, 9, 9, 0),
(31, 'Eduard', '2022-07-10', 'PTR', 9, 9, 'PC', 9, 9, 9, 9, 9, 9, 9, 9, 9, 0),
(32, 'Eduard', '2022-07-10', 'PTR', 9, 9, 'PC', 9, 9, 9, 9, 9, 9, 9, 9, 9, 0),
(33, 'Greivin', '2022-07-14', 'PTR', 7, 7, 'PC', 7, 7, 7, 7, 7, 7, 7, 7, 7, 0),
(35, 'search', '2022-07-14', 'PTR', 8, 2, 'PC', 8, 8, 8, 8, 8, 8, 8, 8, 8, 0),
(36, 'Greivin', '2022-07-15', 'PCR', 10, 10, 'TR', 10, 10, 10, 10, 10, 10, 10, 10, 10, 0),
(37, 'Greivin', '2022-07-16', 'PTR', 6, 6, 'PC', 6, 6, 6, 6, 6, 6, 6, 6, 6, 0),
(38, 'search', '2022-07-16', 'PTR', 7, 7, 'PC', 7, 7, 7, 7, 7, 7, 7, 7, 7, 0),
(39, 'Greivin', '2022-07-16', 'PTR', 7, 7, 'PC', 7, 7, 7, 7, 7, 7, 7, 7, 7, 0),
(40, 'Greivin', '2022-07-16', 'PCA', 5, 5, 'RC', 8, 8, 5, 5, 8, 8, 8, 8, 5, 0),
(41, 'Didier', '2022-07-16', 'PTR', 32, 3, 'TR', 3, 3, 3, 3, 3, 3, 3, 3, 3, 0);
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pesosdbs`
--
ALTER TABLE `pesosdbs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pesosdbs`
--
ALTER TABLE `pesosdbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
