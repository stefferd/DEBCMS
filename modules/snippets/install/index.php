<?php
/**
 * Gemaakt door DEB Media
 * Gebruiker: s.van.den.berg
 * Datum: 13-2-14 16:31
 * Omschrijving: Installation profile module
 */

require_once('../../../core/helpers/genericpdo.php');
require_once('../models/snippets.php');
require_once('../classes/snippet.php');
require_once('../../../config/settings.php');

$settings = new Settings();
$pdo = new PdoSnippet($settings);
if ($pdo->install()) {
    echo 'Database table is created succesfully <br />';
}

// Test the table
$snippet = new Snippet();
$snippet->id = 1;
$snippet->title = 'Header';
$snippet->technical = 'banner-header';
$snippet->content = '<p>Dit is een test snippet</p>';
$snippet->active = 1;
$snippet->created = time();
$snippet->lang = 'NL';
$snippet->user = 1;
$snippet->user_created = time();
$snippet->updated = time();

if ($pdo->create($snippet)) {
    echo 'Snippet added succesfully<br />';
}
if ($pdo->delete($snippet->id)) {
    echo 'Snippet deleted succesfully<br />';
}
$pdo->create($snippet);

