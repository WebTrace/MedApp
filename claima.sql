-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 08:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claima`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_line` varchar(10) NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `address_line`, `suburb`, `city`, `postal_code`) VALUES
(2, 258, '7979', '0', '0', '0'),
(3, 273, '5454', '5454', '54545', '45454'),
(4, 274, '545465464', '2147483647', '46464564', '6464646'),
(5, 279, '0', '0', '0', '0'),
(6, 281, '0', '0', '0', '0'),
(7, 282, '0', '0', '0', '0'),
(8, 310, '124', '0', '0', '845'),
(9, 227, '1502', 'Lenasia', 'Johannesburg', '8532'),
(10, 226, '256', 'Sami Marks', 'Pretoria', '0152');

-- --------------------------------------------------------

--
-- Table structure for table `address_type`
--

CREATE TABLE `address_type` (
  `address_type_code` int(11) NOT NULL,
  `address_type_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_type`
--

INSERT INTO `address_type` (`address_type_code`, `address_type_name`, `description`) VALUES
(1, 'PHYSICAL', 'Physical address'),
(2, 'POSTAL', 'Postal address');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `app_date` date NOT NULL,
  `app_from` time NOT NULL,
  `app_to` time NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `patient_billing_type_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing_type`
--

CREATE TABLE `billing_type` (
  `billing_type_code` int(11) NOT NULL,
  `billing_name` varchar(100) NOT NULL,
  `billing_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_type`
--

INSERT INTO `billing_type` (`billing_type_code`, `billing_name`, `billing_desc`) VALUES
(1, 'MEDICAL AID', 'Medical aid billing'),
(2, 'CASH', 'Cash payment'),
(3, 'CREDIT CARD', 'Credit card payment');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `branch_contact` varchar(10) NOT NULL,
  `address_line` varchar(6) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `default_branch` varchar(5) NOT NULL DEFAULT 'NO',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `user_id`, `branch_name`, `branch_contact`, `address_line`, `city`, `province`, `location`, `default_branch`, `date_created`) VALUES
(44, 190, 'EKA', '', '4545', '54545', '4545454', '45454', 'YES', '2017-10-14 21:21:55'),
(45, 204, 'PH', '', 'gkjghj', 'hkjh', 'jkhk', 'hkjhkj', 'YES', '2017-10-18 11:49:02'),
(46, 205, 'SIM', '', '454545', '1212121', '212121212', '1212121', 'YES', '2017-10-18 18:11:44'),
(47, 304, 'simcha', '', 'Tembis', 'Midrand', 'gauteng', 'Tembisa', 'YES', '2017-10-30 20:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `claim_id` int(11) NOT NULL,
  `prcationer_id` int(11) NOT NULL,
  `medical_aid_id` int(11) NOT NULL,
  `authorization_no` varchar(50) NOT NULL,
  `referring_practice_no` varchar(20) NOT NULL,
  `claim_date` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_priority`
--

CREATE TABLE `contact_priority` (
  `priority_code` int(11) NOT NULL,
  `priority_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_priority`
--

INSERT INTO `contact_priority` (`priority_code`, `priority_name`, `description`) VALUES
(1, 'PRIMARY', 'Primary contact'),
(2, 'SECONDARY', 'Secondary contact');

-- --------------------------------------------------------

--
-- Table structure for table `contact_type`
--

CREATE TABLE `contact_type` (
  `contact_type_code` int(11) NOT NULL,
  `contact_type_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_type`
--

INSERT INTO `contact_type` (`contact_type_code`, `contact_type_name`, `description`) VALUES
(1, 'PERSONAL', 'Personal contact number'),
(2, 'WORK', 'Work contact number'),
(3, 'RELATIVE', 'Relative contact number');

-- --------------------------------------------------------

--
-- Table structure for table `dependant`
--

CREATE TABLE `dependant` (
  `pk_dependent_id` int(11) NOT NULL,
  `dependant_id` int(11) NOT NULL,
  `medical_aid_id` int(11) NOT NULL,
  `dependant_code` varchar(20) NOT NULL,
  `relationship_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependant`
--

INSERT INTO `dependant` (`pk_dependent_id`, `dependant_id`, `medical_aid_id`, `dependant_code`, `relationship_code`) VALUES
(1, 33, 15, '', 1),
(2, 34, 15, '01', 2),
(3, 49, 15, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dependant_relationship`
--

CREATE TABLE `dependant_relationship` (
  `relationship_code` int(11) NOT NULL,
  `relationship_name` varchar(50) NOT NULL,
  `relationship_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependant_relationship`
--

INSERT INTO `dependant_relationship` (`relationship_code`, `relationship_name`, `relationship_desc`) VALUES
(1, 'Main member', 'Main member'),
(2, 'Father', 'Father'),
(3, 'Mother', 'Mother');

-- --------------------------------------------------------

--
-- Table structure for table `dispensing`
--

CREATE TABLE `dispensing` (
  `dispensing_id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `nappi_code` int(11) NOT NULL,
  `item_no` int(11) NOT NULL,
  `days_supply` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `dispense_fee` int(11) NOT NULL,
  `gross` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_contact`
--

CREATE TABLE `email_contact` (
  `email_contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_contact`
--

INSERT INTO `email_contact` (`email_contact_id`, `user_id`, `email_address`) VALUES
(121, 190, '6565697979'),
(123, 203, ''),
(124, 204, 'lkl'),
(125, 205, '212121212'),
(146, 226, '6565'),
(147, 227, '489966'),
(150, 230, 'lk'),
(162, 242, '64646'),
(176, 258, 'ioyioyioyioyioy'),
(191, 273, '5454'),
(192, 274, '4654654654'),
(193, 279, 'kjkkjkjk'),
(195, 281, 'khgjhfhtfjhfjhfhgfhghghdsrdfhmhdjth'),
(196, 282, 'jhvkctydytcgfdhtrdtrfcmhgjdf'),
(209, 304, 'simcarmahlangu@gmail.com'),
(215, 310, 'amos@gmailcom'),
(217, 199, 'simcha@gmail.com'),
(218, 201, 'prince@claima.com');

-- --------------------------------------------------------

--
-- Table structure for table `email_contact_priority`
--

CREATE TABLE `email_contact_priority` (
  `email_contact_priority_id` int(11) NOT NULL,
  `priority_code` int(11) NOT NULL,
  `email_contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_contact_priority`
--

INSERT INTO `email_contact_priority` (`email_contact_priority_id`, `priority_code`, `email_contact_id`) VALUES
(21, 1, 121),
(22, 1, 123),
(23, 1, 124),
(24, 1, 125),
(40, 1, 146),
(41, 1, 147),
(44, 1, 150),
(45, 1, 162),
(53, 1, 176),
(54, 1, 191),
(55, 1, 192),
(56, 1, 193),
(57, 1, 195),
(58, 1, 196),
(60, 1, 209),
(61, 1, 215);

-- --------------------------------------------------------

--
-- Table structure for table `email_contact_type`
--

CREATE TABLE `email_contact_type` (
  `email_contact_type_id` int(11) NOT NULL,
  `contact_type_code` int(11) NOT NULL,
  `email_contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_contact_type`
--

INSERT INTO `email_contact_type` (`email_contact_type_id`, `contact_type_code`, `email_contact_id`) VALUES
(12, 1, 121),
(14, 1, 123),
(15, 1, 124),
(16, 1, 125),
(32, 1, 146),
(33, 1, 147),
(36, 1, 150),
(37, 1, 162),
(45, 1, 176),
(46, 1, 191),
(47, 1, 192),
(48, 1, 193),
(49, 1, 195),
(50, 1, 196),
(53, 1, 209),
(54, 1, 215);

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `manger_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_aid`
--

CREATE TABLE `medical_aid` (
  `medical_aid_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medical_aid_no` int(11) NOT NULL,
  `medical_scheme` int(11) NOT NULL,
  `medical_option` int(11) NOT NULL,
  `price_option` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_aid`
--

INSERT INTO `medical_aid` (`medical_aid_id`, `patient_id`, `medical_aid_no`, `medical_scheme`, `medical_option`, `price_option`, `date_created`) VALUES
(15, 33, 1023654, 0, 0, 'Test', '2017-10-22 08:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medical_id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `IDC_code` varchar(20) NOT NULL,
  `tariff_code` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `modifier_code` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_no` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `user_id`, `file_no`, `created_by`, `date_created`) VALUES
(8, 199, '199', 0, '2017-11-11 06:38:02'),
(10, 201, '201', 0, '2017-11-11 06:38:02'),
(12, 203, '203', 0, '2017-11-11 06:38:02'),
(33, 226, 'CL226', 0, '2017-11-11 06:38:02'),
(34, 227, 'CL227', 0, '2017-11-11 06:38:02'),
(37, 230, 'CL230', 0, '2017-11-11 06:38:02'),
(49, 242, 'CL242', 0, '2017-11-11 06:38:02'),
(63, 258, 'CL258', 0, '2017-11-11 06:38:02'),
(78, 273, 'CL273', 0, '2017-11-11 06:38:02'),
(79, 274, 'CL274', 0, '2017-11-11 06:38:02'),
(80, 275, 'CL275', 0, '2017-11-11 06:38:02'),
(81, 276, 'CL276', 0, '2017-11-11 06:38:02'),
(82, 278, '12563', 0, '2017-11-11 06:38:02'),
(83, 279, '12563', 0, '2017-11-11 06:38:02'),
(84, 281, '12563', 0, '2017-11-11 06:38:02'),
(85, 282, '12563', 0, '2017-11-11 06:38:02'),
(93, 190, '12563', 0, '2017-11-11 06:38:02'),
(95, 205, '123456', 0, '2017-11-11 06:38:02'),
(96, 203, '1265', 0, '2017-11-11 06:38:02'),
(113, 310, 'CL310', 0, '2017-11-11 06:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `patient_billing_type`
--

CREATE TABLE `patient_billing_type` (
  `patient_billing_type_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `billing_type_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `permission_code` int(11) NOT NULL,
  `permission_name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phone_contact`
--

CREATE TABLE `phone_contact` (
  `phone_contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_contact`
--

INSERT INTO `phone_contact` (`phone_contact_id`, `user_id`, `contact_no`) VALUES
(147, 190, '0620126010'),
(152, 199, '0721254512'),
(154, 201, '0845623012'),
(156, 203, '0730236523'),
(157, 204, '0830231452'),
(158, 205, '0620125894'),
(179, 226, '0820125468'),
(180, 227, '0630215463'),
(183, 230, '0721542145'),
(195, 242, '0747895461'),
(209, 258, '0721546236'),
(224, 273, '0731245612'),
(225, 274, '0714581203'),
(226, 279, '0782513214'),
(228, 281, '0745895641'),
(229, 282, '0824512356'),
(246, 304, '0715174391'),
(252, 310, '0730321712');

-- --------------------------------------------------------

--
-- Table structure for table `phone_contact_priority`
--

CREATE TABLE `phone_contact_priority` (
  `phone_contact_priority_id` int(11) NOT NULL,
  `priority_code` int(11) NOT NULL,
  `phone_contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_contact_priority`
--

INSERT INTO `phone_contact_priority` (`phone_contact_priority_id`, `priority_code`, `phone_contact_id`) VALUES
(29, 1, 147),
(32, 1, 156),
(33, 1, 157),
(34, 1, 158),
(55, 1, 179),
(56, 1, 180),
(59, 1, 183),
(71, 1, 195),
(85, 1, 209),
(100, 1, 224),
(101, 1, 225),
(102, 1, 226),
(104, 1, 228),
(105, 1, 229),
(120, 1, 246),
(126, 1, 252);

-- --------------------------------------------------------

--
-- Table structure for table `phone_contact_type`
--

CREATE TABLE `phone_contact_type` (
  `phone_contact_type_id` int(11) NOT NULL,
  `contact_type_code` int(11) NOT NULL,
  `phone_contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_contact_type`
--

INSERT INTO `phone_contact_type` (`phone_contact_type_id`, `contact_type_code`, `phone_contact_id`) VALUES
(18, 1, 147),
(23, 1, 154),
(25, 1, 156),
(26, 1, 157),
(27, 1, 158),
(48, 1, 179),
(49, 1, 180),
(52, 1, 183),
(64, 1, 195),
(78, 1, 209),
(93, 1, 224),
(94, 1, 225),
(95, 1, 226),
(97, 1, 228),
(98, 1, 229),
(112, 1, 246),
(118, 1, 252);

-- --------------------------------------------------------

--
-- Table structure for table `practitioner`
--

CREATE TABLE `practitioner` (
  `practitioner_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hpcsa_no` varchar(50) NOT NULL,
  `practice_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practitioner`
--

INSERT INTO `practitioner` (`practitioner_id`, `user_id`, `hpcsa_no`, `practice_no`) VALUES
(59, 190, '4546546', '454545'),
(60, 204, 'klkl', 'jlljljljl'),
(61, 205, '12345', '12345'),
(62, 304, '0715174391', '1234'),
(63, 199, '123354', '454546');

-- --------------------------------------------------------

--
-- Table structure for table `practitioner_speciality`
--

CREATE TABLE `practitioner_speciality` (
  `practitioner_speciality_id` int(11) NOT NULL,
  `practitioner_id` int(11) NOT NULL,
  `speciality_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_image`
--

CREATE TABLE `profile_image` (
  `profie_image_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `image_type` varchar(5) NOT NULL,
  `image_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_code` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_decription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_code`, `role_name`, `role_decription`) VALUES
(1, 'PATIENT', 'Patient'),
(2, 'RECEPTIONIST', 'Person responsible for administrative work'),
(3, 'PRACTITIONER', 'Practitioner'),
(4, 'MANAGER', 'Manager'),
(5, 'ADMIN', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `speciality_code` int(11) NOT NULL,
  `speciality_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`speciality_code`, `speciality_name`, `description`) VALUES
(1, 'OPTOMETRIST', 'Eye doctor');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_code` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  `status_discussion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_code`, `status_name`, `status_discussion`) VALUES
(1, 'ATCIVE', 'Status'),
(2, 'PENDING_CONFIRMATION', 'Account that need confirmation vi email'),
(3, 'SUSPENDED', 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `due_date` datetime NOT NULL,
  `status_code` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `practitioner_id` int(11) NOT NULL,
  `referring_practice_no` varchar(20) NOT NULL,
  `service_place` varchar(255) NOT NULL,
  `treatment_date` time NOT NULL,
  `treatment_time` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_branch`
--

CREATE TABLE `treatment_branch` (
  `treatment_branch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_branch`
--

INSERT INTO `treatment_branch` (`treatment_branch_id`, `branch_id`, `patient_id`) VALUES
(1, 44, 34),
(2, 44, 33),
(3, 44, 37),
(4, 44, 49),
(8, 44, 63),
(9, 44, 78),
(10, 44, 79),
(12, 44, 93),
(14, 44, 84),
(15, 44, 93),
(16, 44, 81),
(17, 44, 95),
(18, 44, 96),
(20, 44, 8),
(21, 45, 63),
(22, 47, 113),
(23, 44, 34),
(24, 44, 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `title` varchar(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `id_number` varchar(13) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `ethnic_group` varchar(50) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `terms_and_conditions` varchar(5) NOT NULL DEFAULT '',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `title`, `first_name`, `last_name`, `dob`, `id_number`, `gender`, `ethnic_group`, `hash`, `username`, `password`, `terms_and_conditions`, `date_created`) VALUES
(190, 'Mr', 'Emmanuel', 'Kgatla', '1991-09-21', '9109215610080', 'Male', 'African', 'e4123c9fc2e58a2c56faa8aa2847f297', 'Mannu', '827ccb0eea8a706c4c34a16891f84e7b', '', '2017-10-29 15:31:45'),
(199, '0', 'Simcha', 'Mahlangu', '1993-10-31', '9310315623080', 'Male', 'African', NULL, 'Sim', '827ccb0eea8a706c4c34a16891f84e7b', '', '2017-11-08 17:23:30'),
(201, '0', 'Prince', 'Kgatla', '1996-12-31', '9612315426082', 'Male', 'African', NULL, 'Prince', '827ccb0eea8a706c4c34a16891f84e7b', '', '2017-11-08 17:46:27'),
(203, '0', 'Arthur', 'Nthoke', '1995-06-03', '9506035426341', 'Male', 'African', NULL, NULL, NULL, '', '2017-10-29 15:31:57'),
(204, 'Mr', 'Karabo', 'Serope', '1993-05-12', '9307025100180', 'Male', 'African', 'd49e8d64f81d92671afeb4e28be521ab', 'KB', '827ccb0eea8a706c4c34a16891f84e7b', '', '2017-10-29 18:42:46'),
(205, 'Mr', 'Maranatha', 'Maluleke', '1992-07-02', '9207025312052', 'Male', 'African', '9eb8060a0da25c09b04c729ae71aa6ff', 'Simcha', '827ccb0eea8a706c4c34a16891f84e7b', '', '2017-10-29 15:32:09'),
(226, '0', 'Tshegofatso', 'Mojela', '1992-03-02', '9203025621362', 'Male', 'African', NULL, NULL, NULL, '', '2017-10-29 15:32:13'),
(227, '0', 'Lee-Roy', 'Madella', '1993-10-02', '9310075132085', 'Male', 'Coloured', NULL, NULL, NULL, '', '2017-10-29 15:32:22'),
(230, '0', 'Joseph', 'Sibiya', '1993-10-07', '9310075123652', 'Male', 'African', NULL, NULL, NULL, '', '2017-10-29 15:32:26'),
(242, 'Ms', 'Ayanda', 'Mhlongo', '1993-10-20', '9310320423108', 'Male', 'African', NULL, NULL, NULL, '', '2017-10-29 15:32:31'),
(258, 'Mr', 'Bryan', 'Fisher', '1970-12-02', '7012025123081', 'Male', 'Coloured', NULL, NULL, NULL, '', '2017-10-29 15:28:38'),
(273, 'Mr', 'Shantel', 'Moon', '2000-02-05', '0002054201056', 'Female', 'White', NULL, NULL, NULL, '', '2017-10-29 15:31:18'),
(274, 'Mr', 'Raphael', 'Sefu', '1986-11-20', '12314564987', 'Male', 'African', NULL, NULL, NULL, '', '2017-10-29 15:35:24'),
(275, 'Mr', '45454545', '2121212', '1970-01-01', '121212', 'Female', 'African', NULL, NULL, NULL, '', '2017-10-28 19:54:33'),
(276, 'Mr', '45454545', '2121212', '1970-01-01', '121212', 'Female', 'African', NULL, NULL, NULL, '', '2017-10-28 19:54:47'),
(277, 'Mr', 'Noma', 'Mahlangu', '2000-09-06', '123456', 'Female', 'African', NULL, NULL, NULL, '', '2017-10-29 06:11:16'),
(278, 'Mr', 'Noma', 'Mahlangu', '2000-09-06', '123456', 'Female', 'African', NULL, 'noma', '12345', '', '2017-10-29 06:12:29'),
(279, 'Mr', 'Norman', 'Ramafalo', '1992-01-01', '9201015236120', 'Female', 'African', NULL, NULL, NULL, '', '2017-10-29 15:22:46'),
(281, 'Mr', 'Spenzer', 'Sakoane', '1993-02-09', '9302095123685', 'Female', 'African', NULL, NULL, NULL, '', '2017-10-29 15:23:38'),
(282, 'Ms', 'Andile', 'Lukhele', '1992-01-21', '9201215021081', 'Female', 'White', NULL, NULL, NULL, '', '2017-10-29 15:24:46'),
(304, 'Mr', 'simcha', 'Mahlangu', NULL, NULL, NULL, '', '44d234eb02e66b5e6b3a7009c33317da', 'Simcha', '4f4eec6af093908972ad4d658b2ffd56', '', '2017-10-30 20:18:02'),
(310, 'Mr', 'Amos', 'Masedii', '1991-02-12', '9102125624123', 'Male', 'African', NULL, NULL, NULL, '', '2017-10-30 20:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_address_type`
--

CREATE TABLE `user_address_type` (
  `user_address_type_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `address_type_code` int(11) NOT NULL,
  `is_postal_address` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address_type`
--

INSERT INTO `user_address_type` (`user_address_type_id`, `address_id`, `address_type_code`, `is_postal_address`) VALUES
(1, 9, 1, 1),
(2, 10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_branch`
--

CREATE TABLE `user_branch` (
  `user_branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_branch`
--

INSERT INTO `user_branch` (`user_branch_id`, `user_id`, `branch_id`) VALUES
(31, 190, 44),
(32, 204, 45),
(33, 205, 46),
(40, 304, 47),
(41, 199, 44),
(42, 201, 44);

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `user_permission_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `role_code`, `user_id`) VALUES
(41, 4, 190),
(42, 4, 204),
(43, 4, 205),
(52, 4, 304),
(53, 3, 199),
(54, 2, 201);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL,
  `status_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `status_code`, `user_id`) VALUES
(40, 1, 190),
(41, 1, 204),
(42, 2, 205),
(50, 1, 304),
(51, 1, 199),
(52, 1, 201);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `address_type`
--
ALTER TABLE `address_type`
  ADD PRIMARY KEY (`address_type_code`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `patient_id` (`treatment_id`),
  ADD KEY `billing_type_code` (`patient_billing_type_id`);

--
-- Indexes for table `billing_type`
--
ALTER TABLE `billing_type`
  ADD PRIMARY KEY (`billing_type_code`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`claim_id`),
  ADD KEY `billing_id` (`medical_aid_id`),
  ADD KEY `practitioner_id` (`prcationer_id`);

--
-- Indexes for table `contact_priority`
--
ALTER TABLE `contact_priority`
  ADD KEY `contact_priority` (`priority_code`);

--
-- Indexes for table `contact_type`
--
ALTER TABLE `contact_type`
  ADD PRIMARY KEY (`contact_type_code`),
  ADD KEY `contact_type_code` (`contact_type_code`);

--
-- Indexes for table `dependant`
--
ALTER TABLE `dependant`
  ADD PRIMARY KEY (`pk_dependent_id`),
  ADD KEY `billing_id` (`medical_aid_id`),
  ADD KEY `dependent_relationship` (`relationship_code`),
  ADD KEY `dependant_id` (`dependant_id`);

--
-- Indexes for table `dependant_relationship`
--
ALTER TABLE `dependant_relationship`
  ADD PRIMARY KEY (`relationship_code`);

--
-- Indexes for table `dispensing`
--
ALTER TABLE `dispensing`
  ADD PRIMARY KEY (`dispensing_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `email_contact`
--
ALTER TABLE `email_contact`
  ADD PRIMARY KEY (`email_contact_id`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `email_contact_priority`
--
ALTER TABLE `email_contact_priority`
  ADD PRIMARY KEY (`email_contact_priority_id`),
  ADD KEY `contact_priority_id` (`priority_code`),
  ADD KEY `user_contact_id` (`email_contact_id`);

--
-- Indexes for table `email_contact_type`
--
ALTER TABLE `email_contact_type`
  ADD PRIMARY KEY (`email_contact_type_id`),
  ADD KEY `contact_type_id` (`contact_type_code`),
  ADD KEY `email_contact_id` (`email_contact_id`);

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`manger_id`);

--
-- Indexes for table `medical_aid`
--
ALTER TABLE `medical_aid`
  ADD PRIMARY KEY (`medical_aid_id`),
  ADD UNIQUE KEY `medical_aid_no` (`medical_aid_no`),
  ADD KEY `user_id` (`patient_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medical_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `patient_billing_type`
--
ALTER TABLE `patient_billing_type`
  ADD PRIMARY KEY (`patient_billing_type_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `billing_type_code` (`billing_type_code`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `phone_contact`
--
ALTER TABLE `phone_contact`
  ADD PRIMARY KEY (`phone_contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `phone_contact_priority`
--
ALTER TABLE `phone_contact_priority`
  ADD PRIMARY KEY (`phone_contact_priority_id`),
  ADD KEY `contact_priority_id` (`priority_code`),
  ADD KEY `user_contact_id` (`phone_contact_id`);

--
-- Indexes for table `phone_contact_type`
--
ALTER TABLE `phone_contact_type`
  ADD PRIMARY KEY (`phone_contact_type_id`),
  ADD KEY `contact_type_id` (`contact_type_code`),
  ADD KEY `email_contact_id` (`phone_contact_id`);

--
-- Indexes for table `practitioner`
--
ALTER TABLE `practitioner`
  ADD PRIMARY KEY (`practitioner_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `practice_no` (`practice_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `practitioner_speciality`
--
ALTER TABLE `practitioner_speciality`
  ADD PRIMARY KEY (`practitioner_speciality_id`),
  ADD KEY `speciality_id` (`speciality_code`),
  ADD KEY `practitioner_id` (`practitioner_id`);

--
-- Indexes for table `profile_image`
--
ALTER TABLE `profile_image`
  ADD KEY `profile_image_id` (`profie_image_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionist_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_code`),
  ADD KEY `role_code` (`role_code`),
  ADD KEY `role_code_2` (`role_code`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`speciality_code`),
  ADD KEY `speciality_code` (`speciality_code`),
  ADD KEY `speciality_code_2` (`speciality_code`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_code`),
  ADD KEY `status_code` (`status_code`),
  ADD KEY `status_code_2` (`status_code`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_id`),
  ADD KEY `billing_id` (`patient_id`),
  ADD KEY `practitioner_id` (`practitioner_id`);

--
-- Indexes for table `treatment_branch`
--
ALTER TABLE `treatment_branch`
  ADD PRIMARY KEY (`treatment_branch_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `doctor_id` (`patient_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_address_type`
--
ALTER TABLE `user_address_type`
  ADD PRIMARY KEY (`user_address_type_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `address_type_id` (`address_type_code`);

--
-- Indexes for table `user_branch`
--
ALTER TABLE `user_branch`
  ADD PRIMARY KEY (`user_branch_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`user_permission_id`),
  ADD KEY `permission_id` (`permission_code`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`),
  ADD KEY `role_id` (`role_code`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status_id`),
  ADD KEY `status_id` (`status_code`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `claim`
--
ALTER TABLE `claim`
  MODIFY `claim_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dependant`
--
ALTER TABLE `dependant`
  MODIFY `pk_dependent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dependant_relationship`
--
ALTER TABLE `dependant_relationship`
  MODIFY `relationship_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dispensing`
--
ALTER TABLE `dispensing`
  MODIFY `dispensing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_contact`
--
ALTER TABLE `email_contact`
  MODIFY `email_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT for table `email_contact_priority`
--
ALTER TABLE `email_contact_priority`
  MODIFY `email_contact_priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `email_contact_type`
--
ALTER TABLE `email_contact_type`
  MODIFY `email_contact_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `manger`
--
ALTER TABLE `manger`
  MODIFY `manger_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical_aid`
--
ALTER TABLE `medical_aid`
  MODIFY `medical_aid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medical_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `patient_billing_type`
--
ALTER TABLE `patient_billing_type`
  MODIFY `patient_billing_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phone_contact`
--
ALTER TABLE `phone_contact`
  MODIFY `phone_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
--
-- AUTO_INCREMENT for table `phone_contact_priority`
--
ALTER TABLE `phone_contact_priority`
  MODIFY `phone_contact_priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `phone_contact_type`
--
ALTER TABLE `phone_contact_type`
  MODIFY `phone_contact_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `practitioner`
--
ALTER TABLE `practitioner`
  MODIFY `practitioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `practitioner_speciality`
--
ALTER TABLE `practitioner_speciality`
  MODIFY `practitioner_speciality_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_image`
--
ALTER TABLE `profile_image`
  MODIFY `profie_image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `receptionist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatment_branch`
--
ALTER TABLE `treatment_branch`
  MODIFY `treatment_branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
--
-- AUTO_INCREMENT for table `user_address_type`
--
ALTER TABLE `user_address_type`
  MODIFY `user_address_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_branch`
--
ALTER TABLE `user_branch`
  MODIFY `user_branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `user_permission_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `practitioner` (`practitioner_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`patient_billing_type_id`) REFERENCES `patient_billing_type` (`patient_billing_type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `billing_ibfk_2` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`treatment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `FK_user_branch` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `claim_ibfk_1` FOREIGN KEY (`medical_aid_id`) REFERENCES `medical_aid` (`medical_aid_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dependant`
--
ALTER TABLE `dependant`
  ADD CONSTRAINT `dependant_ibfk_2` FOREIGN KEY (`medical_aid_id`) REFERENCES `medical_aid` (`medical_aid_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dependant_ibfk_3` FOREIGN KEY (`relationship_code`) REFERENCES `dependant_relationship` (`relationship_code`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dependant_ibfk_4` FOREIGN KEY (`dependant_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dispensing`
--
ALTER TABLE `dispensing`
  ADD CONSTRAINT `dispensing_ibfk_1` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`treatment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_contact`
--
ALTER TABLE `email_contact`
  ADD CONSTRAINT `email_contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_contact_priority`
--
ALTER TABLE `email_contact_priority`
  ADD CONSTRAINT `email_contact_priority_ibfk_2` FOREIGN KEY (`email_contact_id`) REFERENCES `email_contact` (`email_contact_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email_contact_priority_ibfk_3` FOREIGN KEY (`priority_code`) REFERENCES `contact_priority` (`priority_code`) ON UPDATE CASCADE;

--
-- Constraints for table `email_contact_type`
--
ALTER TABLE `email_contact_type`
  ADD CONSTRAINT `email_contact_type_ibfk_2` FOREIGN KEY (`email_contact_id`) REFERENCES `email_contact` (`email_contact_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email_contact_type_ibfk_3` FOREIGN KEY (`contact_type_code`) REFERENCES `contact_type` (`contact_type_code`) ON UPDATE CASCADE;

--
-- Constraints for table `medical_aid`
--
ALTER TABLE `medical_aid`
  ADD CONSTRAINT `medical_aid_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`treatment_id`) REFERENCES `treatment` (`treatment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_billing_type`
--
ALTER TABLE `patient_billing_type`
  ADD CONSTRAINT `patient_billing_type_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_billing_type_ibfk_2` FOREIGN KEY (`billing_type_code`) REFERENCES `billing_type` (`billing_type_code`);

--
-- Constraints for table `phone_contact`
--
ALTER TABLE `phone_contact`
  ADD CONSTRAINT `phone_contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone_contact_priority`
--
ALTER TABLE `phone_contact_priority`
  ADD CONSTRAINT `phone_contact_priority_ibfk_2` FOREIGN KEY (`phone_contact_id`) REFERENCES `phone_contact` (`phone_contact_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_contact_priority_ibfk_3` FOREIGN KEY (`priority_code`) REFERENCES `contact_priority` (`priority_code`) ON UPDATE CASCADE;

--
-- Constraints for table `phone_contact_type`
--
ALTER TABLE `phone_contact_type`
  ADD CONSTRAINT `phone_contact_type_ibfk_2` FOREIGN KEY (`phone_contact_id`) REFERENCES `phone_contact` (`phone_contact_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phone_contact_type_ibfk_3` FOREIGN KEY (`contact_type_code`) REFERENCES `contact_type` (`contact_type_code`) ON UPDATE CASCADE;

--
-- Constraints for table `practitioner`
--
ALTER TABLE `practitioner`
  ADD CONSTRAINT `FK_user_practice` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `practitioner_speciality`
--
ALTER TABLE `practitioner_speciality`
  ADD CONSTRAINT `practitioner_speciality_ibfk_1` FOREIGN KEY (`practitioner_id`) REFERENCES `practitioner` (`practitioner_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `practitioner_speciality_ibfk_2` FOREIGN KEY (`speciality_code`) REFERENCES `speciality` (`speciality_code`) ON UPDATE CASCADE;

--
-- Constraints for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD CONSTRAINT `receptionist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatment_branch`
--
ALTER TABLE `treatment_branch`
  ADD CONSTRAINT `treatment_branch_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `treatment_branch_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_address_type`
--
ALTER TABLE `user_address_type`
  ADD CONSTRAINT `user_address_type_ibfk_2` FOREIGN KEY (`address_type_code`) REFERENCES `address_type` (`address_type_code`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_address_type_ibfk_3` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_branch`
--
ALTER TABLE `user_branch`
  ADD CONSTRAINT `user_branch_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_branch_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD CONSTRAINT `user_permission_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_code`) REFERENCES `role` (`role_code`) ON UPDATE CASCADE;

--
-- Constraints for table `user_status`
--
ALTER TABLE `user_status`
  ADD CONSTRAINT `user_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_status_ibfk_2` FOREIGN KEY (`status_code`) REFERENCES `status` (`status_code`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
