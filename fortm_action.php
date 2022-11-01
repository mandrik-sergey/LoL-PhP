<?php
session_start();

if (isset($_POST['button_giv_image'])){
    $rand_keys = array_rand($_SESSION['images'], 2);
    $name_image = $_SESSION['images'][$rand_keys[0]];
    $_SESSION['name_img']= $name_image;
    require "all_heroes.php";
}


