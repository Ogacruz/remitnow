-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 01:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remitnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountID` int(11) NOT NULL,
  `account_userid` int(11) NOT NULL,
  `account_bank` varchar(150) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `account_status` tinyint(1) NOT NULL DEFAULT 1,
  `account_company` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountID`, `account_userid`, `account_bank`, `account_name`, `account_no`, `account_status`, `account_company`) VALUES
(1, 1, 'Providus Bank', 'Nduka Daniel', '9603133207', 1, 'Strowallet');

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `approvalID` int(11) NOT NULL,
  `approval_projectid` int(11) NOT NULL,
  `approval_1` tinyint(1) NOT NULL DEFAULT 0,
  `approval_2` tinyint(1) NOT NULL DEFAULT 0,
  `approval_3` tinyint(1) NOT NULL DEFAULT 0,
  `approval_1_date` varchar(40) NOT NULL,
  `approval_2_date` varchar(40) NOT NULL,
  `approval_3_date` varchar(40) NOT NULL,
  `approval_1_comment` text NOT NULL,
  `approval_2_comment` text NOT NULL,
  `approval_3_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`approvalID`, `approval_projectid`, `approval_1`, `approval_2`, `approval_3`, `approval_1_date`, `approval_2_date`, `approval_3_date`, `approval_1_comment`, `approval_2_comment`, `approval_3_comment`) VALUES
(1, 1, 3, 3, 3, '0', '0', '28/08/2022 02:28:48 am', '0', '0', 'rgeger'),
(2, 2, 3, 3, 3, '0', '0', '28/08/2022 02:30:00 am', '0', '0', 'rrr'),
(3, 3, 3, 3, 3, '0', '0', '28/08/2022 02:30:44 am', '0', '0', 'goof');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `beneficiaryID` int(11) NOT NULL,
  `beneficiary_userid` int(11) NOT NULL,
  `beneficiary_company` varchar(50) NOT NULL,
  `beneficiary_type` varchar(50) NOT NULL,
  `beneficiary_item` varchar(20) NOT NULL,
  `beneficiary_status` tinyint(1) NOT NULL DEFAULT 1,
  `beneficiary_date` varchar(30) NOT NULL,
  `beneficiary_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`beneficiaryID`, `beneficiary_userid`, `beneficiary_company`, `beneficiary_type`, `beneficiary_item`, `beneficiary_status`, `beneficiary_date`, `beneficiary_name`) VALUES
(1, 1, 'MTN', 'Phone', '08106888077', 1, '2035-09-04 04:04:06', 'Oga Dan'),
(2, 1, 'MTN', 'Phone', '09136550889', 1, '2035-09-04 04:04:31', 'Cruz Daniel'),
(3, 1, 'Access', 'Acc/no', '0040615369', 1, '2035-09-04 04:04:31', 'Nduka Abuchi Daniel '),
(4, 1, 'MTN', 'Phone', '09136550888', 1, '2035-09-04 04:04:31', 'Cruz Daniel'),
(5, 1, 'MTN', 'Phone', '09136550887', 1, '2035-09-04 04:04:31', 'Cruz Daniel'),
(6, 1, 'MTN', 'Phone', '09136550886', 1, '2035-09-04 04:04:31', 'Cruz Daniel');

-- --------------------------------------------------------

--
-- Table structure for table `businesscategories`
--

CREATE TABLE `businesscategories` (
  `businesscategoryID` int(11) NOT NULL,
  `businesscategory_name` varchar(200) NOT NULL,
  `businesscategory_image` varchar(100) NOT NULL,
  `businesscategory_image_path` text NOT NULL,
  `businesscategory_status` tinyint(1) NOT NULL DEFAULT 1,
  `businesscategory_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `businesscategories`
--

INSERT INTO `businesscategories` (`businesscategoryID`, `businesscategory_name`, `businesscategory_image`, `businesscategory_image_path`, `businesscategory_status`, `businesscategory_date`) VALUES
(1, 'Women\'s Fashion', '1705673878.png', 'http://localhost/public/api/img/core-img/1705673878.png', 1, '2024-01-19 03:17:58 '),
(2, 'Groceries & Pets', '1705674235.png', 'http://localhost/public/api/img/core-img/1705674235.png', 1, '2024-01-19 03:23:54 '),
(3, 'Health & Beauty', '1705674296.png', 'http://localhost/public/api/img/core-img/1705674296.png', 1, '2024-01-19 03:24:55 '),
(4, 'Sports & Outdoors', '1705674372.png', 'http://localhost/public/api/img/core-img/1705674372.png', 1, '2024-01-19 03:26:12 '),
(5, 'Home Appliance', '1705674446.png', 'http://localhost/public/api/img/core-img/1705674446.png', 1, '2024-01-19 03:27:25 '),
(6, 'Tour & Travels', '1705674483.png', 'http://localhost/public/api/img/core-img/1705674483.png', 1, '2024-01-19 03:28:02 '),
(7, 'Mother & Baby', '1705674512.png', 'http://localhost/public/api/img/core-img/1705674512.png', 1, '2024-01-19 03:28:32 '),
(8, 'Clearance Sale', '1705674540.png', 'http://localhost/public/api/img/core-img/1705674540.png', 1, '2024-01-19 03:29:00 ');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_newsid` int(11) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_phone` varchar(20) NOT NULL,
  `comment_message` text NOT NULL,
  `comment_status` tinyint(1) NOT NULL DEFAULT 0,
  `comment_date` varchar(20) NOT NULL,
  `comment_time` varchar(10) NOT NULL,
  `comment_day` varchar(10) NOT NULL,
  `comment_month` varchar(10) NOT NULL,
  `comment_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_sex` varchar(20) NOT NULL,
  `employee_phone` varchar(20) NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_dob` varchar(30) NOT NULL,
  `employee_passport` varchar(50) NOT NULL,
  `employee_landmark` text NOT NULL,
  `employee_address` varchar(200) NOT NULL,
  `employee_state` varchar(100) NOT NULL,
  `employee_lga` varchar(100) NOT NULL,
  `employee_created` varchar(30) NOT NULL,
  `employee_role` varchar(30) NOT NULL,
  `employee_status` tinyint(1) NOT NULL DEFAULT 1,
  `employee_addedby` int(11) NOT NULL,
  `employee_datejoining` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `employee_name`, `employee_sex`, `employee_phone`, `employee_email`, `employee_dob`, `employee_passport`, `employee_landmark`, `employee_address`, `employee_state`, `employee_lga`, `employee_created`, `employee_role`, `employee_status`, `employee_addedby`, `employee_datejoining`) VALUES
(1, 'Sunday Igwe', 'Male', '08106888072', 'sunday@gmail.com', '2024-01-01', '1705667689.png', 'Rainbow Net', 'No 10 Sunday Lane Awada', 'Anambra', 'Ihiala', '2024-01-19', '', 1, 1, '2024-01-05'),
(2, 'Jed Becker', 'Female', '08106778876', 'youremail81624@gmail.com', '2023-06-03', '1705667905.jpeg', 'Unde dolorum sequi molestiae ut necessitatibus commodi nostrum itaque dolorum.', '51238 Sterling Plains', 'Anambra', 'Orumba North', '2024-01-19', '', 1, 1, '2024-04-01'),
(3, 'Mandy Jacobson', 'Male', '091056667554', 'youremail97102@gmail.com', '2024-08-13', '1705668067.jpg', 'Perferendis deserunt magnam officiis asperiores mollitia.', '924 Thompson Lakes', 'FCT', 'Gwagwalada', '2024-01-19', '', 1, 1, '2024-07-02'),
(4, 'Oral Wilkinson', 'Male', '08109887654', 'youremail35616@gmail.com', '2024-01-04', '32501078_1705744185.png', 'Quasi ratione velit harum rerum.', '4642 Blaze Bridge', 'Imo', 'Nkwerre', '2024-01-20', '', 1, 2, '2025-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `event_cat` int(11) NOT NULL,
  `event_start` varchar(20) NOT NULL,
  `event_end` varchar(20) NOT NULL,
  `event_timein` varchar(20) NOT NULL,
  `event_timeout` varchar(20) NOT NULL,
  `event_location` varchar(250) NOT NULL,
  `event_file` varchar(100) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_desc` text NOT NULL,
  `event_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqsID` int(11) NOT NULL,
  `faqs_q` text NOT NULL,
  `faqs_a` text NOT NULL,
  `faqs_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqsID`, `faqs_q`, `faqs_a`, `faqs_status`) VALUES
(1, 'What is 1 Youth 2 Skills?', 'It\'s a program designed via the Ministry of Youth Development Of Anambra State to empower and equip the Anambra youths with Skills.', 1),
(2, 'Will Soludo Launches One Youth, Two-Skills Initiative, Targets Equipping 10,000 Youths With Digital Skills Annually?', 'We will give you the skill and training. Our agenda is to have one youth with at least two skills. That is the future of Anambra', 1),
(3, 'Illo quis dolorem of', 'Sint officiis eum c', 1),
(4, 'Impedit ea reprehen', 'Laboriosam aut quis', 1),
(5, 'Quasi earum quis rep', 'Est nobis earum aut ', 1),
(6, 'Sunt et voluptatem ', 'Distinctio Facilis ', 1),
(7, 'Repellendus Distinc', 'Numquam debitis ea f', 1),
(8, 'Aut qui corporis eni', 'Dolorum molestiae vo', 1),
(9, 'Amet sequi voluptat', 'Ipsum iste voluptate', 1),
(10, 'Excepturi ea asperna', 'Officia fugiat disti', 1),
(11, 'Laboriosam commodi ', 'Et et commodi unde n', 1),
(12, 'Excepturi recusandae', 'In aut maiores a cup', 1),
(13, 'Saepe veniam ipsam ', 'Ipsa a eius ea ipsu', 1),
(14, 'Ducimus omnis do om', 'Explicabo Tempora r', 1),
(15, 'Fugiat rerum est of', 'Laboriosam fugit o', 1),
(16, 'Debitis voluptatem d', 'Accusamus consectetu', 1),
(17, 'Assumenda libero vol', 'Dolore sit ut ex ali', 1),
(18, 'Est consequatur Max', 'Est irure sit quia u', 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fileID` int(11) NOT NULL,
  `file_title` varchar(200) NOT NULL,
  `file_desc` text NOT NULL,
  `file_file` varchar(100) NOT NULL,
  `file_type` varchar(30) NOT NULL,
  `file_filemime` varchar(30) NOT NULL,
  `file_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fileuploads`
--

CREATE TABLE `fileuploads` (
  `fileuploadID` int(11) NOT NULL,
  `file_product_id` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `file_path` text NOT NULL,
  `file_mime` varchar(200) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fileuploads`
--

INSERT INTO `fileuploads` (`fileuploadID`, `file_product_id`, `file_name`, `file_path`, `file_mime`, `file_type`) VALUES
(1, 1, '35226074_1705810829.png', 'http://localhost/public/api/img/product/new/35226074_1705810829.png', 'image/png', 'png'),
(2, 1, '84107158_1705810829.png', 'http://localhost/public/api/img/product/new/84107158_1705810829.png', 'image/png', 'png'),
(3, 1, '01185275_1705810829.png', 'http://localhost/public/api/img/product/new/01185275_1705810829.png', 'image/png', 'png'),
(4, 2, '27804663_1705811128.png', 'http://localhost/public/api/img/product/new/27804663_1705811128.png', 'image/png', 'png'),
(5, 2, '28063075_1705811128.png', 'http://localhost/public/api/img/product/new/28063075_1705811128.png', 'image/png', 'png'),
(6, 3, '38709411_1705811197.png', 'http://localhost/public/api/img/product/new/38709411_1705811197.png', 'image/png', 'png'),
(7, 4, '46031950_1705811243.png', 'http://localhost/public/api/img/product/new/46031950_1705811243.png', 'image/png', 'png'),
(8, 4, '88340176_1705811243.png', 'http://localhost/public/api/img/product/new/88340176_1705811243.png', 'image/png', 'png'),
(9, 5, '06572853_1705811297.png', 'http://localhost/public/api/img/product/new/06572853_1705811297.png', 'image/png', 'png'),
(10, 5, '58427169_1705811297.png', 'http://localhost/public/api/img/product/new/58427169_1705811297.png', 'image/png', 'png'),
(11, 6, '51320207_1705811379.png', 'http://localhost/public/api/img/product/new/51320207_1705811379.png', 'image/png', 'png'),
(12, 6, '53468859_1705811379.png', 'http://localhost/public/api/img/product/new/53468859_1705811379.png', 'image/png', 'png'),
(13, 7, '50312648_1705811490.png', 'http://localhost/public/api/img/product/new/50312648_1705811490.png', 'image/png', 'png'),
(14, 7, '34902857_1705811490.png', 'http://localhost/public/api/img/product/new/34902857_1705811490.png', 'image/png', 'png'),
(15, 8, '38634670_1705811555.png', 'http://localhost/public/api/img/product/new/38634670_1705811555.png', 'image/png', 'png'),
(16, 8, '24759641_1705811555.png', 'http://localhost/public/api/img/product/new/24759641_1705811555.png', 'image/png', 'png'),
(17, 8, '89512607_1705811555.png', 'http://localhost/public/api/img/product/new/89512607_1705811555.png', 'image/png', 'png'),
(18, 9, '62257305_1705811631.png', 'http://localhost/public/api/img/product/new/62257305_1705811631.png', 'image/png', 'png'),
(19, 9, '93601842_1705811631.png', 'http://localhost/public/api/img/product/new/93601842_1705811631.png', 'image/png', 'png'),
(20, 9, '98371745_1705811631.png', 'http://localhost/public/api/img/product/new/98371745_1705811631.png', 'image/png', 'png'),
(21, 10, '01271039_1705811674.png', 'http://localhost/public/api/img/product/new/01271039_1705811674.png', 'image/png', 'png'),
(22, 10, '02389617_1705811674.png', 'http://localhost/public/api/img/product/new/02389617_1705811674.png', 'image/png', 'png'),
(23, 10, '15791300_1705811674.png', 'http://localhost/public/api/img/product/new/15791300_1705811674.png', 'image/png', 'png'),
(24, 10, '16745808_1705811674.png', 'http://localhost/public/api/img/product/new/16745808_1705811674.png', 'image/png', 'png'),
(25, 11, '60873154_1705811746.png', 'http://localhost/public/api/img/product/new/60873154_1705811746.png', 'image/png', 'png'),
(26, 11, '28147715_1705811746.png', 'http://localhost/public/api/img/product/new/28147715_1705811746.png', 'image/png', 'png'),
(27, 11, '46120617_1705811746.png', 'http://localhost/public/api/img/product/new/46120617_1705811746.png', 'image/png', 'png'),
(28, 11, '58460517_1705811746.png', 'http://localhost/public/api/img/product/new/58460517_1705811746.png', 'image/png', 'png'),
(29, 12, '68307845_1705811852.png', 'http://localhost/public/api/img/product/new/68307845_1705811852.png', 'image/png', 'png'),
(30, 12, '16148572_1705811852.png', 'http://localhost/public/api/img/product/new/16148572_1705811852.png', 'image/png', 'png'),
(31, 12, '38131042_1705811852.png', 'http://localhost/public/api/img/product/new/38131042_1705811852.png', 'image/png', 'png'),
(32, 13, '51201534_1705811910.png', 'http://localhost/public/api/img/product/new/51201534_1705811910.png', 'image/png', 'png'),
(33, 14, '17043369_1705811949.jpg', 'http://localhost/public/api/img/product/new/17043369_1705811949.jpg', 'image/jpeg', 'jpg'),
(34, 14, '20478136_1705811949.jpg', 'http://localhost/public/api/img/product/new/20478136_1705811949.jpg', 'image/jpeg', 'jpg'),
(35, 14, '12680859_1705811949.jpg', 'http://localhost/public/api/img/product/new/12680859_1705811949.jpg', 'image/jpeg', 'jpg'),
(36, 15, '79782253_1705812034.jpg', 'http://localhost/public/api/img/product/new/79782253_1705812034.jpg', 'image/jpeg', 'jpg'),
(37, 16, '02075796_1705812174.png', 'http://localhost/public/api/img/product/new/02075796_1705812174.png', 'image/png', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeID` int(11) NOT NULL,
  `like_newsID` int(11) NOT NULL,
  `like_ip` varchar(30) NOT NULL,
  `like_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` int(11) NOT NULL,
  `log_userid` int(11) NOT NULL,
  `log_desc` text NOT NULL,
  `log_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` int(11) NOT NULL,
  `message_name` varchar(200) NOT NULL,
  `message_phone` varchar(20) DEFAULT NULL,
  `message_email` varchar(100) NOT NULL,
  `message_subject` varchar(200) DEFAULT NULL,
  `message_text` text NOT NULL,
  `message_date` varchar(30) NOT NULL,
  `message_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permissionID` int(11) NOT NULL,
  `permission_userid` varchar(40) NOT NULL,
  `permission_insert` varchar(40) NOT NULL,
  `permission_update` varchar(40) NOT NULL,
  `permission_delete` varchar(40) NOT NULL,
  `permission_read` varchar(40) NOT NULL,
  `permission_date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_msg` text NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_tags` varchar(200) NOT NULL,
  `post_images` varchar(30) NOT NULL,
  `post_cat` int(11) NOT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT 0,
  `post_publish_date` varchar(50) NOT NULL,
  `post_date` varchar(30) NOT NULL,
  `post_privacy` varchar(50) NOT NULL,
  `post_content_type` varchar(30) NOT NULL,
  `post_publish_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `post_title`, `post_msg`, `post_author`, `post_tags`, `post_images`, `post_cat`, `post_status`, `post_publish_date`, `post_date`, `post_privacy`, `post_content_type`, `post_publish_status`) VALUES
(1, 'One Youth Two Skills', '<p>We&rsquo;re a top provider of CFDs and mirror trading operations in over 27 countries using automated trading computers for market decisions and instant market executions to give out profitable trade results. We give investors leveraged access to over 15 financial markets through our award-winning portal.</p>\r\n\r\n<p>We&rsquo;re a top provider of CFDs and mirror trading operations in over 27 countries using automated trading computers for market decisions and instant market executions to give out profitable trade results. We give investors leveraged access to over 15 financial markets through our award-winning portal.</p>\r\n\r\n<p>We&rsquo;re a top provider of CFDs and mirror trading operations in over 27 countries using automated trading computers for market decisions and instant market executions to give out profitable trade results. We give investors leveraged access to over 15 financial markets through our award-winning portal.</p>\r\n\r\n<p>We&rsquo;re a top provider of CFDs and mirror trading operations in over 27 countries using automated trading computers for market decisions and instant market executions to give out profitable trade results. We give investors leveraged access to over 15 financial markets through our award-winning portal.</p>\r\n', 3, '[{\"value\":\"Empowerment\"},{\"value\":\"SKills\"},{\"value\":\"Anambra\"},{\"value\":\"ICT\"}]', '1702526404.jpg', 8, 1, '2023-12-14', 'Dec 14, 2023', 'Public', '1', 'Not Approved'),
(2, 'Investment', '<p>Hey there, Facebook family! ???? We&#39;re all still reeling from the news of the passing of the legendary Andr&eacute; Braugher, who brilliantly portrayed Captain Raymond Holt in the much-loved series &#39;Brooklyn Nine-Nine&#39; and starred in &#39;Homicide: Life on the Street&#39;. His talent and charisma will be sorely missed. ???? Just as Braugher&#39;s character, Captain Holt, navigated the unpredictable world of the 99th precinct with unwavering dedication and a keen strategic mind, Atla-invest&trade; - For serious traders, is committed to helping you navigate the equally unpredictable world of trading. ???? Our platform, atla-invest.com, is designed to support serious traders, just like you, offering real-time market insights, advanced trading tools, and personalized customer service. In honor of Andr&eacute; Braugher&#39;s legacy, let&#39;s remember to approach our passions with the same dedication and strategic thinking that he brought to his roles. Stay strong, stay focused, and happy trading! ???????????? #Andr&eacute;Braugher #Brooklyn99 #Trading #AtlaInvest</p>\r\n', 6, '[{\"value\":\"Trade\"},{\"value\":\"Investment\"}]', '1702528439.jpg', 12, 1, '2023-12-15', 'Dec 14, 2023', 'Public', '1', 'Not Approved'),
(3, 'How does SocialBee help me create social posts?', '<p>No need of writing long brand promotion copies or spend hours designing social media posts for them. Give a few text inputs about your brand to Predis and you will get absolutely stunning and customized brand promotion creatives in a matter of seconds. With more than 10000 proven templates, Predis knows what works best for your brand. Generate captions and hashtags for your posts and post them straight away on your social media channel.</p>\n', 5, '[{\"value\":\"Education\"},{\"value\":\"Learning\"}]', '1702536087.jpg', 2, 1, '2023-12-18', 'Dec 14, 2023', 'Public', '1', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_current_price` varchar(20) NOT NULL,
  `product_old_price` varchar(20) NOT NULL,
  `product_categoryid` int(11) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_featured` varchar(50) NOT NULL,
  `product_description` text NOT NULL,
  `product_isflash` varchar(50) NOT NULL,
  `product_tag` varchar(50) NOT NULL,
  `product_date` varchar(50) NOT NULL,
  `product_status` tinyint(1) NOT NULL DEFAULT 1,
  `product_posterid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `product_code`, `product_name`, `product_image`, `product_current_price`, `product_old_price`, `product_categoryid`, `product_brand`, `product_featured`, `product_description`, `product_isflash`, `product_tag`, `product_date`, `product_status`, `product_posterid`) VALUES
(1, 'PRDC-8254925338', 'Dynamic Marketing Executive', 'uploaded', '4500', '6700', 2, 'Cap', 'Top Products', 'Impedit a ad molestiae.', '2024-02-04', 'Sale', '2024-01-21 05:20:28 am', 1, 1),
(2, 'PRDC-7756349184', 'Forward Group Specialist', 'uploaded', '15600', '17000', 4, 'Cap', 'Weekly Best Sellers', 'Voluptatibus dolorum ipsum eum illo voluptates debitis saepe ipsum.', '', 'On Sale', '2024-01-21 05:25:27 am', 1, 1),
(3, 'PRDC-8061681390', 'International Metrics Executive', 'uploaded', '5000', '6500', 3, 'Hanger', 'Featured Products', 'Minima velit unde eligendi assumenda fugit quas reiciendis tempora aperiam.', '', 'Sale', '2024-01-21 05:26:37 am', 1, 1),
(4, 'PRDC-9223473160', 'Internal Quality Associate', 'uploaded', '4500', '4800', 1, 'Internet', 'Featured Products', 'Eos adipisci atque illo placeat illum.', '', 'New', '2024-01-21 05:27:22 am', 1, 1),
(5, 'PRDC-9571025678', 'Direct Division Facilitator', 'uploaded', '530', '365', 8, 'Direct', 'Featured Products', 'Deleniti corporis laboriosam nesciunt ducimus quia id porro accusantium.', '', 'Sale', '2024-01-21 05:28:16 am', 1, 1),
(6, 'PRDC-7370588530', 'Regional Optimization', 'uploaded', '11000', '13500', 8, 'Top', 'Top Products', 'Cum sapiente suscipit.', '', 'On Sale', '2024-01-21 05:29:38 am', 1, 1),
(7, 'PRDC-0138344667', 'District Communications Strategist', 'uploaded', '7500', '8650', 1, 'Pot', 'Featured Products', 'Sapiente ab eum eveniet expedita.', '2024-02-24', 'Sale', '2024-01-21 05:31:29 am', 1, 1),
(8, 'PRDC-2380153866', 'Customer Interactions Producer', 'uploaded', '60000', '72000', 8, 'Chairs', 'Top Products', 'Perferendis maxime quae ratione in labore excepturi cupiditate velit eius.', '', 'New', '2024-01-21 05:32:34 am', 1, 1),
(9, 'PRDC-3964203205', 'Regional Data Orchestrator', 'uploaded', '5200', '7500', 7, 'Shirts', 'Weekly Best Sellers', 'Incidunt iure officia omnis aut commodi nostrum.', '2024-01-18', 'On Sale', '2024-01-21 05:33:50 am', 1, 1),
(10, 'PRDC-5640850286', 'International Applications Producer', 'uploaded', '601', '370', 1, 'Weekly', 'Weekly Best Sellers', 'Nulla odio quia quidem placeat unde perferendis quo.', '2024-04-04', 'New', '2024-01-21 05:34:33 am', 1, 1),
(11, 'PRDC-5382127041', 'Lead Creative Executive', 'uploaded', '1200', '3500', 6, 'Lead', 'Top Products', 'Animi explicabo omnis at.', '2024-06-13', 'On Sale', '2024-01-21 05:35:45 am', 1, 1),
(12, 'PRDC-3225570847', 'Internal Paradigm Analyst', 'uploaded', '12500', '63500', 5, '182', 'Featured Products', 'Tempore cum veniam eveniet corrupti exercitationem eius.', '2024-07-01', 'Sale', '2024-01-21 05:37:31 am', 1, 1),
(13, 'PRDC-2715769808', 'Principal Group Coordinator', 'uploaded', '4850', '5630', 6, '598', 'Featured Products', 'Id a consequatur rerum rem dolore minus.', '2023-10-16', 'New', '2024-01-21 05:38:29 am', 1, 1),
(14, 'PRDC-8651063041', 'Legacy Optimization Strategist', 'uploaded', '663', '582', 1, '34', 'Top Products', 'Illo maiores esse architecto ab illum quasi.', '2024-02-20', 'On Sale', '2024-01-21 05:39:08 am', 1, 1),
(15, 'PRDC-7820413696', 'Central Optimization Architect', 'uploaded', '16500', '28000', 4, '214', 'Top Products', 'Consequuntur est beatae porro amet ullam modi commodi repudiandae dolor.', '', 'New', '2024-01-21 05:40:33 am', 1, 1),
(16, 'PRDC-9163624557', 'Central Group Developer', 'uploaded', '2600', '3730', 8, 'New', 'Weekly Best Sellers', 'Adipisci odio eligendi odit nisi deserunt fuga atque alias laudantium.', '2024-10-30', 'New', '2024-01-21 05:42:54 am', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profileID` int(11) NOT NULL,
  `profile_userid` int(11) NOT NULL,
  `profile_organization` text NOT NULL,
  `profile_url` text NOT NULL,
  `profile_cp` varchar(200) NOT NULL,
  `profile_cphone` varchar(50) NOT NULL,
  `profile_telephone` varchar(100) NOT NULL,
  `profile_email` varchar(100) NOT NULL,
  `profile_chq` varchar(200) NOT NULL,
  `profile_rcno` varchar(50) NOT NULL,
  `profile_status` tinyint(1) NOT NULL DEFAULT 1,
  `profile_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `stateID` int(11) NOT NULL,
  `state_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`stateID`, `state_name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'AkwaIbom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Crossrivers'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'FCT'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nassarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `teamID` int(11) NOT NULL,
  `team_empid` int(11) NOT NULL,
  `team_position` varchar(100) NOT NULL,
  `team_category` varchar(30) NOT NULL,
  `team_date` varchar(30) NOT NULL,
  `team_status` tinyint(1) NOT NULL DEFAULT 1,
  `team_facebook` text NOT NULL,
  `team_twitter` text NOT NULL,
  `team_instagram` text NOT NULL,
  `team_linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonialID` int(11) NOT NULL,
  `testimonial_membershipid` int(11) NOT NULL,
  `testimonial_msg` text NOT NULL,
  `testimonial_date` varchar(100) NOT NULL,
  `testimonial_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL COMMENT 'Primary Key',
  `user_branchid` int(11) NOT NULL DEFAULT 0,
  `user_emp_id` int(11) NOT NULL DEFAULT 0,
  `user_code` varchar(100) NOT NULL COMMENT 'usercode',
  `user_fullname` varchar(100) NOT NULL COMMENT 'name',
  `user_role` varchar(20) NOT NULL DEFAULT '''''''''''''''user''''''''''''''' COMMENT 'role',
  `user_phone` varchar(100) NOT NULL COMMENT 'phone',
  `user_email` varchar(100) NOT NULL COMMENT 'email',
  `user_password` varchar(100) NOT NULL COMMENT 'password',
  `user_ref` varchar(30) NOT NULL,
  `user_recap` varchar(100) NOT NULL COMMENT 'recap',
  `user_passport` text NOT NULL,
  `user_passport_path` text NOT NULL,
  `user_gids` varchar(200) NOT NULL,
  `user_gids_path` text NOT NULL,
  `user_created_at` varchar(50) NOT NULL COMMENT 'creation date',
  `user_token_link` text NOT NULL,
  `user_token` text NOT NULL,
  `user_otp` int(11) NOT NULL,
  `user_activation` tinyint(1) NOT NULL DEFAULT 0,
  `stage_mode` varchar(25) NOT NULL DEFAULT 'demo' COMMENT 'api_mode',
  `user_status` varchar(100) NOT NULL COMMENT 'user_status',
  `user_dob` varchar(40) NOT NULL,
  `user_sex` varchar(40) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_state` varchar(50) NOT NULL,
  `user_lga` varchar(100) NOT NULL,
  `user_town` varchar(200) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_tpin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `user_branchid`, `user_emp_id`, `user_code`, `user_fullname`, `user_role`, `user_phone`, `user_email`, `user_password`, `user_ref`, `user_recap`, `user_passport`, `user_passport_path`, `user_gids`, `user_gids_path`, `user_created_at`, `user_token_link`, `user_token`, `user_otp`, `user_activation`, `stage_mode`, `user_status`, `user_dob`, `user_sex`, `user_country`, `user_state`, `user_lga`, `user_town`, `user_address`, `user_tpin`) VALUES
(1, 0, 0, '8106888077', 'Nduka Daniel', 'superadmin', '08106888077', 'ndukadaniel360@gmail.com', '$2y$10$npynPym3pgmvtzexKKKz7.7Suw0i1GwmKhM7qVZHW35VvFMW8XNyW', 'Nill', 'Mchenry@123', '873251_1705598256.jpg', 'http://localhost//public/v1/assets/images/uploads/873251_1705598256.jpg', '673722_1705598256.png', 'http://localhost//public/v1/assets/images/uploads/673722_1705598256.png', '18/01/2024 18:17:36 pm', '', '', 0, 0, 'live', '1', '1988-11-11', 'Male', 'NG', 'Nill', 'Nill', '', 'Nill', 8077),
(2, 0, 1, '1705678481', 'Sunday Igwe', 'user', '08106888072', 'sunday@gmail.com', '$2y$10$LsH1OVrd.9G/0G4rV163QuqQJadNQflFwBxnakgViOCdd05Qa8PUm', '', 'Mchenry@123', '162529_1705780797.jpg', 'http://localhost//public/v1/assets/images/uploads/162529_1705780797.jpg', '', '', '2024-01-19', '', '', 0, 0, 'demo', '1', '', '', '', '', '', '', '', 0),
(3, 0, 2, '1705678501', 'Jed Becker', 'agent', '08106778876', 'youremail81624@gmail.com', '$2y$10$etSxfqbSgOOinXZiUQ0CDON.KRxaDplMmLGCoPaVb14MUt5rpk23u', '', 'Mchenry@123', '910766_1705744015.jpg', 'http://localhost//public/v1/assets/images/uploads/910766_1705744015.jpg', '', '', '2024-01-19', '', '', 0, 0, 'demo', '1', '', '', '', '', '', '', '', 0),
(4, 0, 3, '1705678535', 'Mandy Jacobson', 'agent', '091056667554', 'youremail97102@gmail.com', '$2y$10$Xbo9FDMqJ4aIolXUv4lCTebbNVgDkQrbdZVo2RLbjEeH7NGzWsVo6', '', 'mchenry@123', '', '', '', '', '2024-01-19', '', '', 0, 0, 'demo', '1', '', '', '', '', '', '', '', 0),
(5, 0, 0, '8142814404', 'Harrison', 'user', '08142814404', 'onuohaharrison1038@gmail.com', '$2y$10$6gdrGBbmA1qpyufAat3YGu7E8F50mfr51EZC/aX7/LB1LHQAcFq5.', 'Nill', 'Harridon@1038', '295723_1705775002.jpg', 'http://localhost//public/v1/assets/images/uploads/295723_1705775002.jpg', '008335_1705775002.jpg', 'http://localhost//public/v1/assets/images/uploads/008335_1705775002.jpg', '20/01/2024 19:23:22 pm', '', '', 0, 0, 'live', '1', '2019-12-10', 'Male', 'NG', 'Nill', 'Nill', '', 'Nill', 2855);

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `walletID` int(11) NOT NULL,
  `wallet_userid` int(11) NOT NULL,
  `wallet_bal` double NOT NULL,
  `wallet_gain` double NOT NULL,
  `wallet_spent` double NOT NULL,
  `wallet_earning` double NOT NULL,
  `wallet_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`walletID`, `wallet_userid`, `wallet_bal`, `wallet_gain`, `wallet_spent`, `wallet_earning`, `wallet_status`) VALUES
(1, 1, 100000000.75, 0, 0, 0, 1),
(2, 2, 3500000, 0, 0, 0, 1),
(3, 3, 9992500000000, 0, 0, 0, 1),
(4, 4, 5600000, 0, 0, 0, 1),
(5, 5, 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`approvalID`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`beneficiaryID`);

--
-- Indexes for table `businesscategories`
--
ALTER TABLE `businesscategories`
  ADD PRIMARY KEY (`businesscategoryID`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `employeeID` (`employeeID`),
  ADD KEY `employee_phone` (`employee_phone`,`employee_email`),
  ADD KEY `employee_addedby` (`employee_addedby`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqsID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `fileuploads`
--
ALTER TABLE `fileuploads`
  ADD PRIMARY KEY (`fileuploadID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profileID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`stateID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonialID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`walletID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approvalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `beneficiaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `businesscategories`
--
ALTER TABLE `businesscategories`
  MODIFY `businesscategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fileID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fileuploads`
--
ALTER TABLE `fileuploads`
  MODIFY `fileuploadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permissionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profileID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `stateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `teamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `walletID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
