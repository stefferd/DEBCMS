<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 13-2-14 16:31
 * Omschrijving: Installation profile module
 */

require_once('../../../core/helpers/genericpdo.php');
require_once('../models/profile.php');
require_once('../classes/profile.php');
require_once('../classes/administrator.php');
require_once('../classes/user.php');
require_once('../../../config/settings.php');

$settings = new Settings();;
$pdo = new PdoProfile($settings);
if ($pdo->install()) {
    echo 'Database table is created succesfully <br />';
}

// Test the table
$userArguments = array(
    'id' => 1,
    'name' => 'Stef',
    'lastname' => 'van den Berg',
    'emailaddress' => 'stef@debmedia.nl',
    'password' => md5('test'),
    'birthday' => strtotime('05-05-1984'),
    'created' => time(),
    'updated' => time(),
    'activated' => 1,
    'lastlogin' => '',
    'level' => 1,
    'group' => 2,
    'street' => 'Adamskamp',
    'housenumber' => '10',
    'zipcode' => '6576 EG',
    'city' => 'Ooij',
    'country' => 'NL',
    'lang' => 'NL',
);
$adminArguments = array(
    'id' => 1,
    'name' => 'Stef',
    'lastname' => 'van den Berg',
    'emailaddress' => 'stef@debmedia.nl',
    'password' => md5('test'),
    'birthday' => strtotime('05-05-1984'),
    'created' => time(),
    'updated' => time(),
    'activated' => 1,
    'lastlogin' => '',
    'level' => 1,
    'group' => 2
);
$user = new User($userArguments);
if ($pdo->create($user)) {
    echo 'User added succesfully<br />';
}
if ($pdo->delete($user->id)) {
    echo 'User deleted succesfully<br />';
}
$administrator = new Administrator($userArguments);
if ($pdo->create($administrator)) {
    echo 'Administrator added succesfully<br />';
}
/*
if ($pdo->delete($administrator->id)) {
    echo 'Administrator deleted succesfully<br />';
}
*/

