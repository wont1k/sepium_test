-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2024 at 11:22 PM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `privilege` tinyint NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`, `privilege`) VALUES
(37, 'Глеб', '$2y$10$ID1eY3nQbFZ/AlVS7nx9DugO7oZqQ80mgWqh6XfcESjOoAAb/3PIO', 'fdsfgewgbvredwshbreswhbgred', '2024-07-25 13:37:16', 0),
(2, 'Иван', 'fuhinfew', 'fdcjkonpeswafdnipjbewq', '2024-07-24 14:35:21', 0),
(38, 'ESSFGSD', '$2y$10$cYHqz22m.8azf5C3NfMVLuyUnL8EWJKhxYNvGwNwlqhaR5zKIJwfO', 'RBHES', '2024-07-25 15:46:15', 0),
(27, 'admin', '$2y$10$tO6s.4L18KZAQf1vlGoJSueN.fMOoKoNvUJqjJzFuQUlMRmskHKvq', '', '2024-07-24 17:08:42', 1),
(64, 'FWEFWEFEWFEW', '$2y$10$zFTMCoL69CnGEDKaV4z1OuZsVxvYTI3v7RLdhOUmXaRM6NLUvW0ru', 'WEFSWDFWEFW', '2024-08-05 20:04:38', 0),
(52, 'авыауц', '$2y$10$rx7ZEpYN3HIXvwQ/fWShXOCKx60EBLbsbhP0lMuUYkRti0Fou2K6G', 'ауцвавыауцв', '2024-08-05 15:45:29', 0),
(45, 'fwewqqwd', '$2y$10$CFGXeezXxgOulRNmvuGPseeN2axYIWLoY6Ood8iSpgghVk3nNvgfi', 'wdaqswdcxaqwdf', '2024-07-26 12:33:20', 0),
(47, 'Дмитрий', 'fgdsgfd', 'wefgewfwefsfe', '2024-08-05 12:44:32', 0),
(55, 'fdsfsd', '$2y$10$IdOK/RIL/TjysA9yq7tVe.Mfj30NvWoVnKZtmJW0dw7M7xxkxFFU.', 'fewfewfewds', '2024-08-05 16:05:37', 0),
(59, 'Григорий', '$2y$10$F4m1u6TBTPkmgGkfypjaHuIzLVglAVu.V8P1CHnTtB72c/rHKFqSa', 'ауцуацауц', '2024-08-05 16:16:07', 0),
(62, 'Борис', '$2y$10$qmzA987pw7fYwnF6Hl/53OzznH0Q2oOtKxE0eqkChT4MON2smmE8u', 'аывауцыауцыпмуцыпмуцыпмцуыкамывчсауц', '2024-08-05 17:07:50', 0);

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
