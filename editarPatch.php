<?php
require_once("conexao.php");
session_start();

?>

<?php

    if(isset($_POST["txtNome"])){
        $nome = $_POST["txtNome"];
        $versao = $_POST["txtVersao"];
        $desc= $_POST["txtDesc"];
        $data = $_POST["txtData"];
        $novaData=date("d/m/Y", strtotime($data));

        $sql = "UPDATE tbpatch
                SET NomeJogo = '".$nome."',
                VersaoPatch= '".$versao."',
                DescricaoPatch = '".$desc."',
                DataPatch = '".$novaData."'
                WHERE Id =" .$_GET["Id"];

        if($conn->query($sql)==TRUE){
            ?>
            <script>
                alert("Patch Note atualizado com sucesso!");
                window.location = "patchNotes.php";
            </script>
            <?php
        }else{
            echo "Erro ao atualizar Patch Note: " . $sql . "<br>" . $conn->error;
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

    <link href="patchCadastrarStyle.css" rel="stylesheet">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    

    <title>Cadastrar Patch Notes</title>
</head>
<body>
<?php
if (isset($_SESSION["email"])){ 
    if($_SESSION["tipo"]==="COMUM"){
    require_once("PaginaUsuarioNaoPermitido.php");  
    }}  
?>
<?php
 include('Header.php')
?>

<?php
        if(isset($_GET["Id"])){
            $Id = $_GET["Id"];
            $sql = "SELECT * FROM tbpatch WHERE Id = $Id";
            $consulta = $conn->query($sql);
            $patch = $consulta ->fetch_assoc();          
            $data = $patch["DataPatch"];  
            list($dia, $mes, $ano) = explode("/", $data);
                $dataNova = $ano."-".$mes."-".$dia;
        }
    
    ?>


<br><br><br>


<form class="form1" action="editarPatch.php?Id=<?php echo $patch["Id"] ?>"id = "insertPatchNotes" method="post">
    <div class="form-group">
        <label for="txtNome">Nome do jogo</label>
        <input type="text" class="form-control" id="txtNome" value="<?php echo $patch["NomeJogo"]?>" name="txtNome" placeholder="Behind The Bushes ">
    </div>
    <br>    
    <div class="form-group">
        <label for="txtVersao">Versão do Jogo(Após esse update)</label>
        <input type="number" step="0.01" class="form-control" value="<?php echo $patch["VersaoPatch"]?>" id="txtVersao" name="txtVersao" placeholder="1.6"> 
    </div>
    <br>
    <div class="form-group">
        <label for="txtDesc">Descrição do patch</label>
        <textarea class="form-control" id="txtDesc" name="txtDesc" placeholder="-Atualição da arma 
-O mapa foi aumentado
-Os bugs foram concertados"
        rows="4"
        value=<PRE><?php echo $patch["DescricaoPatch"]?></textarea>
    </div>
    <br>
    <div class="form-group">
        <label for="txtData">Data do update</label>
        <input type="date" class="form-control" value="<?php echo $dataNova?>" id="txtData" name="txtData" placeholder="dd/mm/yyyy">
    </div>
    <br>
    <input type="submit" value="Editar" name="btnCadastrar" class="btn btn-success" style="width: 10% ; margin-right:1.5% ; margin-left:1%" ><a href="#" onclick="editarPatch('<?php echo $exibir['Id']?>')">
    <button type="button" onclick="location.href='patchNotes.php'" class="btn btn-danger" style="width: 10% ; margin-right:1.5% ; margin-left:1%">Cancelar</button>
  
            
</form>



</body>
</html>