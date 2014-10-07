CREATE TABLE `applicant_contact_info` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `postal_code` varchar(250) NOT NULL,
  `current_city` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `office` int(11) DEFAULT NULL,
  `mobile_no` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1