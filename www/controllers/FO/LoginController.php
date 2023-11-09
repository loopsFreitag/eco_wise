<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../bundles/UtilisBundle/utilis.php");
require_once(__DIR__ . "/../../models/PersonModel.php");
require_once(__DIR__ . "/../Controller.php");


class LoginController extends Controller {

    use RenderView;
    
    public function singup () {
        $this->LoadView('singup/singup');
    }

    public function login () {
        $this->LoadView('login/login');
    }

    public function loginValidataion() {

        if (!empty($_POST["password"]) && !empty($_POST["email"])) {
            $user = R::findOne('person', "email = ?" , [$_POST["email"]]);
        
            if ($user && password_verify($_POST['password'], $user->password)) {
                session_start();
    
                session_regenerate_id();
                $_SESSION["user_id"] = $user->id;
    
                header("Location: /site/home");
                exit();
            }
        }

        $this->LoadView('login/login', [
            'is_invalid' => true,
        ]);
        
    }

    public function validateSingUp (){
        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) 
        || empty($_POST["password_confirmation"])) {
            die("missing fields");
        }

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("invalid email");
        }

        $existing = R::findOne('person', "email = ?" , [$_POST["email"]]);

        if ($existing){
            die('email already registered');
        }


        if (strlen($_POST["password"]) < 8) {
            die("Password must be at least 8 chars long");
        }

        if ( !preg_match("/[a-z]/i", $_POST["password"])) {
            die("password must contain at least one letter");
        }

        if ( !preg_match("/[0-9]/", $_POST["password"])) {
            die("password must contain at least one number");
        }

        if ($_POST["password"] !== $_POST["password_confirmation"]) {
            die("passwords must match");
        }

        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


        $person = R::dispense('person');
        $person->name = $_POST["name"];
        $person->email = $_POST["email"];
        $person->password = $password;

        $user = R::dispense('user');
        $user->type = 1;
        $user->status = 1;
        $user->person = $person;

        $beans = [$person, $user];
        R::storeAll($beans);
        $this->LoadView('login/login');
    }

    public function logout() {
        session_start();
        session_destroy();
        $this->LoadView('login/login');
    }
}