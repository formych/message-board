<?php     
	class db_class
	{
	    var $host = "10.9.1.188";
		var $user = "aCksprlkqpd2GCso";
		var $pwd = "qKWTzoX1lbYCngTF";
		var $db = "cf_d5889736_2783_43d8_bd37_333f28639fd7";
        		
    
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