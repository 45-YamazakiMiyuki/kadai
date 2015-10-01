-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `spot_app`
--
CREATE DATABASE IF NOT EXISTS `spot_app` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `spot_app`;

-- --------------------------------------------------------

--
-- テーブルの構造 `prefecture`
--

CREATE TABLE IF NOT EXISTS `prefecture` (
  `prefecture_id` int(11) NOT NULL,
  `prefecture_name` varchar(16) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_user` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_user` int(11) NOT NULL,
  PRIMARY KEY (`prefecture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `prefecture` (`prefecture_id`, `prefecture_name`, `create_date`, `create_user`, `update_date`, `update_user`) VALUES
(1,'北海道', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(2,'青森県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(3,'岩手県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(4,'宮城県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(5,'秋田県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(6,'山形県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(7,'福島県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(8,'茨城県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(9,'栃木県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(10,'群馬県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(11,'埼玉県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(12,'千葉県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(13,'東京都', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(14,'神奈川県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(15,'新潟県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(16,'富山県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(17,'石川県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(18,'福井県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(19,'山梨県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(20,'長野県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(21,'岐阜県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(22,'静岡県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(23,'愛知県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(24,'三重県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(25,'滋賀県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(26,'京都府', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(27,'大阪府', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(28,'兵庫県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(29,'奈良県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(30,'和歌山県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(31,'鳥取県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(32,'島根県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(33,'岡山県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(34,'広島県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(35,'山口県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(36,'徳島県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(37,'香川県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(38,'愛媛県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(39,'高知県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(40,'福岡県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(41,'佐賀県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(42,'長崎県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(43,'熊本県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(44,'大分県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(45,'宮崎県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(46,'鹿児島県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
(47,'沖縄県', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin');

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `admin_user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_user_name` varchar(510) NOT NULL,
  `admin_role_id` int(11) NOT NULL,
  `use_flg` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_user` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_user` int(11) NOT NULL,
  PRIMARY KEY (`admin_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin_user` (`admin_user_id`, `password`, `admin_user_name`, `admin_role_id`, `use_flg`, `create_date`, `create_user`, `update_date`, `update_user`) VALUES
('admin', 'password', 'システム管理者', '9', '1' , '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
('spot', 'password', '名所管理者', '1', '1' , '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
('category', 'password', 'カテゴリー管理者', '2', '1' , '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin');
-- --------------------------------------------------------

--
-- テーブルの構造 `admin_role`
--

CREATE TABLE IF NOT EXISTS `admin_role` (
  `admin_role_id` int(11)  NOT NULL,
  `admin_role_name` varchar(510) NOT NULL,
  `use_flg` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_user` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_user` int(11) NOT NULL,
  PRIMARY KEY (`admin_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin_role` (`admin_role_id`, `admin_role_name`, `use_flg`, `create_date`, `create_user`, `update_date`, `update_user`) VALUES
('1', 'ニュース管理者', '1', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
('2', 'カテゴリー管理者', '1', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin'),
('9', 'システム管理者', '1', '2015-09-23 00:00:00', 'admin', '2015-09-13 15:13:25', 'admin');
-- --------------------------------------------------------

--
-- テーブルの構造 `spot`
--
CREATE TABLE IF NOT EXISTS `spot` (
  `spot_id` int(11) NOT NULL AUTO_INCREMENT,
  `spot_name` varchar(510) NOT NULL,
  `spot_detail` varchar(4000) NOT NULL,
  `author` varchar(510) NOT NULL,
  `prefecture_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lat` double(8,6) DEFAULT NULL,
  `lng` double(9,6) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `create_user` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_user` int(11) NOT NULL,
  PRIMARY KEY(spot_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルの構造 `spot_picture`
--
CREATE TABLE IF NOT EXISTS `spot_picture` (
  `spot_picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `spot_id` int(11) NOT NULL ,
  `spot_picture_no` int(11) NOT NULL ,
  `spot_picture_name` varchar(510) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_user` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_user` int(11) NOT NULL,
  PRIMARY KEY(spot_picture_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

