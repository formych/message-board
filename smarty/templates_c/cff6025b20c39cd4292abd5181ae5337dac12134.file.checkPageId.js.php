<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 11:13:24
         compiled from "E:\Wamp\www\project\msg_board\js\checkPageId.js" */ ?>
<?php /*%%SmartyHeaderCode:754755c816d48cd120-15292939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff6025b20c39cd4292abd5181ae5337dac12134' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\msg_board\\js\\checkPageId.js',
      1 => 1438835170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '754755c816d48cd120-15292939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageCount' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c816d48f9e13_54693411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c816d48f9e13_54693411')) {function content_55c816d48f9e13_54693411($_smarty_tpl) {?><?php echo '<script'; ?>
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
