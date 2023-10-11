<?php

class Router {
    public function run ($routes) {
        $url = $_SERVER['REQUEST_URI'];

        $routeFound = false;

        foreach($routes as $path=>$controller) {
            $pattern = '/\{[^}]+\}|[^\/]+\/?/';

            //see if they have the same amount of blocks
            preg_match_all($pattern, $url, $matches1);
            preg_match_all($pattern, $path, $matches2);
            if (!(count($matches1[0]) === count($matches2[0]))){
                continue;
            }

            // Split path into blocks using '/'
            $blocks = explode('/', $path);
            $blocks = array_filter($blocks);

            // Define a regular expression pattern to match placeholders
            $pattern = '/\{(.+?)\}/';

            // Initialize an array to store the placeholders and their positions
            $placeholders = [];

            // Use array_values to get the blocks without keys
            $blocksValues = array_values($blocks);

            foreach ($blocksValues as $key => $block) {
                // Check if the block matches the pattern
                if (preg_match($pattern, $block, $matches)) {
                    $position = $key;
                    $placeholders[] = ["placeholder" => $matches[1], "position" => $position];
                }
            }
            $request = [];

            // remove values from possible placeholder locations
            $blocksUrl = explode('/', $url);
            array_shift($blocksUrl);
            foreach ($placeholders as $placeholderInfo) {
                $position = $placeholderInfo["position"];
                $request[$placeholderInfo["placeholder"]] = $blocksUrl[$position];
                unset($blocksUrl[$position]); // Remove the block at the specified position
            }

            // Create a new path with placeholders removed
            foreach ($placeholders as $placeholderInfo) {
                $position = $placeholderInfo["position"];
                unset($blocksValues[$position]); // Remove the block at the specified position
            }

            // Reconstruct the updated strings
            $urlClean = implode('/', array_filter($blocksUrl));
            $pathClean = implode('/', array_filter($blocksValues));

            // Remove any extra slashes that may result from removing placeholders
            $pathClean = rtrim($pathClean, '/');

            if (!($urlClean == $pathClean)) {
                continue;
            }
            $routeFound = true;

            [$currentController, $action] = explode('@', $controller);

            require_once(__DIR__ . "/../../controllers/$currentController.php");

            preg_match('~/([^/]+)$~', $currentController, $matches);
            $controller = $matches[1];

            $newController = new $controller();
            $newController->$action();
            
        }

        if (!$routeFound) {
            require_once(__DIR__ . '/../../controllers/NotFoundController.php');
            $controller = new NotFoundController();
            $controller->index();
            die;
        }

    }
}
