-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-03-26 07:26:24
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `book`
--

-- --------------------------------------------------------

--
-- 資料表結構 `author`
--

CREATE TABLE `author` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT '作者名',
  `description` text NOT NULL COMMENT '描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `author`
--

INSERT INTO `author` (`id`, `name`, `description`) VALUES
(1, '蒙其·D·魯夫', '船長'),
(2, '羅羅亞·索隆', '劍士'),
(3, '娜美', '航海士'),
(4, '騙人布', '狙擊手'),
(5, '賓什莫克·香吉士', '廚師'),
(6, '多尼多尼·喬巴', '船醫'),
(7, '妮可·羅賓', '考古學家'),
(8, '佛朗基', '船匠'),
(9, '布魯克', '音樂家');

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT '書名',
  `author_id` bigint(11) NOT NULL COMMENT '作者ID',
  `price` decimal(7,1) NOT NULL COMMENT '價格',
  `note` text NOT NULL COMMENT '備註',
  `description` text NOT NULL COMMENT '描述',
  `book_isbn` varchar(100) NOT NULL COMMENT '書的ISBN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `book`
--

INSERT INTO `book` (`id`, `name`, `author_id`, `price`, `note`, `description`, `book_isbn`) VALUES
(1, '精通 Python｜運用簡單的套件進行現代運算 (Introducing Python: Modern Computing in Simple Packages)', 0, '616.0', '', '', ''),
(2, '完整學會 Git, GitHub, Git Server 的24堂課', 0, '284.0', '', '', ''),
(3, 'iOS 9 App程式設計實力超進化實戰攻略：知名iOS教學部落格AppCoda作家親授實作關鍵技巧讓你不NG (Beginning iOS 9 Programming with Swift)', 0, '449.0', '', '', ''),
(4, 'CSS Secrets 中文版｜解決網頁設計問題的有效秘訣 (CSS Secrets: Better Solutions to Everyday Web Design Problems)', 0, '537.0', '', '', ''),
(5, '職業駭客的告白 : 軟體反組譯、木馬病毒與入侵翻牆竊密', 0, '434.0', '', '', ''),
(6, 'Python 程式設計實務－從初學到活用 Python 開發技巧的16堂課', 0, '437.0', '', '', ''),
(7, 'ASP.NET MVC 5 網站開發美學', 0, '616.0', '', '', ''),
(8, '超圖解 Arduino 互動設計入門, 2/e', 0, '578.0', '', '', ''),
(9, '大話設計模式', 0, '527.0', '', '', ''),
(10, '使用者故事對照 (User Story Mapping: Discover the Whole Story, Build the Right Product)', 0, '458.0', '', '', ''),
(11, '鳥哥的 Linux 私房菜－基礎學習篇, 4/e', 0, '774.0', '', '', ''),
(12, 'C++ Primer, 4/e (中文版)', 0, '782.0', '', '', ''),
(13, 'JavaScript 大全, 6/e (JavaScript: The Definitive Guide: Activate Your Web Pages, 6/e)', 0, '948.0', '', '', ''),
(14, '無瑕的程式碼－敏捷軟體開發技巧守則 + 番外篇－專業程式設計師的生存之道 (雙書合購)\r\n', 0, '650.0', '', '', ''),
(15, '寫給PM、RD與設計師看的設計需求分析─使用者想要的應用程式都是這樣打造出來的', 0, '650.0', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `booklist`
--

CREATE TABLE `booklist` (
  `id` bigint(20) NOT NULL,
  `author_id` bigint(20) NOT NULL COMMENT '作者ID',
  `book_id` bigint(20) NOT NULL COMMENT '書ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `booklist`
--

INSERT INTO `booklist` (`id`, `author_id`, `book_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 3, 4),
(6, 4, 5),
(7, 6, 6),
(8, 6, 7),
(9, 6, 8),
(10, 1, 9),
(11, 2, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `buyer`
--

CREATE TABLE `buyer` (
  `id` bigint(20) NOT NULL,
  `name` int(11) NOT NULL COMMENT '買家名',
  `note` int(11) NOT NULL COMMENT '備註'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `selllist`
--

CREATE TABLE `selllist` (
  `id` bigint(20) NOT NULL,
  `buyer_id` bigint(11) NOT NULL COMMENT '買家ID',
  `book_id` int(11) NOT NULL COMMENT '書ID',
  `author_id` bigint(11) NOT NULL COMMENT '作者ID',
  `note` int(11) NOT NULL COMMENT '註記'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `passwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `email`, `passwd`) VALUES
(2, 'karl', 1234),
(3, 'karl', 1025),
(4, 'root', 1234);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `selllist`
--
ALTER TABLE `selllist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `author`
--
ALTER TABLE `author`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用資料表 AUTO_INCREMENT `booklist`
--
ALTER TABLE `booklist`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用資料表 AUTO_INCREMENT `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `selllist`
--
ALTER TABLE `selllist`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
