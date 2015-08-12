<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-09 18:16:21
         compiled from "E:\Wamp\www\my\study\project\msg_board\smarty\templates\login\content.html" */ ?>
<?php /*%%SmartyHeaderCode:1085255c72875d263e5-15400111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20df868e2622e68fe7dc59204a9b3e6b0c2a022b' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\smarty\\templates\\login\\content.html',
      1 => 1439115138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085255c72875d263e5-15400111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c72875d37fe9_84709786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72875d37fe9_84709786')) {function content_55c72875d37fe9_84709786($_smarty_tpl) {?><div class="head_foot_content">
	<div class="header">
		<div class="lin">
			<div class="tit">
				<img src="../../img/t2.png" alt="登录" />
			</div>
		</div>
		<div class="content-bd">
			<div class="content-l">
				<p>
					还没有账号？<br /> 快来注册会员，与大家一起！<br /> 共享留言交流所带来的无限欢乐吧！
				</p>
				<a class="zhuce" href="../register.php">立即注册</a>
			</div>
			<div class="line"></div>
			<div class="content-r">	
				<!--去掉onsubmit="return false;",暂时不加验证就可以提交-->					
				<form action="../login/loginDo.php" method="post" >
					<input type="hidden" name="act" value="login" />
					<input type="hidden" name="gourl" value="http://rrf.coding.io/" /> 
					<input type="hidden" name="keeptime" value="604800" />
					
					<div class="box">
						<span id="userIdSpt">&nbsp;</span>
						<input autocomplete="off" style="margin-bottom: 0" id="userIdTxt" placeholder="用户名" name="username" class="email" maxlength="50" type="text">								
					</div>
					<div class="box">
						<span id="userPwdTip">&nbsp;</span>
						<input id="passwdTxt" type="password" placeholder="密码" name="pwd" class="password" />
					</div>
					<div class="box">
						<a href="/resetpwd" class="mima">忘记密码？> </a>
						<span style="line-height: 30px;" class="begin" id="vdcodeSpt">&nbsp;</span>
						<input id="vdCodeTxt" style="text-transform: uppercase;" placeholder="验证码" class="code" name="vdcode"  maxlength="10" autocomplete="off" type="text" />
						<div class="sj_yzm" style="display: none">
						</div>
						<i></i> 
						<img id="captchaImg" src="" class="yzm" alt="" style="display: none" />
						<p id="refreshCaptchaAch" style="display: none">换一张</p>
						<div class="box">
							<label style="height: 25px; position: relative;"> 
								<input class="jz" type="checkbox" value="604800" name="keeptime" checked="checked" /> 
								<em>记住我<strong>不是自己的电脑上不要勾选此项</strong></em>
							</label>
						</div>                							
					</div>
					<input type="submit" class="login" value="登录" />	
				</form>
				<ul class="way">
					<a href="/login?sns=weibo"><li class="weibo">微博账号登录</li></a>
					<a href="/login?sns=qq"><li class="qq">QQ账号登录</li></a>
				</ul>
			</div>
		</div>
	</div>
</div><?php }} ?>
