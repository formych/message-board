<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-03 22:10:44
         compiled from "..\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242155bf7664e48391-77422556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb984e9f5ec96b6bf060ce73d53631d94176d5a' => 
    array (
      0 => '..\\templates\\login.tpl',
      1 => 1425005270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242155bf7664e48391-77422556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55bf7664ee2d83_14368729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf7664ee2d83_14368729')) {function content_55bf7664ee2d83_14368729($_smarty_tpl) {?><html>
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
