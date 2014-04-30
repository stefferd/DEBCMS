<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 15:41:35
         compiled from "includes/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1558968652530153f247a686-24135094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c262aad5dec1f5a728af3659c35f28ee750096' => 
    array (
      0 => 'includes/templates/menu.tpl',
      1 => 1393252882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558968652530153f247a686-24135094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530153f247bac6_52188879',
  'variables' => 
  array (
    'siteUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530153f247bac6_52188879')) {function content_530153f247bac6_52188879($_smarty_tpl) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/list/">Beheerders</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/pages/list/">Pagina's</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/snippets/list/">Snippets</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/portfolio/list/">Portfolio</a></li><?php }} ?>