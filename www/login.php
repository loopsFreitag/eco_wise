<?php
include 'index.php';

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = R::findOne('person', "email = ?" , [$_POST["email"]]);
    if ($user && password_verify($_POST['password'], $user->password)) {
        session_start();

        session_regenerate_id();
        $_SESSION["user_id"] = $user->id;
        header("Location: FO/home-page.php");
        exit;
    }
$is_invalid = true;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login</h1>

    <?php if ($is_invalid): ?>
        <em>Login invalido</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email" value=" <?php htmlspecialchars($_POST['email']) ?? "" ?>">

        <label for="password">senha</label>
        <input type="password" name="password" id="password">

        <button>Logar</button>
    </form>
</body>
</html>