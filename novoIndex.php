<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovoIndex</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="novoIndexEstilo.css" rel="Stylesheet">
</head>
<body>
<?php
    include("Header.php");
?>
<br>    
<div id="carouselExampleFade" class=" carousel slide carousel-fade " data-bs-ride="carousel" style="width: 46%;margin-left:2%;margin-top: 9%;
    border-radius: 50px; 
    border-style: solid;
    border-width: 5px; 
    border-color: rgb(1, 19, 5);
    box-shadow: 5px 10px 30px 10px rgb(0, 17, 4), 5px 10px 30px 10px rgb(2, 63, 16);">
  <div class="carousel-inner" style="border-radius: 45px;">
    <div class="carousel-item active">
      <img src="Images/Slide1.jpeg" class="d-block w-100 active" alt="Slide do Jogo 1" >
    </div>
    <div class="carousel-item">
      <img src="Images/Slide2.jpeg" class="d-block w-100" alt="Slide do Jogo 2">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide3.jpeg" class="d-block w-100" alt="Slide do Jogo 3">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide4.jpeg" class="d-block w-100" alt="Slide do Jogo 4">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide5.jpeg" class="d-block w-100" alt="Slide do Jogo 5">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide6.jpeg" class="d-block w-100" alt="Slide do Jogo 6">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide7.jpeg" class="d-block w-100" alt="Slide do Jogo 7">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</body>
</html>