CREATE TABLE `staff_redirect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ssg_id` int(11) DEFAULT NULL,
  `redirect` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1