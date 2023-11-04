<?php

require_once(__DIR__ . "/../../models/UserModel.php");
require_once(__DIR__ . "/../../models/FriendsModel.php");
require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../UnauthorizedController.php");

class WasteCollectionController extends Controller {

    use RenderView;

    /*
     * /wastecollection
     */
    public function index(){

        $user = $this->getUserAuth();

        $this->LoadView('waste-collection/waste-collection', [
            'user' => $user
        ]);
    }

    /*
     * /wastecollectioncreation
     */
    public function createCollection(){
        $user = $this->getUserAuth();

        if ($user->isUserCollector()) {
            $unauthorized = new UnauthorizedController();
            $unauthorized->index();
        }

        $this->LoadView('waste-collection/waste-creation', [
            'user' => $user
        ]);
    }

    /*
    * /createwastecollection
    */
    public function createEvent() {
        $user = $this->getUserAuth();

        if ($user->isUserCollector()) {
            $unauthorized = new UnauthorizedController();
            $unauthorized->index();
        }

        $this->validateRequest();

        $address = $this->addressRegistered($user->id);

        if (empty($address)) {
            $address = $this->createAdress($user->id);
        }

        $collection = R::dispense("waste_collection"); ///// aqui
        $collection->import($_POST, "description, weight");
        $collection->requester_id = $user->id;
        $collection->status = 1;

        R::store($collection);

        $adressCollection = R::dispense("address_collection");
        $adressCollection->collection_id = $collection;
        $adressCollection->address_id = $address;
        
        return $this->response(201);
    }

    public function validateRequest() {
        if (empty($_POST["description"]) || empty($_POST["weight"]) || empty($_POST["cep"]) || empty($_POST["number"])) {
            $this->hanndleError(400, "missing information");
        }
    }

    public function addressRegistered($userId) {
        return R::find("address", "user_id = ? and cep = ?", [$userId, $_POST["cep"]]);
    }

    public function createAdress($userId) {
        $address = R::dispense("address");
        $address->user_id = $userId;
        $address->import($_POST, "cep, uf, city, neighborhood, address, number");
        $address->status = 1;
        if ($_POST["adjunct"]) {
            $address->adjunct = $_POST["adjunct"];
        }
        return R::store($address);
    }

}