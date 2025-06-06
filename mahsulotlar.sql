-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2025 г., 09:24
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `products_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mahsulotlar`
--

CREATE TABLE IF NOT EXISTS `mahsulotlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mahsulot_nomi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unical_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `mahsulotlar`
--

INSERT INTO `mahsulotlar` (`id`, `mahsulot_nomi`, `unical_id`) VALUES
(1, 'banan', '1001'),
(2, 'Oq kartoshka', '1002'),
(3, 'karam', '1003'),
(4, 'gulkaram', '1004'),
(5, 'Qizil sabzi', '1005'),
(6, 'Sariq sabzi', '1006'),
(7, 'Qora kartoshka', '1007'),
(8, 'avacado', '1008'),
(9, 'Qizil pomidor', '1009'),
(10, 'Pushti pomidor', '1010'),
(11, 'qovoq', '1011'),
(12, 'baqlajon', '1012'),
(13, 'olma', '1013'),
(14, 'nok', '1014'),
(15, 'uzum', '1015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
