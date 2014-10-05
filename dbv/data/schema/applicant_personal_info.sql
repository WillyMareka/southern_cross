CREATE TABLE `applicant_personal_info` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `birth_country` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `disability_info` varchar(250) DEFAULT NULL,
  `applicant_picture` varchar(250) NOT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1