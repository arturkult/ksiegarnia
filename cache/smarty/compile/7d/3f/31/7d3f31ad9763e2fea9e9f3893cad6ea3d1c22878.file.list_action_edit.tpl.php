<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 20:58:06
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20450961635a00becee56347-37400618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3f31ad9763e2fea9e9f3893cad6ea3d1c22878' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1509993002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20450961635a00becee56347-37400618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00becee61f84_01391653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00becee61f84_01391653')) {function content_5a00becee61f84_01391653($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
