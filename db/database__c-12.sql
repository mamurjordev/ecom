-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 05:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mj_training_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buy_price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `user_id`, `product_id`, `buy_price`, `qty`) VALUES
(18, 4, 11, '42000', 1),
(20, 3, 9, '10', 1),
(21, 3, 8, '20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cupon_code`
--

CREATE TABLE `cupon_code` (
  `coupon_id` int(11) NOT NULL,
  `percent` int(11) DEFAULT NULL,
  `ammount` decimal(10,0) DEFAULT NULL,
  `cupon_code` varchar(100) NOT NULL,
  `select_type` varchar(20) NOT NULL DEFAULT 'percent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cupon_code`
--

INSERT INTO `cupon_code` (`coupon_id`, `percent`, `ammount`, `cupon_code`, `select_type`) VALUES
(3, 10, '0', 'FEB', 'percent'),
(4, 20, '0', 'NEW20', 'ammount'),
(5, 10, '0', 'OFF20', 'percent');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_status` varchar(20) NOT NULL,
  `delivery_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` decimal(10,0) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `discount_price` decimal(10,0) NOT NULL,
  `paid_ammount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `feature_image` varchar(255) NOT NULL,
  `gallery` text NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `user_id`, `product_name`, `feature_image`, `gallery`, `description`, `quantity`, `price`, `discount_price`) VALUES
(8, 5, 2, 'Gallery Test', '', '[]', '<p>Desc</p>\r\n', 20, '500', '20'),
(9, 5, 3, 'Watch', '', '[\"img/1643723055.webp\",\"img/1643723064.webp\"]', '<p>Product Desc</p>\r\n', 10, '200', '10'),
(10, 7, 3, 'New Apple MacBook Pro 13 with M1 Chip', 'img/1644074800.webp', '[\"img/1644074800.webp\",\"img/1644074800.webp\",\"img/1644074800.webp\"]', '<h1>The 13-inch MacBook Pro with M1 silicon chip is here&nbsp;- Should You Get It?</h1>\r\n\r\n<p>Having a whole slew of updates, improvements, and enhancements packed into this year&#39;s Apple MacBook Pro, it&#39;s no surprise that it&#39;s among the most desired products in the market. However, with so many folks itching to receive their hands on one, what can we expect from Apple when it comes to releasing the new MacBook Pro? Several have been speculating whether or not Apple will be able to keep the Macbook Pro price point it&#39;s been previously using. Within this column, I will attempt to shed some light on this issue.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The first thing that we should know is that Apple is among the most successful businesses on the planet. They are so successful that they are considered one of the best companies to work for in addition to the best company to work with. This achievement has made it very easy for them to continually make new products, updates, and updates to their past products. The only thing that makes the new MacBook Pro different than some of the previous models is the higher price.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This may indicate that Apple is seeking to keep up with the competition and make their goods less expensive. While there&#39;s absolutely no official word on the price, it&#39;s safe to assume that it will be more expensive than the original edition. For people who require a notebook that may perform on the highest degree, then the new MacBook Pro will be exactly what you are searching for. However, for people who just wish to have fun with a colourful desktop, then the older MacBook Pro may just be what you want.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The fantastic news for those of us desiring the new MacBook Pro but don&#39;t have the budget to buy one is that Apple has other options for those who don&#39;t need to lose a ton of money. There are numerous options of course, but none of them is going to be quite as mobile and flexible as the new MacBook Pro. One of the other major updates that Apple made last year was to the Mac Air, which is essentially a smaller version of the MacBook Pro. While the Air is only available in certain shops right now, it&#39;s quickly turning into one of the most popular choices from the portable computer area.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If you&#39;d like a more compact option, then you can turn it into the Apple iPad. Although it isn&#39;t technically a notebook, it does pack quite a little power into a little package. The iPad has even been able to win a few awards because of its durability, and it is a wonderful gadget for people that prefer to use their device as more of a tool than a cellular device. The only significant drawback with the iPad is that it lacks the screen dimensions of a MacBook Pro, but the experience remains great. It&#39;s definitely worth checking out if you&#39;re thinking about utilizing an iPad.</p>\r\n', 20, '111000', '100000'),
(11, 7, 1, 'Apple Watch Series 6 Blue Aluminum Case with Deep Navy Sport Band GPS', 'img/1644077665.webp', '[\"img/1644077665.webp\",\"img/1644077665.webp\"]', '<p>Aluminum available in silver, space gray, gold,&nbsp;<a href=\"https://istockbd.com/products/apple-watch-series-6-blue-aluminum-case-with-braided-solo-loop\">blue</a>, and (PRODUCT)RED</p>\r\n\r\n<ul>\r\n	<li>GPS/GNSS</li>\r\n	<li>Compass</li>\r\n	<li>Always-on altimeter</li>\r\n	<li>Water resistant 50 meters2</li>\r\n	<li>Blood oxygen sensor (Blood Oxygen app)1</li>\r\n	<li>Second-generation optical heart sensor</li>\r\n	<li>International emergency calling3</li>\r\n	<li>Emergency SOS4</li>\r\n	<li><a href=\"https://istockbd.com/products/apple-watch-series-6-blue-aluminum-case-with-braided-solo-loop\">Accelerometer&nbsp;</a>up to 32 g-forces with fall detection</li>\r\n	<li>Gyroscope</li>\r\n	<li>Ambient light sensor</li>\r\n	<li>Speaker 50 percent louder</li>\r\n</ul>\r\n', 20, '42000', '300');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category_name`, `category_slug`, `category_image`) VALUES
(5, 'Cloud Services', 'cloud-services', 'img/1643037130.webp'),
(6, 'VPS', 'vps', 'img/1643041832.webp'),
(7, 'Macbook', 'mackbook', 'img/1644074669.webp');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_phone` varchar(20) NOT NULL,
  `receiver_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `social_login_token` varchar(70) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `password`, `social_login_token`, `role`) VALUES
(1, 'abdullah', 'admin@mail.com', '018555555', 'bt12', '', 'admin'),
(3, 'Abdullah', 'mail@gmail.com', '01971038645', '1234', '', 'user'),
(4, 'Abdullah Al Mamun', 'abdullah.azonedev@gmail.com', '01724546975', 'pwsd', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cupon_code`
--
ALTER TABLE `cupon_code`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cupon_code`
--
ALTER TABLE `cupon_code`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
