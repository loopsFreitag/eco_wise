<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>


<style>



* {
    font-family: 'Lato', sans-serif;
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

.logo{
    font-size: 35px;
    color: var(--cor-1);
    font-weight: bold;
}

header{
    display: flex;
    position: sticky;
    top:0; left:0; right:0;
    background-color: #ffffff;
    box-shadow:0 5px 10px rgba(0,0,0,.1);
    padding: 0px 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1001;
}

header a,header p {
    color: black;
    font-size: 20px
}

header div{
    padding:5px;
}

.login-header button {
        border: none;
        font-size: 20px;
        background-color: white;
        border-radius: 10px;
        width: 10em;
        margin-top:0.7em;
        padding:10px;
    }

    .login-header button:hover {
        cursor: pointer;
        background-color: #f2f2f2;
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

    .dropdown-menu ul li {
        list-style: none;
        padding-top: 1em;
        border-top: 1px solid black;
        margin-top: 1em;
    }

    .dropdown-menu ul li i {
        padding-right:1em;
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

    #user-menu-button p {
        text-transform:capitalize;
    }

    .historico a {
        padding-left:3em;
    }

    .a-header::after {
    content: '';
    height: 2.5px;
    width: 0px;
    background-color: black;
    position: absolute;
    top: 2.7em;
    left: 43em;
    transition: 0.4s ease;
    z-index:1001 ;
    }

    .a-header2::after {
    content: '';
    height: 2.5px;
    width: 0px;
    background-color: black;
    position: absolute;
    top: 2.7em;
    left: 49.5em;
    transition: 0.4s ease;
    z-index:1001 ;
    }
    .a-header:hover::after,.a-header2:hover::after {
        width: 2em;
    }   
    
    


</style>

<header>
        <div class="home"> <a href="/site/home" class="logo">EcoWise</a></div>
        <div class="historico">
                <?php
                    $collectionOnGoing = R::findOne('waste_collection', 'user_id = ? and status in (?, ?)', [$user->id, 1, 2]);
                    if($collectionOnGoing->id) :
                ?>
                <a href="/wastecollectioncurrent" class="a-header" >Corrida</a>
                <?php else: ?>
                <a href="/wastecollectioncreation" class="a-header">Corrida</a>
                <?php endif ?>
                <a href="/collectionHistory" class="a-header2">Historico de coletas</a>

        </div>
        
        <div class="login-header">
            <div class="user-botao" onclick="Menuclicado();">
                <button id="user-menu-button">
                    <p><?= $user->person->name ?> </p>
                </button>
            </div>

            <div class="dropdown-menu">
                <ul>
                    <li><i class="fa-regular fa-user"></i><a href="/myprofile
                    ">Meu Perfil</a></li>
                    <?php if($user->type == 1):?>
                        <li><i class="fa-solid fa-table-columns"></i><a href="/dashboard">Controlar</a></li>
                    <?php endif?>
                    <li><i class="fa-solid fa-right-from-bracket"></i><a href="/logout">Sair</a></li>

                    
                </ul>
            </div>
        </div>
</header>

<script>
    function Menuclicado() {
        const clicado = document.querySelector('.dropdown-menu');
        clicado.classList.toggle('ativado')
    }
</script>