<?php
session_start();
require_once "bootstrap.php";
require_once "addImage.php";


if(isset($_POST["btnRegOK"])){
    $user->registrUser($_POST);
}

require_once "reg.wiev.php";
