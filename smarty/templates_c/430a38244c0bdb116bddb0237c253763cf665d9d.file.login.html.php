<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-09 18:04:19
         compiled from "E:\Wamp\www\my\study\project\msg_board\smarty\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1634955c0b1c85f2c48-88233594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '430a38244c0bdb116bddb0237c253763cf665d9d' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\smarty\\templates\\login.html',
      1 => 1439114520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1634955c0b1c85f2c48-88233594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c0b1c8632ac8_22309807',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0b1c8632ac8_22309807')) {function content_55c0b1c8632ac8_22309807($_smarty_tpl) {?><!DOCTYPE html>
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
	    <?php echo $_smarty_tpl->getSubTemplate ("top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
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
		</div>
		<div class="footer">
	        <ul class="boston-postcards">
		        <li><a href="http://www.bilibili.com/html/aboutUs.html">关于哔哩哔哩动画</a><br>
			        <a href="http://www.bilibili.com/html/contact.html">联系我们</a> | <a
			        href="http://www.bilibili.com/html/join.html">加入我们</a><br> 官方微博：<a
			        target="_blank" href="http://weibo.com/bilibiliweb">新浪微博</a> | <a
					target="_blank" href="http://t.qq.com/bilibiliweb">腾讯微博</a><br> <a
					href="http://www.bilibili.com/html/duty.html">资源免责声明</a></li>
				<li><a href="http://www.bilibili.com/video/av271/">弹幕测试</a> | <a
					href="http://www.bilibili.com/video/av120040/">高级弹幕</a><br> <a
					href="http://www.bilibili.com/html/help.html">帮助中心</a><br> <a
					target="_blank" href="http://bbs.biligame.com/forum.php?mod=forumdisplay&fid=44">建议和BUG汇报</a><br> <a
					target="_blank" href="http://www.bilibili.com/html/copyright.html">侵权申诉</a>
				</li>
				<li><a href="http://www.bilibili.com/lottery">活动专题页</a> | <a
					href="http://www.bilibili.com/rss.html">RSS订阅</a><br> <a
					href="http://www.bilibili.com/html/cele.html">哔哩哔哩名人堂</a><br> <a
					href="http://www.bilibili.com/html/bizhi.html">壁纸下载</a><br> <a
					href="http://www.bilibili.com/html/userdel_list.html">补档认领处</a></li>
				<li><a target="_blank" href="http://h.bilibili.com/">画友 - beta</a><br>
					<a target="_blank" href="http://9ch.co/forum.php">第九频道</a><br> <a
					target="_blank" href="http://comic.qq.com/news/">资讯</a></li>
			</ul>			
		</div>						
	</body>
</html><?php }} ?>
