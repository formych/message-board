<script type="text/javascript">
function checkPageId()
{
    var pageId = document.getElementById('page_id').value;	
	var reg = /^[1-9](\d)*$/;    //输入框的字符规则	
	if (pageId!="")
	{	    	
		if (!reg.test(pageId))
		{
		    alert("输入的值不符合！");
			document.getElementById('pageId').value = pageId.substring(0,pageId.length-1);
			return false;		
		}
		else
		{
		    //alert(pageId);
		    if (pageId > <{$pageCount}> )  
			{
			    alert("输入的值大于总页数！");
				document.getElementById('pageId').value = pageId.substring(0,pageId.length-1);		
			}
            else 
                window.location.href = "<{$URL}>?page_id="+parseInt(pageId);
				//window.location.href = "http://www.baidu.com";			
		}
		
				
	}
	else
	{
	    alert("输入值为空！");
	}
		    
}
</script>