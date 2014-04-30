<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 15:38:21
         compiled from "../modules/pages//controller/backend/templates\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87045304e8e48bd519-96993318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aca0935bdc947c2c56440138520fc1a2099efbe' => 
    array (
      0 => '../modules/pages//controller/backend/templates\\form.tpl',
      1 => 1392903382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87045304e8e48bd519-96993318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5304e8e4998931_71712041',
  'variables' => 
  array (
    'page' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5304e8e4998931_71712041')) {function content_5304e8e4998931_71712041($_smarty_tpl) {?><div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>
                <h2 class="sub-header">Pagina wijzigen</h2>
            <?php }else{ ?>
                <h2 class="sub-header">Pagina toevoegen</h2>
            <?php }?>
            <ul class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/" title="Pagina's">Pagina's</a></li>
                <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/edit/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->state;?>
/" title="Bewerken">Bewerken</a></li>
                <?php }else{ ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/add/" title="Toevoegen">Toevoegen</a></li>
                <?php }?>
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/update/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->state;?>
/" method="POST">
                    <?php }else{ ?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/pages/save/" method="POST">
                    <?php }?>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#text" data-toggle="tab">Tekst</a></li>
                            <li><a href="#settings" data-toggle="tab">Instellingen</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="text">
                                <h3 class="sub-header">Inhoud</h3>
                                <div class="form-group">
                                    <label for="content">Tekst</label>
                                    <textarea class="form-control" style="height: 400px;" id="content" name="content" placeholder="Vul hier uw tekstuele inhoud van de pagina" onkeyup="updatePreview(this, '.preview');"><?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->content, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <div class="form-group">
                                    <label for="title">Titel</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Titel" <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
"<?php }?> />
                                </div>
                                <div class="form-group">
                                    <label for="technical">Technische titel</label>
                                    <input type="text" class="form-control" id="technical" name="technical" placeholder="Techische titel" <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['page']->value->technical;?>
"<?php }?> />
                                    <span class="help-block">Deze titel mag geen spaties en andere speciale tekens bevatten, enige uitzonderingen zijn '-' & '_'</span>
                                </div>
                                <div class="form-group">
                                    <label for="type">Soort</label>
                                    <select class="form-control" id="type" name="type" placeholder="Pagina type">
                                        <option value="PAGE">Pagina</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="state">Status</label>
                                    <select class="form-control" id="state" name="state">
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['page']->value!=null&&($_smarty_tpl->tpl_vars['page']->value->state==1&&$_smarty_tpl->tpl_vars['page']->value->active==0)){?>selected<?php }?>>Prototype</option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['page']->value!=null&&($_smarty_tpl->tpl_vars['page']->value->state==1&&$_smarty_tpl->tpl_vars['page']->value->active==1)){?>selected<?php }?>>Published</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Meta tags</label>
                                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Trefwoorden website" <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['page']->value->tags;?>
"<?php }?> />
                                    <span class="help-block">Maximaal 12 per pagina en scheid de tags met een comma.</span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Meta omschrijving</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Beschrijf de inhoud van de pagina"><?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>
<?php }?></textarea>
                                    <span class="help-block">Maximaal 160 tekens</span>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(function () {
                                $('#myTab a:last').tab('show')
                            });
                        </script>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Preview</h3>
                    <div class="preview">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value!=null){?>
                            <?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>

                        <?php }else{ ?>
                            <p>Nog geen preview beschikbaar.</p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>