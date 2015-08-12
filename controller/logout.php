<?php
    session_start();
	if (!isset($_SESSION['u_name']))
    {
	    //echo $_SESSION['u_name']; 
        header('Location:../login/login.php');
		exit;
    }
	session_destroy();
	//setcookie("u_name","", time()-3600);
	//setcookie("u_pwd","", time()-3600);
	header("Location: ../index.php");
	exit;
?>