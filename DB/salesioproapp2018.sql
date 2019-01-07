-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 12 月 14 日 05:31
-- サーバのバージョン： 5.7.21
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesioproapp2018`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` text NOT NULL COMMENT '学籍番号',
  `absent_day` date NOT NULL COMMENT '欠課欠席した日',
  `class0` text NOT NULL,
  `class1` text NOT NULL,
  `class2` text NOT NULL,
  `class3` text NOT NULL,
  `class4` text NOT NULL,
  `class5` text NOT NULL,
  `class6` text NOT NULL,
  `class7` text NOT NULL,
  `class8` text NOT NULL,
  `class9` text NOT NULL,
  `remarks` text NOT NULL COMMENT '備考'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `absent_day`, `class0`, `class1`, `class2`, `class3`, `class4`, `class5`, `class6`, `class7`, `class8`, `class9`, `remarks`) VALUES
(89, '14523', '2018-11-07', '1', '0', '1', '0', '1', '0', '1', '0', '0', '1', '事故欠'),
(90, '14523', '2018-11-07', '1', '0', '0', '1', '0', '1', '1', '1', '1', '0', ''),
(91, '14523', '2018-10-30', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '事故欠'),
(92, '14523', '2018-06-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '病欠'),
(93, '14523', '2018-11-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '病欠'),
(94, '14523', '2018-04-11', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '出席停止'),
(95, '14523', '2018-06-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '病欠'),
(96, '14523', '2018-06-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '出席停止'),
(97, '14523', '2018-11-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '事故欠'),
(98, '14523', '2018-11-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '事故欠'),
(99, '14523', '2018-11-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', '不明'),
(100, '14523', '2018-11-07', '0', '1', '1', '1', '0', '0', '1', '0', '0', '1', ''),
(101, '14523', '2018-06-07', '1', '0', '0', '0', '0', '1', '1', '1', '0', '1', '不明'),
(102, '14523', '2018-04-11', '1', '0', '0', '0', '0', '1', '1', '1', '0', '1', '病欠'),
(103, '14523', '2018-06-07', '1', '0', '0', '0', '0', '1', '1', '1', '0', '1', '病欠'),
(104, '14523', '2018-11-07', '0', '1', '1', '1', '1', '0', '0', '1', '0', '0', '死亡'),
(105, '14523', '2018-06-07', '0', '1', '1', '1', '1', '0', '0', '1', '0', '0', '病欠'),
(106, '14523', '2018-11-07', '0', '1', '1', '1', '1', '0', '0', '1', '0', '0', '出席停止');

-- --------------------------------------------------------

--
-- テーブルの構造 `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `student`
--

INSERT INTO `student` (`id`, `student_id`, `name`) VALUES
(1, '14501', '青山 采未'),
(2, '14502', '荒井 草太'),
(5, '14505', '伊藤 いちご'),
(7, '14507', '今田 悠貴'),
(8, '14508', '巖 晃'),
(9, '14509', '上野 元気'),
(10, '14510', '大塚 亮平'),
(11, '14511', '大ナ 海人'),
(12, '14512', '大町 祥輝'),
(13, '14513', '荻野 陽太'),
(14, '14514', '小野 洋佑'),
(15, '14515', '小野寺 雅'),
(16, '14516', '小野寺 蓮'),
(17, '14517', '片山 貴仁'),
(18, '14518', '加藤 翔太'),
(19, '14519', '金子 航'),
(20, '14520', '川口 美月'),
(21, '14521', '北村 開'),
(22, '14522', '小林 雅大'),
(23, '14523', '小枩谷 勇二'),
(24, '14524', '米華 真典'),
(25, '14525', '今野 央惟'),
(26, '14526', '澤田 航希'),
(27, '14527', '篠澤 尚樹'),
(28, '14528', '末永 瑛大'),
(29, '14529', '地寄 夏彦'),
(30, '14530', '都筑 天音'),
(31, '14531', '土井 智弘'),
(32, '14532', '新村 修都'),
(33, '14533', '西峯 弘明'),
(34, '14534', '西牟田 航平'),
(35, '14535', '橋口 人龍'),
(38, '14538', '藤岡 豊'),
(39, '14539', 'ヘ田 季'),
(40, '14540', '保科 慧'),
(41, '14541', '丸尾 一真'),
(42, '14542', '三上 柊悟'),
(43, '14543', '水野 恭介'),
(44, '14544', '皆川 恭徳'),
(46, '14546', '宮井 岳'),
(49, '14549', '山口 拓真'),
(50, '14550', '山崎 拓哉'),
(51, '14551', '山之上 公輝'),
(52, '14552', '吉田 優司'),
(53, '14553', '吉村 望'),
(54, '14554', '和泉 功亮'),
(57, '14557', '川本 将大'),
(59, '14559', '雨宮 永'),
(60, '14560', '大堀 達基');

-- --------------------------------------------------------

--
-- テーブルの構造 `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `password`) VALUES
(1, 'checker', 'sp5CS2018'),
(4, 'test1', 'test098'),
(5, 'test12', 'test0987'),
(6, 'test11111', 'test00000'),
(7, 'test1212', 'a12345'),
(11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(12, '123456789012345678901234567890aa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(13, '123456789012345678901234567890bB', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(14, 'a', 'a'),
(15, 'B', 'a'),
(16, '0', 'a'),
(17, 'd', '1'),
(19, '!!!!', 'asd'),
(20, '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
