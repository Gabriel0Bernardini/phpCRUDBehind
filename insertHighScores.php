<?php
  require_once("conexao.php");
  session_start();

  
?>


<?php  
    $id = $_SESSION["id"];
    $highscore = $_GET["txtHighScore"];

    $sql = "update tbusuario set HighScore=$highscore
    WHERE Id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pontuação inserida com sucesso!');</script>";
        echo "<script>window.location = 'ListaPontuacoes.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
    }
    $conn->close();
?>