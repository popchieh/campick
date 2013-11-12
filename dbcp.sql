-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2012 年 02 月 03 日 07:30
-- 伺服器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `dbcp`
--

-- --------------------------------------------------------

--
-- 表的結構 `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `ANO` int(15) NOT NULL,
  `ADATE` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `DEADLINE` char(10) CHARACTER SET latin1 NOT NULL,
  `TITLE` varchar(20) CHARACTER SET latin1 NOT NULL,
  `AHOST` char(20) CHARACTER SET latin1 NOT NULL,
  `APHONE` char(10) CHARACTER SET latin1 NOT NULL,
  `FEE` char(5) CHARACTER SET latin1 NOT NULL,
  `ALOCATION` char(6) CHARACTER SET latin1 NOT NULL,
  `WEBSITE` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CONTENT` varchar(400) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ANO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `activity`
--

INSERT INTO `activity` (`ANO`, `ADATE`, `DEADLINE`, `TITLE`, `AHOST`, `APHONE`, `FEE`, `ALOCATION`, `WEBSITE`, `CONTENT`) VALUES
(1, '1999-01-10', '2000-10-11', 'Camp', 'Ariel', '0991999991', '1234', 'tp', 'sfjeoaw', 'aepfhewrfpaewfh');

-- --------------------------------------------------------

--
-- 表的結構 `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `fNo` char(20) CHARACTER SET latin1 NOT NULL,
  `fDate` char(10) CHARACTER SET latin1 NOT NULL,
  `motive` varchar(100) CHARACTER SET latin1 NOT NULL,
  `selfIntro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `clubExperience` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`fNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的結構 `hold`
--

CREATE TABLE IF NOT EXISTS `hold` (
  `aNo` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `uNo` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `hold`
--

INSERT INTO `hold` (`aNo`, `uNo`) VALUES
('1', '1');

-- --------------------------------------------------------

--
-- 表的結構 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sNo` char(10) CHARACTER SET latin1 NOT NULL,
  `sId` char(10) CHARACTER SET latin1 NOT NULL,
  `sName` char(10) CHARACTER SET latin1 NOT NULL,
  `sex` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `birth` char(10) CHARACTER SET latin1 NOT NULL,
  `sAddress` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sPhone` char(10) CHARACTER SET latin1 NOT NULL,
  `sMail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `school` varchar(20) CHARACTER SET latin1 NOT NULL,
  `schoolLocation` char(20) CHARACTER SET latin1 NOT NULL,
  `guardian` char(10) CHARACTER SET latin1 NOT NULL,
  `guardianPhone` char(10) CHARACTER SET latin1 NOT NULL,
  `anamnesis` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `SACCOUNT` char(8) CHARACTER SET latin1 NOT NULL,
  `SPWD` char(8) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`sNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `student`
--

INSERT INTO `student` (`sNo`, `sId`, `sName`, `sex`, `birth`, `sAddress`, `sPhone`, `sMail`, `school`, `schoolLocation`, `guardian`, `guardianPhone`, `anamnesis`, `SACCOUNT`, `SPWD`) VALUES
('1', 'A123456789', 'Jack', '?', '1999-10-01', '???', '0911111111', 'ppp@ppp', '????', '???', 'Jim', '0900000000', 'wewfa', 's01', '123');

-- --------------------------------------------------------

--
-- 表的結構 `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `uNo` char(10) CHARACTER SET latin1 NOT NULL,
  `uHost` char(20) CHARACTER SET latin1 NOT NULL,
  `uPhone` char(10) CHARACTER SET latin1 NOT NULL,
  `uSchool` char(20) CHARACTER SET latin1 NOT NULL,
  `uDept` char(20) CHARACTER SET latin1 NOT NULL,
  `uAddress` varchar(50) CHARACTER SET latin1 NOT NULL,
  `uMail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `UACCOUNT` char(8) CHARACTER SET latin1 NOT NULL,
  `UPWD` char(8) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`uNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `unit`
--

INSERT INTO `unit` (`uNo`, `uHost`, `uPhone`, `uSchool`, `uDept`, `uAddress`, `uMail`, `UACCOUNT`, `UPWD`) VALUES
('1', 'NSYSU-MIS', '0900020000', 'NSYSU', 'MIS', 'é«˜é›„å¸‚è“®æµ·è·¯', 'ooo@ooo.222er', 'unit01', '123'),
('2', 'NCKU-ECO', '09120930', 'NCKU', 'ECO', 'waofpjweiof', 'oiejow@jwieow', 'unit02', '123'),
('3', 'å“ˆå“ˆå“ˆ', '0901231', 'æˆå¤§', 'ç¶“æ¿Ÿ', 'å¤§å­¸è·¯', '214@ra443', 'unit03', '123'),
('4', 'owaejr', '12310', 'fjwaeo', 'aefoaj', 'faeww', 'wjfero', 'unit03', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
