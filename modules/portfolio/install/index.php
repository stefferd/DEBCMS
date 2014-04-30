<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 13-2-14 16:31
 * Omschrijving: Installation profile module
 */

require_once('../../../core/helpers/genericpdo.php');
require_once('../models/portfolio.php');
require_once('../classes/item.php');
require_once('../../../config/settings.php');

$settings = new Settings();
$pdo = new PdoPortfolio($settings);
if ($pdo->install()) {
    echo 'Database table is created succesfully <br />';
}

// Test the table
$item = new Item();
$item->id = 1;
$item->title = 'Test';
$item->active = 1;
$item->content = '<p>Dit is een test</p>';
$item->created = time();
$item->lang = 'NL';
$item->user = 1;
$item->updated = time();
$item->user_created = time();

if ($pdo->create($item)) {
    echo 'Item added succesfully<br />';
}
if ($pdo->delete($item->id)) {
    echo 'Item deleted succesfully<br />';
}
$pdo->create($item);

