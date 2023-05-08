-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2023 г., 00:29
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `study_json`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT 0,
  `age` int(11) DEFAULT 0,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modile` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addres` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `type`, `age`, `name`, `surname`, `patronymic`, `modile`, `info`, `addres`, `avatar`) VALUES
(1, 'fvffvf', 'vfvfvfv', 'ffvfv', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'valera1', 'valer.kobelev2017@yandex.ru', '$2y$10$di6HLFk.6MZLny1wIuEFvugdSMYmd3Q9/.evTid7UZ3O7IjrhFLjW', 0, 21, 'Валерий', 'Кобелев', 'Михайлович', NULL, NULL, NULL, NULL),
(5, 'valera12', 'valer.kobelev2017@yandex.ru', '$2y$10$oxwh9kaxKKi5RsU8t0cXH.kaSyxhN6rNOr3MWmamwttDCfRFFUVt6', 0, 44444, 'Валерий', 'Кобелев', 'Михайлович', NULL, '1221212121', 'efeffe', 'avatars/GzYBUnRsmy8X8gWl6xjbNCvDQREYO2MDi3hJHpVt.jpg'),
(7, 'valeraKob', 'valer.kobelev20117@yandex.ru', '$2y$10$9h/02GzhWTLIvZvGp0Zkne.HAm7Bz/PQlUy0JsDfDT035rVyZz/8C', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'valera123', 'valer.kobelev20137@yandex.ru', '$2y$10$vmJCZI6813ijh8Cny.lqp.7DjWIRB/tvDl7PpeZ.5Obysd3vV73oq', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
