<?php

require_once(__DIR__ . "/../bundles/RenderViewBundle/RenderViewBundle.php");

class NotFoundController extends RenderView {

    public function index () {
        echo "Not found";
    }

}
