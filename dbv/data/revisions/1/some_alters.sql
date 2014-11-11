ALTER TABLE `scitm`.`courses` 
ADD COLUMN `course_no` INT NOT NULL AFTER `Description`;
UPDATE `scitm`.`courses` SET `course_no`='100' WHERE `course_id`='1';
UPDATE `scitm`.`courses` SET `course_no`='101' WHERE `course_id`='2';
UPDATE `scitm`.`courses` SET `course_no`='102' WHERE `course_id`='3';
UPDATE `scitm`.`courses` SET `course_no`='200' WHERE `course_id`='4';
UPDATE `scitm`.`courses` SET `course_no`='201' WHERE `course_id`='5';
UPDATE `scitm`.`courses` SET `course_no`='202' WHERE `course_id`='6';
UPDATE `scitm`.`courses` SET `course_no`='203' WHERE `course_id`='7';
UPDATE `scitm`.`courses` SET `course_no`='204' WHERE `course_id`='8';
UPDATE `scitm`.`courses` SET `course_no`='205' WHERE `course_id`='9';
UPDATE `scitm`.`courses` SET `course_no`='300' WHERE `course_id`='10';
UPDATE `scitm`.`courses` SET `course_no`='206' WHERE `course_id`='11';
ALTER TABLE `scitm`.`student_course` 
ADD COLUMN `applicant_id` INT NOT NULL AFTER `reg_date`;
ALTER TABLE `scitm`.`student_course` 
CHANGE COLUMN `student_id` `student_id` VARCHAR(255) NOT NULL ,
CHANGE COLUMN `course_id` `course_id` VARCHAR(255) NOT NULL ;
ALTER TABLE `scitm`.`student_course` 
CHANGE COLUMN `applicant_id` `applicant_id` INT(11) NOT NULL ,
ADD UNIQUE INDEX `applicant_id_UNIQUE` (`applicant_id` ASC);
ALTER TABLE `scitm`.`student_course` 
ADD UNIQUE INDEX `student_id_UNIQUE` (`student_id` ASC);
ALTER TABLE `application_approvals` CHANGE `status` `status` BOOLEAN NULL DEFAULT FALSE;