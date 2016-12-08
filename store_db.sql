-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2016 г., 18:48
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `store_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_phone`, `user_email`, `product_id`, `product_amount`) VALUES
(1, 'Andrew', '0636328843', 'esher5580@gmail.com', 2, 5),
(2, 'Степан', '0636328333', 'mail@gmail.com', 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(255) DEFAULT NULL,
  `product_img_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_desc`, `product_img_link`) VALUES
(1, 'Dell Streak 7.0', 2300, 'Introducing Dell 2122 Streak 7. Share photos, videos and movies together. It\\u2019s small enough to carry around, big enough to gather around. Android\\u2122 2.2-based tablet with over-the-air upgrade capability for future OS releases.  A vibrant 7-inch, m', 'dell-streak-7.0.jpg'),
(2, 'Dell Venue', 3200, 'The Venue is the perfect one-touch, Smart Phone providing instant access to everything you love. All of Venue''s features make it perfect for on-the-go students, mobile professionals, and active social communicators who love style and performance.\\n\\nElega', 'dell-venue.0.jpg'),
(4, 'Droid Pro', 3800, 'Access your work directory, email or calendar with DROID Pro by Motorola., an Android-for-business smartphone with corporate-level security. It features both a QWERTY keyboard and touchscreen, a speedy 1 GHz processor and Adob Flash Player 10.', 'droid-pro-by-motorola.0.jpg'),
(5, ' LG Axis', 2600, 'Android plus QWERTY is a powerful duo. LG Axis melds a speedy UI with the limitless micro-entertainment of 80,000+ apps including voice-activated Google. Feel the tactile vibration on its tempered glass touchscreen. Take the fuzziness out of your fun with', 'lg-axis.0.jpg'),
(6, 'Droid-2 Global', 3500, 'With Quad Band GSM, the DROID 2 Global can send email and make and receive calls from more than 200 countries. It features an improved QWERTY keyboard, super-fast 1.2 GHz processor and enhanced security for all your business needs.', 'droid-2-global-by-motorola.0.jpg'),
(7, 'MOTOROLA ATRIX 4G', 3300, 'MOTOROLA ATRIX 4G gives you dual-core processing power and the revolutionary webtop application. With webtop and a compatible Motorola docking station, sold separately, you can surf the Internet with a full Firefox browser, create and edit docs, or access', 'motorola-atrix-4g.0.jpg'),
(8, 'MOTOROLA BRAVO', 2700, 'MOTOROLA BRAVO with MOTOBLUR with its large 3.7-inch touchscreen and web-browsing capabilities is sure to make an impression.  And it keeps your life updated and secure through MOTOBLUR.', 'motorola-bravo-with-motoblur.0.jpg'),
(9, 'Motorola CHARM', 2680, 'Motorola CHARM fits easily in your pocket or palm. Includes MOTOBLUR so you can sync and merge your contacts, emails, messages and posts with continuous updates and back-ups.', 'motorola-charm-with-motoblur.0.jpg'),
(10, 'Motorola DEFY', 2900, 'DEFY with MOTOBLUR is ready for everything life throws your way. It''s water-resistant and dustproof, with plenty of entertainment options; and, with MOTOBLUR, it automatically delivers messages and status updates right to your home screen.', 'motorola-defy-with-motoblur.0.jpg'),
(11, 'Nexus S ', 6500, 'Nexus S is the next generation of Nexus devices, co-developed by Google and Samsung. The latest Android platform (Gingerbread), paired with a 1 GHz Hummingbird processor and 16GB of memory, makes Nexus S one of the fastest phones on the market. It comes p', 'nexus-s.0.jpg'),
(12, ' Samsung Galaxy Tab', 7000, 'Feel Free to Tab. The Samsung Galaxy Tab, the tablet device that delivers enhanced capabilities with advanced mobility, has a large, perfectly sized, 7.0\\" screen that offers plenty of room for the thousands of interactive games and apps available for the', 'samsung-galaxy-tab.0.jpg'),
(13, 'Samsung Gem', 5500, 'The Samsung Gem maps a route to a smarter mobile experience. By pairing one of the fastest processors in the category with the Android platform, the Gem delivers maximum multitasking speed and social networking capabilities to let you explore new territor', 'samsung-gem.0.jpg'),
(14, 'Samsung Mesmerize', 4200, 'Experience entertainment in a whole new light. The stylish and slim Samsung Mesmerize, with its vivid 4-inch Super AMOLED display, makes everything from Hollywood blockbusters to music videos to Amazons bestsellers look absolutely brilliant even outside i', 'samsung-mesmerize-a-galaxy-s-phone.0.jpg'),
(15, 'Samsung Showcase', 3900, 'Experience entertainment in a whole new light. The stylish and slim Samsung Showcase, with its vivid 4-inch Super AMOLED display, makes everything from Hollywood blockbusters to music videos to Amazons bestsellers look absolutely brilliant even outside in', 'samsung-showcase-a-galaxy-s-phone.0.jpg'),
(16, ' Samsung Transform', 4300, 'Change your perspective.  The Samsung Transform\\u2122 is an Android powered device that delivers the truly customizable experience you want your phone to provide.  Enjoy a new and easy way to personalize your device for business or for entertainment, show', 'samsung-transform.0.jpg'),
(17, 'Sanyo Zio', 2200, 'Zio uses CDMA2000 1xEV-DO rev. A and Wi-Fi technologies and features a 3.5-inch WVGA touch-screen display as a backdrop for a fully customizable mobile multimedia experience.  Along with the touch-screen, a trackball helps users navigate features such as ', 'sanyo-zio.0.jpg'),
(18, 'T-Mobile G2', 2400, 'The T-Mobile G1 was the world''s first Android-powered phone. Launched nearly two years ago, it created an entirely new class of mobile phones and apps. Its successor, the T-Mobile G2 with Google, will continue the revolution.\\n\\nThe T-Mobile G2 will deliv', 't-mobile-g2.0.jpg'),
(19, 'T-Mobile Mytouch 4G', 2100, 'The myTouch 4G lets you connect fast, communicate easily, and share all on America''s largest 4G network.\\n\\nBuilt with families in mind, the newest T-Mobile myTouch 4G helps solve the challenges of staying physically and emotionally connected by sharing p', 't-mobile-mytouch-4g.0.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_user_name` varchar(255) DEFAULT NULL,
  `review_text` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `review_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `review_user_name`, `review_text`, `product_id`, `review_date`) VALUES
(6, 'Andrew', 'This product was great in terms of quality. I would definitely buy another!', 1, '2016-12-08 13:21:47'),
(7, 'Serg', 'I''ve alredy ordered another one!', 1, '2016-12-08 13:22:25'),
(10, 'Michail', 'Great thing, I like it!', 1, '2016-12-08 13:38:21'),
(11, 'Oleg', 'Good battery, nice price.', 2, '2016-12-08 13:39:45'),
(12, 'Tania', 'Very slow. I don''t like it.', 2, '2016-12-08 13:44:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
