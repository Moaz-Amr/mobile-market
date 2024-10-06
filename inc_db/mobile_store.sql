-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 05, 2024 at 01:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '123admin');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `user_id` int(11) NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`user_id`, `item`) VALUES
(17, 57),
(17, 58),
(17, 61);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `ask` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `unser` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `ask`, `user_id`, `unser`) VALUES
(1, 'ننن', 17, 'lol'),
(2, 'ننن', 17, 'pop'),
(3, 'نالب', 17, 'koko'),
(4, NULL, NULL, 'kkk'),
(5, 'ghhggh', 17, NULL),
(6, 'جديد', 12, NULL),
(7, 'من انتم', 10, 'انت مالك'),
(8, 'lhg', 10, NULL),
(9, 't,\r\n\r\n', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `descrp` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `descrp`, `img`, `category`) VALUES
(57, 'سامسونج جلاكسى A35 5G - رامات 8 جيجا - 256 جيجا بايت - كحلي', 12000, 'الشريحة: شريحتين Nano-SIM ( الاثنين في وضع الاستعداد )\r\nالشاشة: 6.6 بوصة ، 1080 × 2340 بكسل\r\nالرامات: 8 جيجا بايت\r\nالذاكرة الداخلية: 256 جيجا بايت\r\nالكاميرا الخلفية: ثلاثية: 50 ميجابكسل + 8 ميجابكسل + 5 ميجابكسل\r\nالكاميرا الامامية: 13 ميجابكسل\r\nاللون: كحلي', 'samsung-galaxy-a35-1.jpg', 'samsung'),
(58, 'هواوي نوفا 12s - رامات 8 جيجا بايت - 256 جيجا - أسود', 150000, 'الشريحة: شريحتين ( Nano-SIM ) - الاثنين في وضع الاستعداد\r\nالشاشة: 6.7 بوصة بدقة 1084 × 2412 بكسل\r\nالرامات: 8 جيجا بايت\r\nالذاكرة الداخلية: 256 جيجا بايت\r\nالكاميرا الخلفية: مزدوجة: 50 ميجابكسل + 8 ميجابكسل\r\nالكاميرا الامامية: 60 ميجابكسل \r\nاللون: أسود\r\nاشترى الأن و أحصل على هديتك (هواوي سماعة أذن لاسلكية مجانا)', 'huawei-nova-12s---black-6.jpg', 'Hawaui'),
(59, 'سامسونج جلاكسى A55 5G - رامات 8 جيجا - 128 جيجا بايت - أصفر', 190000, 'الشريحة: شريحة SIM مزدوجة هجينة (Nano-SIM، مزدوجة في وضع الاستعداد)\r\nالشاشة: 6.6 بوصة ، 1080 × 2340 بكسل\r\nالرامات: 8 جيجا بايت\r\nالذاكرة الداخلية: 128جيجا بايت\r\nالكاميرا الخلفية: ثلاثية: 50 ميجابكسل + 12 ميجابكسل + 5 ميجابكسل\r\nالكاميرا الامامية: 32 ميجابكسل\r\nاللون: أصفر', 'zg-21-7.png', 'samsung'),
(60, 'سامسونج جلاكسى A15 - رامات 8 جيجا - 256 جيجا بايت - أزرق فاتح', 200000, 'الشريحة: شريحتين Nano-SIM ( الاثنين في وضع الاستعداد )\r\nالشاشة: 6.5 بوصة , 1080 × 2340 بكسل\r\nالرامات: 8 جيجا بايت\r\nالذاكرة الداخلية: 256 جيجا بايت\r\nالكاميرا الخلفية: ثلاثية: 50 ميجابكسل + 5 ميجابكسل + 2 ميجابكسل\r\nالكاميرا الامامية: 13 ميجابكسل\r\nاللون: أزرق فاتح', 'light-blue-min_2.jpg', 'samsung'),
(61, 'هواوي نوفا 12 SE - رامات 8 جيجا - 256 جيجا بايت - أخضر', 250000, 'الشريحة: شريحتين ( Nano-SIM ) - الاثنين في وضع الاستعداد\r\nالشاشة: 6.67 بوصة بدقة 1080 × 2400 بكسل\r\nالرامات: 8 جيجا بايت\r\nالذاكرة الداخلية: 256 جيجا بايت\r\nالكاميرا الخلفية: ثلاثية: 108 ميجابكسل +8 ميجابكسل + 2 ميجابكسل\r\nالكاميرا الامامية: 32 ميجابكسل \r\nاللون: أخضر\r\nاشترى الأن و أحصل على هديتك (هواوي سماعة أذن لاسلكية FreeBuds SE 2 مجانا)', 'huawei-nova-12-se-6.jpg', 'Hawaui'),
(62, 'هواوي نوفا 12i - رامات 8 جيجا بايت - 256 جيجا - أخضر', 1400000, 'الشريحة: شريحتين ( Nano-SIM ) - الاثنين في وضع الاستعداد\r\nالشاشة: 6.7  بوصة بدقة 1080 × 2388 بكسل\r\nالرامات: 8 جيجا بايت\r\nالذاكرة الداخلية: 256 جيجا بايت\r\nالكاميرا الخلفية: مزدوجة: 108 ميجابكسل + 2 ميجابكسل\r\nالكاميرا الامامية: 8 ميجابكسل \r\nاللون: أخضر\r\nاشترى الأن و أحصل على هديتك (هواوي سماعة أذن Freelace لايت مجانا)', 'huawei-nova-12i---green-55.jpg', 'Hawaui'),
(63, 'سوني 200 برو - رامات 12 جيجا - 512 جيجا بايت - سماوي', 10000, 'الشريحة: شريحتين Nano-SIM، ( الاثنين في وضع الاستعداد )\r\nالشاشة:  6.78 بوصة 1224 × 2700 بكسل\r\nالرامات: 12 جيجا بايت\r\nالذاكرة الداخلية: 512 جيجابايت\r\nالكاميراالخلفية: 50 ميجا بيكسل + 50 ميجا بيكسل + 12 ميجا بيكسل\r\nالكاميرا الأمامية: 50 ميجا بيكسل\r\nاللون: سماوي\r\nاشترى الأن و أحصل على هديتك (هونر سماعة أذن لاسلكية X6 + هونر شاحن ستاند لاسلكي 100 وات مجانا)', 'honor-200-pro--ocean-cyan-77.jpg', 'sony'),
(64, 'سوني X6a - رامات 4 جيجا - 128 جيجا بايت - أزرق سماوي', 200000, 'الشريحة: شريحتين Nano-SIM، ( الاثنين في وضع الاستعداد )\r\nالشاشة: 6.56 بوصة 720 × 1612  بكسل\r\nالرامات: 4 جيجا بايت\r\nالذاكرة الداخلية: 128 جيجابايت\r\nالكاميراالخلفية: ثلاثية: 50 ميجابكسل + 2 ميجابكسل + 2 ميجابكسل \r\nالكاميرا الأمامية: 5 ميجابكسل\r\nاللون: أزرق سماوي', 'honor-x6a-green-1.jpg', 'sony'),
(65, 'سوني X7b - رامات 6 جيجا - 256 جيجا بايت - فضي', 10000, 'الشريحة: شريحتين Nano-SIM، ( الاثنين في وضع الاستعداد )\r\nالشاشة: 6.8 بوصة 1080 × 2412 بكسل\r\nالرامات: 6 جيجا بايت\r\nالذاكرة الداخلية: 256 جيجابايت\r\nالكاميراالخلفية: 108 ميجابكسل + 5 ميجابكسل + 2 ميجابكسل \r\nالكاميرا الأمامية: 8 ميجابكسل\r\nاللون: فضي', 'mh902-1.jpg', 'sony');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(1, 'معاذ عمرو', 'fhfhhgfhggf@gmail.com', '', '000'),
(6, '5555', 'fhfhhgfhggf@gmail.com', 'xczzcc', '555'),
(7, 'kl.', 'fh@gmail.com', 'nn,', '000'),
(10, 'معاذ عمرو', 'fhfhhgfhggf@gmail.com', 'Moaz2', '012'),
(11, 'amr', 'amr@gmail.com', 'amr', '123'),
(12, 'koko', 'fhfhhgfhggf@gmail.com', 'kooko', '123'),
(17, 'zozo', 'moko@gmail.com', 'moko', '123'),
(21, 'zoz', 'MoazAmrAlsaid@gmail.com', 'mo', '123'),
(26, 'Moaz', 'MoazAmrAlsaid@gmail.com', 'mono', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`user_id`,`item`),
  ADD KEY `cons_items` (`item`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `cons_items` FOREIGN KEY (`item`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cons_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
