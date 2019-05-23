<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `fanwe_admin`;");
E_C("CREATE TABLE `fanwe_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_name` varchar(255) NOT NULL,
  `adm_password` varchar(255) NOT NULL,
  `is_effect` tinyint(1) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `role_id` int(11) NOT NULL,
  `login_time` int(11) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_adm_name` (`adm_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `fanwe_admin` values('1','admin','c0cb726e103638a836c0cf7b7d100764','1','0','4','1410249438','127.0.0.1');");

require("../../inc/footer.php");
?>