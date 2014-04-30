<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 13/02/14
 * Time: 22:11
 */
session_start();

require_once('../config/settings.php');
require_once('../core/helpers/genericpdo.php');
require_once('../core/helpers/images.php');
require_once('./general/view.php');
require_once('./general/factory.php');
require_once('../vendor/smarty/Smarty.class.php');

$settings = new Settings();
$module = 'administrators';
$action = 'list';
$item = null;
$subitem = null;
extract($_GET);

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != 0) {
    if ($module == 'administrators') {
        require_once('../modules/profile/classes/profile.php');
        require_once('../modules/profile/classes/user.php');
        require_once('../modules/profile/classes/administrator.php');
        require_once('../modules/profile/models/profile.php');
        require_once('../modules/profile/controller/profilebackend.php');
    } elseif ($module == 'pages') {
        require_once('../modules/pages/classes/page.php');
        require_once('../modules/pages/models/pages.php');
        require_once('../modules/pages/controller/pagebackend.php');
    } elseif ($module == 'snippets') {
        require_once('../modules/snippets/classes/snippet.php');
        require_once('../modules/snippets/models/snippets.php');
        require_once('../modules/snippets/controller/snippetbackend.php');
    } elseif ($module == 'settings') {
        require_once('../modules/settings/controller/settingsbackend.php');
    } elseif ($module == 'portfolio') {
        require_once('../modules/portfolio/classes/item.php');
        require_once('../modules/portfolio/classes/picture.php');
        require_once('../modules/portfolio/models/portfolio.php');
        require_once('../modules/portfolio/controller/portfoliobackend.php');
    }
} else {
    require_once('../modules/profile/classes/profile.php');
    require_once('../modules/profile/classes/user.php');
    require_once('../modules/profile/classes/administrator.php');
    require_once('../modules/profile/models/profile.php');
    require_once('../modules/profile/controller/profilebackend.php');
    $_SESSION['original_module'] = $module;
    $_SESSION['original_action'] = $action;
    $_SESSION['original_item'] = $item;
    $_SESSION['original_subitem'] = $subitem;
    // User must be loggedin
    $action = 'login';
}

$view = new View($settings, $module, $action, $item, $subitem, $_POST, $_FILES);
$view->create();