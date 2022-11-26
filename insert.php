<?php
    include 'conexao.php';
    $nome = $_POST["txtNome"];
    $sobrenome = $_POST["txtSobrenome"];
    $nick = $_POST["txtNick"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];
    $tipo = $_POST["TipoUsuario"];

    $sql = "INSERT INTO tbusuario (NomeUsuario, SobrenomeUsuario, NickUsuario, EmailUsuario, SenhaUsuario, TipoUsuario)
    VALUES ('" . $nome . "', '" . $sobrenome . "','" . $nick . "','" .$email ."','" . $senha . "','" . $tipo . "')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        echo "<script>window.location = 'index.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
    }
    $conn->close();
?>