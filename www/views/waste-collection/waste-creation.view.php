<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas coletas</title>
</head>

<style>
    * {
        box-sizing: border-box;
        list-style-type: none;
    }


    .container {
        display: flex;
        max-width: 100%;
        justify-content: space-evenly;
    }

    .section {
        border: 2px solid black;
        max-width: 25%;

    }

    .tamanho li {
        padding: 20px;
        display: flex;
        justify-content: space-between;
    }

    .container-2 {
        display: flex;
        justify-content: center;
        padding-top: 2em;
    }

    .section-2 {
        width: 100%;
        border: 2px solid black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
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
<h1>Suas coletas</h1>
<?php if (isset($user)) : ?>
    <p>Bem-vindo
        <?= htmlspecialchars($user->person->name) ?>
    </p>
<?php endif; ?>

<div class="container">

    <?php if ($wasteCollectionOnGoing) : ?>
        <div style="display:flex; flex-direction: column;" class="section">
            <h3>Coleta em andamento:</h3>
            <div class="tamanho">
                <li>
                    <?= $wasteCollectionOnGoing->id ?><button onclick="">Detalhes</button>
                </li>
            </div>
        </div>

    <?php else: ?>
        <div style="display:flex; flex-direction: column;" class="section">
            <h3>Solicite uma coleta</h3>
            <div class="tamanho">
                <li>
                    <button onclick="showCollectionCreationModal()">Solicitar coleta</button>
                </li>
            </div>
        </div>
    <?php endif ?>

    <div style="display:flex; flex-direction: column;" class="section">
        <h3>Suas coletas anteriores</h3>
        <?php foreach ($previusCollections as $collections) : ?>
            <div class="tamanho">
                <li>
                    <?= $collections->id ?>
                    <button onclick="">Detalhes</button>
                </li>
            </div>
        <?php endforeach ?>

    </div>

</div>

<div id="ModalError" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p id="error-message"></p>
        <p>Você pode adicionar as informaçoes faltantes <a href="/profile">aqui</a></p>
    </div>
</div>

<div id="ModalFormCollection" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>

        <form id="wasteCollectionCreation">
            <label for="description">Descição:</label>
            <textarea name="description" id="description" rows="4" cols="50">
            </textarea>

            <label for="weight">Peso (Kg):</label>
            <input type="number" step="0.1" min="p" name="weight" id="weight" onkeypress="return isNumberKey(event)">

            <label for="datePicker">Selecione a data da coleta:</label>
            <input type="date" id="datePicker" value="<?= date('Y-m-d'); ?>" min="<?= date('Y-m-d'); ?>" required>

            <label for="timePicker">Selecione o horario da coleta:</label>
            <select id="timePicker" required>
                <?php
                for ($hour = 0; $hour < 24; $hour++) {
                    for ($minute = 0; $minute < 60; $minute += 30) {
                        $time = sprintf('%02d:%02d', $hour, $minute);
                        echo "<option value=\"$time\">$time</option>";
                    }
                }
                ?>
            </select>

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

            <button type="button" onclick="submitCollectionCreation()">criar</button>
        </form>
    </div>
</div>

</body>

<script>

    function showCollectionCreationModal() {
        url = `/verifyuser`

        fetch(url)
            .then(function (response) {
                if (response.status === 200 || response.status === 428) {
                    return response.json()
                }
                throw new Error('Request failed with status: ' + response.status)
            })
            .then(function (data) {

                if('reason' in data){
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
            }).catch((error) => {
            console.log(error)
        });
    }

    var modalErr = document.getElementById("ModalError")
    var span = document.getElementsByClassName("close")[0]

    span.onclick = function() {
        modalErr.style.display = "none"
    }

    window.onclick = function(event) {
        if (event.target == modalErr) {
            modalErr.style.display = "none"
        }
    }

    var modal = document.getElementById("ModalFormCollection")
    var span = document.getElementsByClassName("close")[1]

    span.onclick = function() {
        modal.style.display = "none"
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none"
        }
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

    function submitCollectionCreation () {
        var form = document.getElementById('wasteCollectionCreation')

        var formData = new FormData(form)
        console.log(formData)

        url = '/createwastecollection'
       
        fetch(url, {
        method: 'POST',
        body: formData,
        })
        .then(response => {
        if (response.status === 201) {
            return response.json()
        } else {
            throw new Error('Network response was not ok')
        }
        })
        .then(data => {
        console.log(data)
        location.reload()
        })
        .catch(error => {
        console.error('Fetch Error:', error)
        });

    }

</script>

</html>
