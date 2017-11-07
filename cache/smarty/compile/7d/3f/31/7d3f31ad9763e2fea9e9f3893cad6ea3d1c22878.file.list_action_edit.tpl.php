<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 09:13:43
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12034811085a016b37381009-72556406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3f31ad9763e2fea9e9f3893cad6ea3d1c22878' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1510018000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12034811085a016b37381009-72556406',
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
  'unifunc' => 'content_5a016b373a2cb9_92012936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a016b373a2cb9_92012936')) {function content_5a016b373a2cb9_92012936($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
