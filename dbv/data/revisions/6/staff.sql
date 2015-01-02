RENAME TABLE `scitm`.`staff_roles` TO `scitm`.`staff_groups` ;

ALTER TABLE `staff_groups` CHANGE `role_id` `sg_id` INT( 11 ) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `staff_groups` CHANGE `role_name` `group_name` VARCHAR( 20 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;

ALTER TABLE `staff_groups` ADD `description` VARCHAR( 100 ) NOT NULL ;

CREATE TABLE `staff_sub_groups` (
  `ssg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sg_id` int(11) NOT NULL,
  `ssg_name` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `staff_ssg` (
  `staff_id` int(11) NOT NULL,
  `ssg_id` int(11) NOT NULL,
  `is_current` int(11) NOT NULL DEFAULT '1',
  `staff_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
