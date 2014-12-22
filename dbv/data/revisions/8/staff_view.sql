CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `staff_details` AS
    select 
        `s`.`id` AS `id`,
        `sssg`.`staff_no` AS `staff_no`,
        `s`.`f_name` AS `f_name`,
        `s`.`s_name` AS `s_name`,
        `s`.`o_names` AS `o_names`,
        `ssg`.`ssg_id` AS `ssg_id`,
        `sg`.`sg_id` AS `sg_id`
    from
        (((`staff` `s`
        join `staff_ssg` `sssg` ON ((`sssg`.`staff_id` = `s`.`id`)))
        join `staff_sub_groups` `ssg` ON ((`ssg`.`ssg_id` = `sssg`.`ssg_id`)))
        join `staff_groups` `sg` ON ((`ssg`.`sg_id` = `sg`.`sg_id`)))