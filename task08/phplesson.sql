-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 29 日 10:11
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phplesson`
--

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(100) NOT NULL,
  `newsimg` varchar(200) NOT NULL,
  `newscontent` text NOT NULL,
  `addtime` date NOT NULL,
  `lanmu` varchar(50) NOT NULL,
  PRIMARY KEY (`newsid`),
  KEY `newstitle` (`newstitle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=70 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`newsid`, `newstitle`, `newsimg`, `newscontent`, `addtime`, `lanmu`) VALUES
(0, '习近平会见伊朗最高领袖哈梅内伊', 'images/news1.jpg', '习近平出席鲁哈尼总统举行的隆重欢迎仪式', '2016-01-21', 'tuijian'),
(2, '习近平16个字谈司法改革', 'images/news2.jpg', '习大大指示“防控风险、服务发展；破解难题、补齐短板”。在一个风清气正、干事创业的良好生态里，政...', '2016-01-18', 'tuijian'),
(33, '春晚吉祥物康康被嘲：', 'images/news3.jpg', '这事有很多周边元素决定了它可以变成热门话题，并不仅仅因为这个设计真的有那么重要。', '2016-01-16', 'tuijian'),
(34, '海通证券：反弹窗口仍开着 全年先难后易', 'images/news4.jpg', '外围市场否极泰来、情绪修复，国内市场汇率稳而市场稳，市场反弹窗口仍开着。', '2016-01-14', 'tuijian'),
(35, '春运5000万人站着回家?铁总:仅售无座票639万张', 'images/news5.jpg', '黄欣表示，此种推算有误，目前铁路仅售出无座车票639万张。', '2016-01-12', 'tuijian'),
(36, '铁路总局回应', 'images/news6.jpg', '中国铁路总公司运输局营运部副主任黄欣做客中国之声《今天我值班》特别节目，聊聊今年春运那些事儿。', '2016-01-10', 'tuijian'),
(57, '早期创业的你需要知道', 'images/baijia1.jpg', '请问什么样的BP是投资人最想看的。', '2015-12-30', 'baijia'),
(58, '迅雷创始人程浩为何转型投资：十年时间再造一支红杉', 'images/baijia2.jpg', '迅雷公司年会的前一晚，创立迅雷13年的迅雷联合创始人程浩，以内部邮件的形式向员工通告自己将卸任...', '2016-01-22', 'baijia'),
(59, '中国电信流量宝春节红包将遭遇中国移动的全面围堵？', 'images/baijia3.jpg', '微信进行了一次微信红包的预热活动，活动整体上分为两个部分：一是下午五点开始的微信朋友圈照片红包...', '2016-01-20', 'baijia'),
(67, '中国电信流量宝春节红包将遭遇中国移动的全面围堵？', 'images/baijia3.jpg', '微信进行了一次微信红包的预热活动，活动整体上分为两个部分：一是下午五点开始的微信朋友圈照片红包...', '2016-01-10', 'baijia'),
(61, '迅雷创始人程浩为何转型投资：十年时间再造一支红杉', 'images/baijia2.jpg', '迅雷公司年会的前一晚1，创立迅雷13年的迅雷联合创始人程浩，以内部邮件的形式向员工通告自己将卸任...', '2016-01-12', 'baijia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
