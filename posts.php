<?php
session_start();
include("Config.php");
include("Controllers/Posts.php");


$posts = $Posts->getAllPosts();
// shuffle($posts);



$Views->header();
include("Views/Templates/_posts.php");
$Views->footer();
