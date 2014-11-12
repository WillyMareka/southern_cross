ALTER TABLE `staff` ADD `identity` VARCHAR( 12 ) NOT NULL AFTER `phone_no` ;
ALTER TABLE `applicant_personal_info` CHANGE `dob` `dob` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ;