<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `fanwe_log`;");
E_C("CREATE TABLE `fanwe_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_info` text NOT NULL,
  `log_time` int(11) NOT NULL,
  `log_admin` int(11) NOT NULL,
  `log_ip` varchar(255) NOT NULL,
  `log_status` tinyint(1) NOT NULL,
  `module` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2406 DEFAULT CHARSET=gbk");
E_D("replace into `fanwe_log` values('2359','��ά�ڳ���ӳɹ�','1352227067','1','127.0.0.1','1','IndexImage','insert');");
E_D("replace into `fanwe_log` values('2360','��ά�ڳ���ӳɹ�','1352227077','1','127.0.0.1','1','IndexImage','insert');");
E_D("replace into `fanwe_log` values('2361','ԭ��DIY������Ϸ�����򡷡��ƽ����롷�ڴ�����֧�ָ��³ɹ�','1352229024','1','127.0.0.1','1','Deal','update');");
E_D("replace into `fanwe_log` values('2362','ԭ��DIY������Ϸ�����򡷡��ƽ����롷�ڴ�����֧�ָ��³ɹ�','1352229031','1','127.0.0.1','1','Deal','update');");
E_D("replace into `fanwe_log` values('2363','55_is_recommend���óɹ�','1352229046','1','127.0.0.1','1','Deal','toogle_status');");
E_D("replace into `fanwe_log` values('2394','admin��¼�ɹ�','1364014964','1','127.0.0.1','1','Public','do_login');");
E_D("replace into `fanwe_log` values('2395','admin��¼�ɹ�','1410247802','1','127.0.0.1','1','Public','do_login');");
E_D("replace into `fanwe_log` values('2396','����ϵͳ����','1410248615','1','127.0.0.1','1','Conf','update');");
E_D("replace into `fanwe_log` values('2397','����ϵͳ����','1410248632','1','127.0.0.1','1','Conf','update');");
E_D("replace into `fanwe_log` values('2405','admin��¼�ɹ�','1410249438','1','127.0.0.1','1','Public','do_login');");
E_D("replace into `fanwe_log` values('2404','�ѻ���Ʒ�������³ɹ�','1410249300','1','127.0.0.1','1','Nav','update');");

require("../../inc/footer.php");
?>