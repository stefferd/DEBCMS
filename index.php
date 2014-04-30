<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:11
 */
session_start();

require_once('config/settings.php');
require_once('core/helpers/genericpdo.php');
require_once('frontend/general/view.php');
require_once('frontend/general/factory.php');
require_once('vendor/smarty/Smarty.class.php');

$settings = new Settings();
$module = 'home';
$action = 'view';
$item = null;
$subitem = null;
extract($_GET);

require_once('modules/snippets/classes/snippet.php');
require_once('modules/snippets/models/snippets.php');
require_once('modules/snippets/controller/snippetfrontend.php');
require_once('modules/pages/classes/page.php');
require_once('modules/pages/models/pages.php');
require_once('modules/pages/controller/pagefrontend.php');
require_once('modules/snippets/classes/snippet.php');
require_once('modules/snippets/models/snippets.php');
require_once('modules/snippets/controller/snippetfrontend.php');
require_once('modules/portfolio/classes/item.php');
require_once('modules/portfolio/models/portfolio.php');
require_once('modules/portfolio/controller/portfoliofrontend.php');

$view = new FrontendView($settings, $module, $action, $item, $subitem);
$view->create($_POST);