<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `fanwe_index_image`;");
E_C("CREATE TABLE `fanwe_index_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `fanwe_index_image` values('5','./public/attachment/201211/07/10/5099c97ad9f82.gif','http://www.ac-cn.net','1','���༫Ʒ�����ҵԴ��,����ACCNվ����www.ac-cn.net');");
E_D("replace into `fanwe_index_image` values('6','./public/attachment/201211/07/10/5099c984946c3.jpg','http://www.ac-cn.net','2','ACCNվ����www.ac-cn.net�ṩ������');");

require("../../inc/footer.php");
?>