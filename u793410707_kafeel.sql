-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2020 at 04:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u793410707_kafeel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(45) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_mob1` text NOT NULL,
  `admin_mob2` text NOT NULL,
  `admin_nationality_id` int(11) NOT NULL,
  `admin_amount` decimal(30,2) NOT NULL,
  `admin_installment` int(11) NOT NULL,
  `admin_remaining_amount` decimal(30,2) NOT NULL,
  `admin_starting_date` date NOT NULL,
  `admin_expire_date` date NOT NULL,
  `admin_profile_pic` text NOT NULL,
  `admin_activation_key` text NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `main_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mob1`, `admin_mob2`, `admin_nationality_id`, `admin_amount`, `admin_installment`, `admin_remaining_amount`, `admin_starting_date`, `admin_expire_date`, `admin_profile_pic`, `admin_activation_key`, `admin_status`, `main_admin_id`) VALUES
(1, 'Umer Yes', 'umerxpod@gmail.com', '1234', '0985-9264782', '9083-2893008', 168, '12.00', 1, '1400.00', '2020-02-20', '2020-06-27', 'umer.jpg', '', 1, 1),
(2, 'Jamshaid', 'jimi@gmail.com', '1234', '0985-9264782', '90832893008', 1, '0.00', 1, '1200.00', '2020-02-20', '2020-06-26', '', '', 1, 1),
(3, 'Jamshaid', 'jimi2admin@gmail.com', '1234', '0981-3781738', '7897-8264726', 2, '1200.00', 2, '1000.00', '2020-05-22', '2020-09-24', '', '', 1, 1),
(4, 'Shazad', 'shazad@gmail.com', '1234', '0898-9789787', '0315-4567908', 1, '1500.00', 2, '1200.00', '2020-02-21', '2020-05-29', '', '', 1, 1),
(5, 'Kafeel 001', 'Kafeel001@gmail.com', '12345', '3333-3333333', '3333-3333333', 2, '1500.00', 500, '600.00', '2020-02-24', '2020-02-24', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `admin_log_id` bigint(20) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_log_ip` text NOT NULL,
  `admin_log_date` date NOT NULL,
  `admin_log_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`admin_log_id`, `admin_id`, `admin_log_ip`, `admin_log_date`, `admin_log_time`) VALUES
(1, 5, '103.77.11.2', '2020-02-24', '14:06:13'),
(2, 1, '182.186.57.118', '2020-02-29', '16:51:16'),
(3, 1, '27.255.26.23', '2020-03-09', '20:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `ci_id` int(11) NOT NULL,
  `ci_username` text NOT NULL,
  `ci_password` text NOT NULL,
  `ci_name` text NOT NULL,
  `ci_address` text NOT NULL,
  `ci_company_name` int(11) NOT NULL,
  `ci_city` text NOT NULL,
  `ci_partner1_name` text NOT NULL,
  `ci_partner1_mob1` text NOT NULL,
  `ci_partner1_mob2` text NOT NULL,
  `ci_partner2_name` text NOT NULL,
  `ci_partner2_mob1` text NOT NULL,
  `ci_partner2_mob2` text NOT NULL,
  `ci_landline` text NOT NULL,
  `ci_emirates_id` text NOT NULL,
  `ci_emirates_id_image` text NOT NULL,
  `ci_emirates_id_issue_date` date NOT NULL,
  `ci_emirates_id_expiry_date` date NOT NULL,
  `ci_nationality_id` int(11) NOT NULL,
  `ci_passport_no` text NOT NULL,
  `ci_passport_image` text NOT NULL,
  `ci_passport_issue_date` date NOT NULL,
  `ci_passport_expiry_date` date NOT NULL,
  `ci_amount` decimal(20,2) NOT NULL,
  `ci_installment` int(11) NOT NULL,
  `ci_r_balance` decimal(20,2) NOT NULL,
  `ci_agreement_date` date NOT NULL,
  `ci_sponsership_end_date` date NOT NULL,
  `ci_percentage` decimal(15,2) NOT NULL,
  `ci_total_emp` int(11) NOT NULL,
  `ci_profile_pic` text NOT NULL,
  `ci_remarks` text NOT NULL,
  `ci_desigination` text NOT NULL,
  `ci_salary` decimal(20,2) NOT NULL,
  `ci_visa_issue_date` date NOT NULL,
  `ci_visa_expire_date` date NOT NULL,
  `ci_labor_contract_image` text NOT NULL,
  `ci_activation_code` text NOT NULL,
  `ci_client_act_status` tinyint(1) NOT NULL,
  `ci_wakeel_act_status` tinyint(1) NOT NULL,
  `ci_del_status` tinyint(1) NOT NULL,
  `wakeel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`ci_id`, `ci_username`, `ci_password`, `ci_name`, `ci_address`, `ci_company_name`, `ci_city`, `ci_partner1_name`, `ci_partner1_mob1`, `ci_partner1_mob2`, `ci_partner2_name`, `ci_partner2_mob1`, `ci_partner2_mob2`, `ci_landline`, `ci_emirates_id`, `ci_emirates_id_image`, `ci_emirates_id_issue_date`, `ci_emirates_id_expiry_date`, `ci_nationality_id`, `ci_passport_no`, `ci_passport_image`, `ci_passport_issue_date`, `ci_passport_expiry_date`, `ci_amount`, `ci_installment`, `ci_r_balance`, `ci_agreement_date`, `ci_sponsership_end_date`, `ci_percentage`, `ci_total_emp`, `ci_profile_pic`, `ci_remarks`, `ci_desigination`, `ci_salary`, `ci_visa_issue_date`, `ci_visa_expire_date`, `ci_labor_contract_image`, `ci_activation_code`, `ci_client_act_status`, `ci_wakeel_act_status`, `ci_del_status`, `wakeel_id`) VALUES
(1, 'rasberry', '1234', 'Respond', 'MUX', 3, 'Dubai', 'UTS', '121212', '343434', 'FIDA', '344567', '564545', '32423', '122-1127-8647856-2', 'uts6.png', '2020-02-22', '2020-06-19', 168, '12137862', 'cropped-logo (1).png', '2020-02-21', '2020-07-23', '1200.00', 2, '500.00', '2020-02-22', '2020-05-29', '2.00', 3, 'totop@2x.png', 'No', 'Digital Marketer', '25000.00', '2020-02-20', '2020-05-28', 'WhatsApp Image 2020-02-22 at 9.48.16 AM.jpeg', '', 1, 1, 0, 1),
(2, 'majid', '1234', 'Majid', 'Multan', 1, 'Multan', 'UTS', '03437057036', '03437057036', 'TS', '03437057036', '03437057036', '1231414', '121-3131-3434567-6', 'images.jpg', '2020-02-24', '2020-03-07', 168, '12324242', 'WhatsApp Image 2020-02-23 at 12.25.22 PM.jpeg', '2020-02-25', '2020-04-15', '23.00', 3, '1400.00', '2020-02-24', '2020-03-27', '3.00', 12, 'Nabi FB.jpeg', 'Yes good client', 'Developer', '2000.00', '2020-02-24', '2020-04-24', '', '', 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_log`
--

CREATE TABLE `client_log` (
  `client_log_id` bigint(20) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_log_ip` text NOT NULL,
  `client_log_date` date NOT NULL,
  `client_log_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_log`
--

INSERT INTO `client_log` (`client_log_id`, `client_id`, `client_log_ip`, `client_log_date`, `client_log_time`) VALUES
(1, 1, '182.186.38.219', '2020-02-24', '14:56:53'),
(2, 2, '182.186.38.219', '2020-02-24', '15:01:30'),
(3, 1, '92.97.18.125', '2020-03-02', '18:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `company_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`) VALUES
(1, 'UTS'),
(3, 'Google'),
(4, 'Firebase'),
(5, 'Hash');

-- --------------------------------------------------------

--
-- Table structure for table `main_admin`
--

CREATE TABLE `main_admin` (
  `main_admin_id` int(11) NOT NULL,
  `main_admin_name` text NOT NULL,
  `main_admin_email` text NOT NULL,
  `main_admin_password` text NOT NULL,
  `main_admin_pic` text NOT NULL,
  `main_admin_verification_code` text NOT NULL,
  `main_admin_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_admin`
--

INSERT INTO `main_admin` (`main_admin_id`, `main_admin_name`, `main_admin_email`, `main_admin_password`, `main_admin_pic`, `main_admin_verification_code`, `main_admin_status`) VALUES
(1, 'Javed', 'muyofficial@gmail.com', '1234', 'index.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wakeel_info`
--

CREATE TABLE `wakeel_info` (
  `wi_id` int(11) NOT NULL,
  `wi_username` text NOT NULL,
  `wi_password` text NOT NULL,
  `wi_mob1` text NOT NULL,
  `wi_mob2` text NOT NULL,
  `wi_nationality_id` int(11) NOT NULL,
  `wi_amount` decimal(20,2) NOT NULL,
  `wi_installment` int(11) NOT NULL,
  `wi_remaining_amount` decimal(20,2) NOT NULL,
  `wi_starting_date` date NOT NULL,
  `wi_expire_date` date NOT NULL,
  `wi_activation_code` text NOT NULL,
  `wi_act_status` tinyint(1) NOT NULL,
  `wi_del_status` tinyint(1) NOT NULL,
  `wi_sub_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wakeel_info`
--

INSERT INTO `wakeel_info` (`wi_id`, `wi_username`, `wi_password`, `wi_mob1`, `wi_mob2`, `wi_nationality_id`, `wi_amount`, `wi_installment`, `wi_remaining_amount`, `wi_starting_date`, `wi_expire_date`, `wi_activation_code`, `wi_act_status`, `wi_del_status`, `wi_sub_admin_id`) VALUES
(1, 'umerxpod', '1234', '0349-8765431', '0331-7898220', 168, '1200.00', 1, '0.00', '2020-02-22', '2020-04-23', '', 1, 0, 1),
(2, 'jimiwi', '1234', '0938-4934893', '9837-4893748', 8, '1200.00', 2, '1400.00', '2020-02-22', '2020-06-25', '', 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wakeel_log`
--

CREATE TABLE `wakeel_log` (
  `wakeel_log_id` bigint(20) NOT NULL,
  `wakeel_id` int(11) NOT NULL,
  `wakeel_log_ip` text NOT NULL,
  `wakeel_log_date` date NOT NULL,
  `wakeel_log_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wakeel_log`
--

INSERT INTO `wakeel_log` (`wakeel_log_id`, `wakeel_id`, `wakeel_log_ip`, `wakeel_log_date`, `wakeel_log_time`) VALUES
(1, 1, '92.98.41.226', '2020-02-24', '13:31:19'),
(2, 1, '182.186.38.219', '2020-02-24', '14:57:17'),
(3, 1, '182.186.38.219', '2020-02-24', '15:03:01'),
(4, 1, '182.186.57.118', '2020-02-29', '16:53:15'),
(5, 1, '92.97.18.125', '2020-03-02', '17:49:13'),
(6, 1, '92.97.18.125', '2020-03-02', '17:57:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`admin_log_id`);

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `client_log`
--
ALTER TABLE `client_log`
  ADD PRIMARY KEY (`client_log_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `main_admin`
--
ALTER TABLE `main_admin`
  ADD PRIMARY KEY (`main_admin_id`);

--
-- Indexes for table `wakeel_info`
--
ALTER TABLE `wakeel_info`
  ADD PRIMARY KEY (`wi_id`);

--
-- Indexes for table `wakeel_log`
--
ALTER TABLE `wakeel_log`
  ADD PRIMARY KEY (`wakeel_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `admin_log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `client_log`
--
ALTER TABLE `client_log`
  MODIFY `client_log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wakeel_log`
--
ALTER TABLE `wakeel_log`
  MODIFY `wakeel_log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
