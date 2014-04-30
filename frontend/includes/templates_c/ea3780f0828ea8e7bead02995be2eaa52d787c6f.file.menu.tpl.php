<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 13:41:24
         compiled from "frontend/includes/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:336029015530b3df47d9617-46592304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3780f0828ea8e7bead02995be2eaa52d787c6f' => 
    array (
      0 => 'frontend/includes/templates/menu.tpl',
      1 => 1392911239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336029015530b3df47d9617-46592304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuitems' => 0,
    'url' => 0,
    'menuitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b3df4846fb0_67125071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b3df4846fb0_67125071')) {function content_530b3df4846fb0_67125071($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
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