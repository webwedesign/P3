<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 07:57:15
         compiled from "/var/www/project/src/public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1443879395542e56db232481-44348029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e52ae2442bca6cafd556f7225c95e12a51711f' => 
    array (
      0 => '/var/www/project/src/public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl',
      1 => 1406817656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1443879395542e56db232481-44348029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e56db285384_06405080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e56db285384_06405080')) {function content_542e56db285384_06405080($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>
