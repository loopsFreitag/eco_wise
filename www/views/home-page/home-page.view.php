<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Colocar aqui o icone do Site-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>EcoWise</title>


</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
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


    /*===================== Começo do Header ===================== */
    header {
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        background-color: #ffffff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        padding: 0px 7%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
    }

    header .logo {
        font-weight: bolder;
        font-size: 35px;
        color: var(--cor-1);
        padding: 0.8em;
    }

    header .navbar ul {
        list-style: none;
    }

    header .navbar ul li {
        position: relative;
        float: left;
    }

    header .navbar ul li a {
        font-size: 20px;
        padding: 1.9em;
        color: #333;
        display: flex;
        border-radius: 25px;
    }

    .a-header::after {
    content: '';
    height: 2.5px;
    width: 0px;
    position: absolute;
    top: 3em;
    left: 10;
    transition: 0.4s ease;
    z-index:1001;
    background-color:var(--cor-5);
}

    .a-header:hover::after {
        width: 4em;
    }

    header .navbar ul li ul {
        position: absolute;
        left: 0;
        width: 200px;
        background: white;
        display: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
    }

    header .navbar ul li ul li {
        width: 100%;

    }

    header .navbar ul li ul li ul {
        left: 200px;
        top: 1px;
    }

    header .navbar ul li:focus-within>ul,
    header .navbar ul li:hover>ul {
        display: initial;
    }

    #menu-bar {
        display: none;
    }

    header label {
        font-size: 20px;
        color: var(--cor-3);
        cursor: pointer;
        display: none;
    }

    header div a {
        padding: 1.2em;
    }

    header .navbar ul li a .dropdown-icon {
        font-size: 18px;
        position: relative;
        right: -5px;
        transform: rotate(0deg);
        transition: 0.3s ease-in-out all;
    }

    .navbar .nav-links>.nav-link:hover .dropdown-icon {
        transform: rotate(180deg);
    }

    .login-header {
        display: flex;
        font-size: 20px;
    }

    .login-header button {
        padding: 1em;
        border: none;
        font-size: 20px;
        background-color: white;
        border-radius: 10px;
    }

    .login-header button:hover {
        cursor: pointer;
        color: white;
        background-color: #8ecae6;
        transition:ease 0.5s;
    }

    /* ===================== Fim do header ===================== */


    .row {
        display: flex;
        height: 53rem;
        align-items: center;
        background-color: #eee;


    }

    .texto {
        display: grid;
        padding-left: 6.25em;
        width: 50%;
        animation: fade-up 0.4s;
    }

    .texto button {
        margin-top: 2.4em;
        margin-left: 4.4em;
        margin-right: 4.4em;
        font-size: 15px;
        background-color: var(--cor-5);
        color: white;
        border: 0;
        border-radius: 20px;
        outline: none;
        padding: 0.9em;
        cursor: pointer;
    }

    .texto button:hover {
        background-color: var(--cor-1);
    }

    .texto h1 {
        color: var(--cor-1);
        font-size: 100px;
        text-align: center;
    }

    .texto p {
        color: black;
        font-size: 19px;
        line-height: 20px;
    }


    .col {
        padding-top: 2.5em;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        width: 50%;
        animation: lateral 1s;
    }


    .card {
        padding-bottom: 1.25em;
        text-align: center;
        transition: transform 0.5s;
        cursor: pointer;

    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        min-width: 90%;
        max-width: 90%;
        min-height: 20em;
        max-height: 20em;
        border-radius: 5px;
    }

    footer {
        background-color: #3a5a40;
        position: relative;
        width: 100%;
        min-height: 80px;
        padding: 3rem 1rem;
    }

    .container {
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .linha {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .coluna {
        min-width: 300px;
        color: white;
        font-family: poppins;
        padding: 0 2rem;
    }

    .coluna .logo {
        width: 100px;
        margin-bottom: 25px;
    }

    .coluna h3 {
        color: #0ac567;
        margin-bottom: 20px;
        position: relative;
        cursor: pointer;
    }

    .coluna h3::after {
        content: '';
        height: 3px;
        width: 0px;
        background-color: white;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: 0.4s ease;

    }

    .coluna h3:hover::after {
        width: 30px
    }

    .coluna .social a i {
        color: white;
        margin-top: 2rem;
        margin-right: 5px;
        transition: 0.3s ease;
    }

    .coluna2 {
        padding-top: 40px;
    }

    .coluna .social a i:hover {
        transform: scale(1.5);
    }

    .coluna .links a {
        display: block;
        text-decoration: none;
        color: white;
        margin-bottom: 5px;
        position: relative;
        transition: 0.3s ease;
    }

    .coluna .links a::before {
        content: '';
        height: 16px;
        width: 3px;
        position: absolute;
        top: 5px;
        left: -10px;
        background-color: #0ac567;
        transition: 0.5s ease;
        opacity: 0;
    }

    .coluna .links a:hover::before {
        opacity: 1;
    }

    .coluna .links a:hover {
        transform: translateX(-8px);
        color: #0ac567;
    }

    @media(max-width:1600px) {
        .row {
            height: 45em;
        }
    }

    @media screen and (min-width:1100px) and (max-width:1550px) {
        header .navbar ul li a {
            font-size: 16px;
            padding: 1rem;
        }

        .login-header {
            font-size: 14px;
        }
    }


    @media (max-width:1100px) {
        header {
            padding: 0.6em;
        }

        header label {
            display: initial;
        }

        header .navbar {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #fff;
            border-top: 1px solid black;
            display: none;
        }

        header .navbar ul li {
            width: 100%;
        }

        header .navbar ul li ul {
            position: relative;
            width: 100%;
        }

        header .navbar ul li ul li {
            background-color: #eee;
        }

        header .navbar ul li ul li ul {
            width: 100%;
            left: 0;
        }

        #menu-bar:checked~.navbar {
            display: initial;
        }

        .row h1 {
            font-size: 50px;
        }

        .row p {
            font-size: 20px;
        }

    }



    @media screen and (max-width: 768px) {
        .row {
            flex-direction: column;
            height: auto;
        }

        .texto {
            width: 100%;
            padding: 1.25em;
        }

        .col {
            width: 100%;
        }

        .card {
            margin-bottom: 1.25em;
        }

        .col {
            padding-top: 2.5em;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 90%;
            padding-left: 1.8em;
        }
    }

    @media (min-width:770px) and (max-width:990px) {
        .row {
            flex-direction: column;
            height: auto;

        }

        .texto {
            width: 70%;
            padding-right: 2.5em;
        }

        .col {
            padding-top: 2.5em;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            width: 70%;
            padding-left: 1.8em;
        }
    }


    @media (max-width:500px) {
        header {
            padding: 0.3em;
            font-size: 5px;
        }

        .row h1 {
            font-size: 40px;
        }

        .col img {
            padding-right: 20px;
        }

        .login-entrar {
            display: none;
        }

        .cadastrar-se {
            display: none;
        }

        .login-icone i {
            font-size: 15px;
            padding-left: 2em;
        }

        .texto button {
            font-size: 14px;
        }

        .card img {
            min-width: 100%;
        }

    }




    @media(max-width:900px) {
        .linha {
            flex-direction: column;
        }

        .coluna {
            width: 100%;
            text-align: left;
            margin-bottom: 25px;
        }
    }

    @media screen and (max-width:768px) {
        .linha {
            flex-direction: column;
        }

        .coluna {
            width: 100%;
            text-align: left;
            margin-bottom: 20px;
        }
    }

    @keyframes fade-up {
        0% {
            opacity: 0;
            transform: translateY(100px) scale(0.9);
        }

        100% {
            opacity: 1;
            transform: translateY(0px) scale(1);
        }
    }

    @keyframes lateral {
        0% {
            opacity: 0;
            transform: translateX(400px) scale(0.9);
        }

        100% {
            opacity: 1;
            transform: translateX(0px) scale(1);
        }
    }


    .dropdown-menu ul li {
        list-style: none;
    }

    .user-botao {
        position: relative;
        width: 100px;
        height: 80px;
    }

    .dropdown-menu {
        position: absolute;
        top: 5.2em;
        right: 5em;
        padding: 10px 20px;
        background-color: #f2f2f2;
        width: 200px;
        box-sizing: 0 5px 25px rgba(0, 0, 0, 0, 1);
        border-radius: 15px;
        display: none;
    }

    .dropdown-menu.ativado {
        display: block;
    }

    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: 0;
        right: 1.5em;
        width: 25px;
        height: 20px;
        background-color: #f2f2f2;
        transform: rotate(45deg);

    }

    .dropdown-menu ul li {
        list-style: none;
        padding-top: 1em;
        border-top: 1px solid black;
        margin-top: 1em;
    }

    .dropdown-menu ul li:last-of-type {
        padding-bottom: 1em;
        border-bottom: 1px solid black;
    }

    .dropdown-menu ul li i {
        opacity: 0.5;
        transition: ease 0.5s;
    }

    .dropdown-menu ul li:hover i {
        opacity: 1;
    }

    .dropdown-menu ul li a {
        display: inline;
        text-decoration: none;
        color: #000000;
        font-weight: 500;
        transition: ease 0.5s;
    }

    .dropdown-menu ul li:hover a {
        color: var(--cor-7);
    }
</style>

<body>
     <?php include_once(__DIR__ . "/../header/header.php") ?>
    <main class="row">
        <div class="texto">
            <h1>EcoWise</h1>
            <p>Na Ecowise, acreditamos que a mudança começa com a conscientização. Nossa missão é inspirar e educar indivíduos, empresas e comunidades a adotarem práticas mais ecológicas, abrindo caminho para um futuro mais verde e brilhante.</br></br>

                Estamos comprometidos em criar um mundo onde a sabedoria ecológica se torna a norma, não a exceção. Trabalhamos incansavelmente para disseminar o conhecimento sobre a importância da sustentabilidade, incentivando ações que tenham um impacto positivo em nosso planeta.</br></br>

                Com o nosso compromisso, vislumbramos um futuro em que os recursos naturais são preservados, a biodiversidade é valorizada e as gerações futuras herdam um mundo mais equilibrado e próspero. Junte-se a nós nessa jornada em direção a um amanhã mais ecológico e melhor.</br></br>

                Explore nosso site para descobrir recursos educacionais, histórias inspiradoras e oportunidades de envolvimento. Juntos, podemos transformar o nosso presente para criar o futuro sustentável que todos merecemos.</p>
        </div>

        <div class="col">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1501630834273-4b5604d2ee31?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNsb3VkfGVufDB8fDB8fHww" alt="">
            </div>

            <div class="card">
                <img src="https://plus.unsplash.com/premium_photo-1669274936462-5ac9832ba708?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fG9jZWFufGVufDB8fDB8fHww" alt="">
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/reserve/J3URHssSQyqifuJVcgKu_Wald.jpg?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZmxvcmVzdHxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>

            <div class="card">
                <img src="https://plus.unsplash.com/premium_photo-1664283229354-15322f237c29?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTd8fHJlY3ljbGV8ZW58MHx8MHx8fDA%3D" alt="">
            </div>
        </div>
    </main>
    <?php include_once(__DIR__ . "/../footer/footer.php") ?>
</body>
</html>
