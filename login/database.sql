-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 04:25 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u247104499_newnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caloriesBurned` float DEFAULT NULL,
  `exercise` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starts` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`username`, `caloriesBurned`, `exercise`, `starts`) VALUES
('yk', 504, 'WALKING', '2021-11-12 00:00:00.000000'),
('Yk', 73, 'WALKING', '2021-11-12 00:00:00.000000'),
('yk', 252, 'WALKING', '2021-11-13 00:00:00.000000'),
('duck', 289, 'WALKING', '2021-11-13 00:00:00.000000'),
('duck ', 7358, NULL, '2021-11-13 00:00:00.000000'),
('elvis', 226, NULL, '2021-11-13 00:00:00.000000'),
('elvis', 974, NULL, '2021-11-13 00:00:00.000000'),
('elvis', 1239, NULL, '2021-11-13 00:00:00.000000'),
('elvis', 96, NULL, '2021-11-13 00:00:00.000000'),
('eykf', 36, NULL, '2021-11-13 00:00:00.000000'),
('elvis', 51, NULL, '2021-11-13 00:00:00.000000'),
('elvis', 257, NULL, '2021-11-13 00:00:00.000000'),
('elvis ', 116, NULL, '2021-11-13 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommendedCalories` int(11) DEFAULT NULL,
  `recommendedCarbs` int(11) DEFAULT NULL,
  `recommendedProtein` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`username`, `password_hash`, `weight`, `height`, `age`, `sex`, `recommendedCalories`, `recommendedCarbs`, `recommendedProtein`) VALUES
('asdf', '$2y$10$WJOmj7sG2a0DmqaJnul03eWuWdAXx52wbeSIBziD/sXJa2fUBfQvy', 77, 165, 23, 'male', 2558, 130, 56),
('duck', '$2y$10$EcfDdI5L4Ezq7qtZqSd8YeSG02BUHmAPlx0VFsp1nVJQyMXZmWbWC', 80, 197, 29, 'male', 3842, 130, 56),
('elmer', '$2y$10$iX72Bdb8/4NXkXRKNffHxOaFOnK5eL1U5U/vBucDYxoWwwNyJsHMa', 100, 180, 29, 'female', 2396, 130, 46),
('elvis', '$2y$10$2MbZsxoUSD8WUAT4Qe6rtuRtIqUkXVud46G4udAl36jIcRdvh5mBa', 59, 180, 24, 'male', 3260, 130, 56),
('eykf', '$2y$10$d8GchHC6MtKB1iF4j7vttesN.BpWB4Xg1TSjmW63GTHvJPw./n41G', 77, 178, 23, 'male', 3174, 130, 56),
('glenna', '$2y$10$hZPLdZG2WUiFcBioU8Vs4OQ9bzsPX.9OvoUWMet.qvEdh4YbP2QvC', 38, 152, 20, 'female', 1674, 130, 46),
('pak', '$2y$10$7pUI1jEmtalXupTXXyxWyuIxqOBLTqeeMtx1B2wWm0v/CTj7l4QIq', 71, 177, 23, 'female', 3123, 175, 71),
('qwerty', '$2y$10$pA1..snli3t/RawitdOBUeZsxNRf5l/XWwW2WFUJS4qxtkwBbPt8y', 80, 179, 29, 'male', 3183, 130, 56),
('qwerty1', '$2y$10$lSLCvIOQmc/ZGllA6sQKDOo6mALcaPBzY9NG2g6n7DM/WIog9qlZ6', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('qwerty11', '$2y$10$NC3Ub.OK4.NyCSLYWHX44eDCf1zkUh0Jw09FZIDIMpZwYSzozRUDO', 80, 179, 29, 'male', 3698, 130, 56),
('testing', '$2y$10$Uz/EdSwToHpZS7sl2LAEnuMYrXTgoAiMJh5n1KSuWrtOkgspYcX3.', 80, 178, 29, 'male', 3690, 130, 56),
('testing1', '$2y$10$lcmFEU8I64bYUIvJzHWtCOvJ.DRg.agSwuvnsoIsSow5QRJ5eCnrW', 80, 179, 29, 'male', 3698, 130, 56),
('testing12', '$2y$10$0Mi5eWVbX9siDYUu1.5vteakSjyVv7W6wdWFoC1fouFmM0uZkrs3G', 80, 179, 24, 'male', 3746, 130, 56),
('testing3', '$2y$10$MJ8.OhJczLnP1O71moktrOBTU5pbiFoVzysfQJFau0TC6fiFk1Rhy', 80, 179, 24, 'male', 3746, 130, 56),
('yikiat', '$2y$10$IjcH6jzYRv43A1NxPXkHue9ei7xVyrTbc3w6qaTIAGDwOLYInGtgS', 70, 179, 29, 'male', 2693, 130, 56),
('yk', '$2y$10$k73AOtlWPPzV6.oRIt/5JOmEdGoqfIrlLNjhpMFpf67qpzYqRYyTq', 70, 180, 24, 'male', 3519, 130, 56);

-- --------------------------------------------------------

--
-- Table structure for table `usercalender`
--

CREATE TABLE `usercalender` (
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nutritionCount` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts` datetime(6) NOT NULL,
  `ends` datetime(6) NOT NULL,
  `className` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usercalender`
--

INSERT INTO `usercalender` (`username`, `foodName`, `nutritionCount`, `starts`, `ends`, `className`, `icon`) VALUES
('yk', 'ch', '{\"Calories\":\"2039.268716747785\",\"Protein\":\"170.3922214890812\",\"Carbohydrates\":\"279.14610302734985\"}', '2021-12-15 01:32:00.000000', '2021-12-15 01:32:00.000000', 'fc-bg-default', 'circle'),
('yk', 'human meat', '{\"Calories\":\"419.46424999994747\",\"Protein\":\"14.459657500004829\",\"Carbohydrates\":\"31.330447499973246\"}', '2021-11-11 02:55:00.000000', '2021-11-11 02:55:00.000000', 'fc-bg-default', 'circle'),
('elmer', 'noodle', '{\"Calories\":\"1893.6700000006\",\"Protein\":\"65.61972500001441\",\"Carbohydrates\":\"304.26861250011416\"}', '2021-01-01 03:30:00.000000', '2021-01-01 03:30:00.000000', 'fc-bg-default', 'circle'),
('elmer', 'steak', '{\"Calories\":\"313.28121183699324\",\"Protein\":\"10.804888609482058\",\"Carbohydrates\":\"22.384101283223316\"}', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'fc-bg-default', 'circle'),
('elmer', 'steak', '{\"Calories\":\"322.79424739061506\",\"Protein\":\"31.2780288638125\",\"Carbohydrates\":\"0\"}', '2021-09-08 03:31:00.000000', '2021-09-08 03:31:00.000000', 'fc-bg-default', 'circle'),
('Yk', 'Fish and chips ', '{\"Calories\":\"7189.951516074366\",\"Protein\":\"205.16799334092815\",\"Carbohydrates\":\"342.1948130188031\"}', '2021-11-13 03:39:00.000000', '2021-11-13 03:39:00.000000', 'fc-bg-default', 'circle'),
('duck', 'Nasi Lemak (Coconut Rice)', '{\"Calories\":\"233\",\"Protein\":\"4\",\"Carbohydrates\":\"40\"}', '2021-11-13 11:56:31.000000', '2021-11-13 11:56:31.000000', 'fc-bg-default', 'circle'),
('yk', 'Nasi Lemak (Coconut Rice)', '{\"Calories\":\"233\",\"Protein\":\"4\",\"Carbohydrates\":\"40\"}', '2021-11-13 16:41:08.000000', '2021-11-13 16:41:08.000000', 'fc-bg-default', 'circle'),
('elvis', 'steak', '{\"Calories\":\"7189.951516074366\",\"Protein\":\"205.16799334092815\",\"Carbohydrates\":\"342.1948130188031\"}', '2021-01-08 10:10:00.000000', '2021-01-08 10:10:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'Chicken chop with spaghetti ', '{\"Calories\":\"322.79424739061506\",\"Protein\":\"31.2780288638125\",\"Carbohydrates\":\"0\"}', '2021-01-13 10:11:00.000000', '2021-01-13 10:11:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'Salted egg yolk custard buns ', '{\"Calories\":\"5245.351171727751\",\"Protein\":\"289.44881343294753\",\"Carbohydrates\":\"465.95504277423754\"}', '2021-02-10 10:12:00.000000', '2021-02-10 10:12:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'rice', '{\"Calories\":\"2730.9439999999995\",\"Protein\":\"51.87272000000001\",\"Carbohydrates\":\"454.58477\"}', '2021-03-16 10:13:00.000000', '2021-03-16 10:13:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'fish and chips', '{\"Calories\":\"775.3522941667246\",\"Protein\":\"12.8895\",\"Carbohydrates\":\"154.713\"}', '2021-04-20 10:14:00.000000', '2021-04-20 10:14:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'chicken chop', '{\"Calories\":\"7189.951516074366\",\"Protein\":\"205.16799334092815\",\"Carbohydrates\":\"342.1948130188031\"}', '2021-07-06 10:15:00.000000', '2021-07-06 10:15:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'culet', '{\"Calories\":\"2475.0975792011745\",\"Protein\":\"162.59252250000105\",\"Carbohydrates\":\"137.16386000029516\"}', '2021-05-11 10:16:00.000000', '2021-05-11 10:16:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'salad', '{\"Calories\":\"171.34665085156252\",\"Protein\":\"0.71955355859375\",\"Carbohydrates\":\"18.87564576764063\"}', '2021-06-16 10:16:00.000000', '2021-06-16 10:16:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'yohurt', '{\"Calories\":\"1082.2121827820008\",\"Protein\":\"102.87046869951507\",\"Carbohydrates\":\"5.776843735835117\"}', '2021-08-20 10:16:00.000000', '2021-08-20 10:16:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'laksa', '{\"Calories\":\"842.2967971474247\",\"Protein\":\"63.230585156200746\",\"Carbohydrates\":\"57.517502976680746\"}', '2021-09-08 10:17:00.000000', '2021-09-08 10:17:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'nasi l', '{\"Calories\":\"3828.7504865249493\",\"Protein\":\"255.76130542597872\",\"Carbohydrates\":\"346.9284070092662\"}', '2021-10-14 10:17:00.000000', '2021-10-14 10:17:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'chicken rice ', '{\"Calories\":\"2039.268716747785\",\"Protein\":\"170.3922214890812\",\"Carbohydrates\":\"279.14610302734985\"}', '2021-11-01 10:18:00.000000', '2021-11-01 10:18:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'fish fillet', '{\"Calories\":\"2039.268716747785\",\"Protein\":\"170.3922214890812\",\"Carbohydrates\":\"279.14610302734985\"}', '2021-11-03 10:18:00.000000', '2021-11-03 10:18:00.000000', 'fc-bg-default', 'circle'),
('elvis', 'steak', '{\"Calories\":\"923.5158684194395\",\"Protein\":\"97.1849660624288\",\"Carbohydrates\":\"30.236235130244065\"}', '2021-11-13 10:19:00.000000', '2021-11-13 10:19:00.000000', 'fc-bg-default', 'circle'),
('duck', 'Nasi Lemak (Coconut Rice)', '{\"Calories\":\"233\",\"Protein\":\"4\",\"Carbohydrates\":\"40\"}', '2021-11-13 23:18:13.000000', '2021-11-13 23:18:13.000000', 'fc-bg-default', 'circle'),
('asdf', 'Prata Bread ( Roti Prata )', '{\"Calories\":\"278\",\"Protein\":\"2\",\"Carbohydrates\":\"28\"}', '2021-11-13 23:25:49.000000', '2021-11-13 23:25:49.000000', 'fc-bg-default', 'circle'),
('pak', 'APPLE CIDER MARTINI', '{\"Calories\":\"107\",\"Protein\":\"0\",\"Carbohydrates\":\"8\"}', '2021-11-13 23:29:48.000000', '2021-11-13 23:29:48.000000', 'fc-bg-default', 'circle'),
('elvis ', 'Steamed Sponge Cake (Bak Tong Gou)', '{\"Calories\":\"129\",\"Protein\":\"1\",\"Carbohydrates\":\"26\"}', '2021-11-14 00:12:52.000000', '2021-11-14 00:12:52.000000', 'fc-bg-default', 'circle'),
('elvis ', 'Steamed sponge cake ', '{\"Calories\":\"1034.555\",\"Protein\":\"10.8983\",\"Carbohydrates\":\"207.79765\"}', '2021-11-14 12:15:00.000000', '2021-11-14 12:15:00.000000', 'fc-bg-default', 'circle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
