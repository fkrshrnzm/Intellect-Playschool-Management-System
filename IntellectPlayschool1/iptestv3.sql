-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 12:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iptestv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_assessmenttype_desc`
--

CREATE TABLE `academic_assessmenttype_desc` (
  `acad_assessmenttype` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_assessmenttype_desc`
--

INSERT INTO `academic_assessmenttype_desc` (`acad_assessmenttype`, `description`) VALUES
(1, 'Sensory Assessment'),
(2, 'Intelligent Assessment'),
(3, 'Subject Assessment');

-- --------------------------------------------------------

--
-- Table structure for table `academic_commstat_desc`
--

CREATE TABLE `academic_commstat_desc` (
  `acad_CommStat` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_commstat_desc`
--

INSERT INTO `academic_commstat_desc` (`acad_CommStat`, `description`) VALUES
(1, 'Weekly'),
(2, 'Summary');

-- --------------------------------------------------------

--
-- Table structure for table `academic_fk`
--

CREATE TABLE `academic_fk` (
  `acad_ID` int(11) NOT NULL,
  `s_ID` bigint(20) DEFAULT NULL,
  `acad_Prog` int(11) DEFAULT NULL,
  `acad_CommDate` date DEFAULT NULL,
  `acad_CommStat` int(11) DEFAULT NULL,
  `acad_Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_fk`
--

INSERT INTO `academic_fk` (`acad_ID`, `s_ID`, `acad_Prog`, `acad_CommDate`, `acad_CommStat`, `acad_Type`) VALUES
(1, 1, 2, '2023-02-19', 1, 2),
(2, 1, 2, '2023-02-19', 1, 2),
(3, 1, 2, '2023-02-19', 2, 1),
(4, 1, 2, '2023-02-19', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `academic_fk_intelligent`
--

CREATE TABLE `academic_fk_intelligent` (
  `acad_ID` int(11) NOT NULL,
  `acad_IntelliType` int(11) DEFAULT NULL,
  `acad_IntelliComm` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_fk_intelligent`
--

INSERT INTO `academic_fk_intelligent` (`acad_ID`, `acad_IntelliType`, `acad_IntelliComm`) VALUES
(1, 1, 't'),
(1, 3, 't'),
(1, 4, 't'),
(1, 5, 't'),
(1, 6, 't'),
(1, 7, 't'),
(1, 8, 't'),
(1, 9, 't');

-- --------------------------------------------------------

--
-- Table structure for table `academic_fk_subject`
--

CREATE TABLE `academic_fk_subject` (
  `acad_ID` int(11) NOT NULL,
  `acad_SubName` int(11) DEFAULT NULL,
  `acad_SubNameType` int(11) DEFAULT NULL,
  `acad_SubComm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `academic_fk_vak`
--

CREATE TABLE `academic_fk_vak` (
  `acad_ID` int(11) NOT NULL,
  `acad_VAKType` int(11) DEFAULT NULL,
  `acad_VAKComm` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `academic_intellitype_desc`
--

CREATE TABLE `academic_intellitype_desc` (
  `acad_IntelliType` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_intellitype_desc`
--

INSERT INTO `academic_intellitype_desc` (`acad_IntelliType`, `description`) VALUES
(1, 'Bahasa'),
(2, 'Logik (Math)'),
(3, 'Muzikal'),
(4, 'Visual'),
(5, 'Kinestetik'),
(6, 'Interpersonal'),
(7, 'Intrapersonal'),
(8, 'Naturalis'),
(9, 'Existentialis');

-- --------------------------------------------------------

--
-- Table structure for table `academic_le`
--

CREATE TABLE `academic_le` (
  `acad_ID` int(11) NOT NULL,
  `s_ID` bigint(20) NOT NULL,
  `acad_Prog` int(11) DEFAULT NULL,
  `acad_commDate` date DEFAULT NULL,
  `acad_CommStat` int(11) DEFAULT NULL,
  `acad_Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `academic_le_intelligent`
--

CREATE TABLE `academic_le_intelligent` (
  `acad_ID` int(11) NOT NULL,
  `acad_IntelliType` int(11) DEFAULT NULL,
  `acad_IntelliComm` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `academic_le_vak`
--

CREATE TABLE `academic_le_vak` (
  `acad_ID` int(11) NOT NULL,
  `acad_VAKType` int(11) DEFAULT NULL,
  `acad_VAKComm` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `academic_prog_desc`
--

CREATE TABLE `academic_prog_desc` (
  `acad_Prog` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_prog_desc`
--

INSERT INTO `academic_prog_desc` (`acad_Prog`, `description`) VALUES
(1, 'Little Explorer Program'),
(2, 'Fun Kindyland Program');

-- --------------------------------------------------------

--
-- Table structure for table `academic_subcomm_desc`
--

CREATE TABLE `academic_subcomm_desc` (
  `acad_SubComm` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_subcomm_desc`
--

INSERT INTO `academic_subcomm_desc` (`acad_SubComm`, `description`) VALUES
('-', 'NULL'),
('G', 'Good Manner'),
('L1', 'Minimum Level'),
('L2', 'Basic Level'),
('L3', 'Moderate Level'),
('L4', 'Excellent Level'),
('N', 'Unable To Cooperate');

-- --------------------------------------------------------

--
-- Table structure for table `academic_subnametype_desc`
--

CREATE TABLE `academic_subnametype_desc` (
  `acad_SubNameType` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_subnametype_desc`
--

INSERT INTO `academic_subnametype_desc` (`acad_SubNameType`, `description`) VALUES
(1, 'Manner'),
(2, 'Writing'),
(3, 'Reading'),
(4, 'Counting');

-- --------------------------------------------------------

--
-- Table structure for table `academic_subname_desc`
--

CREATE TABLE `academic_subname_desc` (
  `acad_SubName` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `acc_ID` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_subname_desc`
--

INSERT INTO `academic_subname_desc` (`acad_SubName`, `description`, `acc_ID`) VALUES
(1, 'Bahasa Melayu', '123'),
(2, 'English', '123'),
(3, 'Bahasa Arab', '1234'),
(4, 'Mathematics', '12345'),
(5, 'Science', '12345'),
(6, 'Arts & Craft', '1234'),
(7, 'Pendidikan Islam', '123'),
(8, 'Sport/Sensory/Brain', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `academic_vaktype_desc`
--

CREATE TABLE `academic_vaktype_desc` (
  `acad_VAKType` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_vaktype_desc`
--

INSERT INTO `academic_vaktype_desc` (`acad_VAKType`, `description`) VALUES
(1, 'Visual'),
(2, 'Audio'),
(3, 'Kinestetik'),
(4, 'Catatan/Komen');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_ID` varchar(12) NOT NULL,
  `acc_pwd` varchar(50) NOT NULL,
  `fName` varchar(30) DEFAULT NULL,
  `mName` char(1) DEFAULT NULL,
  `lName` varchar(30) DEFAULT NULL,
  `acc_Address` varchar(50) DEFAULT NULL,
  `acc_PhoneNo` varchar(13) DEFAULT NULL,
  `acc_Email` varchar(40) DEFAULT NULL,
  `acc_Category` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_ID`, `acc_pwd`, `fName`, `mName`, `lName`, `acc_Address`, `acc_PhoneNo`, `acc_Email`, `acc_Category`) VALUES
('020506120886', 'doremi123', 'Azlan', NULL, 'Shah', 'Perak ', '0198861846', 'test@gmail.com', 0),
('020706120775', 'Abc123', 'Mikhail', NULL, 'Yassin', 'Selangor Malaysia', '0128871846', 'mikhail@graduate.utm.my', 0),
('020707120775', 'Abc123', 'Fikri', NULL, 'Batista', 'Melaka', '0128871846', NULL, 0),
('021122100839', 'Abc123', 'Abu', NULL, 'Ali', 'Selangor Malaysia', '0128871846', NULL, 0),
('123', '123', 'Adam', NULL, 'Principal', 'Sabah Malaysia', '0128871846', 'dce@icloud.com', 2),
('1234', '1234', 'Adam', NULL, 'Fahmi', 'Sabah Malaysia', '0128871846', 'yahoo@icloud.com', 1),
('12345', '12345', 'Adam', '', 'Chengze', 'Sabah Malaysia', '0128871846', 'gmail@icloud.com', 1);

--
-- Triggers `account`
--
DELIMITER $$
CREATE TRIGGER `after_acc_insert_trigger` AFTER INSERT ON `account` FOR EACH ROW begin
        if NEW.acc_Category=0 then
            insert into parent
                (acc_ID, acc_Category)
                values
                (NEW.acc_ID, NEW.acc_Category);
        else #acc_Category=1
            insert into teacher
                (acc_ID, acc_Category)
                values
                (NEW.acc_ID, NEW.acc_Category);
        end if;
    end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account_category_desc`
--

CREATE TABLE `account_category_desc` (
  `acc_Category` int(11) NOT NULL,
  `category_Desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_category_desc`
--

INSERT INTO `account_category_desc` (`acc_Category`, `category_Desc`) VALUES
(0, 'Parent'),
(1, 'Teacher'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announce_ID` int(11) NOT NULL,
  `announce_Type` int(11) DEFAULT NULL,
  `acc_ID` varchar(12) DEFAULT NULL,
  `announce_Category` int(11) DEFAULT NULL,
  `announce_Title` varchar(50) DEFAULT NULL,
  `announce_Media` longblob DEFAULT NULL,
  `announce_Desc` varchar(200) DEFAULT NULL,
  `announce_Time` timestamp NULL DEFAULT NULL,
  `announce_Start` date DEFAULT NULL,
  `announce_End` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_ID`, `announce_Type`, `acc_ID`, `announce_Category`, `announce_Title`, `announce_Media`, `announce_Desc`, `announce_Time`, `announce_Start`, `announce_End`) VALUES
(1, 1, NULL, 0, 'Test1', 0x494d472d36336434656131633533613565312e33363031393334322e706e67, '  test1  ', '2023-01-28 09:25:48', '2023-01-09', '2023-01-19'),
(2, 1, NULL, 0, 'qwe', 0x494d472d36336434656135383463623461332e37383830393132342e706e67, 'q', '2023-01-28 09:26:48', '2023-01-13', '2023-01-12'),
(3, 2, NULL, 2, 'Cuti CNY', 0x494d472d36336437383030623062373535372e36373335323637392e6a7067, 'masak pancake', '2023-01-30 08:30:03', '2023-01-30', '2023-02-02'),
(4, 1, NULL, 2, 'Playgroup', 0x494d472d36336437383035613232663564392e39393032323333342e6a7067, 'pancake', '2023-01-30 08:31:22', '2023-01-30', '2023-01-30'),
(5, 2, NULL, 3, 'test', 0x494d472d36336437383039623061303530312e30363331393730332e6a706567, 'test', '2023-01-30 08:32:27', '2023-01-30', '2023-01-31'),
(6, 1, NULL, 3, 'Test', 0x494d472d36336538616332643733643630332e39313133353630312e706e67, ' test ', '2023-02-12 09:06:53', '2023-02-12', '2023-02-12'),
(7, 1, NULL, 3, 'test2', 0x494d472d36336538616334346234363630332e36313238373431322e6a7067, 'test2', '2023-02-12 09:07:16', '2023-02-12', '2023-02-12'),
(8, 1, NULL, 3, 'test2', 0x494d472d36336538616336366164376336372e32383933353337382e706e67, 'test', '2023-02-12 09:07:50', '2023-02-12', '2023-02-12'),
(9, 1, NULL, 0, 'test22', 0x494d472d36336538616361663864653961312e33333837303630392e706e67, 'test', '2023-02-12 09:09:03', '2023-02-12', '2023-02-12'),
(10, 1, NULL, 0, 'test', 0x494d472d36336538616364626336346133342e34383734313433332e706e67, 'test', '2023-02-12 09:09:47', '2023-02-12', '2023-02-13'),
(11, 1, NULL, 0, '123123', 0x494d472d36336538616430316338366462332e35303932313037302e6a706567, 'test', '2023-02-12 09:10:25', '2023-02-12', '2023-02-12'),
(12, 1, NULL, 0, 'test', 0x494d472d36336538616438343333623663362e38313539333030302e6a706567, 'test', '2023-02-12 09:12:36', '2023-02-12', '2023-02-13'),
(13, 2, NULL, 0, 'activity2', 0x494d472d36336538616465613936323635302e34343834333230332e706e67, ' test ', '2023-02-12 09:14:18', '2023-02-12', '2023-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_category_desc`
--

CREATE TABLE `announcement_category_desc` (
  `announce_Category` int(11) NOT NULL,
  `category_Desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_category_desc`
--

INSERT INTO `announcement_category_desc` (`announce_Category`, `category_Desc`) VALUES
(0, 'viewable to all (including public)'),
(1, 'viewable to admin/teacher only'),
(2, 'viewable to parents and admin/teachers only'),
(3, 'deleted (hidden to everyone except admin) ');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_type_desc`
--

CREATE TABLE `announcement_type_desc` (
  `announce_Type` int(11) NOT NULL,
  `type_Desc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_type_desc`
--

INSERT INTO `announcement_type_desc` (`announce_Type`, `type_Desc`) VALUES
(1, 'announcement'),
(2, 'activity');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_ID` int(11) NOT NULL,
  `att_User` int(11) NOT NULL,
  `att_Date` date DEFAULT NULL,
  `att_Type` int(11) NOT NULL,
  `att_Reason` varchar(100) DEFAULT NULL,
  `att_RTKstatus` int(11) DEFAULT NULL,
  `att_RTKmedia` longblob DEFAULT NULL,
  `att_Confirmation` int(11) DEFAULT NULL,
  `acc_ID` varchar(12) DEFAULT NULL,
  `s_ID` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_ID`, `att_User`, `att_Date`, `att_Type`, `att_Reason`, `att_RTKstatus`, `att_RTKmedia`, `att_Confirmation`, `acc_ID`, `s_ID`) VALUES
(286, 0, '2023-01-23', 1, NULL, NULL, NULL, 0, NULL, 123),
(287, 0, '2023-01-24', 1, NULL, 1, 0x53637265656e73686f74202832292e706e67, 1, NULL, 123),
(288, 0, '2023-01-25', 0, '', NULL, NULL, 0, NULL, 123),
(289, 0, '2023-01-26', 1, NULL, NULL, NULL, 0, NULL, 123),
(290, 0, '2023-01-27', 0, '', NULL, NULL, 0, NULL, 123),
(291, 0, '2023-01-23', 1, NULL, NULL, NULL, 0, NULL, 321),
(292, 0, '2023-01-24', 1, NULL, NULL, NULL, 1, NULL, 321),
(293, 0, '2023-01-25', 1, NULL, NULL, NULL, 0, NULL, 321),
(294, 0, '2023-01-26', 0, '', NULL, NULL, 0, NULL, 321),
(295, 0, '2023-01-27', 1, NULL, NULL, NULL, 0, NULL, 321),
(366, 1, '2023-01-24', 1, '', NULL, NULL, NULL, '12345', NULL),
(367, 1, '2023-01-24', 1, '', NULL, NULL, NULL, '1234', NULL),
(368, 1, '2023-01-26', 0, '', NULL, NULL, NULL, '1234', NULL),
(369, 0, '2023-01-23', 1, NULL, NULL, NULL, 0, NULL, 1),
(370, 0, '2023-01-24', 1, NULL, NULL, NULL, 0, NULL, 1),
(371, 0, '2023-01-25', 1, NULL, NULL, NULL, 0, NULL, 1),
(372, 0, '2023-01-26', 1, NULL, NULL, NULL, 0, NULL, 1),
(373, 0, '2023-01-27', 1, NULL, NULL, NULL, 0, NULL, 1),
(399, 0, '2023-01-30', 1, NULL, NULL, NULL, 1, NULL, 325),
(400, 0, '2023-01-31', 1, NULL, NULL, NULL, 0, NULL, 325),
(401, 0, '2023-02-01', 1, NULL, NULL, NULL, 0, NULL, 325),
(402, 0, '2023-02-02', 1, NULL, NULL, NULL, 0, NULL, 325),
(403, 0, '2023-02-03', 1, NULL, NULL, NULL, 0, NULL, 325),
(414, 0, '2023-01-30', 0, 'sakit', NULL, NULL, 1, NULL, 1),
(415, 0, '2023-01-31', 1, NULL, NULL, NULL, 0, NULL, 1),
(416, 0, '2023-02-01', 1, NULL, NULL, NULL, 0, NULL, 1),
(417, 0, '2023-02-02', 1, NULL, NULL, NULL, 0, NULL, 1),
(418, 0, '2023-02-03', 1, NULL, NULL, NULL, 0, NULL, 1),
(419, 0, '2023-01-30', 1, NULL, NULL, NULL, 1, NULL, 123),
(420, 0, '2023-01-31', 1, NULL, NULL, NULL, 0, NULL, 123),
(421, 0, '2023-02-01', 1, NULL, NULL, NULL, 0, NULL, 123),
(422, 0, '2023-02-02', 1, NULL, NULL, NULL, 0, NULL, 123),
(423, 0, '2023-02-03', 1, NULL, NULL, NULL, 0, NULL, 123),
(424, 0, '2023-01-30', 1, NULL, NULL, NULL, 1, NULL, 321),
(425, 0, '2023-01-31', 1, NULL, NULL, NULL, 0, NULL, 321),
(426, 0, '2023-02-01', 1, NULL, NULL, NULL, 0, NULL, 321),
(427, 0, '2023-02-02', 1, NULL, NULL, NULL, 0, NULL, 321),
(428, 0, '2023-02-03', 1, NULL, NULL, NULL, 0, NULL, 321),
(429, 0, '2023-01-30', 1, NULL, NULL, NULL, 1, NULL, 322),
(430, 0, '2023-01-31', 1, NULL, NULL, NULL, 0, NULL, 322),
(431, 0, '2023-02-01', 1, NULL, NULL, NULL, 0, NULL, 322),
(432, 0, '2023-02-02', 1, NULL, NULL, NULL, 0, NULL, 322),
(433, 0, '2023-02-03', 1, NULL, NULL, NULL, 0, NULL, 322),
(434, 0, '2023-01-30', 1, NULL, NULL, NULL, 1, NULL, 323),
(435, 0, '2023-01-31', 1, NULL, NULL, NULL, 0, NULL, 323),
(436, 0, '2023-02-01', 1, NULL, NULL, NULL, 0, NULL, 323),
(437, 0, '2023-02-02', 1, NULL, NULL, NULL, 0, NULL, 323),
(438, 0, '2023-02-03', 1, NULL, NULL, NULL, 0, NULL, 323),
(439, 1, '2023-01-30', 1, '', NULL, NULL, NULL, '1234', NULL),
(440, 1, '2023-02-06', 0, '', NULL, NULL, NULL, '12345', NULL),
(441, 1, '2023-02-06', 0, '', NULL, NULL, NULL, '1234', NULL),
(442, 0, '2023-02-06', 1, NULL, NULL, NULL, 0, NULL, 1),
(443, 0, '2023-02-07', 1, NULL, NULL, NULL, 0, NULL, 1),
(444, 0, '2023-02-08', 1, NULL, NULL, NULL, 0, NULL, 1),
(445, 0, '2023-02-09', 1, NULL, NULL, NULL, 0, NULL, 1),
(446, 0, '2023-02-10', 1, NULL, NULL, NULL, 0, NULL, 1),
(447, 0, '2023-02-06', 1, NULL, NULL, NULL, 0, NULL, 123),
(448, 0, '2023-02-07', 1, NULL, NULL, NULL, 0, NULL, 123),
(449, 0, '2023-02-08', 1, NULL, NULL, NULL, 0, NULL, 123),
(450, 0, '2023-02-09', 1, NULL, NULL, NULL, 0, NULL, 123),
(451, 0, '2023-02-10', 1, NULL, NULL, NULL, 0, NULL, 123),
(452, 0, '2023-02-06', 1, NULL, NULL, NULL, 0, NULL, 321),
(453, 0, '2023-02-07', 1, NULL, NULL, NULL, 0, NULL, 321),
(454, 0, '2023-02-08', 1, NULL, NULL, NULL, 0, NULL, 321),
(455, 0, '2023-02-09', 1, NULL, NULL, NULL, 0, NULL, 321),
(456, 0, '2023-02-10', 1, NULL, NULL, NULL, 0, NULL, 321),
(457, 0, '2023-02-06', 1, NULL, NULL, NULL, 0, NULL, 322),
(458, 0, '2023-02-07', 1, NULL, NULL, NULL, 0, NULL, 322),
(459, 0, '2023-02-08', 1, NULL, NULL, NULL, 0, NULL, 322),
(460, 0, '2023-02-09', 1, NULL, NULL, NULL, 0, NULL, 322),
(461, 0, '2023-02-10', 1, NULL, NULL, NULL, 0, NULL, 322),
(462, 0, '2023-02-06', 1, NULL, NULL, NULL, 0, NULL, 323),
(463, 0, '2023-02-07', 1, NULL, NULL, NULL, 0, NULL, 323),
(464, 0, '2023-02-08', 1, NULL, NULL, NULL, 0, NULL, 323),
(465, 0, '2023-02-09', 1, NULL, NULL, NULL, 0, NULL, 323),
(466, 0, '2023-02-10', 1, NULL, NULL, NULL, 0, NULL, 323),
(542, 1, '2023-02-10', 1, '', NULL, NULL, NULL, '1234', NULL),
(568, 0, '2023-02-13', 1, NULL, NULL, NULL, 0, NULL, 1),
(569, 0, '2023-02-14', 1, NULL, NULL, NULL, 0, NULL, 1),
(570, 0, '2023-02-15', 1, NULL, NULL, NULL, 0, NULL, 1),
(571, 0, '2023-02-16', 1, NULL, NULL, NULL, 0, NULL, 1),
(572, 0, '2023-02-17', 1, NULL, NULL, NULL, 0, NULL, 1),
(573, 0, '2023-02-13', 1, NULL, NULL, NULL, 0, NULL, 123),
(574, 0, '2023-02-14', 1, NULL, NULL, NULL, 0, NULL, 123),
(575, 0, '2023-02-15', 1, NULL, NULL, NULL, 0, NULL, 123),
(576, 0, '2023-02-16', 1, NULL, NULL, NULL, 0, NULL, 123),
(577, 0, '2023-02-17', 1, NULL, NULL, NULL, 0, NULL, 123),
(578, 0, '2023-02-13', 1, NULL, NULL, NULL, 0, NULL, 321),
(579, 0, '2023-02-14', 1, NULL, NULL, NULL, 0, NULL, 321),
(580, 0, '2023-02-15', 1, NULL, NULL, NULL, 0, NULL, 321),
(581, 0, '2023-02-16', 1, NULL, NULL, NULL, 0, NULL, 321),
(582, 0, '2023-02-17', 1, NULL, NULL, NULL, 0, NULL, 321),
(583, 0, '2023-02-13', 1, NULL, NULL, NULL, 0, NULL, 322),
(584, 0, '2023-02-14', 1, NULL, NULL, NULL, 0, NULL, 322),
(585, 0, '2023-02-15', 1, NULL, NULL, NULL, 0, NULL, 322),
(586, 0, '2023-02-16', 1, NULL, NULL, NULL, 0, NULL, 322),
(587, 0, '2023-02-17', 1, NULL, NULL, NULL, 0, NULL, 322),
(588, 0, '2023-02-13', 1, NULL, NULL, NULL, 0, NULL, 323),
(589, 0, '2023-02-14', 1, NULL, NULL, NULL, 0, NULL, 323),
(590, 0, '2023-02-15', 1, NULL, NULL, NULL, 0, NULL, 323),
(591, 0, '2023-02-16', 1, NULL, NULL, NULL, 0, NULL, 323),
(592, 0, '2023-02-17', 1, NULL, NULL, NULL, 0, NULL, 323);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_confirmation_desc`
--

CREATE TABLE `attendance_confirmation_desc` (
  `att_Confirmation` int(11) NOT NULL,
  `confirmation_Desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_confirmation_desc`
--

INSERT INTO `attendance_confirmation_desc` (`att_Confirmation`, `confirmation_Desc`) VALUES
(0, 'unconfirmed'),
(1, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_rtkstatus_desc`
--

CREATE TABLE `attendance_rtkstatus_desc` (
  `att_RTKstatus` int(11) NOT NULL,
  `RTKstatus_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_rtkstatus_desc`
--

INSERT INTO `attendance_rtkstatus_desc` (`att_RTKstatus`, `RTKstatus_desc`) VALUES
(0, 'negative'),
(1, 'positive');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_type_desc`
--

CREATE TABLE `attendance_type_desc` (
  `att_Type` int(11) NOT NULL,
  `type_Desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_type_desc`
--

INSERT INTO `attendance_type_desc` (`att_Type`, `type_Desc`) VALUES
(0, 'absent'),
(1, 'present');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_updating`
--

CREATE TABLE `attendance_updating` (
  `s_ID` bigint(20) DEFAULT NULL,
  `att_ID` int(11) NOT NULL,
  `acc_ID` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_user_desc`
--

CREATE TABLE `attendance_user_desc` (
  `att_User` int(11) NOT NULL,
  `user_Desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_user_desc`
--

INSERT INTO `attendance_user_desc` (`att_User`, `user_Desc`) VALUES
(0, 'student'),
(1, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `acc_ID` varchar(12) NOT NULL,
  `p_Occupation` varchar(40) DEFAULT NULL,
  `p_SalarySlip` longblob DEFAULT NULL,
  `acc_Category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`acc_ID`, `p_Occupation`, `p_SalarySlip`, `acc_Category`) VALUES
('020506120886', 'Cikgu', NULL, 0),
('020706120775', 'Polis', NULL, 0),
('020707120775', NULL, NULL, 0),
('021122100839', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `program_assessment`
--

CREATE TABLE `program_assessment` (
  `acad_Prog` int(11) DEFAULT NULL,
  `acad_assessmenttype` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_assessment`
--

INSERT INTO `program_assessment` (`acad_Prog`, `acad_assessmenttype`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_ID` bigint(20) NOT NULL,
  `fName` varchar(20) DEFAULT NULL,
  `mName` varchar(20) DEFAULT NULL,
  `lName` varchar(20) DEFAULT NULL,
  `s_myKid` varchar(15) DEFAULT NULL,
  `s_BCert` varchar(15) DEFAULT NULL,
  `s_DOB` date NOT NULL,
  `s_Age` int(11) DEFAULT NULL,
  `s_Allergy` varchar(30) DEFAULT 'No allergy',
  `s_favFood` varchar(30) DEFAULT NULL,
  `s_favColor` varchar(20) DEFAULT NULL,
  `s_favToys` varchar(30) DEFAULT NULL,
  `s_extraNotes` varchar(100) DEFAULT NULL,
  `s_DStatus` int(11) DEFAULT NULL,
  `acc_ID` varchar(12) DEFAULT NULL,
  `acad_Prog` int(2) DEFAULT NULL,
  `prog_Session` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_ID`, `fName`, `mName`, `lName`, `s_myKid`, `s_BCert`, `s_DOB`, `s_Age`, `s_Allergy`, `s_favFood`, `s_favColor`, `s_favToys`, `s_extraNotes`, `s_DStatus`, `acc_ID`, `acad_Prog`, `prog_Session`) VALUES
(1, 'Sharunazim', NULL, 'Salleh', NULL, NULL, '2018-03-09', 4, 'No allergy', 'Nasi Lemak', 'Black', 'Buzz', NULL, NULL, '020706120775', 2, 2),
(123, 'Adam', '', 'Fahmi', NULL, NULL, '2016-12-10', 6, 'No allergy', 'Ayam KFC', 'Biru', 'Woody', NULL, NULL, '020706120775', 1, 2),
(321, 'Nadia', NULL, 'Zafiqah', NULL, NULL, '2016-12-09', 6, 'No allergy', NULL, NULL, 'Ultraman', NULL, NULL, '020706120775', 1, 1),
(322, 'Adam', '', 'Fahmi', NULL, NULL, '2016-12-10', 6, 'No allergy', 'Ayam KFC', 'Biru', 'Woody', NULL, NULL, '020706120775', 1, 1),
(323, 'Adam', '', 'Fahmi', NULL, NULL, '2018-12-10', 4, 'No allergy', 'Ayam KFC', 'Biru', 'Woody', NULL, NULL, '020706120775', 1, 1),
(325, 'Mikhail', NULL, 'Yassin', '020706120775', NULL, '2018-07-06', 4, 'No', 'Beef', 'Biru', 'Buzz', NULL, 1, '021122100839', 1, 0),
(330, 'Abu', NULL, 'Ali', '020708120775', NULL, '2018-06-12', 4, 'no', 'no', 'no', 'no', NULL, 0, '020707120775', 2, 2);

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `before_student_insert_trigger` BEFORE INSERT ON `student` FOR EACH ROW begin
    set NEW.s_Age = timestampdiff(YEAR, new.s_DOB, curdate());
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_diapers_desc`
--

CREATE TABLE `student_diapers_desc` (
  `s_DStatus` int(11) NOT NULL,
  `s_DDesc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_diapers_desc`
--

INSERT INTO `student_diapers_desc` (`s_DStatus`, `s_DDesc`) VALUES
(0, 'Not wearing diaper'),
(1, 'Still wearing diaper independently'),
(2, 'Still wearing diaper but need assistance');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `fee_ID` int(11) NOT NULL,
  `s_ID` bigint(20) NOT NULL,
  `fee_Category` int(11) DEFAULT NULL,
  `fee_Program` int(11) NOT NULL,
  `fee_Session` int(11) NOT NULL,
  `fee_Status` int(11) NOT NULL DEFAULT 0,
  `fee_Debit` float(100,2) NOT NULL,
  `fee_Credit` float(100,2) NOT NULL,
  `fee_Outstanding` float(100,2) GENERATED ALWAYS AS (`fee_Debit` - `fee_Credit`) STORED,
  `fee_Total` float(100,2) DEFAULT NULL,
  `fee_Date` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `fee_Due` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`fee_ID`, `s_ID`, `fee_Category`, `fee_Program`, `fee_Session`, `fee_Status`, `fee_Debit`, `fee_Credit`, `fee_Total`, `fee_Date`, `fee_Due`) VALUES
(5821, 1, 0, 1, 0, 1, 400.00, 400.00, NULL, '2023-02-12 11:09:18.209018', '2023-02-10'),
(5827, 123, 0, 1, 2, 1, 420.00, 420.00, NULL, '2023-02-12 11:32:56.400661', '2023-02-13'),
(5828, 321, 0, 1, 1, 1, 250.00, 250.00, NULL, '2023-02-12 11:32:56.408839', '2023-02-13'),
(5830, 325, 1, 1, 0, 0, 910.00, 0.00, NULL, '2023-02-12 11:40:33.000000', '2023-06-12'),
(5831, 1, 0, 2, 2, 0, 420.00, 0.00, NULL, '2023-02-12 12:24:27.000000', '2023-04-30');

--
-- Triggers `student_fee`
--
DELIMITER $$
CREATE TRIGGER `before_update_outstanding` BEFORE UPDATE ON `student_fee` FOR EACH ROW begin
        declare currDate timestamp;
        set currDate = NOW();
        if NEW.fee_Outstanding = 0 then
            set NEW.fee_Status = 1;
        elseif currDate > OLD.fee_Due then
            set NEW.fee_Status = 2;
        else
            set NEW.fee_Status = 0;
        end if;
    end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_feecopy`
--

CREATE TABLE `student_feecopy` (
  `feeID` int(11) NOT NULL,
  `s_ID` bigint(20) NOT NULL,
  `fee_Category` int(11) DEFAULT NULL,
  `fee_Status` int(11) DEFAULT NULL,
  `fee_Receipt` longblob DEFAULT NULL,
  `fee_Total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_category_desc`
--

CREATE TABLE `student_fee_category_desc` (
  `fee_Category` int(11) NOT NULL,
  `fee_CategoryDesc` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fee_category_desc`
--

INSERT INTO `student_fee_category_desc` (`fee_Category`, `fee_CategoryDesc`, `price`) VALUES
(0, 'Monthly', NULL),
(1, 'Yearly fee', NULL),
(2, 'Deposit', NULL),
(3, 'Playgroup', NULL),
(4, 'Food', NULL),
(5, 'Food', NULL),
(6, 'Registration', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_payment_status_desc`
--

CREATE TABLE `student_fee_payment_status_desc` (
  `fee_PayStatus` int(3) NOT NULL,
  `fee_PayStatusDesc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fee_payment_status_desc`
--

INSERT INTO `student_fee_payment_status_desc` (`fee_PayStatus`, `fee_PayStatusDesc`) VALUES
(0, 'RECEIVED'),
(1, 'SUCCESS'),
(2, 'REJECTED');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_pdf`
--

CREATE TABLE `student_fee_pdf` (
  `fee_ReferenceNo` bigint(100) NOT NULL,
  `fee_ID` int(11) NOT NULL,
  `fee_PaymentStatus` int(3) NOT NULL DEFAULT 0,
  `fee_Amount` float(100,2) NOT NULL,
  `fee_FileName` varchar(50) NOT NULL,
  `fee_PayDate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fee_pdf`
--

INSERT INTO `student_fee_pdf` (`fee_ReferenceNo`, `fee_ID`, `fee_PaymentStatus`, `fee_Amount`, `fee_FileName`, `fee_PayDate`) VALUES
(2301300936043065, 5821, 2, 400.00, '2301300936043065.pdf', '2023-01-30 16:36:04.000000'),
(2302100544155939, 5828, 1, 100.00, '2302100544155939.pdf', '2023-02-11 00:44:15.000000'),
(2302100544385240, 5828, 1, 150.00, '2302100544385240.pdf', '2023-02-11 00:44:38.000000'),
(2302120346402386, 5821, 1, 400.00, '2302120346402386.pdf', '2023-02-12 10:46:40.000000'),
(2302120347057108, 5827, 1, 420.00, '2302120347057108.pdf', '2023-02-12 10:47:05.000000'),
(2302120447009003, 5830, 0, 910.00, '2302120447009003.pdf', '2023-02-12 11:47:00.000000'),
(2302120525037078, 5831, 0, 420.00, '2302120525037078.pdf', '2023-02-12 12:25:03.000000');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_pricing`
--

CREATE TABLE `student_fee_pricing` (
  `fee_Category` int(11) NOT NULL,
  `prog_Session` int(11) NOT NULL,
  `fee_Pricing` float(100,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fee_pricing`
--

INSERT INTO `student_fee_pricing` (`fee_Category`, `prog_Session`, `fee_Pricing`) VALUES
(0, 0, 250.00),
(0, 1, 250.00),
(0, 2, 420.00),
(1, 0, 910.00),
(1, 1, 910.00),
(1, 2, 1000.00),
(2, 0, 1050.00),
(2, 1, 1050.00),
(2, 2, 1140.00),
(3, 0, 750.00),
(3, 1, 750.00),
(3, 2, 920.00),
(4, 0, 100.00),
(4, 1, 100.00),
(4, 2, 100.00),
(5, 0, 720.00),
(5, 1, 720.00),
(5, 2, 1440.00),
(6, 0, 280.00),
(6, 1, 280.00),
(6, 2, 280.00);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_status_desc`
--

CREATE TABLE `student_fee_status_desc` (
  `fee_status` int(11) NOT NULL,
  `fee_StatusDesc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_fee_status_desc`
--

INSERT INTO `student_fee_status_desc` (`fee_status`, `fee_StatusDesc`) VALUES
(0, 'DUE'),
(1, 'COMPLETED'),
(2, 'OVERDUE');

-- --------------------------------------------------------

--
-- Table structure for table `student_id`
--

CREATE TABLE `student_id` (
  `id` int(11) NOT NULL,
  `new_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `s_customID` varchar(10) DEFAULT NULL,
  `s_ID` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `student_id`
--
DELIMITER $$
CREATE TRIGGER `after_studentID_insert` BEFORE INSERT ON `student_id` FOR EACH ROW BEGIN
        set @created := (SELECT IFNULL(created_at, NOW()) FROM student_id  ORDER BY created_at DESC LIMIT 1);

        IF YEAR(@created) <> YEAR(NEW.created_at) THEN
            SET NEW.new_id := 1;
        ELSE
            SET NEW.new_id := (SELECT IFNULL(MAX(new_id),0) + 1 FROM student_id);
        end if;
        SET @s_Prog = (SELECT acad_Prog FROM student WHERE student.s_ID = NEW.s_ID);
        IF @s_Prog=1 THEN
            SET @prefix = 'LE';
            ELSE
            SET @prefix = 'FK';
        end if;
        SET NEW.s_customID = CONCAT(@prefix,DATE_FORMAT(now(), '%y'),LPAD(NEW.new_id,3,'0'));
    end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_session_desc`
--

CREATE TABLE `student_session_desc` (
  `prog_Session` int(11) NOT NULL,
  `session_Desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_session_desc`
--

INSERT INTO `student_session_desc` (`prog_Session`, `session_Desc`) VALUES
(0, 'Morning'),
(1, 'Evening'),
(2, 'Morning & Evening');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `acc_ID` varchar(12) NOT NULL,
  `acc_Category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`acc_ID`, `acc_Category`) VALUES
('1234', 1),
('12345', 1),
('123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary`
--

CREATE TABLE `teacher_salary` (
  `acc_ID` varchar(12) NOT NULL,
  `salaryDate` date DEFAULT NULL,
  `defaultSalary` int(11) DEFAULT NULL,
  `overtimeTotal` int(11) DEFAULT NULL,
  `allowancePGTotal` int(11) DEFAULT NULL,
  `replacementTotal` int(11) DEFAULT NULL,
  `dayOffTotal` int(11) DEFAULT NULL,
  `allowanceCutiTotal` int(11) DEFAULT NULL,
  `allowanceOTTotal` int(11) DEFAULT NULL,
  `kwspTeacher` int(11) DEFAULT NULL,
  `kwspBoss` int(11) DEFAULT NULL,
  `SUM` int(11) DEFAULT NULL,
  `DEDUCT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_salary`
--

INSERT INTO `teacher_salary` (`acc_ID`, `salaryDate`, `defaultSalary`, `overtimeTotal`, `allowancePGTotal`, `replacementTotal`, `dayOffTotal`, `allowanceCutiTotal`, `allowanceOTTotal`, `kwspTeacher`, `kwspBoss`, `SUM`, `DEDUCT`) VALUES
('1234', '2023-01-26', 680, 35, 40, NULL, 0, 20, 55, 45, 23, NULL, NULL),
('12345', '2023-01-30', 1200, 123, 144, NULL, 123, 144, 14, 123, 123, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary_allowance`
--

CREATE TABLE `teacher_salary_allowance` (
  `acc_ID` varchar(12) NOT NULL,
  `playgroundDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary_overtime`
--

CREATE TABLE `teacher_salary_overtime` (
  `acc_ID` varchar(12) NOT NULL,
  `overtimeDate` date DEFAULT NULL,
  `overtimeHour` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary_replacement`
--

CREATE TABLE `teacher_salary_replacement` (
  `acc_ID` varchar(12) NOT NULL,
  `replacementDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_assessmenttype_desc`
--
ALTER TABLE `academic_assessmenttype_desc`
  ADD PRIMARY KEY (`acad_assessmenttype`);

--
-- Indexes for table `academic_commstat_desc`
--
ALTER TABLE `academic_commstat_desc`
  ADD PRIMARY KEY (`acad_CommStat`);

--
-- Indexes for table `academic_fk`
--
ALTER TABLE `academic_fk`
  ADD PRIMARY KEY (`acad_ID`) USING BTREE,
  ADD KEY `academic_fk_academic_commstat_acad_CommStat_fk` (`acad_CommStat`),
  ADD KEY `academic_fk_academic_prog_acad_Prog_fk` (`acad_Prog`),
  ADD KEY `academic_fk_student_s_ID_fk` (`s_ID`),
  ADD KEY `academic_fk_academic_assessmenttype_desc_acad_assessmenttype_fk` (`acad_Type`);

--
-- Indexes for table `academic_fk_intelligent`
--
ALTER TABLE `academic_fk_intelligent`
  ADD KEY `academic_fk_intelligent_academic_intellitype_acad_IntelliType_fk` (`acad_IntelliType`),
  ADD KEY `acad_ID` (`acad_ID`);

--
-- Indexes for table `academic_fk_subject`
--
ALTER TABLE `academic_fk_subject`
  ADD KEY `academic_fk_subject_academic_subcomm_acad_SubComm_fk` (`acad_SubComm`),
  ADD KEY `academic_fk_subject_academic_subname_acad_SubName_fk` (`acad_SubName`),
  ADD KEY `academic_fk_subject_academic_subnametype_acad_SubNameType_fk` (`acad_SubNameType`),
  ADD KEY `acad_ID` (`acad_ID`);

--
-- Indexes for table `academic_fk_vak`
--
ALTER TABLE `academic_fk_vak`
  ADD KEY `academic_fk_vak_academic_vaktype_acad_VAKType_fk` (`acad_VAKType`),
  ADD KEY `acad_ID` (`acad_ID`);

--
-- Indexes for table `academic_intellitype_desc`
--
ALTER TABLE `academic_intellitype_desc`
  ADD PRIMARY KEY (`acad_IntelliType`);

--
-- Indexes for table `academic_le`
--
ALTER TABLE `academic_le`
  ADD PRIMARY KEY (`acad_ID`),
  ADD KEY `academic_LE_student_s_ID_fk` (`s_ID`),
  ADD KEY `academic_le_academic_commstat_acad_CommStat_fk` (`acad_CommStat`),
  ADD KEY `academic_le_academic_prog_acad_Prog_fk` (`acad_Prog`),
  ADD KEY `academic_le_academic_assessmenttype_desc_acad_assessmenttype_fk` (`acad_Type`);

--
-- Indexes for table `academic_le_intelligent`
--
ALTER TABLE `academic_le_intelligent`
  ADD KEY `academic_le_intelligent_academic_intellitype_acad_IntelliType_fk` (`acad_IntelliType`),
  ADD KEY `acad_ID` (`acad_ID`);

--
-- Indexes for table `academic_le_vak`
--
ALTER TABLE `academic_le_vak`
  ADD KEY `academic_le_vak_academic_vaktype_acad_VAKType_fk` (`acad_VAKType`),
  ADD KEY `acad_ID` (`acad_ID`);

--
-- Indexes for table `academic_prog_desc`
--
ALTER TABLE `academic_prog_desc`
  ADD PRIMARY KEY (`acad_Prog`);

--
-- Indexes for table `academic_subcomm_desc`
--
ALTER TABLE `academic_subcomm_desc`
  ADD PRIMARY KEY (`acad_SubComm`);

--
-- Indexes for table `academic_subnametype_desc`
--
ALTER TABLE `academic_subnametype_desc`
  ADD PRIMARY KEY (`acad_SubNameType`);

--
-- Indexes for table `academic_subname_desc`
--
ALTER TABLE `academic_subname_desc`
  ADD PRIMARY KEY (`acad_SubName`),
  ADD KEY `academic_subname_desc_teacher_acc_ID_fk` (`acc_ID`);

--
-- Indexes for table `academic_vaktype_desc`
--
ALTER TABLE `academic_vaktype_desc`
  ADD PRIMARY KEY (`acad_VAKType`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_ID`),
  ADD KEY `account_account_category_desc_acc_Category_fk` (`acc_Category`);

--
-- Indexes for table `account_category_desc`
--
ALTER TABLE `account_category_desc`
  ADD PRIMARY KEY (`acc_Category`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announce_ID`),
  ADD KEY `announcement_announcement_category_announce_Category_fk` (`announce_Category`),
  ADD KEY `announcement_announcement_type_announce_Type_fk` (`announce_Type`),
  ADD KEY `announcement_teacher_acc_ID_fk` (`acc_ID`);

--
-- Indexes for table `announcement_category_desc`
--
ALTER TABLE `announcement_category_desc`
  ADD PRIMARY KEY (`announce_Category`);

--
-- Indexes for table `announcement_type_desc`
--
ALTER TABLE `announcement_type_desc`
  ADD PRIMARY KEY (`announce_Type`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_ID`),
  ADD UNIQUE KEY `attendance_pk` (`s_ID`,`att_Date`),
  ADD KEY `attendance_attendance_confirmation_desc_att_confirmation_fk` (`att_Confirmation`),
  ADD KEY `attendance_attendance_rtkstatus_desc_att_RTKstatus_fk` (`att_RTKstatus`),
  ADD KEY `attendance_attendance_type_desc_att_Type_fk` (`att_Type`),
  ADD KEY `attendance_attendance_user_desc_att_User_fk` (`att_User`),
  ADD KEY `attendance_teacher_acc_ID_fk` (`acc_ID`);

--
-- Indexes for table `attendance_confirmation_desc`
--
ALTER TABLE `attendance_confirmation_desc`
  ADD PRIMARY KEY (`att_Confirmation`);

--
-- Indexes for table `attendance_rtkstatus_desc`
--
ALTER TABLE `attendance_rtkstatus_desc`
  ADD PRIMARY KEY (`att_RTKstatus`);

--
-- Indexes for table `attendance_type_desc`
--
ALTER TABLE `attendance_type_desc`
  ADD PRIMARY KEY (`att_Type`);

--
-- Indexes for table `attendance_updating`
--
ALTER TABLE `attendance_updating`
  ADD PRIMARY KEY (`att_ID`),
  ADD KEY `attendance_updating_account_acc_ID_fk` (`acc_ID`),
  ADD KEY `attendance_updating_student_s_ID_fk` (`s_ID`);

--
-- Indexes for table `attendance_user_desc`
--
ALTER TABLE `attendance_user_desc`
  ADD PRIMARY KEY (`att_User`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`acc_ID`),
  ADD KEY `parent_account_acc_Category_fk` (`acc_Category`);

--
-- Indexes for table `program_assessment`
--
ALTER TABLE `program_assessment`
  ADD KEY `program_assessment_assessmenttype_fk` (`acad_assessmenttype`),
  ADD KEY `program_assessment_academic_prog_desc_acad_Prog_fk` (`acad_Prog`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_ID`),
  ADD KEY `student_student_diapers_s_DStatus_fk` (`s_DStatus`),
  ADD KEY `student_parent_acc_ID_fk` (`acc_ID`),
  ADD KEY `student_academic_prog_desc_acad_Prog_fk` (`acad_Prog`),
  ADD KEY `student_student_session_desc_prog_Session_fk` (`prog_Session`);

--
-- Indexes for table `student_diapers_desc`
--
ALTER TABLE `student_diapers_desc`
  ADD PRIMARY KEY (`s_DStatus`);

--
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`fee_ID`),
  ADD KEY `fee_Status` (`fee_Status`),
  ADD KEY `fee_Session` (`fee_Session`),
  ADD KEY `fee_Program` (`fee_Program`),
  ADD KEY `student_fee_student_fee_category_desc_fee_Category_fk` (`fee_Category`),
  ADD KEY `student_fee_student_s_ID_fkey` (`s_ID`);

--
-- Indexes for table `student_feecopy`
--
ALTER TABLE `student_feecopy`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `student_fee_student_fee_status_fee_status_fk` (`fee_Status`),
  ADD KEY `student_fee_student_fee_category_fee_Category_fk` (`fee_Category`),
  ADD KEY `student_fee_student_s_ID_fk` (`s_ID`);

--
-- Indexes for table `student_fee_category_desc`
--
ALTER TABLE `student_fee_category_desc`
  ADD PRIMARY KEY (`fee_Category`);

--
-- Indexes for table `student_fee_payment_status_desc`
--
ALTER TABLE `student_fee_payment_status_desc`
  ADD PRIMARY KEY (`fee_PayStatus`);

--
-- Indexes for table `student_fee_pdf`
--
ALTER TABLE `student_fee_pdf`
  ADD PRIMARY KEY (`fee_ReferenceNo`),
  ADD KEY `student_fee_pdf_student_fee_payment_status_desc_fee_PayStatus_fk` (`fee_PaymentStatus`),
  ADD KEY `student_fee_pdf_student_fee_fee_ID_fk` (`fee_ID`);

--
-- Indexes for table `student_fee_pricing`
--
ALTER TABLE `student_fee_pricing`
  ADD KEY `student_fee_pricing_student_fee_category_desc_fee_Category_fk` (`fee_Category`),
  ADD KEY `student_fee_pricing_student_session_desc_prog_Session_fk` (`prog_Session`);

--
-- Indexes for table `student_fee_status_desc`
--
ALTER TABLE `student_fee_status_desc`
  ADD PRIMARY KEY (`fee_status`);

--
-- Indexes for table `student_id`
--
ALTER TABLE `student_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_session_desc`
--
ALTER TABLE `student_session_desc`
  ADD PRIMARY KEY (`prog_Session`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`acc_ID`),
  ADD KEY `teacher_account_acc_Category_fk` (`acc_Category`);

--
-- Indexes for table `teacher_salary`
--
ALTER TABLE `teacher_salary`
  ADD PRIMARY KEY (`acc_ID`),
  ADD KEY `Salary_salaryDate_index` (`salaryDate`);

--
-- Indexes for table `teacher_salary_allowance`
--
ALTER TABLE `teacher_salary_allowance`
  ADD PRIMARY KEY (`acc_ID`);

--
-- Indexes for table `teacher_salary_overtime`
--
ALTER TABLE `teacher_salary_overtime`
  ADD PRIMARY KEY (`acc_ID`);

--
-- Indexes for table `teacher_salary_replacement`
--
ALTER TABLE `teacher_salary_replacement`
  ADD PRIMARY KEY (`acc_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announce_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=793;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `student_fee`
--
ALTER TABLE `student_fee`
  MODIFY `fee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5832;

--
-- AUTO_INCREMENT for table `student_feecopy`
--
ALTER TABLE `student_feecopy`
  MODIFY `feeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_id`
--
ALTER TABLE `student_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_fk`
--
ALTER TABLE `academic_fk`
  ADD CONSTRAINT `academic_fk_academic_assessmenttype_desc_acad_assessmenttype_fk` FOREIGN KEY (`acad_Type`) REFERENCES `academic_assessmenttype_desc` (`acad_assessmenttype`) ON UPDATE CASCADE,
  ADD CONSTRAINT `academic_fk_academic_commstat_acad_CommStat_fk` FOREIGN KEY (`acad_CommStat`) REFERENCES `academic_commstat_desc` (`acad_CommStat`),
  ADD CONSTRAINT `academic_fk_academic_prog_desc_acad_Prog_fk` FOREIGN KEY (`acad_Prog`) REFERENCES `academic_prog_desc` (`acad_Prog`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `academic_fk_student_s_ID_fk` FOREIGN KEY (`s_ID`) REFERENCES `student` (`s_ID`);

--
-- Constraints for table `academic_fk_intelligent`
--
ALTER TABLE `academic_fk_intelligent`
  ADD CONSTRAINT `academic_fk_intelligent_academic_intellitype_acad_IntelliType_fk` FOREIGN KEY (`acad_IntelliType`) REFERENCES `academic_intellitype_desc` (`acad_IntelliType`),
  ADD CONSTRAINT `academic_fk_intelligent_ibfk_1` FOREIGN KEY (`acad_ID`) REFERENCES `academic_fk` (`acad_ID`);

--
-- Constraints for table `academic_fk_subject`
--
ALTER TABLE `academic_fk_subject`
  ADD CONSTRAINT `academic_fk_subject_academic_subcomm_acad_SubComm_fk` FOREIGN KEY (`acad_SubComm`) REFERENCES `academic_subcomm_desc` (`acad_SubComm`),
  ADD CONSTRAINT `academic_fk_subject_academic_subname_acad_SubName_fk` FOREIGN KEY (`acad_SubName`) REFERENCES `academic_subname_desc` (`acad_SubName`),
  ADD CONSTRAINT `academic_fk_subject_academic_subnametype_acad_SubNameType_fk` FOREIGN KEY (`acad_SubNameType`) REFERENCES `academic_subnametype_desc` (`acad_SubNameType`),
  ADD CONSTRAINT `academic_fk_subject_ibfk_1` FOREIGN KEY (`acad_ID`) REFERENCES `academic_fk` (`acad_ID`);

--
-- Constraints for table `academic_fk_vak`
--
ALTER TABLE `academic_fk_vak`
  ADD CONSTRAINT `academic_fk_vak_academic_vaktype_acad_VAKType_fk` FOREIGN KEY (`acad_VAKType`) REFERENCES `academic_vaktype_desc` (`acad_VAKType`),
  ADD CONSTRAINT `academic_fk_vak_ibfk_1` FOREIGN KEY (`acad_ID`) REFERENCES `academic_fk` (`acad_ID`);

--
-- Constraints for table `academic_le`
--
ALTER TABLE `academic_le`
  ADD CONSTRAINT `academic_LE_student_s_ID_fk` FOREIGN KEY (`s_ID`) REFERENCES `student` (`s_ID`),
  ADD CONSTRAINT `academic_le_academic_assessmenttype_desc_acad_assessmenttype_fk` FOREIGN KEY (`acad_Type`) REFERENCES `academic_assessmenttype_desc` (`acad_assessmenttype`) ON UPDATE CASCADE,
  ADD CONSTRAINT `academic_le_academic_commstat_acad_CommStat_fk` FOREIGN KEY (`acad_CommStat`) REFERENCES `academic_commstat_desc` (`acad_CommStat`),
  ADD CONSTRAINT `academic_le_academic_prog_desc_acad_Prog_fk` FOREIGN KEY (`acad_Prog`) REFERENCES `academic_prog_desc` (`acad_Prog`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `academic_le_intelligent`
--
ALTER TABLE `academic_le_intelligent`
  ADD CONSTRAINT `academic_le_intelligent_academic_intellitype_acad_IntelliType_fk` FOREIGN KEY (`acad_IntelliType`) REFERENCES `academic_intellitype_desc` (`acad_IntelliType`),
  ADD CONSTRAINT `academic_le_intelligent_academic_le_acad_ID_fk` FOREIGN KEY (`acad_ID`) REFERENCES `academic_le` (`acad_ID`);

--
-- Constraints for table `academic_le_vak`
--
ALTER TABLE `academic_le_vak`
  ADD CONSTRAINT `academic_le_vak_academic_le_acad_ID_fk` FOREIGN KEY (`acad_ID`) REFERENCES `academic_le` (`acad_ID`),
  ADD CONSTRAINT `academic_le_vak_academic_vaktype_acad_VAKType_fk` FOREIGN KEY (`acad_VAKType`) REFERENCES `academic_vaktype_desc` (`acad_VAKType`);

--
-- Constraints for table `academic_subname_desc`
--
ALTER TABLE `academic_subname_desc`
  ADD CONSTRAINT `academic_subname_desc_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_account_category_desc_acc_Category_fk` FOREIGN KEY (`acc_Category`) REFERENCES `account_category_desc` (`acc_Category`);

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_announcement_category_announce_Category_fk` FOREIGN KEY (`announce_Category`) REFERENCES `announcement_category_desc` (`announce_Category`),
  ADD CONSTRAINT `announcement_announcement_type_announce_Type_fk` FOREIGN KEY (`announce_Type`) REFERENCES `announcement_type_desc` (`announce_Type`),
  ADD CONSTRAINT `announcement_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_attendance_confirmation_desc_att_confirmation_fk` FOREIGN KEY (`att_Confirmation`) REFERENCES `attendance_confirmation_desc` (`att_Confirmation`),
  ADD CONSTRAINT `attendance_attendance_rtkstatus_desc_att_RTKstatus_fk` FOREIGN KEY (`att_RTKstatus`) REFERENCES `attendance_rtkstatus_desc` (`att_RTKstatus`),
  ADD CONSTRAINT `attendance_attendance_type_desc_att_Type_fk` FOREIGN KEY (`att_Type`) REFERENCES `attendance_type_desc` (`att_Type`),
  ADD CONSTRAINT `attendance_attendance_user_desc_att_User_fk` FOREIGN KEY (`att_User`) REFERENCES `attendance_user_desc` (`att_User`),
  ADD CONSTRAINT `attendance_student_s_ID_fk` FOREIGN KEY (`s_ID`) REFERENCES `student` (`s_ID`),
  ADD CONSTRAINT `attendance_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);

--
-- Constraints for table `attendance_updating`
--
ALTER TABLE `attendance_updating`
  ADD CONSTRAINT `attendance_updating_attendance_att_ID_fk` FOREIGN KEY (`att_ID`) REFERENCES `attendance` (`att_ID`),
  ADD CONSTRAINT `attendance_updating_student_s_ID_fk` FOREIGN KEY (`s_ID`) REFERENCES `student` (`s_ID`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_account_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `account` (`acc_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `program_assessment`
--
ALTER TABLE `program_assessment`
  ADD CONSTRAINT `program_assessment_academic_prog_desc_acad_Prog_fk` FOREIGN KEY (`acad_Prog`) REFERENCES `academic_prog_desc` (`acad_Prog`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_assessment_assessmenttype_fk` FOREIGN KEY (`acad_assessmenttype`) REFERENCES `academic_assessmenttype_desc` (`acad_assessmenttype`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_academic_prog_desc_acad_Prog_fk` FOREIGN KEY (`acad_Prog`) REFERENCES `academic_prog_desc` (`acad_Prog`),
  ADD CONSTRAINT `student_parent_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `parent` (`acc_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_student_diapers_s_DStatus_fk` FOREIGN KEY (`s_DStatus`) REFERENCES `student_diapers_desc` (`s_DStatus`),
  ADD CONSTRAINT `student_student_session_desc_prog_Session_fk` FOREIGN KEY (`prog_Session`) REFERENCES `student_session_desc` (`prog_Session`);

--
-- Constraints for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD CONSTRAINT `student_fee_student_fee_category_desc_fee_Category_fk` FOREIGN KEY (`fee_Category`) REFERENCES `student_fee_category_desc` (`fee_Category`),
  ADD CONSTRAINT `student_fee_student_fee_status_desc_fee_status_fk` FOREIGN KEY (`fee_Status`) REFERENCES `student_fee_status_desc` (`fee_status`),
  ADD CONSTRAINT `student_fee_student_s_ID_fkey` FOREIGN KEY (`s_ID`) REFERENCES `student` (`s_ID`);

--
-- Constraints for table `student_feecopy`
--
ALTER TABLE `student_feecopy`
  ADD CONSTRAINT `student_fee_student_fee_category_fee_Category_fk` FOREIGN KEY (`fee_Category`) REFERENCES `student_fee_category_desc` (`fee_Category`),
  ADD CONSTRAINT `student_fee_student_fee_status_fee_status_fk` FOREIGN KEY (`fee_Status`) REFERENCES `student_fee_status_desc` (`fee_status`),
  ADD CONSTRAINT `student_fee_student_s_ID_fk` FOREIGN KEY (`s_ID`) REFERENCES `student` (`s_ID`);

--
-- Constraints for table `student_fee_pdf`
--
ALTER TABLE `student_fee_pdf`
  ADD CONSTRAINT `student_fee_pdf_student_fee_fee_ID_fk` FOREIGN KEY (`fee_ID`) REFERENCES `student_fee` (`fee_ID`),
  ADD CONSTRAINT `student_fee_pdf_student_fee_payment_status_desc_fee_PayStatus_fk` FOREIGN KEY (`fee_PaymentStatus`) REFERENCES `student_fee_payment_status_desc` (`fee_PayStatus`);

--
-- Constraints for table `student_fee_pricing`
--
ALTER TABLE `student_fee_pricing`
  ADD CONSTRAINT `student_fee_pricing_student_fee_category_desc_fee_Category_fk` FOREIGN KEY (`fee_Category`) REFERENCES `student_fee_category_desc` (`fee_Category`),
  ADD CONSTRAINT `student_fee_pricing_student_session_desc_prog_Session_fk` FOREIGN KEY (`prog_Session`) REFERENCES `student_session_desc` (`prog_Session`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_account_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `account` (`acc_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `teacher_salary`
--
ALTER TABLE `teacher_salary`
  ADD CONSTRAINT `teacher_salary_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);

--
-- Constraints for table `teacher_salary_allowance`
--
ALTER TABLE `teacher_salary_allowance`
  ADD CONSTRAINT `teacher_salary_allowance_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);

--
-- Constraints for table `teacher_salary_overtime`
--
ALTER TABLE `teacher_salary_overtime`
  ADD CONSTRAINT `teacher_salary_overtime_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);

--
-- Constraints for table `teacher_salary_replacement`
--
ALTER TABLE `teacher_salary_replacement`
  ADD CONSTRAINT `teacher_salary_replacement_teacher_acc_ID_fk` FOREIGN KEY (`acc_ID`) REFERENCES `teacher` (`acc_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
