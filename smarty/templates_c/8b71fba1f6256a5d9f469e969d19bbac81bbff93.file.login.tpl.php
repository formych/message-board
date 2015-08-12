<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-04 20:34:54
         compiled from "E:\Wamp\www\my\study\project\msg_board\smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426055c0b16e9cb0a1-05918677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b71fba1f6256a5d9f469e969d19bbac81bbff93' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\smarty\\templates\\login.tpl',
      1 => 1425005270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426055c0b16e9cb0a1-05918677',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c0b16ebe52d1_80675362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c0b16ebe52d1_80675362')) {function content_55c0b16ebe52d1_80675362($_smarty_tpl) {?><html>
    <head>
	    <meta htttp-equiv="Conten-Type" content="text/html" charset="utf-8" />
	</head>
	<body>
	    <table>
            <form action="../controller/login_controller.php" method="post">
                <tr><td colspan="2"><h1>Login</h1></td><tr>
                <tr><td>UserName:</td><td><input type="text" name="u_name"></td>	</tr>			
                <tr><td>PassWord:</td><td><input type="password" name="u_pwd"></td></tr>
                <tr><td><input type="submit" value="Login" /></td>					
	                <td><input type="reset" value="Reset" /></td><tr>
			</form>
        </table>					
	</body>
</html><?php }} ?>
