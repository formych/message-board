<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-07 16:28:07
         compiled from "E:\Wamp\www\my\study\project\msg_board\smarty\templates\createMessage.html" */ ?>
<?php /*%%SmartyHeaderCode:2239955c46318d6ada4-72164699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab8e5daf5fd19620a14c597bf1d514056c0daf33' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\smarty\\templates\\createMessage.html',
      1 => 1438936078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2239955c46318d6ada4-72164699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c46318da8a99_31869711',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c46318da8a99_31869711')) {function content_55c46318da8a99_31869711($_smarty_tpl) {?><html>
    <head>
	    <meta http-equiv="content-type" content=text/html;charset=utf-8 />
	</head>
	<body>
	    <form action="../message_process.php" method="post">
		    New Message:<br/>
	        接收人:<input type="text" name="getter" /> <br/>
            内&nbsp;&nbsp;&nbsp;容:<textarea  name="content" > </textarea><br/>
        	<input type="submit" value="发送" /> 
			<input type="reset" value="重填" /> 
			<input type="hidden" name="p_type" value="create" /> <br/><br/>	
			
        </form>
    </body>		<?php }} ?>
