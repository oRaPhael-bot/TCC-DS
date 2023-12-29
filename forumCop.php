<?php
    session_start();
    include('verificacao.php');
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>AMBIENTE VIRTUAL DE APRENDIZAGEM</title>
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
    
    .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    
    .bgimg-1 {
    background-image: url("https://images.pexels.com/photos/4050315/pexels-photo-4050315.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
    min-height: 600px;
    }
    
    .bgimg-2 {
    background-image: url("https://images.pexels.com/photos/4050401/pexels-photo-4050401.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
    min-height: 400px;
    }
    
    </style>
</head>
<body>
    <div class="w3-menu">
        <div class="w3-bar w3-card w3-white w3-top" id="menu-estudante">
            <a class="w3-bar-item w3-button w3-wide w3-mobile" href="#menu-login"><img src="logo.png" alt="logo">TecnoClass</a>
 
            <div class="w3-right w3-hide-small">
                <a href="#aulas" class="w3-bar-item w3-button">AULAS</a>
                <a href="#professores" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PROFESSORES</a>
                <a href="#materiais" class="w3-bar-item w3-button"><i class="fa fa-archive"></i> MATERIAIS</a>
                <a href="forumCop.php" class="w3-bar-item w3-button"><i class="fa fa-bell"></i> FORUM</a>
                <a href="#mensagens" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> MENSAGENS</a>
            </div>
        </div>
         
        <header>
            <div class="bgimg-1 w3-display-container w3-opacity-min" id="forum">
                <div class="w3-display-middle" style="white-space:nowrap">
                    <span class="w3-jumbo w3-hide-small w3-xxlarge w3-animate-top w3-border-top w3-border-bottom" style="font-weight: bold"> FORUM </span>
                    <br>
                </div>
            </div>

            <div class="w3-content w3-container w3-padding-64" id="sobre">
                <h3 class="w3-center">PARA QUE SERVE O NOSSO FORUM?</h3>
                <p class="w3-center"><em>"Educação com apoio se amplia"</em></p>
                <p>Nosso FORUM tem como objetivo apoiar o aprendizado dos nossos alunos. A cada comentário, o professor encarregado da turma ou matéria será responsável por oferecer o suporte, prezando pela individualidade, considerando que cada aluno possui a sua própria forma de aprender.
                Além disso, nosso FORUM também é aberto para críticas ou idéias positivas, sempre valorizando a sua opinião em relação ao seu ambiente virtual de aprendizado e tentando melhorá-lo.
                </p>
            </div>
        </header>
 
        <div class="bgimg-2 w3-display-container w3-opacity-min">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">TIRES SUAS DÚVIDAS E DÊ SUA OPINIÃO</span>
            </div>
        </div>
 
        <div class="w3-content w3-container w3-padding-64" id="info">
            <h3 class="w3-center">POR QUE COMENTAR É IMPORTANTE?</h3>
            <p class="w3-center"><em>Você não terá mais dúvidas sobre as matérias.<br> Suas opiniões serão ouvidas para melhorar a sua experiência de aprendizado.</em></p><br>
        </div>
 
        <div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
            <div class="w3-content">
                <h1 class="w3-center" style="margin-bottom:64px">DÚVIDAS E FEEDBACK'S</h1>
                <form action="forum.html" target="_blank" method="post">
                    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="nome_usuario"></p>
                    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="email_usuario"></p>
                    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Curso" required name="curso_usuario"></p>
                    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Digite sua mensagem" required name="mensagem"></p>
                    <p><button class="w3-button w3-black w3-block " type="submit"> <i class="fa fa-paper-plane"></i> ENVIAR</button></p>
                </form>

    <?php
        if(isset($_POST['submit'])) {
            $nome_usuario = $_POST['nome_usuario'];
        
            date_default_timezone_set('America/Sao_Paulo');
            $data_post = date("d/m/Y");
            $mensagem = $_POST['mensagem'];
        }

        #se o nome ou a mensagem estiverem vazias
        if((empty($nome_usuario)) && (empty($mensagem))){
            echo "Preencha todos os campos";
        } else{
            $sql = "INSERT INTO comentarios (cod_post, nome_usuario, data_post, email_usuario, curso_usuario, mensagem) 
            VALUES ('$cod_post', '$nome_usuario', '$data_post', '$email_usuario', '$curso_usuario', '$mensagem')";  
        }
    
        #atribuir um id na publicação
        if(isset($_GET['comentarios'])){
            $idweb = (int)$_GET['comentarios'];
        } else{
            $idweb = 1;
        }
        #numero de postagens por página
        $maximo = 6;
        $inicio = ($idweb * $maximo) - $maximo;
    
        #organizar em ordem decrescente
        $selecao = "SELECT * FROM comentarios ORDER BY cod_post DESC LIMIT $inicio, $maximo";
        #exibe os posts que achou
        $contagem = mysql_num_rows($selecao);
    
        #verificar se há ou não comentários
        if ($contagem <=0) {
            echo "Nenhum comentário encontrado";
        } else{ #armazenar o resultado da consulta para utilizar como quiser
            while ($row = mysql_fetch_array($selecao)){
                $cod_post = $row['cod_post'];
                $img_usuario = $row['img_usuario'];
                $nome_usuario = $row['nome_usuario'];
                $data_post = $row['data_post'];
                $mensagem = $row['mensagem'];
            }
        }
    ?>

                <h1 class="w3-container w3-center w3-light-green" style="width: 50%; margin-left: 250px;">COMENTÁRIO POSTADO!</h1>
            </div>
        </div>
           
        <div class="w3-container w3-black" style="padding:65px">
            <h3>COMENTÁRIOS RECENTES</h3><br>
            <div class="w3-row">
                <div class="w3-col m2 text-center">
                    <img class="w3-circle" src="https://cdn-icons-png.flaticon.com/512/997/997092.png?w=826" id = "img_usuario" style="width:96px; height:96px">
                </div>
                <div class="w3-col m10 w3-container">
                    <h4 class = "nome_usuario"><?php echo $nome_usuario ?><span class="w3-opacity w3-medium" id = "data_post"><?php echo $data_post ?></span></h4>
                    <p class = "mensagem"><?php echo $mensagem ?></p><br>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comentar</button>
                </div>
            </div>
            <hr> <br>
            <div class="w3-row">
                <div class="w3-col m2 text-center">
                    <img class="w3-circle" src="https://cdn-icons-png.flaticon.com/512/1149/1149415.png?w=826" id = "img_usuario" style="width:96px; height:96px">
                </div>
                <div class="w3-col m10 w3-container">
                    <h4 class = "nome_usuario"><?php echo $nome_usuario ?><span class="w3-opacity w3-medium" id = "data_post"><?php echo $data_post ?></span></h4>
                    <p class = "mensagem"><?php echo $mensagem ?></p><br>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>
                </div>
            </div>
            <hr><br>
            <div class="w3-row">
                <div class="w3-col m2 text-center">
                    <img class="w3-circle" src="<?php echo $img_usuario ?>" id = "img_usuario" style="width:96px; height:96px">
                </div>
                <div class="w3-col m10 w3-container">
                    <h4 class = "nome_usuario"><?php echo $nome_usuario ?><span class="w3-opacity w3-medium" id = "data_post"><?php echo $data_post ?></span></h4>
                    <p class = "mensagem"><?php echo $mensagem ?></p><br>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>
                </div>
            </div>
        </div>
 
        <div class="w3-container" style="padding:65px">
            <h3>COMENTÁRIOS RESPONDIDOS</h3><br>
            <div class="w3-row">
                <div class="w3-col m2 text-center">
                    <img class="w3-circle" src="https://cdn-icons-png.flaticon.com/512/1139/1139756.png?w=826" id = "img_usuario" style="width:96px;height:96px">
                </div>
                <div class="w3-col m10 w3-container">
                    <h4 class = "nome_usuario"><?php echo $nome_usuario ?><span class="w3-opacity w3-medium" id = "data_post"><?php echo $data_post ?></span></h4>
                    <p class = "mensagem"><?php echo $mensagem ?></p><br>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>  
                </div>
            </div>
            <div class="w3-panel w3-border-left w3-border-red  w3-pale-red w3-opacity w3-hover-opacity-off" style="width:70%; margin-left: 150px; margin-bottom: 100px;"><h4 >RESPOSTA DO PROFESSOR <span class="w3-opacity w3-medium">17/04/2022</span></h4>
                <p><em>"Com certeza, podemos marcar aulas extras para você fazer, basta me dizer os dias e horários que você tem disponível"</em></p><br>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>
            </div>
            <hr><br>
            <div class="w3-row">
                <div class="w3-col m2 text-center">
                    <img class="w3-circle" src="https://img.freepik.com/vetores-gratis/gato-ninja-fofo-com-seu-laptop_332004-309.jpg?w=826" id = "img_usuario" style="width:96px;height:96px">
                </div>
                <div class="w3-col m10 w3-container">
                    <h4 class = "nome_usuario"><?php echo $nome_usuario ?><span class="w3-opacity w3-medium" id = "data_post"><?php echo $data_post ?></span></h4>
                    <p class = "mensagem"><?php echo $mensagem ?></p><br>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>
                </div>
            </div>
            <div class="w3-panel w3-border-left w3-border-red  w3-pale-red w3-opacity w3-hover-opacity-off" style="width:70%; margin-left: 150px; margin-bottom: 100px;"><h4 >RESPOSTA DO PROFESSOR <span class="w3-opacity w3-medium">15/04/2022</span></h4>
                <p><em>"Boa idéia Felipe!! Desta forma vocês podem se orientar melhor. Entrarei em contato com a nossa equipe, obrigado pela sugestão"</em></p><br>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>
            </div>
            <hr><br>
            <div class="w3-row">
                <div class="w3-col m2 text-center">
                    <img class="w3-circle" src="https://cdn-icons-png.flaticon.com/512/1154/1154437.png?w=826" id = "img_usuario" style="width:96px;height:96px">
                </div>
                <div class="w3-col m10 w3-container">
                    <h4 class = "nome_usuario"><?php echo $nome_usuario ?><span class="w3-opacity w3-medium" id = "data_post"><?php echo $data_post ?></span></h4>
                    <p class = "mensagem"><?php echo $mensagem ?></p><br>
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button><br>
                </div>
            </div>
            <div class="w3-panel w3-border-left w3-border-red  w3-pale-red w3-opacity w3-hover-opacity-off" style="width:70%; margin-left: 150px; margin-bottom: 100px;"><h4 >RESPOSTA DO PROFESSOR <span class="w3-opacity w3-medium">13/04/2022</span></h4>
                <p><em>"Sim!! Existem vários tipos, mas veremos mais sobre esse assunto na próxima aula, então pode ficar tranquila que vou explicar tudo. E se você ficar com dúvida pode perguntar de novo"</em></p><br>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> Gostei</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> Comentar</button>
            </div>
            <button class="w3-button w3-right w3-black">Próxima página &raquo;</button>
        </div>
        <hr>
 
        <div class="w3-container" style="padding:65px">
            <h3>ESTATÍSTICAS</h3>
            <p>Novos Estudantes</p>
            <div class="w3-grey">
                <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
            </div>
 
            <p>Comentários</p>
            <div class="w3-grey">
                <div class="w3-container w3-center w3-padding w3-blue" style="width:50%">50%</div>
            </div>
 
            <p>Respostas</p>
            <div class="w3-grey">
                <div class="w3-container w3-center w3-padding w3-purple" style="width:52%">52%</div>
            </div>
        </div>
        <a href="#menu-estudante" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Volte ao topo</a>    
    </div>
</body>
</html>


