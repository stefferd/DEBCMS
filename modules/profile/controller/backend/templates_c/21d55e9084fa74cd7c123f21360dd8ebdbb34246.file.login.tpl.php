<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 11:26:14
         compiled from "../modules/profile//controller/backend/templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78955305e55e60b347-90151723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d55e9084fa74cd7c123f21360dd8ebdbb34246' => 
    array (
      0 => '../modules/profile//controller/backend/templates\\login.tpl',
      1 => 1392895572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78955305e55e60b347-90151723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5305e55e63ae84_77950926',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305e55e63ae84_77950926')) {function content_5305e55e63ae84_77950926($_smarty_tpl) {?><div class="container-fluid">
    <div class="container" style="width:500px;">
        <form class="form-signin" role="form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" method="POST">
            <h2 class="form-signin-heading">Inloggen</h2>
            <input type="email" class="form-control" name="emailaddress" placeholder="Emailadres / Gebruikersnaam" required autofocus style="border-radius: 5px 5px 0 0;"/>
            <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required style="border-radius: 0 0 5px 5px; margin-bottom: 20px; border-top: 0;">
            <button class="btn btn-lg btn-success" type="submit">Inloggen</button>
        </form>
    </div>
</div><?php }} ?>