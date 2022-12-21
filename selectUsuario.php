<?php
    require_once("conexao.php")
?>

<!DOCTYPE html>
<html lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title> 
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

<?php
    require_once("nav.php");
?>
    <h1 style="margin-top: 5%;">Lista de Usuários cadastrados</h1>

    <?php

        $sql = "SELECT * FROM tbusuario order by Id";

        $dadosUsuario = $conn->query($sql);

        if($dadosUsuario->num_rows > 0){
            ?>
        <table class="table table-dark table-striped">
            <tr class="table-active"> 
                <th>Id</th>
                <th>Nickname</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Tipo de Usuário</th>
                <th>Highscore</th>
                <th style="text-align: center;padding-right: 50px;">Editar</th>
                <th style="text-align: center;padding-right: 50px;">Excluir</th>
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
                <td><?php echo $exibir["SenhaUsuario"]?></td>
                <td><?php echo $exibir["TipoUsuario"]?></td>
                <td><?php echo $exibir["HighScore"]?></td>
                <td style="text-align: center;padding-right: 50px;"><a href="editarUsuario.php?Id=<?php echo $exibir["Id"] ?>"><i class="fa-solid fa-trash-can" style="color: white;"></i></a></td>
                <td style="text-align: center; padding-right: 50px;">
                    <a href="#" onclick="confirmarExclusao(
                    '<?php echo $exibir["Id"] ?>',
                    '<?php echo $exibir["NomeUsuario"] ?>',
                    '<?php echo $exibir["SobrenomeUsuario"]?>')"><i class="fa-solid fa-user-pen" style="color:white"></i></a>
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