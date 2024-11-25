-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `carosel`
--

CREATE TABLE `carosel` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `added_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carosel`
--

INSERT INTO `carosel` (`id`, `path`, `added_at`, `status`) VALUES
(5, 'uploads/img/caro1.webp', '2024-03-10 04:20:29', 1),
(6, 'uploads/img/caro2.webp', '2024-03-10 04:20:37', 1),
(7, 'uploads/img/caro3.webp', '2024-03-10 04:31:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `dbname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`, `dbname`) VALUES
(9, 12, 1, 'laptop'),
(10, 11, 7, 'mobile'),
(12, 11, 1, 'laptop'),
(14, 11, 7, 'mobile'),
(15, 11, 2, 'mobile'),
(16, 11, 7, 'mobile'),
(17, 11, 12, 'mobile'),
(18, 21, 2, 'mobile'),
(19, 21, 5, 'laptop'),
(20, 22, 1, 'cloth'),
(21, 22, 2, 'cloth'),
(22, 23, 12, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `imageone` varchar(100) NOT NULL,
  `imagetwo` varchar(100) NOT NULL,
  `imagethree` varchar(100) NOT NULL,
  `offerone` varchar(100) NOT NULL,
  `offertwo` varchar(100) NOT NULL,
  `offerthree` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `matterial` varchar(30) NOT NULL,
  `model_name` varchar(30) NOT NULL,
  `ideal_for` varchar(20) NOT NULL,
  `pack_of` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `added_at` datetime NOT NULL,
  `ocassion` varchar(30) NOT NULL,
  `pattern` varchar(30) NOT NULL,
  `discount` int(11) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `ps` varchar(40) NOT NULL DEFAULT 'footware',
  `ps_two` varchar(40) NOT NULL DEFAULT 'shoes',
  `pcl` varchar(40) NOT NULL DEFAULT 'cloth'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`id`, `title`, `price`, `pname`, `imageone`, `imagetwo`, `imagethree`, `offerone`, `offertwo`, `offerthree`, `color`, `brand`, `product_type`, `size`, `matterial`, `model_name`, `ideal_for`, `pack_of`, `quantity`, `added_at`, `ocassion`, `pattern`, `discount`, `seller`, `ps`, `ps_two`, `pcl`) VALUES
(1, 'Men Striped Round Neck Cotton Blend Navy Blue T-Shirt', 258, 'Men Striped Round Ne', 'uploads/img/mens1.webp', 'uploads/img/mens2.webp', 'uploads/img/mens3.webp', '5% Cashback on Flipkart Axis Bank CardT&C', 'Special PriceGet at flat ₹209T&C', 'Partner OfferFlat 1% Instant discount up to ₹ 1,000 on purchase of Flipkart Digital Gift CardsKnow M', 'blue', 'R RIDACHY ', 'Footware', 'S', 'cotton', ' AUSK-NAVY-YELLOW-M', 'Men', 1, 10, '2024-03-08 05:11:49', 'casual', ' Cotton Blend', 2, '', 'footware', 'shoes', 'cloth'),
(2, 'Boys Festive & Party Kurta and Pyjama Set  (Yellow Pack of 1)', 899, 'Boys Festive & Party', 'uploads/img/kids1.webp', 'uploads/img/kids2.webp', 'uploads/img/kids3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Buy 2 or more items save ₹60', 'YELLOW', ' FTC FASHIONS', 'Kidsware', ' 1 - 2 Years boys', ' A cotton blend is made from 8', ' VESHYELLOW', 'Men', 1, 14, '2024-03-10 08:49:31', ' Ethnic Wear', 'Printed', 79, '', 'footware', 'shoes', 'cloth'),
(3, 'Women Printed Viscose Rayon Anarkali Kurta  (Pink)', 2495, 'Women Printed Viscos', 'uploads/img/womens3.webp', 'uploads/img/womens4.webp', 'uploads/img/womens3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Extra 5% off upto 50 on Card payments', ' Pink', ' RANI', 'Women\'s ware', 'M', ' Dry clean only, Do not bleach', ' FLOWERSKT', 'Women', 1, 8, '2024-03-12 04:32:57', ' Casual', 'Printed', 94, '', 'footware', 'shoes', 'cloth'),
(4, 'Women Printed Viscose Rayon Anarkali Kurta  (Pink)', 2495, 'Women Printed Viscos', 'uploads/img/womens3.webp', 'uploads/img/womens4.webp', 'uploads/img/womens3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Extra 5% off upto 50 on Card payments', ' Pink', ' RANI', 'Women\'s ware', 'XL', ' Dry clean only, Do not bleach', ' FLOWERSKT', 'Women', 1, 4, '2024-03-12 04:33:43', ' Casual', 'Printed', 94, '', 'footware', 'shoes', 'cloth'),
(5, 'Women Printed Viscose Rayon Anarkali Kurta  (Pink)', 2495, 'Women Printed Viscos', 'uploads/img/womens3.webp', 'uploads/img/womens4.webp', 'uploads/img/womens3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Extra 5% off upto 50 on Card payments', ' Pink', ' RANI', 'Women\'s ware', 'XXL', ' Dry clean only, Do not bleach', ' FLOWERSKT', 'Women', 1, 4, '2024-03-12 04:33:55', ' Casual', 'Printed', 94, '', 'footware', 'shoes', 'cloth'),
(6, 'Fabbmate Trendy Sports Shoes for Women\'s Running,Walking Running Shoes For Women  (Pink)', 799, 'Fabbmate Trendy Spor', 'uploads/img/wofot1.webp', 'uploads/img/wofot2.webp', 'uploads/img/wofot3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Buy 2 or more items save ₹60', ' Pink', 'R RIDACHY ', 'Women\'s Footware', '5', ' Mesh', ' Fabbmate Trendy Sports Shoes ', 'Women', 1, 6, '2024-03-12 04:49:36', ' Running Shoes', 'Plane', 62, '', 'footware', 'shoes', 'cloth'),
(7, 'Fabbmate Trendy Sports Shoes for Women\'s Running,Walking Running Shoes For Women  (Pink)', 799, 'Fabbmate Trendy Spor', 'uploads/img/wofot1.webp', 'uploads/img/wofot2.webp', 'uploads/img/wofot3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Buy 2 or more items save ₹60', ' Pink', 'R RIDACHY ', 'Women\'s Footware', '6', ' Mesh', ' Fabbmate Trendy Sports Shoes ', 'Women', 1, 6, '2024-03-12 04:49:46', ' Running Shoes', 'Plane', 62, '', 'footware', 'shoes', 'cloth'),
(8, 'Fabbmate Trendy Sports Shoes for Women\'s Running,Walking Running Shoes For Women  (Pink)', 799, 'Fabbmate Trendy Spor', 'uploads/img/wofot1.webp', 'uploads/img/wofot2.webp', 'uploads/img/wofot3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', '5% Cashback on Flipkart Axis Bank Card', 'Buy 2 or more items save ₹60', ' Pink', 'R RIDACHY ', 'Women\'s Footware', '8', ' Mesh', ' Fabbmate Trendy Sports Shoes ', 'Women', 1, 6, '2024-03-12 04:49:53', ' Running Shoes', 'Plane', 62, '', 'footware', 'shoes', 'cloth'),
(9, 'High Tops For Men(White)', 999, 'High Tops For Men', 'uploads/img/menfot.webp', 'uploads/img/menfot2.webp', 'uploads/img/menfot3.webp', 'Bank Offer5% Cashback on Flipkart Axis Bank CardT&C', 'Bank Offer₹3000 Off On HDFC Bank Credit Card EMI TransactionsT&C', 'Buy 2 or more items save ₹60', 'White', ' KanhaaOnline', 'Men\'s Footware', '7', ' Comfort Foam  Resin Sole mate', ' Lace-Ups', 'Men', 1, 3, '2024-03-12 04:56:06', ' Casual', 'slid', 70, '', 'footware', 'shoes', 'cloth'),
(10, 'Pack of 2 Men Solid Black, Grey Track Pants', 1299, 'Pack of 2 Men Solid ', 'uploads/img/menbot1.webp', 'uploads/img/menbot2.webp', 'uploads/img/menbot3.webp', 'Bank Offer5% Cashback on Flipkart Axis Bank CardT&C', '5% Cashback on Flipkart Axis Bank Card', 'Partner OfferFlat 1% Instant discount up to ₹ 1,000 on purchase of Flipkart Digital Gift CardsKnow M', 'Black, Grey', ' KanhaaOnline', 'Men\'s ware', '34', ' EASY WASH', ' MKDRY-01', 'Boy', 2, 6, '2024-03-12 05:00:15', ' Casual', 'slid', 72, '', 'footware', 'shoes', 'cloth'),
(11, 'Men Regular Fit Solid Spread Collar Casual Shirt', 999, 'Men Regular Fit Soli', 'uploads/img/mentopw1.webp', 'uploads/img/mentopw2.webp', 'uploads/img/mentopw3.webp', '1% up to ₹1000 Off On UPI TransactionsT&C', '10% off on BOBCARD EMI Transactions, up to ₹1,500 on orders of ₹10,000 and aboveT&C', 'Buy 2 or more items save ₹60', ' Maroon', ' VebnorFashion', 'Men\'s ware', 'L', ' Poly Viscose', ' ST2', 'Men', 1, 5, '2024-03-12 05:04:45', ' Casual', ' Solid', 70, '', 'footware', 'shoes', 'cloth');

-- --------------------------------------------------------

--
-- Table structure for table `footware`
--

CREATE TABLE `footware` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `imageone` varchar(100) NOT NULL,
  `imagetwo` varchar(100) NOT NULL,
  `imagethree` varchar(100) NOT NULL,
  `offerone` varchar(100) NOT NULL,
  `offertwo` varchar(100) NOT NULL,
  `offerthree` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `package` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `meterial` varchar(50) NOT NULL,
  `ocassion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `imageone` varchar(100) NOT NULL,
  `imagetwo` varchar(100) NOT NULL,
  `imagethree` varchar(100) NOT NULL,
  `offerone` varchar(100) NOT NULL,
  `offertwo` varchar(100) NOT NULL,
  `offerthree` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `design` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `package` varchar(50) NOT NULL,
  `widht` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `depth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `imageone` varchar(100) NOT NULL,
  `imagetwo` varchar(100) NOT NULL,
  `imagethree` varchar(100) NOT NULL,
  `offerone` varchar(100) NOT NULL,
  `offertwo` varchar(100) NOT NULL,
  `offerthree` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `use_for` varchar(30) NOT NULL,
  `life` varchar(50) NOT NULL,
  `container` varchar(20) NOT NULL,
  `organic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `imageone` varchar(100) NOT NULL,
  `imagetwo` varchar(100) NOT NULL,
  `imagethree` varchar(100) NOT NULL,
  `offerone` varchar(100) NOT NULL,
  `offertwo` varchar(100) NOT NULL,
  `offerthree` varchar(100) NOT NULL,
  `sales_package` varchar(100) NOT NULL,
  `model_num` varchar(50) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `color` varchar(30) NOT NULL,
  `microsoft` varchar(20) NOT NULL,
  `graphic` varchar(20) NOT NULL,
  `graphic_cap` varchar(11) NOT NULL,
  `pbrand` varchar(50) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `ssd` varchar(20) NOT NULL,
  `ssd_cap` varchar(11) NOT NULL,
  `ram` varchar(11) NOT NULL,
  `ram_type` varchar(50) NOT NULL,
  `system` varchar(50) NOT NULL,
  `usb` varchar(60) NOT NULL,
  `touchscreen` varchar(20) NOT NULL,
  `ssize` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `stype` varchar(60) NOT NULL,
  `speaker` varchar(20) NOT NULL,
  `mic` varchar(20) NOT NULL,
  `lan` varchar(60) NOT NULL,
  `bluetooth` varchar(20) NOT NULL,
  `camera` varchar(20) NOT NULL,
  `backlight` varchar(20) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `nonwarranty` varchar(100) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `battery_cell` varchar(10) NOT NULL,
  `battery_backup` varchar(20) NOT NULL,
  `pgeneration` varchar(20) NOT NULL,
  `pverient` varchar(20) NOT NULL,
  `pcore` varchar(20) NOT NULL,
  `os_architechture` varchar(20) NOT NULL,
  `hdmi` varchar(20) NOT NULL,
  `added_at` datetime NOT NULL,
  `pdesone` varchar(200) NOT NULL,
  `pimage_one` varchar(50) NOT NULL,
  `pdestwo` varchar(200) NOT NULL,
  `pimage_two` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` varchar(40) NOT NULL DEFAULT 'laptop'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `title`, `price`, `pname`, `imageone`, `imagetwo`, `imagethree`, `offerone`, `offertwo`, `offerthree`, `sales_package`, `model_num`, `model_name`, `type`, `color`, `microsoft`, `graphic`, `graphic_cap`, `pbrand`, `ptype`, `ssd`, `ssd_cap`, `ram`, `ram_type`, `system`, `usb`, `touchscreen`, `ssize`, `resolution`, `stype`, `speaker`, `mic`, `lan`, `bluetooth`, `camera`, `backlight`, `warranty`, `nonwarranty`, `weight`, `battery_cell`, `battery_backup`, `pgeneration`, `pverient`, `pcore`, `os_architechture`, `hdmi`, `added_at`, `pdesone`, `pimage_one`, `pdestwo`, `pimage_two`, `discount`, `seller`, `quantity`, `product`) VALUES
(4, 'ASUS Vivobook 15 Intel Core i5 11th Gen 1135G7 - (', 69990, 'ASUS Vivobook 15 Int', 'uploads/img/vivobook1.webp', 'uploads/img/vivobook2.webp', 'uploads/img/vivobook3.webp', '10% off on Axis Bank Credit Card Transactions, up to ₹1,250 on orders of ₹5,000 and above', '10% off on Axis Bank Credit Card EMI Transactions, up to ₹1,500 on orders of ₹5,000 and above', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', 'Laptop, Battery, Adapter, Cables and User Manuals', ' X515EA-EJ522WS', ' X515EA-EJ522WS', ' Thin and Light Laptop', ' Transparent Silver', 'yes', 'Intel Integrated Iri', ' NA', ' Intel', ' Core i5', 'yes', '512 GB', ' 8 GB', ' DDR4', 'Windows 11 Home', '1 x USB 3.2 Gen 1 Type-A, 1 x USB 3.2 Gen 1 Type-C, 2 x USB ', 'no', '39.62 cm (15.6 Inch)', ' 1920 x 1080 Pixel', 'Full HD', 'yes', 'yes', ' Wi-Fi 5(802.11ac) (Dual band) 1x1', ' v4.1', ' VGA camera', 'no', '1 Year Onsite Warranty', ' Physical Damage', '1.80 kg', ' 2 Cell', '5 hours', ' 11th Gen', ' 1135G7', '4', ' 64 bit', ' 1 x HDMI 1.4 port', '2024-03-12 05:19:54', 'Peak Performance The incredible laptop from Asus, the VivoBook 15, provides strong performance and captivating aesthetics, whether used for work or entertainment. Furthermore, an engaging experience i', 'uploads/img/vivobook4.webp', 'Powerful Processor Powered by the Intel Core processor, the ASUS VivoBook 15 lets you do jobs quickly and effectively. You can multitask and switch between programmes to quickly finish difficult tasks', 'uploads/img/vivobook5.webp', 41, ' TBL Online', 0, 'laptop'),
(5, 'ZEBRONICS Pro Series Z Intel Core i5 12th Gen 1235', 62999, 'ZEBRONICS Pro Series', 'uploads/img/lap1.webp', 'uploads/img/lap2.webp', 'uploads/img/lap3.webp', 'Bank Offer5% Cashback on Flipkart Axis Bank CardT&C', '10% off on BOBCARD EMI Transactions, up to ₹1,500 on orders of ₹10,000 and aboveT&C', 'Special PriceGet extra 29% off (price inclusive of cashback/coupon)T&C', 'Laptop:- 1U , Power adapter:- 1U , Quick start Guide:- 1U, QR code Guide:- 1U', ' ZEB-NBC 4S', ' ZEB-NBC 4S', 'Thin and Light Laptop', ' Space Grey', 'no', ' NA', ' NA', 'Intel', 'Core i5', 'yes', '512 GB', '16 GB', 'DDR4', 'Windows 11', ' 3 x USB Type A , 2 x USB Type C', 'no', ' 39.62 cm (15.6 inch)', ' 2556 x 1179 Pixels', 'Full HD', 'yes', 'yes', ' Wi-Fi 5(802.11ac) (Dual band) 1x1', ' v4.1', ' 2 MP', 'no', ' 1 Year Carry-in Warranty', ' Physical Damage', '150gram', ' 5 Cell', 'Upto 5 Hours', ' 12th Gen', ' 1235U', '2', '64 bit', ' 1 x HDMI', '2024-03-12 05:27:09', ' Impressive Performance It\'s time to get your hands on the affordable and sleek laptop - the ZEB-NBC 4S which performs effectively with an Intel core i5-1235U 12th Gen processor, so you can now work a', 'uploads/img/lap4.webp', ' Multi-connectivity Take advantage of the laptop\'s intuitive connectivity, which includes 2 USB 3.2 ports, 1x USB 2.0, RJ45, a mSD slot, a 3.5mm headphone and microphone jack, a Type-C port for chargi', 'uploads/img/lap3.webp', 47, ' RetailNet', 0, 'laptop'),
(6, 'Acer Aspire 7 Intel Core i5 12th Gen 12450H - (16 ', 78999, 'Acer Aspire 7 Intel ', 'uploads/img/acer1.webp', 'uploads/img/acer2.webp', 'uploads/img/acer3.webp', 'Get ₹25* instant discount for the 1st Flipkart Order using Flipkart UPI', 'Bank Offer₹3000 Off On HDFC Bank Credit Card EMI TransactionsT&C', 'Buy 2 or more items save ₹60', ' Laptop, Power Adaptor, User Guide, Warranty Documents', ' A715-76G', ' A715-76G', ' Gaming Laptop', ' Charcoal Black', 'no', 'GDDR6', '4 GB', ' Intel', 'Core i5', 'yes', '512 GB', '16 GB', 'DDR4', ' Windows 11 Home', ' 1 x USB 3.2 port with power-off charging, 2 x USB 3.2 port,', 'no', '39.62 cm (15.6 Inch)', ' 2556 x 1179 Pixels', 'Full HD+', 'yes', 'yes', ' Wi-Fi 5(802.11ac) (Dual band) 1x1', ' v4.1', ' VGA camera', 'yes', '1 year', ' Physical Damage', ' 2.1 Kg', ' 2 Cell', '5 hours', '11th Gen', ' 1115G4', '5', '64 bit', 'NA', '2024-03-12 05:33:34', 'Absolute Performance At the core of the Acer Aspire 7 lies the latest 12th-gen Intel Core processors and the formidable NVIDIA GeForce RTX 2050. Together, they form a dynamic duo that can power throug', 'uploads/img/acer4.webp', ' Thermal Solutions Performance doesn\'t mean much if your laptop can\'t handle the heat. That\'s where Acer\'s thermal wizardry comes into play. The Acer Aspire 7 features an air-inlet keyboard, a clever ', 'uploads/img/acer5.webp', 32, ' SVPeripherals', 0, 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `imageone` varchar(50) NOT NULL,
  `imagetwo` varchar(50) NOT NULL,
  `imagethree` varchar(50) NOT NULL,
  `sales_package` varchar(100) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sim_slot` varchar(30) NOT NULL,
  `touchscreen` varchar(20) NOT NULL,
  `otg_compatible` varchar(20) NOT NULL,
  `quick_charging` varchar(20) NOT NULL,
  `display_type` varchar(100) NOT NULL,
  `resolution` varchar(50) NOT NULL,
  `system` varchar(50) NOT NULL,
  `processor_type` varchar(50) NOT NULL,
  `processor_brand` varchar(50) NOT NULL,
  `core` varchar(30) NOT NULL,
  `storage` varchar(30) NOT NULL,
  `ram` varchar(30) NOT NULL,
  `expestorage` varchar(20) NOT NULL,
  `memorycard` varchar(20) NOT NULL,
  `primarycamera` varchar(20) NOT NULL,
  `frontcamera` varchar(20) NOT NULL,
  `network` varchar(30) NOT NULL,
  `usb` varchar(30) NOT NULL,
  `battery` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `depth` varchar(30) NOT NULL,
  `gps` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `offerone` varchar(60) NOT NULL,
  `offerthree` varchar(60) NOT NULL,
  `offertwo` varchar(60) NOT NULL,
  `wifi` varchar(20) NOT NULL,
  `hotspot` varchar(20) NOT NULL,
  `hightimage_one` varchar(100) NOT NULL,
  `paragraphone` varchar(350) NOT NULL,
  `hightimage_two` varchar(100) NOT NULL,
  `paragraphtwo` varchar(350) NOT NULL,
  `display_size` varchar(50) NOT NULL,
  `added_at` datetime NOT NULL,
  `offer_per` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` varchar(40) NOT NULL DEFAULT 'mobile'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `pname`, `price`, `imageone`, `imagetwo`, `imagethree`, `sales_package`, `model_name`, `color`, `sim_slot`, `touchscreen`, `otg_compatible`, `quick_charging`, `display_type`, `resolution`, `system`, `processor_type`, `processor_brand`, `core`, `storage`, `ram`, `expestorage`, `memorycard`, `primarycamera`, `frontcamera`, `network`, `usb`, `battery`, `height`, `weight`, `depth`, `gps`, `title`, `offerone`, `offerthree`, `offertwo`, `wifi`, `hotspot`, `hightimage_one`, `paragraphone`, `hightimage_two`, `paragraphtwo`, `display_size`, `added_at`, `offer_per`, `discount`, `seller`, `quantity`, `product`) VALUES
(2, 'Redmi 10', 10999, 'uploads/img/redmi10 1.png', 'uploads/img/redmi10 2.png', 'uploads/img/redmi10 3.png', 'Handset, Adapter, USB Type C Cable, Sim Eject Tool, Quick Start Guide, Warranty', 'MZB0B6OIN', 'Pacific Blue', 'dual sim', 'no', 'no', 'no', 'HD', ' 1650 x 720 Pixels', 'Android 13', ' Qualcomm Snapdragon 680', ' Snapdragon', ' Octa Core', '64 GB', ' 4 GB', '2 GB', 'no', ' 50MP + 2MP', ' 5MP Front Camera', '4G, 3G,2G', 'micro usb type B', '6000mAH', '170cm', '203g', '9mm', 'no', 'REDMI 10 (Pacific Blue, 128 GB)  (6 GB RAM)', 'Bank Offer5% Cashback on Flipkart Axis Bank CardT&C', 'Partner OfferFlat 1% Instant discount up to ₹ 1,000 on purch', 'Special PriceGet extra ₹4000 off (price inclusive of cashbac', 'no', 'no', 'uploads/img/redmi10 4.png', 'Unmatched Performance This phone comes with Qualcomm Snapdragon 680 processor with 6 nm architecture that gives a speed superiority to your phone that in turn helps to play games, finish up tasks, and multitask with ease.', 'uploads/img/redmi10 5.webp', 'Unmatched Performance This phone comes with Qualcomm Snapdragon 680 processor with 6 nm architecture that gives a speed superiority to your phone that in turn helps to play games, finish up tasks, and multitask with ease.', ' 17.02 cm (6.7 inch)', '2024-02-27 05:36:56', 2, 2, 'shai telecom', 0, 'mobile'),
(7, 'SAMSUNG Galaxy S24 U', 144999, 'uploads/img/samsung1.png', 'uploads/img/samsung2.png', 'uploads/img/samsung3.png', ' Handset, Data Cable (Type C-to-C), Sim Ejector Pin, S-Pen', ' SM-S928BZTQINS', 'Titanium Gray', 'dual sim', 'yes', 'yes', 'yes', 'Amolate', ' 3120 x 1440 Pixels', 'Android 14', ' Snapdragon 8 Gen 3', ' Snapdragon', ' Octa Core', '256 GB', ' 12 GB', '5 GB', 'yes', '200MP + 50MP + 12MP ', ' 12MP Front Camera', '4G, 5G', 'micro usb type C', '6000mAH', '162.3 mm', '232g', '5 mm', 'yes', 'SAMSUNG Galaxy S24 Ultra 5G (Titanium Gray, 512 GB', '1% up to ₹1000 Off On UPI TransactionsT&C', 'Special PriceGet extra ₹6910 off (price inclusive of cashbac', '10% off on BOBCARD EMI Transactions, up to ₹1,500 on orders ', 'yes', 'yes', 'uploads/img/samsung4.png', 'AI Features Search like never before, get real-time interpretation on a call, format your notes into a clear summary, and effortlessly edit your photos - all from your smartphone, all with AI.', 'uploads/img/samsung5.png', ' Circle It, Find It. Just like That A new way to search is here with Circle to Search. Stumble upon a photo of a plant so beautiful that you just have to know what it is. Circle it with your S Pen or finger and ta-da, you\'ll get Google Search results. Now you can quickly get an answer without leaving your feed.', '17.27 cm (6.8 inch)', '2024-02-27 05:54:15', 0, 3, ' Flashstar Commerce', 3, 'mobile'),
(10, 'realme 12 5G', 19999, 'uploads/img/realme1.webp', 'uploads/img/realme2.webp', 'uploads/img/realme3.webp', ' Handset, Adapter, USB Data Cable, Sim Ejector Tool, Safety Guide, Quick Guide, Protective Case', ' RMX3999', ' Twilight Purple', 'dual sim', 'no', 'no', 'no', 'HD', ' 2400 x 1080 Pixels', 'Android 14', 'Dimensity 6100+', ' Mediatek', ' Octa Core', ' 128 GB', ' 6 GB', '5 GB', 'no', ' 108MP + 2MP', ' 8MP Front Camera', '4G, 5G', 'micro usb type B', '6000mAH', ' 165.7 mm', ' 188 g', '5 mm', 'no', 'realme 12 5G (Twilight Purple, 128 GB)  (6 GB RAM)', 'Bank Offer5% Cashback on Flipkart Axis Bank CardT&C', 'Special PriceGet extra 29% off (price inclusive of cashback/', '10% off on BOBCARD EMI Transactions, up to ₹1,500 on orders ', 'no', 'no', 'uploads/img/realme4.webp', '108 MP 3X Zoom Portrait Camera Capture life\'s moments in exquisite detail with the 108 MP 3X Zoom Portrait Camera, utilising in-sensor zoom technology for pristine zoom without pixel loss. Whether it\'s a close-up portrait or a sprawling group shot, every detail is crystal clear.', 'uploads/img/realme5.webp', ' Trendy Watch Design Immerse yourself in sophistication with the trendy watch design of the realme 12 5G. The Polished Sunburst Dial, featuring over 500 interwoven sunbursts, creates a stunning play of light. Complemented by the 3D Jubilee Bracelet and Polished PVD Edges, this smartphone is a fashion statement, merging style', ' 17.07 cm (6.72 inch)', '2024-03-09 02:22:58', 0, 15, ' Flashstar Commerce', 17, 'mobile'),
(12, 'realme C53', 13999, 'uploads/img/realmebig1.webp', 'uploads/img/realmebig2.webp', 'uploads/img/realmebig3.webp', ' Handset, Adapter, USB Cable, Important Info Booklet with Warranty Card, Quick Guide, Sim Card Tool,', ' RMX3762', 'Champion Gold', 'dual sim', 'no', 'no', 'no', 'HD', ' 1600 x 720 Pixel', ' Android 13', ' T612', ' Unisoc', ' Octa Core', ' 128 GB', ' 6 GB', '2 GB', 'no', ' 108MP + 2MP', ' 8MP Front Camera', ' 2G, 3G, 4G', 'micro usb type B', '5000mAH', ' 167.16 mm', ' 186 g', ' 7.99 mm', 'no', 'realme C53 (Champion Gold, 128 GB)  (6 GB RAM)#Jus', 'Get ₹25* instant discount for the 1st Flipkart Order using F', 'Get extra ₹4800 off (price inclusive of cashback/coupon)', '5% Cashback on Flipkart Axis Bank Card', 'no', 'no', 'uploads/img/realmebig4.webp', 'Exceptional Camera with 108 MP Enhance your photography skills with this C53 smartphone having 108 MP ultra clear camera. Capture stunning pictures and detailed moments on this large sensor size camera that can increase light sensing area by 79.37%. You will get an awesome 118.2% resolution boost when you take photos in high pixel mode. You can als', 'uploads/img/realmebig5.webp', 'Slim Design Phone with 7.99 mm Size This phone is slim and easy to hold as it is only 7.99 mm in size and boasts a slim champion design. You can see a C-angle design that is comfortable to carry and the golden glow of this phone gives a rich and classy look.', ' 17.12 cm (6.74 inch)', '2024-03-10 08:28:41', 0, 34, ' PETILANTE Online', 3, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `dbname` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `productid`, `userid`, `final_price`, `quantity`, `payment`, `date`, `dbname`, `status`) VALUES
(1, 1, 16, 168218, 2, 'COD(cash on delivery)', '2024-03-11 08:44:04', 'laptop', 1),
(3, 10, 11, 17108, 1, 'credit/Debit/ATM card', '2024-03-11 10:32:11', 'mobile', 2),
(4, 2, 11, 21776, 2, 'UPI', '2024-03-11 05:15:07', 'mobile', 1),
(5, 10, 21, 34216, 2, 'COD(cash on delivery)', '2024-03-28 03:56:35', 'mobile', 2),
(6, 12, 22, 28044, 3, 'COD(cash on delivery)', '2024-04-04 05:54:37', 'mobile', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `feedback` varchar(350) NOT NULL,
  `rating` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `dbname` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `productid`, `feedback`, `rating`, `userid`, `dbname`, `status`) VALUES
(1, 2, 'ggreg', 3, 11, 'mobile', 1),
(3, 2, 'fine', 5, 11, 'mobile', 1),
(5, 2, 'ss', 5, 11, 'mobile', 1),
(6, 1, 'bad item', 2, 11, 'cloth', 1),
(7, 2, 'nice phone', 5, 21, 'mobile', 1),
(8, 12, 'nice phone', 4, 22, 'mobile', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `district` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `address`, `state`, `city`, `pin`, `district`) VALUES
(19, 'Samir Paramanik', 'samir12@gmail.com', 8116007718, '$2y$10$1wN6xsFjmIQnQeazYqnxRuYVHuz.NMzXWdWq2XmfcRVjDrrPpM0SS', 'narsingh bandh,burnpur', 'WestBengal', 'Asansol', 713325, 'Paschim Bardhaman'),
(22, 'Akshay Paramanik', 'akshay14@gmail.com', 8710077109, '$2y$10$YnPrwTkd/ExeDuDzEkpgB.l3p21NW81/eUnfo8gOXVvVQU5ut4bfe', 'narsingh bandh,burnpur', 'AndhraPradesh', 'Asansol', 713325, 'Paschim Bardhaman'),
(23, 'Akshay Paramanik', 'samir.burnpur01@gmail.com', 9749754443, '$2y$10$9tJWD/PcOoSknvog/ZgccOewlTQKRnp72wlyygXFV6jQd0QSCrHyy', 'narsingh bandh,burnpur', 'Meghalaya', 'Asansol', 713325, 'Paschim Bardhaman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carosel`
--
ALTER TABLE `carosel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footware`
--
ALTER TABLE `footware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carosel`
--
ALTER TABLE `carosel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `footware`
--
ALTER TABLE `footware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
