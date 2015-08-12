<?php     
	class db_class
	{
	    var $host = "10.9.1.188";
		var $user = "gn03r9M3hUlg1AXQ";
		var $pwd = "edYf6a3CR58mXQJm";
		var $db = "cf_745400cf_973d_4651_b8b4_742b36be5444";
username: gn03r9M3hUlg1AXQ
        		
    
		function __construct()
		{
            $this->mysqli = new mysqli($this->host,$this->user,$this->pwd,$this->db);
	        if ($this->mysqli->connection_error)
	        {
	            echo "Connect to db failed";
	        }
			$this->mysqli->query("set names utf8");
	    }
		
		function sql_query($sql)
		{
		    $arr = array();
			$result = $this->mysqli->query($sql) or die($this->mysqli->error);
			while ($row = $result->fetch_row())
			    $arr[] = $row; 
				
			$result->free();
			return $arr;			
		}
		
		function sql_manage($sql)
		{
		    $result = $this->mysqli->query($sql) or die($this->mysqli->error);
			if(!$result)
			    return 0;
			else if($this->mysqli->affected_rows > 0)
			    return 1;
			else 
			    return -1;
		
		}	
		
		function close()
		{
		    if (!empty($this->mysqli))
			    $this->mysqli->close();
		}		
	}	
?>