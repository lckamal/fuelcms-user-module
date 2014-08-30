--
-- Table structure for table `site_groups`
--
CREATE TABLE `site_groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `site_groups`
--

INSERT INTO `site_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'teachers', 'Teachers'),
(3, 'students', 'Students');

--
-- Table structure for table `site_users`
--

CREATE TABLE `site_users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `site_users`
--

INSERT INTO `site_users` (`id`, `ip_address`, `username`, `password`, `salt`, `group_id`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 1, 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1409242798, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'kamal lamichhane', '$2y$08$i7TZMJumr89FRbue40azF.d3.bxAigt/.xUAVVrj2//lTUnFK1zdq', '', 3, 'lckamal@hotmail.com', '', '', 0, '', 1409156310, 1409157067, 1, 'Kamal', 'lamichhane', 'skrollx', '98989898');

--
-- Table structure for table `site_login_attempts`
--

CREATE TABLE `site_login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
