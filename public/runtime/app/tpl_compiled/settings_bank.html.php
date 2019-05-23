<?php echo $this->fetch('inc/header.html'); ?> 

<div class="blank"></div>

<div class="shadow_bg">
	<div class="wrap white_box"">
		<div class="page_title">
			请填写真实的银行帐户信息，用于提现与发放筹款。
		</div>
		<div class="switch_nav">
			<ul>
				<li><a href="<?php
echo parse_url_tag("u:settings#index|"."".""); 
?>">个人资料</a></li>
				<li><a href="<?php
echo parse_url_tag("u:settings#password|"."".""); 
?>">修改密码</a></li>
				<li><a href="<?php
echo parse_url_tag("u:settings#consignee|"."".""); 
?>">配送地址</a></li>
				<li><a href="<?php
echo parse_url_tag("u:settings#bind|"."".""); 
?>">绑定设置</a></li>
				<?php if ($this->_var['user_info']['ex_real_name'] == '' && $this->_var['user_info']['ex_account_info'] == '' && $this->_var['user_info']['ex_contact'] == ''): ?>
				<li class="current"><a href="<?php
echo parse_url_tag("u:settings#bank|"."".""); 
?>">银行帐户</a></li>
				<?php endif; ?>
			</ul>
		</div>
		
		<div class="blank"></div>
		<div class="full">
		<div class="empty_tip">以下信息我们承诺保护用户的隐私，不会公开。信息首次提交后将不可修改，如后期需要修正请联系管理员。</div>
		</div>
		<div class="blank"></div>
		<div class="left">
			<form class="ajax_form" action="<?php
echo parse_url_tag("u:settings#save_bank|"."".""); 
?>">
									
				<div class="form_row">
					<div class="blank15"></div>
					<label class="title w100">真实姓名:</label>
					<input type="text" value="<?php echo $this->_var['user_info']['ex_real_name']; ?>" class="textbox" name="ex_real_name" />
					<div class="blank1"></div>
					<div class="form_tip">与开户行相对应的真实姓名</div>
					<div class="blank15"></div>
				</div>
				<div class="form_row">
					<label class="title w100">银行帐号:</label>
					<input type="text" value="<?php echo $this->_var['user_info']['ex_account_info']; ?>" class="textbox" name="ex_account_info" />
					<div class="blank1"></div>
					<div class="form_tip">请填写真实的银行信息，包括开户行名称，帐号与相关信息。</div>
					<div class="blank15"></div>
				</div>
				<div class="form_row">
					<label class="title w100">联系方式:</label>
					<input type="text" value="<?php echo $this->_var['user_info']['ex_contact']; ?>" class="textbox" name="ex_contact" />
					<div class="blank1"></div>
					<div class="form_tip">请填写手机或电话等有效联系方式</div>
					<div class="blank15"></div>
				</div>
				
				
				<div class="submit_btn_row">
					<div class="ui-button green" rel="green">
						<div>
							<span>保存</span>
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