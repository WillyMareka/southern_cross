CREATE TABLE `group_assessments` (
  `assessment_id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_name` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `totalmarks` int(11) DEFAULT NULL,
  `weight` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`assessment_id`),
  KEY `group_assessment_fk_idx` (`group_id`),
  CONSTRAINT `group_assessment_fk` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1