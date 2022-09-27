<?php
    define('HOST', 'localhost');//define o nome do servidor
    define('USER', 'root');; //nome do usuário
    define('PASSWORD', ''); //define a senha de acesso ao BD
    define('DB', 'bdBehind'); //define o nome do Banco de Dados
    $conn = new mysqli(HOST, USER, PASSWORD, DB);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error); //retorna o erro
    }
?>
