<?php

class Controller {

    public function hanndleError ($error_code = 400, $reason = "Not found") {
        http_response_code($error_code);

        echo json_encode(["reason" => $reason]);

        die();
    }

    public function response($status_code = 200, $message = "Success") {
        header('Content-Type: application/json');
        http_response_code($status_code);

        echo json_encode(["message" => $message]);

        die();
    }

    public function getUserAuth(){
        session_start();

        $user = R::load('user', $_SESSION["user_id"]);

        if (!$user) {
            $this->hanndleError(404, "user not found");
        }

        return $user;
    }
}