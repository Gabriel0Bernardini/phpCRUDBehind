<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Nav</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="Indexstyle.css" rel="stylesheet">
    <link href="editarStyle.css" rel="stylesheet">
    <link href="cadastroStyle.css" rel="stylesheet">
</head>
<body>
<style>
  .link{
    text-decoration: none;
    color: white;
    font-family: 'DogicaBold';
    font-size: 22px;
    margin-left: 5px;
  }
</style>

<nav class="navbar"  style="background: rgb(4, 64, 3);">
  <div class="container-fluid" style="justify-content:right ;">
    <h1 style="color:white;margin-right:27%;margin-left:23%;margin-bottom:1%;padding-top: 1%;">Behind The Bushes</h1>
    <button class="navbar-toggler" style="background-image: url(Images/woodenTexture.jpg);" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
<div class="collapse" id="navbarToggleExternalContent">
<div class="p-4 link" style="display: block; ">
    <a href="index.php" class="link">Home</a> 
    <a href="cadastro.php" class="link">Cadastro</a>
    <a href="login.php" class="link">Login</a>
    <a href="selectUsuario.php" class="link">Usuarios Cadastrados</a>
  </div> 
</div>
</nav>
</body>
</html>