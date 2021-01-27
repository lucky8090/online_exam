-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2019 at 11:39 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_test_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `userid` int(20) NOT NULL,
  `bussiness_name` varchar(50) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`userid`, `bussiness_name`, `contact_person`, `address`, `mobile`, `email`, `date`) VALUES
(1, 'Shank Tutorials', 'Shantanu', 'lko', 2147483647, 'an@sot.com', '2016-01-29 05:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `msg_id` int(20) NOT NULL,
  `msg_body` varchar(2000) NOT NULL,
  `msg_to` varchar(200) NOT NULL,
  `msg_status` enum('0','1') NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`msg_id`, `msg_body`, `msg_to`, `msg_status`, `msg_date`) VALUES
(1, 'ZSDFDS', 'PHP', '0', '2019-08-29 12:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `q_id` int(20) NOT NULL,
  `qp_id` int(20) NOT NULL,
  `ch1` varchar(50) NOT NULL,
  `ch2` varchar(50) NOT NULL,
  `ch3` varchar(50) NOT NULL,
  `ch4` varchar(50) NOT NULL,
  `correct_ans` varchar(50) NOT NULL,
  `ans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `c_id`, `sub_id`, `q_id`, `qp_id`, `ch1`, `ch2`, `ch3`, `ch4`, `correct_ans`, `ans_date`) VALUES
(1, 1, 1, 1, 1, 'one', 'two', 'three', 'four', 'correct', '2016-01-20 10:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `c_date`) VALUES
(1, 'java', '2016-01-12 06:05:42'),
(2, 'PHP', '2016-01-19 12:12:11'),
(3, 'ANDROID', '2016-01-19 12:13:17'),
(4, 'RUBY', '2016-01-25 05:52:43'),
(5, 'xdgdfgf', '2019-08-30 06:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `d_id` int(20) NOT NULL,
  `d_filepath` varchar(200) NOT NULL,
  `d_title` varchar(200) NOT NULL,
  `d_description` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`d_id`, `d_filepath`, `d_title`, `d_description`, `date`) VALUES
(6, 'C:fakepathcompany website.htm', '', 'website', '2016-01-22 10:25:41'),
(7, 'C:fakepathcompany website.htm', '', 'gxgxf', '2016-01-22 10:52:59'),
(8, 'C:fakepathshantanu.jpg', '', 'shann', '2016-01-22 10:53:38'),
(9, 'C:fakepathshantanu.jpg', '', 'shann', '2016-01-22 10:56:57'),
(10, 'C:fakepathFASTRACK M05.png', '', 'watch', '2016-01-22 11:16:29'),
(11, 'C:fakepathlogin page.png', '', 'fhgfhh', '2016-01-23 06:00:10'),
(12, 'login page.png', '', 'tdghdgf', '2016-01-23 06:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `date` date NOT NULL,
  `questions` varchar(200) DEFAULT NULL,
  `student_answers` text,
  `aplitude_score` float DEFAULT NULL,
  `level_1_score` float DEFAULT NULL,
  `level_2_score` float DEFAULT NULL,
  `level_3_score` float DEFAULT NULL,
  `negative_marks` float NOT NULL DEFAULT '0',
  `total_score` double DEFAULT NULL,
  `no_of_given_answers` int(20) DEFAULT NULL,
  `wrong_answer_count` int(11) DEFAULT '0',
  `correct_answers_count` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `student_id`, `start_time`, `end_time`, `date`, `questions`, `student_answers`, `aplitude_score`, `level_1_score`, `level_2_score`, `level_3_score`, `negative_marks`, `total_score`, `no_of_given_answers`, `wrong_answer_count`, `correct_answers_count`, `created_at`) VALUES
(5, 34, '09:05:58', '09:23:51', '2019-09-25', '64,67,70,62,72,43,42,51,44,45,50,49,48', 'ch1,ch2,ch3,ch4,ch2,ch3,ch1,0,0,ch4,ch1,ch2,0', 1, 2, 0, 2, 2.5, 2.5, 10, 5, 5, NULL),
(10, 34, '11:39:04', '11:39:22', '2019-09-26', '68,62,64,67,43,41,72,46,44,51,47,48,49', 'ch1,ch3,ch2,0,0,ch1,0,0,ch2,ch4,ch3,ch1,ch4', 2, 0, 0, 0, 3.5, -1.5, 9, 7, 2, NULL),
(11, 42, '12:20:10', '12:20:42', '2019-09-26', '68,71,65,70,41,43,72,46,51,44,48,50,47', 'ch3,ch1,0,0,ch3,ch4,ch2,ch3,ch4,ch3,0,ch1,ch3', 0, 1, 1, 1, 3.5, -0.5, 10, 7, 3, NULL),
(13, 55, '15:27:28', '15:29:40', '2019-09-26', '69,67,68,65,22,21,23,25,26,24,27,29,28', 'ch2,ch1,ch2,ch1,ch2,ch3,ch3,ch1,ch3,ch4,ch1,ch3,ch4', 0, 3, 0, 1, 4.5, -0.5, 13, 9, 4, NULL),
(14, 56, '15:32:56', '15:33:49', '2019-09-26', '69,62,64,71,11,13,12,15,16,14,20,18,17', '0,0,0,0,0,0,0,0,0,0,0,0,0', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(15, 57, '15:53:21', '15:54:33', '2019-09-26', '67,68,66,69,41,42,43,46,45,51,50,48,47', '0,0,0,0,0,0,0,0,0,0,0,0,0', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(16, 34, '08:03:34', '08:04:01', '2019-09-27', '66,65,67,63,72,43,41,45,46,51,50,47,48', 'ch1,ch2,ch2,ch3,ch4,ch1,ch2,ch3,ch4,ch1,ch4,ch2,ch1', 0, 1, 0, 0, 6, -5, 13, 12, 1, NULL),
(17, 42, '08:11:35', NULL, '2019-09-27', '64,70,66,67,42,41,43,44,51,46,48,50,47', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL),
(18, 58, '10:17:01', '10:17:28', '2019-09-27', '69,67,70,63,3,2,1,10,6,5,8,9,7', '0,0,0,0,0,0,0,0,0,0,0,0,0', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(19, 42, '07:43:05', NULL, '2019-09-28', '71,62,63,65,41,72,42,45,46,51,49,48,47', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL),
(22, 32, '13:50:56', NULL, '2019-10-22', '70,67,66,69,41,72,42,44,46,51,47,49,50', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('0','1','','') NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `status`, `reg_date`) VALUES
(1, 'admin@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', '1', '2019-11-05 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `p_id` int(20) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_duration` varchar(20) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`p_id`, `p_name`, `p_price`, `p_duration`, `p_date`) VALUES
(3, 'SSC', 100, '4 months', '2016-01-13 10:47:44'),
(4, 'Banking', 0, '6months', '2016-01-13 10:55:10'),
(7, 'DCA', 0, '2 years', '2016-01-16 10:55:08'),
(9, 'dgdgf', 0, 'dgfg', '2019-08-30 05:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `exam_level` varchar(20) DEFAULT NULL,
  `question` varchar(500) NOT NULL,
  `ch1` varchar(200) NOT NULL,
  `ch2` varchar(200) NOT NULL,
  `ch3` varchar(200) NOT NULL,
  `ch4` varchar(200) NOT NULL,
  `correct_ans` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `sub_id`, `exam_level`, `question`, `ch1`, `ch2`, `ch3`, `ch4`, `correct_ans`, `status`, `date`) VALUES
(1, 2, '1', 'PHP files have a default file extension of_______', '.html', '.xml', '.php', '.ph', 'ch3', '0', '2019-09-02 06:14:18'),
(2, 2, '1', 'A function in PHP which starts with __ (double underscore) is know as..', 'Magic Function', 'Inbuilt Function', 'Default Function', 'User Defined Function', 'ch1', '0', '2019-09-02 06:15:41'),
(3, 2, '1', 'Which of the following is/are a PHP code editor?\r\ni) Notepad\r\nii) Notepad++\r\niii) Adobe Dreamweaver\r\niv) PDT', 'Only iv)', 'All of the mentioned', 'i), ii) and iii)', 'Only iii)', 'ch2', '0', '2019-09-02 06:17:09'),
(4, 2, '2', 'Which of the following must be installed on your computer so as to run PHP script?\r\ni) Adobe Dreamweaver\r\nii) XAMPP\r\niii) Apache and PHP\r\niv) IIS', 'All of the mentioned', 'Only ii)', ' ii) and iii)', 'ii), iii) and iv)', 'ch4', '0', '2019-09-02 06:19:04'),
(5, 2, '2', 'Which version of PHP introduced Try/catch Exception?', 'PHP 4', 'PHP 5', 'PHP 6', 'PHP 5 and later', 'ch4', '0', '2019-09-02 06:20:08'),
(6, 2, '2', 'What will be the output of the following PHP code?\r\n<?php\r\n    $num  = 1;\r\n    $num1 = 2;\r\n    print $num . \"+\". $num1;\r\n    ?>', '3', '1+2', '1.+.2', 'Error', 'ch2', '0', '2019-09-02 06:21:47'),
(7, 2, '3', ' Which of the below symbols is a newline character?', '\\r', '\\n', '/n', '/r', 'ch2', '0', '2019-09-02 06:24:19'),
(8, 2, '3', 'How to define a function in PHP?', 'function {function body}', 'data type functionName(parameters) {function body}', 'functionName(parameters) {function body}', 'function functionName(parameters) {function body}', 'ch4', '0', '2019-09-02 06:26:08'),
(9, 2, '3', 'Type Hinting was introduced in which version of PHP?', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 6', 'ch2', '0', '2019-09-02 06:32:00'),
(10, 2, '2', 'Which one of the following is the right way to clone an object?', '_clone(targetObject);', 'destinationObject = clone targetObject;', 'destinationObject = _clone(targetObject);', 'destinationObject = clone(targetObject);', 'ch2', '0', '2019-09-02 06:33:28'),
(11, 3, '1', 'The CLR is physically represented by an assembly named _______.', 'mscoree.dll', 'mcoree.dll', 'msoree.dll', 'mscor.dll', 'ch1', '0', '2019-09-02 06:55:18'),
(12, 3, '1', 'SOAP stands for __________.', 'Simple Object Access Program', 'Simple Object Access Protocol', 'Simple Object Application Protocol', 'Simple Object Account Protocol', 'ch2', '0', '2019-09-02 06:56:04'),
(13, 3, '1', 'The ____ language allows more than one method in a single class.', 'C#', 'J#', 'C++', 'C', 'ch1', '0', '2019-09-02 06:57:00'),
(14, 3, '2', 'CLR is the .NET equivalent of _________.', 'Java Virtual Machine', 'Common Language Runtime', 'Common Type System', 'Common Language Specification', 'ch1', '0', '2019-09-02 06:57:59'),
(15, 3, '2', 'In C#, a subroutine is called a ________.', 'Function', 'Metadata', 'Method', 'Managed code', 'ch3', '0', '2019-09-02 06:58:45'),
(16, 3, '2', 'The controls available in the tool box of the ______ are used to create the user interface of a web based application.', 'Microsoft visual studio IDE', 'Application window', 'Web forms', 'None of the above', 'ch1', '0', '2019-09-02 06:59:44'),
(17, 3, '3', 'Which of the following statements are TRUE about the .NET CLR?\r\ni. It provides a language-neutral development & execution environment.\r\nii. It ensures that an application would not be able to access memory that it is not authorized to access.\r\niii. It provides services to run \"managed\" applications.\r\nThe resources are garbage collected.\r\niv. It provides services to run \"unmanaged\" applications.', 'Only 1 and 2', 'Only 1, 2 and 4', '1, 2, 3, 4', 'Only 4 and 5', 'ch3', '0', '2019-09-02 07:02:28'),
(18, 3, '3', 'Which of the following utilities can be used to compile managed assemblies into processor-specific native code?', 'gacutil', 'ngen', 'sn', 'dumpbin', 'ch2', '0', '2019-09-02 07:03:42'),
(19, 3, '3', 'Which of the following components of the .NET framework provide an extensible set of classes that can be used by any .NET compliant programming language?', '.NET class libraries', 'Common Language Runtime', 'Common Language Infrastructure', 'Component Object Model', 'ch1', '0', '2019-09-02 07:04:46'),
(20, 3, '3', 'Which of the following statements correctly define .NET Framework?', 'It is an environment for developing, building, deploying and executing Desktop Applications, Web Applications and Web Services.', 'It is an environment for developing, building, deploying and executing only Web Applications.', 'It is an environment for developing, building, deploying and executing Distributed Applications.', 'It is an environment for developing, building, deploying and executing Web Services.', 'ch1', '0', '2019-09-02 07:05:51'),
(21, 4, '1', 'Is it possible to have an activity without UI to perform action/actions?', 'Not possible', 'Wrong question', 'Yes, it is possible', 'None of the above', 'ch3', '0', '2019-09-02 07:07:48'),
(22, 4, '1', 'What is the life cycle of broadcast receivers in android?', 'send intent()', 'onRecieve()', 'implicitBroadcast()', 'sendBroadcast(), sendOrderBroadcast(), and sendStickyBroadcast().', 'ch2', '0', '2019-09-02 07:08:57'),
(23, 4, '1', 'What is LastKnownLocation in android?', 'To find the last location of a phone', 'To find known location of a phone', 'To find the last known location of a phone.', 'None of the above', 'ch3', '0', '2019-09-02 07:10:25'),
(24, 4, '2', 'How many orientations does android support?', '4', '10', '2', 'None of the above', 'ch1', '0', '2019-09-02 07:11:20'),
(25, 4, '2', 'Layouts in android?', 'Frame Layout', 'Linear Layout', 'Relative Layout', 'All of the above', 'ch4', '0', '2019-09-02 07:18:27'),
(26, 4, '2', 'What are the indirect Direct subclasses of Services?', 'recognitionService', 'remoteViewsService', 'spellCheckerService', 'inputMethodService', 'ch4', '0', '2019-09-02 07:19:08'),
(27, 4, '3', 'What is the difference between Activity context and Application Context?', 'The Activity instance is tied to the lifecycle of an Activity. while the application instance is tied to the lifecycle of the application,', 'The Activity instance is tied to the lifecycle of the application, while the application instance is tied to the lifecycle of an Activity.', 'The Activity instance is tied to the lifecycle of the Activity, while the application instance is tied to the lifecycle of an application.', 'none of the above', 'ch1', '0', '2019-09-02 07:20:00'),
(28, 4, '3', 'You can shut down an activity by calling its _______ method', 'onDestory()', 'finishActivity()', 'finish()', 'none of the above', 'ch3', '0', '2019-09-02 07:20:52'),
(29, 4, '3', 'Which one is NOT related to fragment class?', 'dialogFragment', 'listFragment', 'preferenceFragment', 'cursorFragment', 'ch4', '0', '2019-09-02 07:21:31'),
(30, 4, '1', 'Parent class of Service?', 'Object', 'Context', 'ContextWrapper', 'ContextThemeWrapper', 'ch3', '0', '2019-09-02 07:22:23'),
(31, 5, '1', 'What are the method(s) that iterator object must implement?', '__iter__()', '__iter__() and __next__()', '__iter__() and __super__()', '__iter__(), __super__() and __next__()', 'ch2', '0', '2019-09-02 07:30:46'),
(32, 5, '1', 'How can you create an iterator object from a list?', 'By passing the given list to the iter() function.', 'By using a for loop.', 'By using a while loop.', 'You cannot create an iterable object from the list.', 'ch1', '0', '2019-09-02 07:32:37'),
(33, 5, '1', 'If a function contains at least one yield statement, it becomes ______', 'an iterable', 'a generator function', 'an anonymous function', 'None of the above', 'ch2', '0', '2019-09-02 07:34:32'),
(34, 5, '2', 'What is the output of the following code?\r\nmy_list = [1, 3, 6, 10]\r\na = (x**2 for x in my_list)\r\nprint(next(a), next(a))', '1 3', '1 9', '1 9 36 100', '1', 'ch2', '0', '2019-09-02 07:35:33'),
(35, 5, '2', 'Which of the following is false statement in python', 'int(144)==144', 'int(\'144\')==144', 'int(144.0)==144', 'None of the above', 'ch4', '0', '2019-09-02 07:37:24'),
(36, 5, '2', 'Which of the following is more accurate for the following declaration?\r\nx = Circle()', 'Now you can assign int value to x.', 'x contains an int value.', 'x actually contains an object of type Circle.', 'x contains an int value.', 'ch2', '0', '2019-09-02 07:39:23'),
(37, 5, '3', ' What is the output of this expression, 3*1**3?', '27', '9', '3', '1', 'ch3', '0', '2019-09-02 07:42:03'),
(38, 5, '3', 'Which of the following will run without errors ?', 'round(45.8)', 'round(6352.898,2,5)', 'round()', 'round(7463.123,2,1)', 'ch1', '0', '2019-09-02 07:43:03'),
(39, 5, '3', 'What does --------- 5 evaluate to?', '+5', '-11', '+11', '-5', 'ch1', '0', '2019-09-02 07:44:05'),
(40, 5, '2', ' What is the maximum possible length of an identifier?', '31 characters', '63 characters', '79 characters', 'none of the mentioned', 'ch4', '0', '2019-09-02 07:45:02'),
(41, 1, '1', 'Adding style attributes in HTML elements, is known to be', 'Internal', 'Inline', 'Outline', 'External', 'ch2', '0', '2019-09-02 07:50:43'),
(42, 1, '1', 'Link to a bookmark is added in an attribute named', 'href', 'link', 'src', 'id', 'ch1', '0', '2019-09-02 07:51:36'),
(43, 1, '1', 'A TARGET value that is used when a webpage is locked in a frame, is', '_self', '_top', '_parent', '_blank', 'ch2', '0', '2019-09-02 07:52:21'),
(44, 1, '2', 'Which is not a JavaScript data type?', 'boolean', 'undefined', 'string', 'double', 'ch4', '0', '2019-09-02 07:53:20'),
(45, 1, '2', 'In HTML elements, CSS can be added in different', '2 ways', '3 ways', '4 ways', '5 ways', 'ch2', '0', '2019-09-02 07:54:00'),
(46, 1, '2', 'Which of the following function of Array object removes the last element from an array and returns that element?', 'push()', 'join()', 'pop()', 'map()', 'ch3', '0', '2019-09-02 08:01:30'),
(47, 1, '3', 'var a = []; What does \'typeof a\' return?', 'object', 'array', 'string', 'undefined', 'ch1', '0', '2019-09-02 08:02:25'),
(48, 1, '3', 'what value is given for the left margin: \r\nmargin: 5px 10px 3px 8px;', '5px', '8px', '3px', '10px', 'ch2', '0', '2019-09-02 08:06:40'),
(49, 1, '3', 'Which doctype is correct for HTML5?', '!DOCTYPE HTML5', '!DOCTYPE html', '!DOCTYPE', 'none', 'ch2', '0', '2019-09-02 08:07:38'),
(50, 1, '3', 'Which of the following function of String object returns the character at the specified index?', 'charAt()', 'charCodeAt()', 'concat()', 'indexOf()', 'ch1', '0', '2019-09-02 08:08:33'),
(51, 1, '2', 'How can you print information to the console?', 'console(info)', 'console.log(info)', 'print(info)', 'print_r(info)', 'ch2', '0', '2019-09-02 08:09:45'),
(52, 6, '1', 'Which of the following query is correct for using comparison operators in SQL?', 'SELECT sname, coursename FROM studentinfo WHERE age>50 and <80;', 'SELECT sname, coursename FROM studentinfo WHERE age>50 and age <80;', 'SELECT sname, coursename FROM studentinfo WHERE age>50 and WHERE age<80;', 'None of the above', 'ch2', '0', '2019-09-02 08:12:47'),
(53, 6, '1', 'How to select all data from studentinfo table starting the name from letter ‘r’?', 'SELECT * FROM studentinfo WHERE sname LIKE ‘r%’;', 'SELECT * FROM studentinfo WHERE sname LIKE ‘%r%’;', ' SELECT * FROM studentinfo WHERE sname LIKE ‘%r’;', 'SELECT * FROM studentinfo WHERE sname LIKE ‘_r%’;', 'ch1', '0', '2019-09-02 08:14:27'),
(54, 6, '1', 'CREATE TABLE employee (name VARCHAR, id INTEGER)\r\nWhat type of statement is this?', 'DML', 'DDL', 'View', 'Integrity constraint', 'ch2', '0', '2019-09-02 08:16:30'),
(55, 6, '2', 'The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character.', 'Fixed, equal', 'Equal, variable', 'Fixed, variable', 'Variable, equal', 'ch3', '0', '2019-09-02 08:17:51'),
(56, 6, '2', 'To remove a relation from an SQL database, we use the ______ command.', 'Delete', 'Purge', 'Remove', 'Drop table', 'ch4', '0', '2019-09-02 08:19:03'),
(57, 6, '2', 'Updates that violate __________ are disallowed.', 'Integrity constraints', 'Transaction control', 'Authorization', 'DDL constraints', 'ch1', '0', '2019-09-02 08:20:13'),
(58, 6, '3', 'DELETE FROM r;\r\nThis command performs which of the following action?', 'Remove relation', 'Clear relation entries', 'Delete fields', 'Delete rows', 'ch2', '0', '2019-09-02 08:21:36'),
(59, 6, '3', 'The ______ clause allows us to select only those rows in the result relation of the ____ clause that satisfy a specified predicate.', 'Where, from', 'From, select', 'Select, from', 'From, where', 'ch1', '0', '2019-09-02 08:23:08'),
(60, 6, '3', 'The ________ clause is used to list the attributes desired in the result of a query.', 'Where', 'Select', 'From', 'Distinct', 'ch2', '0', '2019-09-02 08:24:04'),
(61, 6, '1', 'SELECT * FROM employee WHERE salary>10000 AND dept_id=101;\r\nWhich of the following fields are displayed as output?', 'Salary, dept_id', 'Employee', 'Salary', 'All the field of employee relation', 'ch4', '0', '2019-09-02 08:25:21'),
(62, 7, '1', 'If Reena says, “Anjali\'s father Raman is the only son of my father-in-law Ramanand”, then how is Piyu, who is the sister of Anjali, related to Ramanand ? ', 'Wife', 'Sister', 'Grand-daughter', 'Daughter', 'ch3', '0', '2019-09-02 08:32:23'),
(63, 7, '1', 'How many 8\'s are present in the following sequence of numbers which are exactly divisible by both its preceding and following numbers ? \r\n3  8  6  8  8  7  6  8  3  4  8  2  5  6  2  8  2  4  8  6  3  7  4  8  4  5  8  4 ', '5', '6', '2', 'Less than 4', 'ch4', '0', '2019-09-02 08:33:15'),
(64, 7, '1', 'The labeled price of a table is Rs. 7,500. The shopkeeper sold it by giving 5% discount on the labeled price and earned a profit of 15%. What approximately is the cost price of the table? ', 'Rs. 5758', 'Rs. 6195', 'Rs. 6425', 'Rs. 7200', 'ch2', '0', '2019-09-02 09:19:37'),
(65, 7, '2', 'If “&” implies “Add”, “@” implies “multiply”, “#” implies “subtract”, “$” implies “division”, 12 & 3 @ 2 # 32 $ 4 = ? ', '12', '10', '13', '14', 'ch3', '0', '2019-09-02 09:20:28'),
(66, 7, '2', 'Pointing to Pooja in the photograph, Gita said, “Her daughter\'s father is son-in-law of my mother.” How is Gita related to Pooja ? ', 'Mother', 'Aunt', 'Sister', 'Daughter in law', 'ch3', '0', '2019-09-02 09:21:14'),
(67, 7, '2', ' If \'Pink\' is called \'Orange\', \'Orange\' is called \'Blue\', \'Blue\' is called \'Red\', \'Red\' is called \'Green\', \'Green\' is called \'Black\' and \'Black\' is called \'white\', what would be the color of human blood ? ', 'Orange', 'Blue', 'Black', 'Green', 'ch4', '0', '2019-09-02 09:21:59'),
(68, 7, '3', 'In a code language “He gives flower” is written as “nop lui na” , “Bunty gets flower” is written as “dus lap na” and “He gets nothing” is written as “nop lap ugli”. How would “Bunty gets nothing” be written in that code ? ', 'dus lap nop', 'na lap ugli', 'lui lap ugli', 'dus lap ugli', 'ch4', '0', '2019-09-02 09:23:20'),
(69, 7, '3', 'Four of the following five are alike in a certain way and so form a group. Which is the one that does not belong to that group ? ', 'Curlew', 'Duck', 'Starling', 'Crane', 'ch3', '0', '2019-09-02 09:24:05'),
(70, 7, '3', 'If “+” implies “subtract”, “*” implies “division”, “-” implies “addition”, “/” implies “multiply”, 5 – 3/6 * 3 + 4 = ?', '5', '6', '7', '8', 'ch3', '0', '2019-09-02 09:25:47'),
(71, 7, '2', 'In a span of 24 hours, how many times would the two hands of a clock point exactly in opposite directions ? ', '10', '11', '23', '22', 'ch4', '0', '2019-09-02 09:26:25'),
(72, 1, '1', 'fggnhn', 'a', 'd', 'j', 'f', 'ch2', '0', '2019-09-16 07:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `questions_details`
--

CREATE TABLE `questions_details` (
  `id` int(11) NOT NULL,
  `reasoning` int(20) DEFAULT NULL,
  `easy` int(20) DEFAULT NULL,
  `medium` int(20) DEFAULT NULL,
  `high` int(20) DEFAULT NULL,
  `negative_marking` int(1) DEFAULT NULL,
  `neg_marking_value` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_details`
--

INSERT INTO `questions_details` (`id`, `reasoning`, `easy`, `medium`, `high`, `negative_marking`, `neg_marking_value`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 3, 3, 1, 0.5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ques_paper`
--

CREATE TABLE `ques_paper` (
  `qp_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `no_quests` int(50) NOT NULL,
  `q_describe` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_paper`
--

INSERT INTO `ques_paper` (`qp_id`, `sub_id`, `c_id`, `no_quests`, `q_describe`, `date`) VALUES
(3, 1, 1, 100, 'OPERATING SYSTEM', '2016-01-23 19:41:33'),
(5, 2, 2, 60, 'COMPILER', '2016-01-23 19:42:43'),
(6, 1, 1, 5, 'fdsuhjdxzfguk', '2019-08-29 10:07:45'),
(7, 1, 1, 100, 'OS', '2019-08-30 08:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `res_id` int(20) NOT NULL,
  `res_name` varchar(200) NOT NULL,
  `res_desc` varchar(2000) NOT NULL,
  `res_filename` varchar(200) NOT NULL,
  `res_status` enum('0','1') NOT NULL,
  `c_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `res_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_response`
--

CREATE TABLE `std_response` (
  `std_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `qp_id` int(20) NOT NULL,
  `q_id` int(20) NOT NULL,
  `ansbystd` varchar(50) NOT NULL,
  `review_mark` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `std_id` int(20) NOT NULL,
  `std_name` varchar(20) DEFAULT NULL,
  `std_pass` varchar(50) NOT NULL,
  `std_email` varchar(50) DEFAULT NULL,
  `std_mob` bigint(20) DEFAULT NULL,
  `std_home` varchar(500) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  `subject` int(10) DEFAULT NULL,
  `plan` varchar(50) NOT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`std_id`, `std_name`, `std_pass`, `std_email`, `std_mob`, `std_home`, `course`, `subject`, `plan`, `father_name`, `dob`, `reg_date`) VALUES
(5, 'SHANTANU', '827ccb0eea8a706c4c34a16891f84e7b', 'creativeshantanu@gmail.com', 8090517516, 'rajajipuram', '2', NULL, '', 'qweqweqe', '2015-12-23', '2016-01-20 06:41:57'),
(7, 'vikas', '81dc9bdb52d04dc20036dbd8313ed055', '80423', 789787, 'qweqweqe', '2', NULL, '2', 'fname', '2013-11-30', '2016-01-21 09:18:34'),
(8, 'anop', '81dc9bdb52d04dc20036dbd8313ed055', '123456', 8090, 'Aashiana', '2', NULL, '1', 'Father', '2009-12-24', '2016-01-22 06:13:37'),
(15, 'shanty', '81dc9bdb52d04dc20036dbd8313ed055', 'creative@gmail.com', 8009, 'address', '1', NULL, '2', 'father', '2013-10-28', '2016-01-27 10:30:10'),
(16, 'vikas', '81dc9bdb52d04dc20036dbd8313ed055', 'asd@g.co', 9080, 'chauk', '1', NULL, '1', 'fname', '2009-11-30', '2016-01-27 10:35:50'),
(17, 'Sarita Gupta', '81dc9bdb52d04dc20036dbd8313ed055', 'ss@gmail.com', 9956198145, 'Unnamed Road, Alipur Michlaola, Uttar Pradesh 209870, India', '1', NULL, '4', 'dfgfdgfdg', '1998-03-13', '2019-08-29 06:59:46'),
(19, 'test', '81dc9bdb52d04dc20036dbd8313ed055', 'test@gmail.com', 9956198456, 'Unnamed Road, Alipur Michlaola, Uttar Pradesh 209870, India', '5', NULL, '9', 'test', '2019-08-31', '2019-08-30 07:56:17'),
(30, '', '81dc9bdb52d04dc20036dbd8313ed055', 'augura@augurs.in', NULL, '', 'php', NULL, '', '', '0000-00-00', '2019-08-31 06:15:31'),
(31, 'Sarita Gupta', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 9956198125, '', '1', 2, '', '', '0000-00-00', '2019-08-31 06:15:54'),
(32, 'Jiya', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@augurs.in', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-02 11:06:55'),
(33, '', 'e10adc3949ba59abbe56e057f20f883e', 'abc@gmail.com', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-17 10:07:49'),
(34, 'Shalu Gupta', '81dc9bdb52d04dc20036dbd8313ed055', 'shalu@gmail.com', 9956198145, 'Unnamed Road Alipur Michlaola Uttar Pradesh 209870 India', '', 1, '', 'abc', '2019-09-21', '2019-09-17 10:18:28'),
(36, '', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1234567890, '', '', 1, '', '', '0000-00-00', '2019-09-17 10:20:45'),
(37, '', '81dc9bdb52d04dc20036dbd8313ed055', 'ss1@gmail.com', NULL, '', '', 0, '', '', '0000-00-00', '2019-09-17 10:27:06'),
(38, '', '81dc9bdb52d04dc20036dbd8313ed055', 'ss2@gmail.com', NULL, '', '', 0, '', '', '0000-00-00', '2019-09-17 10:29:00'),
(39, '', '81dc9bdb52d04dc20036dbd8313ed055', 'sxds@gmail.com', NULL, '', '', 2, '', '', '0000-00-00', '2019-09-17 11:09:54'),
(42, 'Sarita Gupta', '827ccb0eea8a706c4c34a16891f84e7b', 'sarita@augurs.in', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-17 11:57:09'),
(43, '', '50cc228c7b3fc8aece8e76f7fe40cb48', 'creativeshantanu@gma', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-17 12:25:00'),
(44, '', '4a7d1ed414474e4033ac29ccb8653d9b', 'shalu1@gmail.com', NULL, '', '', 2, '', '', '0000-00-00', '2019-09-17 12:43:30'),
(45, 'svfhvbh', '81dc9bdb52d04dc20036dbd8313ed055', 'safgfrita@augurs.in', NULL, '', '', 0, '', '', '0000-00-00', '2019-09-18 12:24:11'),
(46, 'Hhvvj', '81dc9bdb52d04dc20036dbd8313ed055', 'Ghdhbjhn@gmail.com', NULL, '', '', 2, '', '', '0000-00-00', '2019-09-18 12:28:49'),
(47, 'hft', '81dc9bdb52d04dc20036dbd8313ed055', 'zdgd@gmail.com', NULL, '', '', 2, '', '', '0000-00-00', '2019-09-18 12:30:55'),
(48, 'asfdg', '81dc9bdb52d04dc20036dbd8313ed055', 'f@gmail.com', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-18 12:32:33'),
(49, 'njvhj', '81dc9bdb52d04dc20036dbd8313ed055', 'hgf@gmail.com', NULL, '', '', 3, '', '', '0000-00-00', '2019-09-18 12:33:25'),
(50, 'cxd', '81dc9bdb52d04dc20036dbd8313ed055', 'fgf@gmail.com', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-18 13:10:46'),
(51, 'sfgvd', '81dc9bdb52d04dc20036dbd8313ed055', 'hgjm@gmail.com', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-18 13:16:04'),
(52, 'fd', '81dc9bdb52d04dc20036dbd8313ed055', 'jm@gmail.com', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-18 13:18:55'),
(53, 'xdg', '81dc9bdb52d04dc20036dbd8313ed055', 'zg', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-18 13:23:25'),
(54, 'sg', '81dc9bdb52d04dc20036dbd8313ed055', 'sg@gmail.com', NULL, '', '', 1, '', '', '0000-00-00', '2019-09-18 13:23:41'),
(55, 'Jiya', '81dc9bdb52d04dc20036dbd8313ed055', 'rishu@augurs.in', 9956198145, 'Unnamed Road Alipur Michlaola Uttar Pradesh 209870 India', '', 4, '', 'abc', '2019-09-20', '2019-09-26 13:24:43'),
(56, 'RISHABH MISHRA', 'e10adc3949ba59abbe56e057f20f883e', 'mshra.rishabh@outlook.com', NULL, NULL, '', 3, '', NULL, NULL, '2019-09-26 13:31:52'),
(57, 'RISHABH MISHRA', 'e10adc3949ba59abbe56e057f20f883e', 'mshra.rishabh@gmail.com', NULL, NULL, '', 1, '', NULL, NULL, '2019-09-26 13:52:53'),
(58, 'RISHABH MISHRA', 'e10adc3949ba59abbe56e057f20f883e', 'mshra.rishabh@outlk.com', NULL, NULL, '', 2, '', NULL, NULL, '2019-09-27 06:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `c_id`, `sub_name`, `sub_date`) VALUES
(1, 0, 'Frontend', '2019-09-02 05:42:52'),
(2, 0, 'PHP', '2019-09-02 05:43:00'),
(3, 0, '.Net', '2019-09-02 05:43:11'),
(4, 0, 'Android', '2019-09-02 05:43:21'),
(5, 0, 'Phyton', '2019-09-02 05:43:35'),
(6, 0, 'Other Backend Technology', '2019-09-02 05:43:58'),
(7, 0, 'Reasoning and Aplitude', '2019-09-02 05:44:47');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_questions_count`
-- (See below for the actual view)
--
CREATE TABLE `view_questions_count` (
`sub_id` int(20)
,`exam_level` varchar(20)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `view_questions_count`
--
DROP TABLE IF EXISTS `view_questions_count`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_questions_count`  AS  select `questions`.`sub_id` AS `sub_id`,`questions`.`exam_level` AS `exam_level`,count(0) AS `count` from `questions` group by `questions`.`sub_id`,`questions`.`exam_level` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `questions_details`
--
ALTER TABLE `questions_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_paper`
--
ALTER TABLE `ques_paper`
  ADD PRIMARY KEY (`qp_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `msg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `d_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `questions_details`
--
ALTER TABLE `questions_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ques_paper`
--
ALTER TABLE `ques_paper`
  MODIFY `qp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `std_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
