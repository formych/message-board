<?php
    require_once('../../model/user/user_model.php');
	require_once('../../model/message/message_model.php');
	require_once('../../model/db/db_class.php');
	session_start();
	
    $u_name = $_POST['username'];
    $u_pwd = $_POST['pwd'];
	$checkCode = $_POST['vdcode'];
	
	if (isset($_SESSION['u_name']))
	{
	    header('Location:../message/rcvdMessageList.php');
		exit;
	}
	
	//判断验证码是否正确
	if (strtolower($checkCode)!=$_SESSION['checkCode'])
	{
	    header("Location:./login.php?errno=2");
		exit();		
	}
	
	//判断是否使用cookie
	if (isset($_POST['keeptime']))
	{
	    //echo $_POST['keeptime'];
	    setcookie("u_name", $u_name, time() + $_POST['keeptime']);
		setcookie("u_pwd", $u_pwd, time() + $_POST['keeptime']);	
	}
	else
	{
        setcookie("u_name","",time()-$_POST['keeptime']);
		setcookie("u_pwd","",time()-$_POST['keeptime']);
	}
	
	
    //echo $u_name;
    //echo $u_pwd;
	$flag = false;
	
	$user = new user_model();
    $flag = $user->checkUname($u_name, $u_pwd);	
	
	
	if ($flag)
	{
		$_SESSION[u_name] = "$u_name"; 
	    header('Location:../message/rcvdMessageList.php');
	}
	else
	    header("Location:./login.php?errno=1");
	exit;
?>