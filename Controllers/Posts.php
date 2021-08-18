<?php

// ADD POST
if (!isset($_SESSION['id'])) {

    // header("location: ./index.php");
}else {
    $errors = "";
    if (isset($_POST['post'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'journalist_id' => $_SESSION['id'],
            'category' => trim($_POST['category']),
            'title' => trim($_POST['title']),
            'body' => trim($_POST['body'])
        ];
        if ($errors === "") {
            $result = $Posts->createPost('posts', $data);    
            if ($result) {
                header("location:./posts.php");
            }  
        }else {
            die("failed");
        }
    }
}

// EDIT POST
if (!isset($_SESSION['id'])) {
    // header("location: ./index.php");
}
else {
    $errors = "";
    if (isset($_POST['edit'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $post_id = $_POST['post_id'];
        $category = $_POST['category'];
        $title = $_POST['title'];
        $body = $_POST['body'];

        if ($errors === "") {
            $result = $Posts->editPost($post_id,$category,$title,$body);
    
            if ($result) {
                header("location:./posts.php");
            }
        }else {
            die("failed");
        }



    }
}

// DELETE POST
if (!isset($_SESSION['id'])) {
    // header("location: ./index.php");
}
else {
    if (isset($_POST['del_id'])) {
        $del_id = $_POST['del_id'];
        $result = $Posts->deletePost($del_id);
        if ($result) {
            header("location" . $_SERVER['PHP_SELF']);
        }else {
            die('failed');
        }
    }
}
