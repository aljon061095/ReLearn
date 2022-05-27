-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 11:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `referral_code` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `age`, `gender`, `grade`, `referral_code`, `password`) VALUES
(1, 'aaa', 'aquiambao061095@gmail.com', 6, 0, 3, '12345', '$2y$10$iZmlBYJi2Im3g4UBdbFjz.FSy9P1E/9hhENNemGxCC8ySACYGWuA.'),
(2, 'aaa111', 'aljon061095@gmail.com', 6, 0, 1, '12345', '$2y$10$62KVmkuNk5aU2bzd0M9bK.VDUhKT6yN/oGZubOVghCRHyb29caThi'),
(3, 'aaa111111', 'aquiambao061095@gmail.com', 6, 1, 2, '111111', '$2y$10$QqP8sW0RNzaKR8pXQt3zyuNbWRwRot69OwlfHPi6CPQTtXfoRvC5K'),
(4, 'aaa111', 'aljon061095@gmail.com', 6, 1, 1, '12345', '$2y$10$9oZFzeNToOvY49f7h3JqEehYhm2YSeXdDhGl8WKcpYIjFlH/3o/0m'),
(5, 'aaa', 'aljon061095@gmail.com', 6, 1, 2, '12345', '$2y$10$tvcL.Lz4lMLLEMwqKjI9XOotCcvD29845ez000mmTIiILbj4dIxui'),
(6, 'aaa', 'aquiambao061095@gmail.com', 6, 1, 2, '12345', '$2y$10$5XY8j8yUcA7EANjcwxZ6hOZSDPJhEIEr6rdXbOkxoqHBxtJk9tl8m'),
(7, '11', 'aquiambao061095@gmail.com', 7, 1, 2, '1221', '$2y$10$nUjDdgkEkN/l4DwEWbfOn.ckg9TaRPAfTVh6EaB53IFLrTQDNtNWS'),
(8, 'aaa111', 'aquiambao061095@gmail.com', 5, 2, 2, '12345', '$2y$10$ZQW05XgviuwwskgshxUgouqM/cYxw1RVVnenzzL4.QMUoKv.THlXi'),
(9, 'aaa', 'aquiambao061095@gmail.com', 6, 1, 1, '12345', '$2y$10$FTNm5.1dY/ecMH/olcD1k.TC.q0oo7sQsValMOfiF4XrYffC.G/Ge'),
(10, 'aaa111', 'aquiambao061095@gmail.com', 5, 2, 3, '12345', '$2y$10$9hjXsehnqgG/cyvb4iU3JeKLjKzCJzdxg0f04XWk6MF3lPlQewWxu'),
(11, 'aaa111', 'aquiambao061095@gmail.com', 5, 2, 3, '12345', '$2y$10$3fwiX1q/PXHFhsKk0uZvv.SQrPRBYfYVSkf7fnXrSv1Yqy4U1hrtW'),
(12, 'aaa111111', 'aljon061095@gmail.com', 6, 1, 2, '12345', '$2y$10$c5ZrPpGI1EGpbORCkEUONu6RRBceA4MOZ15HfnKW6rL2XlL/0f5Sa'),
(13, 'aaa111', 'aljon061095@gmail.com', 6, 1, 3, '85962257', '$2y$10$W7wCI4vCS9c1M8.Tkfs/s.JU/cwaCGpvcKhjQSnt2M6Ha0gG/QUk2'),
(14, 'aaa111111122', 'aljonquiambao.mcc@gmail.com', 8, 2, 3, '20913091', '$2y$10$JfGSODZj8.o4yhCVRTk1xuURrJNe4Sd1SiRGOXikepQo5z6u..uGa'),
(15, 'sasa1111', 'aljonquiambao.mcc@gmail.com', 6, 1, 2, '83309937', '$2y$10$qrKWdpv.MCEzu307HvZTfeLNPe7fIH.8ZKFs.qV0FZ22EpORHctl.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
