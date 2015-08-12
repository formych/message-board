<?php
	require_once('../../model/user/user_model.php');
	require_once('../../model/db/db_class.php');
	$u_name = $_POST['uname'];
	$u_pwd = $_POST['pwd'];
	
	
	if (empty($u_name)||empty($u_pwd))
	{
	   header("Location:./register.php");
	   exit;	
	}
	
	$user = new user_model;
	$flag = $user->addUser($u_name,$u_pwd);
	if ($flag)
	{
		header("Location:../login/login.php?info=success");
		exit;
	}
?>
	