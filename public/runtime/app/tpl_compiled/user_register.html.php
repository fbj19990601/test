<?php echo $this->fetch('inc/header.html'); ?> 
<?php
$this->_var['dpagecss'][] = $this->_var['TMPL_REAL']."/css/user_register.css";
$this->_var['dpagejs'][] = $this->_var['TMPL_REAL']."/js/user_register.js";
$this->_var['dcpagejs'][] = $this->_var['TMPL_REAL']."/js/user_register.js";
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['dpagecss'],
);
echo $k['name']($k['v']);
?>" />
<script type="text/javascript" src="<?php 
$k = array (
  'name' => 'parse_script',
  'v' => $this->_var['dpagejs'],
  'c' => $this->_var['dcpagejs'],
);
echo $k['name']($k['v'],$k['c']);
?>"></script>
<div class="blank"></div>

<div class="shadow_bg">
	<div class="wrap white_box">
		<div class="signlogin_box">
			<div class="left">
				
				<div class="link_dash f25">
					注册 [ <span><a href="http://%77%77%77%2E%61%63%2D%63%6E%2E%6E%65%74"  target="_blank"><font color=red><b>A</b><b>C</b><b>C</b><b>N</b><b>站</b><b>长</b><b>网</b><b>提</b><b>供</b><b>源</b><b>码</b></font></a></span> ]
				</div>
				<form id="user_register_form" name="user_register_form" action="<?php
echo parse_url_tag("u:user#do_register|"."".""); 
?>">
					
				<div class="form_row">
					<div class="blank15"></div>
					<label class="title"><font>*&nbsp;&nbsp;</font>电子邮箱:</label>
					<input type="text" value="电子邮箱" class="textbox" name="email"/>
					<div class="tip_box"></div>
					<div class="blank15"></div>
				</div>
				<div class="form_row">
					<label class="title"><font>*&nbsp;&nbsp;</font>创建密码:</label>
					<input type="password" name="user_pwd"  class="textbox" />
					<div class="tip_box"></div>
					<div class="blank15"></div>
				</div>
				<div class="form_row">
					<label class="title"><font>*&nbsp;&nbsp;</font>确认密码:</label>
					<input type="password" name="confirm_user_pwd"  class="textbox" />
					<div class="tip_box"></div>
					<div class="blank15"></div>
				</div>
				<div class="form_row">
					<label class="title"><font>*&nbsp;&nbsp;</font>会员帐号:</label>
					<input type="text" value="" class="textbox" name="user_name"/>
					<div class="tip_box"></div>
					<div class="blank15"></div>
				</div>
				
				<div class="button_row term">
					<span><a href="<?php
echo parse_url_tag("u:help#term|"."".""); 
?>"><?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'SITE_NAME',
);
echo $k['name']($k['v']);
?>服务条款</a></span>
					<div class="blank15"></div>
				</div>
				
				<div class="button_row do_register">
					<input type="button" value="" name="submit_form" class="btn_do_register" id="btn_do_register" />
					<input type="hidden" value="1" name="ajax" />
					<div class="blank15"></div>
				</div>
				
				</form>
			</div>
			
			<div class="right">
				<div class="link_dash f16">
					快速通过微博帐号登录					
				</div>		
				<div class="blank"></div>		
				<?php 
$k = array (
  'name' => 'api_login',
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
				<span class="no_account_tip">已有账号？</span>
				<a href="<?php
echo parse_url_tag("u:user#login|"."".""); 
?>" class="btn_go_login" title="立即登录"></a>
				
			</div>
			<div class="blank"></div>
			
		</div>
	</div>
</div>

<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?> 


