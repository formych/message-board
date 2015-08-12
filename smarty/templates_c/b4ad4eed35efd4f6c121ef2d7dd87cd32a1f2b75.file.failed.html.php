<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-11 17:28:09
         compiled from "E:\Wamp\www\project\msg_board\smarty\templates\failed.html" */ ?>
<?php /*%%SmartyHeaderCode:1635055c9627a4ee630-41462916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ad4eed35efd4f6c121ef2d7dd87cd32a1f2b75' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\msg_board\\smarty\\templates\\failed.html',
      1 => 1439264468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635055c9627a4ee630-41462916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c9627a54e075_77774380',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c9627a54e075_77774380')) {function content_55c9627a54e075_77774380($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
	    <meta htttp-equiv="Conten-Type" content="text/html"; charset="utf-8" />
		<title><?php echo $_GET['p_type'];?>
失败</title>
		
		<link id="css" rel="stylesheet" type="text/css" href="../../css/all.css" />		
		<?php echo '<script'; ?>
 type="text/javascript" src="../../js/*.js">   <?php echo '</script'; ?>
>
	</head>
	<body>
	    <?php echo $_smarty_tpl->getSubTemplate ("./common/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
		<center>
		<div>
			<h1><?php echo $_GET['p_type'];?>
失败！</h1>
	    </div>
		<div>
		    <h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">返回主界面</a>  </h1>
		</div>
		</center>
		<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html>
			<?php }} ?>
