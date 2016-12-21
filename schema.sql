/**
* @author Fidel
* @brief Modelo de base de datos
* @date 2016-12-14
**/
create database library2;
use library2; 

--
-- Base de datos: `library2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `edition` int(11) DEFAULT NULL,
  `observations` varchar(1000) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `has_cd` tinyint(1) DEFAULT '0',
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `edition`, `observations`, `category_id`, `has_cd`, `status_id`) VALUES
(1, 'La vida es sueÃ±o', 'Calderon de la barca', 1, 'Literatura antigua polaca', 1, 0, 3),
(2, 'La palabra del mudo', 'Julio RamÃ³n Ribeyro', 1, 'series de cuentos', 2, 0, 3),
(3, 'Paco Yunque', 'CÃ©sar Vallejo', 2, 'cuento o relato corto de tipo infantil', 2, 1, 3),
(4, 'La niela', 'Stephen King', 1, 'los moustros se ocultan en los mas espeso de la niebla ', 3, 0, 3),
(5, 'Analysis ans Design of Algorithm', 'Cormen, Leiserson', 4, 'Libro de analisi y disenho de algoritmos, para estudiantes talentosos', 1, 0, 3),
(6, 'Comptetitive Programming', 'Steven Halim, Paco Halim', 4, 'Libro de programacion con todos los tips incluidos para estudiantes ansiosos de participar en la  ACM-ICPC', 2, 0, 3),
(7, 'Java a First Aproach', 'Deitel and Deitel', 5, 'Libro de Java para estudiantes de Primer anho', 2, 1, 3),
(8, 'C++ A First Aproach', 'Deitel and Deitel', 5, 'Libro de Java para estudiantes de Primer anho', 2, 1, 3);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `book_counter` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `book_counter`, `status_id`) VALUES
(1, 'Europeas', 'literatura europea', 1, 3),
(2, 'Peruana', 'Obras Peruanas', 2, 3),
(3, 'Terror', 'Para Asustar con suspenso', 1, 3),
(4, 'Programacion', 'Libros de Programacion a nivel de Algoritmos', 1, 3),
(5, 'Theoria', 'Libros de teoria acerca de programacion', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `fech_sol` date NOT NULL,
  `fech_ent` date NOT NULL,
  `dni` int(11) NOT NULL,
  `cui` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `fech_sol`, `fech_ent`, `dni`, `cui`, `book_id`, `status_id`) VALUES
(1, '2012-01-29', '2012-02-02', 72050160, 20120837, 1, 5),
(2, '2015-08-22', '2015-08-30', 42678098, 20130876, 2, 4),
(3, '2015-09-12', '2015-09-20', 72988098, 20150876, 3, 5),
(4, '2015-10-22', '2015-10-28', 72048098, 20160876, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Eliminado'),
(2, 'Inactivo'),
(3, 'Disponible'),
(4, 'Prestado'),
(5, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `email`, `password`, `is_active`, `is_admin`, `created_at`) VALUES
(1, 'Administrador', '', 'admin', '', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 1, '2016-12-20 15:17:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Filtros para la tabla `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;