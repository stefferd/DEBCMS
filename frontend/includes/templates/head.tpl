<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>{$frontendTitle}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" value="notranslate" />
        <meta name="application-name" content="{$frontendName}" />
        <meta name="keywords" content="{$metatags}" />
        <meta name="description" content="{$frontendDescription}" />
        <meta name="application-url" content="{$url}" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="{$url}frontend/theme/dt-montage/img/logo.png" />
        <link rel="shortcut icon" href="{$url}frontend/theme/dt-montage/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="{$url}frontend/theme/dt-montage/css/sass-bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="{$url}frontend/theme/dt-montage/css/style.css" type="text/css" />
        <link rel="stylesheet" href="{$url}frontend/vendor/lightbox/css/lightbox.css" type="text/css" />
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
                <a class="navbar-brand" href="{$url}">DT Montage</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right" role="search" method="POST" action="{$url}?module=contact">
                    <div class="form-group">
                        <input type="text" class="form-control" name="telefoon" placeholder="Telefoonnummer">
                    </div>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span> Bel mij terug</button>
                </form>
                <ul class="nav navbar-nav">
                    {include file="menu.tpl" scope=parent}
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <!-- Jumbotron -->
        <div class="jumbotron {$view}">{$snippet}</div>
                <div class="container-fluid full-height">