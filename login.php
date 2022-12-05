<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Behind The Bushes</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="LoginStyle.css">
    <link rel="stylesheet" href="navTituloStyle.css">
    <link rel="stylesheet" href="CadastroStyle.css">
</head>
<body>

<?php
    require_once("nav.php");
?>

    <div class = "container1" style="margin-top:6%">
        <div class="div1" >
            <p class="p1" >Login</p>
            <form class="form1" action="loginCodigoForm.php" method="post">
                <label for="txtEmail">E-mail:</label><br>
                <input type="text" id="txtEmail" name="txtEmail" class="input1"  placeholder ="Digite o e-mail" required><br>

                <label for="txtSenha">Senha:</label><br>
                <input type="password" id="txtSenha" name="txtSenha" class="input1"  placeholder ="Digite a senha" required><br>

                <input type="submit" value="Logar" nome="btnCadastrar" class="BotaoCadastrar">
                <input type="reset" value="Cancelar" nome="btnCancelar" class="BotaoCadastrar">
            </form>

            <p class="p2">Se você ainda não tem um cadastro <a href="cadastro.php" style="color: rgb(4, 116, 4);;">clique aqui para se cadastrar</a></p>
        
        </div>
    </div>
</body>
</html>