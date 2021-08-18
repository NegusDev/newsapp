<?php
include ("Config.php");
include ("Controllers/journalist.php");

$show = $Category->getCategory();
$page['content'] = $Category->showCategory($show);


$Views->header();
include("Views/Templates/_register.php");
$Views->footer();
