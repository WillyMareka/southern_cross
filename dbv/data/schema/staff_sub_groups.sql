CREATE TABLE `staff_sub_groups` (
  `ssg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sg_id` int(11) NOT NULL,
  `ssg_name` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1