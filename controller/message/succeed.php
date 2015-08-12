<?php
    session_start();
	if (!isset($_SESSION['u_name']))
	{
	    header('Location:../login/login.php');
	    exit;
	}
	require_once("../../smarty.inc.php");
	//echo $_REQUEST['page_id'];
	$url = "./".$_GET['url']."?page_id=".$_GET['page_id'];
	//echo $url;
	
	$smarty->assign("url","$url");
	$smarty->display('succeed.html');
    	
?>	