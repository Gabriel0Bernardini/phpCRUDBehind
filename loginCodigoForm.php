<?php
    require_once("conexao.php");

    session_start();

    //receber o usuario e senha  vindo do login
    $email= $conn->real_escape_string($_POST["txtEmail"]);
    $senha=$_POST["txtSenha"] ;

    $sql = "SELECT * FROM tbusuario 
    WHERE EmailUsuario = '$email' 
    AND SenhaUsuario= '$senha' ";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $dados_usuario = $resultado->fetch_assoc();

        $_SESSION["usuario"] = $dados_usuario["EmailUsuario"];
        $_SESSION["nick"] = $dados_usuario["NickUsuario"];
        $_SESSION["tipo"] = $dados_usuario["TipoUsuario"];
        header("location: selectUsuario.php");
    }else{
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
    }
?>