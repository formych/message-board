<?php
    session_start();
	if (isset($_SESSION['u_name']))
    {
	    //echo $_SESSION['u_name']; 
        header('Location:./message/rcvdMessageList.php');
		exit;
    }
	require_once("../../smarty.inc.php");
	$smarty->display("register.html");
?>