<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>{$siteTitle}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="google" value="notranslate" />
        <meta name="application-name" content={$siteName}" />
        <meta name="description" content="{$siteDescription}" />
        <meta name="application-url" content="{$siteUrl}" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{$siteUrl}/theme/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="{$siteUrl}admin/theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="{$siteUrl}admin/theme/css/style.css" type="text/css" />
        <script type="text/javascript" src="{$siteUrl}admin/theme/js/jquery.js"></script>
        <script type="text/javascript" src="{$siteUrl}vendor/editor/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                // Location of TinyMCE script
                mode : "specific_textareas",
                editor_selector : "mceEditor",
                script_url : '{$siteUrl}vendor/editor/tiny_mce/tiny_mce.js',
                document_base_url : "http://",
                remove_script_host: false,
                relative_urls : true,
                language : "nl",
                // General options
                theme : "advanced",
                skin : "thebigreason",
                auto_focus : "newcontent",
                width: "100%",
                height: "400",
                plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist,imagemanager",

                // Theme options
                theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,undo,redo, image, code",
                theme_advanced_buttons2 : "",
                theme_advanced_buttons3 : "",
                theme_advanced_buttons4 : "",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true,

                // Example content CSS (should be your site CSS)
                content_css : "{$siteUrl}frontend/theme/dt-montage/css/style.css",

                // Drop lists for link/image/media/template dialogs
                template_external_list_url : "lists/template_list.js",
                external_link_list_url : "lists/link_list.js",
                external_image_list_url : "lists/image_list.js",
                media_external_list_url : "lists/media_list.js",

                // Replace values for the template plugin
                template_replace_values : {
                    username : "Some User",
                    staffid : "991234"
                }
            });
        </script>
    </head>
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand logo" href="{$siteUrl}admin/" title="{$siteName}">&nbsp;</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                {if isset($smarty.session.user_id) and $smarty.session.user_id > 0}
                                    {include file="menu.tpl" scope=parent}
                                {/if}
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                {if isset($smarty.session.user_id) and $smarty.session.user_id > 0}
                                    <li><a href="#">Hallo, {$smarty.session.user_name}</a></li>
                                    <li><a href="{$siteUrl}admin/?module=settings"><span class="glyphicon glyphicon-wrench"></span></a></li>
                                    <li><a href="{$siteUrl}admin/?module=administrators&action=logout" title="Uitloggen">Uitloggen</a></li>
                                {/if}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid full-height">