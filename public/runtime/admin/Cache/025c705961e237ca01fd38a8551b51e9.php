<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo conf("APP_NAME");?><?php echo l("ADMIN_PLATFORM");?></title>
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/style.css" />
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/footer.css" />

</head>

<body>
	<div class="footer"><?php echo conf("APP_NAME");?><?php echo l("ADMIN_PLATFORM");?> <?php echo L("APP_VERSION");?>:<?php echo conf("DB_VERSION");?><?php if(app_conf("APP_SUB_VER")){ ?>.<?php echo app_conf("APP_SUB_VER");?><?php } ?>
	 [ <span><a href="http://%77%77%77%2E%61%63%2D%63%6E%2E%6E%65%74"  target="_blank"><font color=red><b>A</b><b>C</b><b>C</b><b>N</b><b>站</b><b>长</b><b>网</b><b>提</b><b>供</b><b>源</b><b>码</b></font></a>
</span>  ]</div>	
</body>
</html>