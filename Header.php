<?php
  require_once("conexao.php");
  session_start();
  
?>


<link href="headerStyle.css" rel="Stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script>
<link href="HeaderJs.js" >
</script>
<header class="cabecalho" id="myHeader"> <img src="Images/BehindTheBushesTitle2.png" class="logoimg">
<?php 
  if(isset($_SESSION["email"]) ){?>
  <p class="MensagemUsuario">Bem vindo (a), <?php echo $_SESSION["nick"]?>!<br><br> Tipo de Usuario: <?php echo $_SESSION["tipo"]?></p>
<?php } ?>
  <ul class="headerUL" style="padding-top: 1%;">
    <li class="headerLI"><a href="index.php" class="link aNavLink">Home</a></li>
    <li class="headerLI"><a href="ListaPontuacoes.php" class="link aNavLink">HighScores</a></li>
    <li class="headerLI"><a href="patchNotes.php" class="link aNavLink">PatchNotes</a></li>

    <?php if(!(isset($_SESSION["email"]))){ ?>
      <li class="headerLI"><a class="link aNavLink" href="cadastroUsuarioComum.php">Cadastro</a></li>
      <?php } else{
         if((isset($_SESSION["email"])) && ($_SESSION["tipo"]==="ADMIN")){
          ?> <li class="headerLI"><a class="link aNavLink" href="cadastro.php">Cadastro</a></li><?php
        }
      }
    ?>
   
    <?php
      if(!(isset($_SESSION["email"]))){
    ?>
    <li class="headerLI"><a href="login.php" class="link aNavLink">Login</a></li>
    <?php
      }else{ 
    ?>
    <li class="headerLI"><a onclick="goBack()" class="link aNavLink1">Logout</a></li>
    <?php 
      }
      if((isset($_SESSION["email"])) && ($_SESSION["tipo"]==="ADMIN")){
        
    ?>
      <li class="headerLI"><a href="selectUsuario.php" class="link aNavLink">Usuários</a></li>
    <?php 
    }
    ?>
    
    <?php
    //<li class="headerLI"><a href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x icones aNavLink"></i></a></li>
    //<li class="headerLI"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x icones aNavLink"></i></a></li>
    //<li class="headerLI"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-2x icones aNavLink"></i></a></li>
    ?>
  </ul>
  
</header>
<script>
  function goBack() {
  var confirmation = confirm("Voce tem certeza que deseja deslogar?");
  if (confirmation === true) {
    window.location = "logout.php";
  }
}
</script>
