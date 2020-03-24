<?php
session_start();
require_once "bootstrap.php";

if(isset($_POST["btnOK"])){
    $user->loginUser($_POST);
    header("Location: cardImage.php");
}
require_once "index.wiev2.php";