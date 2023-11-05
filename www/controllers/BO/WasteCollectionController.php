<?php

require_once(__DIR__ . "/../../models/UserModel.php");
require_once(__DIR__ . "/../../models/AddressModel.php");
require_once(__DIR__ . "/../../models/Waste_CollectionModel.php");
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

        $previusCollections = R::find('waste_collection', 'user_id = ? and status = ?', [$user->id, 2]);

        $wasteCollectionOnGoing = R::findOne('waste_collection', 'user_id = ? and status = ?', [$user->id, 1]);

        $this->LoadView('waste-collection/waste-creation', [
            'user' => $user,
            'previusCollections' => $previusCollections,
            'wasteCollectionOnGoing' => $wasteCollectionOnGoing
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
        echo json_encode($_POST);

        $collection = R::xdispense("waste_collection");
        $collection->import($_POST, "description, weight");
        $collection->user_id = $user->id;

        R::store($collection);

        $adressCollection = R::xdispense("address_collection");
        $adressCollection->collection_id = $collection;
        $adressCollection->address_id = $address;
        
        $this->response(201);
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
        if ($_POST["adjunct"]) {
            $address->adjunct = $_POST["adjunct"];
        }
        return R::store($address);
    }

}