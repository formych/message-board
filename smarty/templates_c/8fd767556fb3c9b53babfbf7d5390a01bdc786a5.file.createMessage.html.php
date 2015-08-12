<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-11 17:54:19
         compiled from "E:\Wamp\www\project\msg_board\smarty\templates\createMessage.html" */ ?>
<?php /*%%SmartyHeaderCode:2912955c974debe68a6-90389642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd767556fb3c9b53babfbf7d5390a01bdc786a5' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\msg_board\\smarty\\templates\\createMessage.html',
      1 => 1439286764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2912955c974debe68a6-90389642',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c974dec2f256_20257178',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c974dec2f256_20257178')) {function content_55c974dec2f256_20257178($_smarty_tpl) {?><html>
    <head>
	    <meta htttp-equiv="Conten-Type" content="text/html"; charset="utf-8" />
		<title>留言-发送</title>		
		<link id="css" rel="stylesheet" type="text/css" href="../../css/all.css" />		
		<?php echo '<script'; ?>
 type="text/javascript" src="../../js/*.js">   <?php echo '</script'; ?>
>
	</head>
	<body>
	    <?php echo $_smarty_tpl->getSubTemplate ("./common/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<center>
	    <form action="./messageDo.php" method="post">
		    
		    <h2>新留言:</h2>
			<table border="1">
				<tr><td>接收人:</td><td><input type="text" name="getter" value="<?php echo $_GET['name'];?>
"/> </td>
                <tr><td>内&nbsp;&nbsp;&nbsp;容:</td><td><textarea  name="content" > </textarea></td>
			</table>
            <div >
				<input type="submit" value="发送" /> 
				<input type="reset" value="重填" /> 
				<input type="hidden" name="p_type" value="create" />
				<input type="hidden" name="page_id" value="<?php echo $_GET['page_id'];?>
" /> 
				<input type="hidden" name="url" value="<?php echo $_GET['url'];?>
" /> 
			</div>
			
			</table>
			
        </form>
		</center>
		<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>		<?php }} ?>
