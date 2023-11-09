<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coletas disponiveis</title>
</head>

<style>
    *{
        box-sizing: border-box;
        list-style-type:none;
    }


    .container {
        display: flex;
        max-width: 100%;
        justify-content: space-between;
    }
    .section{
        border: 2px solid black;
        max-width: 25%;

    }

    .tamanho li{
        padding: 20px;
        display: flex;
        justify-content: space-between;
    }

    .container-2 {
        display: flex;
        justify-content: center;
        padding-top: 2em;
    }

    .section-2{
        width: 100%;
        border: 2px solid black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
<h1>Coletas disponiveis</h1>
<?php if (isset($user)) : ?>
    <p>Bem-vindo <?= htmlspecialchars($user->person->name) ?></p>
<?php endif; ?>

<div style="display:flex; flex-direction: column;" class="section">
    <?php if (!empty($openCollections)) : ?>
    <h3>Coletas disponiveis</h3>
    <?php foreach ($openCollections as $collections) : ?>
        <div class="tamanho">
            <li>
            <?= $collections->id ?>
            <a href="/collection/<?= $collections->id ?>">Detalhes</a>
            </li>
        </div>
    <?php endforeach ?>
    <?php else: ?>
    <h3>Sem coletas disponiveis</h3>
    <?php endif ?>

</div>

<div style="display:flex; flex-direction: column;" class="section">
    <?php if (!empty($collectionScheduled)) : ?>
    <h3>Coletas disponiveis</h3>
    <?php foreach ($collectionScheduled as $collections) : ?>
        <div class="tamanho">
            <li>
            <?= $collections->id ?>
            <a href="/collection/<?= $collections->id ?>">Detalhes</a>
            </li>
        </div>
    <?php endforeach ?>
    <?php else: ?>
    <h3>Sem coletas marcadas</h3>
    <?php endif ?>

</div>

</body>

<script>

</script>

</html>