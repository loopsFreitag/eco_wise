<?php
require_once(__DIR__ . "/../bundles/UtilisBundle/utilis.php");


class Model_User extends RedBean_SimpleModel  {

    public function update() {
        $this->bean->updated_at = date('Y-m-d H:i:s');
    }

    public function hasFriendRequestPending($user){
        return (bool) R::findOne("friends", "requester_id = ? and friend_id = ? and status = ?" , [$this->bean->id, $user->id, 0]);
    }

    public function isFriendsWith($user){
        return (bool) R::findOne("friends", "requester_id = ? and friend_id = ? and status = ?" , [$this->bean->id, $user->id, 1]);
    } 
}
