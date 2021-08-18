<?php

session_start();

if (isset($_POST['login'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $result = $Login->loginAuth('users',$username,$password);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            echo "<script>alert('You have logged in as a journalist')</script>";

            $_SESSION['user_id'] = $_POST['username'];

            header("Location:./posts.php");
            exit();


        }else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}

if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);

    header("location:./logout_user.php");
}
