<?php
    define('HOST', 'localhost');//define o nome do servidor
    define('USER', 'root');; //nome do usuário
    define('PASSWORD', ''); //define a senha de acesso ao BD
    define('DB', 'bdBehind'); //define o nome do Banco de Dados

    $conn = new mysqli(HOST, USER, PASSWORD, DB);//Cria um objeto de conexão

    if ($conn->connect_error) {//Checa a conexão
        die("Falha na conexão: " . $conn->connect_error); //retorna o erro
    }
?>
