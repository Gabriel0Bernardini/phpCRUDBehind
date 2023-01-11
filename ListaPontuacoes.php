<?php
    require_once("conexao.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista HighScore</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="ListaPontuacoesStyle.css">
</head>
<body>
   <?php
        require_once("Header.php");
   ?>
   <br>
    <div class = "container1">
        <div class = "div1">
            <p class="p1">Lista de HighScores</p>
            <?php

             $sql = "SELECT * FROM tbusuario order by HighScore DESC";

            $dadosUsuario = $conn->query($sql);

            if($dadosUsuario->num_rows > 0){
            ?>
                <table class="table table-dark table-striped">
                    <tr class="table-active">
                        <th>Id</th>
                        <th>Nickname</th>
                        <th>HighScore</th>
                    </tr>
                
            
                <?php
                    while($exibir = $dadosUsuario->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $exibir["Id"]?></td>
                        <td><?php echo $exibir["NickUsuario"]?></td>
                        <td><?php echo $exibir["HighScore"]?></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>