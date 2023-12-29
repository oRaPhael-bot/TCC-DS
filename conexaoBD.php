<?php
    /*$servername = "localhost:81"; //tirar o :81 caso não tenha feito nenhuma alteração no usbws
    $username = "root";
    $password = "usbw"; //à sua escolha - tecnoclass
    $dbname = "bd_tecnoclass";
    $conexao = new mysqli($servername, $username, $password, $dbname);
    if ($conexao->connect_error){
        die("Connection failed: " . $conexao->connect_error);
    }
*/

    define('HOST', 'localhost:3307');
    define('USUARIO', 'root');
    define('SENHA', 'usbw');
    define('DB', 'bd_tecnoclass');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
