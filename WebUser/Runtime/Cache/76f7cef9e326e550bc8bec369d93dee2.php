<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台首页</title>
</head>
<body>

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="LineRightBlue1">
            <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
          <tr>
            <td width="88%" height="24"><strong style="color:#697e95;">快捷操作：</strong></td>
            <td width="12%" align="right" class="bt_add"></td>
          </tr>
        </table>
        </td>
      </tr>
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #BFC9D2 solid; border-top:none;">
      <tr>
        <td height="92">
          <div class="panel">
            <ul>
              <li><a href="<?php echo U('Config/index');?>"><span><img src="../Public/images/blue_2010/config.gif" alt="" hspace="20" border="0"></span><p>网站设置</p></a></li>
              <li><a href="<?php echo U('List/index');?>"><span><img src="../Public/images/blue_2010/company.gif" alt="" hspace="20" border="0" /></span><p>公司简介</p></a></li>
              <li><a href="<?php echo U('Product/index');?>"><span><img src="../Public/images/blue_2010/products.gif" alt="" hspace="20" border="0" /></span><p>产品管理</p></a></li>
              <li><a href="<?php echo U('New/index');?>"><span><img src="../Public/images/blue_2010/news.gif" alt="" hspace="20" border="0" /></span><p>新闻管理</p></a></li>
              <li><a href="<?php echo U('Photo/index');?>"><span><img src="../Public/images/blue_2010/photo.gif" alt="" hspace="20" border="0" /></span><p>图片管理</p></a></li>
              <li><a href="<?php echo U('Download/index');?>"><span><img src="../Public/images/blue_2010/download.gif" alt="" hspace="20" border="0" /></span><p>下载管理</p></a></li>
              <li><a href="<?php echo U('Flash/index');?>"><span><img src="../Public/images/blue_2010/banner.gif" alt="" hspace="20" border="0"></span><p>广告管理</p></a></li>
              <li><a href="<?php echo U('User/index');?>"><span><img src="../Public/images/blue_2010/user.gif" alt="" hspace="20" border="0" /></span><p>用户管理</p></a></li>
              <li><a href="<?php echo U('Link/index');?>"><span><img src="../Public/images/blue_2010/link.gif" alt="" hspace="20" border="0" /></span><p>友情链接</p></a></li> 
            </ul>
          </div>
        </td>
      </tr>
	</table>

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            
            </td>
            <td width="92%" align="center">
 
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>