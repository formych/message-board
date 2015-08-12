<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 09:42:01
         compiled from "..\templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154854efe3554c2424-27299040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88c958383251b75b3a397a28ba5d53337016b61' => 
    array (
      0 => '..\\templates\\message.tpl',
      1 => 1425307884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154854efe3554c2424-27299040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54efe35551e856_65301418',
  'variables' => 
  array (
    'msg' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54efe35551e856_65301418')) {function content_54efe35551e856_65301418($_smarty_tpl) {?><html>
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
