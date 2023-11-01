<?php

require_once(__DIR__ . "/../../models/UserModel.php");
require_once(__DIR__ . "/../../models/FriendsModel.php");
require_once(__DIR__ . "/../Controller.php");

class FriendsController extends Controller {

    public function sendFriendshipRequest ($request) {
        $friend = R::load("user", $request["friend_id"]);

        if(!$friend->id) {
            $this->hanndleError(404, "User not found");
        }

        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        if ($user->hasFriendRequestPending($friend) || $friend->hasFriendRequestPending($user)) {
            $this->hanndleError(409, "Friend request already pending");
        }

        if ($user->isFriendsWith($friend) || $friend->isFriendsWith($user)) {
            $this->hanndleError(409, "Already friends");
        }

        $friendship = R::dispense("friends");
        $friendship->requester = $user;
        $friendship->friend = $friend;
        $friendship->status = 0;
        R::store($friendship);

        return $this->response(200, "Friendship invite sended");
    }

    public function accpetFrindshipRequest ($request){
        $friend = R::load("user", $request["friend_id"]);

        if(!$friend->id) {
            $this->hanndleError(404, "User not found");
        }

        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        if (!$friend->hasFriendRequestPending($user)) {
            $this->hanndleError(409, "Dont have a friendship request pending");
        }

        if ($user->isFriendsWith($friend) || $friend->isFriendsWith($user)) {
            $this->hanndleError(409, "Already friend with");
        }

        $friendshipRequest = R::findOne("friends", "requester_id = ? and friend_id = ? and status = ?", [$friend->id, $user->id, 0]);
        $friendshipRequest->status = true;
        R::store($friendshipRequest);

        return $this->response(200, "Friendship accpetd");
    }
}