<?php
    header("content-type:text/html;charset=utf-8");
    require_once('../../model/message/message_model.php');
	require_once('../../model/db/db_class.php');
    session_start();
	
	if (!isset($_SESSION['u_name']))
    {
	    //echo $_SESSION['u_name']; 
        header('Location:../login/login.php');
		exit;
    }
    $u_name = $_SESSION['u_name'];
	$p_type = $_REQUEST['p_type'];
	//echo $p_type;
	
	if ($p_type == 'create')
	{   
	    $m_getter = $_POST['getter'];
	    $m_content = $_POST['content'];	
	    $mes = new message_model();
	    $flag = $mes->createMessage($u_name, $m_getter, $m_content,"now()");
	
	    if ($flag==1)
		    header("Location:succeed.php?p_type=发送&page_id=".$_POST['page_id']."&url=".$_POST['url']);
		else 
		    header("Location:failed.php?p_type=发送&page_id=".$_POST['page_id']."url=".$_POST['url']);
		exit;			
	}
    if ($p_type == 'delete')
	{   
        $m_id = $_GET['id'];	
	    $mes = new message_model();
	    $flag = $mes->deleteMessage($m_id);
	
	    if ($flag==1)
		    header("Location:succeed.php?p_type=删除&page_id=".$_GET['page_id']."&url=".$_GET['url']);
		else 
		    header("Location:succeed.php?p_type=删除&page_id=".$_GET['page_id']."&url=".$_GET['url']);
		exit;
		
	}		
	
?>