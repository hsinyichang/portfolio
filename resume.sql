-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-08-15 02:31:06
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `r_admin`
--

CREATE TABLE `r_admin` (
  `id` int(11) NOT NULL,
  `acc` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_admin`
--

INSERT INTO `r_admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `r_contact`
--

CREATE TABLE `r_contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_contact`
--

INSERT INTO `r_contact` (`id`, `name`, `email`, `sub`, `message`, `date`) VALUES
(1, '欣儀', 'f1233772002@gmail.com', '你好', 'hello', '2022-08-07 06:13:50'),
(2, '欣儀', 'f1233772002@gmail.com', 'hello', 'hihihi', '2022-08-07 06:14:09');

-- --------------------------------------------------------

--
-- 資料表結構 `r_footer`
--

CREATE TABLE `r_footer` (
  `id` int(11) NOT NULL,
  `footer` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_footer`
--

INSERT INTO `r_footer` (`id`, `footer`, `sh`) VALUES
(1, '2022 HsinyiChang', 1),
(2, '2023 HsinyiChang', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `r_img`
--

CREATE TABLE `r_img` (
  `id` int(11) NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_img`
--

INSERT INTO `r_img` (`id`, `img`, `sh`) VALUES
(1, 'me.jpg', 0),
(5, 'me1.jpg', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `r_admin`
--
ALTER TABLE `r_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `r_contact`
--
ALTER TABLE `r_contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `r_footer`
--
ALTER TABLE `r_footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `r_img`
--
ALTER TABLE `r_img`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_admin`
--
ALTER TABLE `r_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_contact`
--
ALTER TABLE `r_contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_footer`
--
ALTER TABLE `r_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_img`
--
ALTER TABLE `r_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
