-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `businessteam`;
CREATE TABLE `businessteam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `businessteamname` varchar(150) NOT NULL,
  `businessteamprivacy` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `businessteam` (`id`, `businessteamname`, `businessteamprivacy`, `userid`, `status`, `created_date`) VALUES
(1,	'organisation',	'public',	2,	0,	'2017-08-19 09:48:12'),
(2,	'friends',	'public',	2,	0,	'2017-08-19 09:49:22'),
(3,	'visicious',	'public',	4,	0,	'2017-08-19 09:50:58'),
(4,	'designated',	'public',	2,	0,	'2017-08-19 09:51:16'),
(5,	'victorios',	'public',	4,	0,	'2017-08-19 09:51:43'),
(6,	'abusement',	'public',	2,	0,	'2017-08-19 09:52:08');

DROP TABLE IF EXISTS `businesstype`;
CREATE TABLE `businesstype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `businesstypename` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `createddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `businesstype` (`id`, `businesstypename`, `status`, `createddate`) VALUES
(1,	'Retail',	1,	'2017-09-12'),
(2,	'In-Store',	1,	'2017-09-12');

DROP TABLE IF EXISTS `business_categories`;
CREATE TABLE `business_categories` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `business_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1,	'Education',	'2017-04-01 08:09:27',	'2017-04-01 08:09:27'),
(2,	'Healthcare',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(3,	'Finance',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(4,	'In-Store',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(5,	'Online',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(6,	'Hotel & Resturant',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(7,	'Employment',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(8,	'Software & Hardware',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(9,	'Marketing & Advertising',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(10,	'Legal',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(11,	'Housing',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(12,	'Media',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(13,	'Travel & Transport',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(14,	'Beauty & Spa',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(15,	'Manufacturer',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(16,	'Automobile',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(17,	'Sports & Fitness',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(18,	'Services',	'2017-04-01 08:09:28',	'2017-04-01 08:09:28'),
(19,	'Education',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(20,	'Healthcare',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(21,	'Finance',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(22,	'In-Store',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(23,	'Online',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(24,	'Hotel & Resturant',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(25,	'Employment',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(26,	'Software & Hardware',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(27,	'Marketing & Advertising',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(28,	'Legal',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(29,	'Housing',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(30,	'Media',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(31,	'Travel & Transport',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(32,	'Beauty & Spa',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(33,	'Manufacturer',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(34,	'Automobile',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(35,	'Sports & Fitness',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29'),
(36,	'Services',	'2017-04-01 08:09:29',	'2017-04-01 08:09:29');

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(250) NOT NULL,
  `group_id` int(250) DEFAULT NULL,
  `contact_name` varchar(150) DEFAULT NULL,
  `contact_email` varchar(250) DEFAULT NULL,
  `contact_mobile` varchar(250) DEFAULT NULL,
  `contact_subject` varchar(250) DEFAULT NULL,
  `contact_message` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contacts` (`id`, `user_id`, `group_id`, `contact_name`, `contact_email`, `contact_mobile`, `contact_subject`, `contact_message`, `created_at`, `updated_at`) VALUES
(18,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(19,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(20,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(21,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(24,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(38,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(39,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(45,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(46,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(47,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(48,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(49,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(50,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(51,	1,	5,	'Damuluri Rohini Kumar',	'KEYSTROKE99@GMAIL.COM',	'08885860111',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(61,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'8885860111',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	'2017-10-02 06:46:31'),
(62,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(63,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(64,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(65,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(66,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(67,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(68,	1,	1,	'Ram Sai ed',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	'2017-10-02 06:21:47'),
(69,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(70,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(71,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(72,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(73,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(74,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(75,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(76,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(77,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(78,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(79,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(80,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(81,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(82,	1,	5,	'Damuluri Rohini Kumar',	'KEYSTROKE99@GMAIL.COM',	'08885860111',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(83,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'8885860111',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	'2017-10-02 06:46:31'),
(84,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(85,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(86,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(87,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(88,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(89,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(90,	1,	1,	'Ram Sai ed',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	'2017-10-02 06:21:47'),
(91,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(92,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(93,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(94,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(95,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(96,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(97,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(98,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(99,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(100,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(101,	1,	1,	'Ram Sai',	'dsdfs@gmail.com',	'9866514222',	'123123',	'123123',	'2017-07-03 00:00:00',	NULL),
(102,	1,	4,	'Rohini Kumar',	'jyothi@gmail.com',	'9877575757',	'jhweiqwhie',	'ueeier',	'2017-07-03 00:00:00',	NULL),
(103,	1,	1,	'Jyothi',	'rjetioerto@gmail.com',	'9978658747',	'fkjlej',	'oierwre',	'2017-08-17 00:00:00',	NULL),
(104,	1,	NULL,	'dr',	'keystroke99@gmal.com',	'9939393',	NULL,	NULL,	NULL,	NULL),
(105,	1,	NULL,	'nanda',	'nanda@gmail.com',	'939333',	NULL,	NULL,	NULL,	NULL),
(106,	1,	NULL,	'qw',	'keystroke99@gmal.com',	'9939393',	NULL,	NULL,	NULL,	NULL),
(107,	1,	NULL,	'nanda',	'nanda@gmail.com',	'939333',	NULL,	NULL,	NULL,	NULL),
(108,	1,	NULL,	'dr',	'keystroke99@gmal.com',	'9939393',	NULL,	NULL,	NULL,	NULL),
(109,	1,	NULL,	'nanda',	'nanda@gmail.com',	'939333',	NULL,	NULL,	NULL,	NULL),
(110,	1,	NULL,	'qw',	'keystroke99@gmal.com',	'9939393',	NULL,	NULL,	NULL,	NULL),
(111,	1,	NULL,	'nanda',	'nanda@gmail.com',	'939333',	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `businesstype` int(11) NOT NULL,
  `businesscategory` int(11) NOT NULL,
  `website` varchar(60) NOT NULL,
  `couponcode` varchar(30) NOT NULL,
  `coupontitle` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `expirationdate` date NOT NULL,
  `couponvalue` varchar(60) NOT NULL,
  `createddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `coupons` (`id`, `userid`, `businesstype`, `businesscategory`, `website`, `couponcode`, `coupontitle`, `description`, `expirationdate`, `couponvalue`, `createddate`) VALUES
(1,	2,	2,	12,	'www.website.com',	'',	'',	'',	'2017-09-21',	'',	'2017-09-21');

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(70) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `groups` (`id`, `groupname`, `userid`, `status`, `created_date`) VALUES
(1,	'shashivardhanseguri',	2,	1,	'2017-08-22 11:36:33'),
(3,	'kiran',	2,	1,	'2017-08-19 11:36:43'),
(4,	'jyothi',	2,	1,	'2017-08-19 11:36:51'),
(5,	'vishnu',	2,	1,	'2017-08-19 11:45:13'),
(6,	'xyzsad',	2,	1,	'2017-08-21 04:31:50'),
(7,	'hrtyr',	4,	1,	'2017-08-21 05:00:27'),
(8,	'reyefgdgg',	4,	1,	'2017-08-21 05:00:37'),
(9,	'adroitteam1',	4,	1,	'2017-08-22 11:35:04'),
(11,	'rereerertert',	4,	1,	'2017-08-21 05:01:11');

DROP TABLE IF EXISTS `joinregistration`;
CREATE TABLE `joinregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `businessaccesscode` varchar(150) NOT NULL,
  `userid` int(11) NOT NULL,
  `teammemberemail` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `teammemberimage` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `joinregistration` (`id`, `businessaccesscode`, `userid`, `teammemberemail`, `password`, `teammemberimage`, `status`, `created_at`) VALUES
(1,	'RTBAC6417',	6,	'sdfsfd@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-07-03 00:00:00'),
(2,	'RTBAC6417',	6,	'dsfdsfsd@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-07-03 00:00:00'),
(3,	'RTBAC8335',	7,	'asdasd@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-07-03 00:00:00'),
(4,	'RTBAC8335',	7,	'charan@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	1,	'2017-07-03 00:00:00'),
(5,	'RTBAC7659',	27,	'saikiran1244@gmail.com',	'e10adc3949ba59abbe56e057f20f883e',	'',	0,	'2017-07-07 00:00:00'),
(6,	'RTBAC1909',	26,	'sivajyothi53126@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-08-16 07:24:31'),
(7,	'RTBAC1909',	26,	'sivajyothi53126@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-08-16 07:24:43'),
(8,	'RTBAC6948',	25,	'sivajyothi5326@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-08-16 09:07:44'),
(9,	'RTBAC6948',	25,	'sivajyothi5326@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-08-16 09:14:08'),
(10,	'RTBAC6499',	29,	'ncvnccv@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-08-16 09:31:34'),
(11,	'RTBAC1409',	31,	'mnbcxvx@gmail.com',	'4297f44b13955235245b2497399d7a93',	'',	0,	'2017-08-16 09:40:59');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businesscategory` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilenumber` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verificationcode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_otp` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_otp` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessaccesscode` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` tinyint(4) NOT NULL,
  `businessname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessaddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(6) NOT NULL,
  `userimage` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `businesscategory`, `mobilenumber`, `verificationcode`, `mobile_otp`, `email_otp`, `businessaccesscode`, `user_role`, `businessname`, `businessaddress`, `country`, `cityname`, `pincode`, `userimage`, `timezone`, `status`, `created_at`, `updated_at`) VALUES
(1,	'sivajyothi536@gmail.com',	'4297f44b13955235245b2497399d7a93',	'ertetter',	'erterte',	'null',	'+918688945735',	'72c82c6ba93786378e99ac247dfdb816',	'',	'6530',	'RTBAC9269',	2,	'null',	'null',	'IN',	'',	434334,	'null',	'',	1,	'2017-08-16 12:12:15',	'2017-08-16 12:13:16'),
(2,	'mounika.kollipara93@gmail.com',	'4297f44b13955235245b2497399d7a93',	'xcvxcv',	'cxcvvx',	'6',	'+919951076757',	'',	'',	'1370',	'RTBAC8500',	1,	'xvcxvxcv',	'cvxcvc',	'India',	'hyderabad',	546456,	'good-morning-quotes-inspirational-quotes-morning-quotes-good-morning-picture-morning-images-1.jpg',	'(GMT +05:30) Asia/Kolkata',	1,	'2017-08-16 12:18:54',	'2017-08-16 12:19:57'),
(3,	'phpsaikiran@gmail.com',	'4297f44b13955235245b2497399d7a93',	'dgdf',	'dfggdg',	'null',	'+917981930215',	'',	'',	'5694',	'RTBAC9177',	2,	'null',	'null',	'IN',	'',	343544,	'null',	'',	1,	'2017-08-16 12:26:35',	'2017-08-16 12:27:42'),
(4,	'rtytryr@fgfg.com',	'a152e841783914146e4bcd4f39100686',	'null',	'null',	'null',	'+91 9059789218',	'',	'8459',	'8459',	'RTBAC5925',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-08-19 11:40:00',	'2017-08-19 11:40:00'),
(5,	'sasdfsf@dsfdsf.com',	'a152e841783914146e4bcd4f39100686',	'null',	'null',	'null',	'+919959964185',	'',	'6025',	'6025',	'RTBAC8023',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-08-19 11:47:02',	'2017-08-19 11:47:02'),
(6,	'jhkjhk@hfgh.com',	'a152e841783914146e4bcd4f39100686',	'null',	'null',	'null',	'676757657657',	'',	'8912',	'8912',	'RTBAC6316',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-08-19 16:56:25',	'2017-08-19 16:56:25'),
(7,	'gfdfdsf@gfd.com',	'a152e841783914146e4bcd4f39100686',	'null',	'null',	'null',	'+1340',	'',	'2492',	'2492',	'RTBAC7819',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-08-21 05:44:38',	'2017-08-21 05:44:38'),
(8,	'xncvn@gmail.com',	'4297f44b13955235245b2497399d7a93',	'null',	'null',	'null',	'+918179024281',	'',	'6814',	'6814',	'RTBAC1214',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-09-11 07:48:07',	'2017-09-11 07:48:07'),
(10,	'shashivardhan.seguru@gmail.com',	'4297f44b13955235245b2497399d7a93',	'jyothii',	'm',	'2',	'+918688945734',	'',	'',	'8637',	'RTBAC7697',	1,	'momsghar',	'hyderabad',	'India',	'hyderabad',	518422,	'desktop-wallpaper-cool31.jpg',	'(GMT +05:30) Asia/Kolkata',	1,	'2017-09-12 05:57:22',	'2017-09-12 05:58:27'),
(11,	'jyothi@adroitsws.com',	'4297f44b13955235245b2497399d7a93',	'null',	'null',	'null',	'+918688945731',	'',	'7641',	'7641',	'RTBAC4676',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-09-14 06:44:33',	'2017-09-14 06:44:33'),
(12,	'sivajyothi623472@gmail.com',	'4297f44b13955235245b2497399d7a93',	'null',	'null',	'null',	'+918179043434',	'',	'5172',	'5172',	'RTBAC3563',	0,	'null',	'null',	'null',	'',	0,	'null',	'',	0,	'2017-09-14 08:50:42',	'2017-09-14 08:50:42'),
(13,	'mounika@gmail.com',	'4297f44b13955235245b2497399d7a93',	'null',	'null',	'null',	'+918688945737',	'',	'4916',	'4916',	'RTBAC1706',	0,	'null',	'null',	'null',	'null',	0,	'null',	'',	0,	'2017-09-14 11:04:20',	'2017-09-14 11:04:20'),
(14,	'mounikmklkdsjf@gmail.com',	'4297f44b13955235245b2497399d7a93',	'null',	'null',	'null',	'null',	'',	'8508',	'8508',	'RTBAC3884',	0,	'null',	'null',	'null',	'null',	0,	'null',	'',	0,	'2017-09-14 11:06:08',	'2017-09-14 11:06:08'),
(15,	'vmcn@gmail.com',	'4297f44b13955235245b2497399d7a93',	'null',	'null',	'null',	'null',	'',	'3806',	'3806',	'RTBAC8398',	0,	'null',	'null',	'null',	'null',	0,	'null',	'',	0,	'2017-09-14 11:06:28',	'2017-09-14 11:06:28'),
(16,	'jyothi432@gmail.com',	'4297f44b13955235245b2497399d7a93',	'sdfdsf',	'dsfsfsd',	'2',	'+918688945733',	'',	'',	'5380',	'RTBAC3530',	1,	'sdfsfsdf',	'sdsfsdf',	'India',	'hyderabad',	548787,	'images (1).jpg',	'(GMT +05:30) Asia/Kolkata',	1,	'2017-09-14 11:07:11',	'2017-09-14 11:09:29');

-- 2017-10-03 04:37:03
