<!DOCTYPE html>
<html lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="selectStyle.css">    
</head>
<?php
    include_once("conexao.php")
?>
<body>
    <h1>Lista de Usuários cadastrados</h1>

    <?php

        $sql = "SELECT * FROM tbusuario order by id";

        $dadosUsuario = $conn->query($sql);

        if($dadosUsuario->num_rows > 0){
            ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Nickname</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Tipo de Usuário</th>
                <th>Highscore</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </table>

    <?php
    while($exibir = $dadosUsuario->fetch_assoc()){
        
    }

    }


    ?>
</body>
</html>