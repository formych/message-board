<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-04 20:43:45
         compiled from "E:\Wamp\www\my\study\project\msg_board\smarty\templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1416255c0b3818c94c1-56038740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4081d6b26cd4f04a88e36fdb7db16948e53e0fd' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\smarty\\templates\\message.tpl',
      1 => 1425307884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1416255c0b3818c94c1-56038740',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c0b381937390_89773076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0b381937390_89773076')) {function content_55c0b381937390_89773076($_smarty_tpl) {?><html>
    <head>
	    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	</head>
	<body>
	    <h2><a href="#"> new message</a>  <a href="logout_controller.php"> logout </a></h2> 
		<h2>message list: </h2>
	    <table border="1">
		    <tr><td>Sender</td><td>Send Time</td><td>Getter</td><td>Content</td></tr>
			{foreach from=$msg  item=temp key=k}
			    <tr><td>{$temp[0]}</td>
				    <td>{$temp[3]}</td>
					<td>{$temp[1]}</td>
					<td>{$temp[2]}</td>
				</tr>
			{/foreach}			
		</table>
		<a href="message_conroller.php?pageNow" >Top</a>  <a href = "message_conroller.php">next</a>
	
	</body>
 


</html><?php }} ?>
