<!DOCTYPE html>
<html lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="selectStyle.css">   
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
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
        <table class="table table-dark">
            <tr class="table-active"> 
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
        

        <?php
        while($exibir = $dadosUsuario->fetch_assoc()){
        ?>
        
            <tr>
                <td><?php echo $exibir["Id"]?></td>
                <td><?php echo $exibir["NickUsuario"]?></td>
                <td><?php echo $exibir["NomeUsuario"]?></td>
                <td><?php echo $exibir["SobrenomeUsuario"]?></td>
                <td><?php echo $exibir["EmailUsuario"]?></td>
                <td><?php echo $exibir["TipoUsuario"]?></td>
                <td><?php echo $exibir["HighScore"]?></td>
                <td><a href="#">Editar</a></td>
                <td>
                    <a href="#" onclick="confirmarExclusao(
                    '<?php echo $exibir["Id"] ?>',
                    '<?php echo $exibir["NomeUsuario"] ?>',
                    '<?php echo $exibir["SobrenomeUsuario"]?>')">Excluir</a>
                </td>
            </tr>
        
        <?php
                }
        ?>

        </table>

        <?php
        
            }
        ?>

</body>
<script>
    function confirmarExclusao(id, nome, sobrenome){
        if(window.confirm("Deseja realmente excluir o Usuário:\n"+id+" -  "+nome+""+ sobrenome)){
            window.location = "excluirUsuario.php?Id="+id;
        }   
    }
</script>
</html>