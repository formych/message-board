<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-06 12:26:12
         compiled from "E:\Wamp\www\my\study\project\msg_board\js\checkPageId.js" */ ?>
<?php /*%%SmartyHeaderCode:2352955c2dafe90ce74-46600204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b14889fd5d7b56187445a2208297ae95129ab144' => 
    array (
      0 => 'E:\\Wamp\\www\\my\\study\\project\\msg_board\\js\\checkPageId.js',
      1 => 1438835170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2352955c2dafe90ce74-46600204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c2dafe95bad9_47905353',
  'variables' => 
  array (
    'pageCount' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2dafe95bad9_47905353')) {function content_55c2dafe95bad9_47905353($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
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
		    if (pageId > <?php echo $_smarty_tpl->tpl_vars['pageCount']->value;?>
 )  
			{
			    alert("输入的值大于总页数！");
				document.getElementById('pageId').value = pageId.substring(0,pageId.length-1);		
			}
            else 
                window.location.href = "<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
?page_id="+parseInt(pageId);
				//window.location.href = "http://www.baidu.com";			
		}
		
				
	}
	else
	{
	    alert("输入值为空！");
	}
		    
}
<?php echo '</script'; ?>
><?php }} ?>
