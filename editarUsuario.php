<?php
  require_once("conexao.php");
  session_start();

  
?>


<?php
    include_once"conexao.php";

    if(isset($_POST["txtNome"])){
        $nome = $_POST["txtNome"];
        $sobrenome = $_POST["txtSobrenome"];
        $nick = $_POST["txtNick"];
        $email = $_POST["txtEmail"];
        $tipo = $_POST["TipoUsuario"];

        $sql = "UPDATE tbusuario
                SET NomeUsuario = '".$nome."',
                SobreNomeUsuario = '".$sobrenome."',
                NickUsuario = '".$nick."',
                EmailUsuario = '".$email."',
                TipoUsuario = '".$tipo."' 
                WHERE Id =" .$_GET["Id"];

        if($conn->query($sql)==TRUE){
            ?>
            <script>
                alert("Usuario atualizado com sucesso!");
                window.location = "selectUsuario.php";
            </script>
            <?php
        }else{
            echo "Erro ao atualizar Usuário: " . $sql . "<br>" . $conn->error;
            echo "<script>window.history.back();</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editarStyle.css">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navTituloStyle.css">
</head>
<body>
    
    <?php
        require_once("Header.php");
    ?>


    <?php
        if(isset($_GET["Id"])){
            $Id = $_GET["Id"];
            $sql = "SELECT * FROM tbusuario WHERE Id = $Id";
            $consulta = $conn->query($sql);
            $usuario = $consulta ->fetch_assoc();            
        }
    ?>

  
    <div class = "container1">
        <div class="div1" >
            <p class="p1" >Editar</p>
            <form class="form1" action="editarUsuario.php?Id=<?php echo $_GET['Id'] ?>" method="post">
                <label for="txtNome" >Primeiro nome:</label><br>
                <input type="text" id="txtNome" name="txtNome" class="input1"  value="<?php echo $usuario["NomeUsuario"]?>" style="margin-top: 3px;font-family:'DogicaBold';" required><br>
                
                <label for="txtSobrenome" >Sobrenome:</label><br>
                <input type="text" id="txtSobrenome" name="txtSobrenome" class="input1" value="<?php echo $usuario["SobrenomeUsuario"]?>" style="font-family:'DogicaBold';" required><br>

                <label for="txtNick">Nickname:</label><br>
                <input type="text" id="txtNick" name="txtNick" class="input1" value="<?php echo $usuario["NickUsuario"]?>" style="font-family:'DogicaBold';" required><br>

                <label for="txtEmail">E-mail:</label><br>
                <input type="text" id="txtEmail" name="txtEmail" class="input1"  value="<?php echo $usuario["EmailUsuario"]?>" style="font-family:'DogicaBold';" required><br>

                <label for="TipoUsuario"> Selecione o tipo de usuário:</label><br>
                <input type="radio"  name="TipoUsuario" value="ADMIN" class="input1" style="font-family:'DogicaBold';" <?php echo("ADMIN"==$usuario["TipoUsuario"])?"checked":"" ?>>ADMIN
                <input type="radio" name="TipoUsuario" value="COMUM" class="input1" style="font-family:'DogicaBold';" <?php echo("COMUM"==$usuario["TipoUsuario"])?"checked":"" ?>>COMUM

                <input type="submit" value="Editar" nome="btnEditar" class="BotaoCadastrar">
                <input type="reset" value="Cancelar" nome="btnCancelar" class="BotaoCadastrar">
            </form>

            <p class="p2">Não tem uma conta? <a href="cadastro.php" style="color: rgb(4, 116, 4);">clique aqui para se cadastrar!</a></p>
        </div>
    </div>
</body>
</html>