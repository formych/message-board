<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-27 10:48:00
         compiled from "..\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:728454efd06a70c5d2-89751201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7456aca3776fa5c9003ad25a65e5a0882c456697' => 
    array (
      0 => '..\\templates\\login.tpl',
      1 => 1425005270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '728454efd06a70c5d2-89751201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54efd06a75a6c6_00306642',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54efd06a75a6c6_00306642')) {function content_54efd06a75a6c6_00306642($_smarty_tpl) {?><html>
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
