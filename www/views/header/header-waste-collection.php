<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="icon" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIj48IS0tISBGb250IEF3ZXNvbWUgUHJvIDYuNC4yIGJ5IEBmb250YXdlc29tZSAtIGh0dHBzOi8vZm9udGF3ZXNvbWUuY29tIExpY2Vuc2UgLSBodHRwczovL2ZvbnRhd2Vzb21lLmNvbS9saWNlbnNlIChDb21tZXJjaWFsIExpY2Vuc2UpIENvcHlyaWdodCAyMDIzIEZvbnRpY29ucywgSW5jLiAtLT48cGF0aCBkPSJNNTcuNyAxOTNsOS40IDE2LjRjOC4zIDE0LjUgMjEuOSAyNS4yIDM4IDI5LjhMMTYzIDI1NS43YzE3LjIgNC45IDI5IDIwLjYgMjkgMzguNXYzOS45YzAgMTEgNi4yIDIxIDE2IDI1LjlzMTYgMTQuOSAxNiAyNS45djM5YzAgMTUuNiAxNC45IDI2LjkgMjkuOSAyMi42YzE2LjEtNC42IDI4LjYtMTcuNSAzMi43LTMzLjhsMi44LTExLjJjNC4yLTE2LjkgMTUuMi0zMS40IDMwLjMtNDBsOC4xLTQuNmMxNS04LjUgMjQuMi0yNC41IDI0LjItNDEuN3YtOC4zYzAtMTIuNy01LjEtMjQuOS0xNC4xLTMzLjlsLTMuOS0zLjljLTktOS0yMS4yLTE0LjEtMzMuOS0xNC4xSDI1N2MtMTEuMSAwLTIyLjEtMi45LTMxLjgtOC40bC0zNC41LTE5LjdjLTQuMy0yLjUtNy42LTYuNS05LjItMTEuMmMtMy4yLTkuNiAxLjEtMjAgMTAuMi0yNC41bDUuOS0zYzYuNi0zLjMgMTQuMy0zLjkgMjEuMy0xLjVsMjMuMiA3LjdjOC4yIDIuNyAxNy4yLS40IDIxLjktNy41YzQuNy03IDQuMi0xNi4zLTEuMi0yMi44bC0xMy42LTE2LjNjLTEwLTEyLTkuOS0yOS41IC4zLTQxLjNsMTUuNy0xOC4zYzguOC0xMC4zIDEwLjItMjUgMy41LTM2LjdsLTIuNC00LjJjLTMuNS0uMi02LjktLjMtMTAuNC0uM0MxNjMuMSA0OCA4NC40IDEwOC45IDU3LjcgMTkzek00NjQgMjU2YzAtMzYuOC05LjYtNzEuNC0yNi40LTEwMS41TDQxMiAxNjQuOGMtMTUuNyA2LjMtMjMuOCAyMy44LTE4LjUgMzkuOGwxNi45IDUwLjdjMy41IDEwLjQgMTIgMTguMyAyMi42IDIwLjlsMjkuMSA3LjNjMS4yLTkgMS44LTE4LjIgMS44LTI3LjV6TTAgMjU2YTI1NiAyNTYgMCAxIDEgNTEyIDBBMjU2IDI1NiAwIDEgMSAwIDI1NnoiLz48L3N2Zz4=" type="image/svg+xml">
    
</head>


<style>



* {
    font-family: 'Nunito', sans-serif;
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
    height:5em;
}

header a,header p {
    color: black;
    font-size: 20px
}

header div{
    padding:5px;
}

    .login-header button {
        padding: 0.9em;
        border: none;
        font-size: 20px;
        background-color: white;
        border-radius: 10px;
    }

    .login-header button:hover {
        cursor: pointer;
        background-color: #f2f2f2;
        color:white;
    }

    #user-menu-button a{
        text-transform:capitalize;
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
        right: 8em;
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

    .a-header:hover,.a-header2:hover{
        color:#ccc;
    }

    @media (max-width:850px){
        .a-header,.a-header2{
            font-size:14px;
        }

        .login-header a{
            font-size:14px;
        }

        .dropdown-menu {
        right: 4em;
       
    }

    }

    @media (max-width:655px){

        
        .logo{
            font-size:20px;
        }

        .historico{
            display:flex;
            flex-direction:column;
        }
    }

    

    @media (max-width:500px){
        header{
            padding: 2px ;
    }


    header div{
        padding:0;
    }

        .logo{
            font-size:16px;
        }

        .login-header button {
        padding: 0.7em;
        border: none;
        font-size: 14px;
        background-color: white;
        border-radius: 10px;
    }
    
    .historico a{
        padding-right:1em;
    }

    @media (max-width:400px){
        .dropdown-menu {
        top: 6em;
        right: 2em;   
    }
    }
}

</style>

<header>
        <div class="home"> <a href="/site/home" class="logo">EcoWise</a></div>
        <div class="historico">
                <?php if($user->type == 1) : ?>
                    <?php
                        $collectionOnGoing = R::findOne('waste_collection', 'user_id = ? and status in (?, ?)', [$user->id, 1, 2]);
                        if($collectionOnGoing->id) :
                    ?>
                    <a href="/wastecollectioncurrent" class="a-header" >Coletas</a>
                    <?php else: ?>
                    <a href="/wastecollectioncreation" class="a-header">Coletas</a>
                    <?php endif ?>
                <?php else: ?>
                    <a href="/wastecollection" class="a-header">Coletas</a>
                <?php endif ?>
                <a href="/collectionHistory" class="a-header2">Histórico</a>

        </div>
        
        <div class="login-header" onclick="Menuclicado();">
            
                <button id="user-menu-button">
                    <a><?= $user->person->name ?> </a>
                </button>

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
</header>

<script>
    function Menuclicado() {
        const clicado = document.querySelector('.dropdown-menu');
        clicado.classList.toggle('ativado')
    }
</script>