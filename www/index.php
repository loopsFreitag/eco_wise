<?php

require_once 'rb.php';
require_once 'bundles/RouterBundle/Router.php';
require_once 'router/routes.php';

R::setup('mysql:host=db;dbname=handle',
'root', 'root');

$router = new Router();
$router->run($routes);