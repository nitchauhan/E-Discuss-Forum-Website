-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2021 at 06:18 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackoverflow`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`nitin`@`localhost` PROCEDURE `countage` (IN `age` VARCHAR(255))  NO SQL
SELECT TIMESTAMPDIFF (YEAR, age, CURDATE()) FROM cntage AS AGE$$

CREATE DEFINER=`nitin`@`localhost` PROCEDURE `fetchuser` (IN `queId` INT)  NO SQL
SELECT * FROM User WHERE userId = queId$$

CREATE DEFINER=`nitin`@`localhost` PROCEDURE `fetch_city` (IN `state` VARCHAR(200))  NO SQL
SELECT city_name from city WHERE state_id = (SELECT state_id from state WHERE state_name = state)$$

CREATE DEFINER=`nitin`@`localhost` PROCEDURE `insertuser` (IN `name` VARCHAR(255), IN `password` VARCHAR(255), IN `email` VARCHAR(255), OUT `id` INT(11))  NO SQL
BEGIN
insert into User(name,email,password) VALUES(name,email,password);
SET id = LAST_INSERT_ID();
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `answerMaster`
--

CREATE TABLE `answerMaster` (
  `ansId` int(40) NOT NULL,
  `queId` int(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `ansDesc` text NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `upvote` varchar(200) DEFAULT NULL,
  `downvote` varchar(200) DEFAULT NULL,
  `bestAns` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answerMaster`
--

INSERT INTO `answerMaster` (`ansId`, `queId`, `userId`, `ansDesc`, `image`, `date`, `upvote`, `downvote`, `bestAns`) VALUES
(54, 22, 57, 'c is a mother lang.', NULL, '2021-03-18 13:31:05', NULL, NULL, NULL),
(58, 22, 1, 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions', NULL, '2021-03-18 14:40:38', NULL, NULL, NULL),
(63, 22, 57, 'C is a powerful general-purpose programming language. It can be used to develop software like operating systems, databases, compilers, and so on.', NULL, '2021-03-18 16:17:46', NULL, NULL, NULL),
(66, 22, 57, 'C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language. It keeps fluctuating at number one scale of popularity along with Java programming language, which is also equally popular and most widely used among modern software programmers.', NULL, '2021-03-18 16:18:22', NULL, NULL, NULL),
(69, 22, 59, 'c is a most powerfull language/..', NULL, '2021-03-18 18:01:57', NULL, NULL, NULL),
(72, 26, 59, '<span class=\"phptagcolor\" style=\"box-sizing: inherit; color: red; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">&lt;?php</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">$servername =&nbsp;</span><span class=\"phpstringcolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">\"localhost\"</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">;</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">$username =&nbsp;</span><span class=\"phpstringcolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">\"username\"</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">;</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">$password =&nbsp;</span><span class=\"phpstringcolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">\"password\"</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">;</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span class=\"commentcolor\" style=\"box-sizing: inherit; color: green; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">// Create connection<br style=\"box-sizing: inherit;\"></span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">$conn =&nbsp;</span><span class=\"phpkeywordcolor\" style=\"box-sizing: inherit; color: mediumblue; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">new</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">&nbsp;mysqli($servername, $username, $password);</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span class=\"phpnumbercolor\" style=\"box-sizing: inherit; color: red; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"></span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"></span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span class=\"commentcolor\" style=\"box-sizing: inherit; color: green; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">// Check connection<br style=\"box-sizing: inherit;\"></span><span class=\"phpnumbercolor\" style=\"box-sizing: inherit; color: red; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"></span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"></span><span class=\"phpkeywordcolor\" style=\"box-sizing: inherit; color: mediumblue; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">if</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">&nbsp;($conn-&gt;connect_error)&nbsp;{</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span class=\"phpnumbercolor\" style=\"box-sizing: inherit; color: red; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"></span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">&nbsp;&nbsp;</span><span class=\"phpkeywordcolor\" style=\"box-sizing: inherit; color: mediumblue; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">die</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">(</span><span class=\"phpstringcolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">\"Connection failed: \"</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">&nbsp;. $conn-&gt;connect_error);</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">}</span><span class=\"phpnumbercolor\" style=\"box-sizing: inherit; color: red; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"></span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span class=\"phpkeywordcolor\" style=\"box-sizing: inherit; color: mediumblue; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">echo</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">&nbsp;</span><span class=\"phpstringcolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">\"Connected successfully\"</span><span style=\"color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">;</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\"><span class=\"phptagcolor\" style=\"box-sizing: inherit; color: red; font-family: Consolas, &quot;courier new&quot;; font-size: 15px; background-color: rgb(40, 44, 52);\">?&gt;</span><br>', NULL, '2021-03-19 09:59:47', NULL, NULL, NULL),
(74, 30, 61, '<ul style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 15px;\"><li style=\"box-sizing: inherit;\">OOP is faster and easier to execute</li><li style=\"box-sizing: inherit;\">OOP provides a clear structure for the programs<br></li></ul>', NULL, '2021-03-19 10:18:46', NULL, NULL, NULL),
(75, 24, 61, '<span class=\"token delimiter important\" style=\"color: rgb(238, 153, 0); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">&lt;?php</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n</span><span class=\"token variable\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">$mysqli</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">=</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token keyword\" style=\"color: rgb(25, 144, 184); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">new</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token class-name\" style=\"color: rgb(25, 144, 184); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">mysqli</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"localhost\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">,</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"user1\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">,</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"datasoft123\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">,</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"hr\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">;</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n\r\n</span><span class=\"token comment\" style=\"color: rgb(125, 139, 153); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">/* check connection */</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n</span><span class=\"token keyword\" style=\"color: rgb(25, 144, 184); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">if</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token variable\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">$mysqli</span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">-&gt;</span><span class=\"token property\" style=\"color: rgb(201, 44, 44); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">connect_errno</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">{</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n    </span><span class=\"token function\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">printf</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"Connect failed: %s\n\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">,</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token variable\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">$mysqli</span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">-&gt;</span><span class=\"token property\" style=\"color: rgb(201, 44, 44); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">connect_error</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">;</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n    </span><span class=\"token keyword\" style=\"color: rgb(25, 144, 184); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">exit</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">;</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">}</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n\r\n</span><span class=\"token keyword\" style=\"color: rgb(25, 144, 184); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">if</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">!</span><span class=\"token variable\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">$mysqli</span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">-&gt;</span><span class=\"token function\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">query</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"SET a=1\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">{</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n    </span><span class=\"token function\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">printf</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token string double-quoted-string\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\"Errormessage: %s\n\"</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">,</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\"> </span><span class=\"token variable\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">$mysqli</span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">-&gt;</span><span class=\"token property\" style=\"color: rgb(201, 44, 44); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">error</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">;</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">}</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n\r\n</span><span class=\"token comment\" style=\"color: rgb(125, 139, 153); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">/* close connection */</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n</span><span class=\"token variable\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">$mysqli</span><span class=\"token operator\" style=\"color: rgb(166, 127, 89); background: rgba(255, 255, 255, 0.5); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre;\">-&gt;</span><span class=\"token function\" style=\"color: rgb(47, 156, 10); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">close</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">(</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">)</span><span class=\"token punctuation\" style=\"color: rgb(95, 99, 100); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">;</span><span style=\"font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">\r\n</span><span class=\"token delimiter important\" style=\"color: rgb(238, 153, 0); font-family: Consolas, Monaco, &quot;Andale Mono&quot;, &quot;Ubuntu Mono&quot;, monospace; font-size: 16px; white-space: pre; background-color: rgb(253, 253, 253);\">?&gt;</span><br>', NULL, '2021-03-19 10:39:34', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `c_id` int(10) NOT NULL,
  `cName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`c_id`, `cName`) VALUES
(11, 'c'),
(12, 'c++'),
(13, 'python'),
(14, 'php'),
(15, 'cakephp'),
(16, 'drupal');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'ahemdabad', 1),
(2, 'bhopal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cntage`
--

CREATE TABLE `cntage` (
  `ageid` int(50) NOT NULL,
  `age` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `downvote`
--

CREATE TABLE `downvote` (
  `userId` int(10) NOT NULL,
  `ansId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questionMaster`
--

CREATE TABLE `questionMaster` (
  `queId` int(4) NOT NULL,
  `queTitle` varchar(200) NOT NULL,
  `queDesc` varchar(200) NOT NULL,
  `userId` int(4) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(200) DEFAULT NULL,
  `imagepath` varchar(200) DEFAULT NULL,
  `c_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionMaster`
--

INSERT INTO `questionMaster` (`queId`, `queTitle`, `queDesc`, `userId`, `date`, `tag`, `imagepath`, `c_id`) VALUES
(22, 'what is c??', '<p>what is c language?? it is mother tung?</p>\r\n', NULL, '2021-03-18 13:05:47', NULL, NULL, 11),
(24, 'what is con->error?', '<p>how the use this syantx??</p>\r\n', 59, '2021-03-18 18:02:36', NULL, NULL, 14),
(25, 'python', '<p>What is tuple?</p>\r\n', 59, '2021-03-18 18:06:59', NULL, NULL, 13),
(26, 'What is Mysql??', '<p>how the connect Mysql database in php?</p>\r\n', 1, '2021-03-19 09:58:28', NULL, NULL, 14),
(30, 'what is oops in php?', '<p>how the use oops in php?</p>\r\n', 57, '2021-03-19 10:16:18', NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(10) NOT NULL,
  `state_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'gujrat'),
(2, 'mp\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `trig_user`
--

CREATE TABLE `trig_user` (
  `name` varchar(255) NOT NULL,
  `age` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trig_user`
--

INSERT INTO `trig_user` (`name`, `age`) VALUES
('nimtin', '21'),
('vismay', '25'),
('x', NULL),
('1', NULL),
('nitin ', NULL),
('vi', NULL),
('nitinchauhan', NULL),
('pako', NULL),
('anish', NULL),
('kiran', NULL),
('pako', NULL),
('ediscuss', NULL),
('nitesh', NULL),
('hello', NULL),
('nitin', NULL),
('nitin', NULL),
('sign', NULL),
('nitin', NULL),
('x', NULL),
('qw', NULL),
('qq', NULL),
('nimtin', NULL),
('vismayPanchal', NULL),
('2omy', NULL),
('Nitin Chauhan', NULL),
('', NULL),
('vismayP', NULL),
('12', NULL),
('', NULL),
('yuvi', NULL),
('hgfhcf', NULL),
('', NULL),
('', NULL),
('mam', NULL),
('', NULL),
('', NULL),
('', NULL),
('prakashadd', NULL),
('', NULL),
('', NULL),
('paresh', NULL),
('vis', NULL),
('', NULL),
('', NULL),
('Vismay Panchal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upvote`
--

CREATE TABLE `upvote` (
  `ansId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upvote`
--

INSERT INTO `upvote` (`ansId`, `userId`, `status`) VALUES
(54, 57, 1),
(69, 1, 1),
(63, 60, 1),
(58, 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `userId` int(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `otp` int(50) DEFAULT NULL,
  `usertype` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userId`, `name`, `password`, `email`, `firstname`, `lastname`, `otp`, `usertype`, `img`) VALUES
(1, '', 'nitin', '', NULL, NULL, NULL, NULL, ''),
(57, '', '123', 'ymrj@a.in', NULL, NULL, NULL, NULL, 'forgot.png'),
(59, 'Vismay Bhai', '321', 'vismay.addweb@gmail.com', NULL, NULL, NULL, NULL, 'tomjerry.jpeg'),
(60, 'Parkash', '123', 'prakash.addweb@gmail.com', NULL, NULL, NULL, NULL, 'default.jpg'),
(61, 'luv', '123', '', NULL, NULL, NULL, NULL, ''),
(63, 'Vismay Panchal', '123', 'nitin.addweb@gmail.com', NULL, NULL, NULL, 'admin', NULL);

--
-- Triggers `User`
--
DELIMITER $$
CREATE TRIGGER `deluser` BEFORE DELETE ON `User` FOR EACH ROW BEGIN
INSERT into trig_user(name) VALUES(OLD.name);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerMaster`
--
ALTER TABLE `answerMaster`
  ADD PRIMARY KEY (`ansId`),
  ADD KEY `ansMaster_queMaster` (`queId`),
  ADD KEY `ansMaster_userMaster` (`userId`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_state` (`state_id`);

--
-- Indexes for table `cntage`
--
ALTER TABLE `cntage`
  ADD PRIMARY KEY (`ageid`);

--
-- Indexes for table `downvote`
--
ALTER TABLE `downvote`
  ADD KEY `downvote_ansmaster` (`ansId`),
  ADD KEY `downvote_usermaster` (`userId`);

--
-- Indexes for table `questionMaster`
--
ALTER TABLE `questionMaster`
  ADD PRIMARY KEY (`queId`),
  ADD KEY `queMaster_ansMaster` (`userId`),
  ADD KEY `queMaster_catogory` (`c_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `upvote`
--
ALTER TABLE `upvote`
  ADD KEY `upvote_answermaster` (`ansId`),
  ADD KEY `upvote_userMaster` (`userId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answerMaster`
--
ALTER TABLE `answerMaster`
  MODIFY `ansId` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cntage`
--
ALTER TABLE `cntage`
  MODIFY `ageid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionMaster`
--
ALTER TABLE `questionMaster`
  MODIFY `queId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userId` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answerMaster`
--
ALTER TABLE `answerMaster`
  ADD CONSTRAINT `ansMaster_queMaster` FOREIGN KEY (`queId`) REFERENCES `questionMaster` (`queId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ansMaster_userMaster` FOREIGN KEY (`userId`) REFERENCES `User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_state` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `downvote`
--
ALTER TABLE `downvote`
  ADD CONSTRAINT `downvote_ansmaster` FOREIGN KEY (`ansId`) REFERENCES `answerMaster` (`ansId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `downvote_usermaster` FOREIGN KEY (`userId`) REFERENCES `User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionMaster`
--
ALTER TABLE `questionMaster`
  ADD CONSTRAINT `queMaster_ansMaster` FOREIGN KEY (`userId`) REFERENCES `User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `queMaster_catogory` FOREIGN KEY (`c_id`) REFERENCES `catagory` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upvote`
--
ALTER TABLE `upvote`
  ADD CONSTRAINT `upvote_answermaster` FOREIGN KEY (`ansId`) REFERENCES `answerMaster` (`ansId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upvote_userMaster` FOREIGN KEY (`userId`) REFERENCES `User` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
