<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台管理</title>
</head>

<DIV class="Clear"></DIV>
<DIV class="Version">
<DIV class="Namber">
<H1>&nbsp;</H1>
<P class="TopName">&nbsp;</P></DIV>
</DIV></DIV><p class="top_info">欢迎[ 管理员:<?php echo (session('uname')); ?> ]登录后台管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Deltemp/index');?>" target="main">清空网站缓存</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Index/main');?>" target="main">后台首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="__ROOT__/" target="_blank">网站首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Index/loginOut');?>" target="_top">退出登录</a></p></DIV>
</body>
</html>