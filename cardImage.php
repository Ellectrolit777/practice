<?php
session_start();
require_once "bootstrap.php";
require_once "addImage.php";

if(!$_SESSION["auth"]){
    header("Location: index.php");
    die();
}


if(isset($_POST["btnAddImg"])){
    $user->addImageUser($_POST,$_SESSION);
}
require_once "one.php";