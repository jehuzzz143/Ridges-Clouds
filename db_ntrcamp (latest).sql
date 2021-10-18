-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql205.byetcluster.com
-- Generation Time: Oct 17, 2021 at 10:30 PM
-- Server version: 5.7.34-37
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_29489773_db_ntrcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `appID` varchar(500) NOT NULL,
  `title` text,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `text_color` varchar(191) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `appID`, `title`, `start_event`, `end_event`, `color`, `text_color`) VALUES
(174, '182', 'Bryan, Dollentas | Daytour | 1 | Pending', '2021-08-07 07:08:00', '2021-08-07 10:08:00', '#000000', '#FFFFFF'),
(175, '176', 'Bryan, Dollentas | Overnight |  || C1 ', '2021-08-04 14:00:00', '2021-08-06 12:00:00', '#000000', '#FFFFFF'),
(176, '183', 'Bryan, Dollentas | Daytour | 3 | Pending', '2021-09-11 10:09:00', '2021-09-11 13:09:00', '#000000', '#FFFFFF'),
(177, '184', 'Bryan, Dollentas | Daytour | 3 | Pending', '2021-09-30 10:09:00', '2021-09-30 13:09:00', '#000000', '#FFFFFF'),
(178, '190', 'Bryan, Dollentas | Overnight |  || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9 ', '2021-09-28 14:00:00', '2021-09-29 12:00:00', '#3498DB', '#FDFEFE'),
(179, '191', 'Bryan, Dollentas | Overnight  || C1   || Sunrise Breakfast  ||  Veranda ', '2021-09-29 14:00:00', '2021-09-30 12:00:00', '#000000', '#FFFFFF'),
(180, '192', 'Bryan, Dollentas | Overnight |  || C2 ', '2021-09-29 14:00:00', '2021-09-30 12:00:00', '#3498DB', '#FDFEFE'),
(181, '209', 'Bryan, Dollentas | Daytour | 2 | Pending', '2021-10-21 10:10:00', '2021-10-21 13:10:00', '#FF5733', 'white'),
(182, '210', 'Bryan, Dollentas | Daytour | 2 | Pending', '2021-09-28 07:09:00', '2021-09-28 10:09:00', '#FF5733', 'white'),
(183, '211', 'Bryan, Dollentas | Daytour | 2 | Pending', '2021-09-30 13:09:00', '2021-09-30 16:09:00', '#FF5733', 'white'),
(184, '212', 'jehu, ombrog | Daytour | 1 | Pending', '2021-09-30 10:09:00', '2021-09-30 13:09:00', '#000000', '#FFFFFF'),
(185, '224', 'Bryan, Dollentas | Daytour | 2 | Pending', '2021-10-06 10:10:00', '2021-10-06 13:10:00', '#000000', '#FFFFFF'),
(186, '229', 'jehu, ombrog | Daytour | 1 | Pending', '2021-10-12 07:10:00', '2021-10-12 10:10:00', '#000000', '#FFFFFF'),
(187, '231', 'jehu, ombrog | Daytour | 1 | Pending', '2021-10-10 13:10:00', '2021-10-10 16:10:00', '#FF5733', 'white'),
(188, '223', 'jehu, ombrog | Daytour | 2 | Pending', '2021-10-07 07:10:00', '2021-10-07 10:10:00', '#FF5733', 'white'),
(189, '232', 'leica, balayanto | Daytour | 2 | Pending', '2021-10-11 07:10:00', '2021-10-11 10:10:00', '#FF5733', 'white'),
(190, '233', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-11 07:10:00', '2021-10-11 10:10:00', '#000000', '#FFFFFF'),
(191, '233', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-11 07:10:00', '2021-10-11 10:10:00', '#000000', '#FFFFFF'),
(192, '234', 'leica, balayanto | Overnight |  || C9 ', '2021-10-11 14:00:00', '2021-10-12 12:00:00', '#3498DB', '#FDFEFE'),
(193, '235', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '#FF5733', 'white'),
(194, '235', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '#FF5733', 'white'),
(195, '235', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '#FF5733', 'white'),
(196, '235', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '#FF5733', 'white'),
(197, '236', 'jehu, ombrog | Daytour | 1 | Pending', '2021-10-11 07:10:00', '2021-10-11 10:10:00', '#FF5733', 'white'),
(198, '237', 'jehu, ombrog | Daytour | 1 | Pending', '2021-10-11 10:10:00', '2021-10-11 13:10:00', '#FF5733', 'white'),
(199, '238', 'leica, balayanto | Overnight |  || C2 ', '2021-10-11 14:00:00', '2021-10-12 12:00:00', '#3498DB', '#FDFEFE'),
(200, '241', 'jehu, ombrog | Overnight  || C3   || Sunrise Breakfast  ||  Veranda ', '2021-10-14 14:00:00', '2021-10-15 12:00:00', '#3498DB', '#FDFEFE'),
(201, '244', 'leica, balayanto | Daytour | 1 | Pending', '2021-10-15 07:10:00', '2021-10-15 10:10:00', '#000000', '#FFFFFF'),
(202, '245', 'jehu, ombrog | Daytour | 2 | Pending', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '#000000', '#FFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetID` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetID`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(0, 'jeombrog@student.fatima.edu.ph', '79c708fa51019847', '$2y$10$loBvPzOTM8b3DOYe3KXPzOJRBDT4PnvZcmwEipkRyQSvvvLm6p8fu', '1632892996'),
(0, 'kazuto564@gmail.com', 'fb6ada99c55d093b', '$2y$10$a3S.BzC.eZVXq7c.PaRRE./aco3L2vjkQH3asc5yoiiTCqKHPrjL6', '1632893115'),
(0, 'stevenmoran143@gmail.com', '9caaf30b4cab93b9', '$2y$10$SBS3BhARiyG97MXTi5YWruS66Xhira3YDTkBqkkDpDB0fzhC5R.0a', '1632988738'),
(0, 'jehuzzz143@gmail.com', '3070481cda07f7e8', '$2y$10$iOG6rzeGTTYdxuCS5XkPNey46BT6yImZqiP9jVWz3v3PNMROmFHXu', '1632988748');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `ID` int(11) NOT NULL,
  `header` varchar(500) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `start` datetime NOT NULL,
  `endd` datetime NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`ID`, `header`, `Description`, `start`, `endd`, `status`) VALUES
(11, 'close', 'zxczcxz', '2021-10-06 14:49:00', '2021-12-06 14:49:00', 'inactive'),
(12, '!! Updates on RaC operations while on MECQ up to 15October 2021!!   ', 'Due to inconsistent checkpoint requirements during MECQ, we accept WALK-IN guests who are able to pass thru checkpoints. Guests with APOR IDs or who are Rizal residents are usually allowed. Checkpoint operations are usually  from 7am-3pm along Marilaque Highway, just 5 mins before Ridges and Clouds.\r\n', '2021-10-09 18:23:00', '2021-12-25 18:23:00', 'active'),
(9, 'Medical Certification is requiredd', 'We are happy to announce that we are now allowed to re-open under MGCQ by virtue of the Certificate to Operate granted by the Department of Tourism to our establishment.', '2021-09-16 19:04:00', '2021-12-28 19:04:00', 'inactive'),
(10, 'The camp is closed due to maintenance', 'The camp willnow having a dining area where we need to close the camp for a month for better service in the future', '2021-09-17 19:07:00', '2021-12-27 19:07:00', 'deleted'),
(13, 'SAFETY AND HEALTH PROTOCOLS', '• Only 18-65 years old are allowed <BR>\r\n• Pregnant women and persons with comorbities not allowed<BR>\r\n• No face mask No Entry<br>\r\n• Social distancing and wearing of mask are strictly observed<br>\r\n', '2021-10-09 18:27:00', '2021-12-25 18:27:00', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit`
--

CREATE TABLE `tbl_audit` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Date_edit` date NOT NULL,
  `Name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_audit`
--

INSERT INTO `tbl_audit` (`ID`, `UserID`, `Description`, `Date_edit`, `Name`, `type`) VALUES
(135, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(134, 'CSTMR22', 'Posted review of \'', '2021-10-06', 'Cyril, Samonte', ''),
(133, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(132, 'CSTMR22', 'Posted review of \'', '2021-10-06', 'Cyril, Samonte', ''),
(131, 'CSTMR22', 'update review ID: 5 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(130, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(129, 'CSTMR22', 'update review ID: 6 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(128, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(120, 'CSTMR10', 'Update  Standard Couple Cabana accomodation Details', '2021-10-06', 'pol, garcia', 'Information'),
(119, 'CSTMR10', 'update review ID: 5 status to disabled', '2021-10-06', 'pol, garcia', ''),
(118, 'CSTMR10', 'update review ID: 7 status to enable', '2021-10-06', 'pol, garcia', ''),
(117, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-03', 'pol, garcia', 'System'),
(116, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-02', 'pol, garcia', 'System'),
(115, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-02', 'pol, garcia', 'System'),
(109, 'CSTMR10', 'Delete photo id: 25 ', '2021-10-01', 'pol, garcia', 'Information'),
(108, 'CSTMR10', 'Added new photo in gallery: ', '2021-10-01', 'pol, garcia', 'Information'),
(107, 'CSTMR10', 'Update promo code : RNC10', '2021-10-01', 'pol, garcia', 'Information'),
(106, 'CSTMR10', 'disable promo code : DAY50', '2021-10-01', 'pol, garcia', 'system'),
(105, 'CSTMR10', 'Create new promo code : PRM30', '2021-10-01', 'pol, garcia', 'system'),
(104, 'CSTMR10', 'Generate sales report from: 2021-02-01 to 2021-11-31', '2021-10-01', 'pol, garcia', 'system'),
(103, 'CSTMR10', 'Export Database Copy', '2021-10-01', 'pol, garcia', 'system'),
(56, 'CSTMR10', 'Decline Booking ID: 198 ', '2021-09-22', 'Bryan, Dollentas', 'Booking'),
(57, 'CSTMR10', 'Confirm Overnight Booking ID: 190 ', '2021-09-22', 'Bryan, Dollentas', 'Booking'),
(58, 'CSTMR10', 'Decline Booking ID: 199 ', '2021-09-22', 'Bryan, Dollentas', 'Booking'),
(59, 'CSTMR10', 'Confirm Overnight Booking ID: 191 ', '2021-09-22', 'Bryan, Dollentas', 'Booking'),
(114, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-02', 'pol, garcia', 'System'),
(63, 'CSTMR10', 'Announce ID: 9 Updated', '2021-09-22', 'pol, garcia', 'Information'),
(64, 'CSTMR10', 'Delete Announcement ID: 10', '2021-09-22', 'pol, garcia', 'Information'),
(65, 'CSTMR10', 'Archive Announcement ID: 9', '2021-09-22', 'pol, garcia', 'Information'),
(66, 'CSTMR10', 'Recover Announcement ID: 9', '2021-09-22', 'pol, garcia', 'Information'),
(67, 'CSTMR20', 'Confirm Overnight Booking ID: 192 ', '2021-09-22', 'Steven, Moran', 'Booking'),
(102, 'CSTMR10', 'Generate sales report from: 2021-02-01 to 2021-11-31', '2021-10-01', 'pol, garcia', 'system'),
(101, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-01', 'pol, garcia', 'system'),
(71, 'CSTMR10', 'Confirm Daytour Booking ID: 209 ', '2021-09-27', 'pol, garcia', 'Booking'),
(72, 'CSTMR10', 'Decline Booking ID: 202 ', '2021-09-27', 'Bryan, Dollentas', 'Booking'),
(73, 'CSTMR10', 'Decline Booking ID: 204 ', '2021-09-27', 'Bryan, Dollentas', 'Booking'),
(74, 'CSTMR10', 'Confirm Daytour Booking ID: 210 ', '2021-09-27', 'pol, garcia', 'Booking'),
(75, 'CSTMR10', 'Confirm Daytour Booking ID: 211 ', '2021-09-27', 'pol, garcia', 'Booking'),
(76, 'CSTMR10', 'Confirm Daytour Booking ID: 212 ', '2021-09-29', 'pol, garcia', 'Booking'),
(77, 'CSTMR10', 'Finish Booking ID:  transaction', '2021-09-29', 'pol, garcia', 'Booking'),
(113, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-02', 'pol, garcia', 'System'),
(112, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-02', 'pol, garcia', 'System'),
(111, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-02', 'pol, garcia', 'System'),
(84, 'CSTMR10', 'Confirm Overnight Booking ID:  ', '2021-10-01', 'pol, garcia', 'system'),
(110, 'CSTMR10', 'Generate sales report from: 2021-01-01 to 2021-12-31', '2021-10-02', 'pol, garcia', 'System'),
(86, 'CSTMR10', 'Generate sales report from: 2021-06-01 to 2021-11-31', '2021-10-01', 'pol, garcia', 'system'),
(87, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(88, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(89, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(90, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(91, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(92, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(93, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-10-31', '2021-10-01', 'pol, garcia', 'system'),
(127, 'CSTMR22', 'update review ID: 6 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(126, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(125, 'CSTMR22', 'update review ID: 6 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(124, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(123, 'CSTMR22', 'update review ID: 5 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(122, 'CSTMR22', 'Posted review of  ', '2021-10-06', 'Cyril, Samonte', ''),
(121, 'CSTMR22', 'update review ID: 5 status to enable', '2021-10-06', 'Cyril, Samonte', ''),
(136, 'CSTMR22', 'Posted review of \'', '2021-10-06', 'Cyril, Samonte', ''),
(137, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(138, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(139, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(140, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(141, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(142, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(143, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(144, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(145, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(146, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(147, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(148, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(149, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(150, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(151, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(152, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(153, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(154, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(155, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(156, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(157, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(158, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(159, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(160, 'CSTMR22', 'Posted review of ', '2021-10-06', 'Cyril, Samonte', ''),
(161, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(162, 'CSTMR22', 'update review ID: 4 status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(163, 'CSTMR22', 'Posted review of Bryan', '2021-10-06', 'Cyril, Samonte', ''),
(164, 'CSTMR22', 'Remove costumer review of Bryan Dollentas - status to disabled', '2021-10-06', 'Cyril, Samonte', ''),
(165, 'CSTMR22', 'Posted review of costumer named Bryan Dollentas - status to enable', '2021-10-06', 'Cyril, Samonte', ''),
(166, 'CSTMR10', 'Remove costumer review of jehu ombrog - status to disabled', '2021-10-06', 'pol, garcia', ''),
(167, 'CSTMR10', 'Posted review of costumer named jehu ombrog - status to enable', '2021-10-06', 'pol, garcia', ''),
(168, 'CSTMR10', 'Confirm Daytour Booking ID: 224 ', '2021-10-06', 'pol, garcia', 'booking'),
(169, 'CSTMR10', 'Finish Booking ID:  transaction', '2021-10-06', 'pol, garcia', 'booking'),
(170, 'CSTMR10', 'Archive Announcement ID: 9', '2021-10-06', 'pol, garcia', 'Information'),
(171, 'CSTMR10', 'Add new Announcement ', '2021-10-06', 'pol, garcia', 'announcement'),
(172, 'CSTMR10', 'Delete photo id: 14', '2021-10-06', 'pol, garcia', 'Information'),
(173, 'CSTMR10', 'Update promo code : RNC10', '2021-10-06', 'pol, garcia', 'Information'),
(174, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-11-31', '2021-10-06', 'pol, garcia', 'System'),
(175, 'CSTMR10', 'Export Database Copy', '2021-10-06', 'pol, garcia', 'System'),
(176, 'CSTMR10', 'Remove costumer review of Bryan Dollentas - status to disabled', '2021-10-07', 'pol, garcia', ''),
(177, 'CSTMR10', 'Posted review of costumer named Bryan Dollentas - status to enable', '2021-10-07', 'pol, garcia', ''),
(178, 'CSTMR10', 'Archive Announcement ID: 11', '2021-10-09', 'pol, garcia', 'Information'),
(179, 'CSTMR10', 'Add new Announcement ', '2021-10-09', 'pol, garcia', 'announcement'),
(180, 'CSTMR10', 'Change Announcement ID: 12', '2021-10-09', 'pol, garcia', 'Information'),
(181, 'CSTMR10', 'Change Announcement ID: 12', '2021-10-09', 'pol, garcia', 'Information'),
(182, 'CSTMR10', 'Add new Announcement ', '2021-10-09', 'pol, garcia', 'announcement'),
(183, 'CSTMR10', 'Change Announcement ID: 12', '2021-10-09', 'pol, garcia', 'Information'),
(184, 'CSTMR10', 'Confirm Daytour Booking ID: 229 ', '2021-10-09', 'pol, garcia', 'booking'),
(185, 'CSTMR10', 'Finish Booking ID:  transaction', '2021-10-09', 'pol, garcia', 'booking'),
(186, 'CSTMR10', 'Confirm Daytour Booking ID: 231 ', '2021-10-09', 'pol, garcia', 'booking'),
(187, 'CSTMR10', 'Export Database Copy', '2021-10-09', 'pol, garcia', 'System'),
(188, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-11-31', '2021-10-09', 'pol, garcia', 'System'),
(189, 'CSTMR10', 'Confirm Daytour Booking ID: 223 ', '2021-10-09', 'pol, garcia', 'booking'),
(190, 'CSTMR10', 'Remove costumer review of Bryan Dollentas - status to disabled', '2021-10-09', 'pol, garcia', ''),
(191, 'CSTMR10', 'Remove costumer review of Bryan Dollentas - status to disabled', '2021-10-09', 'pol, garcia', ''),
(192, 'CSTMR10', 'Remove costumer review of jehu ombrog - status to disabled', '2021-10-09', 'pol, garcia', ''),
(193, 'CSTMR10', 'Archive Announcement ID: 13', '2021-10-10', 'pol, garcia', 'Information'),
(194, 'CSTMR10', 'Posted review of costumer named jehu ombrog - status to enable', '2021-10-10', 'pol, garcia', ''),
(195, 'CSTMR10', 'Update promo code : RNC10', '2021-10-10', 'pol, garcia', 'Information'),
(196, 'CSTMR10', 'Create new promo code : PWD', '2021-10-10', 'pol, garcia', 'system'),
(197, 'CSTMR10', 'Update promo code : PWD', '2021-10-10', 'pol, garcia', 'Information'),
(198, 'CSTMR10', 'Confirm Daytour Booking ID: 232 ', '2021-10-10', 'pol, garcia', 'booking'),
(199, 'CSTMR10', 'Confirm Daytour Booking ID: 233 ', '2021-10-10', 'pol, garcia', 'booking'),
(200, 'CSTMR10', 'Finish Booking ID:  transaction', '2021-10-10', 'pol, garcia', 'booking'),
(201, 'CSTMR10', 'Confirm Overnight Booking ID: 234 ', '2021-10-10', 'pol, garcia', 'booking'),
(202, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-11-31', '2021-10-10', 'pol, garcia', 'System'),
(203, 'CSTMR10', 'Export Database Copy', '2021-10-10', 'pol, garcia', 'System'),
(204, 'CSTMR10', 'add new aminities named as =tent  ', '2021-10-10', 'pol, garcia', 'Information'),
(205, 'CSTMR10', 'Confirm Daytour Booking ID: 237 ', '2021-10-10', 'pol, garcia', 'booking'),
(206, 'CSTMR10', 'Delete photo id: 15', '2021-10-11', 'pol, garcia', 'Information'),
(207, 'CSTMR10', 'Delete photo id: 17', '2021-10-11', 'pol, garcia', 'Information'),
(208, 'CSTMR10', 'Delete photo id: 18', '2021-10-11', 'pol, garcia', 'Information'),
(209, 'CSTMR10', 'Delete photo id: 19', '2021-10-11', 'pol, garcia', 'Information'),
(210, 'CSTMR10', 'Delete photo id: 20', '2021-10-11', 'pol, garcia', 'Information'),
(211, 'CSTMR10', 'Delete photo id: 23', '2021-10-11', 'pol, garcia', 'Information'),
(212, 'CSTMR10', 'Added new photo in gallery', '2021-10-11', 'pol, garcia', 'Information'),
(213, 'CSTMR10', 'Added new photo in gallery', '2021-10-11', 'pol, garcia', 'Information'),
(214, 'CSTMR10', 'Added new photo in gallery', '2021-10-11', 'pol, garcia', 'Information'),
(215, 'CSTMR10', 'Delete photo id: 21', '2021-10-11', 'pol, garcia', 'Information'),
(216, 'CSTMR10', 'Added new photo in gallery', '2021-10-11', 'pol, garcia', 'Information'),
(217, 'CSTMR10', 'Added new photo in gallery', '2021-10-11', 'pol, garcia', 'Information'),
(218, 'CSTMR10', 'Delete photo id: 30', '2021-10-11', 'pol, garcia', 'Information'),
(219, 'CSTMR10', 'Delete photo id: 29', '2021-10-11', 'pol, garcia', 'Information'),
(220, 'CSTMR10', 'Added new photo in gallery', '2021-10-11', 'pol, garcia', 'Information'),
(221, 'CSTMR10', 'Delete photo id: 27', '2021-10-11', 'pol, garcia', 'Information'),
(222, 'CSTMR10', 'Recover Announcement ID: 9', '2021-10-11', 'pol, garcia', 'Information'),
(223, 'CSTMR10', 'Delete photo id: 13', '2021-10-11', 'pol, garcia', 'Information'),
(224, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garcia', 'Information'),
(225, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garcia', 'Information'),
(226, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garcia', 'Information'),
(227, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garcia', 'Information'),
(228, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garcia', 'Information'),
(229, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garcia', 'Information'),
(230, 'CSTMR10', 'Update  Standard Couple Cabana    accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(231, 'CSTMR10', 'Update  Standard Couple Cabana     accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(232, 'CSTMR10', 'Update  Standard Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(233, 'CSTMR10', 'Update  Standard Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(234, 'CSTMR10', 'Update  Standard Couple Cabana      accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(235, 'CSTMR10', 'Update  Standard Couple Cabana   accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(236, 'CSTMR10', 'Update  Standard Couple Cabana   accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(237, 'CSTMR10', 'Update  Standard Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(238, 'CSTMR10', 'Update  Standard Couple Cabana   accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(239, 'CSTMR10', 'Update  De Luxe Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(240, 'CSTMR10', 'Update  De Luxe Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(241, 'CSTMR10', 'Update  De Luxe Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(242, 'CSTMR10', 'Update  De Luxe Couple Cabana  accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(243, 'CSTMR10', 'Update  Twin Ifugao House   accomodation Details', '2021-10-12', 'pol, garcia', 'Information'),
(244, 'CSTMR10', 'Confirm Overnight Booking ID: 241 ', '2021-10-12', 'pol, garcia', 'booking'),
(245, 'CSTMR10', 'Update photo id: ', '2021-10-12', 'pol, garciaa', 'Information'),
(246, 'CSTMR10', 'Create new promo code : QWERT', '2021-10-12', 'pol, garciaa', 'system'),
(247, 'CSTMR10', 'Confirm Daytour Booking ID: 244 ', '2021-10-12', 'pol, garciaa', 'booking'),
(248, 'CSTMR10', 'Finish Booking ID:  transaction', '2021-10-12', 'pol, garciaa', 'booking'),
(249, 'CSTMR10', 'Export Database Copy', '2021-10-12', 'pol, garciaa', 'System'),
(250, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-11-31', '2021-10-12', 'pol, garciaa', 'System'),
(251, 'CSTMR10', 'disable promo code : PWD', '2021-10-12', 'pol, garciaa', 'Information'),
(252, 'CSTMR10', 'Confirm Daytour Booking ID: 245 ', '2021-10-13', 'pol, garciaa', 'booking'),
(253, 'CSTMR10', 'Finish Booking ID:  transaction', '2021-10-13', 'pol, garciaa', 'booking'),
(254, 'CSTMR10', 'Archive Announcement ID: 9', '2021-10-13', 'pol, garciaa', 'Information'),
(255, 'CSTMR10', 'Update  Standard Couple Cabana       accomodation Details', '2021-10-13', 'pol, garciaa', 'Information'),
(256, 'CSTMR10', 'Added new photo in gallery', '2021-10-13', 'pol, garciaa', 'Information'),
(257, 'CSTMR10', 'Update promo code : ZZZZ', '2021-10-13', 'pol, garciaa', 'Information'),
(258, 'CSTMR10', 'Generate sales report from: 2021-09-01 to 2021-11-31', '2021-10-13', 'pol, garciaa', 'System'),
(259, 'CSTMR10', 'Export Database Copy', '2021-10-13', 'pol, garciaa', 'System');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `ID` int(250) NOT NULL,
  `customerID` varchar(100) NOT NULL,
  `bpax` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `btype` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `broom` varchar(100) NOT NULL DEFAULT ' ',
  `btable_date` varchar(100) DEFAULT NULL,
  `btable_time` varchar(100) DEFAULT NULL,
  `datecategory` varchar(150) NOT NULL DEFAULT ' ',
  `btime_in` datetime NOT NULL,
  `btime_out` datetime NOT NULL,
  `bdaytourtime` varchar(100) DEFAULT ' ',
  `bprice` int(11) NOT NULL,
  `bdeposit` int(11) NOT NULL DEFAULT '0',
  `balance` float NOT NULL,
  `bstatus` varchar(100) NOT NULL,
  `regsdate` date DEFAULT NULL,
  `review` int(11) NOT NULL DEFAULT '0',
  `paymentPhoto` varchar(500) DEFAULT NULL,
  `promo_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`ID`, `customerID`, `bpax`, `bname`, `btype`, `bdate`, `broom`, `btable_date`, `btable_time`, `datecategory`, `btime_in`, `btime_out`, `bdaytourtime`, `bprice`, `bdeposit`, `balance`, `bstatus`, `regsdate`, `review`, `paymentPhoto`, `promo_id`) VALUES
(176, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-08-04', ' || C1 ', '', '', '', '2021-08-04 14:00:00', '2021-08-06 12:00:00', '', 3500, 3500, 0, 'Completed', NULL, 0, '1.jpg', NULL),
(179, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-08-06', ' || C1 ', '', '', '', '2021-08-06 14:00:00', '2021-08-08 12:00:00', '', 3500, 0, 3500, 'Declined', NULL, 0, '122222222.jpg', NULL),
(180, 'CSTMR11', 3, 'Bryan Dollentas', 'Overnight', '2021-08-06', ' || C2 ', '', '', '', '2021-08-06 14:00:00', '2021-08-07 12:00:00', '', 4010, 0, 4010, 'Declined', NULL, 0, 'Gall (1).jpg', NULL),
(181, 'CSTMR11', 2, ' Dollentas', 'Daytour', '2021-08-05', '', '', '', '', '2021-08-05 07:08:00', '2021-08-05 10:08:00', '07:00 am to 10:00 am', 400, 0, 400, 'Declined', NULL, 0, '', NULL),
(182, 'CSTMR11', 1, ' Dollentas', 'Daytour', '2021-08-07', '', '', '', '', '2021-08-07 07:08:00', '2021-08-07 10:08:00', '07:00 am to 10:00 am', 200, 200, 0, 'Completed', NULL, 1, '198527104_209070164407119_5404744244341061790_n.jpg', NULL),
(183, 'CSTMR11', 3, ' Dollentas', 'Daytour', '2021-09-11', '', '', '', '', '2021-09-11 10:09:00', '2021-09-11 13:09:00', '10:00 am to 13:00 pm', 600, 600, 0, 'Completed', NULL, 1, 'selfie.jpg', NULL),
(184, 'CSTMR11', 3, ' Dollentas', 'Daytour', '2021-09-30', '', '', '', '', '2021-09-30 10:09:00', '2021-09-30 13:09:00', '10:00 am to 13:00 pm', 600, 600, 0, 'Completed', NULL, 1, '', NULL),
(185, 'CSTMR11', 0, ' Dollentas', 'Daytour', '2021-09-16', '', '', '', '', '2021-09-16 07:09:00', '2021-09-16 10:09:00', '07:00 am to 10:00 am', 0, 0, 0, 'Declined', NULL, 0, '', NULL),
(186, 'CSTMR11', 13, 'Bryan Dollentas', 'Daytour', '2021-09-14', '', '', '', '', '2021-09-14 13:09:00', '2021-09-14 16:09:00', '13:00 pm to 16:00 pm', 2600, 0, 2600, 'Declined', NULL, 0, '', NULL),
(187, 'CSTMR11', 17, 'Bryan Dollentas', 'Daytour', '2021-09-17', '', '', '', '', '2021-09-17 07:09:00', '2021-09-17 10:09:00', '07:00 am to 10:00 am', 3400, 0, 3400, 'Declined', NULL, 0, '', NULL),
(188, 'CSTMR11', 17, 'Bryan Dollentas', 'Daytour', '2021-09-16', '', '', '', '', '2021-09-16 07:09:00', '2021-09-16 10:09:00', '07:00 am to 10:00 am', 3400, 0, 3400, 'Declined', NULL, 0, '', NULL),
(189, 'CSTMR11', 12, 'Bryan Dollentas', 'Daytour', '2021-09-16', '', '', '', '', '2021-09-16 07:09:00', '2021-09-16 10:09:00', '07:00 am to 10:00 am', 2400, 0, 2400, 'Declined', NULL, 0, '', NULL),
(190, 'CSTMR11', 2, 'Bryan Dollentas', 'Overnight', '2021-09-28', ' || C1  || C2  || C3  || C4  || C5  || C6  || C7  || C8  || C9 ', '', '', '', '2021-09-28 14:00:00', '2021-09-29 12:00:00', '', 39010, 20000, 19010, 'Confirmed', NULL, 0, '', NULL),
(191, 'CSTMR11', 1, 'Bryan Dollentas', 'Overnight', '2021-09-29', ' || C1 ', ' ||  Veranda ', '3am to 4pm', ' || Sunrise Breakfast', '2021-09-29 14:00:00', '2021-09-30 12:00:00', '', 4500, 4500, 0, 'Completed', NULL, 0, '', NULL),
(192, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-09-29', ' || C2 ', '', '', '', '2021-09-29 14:00:00', '2021-09-30 12:00:00', '', 3010, 1500, 1510, 'Confirmed', NULL, 0, '', NULL),
(202, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-09-25', ' || C2 ', '', '', '', '2021-09-25 14:00:00', '2021-09-28 12:00:00', '', 2510, 0, 2510, 'Declined', NULL, 0, 'iPhone 7073.JPG', NULL),
(231, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-10-10', '', '', '', '', '2021-10-10 13:10:00', '2021-10-10 16:10:00', '13:00 pm to 16:00 pm', 200, 100, 100, 'Confirmed', NULL, 0, '', NULL),
(197, 'CSTMR11', 1, 'Bryan Dollentas', 'Daytour', '2021-09-18', '', '', '', '', '2021-09-18 10:09:00', '2021-09-18 13:09:00', '10:00 am to 13:00 pm', 200, 0, 200, 'Declined', NULL, 0, '', NULL),
(198, 'CSTMR11', 1, 'Bryan Dollentas', 'Daytour', '2021-09-18', '', '', '', '', '2021-09-18 13:09:00', '2021-09-18 16:09:00', '13:00 pm to 16:00 pm', 200, 0, 200, 'Declined', NULL, 0, '', NULL),
(199, 'CSTMR11', 1, 'Bryan Dollentas', 'Daytour', '2021-09-18', '', '', '', '', '2021-09-18 13:09:00', '2021-09-18 16:09:00', '13:00 pm to 16:00 pm', 200, 0, 200, 'Declined', NULL, 0, '', NULL),
(200, 'CSTMR11', 1, 'Bryan Dollentas', 'Daytour', '2021-09-18', '', '', '', '', '2021-09-18 13:09:00', '2021-09-18 16:09:00', '13:00 pm to 16:00 pm', 200, 0, 200, 'Declined', NULL, 0, '', NULL),
(201, 'CSTMR11', 1, 'Bryan Dollentas', 'Daytour', '2021-09-23', '', '', '', '', '2021-09-23 13:09:00', '2021-09-23 16:09:00', '13:00 pm to 16:00 pm', 200, 0, 200, 'Declined', NULL, 0, '', NULL),
(204, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-09-23', ' || C2 ', '', '', '', '2021-09-23 14:00:00', '2021-09-24 12:00:00', '', 2510, 0, 2510, 'Declined', NULL, 0, '', NULL),
(227, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-10-29', ' || C7  || C8  || C9 ', '', '', '', '2021-10-29 14:00:00', '2021-11-01 12:00:00', '', 18000, 0, 18000, 'Pending', NULL, 0, '', NULL),
(229, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-10-12', '', '', '', '', '2021-10-12 07:10:00', '2021-10-12 10:10:00', '07:00 am to 10:00 am', 200, 200, 0, 'Completed', NULL, 0, 'postal back.jpg', NULL),
(226, 'CSTMR11', 0, 'Bryan Dollentas', 'Overnight', '2021-10-28', ' || C1  || C2  || C3 ', '', '', '', '2021-10-28 14:00:00', '2021-10-31 12:00:00', '', 9010, 0, 9010, 'Pending', NULL, 0, '', NULL),
(209, 'CSTMR11', 2, 'Bryan Dollentas', 'Daytour', '2021-10-21', '', '', '', '', '2021-10-21 10:10:00', '2021-10-21 13:10:00', '10:00 am to 13:00 pm', 400, 200, 200, 'Confirmed', NULL, 0, '', NULL),
(210, 'CSTMR11', 2, 'Bryan Dollentas', 'Daytour', '2021-09-28', '', '', '', '', '2021-09-28 07:09:00', '2021-09-28 10:09:00', '07:00 am to 10:00 am', 300, 200, 100, 'Confirmed', NULL, 0, 'signs.jpg', 11),
(211, 'CSTMR11', 2, 'Bryan Dollentas', 'Daytour', '2021-09-30', '', '', '', '', '2021-09-30 13:09:00', '2021-09-30 16:09:00', '13:00 pm to 16:00 pm', 200, 100, 100, 'Confirmed', NULL, 0, '120192077_347771690007212_3896643654713269544_o.jpg', 13),
(212, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-09-30', '', '', '', '', '2021-09-30 10:09:00', '2021-09-30 13:09:00', '10:00 am to 13:00 pm', 200, 200, 0, 'Completed', NULL, 1, 'space-wallpaper-20082314170846.jpg', NULL),
(232, 'CSTMR26', 2, 'leica balayanto', 'Daytour', '2021-10-11', '', '', '', '', '2021-10-10 07:10:00', '2021-10-11 10:10:00', '07:00 am to 10:00 am', 320, 200, 120, 'Confirmed', NULL, 0, 'ACT 3 P.E.jpg', 18),
(223, 'CSTMR25', 2, 'jehu ombrog', 'Daytour', '2021-10-07', '', '', '', '', '2021-10-07 07:10:00', '2021-10-07 10:10:00', '07:00 am to 10:00 am', 400, 200, 200, 'Confirmed', NULL, 0, '', NULL),
(224, 'CSTMR11', 2, 'Bryan Dollentas', 'Daytour', '2021-10-06', '', '', '', '', '2021-10-06 10:10:00', '2021-10-06 13:10:00', '10:00 am to 13:00 pm', 320, 320, 0, 'Completed', NULL, 1, 'postal back.jpg', 12),
(233, 'CSTMR26', 1, 'leica balayanto', 'Daytour', '2021-10-11', '', '', '', '', '2021-10-11 07:10:00', '2021-10-11 10:10:00', '07:00 am to 10:00 am', 200, 200, 0, 'Completed', NULL, 0, '', NULL),
(234, 'CSTMR26', 0, 'leica balayanto', 'Overnight', '2021-10-11', ' || C9 ', '', '', '', '2021-10-11 14:00:00', '2021-10-12 12:00:00', '', 8000, 4000, 4000, 'Confirmed', NULL, 0, 'postal back.jpg', NULL),
(235, 'CSTMR26', 1, 'leica balayanto', 'Daytour', '2021-10-14', '', '', '', '', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '07:00 am to 10:00 am', 200, 400, 100, 'Confirmed', NULL, 0, '', NULL),
(236, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-10-11', '', '', '', '', '2021-10-11 07:10:00', '2021-10-11 10:10:00', '07:00 am to 10:00 am', 200, 100, 100, 'Confirmed', NULL, 0, '', NULL),
(237, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-10-11', '', '', '', '', '2021-10-11 10:10:00', '2021-10-11 13:10:00', '10:00 am to 13:00 pm', 200, 100, 100, 'Confirmed', NULL, 0, '', NULL),
(238, 'CSTMR26', 0, 'leica balayanto', 'Overnight', '2021-10-11', ' || C2 ', '', '', '', '2021-10-11 14:00:00', '2021-10-12 12:00:00', '', 2510, 1500, 1010, 'Confirmed', NULL, 0, '', NULL),
(239, 'CSTMR25', 0, 'jehu ombrog', 'Overnight', '2021-10-22', ' || C2 ', ' ||  Veranda ', '3am to 4pm', ' || Sunrise Breakfast', '2021-10-22 14:00:00', '2021-10-23 12:00:00', '', 3010, 0, 3010, 'Pending', NULL, 0, 'postal back.jpg', NULL),
(240, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-10-15', '', '', '', '', '2021-10-15 07:10:00', '2021-10-15 10:10:00', '07:00 am to 10:00 am', 200, 0, 200, 'Pending', NULL, 0, 'flex_play.png', NULL),
(241, 'CSTMR25', 1, 'jehu ombrog', 'Overnight', '2021-10-14', ' || C3 ', ' ||  Veranda ', '3am to 4pm', ' || Sunrise Breakfast', '2021-10-14 14:00:00', '2021-10-15 12:00:00', ' ', 4000, 1500, 2500, 'Confirmed', NULL, 0, 'gcash.png', NULL),
(242, 'CSTMR25', 0, 'jehu ombrog', 'Overnight', '2021-10-14', ' || C2 ', NULL, NULL, ' ', '2021-10-14 14:00:00', '2021-10-15 12:00:00', ' ', 3010, 0, 3010, 'Pending', NULL, 0, NULL, NULL),
(243, 'CSTMR25', 1, 'jehu ombrog', 'Daytour', '2021-10-14', ' ', NULL, NULL, ' ', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '07:00 am to 10:00 am', 200, 0, 200, 'Pending', NULL, 0, NULL, NULL),
(244, 'CSTMR26', 1, 'leica balayanto', 'Daytour', '2021-10-15', ' ', NULL, NULL, ' ', '2021-10-15 07:10:00', '2021-10-15 10:10:00', '07:00 am to 10:00 am', 200, 200, 0, 'Completed', NULL, 1, 'sample.jpg', NULL),
(245, 'CSTMR25', 2, 'jehu ombrog', 'Daytour', '2021-10-14', ' ', NULL, NULL, ' ', '2021-10-14 07:10:00', '2021-10-14 10:10:00', '07:00 am to 10:00 am', 320, 320, 0, 'Completed', NULL, 1, 'gcash.png', 12),
(246, 'CSTMR28', 2, 'Benjamin Gandeza', 'Daytour', '2021-10-17', ' ', NULL, NULL, ' ', '2021-10-17 07:10:00', '2021-10-17 10:10:00', '07:00 am to 10:00 am', 400, 0, 400, 'Pending', NULL, 0, '97c7b9b5700dd18aa7ee4c2f02ca9008.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `ID` int(11) NOT NULL,
  `photoname` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`ID`, `photoname`, `category`, `description`) VALUES
(2, 'Gall (1).jpg', 1, ''),
(3, 'Gall (2).jpg', 1, ''),
(4, 'Gall (3).jpg', 1, ''),
(5, 'Gall (4).jpg', 1, ''),
(6, 'Gall (5).jpg', 1, ''),
(7, 'Gall (6).jpg', 1, ''),
(8, 'Gall (7).jpg', 1, ''),
(9, 'Gall (8).jpg', 1, ''),
(10, 'Gall (9).jpg', 1, ''),
(11, 'Gall (10).jpg', 1, 'dsdsds'),
(12, 'Gall (11).jpg', 1, 'juls'),
(26, '144471192_444489167002130_7562133926244138582_n.jpg', 2, '  Surprise your husband (or wife) with a camping date experience! Make up your bed with crisp, brownies and coffee to make your dating experience more memorable.'),
(28, '125306896_390425969075117_657423807408911188_n.jpg', 2, 'Grabbing the perfect photo of a rainbow can be few and far between, But with Ridges and Clouds will help you to see one often. All you have to do is grab your camera and get a photo before it fades away. '),
(31, '186540329_510378623746517_8380644808479828123_n.jpg', 2, 'With us, we will help you experience the simple standard life with our cabana houses. you will surely enjoy the beauty of nature without signal and wifi.'),
(32, 'flex_play.png', 2, '32323232');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price`
--

CREATE TABLE `tbl_price` (
  `ID` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `accomodation` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `time` varchar(200) NOT NULL,
  `pax` varchar(50) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `viewrate` varchar(100) NOT NULL,
  `verandarate` varchar(100) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `imagename` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_price`
--

INSERT INTO `tbl_price` (`ID`, `category`, `accomodation`, `size`, `time`, `pax`, `rate`, `viewrate`, `verandarate`, `notes`, `imagename`, `quantity`) VALUES
(1, 'room', 'Standard Couple Cabana      ', 'Small', '', '2', '3600', '', '', 'Free breakfast for two', 'C1.jpg', 0),
(2, 'room', 'Standard Couple Cabana  ', 'Large', '', '2', '3000', '', '', 'Free breakfast for two', 'C3.jpg', 0),
(3, 'room', 'De Luxe Couple Cabana ', 'Small', '', '2', '4000', '', '', 'Free breakfast for two', 'C5.jpg', 0),
(4, 'room', 'De Luxe Couple Cabana ', 'Large', '', '2', '5000', '', '', 'Free breakfast for two', 'C7.jpg', 0),
(5, 'room', 'De Luxe Couple Cabana', '', '', 'Each', '500', '', '', '', '', 0),
(6, 'room', 'Twin Ifugao House  ', 'Large', '', '6', '8000', '', '', 'With two rooms, living room, dining\r\nroom, own CR, and outdoor kitchen', 'C9.jpg', 0),
(7, 'room', 'Twin Ifugao House ', '', '', 'Each', '510', '', '', 'Max of 10 excess pax', '', 0),
(8, 'date', 'Sunrise Breakfast', '', '6AM - 7AM', '2', '', '1000', '500', 'Choice of silog meal with brewed coffee (upgrade from breakfast for 2pax)', '', 0),
(9, 'date', 'Coffee Date', '', '1 hour only between 3pm-5pm', '2', '', '700', '400', 'Brewed Coffee and sandwiches/cookies', '', 0),
(10, 'date', 'Romantic Dinner', '', '1 hour only between 4pm to 7pm', '2', '', '1500', '1000', 'Choice of beef salpico, pork or chicken hamonado, Beef Chicken with mushroom or Chicken Curry **with rice, pasta, veggies and dessert. Optional: plus pluvium wine(600)', '', 0),
(11, 'other', 'Kawa Bath', '', '', '', '', '', '', '500/Pax', '', 0),
(12, 'other', 'Mini Pool', '', '', '', '', '', '', 'TBC due to COVID19', '', 0),
(13, 'other', 'Massage', '', '', '', '', '', '', 'TBC due to COVID19', '', 0),
(14, 'other', 'Bonfire', '', '', '', '', '', '', '300 (until 9PM only)', '', 0),
(34, 'room', 'Standard Couple Cabana  ', 'Small', '', '2', '2510', '', '', 'Free breakfast for two', 'C2.jpg', 0),
(35, 'room', 'Standard Couple Cabana  ', 'Large', '', '2', '3000', '', '', 'Free Break fast for two', 'C4.jpg', 0),
(36, 'room', 'De Luxe Couple Cabana ', 'Small', '', '2', '4000', '', '', 'Free Break Fast for Two', 'C6.jpg', 0),
(37, 'room', 'De Luxe Couple Cabana ', 'Large', '', '2', '5000', '', '', 'Free Breakfast for Two', 'C8.jpg', 0),
(43, 'other', 'tent ', '', '', '', '', '', '', 'mag tayo bahay bahayan', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `promo_id` int(11) NOT NULL,
  `promo_code` varchar(50) NOT NULL,
  `promo_description` varchar(500) NOT NULL,
  `promo_value` int(11) NOT NULL,
  `promo_value_type` varchar(10) NOT NULL,
  `promo_expiration` date NOT NULL,
  `promo_count` int(11) NOT NULL,
  `promo_status` varchar(50) NOT NULL,
  `promo_bookingtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`promo_id`, `promo_code`, `promo_description`, `promo_value`, `promo_value_type`, `promo_expiration`, `promo_count`, `promo_status`, `promo_bookingtype`) VALUES
(0, 'ZZZZ', 'couple promo ', 20, '% OFF', '2021-10-21', 10, 'Inactive', 'Both'),
(7, 'QWERTY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  ', 500, 'off', '2021-09-21', 98, 'inactive', ''),
(8, 'BRYANAD', 'zzzzzzzzzz zzzzzzzz zzzzzzzzzzzzzz zzzzzzzzzzzzzzzz zzzzzzz ', 20, '% OFF', '2021-09-30', 98, 'inactive', 'Daytour'),
(9, 'ZASDWEWQ', 'zasdsadsadwqewqasd asdasdqwe asd zxc asd qweasd zxcas qwe asdczxc sad qwe zxcz xcz  ', 200, 'OFF', '2021-09-19', 98, 'inactive', ''),
(10, 'MCDO50', 'zxczxc adas qwe  asd zczcasd qwe asd zxcas ewr xcvxcvsfdfg frt erdfg fdbcvb dfg retr bv ', 500, '% OFF', '2021-09-26', 98, 'inactive', 'Overnight'),
(11, 'DAY50', 'bawal ang bata ', 100, 'OFF', '2021-10-10', 98, 'inactive', 'Daytour'),
(12, 'RNC10', 'family promo ', 20, '% OFF', '2021-11-06', 98, 'Inactive', 'Daytour'),
(13, 'RNC1', 'Barkada promo ', 50, '% OFF', '2021-11-30', 98, 'Inactive', 'Daytour'),
(14, 'QWERT', 'gamer coupon ', 20, 'OFF', '2021-11-06', 98, 'Inactive', 'Both'),
(15, 'DSDS', 'qewqeq ', 20, 'OFF', '2021-11-30', 98, 'Inactive', 'Overnight'),
(16, 'PRM30', 'happy independence day ', 30, '% OFF', '2021-11-03', 98, 'Inactive', 'Overnight'),
(17, 'PRM30', 'new year promo ', 30, '% OFF', '2021-11-05', 98, 'Inactive', 'Overnight'),
(18, 'PWD', 'PWD ', 20, '% OFF', '2022-05-29', 98, 'Inactive', 'Both'),
(19, 'QWERT', 'zz ', 20, '% OFF', '2021-10-20', 98, 'Inactive', 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `ID` int(11) NOT NULL,
  `bookingID` int(11) NOT NULL,
  `costumerID` varchar(100) NOT NULL,
  `dateReview` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `reviewPhoto` varchar(500) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`ID`, `bookingID`, `costumerID`, `dateReview`, `description`, `reviewPhoto`, `rate`, `status`) VALUES
(4, 182, ' CSTMR11', '2021-08-04', 'Sobrang ganda ang linis ng kapaligiran at ang tahimik pa, sarap mag unwind kasama ang mga tropa! 100% recommended <3 <3', 'Gall (8).jpg', 5, 'enable'),
(5, 183, ' CSTMR11', '2021-09-10', 'Ang ganda po ', '589853e0bd10f467f923929dda39deae.jpg', 5, 'disabled'),
(6, 184, ' CSTMR11', '2021-09-10', '12312321321321321312', 'flex_play.png', 2, 'disabled'),
(7, 212, ' CSTMR25', '2021-09-29', 'so beautiful', '74323609_106104157507301_7733118711283843072_o.jpg', 5, 'disabled'),
(8, 224, ' CSTMR11', '2021-10-06', 'ang ganda po ', 'space-wallpaper-20082314170846.jpg', 5, ''),
(9, 244, ' CSTMR26', '2021-10-12', 'zzz', 'flex_play.png', 5, NULL),
(10, 245, ' CSTMR25', '2021-10-13', 'aadsadsadsasd', 'flex_play.png', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `ID` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rules`
--

CREATE TABLE `tbl_rules` (
  `ID` int(11) NOT NULL,
  `Category` varchar(250) NOT NULL,
  `rules` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rules`
--

INSERT INTO `tbl_rules` (`ID`, `Category`, `rules`) VALUES
(7, 'FAQs', '     Bonfire is cold'),
(10, 'Day Tour', '    Picture taking and walking trail only (Max of 10hours: No Dine In)'),
(11, 'Day Tour', ' Hot Kawa and Romantic Date are exclusive for overnights guest'),
(12, 'Day Tour', ' We cannot accomodate picnic daytour groups.'),
(17, 'Overnight', 'Use of barbeque pit is allowed in the kitchen areas only. Strictly no cooking in rooms and cabanas.'),
(18, 'Overnight', ' Dining and kitchen areas are for use of overnight guest only'),
(19, 'Overnight', ' Conserve water. Clean as you go'),
(20, 'Overnight', ' No littering/vandalism/illegal activities'),
(21, 'Overnight', '   Curfew Hours: 9pm-am. Observe silence at all time esp after 9pm. Gate is closed from 8pm-7am'),
(22, 'Overnight', ' Camp management shall not be responsible for any physical injury, damage, loss of life or property inside the camp.'),
(23, 'Day Tour', 'Food service is also unavailable for daytour guest as restaurant is still under construction.'),
(24, 'Day Tour', ' Meals can be pre-ordered before visit (or guest may bring their food)'),
(25, 'Day Tour', '   User of kitchen area and barbecue pit is not allowed'),
(28, 'FAQs', '   Prior booking is require with 50% DP upon reservation thru Gcash or Bank deposit'),
(29, 'FAQs', ' Check in 2pm/Check out 12nnt'),
(30, 'FAQs', ' Natural cool mountain air (no AC or Fans)'),
(31, 'FAQs', ' Off-grid (no wifi/network signal in rooms'),
(32, 'FAQs', ' No outlets (only solar lights)'),
(35, 'Overnight', ' Strictly no smoking or vaping beyond parking. No drinking, No eating in rooms.'),
(36, 'Day Tour', ' Pet must be on leash '),
(52, 'FAQs', ' asdasdsadsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` varchar(250) NOT NULL,
  `Userfname` varchar(50) NOT NULL,
  `Userlname` varchar(50) NOT NULL,
  `Useremail` varchar(50) NOT NULL,
  `Userpnumber` varchar(50) NOT NULL,
  `Userpword` varchar(250) NOT NULL,
  `Userbday` date NOT NULL,
  `Userage` int(11) NOT NULL,
  `Usergender` varchar(50) DEFAULT NULL,
  `Usertype` int(11) NOT NULL,
  `Usertwitter` varchar(250) DEFAULT NULL,
  `Userfbook` varchar(250) DEFAULT NULL,
  `Userinstagram` varchar(250) DEFAULT NULL,
  `Userregsdate` date DEFAULT NULL,
  `Userimage` varchar(500) DEFAULT NULL,
  `Userpwordnohash` varchar(500) NOT NULL,
  `Ustatus` int(11) DEFAULT NULL,
  `Uregsdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Ucode` int(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Userfname`, `Userlname`, `Useremail`, `Userpnumber`, `Userpword`, `Userbday`, `Userage`, `Usergender`, `Usertype`, `Usertwitter`, `Userfbook`, `Userinstagram`, `Userregsdate`, `Userimage`, `Userpwordnohash`, `Ustatus`, `Uregsdate`, `Ucode`) VALUES
('CSTMR10', 'pol', 'garciaa', 'pol@gmail.com', '639565658454', '$2y$10$h9Hov17iRnyIALdjM..08.KxB6HcBx4D82ycg/DMUq0ylPGK4ifC2', '1997-08-26', 23, '', 3, 'https://twitter.com/', 'https://facebook.com', 'https://www.instagram.com/', NULL, 'IMG_5153.JPG', 'Angpangetko', 0, '2021-10-13 01:46:41', 0),
('CSTMR11', 'Bryan', 'Dollentas', 'kazuto564@gmail.com', '639212763842', '$2y$10$u3VTj5KIN/VHDSLrQmaz4uJ9QAvTQmlS2EnbVbG7UHPRwvl6wv7Om', '1999-02-28', 23, '', 1, '', '', '', NULL, 'IMG_5153.JPG', 'Angpangetko', 0, '2021-09-29 04:55:09', 0),
('CSTMR20', 'Steven', 'Moran', 'Stevenmoran143@gmail.com', '635485475896', '$2y$10$46miuWX48mvjWOBXuTLa5.etawMumk2FQ8EpLHK2sdGdNSUmhVNJ2', '1999-07-14', 21, '', 2, '', '', '', '2021-06-07', 'IMG_5902.JPG', 'Angpangetko', 0, '2021-06-06 18:39:15', 0),
('CSTMR26', 'leica', 'balayanto', 'leicsbalayanto@gmail.com', '639175164433', '$2y$10$2PiVf3MYZ22Q.hmzYiYlLuvC8WbWZ1doXFkvqzYp8/SBBqtUzODDG', '1999-02-03', 22, '', 1, '', '', '', '2021-10-10', '', 'Angpangetko', 0, '2021-10-09 19:09:43', 0),
('CSTMR22', 'Cyril', 'Samonte', 'Cyrilsamonte@gmail.com', '635525458475', '$2y$10$9lOccqtJbDxCZFbrBVaucOO8po3WBVqljhw26CyZqj4./WeD7IG52', '2008-06-13', 12, '', 2, '', '', '', '2021-06-07', '243183450_1022369055184781_392505564361253291_n.png', 'Angpangetko', 0, '2021-10-06 03:34:46', 0),
('CSTMR25', 'jehu', 'ombrog', 'capstonefourth@gmail.com', '639212765842', '$2y$10$lVus7I4AqljS6e8xGA45he8nMyF5Wulwaed6bVuPlUj7YZdJBW.MW', '1999-10-19', 21, '', 1, '', '', '', '2021-09-29', 'selfie.jpg', 'Angpogiko', 0, '2021-10-09 10:54:03', 0),
('CSTMR24', 'cm', 'tadifa', 'cmtadifa@gmail.com', '639515215487', '$2y$10$Z8fNYWWkavEh09Enau0SyOvn.8kum7EhWh4CEG9Risty/XCku3hPq', '1999-07-28', 21, '', 1, '', '', '', '2021-06-26', 'IMG_1013.JPG', 'Angpangetko', 0, '2021-06-26 04:26:43', 0),
('CSTMR27', 'jabez', 'ombrog', 'jabez@gmail.com', '639584754875', '$2y$10$Bqi8pdL..8tLSwxGnYdaS.XtEtJfmZ4QATw1QIw0OxkweFMaiQXgm', '1998-03-15', 23, NULL, 1, NULL, NULL, NULL, '2021-10-12', NULL, 'Angpangetko', NULL, '2021-10-13 03:12:23', NULL),
('CSTMR28', 'Benjamin', 'Gandeza', 'b.gandezasr@gmail.com', '639158596398', '$2y$10$GuE8xUSJ/IuvPOKmgkPU1.P7rTAGCZVGA.OvWSG6vtUMZJYJUnbLu', '1995-06-14', 26, NULL, 1, NULL, NULL, NULL, '2021-10-13', NULL, 'Sample123', NULL, '2021-10-13 05:26:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `ip_address`, `visit_date`) VALUES
(1, '12:12:12:12', '2021-03-23 11:46:54'),
(2, '54:54:54', '2021-03-23 11:59:00'),
(3, '54:54:54:34', '2021-03-23 12:03:44'),
(4, '54:54:54:15', '2021-03-23 12:04:27'),
(5, '::1', '2021-03-23 12:04:48'),
(6, '54:54:54:88', '2021-03-24 04:18:18'),
(7, '54:54:54:11', '2021-03-24 11:30:07'),
(8, '54:54:54:555', '2021-03-24 13:00:07'),
(9, '127.0.0.1', '2021-05-01 13:16:27'),
(10, '152.32.99.205', '2021-08-06 11:26:20'),
(11, '103.225.137.34', '2021-09-08 00:08:32'),
(12, '45.124.59.38', '2021-09-08 00:11:31'),
(13, '112.200.230.137', '2021-10-13 01:51:25'),
(14, '203.118.245.36', '2021-10-13 05:14:33'),
(15, '112.202.154.26', '2021-10-13 05:24:29'),
(16, '205.169.39.20', '2021-10-13 07:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_price`
--
ALTER TABLE `tbl_price`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_rules`
--
ALTER TABLE `tbl_rules`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_price`
--
ALTER TABLE `tbl_price`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_rules`
--
ALTER TABLE `tbl_rules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
