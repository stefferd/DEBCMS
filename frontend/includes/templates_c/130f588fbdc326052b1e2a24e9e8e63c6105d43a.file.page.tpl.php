<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 15:54:05
         compiled from "frontend/includes/templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518053061d40dddcb0-34546630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130f588fbdc326052b1e2a24e9e8e63c6105d43a' => 
    array (
      0 => 'frontend/includes/templates\\page.tpl',
      1 => 1392911582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2518053061d40dddcb0-34546630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53061d40e23cb3_95307832',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061d40e23cb3_95307832')) {function content_53061d40e23cb3_95307832($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>
<?php }} ?>