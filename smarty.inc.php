<?php
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);               //定义基本路径
	define('SMARTY_PATH', '/smarty/');                  //定义smarty的路径     
	require (BASE_PATH.SMARTY_PATH.'libs/Smarty.class.php');        //包含smarty类
	
	$smarty = new Smarty();
	$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
	$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
	$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
	$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';
	$smarty->left_delimiter = '<{';
	$smarty->right_delimiter = '}>';

?>