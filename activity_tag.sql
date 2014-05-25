-- phpMyAdmin SQL Dump
-- version 4.0.9deb1.raring~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2014 at 08:29 AM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `activity_buzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_tag`
--

CREATE TABLE IF NOT EXISTS `activity_tag` (
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(11) NOT NULL,
  `tag` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=251 ;

--
-- Dumping data for table `activity_tag`
--

INSERT INTO `activity_tag` (`key`, `id`, `tag`) VALUES
(1, 4206, '學員'),
(2, 4206, '心智圖'),
(3, 4218, '航空'),
(4, 4218, '應考'),
(5, 4219, '非洲'),
(6, 4219, '分享'),
(7, 4221, '旅行'),
(8, 4221, '帶來'),
(9, 4224, '目標'),
(10, 4224, '旅行'),
(11, 4225, '臉譜'),
(12, 4225, '京劇'),
(13, 4231, '台灣'),
(14, 4231, '職人'),
(15, 4243, '父母'),
(16, 4243, '關係'),
(17, 4246, '空間'),
(18, 4246, '室內'),
(19, 4248, '創業'),
(20, 4248, '計畫'),
(21, 4251, '產品'),
(22, 4251, '設計'),
(23, 4254, '購物'),
(24, 4254, '應用'),
(25, 4261, '設計'),
(26, 4261, '自己'),
(27, 4262, '文學'),
(28, 4262, '電影'),
(29, 4263, '文學'),
(30, 4263, '電影'),
(31, 4283, '技術'),
(32, 4283, '掌握'),
(33, 4284, '媒體'),
(34, 4284, '&#'),
(35, 4290, '十年'),
(36, 4290, '習慣'),
(37, 4292, '故事'),
(38, 4292, '動畫'),
(39, 4293, '德國'),
(40, 4293, '再生'),
(41, 4297, '人才'),
(42, 4297, '雲嘉南'),
(43, 4300, '３D'),
(44, 4300, '課程'),
(45, 4315, '劇場'),
(46, 4315, '端午節'),
(47, 4316, '活動'),
(48, 4316, '朱銘'),
(49, 4317, '創業'),
(50, 4317, '新北市'),
(51, 4319, '３D'),
(52, 4319, '列印'),
(53, 4329, '創業'),
(54, 4329, '新北市'),
(55, 4333, '創業'),
(56, 4333, '新北市'),
(57, 4343, '溜溜球'),
(58, 4343, '新竹'),
(59, 4348, '創作'),
(60, 4348, '計畫'),
(61, 4351, '新創'),
(62, 4351, '投資'),
(63, 4352, '服務'),
(64, 4352, '透過'),
(65, 4360, '組織'),
(66, 4360, '營利'),
(67, 4368, '組織'),
(68, 4368, '行銷'),
(69, 4381, '青年'),
(70, 4381, '創業'),
(71, 4384, '服務'),
(72, 4384, '非論壇'),
(73, 4389, '創業'),
(74, 4389, '女性'),
(75, 4395, '創業'),
(76, 4395, '新北市'),
(77, 4399, '黑松'),
(78, 4399, '我們'),
(79, 4400, '創業'),
(80, 4400, '新北市'),
(81, 4403, '開店'),
(82, 4403, '行銷'),
(83, 4408, '創業'),
(84, 4408, '新北市'),
(85, 4420, '自造'),
(86, 4420, '運動'),
(87, 4428, '問題'),
(88, 4428, '員工'),
(89, 4431, '旅遊'),
(90, 4431, '產業'),
(91, 4441, '社會'),
(92, 4441, '企業'),
(93, 4461, 'Prezi'),
(94, 4461, '簡報'),
(95, 4462, '證照'),
(96, 4462, '專業'),
(97, 4464, '創業'),
(98, 4464, '新北市'),
(99, 4471, '感官'),
(100, 4471, '生活'),
(101, 4474, '創業'),
(102, 4474, '新北市'),
(103, 4475, '泰雅'),
(104, 4475, '台灣'),
(105, 4479, '時尚'),
(106, 4479, '如何'),
(107, 4481, '設計'),
(108, 4481, '網頁'),
(109, 4483, '創業'),
(110, 4483, '新北市'),
(111, 4493, '學員'),
(112, 4493, '心智圖'),
(113, 4501, '紅茶'),
(114, 4501, '了解'),
(115, 4514, '媒體'),
(116, 4514, '科技'),
(117, 4516, '設計'),
(118, 4516, '社群'),
(119, 4517, '行銷'),
(120, 4517, '技巧'),
(121, 4521, '創業'),
(122, 4521, '女性'),
(123, 4522, '單元'),
(124, 4522, '職能'),
(125, 4526, '比基尼'),
(126, 4526, '女孩'),
(127, 4562, '行銷'),
(128, 4562, '網路'),
(129, 4563, '理財'),
(130, 4563, '計畫'),
(131, 4566, '街頭'),
(132, 4566, '工作'),
(133, 4568, '談判'),
(134, 4568, '利潤'),
(135, 4575, '管理'),
(136, 4575, '績效'),
(137, 4576, '創業'),
(138, 4576, '女性'),
(139, 4577, '理財'),
(140, 4577, '計畫'),
(141, 4584, '維修'),
(142, 4584, '音樂'),
(143, 4586, '機器人'),
(144, 4586, '人形'),
(145, 4596, '科學'),
(146, 4596, '物理'),
(147, 4602, '音樂劇'),
(148, 4602, '研習營'),
(149, 4603, '音樂劇'),
(150, 4603, '研習營'),
(151, 4604, '製作'),
(152, 4604, '化妝'),
(153, 4605, '青年'),
(154, 4605, '觀自在'),
(155, 4609, '創業'),
(156, 4609, '女性'),
(157, 4610, '產業'),
(158, 4610, '發展'),
(159, 4613, '音樂劇'),
(160, 4613, '研習營'),
(161, 4614, '音樂劇'),
(162, 4614, '研習營'),
(163, 4615, '格鬥'),
(164, 4615, '可以'),
(165, 4616, '手臂'),
(166, 4616, '設計'),
(167, 4617, '創業'),
(168, 4617, '女性'),
(169, 4630, '領導'),
(170, 4630, '組織'),
(171, 4631, '機器人'),
(172, 4631, '足球'),
(173, 4638, '訂單'),
(174, 4638, '客戶'),
(175, 4639, '讚美'),
(176, 4639, '我們'),
(177, 4647, '抽獎'),
(178, 4647, 'GOSHOW'),
(179, 4652, '說話'),
(180, 4652, '課程'),
(181, 4664, 'CSS'),
(182, 4664, '撰寫'),
(183, 4669, '虎尾'),
(184, 4669, '活動'),
(185, 4677, 'CSS'),
(186, 4677, '撰寫'),
(187, 4678, '開發'),
(188, 4678, '採用'),
(189, 4679, '探索'),
(190, 4679, '									'),
(191, 4682, '２０１４'),
(192, 4682, '大學'),
(193, 4683, '創意'),
(194, 4683, '設計'),
(195, 4685, '說話'),
(196, 4685, '課程'),
(197, 4687, '&nbsp'),
(198, 4687, '設計師'),
(199, 4691, 'Python'),
(200, 4691, '女生'),
(201, 4693, '專案'),
(202, 4693, '管理'),
(203, 4698, 'CSS'),
(204, 4698, '撰寫'),
(205, 4699, '演講'),
(206, 4699, '&nbsp'),
(207, 4700, '雲端'),
(208, 4700, 'ISO'),
(209, 4701, '&nbsp'),
(210, 4701, '聲音'),
(211, 4706, '&nbsp'),
(212, 4706, '感動'),
(213, 4707, '空間'),
(214, 4707, '藝念集私'),
(215, 4709, '監督'),
(216, 4709, '&nbsp'),
(217, 4713, '參加'),
(218, 4713, '活動'),
(219, 4716, '資策會'),
(220, 4716, '大學'),
(221, 4727, '藍曬'),
(222, 4727, '生活'),
(223, 4730, '神社'),
(224, 4730, '歷史'),
(225, 4731, '體驗'),
(226, 4731, '透過'),
(227, 4734, '&nbsp'),
(228, 4734, '學生'),
(229, 4741, '知識'),
(230, 4741, '台灣'),
(231, 4743, '專案'),
(232, 4743, '管理'),
(233, 4744, '扣件'),
(234, 4744, '服務'),
(235, 4745, '台灣'),
(236, 4745, '民主'),
(237, 4752, '專題'),
(238, 4752, '&nbsp'),
(239, 4758, '奇奇'),
(240, 4758, '寶特瓶'),
(241, 4769, '迷宮'),
(242, 4769, '動物'),
(243, 4773, 'DSM５'),
(244, 4773, '研討會'),
(245, 4780, '台灣'),
(246, 4780, '文字'),
(247, 4785, '體驗'),
(248, 4785, '透過'),
(249, 4786, '資訊'),
(250, 4786, '證照');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;