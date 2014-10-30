CREATE TABLE `applicant_education_info` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `yrs_of_english` int(11) NOT NULL,
  `primary_level` varchar(255) NOT NULL,
  `secondary_level` varchar(255) NOT NULL,
  `post_secondary` varchar(255) NOT NULL,
  `other_languages` varchar(255) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1