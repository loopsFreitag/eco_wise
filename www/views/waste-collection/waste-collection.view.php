<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coletas disponiveis</title>
</head>

<style>
.container{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    padding-top:4em;
}

.interno-container{
    width:60%;
    display:flex;
    justify-content:center;
    flex-direction:column;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    padding:2em;
}

.interno-container h1{
    text-align:center;
    font-size:40px;
}

.section{
    padding-top:1em;
    list-style-type:none;
}

.section:last-of-type{
    padding-top:3em;
}

.tamanho,.tamanho2{
    margin:1em;
    padding:1em;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid silver;
}

.button button{
    border:none;
    padding:1em;
    font-weight:bold;
    border-radius:10px;
    background-color:#2caaa0;
    color:white;
}

.button button:hover{
    background-color:#0f6a67;
    cursor:pointer;
}

.coleta h1,.local h1{
        font-size:26px;
        font-weight:bold;
    }

    .coleta p,.local p{
        font-size:20px;
        text-transform:capitalize;
        padding-top:0.5em;
    }

    .status,.data{
        font-size:20px;
    }
    
    .data2{
        
        font-size:20px;
    }

    .titulo{
        color:#0f6a67;
    }

    .coletas-disponiveis,.coletas-marcadas{
        margin:2em;
        font-weight:bold;
        font-size:25px;
        border-bottom:1px solid silver;
        text-align:center;
        text-transform:justify;
    }

    @media (max-width:1000px){
        .tamanho,.tamanho2{
            width: 100%;
            height: auto;
            flex-direction: column;
        }

        .coleta h1,.local h1{
            font-size: 22px;
        }

        .coleta p,.local p{
            font-size:18px;
            padding-bottom:1em;
        }
        
    }

    @media (max-width:768px){
        .interno-container h1{
            font-size:30px;
            font-weight:bold;
        }

        .coleta h1,.local h1{
            font-size: 22px;
        }

        .interno-container{
            width:90%;
        }
    }
</style>

<body>
<?php include_once(__DIR__ . "/../header/header-waste-collection.php")?>
<div class="container">
    <div class="interno-container">
        <h1 class="titulo">Coletas Disponíveis</h1>

        <div  class="section">
            <?php if (!empty($openCollections)) : ?>
            <?php foreach ($openCollections as $collections) : ?>
                <div class="tamanho">
                    <?php

                    $sql = R::getAll("SELECT a.id
                                        FROM waste_collection wc
                                        JOIN address_collection ac ON wc.id = ac.collection_id
                                        JOIN address a ON ac.address_id = a.id
                                        WHERE wc.id = :wc_id", [":wc_id" => $collections->id]);

                    $address = R::load("address", $sql[0]["id"]);

                    ?>
                    <div class="coleta">
                        <h1>Coleta as:</h1>
                        <p><?= $collections->collection_time ?></p>
                    </div>
                    <div class="local">
                        <h1>Em:</h1>
                        <p><?= $address->neighborhood?></p>
                    </div>

                    <div class="button">
                        <button type="button" onclick="window.location='/collection/<?=$collections->id?>'">Detalhes</button>
                    </div>
                </div>
            <?php endforeach ?>
            <?php else: ?>
            <div class="coletas-disponiveis">
                <h3>Sem coletas disponiveis</h3>
            </div>
            <?php endif ?>

        </div>

        <div class="section">
            <?php if (!empty($collectionScheduled)) : ?>
            <h1 class="titulo">Coletas Marcadas</h1>
            <?php foreach ($collectionScheduled as $collections) : ?>
                <div class="tamanho2">
                <?php
                $sql = R::getAll("SELECT a.id
                                    FROM waste_collection wc
                                    JOIN address_collection ac ON wc.id = ac.collection_id
                                    JOIN address a ON ac.address_id = a.id
                                    WHERE wc.id = :wc_id", [":wc_id" => $collections->id]);

                $address = R::load("address", $sql[0]["id"]);?>
                    <div class="coleta">
                        <h1>Coleta as:</h1>
                        <p><?= $collections->collection_time ?></p>
                    </div>
                    <div class="local">
                        <h1>Em:</h1>
                        <p><?= $address->neighborhood?></p>
                    </div>

                    <div class="button">
                        <button type="button" onclick="window.location='/collection/<?=$collections->id?>'">Detalhes</button>
                    </div>
                </div>
            <?php endforeach ?>
            <?php else: ?>
            <div class="coletas-marcadas">
                <h3>Sem coletas marcadas</h3>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>
</body>

<script>

</script>

</html>