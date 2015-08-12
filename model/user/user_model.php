<?php
    class user_model
    {	
        function checkUname($uname, $pwd)
	    {
	        //require_once('../db/db_class.php');
	        $sql = "select u_pwd from user where u_name='$uname'";
		    $db = new db_class();
		    $arr = $db->sql_query($sql);
		    $db->close();
		    $flag = false;
		
		    if ($arr[0][0]==md5($pwd))
		    {
     			$flag = true;
				//echo "success";
			}
		
		   return $flag;	
	    }
		function addUser($uname, $pwd)
		{
			$sql = "insert into user (u_name, u_pwd) values ('$uname',  md5($pwd))";
			//echo $sql;
			//require_once('../db/db_class.php');
			$db = new db_class();
			$flag = $db->sql_manage($sql);
			
			if ($flag == 1)
			{
			    //echo "chenggong";
				return true;
			}
			else
			{
				//echo "shibai";
			    return false;
			}				
		}
    }
	//$test = new user_model;
	//$test->addUser("pgvbpffd","1213456");
?>