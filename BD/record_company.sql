-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2020 a las 06:29:43
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `record_company`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(30) NOT NULL,
  `album_cover` varchar(150) NOT NULL,
  `song_quantity` int(11) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `link_album` varchar(150) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id`, `album_name`, `album_cover`, `song_quantity`, `duration`, `link_album`, `artist_id`) VALUES
(1, 'what separates me from you', 'https://upload.wikimedia.org/wikipedia/en/a/a1/ADTR_WSMFY.jpg', 10, '32:58', 'https://www.youtube.com/watch?v=xTccZcXtk_U', 1),
(2, 'Uprising', 'https://www.ezanime.net/wp-content/uploads/2020/06/uprising-820x500.jpg', 10, '35:53', 'https://www.youtube.com/watch?v=lePEzamdFXM', 2),
(3, 'Homesick', 'https://i.pinimg.com/originals/3f/26/84/3f26848c50f3894c365176dc3754c285.jpg', 12, '40:26', 'https://www.youtube.com/watch?v=P_dXB9bcmYY', 1),
(5, 'Piel de cobre', 'https://img.discogs.com/ol8Xylub22THBi3ZpXtsrNPymUc=/fit-in/579x577/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-3956196-1', 11, '41:24', 'https://www.youtube.com/watch?v=9sRn0k7lf-w', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artistic_name` varchar(30) NOT NULL,
  `real_name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL,
  `average_salary` int(11) NOT NULL,
  `occupation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artist`
--

INSERT INTO `artist` (`id`, `artistic_name`, `real_name`, `country_id`, `average_salary`, `occupation`) VALUES
(1, 'a day to remember', 'several names', 2, 6000000, 'group band'),
(2, 'bob marley', 'Robert Nesta Marley', 7, 84500000, 'soloist'),
(3, 'kraken', 'several names', 1, 25000000, 'group band');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'colombia'),
(2, 'USA'),
(3, 'UK'),
(4, 'costa rica'),
(5, 'germany'),
(6, 'russia'),
(7, 'jamaica'),
(8, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gender`
--

INSERT INTO `gender` (`id`, `gender_name`) VALUES
(1, 'rock'),
(2, 'pop'),
(3, 'reggaeton'),
(4, 'rap'),
(5, 'bachata'),
(6, 'jazz'),
(7, 'reggae'),
(8, 'heavy metal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `language`
--

INSERT INTO `language` (`id`, `language_name`) VALUES
(1, 'spanish'),
(2, 'english'),
(3, 'swedish'),
(4, 'russian');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `song_name` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `link_song` varchar(150) NOT NULL,
  `album_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `song`
--

INSERT INTO `song` (`id`, `song_name`, `duration`, `gender_id`, `language_id`, `country_id`, `link_song`, `album_id`, `artist_id`) VALUES
(1, 'All I Want', '3:34', 1, 2, 2, 'https://www.youtube.com/watch?v=Pn-6eOxnEMI', 1, 1),
(2, 'Better Off This Way', '3:27', 1, 2, 2, 'https://www.youtube.com/watch?v=VMOZqXcu9dw', 1, 1),
(3, 'If I Leave', '3:24', 1, 2, 2, 'https://www.youtube.com/watch?v=RD_DYNKKnKc', 1, 1),
(4, 'redemption song', '3:55', 7, 2, 7, 'https://www.youtube.com/watch?v=yv5xonFSC4c', 2, 2),
(5, 'the downfall of us all', '3:45', 1, 2, 2, 'https://www.youtube.com/watch?v=CN4IIgFz93k', 3, 1),
(6, 'have faith in me', '3:09', 1, 2, 2, 'https://www.youtube.com/watch?v=4WMmCtkhWi0', 3, 1),
(7, 'if it means a lot to you', '4:04', 1, 2, 2, 'https://www.youtube.com/watch?v=21YJcWdiNfI', 3, 1),
(8, 'lenguaje de mi piel', '4:34', 1, 1, 1, 'https://www.youtube.com/watch?v=Q0S7oWqS7f4', 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `name`, `age`, `gender`, `role`) VALUES
(1, 'luz pelaez', 35, 'female', 'sound engineer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pt_id` (`artist_id`);

--
-- Indices de la tabla `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `native_city` (`country_id`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`album_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `gender` (`gender_id`),
  ADD KEY `original language` (`language_id`),
  ADD KEY `original country` (`country_id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`);

--
-- Filtros para la tabla `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Filtros para la tabla `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `song_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `song_ibfk_4` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `song_ibfk_5` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
