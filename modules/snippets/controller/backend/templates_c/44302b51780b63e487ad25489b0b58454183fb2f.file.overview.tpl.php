<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 14:39:43
         compiled from "../modules/snippets//controller/backend/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592760883530b4b9f7d0a78-71538938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44302b51780b63e487ad25489b0b58454183fb2f' => 
    array (
      0 => '../modules/snippets//controller/backend/templates/overview.tpl',
      1 => 1392905914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592760883530b4b9f7d0a78-71538938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'messageType' => 0,
    'snippets' => 0,
    'snippet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b4b9f8187f9_05716738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b4b9f8187f9_05716738')) {function content_530b4b9f8187f9_05716738($_smarty_tpl) {?><div class="container-fluid list">
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