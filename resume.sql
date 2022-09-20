-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-09-20 05:19:57
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

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

-- --------------------------------------------------------

--
-- 資料表結構 `r_intro`
--

CREATE TABLE `r_intro` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_intro`
--

INSERT INTO `r_intro` (`id`, `title`, `content`) VALUES
(1, '您好！我是張欣儀', '　　畢業於大同大學資訊經營學系，由於對網頁設計有興趣且大學又是相關科系，所以報名了泰山職訓局為期半年的PHP網頁設計班課程，期望在未來能夠更精進自己的程式語言！善於當個傾聽者，尊重他人的想法與意見，重視團體合作精神，以細心仔細的態度完成工作。');

-- --------------------------------------------------------

--
-- 資料表結構 `r_portfolio`
--

CREATE TABLE `r_portfolio` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_portfolio`
--

INSERT INTO `r_portfolio` (`id`, `type`, `img`, `href`, `title`, `sh`) VALUES
(2, 'HTML', 'weather.png', 'https://hsinyichang.github.io/Weather/', 'HTML Api串接氣象資訊', 1),
(3, 'PHP', 'calender.png', './calender', 'PHP Calender', 1),
(4, 'PHP', 'bmi.png', './Bmi_hw', 'PHP Bmi計算', 1),
(5, 'HTML', 'api.png', './api_hw', 'HTML Api串接政府公開資料', 1),
(6, 'PHP', 'vote.png', './vote', 'PHP 投票系統', 1),
(7, 'PS', 'ps1.jpg', '', 'PS Banner設計', 1),
(8, 'PS', 'ps2.jpg', '', 'PS 電子海報', 1),
(9, 'PS', 'ps6.jpg', '', 'PS 動物年曆', 1),
(10, 'PS', 'ps3.jpg', '', 'PS 動物年曆', 1),
(11, 'AI', 'AI1.jpg', '', 'AI 月曆設計', 1),
(12, 'AI', 'AI2.jpg', '', 'AI 雜誌', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `r_type`
--

CREATE TABLE `r_type` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `r_type`
--

INSERT INTO `r_type` (`id`, `type`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'PS'),
(4, 'AI');

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
-- 資料表索引 `r_intro`
--
ALTER TABLE `r_intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `r_portfolio`
--
ALTER TABLE `r_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `r_type`
--
ALTER TABLE `r_type`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_intro`
--
ALTER TABLE `r_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_portfolio`
--
ALTER TABLE `r_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `r_type`
--
ALTER TABLE `r_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
