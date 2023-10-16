<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
    <h1>Cadastre-se</h1>

    <form action="/singupvalidation" method="post">
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="password">Confirme sua senha</label>
            <input type="password" name="password_confirmation" 
            id="password_confirmation">
        </div>

        <button>Cadastre-se</button>    
    </form>
</body>
</html>