CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `scitm`.`staff_details` AS
    select 
        `s`.`id` AS `id`,
        `sssg`.`staff_no` AS `staff_no`,
        `s`.`f_name` AS `f_name`,
        `s`.`s_name` AS `s_name`,
        `s`.`o_names` AS `o_names`,
        `ssg`.`ssg_id` AS `ssg_id`,
        `ssg`.`ssg_name` AS `ssg_name`,
        `sg`.`sg_id` AS `sg_id`
    from
        (((`scitm`.`staff` `s`
        join `scitm`.`staff_ssg` `sssg` ON ((`sssg`.`staff_id` = `s`.`id`)))
        join `scitm`.`staff_sub_groups` `ssg` ON ((`ssg`.`ssg_id` = `sssg`.`ssg_id`)))
        join `scitm`.`staff_groups` `sg` ON ((`ssg`.`sg_id` = `sg`.`sg_id`)))