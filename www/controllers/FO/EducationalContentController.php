<?php

require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../Controller.php");

class EducationalContentController extends Controller
{

    use RenderView;

    public function acidRainView()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('educational-content/acidrain', [
            'user' => $user
        ]);
    }

    public function wildfire()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('educational-content/wildfire', [
            'user' => $user
        ]);
    }

    public function deforestation()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('educational-content/deforestation', [
            'user' => $user
        ]);
    }

    public function pollution()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('educational-content/pollution', [
            'user' => $user
        ]);
    }

    public function recycling()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('educational-content/recycling', [
            'user' => $user
        ]);
    }

    public function collectionInfo()
    {
        session_start();
        $user = R::load('user', $_SESSION["user_id"]);

        $this->LoadView('educational-content/educational-content', [
            'user' => $user
        ]);
    }
}
