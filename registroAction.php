<?php
    session_start();
    include("conexaoBD.php");

    $usuario = mysqli_real_escape_string($conexao, $_POST['txtUsuario']);
    $senha = mysqli_real_escape_string($conexao, md5($_POST['txtSenha']));
    $tipo = mysqli_real_escape_string($conexao, $_POST['Tipo']);
            
    $sql = "select count(*) as total from usuario where usuario = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION['usuario_existe'] = true;
        header('Location: telaRegistro.php');
        exit;
    }

    $sql = "INSERT INTO usuario (usuario, senha, tipo_usuario) VALUES ('$usuario', '$senha', '$tipo')";

    if($conexao->query($sql) === TRUE){
        $_SESSION['status_cadastro'] = true;
    }

    $conexao->close();

    header('Location: telaRegistro.php');
    exit;
?>