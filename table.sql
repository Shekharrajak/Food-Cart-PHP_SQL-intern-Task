--
-- Table structure for table `internet_shop`
--

CREATE TABLE IF NOT EXISTS `internet_shop` (
  `id` int(6) NOT NULL auto_increment,
  `img` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `name` varchar(64) collate utf8_unicode_ci NOT NULL default '',
  `description` text collate utf8_unicode_ci NOT NULL,
  `price` double NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `internet_shop`
--

INSERT INTO `internet_shop` VALUES(1, '01.png', 'Snicker0', 'The original and popular Snicker.', 200);
INSERT INTO `internet_shop` VALUES(2, '02.png', 'Cola0', 'The cool coca.', 1200);
INSERT INTO `internet_shop` VALUES(3, '03.png', 'shake0', 'This is the fresh juice shake.', 400);
INSERT INTO `internet_shop` VALUES(4, '04.png', 'juice0', 'The new fresh juice.', 49);
INSERT INTO `internet_shop` VALUES(5, '05.png', 'Soda0', 'The soda.', 99);
INSERT INTO `internet_shop` VALUES(6, '06.png', 'ice cream0', 'go cool !', 300);


INSERT INTO `internet_shop` VALUES(7, '01 - Copy.png', 'Snicker1', 'This is the fresh  Snicker.', 200);
INSERT INTO `internet_shop` VALUES(8, '02 - Copy.png', 'Cola1', 'This is the fresh  cola.', 1200);
INSERT INTO `internet_shop` VALUES(9, '03 - Copy.png', 'shake1', 'This is the fresh juice shake.', 400);
INSERT INTO `internet_shop` VALUES(10, '04 - Copy.png', 'juice1', 'This is the fresh juice.', 49);
INSERT INTO `internet_shop` VALUES(11, '05 - Copy.png', 'Soda1', 'This is the fresh juice with soda.', 99);
INSERT INTO `internet_shop` VALUES(12, '06 - Copy.png', 'ice cream1', 'ice cream!', 300);


INSERT INTO `internet_shop` VALUES(13, '01 - Copy (2).png', 'Snicker2', 'This is the fresh  Snicker.', 200);
INSERT INTO `internet_shop` VALUES(14, '02 - Copy (2).png', 'Cola2', 'This is the fresh  cola.', 1200);
INSERT INTO `internet_shop` VALUES(15, '03 - Copy (2).png', 'shake2', 'This is the fresh juice shake.', 400);
INSERT INTO `internet_shop` VALUES(16, '04 - Copy (2).png', 'juice2', 'This is the fresh juice.', 49);
INSERT INTO `internet_shop` VALUES(17, '05 - Copy (2).png', 'Soda2', 'This is the fresh juice with soda.', 99);
INSERT INTO `internet_shop` VALUES(18, '06 - Copy (2).png', 'ice cream2', 'ice cream!', 300);


INSERT INTO `internet_shop` VALUES(19, '01 - Copy (3).png', 'Snicker3', 'This is the fresh  Snicker.', 200);
INSERT INTO `internet_shop` VALUES(20, '02 - Copy (3).png', 'Cola3', 'This is the fresh  cola.', 1200);
INSERT INTO `internet_shop` VALUES(21, '03 - Copy (3).png', 'shake3', 'This is the fresh juice shake.', 400);
INSERT INTO `internet_shop` VALUES(22, '04 - Copy (3).png', 'juice3', 'This is the fresh juice.', 49);
INSERT INTO `internet_shop` VALUES(23, '05 - Copy (3).png', 'Soda3', 'This is the fresh juice with soda.', 99);
INSERT INTO `internet_shop` VALUES(24, '06 - Copy (3).png', 'ice cream3', 'This is the fresh ice cream!', 300);


INSERT INTO `internet_shop` VALUES(25, '01 - Copy (4).png', 'Snicker4', 'This is the fresh  Snicker.', 200);
INSERT INTO `internet_shop` VALUES(26, '02 - Copy (4).png', 'Cola4', 'This is the fresh  cola.', 1200);
INSERT INTO `internet_shop` VALUES(27, '03 - Copy (4).png', 'shake4', 'This is the fresh juice shake.', 400);
INSERT INTO `internet_shop` VALUES(28, '04 - Copy (4).png', 'juice4', 'This is the fresh juice', 49);
INSERT INTO `internet_shop` VALUES(29, '05 - Copy (4).png', 'Soda4', 'This is the fresh juice with soda .', 99);
INSERT INTO `internet_shop` VALUES(30, '06 - Copy (4).png', 'ice cream4', 'This is the fresh ice cream!', 300);
