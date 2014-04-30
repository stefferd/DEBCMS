<?php /* Smarty version Smarty-3.1.8, created on 2014-02-17 01:21:57
         compiled from "../modules/profile//controller/backend/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4155236985301543ada0ea8-09144244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bcdd551a91d69c3483ab978ab98c0c85cb90fa8' => 
    array (
      0 => '../modules/profile//controller/backend/templates/overview.tpl',
      1 => 1392596513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4155236985301543ada0ea8-09144244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5301543adee936_92122577',
  'variables' => 
  array (
    'administrators' => 0,
    'administrator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301543adee936_92122577')) {function content_5301543adee936_92122577($_smarty_tpl) {?><div class="container">
    <h1>Beheerders</h1>
    <div class="row-fluid">
        <div class="col-2">Naam</div>
        <div class="col-2">Emailadres</div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['administrator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['administrator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['administrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['administrator']->key => $_smarty_tpl->tpl_vars['administrator']->value){
$_smarty_tpl->tpl_vars['administrator']->_loop = true;
?>
        <div class="row-fluid">
            <div class="col-2"><?php echo $_smarty_tpl->tpl_vars['administrator']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['administrator']->value->lastname;?>
</div>
            <div class="col-2"><?php echo $_smarty_tpl->tpl_vars['administrator']->value->emailaddress;?>
</div>
        </div>
    <?php } ?>
</div><?php }} ?>