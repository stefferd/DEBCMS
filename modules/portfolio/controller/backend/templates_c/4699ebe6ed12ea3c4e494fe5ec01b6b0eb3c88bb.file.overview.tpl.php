<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 15:48:03
         compiled from "../modules/portfolio//controller/backend/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1708123530b5ba34de618-75293602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4699ebe6ed12ea3c4e494fe5ec01b6b0eb3c88bb' => 
    array (
      0 => '../modules/portfolio//controller/backend/templates/overview.tpl',
      1 => 1393252014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708123530b5ba34de618-75293602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'messageType' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b5ba352dda1_74154144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b5ba352dda1_74154144')) {function content_530b5ba352dda1_74154144($_smarty_tpl) {?><div class="container-fluid list">
    <h1 class="sub-header">Portfolio</h1>
    <ul class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/" title="Portfolio">Portfolio</a></li>
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
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div><?php }} ?>