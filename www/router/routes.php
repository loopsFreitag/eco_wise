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
    "/cancelcollection/{id}" => "BO/WasteCollectionController@cancelEvent",
    "/collection/{collection_id}" => "BO/WasteCollectionController@collectionDetails",
    "/acceptcollection/{collection_id}" => "BO/WasteCollectionController@acceptCollection",
    "/acidrain" => "FO/EducationalContentController@acidRainView",
    "/wildfire" => "FO/EducationalContentController@wildfire",
    "/deforestation" => "FO/EducationalContentController@deforestation",
    "/pollution" => "FO/EducationalContentController@pollution",
    "/recycling" => "FO/EducationalContentController@recycling",
    "/collectioninfo" => "BO/WasteCollectionController@collectionInfo",
    "/myprofile" => "BO/UserController@myprofile",
    "/wastecollectioncurrent" => "BO/WasteCollectionController@currentCollection",
    "/collectionHistory" => "BO/WasteCollectionController@collectionHistory",
    "/dashboard" => "BO/AdminController@index",
    "/verifycode/{collection_id}" => "BO/WasteCollectionController@verifycode",
];

$protected = [
    "/" => false,
    "/login" => false,
    "/loginvalidation" => false,
    "/site/home" => false,
    "/singupvalidation" => false,
    "/logout" => true,
    "/addfriend" => true,
    "/acceptfriend" => true,
    "/wastecollection" => true,
    "/wastecollectioncreation" => true,
    "/verifyuser" => true,
    "/createwastecollection" => true,
    "/cancelcollection" => true,
    "/collection" => true,
    "/acceptcollection" => true,
    "/acidrain" => false,
    "/wildfire" => false,
    "/deforestation" => false,
    "/pollution" => false,
    "/recycling" => false,
    "/collectioninfo" => false,
    "/myprofile" => true,
    "/wastecollectioncurrent" => true,
    "/collectionHistory" => true,
    "/dashboard" => true,
];
