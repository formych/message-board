<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-07 16:55:15
         compiled from "E:\Wamp\www\my\study\project\msg_board\smarty\templates\message.html" */ ?>
<?php /*%%SmartyHeaderCode:1488355c0b3dc2d1040-18817626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2b0c6a079622fe0e2b067ec7abd6010770698' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\smarty\\templates\\message.html',
      1 => 1438937712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488355c0b3dc2d1040-18817626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c0b3dc378f40_75143252',
  'variables' => 
  array (
    'msg' => 0,
    'temp' => 0,
    'navi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0b3dc378f40_75143252')) {function content_55c0b3dc378f40_75143252($_smarty_tpl) {?><html>
    <head>
	    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<?php echo $_smarty_tpl->getSubTemplate ("../../js/checkPageId.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../js/checkPageId.js"><?php echo '</script'; ?>
>
	<body>
	    <h2>
		<a href="createMessageUIcontroller"> new message</a> 
		<a href="../logout_controller.php"> logout </a></h2> 
		<h2>message list: </h2>
	    <table border="1">
		    <tr><td>Sender</td><td>Send Time</td><td>Getter</td><td>Content</td><td>Del</td</tr>
			<?php  $_smarty_tpl->tpl_vars['temp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['temp']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['temp']->key => $_smarty_tpl->tpl_vars['temp']->value) {
$_smarty_tpl->tpl_vars['temp']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['temp']->key;
?>
			    <tr><td><?php echo $_smarty_tpl->tpl_vars['temp']->value[0];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['temp']->value[3];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['temp']->value[1];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['temp']->value[2];?>
</td>
					<td><a href="../message_process.php?p_type=delete&id=<?php echo $_smarty_tpl->tpl_vars['temp']->value[4];?>
">删除</td>
				</tr>
			<?php } ?>			
		</table>
		<?php echo $_smarty_tpl->tpl_vars['navi']->value;?>
<br/>
		跳转页数
		<input type="text" id="page_id" />
		<input type="button" value="跳转"  id = "jump" onclick="checkPageId()" />  
		
	
	</body>
 


</html><?php }} ?>
