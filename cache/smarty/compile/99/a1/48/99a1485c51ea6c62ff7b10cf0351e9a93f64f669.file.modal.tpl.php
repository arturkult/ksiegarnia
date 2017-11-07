<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 00:27:13
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54814065a00efd14c98a6-15427509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99a1485c51ea6c62ff7b10cf0351e9a93f64f669' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1510005159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54814065a00efd14c98a6-15427509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00efd14d3981_20892630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00efd14d3981_20892630')) {function content_5a00efd14d3981_20892630($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
