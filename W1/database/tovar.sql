-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 26 2022 г., 14:07
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `global`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `name` varchar(1150) NOT NULL,
  `price` int(11) NOT NULL,
  `description` DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `price`, `description`) VALUES
(1, 'Nicon I-200', 500, NULL),
(2, 'Lumix O-877', 700, NULL),
(3, 'Canon M-790', 350, NULL),
(4, 'Sony L-340', 600, NULL),
(5, 'Canon D-322', 350, NULL),
(6, 'Nikon J-100', 500, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
