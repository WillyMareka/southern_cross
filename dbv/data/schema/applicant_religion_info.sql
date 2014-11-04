CREATE TABLE `applicant_religion_info` (
  `entry_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `denomination` varchar(250) DEFAULT NULL,
  `date_of_entry` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `specified_other` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1