<?php
    include_once("conexao.php");


    if(isset($_GET["Id"])){
        $Id = $_GET["Id"];

        $sql = "DELETE FROM tbusuario WHERE Id = $Id";

        if($conn->query($sql) == TRUE){
            ?>
            <script>
                alert("Usuário excluído com sucesso.");
                window.location = "selectUsuario.php";
            </script> 
            <?php
        }else{
            ?>
            <script>
                alert("Erro ao excluir usuário.");
                window.location = "selecionarPessoa.php";
            </script>
            <?php
        }

    }

    


?>