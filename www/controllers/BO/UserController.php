<?php

require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../../bundles/RenderViewBundle/RenderViewBundle.php");
require_once(__DIR__ . "/../../models/UserModel.php");


class UserController extends Controller
{
    use RenderView;

    public function verifyuser() {
        $user = $this->getUserAuth();

        if (!$user->getDocument()) {
            $this->hanndleError(428, "Documet missing");
        }

        if (!$user->getCountry()) {
            $this->hanndleError(428, "Country missing");
        }

        if (!$user->getBirthDate()) {
            $this->hanndleError(428, "Birth date missing");
        }

        return $this->response("200", "No missing information");

    }

    public function myprofile() {
        $user = $this->getUserAuth();

        $this->LoadView("myprofile/profile",[
            "user" => $user,
        ]);
    }

    /*
    * /updateuser
    */
    public function updateUser() {
        $user = $this->getUserAuth();        
        $this->validateRequest($user);

        if ($user->person->birth_date != $_POST["birth_date"]) {
            $user->person->birth_date = $_POST["birth_date"];
        }
    
        if ($user->person->country != $_POST["country"]) {
            $user->person->country = $_POST["country"];
        }

        if ($user->type != $_POST["type"]) {
            $user->type = $_POST["type"];
        }

        if (empty($user->person->document)) {
            if (isset($_POST["document"])) {
                if ($this->validateCpf($_POST["document"])) {
                    $user->person->document = $_POST["document"];
                }
            }
        }

        R::store($user);

        $this->response(200, "usuario atulizado");
    }

    public function validateRequest($user) {
        if($user->person->birth_date == $_POST["birth_date"] && $user->person->country == $_POST["country"] && $user->type == $_POST["type"]){
            $this->hanndleError(400, "Nenhuma informação foi alterada");
        }
    }

    public function validateCpf($cpf) {
        // Remover caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
        // Verificar se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }
    
        // Verificar se todos os dígitos são iguais, o que torna o CPF inválido
        if (preg_match('/^(\d)\1*$/', $cpf)) {
            return false;
        }
    
        // Calcular e verificar o primeiro dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += ($cpf[$i] * (10 - $i));
        }
        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : (11 - $resto);
    
        if ($cpf[9] != $digito1) {
            return false;
        }
    
        // Calcular e verificar o segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += ($cpf[$i] * (11 - $i));
        }
        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : (11 - $resto);
    
        if ($cpf[10] != $digito2) {
            return false;
        }
    
        // CPF válido
        return true;
    }

}