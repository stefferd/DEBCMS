<?php /* Smarty version Smarty-3.1.8, created on 2014-02-23 16:12:42
         compiled from "../modules/profile//controller/backend/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089939296530a0feadd1a95-59977317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f81a1739cf98e131f2aeaefdf0cefefa47a7bc8' => 
    array (
      0 => '../modules/profile//controller/backend/templates/login.tpl',
      1 => 1392895572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089939296530a0feadd1a95-59977317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530a0feaeac708_61342790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530a0feaeac708_61342790')) {function content_530a0feaeac708_61342790($_smarty_tpl) {?><div class="container-fluid">
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