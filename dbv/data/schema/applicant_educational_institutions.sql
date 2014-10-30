CREATE TABLE `applicant_educational_institutions` (
  `entry_id` int(11) NOT NULL,
  `applicant_id` int(250) NOT NULL,
  `institution_name` varchar(250) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `study_area` varchar(250) NOT NULL,
  `studied_from` varchar(250) NOT NULL,
  `studied_to` varchar(250) NOT NULL,
  `additional_certificates` varchar(250) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1