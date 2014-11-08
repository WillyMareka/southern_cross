CREATE TABLE `application_approvals` (
  `approval_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`approval_id`),
  UNIQUE KEY `applicant_id_UNIQUE` (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1