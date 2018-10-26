-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Час створення: Жов 26 2018 р., 10:25
-- Версія сервера: 5.7.23
-- Версія PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База даних: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(13, 'Ноутбуки', 1, 1),
(14, 'Планшеты', 2, 1),
(15, 'Мониторы', 3, 1),
(16, 'Игровые компьютеры', 4, 1),
(17, 'template', 21, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(5, 'Ноутбук Dream Machines Clevo X1080-15', 13, 1839707, 2999, 1, 'Dream Machines', '', 'Screen 15.6 \"IPS (1920x1080) Full HD, mat / Intel Core i7-8700K (3.7 - 4.7 GHz) / RAM 16 GB / HDD 1 TB + SSD 500 GB / nVidia GeForce GTX 1080, 8 GB / without OD / LAN / Wi -Fi / Bluetooth / webcam / DOS / 3.4 kg / black', 1, 0, 1),
(6, 'Ноутбук HP Omen 17-an130ur', 13, 2343847, 2099, 0, 'Hewlett Packard', '', 'Screen 17.3 \"IPS (3840x2160) Ultra HD 4K, glossy anti-glare / Intel Core i7-8750H (2.2 - 4.1 GHz) / RAM 8 GB / SSD 256 GB / nVidia GeForce GTX 1050 Ti, 4 GB / without OD / LAN / Wi-Fi / Bluetooth / webcam / Windows 10 Home 64bit / 3.73 kg / black', 1, 1, 1),
(7, 'Ноутбук Asus ROG G752VL 17.3\"\r\n', 13, 2028027, 1299, 1, 'Asus', '', ' Gaming without limits - with maximum gaming performance, attentive design, flawless visuals and upgrades\r\n The marked WASD key group and dedicated numeric pad enable fast, full control\r\n Powerful performance with NVIDIA GTX 965 graphics card\r\n Frag fast, frag first - GameFirst III technology prioritises the flow of game data across your network', 0, 1, 1),
(8, 'Ноутбук Dell XPS 15', 13, 2019487, 2099, 1, 'Dell', '', 'Meet Dell’s smallest 15.6-inch performance laptop\r\nInfinityEdge display: The virtually borderless display maximizes screen space by accommodating a 15.6-inch display inside a laptop closer to the size of a 14-inch, thanks to a bezel measuring just 5.7mm.\r\nOne-of-a-kind design: Measuring in at a slim 11-17mm and starting at just 4 pounds (1.8 kg) with a solid state drive, the XPS 15 is Dell’s lightest 15-inch performance-class laptops.', 0, 0, 1),
(9, 'Ноутбук Xiaomi Mi Notebook Pro 15.6\"', 13, 1953212, 1299, 1, 'Xiaomi', '', 'Magnesium-aluminum alloy protects the case from damage and scratches. The laptop case is completely made of magnesium alloy, which with a lower weight and thickness provides high rigidity. The durable case will protect the internal structural elements from damage even after a fall.', 0, 1, 1),
(10, 'Ноутбук Huawei Matebook X', 13, 1602042, 1399, 0, 'Huawei', '', 'HUAWEI\'s first notebook with FullView design. The 91% screen-to-body ratio creates a near borderless display, delivering a massive view on an impressive body. A truly revolutionary experience with a screen that captures the world.', 0, 0, 1),
(11, 'Ноутбук Lenovo Yoga 920-13IKB', 13, 2028367, 1499, 1, 'Lenovo', '', 'Offering world-class performance, standout style and immersive entertainment, the Yoga 920 is in a league of its own. Sleeker than ever and packed with speed and power to streamline your day: long-range voice-activated support, a nearly edgeless 4K display, an optional digital pen featuring pinpoint accuracy, and more. Stand apart.  ', 1, 0, 1),
(12, 'Apple iPad Pro 12.9 256GB', 14, 1129365, 1199, 1, 'Apple', '', 'The 12.9-inch iPad Pro features a Multi-Touch Retina display and delivers more power than most PCs.1 Add Apple Pencil and the Smart Keyboard, and iPad Pro lets you do more than ever before.2 Even better.', 1, 1, 1),
(13, 'Samsung Galaxy Tab S4 10.5 64GB', 14, 1128670, 1040, 1, 'Samsung', '', 'Multitasking without borders\r\nBased on your employment and the need to stay on the go, the new Galaxy Tab S4 tablet will be your best companion in entertainment and multi-tasking.\r\nSamsung DeX to increase the productivity of your work\r\nSamsung DeX has become compatible with the Samsung Galaxy Tab S4 for the first time. Now high performance on PC has become available on a mobile tablet. Multitasking is available through the HDMI adapter without the use of the DeX or DeX pod station, but for greater efficiency, you can add a keyboard, mouse or monitor.\r\nReady to work\r\nAll at hand for working mode. The desktop on the Galaxy Tab S4 tablet screen is implemented on a regular PC, i.e. with taskbar, multi-mode support and file drag-and-drop functionality. If you want to have a desktop on screen, simply launch Samsung DeX through the Quick Access Bar and add an Android-compatible keyboard and mouse.\r\nWork more efficiently\r\nThe productivity of your work depends on how comfortable the working environment is. It is here that the use of Samsung DeX with an external monitor can help. On the big screen of the monitor, you can continue to use the Android interface of your tablet. Either look at the monitor and use the tablet as a touchpad, a S Pen panel, or a touch pad.', 1, 0, 1),
(14, 'Microsoft Surface Pro 4', 14, 683364, 1399, 1, 'Microsoft', '', 'A best-in-class laptop, with the versatility of a studio and tablet\r\nPowerful Intel Core processor\r\nThe fastest startup and resume of any Surface Pro yet\r\nUp to 13.5 hours of battery life²\r\nNew fanless cooling system5, plus improved hybrid cooling on the i7 model', 0, 0, 1),
(15, 'Монитор Asus MG279Q GAMING 27\"', 15, 355025, 875, 1, 'Asus', '', 'ROG Swift PG279Q gaming monitor is built for victory in the professional gaming arena, and features a WQHD IPS panel with a 165Hz refresh rate. Integrated NVIDIA® G-SYNC™ technology synchronizes the display\'s refresh rate to the GPU for smooth visuals and lag-free gameplay. This monitor features the latest technologies and design touches to make it a must-have weapon for all enthusiast players.', 0, 1, 1),
(16, 'Компьютер HP XW9400', 16, 1563832, 320, 1, 'Hewlett Packard', '', 'HP XW9400 Workstation Case\r\n HP Dual Socket Motherboard\r\n AMD Opteron 2218  Dual Core  2.6GHz Processor\r\n 250GB SATA Hard Drive\r\n Nvidia NVS 290  Video Card\r\n DVD-ROM Drive\r\n 8GB RAM\r\n Heat Sink/Fan Assembly\r\n Power Cord\r\n Operating System: Not Included', 1, 0, 1),
(17, '12312312', 13, 12321, 300, 1, '123213', NULL, '21312321', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(45, 'fsdfsd', '1', '123123123', 4, '2015-05-14 09:54:45', '{\"1\":1,\"2\":1,\"3\":2}', 3),
(46, 'САША1', 'g3424242342', '', 4, '2015-05-18 15:34:42', '{\"44\":3,\"43\":3}', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', ''),
(4, 'admin', 'admin@gmail.com', '222222', 'admin'),
(5, 'Сергей', 'serg@mail.com', '111111', ''),
(7, 'Тарас', 'taras824ss@gmail.com', 'YE45D8TFXpZ8PvH', NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблиці `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
