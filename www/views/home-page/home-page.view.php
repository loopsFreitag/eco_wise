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
                <button onclick="addFriend()">add</button>        
            </li>
        </div>
    <?php endforeach ?>
</body>

<script>    
function addFriend() {
    fetch("/addfriend")
    .then(function (response) {
        if (response.status === 200) {
            return response.json(); // Parse the response as JSON
        } else {
            throw new Error('Request failed with status: ' + response.status);
        }
    })
    .then(function (data) {
        // Process the JSON data received from the backend
        console.log(data.key1); // Access data by key
    })
    .catch(function (error) {
        console.error(error);
    });
}
</script>
</html>
