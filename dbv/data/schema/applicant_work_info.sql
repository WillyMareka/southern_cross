CREATE TABLE `applicant_work_info` (
  `entry_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `employer` varchar(250) NOT NULL,
  `work_type` varchar(250) NOT NULL,
  `duration_from` varchar(250) NOT NULL,
  `duration_to` varchar(250) NOT NULL,
  `work_title` varchar(250) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1