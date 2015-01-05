ALTER TABLE `students` CHANGE `photo` `photo` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;
ALTER TABLE `administrator` ADD `user_id` VARCHAR(200) NOT NULL ;
ALTER TABLE `students` ADD `student_no` VARCHAR(255) NOT NULL AFTER `id`;