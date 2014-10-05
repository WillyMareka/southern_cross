CREATE TABLE `applicant_religion_info` (
  `entry_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `denomination` varchar(250) NOT NULL,
  `date_of_entry` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1