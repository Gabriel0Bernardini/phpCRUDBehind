<?php
    include_once("conexao.php");


    if(isset($_GET["Id"])){
        $Id = $_GET["Id"];

        $sql = "DELETE FROM tbpatch WHERE Id = $Id";

        if($conn->query($sql) == TRUE){
            ?>
            <script>
                alert("Patch excluído com sucesso.");
                window.location = "patchNotes.php";
            </script> 
            <?php
        }else{
            ?>
            <script>
                alert("Erro ao excluir Patch.");
                window.location = "patchNotes.php";
            </script>
            <?php
        }

    }

    


?>