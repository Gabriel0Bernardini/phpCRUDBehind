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


<form class="form1" action="insert.php" id = "insertPatchNotes.php" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome do jogo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Behind The Bushes ">
    </div>
    <br>    
    <div class="form-group">
        <label for="exampleFormControlInput2">Versão do Jogo(Após esse update)</label>
        <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="1.6"> 
    </div>
    <br>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição do patch</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" 
        placeholder="-Atualição da arma 
-O mapa foi aumentado
-Os bugs foram concertados"
        rows="4"></textarea>
    </div>
    <br>
    <div class="form-group">
        <label for="exampleFormControlInput3">Data do update</label>
        <input type="date" class="form-control" id="exampleFormControlInput3" placeholder="dd/mm/yyyy">
    </div>
    <br>
    <input type="button" value="Cadastrar" name="btnCadastrar" class="btn btn-success" style="width: 10% ; margin-right:1.5% ; margin-left:1%" >
    <input type="reset" value="Cancelar" name="btnCancelar" class="btn btn-danger" style="width: 10%;">
            
</form>



</body>
</html>