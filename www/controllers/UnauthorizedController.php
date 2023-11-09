<?php

require_once(__DIR__ . "/../bundles/RenderViewBundle/RenderViewBundle.php");

class UnauthorizedController {

    use RenderView;

    public function index () {
        http_response_code(404);
        $this->LoadView('errors/unauthorized');
    }

}
