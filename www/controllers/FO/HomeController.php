<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../bundles/UtilisBundle/utilis.php");

class HomeController extends RenderView{

    public function show () {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);
        $friends = R::find('user', 'person_id <> ? ', [$user->id]);
        $this->LoadView('home-page/home-page', [
            'user' => $user,
            'friends' => $friends,
        ]);
    }
}