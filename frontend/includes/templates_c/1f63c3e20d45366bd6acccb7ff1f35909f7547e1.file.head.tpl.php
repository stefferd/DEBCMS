<?php /* Smarty version Smarty-3.1.8, created on 2014-02-28 17:59:27
         compiled from "frontend/includes/templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2084142865530b3df479efd6-91870262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f63c3e20d45366bd6acccb7ff1f35909f7547e1' => 
    array (
      0 => 'frontend/includes/templates/head.tpl',
      1 => 1393606478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2084142865530b3df479efd6-91870262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b3df47d3a17_04802416',
  'variables' => 
  array (
    'frontendTitle' => 0,
    'frontendName' => 0,
    'metatags' => 0,
    'frontendDescription' => 0,
    'url' => 0,
    'view' => 0,
    'snippet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b3df47d3a17_04802416')) {function content_530b3df47d3a17_04802416($_smarty_tpl) {?><!DOCTYPE html>
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
frontend/theme/dt-montage/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
frontend/theme/dt-montage/css/sass-bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
frontend/theme/dt-montage/css/style.css" type="text/css" />
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
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">DT Montage</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right" role="search" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
contact/">
                    <div class="form-group">
                        <input type="text" class="form-control" name="telefoon" placeholder="Telefoonnummer">
                    </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span> Bel mij terug</button>
                </form>
                <ul class="nav navbar-nav">
                    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <!-- Jumbotron -->
        <div class="jumbotron <?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['snippet']->value;?>
</div>
                <div class="container-fluid full-height"><?php }} ?>