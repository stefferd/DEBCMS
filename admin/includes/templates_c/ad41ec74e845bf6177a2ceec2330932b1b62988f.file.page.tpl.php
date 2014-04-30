<?php /* Smarty version Smarty-3.1.8, created on 2014-02-18 16:08:25
         compiled from "includes/templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2580853037a72d4e2b1-13194335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad41ec74e845bf6177a2ceec2330932b1b62988f' => 
    array (
      0 => 'includes/templates\\page.tpl',
      1 => 1392739697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2580853037a72d4e2b1-13194335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53037a72d69da7_29489708',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53037a72d69da7_29489708')) {function content_53037a72d69da7_29489708($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

<div class="row-fluid full-height">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-column full-height">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>
<?php }} ?>