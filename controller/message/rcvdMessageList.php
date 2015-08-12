<?php
    //header("content-type:text/html;charset=utf-8");
	require_once('../../model/db/PageCut_class.php');  
	require_once('../../model/message/message_model.php');	
	require_once('../../model/db/db_class.php');
	require_once('../../smarty.inc.php');
	
	session_start();
	
	if (!isset($_SESSION[u_name]))
	{
	    header('Location:../login/login.php');
		exit;
	}
	
	if (isset($_GET['page_id']))
	{
	    $pageNow = $_GET['page_id'];
	}
	else
	    $pageNow = 1; 
	
	$msg = new message_model();	
    $u_name = $_SESSION[u_name];	
	//$msgs = $msg->getMessage($u_name) ;  //未分页时调用的服务方法
	
	//分页采用的方法
	$pageCut = new PageCut();
	$pageCut->setPage_size(5);
	$pageCut->setPage_now($pageNow);
	$pageCut->setGotoURL("rcvdMessageList.php");	
	$msg->getRcvdMessageByPage($u_name,$pageCut);		
	$msgs = $pageCut->getArr();
	$pageCut->navigateInfo($pageCut);
	//var_dump($msgs);
	
	$smarty->assign("msg", $msgs);
	$smarty->assign("page_id", $pageNow);
	$smarty->assign("navi", $pageCut->getNavigate());
	$smarty->assign("pageCount",$pageCut->getPage_count());
	$smarty->assign("URL",$pageCut->getGotoURL());
	$smarty->display("rcvdMessageList.html");	
    //echo "跳转成功！";

?>