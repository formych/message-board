<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 11:19:51
         compiled from "E:\Wamp\www\project\message-board\smarty\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:252855caa755d86e77-25910663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f64728edbecc63f2423db11b61097fe50ceb979' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\message-board\\smarty\\templates\\register.html',
      1 => 1439349178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252855caa755d86e77-25910663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55caa755e7a595_91956476',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55caa755e7a595_91956476')) {function content_55caa755e7a595_91956476($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
	    <meta htttp-equiv="Conten-Type" content="text/html"; charset="utf-8" />
		<title>用户注册</title>
		
		<link id="css" rel="stylesheet" type="text/css" href="../../css/all.css" />
		
		<?php echo '<script'; ?>
 type="text/javascript" src="../../js/*.js">   <?php echo '</script'; ?>
>
	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ("./common/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="head_foot_content">
			<div class="zcdl_content pos_re">
				<div class="line"></div>
				<div class="title title1"></div>
				<div class="center_title">
					<form action="./registerDo.php" method="post">
						<div class="new_phone center_div">
							<input name="dopost" value="regok" type="hidden"> 
							<input class="user_id_password mar_b_40px" name="uname" placeholder="昵称（例：哔哩哔哩）" type="text">
				        </div>
						<p id="unameTip" class="yzm_x mar_t_69"></p>
						<div class="new_phone center_div">
							<input class="user_id_password" id="password" name="pwd" placeholder="密码（6-16个字符组成，区分大小写）" type="password">
						</div>
						<input class="next_step center_div mar_t_120 ys-a" value="注册" id="regSubmit" type="submit" /> 				
			        </form>
		        </div>
			</div>
		</div>		
		<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
