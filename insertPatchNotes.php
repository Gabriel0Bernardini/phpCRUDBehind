<?php
  require_once("conexao.php");
  session_start();

  
?>


<?php
    include 'conexao.php';
    $nome = $_POST["txtNome"];
    $versao = $_POST["txtVersao"];
    $desc = $_POST["txtDesc"];
    $data = $_POST["txtData"];

    $sql = "INSERT INTO tbpatch (NomeJogo, VersaoPatch, DescricaoPatch, DataPatch)
    VALUES ('" . $nome . "', '" . $versao . "','" . $desc. "','" .$data . "')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Patch note inserido com sucesso!');</script>";
        echo "<script>window.location = 'patchNotes.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
        echo "<script>window.history.back();</script>";
    }
    $conn->close();
?>