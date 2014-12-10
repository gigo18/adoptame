-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2014 a las 17:01:14
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `corgibd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_account_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'user''s account type (basic, premium, etc)',
  `user_has_avatar` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 if user has a local avatar, 0 if not',
  `user_rememberme_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_creation_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the creation of user''s account',
  `user_last_login_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of user''s last login',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attempts',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_provider_type` text COLLATE utf8_unicode_ci,
  `user_facebook_uid` bigint(20) unsigned DEFAULT NULL COMMENT 'optional - facebook UID',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_facebook_uid` (`user_facebook_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE IF NOT EXISTS `animales` (
  `id_animal` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_animal` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id_animal`, `nombre_animal`) VALUES
(1, 'Perro'),
(2, 'Gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales_reg`
--

CREATE TABLE IF NOT EXISTS `animales_reg` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(11) CHARACTER SET utf8 NOT NULL,
  `id_animal` int(11) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `id_sexo_animal` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombre_mascota` varchar(15) CHARACTER SET utf8 NOT NULL,
  `edad_mascota` varchar(15) CHARACTER SET utf8 NOT NULL,
  `mensaje_mascota` varchar(112) CHARACTER SET utf8mb4 NOT NULL,
  `mascota_vacuna` varchar(2) CHARACTER SET utf8 NOT NULL,
  `estado_peticion` enum('En revision','Adopcion') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `note_text` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `notes`
--

INSERT INTO `notes` (`note_id`, `note_text`, `user_id`) VALUES
(1, 'DiegoSan', 1),
(2, 'AlanSan', 1),
(3, 'PiliSan', 1),
(4, 'DarwinSan', 1),
(5, 'EliSan', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza_animales`
--

CREATE TABLE IF NOT EXISTS `raza_animales` (
  `id_raza` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `nombre_raza` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tamano_raza` varchar(11) NOT NULL,
  PRIMARY KEY (`id_raza`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `raza_animales`
--

INSERT INTO `raza_animales` (`id_raza`, `id_animal`, `nombre_raza`, `tamano_raza`) VALUES
(1, 1, 'Afgano', 'Grande'),
(2, 1, 'Husky Siberiano', 'Grande'),
(3, 1, 'Corgi Gales Pembroke', 'Pequeño'),
(4, 1, 'Pastor Aleman', 'Grande'),
(5, 1, 'Cocker Americano', 'Grande'),
(6, 1, 'Doberman', 'Grande'),
(7, 1, 'Foxhound Ingles', 'Grande'),
(8, 1, 'Pastor Belga', 'Grande'),
(9, 1, 'Beagle', 'Mediano'),
(10, 1, 'Chow Chow', 'Mediano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_img_mascotas`
--

CREATE TABLE IF NOT EXISTS `registro_img_mascotas` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombre_img` int(11) NOT NULL,
  `tipo_de_img` int(11) NOT NULL,
  `tamano_img` int(11) NOT NULL,
  `ruta_img` int(11) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_mascota`
--

CREATE TABLE IF NOT EXISTS `registro_mascota` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(100) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `id_sexo_animal` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombre_mascota` varchar(15) NOT NULL,
  `edad_mascota` varchar(15) NOT NULL,
  `mensaje_mascota` varchar(120) NOT NULL,
  `mascota_vacuna` varchar(2) NOT NULL,
  `estado_peticion` enum('En revision','Adopcion') NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `registro_mascota`
--

INSERT INTO `registro_mascota` (`id_registro`, `referencia`, `id_animal`, `id_raza`, `id_sexo_animal`, `user_id`, `nombre_mascota`, `edad_mascota`, `mensaje_mascota`, `mascota_vacuna`, `estado_peticion`) VALUES
(1, '', 1, 1, 1, 1, 'Bofo', '7 meses', 'Es jugueton y le encanta la pelota', 'Si', 'En revision'),
(2, '', 1, 3, 2, 1, 'Cheesy', '5 Meses', 'Le encanta jugar con los niños', 'Si', 'En revision'),
(3, '1', 1, 1, 1, 1, 'Pipo', '2 años', 'Es muy jugueton, le encanta correr en la playa', 'Si', 'En revision'),
(4, '1', 1, 1, 2, 1, 'Bosco', '4 meses', 'Es un perro que necesita una linda familia que lo quiera mucho.', 'Si', 'En revision'),
(5, '1', 0, 1, 2, 1, 'Cody', '5 Meses', 'Es un husky siberiano', 'Si', 'En revision'),
(6, '1', 1, 1, 1, 1, 'Moi', '4 años', 'Es una Husky muy coqueta, esta chula :3 lol', 'Si', 'En revision');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_mascota`
--

CREATE TABLE IF NOT EXISTS `reg_mascota` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_animal` int(11) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `id_sexo_animal` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombre_mascota` varchar(15) CHARACTER SET utf8 NOT NULL,
  `mensaje_mascota` varchar(120) CHARACTER SET utf8 NOT NULL,
  `mascota_vacuna` varchar(2) CHARACTER SET utf8 NOT NULL,
  `estado_peticion` enum('En revision','Adopcion') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo_animales`
--

CREATE TABLE IF NOT EXISTS `sexo_animales` (
  `id_sexo_animal` int(11) NOT NULL AUTO_INCREMENT,
  `sexo_animal` varchar(11) NOT NULL,
  PRIMARY KEY (`id_sexo_animal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sexo_animales`
--

INSERT INTO `sexo_animales` (`id_sexo_animal`, `sexo_animal`) VALUES
(1, 'Hembra'),
(2, 'Macho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_temp_files`
--

CREATE TABLE IF NOT EXISTS `tbl_temp_files` (
  `id_files` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_files`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tbl_temp_files`
--

INSERT INTO `tbl_temp_files` (`id_files`, `nombre`, `descripcion`, `tipo`, `status`) VALUES
(11, '1406381478-294408.jpg', 'Lindsey Stirling', 'jpg', '1'),
(12, '1406381493-leah-dizon-hd-lindsey-stirling-706908.jpg', 'Leah Dizon', 'jpg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_account_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'user''s account type (basic, premium, etc)',
  `user_has_avatar` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 if user has a local avatar, 0 if not',
  `user_rememberme_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_creation_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the creation of user''s account',
  `user_last_login_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of user''s last login',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attempts',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_provider_type` text COLLATE utf8_unicode_ci,
  `user_facebook_uid` bigint(20) unsigned DEFAULT NULL COMMENT 'optional - facebook UID',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_facebook_uid` (`user_facebook_uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_account_type`, `user_has_avatar`, `user_rememberme_token`, `user_creation_timestamp`, `user_last_login_timestamp`, `user_failed_logins`, `user_last_failed_login`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_provider_type`, `user_facebook_uid`) VALUES
(1, 'AlanSan', '$2y$10$bII74gpAVsPVorAX3DIP/.CzbSh0G1Wu/2G937e8kaeAdSlUCwbkG', 'alan.slackware@gmail.com', 1, 1, 1, NULL, 1405724572, 1406641912, 0, NULL, 'c53b07f28a3ce7b690e8b0b8d11a592fe828fe0b', NULL, NULL, 'DEFAULT', NULL),
(2, 'AndroSan', '$2y$10$vN4tEdpMuBmR5ZfzMXcl7uj6OfT4HM1ZONNsH/mbemTPdcL1y3pVK', 'andro.sk@gmail.com', 1, 1, 0, NULL, 1406084246, 1406084290, 0, NULL, '507db08197d72cdd1e80d75315f890f76cdacc05', NULL, NULL, 'DEFAULT', NULL),
(3, 'SlackSan', '$2y$10$EBWmkxf4E7E8lkOX6AXQDeVlkPXfguASobM9D.wrTdsoPH27c4sHu', 'alan.pucpech@gmail.com', 1, 1, 0, NULL, 1406441677, 1406533590, 0, NULL, '151d4a5547e9581679ae13c7a94deea208aa1ff7', NULL, NULL, 'DEFAULT', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
