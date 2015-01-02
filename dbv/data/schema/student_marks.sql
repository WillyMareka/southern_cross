CREATE TABLE `student_marks` (
  `student_id` int(11) DEFAULT NULL,
  `assessment_id` int(11) DEFAULT NULL,
  `attained_marks` decimal(4,2) DEFAULT NULL,
  KEY `student_marks_fk_idx` (`student_id`),
  KEY `assessment_marks_fk_idx` (`assessment_id`),
  CONSTRAINT `student_marks_fk` FOREIGN KEY (`student_id`) REFERENCES `student_course` (`student_course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `assessment_marks_fk` FOREIGN KEY (`assessment_id`) REFERENCES `group_assessments` (`assessment_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1