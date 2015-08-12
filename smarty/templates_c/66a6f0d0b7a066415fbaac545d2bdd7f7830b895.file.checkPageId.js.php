<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-11 19:02:48
         compiled from "E:\Wamp\www\project\message-board\js\checkPageId.js" */ ?>
<?php /*%%SmartyHeaderCode:055c9d658d0a365-69130695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a6f0d0b7a066415fbaac545d2bdd7f7830b895' => 
    array (
      0 => 'E:\\Wamp\\www\\project\\message-board\\js\\checkPageId.js',
      1 => 1438835170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '055c9d658d0a365-69130695',
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
  'unifunc' => 'content_55c9d658d5b175_96601869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c9d658d5b175_96601869')) {function content_55c9d658d5b175_96601869($_smarty_tpl) {?><?php echo '<script'; ?>
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
