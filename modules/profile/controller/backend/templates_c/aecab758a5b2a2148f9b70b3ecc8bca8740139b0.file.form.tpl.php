<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 14:40:00
         compiled from "../modules/profile//controller/backend/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808310638530b4bb062e7b1-39837822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aecab758a5b2a2148f9b70b3ecc8bca8740139b0' => 
    array (
      0 => '../modules/profile//controller/backend/templates/form.tpl',
      1 => 1392893486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808310638530b4bb062e7b1-39837822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'administrator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b4bb0701bd3_95603713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b4bb0701bd3_95603713')) {function content_530b4bb0701bd3_95603713($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/Development/DEBCMS/vendor/smarty/plugins/modifier.date_format.php';
?><div class="container-fluid list">
    <div class="row-fluid header">
        <div class="col-lg-12">
            <h2 class="sub-header">Beheerder toevoegen</h2>
            <ul class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/" title="Home">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/" title="Beheerders">Beheerders</a></li>
                <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/update/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->created;?>
/">Bewerken</a></li>
                <?php }else{ ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/add/">Toevoegen</a></li>
                <?php }?>
            </ul>
            <div class="row-fluid">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Gegevens</h3>
                    <?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('admin/administrator/save', null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/update/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['administrator']->value->created;?>
/" method="POST">
                    <?php }else{ ?>
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/save/" method="POST">
                    <?php }?>
                        <div class="form-group">
                            <label for="firstname">Voornaam</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Voornaam" <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['administrator']->value->name;?>
"<?php }?> />
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Achternaam" <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['administrator']->value->lastname;?>
"<?php }?> />
                        </div>
                        <div class="form-group">
                            <label for="emailaddress">E-mailadres</label>
                            <input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="naam@domein.nl" <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>value="<?php echo $_smarty_tpl->tpl_vars['administrator']->value->emailaddress;?>
"<?php }?> />
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['administrator']->value==null){?>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Selecteer uw wachtwoord" />
                            </div>
                            <div class="form-group">
                                <label for="repeat_password">Repeat password</label>
                                <input type="password" class="form-control" id="repeat_password" name="repeat_password" placeholder="Herhaal uw gekozen wachtwoord" />
                            </div>
                        <?php }?>
                        <div class="form-group">
                            <label for="password">Geboortedatum</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Vul uw geboortedatum" <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['administrator']->value->birthday,'d-m-Y');?>
"<?php }?> />
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['administrator']->value!=null){?>
                            <div class="form-group">
                                <label>Laatste keer gewijzigd</label>
                                <i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['administrator']->value->updated,'d-m-Y H:i');?>
</i>
                            </div>
                            <div class="form-group">
                                <label>Aangemaakt op</label>
                                <i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['administrator']->value->created,'d-m-Y H:i');?>
</i>
                            </div>
                        <?php }?>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </form>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>Rechten</h3>
                    <p>Er zijn nog geen rechten geconfigureerd.</p>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>