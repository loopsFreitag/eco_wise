<?php

class Utilis {

    public function dd($value) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    
        die();
    }
}
