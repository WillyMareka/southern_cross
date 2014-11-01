CREATE TABLE `topic_description` (
  `desc_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1