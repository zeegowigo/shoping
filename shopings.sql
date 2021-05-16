-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2021 г., 15:56
-- Версия сервера: 5.7.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopings`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(50) NOT NULL,
  `money` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `image`, `name`, `money`, `number`) VALUES
(4, 0x313632303636363033355f373931312e6a7067, 'Процессор AMD', '40000', '5'),
(5, 0x313632303636363035335f333038392e6a7067, 'Процессор Intell', '35000', '10'),
(6, 0x313632303636363130365f383739322e6a7067, 'Видеокарта1050ti', '40000', '3'),
(7, 0x313632303636363134315f363731372e6a7067, 'Видеокарта 1650', '50555', '2'),
(8, 0x313632303636363234365f393636312e6a7067, 'Материнская плата ASROCK B450M PRO4', '6000', '30'),
(9, 0x313632303636363332385f313731332e6a7067, 'Корпус mATX AEROCOOL Cylon Mini', '3000', '50'),
(10, 0x313632303636363335365f393333312e6a7067, 'Корпус ATX ZALMAN i3', '4500', '50'),
(11, 0x313632303636363436385f323635392e6a7067, 'Смартфон APPLE iPhone 11 128Gb', '57450', '6'),
(12, 0x313632303636363535315f393136332e6a7067, 'Смартфон XIAOMI Redmi 9C 64Gb', '9800', '15'),
(13, 0x313632303636363538365f383932322e6a7067, 'Монитор игровой SAMSUNG C24RG50FQI 23.5', '13400', '35'),
(14, 0x313632303636363632345f373931302e6a7067, 'Монитор игровой AOC Gaming C24G1 23.6', '15700', '34');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `password`) VALUES
(1, 'Admin', 'Admin@shop.ru', '202cb962ac59075b964b07152d234b70'),
(8, 'zw', 'zw@list.ru', '202cb962ac59075b964b07152d234b70'),
(9, 'admins', 'zsw@list.ru', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
