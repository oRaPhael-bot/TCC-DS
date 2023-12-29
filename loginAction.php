    <?php
    session_start();
    include('conexaoBD.php');

    if(!empty($_POST['usuario']) || !empty($_POST['senha'])){
        header('location: telaLogin.php');
        exit();
    }

            
    $usuario = mysqli_real_escape_string($conexao, $_POST['txtUsuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['txtSenha']);
    $tipo = mysqli_real_escape_string($conexao, $_POST['Tipo']);
            

    $query = "select id_cadastro, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}') and tipo_usuario = '{$tipo}';";
    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);
    

    if($row == 1){
        $_SESSION['txtUsuario'] = $usuario;
        if($tipo == "prof"){
            header('Location: menuProf.php'); 
        } elseif($tipo == "aluno"){
            header('Location: menuEstudante.php'); 
        } else{
            header('Location: telaLogin.php'); 
        }

        exit();        
    } else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: telaLogin.php');
        exit();
    }
        
?>