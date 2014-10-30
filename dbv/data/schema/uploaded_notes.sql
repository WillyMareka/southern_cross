CREATE TABLE `uploaded_notes` (
  `upload_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `unit` int(11) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topic_no` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1