<?php /* Smarty version Smarty-3.1.8, created on 2014-02-19 15:58:03
         compiled from "../modules/profile//controller/backend/templates\overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2369953037a72c51179-65100475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bffd4a775481c191c6ba61d322f14b38eda5f553' => 
    array (
      0 => '../modules/profile//controller/backend/templates\\overview.tpl',
      1 => 1392825431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2369953037a72c51179-65100475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53037a72cdecf1_08388790',
  'variables' => 
  array (
    'message' => 0,
    'messageType' => 0,
    'administrators' => 0,
    'administrator' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53037a72cdecf1_08388790')) {function content_53037a72cdecf1_08388790($_smarty_tpl) {?><div class="container-fluid list">
    <h1 class="sub-header">Beheerders</h1>
    <?php if ($_smarty_tpl->tpl_vars['message']->value!=null){?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['messageType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Emailadres</th>
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['administrator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['administrator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['administrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['administrator']->key => $_smarty_tpl->tpl_vars['administrator']->value){
$_smarty_tpl->tpl_vars['administrator']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['administrator']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['administrator']->value->lastname;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['administrator']->value->emailaddress;?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/administrators/edit/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->created;?>
/" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/administrators/delete/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->created;?>
/" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/administrators/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div><?php }} ?>