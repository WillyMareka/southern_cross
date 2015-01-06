CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(45) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  KEY `course_groups_fk_idx` (`course_id`),
  KEY `unit_groups_fk_idx` (`unit_id`),
  KEY `staff_groups_fk_idx` (`staff_id`),
  CONSTRAINT `course_groups_fk` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `unit_groups_fk` FOREIGN KEY (`unit_id`) REFERENCES `units` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `staff_groups_fk` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1