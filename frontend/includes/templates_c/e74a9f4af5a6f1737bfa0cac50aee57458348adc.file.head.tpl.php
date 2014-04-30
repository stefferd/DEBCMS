<?php /* Smarty version Smarty-3.1.8, created on 2014-02-20 15:56:00
         compiled from "frontend/includes/templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:650153061d40e46723-36968587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74a9f4af5a6f1737bfa0cac50aee57458348adc' => 
    array (
      0 => 'frontend/includes/templates\\head.tpl',
      1 => 1392911746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650153061d40e46723-36968587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53061d40e8a694_71714030',
  'variables' => 
  array (
    'frontendTitle' => 0,
    'frontendName' => 0,
    'metatags' => 0,
    'frontendDescription' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061d40e8a694_71714030')) {function content_53061d40e8a694_71714030($_smarty_tpl) {?><!DOCTYPE html>
<html lang="nl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title><?php echo $_smarty_tpl->tpl_vars['frontendTitle']->value;?>
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" value="notranslate" />
        <meta name="application-name" content="<?php echo $_smarty_tpl->tpl_vars['frontendName']->value;?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['metatags']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['frontendDescription']->value;?>
" />
        <meta name="application-url" content="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
style/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
style/css/sass-bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
style/css/style.css" type="text/css" />
    </head>
    <body>
    <div class="container">
        <!-- <a class="logo" href="#">DT Montage</a> -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DT Montage</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Telefoonnummer">
                    </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span> Bel mij terug</button>
                </form>
                <ul class="nav navbar-nav">
                    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <!-- Jumbotron -->
        <div class="jumbotron">
            <p class="lead">Vooruitstrevend op het gebied van installatietechniek, montage, verbouwingen en renovatie. Wij brengen installatietechniek tot leven met maar een doel, onze klanten altijd de beste en meest complete oplossing aan bieden. </p>

            <p style="font-size:0.7em;">Wij werken samen met een netwerk van specialisten o.a. Bouwonderneming Ebbers om maatwerk te leveren met kwaliteit als constante factor. Hierdoor kunnen wij projecten aannemen voor zowel particulieren als bedrijven.</p>

            <p><a class="btn btn-lg btn-success" href="#" role="button">Wat we voor u kunnen betekenen</a></p>
        </div>
                <div class="container-fluid full-height"><?php }} ?>