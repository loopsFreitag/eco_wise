<?php

$routes = [
    "/" => "FO/LoginController@singup",
    "/login" => "FO/LoginController@login",
    "/loginvalidation" => "FO/LoginController@loginValidataion",
    "/site/home" => "FO/HomeController@show",
    "/singupvalidation" => "FO/LoginController@validateSingUp",
    "/logout" => "FO/LoginController@logout",
    "/addfriend/{user_id}/{friend_id}" => "BO/FriendsController@add"
];

$protected = [
    "/" => false,
    "/login" => false,
    "/loginvalidation" => false,
    "/site/home" => true,
    "/singupvalidation" => false,
    "/logout" => true,
    "/addfriend" => true,
];
