-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-05-2024 a las 23:13:34
-- Versión del servidor: 8.0.36
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lareduca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assigments`
--

CREATE TABLE `assigments` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assigment_submissions`
--

CREATE TABLE `assigment_submissions` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('b6add78f232efaa117d46b81c0932032', 'i:1;', 1715875092),
('b6add78f232efaa117d46b81c0932032:timer', 'i:1715875092;', 1715875092),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1715874076),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1715874076;', 1715874076);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'M3 - Programming', 'DAW Programming 2', '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(2, 'M6 - Web Development in Client Environment', 'DAW Web dev client env', '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(3, 'M7 - Web Development in Server Environment', 'DAW Web dev server env', '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(4, 'M8 - Web Application Deployment', 'DAW Web app deploy', '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(5, 'M9 - Web Interface Design', 'DAW Web interface Design', '2024-05-16 12:59:21', '2024-05-16 12:59:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course_enrollments`
--

CREATE TABLE `course_enrollments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `enrollment_date` date NOT NULL DEFAULT '2024-05-16',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enrolled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `course_enrollments`
--

INSERT INTO `course_enrollments` (`id`, `user_id`, `course_id`, `enrollment_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2024-05-16', 'enrolled', '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(2, 1, 1, '2024-05-16', 'enrolled', '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(3, 10, 2, '2024-05-16', 'enrolled', '2024-05-16 13:49:12', '2024-05-16 13:49:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educational_games`
--

CREATE TABLE `educational_games` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `educational_games`
--

INSERT INTO `educational_games` (`id`, `title`, `description`, `url`, `subject_area`, `created_at`, `updated_at`) VALUES
(1, 'Music Game', 'A game to learn music notes', 'http://localhost:5174/', 'Music', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_scores`
--

CREATE TABLE `game_scores` (
  `id` bigint UNSIGNED NOT NULL,
  `session_id` bigint UNSIGNED NOT NULL,
  `score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `game_scores`
--

INSERT INTO `game_scores` (`id`, `session_id`, `score`, `created_at`, `updated_at`) VALUES
(6, 6, 134, '2024-05-16 13:57:52', '2024-05-16 13:57:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_sessions`
--

CREATE TABLE `game_sessions` (
  `id` bigint UNSIGNED NOT NULL,
  `game_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `start_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `game_sessions`
--

INSERT INTO `game_sessions` (`id`, `game_id`, `user_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(6, 1, 10, '2024-05-16 13:57:39', '2024-05-16 13:57:52', '2024-05-16 13:57:52', '2024-05-16 13:57:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_30_170316_create_personal_access_tokens_table', 1),
(5, '2024_04_30_170905_add_two_factor_columns_to_users_table', 1),
(6, '2024_04_30_171452_create_courses_table', 1),
(7, '2024_04_30_171500_create_assigments_table', 1),
(8, '2024_04_30_171614_create_permission_tables', 1),
(9, '2024_04_30_174601_create_departments_table', 1),
(10, '2024_04_30_174705_create_course_enrollments_table', 1),
(11, '2024_04_30_174854_create_assigment_submissions_table', 1),
(12, '2024_05_07_154826_create_teachers_table', 1),
(13, '2024_05_08_195206_create_resources_table', 1),
(14, '2024_05_14_164435_create_educational_games_table', 1),
(15, '2024_05_15_163906_create_game_sessions_table', 1),
(16, '2024_05_15_163913_create_game_scores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resources`
--

CREATE TABLE `resources` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `uploaded_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `resources`
--

INSERT INTO `resources` (`id`, `course_id`, `title`, `resource_type`, `url`, `content`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dummy PDF', 'pdf', 'https://www.rd.usda.gov/sites/default/files/pdf-sample_0.pdf', 'prueba pdf', 1, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(2, 1, 'Dummy PDF 2', 'pdf', 'https://www.rd.usda.gov/sites/default/files/pdf-sample_0.pdf', NULL, 1, '2024-05-16 12:59:21', '2024-05-16 12:59:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2024-05-16 12:59:16', '2024-05-16 12:59:16'),
(2, 'student', 'Student', '2024-05-16 12:59:16', '2024-05-16 12:59:16'),
(3, 'teacher', 'Teacher', '2024-05-16 12:59:16', '2024-05-16 12:59:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JytPjybtoCtrF2iAESnAD1AkdfuXDUtndbeSD5GX', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZXpGazlES0s3QXdVdGt1UWNaQkNHZjNDZWJwbThDRko0SVduYk50dSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY291cnNlcy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkcGdOaDgxTzJILlFNLkNjYlYwY0F5T04wL1hkd0Q3ZlhaeDFDTlpTUG9zdE1aN2hDdnpDWE8iO30=', 1715875048),
('Mhxr6GSK8iTOuHfOUgEeDZ2gpRPkaCapTENfUeXC', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMzUyQzZBNkx1MHJSd1Ftb1dXMXB0Q2R3dmtSbjRlZlBvOWRhVGVhZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lZHVjYXRpb25hbC1nYW1lcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJHBnTmg4MU8ySC5RTS5DY2JWMGNBeU9OMC9YZHdEN2ZYWngxQ05aU1Bvc3RNWjdoQ3Z6Q1hPIjt9', 1715875192);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(2, 2, 5, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(3, 3, 2, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(4, 4, 4, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(5, 5, 1, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(6, 6, 2, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(7, 6, 3, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(8, 6, 5, '2024-05-16 12:59:21', '2024-05-16 12:59:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$ZhZEkYPVsXwV1Hkb5J/n5OSLlPfCiw3T6wv9fuPj74xt0o2t1rlz6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:17', '2024-05-16 12:59:17'),
(2, 'Roberto Manca', 'teacher', 'robertomanca@gmail.com', NULL, '$2y$12$8D9pAeWNMA2dG1A84JGhGe3F7lVNBSPxZTbtfEvlraCsegpCvXuQe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:17', '2024-05-16 12:59:17'),
(3, 'Javier Salvador', 'teacher', 'javiersalvador@gmail.com', NULL, '$2y$12$NqFiN5rpPlCE01fkhnK2peR5/3TJPsK3ZtanIG1zEBDK.oHNcanbu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:17', '2024-05-16 12:59:17'),
(4, 'Adrià Serrando', 'teacher', 'adriàserrando@gmail.com', NULL, '$2y$12$Kl7CBjFVipUESStKMqXyle1JMyhiyy1g2NzOsUw24JYHST1UseARq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:17', '2024-05-16 12:59:17'),
(5, 'Carmen Quintás', 'teacher', 'carmenquintás@gmail.com', NULL, '$2y$12$wUyWdwDYmldCTui1ucrsteS8i9QFsgeD3vbOicnWId3UVAysBrRwq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:17', '2024-05-16 12:59:17'),
(6, 'Judith Lopez', 'teacher', 'judithlopez@gmail.com', NULL, '$2y$12$0xF8k3rkcx/m3tfU89wiwup6e1lixbPxPOyOftxfGCsdUUiLgdPhm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:18', '2024-05-16 12:59:18'),
(7, 'Juan Pérez', 'student', 'juanpérez@gmail.com', NULL, '$2y$12$1wf4snscbgyVCeJT.l/cO.X7mTF/9YshjDIMRjSstWCBqGulNZJre', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:18', '2024-05-16 12:59:18'),
(8, 'María García', 'student', 'maríagarcía@gmail.com', NULL, '$2y$12$pR4e/HwGoC.QM0qzW3pVpeh3KuLnLSTmUMf8vJhSKKvekiDAYDne.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:18', '2024-05-16 12:59:18'),
(9, 'Carlos López', 'student', 'carloslópez@gmail.com', NULL, '$2y$12$ODm.UVvBIiEisrpd0pX9se96YylgV1ZzK5hxsxF2kX1dm3YvVdd9C', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:18', '2024-05-16 12:59:18'),
(10, 'Ana Martínez', 'student', 'anamartínez@gmail.com', NULL, '$2y$12$pgNh81O2H.QM.CcbV0cAyON0/XdwD7fXZx1CNZSPostMZ7hCvzCXO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:18', '2024-05-16 12:59:18'),
(11, 'Luis Rodríguez', 'student', 'luisrodríguez@gmail.com', NULL, '$2y$12$eEuvlhBrRmfoRfWStLboFevZpmv.iISK7MEn2l4WsqwJsWzEtSBCe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:19', '2024-05-16 12:59:19'),
(12, 'Laura González', 'student', 'lauragonzález@gmail.com', NULL, '$2y$12$dWXzR6EthUJRId/01av1G.pe74D46ghN9TVubv9aBeWiDZ.2ukiHm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:19', '2024-05-16 12:59:19'),
(13, 'David Sánchez', 'student', 'davidsánchez@gmail.com', NULL, '$2y$12$2xmZ6lgLaymwYDSdN.pXX.90Rs6TCpsXtgbIlT2fsYR.uhNnsHBYO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:19', '2024-05-16 12:59:19'),
(14, 'Paula Romero', 'student', 'paularomero@gmail.com', NULL, '$2y$12$1GLyScnrMzvM8YqSxL5/s.nKV/k4fbbXvk2CDCS1ulYGQLEzQOBpi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:19', '2024-05-16 12:59:19'),
(15, 'Javier Fernández', 'student', 'javierfernández@gmail.com', NULL, '$2y$12$c5r5GqC5a3BoIOXufX8kne395.tim3hBsY.TJW3KB6TSml1MtJRUC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:19', '2024-05-16 12:59:19'),
(16, 'Sofía Díaz', 'student', 'sofíadíaz@gmail.com', NULL, '$2y$12$nqIFnXWyBanQJ2zDXVHlnuI9.bzfp0jwSFbBTqXbqgSEFLJya/vdO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:19', '2024-05-16 12:59:19'),
(17, 'Daniel Pérez', 'student', 'danielpérez@gmail.com', NULL, '$2y$12$xPOy07uTODNuF3CjRq78s.qi.qhHGd5zeqRl6KKG9Memg0uy2Fvn.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:20', '2024-05-16 12:59:20'),
(18, 'Andrea Ruiz', 'student', 'andrearuiz@gmail.com', NULL, '$2y$12$DQv4CD2UtaqyCba8m0n/SOFnjEGiLmwDF1YEysuUGOBg8BjMegpte', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:20', '2024-05-16 12:59:20'),
(19, 'Pedro Gómez', 'student', 'pedrogómez@gmail.com', NULL, '$2y$12$QyfAMhOSTKwD58J3cAcSIOfgTs4Kyi5LcBhk3mHyOqgEs9Z2fs5Iq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:20', '2024-05-16 12:59:20'),
(20, 'Lucía Morales', 'student', 'lucíamorales@gmail.com', NULL, '$2y$12$0eajZ29umuUO7eAK8G8auegW2xKew1uGi7v0aBcTMLalpyRTsRsba', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:20', '2024-05-16 12:59:20'),
(21, 'Miguel Castro', 'student', 'miguelcastro@gmail.com', NULL, '$2y$12$Hyp7C5QCD6pjeRDc3/j25OUYIDUvz62PvCXNJq4zFs3ewMVYDJPs2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:20', '2024-05-16 12:59:20'),
(22, 'Elena Navarro', 'student', 'elenanavarro@gmail.com', NULL, '$2y$12$FFND52Zk5Rrnf1/zSNXXH.4gmtoiv9Kn.l3.T3Y0QVJSw0TbUq9vu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(23, 'Antonio Jiménez', 'student', 'antoniojiménez@gmail.com', NULL, '$2y$12$JojOT7S3GQ9EP/Eh/7/yA.8nFj5/q2yklFmwa0gKIn1PwluLeSyau', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(24, 'Beatriz Torres', 'student', 'beatriztorres@gmail.com', NULL, '$2y$12$x0mzSnlMxllO9EDW8j.q2Osi5TivNCUUA0Jk1kwQbW/A3o1fjBagK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(25, 'Rubén Ramírez', 'student', 'rubénramírez@gmail.com', NULL, '$2y$12$I07whkgvvFI926T7rAeMvex3slPxSIBWnRFhFdTa6e4WQVe/wx.Q2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:21', '2024-05-16 12:59:21'),
(26, 'Carmen Vázquez', 'student', 'carmenvázquez@gmail.com', NULL, '$2y$12$.vlwtCoIym0w6cbCG1vFHO4b/DqFamOHgS7SQhBdoS9Wt5R0zc0Ka', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 12:59:21', '2024-05-16 12:59:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `assigments`
--
ALTER TABLE `assigments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `assigment_submissions`
--
ALTER TABLE `assigment_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `course_enrollments`
--
ALTER TABLE `course_enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_enrollments_user_id_foreign` (`user_id`),
  ADD KEY `course_enrollments_course_id_foreign` (`course_id`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `educational_games`
--
ALTER TABLE `educational_games`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `game_scores`
--
ALTER TABLE `game_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_scores_session_id_foreign` (`session_id`);

--
-- Indices de la tabla `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_sessions_game_id_foreign` (`game_id`),
  ADD KEY `game_sessions_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resources_course_id_foreign` (`course_id`),
  ADD KEY `resources_uploaded_by_foreign` (`uploaded_by`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`),
  ADD KEY `teachers_course_id_foreign` (`course_id`);

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
-- AUTO_INCREMENT de la tabla `assigments`
--
ALTER TABLE `assigments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `assigment_submissions`
--
ALTER TABLE `assigment_submissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `course_enrollments`
--
ALTER TABLE `course_enrollments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educational_games`
--
ALTER TABLE `educational_games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `game_scores`
--
ALTER TABLE `game_scores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `game_sessions`
--
ALTER TABLE `game_sessions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `course_enrollments`
--
ALTER TABLE `course_enrollments`
  ADD CONSTRAINT `course_enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_enrollments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `game_scores`
--
ALTER TABLE `game_scores`
  ADD CONSTRAINT `game_scores_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `game_sessions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD CONSTRAINT `game_sessions_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `educational_games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_sessions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resources_uploaded_by_foreign` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;