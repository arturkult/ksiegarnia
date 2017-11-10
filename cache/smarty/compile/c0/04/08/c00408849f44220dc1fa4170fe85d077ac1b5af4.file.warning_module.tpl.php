<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 18:05:16
         compiled from "/var/www/html/admin123qwe/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17815640985a01e7cc97d529-57827088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '17815640985a01e7cc97d529-57827088',
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
  'unifunc' => 'content_5a01e7cc9841e7_51463936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a01e7cc9841e7_51463936')) {function content_5a01e7cc9841e7_51463936($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
