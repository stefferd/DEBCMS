<?php /* Smarty version Smarty-3.1.8, created on 2014-02-28 22:39:37
         compiled from "modules/pages//controller/frontend/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17972817245310b75e021854-15586391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d849a0b8085d23e50a3fc6dd067ac29777bd584' => 
    array (
      0 => 'modules/pages//controller/frontend/templates/contact.tpl',
      1 => 1393623562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17972817245310b75e021854-15586391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5310b75e097242_87656357',
  'variables' => 
  array (
    'messageSend' => 0,
    'contactSendSnippet' => 0,
    'url' => 0,
    'contactSnippet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5310b75e097242_87656357')) {function content_5310b75e097242_87656357($_smarty_tpl) {?><div class="row">
    <div class="col-md-8">
        <?php if ($_smarty_tpl->tpl_vars['messageSend']->value){?>
            <p><?php echo $_smarty_tpl->tpl_vars['contactSendSnippet']->value;?>
</p>
        <?php }?>
        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
contact/" method="POST">
            <div class="form-group">
                <label for="voornaam">Voornaam</label>
                <input type="text" class="form-control" id="voornaam" name="voornaam" placeholder="Uw voornaam">
            </div>

            <div class="form-group">
                <label for="achternaam">Achternaam</label>
                <input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Uw achternaam">
            </div>

            <div class="form-group">
                <label for="email">E-mailadres</label>
                <input type="email" required="required" class="form-control" id="email" name="email" placeholder="Uw e-mailadres">
            </div>

            <div class="form-group">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" class="form-control" id="onderwerp" name="onderwerp" placeholder="Onderwerp van het bericht">
            </div>

            <div class="form-group">
                <label for="bericht">Uw bericht</label>
                <textarea required="required" class="form-control" id="bericht" name="bericht" placeholder="Uw bericht" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Verzenden</button>
        </form>
    </div>
    <div class="col-md-4">
        <address>
            <?php echo $_smarty_tpl->tpl_vars['contactSnippet']->value;?>

        </address>
    </div>
</div><?php }} ?>