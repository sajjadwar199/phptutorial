-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 يناير 2022 الساعة 19:31
-- إصدار الخادم: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination`
--
CREATE DATABASE IF NOT EXISTS `pagination` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pagination`;

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `email`, `id`) VALUES
('firstname0', 'lastname0', 'email0@gmail.com', 1),
('firstname1', 'lastname1', 'email1@gmail.com', 2),
('firstname2', 'lastname2', 'email2@gmail.com', 3),
('firstname3', 'lastname3', 'email3@gmail.com', 4),
('firstname4', 'lastname4', 'email4@gmail.com', 5),
('firstname5', 'lastname5', 'email5@gmail.com', 6),
('firstname6', 'lastname6', 'email6@gmail.com', 7),
('firstname7', 'lastname7', 'email7@gmail.com', 8),
('firstname8', 'lastname8', 'email8@gmail.com', 9),
('firstname9', 'lastname9', 'email9@gmail.com', 10),
('firstname10', 'lastname10', 'email10@gmail.com', 11),
('firstname11', 'lastname11', 'email11@gmail.com', 12),
('firstname12', 'lastname12', 'email12@gmail.com', 13),
('firstname13', 'lastname13', 'email13@gmail.com', 14),
('firstname14', 'lastname14', 'email14@gmail.com', 15),
('firstname15', 'lastname15', 'email15@gmail.com', 16),
('firstname16', 'lastname16', 'email16@gmail.com', 17),
('firstname17', 'lastname17', 'email17@gmail.com', 18),
('firstname18', 'lastname18', 'email18@gmail.com', 19),
('firstname19', 'lastname19', 'email19@gmail.com', 20),
('firstname20', 'lastname20', 'email20@gmail.com', 21),
('firstname21', 'lastname21', 'email21@gmail.com', 22),
('firstname22', 'lastname22', 'email22@gmail.com', 23),
('firstname23', 'lastname23', 'email23@gmail.com', 24),
('firstname24', 'lastname24', 'email24@gmail.com', 25),
('firstname25', 'lastname25', 'email25@gmail.com', 26),
('firstname26', 'lastname26', 'email26@gmail.com', 27),
('firstname27', 'lastname27', 'email27@gmail.com', 28),
('firstname28', 'lastname28', 'email28@gmail.com', 29),
('firstname29', 'lastname29', 'email29@gmail.com', 30),
('firstname30', 'lastname30', 'email30@gmail.com', 31),
('firstname31', 'lastname31', 'email31@gmail.com', 32),
('firstname32', 'lastname32', 'email32@gmail.com', 33),
('firstname33', 'lastname33', 'email33@gmail.com', 34),
('firstname34', 'lastname34', 'email34@gmail.com', 35),
('firstname35', 'lastname35', 'email35@gmail.com', 36),
('firstname36', 'lastname36', 'email36@gmail.com', 37),
('firstname37', 'lastname37', 'email37@gmail.com', 38),
('firstname38', 'lastname38', 'email38@gmail.com', 39),
('firstname39', 'lastname39', 'email39@gmail.com', 40),
('firstname40', 'lastname40', 'email40@gmail.com', 41),
('firstname41', 'lastname41', 'email41@gmail.com', 42),
('firstname42', 'lastname42', 'email42@gmail.com', 43),
('firstname43', 'lastname43', 'email43@gmail.com', 44),
('firstname44', 'lastname44', 'email44@gmail.com', 45),
('firstname45', 'lastname45', 'email45@gmail.com', 46),
('firstname46', 'lastname46', 'email46@gmail.com', 47),
('firstname47', 'lastname47', 'email47@gmail.com', 48),
('firstname48', 'lastname48', 'email48@gmail.com', 49),
('firstname49', 'lastname49', 'email49@gmail.com', 50),
('firstname50', 'lastname50', 'email50@gmail.com', 51),
('firstname51', 'lastname51', 'email51@gmail.com', 52),
('firstname52', 'lastname52', 'email52@gmail.com', 53),
('firstname53', 'lastname53', 'email53@gmail.com', 54),
('firstname54', 'lastname54', 'email54@gmail.com', 55),
('firstname55', 'lastname55', 'email55@gmail.com', 56),
('firstname56', 'lastname56', 'email56@gmail.com', 57),
('firstname57', 'lastname57', 'email57@gmail.com', 58),
('firstname58', 'lastname58', 'email58@gmail.com', 59),
('firstname59', 'lastname59', 'email59@gmail.com', 60),
('firstname60', 'lastname60', 'email60@gmail.com', 61),
('firstname61', 'lastname61', 'email61@gmail.com', 62),
('firstname62', 'lastname62', 'email62@gmail.com', 63),
('firstname63', 'lastname63', 'email63@gmail.com', 64),
('firstname64', 'lastname64', 'email64@gmail.com', 65),
('firstname65', 'lastname65', 'email65@gmail.com', 66),
('firstname66', 'lastname66', 'email66@gmail.com', 67),
('firstname67', 'lastname67', 'email67@gmail.com', 68),
('firstname68', 'lastname68', 'email68@gmail.com', 69),
('firstname69', 'lastname69', 'email69@gmail.com', 70),
('firstname70', 'lastname70', 'email70@gmail.com', 71),
('firstname71', 'lastname71', 'email71@gmail.com', 72),
('firstname72', 'lastname72', 'email72@gmail.com', 73),
('firstname73', 'lastname73', 'email73@gmail.com', 74),
('firstname74', 'lastname74', 'email74@gmail.com', 75),
('firstname75', 'lastname75', 'email75@gmail.com', 76),
('firstname76', 'lastname76', 'email76@gmail.com', 77),
('firstname77', 'lastname77', 'email77@gmail.com', 78),
('firstname78', 'lastname78', 'email78@gmail.com', 79),
('firstname79', 'lastname79', 'email79@gmail.com', 80),
('firstname80', 'lastname80', 'email80@gmail.com', 81),
('firstname81', 'lastname81', 'email81@gmail.com', 82),
('firstname82', 'lastname82', 'email82@gmail.com', 83),
('firstname83', 'lastname83', 'email83@gmail.com', 84),
('firstname84', 'lastname84', 'email84@gmail.com', 85),
('firstname85', 'lastname85', 'email85@gmail.com', 86),
('firstname86', 'lastname86', 'email86@gmail.com', 87),
('firstname87', 'lastname87', 'email87@gmail.com', 88),
('firstname88', 'lastname88', 'email88@gmail.com', 89),
('firstname89', 'lastname89', 'email89@gmail.com', 90),
('firstname90', 'lastname90', 'email90@gmail.com', 91),
('firstname91', 'lastname91', 'email91@gmail.com', 92),
('firstname92', 'lastname92', 'email92@gmail.com', 93),
('firstname93', 'lastname93', 'email93@gmail.com', 94),
('firstname94', 'lastname94', 'email94@gmail.com', 95),
('firstname95', 'lastname95', 'email95@gmail.com', 96),
('firstname96', 'lastname96', 'email96@gmail.com', 97),
('firstname97', 'lastname97', 'email97@gmail.com', 98),
('firstname98', 'lastname98', 'email98@gmail.com', 99),
('firstname99', 'lastname99', 'email99@gmail.com', 100),
('firstname100', 'lastname100', 'email100@gmail.com', 101),
('firstname101', 'lastname101', 'email101@gmail.com', 102),
('firstname102', 'lastname102', 'email102@gmail.com', 103),
('firstname103', 'lastname103', 'email103@gmail.com', 104),
('firstname104', 'lastname104', 'email104@gmail.com', 105),
('firstname105', 'lastname105', 'email105@gmail.com', 106),
('firstname106', 'lastname106', 'email106@gmail.com', 107),
('firstname107', 'lastname107', 'email107@gmail.com', 108),
('firstname108', 'lastname108', 'email108@gmail.com', 109),
('firstname109', 'lastname109', 'email109@gmail.com', 110),
('firstname110', 'lastname110', 'email110@gmail.com', 111),
('firstname111', 'lastname111', 'email111@gmail.com', 112),
('firstname112', 'lastname112', 'email112@gmail.com', 113),
('firstname113', 'lastname113', 'email113@gmail.com', 114),
('firstname114', 'lastname114', 'email114@gmail.com', 115),
('firstname115', 'lastname115', 'email115@gmail.com', 116),
('firstname116', 'lastname116', 'email116@gmail.com', 117),
('firstname117', 'lastname117', 'email117@gmail.com', 118),
('firstname118', 'lastname118', 'email118@gmail.com', 119),
('firstname119', 'lastname119', 'email119@gmail.com', 120),
('firstname120', 'lastname120', 'email120@gmail.com', 121),
('firstname121', 'lastname121', 'email121@gmail.com', 122),
('firstname122', 'lastname122', 'email122@gmail.com', 123),
('firstname123', 'lastname123', 'email123@gmail.com', 124),
('firstname124', 'lastname124', 'email124@gmail.com', 125),
('firstname125', 'lastname125', 'email125@gmail.com', 126),
('firstname126', 'lastname126', 'email126@gmail.com', 127),
('firstname127', 'lastname127', 'email127@gmail.com', 128),
('firstname128', 'lastname128', 'email128@gmail.com', 129),
('firstname129', 'lastname129', 'email129@gmail.com', 130),
('firstname130', 'lastname130', 'email130@gmail.com', 131),
('firstname131', 'lastname131', 'email131@gmail.com', 132),
('firstname132', 'lastname132', 'email132@gmail.com', 133),
('firstname133', 'lastname133', 'email133@gmail.com', 134),
('firstname134', 'lastname134', 'email134@gmail.com', 135),
('firstname135', 'lastname135', 'email135@gmail.com', 136),
('firstname136', 'lastname136', 'email136@gmail.com', 137),
('firstname137', 'lastname137', 'email137@gmail.com', 138),
('firstname138', 'lastname138', 'email138@gmail.com', 139),
('firstname139', 'lastname139', 'email139@gmail.com', 140),
('firstname140', 'lastname140', 'email140@gmail.com', 141),
('firstname141', 'lastname141', 'email141@gmail.com', 142),
('firstname142', 'lastname142', 'email142@gmail.com', 143),
('firstname143', 'lastname143', 'email143@gmail.com', 144),
('firstname144', 'lastname144', 'email144@gmail.com', 145),
('firstname145', 'lastname145', 'email145@gmail.com', 146),
('firstname146', 'lastname146', 'email146@gmail.com', 147),
('firstname147', 'lastname147', 'email147@gmail.com', 148),
('firstname148', 'lastname148', 'email148@gmail.com', 149),
('firstname149', 'lastname149', 'email149@gmail.com', 150),
('firstname150', 'lastname150', 'email150@gmail.com', 151),
('firstname151', 'lastname151', 'email151@gmail.com', 152),
('firstname152', 'lastname152', 'email152@gmail.com', 153),
('firstname153', 'lastname153', 'email153@gmail.com', 154),
('firstname154', 'lastname154', 'email154@gmail.com', 155),
('firstname155', 'lastname155', 'email155@gmail.com', 156),
('firstname156', 'lastname156', 'email156@gmail.com', 157),
('firstname157', 'lastname157', 'email157@gmail.com', 158),
('firstname158', 'lastname158', 'email158@gmail.com', 159),
('firstname159', 'lastname159', 'email159@gmail.com', 160),
('firstname160', 'lastname160', 'email160@gmail.com', 161),
('firstname161', 'lastname161', 'email161@gmail.com', 162),
('firstname162', 'lastname162', 'email162@gmail.com', 163),
('firstname163', 'lastname163', 'email163@gmail.com', 164),
('firstname164', 'lastname164', 'email164@gmail.com', 165),
('firstname165', 'lastname165', 'email165@gmail.com', 166),
('firstname166', 'lastname166', 'email166@gmail.com', 167),
('firstname167', 'lastname167', 'email167@gmail.com', 168),
('firstname168', 'lastname168', 'email168@gmail.com', 169),
('firstname169', 'lastname169', 'email169@gmail.com', 170),
('firstname170', 'lastname170', 'email170@gmail.com', 171),
('firstname171', 'lastname171', 'email171@gmail.com', 172),
('firstname172', 'lastname172', 'email172@gmail.com', 173),
('firstname173', 'lastname173', 'email173@gmail.com', 174),
('firstname174', 'lastname174', 'email174@gmail.com', 175),
('firstname175', 'lastname175', 'email175@gmail.com', 176),
('firstname176', 'lastname176', 'email176@gmail.com', 177),
('firstname177', 'lastname177', 'email177@gmail.com', 178),
('firstname178', 'lastname178', 'email178@gmail.com', 179),
('firstname179', 'lastname179', 'email179@gmail.com', 180),
('firstname180', 'lastname180', 'email180@gmail.com', 181),
('firstname181', 'lastname181', 'email181@gmail.com', 182),
('firstname182', 'lastname182', 'email182@gmail.com', 183),
('firstname183', 'lastname183', 'email183@gmail.com', 184),
('firstname184', 'lastname184', 'email184@gmail.com', 185),
('firstname185', 'lastname185', 'email185@gmail.com', 186),
('firstname186', 'lastname186', 'email186@gmail.com', 187),
('firstname187', 'lastname187', 'email187@gmail.com', 188),
('firstname188', 'lastname188', 'email188@gmail.com', 189),
('firstname189', 'lastname189', 'email189@gmail.com', 190),
('firstname190', 'lastname190', 'email190@gmail.com', 191),
('firstname191', 'lastname191', 'email191@gmail.com', 192),
('firstname192', 'lastname192', 'email192@gmail.com', 193),
('firstname193', 'lastname193', 'email193@gmail.com', 194),
('firstname194', 'lastname194', 'email194@gmail.com', 195),
('firstname195', 'lastname195', 'email195@gmail.com', 196),
('firstname196', 'lastname196', 'email196@gmail.com', 197),
('firstname197', 'lastname197', 'email197@gmail.com', 198);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
