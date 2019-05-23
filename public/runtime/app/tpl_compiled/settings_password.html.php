<?php echo $this->fetch('inc/header.html'); ?> 

<div class="blank"></div>

<div class="shadow_bg">
	<div class="wrap white_box"">
		<div class="page_title">
			修改密码
		</div>
		<div class="switch_nav">
			<ul>
				<li><a href="<?php
echo parse_url_tag("u:settings#index|"."".""); 
?>">个人资料</a></li>
				<li class="current"><a href="<?php
echo parse_url_tag("u:settings#password|"."".""); 
?>">修改密码</a></li>
				<li><a href="<?php
echo parse_url_tag("u:settings#consignee|"."".""); 
?>">配送地址</a></li>
				<li><a href="<?php
echo parse_url_tag("u:settings#bind|"."".""); 
?>">绑定设置</a></li>
				<?php if ($this->_var['user_info']['ex_real_name'] == '' && $this->_var['user_info']['ex_account_info'] == '' && $this->_var['user_info']['ex_contact'] == ''): ?>
				<li><a href="<?php
echo parse_url_tag("u:settings#bank|"."".""); 
?>">银行帐户</a></li>
				<?php endif; ?>
			</ul>
		</div>
		
		<div class="blank"></div>
		
		<div class="left">
			<form class="ajax_form" action="<?php
echo parse_url_tag("u:settings#save_password|"."".""); 
?>">
									
				<div class="form_row">
					<div class="blank15"></div>
					<label class="title w100">新密码:</label>
					<input type="password" value="" class="textbox" name="user_pwd" />
					<div class="blank15"></div>
				</div>
				<div class="form_row">
					<label class="title w100">确认密码:</label>
					<input type="password" value="" class="textbox" name="confirm_user_pwd" />
					<div class="blank15"></div>
				</div>
				
				
				<div class="submit_btn_row">
					<div class="ui-button green" rel="green">
						<div>
							<span>保存密码</span>
						</div>
					</div>
					<input type="hidden" value="1" name="ajax" />
					<div class="blank15"></div>
				</div>
				
			</form>
		</div><!--left-->
		
		
		<div class="blank"></div>
		
	</div>
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?> 