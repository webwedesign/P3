<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 07:57:29
         compiled from "/var/www/project/src/public/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548364690542e56e91b6536-17362483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33796ebb2c25daa04a1c58cf45699e91af3ce25f' => 
    array (
      0 => '/var/www/project/src/public/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1406817656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548364690542e56e91b6536-17362483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e56e91c1b33_05936709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e56e91c1b33_05936709')) {function content_542e56e91c1b33_05936709($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
