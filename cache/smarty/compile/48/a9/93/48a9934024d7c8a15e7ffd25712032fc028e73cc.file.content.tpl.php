<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 23:13:44
         compiled from "/var/www/html/admin123qwe/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3714922715a00de98268333-97732090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a9934024d7c8a15e7ffd25712032fc028e73cc' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/content.tpl',
      1 => 1509993001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3714922715a00de98268333-97732090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00de9826f227_47478380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00de9826f227_47478380')) {function content_5a00de9826f227_47478380($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
