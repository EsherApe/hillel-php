-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2016 г., 18:32
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `university`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `visits` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `schedule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fullName`, `phone`, `email`, `role`, `score`, `visits`, `subject`, `schedule`) VALUES
(1, 'Иванов Иван Иванович', '+38063636363', 'ivan@gmail.com', 'student', 97, '100%', NULL, NULL),
(2, 'Степанов Степан Степанович', '+38050505050', 'stepan@gmail.com', 'teacher', NULL, NULL, 'Math', NULL),
(3, 'Николаев Николай Николаевич', '+380969696', 'nikolay@gmail.com', 'admin', NULL, NULL, NULL, 'monday - friday'),
(4, 'Петров Петр Петрович', '+38077777777', 'petrov@gmail.com', 'user', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
