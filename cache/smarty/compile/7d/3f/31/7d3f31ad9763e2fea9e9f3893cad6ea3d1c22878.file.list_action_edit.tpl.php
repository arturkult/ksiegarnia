<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 00:36:25
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15593679945a00f1f97c0a21-32126548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3f31ad9763e2fea9e9f3893cad6ea3d1c22878' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1510005159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15593679945a00f1f97c0a21-32126548',
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
  'unifunc' => 'content_5a00f1f97dceb2_09240201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00f1f97dceb2_09240201')) {function content_5a00f1f97dceb2_09240201($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
