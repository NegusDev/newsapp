<?php

define ('BASE_DIR', __DIR__);

// Models 
include (BASE_DIR . '/Models/Classes/DbController.php');
include (BASE_DIR . '/Models/Classes/Views.class.php');
include (BASE_DIR . '/Models/Classes/Login.class.php');
include (BASE_DIR . '/Models/Classes/Journalist.class.php');
include (BASE_DIR . '/Models/Classes/Category.class.php');
include (BASE_DIR . '/Models/Classes/Posts.class.php');
include (BASE_DIR . '/Models/Classes/Users.class.php');
include (BASE_DIR . '/Models/Classes/Likes.class.php');


$Db = new DbController();
$Views = new Views();
$Login = new Login($Db);
$Journalist = new Journalist($Db);
$Category = new Category($Db);
$Posts = new Posts($Db);
$Users = new Users($Db);
$Likes = new Likes($Db);

// $Likes->getLikes();
$page = [];