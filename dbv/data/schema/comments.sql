CREATE TABLE `comments` (
  `comm_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(12) NOT NULL,
  `message` text NOT NULL,
  `date_recieved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1