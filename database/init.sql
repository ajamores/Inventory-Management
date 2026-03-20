-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2026 at 11:12 PM
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
-- Database: `garland`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `category`, `type`, `quantity`, `created_at`, `updated_at`, `image_url`) VALUES
(2, 'G24-2G12 G-Series 24\" Combination Griddle/Open Burner Range', 'G24-2G12', 'Gas Range', 'Medium-Duty Restaurant Range', 55, '2026-02-10 08:06:33', '2026-02-14 05:36:57', 'https://www.garlandgroup.com/getmedia/853e0703-0630-4ef0-af93-b97bf0b5500b/G24-2G12L_1.png'),
(3, 'G24-G24 G-Series 24\" Griddle Range', 'G24-G24', 'Gas Range', 'Medium-Duty Restaurant Range with 24\" Griddle', 11, '2026-02-11 02:36:01', '2026-02-11 02:36:01', 'https://www.garland-group.com/getmedia/5fd9fc96-b364-4c2b-8320-21751ad50003/G24-G24L_1.png'),
(4, 'G36-6 G-Series 36\" Open Burner Range', 'G36-6', 'Gas Range', 'Medium-Duty Restaurant Range with 6 Open Burners', 6, '2026-02-11 02:48:35', '2026-02-11 02:48:35', 'https://www.garland-group.com/getmedia/bb7ad715-1aa4-4209-bef2-3045de65599c/G36-6R_1.png'),
(5, 'XPG36 Master Series 36\" Gas XPress Grill', 'XPG36', 'Production Griddles & Grills', 'Heavy-Duty 3-Platen Clamshell Grill', 11, '2026-02-11 02:58:33', '2026-02-11 08:33:22', 'https://www.garland-group.com/getmedia/3488bfd7-732d-4c7b-ac29-958185f662bf/XPG36-with-Splash-Guard.png'),
(7, 'G24-4 G-Series 24\" Open Burner Range', 'G24-4', 'Gas Range', 'Medium-Duty Restaurant Range with 4 Open Burners', 17, '2026-02-11 12:27:34', '2026-02-11 13:00:08', 'https://www.garland-group.com/getmedia/a2bcc752-9ba5-4a11-8cb3-91b3ae9babd2/G24-4L_1.png'),
(8, 'XPG36AC Master Series 36\" Gas XPress Grill with Active Compression', 'XPG36AC', 'Production Griddles & Grills', 'Heavy-Duty 3-Platen Clamshell Grill with Active Compression', 12, '2026-02-11 13:03:24', '2026-02-11 17:56:46', 'https://www.garland-group.com/getmedia/bab82857-0ead-490e-bd52-f1d388a5a906/XPG36AC-with-Splash-Guard.png'),
(9, 'SS686 Sentry Series 36\" Electric Ranges', 'SS686', 'Electric Range', 'Medium-Duty Electric Restaurant Range with 6 Sealed Elements', 70, '2026-02-14 06:15:25', '2026-02-14 06:15:25', 'https://www.garland-group.com/getmedia/59a5d6bc-5d38-465e-9d69-82ea1f6ab962/SS686.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'armand.amores1@gmail.com', '$2y$12$Kx.mht7fknv0L1ExPUeGVeJxpbHfH8E8Sc7bfXYtK/ZCDIe0bLYqK'),
(2, 'admin@invetory.com', '$2y$12$5jt2TAiRBekuUle2WZHblOTv7BpUF3PU.VQQvi1WSP.cq2SnVXnrS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
