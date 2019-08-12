<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 23:46:40
         compiled from "C:\AppServ\www\tienda\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1384658fc31b05eb1d8-21494991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecbabf6784a9ad331ba8128656e782189937a709' => 
    array (
      0 => 'C:\\AppServ\\www\\tienda\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1492888085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1384658fc31b05eb1d8-21494991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fc31b05f2275_60490076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc31b05f2275_60490076')) {function content_58fc31b05f2275_60490076($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
