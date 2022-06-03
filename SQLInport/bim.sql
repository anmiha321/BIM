-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2022 г., 14:42
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bim`
--

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INN` bigint DEFAULT NULL,
  `BIK` bigint DEFAULT NULL,
  `law_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fact_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KPP` bigint DEFAULT NULL,
  `OKPO` bigint DEFAULT NULL,
  `tax_system` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OGPH` bigint DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppppcccc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `kkkkcccc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bank_BIK` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `manager_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `title`, `INN`, `BIK`, `law_address`, `mail_address`, `fact_address`, `KPP`, `OKPO`, `tax_system`, `tender`, `OGPH`, `email`, `bank_name`, `ppppcccc`, `kkkkcccc`, `bank_BIK`, `manager_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 1, 'ООО Железная_струя', 445555, 4323423, 'erteter', 'ergerg', 'dfgergdf', 353454353, 343453, 'Упрощенная', 'Подключено', 34534534534, 'anmiha46@rambler.ru', 'Другой банк', '5555556666', '54654654654654654654', '138998', 38, '2022-01-13 08:36:56', '2022-02-09 06:07:40', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `company_cost`
--

CREATE TABLE `company_cost` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` int UNSIGNED NOT NULL,
  `cost_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company_cost`
--

INSERT INTO `company_cost` (`id`, `company_id`, `cost_id`, `created_at`, `updated_at`) VALUES
(70, 18, 70, NULL, NULL),
(72, 18, 72, NULL, NULL),
(78, 18, 78, NULL, NULL),
(79, 18, 79, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `company_document`
--

CREATE TABLE `company_document` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint UNSIGNED DEFAULT NULL,
  `document_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company_document`
--

INSERT INTO `company_document` (`id`, `created_at`, `updated_at`, `company_id`, `document_id`) VALUES
(627, NULL, NULL, 18, 640),
(629, NULL, NULL, 18, 642),
(630, NULL, NULL, 18, 643),
(631, NULL, NULL, 18, 644),
(632, NULL, NULL, 18, 645),
(633, NULL, NULL, 18, 646),
(634, NULL, NULL, 18, 647),
(636, NULL, NULL, 18, 649),
(637, NULL, NULL, 18, 650),
(638, NULL, NULL, 18, 651),
(639, NULL, NULL, 18, 652),
(640, NULL, NULL, 18, 653),
(641, NULL, NULL, 18, 654),
(642, NULL, NULL, 18, 655),
(643, NULL, NULL, 18, 656);

-- --------------------------------------------------------

--
-- Структура таблицы `company_phone`
--

CREATE TABLE `company_phone` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` int UNSIGNED NOT NULL,
  `phone_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company_phone`
--

INSERT INTO `company_phone` (`id`, `company_id`, `phone_id`, `created_at`, `updated_at`) VALUES
(432, 18, 416, NULL, NULL),
(433, 18, 417, NULL, NULL),
(434, 18, 418, NULL, NULL),
(435, 18, 419, NULL, NULL),
(436, 18, 420, NULL, NULL),
(437, 18, 421, NULL, NULL),
(438, 18, 422, NULL, NULL),
(439, 18, 423, NULL, NULL),
(440, 18, 424, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `company_user`
--

CREATE TABLE `company_user` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` int UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company_user`
--

INSERT INTO `company_user` (`id`, `company_id`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 18, 25, NULL, NULL),
(16, 18, 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `costs`
--

CREATE TABLE `costs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sum_of_cost` bigint DEFAULT NULL,
  `type_of_cost` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `costs`
--

INSERT INTO `costs` (`id`, `title`, `sum_of_cost`, `type_of_cost`, `created_at`, `updated_at`) VALUES
(70, 'xcvngf', 5000, 1, '2022-01-27 09:46:10', '2022-02-03 10:58:10'),
(72, 'sadsxcv', 10000, 0, '2022-01-27 09:46:17', '2022-02-03 10:58:03'),
(78, 'njhh', 6678, 0, '2022-02-05 14:50:09', '2022-02-05 14:50:13'),
(79, 'ghghj', 8111, 1, '2022-02-09 06:07:08', '2022-05-20 11:28:53');

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `title`, `filename`, `weight`, `type`, `created_at`, `updated_at`) VALUES
(640, '1640761304', '1640761304.png', '11814', 'png', '2022-01-27 10:29:40', '2022-01-27 10:29:40'),
(642, '1643259402', '1643259402.gif', '52163', 'gif', '2022-01-27 10:37:25', '2022-01-27 10:37:25'),
(643, '1640760454', '1640760454.jpg', '17876', 'jpg', '2022-01-27 10:37:25', '2022-01-27 10:37:25'),
(644, '1', '1.png', '17554', 'png', '2022-01-27 10:37:25', '2022-01-27 10:37:25'),
(645, '1643022415', '1643022415.png', '62215', 'png', '2022-01-27 10:37:25', '2022-01-27 10:37:25'),
(646, '1s', '1s.webp', '932', 'webp', '2022-01-27 10:45:36', '2022-01-27 10:45:36'),
(647, '1', '1.png', '17554', 'png', '2022-01-27 10:45:36', '2022-01-27 10:45:36'),
(649, 'Сччетчики', 'Сччетчики.docx', '16731', 'docx', '2022-02-05 14:49:46', '2022-02-05 14:49:46'),
(650, 'rtfhfgh (1) (1)', 'rtfhfgh (1) (1).jpg', '53608', 'jpg', '2022-02-07 04:12:38', '2022-02-07 04:12:38'),
(651, 'rtfhfgh (1)', 'rtfhfgh (1).jpg', '53608', 'jpg', '2022-02-07 04:12:38', '2022-02-07 04:12:38'),
(652, '123 (1)', '123 (1).jpg', '53608', 'jpg', '2022-02-07 04:12:38', '2022-02-07 04:12:38'),
(653, 'robots', 'robots.txt', '188', 'txt', '2022-02-07 04:12:38', '2022-02-07 04:12:38'),
(654, 'Маке12313', 'Маке12313.xlsx', '107433', 'xlsx', '2022-05-20 11:28:05', '2022-05-20 11:28:05'),
(655, 'Маке12313', 'Маке12313.xlsx', '107433', 'xlsx', '2022-05-20 11:28:15', '2022-05-20 11:28:15'),
(656, 'Макет заявок1233', 'Макет заявок1233.xlsx', '165280', 'xlsx', '2022-05-20 11:28:15', '2022-05-20 11:28:15');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `managers`
--

CREATE TABLE `managers` (
  `id` bigint UNSIGNED NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `managers`
--

INSERT INTO `managers` (`id`, `surname`, `name`, `patronymic`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(38, 'Андриевских', 'Никита', 'Михайлович', '89129042004', 'anmiha46@rambler.ru', '2022-01-14 04:47:14', '2022-01-27 10:46:08');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_12_25_080000_create_users_table', 1),
(6, '2022_01_11_092704_create_managers_table', 2),
(7, '2022_01_12_170122_create_companies_table', 2),
(8, '2022_01_13_100734_create_phones_table', 3),
(10, '2022_01_13_101732_create_company_phone_table', 4),
(12, '2022_01_18_144600_create_documents_table', 5),
(13, '2022_01_18_145045_create_company_document_table', 5),
(14, '2022_01_24_120524_create_company_user_table', 6),
(15, '2022_01_25_140528_create_costs_table', 7),
(16, '2022_01_25_150936_create_company_cost_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anmiha46@rambler.ru', '$2y$10$EG2xBeva0MyFEOgjE51jB.6EDdYn9hz/xXedqg4Nn8eXXfqTtf2PW', '2022-01-12 07:25:27');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `phones`
--

CREATE TABLE `phones` (
  `id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `phones`
--

INSERT INTO `phones` (`id`, `phone`, `created_at`, `updated_at`) VALUES
(416, '89129042004', '2022-01-25 05:30:15', '2022-01-25 05:30:15'),
(417, '5235235', '2022-01-25 05:30:15', '2022-01-25 05:30:15'),
(418, '235', '2022-01-25 05:30:15', '2022-01-25 05:30:15'),
(419, '878', '2022-01-25 05:30:26', '2022-01-25 05:30:26'),
(420, '23', '2022-01-25 05:30:26', '2022-01-25 05:30:26'),
(421, '546', '2022-01-25 05:39:24', '2022-01-25 05:39:24'),
(422, '123', '2022-01-27 10:45:42', '2022-01-27 10:45:42'),
(423, '465', '2022-01-27 10:45:46', '2022-02-05 14:49:40'),
(424, '55', '2022-01-27 10:45:54', '2022-02-05 14:49:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tariff_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int DEFAULT NULL,
  `role_work` int DEFAULT NULL,
  `acssess_as` int DEFAULT NULL,
  `experience` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designed_sections` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `image`, `surname`, `name`, `patronymic`, `id_company`, `INN`, `city`, `country`, `phone`, `email`, `tariff_id`, `role`, `role_work`, `acssess_as`, `experience`, `salary`, `designed_sections`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `last_seen`) VALUES
(1, '2.png', 'Ситников', 'Константин', 'Викторович', 'ООО Железная_струя', '1337228', 'Город5', 'Страна2', '+7 (912) 904-2004', 'anmiha45@rambler.ru', '12', 2, 1, 1, 'БСОС', NULL, '', NULL, '$2y$10$FhjIAHZJru641gwClhal0urXwEiaSROLHaJcIHLgFm4NMFRyQXDlu', 'h5xw4eBBl2DsDWbP0Z5CMtjWV3D5lUFqT5sw0LtLdR1TMXW8iQZppUpkuywI', NULL, '2021-12-15 04:42:04', '2022-06-03 11:42:02', '2022-06-03 11:42:02'),
(3, '1640760454.jpg', 'Ситников', 'Константин', 'Дмитриевич', 'Борщ', '891290223345', 'Тюмень', 'Германия', '+7 (133) 728-8211', 'anmiha426@rambler.ru', NULL, 0, NULL, 1, 'gamer', NULL, '', NULL, '$2y$10$sS1BErQEwwk5zWvU5KcW.exgkEm59r7GNb5hDyEzPi3wsMMUozuOG', NULL, NULL, '2021-12-29 06:47:34', '2022-02-07 03:27:38', '2021-12-29 12:51:31'),
(4, '1640760581.jpg', 'Адриевскихыва', 'Никитаваываtt', 'Михайловичываыва', 'Борщыва', '345435345', NULL, NULL, '+7 (454) 754-7214', 'anmiha4115@rambler.ru', NULL, 1, NULL, 1, 'БОСС13324', NULL, '', NULL, '$2y$10$QPrffImbg8t2ymeZVbBXv.Icz2j9VNcYi.0kwTrPQKXFHDUjiSsqC', NULL, '2022-02-06 16:56:50', '2021-12-29 06:49:41', '2022-02-06 16:56:50', NULL),
(5, '1640760776.jpg', 'вапвап', 'апрапр', 'апрапр', 'апрапрапр', '345634646456', NULL, NULL, '+7 (465) 465-4654', NULL, NULL, 1, NULL, 1, NULL, NULL, '', NULL, NULL, NULL, '2021-12-30 09:37:24', '2021-12-29 06:52:56', '2021-12-30 09:37:24', NULL),
(6, '1640760944.jpg', 'gdf', 'gdfgfh', 'fghfg', 'hfghfgh', '654654754754', NULL, NULL, '+7 (346) 547-5475', NULL, NULL, 0, NULL, 1, NULL, NULL, '', NULL, '$2y$10$angKT1.sA4rcZcBDgCjx/.M70xTiTG4KjiAH/t5biRJy/FYQlohgm', NULL, NULL, '2021-12-29 06:55:44', '2022-05-20 11:27:27', NULL),
(7, '1640761032.gif', 'fghfhfgh', 'fghfghgh', 'jghjgjh', 'jhgjhjjhkjh', '56757566565', NULL, NULL, '+7 (567) 567-5675', NULL, NULL, 1, NULL, 1, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-12-29 06:57:13', '2022-02-06 16:59:03', NULL),
(8, '1640761157.jpg', 'hgjgh', 'jhjkh', 'jkjhk', 'ghjgh', '534534534534', NULL, NULL, '+7 (546) 546-5465', NULL, NULL, 1, NULL, 1, NULL, NULL, '', NULL, '$2y$10$u6dFOFZW2FPhLCm/N32R.u83GSvi7rwmkUTmcMI083RlUSbkYO1f6', NULL, NULL, '2021-12-29 06:59:17', '2022-02-06 16:59:05', NULL),
(9, '1640761304.png', 'tyrty', 'rtyrty', 'rtyrty', 'Борщ', '891290223345', NULL, NULL, '+7 (345) 345-3453', NULL, NULL, 0, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '2021-12-29 07:01:44', '2022-02-06 16:58:57', NULL),
(10, '1640761411.jpg', 'Проверка', 'gdrgdfgdf', 'Михайлович', 'dfgdrg', '346546', NULL, NULL, '+7 (891) 290-4200', NULL, NULL, 0, NULL, 1, NULL, NULL, '', NULL, '$2y$10$e2f4907lcA2fUkg3LpjsOuKfPnLVV.nigf0uOlnvBv87f.jN3wGdq', NULL, NULL, '2021-12-29 07:03:31', '2022-02-07 03:29:56', NULL),
(11, '1642076014.jpg', 'er', 'dgdf', 'grdgf', 'fdgdf', '343', NULL, NULL, '+7 (543) 435-3454', NULL, NULL, 1, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, '2022-01-13 12:13:34', '2022-02-06 16:58:59', NULL),
(25, '1643200986.png', 'fghfgh', 'thhfgh', 'rtyhgfh', 'Железная_струя', NULL, NULL, NULL, '+7 (345) 345-3463', 'hrt@rambler.ru', NULL, 4, NULL, NULL, 'Архитектор1', '35235', 'Конструкции2', NULL, '$2y$10$UgViGH3A0IBhB6RdC0aK6uDdSM3PxK5Yo2yyt4gDc3eAzGAMM81fO', NULL, NULL, '2022-01-26 12:43:06', '2022-02-06 16:57:37', NULL),
(27, '1643201212.jpg', 'wetwe', 'twetwe', 'twetwet', 'Железная_струя', NULL, NULL, NULL, '+7 (235) 235-2352', 'ewtwetwet@radf.ru', NULL, 4, NULL, NULL, 'Архитектор3', '152344', 'Конструкции1', NULL, '$2y$10$w/GKBnxk8MQzYPBqklgD7.Ia36GAwXNZTXY.eBXy.zRKfcX7kXtwG', NULL, NULL, '2022-01-26 12:46:00', '2022-02-07 04:58:35', '2022-02-07 04:58:35'),
(36, '1646394268.png', 'fgh', 'jghj', 'tfjhghj', '435345', '345345', NULL, NULL, '+7 (123) 213-2131', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 11:44:28', '2022-03-04 11:44:28', NULL),
(37, '1653046021.png', 'rty', 'rtyr', 'ry', 'rtyrty', '4214124', NULL, NULL, '+7 (346) 346-3463', NULL, NULL, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 11:27:13', '2022-05-20 11:27:01', '2022-05-20 11:27:13', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_manager_id_foreign` (`manager_id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `company_cost`
--
ALTER TABLE `company_cost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_cost_cost_id_foreign` (`cost_id`) USING BTREE;

--
-- Индексы таблицы `company_document`
--
ALTER TABLE `company_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_document_document_id_foreign` (`document_id`);

--
-- Индексы таблицы `company_phone`
--
ALTER TABLE `company_phone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_phone_phone_id_foreign` (`phone_id`) USING BTREE;

--
-- Индексы таблицы `company_user`
--
ALTER TABLE `company_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_user_user_id_foreign` (`user_id`) USING BTREE;

--
-- Индексы таблицы `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `company_cost`
--
ALTER TABLE `company_cost`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `company_document`
--
ALTER TABLE `company_document`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;

--
-- AUTO_INCREMENT для таблицы `company_phone`
--
ALTER TABLE `company_phone`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT для таблицы `company_user`
--
ALTER TABLE `company_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `costs`
--
ALTER TABLE `costs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `company_cost`
--
ALTER TABLE `company_cost`
  ADD CONSTRAINT `company_cost_cost_id_foreign` FOREIGN KEY (`cost_id`) REFERENCES `costs` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `company_document`
--
ALTER TABLE `company_document`
  ADD CONSTRAINT `company_document_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `company_phone`
--
ALTER TABLE `company_phone`
  ADD CONSTRAINT `company_phone_phone_id_foreign` FOREIGN KEY (`phone_id`) REFERENCES `phones` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `company_user`
--
ALTER TABLE `company_user`
  ADD CONSTRAINT `company_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
