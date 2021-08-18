<?php
session_start();
include("Config.php");
include("Controllers/Posts.php");

// $posts = $Posts->getAllPosts();

$post_id = (int) $_GET['post'];
$id = $Posts->getPostById($post_id);

$show = $Category->getCategory();
$page['content'] = $Category->showCategory($show);

$Views->header();
include("Views/Templates/_edit_post.php");
$Views->footer();
