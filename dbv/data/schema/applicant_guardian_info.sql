CREATE TABLE `applicant_guardian_info` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `sponsor_names` varchar(250) NOT NULL,
  `sponsor_relation` int(11) NOT NULL,
  `sponsor_telephone_no` int(30) NOT NULL,
  `sponsor_mobile_no` int(30) NOT NULL,
  `sponsor_email` int(11) NOT NULL,
  `sponsor_occupation` int(11) NOT NULL,
  `sponsor_postal_address` varchar(250) NOT NULL,
  `sponsor_monthly_income` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1