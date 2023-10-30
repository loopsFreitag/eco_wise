<?php

require(__DIR__ . '/../MiddlewareBundle/MiddlewareBundle.php');
require(__DIR__ . '/../UtilisBundle/utilis.php');
require(__DIR__ . '/../../router/routes.php');

class Router {
    
    public function run($routes) {
        $url = $_SERVER['REQUEST_URI'];

        $routeFound = false;

        foreach ($routes as $path => $controller) {
            if ($this->matchRoute($url, $path, $controller)) {
                $routeFound = true;
                break;
            }
        }

        if (!$routeFound) {
            $this->handleNotFound();
        }
    }

    private function matchRoute($url, $path, $controller) {
        $urlParts = explode('/', trim($url, '/'));
        $pathParts = explode('/', trim($path, '/'));

        if (count($urlParts) !== count($pathParts)) {
            return false;
        }

        $params = [];

        foreach ($pathParts as $key => $part) {
            if (strpos($part, '{') === 0 && strpos($part, '}') === strlen($part) - 1) {
                $paramName = trim($part, '{}');
                $params[$paramName] = $urlParts[$key];
            } elseif ($part !== $urlParts[$key]) {
                return false;
            }
        }

        $this->executeRoute($controller, $params, $path);
        return true;
    }

    private function executeRoute($controller, $params, $path) {
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
        $newController->$action($params);
    }

    private function handleNotFound() {
        require_once(__DIR__ . '/../../controllers/NotFoundController.php');
        $controller = new NotFoundController();
        $controller->index();
        die;
    }
}
