-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 22 2017 г., 15:00
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `laravel_app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_02_02_142659_create_products_table', 1),
(10, '2017_02_02_142718_create_orders_table', 1),
(11, '2017_02_02_142731_create_pages_table', 1),
(12, '2017_02_21_184826_create_orders_products_table', 1),
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2017_02_02_142659_create_products_table', 1),
(16, '2017_02_02_142718_create_orders_table', 1),
(17, '2017_02_02_142731_create_pages_table', 1),
(18, '2017_02_21_184826_create_orders_products_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `email`, `phone`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Andrew', 'esher5580@gmail.com', '0636328843', 'Feedback', '2017-02-22 08:07:36', '2017-02-22 08:07:36'),
(2, 'Татьяна Калашник', 'tania@mail.ru', '0636328843', 'Tania''s feedback', '2017-02-22 08:21:16', '2017-02-22 08:21:16'),
(3, 'qwerty', 'mm@mail.ru', '777777', 'some text', '2017-02-22 08:22:43', '2017-02-22 08:22:43'),
(4, 'Misha', 'misha@yandex.ru', '7778889990', 'Very good book!', '2017-02-22 08:25:09', '2017-02-22 08:25:09'),
(5, 'Vova', 'vova@mail.com', '7777777777', 'Vova feedback', '2017-02-22 08:27:01', '2017-02-22 08:27:01');

-- --------------------------------------------------------

--
-- Структура таблицы `orders-products`
--

CREATE TABLE IF NOT EXISTS `orders-products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `alias`, `img_url`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Coders at Work: Reflections on the Craft of Programming', 'coders-at-work', 'https://images-na.ssl-images-amazon.com/images/I/51sgFGIjHjL._SX331_BO1,204,203,200_.jpg', 28.49, 'Steve McConnell’s Code Complete is considered to be the encyclopedia of practical coding and a must-read for any professional programmer. And, it’ easy to understand why – it’s a massive piece of literature at 900-pages, but each chapter is packed with suggestions and techniques to improve everyday programming and construct code that is readable and easier to manage. McConnell has a knack for presenting his material in a story format that makes the book easy to read and even entertaining. No matter what level you’re at, Code Compete will undoubtedly change the way you think about and write code.', '2017-02-21 19:00:44', '2017-02-21 19:00:46'),
(2, 'The Mythical Man Month', 'the-mythical-man-month', 'http://www.codingdojo.com/blog/wp-content/uploads/The-Mythical-Man-Month.jpg', 27.14, 'The premise of this book is built on the fact that computers change, but people don’t. The Mythical Man Month is a programming classic that discusses the human elements of software engineering. Even though the book was written 30 years ago (first published in 1975) it’s stood the test of time. Why? Because building things, including software, has been as much about people as much as hit has been about materials or technology. If you’re aspiring to become a project manager, this book will help you understand things that can go wrong in software development and will give you practical advice or working with, organizing and managing teams.', '2017-02-21 19:02:15', '2017-02-21 19:02:18'),
(3, 'Don’t Make Me Think, Revisited: A Common Sense Approach to Web Usability', 'dont-make-me-think', 'https://images-na.ssl-images-amazon.com/images/I/51pnouuPO5L._SX387_BO1,204,203,200_.jpg', 33.46, 'If you’re going to read a book on usability make it this one! Don’t Make Me Think is a great resource for any web developer who want to create websites, mobile sites or mobile apps that are much easier to use. The book is loaded with helpful information that’s presented in a clear and concise way that could be understood by both technical and non-technical audiences alike.', '2017-02-21 19:04:03', '2017-02-21 19:04:05'),
(4, 'The Pragmatic Programmer: From Journeyman to Master', 'pragmatic-programmer', 'http://www.codingdojo.com/blog/wp-content/uploads/The-Pragmatic-Programmer-238x300.jpg', 38.59, 'Another oldie, but goody, that continues to stand the test of time. The Pragmatic Programmer is a collection of lessons and recommendations for software developers. The book contains a set of numbered tips, about 70 of them, which are collected on a single tear-out card situated in the back of the book. The tips alone might seem obvious, but they contain some surprising dimensions that will help strengthen your programming career and hone your craft! ', '2017-02-21 19:05:50', '2017-02-21 19:05:53'),
(5, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'clean-code', 'http://www.codingdojo.com/blog/wp-content/uploads/Clean-Code-226x300.jpg', 32.24, 'Poorly written code can bring a project to its knees, which is why developing great code is so important! In Clean Code, “Uncle Bob” Martin shares tips and examples on how to create better code. The book dives into the principles and best practices of writing clean code, and also presents increasingly challenging case studies presented that challenges readers to think about what’s right with the code, and what’s wrong with it. While examples in Clean Code are given in Java, but is applicable to nearly all programming languages.', '2017-02-21 19:06:44', '2017-02-21 19:06:47'),
(6, 'Programming Pearls', 'programming-pearls', 'http://www.codingdojo.com/blog/wp-content/uploads/Programming-Pearls-221x300.jpg', 32.39, 'This is a classic book for newbies that teaches the basics of solving problems. If you work through the problems on your own (without looking ahead) you’ll learn a lot and be a much stronger programmer with a deeper understanding of algorithms and algorithm design.', '2017-02-21 19:08:20', '2017-02-21 19:08:22'),
(7, 'Cracking the Coding Interview: 150 Programming Questions and Solutions', 'cracking-the-code-interview', 'http://www.codingdojo.com/blog/wp-content/uploads/Cracking-the-Coding-Interview-200x300.jpg', 29.94, 'This is one of the go-to books for programming interviews if you’re looking to land a gig at a top company such as Amazon, Apple, Facebook, Google or Microsoft. As the title suggests, the book contains 150 programming questions that you might encounter at interviews, and then breaks down how to solve them. The remainder of the book focuses on non-coding aspects of the interview process such as interview prep, resume prep, behavioral prep, etc. Definitely one of the best programming interview books out there. Another good prep book is Introduction to Algorithms , which is considered to be the “bible of algorithms.”', '2017-02-21 19:09:39', '2017-02-21 19:09:40'),
(8, 'Soft Skills: The software developer’s life manual', 'soft-skills', 'http://www.codingdojo.com/blog/wp-content/uploads/Soft-Skills-239x300.jpg', 32.61, 'For most software developers, coding is the fun part. The hard parts involve dealing with clients, peers, and managers, staying productive, achieving financial security and so on. This book covers everything-else-apart-from-coding ranging from career, to personal branding, blogging, learning, teaching, finances, and even fitness and relationships.', '2017-02-21 19:10:37', '2017-02-21 19:10:40'),
(9, 'Zero Bugs and Program Faster', 'zero-bugs', 'http://www.codingdojo.com/blog/wp-content/uploads/zero-bugs.jpg', 25.00, 'The author of Zero Bugs spent two years researching every bug avoidance technique she could find. This book contains the best of them! It includes useful tips and techniques, and presents information in an easy-to-digest way and brought to life with stories and metaphors that make it a really enjoyable (and memorable) read.', '2017-02-21 19:12:03', '2017-02-21 19:12:05'),
(10, 'Eloquent Javascript', 'eloquent-js', 'http://eloquentjavascript.net/img/cover.png', 21.00, 'This is a book about JavaScript, programming, and the wonders of the digital. You can read it online here, or get your own paperback copy of the book.', '2017-02-22 09:57:46', '2017-02-22 09:57:46');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Andrew', 'esher5580@gmail.com', '$2y$10$tipA5stNe.Vo4tCUvz7M8eZ4gsUDR19mRh3ON1oH425eKbaQImvZu', NULL, '2017-02-22 08:53:13', '2017-02-22 08:53:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
