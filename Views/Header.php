<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amawulire</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

</head>
<body>
   <header id="header">

   <?php 
        if (isset($_SESSION['id'])) {
            $user = $_SESSION['id'];
            echo '
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <div class="font-berkshire font-size-14">
                    <a href="" class="px-3 border-end text-capitalize text-black">'.$user.'</a>
                    <a href="" class="px-3 border-end text-black"><i class="fas fa-bell"></i>(0)</a>
                </div>
                <div class="font-berkshire font-size-14">
                    <a href="./logout.php" class="px-3 border-end border-start text-black">Logout</a>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="#"><strong>Amawulire</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <form class="d-flex m-auto" method="get">
                        <input class="form-control me-2 form-search" type="search" placeholder="Search topic" aria-label="Search">
                        <button class="btn btn-search" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item nav_item px-2 ">
                            <a class="nav-link" href="./posts.php">News</a>
                            </li>
                            <li class="nav-item nav_item px-2">
                            <a class="nav-link" href="./create_post.php?id='.$_SESSION['id'].'">Create</a>
                            </li>
                            <li class="nav-item nav_item px-2">
                            <a class="nav-link" href="./profile.php?profile='.$_SESSION['id'].'"">Yo Profile</a>
                            </li>
                            <li class="nav-item nav_item px-2">
                            <a class="nav-link" href="./editors.php" >Journalists</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            
            ';
        }else if (isset($_SESSION['user_id'])) {
            $user = $_SESSION['user_id'];
            
            echo '
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <div class="font-berkshire font-size-14">
                <a href="" class="px-3 border-end text-capitalize text-black">'.$user.'_reader</a>
                <a href="" class="px-3 border-end text-black"><i class="fas fa-bell"></i>(0)</a>
            </div>
            <div class="font-berkshire font-size-14">
                <a href="./logout_user.php" class="px-3 border-end border-start text-black">Logout</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark   ">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#"><strong>Amawulire</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <form class="d-flex m-auto" method="get">
                    <input class="form-control me-2 form-search" type="search" placeholder="Search topic" aria-label="Search">
                    <button class="btn btn-search" type="submit"><i class="fas fa-search"></i></button>
                </form>
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item nav_item px-2 ">
                        <a class="nav-link border-none-sm" href="./posts.php">News</a>
                        </li>
                        <li class="nav-item nav_item px-2">
                        <a class="nav-link" href="./profile.php?profile=">Yo Profile</a>
                        </li>
                        <li class="nav-item nav_item px-2">
                        <a class="nav-link" href="./editors.php" >Journalists</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
            ';

        }else {
            echo '
            
            <div class="strip d-flex justify-content-between px-2 py-1 bg-light">
            
                <div class="border">
                <p class="text-center m-0">Are you a reader</p>
                    <a href="./register_user.php" class="px-2 border-end text-capitalize text-black">Register here</a>
                    <a href="./login_user.php" class="px-2 text-black text-capitalize">login here</a>
                </div>
                <div class="border">
                <p class="text-center m-0">Are you a journalist</p>
                    <a href="./index.php" class="px-2 border-end text-capitalize text-black">Register here</a>
                    <a href="./login.php" class="px-2  text-black text-wrap text-capitalize">login here</a>
                </div>
            </div>
            <nav class="navbar navbar-expand-xm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#"><strong>Amawulire</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>
            ';
        }
   ?>   
   </header>