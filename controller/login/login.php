<?php
    require_once("../../smarty.inc.php");
    session_start();
	//echo $_COOKIE['u_name'];
    if (isset($_SESSION['u_name']))
    {
	    //echo $_SESSION['u_name']; 
        header('Location:../message/rcvdMessageList.php');
		exit;
    }
	
    /*if (!empty($_COOKIE['u_name']))
	{
	    $_SESSION['u_name'] = $_COOKIE['u_name'];
		header('Location:../message/messageList.php');
		exit;
	}*/
	$smarty->display("login.html");
?>