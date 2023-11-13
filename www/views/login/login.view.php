<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Login</title>

</head>

<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
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
  width: 380px;
  padding: 40px 30px 50px 30px;
  background: #fff;
  border-radius: 5px;
  text-align: center;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  border-radius: 10px;
  animation: fade-up 0.4s;
}

h1{
  font-size: 35px;
  font-weight: 600;
  color: #5cbc5c;
}
.container form{
  margin: 40px 0;
}
form .campo{
  width: 100%;
  margin-bottom: 20px;
}

form .campo .div-input{
  height: 50px;
  width: 100%;
  position: relative;
}
form input{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 45px;
  font-size: 18px;
  background: none;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
  border-bottom-width: 2px;
  transition: all 0.2s ease;
  color: green;
}
form .campo input:focus,
form .campo.valid input{
  border-color: #05691c;
}

.erro-vazio{
    display: none;
}

.campo .div-input i{
  position: absolute;
  top: 50%;
  font-size: 18px;
  pointer-events: none;
  transform: translateY(-50%);
}
.div-input .icon{
  left: 15px;
  color: #bfbfbf;
  transition: color 0.2s ease;
}

form input:focus ~ .icon,
form .campo.valid .icon{
  color: #0a590c;
}

form input::placeholder{
  color: #bfbfbf;
  font-size: 17px;
}

form .pass-txt{
  text-align: left;
  margin-top: -10px;
}
.container a{
  color: #5372F0;
  text-decoration: none;
}
.container a:hover{
  text-decoration: underline;
}
.botao{
  height: 50px;
  margin-top: 30px;
  color: #fff;
  padding: 0;
  border: none;
  background: #4da2e3;
  cursor: pointer;
  border-bottom: 2px solid rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.botao:hover{
  background: #2c52ed;
}

.home button {
    position:absolute;
    top:0.6em;
    left:0.6em;
    font-size: 30px;
    border:none;
    }

    
  .home button i:hover{
    cursor:pointer;
  }

@keyframes fade-up {
    0% {
        opacity: 0;
        transform: translateY(100px) scale(0.9);
    }

    100%{
        opacity: 1;
        transform: translateY(0px) scale(1) ;
    }
}
</style>

<body>
    <div class="home">
        <button onclick="window.location='/site/home'"><i class="fa-solid fa-house" style="color: #4377d0;"></i></button>
    </div>
    <div class="container">
        <h1>Login</h1>
        <?php if ($is_invalid): ?>
            <em style="color: red;">Login invalido</em>
        <?php endif; ?>

        <form action="/loginvalidation" method="post">
            <div class="campo email">

                <div class="div-input">
                    <input name="email" type="text" placeholder="Email">
                    <i class="icon fas fa-envelope"></i>
                </div>

                <div class="erro-vazio">
                    Email não pode ser vazio
                </div>

            </div>

            <div class="campo senha">
                <div class="div-input">
                    <input name="password" type="password" placeholder="Senha">
                    <i class="icon fas fa-lock"></i>
                </div>

                <div class="erro-vazio">
                    Senha não pode ser vazia
                </div>

            </div>
            <input type="submit" value="Login" class="botao">

        </form>

        <div class="sign-txt">Ainda não é um usuário? <a href="/">Cadastre-se</a></div>

    </div>
</body>

</html>