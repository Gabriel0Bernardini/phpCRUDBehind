<?php
    include_once"conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editarStyle.css">
</head>
<body>
    
    <p style="margin-left:-86%">
    <a href="index.php" style="background-color: black; ">
    <img src="Images/WoodenSign.png" style="height: 100px;">
    </a></p>

    <?php
        if(isset($_GET["Id"])){
            $Id = $_GET["Id"];
            $sql = "SELECT * FROM tbusuario WHERE Id = $Id";
            $consulta = $conn->query($sql);
            $usuario = $consulta ->fetch_assoc();            
        }
    ?>

  
    <div class = "container1">
        <div class="div1">
            <p class="p1" >Editar</p>
            <form class="form1" action="editarPessoa.php?Id=<?php echo $_GET['Id'] ?>" method="post">
                <label for="txtNome" >Primeiro nome:</label><br>
                <input type="text" id="txtNome" name="txtNome" class="input1"  value="<?php echo $usuario["NomeUsuario"]?>" style="margin-top: 3px;font-family:'DogicaBold';" required><br>
                
                <label for="txtSobrenome" >Sobrenome:</label><br>
                <input type="text" id="txtSobrenome" name="txtSobrenome" class="input1" value="<?php echo $usuario["SobrenomeUsuario"]?>" style="font-family:'DogicaBold';" required><br>

                <label for="txtNick">Nickname:</label><br>
                <input type="text" id="txtNick" name="txtNick" class="input1" value="<?php echo $usuario["NickUsuario"]?>" style="font-family:'DogicaBold';" required><br>

                <label for="txtEmail">E-mail:</label><br>
                <input type="text" id="txtEmail" name="txtEmail" class="input1"  value="<?php echo $usuario["EmailUsuario"]?>" style="font-family:'DogicaBold';"><br>

                <label for="TipoUsuario"> Selecione o tipo de usuário:</label><br>
                <input type="radio"  name="TipoUsuario" value="ADMIN" class="input1" style="font-family:'DogicaBold';" <?php echo("ADMIN"==$usuario["TipoUsuario"])?"checked":"" ?>>ADMIN
                <input type="radio" name="TipoUsuario" value="COMUM" class="input1" style="font-family:'DogicaBold';" <?php echo("COMUM"==$usuario["TipoUsuario"])?"checked":"" ?>>COMUM

                <input type="submit" value="Editar" nome="btnCadastrar" class="BotaoCadastrar">
                <input type="reset" value="Cancelar" nome="btnCancelar" class="BotaoCadastrar">
            </form>

            <p class="p2">Para voltar a home do site <a href="index.php" style="color: rgb(4, 116, 4);">clique aqui</a></p>
        </div>
    </div>
</body>
</html>