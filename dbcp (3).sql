-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2012 年 11 月 09 日 17:31
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
  `ANO` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `UNO` char(10) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `activity` (`ANO`, `UNO`, `ADATE`, `DEADLINE`, `TITLE`, `AHOST`, `APHONE`, `FEE`, `ALOCATION`, `WEBSITE`, `CONTENT`) VALUES
('1', '1', '1999-01-10', '2000-10-11', 'Camp', 'Ariel', '0991999991', '1234', 'tp', 'sfjeoaw', 'aepfhewrfpaewfh'),
('2', '2', '2010-01-01', '2010-01-01', 'fxghdfxh', 'vhuk', '1423', '12', 'hfgh', 'vkuhk', 'yvhukvh'),
('3', '1', '2010-01-01', '2010-01-01', 'HIHIHIHA', 'MEME', '0911000000', '1000', 'TP', 'http://www.asda.dsac', 'wfjeiaowjefr3 jqiowrfjqwpo3jwoiejrpweor9'),
('4', '1', '1999-01-10', '1999-01-11', 'wefawe', 'werf', '2314124', '213', 'wfew', 'wfdeawe', 'wfawefw');

-- --------------------------------------------------------

--
-- 表的結構 `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `FNO` char(20) CHARACTER SET latin1 NOT NULL,
  `FDATE` char(10) CHARACTER SET latin1 NOT NULL,
  `MOTIVE` varchar(100) CHARACTER SET latin1 NOT NULL,
  `SELFINTRO` varchar(100) CHARACTER SET latin1 NOT NULL,
  `CLUBEXPERIENCE` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ANO` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `SNO` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`FNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `form`
--

INSERT INTO `form` (`FNO`, `FDATE`, `MOTIVE`, `SELFINTRO`, `CLUBEXPERIENCE`, `ANO`, `SNO`) VALUES
('1', '2000-01-02', 'es5gsretg', 'rstgdrsg', 'srtgsrtgsrt', '1', '1'),
('2', '2012-2-19', 'aerf', 'aefr', 'era', '2', '1'),
('3', '2012-10-11', 'ergeerg', 'sergerg', 'geerger', '4', '1'),
('4', '2012-10-11', 'aefrerfaer', 'aefr', 'fre', '3', '1'),
('5', '2012-11-5', 'waewer', 'wearwer', 'weraawerwer', '4', '3'),
('6', '2012-11-5', 'wefwfew', 'adfaef', 'feawef', '4', '5'),
('7', '2012-11-6', 'fewsf', 'sefse', 'awefawefaw', '4', '12'),
('8', '2012-11-6', 'werawe', 'ewrawr', 'rwarw', '4', '13'),
('9', '2012-11-8', 'eqwfre', 'wefqew', 'rfserf', '3', '3');

-- --------------------------------------------------------

--
-- 表的結構 `hold`
--

CREATE TABLE IF NOT EXISTS `hold` (
  `ANO` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `UNO` char(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ANO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `hold`
--

INSERT INTO `hold` (`ANO`, `UNO`) VALUES
('1', '1'),
('2', '1'),
('3', '6'),
('4', '1'),
('5', '2');

-- --------------------------------------------------------

--
-- 表的結構 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `SNO` char(10) CHARACTER SET latin1 NOT NULL,
  `SID` char(10) CHARACTER SET latin1 NOT NULL,
  `SNAME` char(10) CHARACTER SET latin1 NOT NULL,
  `SEX` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `BIRTH` char(10) CHARACTER SET latin1 NOT NULL,
  `SADDRESS` varchar(50) CHARACTER SET latin1 NOT NULL,
  `SPHONE` char(10) CHARACTER SET latin1 NOT NULL,
  `SMAIL` varchar(50) CHARACTER SET latin1 NOT NULL,
  `SCHOOL` varchar(20) CHARACTER SET latin1 NOT NULL,
  `SCHOOLLOCATION` char(20) CHARACTER SET latin1 NOT NULL,
  `GUARDIAN` char(10) CHARACTER SET latin1 NOT NULL,
  `GUARDIANPHONE` char(10) CHARACTER SET latin1 NOT NULL,
  `ANAMNESIS` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `SACCOUNT` char(8) CHARACTER SET latin1 NOT NULL,
  `SPWD` char(8) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`SNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `student`
--

INSERT INTO `student` (`SNO`, `SID`, `SNAME`, `SEX`, `BIRTH`, `SADDRESS`, `SPHONE`, `SMAIL`, `SCHOOL`, `SCHOOLLOCATION`, `GUARDIAN`, `GUARDIANPHONE`, `ANAMNESIS`, `SACCOUNT`, `SPWD`) VALUES
('1', '', '', '1', '1999-10-01', 'retwert', '0911111111', 'ppp@ppp', 'rtgerg', '3', 'Jim', '0900000000', 'ahahahaha', 's01', '123'),
('10', 'a234234', 'awefoj', 'å¥³', '1000-10-1', 'awfeew', '124134', 'afwewe@waef', 'awerwr', '', 'waerawer', '123132123', 'wae', 's07', '123'),
('11', 'a234243442', 'afewjk', 'å¥³', '1900-01-01', 'awe', '12411', 'aef@faewew', 'weawef', '3', 'faeaijo', '13249', 'weafwe', 's07', '123'),
('12', 'a124123123', 'aqwefaqwe', 'å¥³', '1999-01-01', 'adawe', '123414', 'wefdafwe', 'sadf', '3', 'wfel1', '21314', 'gekrlmg', 's08', '123'),
('13', 'a1q2314', 'awfe', 'ç”·', '1000-01-10', 'aefwe', '12414', 'waefw', 'afe', '5', 'arreg', '92134', 'qaeaegr', 's09', '123'),
('2', 'A123123123', 'JAAAK', 'ç”·', '1987-01-01', 'qefrmkwer', '0129301', 'efjoaefr@jifoawe', 'fwokapef', 'åŒ—éƒ¨', 'qeffeqw', '891727789', 'eawfkepwofkpaeko', 's99', '123'),
('3', 'a123124213', 'hahah', 'å¥³', '2012-11-21', '3waer', '234', 'waer@fwf', 'wfae', '', 'awef', '12314', 'awefwef', 's02', '123'),
('4', 'a2423423', 'afkpef', 'å¥³', '1999-01-10', 'aweawer', '1241431', 'qewf@wefwfe', 'fer', '', 'serfe', '1241213', 'eferfser', 's03', '123'),
('5', 'a2423423', 'afkpef', 'å¥³', '1999-01-10', 'aweawer', '1241431', 'qewf@wefwfe', 'fer', '', 'serfe', '1241213', 'eferfser', 's03', '123'),
('6', 'D234234242', 'wfewef', 'å¥³', '1999-01-11', 'waefwefwfe', '234234', 'rqwer@erffff', 'wef', '', 'wedawed', '12312', '2wad', 's04', '123'),
('7', 'D234234242', 'wfewef', 'å¥³', '1999-01-11', 'waefwefwfe', '234234', 'rqwer@erffff', 'wef', '', 'wedawed', '12312', '2wad', 's04', '123'),
('8', 'A312124242', 'AREW', 'å¥³', '1999-01-23', 'WEAFWEFAWEFA', '123412', 'faw@fweafwe', 'qweqw', '', 'wfeawe12', '123123', 'wefawe', 's05', '123'),
('9', 'q1231233', 'weaer', 'ç”·', '1111-11-11', 'weaf', '123123', 'qdawq@faew', 'edfaw', '5', 'werwe', '1231231', 'sdrtertsertesr', 's06', '123');

-- --------------------------------------------------------

--
-- 表的結構 `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `UNO` char(10) CHARACTER SET latin1 NOT NULL,
  `UHOST` char(20) CHARACTER SET latin1 NOT NULL,
  `UPHONE` char(10) CHARACTER SET latin1 NOT NULL,
  `USCHOOL` char(20) CHARACTER SET latin1 NOT NULL,
  `UDEPT` char(20) CHARACTER SET latin1 NOT NULL,
  `UADDRESS` varchar(50) CHARACTER SET latin1 NOT NULL,
  `UMAIL` varchar(50) CHARACTER SET latin1 NOT NULL,
  `UACCOUNT` char(8) CHARACTER SET latin1 NOT NULL,
  `UPWD` char(8) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`UNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `unit`
--

INSERT INTO `unit` (`UNO`, `UHOST`, `UPHONE`, `USCHOOL`, `UDEPT`, `UADDRESS`, `UMAIL`, `UACCOUNT`, `UPWD`) VALUES
('1', 'NSYSU-MIS', '232312313', 'NSYSUUA', 'MIS', 'é«˜é›„å¸‚è“®æµ·è·¯', 'ooo@ooo.222er', 'unit01', '123'),
('2', 'NCKU-ECO', '09120930', 'NCKU', 'ECO', 'waofpjweiof', 'oiejow@jwieow', 'unit02', '123'),
('3', 'å“ˆå“ˆå“ˆ', '0901231', 'æˆå¤§', 'ç¶“æ¿Ÿ', 'å¤§å­¸è·¯', '214@ra443', 'unit03', '123'),
('4', 'owaejr', '12310', 'fjwaeo', 'aefoaj', 'faeww', 'wjfero', 'unit03', '123'),
('5', 'eafro', '82390u', 'sekfndrl', 'esfjkn', 'efnjker', 'fqwwefjkn', 'unit00', '123'),
('6', 'HIUUU~', '094023494', 'NNNA', 'TUSA', 'wejojciwoerjo', 'wfejo@wejaro', 'unit99', '123'),
('7', '', '', '', '', '', '', '', ''),
('8', '', '', '', '', '', '', '', ''),
('9', 'NSYSU-MIS', '071231231', 'NSYSU', 'MIS', 'KH', 'nsysu@asda', 'nsysu', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
