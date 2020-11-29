-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 07:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrobd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `email`, `password`) VALUES
(5, 'MD EZAHEBUL ISLAM', 'ezahebul@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `name`, `email`, `message`, `uid`, `created_at`) VALUES
(19, 'Halla', 'patew@mailinator.com', 'Iste dolor consequun', 0, '2020-11-21 15:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `create_seasons`
--

CREATE TABLE `create_seasons` (
  `createSeason_id` int(11) NOT NULL,
  `seasonName` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `expectedYield` varchar(20) NOT NULL,
  `cropProduction_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `create_seasons`
--

INSERT INTO `create_seasons` (`createSeason_id`, `seasonName`, `startDate`, `endDate`, `status`, `expectedYield`, `cropProduction_id`, `uid`, `created_date`) VALUES
(3, 'Allen Blanchard', '1993-02-12', '2008-07-15', 'in progress', 'Dolores harum amet ', 18, 12, '2020-11-21 15:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `crop_lists`
--

CREATE TABLE `crop_lists` (
  `cropList_id` int(11) NOT NULL,
  `crop_name` varchar(50) NOT NULL,
  `crop_category` varchar(50) NOT NULL,
  `soil_type` varchar(50) NOT NULL,
  `season` varchar(20) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crop_lists`
--

INSERT INTO `crop_lists` (`cropList_id`, `crop_name`, `crop_category`, `soil_type`, `season`, `duration`, `created_at`) VALUES
(1, 'Jute', 'Tree', 'Clay', 'Kharif- 1', 'Seasonal - summer', '2020-11-21 15:57:31'),
(5, 'Aus rice', 'Grain ', 'Clay loam', 'Kharif- 1', 'Seasonal - summer', '2020-11-21 15:57:31'),
(7, 'T.aman', 'Grain ', 'Loam', 'Kharif- 2', 'Seasonal - summer', '2020-11-21 15:57:31'),
(9, 'Glenna Stewart', 'Aut quod optio quib', 'Expedita nisi provid', 'Nobis nostrum et exp', 'Sint tempor hic et d', '2020-11-21 15:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `crop_productions`
--

CREATE TABLE `crop_productions` (
  `cropProduction_id` int(11) NOT NULL,
  `cropProduction_name` varchar(30) NOT NULL,
  `crop_name` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crop_productions`
--

INSERT INTO `crop_productions` (`cropProduction_id`, `cropProduction_name`, `crop_name`, `location`, `uid`, `created_at`) VALUES
(13, 'Dragon', 'Jute', 'Dhaka, Bangladesh', 12, '2020-11-20 12:18:18'),
(29, 'Winter season first production', 'Tomato', 'Dhaka, Bangladesh', 12, '2020-11-23 18:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `e_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `net_amount` int(11) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `cropProduction_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`e_id`, `item_name`, `category`, `net_amount`, `invoice_no`, `date`, `cropProduction_id`, `uid`, `created_date`) VALUES
(6, 'Orli Blackwell', 'protection product', 55, 'Aspernatur duis aliq', '1994-02-15', 10, 12, '2020-11-21 17:34:16'),
(9, 'Seed', 'seed', 10000, '#64641961', '2020-11-02', 13, 12, '2020-11-29 06:59:14'),
(10, 'Inorganic fertilizer', 'fertilizer', 5000, '#46941694', '2020-10-06', 13, 12, '2020-11-29 07:35:32'),
(11, 'Tractor', 'machinery', 1000000, '#9844164', '2020-09-15', 29, 12, '2020-11-29 07:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `f_id` int(11) NOT NULL,
  `field_name` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `usable_area` varchar(10) NOT NULL,
  `soil_type` varchar(20) NOT NULL,
  `ownership_type` varchar(20) NOT NULL,
  `cropProduction_id` int(11) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`f_id`, `field_name`, `location`, `usable_area`, `soil_type`, `ownership_type`, `cropProduction_id`, `uid`, `created_at`) VALUES
(8, 'Field 1', 'Consequatur ipsum cu', 'Nulla magn', 'sandy clay', 'given for use', 18, 12, '2020-11-19 16:55:45'),
(9, 'My field', 'Dhaka, Bangladesh', '50 ha', 'clay', 'privately owned', 29, 12, '2020-11-24 15:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `i_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`i_id`, `item_name`, `category`, `quantity`, `date`, `uid`, `created_at`) VALUES
(5, 'Purple Capsicum Seeds', 'seed', '1000 Pcs', '2020-11-05', 12, '2020-11-29 07:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `machinery`
--

CREATE TABLE `machinery` (
  `m_id` int(11) NOT NULL,
  `machinery_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `manufacturer` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `reg_number` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machinery`
--

INSERT INTO `machinery` (`m_id`, `machinery_name`, `category`, `manufacturer`, `model`, `reg_number`, `uid`, `created_at`) VALUES
(15, 'Tractor', 'tractor', 'SONALIKA', 'Supreme DI 35 RX', '4196161', 12, '2020-11-29 07:06:54'),
(16, 'YANMAR Rice Transpla', 'planter', 'YANMAR', 'YANMAR Rice Transpla', '6482884', 12, '2020-11-29 16:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `pests`
--

CREATE TABLE `pests` (
  `pests_id` int(11) NOT NULL,
  `pests_name` varchar(100) NOT NULL,
  `common_name` varchar(100) NOT NULL,
  `family` varchar(100) NOT NULL,
  `host` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pests`
--

INSERT INTO `pests` (`pests_id`, `pests_name`, `common_name`, `family`, `host`, `created_at`) VALUES
(34, 'Sitophilus oryzae', 'The rice weevil', 'Coleoptera/Curculionidae	', 'Rice, paddy, rice hulls, wheat, flour, maize, pea, gram, kheshari, mung', '2020-11-28 16:45:30'),
(36, 'S. zeamais	', 'The rice weevil/maize weevil', 'Coleoptera/Curculionidae	', 'As above', '2020-11-28 16:54:36'),
(37, 'Tribolium confusum', 'The confused flour beetle', 'Coleoptera/Tenebrionidae', 'Flour, wheat, rice (broken), suji, gram, mixed feed', '2020-11-28 16:55:06'),
(38, 'T. castaneum', 'The red flour beetle', 'Coleoptera/Tenebrionidae', 'As above', '2020-11-28 16:55:31'),
(39, 'Latheticus oryzae', 'The long-headed flour beetle', 'Coleoptera/Tenebrionidae', 'Flour, ground cereals, mixed feeds', '2020-11-28 16:55:53'),
(40, 'Palorus subdepressus', 'The depressed flour beetle', 'Coleoptera/Tenebrionidae', 'Rice, wheat, flour, suji, mixed feed', '2020-11-28 16:56:19'),
(41, 'Alphitobius diaperinum', 'The lesser mealworm', 'Coleoptera/Tenebrionidae', 'Wheat, mixed feed, flour', '2020-11-28 16:57:08'),
(42, 'A. laevigatus', 'The black fungus beetle', 'Coleoptera/Tenebrionidae', 'Wheat bran, whole grains', '2020-11-28 16:57:32'),
(43, 'Tenebroides mauritanicus', 'The cadelle', 'Coleoptera/Ostomatidae', 'Flour, wheat, rice, mixed feed', '2020-11-28 16:58:06'),
(44, 'Attagenus piceus', 'The black carpet beetle', 'Coleoptera/Dermestidae	', 'Flour, wheat, mixed feed', '2020-11-28 16:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `s_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `net_amount` int(11) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `uid` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`s_id`, `item_name`, `category`, `quantity`, `net_amount`, `invoice_no`, `date`, `uid`, `create_date`) VALUES
(10, 'Crops', 'crop', '200kg', 20000, '#01648931', '2020-11-10', 12, '2020-11-29 06:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(12) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `cropProduction_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `start_date`, `end_date`, `status`, `categories`, `cropProduction_id`, `uid`, `created_at`) VALUES
(7, 'Vernon Jacobson', '2014-06-02', '2012-08-13', 'finished', 'fertilizing', 18, 12, '0000-00-00 00:00:00'),
(11, 'fertilize', '1996-10-21', '2012-12-09', 'pending', 'harvesting', 13, 12, '2020-11-24 20:19:06'),
(13, 'Planting', '2020-11-20', '2020-11-22', 'in progress', 'fertilization', 29, 12, '2020-11-24 20:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `token` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `phone`, `token`, `created_at`) VALUES
(12, 'MD EZAHEBUL ISLAM', 'ezahebul@gmail.com', '202cb962ac59075b964b07152d234b70', '01954149655', '', '2020-11-21 16:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `w_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`w_id`, `fname`, `lname`, `gender`, `city`, `address`, `phone`, `role`, `uid`, `created_at`) VALUES
(1, 'Faizul', 'Karim', 'male', 'barishal', 'Barishal', '01910203040', 'worker', 12, '2020-11-23 18:39:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `create_seasons`
--
ALTER TABLE `create_seasons`
  ADD PRIMARY KEY (`createSeason_id`),
  ADD KEY `uid` (`cropProduction_id`),
  ADD KEY `uid_2` (`uid`);

--
-- Indexes for table `crop_lists`
--
ALTER TABLE `crop_lists`
  ADD PRIMARY KEY (`cropList_id`);

--
-- Indexes for table `crop_productions`
--
ALTER TABLE `crop_productions`
  ADD PRIMARY KEY (`cropProduction_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `cropProduction_id` (`cropProduction_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `cropProduction_id` (`cropProduction_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `machinery`
--
ALTER TABLE `machinery`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `pests`
--
ALTER TABLE `pests`
  ADD PRIMARY KEY (`pests_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `cropProduction_id` (`cropProduction_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `create_seasons`
--
ALTER TABLE `create_seasons`
  MODIFY `createSeason_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crop_lists`
--
ALTER TABLE `crop_lists`
  MODIFY `cropList_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crop_productions`
--
ALTER TABLE `crop_productions`
  MODIFY `cropProduction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `machinery`
--
ALTER TABLE `machinery`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pests`
--
ALTER TABLE `pests`
  MODIFY `pests_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
