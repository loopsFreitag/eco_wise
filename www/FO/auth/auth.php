<?php

include '../index.php';

session_start();

$user = R::load('user', $_SESSION["user_id"]);

if (!isset($_SESSION["user_id"]) && !$user->id) {
    header('Location: ../login.php');
} 
