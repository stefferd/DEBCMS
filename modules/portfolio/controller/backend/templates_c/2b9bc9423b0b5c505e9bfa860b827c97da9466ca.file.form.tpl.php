<?php /* Smarty version Smarty-3.1.8, created on 2014-02-25 00:33:34
         compiled from "../modules/portfolio//controller/backend/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1198348843530b5ba61be1f9-72179034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b9bc9423b0b5c505e9bfa860b827c97da9466ca' => 
    array (
      0 => '../modules/portfolio//controller/backend/templates/form.tpl',
      1 => 1393284809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198348843530b5ba61be1f9-72179034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b5ba62900b4_76293701',
  'variables' => 
  array (
    'item' => 0,
    'url' => 0,
    'pictures' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b5ba62900b4_76293701')) {function content_530b5ba62900b4_76293701($_smarty_tpl) {?><div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            <?php if ($_smarty_tpl->tpl_vars['item']->value!=null){?>
                <h2 class="sub-header">Item wijzigen</h2>
            <?php }else{ ?>
                <h2 class="sub-header">Item toevoegen</h2>
            <?php }?>
            <ul class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/" title="Portfolio">Portfolio</a></li>
                <?php if ($_smarty_tpl->tpl_vars['item']->value!=null){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/" title="Bewerken">Bewerken</a></li>
                <?php }else{ ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/add/" title="Toevoegen">Toevoegen</a></li>
                <?php }?>
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value!=null){?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/update/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/" method="POST">
                    <?php }else{ ?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/save/" method="POST">
                    <?php }?>
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titel" <?php if ($_smarty_tpl->tpl_vars['item']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
"<?php }?> />
                        </div>
                        <div class="form-group">
                            <label for="content">Tekst</label>
                            <textarea class="form-control" style="height: 400px;" id="content" name="content" placeholder="Vul hier uw tekstuele inhoud van de pagina"><?php if ($_smarty_tpl->tpl_vars['item']->value!=null){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->content, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value!=null){?>
                        <form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/portfolio/add-image/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/">
                            <div class="form-group">
                                <label for="picture">Afbeelding</label>
                                <input type="file" name="url" id="picture" placeholder="Selecteer uw afbeelding" />
                            </div>
                            <div class="form-group">
                                <label for="title">Omschrijving</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Plaats hier uw omschrijving van de afbeelding" />
                                <span class="help-block">Dit is belangrijk voor uw google ranking, dus vergeet deze niet.</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Toevoegen</button>
                            </div>
                        </form>
                        <h3>Afbeeldingen</h3>
                        <div>
                            <?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
                                <div class="pull-left" style="margin-right: 5px; margin-bottom: 5px;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/upload/images/<?php echo $_smarty_tpl->tpl_vars['picture']->value->url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['picture']->value->title;?>
" height="100" />
                                    <a style="clear:both; display: block; text-align: center;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/portfolio/delete-image/<?php echo $_smarty_tpl->tpl_vars['picture']->value->id;?>
/" title="Verwijderen"><span class="glyphicon glyphicon-trash"></span></a>
                                </div>
                            <?php }
if (!$_smarty_tpl->tpl_vars['picture']->_loop) {
?>
                                <p>Er zijn nog geen afbeeldingen toegevoegd</p>
                            <?php } ?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>