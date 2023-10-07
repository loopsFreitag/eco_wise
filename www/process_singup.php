<?php
include 'index.php';


if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) 
|| empty($_POST["password_confirmation"])) {
    die("missing fields");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("invalid email");
}

$existing = R::findOne('person', "email = ?" , [$_POST["email"]]);

if ($existing){
    die('email already registered');
}


if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 chars long");
}

if ( !preg_match("/[a-z]/i", $_POST["password"])) {
    die("password must contain at least one letter");
}

if ( !preg_match("/[0-9]/", $_POST["password"])) {
    die("password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("passwords must match");
}

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);


$person = R::dispense('person');
$person->name = $_POST["name"];
$person->email = $_POST["email"];
$person->password = $password;

$user = R::dispense('user');
$user->type = 1;
$user->person = $person;

$idPerson = R::store($person);
$idUser = R::store($user);

header("Location: singup-success.html");
exit;
