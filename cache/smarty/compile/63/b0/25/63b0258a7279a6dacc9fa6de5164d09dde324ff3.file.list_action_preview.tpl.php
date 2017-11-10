<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 18:22:19
         compiled from "/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2665676745a01ebcb1b5674-46371353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b0258a7279a6dacc9fa6de5164d09dde324ff3' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1510054696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2665676745a01ebcb1b5674-46371353',
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
  'unifunc' => 'content_5a01ebcb1bd111_22407946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a01ebcb1bd111_22407946')) {function content_5a01ebcb1bd111_22407946($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
