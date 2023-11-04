<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
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
    <h1>Pagina inicial</h1>
    <?php if (isset($user)) : ?>
        <p>Bem-vindo <?= htmlspecialchars($user->person->name) ?></p>
    <?php endif; ?>
    <p><a href="/logout">Log Out</a></p>

    <?php if ($user->type == 2) : ?>
        <p><a href="/wastecollection">Coleta de resíduos</a></p>
    <?php else: ?>
        <p><a href="/wastecollectioncreation">Solicitar coleta</a></p>
    <?php endif; ?>

    <div class="container">

        <div style="display:flex; flex-direction: column;" class="section">
        <h3>Entre em contato com outros coletores</h3>
            <?php foreach ($potentialFriends as $friend) : ?>
                <div class="tamanho">
                    <li>
                        <?= htmlspecialchars($friend->person->name)  ?>
                        <button onclick="sendFriendshipRequest(<?= $friend->id ?>)">Adicionar</button>
                    </li>
                </div>
            <?php endforeach ?>

        </div>
        
        <div style="display:flex; flex-direction: column;" class="section">
        <h3>Seus pedidos de amizades pendentes </h3>
            <?php foreach ($friendsPending as $friend) : ?>
                <div class="tamanho">
                    <li>
                        <?= htmlspecialchars(R::load("user", $friend->friend_id)->person->name)  ?>
                        <button onclick="dontDoShit(<?= $user->id ?>, <?= $friend->id ?>)">Cancelar</button>
                    </li>
                </div>
            <?php endforeach ?>

        </div>

        <div style="display:flex; flex-direction: column;" class="section">
        <h3>Coletores aguardando seu aceite</h3>
            <?php foreach ($friendsToAceppt as $friend) : ?>
                <div class="tamanho">
                    <li>
                        <?= htmlspecialchars(R::load("user", $friend->requester_id)->person->name)  ?>
                        <button onclick="acceptFriendShipRequest(<?= R::load("user", $friend->requester_id)->person->id ?>)">add</button>
                    </li>
                </div>
            <?php endforeach ?>

        </div>

    </div>

    <div class="container-2">
    <div class="section-2">
        <h3>Seus amigos</h3>
            <?php if($friends) : ?>
                <?php foreach ($friends as $friend) : ?>
                    <div class="tamanho">
                        <li>
                            <?= htmlspecialchars(R::load("user", $friend->id)->person->name)  ?>
                        </li>
                    </div>
                <?php endforeach ?>
            <?php endif; ?>
        </div>
    </div>

</body>

<script>
    function sendFriendshipRequest(friend_id) {
        url = `/addfriend/${friend_id}`

        fetch(url)
            .then(function(response) {
                if (response.status === 200) {
                    return response.json();
                } else {
                    throw new Error('Request failed with status: ' + response.status);
                }
            })
            .then(function(data) {
                console.log(data);

                location.reload()
            })
    }

    function acceptFriendShipRequest(friend_id) {
        url = `/acceptfriend/${friend_id}`

        fetch(url)
            .then(function(response) {
                if (response.status === 200) {
                    return response.json();
                } else {
                    throw new Error('Request failed with status: ' + response.status);
                }
            })
            .then(function(data) {
                console.log(data);

                location.reload()
            })

    }
</script>

</html>