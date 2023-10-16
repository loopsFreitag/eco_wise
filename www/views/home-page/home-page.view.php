<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
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
        <li><?= htmlspecialchars($user->person->name)  ?></li>
    <?php endforeach ?>
</body>
</html>
