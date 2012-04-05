-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 05 2012 г., 10:08
-- Версия сервера: 5.1.61
-- Версия PHP: 5.3.6-13ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `cats`
--

INSERT INTO `cats` (`id`, `title`) VALUES
(1, 'Первая категория'),
(2, 'Вторая категория');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `c_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_text` text COLLATE utf8_unicode_ci NOT NULL,
  `c_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `c_name`, `c_text`, `c_date`) VALUES
(1, 2, 'Николай', 'лоыовывывы', '0000-00-00'),
(2, 2, '1Николай', 'лоыовывывы2', '2012-04-04'),
(3, 1, 'lol', 'llll', '2012-04-04'),
(4, 1, '111', '1111', '2012-04-04'),
(5, 3, '1', '1', '2012-04-04'),
(6, 3, '1', '1', '2012-04-04'),
(7, 3, '1', '1', '2012-04-04'),
(8, 2, 'Новый', 'цццц', '2012-04-04'),
(9, 2, '1Николай1', '', '2012-04-04'),
(10, 1, 'Тест', 'тоесть я', '2012-04-04');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_text` text COLLATE utf8_unicode_ci NOT NULL,
  `p_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `p_text`, `p_date`) VALUES
(1, 1, 'Первый материал', 'Лялялялялялялля', '2012-04-03'),
(2, 1, 'Второй материал', 'Ляляля, текст второго материала', '2012-04-03'),
(3, 0, 'qqq', 'qqq', '2012-04-04'),
(4, 0, 'qqq1', 'qqq13', '2012-04-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
