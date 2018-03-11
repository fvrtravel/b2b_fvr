-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2018 at 10:47 PM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fvrtrave_tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash_add`
--

CREATE TABLE IF NOT EXISTS `cash_add` (
  `cash_add_id` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `voucher_no` varchar(255) DEFAULT NULL,
  `amount` double(100,2) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cash_count`
--

CREATE TABLE IF NOT EXISTS `cash_count` (
  `cc_id` varchar(255) NOT NULL,
  `fivecents_quantity` varchar(255) DEFAULT NULL,
  `tencents_quantity` varchar(255) DEFAULT NULL,
  `twentyfivecents_quantity` varchar(255) DEFAULT NULL,
  `onepeso_quantity` varchar(255) DEFAULT NULL,
  `fivepeso_quantity` varchar(255) DEFAULT NULL,
  `tenpeso_quantity` varchar(255) DEFAULT NULL,
  `twentypeso_quantity` varchar(255) DEFAULT NULL,
  `fiftypeso_quantity` varchar(255) DEFAULT NULL,
  `onehundredpeso_quantity` varchar(255) DEFAULT NULL,
  `twohundredpeso_quantity` varchar(255) DEFAULT NULL,
  `fivehundredpeso_quantity` varchar(255) DEFAULT NULL,
  `onethousandpeso_quantity` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_count`
--

INSERT INTO `cash_count` (`cc_id`, `fivecents_quantity`, `tencents_quantity`, `twentyfivecents_quantity`, `onepeso_quantity`, `fivepeso_quantity`, `tenpeso_quantity`, `twentypeso_quantity`, `fiftypeso_quantity`, `onehundredpeso_quantity`, `twohundredpeso_quantity`, `fivehundredpeso_quantity`, `onethousandpeso_quantity`, `uid`, `date_made`) VALUES
('008bc5aecc5982bd637ce14df4335539', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '2017-11-20'),
('f814273046fd27b8cd8dc5fe659c474a', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '2017-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `cash_out`
--

CREATE TABLE IF NOT EXISTS `cash_out` (
  `cash_out_id` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `particular` varchar(255) DEFAULT NULL,
  `amount` double(100,2) DEFAULT NULL,
  `withdraw_by` varchar(255) DEFAULT NULL,
  `voucher_number` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_message` varchar(255) DEFAULT NULL,
  `attachment_path` varchar(255) DEFAULT NULL,
  `chat_date` varchar(255) DEFAULT NULL,
  `chat_time` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_fname` varchar(255) DEFAULT NULL,
  `contact_mname` varchar(255) DEFAULT NULL,
  `contact_lname` varchar(255) DEFAULT NULL,
  `contact_namext` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eload`
--

CREATE TABLE IF NOT EXISTS `eload` (
  `eload_id` varchar(255) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `amount` double(100,2) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `emp_id` varchar(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `name_ext` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `contact_num` varchar(255) DEFAULT NULL,
  `tp_id` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `date_reg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`emp_id`, `firstname`, `middlename`, `surname`, `name_ext`, `address`, `email_address`, `contact_num`, `tp_id`, `position`, `date_reg`) VALUES
('1', 'BeQuest Travel ', '', '', '', '', '', '', '2', 'partners', '2017-02-01'),
('1a90312c96a', 'Admin', 'Admin', 'Admin', '', '324', '456', '54645', '1', '456', '2017-12-30'),
('3fa08bd8ac8', 'GSF Travel ', '', '', '', 'Purok 5, Cogon Norte(Pob.), Loon Bohol, Region 7 (Central Visayas)', '', '', '11', 'Owner', '2018-03-05'),
('4183391482b', 'Nova', '', 'Ramirez', '', '', '', '', '1', '', '2018-01-25'),
('44ae3fc05fb', 'Iniega Travel and Tours', '', 'Collantes', '', '', '', '', '3', '', '2018-02-01'),
('46ce0493135', 'Easy Travel ', '', ' Pagadian', '', '', '', '', '5', '', '2018-02-01'),
('add82e18b81', 'Amy Jampit', '', 'Jampit', '', '', '', '', '6', '', '2018-01-31'),
('b64e5c60e27', 'Cinderella Redz Travel ', '', 'Redelosa', '', '', '', '', '9', '', '2018-01-31'),
('ca457cff0be', 'AmaXing Travel ', '', '', '', '', '', '', '8', '', '2018-01-31'),
('d335addd825', 'Team Laagan Travel & Tours', '', '', '', '', '', '', '1', '', '2018-01-31'),
('ebb32a2bd3e', 'BeHappy Travel & Tours', '', '', '', '', '', '', '1', '', '2018-02-01'),
('fc624804c10', 'Nenita Conato Pegi', 'Conato', 'Pegi', '', '', '', '', '4', '', '2018-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rate`
--

CREATE TABLE IF NOT EXISTS `exchange_rate` (
  `ec_id` varchar(255) NOT NULL,
  `country_flag_image` varchar(255) DEFAULT NULL,
  `currency_image` varchar(255) DEFAULT NULL,
  `currency_desc` varchar(255) DEFAULT NULL,
  `rate_amount` varchar(255) DEFAULT NULL,
  `denomination` varchar(255) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `money_change`
--

CREATE TABLE IF NOT EXISTS `money_change` (
  `money_id` varchar(255) NOT NULL,
  `particular` varchar(255) DEFAULT NULL,
  `amount` double(100,2) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `others_id` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `particular` varchar(255) DEFAULT NULL,
  `amount` double(100,2) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`others_id`, `description`, `particular`, `amount`, `uid`, `date_made`) VALUES
('68591ae958ba6ae2cd30f717f2b775fd', NULL, 'DOLLAR', 5000.00, 1, '2017-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `promo_id` varchar(255) NOT NULL,
  `promo_title` varchar(255) DEFAULT NULL,
  `promo_rate` varchar(255) DEFAULT NULL,
  `promo_details` varchar(255) DEFAULT NULL,
  `promo_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remittance`
--

CREATE TABLE IF NOT EXISTS `remittance` (
  `remit_id` varchar(255) NOT NULL,
  `remit_amount` varchar(255) DEFAULT NULL,
  `remit_fee` varchar(255) DEFAULT NULL,
  `remit_mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remittance`
--

INSERT INTO `remittance` (`remit_id`, `remit_amount`, `remit_fee`, `remit_mode`) VALUES
('0cfc631496e744b7f7b8733df4bd2fe4', NULL, NULL, NULL),
('32c86179cb55d4d9c5975e525048ad00', NULL, NULL, NULL),
('50f6e68ee21a041f92b989d58a172958', '1001 - Above', '3.85 %', 'GCASH'),
('9002906af6f4cb3401ff60c6dd40c3eb', '1 - 1k', 'Php 35.00', 'SMART PADALA'),
('dc61d4ab195ead8a8b91ed4cc18d2d5a', '1001 - Above', '3.95 %', 'SMART PADALA'),
('f0749d652be3b948e064d9013d35f5a2', '1 - 1k', 'Php 35.00', 'GCASH');

-- --------------------------------------------------------

--
-- Table structure for table `remit_in`
--

CREATE TABLE IF NOT EXISTS `remit_in` (
  `remit_in_id` varchar(255) NOT NULL,
  `remit_in_amount` varchar(255) DEFAULT NULL,
  `remit_in_service_fee` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `remit_in_date` varchar(255) DEFAULT NULL,
  `remit_mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remit_out`
--

CREATE TABLE IF NOT EXISTS `remit_out` (
  `remit_out_id` varchar(255) NOT NULL,
  `remit_out_amount` double(100,2) DEFAULT NULL,
  `remit_out_service_fee` double(100,2) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `remit_out_date` varchar(255) DEFAULT NULL,
  `remit_mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remit_out`
--

INSERT INTO `remit_out` (`remit_out_id`, `remit_out_amount`, `remit_out_service_fee`, `uid`, `remit_out_date`, `remit_mode`) VALUES
('6ecd3d875304afb19544839c66e0d87b', 6000.00, 60.00, 1, '2017-11-19', 'SMRECEIVE');

-- --------------------------------------------------------

--
-- Table structure for table `seat_assignment`
--

CREATE TABLE IF NOT EXISTS `seat_assignment` (
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `sms_id` int(11) NOT NULL,
  `sms_title` varchar(255) DEFAULT NULL,
  `sms_content` varchar(255) DEFAULT NULL,
  `sms_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `ticket_id` varchar(255) NOT NULL,
  `locator` varchar(255) DEFAULT NULL,
  `amount` double(100,2) DEFAULT NULL,
  `particular` varchar(255) DEFAULT NULL,
  `ticket_line` varchar(255) DEFAULT NULL,
  `ticket_mode` varchar(255) DEFAULT NULL,
  `route_from` varchar(255) DEFAULT NULL,
  `route_to` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `date_made` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `travelpartners`
--

CREATE TABLE IF NOT EXISTS `travelpartners` (
  `tp_id` int(11) NOT NULL,
  `tp_name` varchar(255) DEFAULT NULL,
  `tp_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelpartners`
--

INSERT INTO `travelpartners` (`tp_id`, `tp_name`, `tp_date`) VALUES
(1, 'BeHappy Travel & Tours', '2018-02-20'),
(2, 'Bequest Travel & Tours', '11/15/2017'),
(3, 'Iniega Travel & Tours', '2018-02-20'),
(4, 'Nenita Conato Pegi', '2017-02-21'),
(5, 'Easy Travel & Leisure Travel & Tours', '2018-02-21'),
(6, 'Amy Jampit', '2018-02-21'),
(7, 'Team Laagan Travel & Tours', '2018-02-21'),
(8, 'AmaXing Travel & Tours', '2018-02-21'),
(9, 'Cinderella Redz Travel & Tours', '2018-02-21'),
(10, 'FVR Travel & Tours Agency', '11/15/2017'),
(11, 'GSF Travel & Tours', '2018-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_online` varchar(255) DEFAULT NULL,
  `role_type` varchar(255) DEFAULT NULL,
  `is_superadmin` varchar(255) DEFAULT NULL,
  `tp_id` int(11) DEFAULT NULL,
  `emp_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `username`, `password`, `is_online`, `role_type`, `is_superadmin`, `tp_id`, `emp_id`) VALUES
(1, 'behappy', 'happybee123', NULL, 'User', NULL, 1, 'ebb32a2bd3e'),
(2, 'Bequest', 'quizbee123', NULL, 'User', NULL, 1, '1'),
(3, 'iniegatravel', 'criscoltravel123', NULL, 'User', NULL, 1, '44ae3fc05fb'),
(4, 'nenitaconpeg', 'ncp123', NULL, 'User', NULL, 1, 'fc624804c10'),
(5, 'etlpagadian237', 'pagetl372', NULL, 'User', NULL, 1, '46ce0493135'),
(6, 'amyjampit', 'aj123', NULL, 'User', NULL, 1, 'add82e18b81'),
(7, 'teamlaagan', 'maglaag123', NULL, 'User', NULL, 1, 'd335addd825'),
(8, 'amxtravel', 'amxtravel123', NULL, 'User', NULL, 1, 'ca457cff0be'),
(9, 'cindyred', 'redcindy123', NULL, 'User', NULL, 1, 'b64e5c60e27'),
(10, 'gsftravel2018', 'recamadasgsf', NULL, 'User', NULL, 11, '3fa08bd8ac8'),
(12, 'Admin', 'admin', '0', 'Admin', 'YES', 1, '1a90312c96a'),
(500, 'Nova', 'lourdram123', NULL, 'User', NULL, 1, '4183391482b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash_add`
--
ALTER TABLE `cash_add`
  ADD PRIMARY KEY (`cash_add_id`);

--
-- Indexes for table `cash_count`
--
ALTER TABLE `cash_count`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `cash_out`
--
ALTER TABLE `cash_out`
  ADD PRIMARY KEY (`cash_out_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `eload`
--
ALTER TABLE `eload`
  ADD PRIMARY KEY (`eload_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `exchange_rate`
--
ALTER TABLE `exchange_rate`
  ADD PRIMARY KEY (`ec_id`);

--
-- Indexes for table `money_change`
--
ALTER TABLE `money_change`
  ADD PRIMARY KEY (`money_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`others_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `remittance`
--
ALTER TABLE `remittance`
  ADD PRIMARY KEY (`remit_id`);

--
-- Indexes for table `remit_in`
--
ALTER TABLE `remit_in`
  ADD PRIMARY KEY (`remit_in_id`);

--
-- Indexes for table `remit_out`
--
ALTER TABLE `remit_out`
  ADD PRIMARY KEY (`remit_out_id`);

--
-- Indexes for table `seat_assignment`
--
ALTER TABLE `seat_assignment`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `travelpartners`
--
ALTER TABLE `travelpartners`
  ADD PRIMARY KEY (`tp_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seat_assignment`
--
ALTER TABLE `seat_assignment`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `travelpartners`
--
ALTER TABLE `travelpartners`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
