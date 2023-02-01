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

    <link href="patchNotesStyle.css" rel="stylesheet">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/font-awesome.min.css">
    <title>Patch Notes</title>
</head>
<body>
<?php
    include("Header.php");
?>
<br><br><br><br><br>


<?php

    $sql = "SELECT * FROM tbpatch order by VersaoPatch DESC";

    $dadosPatch= $conn->query($sql);

    if($dadosPatch->num_rows > 0){
        ?>
    <div class="container1">
        <div class="div2">
            <h1 class="p2">Patch Notes 
            <?php
            if((isset($_SESSION["email"])) && ($_SESSION["tipo"]==="ADMIN")){
        ?>     <a href="PatchCadastrar.php" style="text-decoration:none"><i class="fa-sharp fa-solid fa-circle-plus" style="color: black;"></i></a>
         <?php
        }
        ?>
        </h1>
            
    <?php
    while($exibir = $dadosPatch->fetch_assoc()){
    ?>
    <div class="div3">
    <dl class="dl1">
        <dt class="dt1" > <?php echo $exibir["NomeJogo"]?> versão <?php echo $exibir["VersaoPatch"]?><p class="pData"><i class="fa-solid fa-calendar-days" style="color: rgb(4,40,3);"></i> <?php echo $exibir["DataPatch"]?></p></dt>
        <dd class="dd1"><pre><?php echo $exibir["DescricaoPatch"]?></pre></dd>
        <?php
            if((isset($_SESSION["email"])) && ($_SESSION["tipo"]==="ADMIN")){
        ?>   
        <dd class="dd2">
            <a href="#"onclick="confirmarExclusao(
                    '<?php echo $exibir['Id'] ?>',
                    '<?php echo $exibir['NomeJogo'] ?>',
                    '<?php echo $exibir['VersaoPatch']?>')">
                <button type="button" class="btn btn-danger">
                    <i class="fa-solid fa-trash-can" style="color:white"></i> Deletar Patch
                </button>
            </a>
            <a href="editarPatch.php"  >
            <button type="button" class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square" style="color: white;"></i> Editar Patch
            </button>
            </a>
        <?php
        }
        ?>
    </dl>
    </div>
    <?php
            }
    ?>
        </div>
    </div>
    <?php
    
        }
        ?>

</body>
<script>
    function confirmarExclusao(id, nome, versao){
        if(window.confirm("Deseja realmente excluir o Patch:\n"+id+" - "+nome+" v"+ versao)){
            window.location = "excluirPatch.php?Id="+id;
        }   
    }
</script>
</html>