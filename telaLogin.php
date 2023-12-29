<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<style>
    body{
        margin: 0;
        font-family: "Raleway", sans-serif;
    }
    
    body * {
        box-sizing: border-box;
    }

    button.w3-btn{
            background-color: #2EA414;
            color: black;
            font-weight: 700;
            width: 100%;
            box-shadow: 0px 10px 40px #00000056;
            margin-bottom: 40px;
            margin-top: 10px;
        }
    
    .main-login{
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .left-login{
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    .left-login > h1{
        font-size: 3vw;
        color: #000000;
        align-items: center;
    }
    
    .left-login-image{
        width: 35vw;
    }
    
    .right-login{
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .card-login{
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px 35px;
        background: #000000;
        border-radius: 20px;
        box-shadow: 0px 10px 40px #00000056;
    }
    
    .card-login > h1{
        color: #2EA414;
        font-weight: 800;
        margin: 0;
    }
    
    .textfield{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin: 10px 0px;
    }
    
    .textfield > input{
        width: 100%;
        border: none;
        border-radius: 10px;
        padding: 15px;
        background: #eee8e8;
        color: #000000de;
        font-size: 12pt;
        box-shadow: 0px 10px 40px #00000056;
        outline: none;
        box-sizing: border-box;
    }
    
    .textfield > label{
        color: #f0ffffde;
        margin-bottom: 10px;
    }
    
    .textfield > input::placeholder{
        color: #000000;
    }
    
    .btn-login{
        width: 100%;
        padding: 16px 0px;
        margin: 25px;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 3px;
        color: #000000;
        background: #2EA414;
        cursor: pointer;
        box-shadow: 0px 10px 40px -12px #00ff8052;
    }

    .login-type{
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    @media only screen and (max-width: 950px){
        .card-login{
            width: 85%;
        }
    }
    
    @media only screen and (max-width: 600px){
        .main-login{
            flex-direction: column;
        }
        .left-login > h1{
            display: none;
        }
        .left-login{
            width: 100%;
            height: auto;
        }
        .right-login{
            width: 100%;
            height: auto;
        }
        .left-login-image{
            width: 50vw;
        }
        .card-login{
            width: 90%;
        }
    }

</style>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>FAÇA LOGIN<br>SEJA BEM-VINDO</h1>
            <img src="estudante.png" class="left-login-image" alt="estudante">
        </div>
        <div class="right-login">
            <div class="card-login">
                <form action="loginAction.php" method="post">
                    <h1 style="color: green;">LOGIN</h1>

                    <?php
                    if(isset($_SESSION['nao_autenticado'])){
                    ?>
                    <div class="w3-panel w3-red w3-border">
                        <p>Usuário e/ou senha inválidos ou incompatíveis com o tipo.</p>
                    </div>
                    <?php
                    }
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="txtUsuario" placeholder="Usuário";>
                        <div class="textfield"></div>
                        <label for="senha">Senha</label>
                        <input type="password" name="txtSenha" placeholder="Senha";>
                        <h3 style="font-size: 16px; color: white;"  class="w3-center w3-bold"> Quem você é?
                            
                            <label for="1">
                                <input class="w3-radio" type="radio" name="Tipo" id="1" value="aluno">
                                Aluno
                            </label>
                
                            
                            <label for="2">
                                <input class="w3-radio" type="radio" name="Tipo" id="2" value="prof">
                                Professor
                            </label>
                        </h3>
                        <button name="btnLogar" class="w3-btn w3-round-large w3-wide">LOGIN</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>