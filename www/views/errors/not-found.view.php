<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not found</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --cor-1: #508b5b;
    --cor-2: #4da2e3; 
    --cor-3: #40bf80;
    --cor-4: #218c75;
    --cor-5: #207e20;
    --cor-6: #3e9037;
    --cor-7: #2c52ed;
    --cor-8: #8ec2c7;

}

body{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f5f5;
}


.container{
    height: 30em;
    width: 35em;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}

.erro h1 {
    font-size: 10em;
    text-align: center;
}

.erro h2 {
    text-align: center;
    margin-bottom: 1em;
    font-size: 26px;
}

.erro p {
    font-size: 18px;
}

.botao-home{
    padding-top: 4em;
    width: 80%;
}

button{
    padding: 1em;
    width: 100%;
    border-radius: 10px;
    background-color: var(--cor-4);
    border: none;
    font-size: 18px;
    color: white;
}

button:hover {
    cursor: pointer;
    background-color: var(--cor-5);
}
</style>
<body>
    <div class="container">
        <div class="erro">
            <h1>404</h1>
            <h2>Opps! Página não encontrada</h2>
            <p>Desculpe-nos, a página que você está buscando não foi encontrada.</p>
        </div>
        <div class="botao-home">
            <button>Home</button>
        </div>
    </div>
</body>
</html>