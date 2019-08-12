<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 21:11:21
         compiled from "C:\AppServ\www\tienda\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:701758fc0d49509321-84333741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1beeb7d9ce12a8b324728f346bdffc5b756694b' => 
    array (
      0 => 'C:\\AppServ\\www\\tienda\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1492888079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701758fc0d49509321-84333741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fc0d495121a5_36801178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc0d495121a5_36801178')) {function content_58fc0d495121a5_36801178($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
