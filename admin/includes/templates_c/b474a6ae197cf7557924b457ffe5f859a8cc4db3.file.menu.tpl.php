<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 14:12:59
         compiled from "includes/templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404653037a72dc54c8-36588516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b474a6ae197cf7557924b457ffe5f859a8cc4db3' => 
    array (
      0 => 'includes/templates\\menu.tpl',
      1 => 1392905575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404653037a72dc54c8-36588516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53037a72dc6ee2_61498482',
  'variables' => 
  array (
    'siteUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53037a72dc6ee2_61498482')) {function content_53037a72dc6ee2_61498482($_smarty_tpl) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/list/">Beheerders</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/pages/list/">Pagina's</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/snippets/list/">Snippets</a></li><?php }} ?>