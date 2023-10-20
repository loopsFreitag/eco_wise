<?php
require_once(__DIR__ . "/../bundles/UtilisBundle/utilis.php");


class Model_Person extends RedBean_SimpleModel  {

    public function update() {
        $this->bean->updated_at = date('Y-m-d H:i:s');
    }
}
