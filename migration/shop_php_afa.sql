-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 02:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_php_afa`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'Phones'),
(2, 0, 'Tablets'),
(3, 1, 'Sumsung Phones'),
(4, 1, 'Apple Phones'),
(5, 2, 'Sumsung Tablets'),
(6, 2, 'Apple Tablets'),
(7, 2, 'Acer Tablets');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES
(1, 3, 'Mobile phone Samsung Galaxy M31 6/128GB Blue (SM-M315FZBVSEK)', 'Screen (6.4 \", Super AMOLED, 2340х1080) / Samsung Exynos 9611 (4 x 2.3 GHz + 4 x 1.7 GHz) / quad main camera: 64 MP + 8 MP + 5 MP + 5 MP, front 32 MP / RAM 6 GB / 128 GB of internal memory + microSD (up to 512 GB) / 3G / LTE / GPS / GLONASS / BDS / Galileo / support for 2 SIM cards (Nano-SIM) / Android 10 (Q) / 6000 mAh', 276.22, 'samsung_galaxy_m31_6_128gb_blue_images_16893927576.jpg', 1),
(2, 3, 'Mobile phone Samsung Galaxy S20 Ultra 12 / 128GB Cosmic Gray (SM-G988BZADSEK)', 'Screen (6.9 \", Dynamic AMOLED 2X, 3200x1440) / Samsung Exynos 990 (2 x 2.73 GHz + 2 x 2.5 GHz + 4 x 2.0 GHz) / main camera: 108 MP + 48 MP + 12 MP + ToF, front: 40 MP / RAM 12 GB / 128 GB of memory + microSD (up to 1 TB) / 3G / LTE / 5G / GPS / video card 2 SIM cards (Nano-SIM) / Android 10.0 (Q) / 5000 mA', 1399.65, 'samsung_galaxy_s20_ultra_gray_sm_g988bzadsek_images_16847767567.jpg', 1),
(3, 4, 'Mobile phone Apple iPhone 7 32GB Black', 'Screen (4.7 \", IPS, 1334x750) / Apple A10 Fusion / main camera: 12 megapixels, front camera: 7 megapixels / RAM 2 GB / 32 GB in-memory memory / 3G / LTE / GPS / Nano-SIM / iOS 10', 368.3, 'apple_iphone_7_32gb_black_images_1757072045.jpg', 1),
(4, 4, 'Mobile phone Apple iPhone Xs 64GB Space Gray (MT9E2)', 'Screen (5.8 \", OLED (Super Retina HD), 2436x1125) / Apple A12 Bionic / main camera: 12 megapixel camera, front camera: 7 megapixel / RAM 4 GB / 64 GB wired memory / 3G / LTE / GPS / Nano -SIM / iOS 12', 699.81, 'copy_apple_iphone_xs_64_gb_space_gray_5e1d9b20d628e_images_16325894376.jpg', 1),
(5, 5, 'Tablet Samsung Galaxy Tab A 10.1 32GB Wi-Fi Black (SM-T510NZKDSEK)', 'Screen 10.1 \"(1920x1080) MultiTouch / Samsung Exynos 7904 (2x1.8 GHz + 6x1.6 GHz) / RAM 2 GB / 32 GB wired memory + microSD / Wi-Fi / Bluetooth 5.0 / main camera 8 MP, front - 5 MP / GPS / GLONASS / Android 9.0 (Pie) / 470 g / black', 239.38, 'samsung_sm_t510nzkdsek_images_11943914094.jpg', 1),
(6, 5, 'Tablet Samsung Galaxy Tab Active 2 LTE Black (SM-T395NZKASEK)', 'Screen 8.0 \"TFT (1280x800) Multi-Touch / Samsung Exynos 7870 (1.6 GHz) / RAM 3 GB / 16 GB memory + microSD / 3G / 4G / NFC / Wi-Fi / Bluetooth 4.0 / 8 MP main camera, frontal 5 MP / GPS / GLONASS / Beidou / saw-logs / Android 7.1 (Nougat) / 419 g / black', 515.64, 'samsung_sm_t395nzkasek_images_3281825423.jpg', 1),
(7, 6, 'Tablet Apple ipad 7 10.2\" A2197 Wi-fi 32gb 2019 16127127', '10.2 \"IPS screen (2160x1620) capacitive Multi-Touch / Apple A10 Fusion / RAM 3GB / 32GB internal memory / Wi-Fi / Bluetooth 4.2 / main camera 8 megapixels, front - 1.2 megapixels / iPadOS / 483 g / gray space', 1197.07, 'copy_apple_ipad_10_2_wi_fi_32gb_space_gray_mw742_5e4bbeb12a02f_images_16946443676.jpg', 1),
(8, 6, 'Tablet Apple iPad Pro 4 11 A Wi-fi 256gb 2020', '11 \"IPS Screen (2388x1668) capacitive MultiTouch / Apple A12Z Bionic / 256GB internal memory / Wi-Fi / Bluetooth 5.0 / main dual camera 12MP + 10MP, front - 7MP / iPadOS / 471g / silver', 1197.07, 'copy_apple_ipad_pro_11_wi_fi_128gb_silver_5e7336e50c7b7_images_17437596121.jpg', 1),
(9, 7, 'Tablet Acer Iconia One 10 1/16 WiFi (B3-A30) White', 'Screen diagonal: 10.1 / Screen resolution: 1280 × 800 / Matrix type: IPS / Processor: MediaTek MT8163 / Cores: 4 (1.3 GHz) / RAM: 1 GB / Internal memory: 16 GB / Rear camera: 5 MP / Front camera: 2 MP / Case material: Plastic / Metal / Width: 167.5 / Height: 259 / Depth: 9.2 / Weight: 540 /', 155.48, '166155991_images_15942998674.jpg', 1),
(10, 7, 'Tablet Acer One 10 S1003P-1339 10.1\" (NT.LEDEU.009)', 'Acer One 10 S1003 Tablet Sometimes you need a tablet, and sometimes a laptop. C Acer One 10 you do not have to choose. Work, play, share files - anything on this device. Convenient modes Whether you work or watch a video with friends, Acer One 10 will find the suitable mode. Choose from four modes - Notebook for working with text, Tablet for working with touch screen, Presentation and Display, if you want to relax from work and have fun. Instant Transformation Acer One 10 easily switches between modes thanks to the magnetic screen mount. Now it’s easy to turn a laptop into a tablet by disconnecting the keyboard and just as easily returning to laptop mode by attaching the keyboard back. Precise navigation Forgot your mouse at home, but hate the touchpad Use Precision Touchpad technology and you won’t have to worry. Thanks to the improved touchpad, you can easily zoom on the screen, scroll through pages and move from one page to another. High quality image Enjoy a clear image on the HD screen (1280x800). With IPS technology, you can see detail and color cast even when viewed from an angle. Elegant Design The design of the Acer One 10 is exquisite in simplicity and elegance. Pleasant finish in brushed metal looks stylish and reliable.', 430.81, '175013035_images_16434011371.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `username`, `phone`, `address`) VALUES
(21, 'user@mail.com', '4297f44b13955235245b2497399d7a93', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_uindex` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
