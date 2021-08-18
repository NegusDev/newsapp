<?php
declare(strict_types=1);
session_start();
include("Config.php");
// include("Controllers/Posts.php");

$editor = $Journalist->getAllJournalists();
$posts = $Posts->getAllPosts();

$profile_id = $_GET['id'];
$profile = $Journalist->getJournalistById($profile_id);



$Views->header();
include("Views/Templates/_profile.php");
$Views->footer();
