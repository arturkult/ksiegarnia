<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 16:18:18
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20291648465a26b8ba39c9a7-02558391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3f31ad9763e2fea9e9f3893cad6ea3d1c22878' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1510692717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20291648465a26b8ba39c9a7-02558391',
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
  'unifunc' => 'content_5a26b8ba3aeeb5_94351724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26b8ba3aeeb5_94351724')) {function content_5a26b8ba3aeeb5_94351724($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
