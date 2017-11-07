<?php /*%%SmartyHeaderCode:9720029345a00e73f211318-89996013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202261737f7471ff70a95274dd663f2dc7c8ef47' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1510005160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9720029345a00e73f211318-89996013',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00f844aa0904_74874384',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00f844aa0904_74874384')) {function content_5a00f844aa0904_74874384($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Zakładki</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://192.168.99.100/12-audiobooki" title="audiobooki">audiobooki</a></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://192.168.99.100/szukaj" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
