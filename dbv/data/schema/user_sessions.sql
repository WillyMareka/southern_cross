CREATE TABLE `user_sessions` (
  `session_id` int(11) NOT NULL,
  `session_no` varchar(255) DEFAULT NULL,
  `session_start` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1