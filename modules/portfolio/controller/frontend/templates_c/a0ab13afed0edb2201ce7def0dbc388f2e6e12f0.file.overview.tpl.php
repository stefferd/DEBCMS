<?php /* Smarty version Smarty-3.1.8, created on 2014-02-25 00:50:34
         compiled from "modules/portfolio//controller/frontend/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:755681798530b801f88f2f4-09162262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0ab13afed0edb2201ce7def0dbc388f2e6e12f0' => 
    array (
      0 => 'modules/portfolio//controller/frontend/templates/overview.tpl',
      1 => 1393285812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755681798530b801f88f2f4-09162262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_530b801f8dab48_18200552',
  'variables' => 
  array (
    'items' => 0,
    'index' => 0,
    'picturesByItems' => 0,
    'currentPictures' => 0,
    'url' => 0,
    'picture' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b801f8dab48_18200552')) {function content_530b801f8dab48_18200552($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['currentPictures'] = new Smarty_variable($_smarty_tpl->tpl_vars['picturesByItems']->value[($_smarty_tpl->tpl_vars['index']->value-1)], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['index']->value%2==0&&$_smarty_tpl->tpl_vars['index']->value!=1){?>
        <div class="row portfolio">
            <div class="col-md-5">
                <?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
                    <img class="pull-left" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/images/<?php echo $_smarty_tpl->tpl_vars['picture']->value->url;?>
" height="100" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picture']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" />
                <?php } ?>
            </div>
            <div class="col-md-7">
                <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value->content;?>
</p>
            </div>
        </div>
    <?php }else{ ?>
        <div class="row portfolio">
            <div class="col-md-7">
                <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value->content;?>
</p>
            </div>
            <div class="col-md-5">
                <?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
                    <img class="pull-left" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
upload/images/<?php echo $_smarty_tpl->tpl_vars['picture']->value->url;?>
" height="100" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picture']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" />
                <?php } ?>
            </div>
        </div>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <p>Nog geen items in het portfolio.</p>
<?php } ?><?php }} ?>