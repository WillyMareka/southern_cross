<<<<<<< HEAD
<<<<<<< HEAD
CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
=======
=======
>>>>>>> 563767909a6b2d9d8cf2b4e6e9d3a32d6d9a24e4
-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2014 at 01:04 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scitm`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
>>>>>>> 6692a8c4f87d9f127b35e0a78f661d790cc821d3
  `course_name` varchar(250) NOT NULL,
  `course_short_code` varchar(10) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_short_code`, `Description`) VALUES
(1, 'CERTIFICATE IN COMMUNITY HEALTH & DEVELOPMENT', 'CCHD', 'The department of Community Health will be the largest department in the college with two parallel classes, training Community Health Workers, building individual and community capacities by increasing medical health knowledge and self-sufficiency through a range of activities such as outreach, community education, informal counseling, social support and advocacy. '),
(2, 'CERTIFICATE IN MEDICAL & PSYCHOLOGICAL COUNSELING ', 'CMPC', ''),
(3, 'CERTIFICATE IN SOCIAL WORK ', 'CSW', ''),
(4, 'DIPLOMA IN COMMUNITY HEALTH & DEVELOPMENT ', 'DCHD', ''),
(5, 'DIPLOMA IN MEDICAL & PSYCHOLOGICAL COUNSELING ', 'DMPC', ''),
(6, 'DIPLOMA IN SOCIAL WORK ', 'DSW', ''),
(7, 'DIPLOMA IN CLINICAL MEDICINE AND SURGERY', 'DCMS', 'The department of Clinical Medicine will be the senior department in the college, training clinical officers (C.O) as middle level health personnel to offer a wide range of medical services, curative, preventive, promotive and rehabilitative in all parts of the country. The C.Os will supplement the work of medical doctors at all levels of healthcare from health centers (where they are in charge), district and provincial hospitals to referral teaching hospitals'),
(8, 'DIPLOMA IN COMMUNITY DEVELOPMENT ', 'DCD', ''),
(9, 'DIPLOMA IN PHARMACY ', 'DPh', 'This is a health profession that links the health sciences with the chemical sciences, and it is charged with ensuring the safe and effective use of medication'),
(10, 'REGISTERED COMMUNITY HEALTH NURSING ', 'RN', 'Registered Nursing (RN) requires a large base of knowledge used to assess, plan and intervene to promote health, prevent disease and help patients cope with illness. When providing direct patient care, nurses observe, assess and record symptoms, reactions and progress, which provides the basis for care planning and intervention. They are health educators and advocates for patients, families and communities. \r\n\r\nPrivately and internationally RNs enjoy a market that cannot be equal to any other health specialist, because of their comprehensive training skills and knowledge above basic expectations.\r\nRNs have a unique scope of practice and can practice independently, although they also collaborate with all members of the health care team to provide the care needed by each patient as an individual.\r\n'),
(11, 'DIPLOMA IN MEDICAL LABORATORY SCIENCES', 'DMLS', 'Medical Laboratory Science involves performing procedures on tissue specimens, blood samples and other body fluids. The tests and procedures that Medical Laboratory Technologists perform provide critical information enabling physicians to diagnose, treat and monitor a patient''s condition.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
