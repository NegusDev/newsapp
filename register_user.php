<?php
include ("Config.php");
include ("Controllers/Register_user.php");


// NEWS INTEREST
// $show = $Category->getCategory();
// $page['content'] = $Category->showCategory($show);


$Views->header();
include("Views/Templates/_register_user.php");
$Views->footer();