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
        z-index: 1001;
    }

    header .logo {
        font-weight: bolder;
        font-size: 35px;
        color: var(--cor-1);
        padding: 15px;
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
        padding: 30px;
        color: #333;
        display: flex;
        border-radius: 25px;
    }

    .a-header::after {
    content: '';
    height: 2.5px;
    width: 0px;
    background-color: black;
    position: absolute;
    top: 3em;
    left: 1.5em;
    transition: 0.4s ease;
    z-index:1001 ;
}

.a-header2::after {
    content: '';
    height: 2.5px;
    width: 0px;
    background-color: black;
    position: absolute;
    top: 4em;
    left: 1.5em;
    transition: 0.4s ease;
    z-index:1001 ;
}

    .a-header:hover::after,.a-header2:hover::after {
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
        padding: 20px;
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

    <?php if ($user->id) : ?>.login-header button {
        margin-top: 0.6em;
        padding: 0.9em;
        border: none;
        font-size: 20px;
        background-color: white;
        border-radius: 10px;
        width: 10em;
    }

    .login-header button:hover {
        cursor: pointer;
        background-color:#8ecae6;
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

    <?php else : ?>
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
        transition:ease 0.3s;
    }

    <?php endif ?>
    /* =========================== MEDIA HEADER ===========================*/
    @media screen and (min-width:1000px) and (max-width:1550px) {
        header .navbar ul li a {
            font-size: 14px;
            padding: 1rem;
        }

        .login-header {
            font-size: 14px;
        }
    }

    @media (max-width:1000px) {
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

    }

    @media (max-width:500px) {
        header .logo {
            font-size: 20px;
        }

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

        header label {
            font-size: 15px;
        }

        .login-header {
            font-size: 15px;
        }


    }

    @media (max-width:400px) {
        .login-header button {
            padding: 0.5em;
        }
    }

    @media (max-width:300px) {
        .login-header button {
            font-size: 10px;
        }
    }

    #user-menu-button p{
        text-transform:capitalize;
    }
</style>

<header>

    <a href="/site/home" class="logo">EcoWise</a>
    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">Menu</label>

    <nav class="navbar">
        <ul class="nav-links">
            <li class="nav-link services">
                <a href="#" class="a-header">
                    Conteúdos Educativos
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul>
                    <li>
                        <a href="/recycling" class="a-header">Reciclagem</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="a-header2">
                            Ações antrópicas
                            <span class="material-icons dropdown-icon"> arrow_left </span>
                        </a>
                        <ul>
                            <li><a href="/wildfire" class="a-header">Queimadas</a></li>
                            <li><a href="/acidrain" class="a-header">Chuva ácida</a></li>
                            <li><a href="/deforestation" class="a-header">Desmatamento</a></li>
                            <li><a href="/pollution" class="a-header">Poluição</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <?php if ($user->id):?>
                <?php if ($user->type == 1):?>
                    <?php
                        $collectionOnGoing = R::findOne('waste_collection', 'user_id = ? and status in (?, ?)', [$user->id, 1, 2]);
                        if($collectionOnGoing->id) :
                    ?>
                    <li class="nav-link"><a href="/wastecollectioncurrent" class="a-header" >Coleta de Resíduos</a></li>
                    <?php else: ?>
                    <li class="nav-link"><a href="/wastecollectioncreation" class="a-header">Coleta de Resíduos</a></li>
                    <?php endif ?>
                <?php elseif($user->type == 2):?>
                    <li class="nav-link"><a href="/wastecollection" class="a-header" >Coleta de Resíduos</a></li>
                <?php endif ?>
            <?php else: ?>
                <li class="nav-link"><a href="/login" class="a-header">Coleta de Resíduos</a></li>
            <?php endif?>
            <li class="nav-link services">
                <a href="#" class="a-header">
                    Informações
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul>
                    <li><a href="/collectioninfo" class="a-header">Coleta</a></li>

                </ul>
            </li>
        </ul>
    </nav>

    <?php if ($user->id) : ?>
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
                    <?php if($user->type == 3):?>
                        <li><i class="fa-solid fa-table-columns"></i><a href="/dashboard">Controlar</a></li>
                    <?php endif?>
                    <li><i class="fa-solid fa-right-from-bracket"></i><a href="/logout">Sair</a></li>

                    
                </ul>
            </div>
        </div>
    <?php else : ?>
        <div class="login-header">
            <button class="login" onclick="window.location='/login'">Login</button>
            <button class="cadastrar" onclick="window.location='/'">Cadastrar</button>
        </div>
    <?php endif ?>

</header>

<script>
    function Menuclicado() {
        const clicado = document.querySelector('.dropdown-menu');
        clicado.classList.toggle('ativado')
    }
</script>