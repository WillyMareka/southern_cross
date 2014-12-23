CREATE TABLE `staff_groups` (
  `sg_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`sg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1