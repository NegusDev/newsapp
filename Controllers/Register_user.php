<?php

$errors = "";

if (isset($_POST['submit'])) {
   
    
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $data = [
        'first_name' => trim($_POST['firstname']),
        'last_name' => trim($_POST['lastname']),
        'username' => trim($_POST['username']),
        'email' => trim($_POST['email']),
        'password' => hash('sha256',$_POST['password']),
        'profile' => $_POST['image'],
        'gender' => trim($_POST['gender'])
    ];


    
    if ($errors === "") {
        $result = $Login->createJournalist('users', $data);

        if ($result) {
            // move_uploaded_file($_FILES['image']['tmp_name'], "Views/Journalists/img/$_FILE['image']");
            header("location:./Login_user.php");
        }


    }else {
        die("failed");
    }
    

}