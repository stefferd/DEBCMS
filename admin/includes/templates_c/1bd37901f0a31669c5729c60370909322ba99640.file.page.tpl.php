<?php /* Smarty version Smarty-3.1.8, created on 2014-02-23 16:12:42
         compiled from "includes/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1047936721530153f2395b30-26304300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd37901f0a31669c5729c60370909322ba99640' => 
    array (
      0 => 'includes/templates/page.tpl',
      1 => 1392739697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1047936721530153f2395b30-26304300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530153f2458b47_07066116',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530153f2458b47_07066116')) {function content_530153f2458b47_07066116($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

<div class="row-fluid full-height">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-column full-height">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>
<?php }} ?>