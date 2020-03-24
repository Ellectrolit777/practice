<?php
// Отвечает за загрузку начальной страницы с аватарками
// всех зарегистрированных пользователь
session_start();
require_once "bootstrap.php";

$res = $user->findFullImage();

require_once "index.wiev.php";



