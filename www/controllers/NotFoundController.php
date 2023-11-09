<?php

require_once(__DIR__ . "/../bundles/RenderViewBundle/RenderViewBundle.php");

class NotFoundController {

    use RenderView;

    public function index () {
        http_response_code(404);
        $this->LoadView('errors/not-found');
    }

}
