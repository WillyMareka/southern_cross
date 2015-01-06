CREATE TABLE `student_groups` (
  `student_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `student_group_fk_idx` (`student_id`),
  KEY `group_fk_idx` (`group_id`),
  CONSTRAINT `group_fk` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_group_fk` FOREIGN KEY (`student_id`) REFERENCES `student_course` (`student_course_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1