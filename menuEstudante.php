<?php
session_start();
include('verificacao.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>AMBIENTE VIRTUAL DE APRENDIZAGEM</title>
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

        body, html {
            height: 100%;
            line-height: 1.8;
        }
                            
        .w3-bar .w3-button {
        padding: 16px;
        }

        .Slides {display:none;}
    </style>
</head>
<body>
    <div class="w3-menu">
        <div class="w3-bar w3-card w3-white w3-top" id="menu-estudante">
            <a href="#menu-login" class="w3-bar-item w3-button w3-wide w3-mobile"><img src="logo.png" alt="logo">TecnoClass</a>

            <a href="logout.php" class="w3-bar-item w3-button w3-margin">Sair</a>
 
            <div class="w3-right w3-hide-small w3-margin">
                <a href="#aulas" class="w3-bar-item w3-button"><i class="fa fa-th"></i>  AULAS</a>
                <a href="#professores" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PROFESSORES</a>
                <a href="#materiais" class="w3-bar-item w3-button"><i class="fa fa-archive"></i> MATERIAIS</a>
                <a href="forumCop.php" class="w3-bar-item w3-button"><i class="fa fa-bell"></i> FORUM</a>
                <a href="#mensagens" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> MENSAGENS</a>
            </div>
        </div>
        <header>
            <img src="https://images.pexels.com/photos/7108/notebook-computer-chill-relax.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" id="img1" alt="Lights" style="width:100%"   height=" 800px" class="w3-grayscale-min">
            <div class="w3-display-left w3-text-white" style="padding:50px;">
                <span class="w3-jumbo  w3-hide-small w3-xxlarge w3-animate-top w3-border-top w3-border-bottom" style=" font-weight: bold"> AMBIENTE VIRTUAL DE APRENDIZAGEM </span><br>
                <span class="w3-xlarge" style="padding:80px">"Conhecimento é o segredo de um futuro brilhante"</span>
             
                <p><a href="#sobre" class="w3-button w3-large w3-white w3-padding-xlarge w3-opacity w3-margin-top w3-animate-opacity ">Sobre o Ambiente Virtual</a></p>

            </div>
        </header>
 
        <div class="w3-container" style="padding:120px 16px" id="about">
            <h2 class="w3-center w3-animate-bottom">PILARES DO ENSINO</h2>  
            <div class="w3-row-padding w3-center w3-animate-opacity " style="margin-top:64px">
                <div class="w3-quarter w3-card w3-container w3-hover-opacity" style="min-height:430px">
                    <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"style="margin-top:64px"></i>
                    <p class="w3-large ">Responsabilidade</p>
                    <p>Ensino a distância de qualidade prezando a responsabilidade com os materiais e relações dos alunos.</p>
                </div>
                <div class="w3-quarter w3-card w3-container w3-black w3-hover-opacity" style="min-height:430px">
                    <i class="fa fa-heart w3-margin-bottom w3-jumbo" style="margin-top:64px"></i>
                    <p class="w3-large">Comprometimento</p>
                    <p>Comprometimento em agregar da melhor forma possível cada tipo de aprendizado aos alunos</p>
                </div>
                <div class="w3-quarter w3-card w3-container w3-hover-opacity" style="min-height:430px">
                    <i class="fa fa-diamond w3-margin-bottom w3-jumbo" style="margin-top:64px"></i>
                    <p class="w3-large">Organização</p>
                    <p>Prezando sempre pela organização das matérias e dos conteúdos de aprendizado</p>
                </div>
                <div class="w3-quarter w3-card w3-container w3-black w3-hover-opacity" style="min-height:430px">
                    <i class="fa fa-cog w3-margin-bottom w3-jumbo" style="margin-top:64px"></i>
                    <p class="w3-large">Suporte</p>
                    <p>Oferecendo suporte em todos os momentos necessários para os alunos, aproximando-os dos professores e potencializando seu aprendizado</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="w3-container w3-light-grey" style="padding:110px 50px 110px" >
            <div class="w3-row-padding w3-center" >
                <div class="w3-col m6"style="padding:100px 16px">
                    <h3>PARTICIPE DO NOSSO FORUM</h3>
                    <p>Suas dúvidas e opiniões são valorizadas e respondidas rapidamente</p>
                    <p><a href="#forum" class="w3-button w3-black"><i class="fa fa-th"></i> Forum</a></p>
                </div>
                <div class="w3-col m6">
                    <img class="w3-image w3-border w3-round-large" src="https://images.pexels.com/photos/261909/pexels-photo-261909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Buildings">
                </div>
            </div>
        </div>
        <div class="w3-container" style="padding-top:50px; margin-bottom: 100px;" id="slide">
            <h2 class="w3-center"  style="margin-top:64px">AULAS INTERATIVAS</h2><br>
            <div class="w3-content w3-section" style="max-width:90%">
                <img class="Slides w3-border w3-round-xlarge" src="https://images.pexels.com/photos/5905945/pexels-photo-5905945.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
                <img class="Slides w3-border w3-round-xlarge" src="https://images.pexels.com/photos/574285/pexels-photo-574285.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
                <img class="Slides w3-border w3-round-xlarge" src="https://images.pexels.com/photos/4145153/pexels-photo-4145153.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:100%">
                <img class="Slides w3-border w3-round-xlarge" src="https://images.pexels.com/photos/5905700/pexels-photo-5905700.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:100%">
                <img class="Slides w3-border w3-round-xlarge" src="https://images.pexels.com/photos/4143791/pexels-photo-4143791.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:100%">
                <img class="Slides w3-border w3-round-xlarge" src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:100%">
            </div>
        </div>
    </div>

    <script>
        var myIndex = 0;
        carousel();
           
        function carousel() {
            var i;
            var x = document.getElementsByClassName("Slides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2500);
        }
    </script>

    <div class="w3-container w3-black" style="padding:60px" >
        <h3><b><i class="fa fa-dashboard "style="margin-top:60px; margin-bottom: 50px; margin-left: 50px "></i> MEU PERFIL</b></h3>
        </header>
        <div class="w3-row-padding" style="margin-bottom: 50px;">
                <div class="w3-quarter ">
                    <div class="w3-container w3-border w3-round-large w3-blue w3-padding-16">
                        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
                        <div class="w3-clear"></div>
                        <h4>Mensagens</h4>
                    </div>
                </div>
            <div class="w3-quarter">
                <div class="w3-container w3-border w3-round-large w3-cyan w3-padding-16">
                    <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                    <div class="w3-clear"></div>
                    <h4>Dados</h4>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-border w3-round-large w3-teal w3-padding-16">
                    <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
                    <div class="w3-clear"></div>
                    <h4>Grupos</h4>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-border w3-round-large w3-light-green w3-text-white w3-padding-16">
                    <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                    <div class="w3-clear"></div>
                    <h4>Amigos</h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>