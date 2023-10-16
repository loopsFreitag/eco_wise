<?php

$routes = [
    "/" => "FO/LoginController@singup",
    "/login" => "FO/LoginController@login",
    "/loginvalidation" => "FO/LoginController@loginValidataion",
    "/site/home" => "FO/HomeController@show",
    "/singupvalidation" => "FO/LoginController@validateSingUp",
    "/logout" => "FO/LoginController@logout",
];
