<?php

require_once(__DIR__ . "/../bundles/RenderViewBundle/RenderViewBundle.php");

class UnauthorizedController extends RenderView {

    public function index () {
        echo "Unauthorized";
        exit();
    }

}
