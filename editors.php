<?php

session_start();
include("Config.php");

$editors = $Journalist->getAllJournalists();
// $page['content'] =  $Journalist->viewJournalists($editors);


$Views->header();
include("Views/Templates/_editors.php");
$Views->footer();
