-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2016 at 03:09 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `AUTHORID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(50) NOT NULL,
  PRIMARY KEY (`AUTHORID`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AUTHORID`, `ANAME`) VALUES
(1, 'Genevieve Farrell'),
(2, 'Ashely Thornton'),
(3, 'Rhiannon Rush'),
(4, 'Ivy Campbell'),
(5, 'Tanek Beasley'),
(6, 'Leroy Melton'),
(7, 'Colton Banks'),
(8, 'Kato Valenzuela'),
(9, 'Chaney Brock'),
(10, 'Mira Jensen'),
(11, 'Odessa Rocha'),
(12, 'Jada Ware'),
(13, 'Rafael Cervantes'),
(14, 'Elizabeth Figueroa'),
(15, 'Marsden Sanchez'),
(16, 'Amos Morin'),
(17, 'Patience Callahan'),
(18, 'Flavia Gallagher'),
(19, 'Lenore Gallegos'),
(20, 'Hiroko Calhoun'),
(21, 'Zeus Chapman'),
(22, 'Ruby Cooper'),
(23, 'Sigourney Sims'),
(24, 'Hyatt Conway'),
(25, 'Fitzgerald Garner'),
(26, 'Wing Robbins'),
(27, 'Magee Suarez'),
(28, 'Tallulah Harding'),
(29, 'Ryan Lara'),
(30, 'Aladdin Rollins'),
(31, 'Melanie Holland'),
(32, 'Ayanna Houston'),
(33, 'Alexa Yates'),
(34, 'Abra Stout'),
(35, 'Uriel Serrano'),
(36, 'Daria Sims'),
(37, 'Perry Griffin'),
(38, 'August Lane'),
(39, 'Jelani Graves'),
(40, 'George Carr'),
(41, 'Kylan Cohen'),
(42, 'Logan Tate'),
(43, 'Nina Macias'),
(44, 'Kelsie Baird'),
(45, 'Unity Walter'),
(46, 'Quyn Britt'),
(47, 'Serena Erickson'),
(48, 'Bo Lewis'),
(49, 'Indigo Vance'),
(50, 'Myles Riggs'),
(51, 'Zelda Coffey'),
(52, 'Nerea Quinn'),
(53, 'Judah Lee'),
(54, 'Vladimir Roberson'),
(55, 'Mara Woodward'),
(56, 'Zane Cash'),
(57, 'Jamal Whitehead'),
(58, 'Kyle Sloan'),
(59, 'Pascale Moss'),
(60, 'Armand Decker'),
(61, 'Aurelia Walton'),
(62, 'Cecilia Alford'),
(63, 'Uta Bird'),
(64, 'Gemma Bradford'),
(65, 'Dustin Estrada'),
(66, 'Olympia Colon'),
(67, 'Nerea Conner'),
(68, 'Thor Cardenas'),
(69, 'David Figueroa'),
(70, 'Elvis Holder'),
(71, 'Leonard Whitfield'),
(72, 'Kameko Haynes'),
(73, 'Tashya Ward'),
(74, 'Barbara Reyes'),
(75, 'Kyle Hunt'),
(76, 'Anne Ford'),
(77, 'Lael Haynes'),
(78, 'Philip Vang'),
(79, 'Maryam Marks'),
(80, 'Orson Daugherty'),
(81, 'Bertha Logan'),
(82, 'Sophia Wallace'),
(83, 'Helen Ramirez'),
(84, 'Piper Salinas'),
(85, 'Mark Buchanan'),
(86, 'Judah Larsen'),
(87, 'Marvin Pace'),
(88, 'Rosalyn Jones'),
(89, 'Kaitlin Delgado'),
(90, 'Charity Hurst'),
(91, 'Beck Mann'),
(92, 'Noel Dunlap'),
(93, 'Catherine Briggs'),
(94, 'Summer Witt'),
(95, 'Breanna Barrera'),
(96, 'Grant Mcpherson'),
(97, 'Judah Parker'),
(98, 'Hilary Molina'),
(99, 'Jemima Hale'),
(100, 'Alice Patrick');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `DOCID` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  PRIMARY KEY (`DOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

DROP TABLE IF EXISTS `borrows`;
CREATE TABLE IF NOT EXISTS `borrows` (
  `BORNUMBER` int(11) NOT NULL AUTO_INCREMENT,
  `READERID` int(11) NOT NULL,
  `DOCID` int(11) NOT NULL,
  `COPYNO` int(11) NOT NULL,
  `LIBID` int(11) NOT NULL,
  `BDTIME` date NOT NULL,
  `RDTIME` date NOT NULL,
  PRIMARY KEY (`BORNUMBER`),
  KEY `READERID` (`READERID`,`DOCID`,`COPYNO`,`LIBID`),
  KEY `fk_copy_borrows` (`DOCID`,`COPYNO`,`LIBID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `LIBID` int(11) NOT NULL AUTO_INCREMENT,
  `LNAME` varchar(100) NOT NULL,
  `LLOCATION` varchar(100) NOT NULL,
  PRIMARY KEY (`LIBID`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`LIBID`, `LNAME`, `LLOCATION`) VALUES
(1, 'Oklahoma City', 'Ap #671-247 Eget Ave'),
(2, 'Kingussie', 'Ap #115-3145 Magna. Avenue'),
(3, 'Spruce Grove', '9115 Sed Road'),
(4, 'Waiuku', '659-4785 Turpis St.'),
(5, 'Buizingen', 'P.O. Box 354, 6610 Facilisis St.'),
(6, 'Varna/Vahrn', '8949 Eu Street'),
(7, 'Chanco', '3980 Nullam Ave'),
(8, 'Rimbey', '8799 Laoreet Ave'),
(9, 'Quedlinburg', '5163 A, Street'),
(10, 'Abbateggio', '4463 Ut St.'),
(11, 'Turriaco', 'P.O. Box 935, 9142 Amet St.'),
(12, 'Rio Marina', 'P.O. Box 230, 4429 Orci Road'),
(13, 'Carleton', 'Ap #459-2446 Non, Avenue'),
(14, 'Midlands', 'P.O. Box 152, 8543 Pede. Av.'),
(15, 'San Diego', '3780 At, Av.'),
(16, 'Sargodha', 'P.O. Box 667, 7201 Aliquam Avenue'),
(17, 'Notre-Dame-du-Nord', '155-8151 Vestibulum Rd.'),
(18, 'Irricana', '7069 Habitant Road'),
(19, 'Pangnirtung', 'P.O. Box 940, 6860 Ut Rd.'),
(20, 'Aartrijke', 'Ap #404-322 Etiam Rd.'),
(21, 'Bevel', 'Ap #630-1535 Ullamcorper Avenue'),
(22, 'Eugene', 'P.O. Box 575, 1885 Et Ave'),
(23, 'Sherborne', '346 Euismod Avenue'),
(24, 'IJlst', 'Ap #198-8518 Purus. Rd.'),
(25, 'Chastre', 'P.O. Box 928, 2959 Sodales Road'),
(26, 'Saint-Étienne-du-Rouvray', '7961 Dolor. Avenue'),
(27, 'Kamoke', 'P.O. Box 981, 2435 Ultricies Avenue'),
(28, 'Bremen', '1707 Dolor. Street'),
(29, 'San Lorenzo', 'Ap #617-1047 Donec St.'),
(30, 'Cambridge', '241-1665 Ac Road'),
(31, 'Neustadt am Rübenberge', 'P.O. Box 605, 9289 Gravida Street'),
(32, 'Sudbury', 'Ap #682-4723 Pellentesque Rd.'),
(33, 'Retford', 'Ap #613-1557 Euismod Street'),
(34, 'Invergordon', 'P.O. Box 301, 1978 Eu Av.'),
(35, 'Surat', '5179 Maecenas St.'),
(36, 'Chalon-sur-Saône', '8806 Eros Av.'),
(37, 'Orai', '559-4188 Dui. Av.'),
(38, 'Isle-aux-Coudres', 'Ap #597-908 Arcu Ave'),
(39, 'Belmonte del Sannio', 'P.O. Box 937, 2248 Et, Rd.'),
(40, 'Motta Camastra', '8517 Nisi St.'),
(41, 'Portland', '464-7995 Luctus Avenue'),
(42, 'Tiruchirapalli', 'P.O. Box 182, 8676 Tellus. Rd.'),
(43, 'Saarlouis', 'P.O. Box 285, 3469 Faucibus Rd.'),
(44, 'Iqaluit', '188-9907 Aptent Ave'),
(45, 'Overland Park', '8209 Luctus Road'),
(46, 'Saint Paul', '8038 Malesuada Rd.'),
(47, 'Gatineau', 'P.O. Box 101, 610 Pellentesque Rd.'),
(48, 'Portland', '464-7995 Luctus Avenue'),
(49, 'Tiruchirapalli', 'P.O. Box 182, 8676 Tellus. Rd.'),
(50, 'Saarlouis', 'P.O. Box 285, 3469 Faucibus Rd.'),
(51, 'Iqaluit', '188-9907 Aptent Ave'),
(52, 'Overland Park', '8209 Luctus Road'),
(53, 'Saint Paul', '8038 Malesuada Rd.'),
(54, 'Gatineau', 'P.O. Box 101, 610 Pellentesque Rd.'),
(55, 'Oklahoma City', 'Ap #671-247 Eget Ave'),
(56, 'Kingussie', 'Ap #115-3145 Magna. Avenue'),
(57, 'Spruce Grove', '9115 Sed Road'),
(58, 'Waiuku', '659-4785 Turpis St.'),
(59, 'Buizingen', 'P.O. Box 354, 6610 Facilisis St.'),
(60, 'Varna/Vahrn', '8949 Eu Street'),
(61, 'Chanco', '3980 Nullam Ave'),
(62, 'Rimbey', '8799 Laoreet Ave'),
(63, 'Quedlinburg', '5163 A, Street'),
(64, 'Abbateggio', '4463 Ut St.'),
(65, 'Turriaco', 'P.O. Box 935, 9142 Amet St.'),
(66, 'Rio Marina', 'P.O. Box 230, 4429 Orci Road'),
(67, 'Carleton', 'Ap #459-2446 Non, Avenue'),
(68, 'Midlands', 'P.O. Box 152, 8543 Pede. Av.'),
(69, 'San Diego', '3780 At, Av.'),
(70, 'Sargodha', 'P.O. Box 667, 7201 Aliquam Avenue'),
(71, 'Notre-Dame-du-Nord', '155-8151 Vestibulum Rd.'),
(72, 'Irricana', '7069 Habitant Road'),
(73, 'Pangnirtung', 'P.O. Box 940, 6860 Ut Rd.'),
(74, 'Aartrijke', 'Ap #404-322 Etiam Rd.'),
(75, 'Bevel', 'Ap #630-1535 Ullamcorper Avenue'),
(76, 'Eugene', 'P.O. Box 575, 1885 Et Ave'),
(77, 'Sherborne', '346 Euismod Avenue'),
(78, 'IJlst', 'Ap #198-8518 Purus. Rd.'),
(79, 'Chastre', 'P.O. Box 928, 2959 Sodales Road'),
(80, 'Saint-Étienne-du-Rouvray', '7961 Dolor. Avenue'),
(81, 'Kamoke', 'P.O. Box 981, 2435 Ultricies Avenue'),
(82, 'Bremen', '1707 Dolor. Street'),
(83, 'San Lorenzo', 'Ap #617-1047 Donec St.'),
(84, 'Cambridge', '241-1665 Ac Road'),
(85, 'Neustadt am Rübenberge', 'P.O. Box 605, 9289 Gravida Street'),
(86, 'Sudbury', 'Ap #682-4723 Pellentesque Rd.'),
(87, 'Retford', 'Ap #613-1557 Euismod Street'),
(88, 'Invergordon', 'P.O. Box 301, 1978 Eu Av.'),
(89, 'Surat', '5179 Maecenas St.'),
(90, 'Chalon-sur-Saône', '8806 Eros Av.'),
(91, 'Orai', '559-4188 Dui. Av.'),
(92, 'Isle-aux-Coudres', 'Ap #597-908 Arcu Ave'),
(93, 'Belmonte del Sannio', 'P.O. Box 937, 2248 Et, Rd.'),
(94, 'Motta Camastra', '8517 Nisi St.'),
(95, 'Portland', '464-7995 Luctus Avenue'),
(96, 'Tiruchirapalli', 'P.O. Box 182, 8676 Tellus. Rd.'),
(97, 'Saarlouis', 'P.O. Box 285, 3469 Faucibus Rd.'),
(98, 'Iqaluit', '188-9907 Aptent Ave'),
(99, 'Overland Park', '8209 Luctus Road'),
(100, 'Saint Paul', '8038 Malesuada Rd.'),
(101, 'Gatineau', 'P.O. Box 101, 610 Pellentesque Rd.'),
(102, 'Portland', '464-7995 Luctus Avenue'),
(103, 'Tiruchirapalli', 'P.O. Box 182, 8676 Tellus. Rd.'),
(104, 'Saarlouis', 'P.O. Box 285, 3469 Faucibus Rd.'),
(105, 'Iqaluit', '188-9907 Aptent Ave'),
(106, 'Overland Park', '8209 Luctus Road'),
(107, 'Saint Paul', '8038 Malesuada Rd.'),
(108, 'Gatineau', 'P.O. Box 101, 610 Pellentesque Rd.');

-- --------------------------------------------------------

--
-- Table structure for table `chief_editor`
--

DROP TABLE IF EXISTS `chief_editor`;
CREATE TABLE IF NOT EXISTS `chief_editor` (
  `EDITOR_ID` int(50) NOT NULL AUTO_INCREMENT,
  `ENAME` varchar(100) NOT NULL,
  PRIMARY KEY (`EDITOR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1012016201 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chief_editor`
--

INSERT INTO `chief_editor` (`EDITOR_ID`, `ENAME`) VALUES
(1012016101, 'Nissim Gaines'),
(1012016102, 'Idona Ortiz'),
(1012016103, 'Jerry Ramos'),
(1012016104, 'Cyrus Jones'),
(1012016105, 'Nichole Bailey'),
(1012016106, 'Charlotte Stein'),
(1012016107, 'Sophia Hammond'),
(1012016108, 'Allegra Wiley'),
(1012016109, 'Abra Wallace'),
(1012016110, 'Diana Buckley'),
(1012016111, 'Haley Hood'),
(1012016112, 'Daphne Olson'),
(1012016113, 'Ainsley Head'),
(1012016114, 'Mannix Eaton'),
(1012016115, 'Wade Spence'),
(1012016116, 'Catherine Bailey'),
(1012016117, 'Brennan Battle'),
(1012016118, 'Sheila Carpenter'),
(1012016119, 'Roth Merritt'),
(1012016120, 'Carlos Buchanan'),
(1012016121, 'Wynter Hunter'),
(1012016122, 'Kiayada Melendez'),
(1012016123, 'Gareth Ramirez'),
(1012016124, 'Haviva Bean'),
(1012016125, 'Quon Davenport'),
(1012016126, 'Rogan Patton'),
(1012016127, 'Mari Sampson'),
(1012016128, 'Abbot Washington'),
(1012016129, 'Willa Guzman'),
(1012016130, 'Madison Deleon'),
(1012016131, 'Sylvester Noble'),
(1012016132, 'Brianna Watts'),
(1012016133, 'Vladimir Juarez'),
(1012016134, 'Miranda Barnett'),
(1012016135, 'Kyle Hull'),
(1012016136, 'Callum Valencia'),
(1012016137, 'Rana Garrett'),
(1012016138, 'Gregory Warner'),
(1012016139, 'Gage Wyatt'),
(1012016140, 'Jeremy Terrell'),
(1012016141, 'Chava Griffin'),
(1012016142, 'Melodie Frederick'),
(1012016143, 'Jessamine Alexander'),
(1012016144, 'Charlotte Hudson'),
(1012016145, 'Nicole Harper'),
(1012016146, 'Phyllis Cooley'),
(1012016147, 'Tatiana Adams'),
(1012016148, 'Ivy Fuentes'),
(1012016149, 'Cecilia Whitney'),
(1012016150, 'Myra Villarreal'),
(1012016151, 'Karina Aguilar'),
(1012016152, 'Colette Bean'),
(1012016153, 'Aretha Webb'),
(1012016154, 'Jackson Hoover'),
(1012016155, 'Mercedes Fisher'),
(1012016156, 'Juliet Shepherd'),
(1012016157, 'Paloma Delgado'),
(1012016158, 'Mufutau Stein'),
(1012016159, 'Burton Hunter'),
(1012016160, 'Dakota Battle'),
(1012016161, 'Fatima Church'),
(1012016162, 'Alyssa Wilkinson'),
(1012016163, 'Moana Newman'),
(1012016164, 'Brynne Booth'),
(1012016165, 'Alfreda Tyson'),
(1012016166, 'Kerry Reeves'),
(1012016167, 'Kuame Gardner'),
(1012016168, 'Emerald Weber'),
(1012016169, 'Martena Mclaughlin'),
(1012016170, 'Nita Hardy'),
(1012016171, 'Lucas Barrera'),
(1012016172, 'Lara Lang'),
(1012016173, 'Hashim Salinas'),
(1012016174, 'Brent Good'),
(1012016175, 'Clark Nicholson'),
(1012016176, 'Zoe Burns'),
(1012016177, 'Inga Dixon'),
(1012016178, 'Adrian Shields'),
(1012016179, 'Alexis Barrett'),
(1012016180, 'Arthur Knowles'),
(1012016181, 'Miranda Holman'),
(1012016182, 'Emerson Wilson'),
(1012016183, 'Jameson Patrick'),
(1012016184, 'Danielle Sanford'),
(1012016185, 'Ezra Strickland'),
(1012016186, 'Pearl Decker'),
(1012016187, 'Venus Brady'),
(1012016188, 'Jaquelyn Roberson'),
(1012016189, 'Hu Bird'),
(1012016190, 'Mercedes Maldonado'),
(1012016191, 'Bert Cantrell'),
(1012016192, 'Felix Myers'),
(1012016193, 'Hayes Parks'),
(1012016194, 'Richard Quinn'),
(1012016195, 'Marshall Hendricks'),
(1012016196, 'Hedda Adkins'),
(1012016197, 'Aline Baker'),
(1012016198, 'Jared Sharpe'),
(1012016199, 'Jonas Brady'),
(1012016200, 'Jordan Blackburn');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

DROP TABLE IF EXISTS `copy`;
CREATE TABLE IF NOT EXISTS `copy` (
  `DOCID` int(11) NOT NULL,
  `COPYNO` int(11) NOT NULL,
  `LIBID` int(11) NOT NULL,
  `POSITION` varchar(100) NOT NULL,
  PRIMARY KEY (`DOCID`,`COPYNO`,`LIBID`),
  KEY `fk_libid_copy` (`LIBID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `DOCID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(100) NOT NULL,
  `PDATE` date NOT NULL,
  `PUBLISHERID` int(11) NOT NULL,
  PRIMARY KEY (`DOCID`)
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_editor`
--

DROP TABLE IF EXISTS `inv_editor`;
CREATE TABLE IF NOT EXISTS `inv_editor` (
  `DOCID` int(11) NOT NULL,
  `ISSUE_NO` int(11) NOT NULL,
  `IENAME` int(11) NOT NULL,
  PRIMARY KEY (`DOCID`,`ISSUE_NO`,`IENAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journal_issue`
--

DROP TABLE IF EXISTS `journal_issue`;
CREATE TABLE IF NOT EXISTS `journal_issue` (
  `DOCID` int(11) NOT NULL,
  `ISSUE_NO` int(11) NOT NULL,
  `SCOPE` varchar(100) NOT NULL,
  PRIMARY KEY (`DOCID`,`ISSUE_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journal_volume`
--

DROP TABLE IF EXISTS `journal_volume`;
CREATE TABLE IF NOT EXISTS `journal_volume` (
  `DOCID` int(11) NOT NULL,
  `JVOLUME` int(11) NOT NULL,
  `EDITOR_ID` int(11) NOT NULL,
  PRIMARY KEY (`DOCID`),
  KEY `EDITOR_ID` (`EDITOR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proceedings`
--

DROP TABLE IF EXISTS `proceedings`;
CREATE TABLE IF NOT EXISTS `proceedings` (
  `DOCID` int(11) NOT NULL AUTO_INCREMENT,
  `CDATE` date NOT NULL,
  `CLOCATION` varchar(100) NOT NULL,
  `CEDITOR` varchar(100) NOT NULL,
  PRIMARY KEY (`DOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `publisher` (
  `PUBLISHERID` int(11) NOT NULL AUTO_INCREMENT,
  `PUBNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  PRIMARY KEY (`PUBLISHERID`)
) ENGINE=InnoDB AUTO_INCREMENT=2022016101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PUBLISHERID`, `PUBNAME`, `ADDRESS`) VALUES
(2022016001, 'Cakewalk', '282-5960 Dolor. Ave'),
(2022016003, 'Finale', '248 Ac Avenue'),
(2022016035, 'Microsoft', 'P.O. Box 375, 1408 Nunc St.'),
(2022016048, 'Adobe', '1064 Vitae Av.'),
(2022016055, 'Lycos', 'P.O. Box 471, 3227 Erat. Avenue'),
(2022016056, 'Macromedia', '288-6757 Quam Avenue'),
(2022016059, 'Borland', '926-8987 Ac St.'),
(2022016061, 'Lavasoft', 'P.O. Box 251, 7445 Gravida. Street'),
(2022016070, 'Sibelius', '221-9730 Ornare Av.'),
(2022016072, 'Yahoo', '618 Nisl. St.'),
(2022016079, 'Chami', 'Ap #132-4936 Lectus, Av.'),
(2022016081, 'Altavista', '8888 Ut St.'),
(2022016092, 'Apple Systems', '639-8455 Nonummy Rd.'),
(2022016099, 'Google', 'P.O. Box 764, 9661 Cursus Av.');

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

DROP TABLE IF EXISTS `reader`;
CREATE TABLE IF NOT EXISTS `reader` (
  `READERID` int(100) NOT NULL AUTO_INCREMENT,
  `RTYPE` varchar(50) NOT NULL,
  `RNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  PRIMARY KEY (`READERID`)
) ENGINE=InnoDB AUTO_INCREMENT=1012016102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`READERID`, `RTYPE`, `RNAME`, `ADDRESS`) VALUES
(1012016001, 'Prady', 'Student', '66 Brookdale Gardens'),
(1012016002, 'Student', 'Devin Nash', 'Ap #417-4463 Aliquam St.'),
(1012016003, 'Teacher', 'Edan Barron', 'Ap #187-6280 Mus. Rd.'),
(1012016004, 'Teacher', 'Hanna Cain', 'Ap #697-8004 Lobortis Av.'),
(1012016005, 'Other', 'Orla H. Quinn', 'Ap #323-823 Ipsum Road'),
(1012016006, 'Senior Citizen', 'Chaim Koch', 'Ap #110-2169 Orci, St.'),
(1012016007, 'Student', 'Omar Terrell', '1240 Aliquam, Av.'),
(1012016008, 'Teacher', 'Patricia X. Mcdonald', '969-7125 In St.'),
(1012016009, 'Other', 'Courtney G. Maddox', 'P.O. Box 339, 1325 Ut Ave'),
(1012016010, 'Senior Citizen', 'Martin A. Norton', '5021 Elit. Rd.'),
(1012016011, 'Other', 'Illiana Norris', 'Ap #145-2123 Molestie St.'),
(1012016012, 'Other', 'Daniel U. Parsons', 'P.O. Box 739, 6126 Aliquam Ave'),
(1012016013, 'Senior Citizen', 'Mohammad Q. Holmes', '365-6890 Turpis Avenue'),
(1012016014, 'Other', 'Victoria Sandoval', 'Ap #332-5906 Et Av.'),
(1012016015, 'Student', 'Fredericka S. Mcbride', '613-1309 Risus Avenue'),
(1012016016, 'Teacher', 'Mariko R. Cooke', 'Ap #476-488 Tincidunt Ave'),
(1012016017, 'Teacher', 'Fiona Humphrey', 'P.O. Box 253, 9663 Consectetuer Road'),
(1012016018, 'Teacher', 'Yael T. Byers', '1753 Adipiscing, Rd.'),
(1012016019, 'Teacher', 'Shelly Bauer', '2648 Etiam Rd.'),
(1012016020, 'Senior Citizen', 'Paki Richard', '246-1443 Fames Rd.'),
(1012016021, 'Senior Citizen', 'Kameko Levy', 'P.O. Box 116, 5094 Non Rd.'),
(1012016022, 'Senior Citizen', 'Stone Sweeney', 'Ap #154-8214 Aliquet, St.'),
(1012016023, 'Student', 'Shaine U. Whitaker', 'P.O. Box 892, 673 Fames Street'),
(1012016024, 'Teacher', 'Mohammad G. Hamilton', '7264 Diam. Road'),
(1012016025, 'Teacher', 'Geraldine Gray', 'P.O. Box 874, 1097 Magna Av.'),
(1012016026, 'Teacher', 'Abraham R. Brewer', '1263 Gravida Rd.'),
(1012016027, 'Teacher', 'Alan F. Ingram', '874-8863 Augue Av.'),
(1012016028, 'Teacher', 'Kimberley Y. Lane', '8680 Non Rd.'),
(1012016029, 'Other', 'Carl Cortez', 'P.O. Box 624, 5916 Quis Road'),
(1012016030, 'Teacher', 'Jenette K. Duran', 'P.O. Box 691, 3917 Libero. Rd.'),
(1012016031, 'Teacher', 'Keefe Norton', 'P.O. Box 381, 5130 Ornare. Road'),
(1012016032, 'Senior Citizen', 'Tarik Hewitt', '623-6575 Arcu. St.'),
(1012016033, 'Teacher', 'Willow P. Decker', '5124 Pellentesque Road'),
(1012016034, 'Other', 'Jeanette Stewart', 'P.O. Box 738, 9131 Purus Rd.'),
(1012016035, 'Other', 'Lani Rivas', 'P.O. Box 852, 2401 A, Rd.'),
(1012016036, 'Student', 'Jelani Nicholson', '418-4561 Odio Avenue'),
(1012016037, 'Other', 'Adria F. Irwin', 'Ap #827-3804 Sem. Road'),
(1012016038, 'Senior Citizen', 'Destiny E. Cunningham', 'P.O. Box 681, 6940 Scelerisque Avenue'),
(1012016039, 'Other', 'Igor Glover', '4749 Mollis. St.'),
(1012016040, 'Teacher', 'John L. Boyd', 'Ap #214-862 Quis, Avenue'),
(1012016041, 'Teacher', 'Gail Dale', '2748 Diam Road'),
(1012016042, 'Other', 'Roth Adams', 'P.O. Box 972, 7854 Nisl. Rd.'),
(1012016043, 'Other', 'Candice Walter', 'P.O. Box 930, 876 Ante Avenue'),
(1012016044, 'Senior Citizen', 'Asher Y. Munoz', 'P.O. Box 505, 529 Eget, Avenue'),
(1012016045, 'Other', 'Raymond Randolph', 'Ap #488-2443 Libero. Ave'),
(1012016046, 'Senior Citizen', 'Kevyn Cantu', '160-7558 Convallis St.'),
(1012016047, 'Teacher', 'Maryam Franklin', 'Ap #906-1597 Commodo Street'),
(1012016048, 'Student', 'Kiayada E. Savage', '7579 Proin St.'),
(1012016049, 'Student', 'Mikayla Sharpe', 'Ap #465-6757 Diam Rd.'),
(1012016050, 'Other', 'Levi Burt', 'P.O. Box 497, 936 Nunc Avenue'),
(1012016051, 'Senior Citizen', 'Emi J. Martinez', '3606 Senectus Ave'),
(1012016052, 'Senior Citizen', 'Nash S. Carrillo', 'P.O. Box 167, 8996 Eget St.'),
(1012016053, 'Student', 'Madison Carver', 'Ap #615-5580 Adipiscing Rd.'),
(1012016054, 'Teacher', 'Ariel Wheeler', '728-9254 Luctus St.'),
(1012016055, 'Senior Citizen', 'Garrett Herring', 'Ap #662-3092 Arcu. Road'),
(1012016056, 'Other', 'Nina Q. Caldwell', '1317 Sit Avenue'),
(1012016057, 'Teacher', 'Olga Taylor', 'P.O. Box 948, 5718 Lacinia Av.'),
(1012016058, 'Student', 'Talon Hayes', 'Ap #252-1086 Sollicitudin St.'),
(1012016059, 'Other', 'Maggie A. Hawkins', 'Ap #828-2368 Sed St.'),
(1012016060, 'Student', 'Abigail R. Stewart', 'Ap #900-1730 Vivamus Avenue'),
(1012016061, 'Student', 'TaShya A. Wiggins', '425-5629 Gravida Road'),
(1012016062, 'Other', 'Lucius Norton', '1187 Sodales. Road'),
(1012016063, 'Student', 'Basia Cummings', '415-7012 Vehicula Rd.'),
(1012016064, 'Senior Citizen', 'Candice Gaines', '778-7014 Eleifend Street'),
(1012016065, 'Other', 'Kellie Alvarez', '312-8300 Varius Avenue'),
(1012016066, 'Other', 'Quincy E. Noble', 'P.O. Box 589, 2035 Sem Av.'),
(1012016067, 'Teacher', 'Joel Summers', 'P.O. Box 106, 920 Tempus Road'),
(1012016068, 'Teacher', 'Maile T. Whitney', 'Ap #714-9205 Ac, St.'),
(1012016069, 'Student', 'Allen Rowland', '249-1455 Consectetuer St.'),
(1012016070, 'Student', 'Hope Boone', 'P.O. Box 452, 1260 Libero. Avenue'),
(1012016071, 'Senior Citizen', 'Benjamin Saunders', '7173 Tempor Road'),
(1012016072, 'Teacher', 'Mercedes Aguilar', '9519 Vulputate Road'),
(1012016073, 'Senior Citizen', 'Jermaine Y. Francis', '3051 Urna. Av.'),
(1012016074, 'Senior Citizen', 'Sawyer V. Norman', '1723 Mattis Ave'),
(1012016075, 'Other', 'Steel Lamb', '288-8808 Pede Rd.'),
(1012016076, 'Other', 'Mason O. Fields', '2084 Ipsum Rd.'),
(1012016077, 'Other', 'Abbot Ballard', '1914 Et, Road'),
(1012016078, 'Senior Citizen', 'Ori Mckinney', '666-7748 Quisque Rd.'),
(1012016079, 'Senior Citizen', 'Zoe H. Stafford', 'P.O. Box 599, 949 In Avenue'),
(1012016080, 'Other', 'Amos R. Dennis', '203 Aliquam St.'),
(1012016081, 'Senior Citizen', 'Anastasia Mckinney', '144-5779 Eu Rd.'),
(1012016082, 'Senior Citizen', 'Burton Hull', '228-6525 Scelerisque Road'),
(1012016083, 'Student', 'Abigail T. Young', 'Ap #556-7221 Tellus, Rd.'),
(1012016084, 'Senior Citizen', 'Randall Acosta', 'Ap #262-4065 Nisi St.'),
(1012016085, 'Teacher', 'Keefe Montoya', 'P.O. Box 212, 5110 Sagittis Road'),
(1012016086, 'Student', 'Lois Fuentes', 'Ap #134-9922 Vestibulum Rd.'),
(1012016087, 'Student', 'Aspen J. Burks', '809-3890 Proin Street'),
(1012016088, 'Other', 'Lareina Bean', '118-7870 Aliquet Rd.'),
(1012016089, 'Senior Citizen', 'Lavinia H. Cline', '4315 Dis Av.'),
(1012016090, 'Other', 'Mark J. Erickson', '3202 Cras Street'),
(1012016091, 'Other', 'Thor O. Sosa', '2574 Ac Rd.'),
(1012016092, 'Student', 'Harding T. Turner', 'P.O. Box 958, 4700 Laoreet Street'),
(1012016093, 'Senior Citizen', 'Lance Burton', '448-5625 Nunc St.'),
(1012016094, 'Other', 'Carlos W. Simon', 'P.O. Box 315, 3063 Volutpat St.'),
(1012016095, 'Student', 'Nola S. Lloyd', 'P.O. Box 371, 3672 Integer Ave'),
(1012016096, 'Other', 'TaShya Watkins', '169-8290 Ultricies Road'),
(1012016097, 'Other', 'Graham Z. Stephenson', '394-6676 Varius Street'),
(1012016098, 'Senior Citizen', 'Nolan S. Zimmerman', '7341 Amet St.'),
(1012016099, 'Student', 'Heather G. Lynch', 'Ap #397-8677 Ac Avenue'),
(1012016100, 'Teacher', 'Shana R. Petty', '168-4084 Id Street'),
(1012016101, 'Senior Citizen', 'Jakeem Abbott', '3481 Lacinia Rd.');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE IF NOT EXISTS `reserves` (
  `RESNUMBER` int(11) NOT NULL,
  `READERID` int(11) NOT NULL,
  `DOCID` int(11) NOT NULL,
  `COPYNO` int(11) NOT NULL,
  `LIBID` int(11) NOT NULL,
  `DTIME` date NOT NULL,
  PRIMARY KEY (`RESNUMBER`),
  KEY `READERID` (`READERID`,`DOCID`,`COPYNO`,`LIBID`),
  KEY `fk_copy_reserves` (`DOCID`,`COPYNO`,`LIBID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `writes`
--

DROP TABLE IF EXISTS `writes`;
CREATE TABLE IF NOT EXISTS `writes` (
  `AUTHORID` int(11) NOT NULL,
  `DOCID` int(11) NOT NULL,
  PRIMARY KEY (`AUTHORID`,`DOCID`),
  KEY `fk_docid_writes` (`DOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_docid` FOREIGN KEY (`DOCID`) REFERENCES `document` (`DOCID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `fk_copy_borrows` FOREIGN KEY (`DOCID`,`COPYNO`,`LIBID`) REFERENCES `copy` (`DOCID`, `COPYNO`, `LIBID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_readerid_borrows` FOREIGN KEY (`READERID`) REFERENCES `reader` (`READERID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `copy`
--
ALTER TABLE `copy`
  ADD CONSTRAINT `fk_docid_copy` FOREIGN KEY (`DOCID`) REFERENCES `document` (`DOCID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_libid_copy` FOREIGN KEY (`LIBID`) REFERENCES `branch` (`LIBID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inv_editor`
--
ALTER TABLE `inv_editor`
  ADD CONSTRAINT `fk_inv_journal_issue` FOREIGN KEY (`DOCID`,`ISSUE_NO`) REFERENCES `journal_issue` (`DOCID`, `ISSUE_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `journal_issue`
--
ALTER TABLE `journal_issue`
  ADD CONSTRAINT `fk_docid_journal_issue` FOREIGN KEY (`DOCID`) REFERENCES `journal_volume` (`DOCID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `journal_volume`
--
ALTER TABLE `journal_volume`
  ADD CONSTRAINT `fk_editorid_j_vol` FOREIGN KEY (`EDITOR_ID`) REFERENCES `chief_editor` (`EDITOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proceedings`
--
ALTER TABLE `proceedings`
  ADD CONSTRAINT `fk_docid_proceedings` FOREIGN KEY (`DOCID`) REFERENCES `document` (`DOCID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_copy_reserves` FOREIGN KEY (`DOCID`,`COPYNO`,`LIBID`) REFERENCES `copy` (`DOCID`, `COPYNO`, `LIBID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_readerid_reserves` FOREIGN KEY (`READERID`) REFERENCES `reader` (`READERID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `writes`
--
ALTER TABLE `writes`
  ADD CONSTRAINT `fk_authorid_writes` FOREIGN KEY (`AUTHORID`) REFERENCES `author` (`AUTHORID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docid_writes` FOREIGN KEY (`DOCID`) REFERENCES `document` (`DOCID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
