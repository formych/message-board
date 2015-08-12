<?php
    //require('db_class.php');      由于前面已经包含了该文件
    class PageCut
	{
	    private $page_count;   //共有多少页
	    private $page_size;    //每页的大小
	    private $page_now;     //当前的页数
	    private $row_count;	   //总共有多少条记录
        private $arr;          //查询到的结果
        private	$navigate;     //导航条的设置
        private $gotoUrl;      //页面跳转的URL		
		
		function getPage_count()
		{
		    return $this->page_count;		
		}
		function setPage_count($page_count)
		{
		    $this->page_count = $page_count;
		}
		
		function getPage_size()
		{
		    return $this->page_size;		
		}
		function setPage_size($page_size)
		{
		    $this->page_size = $page_size;
		}
		
		function getPage_now()
		{
		    return $this->page_now;		
		}
		function setPage_now($page_now)
		{
		    $this->page_now = $page_now;
		}
		
		function getRow_count()
		{
		    return $this->row_count;		
		}
		function setRow_count($row_count)
		{
		    $this->row_count = $row_count;
		}

        function getArr()
		{
		    return $this->arr;		
		}
		function setArr($arr)
		{
		    $this->arr = $arr;
		}

        function getNavigate()
		{
		    return $this->navigate;		
		}
		function setNavigate($navigate)
		{
		    $this->navigate = $navigate;
		}
		
		function getGotoUrl()
		{
		    return $this->gotoUrl;		
		}
		function setGotoUrl($gotoUrl)
		{
		    $this->gotoUrl = $gotoUrl;
		}
		
		function getPageInfo($sql1, $sql2, $pagecut)
		{
            //require_once('../db/db_class.php');		
		    $db = new db_class() or die (mysql_error());
			$row_count = $db->sql_query($sql1) or die($this->mysqli->error);
			$result_arr = $db->sql_query($sql2) or die($this->mysqli->error);

            $pagecut->setRow_count($row_count[0][0]);
            $pagecut->setPage_count(ceil($pagecut->getRow_count() / $pagecut->getPage_size()));$pagecut->setArr($result_arr);
            //print_r($result_arr);			
            $db->close();			
		}
		
		function setPageInfo ($page_size, $page_id,$pagecut,$empSer)
		{
		    if(!empty($page_size))
			{
				$pagecut->setPage_size($_GET[page_size]);				
			}				
				
            $empSer->getPageInfo($pagecut);		
               					
			if (!empty($page_id))
 			{
				if ($page_id <= $pagecut->getPage_count())
				    $pagecut->setPage_now($page_id);
				else
					$pagecut->setPage_now($pagecut->getPage_count());
				$empSer->getPageInfo($pagecut);	
             				
			}
		
		}



        function navigateInfo($pagecut)
		{
		    //这里使用了2种方法来实现导航条
			//1.使用echo
			//2.使用添加字符串到$navigate属性上
			
		    /*此处使用echo方法实现导航条
			$page_whole = 10;
			$start = floor(($pagecut->getPage_now() - 1)/$page_whole) * $page_whole + 1;
            $end = $start + $page_whole;
			if ($end > $pagecut->getPage_count())
			    $end = $pagecut->getPage_count() + 1;			

            if ($start > $page_whole)
                echo "<a href = {$pagecut->getGotoUrl()}?page_id=".($pagecut->getPage_now()-$page_whole).
				     "&&page_size=".$pagecut->getPage_size()." ><<<</a>&nbsp;";			
		    
			for ($i = $start; $i < $end; $i++)
			    echo "<a href = {$pagecut->getGotoUrl()}?page_id=$i&page_size="
				     .$pagecut->getPage_size()." >[$i]</a>&nbsp;";
				
			if($end <= $pagecut->getPage_count())
			    echo "<a href = {$pagecut->getGotoUrl()}?page_id=".($pagecut->getPage_now()+$page_whole).
				     "&&page_size=".$pagecut->getPage_size()." >>>></a>&nbsp;";	
			
			*/
			//此处开始使用字符串的方式实现导航条
		    
            
			//这个主要用于在页面上手动选择页面的条数
			/*$pagecut->setNavigate($pagecut->getNavigate().
			    "<<<a href = {$pagecut->getGotoUrl()}?page_size=1 >1</a>&nbsp");
			$pagecut->setNavigate($pagecut->getNavigate().
			    "<a href = {$pagecut->getGotoUrl()}?page_size=5 >5</a>&nbsp");
			$pagecut->setNavigate($pagecut->getNavigate().
			    "<a href = {$pagecut->getGotoUrl()}?page_size=10 >10</a>&nbsp");
			$pagecut->setNavigate($pagecut->getNavigate().
			    "<a href = {$pagecut->getGotoUrl()}?page_size=20 >20</a>&nbsp");
			$pagecut->setNavigate($pagecut->getNavigate().
			    "<a href = {$pagecut->getGotoUrl()}?page_size=25 >25</a>>>&nbsp");
			*/
            //用于输出首页
			if ($pagecut->getPage_now() > 1)
			{	
				$pagecut->setNavigate($pagecut->getNavigate().
					"<a href = {$pagecut->getGotoUrl()}?page_id=1&page_size="
					.$pagecut->getPage_size()." >首页</a>&nbsp;");
			}
			//用于输出上一页
		    if ($pagecut->getPage_now() > 1)
			{		
			    $previous_page = $pagecut->getPage_now() - 1; 			
				$pagecut->setNavigate($pagecut->getNavigate().
				    "<a href = {$pagecut->getGotoUrl()}?page_id=$previous_page&page_size="
				    .$pagecut->getPage_size(). ">上一页</a>&nbsp;");
			}
			
			$page_whole = 10;   //显示的页码多少
			//页码起始位置和结束位置
			$start = floor(($pagecut->getPage_now() - 1)/$page_whole) * $page_whole + 1;
            $end = $start + $page_whole;
			if ($end > $pagecut->getPage_count())
			    $end = $pagecut->getPage_count() + 1;
				
            //用于输出<<<
			/*
            if ($start > $page_whole)
                echo "<a href = {$pagecut->getGotoUrl()}?page_id=".($pagecut->getPage_now()-$page_whole).
				     "&page_size=".$pagecut->getPage_size()." ><<<</a>&nbsp;";
            */					 
					 
		    //输出页码[1][2][3]...[8][9][10]
			for ($i = $start; $i < $end; $i++)
			    $pagecut->setNavigate($pagecut->getNavigate()."<a href = {$pagecut->getGotoUrl()}?page_id=$i&page_size=".$pagecut->getPage_size()." >[$i]</a>&nbsp;");
				
			/*用于输出>>>	
			if($end <= $pagecut->getPage_count())
			    echo "<a href = {$pagecut->getGotoUrl()}?page_id=".($pagecut->getPage_now()+$page_whole).
				     "&page_size=".$pagecut->getPage_size()." >>>></a>&nbsp;";	
			*/
			//用于输出下一页			
			if ($pagecut->getPage_now() < $pagecut->getPage_count())	
            {
			    $next_page = $pagecut->getPage_now() + 1;  
                $pagecut->setNavigate($pagecut->getNavigate().
				    "<a href = {$pagecut->getGotoUrl()}?page_id=$next_page&page_size="
				    .$pagecut->getPage_size()." >下一页</a>&nbsp;");			
            }
            //用于输出尾页	
            if ($pagecut->getPage_now() < $pagecut->getPage_count())
            {			
				$pagecut->setNavigate($pagecut->getNavigate().
					"<a href = {$pagecut->getGotoUrl()}?page_id=".$pagecut->getPage_count()
					."&page_size=".$pagecut->getPage_size()." > 尾页</a>&nbsp;");				
		    }
			//用于输出页次
			$pagecut->setNavigate($pagecut->getNavigate().
            	"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp页码信息:".$pagecut->getPage_now()."/".$pagecut->getPage_count()."&nbsp");
			
             
		}
        		
	
	}
	/*$test = new PageCut();
	$test->setRow_count('456');
	echo "123<br/>".$test->getRow_count();
	*/
	


?>