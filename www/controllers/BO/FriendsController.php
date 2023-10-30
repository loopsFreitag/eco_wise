<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../bundles/UtilisBundle/utilis.php");

class FriendsController extends RenderView{

    public function add () {

        header('Content-Type: application/json');

        // Create an associative array with your data
        $responseData = array(
            'key1' => 'value1',
            'key2' => 'value2',
            // Add more data as needed
        );
        
        // Encode the array as JSON
        $jsonResponse = json_encode($responseData);
        
        // Return the JSON response
        echo $jsonResponse;
    }
}