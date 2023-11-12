<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<style>
    .interno-admin{
        display:flex;
        align-items:center;
        justify-content:center;
        margin-top:1em;
        font-size:60px;
    }

    .interno-admin i{
        padding-right:0.2em;
        font-size:100px;
    }
    

    .table{
        display:flex;
        justify-content:center;
    }

    .table table{
        margin-top: 5em;
            width: 70%;
            border-collapse: collapse;
            font-size: 1em;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            animation:fade-up 1s;
    }

    .table table tr th {
            background-color: #16988b;
            color: white;
            text-align: left;
            font-weight: bold;
        }

        .table table th,
        .table table td {
            padding: 12px 15px;
        }

        .table table tr {
            border-bottom: 1px solid silver;
        }

        .table table tr:nth-of-type(even) {
            background-color: white;
        }

        .table table tr:last-of-type {
            border-bottom: 2px solid var(--cor-5);
        }

        .table table button{
            border:none;
            padding:0.5em;
            border-radius:0.5em;
            background-color:#2caaa0;
            color:white;
            font-weight:bold;
        }

        .table table button:hover{
            background-color:#0f6a67;
            cursor:pointer;
        }
</style>
<body>
<?php include_once(__DIR__ . "/../header/header.php")?>

<div class="admin">
        <div class="interno-admin">
            <i class="fa-solid fa-user-gear" style="color:#7c99cb;"></i>
            <h1>ADMIN</h1>
        </div>
    </div>
    <div class="table">
        <table>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Email</th>
              <th>País</th>
              <th>Nascimento</th>
              <th>CPF</th>
              <th></th>
              <th></th>
            </tr> 
            
            <?php foreach ($allusers as $user):?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->person->name?></td>
                <td><?=$user->person->email?></td>
                <td><?=($user->person->country) ?:"<font color='red'>Não Cadastrado</font>" ?></td>
                <td><?=($user->person->birth_date) ?:"<font color='red'>Não Cadastrado</font>"?></td>
                <td><?=($user->person->document) ?:"<font color='red'>Não Cadastrado</font>"?></td>
                <td><button>Tornar Admin</button></td>
                <td><button>Excluir</button></td>       
            </tr>
            <?php endforeach?>
          </table>
          
    </div>
</body>
</html>