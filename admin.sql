-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 05:24 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminl`
--

CREATE TABLE `adminl` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminl`
--

INSERT INTO `adminl` (`id`, `username`, `password`) VALUES
(1, 'don', 'don'),
(2, 'paudel', 'paudel'),
(3, 'tori', 'tori');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_address`
--

CREATE TABLE `checkout_address` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_address`
--

INSERT INTO `checkout_address` (`id`, `firstname`, `lastname`, `email`, `address`, `city`, `pincode`, `contactno`) VALUES
(1, '1111112342', '12321', 'earwrawe', 'dsfsdfdsa', 'asdfsdfds', 'sdfsdaf', 'asdfasd'),
(2, 'dibas', 'paudel', 'dibaspaudel1995@gmail.com', 'tori*lal', 'kathmandu', '987458', '9800909002'),
(3, 'dibas', 'paudel', 'dibaspaudel1995@gmail.com', 'tori*lal', 'kathmandu', '987458', '9800909002'),
(4, 'dibas', 'paudel', 'dbspaudel@gmail.com', 'dsaf', 'asdf', '123456', '9800909002'),
(5, 'asdf', 'dsaf', 'dibaspaudel1995@gmail.com', 'sdaf', 'fsdfsa', '123456', '9800909002'),
(6, 'piuop', 'piou', 'dibaspaudel1995@outlook.com', 'ioup', 'poiu', '123456', '9800909002'),
(7, 'dibas', 'don', 'dbspaudel@gmail.com', 'asdf', 'adsf', '123456', '9800909002'),
(8, 'pawan', 'subedi', 'pawan@gmail.com', 'damak', 'jhapa', '123456', '1234657890'),
(9, 'anish', 'shrestha', 'anish@gmail.com', 'Basundhara', 'Kathmandu', '987456', '9874563210'),
(10, 'anish', 'shrestha', 'anish@gmail.com', 'basundhara', 'kathmandu', '440066', '9800909002'),
(11, 'anish', 'shrestha', 'anish@gmail.com', 'basundhara', 'kathmandu', '987456', '9800909002'),
(12, 'dsfas', 'fasdf', 'fdsfa@dsfs.dkf', 'asdf', 'fdsa', '111111', '1111111111'),
(13, 'dibas', 'paudel', 'dibas@gmail.com', 'Mid baneshwor', 'baneshwor', '123456', '9800909002'),
(14, 'anish', 'shrestha', 'anish@gmail.com', 'Basundhara', 'Kathmandu', '987456', '1111111111'),
(15, 'Sujan', 'Maharjan', 'sujan@gmail.com', 'patan', 'lalitpur', '654789', '9874563210'),
(16, 'pawan', 'subedi', 'pawan@gmail.com', 'damak', 'jhapa', '654321', '1234657890'),
(17, 'abc', 'abc', 'abc@mail.com', 'abc', 'abc', '784569', '9874563210'),
(18, 'abc', 'abc', 'abc@mail.com', 'abc', 'abc', '784569', '9800909002'),
(19, 'abc', 'abc', 'abc@mail.com', 'abc', 'abc', '784569', '1111111111'),
(20, 'abc', 'abc', 'abc@mail.com', 'abc', 'abc', '784569', '1111111111'),
(21, 'Susant', 'Maharjan', 'susant@gmail.com', 'Kirtipur', 'kathmandu', '987456', '1111111111'),
(22, 'dsaf', 'fsad', 'dsfads@dfgd.com', 'dsaf', 'dsfasd', '987456', '1111111111'),
(23, 'dibas', 'paudel', 'dibas@gmail.com', 'itahari', 'sunsari', '564879', '5467893210'),
(24, 'sus', 'ma', 'am@gmail.com', 'dksfj', 'fkgjsd', '123456', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_address`
--

CREATE TABLE `confirm_order_address` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_order_address`
--

INSERT INTO `confirm_order_address` (`id`, `firstname`, `lastname`, `email`, `address`, `city`, `pincode`, `contactno`) VALUES
(2, 'dibas', 'paudel', 'dibas@gmail.com', 'Mid baneshwor', 'baneshwor', '123456', '9800909002'),
(3, 'anish', 'shrestha', 'anish@gmail.com', 'Basundhara', 'Kathmandu', '987456', '1111111111'),
(4, 'Sujan', 'Maharjan', 'sujan@gmail.com', 'patan', 'lalitpur', '654789', '9874563210'),
(5, 'pawan', 'subedi', 'pawan@gmail.com', 'damak', 'jhapa', '654321', '1234657890'),
(9, 'abc', 'abc', 'abc@mail.com', 'abc', 'abc', '784569', '1111111111'),
(10, 'Susant', 'Maharjan', 'susant@gmail.com', 'Kirtipur', 'kathmandu', '987456', '1111111111'),
(11, 'dibas', 'paudel', 'dibas@gmail.com', 'itahari', 'sunsari', '564879', '5467893210');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_product`
--

CREATE TABLE `confirm_order_product` (
  `id` int(11) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_order_product`
--

INSERT INTO `confirm_order_product` (`id`, `order_id`, `pname`, `price`, `quantity`, `image`, `total`) VALUES
(2, '2', 'Huawei', 73000, 2, '3413d48d6dd37c4ead184af3dea2e0d2.jpg', '146000'),
(3, '3', 'Apple', 120000, 1, 'e11e76f7ae5e7ec9f121895400cfe3c6.jpg', '120000'),
(4, '4', 'Apple', 117000, 1, '7fdb48b8505cd02f29bad4127ed0891c.jpg', '117000'),
(5, '4', 'Apple', 119000, 1, '488ad2e71f554c08d3afb50c5ae0a88f.jpg', '119000'),
(6, '4', 'LG', 75000, 1, 'd591981921a8bc1fbcb681130d47a35a.jpg', '75000'),
(7, '5', 'Huawei', 73000, 1, '3413d48d6dd37c4ead184af3dea2e0d2.jpg', '73000'),
(17, '9', 'Apple', 119000, 1, '488ad2e71f554c08d3afb50c5ae0a88f.jpg', '119000'),
(18, '9', 'Apple', 117000, 1, '7fdb48b8505cd02f29bad4127ed0891c.jpg', '117000'),
(19, '9', 'LG', 65000, 1, 'e9c0d93bedfdbb7ea72c059258efd946.jpg', '65000'),
(20, '10', 'Xiaomi', 64999, 1, '30b22bdcbed164710c33f499acca2858.jpg', '64999'),
(21, '11', 'Huawei', 75000, 1, '7823595d590adf0d08fe443de9e5b120.jpg', '75000');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `descr` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `pname`, `price`, `model`, `descr`, `quantity`, `image`) VALUES
(1, 'Apple', 120000, 'iPhone 8', 'Upcoming high profile smartphone', 10, 'e11e76f7ae5e7ec9f121895400cfe3c6.jpg'),
(2, 'Apple', 117000, 'iPhone 7', 'Apple iPhone 7', 20, '7fdb48b8505cd02f29bad4127ed0891c.jpg'),
(3, 'Apple', 109000, 'iPhone 6s', 'Apple iPhone 6s', 8, '86d87d25f815324caa04bee45d900c0c.png'),
(4, 'Apple', 90000, 'iPhone 6', 'Apple iPhone 6', 20, '67f360dbbcb4e4b18155b6dd9c20c0d1.jpg'),
(5, 'Apple', 95000, 'iPhone 6 Plus', 'Apple iPhone 6 Plus', 3, '6496fabcb7438567b0773cc8a025558c.jpg'),
(6, 'Apple', 119000, 'iPhone 7 Plus', 'Apple iPhone 7 Plus', 20, '488ad2e71f554c08d3afb50c5ae0a88f.jpg'),
(7, 'Huawei', 73000, 'Huawei P10', 'Huawei P10 4GB', 25, '3413d48d6dd37c4ead184af3dea2e0d2.jpg'),
(8, 'Huawei', 75000, 'Huawei P10 Plus', 'Huawei P10 Plus 6GB', 10, '7823595d590adf0d08fe443de9e5b120.jpg'),
(9, 'Huawei', 70000, 'Huawei Mate 9 Pro', 'Huawei Mate 9 Pro 6 GB', 5, 'df082aa8a39c2888cc3ba6ccf4cede48.jpg'),
(10, 'Huawei', 71000, 'Huawei Mate 9', 'Huawei Mate 9 4gb', 3, '609c7c381be38086e05247c2d2d84e5f.jpg'),
(11, 'Huawei', 60000, 'Huawei Mate 8', 'Huawei Mate 8 4GB', 6, 'aa258ea92dd440df2228fb29873e405d.jpg'),
(12, 'Huawei', 70000, 'Huawei P9', 'Huawei P9 4GB', 21, '27b02bd34fd8931767b460323c7c0bff.jpg'),
(13, 'Huawei', 50000, 'Huawei P10 Lite', 'Huawei P10 Lite 4GB', 7, '2f28ed5572750d53de72bafe0653c7db.jpg'),
(14, 'Huawei', 30000, 'Huawei Honor 8', 'Huawei Honor 8 4 GB', 50, '506aa6ddd121112da0b320c42b7eb41a.jpg'),
(15, 'LG', 65000, 'LG G6', 'LG G6 4GB ', 14, 'e9c0d93bedfdbb7ea72c059258efd946.jpg'),
(16, 'LG', 75000, 'LG V30', 'LG V30 4GB', 15, 'd591981921a8bc1fbcb681130d47a35a.jpg'),
(17, 'Nokia', 21350, 'Nokia 5', 'Nokia 5', 10, 'cc53634d25c77bffd8081e6545f36b11.jpg'),
(18, 'Nokia', 25600, 'Nokia 6', 'Nokia 6', 10, 'ade3a34889a805ee24df3a72c4218938.jpg'),
(19, 'Nokia', 72500, 'Nokia 8', 'Nokia 8', 15, '5d8a1a52f2f1c3987d0df27255a07314.jpg'),
(20, 'Samsung', 77900, 'Samsung Galaxy S7', 'Samsung Galaxy S7', 12, 'e336320a0cc453bbc16b026fcb6cc713.png'),
(21, 'Samsung', 88900, 'Samsung Galaxy S7 Edge', 'Samsung Galaxy S7 Edge', 9, '52dd3f6c0a62322652559586b8f6f746.jpg'),
(22, 'Samsung', 81900, 'Samsung Galaxy S8', 'Samsung Galaxy s8', 20, 'f0e05236b4896847c3041b2e2f03b38a.jpg'),
(23, 'Samsung', 91900, 'Samsung Galaxy S8 Plus', 'Samsung Galaxy S8+', 20, 'c4da4de6c5bd33d2e1be3f3faf419bd5.jpg'),
(24, 'Samsung', 30000, 'Samsung Galaxy J7 (2017)', 'Samsung Galaxy J7 (2017)', 30, 'b6e0e659b2575c913a0e851be17c41eb.jpg'),
(25, 'Samsung', 29490, 'Samsung Galaxy J7 Prime', 'Samsung Galaxy J7 Prime', 25, '078a5b1be57269464fca20cb238d47a6.jpg'),
(26, 'Samsung', 28290, 'Samsung Galaxy J7 Max', 'Samsung Galaxy J7 Max', 13, '83501462ec6fa1321b9b8b893acc6bff.jpg'),
(27, 'Samsung', 100000, 'Samsung Galaxy Note8', 'Samsung Galaxy Note8', 50, '00d35ebe522dc8bd21f1a722b11659f0.jpg'),
(28, 'Xiaomi', 54999, 'Xiaomi Mi 6', 'Xiaomi Mi 6', 50, '06ddc91fc3132c9c259c4c82eb8aaa72.jpg'),
(29, 'Xiaomi', 64999, 'Xiaomi Mi 6 Plus', 'Xiaomi Mi 6 Plus', 20, '30b22bdcbed164710c33f499acca2858.jpg'),
(30, 'Xiaomi', 94999, 'Xiaomi Mi Mix', 'Xiaomi Mi Mix', 5, '672b1236efcd0fef3f537a24038b0b8e.jpg'),
(31, 'Xiaomi', 35000, 'Xiaomi Mi 5', 'Xiaomi Mi 5', 13, 'e3d1603bbed215e68e0cf25477c24ce1.jpg'),
(32, 'Xiaomi', 40000, 'Xiaomi Mi 5s', 'Xiaomi Mi 5s', 5, 'b9033a77786366d7a2744ca558be39ce.jpg'),
(33, 'Xiaomi', 28000, 'Xiaomi Redmi Note 4', 'Xiaomi Redmi Note 4', 30, '729792700323f2771dc48958633221e2.jpg'),
(34, 'Xiaomi', 25000, 'Xiaomi Redmi Note 4X', 'Xiaomi Redmi Note 4X', 12, 'deff55f6c4741b2eb9e574aea61cab5c.jpg'),
(35, 'Xiaomi', 20000, 'Xiaomi Redmi 4 4X', 'Xiaomi Redmi 4 4X', 6, 'fb6acfaab7215b6f102d6a178945f7b6.jpg'),
(36, 'Xiaomi', 22000, 'Xiaomi Redmi 4 Prime', 'Xiaomi Redmi 4 Prime', 24, '1ce22fa959628aff6cff60be88451c57.jpg'),
(37, 'Xiaomi', 30000, 'Xiaomi Mi 5x', 'Xiaomi Mi 5x', 22, 'dd46889e6cb53cddde9a276cf1db30c6.jpeg'),
(38, 'Xiaomi', 94999, 'Xiaomi Mi Mix 2', 'Xiaomi Mi Mix 2', 13, '1793967b628a5edb24723810f29d6438.jpg'),
(39, 'HTC', 75000, 'HTC 10', 'HTC 10', 3, '37612f0ed88250ac60404391a15a6629.jpg'),
(40, 'HTC', 29900, 'HTC Desire 10 Pro', 'HTC Desire 10 Pro', 10, '4512aeb6203e06f2ddf056b897b4703a.jpg'),
(41, 'HTC', 39000, 'HTC Desire 820', 'HTC Desire 820', 10, 'd892428623d487982886ed9b62bdaa93.jpg'),
(42, 'Sony', 80000, 'Sony Xperia XZ1', 'Sony Xperia XZ1', 12, '24509029ab4c2ff56a215795eddd5ca4.jpg'),
(43, 'Sony', 95000, 'Sony Xperia XZ Premium', 'Sony Xperia XZ Premium', 12, '491a6d84458cf42d1f04fafd2f1f863b.jpg'),
(44, 'Micromax', 14000, 'Micromax Canvas Fire 2', 'Micromax Canvas Fire 2', 30, '30a1f1b364267885397a591e317eee38.jpg'),
(45, 'Micromax', 18000, 'Micromax Canvas Infinity', 'Micromax Canvas Infinity', 13, '435045271ca4dd94cb5d0ee42f8efa89.jpg'),
(46, 'Micromax', 29000, 'Micromax Canvas Sliver 5 Q450', 'Micromax Canvas Sliver 5 Q450', 12, 'b78c1336f328f9c9d66d20233f2fe0b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_specification`
--

CREATE TABLE `product_specification` (
  `id` int(11) NOT NULL,
  `pmodel` varchar(50) NOT NULL,
  `released_date` varchar(50) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `thickness` varchar(20) NOT NULL,
  `os_version` varchar(100) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `rom` varchar(20) NOT NULL,
  `screen` varchar(10) NOT NULL,
  `resolution` varchar(20) NOT NULL,
  `front_camera` varchar(20) NOT NULL,
  `rear_camera` varchar(20) NOT NULL,
  `battery` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_specification`
--

INSERT INTO `product_specification` (`id`, `pmodel`, `released_date`, `weight`, `thickness`, `os_version`, `ram`, `rom`, `screen`, `resolution`, `front_camera`, `rear_camera`, `battery`, `created_at`) VALUES
(1, 'iPhone 8', 'Not announced yet', 'Not define', '7.5 mm', 'iOS 11', '3 GB', '64/256/512 GB', '5.11', '1242x2800 pixels', '12 MP', '12 MP', '5000', '2017-09-05 14:49:54'),
(2, 'iPhone 7', 'Released 2016, September', '138 g.', '7.1 mm', 'iOS 10.0.1, up to iOS 10.3.3', '2 GB', '32/128/256 GB', '4.7', '750x1334 pixels', '7 MP', '12 MP', '1960', '2017-09-05 14:58:03'),
(3, 'iPhone 6s', 'Released 2015, September', '143 g.', '7.1 mm', 'iOS 9 up to iOS 10.3.3', '2 GB', '16/32/64/128 GB', '4.7', '750x1334 pixels', '5 MP', '12 MP', '1715', '2017-09-05 15:31:40'),
(4, 'iPhone 6', 'Released 2014, September', '129 g.', '6.9 mm', 'iOS 8, up to iOS 10.3.3', '1 GB', '16/32/64/128 GB', '4.7', '750x1334 pixels', '1.2 MP', '8 MP', '1810', '2017-09-05 15:35:35'),
(5, 'iPhone 6 Plus', 'Released 2014, September', '172 g.', '7.1 mm', 'iOS 8, up to iOS 10.3.3', '1 GB', '16/64/128 GB', '5.5', '1080x1920 pixels', '1.2 MP', '8 MP', '2915', '2017-09-05 15:41:16'),
(6, 'iPhone 7 Plus', 'Released 2016, September', '188 g.', '7.3 mm', 'iOS 10.0.1, up to iOS 10.3.3', '3 GB', '32/128/256 GB', '5.5', '1080x1920 pixels', '7 MP', '12 MP', '2900', '2017-09-05 15:44:05'),
(7, 'Huawei P10', 'Released 2017, March', '145 g.', '7 mm', 'Android 7.0', '4 GB', '32/64 GB', '5.1', '1080x1920 pixels', '8 MP', '20 MP', '3200', '2017-09-05 15:50:32'),
(8, 'Huawei P10 Plus', 'Released 2017, April', '165 g.', '7 mm', 'Android 7.0', '6 GB', '64 GB', '5.5', '1440x2560 pixels', '8 MP', '20 MP', '3750', '2017-09-05 16:29:32'),
(9, 'Huawei Mate 9 Pro', 'Released 2017, January', '169 g.', '7.5 mm', 'Android 7.0', '6 GB', '64 GB', '5.5', '1440x2560 pixels', '8 MP', '20 MP', '4000', '2017-09-05 15:56:44'),
(10, 'Huawei Mate 9', 'Released 2016, December', '190 g.', '7.9 mm', 'Android 7.0', '4 GB', '64 GB', '5.9', '1080x1920 pixels', '8 MP', '20 MP', '4000', '2017-09-05 15:59:49'),
(11, 'Huawei Mate 8', 'Released 2015, November', '185 g.', '7.9 mm', 'Android 6.0 up to 7.0', '4 GB', '32 GB', '6.0', '1080x1920 pixels', '8 MP', '16 MP', '4000', '2017-09-05 16:05:14'),
(12, 'Huawei P9', 'Released 2016, April', '144 g.', '7 mm', 'Android 6.0 up to 7.0', '4 GB', '32 GB', '5.2', '1080x1920 pixels', '8 MP', '12 MP', '3000', '2017-09-05 16:08:31'),
(13, 'Huawei P10 Lite', 'Released 2017, March', '146 g.', '7.2 mm', 'Android 7.0', '4 GB', '32 GB', '5.2', '1080x1920 pixels', '8 MP', '12 MP', '3000', '2017-09-05 16:11:52'),
(14, 'Huawei Honor 8', 'Released 2016, July', '153 g.', '7.5 mm', 'Android 6.0 up to 7.0', '4 GB', '32/64 GB', '5.2', '1080x1920 pixels', '8 MP', '12 MP', '3000', '2017-09-05 16:14:52'),
(15, 'LG G6', 'Released 2017, March', '163 g.', '7.9 mm', 'Android 7.0', '4 GB', '32/64/128 GB', '5.7', '1440x2880 pixels', '5 MP', '13 MP', '3300', '2017-09-05 16:29:32'),
(16, 'LG V30', 'Exp. release 2017, September', '158 g.', '7.4 mm', 'Android 7.1.2', '4 GB', '64 GB', '6.0', '1440x2880 pixels', '5 MP', '16 MP', '3300', '2017-09-05 16:24:07'),
(17, 'Nokia 5', 'Released 2017, July', '160 g.', '8 mm', 'Android 7.1.1', '2 GB', '16 GB', '5.2', '720x1280', '8 MP', '13 MP', '3000', '2017-09-09 15:51:06'),
(18, 'Nokia 6', 'Released 2017, January', '169 g.', '7.9 mm', 'Android 7.1.1', '4 GB', '32 GB', '5.5', '1080x1920 pixels', '8 MP', '16 MP', '3000', '2017-09-09 15:53:30'),
(19, 'Nokia 8', 'Exp. release 2017, September', '160 g.', '7.9 mm', 'Android 7.1.1', '4 GB', '64 GB', '5.3', '1440x2560 pixels', '13 MP', '13 MP Dual', '3090', '2017-09-09 15:56:56'),
(20, 'Samsung Galaxy S7', 'Released 2016, March', '152 g.', '7.9 mm', 'Android 6.0 up to 7.0', '4 GB', '32/64 GB', '5.1', '1440x2560 pixels', '5 MP', '12 MP', '3000', '2017-09-09 16:00:32'),
(21, 'Samsung Galaxy S7 Edge', 'Released 2016, March', '157 g.', '7.7 mm', 'Android 6.0 up to 7.0', '4 GB', '32/64/128 GB', '5.5', '1440x2560 pixels', '5 MP', '12 MP', '3600', '2017-09-09 16:03:33'),
(22, 'Samsung Galaxy S8', 'Released 2017, April', '155 g.', '8 mm', 'Android 7.0', '4 GB', '64 GB', '5.8', '1440x2960 pixel', '8 MP', '12 MP', '3000', '2017-09-09 16:06:36'),
(23, 'Samsung Galaxy S8 Plus', 'Released 2017, April', '173 g.', '8.1 mm', 'Android 7.0', '6 GB', '64 GB', '6.2', '1440x2960 pixels', '8 MP', '12 MP', '35000', '2017-09-09 16:08:59'),
(24, 'Samsung Galaxy J7 (2017)', 'Released 2017, July', '181 g.', '8 mm', 'Android 7.0', '3 GB', '16 GB', '5.5', '1080x1920 pixels', '13 MP', '13 MP', '3600', '2017-09-09 16:11:55'),
(25, 'Samsung Galaxy J7 Prime', 'Released 2016, September', '167 g.', '8 mm', 'Android 6.0.1 up to 7.0', '3 GB', '16/32 GB', '5.5', '1080x1920 pixels', '8 MP', '13 MP', '3300', '2017-09-09 16:14:42'),
(26, 'Samsung Galaxy J7 Max', 'Released 2017, June', '179 g.', '8.1 mm', 'Android 7.0', '4 GB', '32 GB', '5.7', '1080x1920 pixels', '13 MP', '13 MP', '3300', '2017-09-09 16:16:41'),
(27, 'Samsung Galaxy Note8', 'Exp. release 2017, September', '195 g.', '8.6 mm', 'Android 7.1.1', '6 GB', '64/128/256 GB', '6.3', '1440x2960 pixels', '8 MP', '13 MP', '3300', '2017-09-09 16:21:46'),
(28, 'Xiaomi Mi 6', 'Released 2017, April', '168 g.', '7.5 mm', 'Android 7.1.1', '6 GB', '64/128 GB', '5.15', '1080x1920 pixels', '8 MP', '12 MP Dual', '3350', '2017-09-09 16:25:35'),
(29, 'Xiaomi Mi 6 Plus', 'Exp. announcement 2017, April', '160 g.', '7.9 mm', 'Android 8.0', '6 GB', '64/128 GB', '5.7', '1080x1920 pixels', '8 MP', '12 MP Dual', '4500', '2017-09-09 16:29:04'),
(30, 'Xiaomi Mi Mix', 'Released 2016, November', '209 g.', '7.9 mm', 'Android 6.0 up to 7.0', '6 GB', '128 GB', '6.4', '1080x2040 pixels', '5 MP', '16 MP', '4400', '2017-09-10 05:30:50'),
(31, 'Xiaomi Mi 5', 'Released 2016, April', '139 g.', '7.3 mm', 'Android 6.0 up to 7.0', '4 GB', '128 GB', '5.15', '1080x1920 pixels', '5 MP', '16 MP', '3000', '2017-09-10 05:34:32'),
(32, 'Xiaomi Mi 5s', 'Released 2016, October', '145 g.', '8.1 mm', 'Android 6.0 up to 7.0', '4 GB', '64 GB', '5.15', '1080x1920 pixels', '4 MP', '12 MP', '3200', '2017-09-10 05:37:11'),
(33, 'Xiaomi Redmi Note 4', 'Released 2017, January', '165 g.', '8.5 mm', 'Android 6.0 up to 7.0', '4 GB', '64 GB', '5.5', '1080x1920 pixels', '8 M5', '13 MP', '4100', '2017-09-10 05:39:15'),
(34, 'Xiaomi Redmi Note 4X', 'Released 2017, February', '165 g.', '8.5 mm', 'Android 6.0 up to 7.0', '4 GB', '32 GB', '5.5', '1080x1920 pixels', '5 MP', '13 MP', '4100', '2017-09-10 05:41:32'),
(35, 'Xiaomi Redmi 4 4X', 'Released 2017, May', '150 g.', '8.7 mm', 'Android 6.0.1 up to 7.0', '4 GB', '16 GB', '5.0', '720x1280 pixels', '5 MP', '13 MP', '4100', '2017-09-10 05:43:49'),
(36, 'Xiaomi Redmi 4 Prime', 'Released 2016, November', '165 g.', '8.9 mm', 'Android 6.0.1 up to 7.0', '3 GB', '32 GB', '5.0', '1080x1920 pixels', '8 MP', '13 MP', '3800', '2017-09-10 05:45:58'),
(37, 'Xiaomi Mi 5x', 'Exp. release 2017, September', '165 g.', '7.3 mm', 'Android 7.1.2', '4 GB', '64 GB', '5.5', '1080x1920 pixels', '8 MP', '12 MP Dual', '3080', '2017-09-10 05:49:23'),
(38, 'Xiaomi Mi Mix 2', 'Not announced yet', '139 g.', '6.9 mm', 'Android 8.0', '6 GB', '128 GB', '6.2', '1440x2960 pixels', '13 MP', '21 MP Dual', '4400', '2017-09-10 05:53:36'),
(39, 'HTC 10', 'Released 2016, May', '161 g.', '9 mm', 'Android 6.0.1 up to 7.0', '4 GB', '32/64 GB', '5.2', '1440x2560 pixels', '5 MP', '12 MP', '3000', '2017-09-10 05:59:31'),
(40, 'HTC Desire 10 Pro', 'Released 2016, December', '165 g.', '7.9 mm', 'Android 6.0 up to 7.0', '4 GB', '64 GB', '5.5', '1080x1920 pixels', '13 MP', '20 MP', '3000', '2017-09-10 06:02:38'),
(41, 'HTC Desire 10 Pro', 'Released 2016, December', '165 g.', '7.9 mm', 'Android 6.0 up to 7.0', '4 GB', '64 GB', '5.5', '1080x1920 pixels', '13 MP', '20 MP', '3000', '2017-09-10 06:02:38'),
(42, 'HTC Desire 820', 'Released 2014, November', '155 g.', '7.7 mm', 'Android 4.4.2 up to 6.0.1', '2 GB', '16 GB', '5.5', '720x1280 pixels', '8 MP', '13 MP', '2600', '2017-09-10 06:05:45'),
(43, 'Sony Xperia XZ1', 'Exp. release 2017, September', '155 g.', '7.4 mm', 'Android 8.0', '4 GB', '64 GB', '5.2', '1080x1920 pixels', '13 MP', '19 MP', '2800', '2017-09-10 06:09:23'),
(44, 'Sony Xperia XZ Premium', 'Released 2017, June', '195 g.', '7.9 mm', 'Android 7.1.1', '4 GB', '64 GB', '5.46', '3840x2160 pixels', '13 MP', '19 MP', '3230', '2017-09-10 06:11:54'),
(45, 'Micromax Canvas Fire 2', 'Released 2014, April', '180 g.', '7.9 mm', 'Android 4.4.2', '1 GB', '4 GB', '5.0', '720x1280 pixels', '0.9 MP', '5 MP', '1900', '2017-09-10 06:15:59'),
(46, 'Micromax Canvas Infinity', 'Released 2017, September', '160 g.', '9 mm', 'Android 7.1.2', '3 GB', '32 GB', '5.7', '720x1440 pixels', '16 MP', '16 MP', '2980', '2017-09-10 06:18:48'),
(47, 'Micromax Canvas Sliver 5 Q450', 'Released 2015, July', '97 g.', '5.1 mm', 'Android 5.0.2', '2 GB', '16 GB', '4.8', '720x1280 pixels', '5 MP', '8 MP', '2000', '2017-09-10 06:21:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminl`
--
ALTER TABLE `adminl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_address`
--
ALTER TABLE `checkout_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_address`
--
ALTER TABLE `confirm_order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specification`
--
ALTER TABLE `product_specification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminl`
--
ALTER TABLE `adminl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `checkout_address`
--
ALTER TABLE `checkout_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `confirm_order_address`
--
ALTER TABLE `confirm_order_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `product_specification`
--
ALTER TABLE `product_specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
