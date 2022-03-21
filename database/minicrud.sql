-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 07:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicrud`
--
CREATE DATABASE IF NOT EXISTS `minicrud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `minicrud`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`) VALUES
(2, 'Avocado fries', 'Fresh avocado slices coated in our special seasoned breading and fried golden brown. Served with Mexico’s cool white sauce.', '8.99', 'starters'),
(3, 'Mexican cheese fries', 'Fries topped with our house cheese and chorizo (Mexican spiced sausage). Better than bacon cheese fries.', '8.99', 'starters'),
(4, 'Shrimp geviche', 'Chilled shrimp* tossed with cilantro, onions, tomatoes, jalapeños and avocado.', '11.99', 'starters'),
(5, 'Chicken nachos', 'Make them “Supreme” for just 2.99 and top them with lettuce, sour cream, jalapeños and pico de gallo.', '7.99', 'starters'),
(6, 'Beef nachos', 'Make them “Supreme” for just 2.99 and top them with lettuce, sour cream, jalapeños and pico de gallo.', '7.99', 'starters'),
(7, 'Grilled chicken quesadillas', 'A flour tortilla folded and grilled golden with cheese, stuffed with your choice of protein or\r\nveggies.', '14.99', 'main'),
(8, 'Grilled shrimp quesadillas', 'A flour tortilla folded and grilled golden with cheese, stuffed with your choice of protein or\r\nveggies.', '13.99', 'main'),
(9, 'Fajitas texanas', 'All fajitas are grilled with onions, tomatoes and peppers. Seasoned with our house blend of herbs & spices.', '17.99', 'main'),
(10, 'Fajitas del mar', 'All fajitas are grilled with onions, tomatoes and peppers. Seasoned with our house blend of herbs & spices.', '18.99', 'main'),
(11, 'Arroz con pollo', 'Grilled strips of chicken over a bed of our signature Spanish rice covered with queso sauce goodness and served with fresh pico de gallo salad, sour cream and tortillas.', '14.99', 'main'),
(12, 'Pollo asado', 'A tender, marinated grilled chicken breast served with our signature Spanish rice, pico de gallo salad, sour cream and tortillas', '14.99', 'main'),
(13, 'Enchiladas verdes', 'Three slow-simmered chicken enchiladas topped with queso and green tomatillo sauce. Served with our signature Spanish rice.', '11.49', 'main'),
(14, 'Street tacos', '“Street-style” Mexican tacos choice of steak, grilled chicken or carnitas, garnished with pico de gallo. Served with Signature Spanish rice, pinto beans, queso fresco and “salsa picosa”.', '12.99', 'main'),
(15, 'Flan', 'Our traditional homemade Mexican custard.', '4.99', 'deserts'),
(16, 'Fried ice cream', 'Vanilla ice cream covered with our special granola coating, garnished with whip cream, chocolate syrup, honey and a cherry.', '4.99', 'deserts'),
(17, 'Churros', 'A favorite in México! Crispy pastry sticks rolled in cinnamon sugar drizzled with honey and chocolate syrup. Served with vanilla ice cream and a cherry.', '4.99', 'deserts');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` int(3) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `amount`, `location`, `date`, `time`) VALUES
(5, 'Juan Pedro', 'Juanpedro@info.com', 4, 'Vértiz', '2022-03-24', '20:27'),
(6, 'Pablo Sanchez', 'p.sanchez@info.com', 3, 'Narvarte', '2022-03-21', '18:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'admin', 'Appel123.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
