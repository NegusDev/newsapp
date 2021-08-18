<?php 

if (isset($_GET['type'], $_GET['post_id'])) {

    $type = $_GET['type'];
    $post_id = (int)$_GET['post_id'];

    switch($type) {
        case 'post':
            $Likes->insertLikes($_SESSION['id'] || $_SESSION['user_id'], $post_id);
        break;
    }
}
header("location:./posts.php");


