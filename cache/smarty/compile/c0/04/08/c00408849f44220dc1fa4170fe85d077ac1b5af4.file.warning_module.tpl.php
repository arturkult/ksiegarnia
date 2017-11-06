<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 21:15:18
         compiled from "/var/www/html/admin123qwe/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18255704355a00c2d69e9636-00992025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c00408849f44220dc1fa4170fe85d077ac1b5af4' => 
    array (
      0 => '/var/www/html/admin123qwe/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1509993001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18255704355a00c2d69e9636-00992025',
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
  'unifunc' => 'content_5a00c2d69eec14_86367897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00c2d69eec14_86367897')) {function content_5a00c2d69eec14_86367897($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
