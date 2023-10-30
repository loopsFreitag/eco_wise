<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
<body>
    <h1>Pagina inicial</h1>
    <?php if (isset($user)) : ?>
        <p>Bem-vindo <?= htmlspecialchars($user->person->name) ?></p>
    <?php endif; ?> 
    <p><a href="/logout">Log Out</a></p>

    <?php foreach ($friends as $friend) : ?>
        <div style="display:block;">
            <li>
                <?= htmlspecialchars($friend->person->name)  ?>
                <button onclick="addFriend(<?= $user->id ?>, <?= $friend->id ?>)">add</button>        
            </li>
        </div>
    <?php endforeach ?>
</body>

<script>    
function addFriend(user_id, friend_id) {
    url = `/addfriend/${user_id}/${friend_id}`

    fetch(url)
    .then(function (response) {
        if (response.status === 200) {
            return response.json();
        } else {
            throw new Error('Request failed with status: ' + response.status);
        }
    })
    .then(function (data) {
        console.log(data); 

        location.reload()
    })
}
</script>
</html>
