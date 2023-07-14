-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 03:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `AdminName` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`AdminName`, `password`) VALUES
('Zephania', 'MasenoCbmrc4');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fromm` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `too` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `fromm`, `phone`, `message`, `too`, `cTime`) VALUES
(1, 'Benson Karue', '4066', '0725667841', 'I want to see you tomorrow', '7854uiplk87dadkl87', '1554916571'),
(2, 'Doctor', '7854uiplk87dadkl87', '0725895256', 'OKay no problem I will be available', '4066', '1554917369'),
(3, 'Zephania Ouma', '4066', '0759547761', 'I need agent assistance', 'dd69920006c75a4f5b0166e37b1da51b', '1688651106');

-- --------------------------------------------------------

--
-- Table structure for table `hiv`
--

CREATE TABLE `hiv` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `moc` varchar(255) NOT NULL,
  `dComments` text NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hiv`
--

INSERT INTO `hiv` (`id`, `name`, `age`, `location`, `moc`, `dComments`, `cTime`, `token`) VALUES
(2, 'Willis Oyolla', '35', 'Mombasa', 'During birth', 'He\'s on medication and agreed to assist in the awareness', '1688650363', 'b7273ae21f1f19271170b9309349f8f3');

-- --------------------------------------------------------

--
-- Table structure for table `outbreaks`
--

CREATE TABLE `outbreaks` (
  `id` int(11) NOT NULL,
  `outBreak` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `measures` text NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `outbreaks`
--

INSERT INTO `outbreaks` (`id`, `outBreak`, `comments`, `location`, `cTime`, `measures`, `token`) VALUES
(1, 'Tuberculosis', 'There is a serious problem', 'Siaya Township Ward', '1554913667', 'testing', 'f946c63a3187a5059ac6eed1fc82c1e4'),
(2, 'Malaria', 'Malaria outbreak be on the lookout.', 'Kisumu', '1688650052', 'Anyone feeling muscle pain, fever, headache to seek medical advice', 'b1e56ffd511c6d5f53224a31c4c4e8c4');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dateOfBirth` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `diagnosis` text NOT NULL,
  `prescription` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `pcondition` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `location`, `age`, `gender`, `phone`, `dateOfBirth`, `cTime`, `diagnosis`, `prescription`, `token`, `doctor`, `number`, `pcondition`) VALUES
(2, 'Zephania Ouma', 'Kisumu', '23', 'Male', '0759547761', '12 - 05 - 1999', '1554756586', 'Headache\nVomiting\nNeusea', 'Paracetamol', 'c760e767719b5196ce99cb0ed4b29c63', '7854uiplk87dadkl87', '4066', NULL),
(3, 'Kelly Ovita', 'Kisii', '24', 'Male', '0748889536', '01 - 01 - 1979', '1554817535', 'Vomiting\nCoughing', 'Mr. Zulu', '6dc616e76193284f5078080b97067e30', '7854uiplk87dadkl87', '3214', NULL),
(4, 'Mike Olang\'', 'Muranga', '19', 'Male', '0725667841', '04 - 04 - 1979', '1554903224', 'fever', 'Paracetamol', 'aada38f92af7dabbe949bb03c2c995d1', '7854uiplk87dadkl87', '4087', 'Outpatient'),
(5, 'Magdalene Onyango', 'Maseno', '24', 'Female', '0758795746', '25 - 12 - 1999', '1688649391', 'Pregnant with triplets', 'To give very soon', '22f2377a0b2777b04558774f40e1aa07', '1236548lpoik58965', '4561', 'Inpatient');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `email`, `password`, `token`, `status`, `phone`, `profile`, `gender`, `role`) VALUES
(1, 'Zephania', 'Ouma', 'zephany@gmail.com', '12345', '1236548lpoik58965', 1, '0759547761', NULL, 'Male', NULL),
(2, 'Lavender', 'Owira', 'owiralavender@gmail.com', '12345', '7854uiplk87dadkl87', 2, '0718860407', NULL, 'Female', 'Surgeon'),
(4, 'Joseph', 'Joe', 'josephjoegmail.com', 'hospital', 'dd69920006c75a4f5b0166e37b1da51b', 2, '0793598029', NULL, 'Male', 'Clinical Officer'),
(5, 'Daisy', 'Migoya', 'daisy@gmail.com', 'hospital', 'f805417aa8d8e2dc45ad77225b6f7dff', 2, '0712345678', NULL, 'Female', 'Psychologist'),
(6, 'Kelly', 'Ovita', 'kellyovvy@gmail.com', 'hospital', '05a464bf6dc76567adcbf59a06ae5e81', 2, '0706516771', NULL, 'Male', 'Dentist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`AdminName`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiv`
--
ALTER TABLE `hiv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbreaks`
--
ALTER TABLE `outbreaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hiv`
--
ALTER TABLE `hiv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `outbreaks`
--
ALTER TABLE `outbreaks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
