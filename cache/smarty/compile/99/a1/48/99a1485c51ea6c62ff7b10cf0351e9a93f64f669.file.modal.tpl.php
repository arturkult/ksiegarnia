<?php /* Smarty version Smarty-3.1.19, created on 2018-01-19 20:48:47
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6022482095a624b9fabd777-79988504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99a1485c51ea6c62ff7b10cf0351e9a93f64f669' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1516180687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6022482095a624b9fabd777-79988504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a624b9fac1b21_89225145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a624b9fac1b21_89225145')) {function content_5a624b9fac1b21_89225145($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
