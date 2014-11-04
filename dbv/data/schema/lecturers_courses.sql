CREATE TABLE `lecturers_courses` (
  `id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_one` int(11) NOT NULL,
  `course_two` int(11) NOT NULL,
  `course_three` int(11) NOT NULL,
  `course_four` int(11) NOT NULL,
  `course_five` int(11) NOT NULL,
  `course_six` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1