<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 19:16:23
         compiled from "/var/www/html/themes/default-bootstrap/modules/blockcontact/blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19068456985a00b507e985b1-97420029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6045607f7f85c31da4fbbf80d3ae00b354b28ddc' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockcontact/blockcontact.tpl',
      1 => 1509993002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19068456985a00b507e985b1-97420029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00b507ee59f7_68668750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00b507ee59f7_68668750')) {function content_5a00b507ee59f7_68668750($_smarty_tpl) {?>

<div id="contact_block" class="block">
	<h4 class="title_block">
		<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>

	</h4>
	<div class="block_content clearfix">
		<p>
			<?php echo smartyTranslate(array('s'=>'Our support hotline is available 24/7.','mod'=>'blockcontact'),$_smarty_tpl);?>

		</p>
		<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!='') {?>
			<p class="tel">
				<span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>

			</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?>
			<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>

			</a>
		<?php }?>
	</div>
</div><?php }} ?>
