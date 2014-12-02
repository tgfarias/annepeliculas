<?php /*%%SmartyHeaderCode:154195313954670190cc2866-63158315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0968bfb5d2b5b1e7cd2bed513161a84c4b549596' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818/modules/blocksearch/blocksearch-top.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
    '00c3b6bd35a62b06bd6b52db930ba8cf444df56e' => 
    array (
      0 => '/home/annepeliculas/www/site/themes/theme818//modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1415217359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154195313954670190cc2866-63158315',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a3c0757a381_69501028',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3c0757a381_69501028')) {function content_546a3c0757a381_69501028($_smarty_tpl) {?><section id="search_block_top" class="header-box"><form method="get" action="http://www.annepeliculas.com.br/site/search" id="searchbox"><p> <label for="search_query_top">Busca</label> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query" type="text" id="search_query_top" name="search_query" value="" /> <a href="javascript:document.getElementById('searchbox').submit();"><i class="icon-search"></i><span>Busca</span></a></p></form> </section><script type="text/javascript">/* <![CDATA[ */;$('document').ready(function(){$("#search_query_top").autocomplete('http://www.annepeliculas.com.br/site/search',{minChars:3,max:10,width:300,selectFirst:false,scroll:false,dataType:"json",formatItem:function(data,i,max,value,term){return value;},parse:function(data){var mytab=new Array();for(var i=0;i<data.length;i++)
mytab[mytab.length]={data:data[i],value:data[i].cname+' > '+data[i].pname};return mytab;},extraParams:{ajaxSearch:1,id_lang:1}}).result(function(event,data,formatted){$('#search_query_top').val(data.pname);document.location.href=data.product_link;})});/* ]]> */</script><?php }} ?>
