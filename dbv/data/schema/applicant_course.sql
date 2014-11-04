CREATE TABLE `applicant_course` (
  `applicant_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `intake` int(11) NOT NULL,
  `date_applied` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `applicant_id` (`applicant_id`,`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1