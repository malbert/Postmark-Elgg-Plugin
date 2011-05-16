DROP TABLE IF EXISTS `elgg_postmarkmailer_queue` ;

CREATE TABLE `elgg_postmarkmailer_queue` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `from_address` varchar(80) NOT NULL,
  `from_name` varchar(80) NOT NULL,
  `to_address` varchar(80) NOT NULL,
  `to_name` varchar(80) NOT NULL,
  `subject` TEXT NOT NULL,
  `message_plain` TEXT NOT NULL,
  `message_html` TEXT NULL,
  `send_try` tinyint(4) NOT NULL DEFAULT 0,
  `is_sent` tinyint(2) NOT NULL DEFAULT 0,
  `is_fail` tinyint(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

