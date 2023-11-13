<?php

require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../models/UserModel.php");


class AdminController extends Controller
{
    use RenderView;

    public function index(){
        $user = $this->getUserAuth();

        $allusers = R::find("user","type not in (3)");

        $this->LoadView("admin/dashboard",[
            "user" => $user,
            "allusers"=> $allusers
        ]);
    }
}