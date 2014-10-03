<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 07:57:19
         compiled from "/var/www/project/src/public/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179871627542e56dfdaadf6-68666556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e029f8ba2838fe66d7e21e0921a1cdf9af16df' => 
    array (
      0 => '/var/www/project/src/public/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1406817656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179871627542e56dfdaadf6-68666556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e56dfdc3446_46747800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e56dfdc3446_46747800')) {function content_542e56dfdc3446_46747800($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
