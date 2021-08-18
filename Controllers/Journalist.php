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
        'bio' => trim($_POST['bio']),
        'profile_img' => $_POST['image'],
        'phone_number' => $_POST['phone'],
        'gender' => trim($_POST['gender']),
        'category_id' => trim($_POST['category'])
    ];


    
    if ($errors === "") {
        $result = $Login->createJournalist('journalist', $data);

        if ($result) {
            // move_uploaded_file($_FILES['image']['tmp_name'], "Views/Journalists/img/$_FILE['image']");
            header("location:./Login.php");
        }


    }else {
        die("failed");
    }
    

}

if (!isset($_SESSION['id'])) {
    header("location: ./index.php");
}
else {
    if (isset($_POST['update'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $phone = $_POST['phone'];
        

        $result = $Journalist->editJournalist($id,$firstname,$lastname,$username,$email,$bio,$phone);
        if ($result) {
            header("location:./profile.php?id=$id");
        }else {
            die("failed");
        }
    
    
    }
}