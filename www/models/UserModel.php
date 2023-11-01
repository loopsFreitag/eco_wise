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

    public function getPotentialFriends(){
        $friendIds = R::getAll('
        SELECT requester_id as friend_id FROM friends WHERE friend_id = :user_id
        UNION
        SELECT friend_id as friend_id FROM friends WHERE requester_id = :user_id
        ', [':user_id' => $this->bean->id]);

        $friendIds = array_column($friendIds, 'friend_id');

        // make sure to exclude your self from list of potential friends
        $friendIds[] = $this->bean->id;

        return R::find('user', 'id NOT IN (' . implode(',', $friendIds) . ')');
    }

    public function getFriendshipRequestPending() {
        return R::find("friends", "requester_id = ? and status = ?", [$this->bean->id, 0]);
    }

    public function getFriendshipRequestToAccpet() {
        return R::find("friends", "friend_id = ? and status = ?", [$this->bean->id, 0]);
    }

    public function getAllFriends() {
        $friendIds = R::getAll('
        SELECT requester_id as friend_id FROM friends WHERE friend_id = :user_id
        UNION
        SELECT friend_id as friend_id FROM friends WHERE requester_id = :user_id
        ', [':user_id' => $this->bean->id]);

        $friendIds = array_column($friendIds, 'friend_id');

        return R::find('user', 'id IN (' . implode(',', $friendIds) . ')');
    }
}
