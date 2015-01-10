CREATE TABLE `student_groups` (
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(250) NOT NULL,
  `unit` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
=======
  `student_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `student_group_fk_idx` (`student_id`),
  KEY `group_fk_idx` (`group_id`),
  CONSTRAINT `group_fk` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_group_fk` FOREIGN KEY (`student_id`) REFERENCES `student_course` (`student_course_id`) ON DELETE CASCADE ON UPDATE CASCADE
>>>>>>> 915d3293ffa83c2040b82272361f5f821f4d5cb5
) ENGINE=InnoDB DEFAULT CHARSET=latin1