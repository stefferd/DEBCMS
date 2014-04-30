<?php /* Smarty version Smarty-3.1.8, created on 2014-02-24 15:38:01
         compiled from "../modules/settings/controller/backend/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629808419530b4b6c964107-77625996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b122c3113269ab299f7afc14f68779d759671b' => 
    array (
      0 => '../modules/settings/controller/backend/templates/overview.tpl',
      1 => 1393252676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629808419530b4b6c964107-77625996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b4b6c99f154_53604307',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'messageType' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b4b6c99f154_53604307')) {function content_530b4b6c99f154_53604307($_smarty_tpl) {?><div class="container-fluid list">
    <h1 class="sub-header">Instellingen</h1>
    <ul class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/" title="Home">Home</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
admin/settings/" title="Instellingen">Instellingen</a></li>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['message']->value!=null){?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['messageType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Module</th>
                    <th><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        Pagina's
                    </th>
                    <th><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modules/pages/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
                <tr>
                    <th>
                        Beheerders
                    </th>
                    <th><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modules/profile/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
                <tr>
                    <th>
                        Snippets
                    </th>
                    <th><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modules/snippets/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
                <tr>
                    <th>
                        Portfolio
                    </th>
                    <th><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modules/portfolio/install/index.php" target="_blank" title="Installeren"><span class="glyphicon glyphicon-play-circle" title="Installeren"></span></a></th>
                </tr>
            </tbody>
        </table>
    </div>
</div><?php }} ?>