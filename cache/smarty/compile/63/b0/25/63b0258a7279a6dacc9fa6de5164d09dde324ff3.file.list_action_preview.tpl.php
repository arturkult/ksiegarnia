<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 16:18:18
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3648790485a26b8ba3c3ca3-00965231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b0258a7279a6dacc9fa6de5164d09dde324ff3' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1510692717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3648790485a26b8ba3c3ca3-00965231',
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
  'unifunc' => 'content_5a26b8ba3d10c0_05649702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26b8ba3d10c0_05649702')) {function content_5a26b8ba3d10c0_05649702($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
