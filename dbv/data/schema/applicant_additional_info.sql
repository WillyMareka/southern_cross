CREATE TABLE `applicant_additional_info` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `source_of_discovery` varchar(250) NOT NULL,
  `reason_for_study` varchar(250) NOT NULL,
  `student_declaration` varchar(250) NOT NULL,
  `parent_declaration` varchar(250) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1