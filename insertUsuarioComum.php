<?php
  require_once("conexao.php");
  session_start();

  
?>


<?php
    include 'conexao.php';
    $nome = $_POST["txtNome"];
    $sobrenome = $_POST["txtSobrenome"];
    $nick = $_POST["txtNick"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];

    $sql = "INSERT INTO tbusuario (NomeUsuario, SobrenomeUsuario, NickUsuario, EmailUsuario, SenhaUsuario, TipoUsuario)
    VALUES ('" . $nome . "', '" . $sobrenome . "','" . $nick . "','" .$email ."','" . $senha . "','COMUM')";
    
    if ($conn->query($sql) === TRUE) {
        //echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
        $_SESSION["email"] = $email;
        $_SESSION["nick"] = $nick;
        $_SESSION["tipo"] = "COMUM";
        echo "<script>window.location = 'index.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
    }
    $conn->close();
?>