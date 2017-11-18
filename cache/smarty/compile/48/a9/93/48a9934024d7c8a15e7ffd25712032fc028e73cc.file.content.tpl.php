<?php /* Smarty version Smarty-3.1.19, created on 2017-11-18 20:05:10
         compiled from "/var/www/html/admin123qwe/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11232729025a01e63a5ad7c2-22206981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a9934024d7c8a15e7ffd25712032fc028e73cc' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/content.tpl',
      1 => 1510692717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11232729025a01e63a5ad7c2-22206981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a01e63a5d1bf1_71358155',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a01e63a5d1bf1_71358155')) {function content_5a01e63a5d1bf1_71358155($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
