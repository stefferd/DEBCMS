<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 15:47:24
         compiled from "frontend/includes/templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1797853061d40ebd137-54541786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60de57efe7adbc12371c287e830ec29acfdc2a2' => 
    array (
      0 => 'frontend/includes/templates\\menu.tpl',
      1 => 1392911239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1797853061d40ebd137-54541786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53061d40ecbb21_44901130',
  'variables' => 
  array (
    'menuitems' => 0,
    'url' => 0,
    'menuitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061d40ecbb21_44901130')) {function content_53061d40ecbb21_44901130($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value){
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['menuitem']->value->technical;?>
/" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuitem']->value->title, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuitem']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?><?php }} ?>