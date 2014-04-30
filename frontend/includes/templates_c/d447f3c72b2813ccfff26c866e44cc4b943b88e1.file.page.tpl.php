<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 13:41:24
         compiled from "frontend/includes/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1991819575530b3df470abb8-65533550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd447f3c72b2813ccfff26c866e44cc4b943b88e1' => 
    array (
      0 => 'frontend/includes/templates/page.tpl',
      1 => 1392911582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1991819575530b3df470abb8-65533550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b3df4798882_04610820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b3df4798882_04610820')) {function content_530b3df4798882_04610820($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>
<?php }} ?>