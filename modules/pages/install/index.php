<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 13-2-14 16:31
 * Omschrijving: Installation profile module
 */

require_once('../../../core/helpers/genericpdo.php');
require_once('../models/pages.php');
require_once('../classes/page.php');
require_once('../../../config/settings.php');

$settings = new Settings();
$pdo = new PdoPage($settings);
if ($pdo->install()) {
    echo 'Database table is created succesfully <br />';
}

// Test the table
$page = new Page();
$page->id = 1;
$page->title = 'Home';
$page->technical = 'home';
$page->tags = 'home, websitenaam';
$page->description = 'Welkom op onze website';
$page->version = 1;
$page->state = 1;
$page->active = 1;
$page->content = '<h1>' . $page->title . '</h1><p>Bewerk deze inhoud in het beheersysteem</p>';
$page->type = 'PAGE';
$page->created = time();
$page->lang = 'NL';
$page->user = 1;
$page->created = time();

if ($pdo->create($page)) {
    echo 'Page added succesfully<br />';
}
if ($pdo->delete($page->id, $page->state, $page->version)) {
    echo 'Page deleted succesfully<br />';
}
$pdo->create($page);

