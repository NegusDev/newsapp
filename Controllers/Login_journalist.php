<?php

session_start();

if (isset($_POST['login'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $result = $Login->loginAuth('journalist',$username,$password);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            $_SESSION['id'] = $_POST['username'];
            echo "<script>alert('You have logged in as a journalist')</script>";

            header("Location:./posts.php");



        }else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}


if (isset($_SESSION['id'])) {
    unset($_SESSION['id']);

    header("location:./logout.php");
}
