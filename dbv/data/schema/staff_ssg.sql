CREATE TABLE `staff_ssg` (
  `staff_id` int(11) NOT NULL,
  `ssg_id` int(11) NOT NULL,
  `is_current` int(11) NOT NULL DEFAULT '1',
  `staff_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1