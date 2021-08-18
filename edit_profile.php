<?php
session_start();
include("Config.php");
include("Controllers/Journalist.php");

$profile_id = $_GET['profile_id'];
$profile = $Journalist->getJournalistById($profile_id);

$show = $Category->getCategory();
$page['content'] = $Category->showCategory($show);


$Views->header();
include("Views/Templates/_edit_profile.php");
$Views->footer();