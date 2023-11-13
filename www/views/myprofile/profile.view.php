<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Perfil</title>
</head>
<style>
    * {
        font-family: 'Lato', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
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

    /* =========================== usuario ===========================*/
    .perfil-usuario {
        display: flex;
        justify-content: center;
        padding-top: 6em;
    }

    .container {
        display: flex;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        width: 80em;
        height: 40em;

    }

    .usuario {
        flex-direction: column;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30%;
    }


    .opcao-usuario {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2em 2em 0;
        font-size: 20px;
    }

    .input2 {
        padding-left: 2em;
    }

    .imagem {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nome-imagem p {
        text-align: center;
        padding-top: 0.5em;
        line-height: 0.7;
    }

    .nome-imagem p:first-of-type {
        padding-top: 1em;
    }

    .imagem img {
        width: 10em;
    }

    input[type="text"],
    input[type="tel"],
    input[type="password"],
    input[type="date"] {
        width: 90%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .endereco,
    .dados {
        width: 35%;
    }

    .endereco-container,
    .dados-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .endereco-interno,
    .dados-interno {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2em;
        text-transform: capitalize;
    }

    .endereco-interno,
    .dados-interno {
        padding: 2em 2em 0;
    }

    .endereco {
        background-color: var(--cor-4);
        color: white;
    }

    .dados-interno p,
    .endereco-interno p {
        font-weight: bold;
    }

    .botao {
        display: flex;
        justify-content: center;
    }


    .button-endereco,
    .button-dados {
        outline: none;
        width: 50%;
        padding: 10px;
        font-size: 15px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 2em;
        border: none;
    }

    .button-endereco:hover,
    .button-dados:hover {
        cursor: pointer;
        background-color: grey;
        color: white;
    }

    .modal {
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    /* Estilos do conteúdo do modal */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        /* Adjust the percentage as needed */
        border: 1px solid #888;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 35em;
        padding: 2em;
    }

    /* Estilos para o botão de fechar */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<body>
    <?php include_once(__DIR__ . "/../header/header.php") ?>
    <section class="perfil-usuario">
        <div class="container">
            <div class="usuario">
                <div class="nome-imagem">
                    <div class="imagem">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Breezeicons-actions-22-im-user.svg/1200px-Breezeicons-actions-22-im-user.svg.png" alt="">
                    </div>
                    <p style=" text-transform:capitalize;"><?= $user->person->name ?></p>
                    <p><?= $user->person->email ?></p>
                    <p><?= $user->person->document ?></p>
                </div>

            </div>

            <div class="dados">
                <div class="dados-container">
                    <form action="" id="profile-info">
                        <?php if (empty($user->person->document)) : ?>
                            <div class="dados-interno">
                                <p>CPF</p>
                                <input type="text" name="document">
                            </div>
                        <?php endif ?>

                        <div class="dados-interno">
                            <p>Data de nascimento</p>
                            <input type="date" name="birth_date" value="<?= ($user->person->birth_date) ?: '' ?>">
                        </div>

                        <div class="dados-interno">
                            <p>pais</p>
                            <input type="text" name="country" value="<?= ($user->person->country) ?: '' ?>">
                        </div>

                        <div class="opcao-usuario">
                            <div class="input1">
                                <input type="radio" id="option1" name="type" value="1" <?= ($user->type == 1) ? 'checked' : '' ?>>
                                <label for="option1" class="label1">Cliente</label><br>
                            </div>
                            <div class="input2">
                                <input type="radio" id="option2" name="type" value="2" <?= ($user->type == 2) ? 'checked' : '' ?>>
                                <label for="option2" class="label2">Coletor</label><br>
                            </div>
                        </div>

                        <div class="botao">
                            <button type="button" class="button-dados" onclick="updateProfile()">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="endereco">
                <div class="endereco-container">
                    <form action="" id="">
                        <div class="endereco-interno">
                            <p>cep</p>
                            <input type="text" name="cep">
                        </div>
                        <div class="endereco-interno">
                            <p>numero</p>
                            <input type="text" name="number">
                        </div>
                        <div class="endereco-interno">
                            <p>complemento</p>
                            <input type="text" name="adjunct">
                        </div>
                        <div class="botao">
                            <button type="button" class="button-endereco">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <div id="ModalError" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="error-message"></p>
        </div>
    </div>


</body>

<script>
    function updateProfile() {
        url = `/updateuser`

        var form = document.getElementById("profile-info")

        var formData = new FormData(form)

        fetch(url, {
                method: 'POST',
                body: formData,
            })
            .then(function(response) {
                return response.json()
            })
            .then(function(data) {
                if ('reason' in data) {
                    var modal = document.getElementById("ModalError")
                    var errorParagraph = document.getElementById("error-message")

                    errorParagraph.innerHTML = data.reason
                    modal.style.display = "block"
                    return
                }

                if ("message" in data) {
                    location.reload()
                }
            }).catch((error) => {});

    }

    var modalError = document.getElementById('ModalError');

    var closeError = modalError.getElementsByClassName('close')[0];

    window.onclick = function(event) {
        if (event.target == modalError) {
            modalError.style.display = "none";
        }
    }

    closeError.onclick = function() {
        modalError.style.display = 'none';
    }
</script>

</html>