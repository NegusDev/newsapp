<?php
session_start();
include("Config.php");
include("Controllers/Posts.php");
$editor = $Journalist->getAllJournalists();

$show = $Category->getCategory();
$page['content'] = $Category->showCategory($show);


$Views->header();
include("Views/Templates/_create_post.php");
$Views->footer();
