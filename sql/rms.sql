-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 09:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `barishal`
--

CREATE TABLE `barishal` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `id` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`id`, `amount`) VALUES
(1, 852);

-- --------------------------------------------------------

--
-- Table structure for table `ctg`
--

CREATE TABLE `ctg` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cumilla`
--

CREATE TABLE `cumilla` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dhaka`
--

CREATE TABLE `dhaka` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhaka`
--

INSERT INTO `dhaka` (`id`, `fname`, `lname`, `phn`, `email`, `occupation`, `institution`) VALUES
(1, 'Anita', 'mahmud', '1478', 'an@gmail.com', 'student', 'BRAC');

-- --------------------------------------------------------

--
-- Table structure for table `dinajpur`
--

CREATE TABLE `dinajpur` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(255) NOT NULL,
  `tran` varchar(11) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `tran`, `amount`) VALUES
(1, 'bnbvn', '16500'),
(2, 'asd', '75353253');

-- --------------------------------------------------------

--
-- Table structure for table `khulna`
--

CREATE TABLE `khulna` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `len`
--

CREATE TABLE `len` (
  `id` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`id`, `amount`) VALUES
(1, 75353253);

-- --------------------------------------------------------

--
-- Table structure for table `p_bari`
--

CREATE TABLE `p_bari` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_cm`
--

CREATE TABLE `p_cm` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_ctg`
--

CREATE TABLE `p_ctg` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_d`
--

CREATE TABLE `p_d` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_d`
--

INSERT INTO `p_d` (`id`, `area`, `people`) VALUES
(1, 'Dhaka', '147'),
(2, 'Dhaka', '147');

-- --------------------------------------------------------

--
-- Table structure for table `p_dnj`
--

CREATE TABLE `p_dnj` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_dnj`
--

INSERT INTO `p_dnj` (`id`, `area`, `people`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_khu`
--

CREATE TABLE `p_khu` (
  `id` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_khu`
--

INSERT INTO `p_khu` (`id`, `area`, `people`) VALUES
(1, 'Khulna', '54');

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `id` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `snack`
--

CREATE TABLE `snack` (
  `id` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volregs`
--

CREATE TABLE `volregs` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volregs`
--

INSERT INTO `volregs` (`id`, `fname`, `lname`, `phn`, `email`, `occupation`, `institution`, `area`) VALUES
(1, 'Anita', 'mahmud', '1478', 'an@gmail.com', 'student', 'BRAC', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phn` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `phn`, `email`, `pass`) VALUES
(1, 'anita mah', 0, 'anita.mahmud.jhara@g.bracu.ac.bd', '456'),
(2, 'vxcb cv cv c', 0, 'fdf@xv.com', '456'),
(3, 'ANITA MAHMUD', 0, 'a@gmail.com', '123'),
(4, 'ANITA MAHMUD', 515645684, 'a@gmail.com', '123'),
(5, 'Aunik Mahmud Niloy', 1940, 'aunik.niloy223@gmail.com', '159');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barishal`
--
ALTER TABLE `barishal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctg`
--
ALTER TABLE `ctg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cumilla`
--
ALTER TABLE `cumilla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhaka`
--
ALTER TABLE `dhaka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinajpur`
--
ALTER TABLE `dinajpur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khulna`
--
ALTER TABLE `khulna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `len`
--
ALTER TABLE `len`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_bari`
--
ALTER TABLE `p_bari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_cm`
--
ALTER TABLE `p_cm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_ctg`
--
ALTER TABLE `p_ctg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_d`
--
ALTER TABLE `p_d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_dnj`
--
ALTER TABLE `p_dnj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_khu`
--
ALTER TABLE `p_khu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volregs`
--
ALTER TABLE `volregs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barishal`
--
ALTER TABLE `barishal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ctg`
--
ALTER TABLE `ctg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cumilla`
--
ALTER TABLE `cumilla`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dhaka`
--
ALTER TABLE `dhaka`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dinajpur`
--
ALTER TABLE `dinajpur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khulna`
--
ALTER TABLE `khulna`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `len`
--
ALTER TABLE `len`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mon`
--
ALTER TABLE `mon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_bari`
--
ALTER TABLE `p_bari`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_cm`
--
ALTER TABLE `p_cm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_ctg`
--
ALTER TABLE `p_ctg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_d`
--
ALTER TABLE `p_d`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_dnj`
--
ALTER TABLE `p_dnj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p_khu`
--
ALTER TABLE `p_khu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `snack`
--
ALTER TABLE `snack`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volregs`
--
ALTER TABLE `volregs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
