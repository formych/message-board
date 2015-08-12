<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-11 16:26:37
         compiled from "E:\Wamp\www\project\msg_board\smarty\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1257955c802b7537df2-48982650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f99dd9866d8cba0aa8fc19f9619ff5012e95fe' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\msg_board\\smarty\\templates\\login.html',
      1 => 1439281596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257955c802b7537df2-48982650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c802b7624a01_79795148',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c802b7624a01_79795148')) {function content_55c802b7624a01_79795148($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
	    <meta htttp-equiv="Conten-Type" content="text/html"; charset="utf-8" />
		<title>用户登录</title>
		<meta name="description" content="留言系统是为方便公司员工交流,大家可以体验下." />
		<meta name="keywords" content="留言 内部 交流" />
		
		<link id="css" rel="stylesheet" type="text/css" href="../../css/all.css" />
		
		<?php echo '<script'; ?>
 type="text/javascript" src="../../js/*.js">   <?php echo '</script'; ?>
>
	</head>
	<body>
	    <?php echo $_smarty_tpl->getSubTemplate ("./common/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
	    <div class="head_foot_content">
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
						<form action="./loginDo.php" method="post" >
							<input type="hidden" name="act" value="login" />
							<input type="hidden" name="gourl" value="http://rrf.coding.io/" /> 
							 							
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
								<img id="captchaImg" src="../../common/checkCode.php" class="yzm" alt="验证码" onclick="this.src='../../common/checkCode.php?num='+Math.random()" />
								<p id="refreshCaptchaAch" >
									<a href="#" onclick="javascript:var pic=document.getElementById('captchaImg');src=pic.src.split('?')[0];var v=new Date().getTime();pic.src=src+'?v='+v;return false;">换一张</a>
                                </p>
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
						</ul> <br/><br/>
						<div>
						<?php if ($_GET['errno']==1) {?>
						<font color = 'red' size = '3px'>用户名或者密码错误!</font>
						<?php } elseif ($_GET['errno']==2) {?>
						<font color = 'red' size = '3px'>验证码错误!</font>
						<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	    <?php echo $_smarty_tpl->getSubTemplate ("./common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			
	</body>
</html><?php }} ?>
