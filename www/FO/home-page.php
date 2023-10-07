<?php
include '../index.php';

session_start();

$user = R::load('user', $_SESSION["user_id"]);

if (!isset($_SESSION["user_id"]) && !$user->id) {
    header('Location: ../login.php');
} 
?>

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
    <p><a href="logout.php">Log Out</a></p>
</body>
</html>