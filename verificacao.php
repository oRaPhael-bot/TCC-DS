<?php
session_start();
if(!$_SESSION['txtUsuario']){
    header('Location: telaLogin.php');
    exit();
}