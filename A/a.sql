-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-04-14 02:43:16
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `snyuki`
--

-- --------------------------------------------------------

--
-- 資料表結構 `userlogin`
--

CREATE TABLE `userlogin` (
  `no` int(20) NOT NULL,
  `account` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` int(20) NOT NULL,
  `login` int(50) DEFAULT NULL,
  `logintime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `userlogin`
--

INSERT INTO `userlogin` (`no`, `account`, `pwd`, `email`, `tel`, `login`, `logintime`) VALUES
(1, 'root', '123456', '', 0, NULL, '0000-00-00 00:00:00.000000'),
(2, 'jbjkbkj', 'hkjglgl', '', 0, NULL, '0000-00-00 00:00:00.000000'),
(3, 'msjdioaji', 'hsihoihsi', '', 0, NULL, '0000-00-00 00:00:00.000000');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`no`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
