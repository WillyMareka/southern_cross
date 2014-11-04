CREATE TABLE `applicant_source_of_discovery` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `source_of_discovery` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1