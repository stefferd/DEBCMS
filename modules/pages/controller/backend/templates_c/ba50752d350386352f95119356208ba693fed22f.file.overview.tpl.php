<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 14:40:04
         compiled from "../modules/pages//controller/backend/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1883641721530b4bb401d4e8-74423759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba50752d350386352f95119356208ba693fed22f' => 
    array (
      0 => '../modules/pages//controller/backend/templates/overview.tpl',
      1 => 1392897327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1883641721530b4bb401d4e8-74423759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'messageType' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b4bb4090307_15133751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b4bb4090307_15133751')) {function content_530b4bb4090307_15133751($_smarty_tpl) {?><div class="container-fluid list">
    <h1 class="sub-header">Pagina's</h1>
    <ul class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/" title="Pagina's">Pagina's</a></li>
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
                    <th>Status</th>
                    <th><span class="glyphicon glyphicon-edit"></span></th>
                    <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->technical;?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value->state==1&&$_smarty_tpl->tpl_vars['page']->value->active==0){?>
                            Prototype
                        <?php }elseif($_smarty_tpl->tpl_vars['page']->value->state==1&&$_smarty_tpl->tpl_vars['page']->value->active==1){?>
                            Gepubliceerd
                        <?php }?>
                    </td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/edit/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->state;?>
/" title="Bewerken"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/delete/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->state;?>
/" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</a>
    </div>
</div><?php }} ?>