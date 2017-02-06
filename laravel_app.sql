-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2017 г., 13:18
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_02_02_142659_create_products_table', 1),
(2, '2017_02_02_142718_create_orders_table', 1),
(3, '2017_02_02_142731_create_pages_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `email`, `phone`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Andrew', 'esher5580@gmail.com', '0636328843', 'I like this things!', '2017-02-06 08:54:46', '2017-02-06 08:54:48'),
(2, 'Bob', 'bob@mail.com', '0777000777', 'I hate this things!', '2017-02-06 09:06:06', '2017-02-06 09:06:08'),
(3, 'Lauryn Hill', 'Lauryn_Hill@fugees.com', '0333000333', 'I just sing songs!', '2017-02-06 09:08:58', '2017-02-06 09:08:59');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `alias`, `content`, `created_at`, `updated_at`) VALUES
(1, 'products', 'products-page', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate neque odio ut? Accusamus ad, architecto dolor eius eos est expedita facilis iusto labore laudantium minima quos ratione totam voluptatibus voluptatum. Aperiam consequatur enim ipsa perferendis quod ullam vero voluptatum!', '2017-02-06 09:57:32', '2017-02-06 09:57:33'),
(2, 'orders', 'orders-page', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate neque odio ut? Accusamus ad, architecto dolor eius eos est expedita facilis iusto labore laudantium minima quos ratione totam voluptatibus voluptatum. Aperiam consequatur enim ipsa perferendis quod ullam vero voluptatum!', '2017-02-06 09:58:14', '2017-02-06 09:58:18');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `alias`, `price`, `description`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Emu Oil – 30ml', 'emu-oil–30ml', 12.00, '100% natural Australian Emu Oil. When massaged into the skin it absorbs quickly leaving it dry and soft. Emu Oil can help soothe redness and inflammation and provide relief for aching muscles and joints. It cares for irritated skin and can help reduce the appearance of scars.', 'https://loremcare.co.uk/wp-content/uploads/2016/09/emu-oil-single.png', NULL, NULL),
(2, 'Emu Balm – 100g', 'emu-balm–100g', 24.00, 'Emu Balm uses 100% natural Australian Emu oil blended with coconut oil and a combination of essential oils known for their healing abilities for additional pain relief. It can assist with the of symptoms of arthritis, back pain, sciatica, fibromyalgia, polymyalgia, gout, frozen shoulder, sports injuries other and other aches and pains.', 'https://loremcare.co.uk/wp-content/uploads/2016/09/emu-balm-100.png', NULL, NULL),
(3, 'Emu Balm – 10g', 'emu-balm-10g', 10.00, 'All the benefits of Lorem’s Emu Balm in a handy handbag/ travel size pot.', 'https://loremcare.co.uk/wp-content/uploads/2016/09/emu-balm-10.png', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
