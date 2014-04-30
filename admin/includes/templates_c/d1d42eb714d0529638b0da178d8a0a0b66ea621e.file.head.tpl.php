<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 14:36:48
         compiled from "includes/templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1391693229530153f2463fb3-89272120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d42eb714d0529638b0da178d8a0a0b66ea621e' => 
    array (
      0 => 'includes/templates/head.tpl',
      1 => 1393248058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1391693229530153f2463fb3-89272120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530153f2477497_71259920',
  'variables' => 
  array (
    'siteTitle' => 0,
    'siteName' => 0,
    'siteDescription' => 0,
    'siteUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530153f2477497_71259920')) {function content_530153f2477497_71259920($_smarty_tpl) {?><!DOCTYPE html>
<html lang="nl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title><?php echo $_smarty_tpl->tpl_vars['siteTitle']->value;?>
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="google" value="notranslate" />
        <meta name="application-name" content=<?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['siteDescription']->value;?>
" />
        <meta name="application-url" content="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
/theme/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/theme/css/style.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/theme/js/jquery.js"></script>
    </head>
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand logo" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/" title="<?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
">&nbsp;</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <?php if (isset($_SESSION['user_id'])&&$_SESSION['user_id']>0){?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

                                <?php }?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <?php if (isset($_SESSION['user_id'])&&$_SESSION['user_id']>0){?>
                                    <li><a href="#">Hallo, <?php echo $_SESSION['user_name'];?>
</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/settings/"><span class="glyphicon glyphicon-wrench"></span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
admin/administrators/logout/" title="Uitloggen">Uitloggen</a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid full-height"><?php }} ?>