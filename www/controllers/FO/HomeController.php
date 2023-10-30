<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../bundles/UtilisBundle/utilis.php");
require_once(__DIR__ . "/../Controller.php");

class HomeController extends Controller{

    use RenderView;

    public function show () {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);
        $friends = R::find('user', 'person_id <> ? and status = ?', [$user->id, 1]);

        $this->LoadView('home-page/home-page', [
            'user' => $user,
            'friends' => $friends,
        ]);
    }
}