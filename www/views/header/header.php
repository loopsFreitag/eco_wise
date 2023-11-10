<style>
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

    header .navbar ul li a:hover {
        color: white;
        background-color: var(--cor-6);

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

    <?php else : ?>.login-header {
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
        background-color: var(--cor-2);
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
</style>

<header>

    <a href="/site/home" class="logo">EcoWise</a>
    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">Menu</label>

    <nav class="navbar">
        <ul class="nav-links">
            <li class="nav-link services">
                <a href="#">
                    Conteúdos Educativos
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul>
                    <li>
                        <a href="/recycling">Reciclagem</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            Ações antrópicas
                            <span class="material-icons dropdown-icon"> arrow_left </span>
                        </a>
                        <ul>
                            <li><a href="/wildfire">Queimadas</a></li>
                            <li><a href="/acidrain">Chuva ácida</a></li>
                            <li><a href="/deforestation">Desmatamento</a></li>
                            <li><a href="/pollution">Poluição</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-link"><a href="/login">Coleta de Resíduos</a></li>
            <li class="nav-link services">
                <a href="#">
                    Informações
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul>
                    <li><a href="/collectioninfo">Coleta</a></li>

                </ul>
            </li>
        </ul>
    </nav>

    <?php if ($user->id) : ?>
        <div class="login-header">
            <div class="user-botao" onclick="Menuclicado();">
                <button id="user-menu-button">
                    <p>Olá, <?= $user->person->name ?> </p>
                </button>
            </div>

            <div class="dropdown-menu">
                <ul>
                    <li><i class="fa-regular fa-user"></i><a href="/pages/meuperfil.html
                    ">Meu Perfil</a></li>
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