-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-06 05:29:03
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_task_quiz`
--

CREATE TABLE `gs_task_quiz` (
  `name` varchar(64) NOT NULL,
  `quiz1` varchar(64) NOT NULL,
  `quiz2` varchar(64) NOT NULL,
  `quiz3` varchar(64) NOT NULL,
  `quiz4` varchar(64) NOT NULL,
  `quiz5` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_task_quiz`
--

INSERT INTO `gs_task_quiz` (`name`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `quiz5`) VALUES
('aoki', 'きゅうり', '横浜DeNAベイスターズ', 'HKT48', '佐賀県', 'A型'),
('nakamura', 'きゅうり', '東京ヤクルトスワローズ', 'SKE48', '青森県', 'A型'),
('nagaoka', 'きゅうり', '読売ジャイアンツ', 'HKT48', '青森県', 'B型'),
('arakawa', 'きゅうり', '読売ジャイアンツ', 'SKE48', '青森県', 'A型');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
