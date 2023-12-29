<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registre-se | TecnoClass</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            font-family: 'Noto Sans', sans-serif;
            color: #f0ffffde;
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
        
    </style>
</head>
<body>
    <div class="w3-container w3-row">
        
        
        <div class="w3-col w3-card w3-mobile w3-padding w3-round-xlarge" style="margin: 8vw; width: 30vw; background-color: black;">
            <h1 class="w3-center" style="font-weight: 550; color: #2EA414;">REGISTRAR-SE</h1>
            <p class="w3-center">Já possui uma conta? <a href="telaLogin.php">Faça Login!</a></p>

            <?php
            if(isset($_SESSION['status_cadastro'])){
            ?>
            <div class="w3-panel w3-green w3-border">
                <h4>Cadastro Efetuado!</h4>
                <p>Faça login logo acima!</p>
            </div>
            <?php
            }
            unset($_SESSION['status_cadastro']);
            ?>

            <?php
            if(isset($_SESSION['usuario_existe'])){
            ?>
            <div class="w3-panel w3-red w3-border">
                <p>O usuário informado já existe, tente outro.</p>
            </div>
            <?php
            }
            unset($_SESSION['usuario_existe']);
            ?>

            <form action="registroAction.php" method="post" autocomplete="off">
                <h3 style="font-size: 16px;">Usuário</h3>
                <input style="color: #000000de; background: #eee8e8;" class="w3-card w3-input w3-round-large w3-border-0" type="text" name="txtUsuario" placeholder="Usuário">

                <h3 style="font-size: 16px;">Senha</h3>
                <input style="color: #000000de; background: #eee8e8;" class="w3-card w3-input w3-round-large w3-border-0" type="password" name="txtSenha" placeholder="Senha">
                
                <h3 style="font-size: 16px;" class="w3-center w3-bold"> Quem você é?
                    <input class="w3-radio" type="radio" name="Tipo" value="aluno">
                    <label for="aluno">Aluno</label>
        
                    <input class="w3-radio" type="radio" name="Tipo" value="prof">
                    <label for="prof">Professor</label>
                </h3>
            
                <button name="btnRegistrar" class="w3-btn w3-round-large w3-wide">REGISTRAR</button>
                
            </form>
            
        </div>
                
        <div class="w3-col w3-mobile" style="width: auto;"></div>

        <div class="w3-col w3-mobile" style="margin-left: 5vw; width: 40vw;">
            <h1 style="font-size: 32pt; font-weight: 550; color: black;">Registre-se <br> Seja Bem-vindo</h1>
            <img src="estudante.png" class="w3-image" style="height: auto;" alt="estudante">
        </div>
    </div>
</body>
</html>
    