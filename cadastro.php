<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Behind The Bushes</title>
    <link rel="stylesheet" href="CadastroStyle.css">
</head>
<body>
    <p style="margin-left:-86%">
    <a href="index.php" style="background-color: black; ">
    <img src="Images/WoodenSign.png" style="height: 100px;">
    </a></p>
    <style>
        
    </style>
    <div class = "container1">
        <div class="div1">
            <p class="p1" >Cadastro</p>
            <form class="form1" action="insert.php" method="post">
                <label for="txtNome" >Primeiro nome:</label><br>
                <input type="text" id="txtNome" name="txtNome" class="input1" style="margin-top: 3px;font-family:'DogicaBold';" required><br>
                
                <label for="txtSobrenome" >Sobrenome:</label><br>
                <input type="text" id="txtSobrenome" name="txtSobrenome" class="input1" style="font-family:'DogicaBold';" required><br>

                <label for="txtNick">Nickname:</label><br>
                <input type="text" id="txtNick" name="txtNick" class="input1" style="font-family:'DogicaBold';" required><br>

                <label for="txtEmail">E-mail:</label><br>
                <input type="text" id="txtEmail" name="txtEmail" class="input1" style="font-family:'DogicaBold';"><br>

                <label for="txtSenha">Senha:</label><br>
                <input type="password" id="txtSenha" name="txtSenha" class="input1" style="font-family:'DogicaBold';"><br>

                <label for="ConfirmSenha"> Confirme a senha:</label><br>
                <input type="password" id="ConfirmSenha" name="ConfirmSenha" class="input1" style="font-family:'DogicaBold';"><br>

                <input type="submit" value="Cadastrar" nome="btnCadastrar" class="BotaoCadastrar">
            </form>

            <p class="p2">Se você já tem um cadastro <a href="login.php" style="color: rgb(4, 116, 4);;">clique aqui para fazer login</a></p>
        </div>
    </div>
</body>
</html>