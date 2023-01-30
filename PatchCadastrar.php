<?php
require_once("conexao.php");
session_start();

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
<br><br><br>


<form class="form1" action="insertPatchNotes.php" id = "insertPatchNotes" method="post">
    <div class="form-group">
        <label for="txtNome">Nome do jogo</label>
        <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Behind The Bushes ">
    </div>
    <br>    
    <div class="form-group">
        <label for="txtVersao">Versão do Jogo(Após esse update)</label>
        <input type="number" step="0.01" class="form-control" id="txtVersao" name="txtVersao" placeholder="1.6"> 
    </div>
    <br>
    <div class="form-group">
        <label for="txtDesc">Descrição do patch</label>
        <textarea class="form-control" id="txtDesc" name="txtDesc" 
        placeholder="-Atualição da arma 
-O mapa foi aumentado
-Os bugs foram concertados"
        rows="4" ></textarea>
    </div>
    <br>
    <div class="form-group">
        <label for="txtData">Data do update</label>
        <input type="date" class="form-control" id="txtData" name="txtData" placeholder="dd/mm/yyyy">
    </div>
    <br>
    <input type="submit" value="Cadastrar" name="btnCadastrar" class="btn btn-success" style="width: 10% ; margin-right:1.5% ; margin-left:1%" >
    <input type="reset" value="Cancelar" name="btnCancelar" class="btn btn-danger" style="width: 10%;">
            
</form>



</body>
</html>