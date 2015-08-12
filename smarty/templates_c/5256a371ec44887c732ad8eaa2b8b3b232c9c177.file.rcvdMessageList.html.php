<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-11 17:58:37
         compiled from "E:\Wamp\www\project\msg_board\smarty\templates\rcvdMessageList.html" */ ?>
<?php /*%%SmartyHeaderCode:992355c9c1b4420e46-18304403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5256a371ec44887c732ad8eaa2b8b3b232c9c177' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\msg_board\\smarty\\templates\\rcvdMessageList.html',
      1 => 1439287105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992355c9c1b4420e46-18304403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c9c1b44babb4_81356017',
  'variables' => 
  array (
    'page_id' => 0,
    'msg' => 0,
    'temp' => 0,
    'navi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c9c1b44babb4_81356017')) {function content_55c9c1b44babb4_81356017($_smarty_tpl) {?><html>
    <head>
	    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>留言-收到</title>		
		<link id="css" rel="stylesheet" type="text/css" href="../../css/all.css" />		
		<?php echo '<script'; ?>
 type="text/javascript" src="../../js/*.js">   <?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->getSubTemplate ("../../js/checkPageId.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../js/checkPageId.js"><?php echo '</script'; ?>
>
	<body>
	    <?php echo $_smarty_tpl->getSubTemplate ("./common/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<center>
	    <h1>
		<a href="./createMessage.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&url=rcvdMessageList.php"> 写留言</a>
        <a href="./sentMessageList.php"> 已发送</a> 		
		<a href="../logout.php"> 退出 </a></h1> 
		<h2>留言-收到: </h2>
	    <table border="1">
		    <tr><td>发送者</td><td>内容</td><td>时间</td><td>回复</td><td>删除</td</tr>
			<?php  $_smarty_tpl->tpl_vars['temp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['temp']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['temp']->key => $_smarty_tpl->tpl_vars['temp']->value) {
$_smarty_tpl->tpl_vars['temp']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['temp']->key;
?>
			    <tr><td><?php echo $_smarty_tpl->tpl_vars['temp']->value[0];?>
</td>
				    <td width="200px" ><?php echo $_smarty_tpl->tpl_vars['temp']->value[2];?>
</td>	
					<td><?php echo $_smarty_tpl->tpl_vars['temp']->value[3];?>
</td>
					<td><a href="./createMessage.php?name=<?php echo $_smarty_tpl->tpl_vars['temp']->value[0];?>
&page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&url=rcvdMessageList.php">回复</a>
					</td>
					<td><a href="./messageDo.php?p_type=delete&id=<?php echo $_smarty_tpl->tpl_vars['temp']->value[4];?>
&page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&url=rcvdMessageList.php">删除</a>
					</td>
				</tr>
			<?php } ?>			
		</table>
		<?php echo $_smarty_tpl->tpl_vars['navi']->value;?>
<br/>
		跳转页数
		<input type="text" id="page_id" />
		<input type="button" value="跳转"  id = "jump" onclick="checkPageId()" />  
		</center>
		<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
	
	</body>
 


</html><?php }} ?>
