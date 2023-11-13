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
    <title>Histórico</title>
</head>
<style>
    .container{
        display:flex;
        align-items:center;
        justify-content:center;
        height:50vh;
    }

    .intern{
        width:70%; 
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        box-sizing:border-box;
    }

    .card{
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

    .int-card1 h1,.data-horario h1{
        font-size:26px;
        font-weight:bold;
    }

    .int-card1 p,.data-horario p{
        font-size:20px;
        text-transform:capitalize;
        padding-top:0.4em;
    }

    .int-card1 p {
        max-width:5em;
    }

    .status,.data{
        font-size:20px;
    }
    
    .data2{
        font-size:20px;
    }

    @media (max-width: 950px) {
        .intern {
            width: 90%;
        }

        .int-card1 h1,
        .data-horario h1 {
            font-size: 20px;
        }

        .int-card1 p,
        .data-horario p,
        .status,
        .data,
        .data2 {
            font-size: 16px;
        }

    }

    @media (max-width: 700px) {
        .card {
            flex-direction: column;
            text-align: center;
        }

        .button button {
            margin-top: 1em;
        }
    }

    .nenhum-historico{
        padding:4em;
    }

    .nenhum-historico p{
        font-weight:bold;
        font-size:25px;
    }

    @media (max-width:500px){
        .nenhum-historico{
        padding:1em;
        }

        .nenhum-historico p{
            font-size:20px;
        }
    }
</style>
<body>
<?php include_once(__DIR__ . "/../header/header-waste-collection.php")?>

<div class="container">
    <div class="intern">
            <?php if (!empty($history)) : ?>
                <?php foreach ($history as $collection): ?>
                <div class="card">
                    <div class="int-card1">
                        <h1>Coleta de:</h1>
                        <p><?= $collection->description?></p>
                    </div>
                    <div class="data-horario">
                        <h1 class="data">Data:</h1>
                        <p class="data2"><?= date_format(DateTime::createFromFormat('Y-m-d H:i:s', $collection->collection_time), 'm-d-Y H:i') ?></p>
                    </div>
                        <?php if($collection->status == 3): ?>
                            <p class="status">Cancelado</p>
                        <?php else:?>
                            <p class="status">Entregue</p>
                        <?php endif?>   
                
                    <div class="button">
                        <button type="button" onclick="window.location='/collection/<?=$collection->id?>'">Abrir coleta</button>
                    </div>
                </div>
                <?php endforeach?>
            <?php else: ?>
                <div class="nenhum-historico">
                    <p>Nenhum histórico disponivel</p>
                </div>
            <?php endif ?>

    </div>
</div>

<script>
    function openDetails(collection_id){
        window.location.href=´/collection/${collection_id}´
    }
</script>
</body>
</html>