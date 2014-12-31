ALTER TABLE `staff_ssg` ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;

ALTER TABLE `scitm`.`staff_ssg` 
CHANGE COLUMN `staff_no` `staff_no` VARCHAR(255) NOT NULL ;

INSERT INTO `scitm`.`staff_redirect` (`ssg_id`, `redirect`) VALUES ('1', 'staff/lecturer');
INSERT INTO `scitm`.`staff_redirect` (`ssg_id`, `redirect`) VALUES ('2', 'staff/principal');
INSERT INTO `scitm`.`staff_redirect` (`ssg_id`, `redirect`) VALUES ('3', 'staff/deputyprincipal');
