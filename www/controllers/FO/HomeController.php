<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../bundles/UtilisBundle/utilis.php");
require_once(__DIR__ . "/../../models/UserModel.php");
require_once(__DIR__ . "/../Controller.php");

class HomeController extends Controller
{

    use RenderView;

    public function show()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('home-page/home-page', [
            'user' => $user,
            //'potentialFriends' => $user->getPotentialFriends(),
            //'friendsPending' => $user->getFriendshipRequestPending(),
            //'friendsToAceppt' => $user->getFriendshipRequestToAccpet(),
            //'friends' => $user->getAllFriends()
        ]);
    }
}
