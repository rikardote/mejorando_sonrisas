-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-03-2021 a las 04:47:13
-- Versión del servidor: 8.0.23-0ubuntu0.20.04.1
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mejorando_sonrisas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `horario` time NOT NULL,
  `medico_id` bigint UNSIGNED NOT NULL,
  `cliente_id` bigint UNSIGNED NOT NULL,
  `nota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `fecha`, `horario`, `medico_id`, `cliente_id`, `nota`, `created_at`, `updated_at`) VALUES
(1, '2021-03-28', '09:30:00', 3, 1, 'LIMPIEZA GENERAL', NULL, '2021-03-13 04:09:18'),
(7, '2021-03-12', '01:48:00', 1, 2, 'TOMA MEDICAMENTO CONTROLADO', '2021-03-13 04:49:02', '2021-03-13 04:49:17'),
(10, '2021-03-28', '12:00:00', 1, 1, 'TOMA MEDICAMENTO CONTROLADO', '2021-03-24 02:24:50', '2021-03-24 02:24:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint UNSIGNED NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ocupacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refer_id` bigint UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ultima_visita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `direccion`, `telefono_1`, `telefono_2`, `nombre`, `responsable`, `email`, `fecha_nacimiento`, `ocupacion`, `refer_id`, `gender`, `ultima_visita`, `created_at`, `updated_at`) VALUES
(1, '23 HEFEERNAN AVE', '6862882506', '6865564516', 'HECTOR RICARDO FUENTES ARMENTA', NULL, 'ricarmenta@gmail.com', '1980-04-27', 'EVENIET ADIPISICING', 1, 'Masculino', '2010-12-16', '2021-03-13 01:54:30', '2021-03-13 01:54:30'),
(2, 'ISLAS DE CEILAN 747', '6861618112', '6865564516', 'MONICA GUTIERREZ SAMANIEGO', NULL, 'monyguti@hotmail.com', '1976-11-27', 'ENIM EVENIET CONSEQ', 4, 'Femenino', '2020-01-01', '2021-03-13 01:55:11', '2021-03-13 01:55:11'),
(3, '23 HEFEERNAN AVE', '7603692587', '7603692587', 'ALBERTO JIEMENEZ BRAVO', NULL, 'braco@hotmail.com', '1990-05-07', 'PARIATUR ID CORPORI', 1, 'Masculino', '2021-03-05', '2021-03-24 03:44:58', '2021-03-24 03:44:58'),
(5, '23 HEFEERNAN AVE', '(686) 565-8274', '(686) 559-9874', 'NESTOR DE LA TORRE JIMENEZ', NULL, 'ricar4menta@gmail.com', '1994-03-02', 'PARIATUR ID CORPORI', 1, 'Masculino', '2021-03-01', '2021-03-24 04:00:39', '2021-03-24 04:03:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinic_histories`
--

CREATE TABLE `clinic_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `cliente_id` bigint UNSIGNED NOT NULL,
  `antecedentes_heredo_familiares` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antecedentes_personales_patologicos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antecedentes_personales_no_patologicos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervenciones_quirujicas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicamentos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complicaciones_anestesico` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hemorragias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diabetes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hipertension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enfermedades_respiratorias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enfermedades_cardiovasculares` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hepatitis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embarazo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padecimiento_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clinic_histories`
--

INSERT INTO `clinic_histories` (`id`, `cliente_id`, `antecedentes_heredo_familiares`, `antecedentes_personales_patologicos`, `antecedentes_personales_no_patologicos`, `alergias`, `intervenciones_quirujicas`, `medicamentos`, `complicaciones_anestesico`, `hemorragias`, `diabetes`, `hipertension`, `enfermedades_respiratorias`, `enfermedades_cardiovasculares`, `hepatitis`, `embarazo`, `otro`, `padecimiento_actual`, `created_at`, `updated_at`) VALUES
(1, 1, 'TIROIDES, DIABETES, HIPERTENSION', 'HIPERTENSION', 'NO', 'NO', 'NO', 'ENALAPRIL, LOSARTAN', 'NO', 'NO', 'NO', 'SI', 'NO', 'NO', 'NO', 'NO', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'NESTOR DE LA TORRE JIMENEZ', '2021-03-13 01:53:02', '2021-03-13 01:53:02'),
(2, 'ALBERTO JUAREZ LOPEZ', '2021-03-13 01:53:11', '2021-03-13 01:53:11'),
(3, 'SUSANA AVILA CAMACHO', '2021-03-13 01:53:16', '2021-03-13 01:53:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_03_12_171050_create_refers_table', 2),
(17, '2021_03_12_190307_create_clientes_table', 2),
(18, '2021_03_13_004502_create_medicos_table', 2),
(19, '2021_03_13_011943_create_citas_table', 2),
(21, '2021_03_17_031843_create_clinic_histories_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refers`
--

CREATE TABLE `refers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `refers`
--

INSERT INTO `refers` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'FACEBOOK', NULL, NULL),
(2, 'GOOGLE', NULL, NULL),
(3, 'INSTAGRAM', NULL, NULL),
(4, 'TELEVISION', NULL, NULL),
(5, 'RADIO', NULL, NULL),
(6, 'MEDIOS IMPRESOS', NULL, NULL),
(7, 'AMISTADES', NULL, NULL),
(8, 'FAMILIARES', NULL, NULL),
(9, 'OTROS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'HECTOR RICARDO FUENTES ARMENTA', 'ricarmenta@gmail.com', NULL, '$2y$10$rCowhHrXSU3j.uzQBlQRDOC1kVw5nUFCYjdoFso1PN2z9GC2W6NRW', NULL, '2021-03-12 18:48:51', '2021-03-12 18:58:14'),
(2, 'MONICA GUTIERREZ', 'monyguti@hotmail.com', NULL, '$2y$10$DaboQMRnTr/dff1efZQ3vehjxCuNbH.vi0wUO4ftoFKhUAW7ogAeO', NULL, '2021-03-12 18:49:40', '2021-03-12 18:49:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citas_medico_id_foreign` (`medico_id`),
  ADD KEY `citas_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_email_unique` (`email`),
  ADD KEY `clientes_refer_id_foreign` (`refer_id`);

--
-- Indices de la tabla `clinic_histories`
--
ALTER TABLE `clinic_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clinic_histories_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `refers`
--
ALTER TABLE `refers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clinic_histories`
--
ALTER TABLE `clinic_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `refers`
--
ALTER TABLE `refers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `citas_medico_id_foreign` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`id`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_refer_id_foreign` FOREIGN KEY (`refer_id`) REFERENCES `refers` (`id`);

--
-- Filtros para la tabla `clinic_histories`
--
ALTER TABLE `clinic_histories`
  ADD CONSTRAINT `clinic_histories_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
