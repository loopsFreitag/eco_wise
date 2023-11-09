<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Cadastro</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --cor-1: #508b5b;
        --cor-2: #4da2e3;
        --cor-3: #40bf80;
        --cor-4: #218c75;
        --cor-5: #207e20;
        --cor-6: #3e9037;
        --cor-7: #2c52ed;
        --cor-8: #8ec2c7;

    }


    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        background-color: #f5f5f5;
        height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        border-radius: 10px;
        min-width: 70%;
        overflow: auto;
        min-height: 70%;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        animation: fade-up 0.4s;
    }

    /* Animação do container*/
    @keyframes fade-up {
        0% {
            opacity: 0;
            transform: translateY(100px) scale(0.9);
        }

        100% {
            opacity: 1;
            transform: translateY(0px) scale(1);
        }
    }


    .container h1 {
        text-align: center;
        margin-bottom: 1rem;
        font-size: 40px;
    }

    .titulo {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: var(--cor-2);
        width: 40%;
        height: auto;
        color: white;
    }

    .titulo p {
        font-size: 20px;
        padding-bottom: 5px;
    }

    form {
        text-align: center;
        display: grid;
        padding-left: 20px;
        width: 70%;

    }

    .titulo-form {
        height: 30%;
        margin-top: 70px;
        font-weight: 800;
        color: var(--cor-6);
    }

    .parte-inputs {
        display: grid;
        grid-template-columns: 2fr 2fr;
        justify-content: center;
        gap: 20px;
    }

    .dentro-inputs {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .span-required {
        display: none;
        text-align: start;
        color: red;
        margin: 5px;

    }

    .inputs {
        outline: none;
        border: 1px solid var(--cor-5);
        border-radius: 5px;
        width: 80%;
        padding: 20px 10px 20px;

    }

    .botao {
        max-height: 40%;
    }

    .botao-cadastrar {
        padding: 1rem;
        font-size: 1.2rem;
        outline: none;
        border: none;
        border-radius: 10px;
        margin-top: 4rem;
        cursor: pointer;
        width: 70%;
        background-color: var(--cor-6);
        color: white;
    }

    .botao-cadastrar:hover {
        background-color: #ffffff;
        border: 1px solid var(--cor-6);
        color: var(--cor-6);
    }

    .login {
        margin-top: 2rem;
        padding: 1rem;
        border: none;
        width: 70%;
        border-radius: 10px;
        cursor: pointer;
        background-color: white;
    }

    .login:hover {
        background-color: var(--cor-7);
        color: white;
    }

    .login a {
        text-decoration: none;
        color: black;
        font-size: 15px;
    }

    label {
        font-size: 20px;
    }

    .home {
        display: flex;
        position: absolute;
        top: 0;
        padding: 10px;
        font-size: 30px;
        width: 100%;
        background-color: #f5f5f5;
    }

    .home a {
        padding-left: 5px;
        text-decoration: none;
        color: var(--cor-2);
    }





    @media (max-width:900px) {
        label {
            font-size: 15px;
        }

        .inputs {
            width: 90%;
            padding: 15px 5px 15px;
        }

        .container {
            min-height: 70%;
        }

        .botao-cadastrar {
            font-size: 15px;
            padding: 0.5rem;
        }

    }

    @media (max-width:565px) {
        .container h1 {
            font-size: 30px;
        }

        .titulo p {
            font-size: 15px;
            padding-bottom: 5px;
        }

        .botao-cadastrar {
            font-size: 15px;
            padding: 0.5rem;
        }

        .span-required {
            font-size: 12px;
        }
    }
</style>

<body>
    <div class="home">
        <i class="fa-solid fa-house" style="color: #4377d0;"></i>
        <a href="/home.html" class="texto-home">Home</a>
    </div>
    <div class="container">
        <div class="titulo">
            <h1>Login</h1>
            <p>Ja possui um cadastro?</p>
            <p>Realize o login abaixo</p>
            <button class="login" onclick="window.location.href = 'login.html'">Login</button>
        </div>
        <form action="/singupvalidation" method="post" onsubmit="return validateRequest()">
            <div class="titulo-form">
                <h1>Cadastre-se</h1>
            </div>
            <div class="parte-inputs">
                <div>

                    <div class="dentro-inputs">
                        <label>Nome:</label>
                        <input name="name" type="text" class="inputs required" placeholder="Digite seu Nome" id="nome" oninput="nameValidate()">
                        <span class="span-required">Digite um nome válido</span>
                    </div>
                </div>

                <div>
                    <div class="dentro-inputs">
                        <label>Email:</label>
                        <input name="email" type="email" class="inputs required" placeholder="Digite um email" id="email" oninput="emailValidate()">
                        <span class="span-required">Digite um email válido</span>
                    </div>
                </div>

                <div>
                    <div class="dentro-inputs">
                        <label>Senha:</label>
                        <input name="password" type="password" class="inputs required" placeholder="Digite sua senha" id="senha" oninput="mainPasswordValidade()" oninput="comparePassword()">
                        <span class="span-required">Digite uma senha </span>
                    </div>
                </div>

                <div>
                    <div class="dentro-inputs">
                        <label>Confirme sua senha:</label>
                        <input name="password_confirmation" type="password" class="inputs required" placeholder="Digite sua senha novamente" id="confirmasenha" oninput="comparePassword()">
                        <span class="span-required">Digite a confirmação de senha</span>
                        <span class="span-required">Digite a mesma senha do bloco anterior</span>
                    </div>
                </div>
            </div>
            <div class="botao">
                <button class="botao-cadastrar">Enviar</button>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        const form = document.getElementById('form');
        const campos = document.querySelectorAll('.required');
        const spans = document.querySelectorAll('.span-required');
        const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        function setError(index) {
            campos[index].style.border = '2px solid red';
            spans[index].style.display = 'block';
            return false
        }

        function removeError(index) {
            campos[index].style.border = '';
            spans[index].style.display = 'none';
            return true
        }


        function nameValidate() {
            if (campos[0].value.length < 3) {
                return setError(0);
            } else {
                return removeError(0);
            }
        }

        function emailValidate() {
            if (!emailRegex.test(campos[1].value)) {
                return setError(1); //false
            } else {
                return removeError(1); // true
            }
        }

        function mainPasswordValidade() {
            if (campos[2].value.length < 8) {
                return setError(2);
            } else {
                removeError(2);
                return comparePassword();
                
            }
        }

        function comparePassword() {
            if (campos[2].value == campos[3].value && campos[3].value.length >= 8) {
                return removeError(3);
            } else {
                return setError(3);
            }
        }

        function validateRequest() {
            if (!nameValidate() || !emailValidate() || !mainPasswordValidade() || !comparePassword()){
                return false
            }

            return true

        }


    </script>
</body>

</html>