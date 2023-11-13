<?php

require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../models/UserModel.php");


class UserController extends Controller
{
    use RenderView;

    public function verifyuser(){
        $user = $this->getUserAuth();

        if (!$user->getDocument()) {
            $this->hanndleError(428, "Documet missing");
        }

        if (!$user->getCountry()) {
            $this->hanndleError(428, "Country missing");
        }

        if (!$user->getBirthDate()) {
            $this->hanndleError(428, "Birth date missing");
        }

        return $this->response("200", "No missing information");

    }

    public function myprofile(){
        $user = $this->getUserAuth();

        $this->LoadView("myprofile/profile",[
            "user" => $user,
        ]);
    }
}