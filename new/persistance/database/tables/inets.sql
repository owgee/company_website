-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2014 at 12:51 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inets`
--

-- --------------------------------------------------------

--
-- Table structure for table `inets_blog`
--

CREATE TABLE IF NOT EXISTS `inets_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` text NOT NULL,
  `blog_description` longtext NOT NULL,
  `blog_posted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_user_id` int(11) NOT NULL,
  `blog_category` varchar(120) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inets_mailing_list`
--

CREATE TABLE IF NOT EXISTS `inets_mailing_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `inets_mailing_list`
--

INSERT INTO `inets_mailing_list` (`id`, `email`, `time`) VALUES
(1, 'mcdougalll@who.int', '2014-08-04 08:05:08'),
(2, 'kminalhal@yahoo.fr', '2014-08-04 08:05:08'),
(3, 'dav.luninze@yahoo.com', '2014-08-04 08:17:21'),
(4, 'gadeya@msh.org', '2014-08-04 08:17:21'),
(5, 'ksenauer@msh.org', '2014-08-04 08:17:21'),
(6, 'd.crowe@savethechildren.or,tz', '2014-08-04 08:17:21'),
(7, 'leonkintaudi@sanru.org', '2014-08-04 08:17:21'),
(8, 'felixminuku@sanru.org', '2014-08-04 08:17:21'),
(9, 'a.vandam@youthincentives.org', '2014-08-04 08:17:21'),
(10, 'eesambila@inbox.com', '2014-08-04 08:17:21'),
(11, 'tgnp@tgnp.org', '2014-08-04 08:17:21'),
(12, 'nbates@globalhealth.org', '2014-08-04 08:17:21'),
(13, 'mkayongo@care.org', '2014-08-04 08:17:21'),
(14, 'doluwole@aed.org', '2014-08-04 08:17:21'),
(15, 'pbarate@ipact-int.com', '2014-08-04 08:17:21'),
(16, 'mcarnell@jsi.com', '2014-08-04 08:17:21'),
(17, 'pkisanga@realnet.co.sz', '2014-08-04 08:17:21'),
(18, 'astarrs@familycareintl.org', '2014-08-04 08:17:21'),
(19, 'atinker@dc.savechildren.org', '2014-08-04 08:17:21'),
(20, 'wra-tz@yahoo.com', '2014-08-04 08:17:21'),
(21, 'Enlightenment@spiritualergonomics .com', '2014-08-04 08:17:21'),
(22, 'krfisher@deloitte.com', '2014-08-04 08:17:21'),
(23, 'haule@cssc.or.tz', '2014-08-04 08:17:21'),
(24, 'israelthadoram@hotmail.com', '2014-08-04 08:17:21'),
(25, 'Lisa.bowen@planusa.org', '2014-08-04 08:17:21'),
(26, 'omonditz@yahoo.com', '2014-08-04 08:17:21'),
(27, 'lennieakamwendo@yahoo.co.uk', '2014-08-04 08:17:21'),
(28, 'malah@y-peer.org', '2014-08-04 08:17:21'),
(29, 'jwoodside@ippf.org', '2014-08-04 08:17:21'),
(30, 'hawkins@interactworldwide.org', '2014-08-04 08:17:21'),
(31, 'ac@medicam-cambodia.org', '2014-08-04 08:17:21'),
(32, 'smnnep@wlink.com.np', '2014-08-04 08:17:21'),
(33, 'penina.ochola@plan- international.org', '2014-08-04 08:17:21'),
(34, 'eunice.okoth@dowusa.org', '2014-08-04 08:17:21'),
(35, 'lpf1@columbia.edu', '2014-08-04 08:17:21'),
(36, 'kagarwal@jhpiego.net', '2014-08-04 08:17:21'),
(37, 'schand@jhpiego.net', '2014-08-04 08:17:21'),
(38, 'aparajitagogoi@vsnl.net', '2014-08-04 08:17:21'),
(39, 'cregina@savechildren.org', '2014-08-04 08:23:19'),
(40, 'mamaLyamuya25@hotmail.com', '2014-08-04 08:23:19'),
(41, 'kkrasovec@path.org', '2014-08-04 08:23:19'),
(42, 'tshaver@whiteribbonalliance.org', '2014-08-04 08:23:19'),
(43, 'Rpmm4ak@africaonline.com.gh', '2014-08-04 08:23:19'),
(44, 'mulkajean@yahoo.fr', '2014-08-04 08:23:19'),
(45, 'lmuhirwe@upmb.co.ug', '2014-08-04 08:23:19'),
(46, 'hicheka@yahoo.co.uk', '2014-08-04 08:23:19'),
(47, 'tmwakajonga@fcimail.org', '2014-08-04 08:23:19'),
(48, 'sostmark@gavialliance.org', '2014-08-04 08:23:19'),
(49, 'rebecca.monks@worldvision.org.uk', '2014-08-04 08:23:19'),
(50, 'reservations@ledgerplaza-baharibeach.com', '2014-08-04 08:34:50'),
(51, 'dollarama.tz.morogoro@gmail.com', '2014-08-04 08:34:50'),
(52, 'info@nabaki.com', '2014-08-04 08:34:50'),
(53, 'startimescustomercare@gmail.com', '2014-08-04 08:34:50'),
(54, 'bestbuycoms@gmail.com', '2014-08-04 08:34:50'),
(55, 'info@jaguarexperience.co.za', '2014-08-04 08:34:50'),
(56, 'maisha@bol.co.tz or saima@maishacomputer', '2014-08-04 08:34:50'),
(57, 'jwassira@hotmail.com', '2014-08-04 08:34:50'),
(58, 'info@qualitycentremall.com', '2014-08-04 08:34:50'),
(59, 'fashiondesireclothing@hotmail.co.uk', '2014-08-04 08:34:50'),
(60, 'mrkqualitymall@tz.uchumi.com', '2014-08-04 08:34:50'),
(61, 'mpalray@hotmail.com, palray@live.com', '2014-08-04 08:34:50'),
(62, 'dobeasmart@dobeagroup.co.tz', '2014-08-04 08:34:50'),
(63, 'imberuziinvestment@hotmail.com ', '2014-08-04 08:34:50'),
(64, 'kce.enterprises@yahoo.com', '2014-08-04 08:34:50'),
(65, 'info@covenantbankforwomen.co.tz', '2014-08-04 08:34:50'),
(66, 'energy@tatedo.org', '2014-08-04 08:34:50'),
(67, 'anepaproducts@gmail.com', '2014-08-04 08:34:50'),
(68, 'info@thabitacollege.ac.tz', '2014-08-04 08:34:50'),
(69, 'seeco@africamail.com', '2014-08-04 08:34:50'),
(70, 'psolar@ymail.com', '2014-08-04 08:34:50'),
(71, 'kce.enterprises@yahoo.com', '2014-08-04 08:34:50'),
(72, 'reservations@ledgerplaza-baharibeach.com', '2014-08-04 08:37:07'),
(73, 'dollarama.tz.morogoro@gmail.com', '2014-08-04 08:38:05'),
(74, 'info@nabaki.com', '2014-08-04 08:38:05'),
(75, 'startimescustomercare@gmail.com', '2014-08-04 08:40:36'),
(76, 'bestbuycoms@gmail.com', '2014-08-04 08:40:36'),
(77, 'info@jaguarexperience.co.za', '2014-08-04 08:40:36'),
(78, 'maisha@bol.co.tz or saima@maishacomputer', '2014-08-04 08:40:36'),
(79, 'jwassira@hotmail.com', '2014-08-04 08:40:36'),
(80, 'info@qualitycentremall.com', '2014-08-04 08:40:36'),
(81, 'fashiondesireclothing@hotmail.co.uk', '2014-08-04 08:40:36'),
(82, 'mrkqualitymall@tz.uchumi.com', '2014-08-04 08:40:36'),
(83, 'mpalray@hotmail.com, palray@live.com', '2014-08-04 08:40:36'),
(84, 'dobeasmart@dobeagroup.co.tz', '2014-08-04 08:40:36'),
(85, 'imberuziinvestment@hotmail.com ', '2014-08-04 08:40:36'),
(86, 'kce.enterprises@yahoo.com', '2014-08-04 08:40:36'),
(87, 'info@covenantbankforwomen.co.tz', '2014-08-04 08:40:36'),
(88, 'energy@tatedo.org', '2014-08-04 08:40:36'),
(89, 'startimescustomercare@gmail.com', '2014-08-04 08:42:09'),
(90, 'bestbuycoms@gmail.com', '2014-08-04 08:42:09'),
(91, 'info@jaguarexperience.co.za', '2014-08-04 08:42:09'),
(92, 'maisha@bol.co.tz or saima@maishacomputer', '2014-08-04 08:42:09'),
(93, 'jwassira@hotmail.com', '2014-08-04 08:42:09'),
(94, 'info@qualitycentremall.com', '2014-08-04 08:45:47'),
(95, 'fashiondesireclothing@hotmail.co.uk', '2014-08-04 08:45:47'),
(96, 'mrkqualitymall@tz.uchumi.com', '2014-08-04 08:45:47'),
(97, 'mpalray@hotmail.com, palray@live.com', '2014-08-04 08:45:47'),
(98, 'dobeasmart@dobeagroup.co.tz', '2014-08-04 08:45:47'),
(99, 'imberuziinvestment@hotmail.com ', '2014-08-04 08:45:47'),
(100, 'kce.enterprises@yahoo.com', '2014-08-04 08:45:47'),
(101, 'info@covenantbankforwomen.co.tz', '2014-08-04 08:45:47'),
(102, 'energy@tatedo.org', '2014-08-04 08:45:47'),
(103, 'anepaproducts@gmail.com', '2014-08-04 08:47:31'),
(104, 'info@thabitacollege.ac.tz', '2014-08-04 08:47:31'),
(105, 'seeco@africamail.com', '2014-08-04 08:48:49'),
(106, 'psolar@ymail.com', '2014-08-04 08:48:49'),
(107, 'kce.enterprises@yahoo.com', '2014-08-04 08:48:49'),
(108, 'info@milembeinsurance.com', '2014-08-04 08:50:28'),
(109, 'info@phoenixtanzania.com', '2014-08-04 08:50:28'),
(110, 'irene@nikoinsurence.co.tz', '2014-08-04 08:50:28'),
(111, 'tnyangoro@hotmail.com', '2014-08-04 08:50:28'),
(112, 'info@gca.co.tz', '2014-08-04 08:50:28'),
(113, 'info@mgentanzania.com', '2014-08-04 08:52:24'),
(114, 'pradeeps@tz-momentumafrica.com', '2014-08-04 08:52:24'),
(115, 'info@maxinsure-tz.com', '2014-08-04 08:52:56'),
(116, 'insurance@lion-tz.com', '2014-08-04 08:52:56'),
(117, 'info@heritagetanzania.com', '2014-08-04 08:53:42'),
(118, 'enquires@firstassurance.co.tz', '2014-08-04 08:53:42'),
(119, 'dsmhq@bumacoinsurance.com', '2014-08-04 08:54:19'),
(120, 'life@alliancelife.co.tz', '2014-08-04 08:54:19'),
(121, 'info@aflife.co.tz', '2014-08-04 08:55:16'),
(122, 'info@aar.co.tz', '2014-08-04 08:55:38'),
(123, 'info@aar.co.tz', '2014-08-04 08:55:38'),
(124, 'sangare@simbanet.com', '2014-08-04 09:10:59'),
(125, 'ndengaroagencies@yahoo.com', '2014-08-04 09:10:59'),
(126, 'sendwell@hotmail.com', '2014-08-04 09:12:01'),
(127, 'mhasibuconsultants@intrafrica.com', '2014-08-04 09:12:01'),
(128, 'info@chapchaptz.com', '2014-08-04 09:12:22'),
(129, 'hammydistributors@yahoo.com', '2014-08-04 09:12:22'),
(130, 'swillae@yahoo.com', '2014-08-05 16:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `inets_project`
--

CREATE TABLE IF NOT EXISTS `inets_project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(120) NOT NULL,
  `project_description` text NOT NULL,
  `project_status` int(11) NOT NULL COMMENT '1=complete,0=on going',
  `project_logo` varchar(120) NOT NULL,
  `project_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_end_date` datetime NOT NULL,
  `project_client` varchar(120) NOT NULL COMMENT 'later will change to be client id',
  `project_skills` text NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `inets_project`
--

INSERT INTO `inets_project` (`project_id`, `project_name`, `project_description`, `project_status`, `project_logo`, `project_start_date`, `project_end_date`, `project_client`, `project_skills`) VALUES
(1, 'karibuSMS', 'Is the advertising and promotion, SMS platform, that keeps you connected to your customers with online profile and by sending SMS notifications easily to customers inform them about your services/products.', 0, 'media/images/photodune-5441478-climbing-hard-s-700x420.jpg', '2014-09-07 20:10:18', '0000-00-00 00:00:00', 'inets', ''),
(2, 'Radio and Television Streaming smart phone mobile application', 'This is an android application to be used by radio and television station to stream their radio and television program in customers having android phones(smartphones). With highly increase of android smart phone, the application use this advantage to allow android phone user all over the world to listen to radio/television program and also to share television/radio channel in social networks, record given station , view program list and set automatic notification when a program is on to start.', 0, '', '2014-09-07 20:11:27', '0000-00-00 00:00:00', '', ''),
(3, 'MAONI COLLECTION', 'The application has been used by Tanzania Constitution reform to collect constitution views from Tanzanians. The application allowed people to provide their views using their mobile phones by s the system that allows user to send their views concerning constitution by sending SMS only via their mobile phones. It provided a simple way for constitution reform to analyze ideas visually with graphs, charts and other data tools and easily communicate with people using this computerized system.', 0, '', '2014-09-07 20:12:11', '0000-00-00 00:00:00', '', ''),
(4, 'Hotleo news web based application', 'Hotleo is the special website specifically for fetching the important news all over the world and display them in a very simplified way , where you don''t use much energy to get the key points.', 0, '', '2014-09-07 20:12:53', '0000-00-00 00:00:00', '', ''),
(5, 'Local project management  application', 'This is the registration and user management software used to register users, keep their records, assign roles and track the management records. The system was designed for Mwanza engineering registration but it can be used in any similar area', 0, '', '2014-09-07 20:13:50', '0000-00-00 00:00:00', '', ''),
(6, 'Unnett', 'This is the social network for high students and universities that allow exchange of information and sharing of education resources easily. The network has more that 200 users now and it still growing .', 0, '', '2014-09-07 20:14:22', '0000-00-00 00:00:00', '', ''),
(7, 'Free prayer request', 'This is the website application that let Christians and non Christians people to post their prayer request online and pray for each other.', 0, '', '2014-09-07 20:15:01', '0000-00-00 00:00:00', 'olorphans', '');

-- --------------------------------------------------------

--
-- Table structure for table `inets_service`
--

CREATE TABLE IF NOT EXISTS `inets_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(120) NOT NULL,
  `service_description` text NOT NULL,
  `service_skills` text NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `inets_service`
--

INSERT INTO `inets_service` (`service_id`, `service_name`, `service_description`, `service_skills`) VALUES
(1, 'SOFTWARE/WEB DESIGN AND DEVELOPMENT', 'We design and develop website  and web application via international standards and engineering ethics to meet your needs.', ''),
(2, 'DATABASE DESIGN', 'Focus on high scale multiuser support and transactions abilities to be used in Banks and other institutions.  We are expert in MYSQL, Oracle, Postgres, CautchDB and other databases', ''),
(3, 'MOBILE APPLICATIONS', 'We develop applications to runs on smart phones (phone with touch screen), USSD mobile application, SMS solutions apps and SIM card applications.', ''),
(4, 'ELECTRONICS CIRCUIT DESIGN', 'We deal with control systems design in Telecommunication and electronics engineering with skills in microcontroller programming, automation and security systems.', '');

-- --------------------------------------------------------

--
-- Table structure for table `inets_testimony`
--

CREATE TABLE IF NOT EXISTS `inets_testimony` (
  `testimony_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimony_user_name` varchar(40) NOT NULL,
  `testimony_content` text NOT NULL,
  `testimony_posted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `testimony_accepted` int(11) NOT NULL COMMENT '1=can be shown, 0=not approved',
  `testimony_company` varchar(60) NOT NULL,
  `testimony_user_picture` varchar(120) NOT NULL,
  PRIMARY KEY (`testimony_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `inets_testimony`
--

INSERT INTO `inets_testimony` (`testimony_id`, `testimony_user_name`, `testimony_content`, `testimony_posted_time`, `testimony_accepted`, `testimony_company`, `testimony_user_picture`) VALUES
(1, 'Krants Mwantepele', 'karibuSMS is the best product to be used in tanzania and in the world in general', '2014-09-07 21:03:47', 1, 'mwanaharakati mzalendo', ''),
(2, 'Ninatubu Lema', 'This prepaid metering project, is useful and can be used not only in energy meters but in gas meters also', '2014-09-07 21:07:21', 1, 'ERB', '');

-- --------------------------------------------------------

--
-- Table structure for table `inets_user`
--

CREATE TABLE IF NOT EXISTS `inets_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(15) NOT NULL,
  `user_lastname` varchar(15) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(90) NOT NULL,
  `user_position` varchar(30) NOT NULL,
  `user_task` text NOT NULL,
  `user_phone_number` varchar(20) NOT NULL,
  `user_skills` text NOT NULL,
  `user_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_country` varchar(30) NOT NULL,
  `user_location` varchar(30) NOT NULL,
  `user_collage` varchar(30) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `inets_user`
--

INSERT INTO `inets_user` (`user_id`, `user_firstname`, `user_lastname`, `user_gender`, `user_email`, `user_password`, `user_position`, `user_task`, `user_phone_number`, `user_skills`, `user_time`, `user_country`, `user_location`, `user_collage`, `user_role_id`) VALUES
(1, 'Peter Steven', 'Marusu', 'male', 'petermarusu@gmail.com', '', 'programmer', '', '255769589565', 'php,jquery,html5', '2014-05-31 04:52:59', '', '', 'Coict', 0),
(2, '', '', '', 'joramkimata@gmail.com', '', 'programming', '', '', '', '2014-05-31 04:56:58', '', '', '', 0),
(3, '', '', '', 'evaristusmaduhu@gmail.com', '', 'programming', '', '', '', '2014-05-31 04:56:58', '', '', '', 0),
(4, '', '', '', 'wnouswey@yahoo.com ', '', 'programming', '', '', '', '2014-05-31 04:57:48', '', '', '', 0),
(5, '', '', '', 'nsunzajr1@gmail.com', '', 'programming', '', '', '', '2014-05-31 04:57:48', '', '', '', 0),
(6, '', '', '', 'mfaume5188mohdm@gmail.com', '', 'Interface design', '', '', '', '2014-05-31 04:58:50', '', '', '', 0),
(7, '', '', '', 'katabazibrighton@yahoo.com', '', 'Interface design', '', '', '', '2014-05-31 04:58:50', '', '', '', 0),
(8, '', '', '', 'kessyevaline@gmail.com', '', 'programming', '', '', '', '2014-05-31 04:59:17', '', '', '', 0),
(9, '', '', '', 'crisantusmumburi@yahoo.com', '', 'programming', '', '', '', '2014-05-31 04:59:17', '', '', '', 0),
(10, '', '', '', 'iannashin@gmail.com', '', 'programming', '', '', '', '2014-05-31 04:59:58', '', '', '', 0),
(11, '', '', '', 'maranduson@gmail.com', '', 'programming', '', '', '', '2014-05-31 04:59:58', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inets_user_role`
--

CREATE TABLE IF NOT EXISTS `inets_user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_name` varchar(15) NOT NULL,
  `user_role_assigned_by` int(11) NOT NULL,
  `user_role_assigned_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
