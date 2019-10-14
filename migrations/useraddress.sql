-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 15 2019 г., 01:42
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `useraddress`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571069942),
('m191013_190423_create_user_table', 1571070371),
('m191013_190551_create_post_table', 1571070372);

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(12) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `post_index` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_build` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_office` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `id_user`, `post_index`, `country_code`, `town`, `street`, `num_build`, `num_office`) VALUES
(10, 13, '00236', 'su', 'Иваново', 'Олимпийская', '12г', '10'),
(11, 13, '04365', 'FR', 'Париж', 'Гонсалес', '12а', '3'),
(12, 13, '04365', 'ФР', 'Париж', 'Гонсалес', '12б', '4'),
(16, 15, '75325', 'GE', 'Днепр', 'Стрелковая12', '12', '12'),
(17, 16, '23456', 'EN', 'Львов', 'Мазепы', '89', '2'),
(18, 17, '98321', 'BE', 'Минск', 'Трамвайная', '12', '36'),
(19, 18, '57960', 'SW', 'Петропаловск', 'Вокзальная', '14', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pasw_nohash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `pasw_nohash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `f_name`, `l_name`, `gender`) VALUES
(13, 'user1', 'f8CVRO3mcgT9SHpPbyzG_ligfNnEgwNK', '$2y$13$jVpWXgNxXa.krhgSyrcueu9sMlFU4DtCrRzd3a5sTx7IoTeXyayQq', '123456', NULL, 'user1@post.ua', 10, '2019-10-14 20:05:58', '2019-10-14 20:05:58', 'Александр', 'Алгеев', 1),
(15, 'user3', 'r8OS109NciSGTg2HAXSOSLAu3ywf60cI', '$2y$13$fSbi70uM7VYn8aJ91JU0n.31qIsUemqheTnuMXlP.cWNgQLDaI1ye', '123456', NULL, 'user3@post.ua', 10, '2019-10-14 20:35:18', '2019-10-14 20:35:18', 'Сергей', 'Есенин', 1),
(16, 'user4', '18xyscT3XqJYVWap_lb1Q_NdhtOskVR_', '$2y$13$hNCyPQNPWZBv1IQo6zCfguPseH7.SdBLZxHzay4ETUnNJdPboGAvq', '123456', NULL, 'user4@post.ua', 10, '2019-10-14 20:36:46', '2019-10-14 20:36:46', 'Юлия', 'Золотарева', 2),
(17, 'user5', 'AUP6QSh6kU6rUs0Hg9mcwjDfou62jIPG', '$2y$13$dM64SGqrv9c/owe.pI96EOHXPk/7f.HlbN1LG4FlonpjjI8fIIlwq', '123456', NULL, 'user5@post.ua', 10, '2019-10-14 20:38:42', '2019-10-14 20:38:42', 'Елена', 'Кравченко', 0),
(18, 'user6', 'uStXwrtsglt-WEO0kP746ttqW7KR-tBT', '$2y$13$8vNUr5pZB5C3trCYvmM0r.yJzTpBP0/2W0W.0NSw5Yj83QGm19Mky', '123456', NULL, 'user6@post.ua', 10, '2019-10-14 21:29:59', '2019-10-14 21:29:59', 'Евгений', 'Исаев', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_to_user` (`id_user`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_to_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
