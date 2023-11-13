<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Detalhes</title>
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

.container{
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
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
    margin: 5% auto; /* Adjust the percentage as needed */
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
    flex: 0 0 30%; /* Define a largura dos inputs para 30% do espaço disponível */
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

.coletar{
    outline:none;
    border:none;
    border-bottom:1px solid black;
}


.cancel{
    border:none;
    padding:1em;
    
}

.button button{
    border:none;
    padding:1em;
    margin-top:0.5em;
    background-color:#16988b;
    color:white;
    border-radius:10px;
}

.button button:hover{
    background-color:#0f6a67;
    cursor:pointer;
}
</style>
<body>
<?php include_once(__DIR__ . "/../header/header-waste-collection.php")?>
    <div class="container">
        <div class="modal-content">
            <?php if ($collection) : ?>
                <form>
                    <?php if($user->type == 1):?>
                        <?php if (!empty($collection->waste_collector)) : ?>
                            <?php $collector = R::load("user",$collection->waste_collector)?>
                            <div class="input-dentro">
                                <label for="collector">Nome do Coletor:</label>
                                <input type="text" value="<?= $collector->person->name ?>" readonly>
                            </div>
                        <?php else : ?>
                            <div class="input-dentro">
                                <label for="collector">Nome do Coletor:</label>
                                <input type="text" value="Nenhum coletor ainda selecionou essa coleta" readonly class="coletar" style="border:2px solid red;">
                            </div>
                        <?php endif ?>
                   

                        <?php if (!empty($collection->code)) : ?>
                            <div class="input-dentro">
                                <label for="code">Forneça esse codigo ao coletor:</label>
                                <input value="<?= $collection->code ?>" readonly>
                            </div>
                        <?php endif ?>
                    <?php endif ?>
                        <div class="input-dentro">
                            <label for="description">Descrição:</label>
                            <textarea rows="4" cols="50" readonly><?= $collection->description ?></textarea>
                        </div>
                    
                
                        <div class="input-dentro">
                            <label for="weight">Peso (Kg):</label>
                            <input type="number" step="0.1" min="p" value="<?= $collection->weight ?>" readonly>
                        </div>
                        <div class="input-dentro">
                            <label for="datePicker">Data e horario da coleta:</label>
                            <input id="datePicker" name="datePicker" value="<?= date_format(DateTime::createFromFormat('Y-m-d H:i:s', $collection->collection_time), 'm-d-Y H:i') ?>" readonly>
                        </div>
                    <?php

                    $sql = R::getAll("SELECT a.id
                                        FROM waste_collection wc
                                        JOIN address_collection ac ON wc.id = ac.collection_id
                                        JOIN address a ON ac.address_id = a.id
                                        WHERE wc.id = :wc_id", [":wc_id" => $collection->id]);

                    $address = R::load("address", $sql[0]["id"]);

                    ?>
                    <label for="cep">CEP:</label>
                    <input type="text" value="<?= $address->cep ?>" readonly>

                    <label for="address">Logradouro:</label>
                    <input type="text" value="<?= $address->address ?>" readonly>

                    <label for="number">Numero:</label>
                    <input type="text" value="<?= $address->number ?>" readonly>
                    <?php if (!empty($address->adjunct)) : ?>
                        <label for="adjunct">Complemento:</label>
                        <input type="text" value="<?= $address->adjunct ?>" readonly>
                    <?php endif ?>

                    <label for="neighborhood">Bairro:</label>
                    <input type="text" value="<?= $address->cep ?>" readonly>

                    <label for="city">Cidade:</label>
                    <input type="text" value="<?= $address->city ?>" readonly>

                    <label for="uf">Estado:</label>
                    <input type="text" value="<?= $address->uf ?>" readonly>

                    <?php if ($collection->status != 4) : ?>
                        <div class="button">
                            <?php if($user->type == 2) : ?>
                                <?php if (empty($collection->waste_collector)) :?>
                                    <button type="button" onclick="acceptCollection(<?= $collection->id  ?>)">Aceitar solicitação</button>
                                <?php else: ?>
                                    <button type="button" onclick="opencancelModal()">Cancelar solicitação</button>
                                    <button type="button" onclick="openCollectionConfirmation()">Entregar coleta</button>
                                <?php endif ?>
                            <?php endif ?>
                        </div>
                    <?php endif ?>
                </form>
            <?php endif ?>
        </div>
    </div>

    <div id="ModalConfirmation" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="wasteCollectionCode">
                <label for="code">insira o codigo fornecido:</label>
                <input name="code">
                <?php if ($collection) : ?>
                    <button type="button" onclick="collectWaste(<?= $collection->id  ?>)">Encerrar coleta</button>
                <?php endif ?>
            </form>
        </div>
    </div>

    <div id="ModalError" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="error-message"></p>
        </div>
    </div>

    <div id="ModalCancel" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="wasteCollectionCancelation">
                <label for="denny_reason">Razão do cancelamento:</label>
                <input name="denny_reason">
                <?php if ($collection) : ?>
                    <button type="button" onclick="cancelCollectionCreation(<?= $collection->id  ?>)">Cancelar solicitação</button>
                <?php endif ?>
            </form>
        </div>
    </div>

    <script>
    function acceptCollection(collection_id) {
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
                    acceptRequestCollection(collection_id)
                }
            }).catch((error) => {
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
                window.location.href = "/wastecollection";
            }).catch((error) => {
                console.log(error)
            });

    }

    function acceptRequestCollection(collection_id) {
        url = `/acceptcollection/${collection_id}`

        fetch(url)
            .then(function(response) {
                if (response.status === 200) {
                    window.location.href = "/wastecollection"
                }
            }).catch((error) => {
                console.log(error)
            });

    }

    function collectWaste(collection_id) {
        var form = document.getElementById("wasteCollectionCode")
        url = `/verifycode/${collection_id}`

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
                    acceptRequestCollection(collection_id)
                    window.location.href = "/wastecollection";
                }
            }).catch((error) => {});
    }

    function opencancelModal() {
        var modal = document.getElementById("ModalCancel")
        modal.style.display = "block"
    }
    
    function openDetailsModel() {
        var modal = document.getElementById("ModalCollectionDetails")
        modal.style.display = "block"
    }

    function openCollectionConfirmation() {
        var modal = document.getElementById("ModalConfirmation")
        modal.style.display = "block"
    }

    // Get the modals
    var modalConfirmation = document.getElementById('ModalConfirmation');
    var modalError = document.getElementById('ModalError');
    var modalCancel = document.getElementById('ModalCancel');

    // Get the close buttons
    var closeConfirmation = modalConfirmation.getElementsByClassName('close')[0];
    var closeError = modalError.getElementsByClassName('close')[0];
    var closeCancel = modalCancel.getElementsByClassName('close')[0];

    // When the user clicks the close button or outside the modal, close the modal
    window.onclick = function (event) {
        if (event.target == modalConfirmation) {
            modalConfirmation.style.display = 'none';
        }
        if (event.target == modalError) {
            modalError.style.display = 'none';
        }
        if (event.target == modalCancel) {
            modalCancel.style.display = 'none';
        }
    }

    // When the user clicks on the close button, close the modal
    closeConfirmation.onclick = function () {
        modalConfirmation.style.display = 'none';
    }
    closeError.onclick = function () {
        modalError.style.display = 'none';
    }
    closeCancel.onclick = function () {
        modalCancel.style.display = 'none';
    }
    </script>
</body>
</html>