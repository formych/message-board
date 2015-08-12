<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 18:01:08
         compiled from "E:\Wamp\www\project\msg_board\smarty\templates\message.html" */ ?>
<?php /*%%SmartyHeaderCode:1255455c816d4811a39-49296185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef7f3c81a18c9536ac92c91b4dd597a3a92d366' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\msg_board\\smarty\\templates\\message.html',
      1 => 1439200864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255455c816d4811a39-49296185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c816d48bf937_93671945',
  'variables' => 
  array (
    'msg' => 0,
    'temp' => 0,
    'page_id' => 0,
    'navi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c816d48bf937_93671945')) {function content_55c816d48bf937_93671945($_smarty_tpl) {?><html>
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
		<a href="../logout.php"> logout </a></h2> 
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
					<td><a href="./messageDo.php?p_type=delete&id=<?php echo $_smarty_tpl->tpl_vars['temp']->value[4];?>
&page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
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
