<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 14:18:47
         compiled from "../modules/snippets//controller/backend/templates\overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1255253060e6bd5e8c4-60716120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41904abb560721eabf58f6283662f5ad9b2d4ca9' => 
    array (
      0 => '../modules/snippets//controller/backend/templates\\overview.tpl',
      1 => 1392905914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255253060e6bd5e8c4-60716120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53060e6bdfe044_06042097',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'messageType' => 0,
    'snippets' => 0,
    'snippet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53060e6bdfe044_06042097')) {function content_53060e6bdfe044_06042097($_smarty_tpl) {?><div class="container-fluid list">
    <h1 class="sub-header">Snippets</h1>
    <ul class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/" title="Snippets">Snippets</a></li>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['message']->value!=null){?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['messageType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titel</th>
                    <th>Technische titel</th>
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['snippet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snippet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->key => $_smarty_tpl->tpl_vars['snippet']->value){
$_smarty_tpl->tpl_vars['snippet']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['snippet']->value->title;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['snippet']->value->technical;?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/edit/<?php echo $_smarty_tpl->tpl_vars['snippet']->value->id;?>
/" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/delete/<?php echo $_smarty_tpl->tpl_vars['snippet']->value->id;?>
/" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div><?php }} ?>