-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 09:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otopginama`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `userdesc`) VALUES
(1, 'admin', 'adminadmin', 'ADMINADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `auditlogs`
--

CREATE TABLE `auditlogs` (
  `log_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `delivery_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `departmen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `ownername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `contact_no`, `ownername`) VALUES
(1, '3N HANDICRAFTS', '09354237727', 'LUZ VILLAMOR'),
(2, 'AM NOBLE NATURE\'S BLESSING', '09177120249', 'MARLE NOBLE'),
(3, 'ANGEL\'S', '09298057158', 'NOT AVAILABLE'),
(4, 'ANGKONG CHILI', 'NOT AVAILABLE', 'MICHAEL UYBENGKEE'),
(5, 'BESTFRIEND GOODIES', '09177101398', 'NANETTE TAN'),
(22, 'BITE ME UP', 'CATHY PANO', '09066678534'),
(23, 'CAKEISTRY', 'AWI CHAVES', 'NOT AVAILABLE'),
(24, 'CAPE DI TICALA', '09066678534', 'CHRISTOPHER TANGKING'),
(25, 'CDO HANDMADE PAPER', 'LOLITA CABANLET', '09978902988'),
(26, 'CRUNCHY TIME', 'MARY JANE ECO', '09551687117'),
(27, 'DARLING FOODS', 'NINO LAZO', '09177067937');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `invoice_date` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_to` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `date_ordered` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `courier` varchar(255) NOT NULL,
  `date_delivered` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_to`, `products`, `date_ordered`, `shipping_address`, `total_price`, `payment_type`, `courier`, `date_delivered`, `status`) VALUES
(2, 'KIM TESTER', '2 SAMBAL OIL', '05/22/2020', 'MALAYBALAY, BUKIDNON', '100.00', 'CASH ON DELIVERY', 'N/A', 'N/A', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `desc`, `company_name`, `price`, `tags`, `date_added`) VALUES
(4, 'SAMBAL CHILI OIL', 'SAMBAL IS A CHILI OIL', 'AM NOBLE NATURE\'S BLESSING', '50.00', '#condiments,#spices', '29-05-2020'),
(5, '2G MARINADE', 'MARINADE FOR MEAT AND OTHERS', 'AM NOBLE NATURE\'S BLESSING', '250.00', '#condiments', '29-05-2020');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `img_id` int(11) NOT NULL,
  `img_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`img_id`, `img_code`, `name`) VALUES
(36, 'sambal.JPG', 'SAMBAL CHILI OIL'),
(45, '2G Marinade.JPG', '2G MARINADE'),
(46, '97106823_1692018777617803_7757127532054853417_n.jpg', 'wrwerwerwerwer'),
(47, 'ajax3.PNG', 'wrwerwerwerwer'),
(48, 'ajax3.PNG', 'wrwerwerwerwer'),
(49, 'Capture.PNG', 'qweqweqe');

-- --------------------------------------------------------

--
-- Table structure for table `product_rate`
--

CREATE TABLE `product_rate` (
  `rate_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `date_submitted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rate`
--

INSERT INTO `product_rate` (`rate_id`, `product_name`, `rating`, `date_submitted`) VALUES
(1, 'chicken joy', '4.5', '05-27-2020'),
(2, 'chicken fillet', '6', '05-27-2020'),
(3, 'chicken joy', '7', '05-27-2020'),
(4, 'burger steak', '8', '05-27-2020'),
(5, 'burger steak', '10', '05-27-2020'),
(6, 'burger steak', '5', '05-27-2020'),
(7, 'chicken fillet', '5', '05-27-2020'),
(8, 'chicken fillet', '4', '05-27-2020'),
(9, 'chicken fillet', '2', '05-27-2020'),
(10, 'chicken fillet', '3', '05-27-2020');

-- --------------------------------------------------------

--
-- Table structure for table `product_sales`
--

CREATE TABLE `product_sales` (
  `sales_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `revenue` varchar(255) NOT NULL,
  `last_updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sales`
--

INSERT INTO `product_sales` (`sales_id`, `product_name`, `revenue`, `last_updated`) VALUES
(1, 'jollibee', '10000', '05-22-2020'),
(2, 'jollibee', '100023', '05-22-2020'),
(3, 'jollibee', '55121', '05-23-2020'),
(4, 'jollibee', '67121412', '05-23-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sales_daily`
--

CREATE TABLE `sales_daily` (
  `daily_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `total_sales` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_daily`
--

INSERT INTO `sales_daily` (`daily_id`, `date`, `total_sales`) VALUES
(1, '17-05-2020', '1500'),
(2, '18-05-2020', '1600'),
(3, '19-05-2020', '2300'),
(4, '20-05-2020', '768'),
(5, '21-05-2020', '3212'),
(6, '22-05-2020', '1234'),
(7, '23-05-2020', '560'),
(8, '24-05-2020', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `shelves`
--

CREATE TABLE `shelves` (
  `shelve_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `QTY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelves`
--

INSERT INTO `shelves` (`shelve_id`, `product_name`, `QTY`) VALUES
(1, 'MILK BAR', '15'),
(2, 'MOCK-A-LATE', '4'),
(3, 'MONICAKE', '6'),
(4, 'Select', '123'),
(5, 'SAMBAL CHILI OIL', '25'),
(6, '2G MARINADE', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(3, 'bwinana', 'bwinana'),
(4, 'hyperkombu', 'hyperkombu');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userdet_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userdet_id`, `username`, `fname`, `lname`, `address`, `contact_no`, `email`, `date_created`, `updated_at`) VALUES
(3, 'bwinana', 'Hannah', 'Lozano', 'Indahag, Cagayan de Oro City', '09156821839', 'nanalou1008@gmail.com', '2020-05-30 4:11:45', '2020-05-30 4:11:45'),
(8, 'hyperkombu', 'Kim', 'Tester', 'Malaybalay, Bukidnon', '09156821839', 'hyperkim@gmail.com', '2020-05-30 9:01:00', '2020-05-30 9:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_img`
--

CREATE TABLE `user_img` (
  `userimg_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userimgname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `auditlogs`
--
ALTER TABLE `auditlogs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `product_rate`
--
ALTER TABLE `product_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `product_sales`
--
ALTER TABLE `product_sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_daily`
--
ALTER TABLE `sales_daily`
  ADD PRIMARY KEY (`daily_id`);

--
-- Indexes for table `shelves`
--
ALTER TABLE `shelves`
  ADD PRIMARY KEY (`shelve_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userdet_id`);

--
-- Indexes for table `user_img`
--
ALTER TABLE `user_img`
  ADD PRIMARY KEY (`userimg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auditlogs`
--
ALTER TABLE `auditlogs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_rate`
--
ALTER TABLE `product_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_sales`
--
ALTER TABLE `product_sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_daily`
--
ALTER TABLE `sales_daily`
  MODIFY `daily_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shelves`
--
ALTER TABLE `shelves`
  MODIFY `shelve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userdet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_img`
--
ALTER TABLE `user_img`
  MODIFY `userimg_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
