<?php

require_once(__DIR__ . "/../../controllers/UnauthorizedController.php");

class MiddlewareBundle {
    public function authenticate_middleware () {
        session_start();
        if (!isset($_SESSION['user_id']) || !$_SESSION['user_id']) {
            $unauthorized = new UnauthorizedController();
            $unauthorized->index();
        }
    }
}