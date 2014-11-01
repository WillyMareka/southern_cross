CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_short_code` varchar(10) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1