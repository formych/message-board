<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-03 22:11:38
         compiled from "..\templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2381855bf769a664f51-57956967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '337c78f02a0157935e6a02dba2c43b2a8353a3be' => 
    array (
      0 => '..\\templates\\message.tpl',
      1 => 1425307884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2381855bf769a664f51-57956967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55bf769a79bb73_62680418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf769a79bb73_62680418')) {function content_55bf769a79bb73_62680418($_smarty_tpl) {?><html>
    <head>
	    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	</head>
	<body>
	    <h2><a href="#"> new message</a>  <a href="logout_controller.php"> logout </a></h2> 
		<h2>message list: </h2>
	    <table border="1">
		    <tr><td>Sender</td><td>Send Time</td><td>Getter</td><td>Content</td></tr>
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
				</tr>
			<?php } ?>			
		</table>
		<a href="message_conroller.php?pageNow" >Top</a>  <a href = "message_conroller.php">next</a>
	
	</body>
 


</html><?php }} ?>
