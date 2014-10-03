<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 07:57:01
         compiled from "/var/www/project/src/public/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:394535025542e56cdcb5f25-57047470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678b73b7cad096072af4439e987eeaf2b52ca6db' => 
    array (
      0 => '/var/www/project/src/public/admin/themes/default/template/content.tpl',
      1 => 1406817656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '394535025542e56cdcb5f25-57047470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e56cdd32f66_51564391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e56cdd32f66_51564391')) {function content_542e56cdd32f66_51564391($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
