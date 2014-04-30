<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 11:33:31
         compiled from "includes/templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3194553037a72d8b733-92276504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663233b83f0f84d42bc524fc3d5e083f5f3efb3c' => 
    array (
      0 => 'includes/templates\\head.tpl',
      1 => 1392896007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3194553037a72d8b733-92276504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53037a72da1cf9_56937117',
  'variables' => 
  array (
    'siteTitle' => 0,
    'siteName' => 0,
    'siteDescription' => 0,
    'siteUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53037a72da1cf9_56937117')) {function content_53037a72da1cf9_56937117($_smarty_tpl) {?><!DOCTYPE html>
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
admin/administrators/logout/" title="Uitloggen">Uitloggen</a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid full-height"><?php }} ?>