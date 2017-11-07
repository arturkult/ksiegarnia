<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 09:36:09
         compiled from "/var/www/html/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18480256555a0170794235b7-08705823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9656dfb47cd6736a867d8a5ae8b9fe0269974d37' => 
    array (
      0 => '/var/www/html/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl',
      1 => 1510018000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18480256555a0170794235b7-08705823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a01707955da31_80352018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a01707955da31_80352018')) {function content_5a01707955da31_80352018($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<div id="social-share-compare">
		<p><?php echo smartyTranslate(array('s'=>"Share this comparison with your friends:",'mod'=>'socialsharing'),$_smarty_tpl);?>
</p>
		<p class="socialsharing_product">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
			<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>

			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
			<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>

			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
			<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>

			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
			<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>

			</button>
		<?php }?>
		</p>
	</div>
<?php }?><?php }} ?>
