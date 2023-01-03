<?php
  require_once("conexao.php");
  session_start();

  
?>


<link href="headerStyle.css" rel="Stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


<header class="cabecalho"> <img src="Images/BehindTheBushesTitle2.png" class="logoimg">
  <p class="MensagemUsuario">Bem vindo (a), <?php echo $_SESSION["nick"]?>!</p>
  
  <a href="logout.php" title="logout"> Sair</a>  

  <ul class="headerUL" style="padding-top: 1%;">
    <li class="headerLI"><a href="index.php" class="link aNavLink">Home</a></li>
    <li class="headerLI"><a href="cadastro.php" class="link aNavLink">Cadastro</a></li>
    <li class="headerLI"><a href="login.php" class="link aNavLink">Login</a></li>
    <?php 
      if($_SESSION["tipo"] ==="ADMIN"){
    ?>
      <li class="headerLI"><a href="selectUsuario.php" class="link aNavLink">Usuários</a></li>
    <?php 
    }
    ?>
    <li class="headerLI"><a href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x icones aNavLink"></i></a></li>
    <li class="headerLI"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x icones aNavLink"></i></a></li>
    <li class="headerLI"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-2x icones aNavLink"></i></a></li>
  </ul>
  
</header>
