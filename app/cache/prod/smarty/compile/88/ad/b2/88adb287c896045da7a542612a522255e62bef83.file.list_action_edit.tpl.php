<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 21:11:19
         compiled from "C:\AppServ\www\tienda\admin386yv2g3s\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2925158fc0d47d62be9-68112961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88adb287c896045da7a542612a522255e62bef83' => 
    array (
      0 => 'C:\\AppServ\\www\\tienda\\admin386yv2g3s\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1492888065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925158fc0d47d62be9-68112961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fc0d47dd1225_47820323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc0d47dd1225_47820323')) {function content_58fc0d47dd1225_47820323($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
