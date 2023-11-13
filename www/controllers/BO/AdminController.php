<?php

require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../models/UserModel.php");
require_once(__DIR__ . "/../../controllers/UnauthorizedController.php");


class AdminController extends Controller
{
    use RenderView;

    public function index(){
        $user = $this->getUserAuth();

        $allusers = R::find("user"," id <> ?", [$user->id]);

        $this->LoadView("admin/dashboard",[
            "user" => $user,
            "allusers"=> $allusers
        ]);
    }

    public function makeadm($request){
        $user = $this->getUserAuth();
        if ($user->type != 3){
            $u = new UnauthorizedController();
            $u->index();
        }
        $user = R::load("user", $request["user_id"]);
        $user->type = 3;
        R::store($user);
        $this->response(200, "Changed to adm");
    }

    public function exclude($request){
        $user = $this->getUserAuth();
        if ($user->type != 3){
            $u = new UnauthorizedController();
            $u->index();
        }
        $user = R::load("user", $request["user_id"]);

        if ($user->type == 3) {
            $this->hanndleError(400, "Canntot exlude this user");
        }

        $user->status = 2;
        R::store($user);
        $this->response(200, "Excluded");
    }

    public function activate($request){
        $user = $this->getUserAuth();
        if ($user->type != 3){
            $u = new UnauthorizedController();
            $u->index();
        }
        $user = R::load("user", $request["user_id"]);

        $user->status = 1;
        R::store($user);
        $this->response(200, "Excluded");
    }
}