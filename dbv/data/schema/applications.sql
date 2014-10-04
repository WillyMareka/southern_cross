CREATE TABLE `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1