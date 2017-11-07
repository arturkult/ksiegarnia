<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 12:55:55
         compiled from "/var/www/html/admin123qwe/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18429050825a019f4b3ee027-29274299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c00408849f44220dc1fa4170fe85d077ac1b5af4' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1510054696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18429050825a019f4b3ee027-29274299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a019f4b3f3ab1_83506199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a019f4b3f3ab1_83506199')) {function content_5a019f4b3f3ab1_83506199($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
