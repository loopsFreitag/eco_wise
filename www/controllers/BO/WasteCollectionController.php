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

        $openCollections = R::find("waste_collection", "status = 1 and collection_time > CURRENT_TIMESTAMP");

        $collectionScheduled = R::find("waste_collection", "status = ? and waste_collector = ?", [2, $user->id] );

        $this->LoadView('waste-collection/waste-collection', [
            'user' => $user,
            'openCollections' => $openCollections,
            'collectionScheduled' => $collectionScheduled
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

        $previusCollections = R::find('waste_collection', 'user_id = ? and status not in (1,2)', [$user->id]);

        $wasteCollectionOnGoing = R::findOne('waste_collection', 'user_id = ? and status in (?, ?)', [$user->id, 1, 2]);

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
        $address = $address->id;

        if (empty($address)) {
            $address = $this->createAdress($user->id);
        }

        $collection = R::xdispense("waste_collection");
        $collection->import($_POST, "description, weight");
        $collection->user_id = $user->id;
        $collection->collection_time = $_POST["datePicker"] . ' ' . $_POST["timePicker"];

        $collection = R::store($collection);

        $adressCollection = R::xdispense("address_collection");
        $adressCollection->collection_id = $collection;
        $adressCollection->address_id = $address;
        
        R::store($adressCollection);
        
        $this->response(201);
    }

    public function validateRequest() {
        if (empty($_POST["description"]) || empty($_POST["weight"]) || empty($_POST["cep"]) || empty($_POST["number"])) {
            $this->hanndleError(400, "missing information");
        }
    }

    public function addressRegistered($userId) {
        return R::findOne("address", "user_id = ? and cep = ?", [$userId, $_POST["cep"]]);
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

    /*
    * /cancelcollection
    */
    public function cancelEvent ($request) {
        $colletion = R::load("waste_collection", $request["id"]);

        $colletion->status = 3;

        $user = $this->getUserAuth();

        if ($user->type == 2)  {
            $colletion->status = 1;
            $colletion->waste_collector = null;
        }

        $colletion->denny_reason = $_POST["denny_reason"];
        R::store($colletion);
        $this->response("200", "canceled");
    }

    /*
    * /collection/{collection_id}
    */
    public function collectionDetails ($request) {
        $collection = R::load("waste_collection", $request["collection_id"]);

        if (!$collection) {
            $unauthorized = new UnauthorizedController();
            $unauthorized->index();
        }

        $user = $this->getUserAuth();

        if ($user->type == 2){
            if (!empty($collection->waste_collector) && $collection->waste_collector != $user->id) {
                $unauthorized = new UnauthorizedController();
                $unauthorized->index();
            }
        }

        $this->LoadView('waste-collection/waste-collection-details', [
            'user' => $user,
            'collection' => $collection
        ]);
    }

    public function acceptCollection($request) {
        $collection = R::load("waste_collection", $request["collection_id"]);

        if (!$collection) {
            $unauthorized = new UnauthorizedController();
            $unauthorized->index();
        }

        $user = $this->getUserAuth();

        if($user->haveCollectionOnTime($collection->collection_time)){
            $this->hanndleError(400, "is bussy on that time");
        }        


        $collection->waste_collector = $user->id;
        $collection->status = 2;
        $collection->code = $this->generateRandomString(4);

        R::store($collection);
    }

    public function generateRandomString($length) {
        $randomCode = '';
        for ($i = 0; $i < $length; $i++) {
          $randomCode .= rand(0, 9);
        }
        return $randomCode;
    }

    public function collectionInfo() {
        $user = $this->getUserAuth();

        $this->LoadView('waste-collection/waste-collection-info', [
            'user' => $user
        ]);

    }

    public function currentCollection() {
        $user = $this->getUserAuth();   

        $collectionOnGoing = R::findOne('waste_collection', 'user_id = ? and status in (?, ?)', [$user->id, 1, 2]);

        $this->LoadView('waste-collection/waste-current', [
            'user'=> $user,
            'collection'=> $collectionOnGoing
        ]);
    }  
    
    public function collectionHistory(){
        $user = $this->getUserAuth(); 

        $collectionHistory = R::find('waste_collection', 'user_id = ? and status not in (?, ?)', [$user->id,1, 2]);

        $this->LoadView('waste-collection/waste-history', [
            'user'=> $user,
            'history'=> $collectionHistory
        ]);
    }

    /*
    * /verifycode/{collection_id}
    */
    public function verifycode($request) {
        $collection = R::load("waste_collection", $request["collection_id"]);

        if($_POST["code"] == $collection->code) {
            $collection->status = 4;
            R::store($collection);
            $this->response("200", "canceled");
        }

        $this->hanndleError(422, "codigo invalido");
    }
}
