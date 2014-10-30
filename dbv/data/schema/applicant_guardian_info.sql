CREATE TABLE `applicant_guardian_info` (
  `entry_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `sponsor_names` varchar(250) NOT NULL,
  `sponsor_relation` varchar(250) NOT NULL,
  `sponsor_telephone_no` int(30) NOT NULL,
  `sponsor_mobile_no` int(30) NOT NULL,
  `sponsor_email` varchar(250) NOT NULL,
  `sponsor_occupation` varchar(250) NOT NULL,
  `sponsor_postal_address` varchar(250) NOT NULL,
  `sponsor_monthly_income` varchar(250) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1