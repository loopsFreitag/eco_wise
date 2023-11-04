<?php

$routes = [
    "/" => "FO/LoginController@singup",
    "/login" => "FO/LoginController@login",
    "/loginvalidation" => "FO/LoginController@loginValidataion",
    "/site/home" => "FO/HomeController@show",
    "/singupvalidation" => "FO/LoginController@validateSingUp",
    "/logout" => "FO/LoginController@logout",
    "/addfriend/{friend_id}" => "BO/FriendsController@sendFriendshipRequest",
    "/acceptfriend/{friend_id}" => "BO/FriendsController@accpetFrindshipRequest",
    "/wastecollection" => "BO/WasteCollectionController@index",
    "/wastecollectioncreation" => "BO/WasteCollectionController@createCollection",
    "/verifyuser" => "BO/UserController@verifyUser",
    "/createwastecollection" => "BO/WasteCollectionController@createEvent",
];

$protected = [
    "/" => false,
    "/login" => false,
    "/loginvalidation" => false,
    "/site/home" => true,
    "/singupvalidation" => false,
    "/logout" => true,
    "/addfriend" => true,
    "/acceptfriend" => true,
    "/wastecollection" =>true,
    "/wastecollectioncreation" => true,
    "/verifyuser" => true,
    "/createwastecollection" => true
];
