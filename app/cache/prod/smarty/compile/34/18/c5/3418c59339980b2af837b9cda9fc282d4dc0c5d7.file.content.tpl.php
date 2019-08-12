<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 21:11:20
         compiled from "C:\AppServ\www\tienda\admin386yv2g3s\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2234658fc0d48c47e86-35981301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3418c59339980b2af837b9cda9fc282d4dc0c5d7' => 
    array (
      0 => 'C:\\AppServ\\www\\tienda\\admin386yv2g3s\\themes\\default\\template\\content.tpl',
      1 => 1492888064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2234658fc0d48c47e86-35981301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fc0d48c93155_65121598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc0d48c93155_65121598')) {function content_58fc0d48c93155_65121598($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
