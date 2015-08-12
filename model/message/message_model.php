<?php
    class message_model
    {	
        function getMessage($u_name)
	    {
	        //require_once('../db/db_class.php');
	        $sql = "select m_sender, m_getter, m_content, m_time, m_id from message where m_getter='$u_name'  limit 0,5";
		    $db = new db_class();
		    $arr = $db->sql_query($sql);
		    $db->close();
		    	
		    return $arr;	
	    }
		function getRcvdMessageByPage($u_name,$pageCut)
		{
            //require_once('../db/PageCut_class.php');
			
	        $sql1 = "select count(*) from message where m_getter='$u_name' ";
	        $sql2 = "select m_sender, m_getter, m_content, m_time, m_id from message where m_getter='$u_name' order by m_time desc limit ".
			($pageCut->getPage_now()-1)*$pageCut->getPage_size().",".$pageCut->getPage_size() ;
			//echo "$sql2";
		    $pageCut->getPageInfo($sql1, $sql2, $pageCut);      			
		
		}
		function getSentMessageByPage($u_name,$pageCut)
		{
			$sql1 = "select count(*) from message where m_sender='$u_name' ";
	        $sql2 = "select m_sender, m_getter, m_content, m_time, m_id from message where m_sender='$u_name' order by m_time desc limit ".
			($pageCut->getPage_now()-1)*$pageCut->getPage_size().",".$pageCut->getPage_size() ;
			//echo "$sql2";
		    $pageCut->getPageInfo($sql1, $sql2, $pageCut);	
		
		}
		function createMessage($u_name, $m_getter, $m_content, $m_time )
		{
		    
		    $sql = "insert into message (m_sender, m_getter, m_content, m_time) values('$u_name','$m_getter', '$m_content',$m_time)";
			//echo $sql;
			$db = new db_class();
		    $flag = $db->sql_manage($sql);
		    $db->close();
            return $flag;			
		}
		function deleteMessage($m_id)
		{
		    $sql = "delete from message where m_id = $m_id";
			$db = new db_class();
		    $flag = $db->sql_manage($sql);
		    $db->close();
            return $flag;
		}
			
    }
	//$test = new message_model;
	//$arr = $test->getMessage("Linus");
	//echo "<pre>";
	//print_r($arr);
	//echo "</pre>";
?>