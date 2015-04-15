CREATE TABLE IF NOT EXISTS `#__todo_tasks` (
  `todo_task_id` SERIAL,
  `uuid` char(36) NOT NULL UNIQUE,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `description` longtext,
  `enabled` tinyint(1) NOT NULL default 1,
  `locked_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `locked_by` bigint(20) NOT NULL default 0,
  `created_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` bigint(20) NOT NULL default 0,
  `modified_on` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` bigint(20) NOT NULL default 0,
  `params` text
) DEFAULT CHARSET=utf8;

--
-- Dumping data for table `#__todo_tasks`
--

INSERT INTO `#__todo_tasks` (`todo_task_id`, `uuid`, `title`, `slug`, `description`, `enabled`, `locked_on`, `locked_by`, `created_on`, `created_by`, `modified_on`, `modified_by`, `params`) VALUES
  (1, '6da0ac15-5a4e-4a34-9e81-8da190d56b84', 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', '<p><span style="color: #000000; font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet faucibus justo. Vivamus et faucibus lectus. Etiam a sapien et neque sodales iaculis. Sed suscipit aliquet lorem, at rutrum nibh aliquam sit amet. Vivamus sapien eros, porta sed arcu in, scelerisque egestas lorem. Suspendisse potenti. Fusce tempus elementum vehicula. In hac habitasse platea dictumst. Curabitur enim dui, porta nec eleifend at, sagittis non mi. Vivamus semper nisi quis lectus congue, sit amet laoreet erat mattis. Nullam at nibh vel lorem ornare pharetra id in turpis.</span></p>', 1, '0000-00-00 00:00:00', 0, '2014-11-17 13:02:20', 951, '0000-00-00 00:00:00', 0, NULL),
  (2, '1e6bade0-a5c1-4896-8623-02f43a026f5f', 'Utinam lobortis qualisque vis ex', 'utinam-lobortis-qualisque-vis-ex', '<p>Utinam lobortis qualisque vis ex, ei nec doming euismod. Pro id erant scaevola moderatius, ex quo fugit molestiae. Id usu saepe instructior, ei eos mundi erroribus assueverit. Sumo veri per ne, ad quodsi omnesque has, nec te euismod voluptaria dissentiet. No alii numquam mea, audiam splendide vim at. No has quod error quidam.</p>', 1, '0000-00-00 00:00:00', 0, '2014-11-17 13:07:58', 951, '0000-00-00 00:00:00', 0, NULL),
  (3, 'd923e4a3-4d51-4698-a3b6-6d1c3d3aa3da', 'Vis natum eleifend eu', 'vis-natum-eleifend-eu', '<p>Vis natum eleifend eu. Vix ad meis debet feugiat, latine constituam at duo. Dico cibo cum et, ea omnesque phaedrum qui. Te vidisse delenit vim.</p>', 0, '0000-00-00 00:00:00', 0, '2014-11-17 13:08:19', 951, '0000-00-00 00:00:00', 0, NULL),
  (4, '0ef502e9-f364-40e2-8639-a4af355f19fd', 'Mea probo labitur in', 'mea-probo-labitur-in', '<p>Mea probo labitur in, illum splendide reprimique eu sit. Aliquip nominavi philosophia ius te, id ius dolorum quaerendum, amet illud et vel. At quo deleniti repudiandae intellegebat, aperiri omnesque ne nam. Per consulatu prodesset at. Tacimates delicata ei has.</p>', 1, '0000-00-00 00:00:00', 0, '2014-11-17 13:08:47', 951, '0000-00-00 00:00:00', 0, NULL),
  (5, 'ca7b0608-8e5f-40e0-9369-291f212cb9a5', 'Pro eu bonorum adversarium', 'pro-eu-bonorum-adversarium', '<p>Pro eu bonorum adversarium, an pri duis diceret deserunt. Labores scribentur disputationi ius in. Ut qui quod mazim, ea solum democritum per. Zril aeterno appellantur vim cu, enim persecuti percipitur cu vim. Utinam soleat mentitum quo an, dico purto scripserit ne vis. Vel ei unum cetero labores, invenire salutandi principes ne sed. Ei persius indoctum sit, nonumes singulis cu sea, ut sea quaeque commune.</p>', 1, '0000-00-00 00:00:00', 0, '2014-11-17 13:09:03', 951, '0000-00-00 00:00:00', 0, NULL);


CREATE TABLE IF NOT EXISTS `#__activities` (
	`activities_activity_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`uuid` VARCHAR(36) NOT NULL DEFAULT '' UNIQUE,
	`application` VARCHAR(10) NOT NULL DEFAULT '',
	`type` VARCHAR(3) NOT NULL DEFAULT '',
	`package` VARCHAR(50) NOT NULL DEFAULT '',
	`name` VARCHAR(50) NOT NULL DEFAULT '',
	`action` VARCHAR(50) NOT NULL DEFAULT '',
	`row` varchar(2048) NOT NULL DEFAULT '',
	`title` VARCHAR(255) NOT NULL DEFAULT '',
	`status` varchar(100) NOT NULL,
	`created_on` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` INT(11) NOT NULL DEFAULT '0',
	`ip` varchar(45) NOT NULL DEFAULT '',
	`metadata` text NOT NULL,
	PRIMARY KEY(`activities_activity_id`),
	KEY `package` (`package`),
    KEY `name` (`name`),
    KEY `row` (`row`),
    KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `#__activities_activities`
--

INSERT INTO `#__activities` (`activities_activity_id`, `uuid`, `application`, `type`, `package`, `name`, `action`, `row`, `title`, `status`, `created_on`, `created_by`, `ip`, `metadata`) VALUES
  (1, 'ce3c628018f3426b8de4109b32861db3', 'admin', 'com', 'todo', 'item', 'add', '1', 'Lorem ipsum dolor sit amet', 'created', '2014-11-17 13:02:21', 951, '33.33.33.1', '[]'),
  (2, '0ab95c3f30ca4590a085c7843f47123b', 'admin', 'com', 'todo', 'item', 'add', '2', 'Utinam lobortis qualisque vis ex', 'created', '2014-11-17 13:07:58', 951, '33.33.33.1', '[]'),
  (3, 'b0baa5d8f5ff4efeb063ba76717104a6', 'admin', 'com', 'todo', 'item', 'add', '3', 'Vis natum eleifend eu', 'created', '2014-11-17 13:08:19', 951, '33.33.33.1', '[]'),
  (4, '7334ae6d4eaa4517a0cb60fb3ee904a9', 'admin', 'com', 'todo', 'item', 'add', '4', 'Mea probo labitur in', 'created', '2014-11-17 13:08:47', 951, '33.33.33.1', '[]'),
  (5, 'd938dd4b63454783a5d8bd14fa45e127', 'admin', 'com', 'todo', 'item', 'add', '5', 'Pro eu bonorum adversarium', 'created', '2014-11-17 13:09:03', 951, '33.33.33.1', '[]');
