<?php

require(__DIR__ . '/../MiddlewareBundle/MiddlewareBundle.php');
require(__DIR__ . '/../UtilisBundle/utilis.php');
require(__DIR__ . '/../../router/routes.php');

class Router {
    private $routes;

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function run() {
        $url = $_SERVER['REQUEST_URI'];

        if ($this->matchRoute($url)) {
            return; // Route matched and executed
        }

        $this->handleNotFound();
    }

    private function matchRoute($url) {
        // Get the path from the URL
        $path = parse_url($url, PHP_URL_PATH);

        if (array_key_exists($path, $this->routes)) {
            $controller = $this->routes[$path];
            $this->executeRoute($controller, $path);
            return true;
        }

        return false;
    }

    private function executeRoute($controller, $path) {
        list($currentController, $action) = explode('@', $controller);
        global $protected;

        if ($protected[$path]) {
            $middleware = new MiddlewareBundle();
            $middleware->authenticate_middleware();
        }

        require_once(__DIR__ . "/../../controllers/$currentController.php");

        preg_match('~/([^/]+)$~', $currentController, $matches);
        $controller = $matches[1];

        $newController = new $controller();
        $newController->$action();
    }

    private function handleNotFound() {
        require_once(__DIR__ . '/../../controllers/NotFoundController.php');
        $controller = new NotFoundController();
        $controller->index();
        die;
    }
}
