<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../bundles/UtilisBundle/utilis.php");
require_once(__DIR__ . "/../../models/UserModel.php");
require_once(__DIR__ . "/../Controller.php");

class FriendsController extends Controller {
    use RenderView;

    public function add ($request) {
        $friend = R::load("user", $request["friend_id"]);

        if(!$friend->id) {
            $this->hanndleError(404, "user not found");
        }

        $user = R::load("user", $request["user_id"]);

        if ($user->hasFriendRequestPending($friend) || $friend->hasFriendRequestPending($user)) {
            $this->hanndleError(409, "Friend request already pending");
        }

        if ($user->isFriendsWith($friend) || $friend->isFriendsWith($user)) {
            $this->hanndleError(409, "Already friends");
        }

        $friendship = R::dispense("friends");
        $friendship->requester_id = $user->id;
        $friendship->friend_id = $friend->id;
        $friendship->status = 0;
        R::store($friendship);

        return $this->response(200, "Friendship invite sended");
    }
}