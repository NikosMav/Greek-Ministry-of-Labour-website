<?php
require_once 'presentBreadcrumbs.php';

// we need to see if the user has a history on the site, if not create one
// get access to session so we can do that
session_status() === PHP_SESSION_ACTIVE ?: session_start();

// check if user does not have an actual history started
if(!isset($_SESSION['navigationHistory'])){
    $_SESSION['navigationHistory'] = [];
}

// get name of current file
$currFile = basename($_SERVER["SCRIPT_FILENAME"], '.php');

// find where and if we have this file in the history
$history = $_SESSION['navigationHistory'];
$found = array_search($currFile, array_values($history));

// if found, chop history
if($found !== false){
    $history = array_slice($history, 0, $found);
}

// add currPage to history
$history[count($history)] = $currFile;

// store history to session
$_SESSION['navigationHistory'] = $history;

// start breadcrumb html
$html = '';


$count = count($history);

foreach ($history as $fileName) {
    if (--$count <= 0) {
        break;
    }

    $html.= '<li class="breadcrumb-item" style="background-color: transparent;"><a href="' . $fileName . '.php" style="position: relative;z-index: 1000"><span class="text-white" style="color: transparent;background-color: transparent;"><strong>' . presentBreadcrumb($fileName ) . '</strong></span></a></li>';
}

// last one should link to same page
$html.= '<li class="breadcrumb-item" style="background-color: transparent;"><a href="#" style="position: relative;z-index: 1000"><span class="text-white" style="color: transparent;background-color: transparent;"><strong>' . presentBreadcrumb(end($history) ) . '</strong></span></a></li>';



echo $html;
?>