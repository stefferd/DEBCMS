<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 14:38:44
         compiled from "../modules/snippets//controller/backend/templates\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247753060eca9b6826-19890154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaf07c9d95d96b54b267ececf576be3be6c6ec8c' => 
    array (
      0 => '../modules/snippets//controller/backend/templates\\form.tpl',
      1 => 1392906061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247753060eca9b6826-19890154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53060ecaaee896_13293497',
  'variables' => 
  array (
    'snippet' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53060ecaaee896_13293497')) {function content_53060ecaaee896_13293497($_smarty_tpl) {?><div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            <?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?>
                <h2 class="sub-header">Snippet wijzigen</h2>
            <?php }else{ ?>
                <h2 class="sub-header">Snippet toevoegen</h2>
            <?php }?>
            <ul class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/" title="Snippets">Snippets</a></li>
                <?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/edit/<?php echo $_smarty_tpl->tpl_vars['snippet']->value->id;?>
/" title="Bewerken">Bewerken</a></li>
                <?php }else{ ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/add/" title="Toevoegen">Toevoegen</a></li>
                <?php }?>
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/update/<?php echo $_smarty_tpl->tpl_vars['snippet']->value->id;?>
/" method="POST">
                    <?php }else{ ?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/snippets/save/" method="POST">
                    <?php }?>
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titel" <?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['snippet']->value->title;?>
"<?php }?> />
                        </div>
                        <div class="form-group">
                            <label for="technical">Technische titel</label>
                            <input type="text" class="form-control" id="technical" name="technical" placeholder="Techische titel" <?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['snippet']->value->technical;?>
"<?php }?> />
                            <span class="help-block">Deze titel mag geen spaties en andere speciale tekens bevatten, enige uitzonderingen zijn '-' & '_'</span>
                        </div>
                        <div class="form-group">
                            <label for="content">Tekst</label>
                            <textarea class="form-control" style="height: 400px;" id="content" name="content" placeholder="Vul hier uw tekstuele inhoud van de pagina" onkeyup="updatePreview(this, '.preview');"><?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->content, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Preview</h3>
                    <div class="preview">
                        <?php if ($_smarty_tpl->tpl_vars['snippet']->value!=null){?>
                            <?php echo $_smarty_tpl->tpl_vars['snippet']->value->content;?>

                        <?php }else{ ?>
                            <p>Nog geen preview beschikbaar.</p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>