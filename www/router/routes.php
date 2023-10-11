<?php

$routes = [
    "/" => "FO/LoginController@singup",
    "/login" => "FO/LoginController@login",
    "/site/home" => "FO/HomeController@show",
    "FO/user/{id}/comment/{comment_id}/" => "FO/HomeController@show"
];
