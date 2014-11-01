CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `notification_message` text NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sent_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1