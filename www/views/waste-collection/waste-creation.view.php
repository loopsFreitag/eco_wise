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
    <title>Criar coleta</title>
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

    .criar-coleta {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40em;
    }

    .container {
        margin-top: 10em;
        display: flex;
        width: 90em;
        height: 42em;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }

    .dados-coleta {
        width: 55%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding-top: 5em;

    }

    .dados-coleta p {
        padding-top: 1rem;
        line-height: 1.2;
        font-size: 20px;
        text-align: justify;
        padding-left: 4em;
        padding-right: 4em;
    }

    .dados-coleta h1 {
        font-size: 30px;
        font-weight: 900;
    }

    .dados-coleta button {
        font-size: 16px;
        padding: 1em;
        border: none;
        font-size: 20px;
        background-color: var(--cor-3);
        border-radius: 10px;
        color: white;
        margin-top: 3em;
        width: 50%;
    }

    .dados-coleta button:hover {
        background-color: rgb(70, 129, 70);
        cursor: pointer;
    }


    .imagem-coleta img {
        max-width: 100%;
        height: 70%;
        padding-left: 5em;

    }


    .imagem-coleta {
        width: 45%;
        display: flex;
        align-items: center;
        justify-content: center;
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


    /* Estilos dos inputs */
    .input-dentro {
        flex: 0 0 30%;
        /* Define a largura dos inputs para 30% do espaço disponível */
        margin-bottom: 15px;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    #datePicker {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .botao-criar {
        display: flex;
        justify-content: center;
    }

    .criar {
        background-color: #4CAF50;
        /* Cor de fundo do botão */
        color: white;
        /* Cor do texto */
        padding: 15px 20px;
        /* Espaçamento interno do botão */
        border: none;
        /* Remove a borda */
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 60%;
    }

    .criar:hover {
        background-color: #45a049;
        /* Mudança de cor ao passar o mouse */
    }

    /* Estilos para a responsividade */
    @media (max-width: 768px) {
        .modal-content {
            width: 90%;
        }

        .input-dentro {
            flex: 0 0 100%;
            /* Para telas menores, faz os inputs ocuparem toda a largura */
        }
    }

    @media (max-width: 500px) {
        .modal-content {
            width: 70%;
        }

        .input-dentro {
            flex: 0 0 100%;
            /* Para telas menores, faz os inputs ocuparem toda a largura */
        }
    }
  
    @media(max-width:1000px){
        .dados-coleta p {
        font-size: 16px;
        padding-left: 2em;
        padding-right: 2em;
    }

        .imagem-coleta img{
            height:40%;
            padding-left:0;
        }
    }

    @media(max-width:700px){
        .dados-coleta h1 {
        font-size: 22px;
        font-weight: 900;
    }

        .dados-coleta p {
        font-size: 14px;     
    }

    .dados-coleta button {
        font-size: 14px;
        padding: 1em;
        width: 70%;
    }
    }

    @media (max-width:450px){
        .imagem-coleta img{
            height:45%;
            padding-left:0;
        }

        .dados-coleta h1 {
        font-size: 18px;
        font-weight: 900;
        text-align:center
    }

        .dados-coleta p {
        font-size: 14px;
        line-height: 1;
        padding-left: 1em;
        padding-right: 1em;
        }    
    }
    
</style>

<body>
    <?php include_once(__DIR__ . "/../header/header-waste-collection.php") ?>
    <section>
        <div class="criar-coleta">
            <div class="container">
                <div class="imagem-coleta">
                    <img src="https://img.freepik.com/premium-vector/delivery-boy-deliver-package_354831-58.jpg" alt="">
                </div>

                <div class="dados-coleta">
                    <h1>Quer Fazer a Diferença?</h1>
                    <p>Sua participação é essencial. Junte-se a nós e faça parte dessa mudança. Ao coletar seu lixo, você está contribuindo para um mundo mais limpo, para comunidades mais seguras e para a preservação da natureza. Cada garrafa plástica, cada papel ou embalagem recolhidos fazem a diferença.</p>
                    <p>Dê o primeiro passo para uma mudança significativa. Aperte o botão abaixo para se comprometer com a coleta do seu lixo e inspire outros a fazerem o mesmo. Juntos, podemos criar um impacto positivo duradouro. Não subestime o poder da sua ação. Vamos começar!</p>
                    <button onclick="showCollectionCreationModal()">Coletar Meu Lixo</button>
                </div>
            </div>
        </div>
    </section>


    <div id="ModalFormCollection" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>

            <form id="wasteCollectionCreation">
                <div class="input-dentro">
                    <label for="description">Descição:</label>
                    <textarea name="description" id="description" rows="4" cols="50"></textarea>
                </div>

                <div class="input-dentro">
                    <label for="weight">Peso (Kg):</label>
                    <input type="number" step="0.1" min="p" name="weight" id="weight" onkeypress="return isNumberKey(event)">
                </div>

                <div class="input-dentro">
                    <label for="datePicker">Selecione a data da coleta:</label>
                    <input type="date" id="datePicker" name="datePicker" value="<?= date('Y-m-d'); ?>" min="<?= date('Y-m-d'); ?>" required>
                </div>


                <div class="input-dentro">
                    <label for="timePicker">Selecione o horario da coleta:</label>
                    <select id="timePicker" name="timePicker" required>
                        <?php
                        for ($hour = 0; $hour < 24; $hour++) {
                            for ($minute = 0; $minute < 60; $minute += 30) {
                                $time = sprintf('%02d:%02d', $hour, $minute);
                                echo "<option value=\"$time\">$time</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="input-dentro">
                    <label for="dropdownaddress">Selecione ou adicione um novo endereço:</label>
                    <select id="dropdownaddress" name="dropdownaddress">
                        <?php $addresses = R::find('address', 'user_id = ? and status = ?', [$user->id, 1]); ?>
                        <option value=""></option>
                        <?php foreach ($addresses as $address) : ?>
                            <option value="<?= $address->id ?>"><?= $address->address ?>, <?= $address->neighborhood ?>, <?= $address->number ?>, <?= $address->adjunct ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="input-dentro">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" placeholder="Digite o CEP" onfocusout="getCep()" required>

                    <label for="address">Logradouro:</label>
                    <input type="text" id="address" name="address" readonly>

                    <label for="number">Numero:</label>
                    <input type="text" id="number" name="number">

                    <label for="adjunct">Complemento:</label>
                    <input type="text" id="adjunct" name="adjunct">

                    <label for="neighborhood">Bairro:</label>
                    <input type="text" id="neighborhood" name="neighborhood" readonly>

                    <label for="city">Cidade:</label>
                    <input type="text" id="city" name="city" readonly>

                    <label for="uf">Estado:</label>
                    <input type="text" id="uf" name="uf" readonly>
                </div>

                <div class="botao-criar">
                    <button type="button" onclick="submitCollectionCreation()" class="criar">Criar Pedido</button>
                </div>
            </form>
        </div>
    </div>

    <div id="ModalError" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="error-message"></p>
            <p>Você pode adicionar as informaçoes faltantes <a href="/profile">aqui</a></p>
        </div>
    </div>


    <script>
        function showCollectionCreationModal() {
            url = `/verifyuser`

            fetch(url)
                .then(function(response) {
                    if (response.status === 200 || response.status === 428) {
                        return response.json()
                    }
                    throw new Error('Request failed with status: ' + response.status)
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
                        var modal = document.getElementById("ModalFormCollection")
                        modal.style.display = "block"
                    }
                })
                .catch((error) => {
                    console.log(error)
                });
        }

        function cancelCollectionCreation(collection_id) {
            var form = document.getElementById("wasteCollectionCancelation")
            url = `/cancelcollection/${collection_id}`

            var formData = new FormData(form)

            fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                .then(function(response) {
                    if (response.status === 200) {
                        return response.json()
                    }
                    throw new Error('Request failed with status: ' + response.status)
                })
                .then(function(data) {
                    location.reload()
                })
                .catch((error) => {
                    console.log(error)
                });
        }

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            var inputValue = evt.target.value

            if ((charCode >= 48 && charCode <= 57) || charCode == 8 || (charCode == 46 && inputValue.indexOf('.') === -1)) {
                if (inputValue.indexOf('.') !== -1 && inputValue.split('.')[1].length >= 1) {
                    return false
                }
                return true
            }

            return false
        }

        function fillFormFields(data) {
            if (data.erro) {
                alert("CEP não encontrado")
            } else {
                document.getElementById("address").value = data.logradouro
                document.getElementById("neighborhood").value = data.bairro
                document.getElementById("city").value = data.localidade
                document.getElementById("uf").value = data.uf
            }
        }

        function getCep() {
            const cepInput = document.getElementById("cep").value;
            const url = `https://viacep.com.br/ws/${cepInput}/json/`

            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    fillFormFields(data)
                })
                .catch((error) => {
                    console.error("Erro na requisição:", error)
                })
        }

        function submitCollectionCreation() {
            var form = document.getElementById('wasteCollectionCreation')

            var formData = new FormData(form)

            url = '/createwastecollection'

            fetch(url, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => {
                    return response.json()

                })
                .then(data => {
                    if ('reason' in data) {
                        var modal = document.getElementById("ModalError")
                        var errorParagraph = document.getElementById("error-message")

                        errorParagraph.innerHTML = data.reason
                        modal.style.display = "block"
                        return
                    }

                    if ("message" in data) {
                        window.location.href = "/wastecollectioncurrent"
                    }
                })
                .catch(error => {
                    console.error('Fetch Error:', error)
                });
        }

        // Get the modal elements
        const modalError = document.getElementById('ModalError');
        const modalFormCollection = document.getElementById('ModalFormCollection');


        // Get the span elements that close the modals
        const spanFormCollection = document.getElementsByClassName("close")[0];
        const spanError = document.getElementsByClassName("close")[1];

        // When the user clicks on the span, close the modal
        spanError.onclick = function() {
            modalError.style.display = "none";
        }

        spanFormCollection.onclick = function() {
            modalFormCollection.style.display = "none";
        }

        // When the user clicks outside the modal, close it
        window.onclick = function(event) {
            if (event.target == modalError) {
                modalError.style.display = "none";
            } else if (event.target == modalFormCollection) {
                modalFormCollection.style.display = "none";
            }
        }
    </script>
</body>

</html>