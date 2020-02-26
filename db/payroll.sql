-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 05:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `attendances_statuss` enum('presence','a','i','s') NOT NULL,
  `descriptions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employees_id`, `dates`, `time_in`, `time_out`, `attendances_statuss`, `descriptions`) VALUES
(1, 12, '2020-02-10', '18:08:59', '18:08:59', 'presence', 'dagsdgsdgsddgdgs');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position_id` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone_numbers` int(14) NOT NULL,
  `place_of_birth` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `marital_status` enum('single','married','','') NOT NULL,
  `date_of_entry` date NOT NULL,
  `basic_salary` double NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `bank_account` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nik`, `name`, `position_id`, `address`, `phone_numbers`, `place_of_birth`, `date_of_birth`, `marital_status`, `date_of_entry`, `basic_salary`, `gender`, `bank_account`) VALUES
(5, 1234, 'fdfggdfgd', 1, '                                          sgdsdgs                                    ', 35343, 'fghghgh', '2020-02-06', 'single', '2020-02-13', 50000000, 'male', 0),
(10, 24234, 'dfsfsdfsd', 2, 'kdkdfksdfksdf', 463463434, 'jhsdfjsldfadf', '2020-02-14', 'married', '2020-02-14', 2464624624, 'female', 352342423);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `overtimes`
--

CREATE TABLE `overtimes` (
  `id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `users_id` int(11) NOT NULL,
  `descriptions` varchar(256) NOT NULL,
  `overtimes_hours` varchar(20) NOT NULL,
  `overtimes_pays` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL,
  `salary` double NOT NULL,
  `overtimes_pays` double NOT NULL,
  `total_salary` double NOT NULL,
  `month_pay` enum('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `payment_date` datetime NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `employees_id`, `salary`, `overtimes_pays`, `total_salary`, `month_pay`, `payment_date`, `users_id`) VALUES
(0, 12, 2222222, 222222, 2222222222222, 'January', '2020-02-15 18:25:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `position_code` int(11) NOT NULL,
  `position_name` varchar(30) NOT NULL,
  `overtimes_pay_hour` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position_code`, `position_name`, `overtimes_pay_hour`) VALUES
(1, 1, 'supervisor', 25000),
(3, 3, 'Manager', 2313131),
(5, 131, 'fafaf', 13213123),
(7, 0, 'jzxhxkvzx', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level` enum('administrator','employee','','') NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`, `avatar`) VALUES
(20, 'student', 'student@gmail.com', '$2y$10$BdJIA3dVpcKI/q1ohbWB6e44XE6/BKq.szHR.svZnouoBW/1LE7mC', 'employee', 'fav.jpg'),
(21, 'Sarva', 'sarvaclever@gmail.com', '$2y$10$3vaWVzi1VF9gqCoVMfHeLOWsyErpNNkE3bZiAIF21R2BOzX54KEFi', 'administrator', 'fav.jpg'),
(23, 'admin', 'admin@gmail.com', '$2y$10$IfWN/P0EnmAGWPK873rfq.jXK95bpDotyEqvHwmfhIYQjZbBZDTCW', 'administrator', 'fav.jpg'),
(24, 'siapa', 'infocreativedesain@gmail.com', '$2y$10$GWzMYFPEyl/hulb6MFH9Be2ZS3sg/YapsoLXMeepggs/bMY8i1jqO', 'employee', ''),
(25, 'apa', 'apa@gmail.com', '$2y$10$4149Yk5utgs.NDI7/yNgrOzUvxqzeQ.mayFf8Vi4AusPL3hW.LNHG', 'administrator', ''),
(26, 'apaa', 'apaa@gmail.com', '$2y$10$zRpSde.tpY/DCeYjpYihWuj/nO0Z3jB0UB3.KmE25B7ihlo/dMVvK', 'administrator', ''),
(28, 'apaaa', 'sarvaclever@gmail.com', '$2y$10$v05/F70mjgACPN6uCLW6kO3hkyKgY6/QlkXZ6KV6HbcGKCXHNHiti', 'administrator', 'fav.jpg'),
(29, 'agung', 'agung@gmail.com', '$2y$10$x0jU4rBLg4JWdjPzx.Ce.uYfRIgdCZeW6i2zl/1uwSS02OLbkrT0S', 'administrator', 'anotherwallpaper.jpg'),
(31, 'hamizan', 'hamizan@gmail.com', '$2y$10$ELT/XFLKSQP4hdi1kiK/W.QDR3q2QjzKW55CPph0pf2soYsegbr1m', 'administrator', 'anotherwallpaper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtimes`
--
ALTER TABLE `overtimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `overtimes`
--
ALTER TABLE `overtimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
