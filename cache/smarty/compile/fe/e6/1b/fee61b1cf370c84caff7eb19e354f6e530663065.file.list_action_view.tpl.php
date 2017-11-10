<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 18:02:53
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6117183695a01e73dda0266-31891283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fee61b1cf370c84caff7eb19e354f6e530663065' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1510054696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6117183695a01e73dda0266-31891283',
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
  'unifunc' => 'content_5a01e73ddc16b7_56767163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a01e73ddc16b7_56767163')) {function content_5a01e73ddc16b7_56767163($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
